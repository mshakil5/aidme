@extends('frontend.layouts.master')

@section('content')


<section class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach (\App\Models\Slider::where('status',1)->get() as $key => $slider)
            <div class="carousel-item active">
                <img src="{{asset('images/slider/'.$slider->photo)}}" class="d-block w-100" alt="slider photo missing">
                <div class="carousel-text container">
                    {{-- <h5 class="txt-primary">Raising Your Helping Hands</h5> --}}
                    <h1 class="main-title">{{$slider->title}}</h1>
                    {{-- <div class="d-flex flex-wrap align-items-center justify-content-center-sm">
                        <a href="" class="btn-theme">
                            <div class="icon">
                                <iconify-icon icon="mdi:hand-heart" class=" mx-2"></iconify-icon>
                            </div>
                            learn more
                        </a>
                        <a href=" " class="btn-theme bg-secondary">
                            <div class="icon">
                                <iconify-icon icon="mdi:hand-heart" class=" mx-2"></iconify-icon>
                            </div>
                            our cases
                        </a>
                    </div> --}}
                </div>
            </div>
            @endforeach
            
            

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="featured-post">
    <div class="container">
        <div class="row">

            @foreach (\App\Models\DonationType::where('type', 'Projects')->orderby('id', 'DESC')->limit(3)->get() as $projects)

            <div class="col-md-4">
                <div class="inner">
                    <div class="items wow fadeIn" data-wow-delay="0.6s">
                        <a href="{{route('projectDetails', $projects->id)}}" class="title fw-bold">
                            <div class="photo">
                                <img src="{{ asset('images/'.$projects->image)}}" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="bottom-part">
                            <div class="items">
                                <a href="{{route('projectDetails', $projects->id)}}" class="title fw-bold">{{$projects->title}}</a>
                                {{-- <div class="sub-title">Giving money to food </div> --}}
                            </div>
                            <div class="items">
                                <div class="link">
                                    <a href="{{route('projectDetails', $projects->id)}}">
                                        <iconify-icon icon="ci:chevron-right-duo"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>



