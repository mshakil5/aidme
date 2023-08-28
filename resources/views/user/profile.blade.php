@extends('frontend.layouts.master')

@section('content')


<section class="section profile py-5" style="background-color: #F6F9FF;">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 mb-3">
    
              <div class="card border-0 shadow-sm">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                  @if (isset(Auth::user()->photo))
                      <img src="{{ asset('images/'.Auth::user()->photo)}}" alt="Profile" class="rounded-circle ">
                  @else
                  <img src="https://via.placeholder.com/510x440.png" alt="Profile" class="rounded-circle ">
                  @endif
                  <h2>{{Auth::user()->name}}</h2>
                </div>
              </div> 
            </div>
    
            <div class="col-xl-8 mb-3">
    
              <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
    
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="false" role="tab" tabindex="-1">Overview</button>
                    </li>
    
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" role="tab" tabindex="-1">Edit Profile</button>
                    </li>
    
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings" aria-selected="false" role="tab" tabindex="-1">Settings</button>
                    </li>
    
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="true" role="tab">Change Password</button>
                    </li>
    
                  </ul>
                  <div class="tab-content pt-2">
    
                    <div class="tab-pane fade profile-overview active show" id="profile-overview" role="tabpanel">
                      <h5 class="card-title mt-4">About</h5>
                      <p class="small fst-italic">{{Auth::user()->about}}</p>
    
                      <h5 class="card-title mt-4">Profile Details</h5>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label txt-primary">Full Name</div>
                        <div class="col-lg-9 col-md-8 txt-secondary ">:{{Auth::user()->name}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label txt-primary">Company</div>
                        <div class="col-lg-9 col-md-8 txt-secondary ">:</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label txt-primary">Job</div>
                        <div class="col-lg-9 col-md-8 txt-secondary ">:</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label txt-primary">Country</div>
                        <div class="col-lg-9 co txt-secondary l-md-8">:{{Auth::user()->country}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label txt-primary">Address</div>
                        <div class="col-lg-9 col-md-8 txt-secondary ">:{{Auth::user()->r_address}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label txt-primary">Phone</div>
                        <div class="col-lg-9 col-md-8 txt-secondary ">:{{Auth::user()->phone}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label txt-primary">Email</div>
                        <div class="col-lg-9 col-md-8 txt-secondary ">:{{Auth::user()->email}}</div>
                      </div>
    
                    </div>
    
                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">
    
                      <!-- Profile Edit Form -->
                      <form>
                        <div class="row mb-3">
                          <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                          <div class="col-md-8 col-lg-9">
                            <img src="{{ asset('images/'.Auth::user()->photo)}}" width="160px" class="rounded-2" alt="Profile">

                            <div class="pt-2 d-flex align-items-center gap-3">
                               <input type="file" class="form-control" name="" id="">
                               <button class="btn btn-danger" title="Remove my profile image"> <iconify-icon icon="ph:trash"></iconify-icon></button>
                            </div>

                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                          <div class="col-md-8 col-lg-9">
                            <textarea name="about" class="form-control" id="about" style="height: 100px"> </textarea>
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="country" type="text" class="form-control" id="Country" value="USA">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                          </div>
                        </div> 
    
                        <div class="text-center">
                          <button type="submit" class="btn-theme px-4">Save Changes</button>
                        </div>
                      </form><!-- End Profile Edit Form -->
    
                    </div>
    
                    <div class="tab-pane fade pt-3" id="profile-settings" role="tabpanel">
    
                      <!-- Settings Form -->
                      <form>
    
                        <div class="row mb-3">
                          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                          <div class="col-md-8 col-lg-9">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="changesMade" checked="">
                              <label class="form-check-label" for="changesMade">
                                Changes made to your account
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="newProducts" checked="">
                              <label class="form-check-label" for="newProducts">
                                Information on new products and services
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="proOffers">
                              <label class="form-check-label" for="proOffers">
                                Marketing and promo offers
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="securityNotify" checked="" disabled="">
                              <label class="form-check-label" for="securityNotify">
                                Security alerts
                              </label>
                            </div>
                          </div>
                        </div>
    
                        <div class="text-center">
                          <button type="submit" class="btn-theme px-4">Save Changes</button>
                        </div>
                      </form><!-- End settings Form -->
    
                    </div>
    
                    <div class="tab-pane fade pt-3 " id="profile-change-password" role="tabpanel">
                      <!-- Change Password Form -->
                      <form>
    
                        <div class="row mb-3">
                          <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="password" type="password" class="form-control" id="currentPassword">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                          </div>
                        </div>
    
                        <div class="text-center">
                          <button type="submit" class="btn-theme px-4">Change Password</button>
                        </div>
                      </form><!-- End Change Password Form -->
    
                    </div>
    
                  </div><!-- End Bordered Tabs -->
    
                </div>
              </div>
    
            </div>
          </div>
    </div>
</section>

{{-- <section class="campaign default" id="viewContainer">
    <div class="container">
       
       <div class="col-lg-10 mx-auto">
        <h3 class="fw-bold darkerGrotesque-bold txt-primary mb-5">Your Profile</h3>
        <div class="row">
            <div class="col-lg-4 fs-5 shadow-sm p-4 border">
                @if (isset(Auth::user()->photo))
                    <img src="{{ asset('images/'.Auth::user()->photo)}}" class="img-fluid" alt="">
                @else
                    <img src="https://via.placeholder.com/510x440.png" class="img-fluid" alt="">
                @endif
                
            </div>
            <div class="col-lg-8 fs-5 shadow-sm p-4 border d-flex align-items-center position-relative">
                <div class="row darkerGrotesque-semibold "> 

                        <p class="mb-1"> Name: {{ Auth::user()->name }} </p>
                        <p class="mb-1"> Surname: {{ Auth::user()->sur_name }} </p>
                        <p class="mb-1"> Phone: {{ Auth::user()->phone }} </p>
                        <p class="mb-1"> Email: {{ Auth::user()->email }} </p>
                        <p class="mb-1"> House Number: {{ Auth::user()->house_number }} </p>
                        <p class="mb-1"> Street: {{ Auth::user()->street_name }} </p>
                        <p class="mb-1"> Town: {{ Auth::user()->town }} </p>
                        <p class="mb-1"> Post Code: {{ Auth::user()->postcode }} </p>
                   
                   

                </div>
                <button class="editProfile" id="editProfileBtn"><iconify-icon icon="material-symbols:edit"></iconify-icon></button>
            </div>

        </div>
       </div>
    </div>
</section>

<section class="campaign default" id="editContainer">
    <div class="container">
        <div class="row">
            <h3 class="fw-bold darkerGrotesque-bold txt-primary mb-5">Update Profile</h3>
        </div>
        <div class="row">
            <div class="col-lg-12 fs-5 shadow-sm p-4 border">
                <div class="row darkerGrotesque-semibold">
                    <div class="col-lg-10">
                        <div class="ermsg"></div>
                        <div class="row">
                            <div class="col-lg-4 ">
                                <div class="form-group mb-3">
                                    <input class="form-control fs-5" type="text" id="name" name="name" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <input class="form-control fs-5" type="text" id="sur_name" name="sur_name" value="{{Auth::user()->sur_name}}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <input class="form-control fs-5" type="text" id="phone" name="phone" value="{{Auth::user()->phone}}">
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <input class="form-control fs-5" type="email" id="email" name="email" value="{{Auth::user()->email}}">
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <input class="form-control fs-5" type="text" id="house_number" name="house_number" value="{{Auth::user()->house_number}}">
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <input class="form-control fs-5" type="text" id="street_name" name="street_name" value="{{Auth::user()->street_name}}">
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <input class="form-control fs-5" type="text" id="town" name="town" value="{{Auth::user()->town}}">
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <input class="form-control fs-5" type="text" id="postcode" name="postcode" value="{{Auth::user()->postcode}}">
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <input class="form-control fs-5" type="password" id="password" name="password" placeholder="Password">
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <input class="form-control fs-5" type="password" id="confirm_password" name="" placeholder="Confirm Password">
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group mb-3 text-center">
                            @if (isset(Auth::user()->photo))
                                <img src="{{ asset('images/'.Auth::user()->photo)}}" class="img-fluid mb-2 mx-auto rounded " width="120px" alt="">
                            @else
                                <img src="https://via.placeholder.com/510x440.png" class="img-fluid mb-2 mx-auto rounded " width="120px" alt="">
                            @endif
                            <p class="mb-1 text-start">Change profile Photo</p>
                            <input class="form-control fs-5" type="file" id="image" name="image">
                        </div>
                    </div>
                   
                    
                    <div class="col-lg-12 mt-3">
                        <div class="form-group">
                            <button id="updateBtn" class="ms-0 btn-theme bg-primary">Update Profile</button>
                            <button id="FormCloseBtn" class="ms-0 btn-theme bg-secondary">Close</button>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</section>  --}}


@endsection
@section('script')
<script>
    $(document).ready(function () {

        $("#editContainer").hide();
        $("#editProfileBtn").click(function(){
            $("#viewContainer").hide(100);
            $("#editContainer").show(300);

        });
        $("#FormCloseBtn").click(function(){
            $("#editContainer").hide(200);
            $("#viewContainer").show(100);
        });

        //header for csrf-token is must in laravel
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            //
            var url = "{{URL::to('/user/profile-update')}}";
            // console.log(url);
            $("#updateBtn").click(function(){
                var file_data = $('#image').prop('files')[0];
                if(typeof file_data === 'undefined'){
                    file_data = 'null';
                }
                var form_data = new FormData();
                form_data.append('image', file_data);
                form_data.append("name", $("#name").val());
                form_data.append("sur_name", $("#sur_name").val());
                form_data.append("phone", $("#phone").val());
                form_data.append("email", $("#email").val());
                form_data.append("house_number", $("#house_number").val());
                form_data.append("street_name", $("#street_name").val());
                form_data.append("town", $("#town").val());
                form_data.append("postcode", $("#postcode").val());
                form_data.append("password", $("#password").val());
                form_data.append("confirm_password", $("#confirm_password").val());
                
                $.ajax({
                    url: url,
                    method: "POST",
                    contentType: false,
                    processData: false,
                    data:form_data,
                    success: function (d) {
                        if (d.status == 303) {
                            $(".ermsg").html(d.message);
                        }else if(d.status == 300){
                            pagetop();
                            $(".ermsg").html(d.message);
                            window.setTimeout(function(){location.reload()},2000)
                        }
                    },
                    error: function (d) {
                        console.log(d);
                    }
                });
            });

    });

    
</script>
@endsection
