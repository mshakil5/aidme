@extends('admin.layouts.admin')

@section('content')

<!-- content area -->
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="pagetitle pb-2">
                 Volunteer
            </div>
        </div>
    </div>
<div id="addThisFormContainer">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="background-color: #fdf3ee">
                <div class="card-header">
                    <h5>New Pages</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="ermsg">
                        </div>
                        <div class="col-md-12">
                          <div class="tile">
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                  {!! Form::open(['url' => 'admin/master/create','id'=>'createThisForm']) !!}
                                  {!! Form::hidden('codeid','', ['id' => 'codeid']) !!}
                                  @csrf

                                  

                                  <div>
                                      <label for="name">Name</label>
                                      <input type="text" id="name" name="name" class="form-control">
                                  </div>

                                  

                                
                                <div>
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control">
                                </div>

                                
                                <div>
                                    <label for="date">Date</label>
                                    <input type="date" id="date" name="date" class="form-control">
                                </div>

                                
                                
                                <div>
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address" class="form-control">
                                </div>

                                    
                                </div>
                                <div class="col-lg-6">
                                    
                                    <div>
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>

                                    <div>
                                        <label for="print_name">Print Name</label>
                                        <input type="text" id="print_name" name="print_name" class="form-control">
                                    </div>

                                    <div>
                                        <label for="profession">Profession</label>
                                        <input type="text" id="profession" name="profession" class="form-control">
                                    </div>

                                    <div>
                                        <label for="dob">Date of birth</label>
                                        <input type="date" id="dob" name="dob" class="form-control">
                                    </div>
    

                                </div>
                              </div>
                              <div class="tile-footer">
                                  <input type="button" id="addBtn" value="Create" class="btn btn-primary">
                                  <input type="button" id="FormCloseBtn" value="Close" class="btn btn-warning">
                                  {!! Form::close() !!}
                              </div>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

<button id="newBtn" type="button" class="btn-theme bg-primary">Add New</button>
<div class="stsermsg"></div>
    <hr>
    <div id="contentContainer">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: #fdf3ee">
                    <div class="card-header">
                        <h3> All Data</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="exdatatable">
                            <thead>
                                <tr>
                                    <th style="text-align: center">ID</th>
                                    <th style="text-align: center">Date</th>
                                    <th style="text-align: center">Name</th>
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">Phone</th>
                                    <th style="text-align: center">DOB</th>
                                    <th style="text-align: center">Print Name</th>
                                    <th style="text-align: center">Address</th>
                                    <th style="text-align: center">Profession</th>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td style="text-align: center">{{$item->volunteerid}}</td>
                                        <td style="text-align: center">{{$item->date}}</td>
                                        <td style="text-align: center">{{$item->name}}</td>
                                        <td style="text-align: center">{{$item->email}}</td>
                                        <td style="text-align: center">{{$item->phone}}</td>
                                        <td style="text-align: center">{{$item->dob}}</td>
                                        <td style="text-align: center">{{$item->print_name}}</td>
                                        <td style="text-align: center">{{$item->address}}</td>
                                        <td style="text-align: center">{{$item->profession}}</td>
                                        <td style="text-align: center">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input fundraiserstatus" type="checkbox" role="switch"  data-id="{{$item->id}}" id="fundraiserstatus" @if ($item->status == 1) checked @endif >
                                            </div>
                                        </td>
                                        <td style="text-align: center">

                                            <a class="detailsBtn" href="javascript:void(0)" data-volunteer='@json($item)'><i class="fa fa-eye" style="color: #17a2b8;font-size:16px;"></i></a>

                                           

                                            <a id="EditBtn" rid="{{$item->id}}"><i class="fa fa-edit" style="color: #2196f3;font-size:16px;"></i></a>
                                            <a id="deleteBtn" rid="{{$item->id}}"><i class="fa fa-trash-o" style="color: red;font-size:16px;"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
</div>


