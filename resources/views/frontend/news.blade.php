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
                        <h1 class="mb-0"></h1>
                        <h4 class="mb-0">years <br>
                            experience
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="about-right mt-5">
                    {{-- <h2 class="title-global">{{\App\Models\Master::where('name','about')->first()->title}}</h2>
                    {!! \App\Models\Master::where('name','about')->first()->description !!} --}}

                    <h2 class="title-global">Annual Report</h2>
</br>
                     <p>AID ME UK will publish annual report on our website page.</p>
                    </br>
                    <h2 class="title-global">Our Finance </h2>
                    
                    <p>How much money we collect and how much we spend to help underprivileged people to survive and thrive, will all be published in details on our website.  We believe in transparency.</p>
                    </br>
                    <h2 class="title-global">Our accountability</h2>
                    
                    We are accountable to our supporters, donor, member, people and communities with whom we work with.
                    
                        
                    
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

@section('scripts')
@endsection