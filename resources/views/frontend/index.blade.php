@extends('frontend.layouts.master')

@section('content')

<style>

    
    .custom-list {
      padding: 0;
      list-style: none;
    }
    .custom-list li{
      text-decoration: none;
      padding: 5px 15px;
      display: block;
      color: #34342f;
      text-transform: capitalize;
      line-height: 2;
      font-weight: 600;
    }
    .custom-list li:hover {
      background-color: rgba(211, 211, 211, 0.2588235294);
      color: #dd9509;
    }
    
    .custom-list li:hover {
      background-color: rgba(211, 211, 211, 0.2588235294);
      color: #dd9509;
    }
    
    .custom-list li span.active {
      color: #dd9509;
    }


    .photo-gallery {
        color: #313437;
        background-color: #fff;
    }

    .photo-gallery p {
        color: #7d8285;
    }

    .photo-gallery h2 {
        font-weight: bold;
        margin-bottom: 40px;
        padding-top: 40px;
        color: inherit;
    }

    @media (max-width: 767px) {
        .photo-gallery h2 {
            margin-bottom: 25px;
            padding-top: 25px;
            font-size: 24px;
        }
    }

    .photo-gallery .intro {
        font-size: 16px;
        max-width: 500px;
        margin: 0 auto 40px;
    }

    .photo-gallery .intro p {
        margin-bottom: 0;
    }

    .photo-gallery .photos {
        padding-bottom: 20px;
    }

    .photo-gallery .item {
        padding-bottom: 30px;
    }

    @media (max-width: 768px) {
        .slider .carousel-text h1 {
            font-size: 19px;
        }
        .slider .carousel-item {
            min-height: 37vh !important;
        }

        .slider .carousel-item img {
            height: 45% !important;
            -o-object-fit: cover;
            object-fit: cover;
        }
    }


    /* .lightbox {
    display: none !important;
    } */
    /* .lb-cancel{
        display: none !important;
    } */
    /* .lb-nav a {
    display: none !important;
    } */


    .lb-outerContainer {
    /* display: none !important; */
    }
    
    .height-adjust{
        max-height:75vh;
        overflow-y:scroll;
    }



</style>




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

            @foreach (\App\Models\DonationType::where('type', 'Projects')->where('status', 0)->orderby('id', 'DESC')->limit(3)->get() as $projects)

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
                            <div class="items d-none d-md-block">
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
                <h2 class="display-6 m-0 text-center">Donate direct to our Bank account: </h2>
            </div>
            <div class=" col-md-4 d-flex align-items-center justify-content-center">
              <p><h2>Aidmeuk private Ltd</br>
                    SC: 30 99 50</br>
                    AC: 10350363</h2>
                    </p>
                <!--
                <a class="btn-theme " href="{{route('frontend.volunteerform')}}">learn more
                    <div class="icon">
                        <iconify-icon icon="ph:heart-fill"></iconify-icon>
                    </div>
                </a>-->
            </div>
        </div>
    </div>
</section>

