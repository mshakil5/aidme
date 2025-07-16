@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')




<section class="about spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-global text-center">Financial Statement</h2>
                <h5 class="text-center">👉 Year 2023-2024 </h5>
            </div>
            
            <div class="pdf-viewer">
                <iframe src="{{ asset('statement.pdf') }}" style="width: 100%; height: 100vh;" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>



@endsection

@section('scripts')
@endsection