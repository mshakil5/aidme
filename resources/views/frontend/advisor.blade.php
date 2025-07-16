@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')

<style>
    
.director-post .inner {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-evenly;
  -moz-column-gap: 25px;
       column-gap: 25px;
  position: relative;
  z-index: 1;
  background: #fff;
}
.director-post .inner .items {
  flex: 1;
  margin-bottom: 15px;
}
.director-post .inner .items .photo {
  width: 100%;
  overflow: hidden;
}
.director-post .inner .items .photo img {
  width: 100%;
  transition: transform 0.4s ease-in-out;
}
.director-post .inner .items .photo img:hover {
  transform: scale(1.1);
}
@media (max-width: 992px) {
  .director-post .inner .items {
    flex-basis: 48%;
  }
}
@media (max-width: 992px) {
  .director-post .inner .items {
    flex-basis: 100%;
  }
}
.director-post .inner .items .bottom-part {
  display: flex;
  position: relative;
  background-color: #0e0e4e;
}
.director-post .inner .items .bottom-part .items:nth-child(1) {
  flex: 3;
  padding: 20px;
}
.director-post .inner .items .bottom-part .items:nth-child(2) {
  flex: auto;
  position: absolute;
  right: 0;
  bottom: 0;
  top: 0;
  height: 100%;
  width: 85px;
  transition: width 0.3s ease-in-out;
}
.director-post .inner .items .bottom-part .items:nth-child(2):hover {
  width: 105px;
}
.director-post .inner .items .bottom-part .items .title {
  font-size: 22px;
  color: #ee9a40;
}
.director-post .inner .items .bottom-part .items .sub-title {
  font-size: 17px;
  color: #fff;
}
.director-post .inner .items .bottom-part .items .link {
  position: relative;
  height: 100%;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.director-post .inner .items .bottom-part .items .link a {
  position: relative;
  z-index: 1;
  color: #fff;
  font-size: 4rem;
}
.director-post .inner .items .bottom-part .items .link:before {
  content: "";
  position: absolute;
  background: orange;
  right: 0;
  top: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  transform: skew(10deg, 0deg) translate(9.4px, 0px);
}
</style>
</br>
<section class="director-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-global text-center">Advisory Team</h2>
            </div>
            <div class="col-md-4">
                <div class="inner">
                    <div class="items wow fadeIn" data-wow-delay="0.6s">
                        <div class="photo">
                            <img src="{{ asset('assets/images/posts/fozla.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="bottom-part">
                            <div class="items">
                                <a href="#" class="title fw-bold">Mr. Fozla Bhuyain</a>
                                <div class="sub-title">Information Technology Advisor </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>


            
            



            
            <div class="col-md-4">
                <div class="inner">
                    <div class="items wow fadeIn" data-wow-delay="0.6s">
                        <div class="photo">
                            <img src="{{ asset('assets/images/posts/joynal.jpeg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="bottom-part">
                            <div class="items">
                                <a href="#" class="title fw-bold">Dr. M Abedin</a>
                                <div class="sub-title">Financial Advisor</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            
            
             <div class="col-md-4">
                <div class="inner">
                    <div class="items wow fadeIn" data-wow-delay="0.6s">
                        <div class="photo">
                            <img src="{{ asset('assets/images/posts/AtikAnwarchowdhury.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="bottom-part">
                            <div class="items">
                                <a href="#" class="title fw-bold">Atik Anwar chowdhury</a>
                                <div class="sub-title">Project and planning Advisor</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="inner">
                    <div class="items wow fadeIn" data-wow-delay="0.6s">
                        <div class="photo">
                            <img src="{{ asset('assets/images/posts/MohammedSahil.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="bottom-part">
                            <div class="items">
                                <a href="#" class="title fw-bold">Mohammad Sahil</a>
                                <div class="sub-title">Project and planning-Advisor</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</section>
</br>



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
                         <p style="color: #fc0fc0;"><b></b><span style="color: #ff00ff;"><a style="color: #000000;" href="{{route('frontend.contributors')}}" target="_blank" rel="noopener noreferrer"><h1> Meet Our Generous Contributors</h1></a></span></p>

                         <a href="{{route('frontend.contributors')}}" class="btn-theme ">
                            Click Here
                        </a>
                    
                </div>
            </div>
        </div>
    </div>
</section>




@endsection

@section('scripts')
@endsection