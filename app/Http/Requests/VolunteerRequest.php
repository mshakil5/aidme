<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
{
    return [
        'name' => ['required', 'string', 'max:120'],
        'profession' => ['required', 'string', 'max:120'],
        'email' => ['required', 'email', 'max:190'],
        'phone' => ['required', 'regex:/^[0-9+\-\s()]{6,20}$/', 'max:20'],
        'dob' => ['required', 'date', 'before:' . now()->subYears(18)->toDateString()], // must be 18+
        'address' => ['required', 'string', 'max:255'],
        'print_name' => ['required', 'string', 'max:120'],
        'date' => ['required', 'date'],
        'agreed' => ['accepted'],
        'captcha_answer' => ['required', 'integer'],
        'website' => ['nullable', 'max:0'], // honeypot field
    ];
}

public function withValidator($validator)
{
    $validator->after(function ($validator) {
        // Honeypot protection
        if ($this->filled('website')) {
            $validator->errors()->add('website', 'Invalid form submission detected.');
        }

        // Math captcha check
        $expected = session('volunteer_captcha_sum');
        if (!is_null($expected)) {
            if ((int) $this->input('captcha_answer') !== (int) $expected) {
                $validator->errors()->add('captcha_answer', 'Incorrect answer to the math question. Please try again.');
            }
        } else {
            $validator->errors()->add('captcha_answer', 'Captcha has expired — please refresh the page and try again.');
        }
    });
}

public function messages()
{
    return [
        // Name
        'name.required' => 'Please enter your full name.',
        'name.string' => 'The name must be a valid text.',
        'name.max' => 'Your name may not exceed 120 characters.',

        // Profession
        'profession.required' => 'Please enter your profession.',
        'profession.string' => 'The profession must be valid text.',
        'profession.max' => 'Your profession may not exceed 120 characters.',

        // Email
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please provide a valid email address.',
        'email.max' => 'The email address may not exceed 190 characters.',

        // Phone
        'phone.required' => 'Please provide your contact number.',
        'phone.regex' => 'Please enter a valid phone number (only numbers, spaces, +, -, and brackets are allowed).',
        'phone.max' => 'The phone number may not exceed 20 characters.',

        // Date of birth
        'dob.required' => 'Please provide your date of birth.',
        'dob.date' => 'Please enter a valid date for your date of birth.',
        'dob.before' => 'You must be at least 18 years old to volunteer.',

        // Address
        'address.required' => 'Please enter your address.',
        'address.string' => 'The address must be valid text.',
        'address.max' => 'Your address may not exceed 255 characters.',

        // Print name
        'print_name.required' => 'Please enter your printed name.',
        'print_name.string' => 'The printed name must be valid text.',
        'print_name.max' => 'Your printed name may not exceed 120 characters.',

        // Date (signature date)
        'date.required' => 'Please provide the date of declaration.',
        'date.date' => 'Please enter a valid date.',

        // Terms agreement
        'agreed.accepted' => 'You must agree to the Terms & Conditions before submitting.',

        // Captcha
        'captcha_answer.required' => 'Please solve the math question before submitting.',
        'captcha_answer.integer' => 'The captcha answer must be a number.',

        // Honeypot (bot protection)
        'website.max' => 'Invalid form submission detected. Please try again.',

        // General fallback
        '*.required' => 'This field is required.',
    ];
}

}
