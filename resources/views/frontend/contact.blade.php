@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')


@php
    $a = rand(1, 9);
    $b = rand(1, 9);
    session(['contact_captcha_sum' => $a + $b]);
@endphp


<section class="contact spacer bg-light">
  <div class="container">
    <div class="row ">
        <div class="col-md-6">
            <h2 class="title-global">Contact Us</h2>
            
            <div class="my-3">
                <h6 class="txt-secondary fw-bold fs-4">
                    
                    <span> Phone Number</span>
                </h6>
                <h5 class="txt-primary fs-6">
                    {{\App\Models\CompanyDetail::where('id',1)->first()->phone1 }}
                </h5>
            </div>
            <div class="my-3">
                <h6 class="txt-secondary fw-bold fs-4">
                    
                    <span> Email Address</span>
                </h6>
                <h5 class="txt-primary fs-6">
                    {{\App\Models\CompanyDetail::where('id',1)->first()->email1 }}
                </h5>
            </div>
            <div class="my-3">
                <h6 class="txt-secondary fw-bold fs-4">
                    
                    <span>Our Location</span>
                </h6>
                <h5 class="txt-primary fs-6">
                    {{\App\Models\CompanyDetail::where('id',1)->first()->address1 }}
                </h5>
            </div>
        </div>

      <div class="col-md-6 p-5 bg-white">
        <h6 class="txt-primary fs-4 d-flex align-items-center">
          <iconify-icon class="me-2" icon="arcticons:nextcloudsms"></iconify-icon>
          Send Message
        </h6>
        <h2 class="title-global">Feel Free To Write Us Message.</h2>

        <div class="ermsg"></div>

        <div class="mt-4">
          @csrf
          <div class="form-group mb-3">
            <input class="form-control fw-bold" type="text" name="name" id="name" placeholder="Name" required>
          </div>
          <div class="form-group mb-3">
            <input class="form-control fw-bold" type="email" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group mb-3">
            <input class="form-control fw-bold" type="text" id="subject" name="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mb-3">
            <textarea class="form-control fw-bold" rows="3" id="message" name="message" placeholder="Message" required></textarea>
          </div>

          <!-- Math captcha -->
          <div class="form-group mb-3">
            <label for="captcha">What is {{ $a }} + {{ $b }} ?</label>
            <input class="form-control fw-bold" type="text" id="captcha" name="captcha" placeholder="Answer" required>
          </div>

          <!-- Honeypot (hidden) -->
          <div style="display:none;">
            <label>Leave this field empty</label>
            <input type="text" name="website" id="website" value="">
          </div>

          <div class="form-group">
            <button id="submitContact" class="btn-theme text-center border-0">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection

@section('script')
<script>
$(function () {
    // CSRF header
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

    const url = "{{ url('/contact-submit') }}";

    $('#submitContact').on('click', function (e) {
        e.preventDefault();

        const $btn = $(this);
        $btn.prop('disabled', true).text('Sending...');

        const payload = {
            name: $('#name').val(),
            email: $('#email').val(),
            subject: $('#subject').val(),
            message: $('#message').val(),
            captcha: $('#captcha').val(),
            website: $('#website').val() // honeypot
        };

        $.ajax({
            url: url,
            method: 'POST',
            data: payload,
            success: function (res) {
            console.log(res);
                if (res.status === 422) {
                    $('.ermsg').html(res.message);
                } else if (res.status === 300) {
                    $('.ermsg').html(res.message);
                    setTimeout(function () { location.reload(); }, 1500);
                } else {
                    $('.ermsg').html(res.message || '<div class="alert alert-info">Unexpected response</div>');
                }
            },
            error: function (xhr) {
                // Show validation errors (422) or a generic error
                if (xhr.status === 422 && xhr.responseJSON) {
                    let errs = xhr.responseJSON.errors || {};
                    let html = '<div class="alert alert-danger"><ul>';
                    $.each(errs, function (k, v) { html += '<li>' + v[0] + '</li>'; });
                    html += '</ul></div>';
                    $('.ermsg').html(html);
                } else {
                    $('.ermsg').html('<div class="alert alert-danger">Server error. Please try later.</div>');
                }
            },
            complete: function () {
                $btn.prop('disabled', false).text('Send');
            }
        });
    });
});
</script>
@endsection