<section class="join py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class=" col-md-8">
                <h2 class="display-6 m-0 text-center">Join With Our
                    Volunteer Team </h2>
            </div>
            <div class=" col-md-4 d-flex align-items-center justify-content-center">
                <a class="btn-theme " href="{{route('frontend.volunteerform')}}">learn more
                    <div class="icon">
                        <iconify-icon icon="ph:heart-fill"></iconify-icon>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="post-view spacer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mx-auto ">
                {{-- <h6 class="txt-primary fs-4 d-flex justify-content-center  align-items-center">
                    <iconify-icon icon="ph:heart-fill"></iconify-icon>
                    Appeals
                </h6> --}}
                <h2 class="title-global text-center">
                    Appeals
                </h2>
            </div>
        </div>
        <div class="row mt-5">




            @foreach (\App\Models\DonationType::where('type', 'Appeals')->orderby('id', 'DESC')->limit(6)->get() as $appeals)

            <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp " data-wow-delay="0.6s">
                <div class="card-theme">
                    <a href="{{route('projectDetails', $appeals->id)}}">
                        <div class="photo">
                            <img src="{{ asset('images/'.$appeals->image)}}" class="img-fluid" alt="">
                        </div>
                    </a>
                    
                    <div class="content p-4">
                        <div class="text-center">
                            <a href="{{route('frontend.donation')}}" class="btn-theme " style="top: -50px">
                                <div class="icon">
                                    <iconify-icon icon="mdi:hand-heart" class=" mx-2"></iconify-icon>
                                </div>
                                Donation
                            </a>
                        </div>
                        
                        <div>
                            <a href="{{route('projectDetails', $appeals->id)}}" class="fs-3 link-title d-block my-3" style="top: -50px">
                                {{$appeals->title}}
                            </a>
                            <p>
                                {!!  Str::limit($appeals->description , 70) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            



        </div>
    </div>
</section>

<section class="about spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-right mt-2">
                    {{-- <h6 class="txt-primary fs-4 d-flex align-items-center">
                        <iconify-icon icon="ph:heart-fill"></iconify-icon>
                        About EnaCare
                    </h6> --}}
                    
                    <h2 class="title-global text-center">{{\App\Models\Master::where('name','homepage2ndsection')->first()->title}}</h2>
                    

                    {!! \App\Models\Master::where('name','homepage2ndsection')->first()->description !!}
                    
                </div>
            </div>
        </div>
    </div>
</section>



<section class="blog-section spacer" style="display: none">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 mx-auto ">
                <h6 class="txt-primary fs-4 d-flex justify-content-center  align-items-center">
                    <iconify-icon icon="ph:heart-fill" class="me-2"></iconify-icon>
                    Latest news
                </h6>
                <h2 class="title-global text-center">
                    Get Our AidMeUK Every <br>
                    News & Blog
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4  wow fadeInUp " data-wow-delay="0.6s">
                <div class="blog">
                    <div class="photo mb-3">
                        <a href="">
                            <img src="{{ asset('assets/images/posts/4.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="tag my-2">
                            <a href="">
                                <iconify-icon icon="bi:folder" class="me-1 fs-6 text-white"></iconify-icon>
                                tagname
                            </a>
                        </div>
                        <a href="" class="fs-3 link-title d-block my-3">
                            Experts Global Digital During Developments COVID-19
                        </a>
                        <p>
                            Sed perspiciatis unde omnis iste natus error sit atem accntium doloremque laudantium
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4  wow fadeInUp " data-wow-delay="0.6s">
                <div class="blog">
                    <div class="photo mb-3">
                        <a href="">
                            <img src="{{ asset('assets/images/posts/4.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="tag my-2">
                            <a href="">
                                <iconify-icon icon="bi:folder" class="me-1 fs-6 text-white"></iconify-icon>
                                tagname
                            </a>
                        </div>
                        <a href="" class="fs-3 link-title d-block my-3">
                            Experts Global Digital During Developments COVID-19
                        </a>
                        <p>
                            Sed perspiciatis unde omnis iste natus error sit atem accntium doloremque laudantium
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4  wow fadeInUp " data-wow-delay="0.6s">
                <div class="blog">
                    <div class="photo mb-3">
                        <a href="">
                            <img src="{{ asset('assets/images/posts/5.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="tag my-2">
                            <a href="">
                                <iconify-icon icon="bi:folder" class="me-1 fs-6 text-white"></iconify-icon>
                                tagname
                            </a>
                        </div>
                        <a href="" class="fs-3 link-title d-block my-3">
                            Experts Global Digital During Developments COVID-19
                        </a>
                        <p>
                            Sed perspiciatis unde omnis iste natus error sit atem accntium doloremque laudantium
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="py-5 partners-section" style="display: none">
    <div class="container">
        <div class="partners ">
            <div class="mx-1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/partners/1.png')}}" class="img-fluid  wow bounce " data-wow-delay="0.6s" alt="">
            </div>
            <div class="mx-1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/partners/2.png')}}" class="img-fluid  wow bounce " data-wow-delay="0.6s" alt="">
            </div>
            <div class="mx-1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/partners/3.png')}}" class="img-fluid  wow bounce " data-wow-delay="0.6s" alt="">
            </div>
            <div class="mx-1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/partners/4.png')}}" class="img-fluid  wow bounce " data-wow-delay="0.6s" alt="">
            </div>
            <div class="mx-1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/partners/2.png')}}" class="img-fluid  wow bounce " data-wow-delay="0.6s" alt="">
            </div>
            <div class="mx-1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/partners/3.png')}}" class="img-fluid  wow bounce " data-wow-delay="0.6s" alt="">
            </div>
            <div class="mx-1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/partners/4.png')}}" class="img-fluid  wow bounce " data-wow-delay="0.6s" alt="">
            </div>


        </div>
    </div>
</section>

    
@endsection

@section('script')


@endsection