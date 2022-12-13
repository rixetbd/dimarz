@extends('backend.master')

@section('page_title', 'Profile')

@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                <h3>User Profile</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="user-profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">My Profile
                            @if (Auth::user()->id == $user->id)
                            <span class="edit edit_bio"><i class="fa fa-edit"></i>
                                Edit Profile</span>
                            @endif
                            </h4>
                        <div class="card-options"><a class="card-options-collapse" href="#"
                                data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                    class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <form class="" action="{{route('backend.user.update')}}" method="POST"
                            enctype="multipart/form-data" id="userUpdate">
                            @csrf
                            {{-- <input type="hidden" name="id" value="{{$user->id}}"> --}}
                            <div class="row mb-2">
                                <div class="profile-title">
                                    <div class="media">
                                        @if ($user)
                                        <div class="img_box_100" id="img_box_100">
                                            <img id="user_pic" class="img-fluid"
                                                src="{{asset('application/uploads/users')}}/{{($user->avatar != ''?$user->avatar:'default.png')}}"
                                                alt="">
                                            <input type="hidden" name="id" value="{{$user->id}}">
                                        </div>
                                        @endif

                                        <div class="media-body p-4">
                                            @if ($user)
                                            <h3 class="mb-1 f-20 txt-primary">{{$user->name}}</h3>
                                            <p class="f-12 m-0">{{$user->getRoleName->name}}</p>
                                            <p class="f-12">{{$user->email}}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h6 class="form-label">Bio</h6>

                                @if (Auth::user()->bio != '')
                                <textarea class="form-control" rows="5" id="user_bio" name="user_bio"
                                    placeholder="Describe Yourself" disabled>{{Auth::user()->bio}}</textarea>
                                @else
                                <textarea class="form-control" rows="5" id="user_bio" name="user_bio"
                                    placeholder="Describe Yourself"
                                    disabled>I'm {{Auth::user()->name}}, an active member of the company. I enjoy helping others and am always looking to make a difference. I love spending time with my co-workers, trying new things, and exploring new technologies.</textarea>
                                @endif

                            </div>

                            @if (Auth::user()->id == $user->id)
                            <div class="mb-3">
                                <label class="form-label">Picture</label>
                                <input class="form-control" type="file" name="picture" id="picture"
                                    onchange="document.getElementById('user_pic').src = window.URL.createObjectURL(this.files[0])">

                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block" id="submitBTN" type="submit">Save</button>
                            </div>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-4 xl-35">
                <div class="default-according style-1 faq-accordion job-accordion">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="p-0">
                                        <button class="btn btn-link ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon2" aria-expanded="true"
                                            aria-controls="collapseicon2">About Me</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2"
                                    data-parent="#accordion">
                                    <div class="card-body post-about">
                                        <ul>
                                            <li>
                                                <div class="icon"><i data-feather="briefcase"></i></div>
                                                <div>
                                                    <h5>Work at Dimarz</h5>
                                                    <p>From 2022</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i data-feather="book"></i></div>
                                                <div>
                                                    <h5>studied computer science</h5>
                                                    <p>at london univercity - 2015</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i data-feather="heart"></i></div>
                                                <div>
                                                    <h5>relationship status</h5>
                                                    <p>N/A</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i data-feather="map-pin"></i></div>
                                                <div>
                                                    <h5>lived in london</h5>
                                                    <p>last 5 year</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i data-feather="droplet"></i></div>
                                                <div>
                                                    <h5>Blood Group</h5>
                                                    <p>N/A</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (Auth::user()->id == $user->id)
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">Change Password</h4>
                    </div>
                    <div class="card-body">
                        <form class="" action="{{route('user.password.change')}}" method="POST" id="userPassUpdate">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control" type="text" name="password" id="password" placeholder="Enter old password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input class="form-control" type="text" name="newpassword" id="newpassword" placeholder="Enter new password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input class="form-control" type="text" name="confirmpassword" id="confirmpassword" placeholder="Enter confirm password" required>
                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block" type="submit">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            @endif
            <!-- user profile fifth-style end-->
        </div>
    </div>

</div>
<!-- Container-fluid Ends-->

@endsection


@section('custom_script')

<script>
    $('.edit_bio').click(function () {
        if ($('.edit_bio i').hasClass('fa-edit')) {
            $('#user_bio').removeAttr('disabled');
            $('.edit_bio').html('<i class="fa fa-floppy-o" id="#save_info"></i> Save');
        } else {
            $('#user_bio').attr('disabled', '');
            $('.edit_bio').html('<i class="fa fa-edit"></i> Edit Profile');
        }
    });

    $('#img_box_100').click(() => {
        $('#picture').click();
    });

</script>

<script>
    $('#userUpdate').on('submit', function (e) {
        e.preventDefault();
        // alert('Ho');
        var form = this;
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (data) {
                $('#picture').val('');
                if ($('.edit_bio i').hasClass('fa-floppy-o')) {
                    $('#user_bio').attr('disabled', '');
                    $('.edit_bio').html('<i class="fa fa-edit"></i>');
                }
                setTimeout(
                    function () {
                        //do something special
                        autoauth();
                    }, 1500);
                notyf.success("Employee Update Successfully!");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });

</script>

<script>
    $('#userPassUpdate').on('submit', function (e) {
        e.preventDefault();
        var newpassword = $('#newpassword').val();
        var confirmpassword = $('#confirmpassword').val();
        if (newpassword != confirmpassword) {
            notyf.error("Confirm Password Doesn't Match.");
        } else {
            // alert('Ho');
            var form = this;
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: new FormData(form),
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.message == 0) {
                        notyf.error("Old Password Doesn't Match.");
                    } else {
                        notyf.success("Password Update Successfully.");
                    }
                },
                error: function (request, message, error) {

                }
            });
        }

    });

</script>


@endsection


@section('custom_style')

@endsection
