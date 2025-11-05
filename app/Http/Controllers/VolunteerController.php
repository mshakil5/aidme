<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerRequest;
use App\Models\Volunteer;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class VolunteerController extends Controller
{
    public function showForm(Request $request)
    {
        $a = rand(2, 9);
        $b = rand(2, 9);
        session(['volunteer_captcha_sum' => $a + $b, 'volunteer_captcha_q' => "{$a} + {$b} = ?"]);

        return view('frontend.volunteerform');
    }

    public function store(VolunteerRequest $request)
    {
        if ($request->filled('website')) {
            return back()->with('error', 'Invalid submission.')->withInput();
        }

        $contactMail = optional(\App\Models\ContactMail::find(1))->email ?? config('mail.from.address');

        $volunteer = new Volunteer();
        $volunteer->volunteerid = time();
        $volunteer->name = $request->name;
        $volunteer->email = $request->email;
        $volunteer->phone = $request->phone;
        $volunteer->profession = $request->profession;
        $volunteer->address = $request->address;
        $volunteer->print_name = $request->print_name;
        $volunteer->date = $request->date;
        $volunteer->dob = $request->dob;
        $volunteer->status = 0;

        try {
            $volunteer->save();

            $array = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => 'Volunteer Registration Form',
                'message' => "New volunteer registration from {$request->name}",
                'contactmail' => $contactMail,
            ];

            try {
                Mail::to($contactMail)->send(new ContactFormMail($array));
            } catch (\Throwable $e) {
                Log::warning('Volunteer mail sending failed: '.$e->getMessage());
            }

            session()->forget(['volunteer_captcha_sum', 'volunteer_captcha_q']);

            return redirect()->route('volunteers.form')
                ->with('message','Registration successful. Thank you!');

        } catch (\Throwable $e) {
            Log::error('Volunteer save failed: '.$e->getMessage());
            return back()->with('error','Registration failed — please try again later.')->withInput();
        }
    }
}
