@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')


<section class="auth py-4">
    <div class="container">
       
        <div class="row my-5">
            <div class="col-lg-10 mx-auto authBox">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-center justify-content-center">
                        {{-- <img src="{{ asset('assets/images/log in page 1.svg')}}" alt="" class="w-100"> --}}
                    </div>
                    <div class="col-lg-5"> 

                        
                        @if (isset($message))
                        <span class="login-head" role="alert">
                            <strong><p style="color: red">{{ $message }}</p></strong>
                        </span>
                        @endif
                         
                        <form method="POST" action="{{ route('register') }}" class="form-custom py-4">
                            @csrf
                            <div class="title text-center mb-5 txt-secondary">Create Account</div>

                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required placeholder="Name">
                                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>

                            <input type="hidden" name="hiddenid" value="{{ time() }}">

                            <div class="form-group">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" required placeholder="Phone Number">
                                @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required placeholder="Email">
                                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required placeholder="Password">
                                @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <input id="confirm_password" type="password" class="form-control"
                                    name="confirm_password" required placeholder="Confirm Password">
                            </div>

                            {{-- Math Captcha --}}
                            @php
                                $a = rand(1, 9);
                                $b = rand(1, 9);
                                session(['captcha_sum' => $a + $b]);
                            @endphp

                            <div class="form-group">
                                <label for="captcha">What is {{ $a }} + {{ $b }}?</label>
                                <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror"
                                    name="captcha" required placeholder="Enter the answer">
                                @error('captcha') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>

                            {{-- Honeypot field (bots usually fill this) --}}
                            <input type="text" name="website" value="" style="display:none">

                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn-theme bg-primary px-5 py-2">Sign up</button>
                            </div>

                        </form>

                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section> 

@endsection
