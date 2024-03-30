@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')




<section class="bleesed default">
    <div class="container">

        <h3 class="fw-bold txt-primary mb-4"> Meet our contributors</h3>
        <div class="row mb-3">
            <div class='col-md-6 mb-3'>
                <a target="blank" href="{{ asset('assets/images/posts/makshud.jpeg')}}" class="img-fluid" title="Some Text for the image">
                    <img src="{{ asset('assets/images/posts/makshud.jpeg')}}" style="width:100%;height:330px" class="img-fluid" alt="Alt text" />
                </a>          
            </div>
            <div class='col-md-6'>
                <div class="row">
                    <h2 class="title-global">Ways to Contribute and Make a Difference</h2>
                        <p>Thank you for considering a contribution to AIDME. Your support plays a crucial role in enabling us to make a positive impact on the lives of those in need. Here are various ways you can contribute and help us further our mission</p>
                    </br><br/>  
                </div>
            </div>
        <div>

            <div class="row mb-3">
                <div class='col-md-6 mb-3'>
                    <div class="row">
                        <h2 class="title-global">Ways to Contribute and Make a Difference</h2>
                            <p>Thank you for considering a contribution to AIDME. Your support plays a crucial role in enabling us to make a positive impact on the lives of those in need. Here are various ways you can contribute and help us further our mission</p>
                        </br><br/>  
                    </div>
                </div>
                <div class='col-md-6 mb-3'>
                    <a target="blank" href="{{ asset('assets/images/posts/makshud.jpeg')}}" class="img-fluid" title="Some Text for the image">
                        <img src="{{ asset('assets/images/posts/makshud.jpeg')}}" style="width:100%;height:330px" class="img-fluid" alt="Alt text" />
                    </a>          
                </div>
            <div>
    </div>
</section>


@endsection

@section('scripts')
@endsection