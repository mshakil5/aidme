<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\ContactMail;
use App\Models\EmailContent;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
        return Validator::make(
            $data,
            [
                'name'              => ['required', 'string', 'max:255'],
                'email'             => ['required', 'email', 'max:255', 'unique:users,email'],
                'phone'             => [
                    'required',
                    'regex:/^07\d{9}$/', // UK mobile number pattern (starts with 07 + 9 digits)
                ],
                'password'          => ['required', 'min:6'],
                'confirm_password'  => ['required', 'same:password'],
                'hiddenid'          => ['required'],
                'captcha'           => [
                    'required',
                    function ($attribute, $value, $fail) {
                        if ((int)$value !== (int)session('captcha_sum')) {
                            $fail('The math captcha answer is incorrect.');
                        }
                    },
                ],
                'website' => ['max:0'], // honeypot must remain empty
            ],
            [
                // ✅ Custom error messages
                'name.required'             => 'Please enter your full name.',
                'name.max'                  => 'Your name may not be longer than 255 characters.',

                'email.required'            => 'Please enter your email address.',
                'email.email'               => 'Please provide a valid email address.',
                'email.unique'              => 'This email address is already registered.',

                'phone.required'            => 'Please enter your UK mobile number.',
                'phone.regex'               => 'Please enter a valid UK phone number (e.g., 07123456789).',

                'password.required'         => 'Please enter a password.',
                'password.min'              => 'Your password must be at least 6 characters long.',

                'confirm_password.required' => 'Please confirm your password.',
                'confirm_password.same'     => 'Passwords do not match.',

                'hiddenid.required'         => 'Invalid request. Please try again.',

                'captcha.required'          => 'Please solve the math question to prove you’re human.',

                'website.max'               => 'Spam detected. Please leave the honeypot field empty.',
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data)
    {
        if (!empty($data['website']) || empty($data['hiddenid'])) {
            abort(403, 'Unauthorized request.');
        }

        $emailContent = EmailContent::where('title', 'user_registration_mail')->first();
        $adminMail    = ContactMail::where('id', 1)->value('email');

        $mailData = [
            'contactmail' => $data['email'],
            'name'        => $data['name'],
            'email'       => $data['email'],
            'message'     => $emailContent->description ?? 'Welcome to Aidme!',
            'subject'     => 'Welcome to Aidme',
            'from'        => 'do-not-reply@aidmeuk.com',
        ];

        try {
            Mail::to($data['email'])->send(new RegistrationMail($mailData));
        } catch (\Exception $e) {
            \Log::error('Registration email failed: ' . $e->getMessage());
        }

        // Finally create user
        return User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'phone'     => $data['phone'],
            'sur_name'  => $data['name'],
            'clientid'  => time(),
            'password'  => Hash::make($data['password']),
        ]);
    }


    protected function newcreate(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'sur_name' => $data['name'],
            'clientid' => time(),
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function uregister(Request $request)
    {


        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => 'required',
            'password' => ['required','min:6'],
            'confirm_password' => 'required|same:password',
        ], [
            'name.required' => 'Name field required.',
            'email.unique' => 'The email has already been taken.',
            'email.required' => 'Email field required.',
            'phone.required' => 'Phone field required.',
            'password.required' => 'Password field required.',
            'confirm_password.same' => 'Password not matched.',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        $msg = EmailContent::where('title','=','user_registration_mail')->first()->description;
        $adminmail = ContactMail::where('id', 1)->first()->email;
        $contactmail = $email;

            $array['contactmail'] = $contactmail;
            $array['name'] = $name;
            $array['email'] = $email;
            $array['message'] = $msg;
            $array['subject'] = "Welcome to Aidme";
            $array['from'] = 'do-not-reply@aidmeuk.com';
            
            $a = Mail::to($contactmail)
                ->cc($adminmail)
                ->send(new RegistrationMail($array));
            
        if ($a) {
           
            // $user = User::create([
            //     'name' => $name,
            //     'email' => $email,
            //     'phone' => $phone,
            //     'sur_name' => $name,
            //     'clientid' => time(),
            //     'password' => Hash::make($request->password),
            // ]);
            // return $user;


            $data = $request->all();
            $check = $this->newcreate($data);
            

        } else {
            return "Error";
        }
        
    }

    
}
