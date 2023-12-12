@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')

@php
if(isset($_GET["pid"])) {
$pid = $_GET["pid"];
}
@endphp

<section class="donation ">
    <div class="container">
        <form action="{{route('paypalcharitypayment')}}" method="POST">
            @csrf
            <div class="row my-5 mx-auto">
            <h6 class="title-global my-3">
                Your donation
            </h6>
            <p class="txt-primary fs-4 d-flex align-items-center">Please select a donation amount (required)</p>
            <div class="donationSelect">
                <div class="items">
                    <label for="10" class="txt-secondary">
                        £10 <input type="radio" id="10" value="10" class="btn-amount" name="donate" onchange="catchAmount(event); " >
                    </label>
                </div>
                <div class="items">
                    <label for="20" class="txt-secondary">
                        £20 <input type="radio" id="20" value="20" class="btn-amount" name="donate" onchange="catchAmount(event);">
                    </label>
                </div>
                <div class="items">
                    <label for="50" class="txt-secondary">
                        £50 <input type="radio" id="50" value="50" class="btn-amount" name="donate" onchange="catchAmount(event);">
                    </label>
                </div>
                <div class="items">
                    <label for="100" class="txt-secondary">
                        £100 <input type="radio" id="100" value="100" class="btn-amount" name="donate" onchange="catchAmount(event);">
                    </label>
                </div>
                <div class="items">
                    <label for="others" class="d-flex" class="txt-secondary">
                        <span class="me-2"> others</span>
                        <input type="number" id="others" name="others" onchange="catchAmount(event);">
                    </label>
                </div>

            </div>
            <p class="fs-5 mt-3">
                Amount <br>
                <input type="number" id="amount" name="amount" step="any" class="form-control">
            </p>

            <label>
                <input type="checkbox" name="taxpayer" id="taxpayer" value="1" class="me-1">
                Yes - I am a UK taxpayer and would like to Gift Aid my donations now and in future. I understand I must pay enough income tax and/or capital gains tax each tax year to cover the amount of Gift Aid that all charities and community amateur sports clubs claim on my donations in that tax year, and I am responsible for paying any difference. Please remember to let us know if your tax status, name or address change or if you wish to cancel your Gift Aid declaration.
            </label>
            <p class="fs-5 mt-3">
                Leave a comment with your donation <br>
                <textarea class="form-control" id="comment" name="comment" rows="4"></textarea>
            </p>

            {{-- <p class="txt-primary mt-4 fs-4 d-flex align-items-center">
                Payment Method
            </p>
            <div class="donationSelect my-4">
                <div class="items">
                    <label for="paypal">
                        Paypal <input type="radio" id="paypal" name="payment">
                    </label>
                </div>
                <div class="items">
                    <label for="visa">
                        Visa <input type="radio" id="visa" name="payment">
                    </label>
                </div>
            </div> --}}

            <p class="txt-primary mt-4 fs-4 d-flex align-items-center mb-3">
                About yourself
            </p>
            <div class="row my-4">
                <div class="col-md-6">
                    @if (isset($pid))
                    @php
                    $projectname = \App\Models\DonationType::where('id', $pid)->first()->title;
                    @endphp

                    <div class="form-group mb-3">
                        <p class="txt-primary mt-4 fs-4 d-flex align-items-center mb-3">
                            {{$projectname}}
                        </p>
                    </div>

                    @else

                    <div class="form-group mb-3">
                        <label for="projects" class="mb-1 txt-secondary fw-bold">Projects</label>
                        <select name="projects" id="projects" class="form-control">
                            <option value="">Projects</option>
                            
                            @foreach (\App\Models\DonationType::where('type', 'Projects')->orderby('id', 'DESC')->get() as $projects)
                            <option value="{{$projects->id}}" @if (isset($pid)) @if ($pid == $projects->id) selected @endif @endif>{{$projects->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="appeals" class="mb-1 txt-secondary fw-bold">Appeals</label>
                        <select name="appeals" id="appeals" class="form-control">
                            <option value="">Appeals</option>
                            
                            @foreach (\App\Models\DonationType::where('type', 'Appeals')->orderby('id', 'DESC')->get() as $appeals)
                            <option value="{{$appeals->id}}" @if (isset($pid)) @if ($pid == $appeals->id) selected @endif @endif>{{$appeals->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    @endif

                        
                   
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1 txt-secondary fw-bold">First name </label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="donating_cause" class="mb-1 txt-secondary fw-bold">Why are you donating?</label>
                            <select name="donating_cause" id="donating_cause" class="form-control">
                                <option value="">values goes here </option>
                                <option value="">values goes here </option>
                                <option value="">values goes here </option>
                                <option value="">values goes here </option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="mb-1 txt-secondary fw-bold">Email name </label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                     
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="phone" class="mb-1 txt-secondary fw-bold">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control">
                    </div>

                    <div class="mb-3 form-group">
                        <label class="fw-bold txt-secondary">Your privacy</label>
                        <p>We will always store your personal details securely. We'll use them to provide the
                            service that you have requested, and communicate with you in the way(s) that you have agreed to. Your data may also be used for analysis purposes, to help us provide the best service possible. For full details see our Privacy Policy</p>
                    </div>
                    
                        <div class=" d-flex align-items-center alert alert-warning flex-wrap">
                            <input type="checkbox" onfocus="addDonate(event)" class="me-2  " id="prodeccingfee" name="prodeccingfee" value=""> 
                            <div class="d-flex flex-wrap align-items-center">
                                Add  £<span id="process" class="txt-secondary fs-5 fw-bold mx-1"></span> 
                                to cover our payment processing fees 
                            </div>
                        </div>
                    
                    <div class="form-group mt-3">

                        <p class="txt-primary mt-4 fs-4 d-flex align-items-center">
                            Total Amount £ <span id="donate" class="txt-secondary  fw-bold ms-2"></span>
                        </p>

                        <p class="txt-primary mt-4 fs-4 d-flex align-items-center">
                            Payment Method
                        </p>
                        <div class="donationSelect my-4">
                            <div class="items">
                                <button type="submit"  class="btn-theme border-0 fs-4">
                                        Paypal 
                                </button>
                            </div>
                            <div class="items">
                                <button type="submit"  class="btn-theme border-0 fs-4">
                                    Visa 
                                </button>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        </form>
        
    </div>
</section>

@endsection

@section('script')
<script>
    
function catchAmount(event) {
  let prodeccingfee = (document.getElementById("prodeccingfee").value =
    (event.target.value * 2) / 100);
  let process = (document.getElementById("process").innerHTML = prodeccingfee);
  let donate = (document.getElementById("donate").innerHTML =
    event.target.value); 
}

var myCarousel = document.querySelector("#carouselExampleFade");
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 4000,
  wrap: true,
});


function addDonate(event) {
  let prodeccingfee = document.getElementById("prodeccingfee").value;  
  let donateVal = document.getElementById("donate").innerHTML;  
   Number(donateVal);
   Number(prodeccingfee); 
  let result = document.getElementById("donate").innerHTML = Number(prodeccingfee) + Number(donateVal)

}



</script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.btn-amount', function () {
            amt = $(this).attr('value');
            console.log(amt);
            $("#others").val('');
            $("#amount").val(amt);
        });

        $(document).on('click', '#prodeccingfee', function () {
            
            var amount = Number($("#amount").val());

            var prodeccingfee = ( amount/100 * 2 );
            var amt = amount + prodeccingfee;

            console.log(prodeccingfee);
            $("#amount").val(amt);
        });
        
        $("#others").keyup(function(){
            var amount = Number($("#others").val());
            $("#amount").val(amount);
            $(".btn-amount").attr('checked', false);

        });
        //calculation end 
    });   
</script>
@endsection