@endsection
@section('script')
 <script>
    (function($){
        // ensure modal exists (only once)
        if (!$('#volunteerDetailsModal').length) {
            $('body').append(
                '<div class="modal fade" id="volunteerDetailsModal" tabindex="-1" aria-hidden="true">' +
                    '<div class="modal-dialog modal-lg modal-dialog-centered">' +
                    '<div class="modal-content">' +
                        '<div class="modal-header">' +
                        '<h5 class="modal-title">Volunteer details</h5>' +
                        '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                        '</div>' +
                        '<div class="modal-body">' +
                        '<table class="table table-borderless mb-0">' +
                            '<tbody>' +
                            '<tr><th style="width:30%;">ID</th><td id="vd-id"></td></tr>' +
                            '<tr><th>Volunteer ID</th><td id="vd-volunteerid"></td></tr>' +
                            '<tr><th>Name</th><td id="vd-name"></td></tr>' +
                            '<tr><th>Email</th><td id="vd-email"></td></tr>' +
                            '<tr><th>Phone</th><td id="vd-phone"></td></tr>' +
                            '<tr><th>Profession</th><td id="vd-profession"></td></tr>' +
                            '<tr><th>Print Name</th><td id="vd-print_name"></td></tr>' +
                            '<tr><th>Date</th><td id="vd-date"></td></tr>' +
                            '<tr><th>DOB</th><td id="vd-dob"></td></tr>' +
                            '<tr><th>Address</th><td id="vd-address"></td></tr>' +
                            '<tr><th>Status</th><td id="vd-status"></td></tr>' +
                            '<tr><th>Created At</th><td id="vd-created_at"></td></tr>' +
                            '<tr><th>Updated At</th><td id="vd-updated_at"></td></tr>' +
                            '<tr><th>Created By</th><td id="vd-created_by"></td></tr>' +
                            '<tr><th>Updated By</th><td id="vd-updated_by"></td></tr>' +
                            '</tbody>' +
                        '</table>' +
                        '</div>' +
                        '<div class="modal-footer">' +
                        '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>' +
                        '</div>' +
                    '</div>' +
                    '</div>' +
                '</div>'
            );
        }

        // delegate click handler (safe if script inserted per-row)
        $(document).off('click', '.detailsBtn').on('click', '.detailsBtn', function () {
            var data = $(this).attr('data-volunteer');
            try {
                var v = (typeof data === 'object') ? data : JSON.parse(data);
            } catch (e) {
                // fallback: try fetching from server by id
                var id = $(this).data('id') || ($(this).attr('rid') || null);
                if (id) {
                    $.get("{{ url('/admin/volunteer') }}/" + id, function(d){
                        fillAndShow(d);
                    });
                }
                return;
            }
            fillAndShow(v);
        });

        function fillAndShow(v) {
            $('#vd-id').text(v.id ?? '');
            $('#vd-volunteerid').text(v.volunteerid ?? '');
            $('#vd-name').text(v.name ?? '');
            $('#vd-email').text(v.email ?? '');
            $('#vd-phone').text(v.phone ?? '');
            $('#vd-profession').text(v.profession ?? '');
            $('#vd-print_name').text(v.print_name ?? '');
            $('#vd-date').text(v.date ?? '');
            $('#vd-dob').text(v.dob ?? '');
            $('#vd-address').text(v.address ?? '');
            $('#vd-status').text(v.status == 1 ? 'Active' : 'Inactive');
            $('#vd-created_at').text(v.created_at ?? '');
            $('#vd-updated_at').text(v.updated_at ?? '');
            $('#vd-created_by').text(v.created_by ?? '');
            $('#vd-updated_by').text(v.updated_by ?? '');
            var modalEl = new bootstrap.Modal(document.getElementById('volunteerDetailsModal'));
            modalEl.show();
        }
    })(jQuery);
</script>
<script>
    $(function() {
      $('.fundraiserstatus').change(function() {
        var url = "{{URL::to('/admin/active-volunteer')}}";
          var status = $(this).prop('checked') == true ? 1 : 0;
          var id = $(this).data('id');
           console.log(id);
          $.ajax({
              type: "GET",
              dataType: "json",
              url: url,
              data: {'status': status, 'id': id},
              success: function(d){
                // console.log(data.success)
                if (d.status == 303) {
                        pagetop();
                        $(".stsermsg").html(d.message);
                        window.setTimeout(function(){location.reload()},2000)
                    }else if(d.status == 300){
                        pagetop();
                        $(".stsermsg").html(d.message);
                        window.setTimeout(function(){location.reload()},2000)
                    }
                },
                error: function (d) {
                    console.log(d);
                }
          });
      })
    })
