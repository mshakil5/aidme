@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')

<style>
    .pagetitle{
        font-size: 30px;
    }

    .sectionTitle {
        font-size: 2rem;
        text-align: center;
        color: #000;
        font-family: 'poppins-bold';
        padding: 15px 0;
        margin-bottom: 50px;
        position: relative;
        display: inline-block;
        background: #fff;
        padding: 14px;
        }

        @media (max-width: 768px) {
        .sectionTitle::before {
            display: none;
        }
        }

        .services .items {
        height: 215px;
        overflow: hidden;
        position: relative;
        margin-bottom: 23px;
        border-radius: 4px;
        width: 100%;
        border-radius: 10px;
        }


        .items {
            border: 1px solid #ccc;
            padding: 10px;
            transition: transform 0.3s ease;
            background-color: #f0f0f0;
        }

        .items:hover {
            transform: scale(1.05);
        }

        .info {
            padding: 10px;
        }

        .name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .email,
        .address,
        .dob {
            margin-bottom: 5px;
        }




</style>



<section class="auth py-4">
    <div class="container">
       
        <div class="row my-5">
            <div class="col-lg-10 mx-auto authBox">
                <div class="row">
                    
                    <div class="title text-center txt-secondary">AidMeUK</div>
                    <small class="text-center mb-5">(Uniting for a better community)</small>
                        

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif



                    <h4 class="text-center">
                        <u style="text-decoration: underline;">Volunteer Registration Form</u>
                    </h4>
                    <div class="row">
                        <div class="col-lg-10  mx-auto">
                            <div class="pb-2 mb-2">
                                Our ref:
                            </div>
                            <form method="POST" action="{{ route('volunteers.store') }}" enctype="multipart/form-data" id="volunteerForm" novalidate>
                                @csrf

                                <!-- name -->
                                <div class="row mb-2">
                                    <div class="col-4">
                                        <label for="name" style="font-size: 23px">Name </label>
                                    </div>
                                    <div class="col-8">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required maxlength="120" autofocus>
                                        @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                </div>

                                <!-- profession -->
                                <div class="row mb-2">
                                    <div class="col-4"><label for="profession" style="font-size: 23px">Profession</label></div>
                                    <div class="col-8">
                                        <input id="profession" type="text" class="form-control @error('profession') is-invalid @enderror"
                                            name="profession" value="{{ old('profession') }}" required maxlength="120">
                                        @error('profession')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                </div>

                                <!-- email -->
                                <div class="row mb-2">
                                    <div class="col-4"><label for="email" style="font-size: 23px">Email</label></div>
                                    <div class="col-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required maxlength="190">
                                        @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                </div>

                                <!-- phone -->
                                <div class="row mb-2">
                                    <div class="col-4"><label for="phone" style="font-size: 23px">Tel</label></div>
                                    <div class="col-8">
                                        <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" value="{{ old('phone') }}" required maxlength="20" pattern="[0-9+\-\s()]{6,20}">
                                        @error('phone')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                </div>

                                <!-- dob -->
                                <div class="row mb-2">
                                    <div class="col-4"><label for="dob" style="font-size: 23px">Date of birth</label></div>
                                    <div class="col-8">
                                        <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror"
                                            name="dob" value="{{ old('dob') }}" required>
                                        @error('dob')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                </div>

                                <!-- address -->
                                <div class="row mb-2">
                                    <div class="col-4"><label for="address" style="font-size: 23px">Address</label></div>
                                    <div class="col-8">
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                            name="address" value="{{ old('address') }}" required maxlength="255">
                                        @error('address')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                </div>

                                <!-- print name -->
                                <div class="row mb-2">
                                    <div class="col-4"><label for="print_name" style="font-size: 23px">Print Name</label></div>
                                    <div class="col-8">
                                        <input id="print_name" type="text" class="form-control @error('print_name') is-invalid @enderror"
                                            name="print_name" value="{{ old('print_name') }}" required maxlength="120">
                                        @error('print_name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                </div>

                                <!-- date (signature date) -->
                                <div class="row mb-2">
                                    <div class="col-2"><label for="date" style="font-size: 23px">Date</label></div>
                                    <div class="col-4">
                                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror"
                                            name="date" value="{{ old('date') }}" required>
                                        @error('date')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                </div>

                                <!-- terms checkbox -->
                                <div class="col-lg-12 mt-3">
                                    <p class="para mb-3 text-muted fs-6">
                                        <input type="checkbox" name="agreed" value="1" class="me-2" required {{ old('agreed') ? 'checked' : '' }}>
                                        I agree to the <a href="{{ route('frontend.terms') }}" style="text-decoration: none;color:#212529"> Terms & Conditions. </a>
                                        @error('agreed')<br><span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                    </p>
                                </div>

                                <!-- declaration already present -->

                                <!-- math captcha -->
                                <div class="row mb-2">
                                    <div class="col-4"><label for="captcha_answer" style="font-size: 23px">Captcha</label></div>
                                    <div class="col-8">
                                        @php $captchaQ = session('volunteer_captcha_q'); @endphp
                                        <div class="mb-2">
                                            <strong>{{ $captchaQ ?? '—' }}</strong>
                                        </div>
                                        <input id="captcha_answer" type="number" class="form-control @error('captcha_answer') is-invalid @enderror"
                                            name="captcha_answer" required>
                                        @error('captcha_answer')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                </div>

                                <!-- honeypot (hidden) -->
                                <div style="display:none;">
                                    <label>Leave this field empty</label>
                                    <input type="text" name="website" value="{{ old('website') }}">
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn-theme bg-primary text-center mx-0" id="submitBtn">Send</button>
                                </div>
                            </form>




                        </form>

                        </div>
                    </div>
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
</section> 


<section class="services py-5 border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="sectionTitle">
                    Our Volunteer
                </div>
            </div>
        </div>
        <div class="row">
            @foreach (\App\Models\Volunteer::where('status', 1)->get() as $item)
            <div class="col-md-3">
                <div class="items bg-olive">
                    <div class="info">
                        <div class="name">{{$item->name}}</div>
                        <div class="name">ID: {{$item->volunteerid}}</div>
                        <div class="email">{{$item->email}}</div>
                        <div class="address">{{$item->address}}</div>
                        <div class="dob">{{$item->phone}}</div>
                    </div>
                </div>
            </div>
            @endforeach
            
            




        </div>
    </div>
</section>




@endsection


<!-- disable submit after clicked to prevent duplicate submissions -->
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('volunteerForm');
        const submitBtn = document.getElementById('submitBtn');

        form.addEventListener('submit', function () {
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';
        });
    });
</script>
@endsection