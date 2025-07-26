@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')




<section class="about spacer">
    <div class="container">
        <div class="row">
            
            
                <div class="about-right mt-5">
                    <h2 class="title-global">Contributors</h2>
                    <p>Contributor means a person or an organisation from whom a donation of, not less than <b>£1000.00</b> is received. </p>

                    <b>Honouring Generosity: Our Distinguished Contributors</b>

                     <p>Introduction: AidmeUK, we believe in the power of collective kindness to make a lasting impact on the lives of those in need. In our ongoing efforts to support and uplift communities, we are thrilled to introduce a special initiative that recognizes the extraordinary generosity of individuals who have gone above and beyond in their commitment to making a difference</p></br>
                     
                    <p>We are proud to present our distinguished contributor list, featuring the names, photos, and details of those remarkable individuals who have donated<b> £1000.00</b> or more to our cause. These philanthropic leaders have not only demonstrated a deep sense of compassion but have also become integral partners in our mission to create positive change.</p>
                    
                    <b>How to Become a Recognized Contributor </b>
                    
                    <p>If you share our vision and are interested in becoming a distinguished contributor, we welcome you to reach out to our team. Your substantial contribution will not only make a tangible impact on the lives of those in need but will also earn you a well-deserved place among our esteemed list of contributors</p>
                    
                    <b>Why Recognition Matters</b>
                    
                    <p> Recognizing our generous contributors is not just about acknowledging their financial support; it's about celebrating a shared commitment to making the world a better place. By showcasing these individuals on our charity website, we aim to inspire others to join in our cause, fostering a sense of community and collective responsibility.</p>
                    
                        </br>


                         {{-- <p style="color: #fc0fc0;"><b></b><span style="color: #ff00ff;"><a style="color: #000000;" href="{{route('frontend.contributors')}}" target="_blank" rel="noopener noreferrer"><h1> Meet Our Generous Contributors</h1></a></span></p>

                         <a href="{{route('frontend.contributors')}}" class="btn-theme ">
                            Click Here
                        </a> --}}
                    
                </div>
            </div>
        </div>
    </div>
</section>



<section class="bleesed default">
    <div class="container">

        <div class="row my-5">
            <div class="col-lg-10 mx-auto authBox">

                <h2 class="fw-bold txt-primary mb-4 text-center"> Meet our contributors</h2>
                <div class="row mb-4 justify-content-center">
                    @foreach ($data as $item)
                        <div class="col-md-5 mb-4 mx-2 p-3 border rounded shadow-sm">
                            <a href="{{ asset('images/contributor/' . $item->image) }}" target="_blank" class="d-block mb-3" title="Contributor Image">
                                <img src="{{ asset('images/contributor/' . $item->image) }}" alt="Contributor Image" style="width:100%; height:280px; object-fit: cover; border-radius: 4px;">
                            </a>
                            <p class="text-muted mb-1" style="font-size: 0.9rem;">{!! $item->description !!}</p>
                            <small class="text-secondary">Contributor No. {{ $item->serial }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>


@endsection

@section('scripts')
@endsection