</script>
<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $("#addThisFormContainer").hide();
            $("#newBtn").click(function(){
                clearform();
                $("#newBtn").hide(100);
                $("#addThisFormContainer").show(300);

            });
            $("#FormCloseBtn").click(function(){
                window.setTimeout(function(){location.reload()},100)
                $("#addThisFormContainer").hide(200);
                $("#newBtn").show(100);
                clearform();
            });
            //header for csrf-token is must in laravel
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            //
            var url = "{{URL::to('/admin/volunteer')}}";
            var upurl = "{{URL::to('/admin/volunteer-update')}}";
            // console.log(url);
            $("#addBtn").click(function(){
            //   alert("#addBtn");
                if($(this).val() == 'Create') {

                    var form_data = new FormData();
                    
                    form_data.append("date", $("#date").val());
                    form_data.append("name", $("#name").val());
                    form_data.append("email", $("#email").val());
                    form_data.append("phone", $("#phone").val());
                    form_data.append("print_name", $("#print_name").val());
                    form_data.append("address", $("#address").val());
                    form_data.append("dob", $("#dob").val());
                    form_data.append("profession", $("#profession").val());
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
                                $(".ermsg").html(d.message);
                                window.setTimeout(function(){location.reload()},2000)
                          }
                      },
                      error: function (d) {
                          console.log(d);
                      }
                  });
                }
                //create  end
                //Update
                if($(this).val() == 'Update'){

                    var form_data = new FormData();
                    form_data.append("date", $("#date").val());
                    form_data.append("name", $("#name").val());
                    form_data.append("email", $("#email").val());
                    form_data.append("phone", $("#phone").val());
                    form_data.append("print_name", $("#print_name").val());
                    form_data.append("address", $("#address").val());
                    form_data.append("profession", $("#profession").val());
                    form_data.append("dob", $("#dob").val());
                    form_data.append("codeid", $("#codeid").val());
                    $.ajax({
                        url:upurl,
                        type: "POST",
                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        data:form_data,
                        success: function(d){
                            console.log(d);
                            if (d.status == 303) {
                                $(".ermsg").html(d.message);
                                pagetop();
                            }else if(d.status == 300){
                                $(".ermsg").html(d.message);
                                window.setTimeout(function(){location.reload()},2000)
                            }
                        },
                        error:function(d){
                            console.log(d);
                        }
                    });
                }
                //Update
            });
            //Edit
            $("#contentContainer").on('click','#EditBtn', function(){
                //alert("btn work");
                codeid = $(this).attr('rid');
                //console.log($codeid);
                info_url = url + '/'+codeid+'/edit';
                //console.log($info_url);
                $.get(info_url,{},function(d){
                    populateForm(d);
                    pagetop();
                    window.scrollTo(0, 300);
                });
            });
            //Edit  end

            //Delete
            $("#contentContainer").on('click','#deleteBtn', function(){
                if(!confirm('Sure?')) return;
                codeid = $(this).attr('rid');
                info_url = url + '/'+codeid;
                $.ajax({
                    url:info_url,
                    method: "GET",
                    type: "DELETE",
                    data:{
                    },
                    success: function(d){
                        if(d.success) {
                            alert(d.message);
                            location.reload();
                        }
                    },
                    error:function(d){
                        console.log(d);
                    }
                });
            });
            //Delete

            function populateForm(data){
                $("#date").val(data.date);
                $("#name").val(data.name);
                $("#email").val(data.email);
                $("#phone").val(data.phone);
                $("#print_name").val(data.print_name);
                $("#address").val(data.address);
                $("#profession").val(data.profession);
                $("#dob").val(data.dob);
                $("#codeid").val(data.id);
                $("#addBtn").val('Update');
                $("#addThisFormContainer").show(300);
                $("#newBtn").hide(100);
            }
            function clearform(){
                $('#createThisForm')[0].reset();
                $("#addBtn").val('Create');
            }
            
        });

        $('#exdatatable').DataTable({
            order: [[0, 'desc']]
        });

            
    </script>
      <script>
        function copyToClipboard(id) {
            document.getElementById(id).select();
            document.execCommand('copy');
            swal("Copied!");
        }
    </script>
@endsection