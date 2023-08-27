@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')


<section class="about spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="photo-container position-relative">
                    <img src="{{ asset('assets/images/home/1.jpg')}}"  class="img-fluid  wow fadeIn " data-wow-delay="0.6s" alt="">
                    <div class="info-box">
                        <h1 class="mb-0">25</h1>
                        <h4 class="mb-0">years <br>
                            experience
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="about-right mt-5">
                    {{-- <h6 class="txt-primary fs-4 d-flex align-items-center">
                        <iconify-icon icon="ph:heart-fill"></iconify-icon>
                        About EnaCare
                    </h6> --}}
                    <h2 class="title-global">{{\App\Models\Master::where('name','about')->first()->title}}</h2>
                    

                    {!! \App\Models\Master::where('name','about')->first()->description !!}

                        
                    
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

@section('scripts')
@endsection