<style>
    :root{
--base:#0e0e4e;
--base-1:#1a1a7a;
--base-2:#28328f;
--accent:#0d6efd;
--bg:#ffffff;
--card-radius:12px;
--dot-size:44px;
--dot-icon-size:22px;
}
body{background:#f5f5f9;font-family:Arial, sans-serif;margin:0;padding:0;}
    .timeline-body{background:#f5f5f9;font-family:Arial, sans-serif;margin:0;padding:0;}
.timeline-wrap{max-width:1000px;margin:2rem auto;padding:2rem 1rem;position:relative;}
.timeline-wrap::before{
content:"";
position:absolute;left:50%;transform:translateX(-50%);
top:0;bottom:0;width:4px;
background:var(--accent);
z-index:1;border-radius:4px;
}
.timeline{display:grid;grid-template-columns:1fr 80px 1fr;gap:1rem 2rem;position:relative;z-index:2;}
.year-block{position:relative;margin:2rem 0;display:contents;}
.dot-wrap{grid-column:2;display:flex;align-items:center;justify-content:center;position:relative;z-index:3;}
.dot{width:var(--dot-size);height:var(--dot-size);border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 0 10px rgba(0,0,0,.15);}
.card{padding:1rem 1.25rem;border-radius:var(--card-radius);box-shadow:0 6px 20px rgba(12,14,45,.06);color:var(--bg);max-width:420px;}
.year-title{font-size:1.15rem;font-weight:700;margin-bottom:.45rem;color:#fff;}
.list-wrap ul{margin:0;padding-left:0;list-style:none;}
.list-wrap li{margin:.35rem 0;font-size:.96rem;color:#fff;position:relative;padding-left:1.2rem;}
.list-wrap li::before{
content:'➤';
position:absolute;
left:0;
color:#fff;
}
.left .content{grid-column:1;text-align:right;justify-self:end;}
.right .content{grid-column:3;text-align:left;justify-self:start;}
.variant-0 .card,.variant-0 .dot{background:var(--base);}
.variant-1 .card,.variant-1 .dot{background:var(--base-1);}
.variant-2 .card,.variant-2 .dot{background:var(--base-2);}
</style>

<section class="timeline-body py-4">

    
        <div class="row justify-content-center">
            <div class="col-md-8 mx-auto ">
                <h2 class="title-global text-center">
                    Aidme UK ongoing progress
                </h2>
            </div>
        </div>


<div  class="timeline-wrap">
    <div class="timeline" id="timeline">


<div class="year-block left variant-0">
<div class="content card">
<div class="year-title">2023</div>
<div class="list-wrap"><ul>
<li>Company formation, office & website setup</li>
<li>Food provided to 100 families (BD)</li>
<li>1 water plant installed (deep tube well)</li>
<li>Donation for 1 orphan marriage</li>
</ul></div>
</div>
<div class="dot-wrap"><div class="dot"><svg viewBox="0 0 24 24"><path d="M12 21s-6-4.35-8-7.02C1.8 10.9 3.33 6 8 6c2.11 0 3.43 1.1 4 2.08.57-.98 1.89-2.08 4-2.08 4.66 0 6.2 4.9 4 7.98C18 16.65 12 21 12 21z" fill="white"/></svg></div></div>
</div>


<div class="year-block right variant-1">
<div class="content card">
<div class="year-title">2024</div>
<div class="list-wrap"><ul>
<li>Environmental campaign</li>
<li>Food provided to refugees (York Community Kitchen)</li>
<li>2 water plants installed</li>
<li>2 houses built for orphan families (BD)</li>
<li>York community sports introduced (Badminton)</li>
<li>Ramadan food packages to 50 families (BD)</li>
<li>Emergency flood food support (Sylhet, BD)</li>
</ul></div>
</div>
<div class="dot-wrap"><div class="dot"><svg viewBox="0 0 24 24"><path d="M12 21s-6-4.35-8-7.02C1.8 10.9 3.33 6 8 6c2.11 0 3.43 1.1 4 2.08.57-.98 1.89-2.08 4-2.08 4.66 0 6.2 4.9 4 7.98C18 16.65 12 21 12 21z" fill="white"/></svg></div></div>
</div>


<div class="year-block left variant-2">
<div class="content card">
<div class="year-title">2025</div>
<div class="list-wrap"><ul>
<li>Emergency Help Gaza</li>
<li>Environmental campaign continued</li>
<li>Food for refugees (York Community Kitchen)</li>
<li>3 water plants installed (BD)</li>
<li>3 houses built for orphan families (BD)</li>
<li>York community sports continued (Badminton)</li>
<li>3 orphan sponsorships</li>
<li>Ramadan food packages to 50 families (BD)</li>
<li>Built orphan Education Centre (BD)</li>
</ul></div>
</div>
<div class="dot-wrap"><div class="dot"><svg viewBox="0 0 24 24"><path d="M12 21s-6-4.35-8-7.02C1.8 10.9 3.33 6 8 6c2.11 0 3.43 1.1 4 2.08.57-.98 1.89-2.08 4-2.08 4.66 0 6.2 4.9 4 7.98C18 16.65 12 21 12 21z" fill="white"/></svg></div></div>
</div>


    <div class="year-block right variant-0">
        <div class="content card">
            <div class="year-title">2026 (Vision)</div>
            <div class="list-wrap"><ul>
                <li>York Bangla School</li>
                <li>Environmental campaign continued</li>
                <li>Food for refugees (York Community Kitchen)</li>
                <li>3 water plants installed (BD)</li>
                <li>3 houses built for orphan families (BD)</li>
                <li>York community sports continued (Badminton)</li>
                <li>4 orphan sponsorships</li>
                <li>Ramadan food packages to 100 families (BD)</li>
            </ul></div>
        </div>
        <div class="dot-wrap"><div class="dot"><svg viewBox="0 0 24 24"><path d="M12 21s-6-4.35-8-7.02C1.8 10.9 3.33 6 8 6c2.11 0 3.43 1.1 4 2.08.57-.98 1.89-2.08 4-2.08 4.66 0 6.2 4.9 4 7.98C18 16.65 12 21 12 21z" fill="white"/></svg></div></div>
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




            @foreach (\App\Models\DonationType::where('type', 'Appeals')->orderby('id', 'DESC')->where('status', 0)->limit(6)->get() as $appeals)

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


{{-- gallery here  --}}
@if ($galleries->count() > 0)
    
<section class="about spacer">
    <div class="">

        <div class="photo-gallery">
            <div class="row justify-content-center">
                <div class="col-md-8 mx-auto mb-3">
                    <h2 class="title-global text-center">
                        Our Activities
                    </h2>


                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-12 mx-auto px-4">
                    <div class="row ">
                        <div class="col-lg-8 shadow-sm border rounded-0 bg-light height-adjust">
                            <div class="row pt-5 px-4 photos popup-gallery">

                                @foreach ($galleries as $gallery)
                                    <div class="col-sm-6 col-md-4 col-lg-4 item" data-category="{{ $gallery->category->name }}">
                                        <a href="{{ asset('images/gallery/' . $gallery->image) }}" data-lightbox="photos">
                                            <img class="img-fluid" src="{{ asset('images/gallery/' . $gallery->image) }}" alt="{{ $gallery->title }}">
                                        </a>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <div class="col-lg-4 shadow-sm border rounded-0 bg-light">
                            <div class="py-4">
                                <ol class="custom-list w-100">

                                    <li class="d-flex justify-content-between align-items-center pe-2 rounded-2 "><span class="category active"  data-category="all">All</span></li>

                                    @foreach ($categories as $category)
                                        
                                    <li class="d-flex justify-content-between align-items-center pe-2 rounded-2"><span class="category" data-category="{{ $category->name }}">{{ $category->name }}</span></li>

                                    @endforeach
                                    
                                    


                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
    
    
            </div>
        </div>
        
        
    </div>
</section>
@endif



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
                    <a href="{{route('frontend.network')}}" class="btn-theme ">
                        Click Here
                    </a>
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

<script>
    $(document).ready(function() {
        lightbox.init();

        $('.category').click(function() {
            
            $('.category').removeClass('active');
            $(this).addClass('active');
            var selectedCategory = $(this).data('category');
            $('.photos .item').hide(); 

            if (selectedCategory === 'all') {
                $('.photos .item').show();
            } else {
                $('.photos .item[data-category="' + selectedCategory + '"]').show();
            }
        });
    });
</script>


<script>
    jQuery(document).ready(function () {
        jQuery('.popup-gallery').magnificPopup({
            
            delegate: 'a',
            type: 'image',
            callbacks: {
                elementParse: function (item) {
                    console.log(item.el.context.className);
                    item.type = 'image',
                            item.tLoading = 'Loading image #%curr%...',
                            item.mainClass = 'mfp-img-mobile',
                            item.image = {
                                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                            }

                }
            },
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            }

        });

    });
</script>




@endsection