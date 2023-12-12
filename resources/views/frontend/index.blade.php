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
                        <div class="photo">
                            <img src="{{ asset('images/'.$projects->image)}}" alt="" class="img-fluid">
                        </div>
                        <div class="bottom-part">
                            <div class="items">
                                <a href="#" class="title fw-bold">{{$projects->title}}</a>
                                {{-- <div class="sub-title">Giving money to food </div> --}}
                            </div>
                            <div class="items">
                                <div class="link">
                                    <a href="">
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

<section class="about spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="photo-container position-relative">
                    <img src="{{ asset('assets/images/home/1.jpg')}}" class="img-fluid  wow fadeInLeft " data-wow-delay="0.6s" >
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

<section class="join py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class=" col-md-8">
                <h2 class="display-6 m-0 text-center">Join With Our
                    Volunteer Team </h2>
            </div>
            <div class=" col-md-4 d-flex align-items-center justify-content-center">
                <a class="btn-theme " href="">learn more
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
                    <div class="photo">
                        <img src="{{ asset('images/'.$appeals->image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="content p-4">
                        <div class="box">
                            <div class="items  d-flex">
                                <img src="{{ asset('assets/images/posts/0bfb6b93d39038dda4594645e16a8cc1.png')}}" class="me-2"
                                    width="50px" alt="">
                                <h4 class="subtitle">Encare</h4>
                            </div>
                            <div class="items">
                                <a href="#" class="text-white">Donate</a>
                            </div>
                        </div>
                        
                        
                        <a href="" class="fs-3 link-title d-block my-3">
                            {{$appeals->title}}
                        </a>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        </p>
                    </div>
                </div>
            </div>

            @endforeach
            



        </div>
    </div>
</section>




<section class="blog-section spacer">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 mx-auto ">
                <h6 class="txt-primary fs-4 d-flex justify-content-center  align-items-center">
                    <iconify-icon icon="ph:heart-fill" class="me-2"></iconify-icon>
                    Latest news
                </h6>
                <h2 class="title-global text-center">
                    Get Our EnaCare Every <br>
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
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/posts/0bfb6b93d39038dda4594645e16a8cc1.png')}}" alt="">
                                <a href="" class="mx-2 txt-secondary fw-bold fs-5">Encare</a>
                            </div>
                            <div class="d-flex align-items-center">

                                <iconify-icon class="fs-5 mx-2 txt-primary"
                                    icon="simple-line-icons:calender"></iconify-icon> 27 Apr 2021
                            </div>
                        </div>
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
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/posts/0bfb6b93d39038dda4594645e16a8cc1.png')}}" alt="">
                                <a href="" class="mx-2 txt-secondary fw-bold fs-5">Encare</a>
                            </div>
                            <div class="d-flex align-items-center">

                                <iconify-icon class="fs-5 mx-2 txt-primary"
                                    icon="simple-line-icons:calender"></iconify-icon> 27 Apr 2021
                            </div>
                        </div>
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
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/posts/0bfb6b93d39038dda4594645e16a8cc1.png')}}" alt="">
                                <a href="" class="mx-2 txt-secondary fw-bold fs-5">Encare</a>
                            </div>
                            <div class="d-flex align-items-center">

                                <iconify-icon class="fs-5 mx-2 txt-primary"
                                    icon="simple-line-icons:calender"></iconify-icon> 27 Apr 2021
                            </div>
                        </div>
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