@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')




<section class="about spacer">
    <div class="container">
        <div class="row">
            
            
                    {{-- <h2 class="title-global">{{\App\Models\Master::where('name','about')->first()->title}}</h2>
                    {!! \App\Models\Master::where('name','about')->first()->description !!} --}}
                    <p>
                        <b>AIDMEUK</b>, we are committed to maintaining the highest standards of transparency and accountability. We believe that openness with our stakeholders, including donors, beneficiaries, and the public, is crucial in building trust and ensuring the effective use of resources for our charitable mission.
                    </p>                    <h2 class="title-global">Annual Financial Report</h2>
                    </br>
                     <p> One of the keyways we demonstrate transparency is through the publication of our annual financial report. This comprehensive document provides a detailed overview of our financial activities, including income, expenses, and the allocation of funds to various programs and initiatives. Our stakeholders can access this report on our website.</p>
                    </br>
                    <h2 class="title-global">Impact Reports</h2>
                    
                    <p> In addition to financial transparency, we are committed to sharing the impact of our work. Our annual impact reports showcase the outcomes and achievements of our programs and initiatives. These reports highlight the tangible difference we are making in the lives of those we serve and contribute to our commitment to accountability.</p>
                    </br>
                    <h2 class="title-global">Donor Privacy and Acknowledgment</h2>
                    
                   <p>  Respecting the privacy of our donors is of utmost importance. We adhere to strict confidentiality standards, ensuring that donor information is handled with the utmost care and used only for the intended purpose. Donors are acknowledged and recognized in a manner consistent with their preferences and our ethical guidelines.</p>
                    
                         <h2 class="title-global">Open Communication Channels</h2>
                    
                    <p>  We encourage open communication with our stakeholders. Our team is readily available to answer queries, provide additional information, and address any concerns. Contact information, including email addresses and phone numbers, is easily accessible on our website.</p>
                    </br></br>
                    <p>At present, our organization operates without any paid personnel. Instead, our dedicated team is composed of directors and members who generously contribute their time and skills on a voluntary basis, uniting in a collective effort to further our mission</p>
        </div>
    </div>
</section>




<section class="about spacer">
    <div class="container">
        <div class="row">


            
        </div>
    </div>
</section>

    <section class="faq  ">
        <div class="container">
            <div class="row">
                <h2 class="secTtile text-center text-dark text-uppercase fw-bold title-font wow bounce">Financial Statement</h2>
            </div>
            <div class="row mt-5 mb-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item rounded-3 border-0 shadow mb-2 fadeInUp wow">
                        <h2 class="accordion-header">
                            <button class="accordion-button border-bottom fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                👉 Year 2023-2024
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                

                                <div class="pdf-viewer">
                                    <iframe src="{{ asset('statement.pdf') }}" style="width: 100%; height: 100vh;" frameborder="0"></iframe>
                                </div>


                            </div>
                        </div>
                    </div>
                    {{-- <div class="accordion-item rounded-3 border-0 shadow mb-2 fadeInUp wow">
                        <h2 class="accordion-header">
                            <button class="accordion-button border-bottom collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Your question goes here #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p> answer goes here </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 border-0 mb-2 shadow">
                        <h2 class="accordion-header">
                            <button class="accordion-button border-bottom collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Your question goes here #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p> answer goes here </p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>


@endsection

@section('scripts')
@endsection