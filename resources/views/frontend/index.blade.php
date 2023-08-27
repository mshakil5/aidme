@extends('frontend.layouts.master')

@section('content')


<section class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/2.jpg')}}" class="d-block w-100" alt="slider photo missing">
                <div class="carousel-text container">
                    <h5 class="txt-primary">Raising Your Helping Hands</h5>
                    <h1 class="main-title">Mission To Access Safe The Nation</h1>
                    <div class="d-flex flex-wrap align-items-center justify-content-center-sm">
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
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{ asset('assets/images/1.jpg')}}" class="d-block w-100" alt="slider photo missing">
                <div class="carousel-text container">
                    <h5 class="txt-primary">Raising Your Helping Hands</h5>
                    <h1 class="main-title">Mission To Access Safe The Nation</h1>
                    <div class="d-flex flex-wrap align-items-center justify-content-center-sm">
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
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{ asset('assets/images/3.jpg')}}" class="d-block w-100" alt="slider photo missing">
                <div class="carousel-text container">
                    <h5 class="txt-primary">Raising Your Helping Hands</h5>
                    <h1 class="main-title">Mission To Access Safe The Nation</h1>
                    <div class="d-flex flex-wrap align-items-center justify-content-center-sm">
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
                    </div>
                </div>
            </div>

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
            <div class="col-md-12">
                <div class="inner">
                    <div class="items wow fadeIn" data-wow-delay="0.6s">
                        <div class="photo">
                            <img src="{{ asset('assets/images/posts/1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="bottom-part">
                            <div class="items">
                                <a href="#" class="title fw-bold">Charity For Food</a>
                                <div class="sub-title">Giving money to food </div>
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
                    <div class="items wow fadeIn" data-wow-delay="0.6s">
                        <div class="photo">
                            <img src="{{ asset('assets/images/posts/2.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="bottom-part">
                            <div class="items">
                                <a href="#" class="title fw-bold">Children Support</a>
                                <div class="sub-title">Giving money to food </div>
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
                    <div class="items  wow fadeIn" data-wow-delay="0.6s">
                        <div class="photo">
                            <img src="{{ asset('assets/images/posts/3.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="bottom-part">
                            <div class="items">
                                <a href="#" class="title fw-bold">Refuge Shelter</a>
                                <div class="sub-title">Giving money to food </div>
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
                    <h6 class="txt-primary fs-4 d-flex align-items-center">
                        <iconify-icon icon="ph:heart-fill"></iconify-icon>
                        About EnaCare
                    </h6>
                    <h2 class="title-global">Challenge 264 Million Children Go to Schools</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque modi, provident quo
                        assumenda facere harum aliquam voluptatum non atque aperiam animi quisquam consectetur
                        itaque alias incidunt quia molestias quaerat, debitis labore ipsum rem. Iste distinctio sint
                        autem consequatur vel ducimus delectus officiis sit veritatis dignissimos a saepe magni, quo
                        perspiciatis.</p>

                    <ul class="list-theme">
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima voluptas itaque
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima voluptas itaque
                        </li>
                    </ul>
                    <div class="btn-theme">
                        learn more
                        <div class="icon">
                            <iconify-icon icon="ph:heart-fill"></iconify-icon>
                        </div>
                    </div>
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
                <h6 class="txt-primary fs-4 d-flex justify-content-center  align-items-center">
                    <iconify-icon icon="ph:heart-fill"></iconify-icon>
                    About EnaCare
                </h6>
                <h2 class="title-global text-center">
                    Donate Our Popular Charity Causes <br>
                    Around The World
                </h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp " data-wow-delay="0.6s">
                <div class="card-theme">
                    <div class="photo">
                        <img src="{{ asset('assets/images/posts/c7.jpg')}}" class="img-fluid" alt="">

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
                        <div class="d-flex justify-content-between fw-bold">
                            <h5 class="family-bold mb-0 text-dark">Raised <span class=" txt-primary">$0.00</span>
                            </h5>
                            <h5 class="mb-0 txt-primary">
                                0%
                            </h5>
                        </div>
                        <div class="mt-3">
                            <div class="progress " style="height: 7px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <a href="" class="fs-3 link-title d-block my-3">
                            Let them take pure water from country government.
                        </a>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp " data-wow-delay="0.6s">
                <div class="card-theme">
                    <div class="photo">
                        <img src="{{ asset('assets/images/posts/c7.jpg')}}" class="img-fluid" alt="">

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
                        <div class="d-flex justify-content-between fw-bold">
                            <h5 class="family-bold mb-0 text-dark">Raised <span class=" txt-primary">$0.00</span>
                            </h5>
                            <h5 class="mb-0 txt-primary">
                                0%
                            </h5>
                        </div>
                        <div class="mt-3">
                            <div class="progress " style="height: 7px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <a href="" class="fs-3 link-title d-block my-3">
                            Let them take pure water from country government.
                        </a>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp " data-wow-delay="0.6s">
                <div class="card-theme">
                    <div class="photo">
                        <img src="{{ asset('assets/images/posts/c7.jpg')}}" class="img-fluid" alt="">
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
                        <div class="d-flex justify-content-between fw-bold">
                            <h5 class="family-bold mb-0 text-dark">Raised <span class=" txt-primary">$0.00</span>
                            </h5>
                            <h5 class="mb-0 txt-primary">
                                0%
                            </h5>
                        </div>
                        <div class="mt-3">
                            <div class="progress " style="height: 7px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <a href="" class="fs-3 link-title d-block my-3">
                            Let them take pure water from country government.
                        </a>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="donate spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <h6 class="txt-primary fs-4  ">
                    <iconify-icon icon="ph:heart-fill"></iconify-icon>
                    About EnaCare
                </h6>
                <h2 class="display-6  text-center family-bold my-3 text-white">
                    Ready To Donate Our 250 Million Refugee?
                </h2>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center flex-wrap justify-content-center">
                    <input type="text" class="donate-input mb-2" value="$5">
                    <a class="btn-theme " href="">Donate Now
                        <div class="icon">
                            <iconify-icon icon="ph:heart-fill"></iconify-icon>
                        </div>
                    </a>
                </div>
            </div>
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

<section class="py-5 partners-section">
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