<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\ContactMail;
use App\Models\EmailContent;
use Mail;
use App\Mail\RegistrationMail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => 'required',
            'password' => ['required','min:6'],
            'confirm_password' => 'required|same:password',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $msg = EmailContent::where('title','=','user_registration_mail')->first()->description;
        $adminmail = ContactMail::where('id', 1)->first()->email;
        $contactmail = $data['email'];

            $array['contactmail'] = $contactmail;
            $array['name'] = $data['name'];
            $array['email'] = $data['email'];
            $array['message'] = $msg;
            $array['subject'] = "Welcome to Aidme";
            $array['from'] = 'do-not-reply@aidmeuk.com';
            $email = $data['email'];

            
            $a = Mail::to($contactmail)
                ->send(new RegistrationMail($array));
            
        if ($a) {
           
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'sur_name' => $data['name'],
                'password' => Hash::make($data['password']),
            ]);
            
        } else {
            return "Error";
        }
        
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'sur_name' => $data['surname'],
        //     'house_number' => $data['house_number'],
        //     'town' => $data['town'],
        //     'street_name' => $data['street_name'],
        //     'phone' => $data['phone'],
        //     'postcode' => $data['postcode'],
        //     'password' => Hash::make($data['password'])
        // ]);
    }

    
}
