@extends('backend.master')
@section('page_title', 'Copyright')
@section('custom_style')
<style>
    #cke_description {
        border: 1px solid #d3d3d3;
    }

    #cke_1_contents {
        height: 35vh;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                <h3>General Settings</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
                    {{-- <li class="breadcrumb-item">Users</li> --}}
                    <li class="breadcrumb-item active">Company Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">

    <div class="user-profile">
        <div class="row">
            <div class="col-xl-3 col-lg-12 col-md-4 xl-35">
                <div class="default-according style-1 faq-accordion job-accordion">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="p-0">
                                        <button class="btn btn-link ps-0" data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon2" aria-expanded="true"
                                            aria-controls="collapseicon2">Instruction</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2"
                                    data-parent="#accordion">
                                    <div class="card-body post-about">
                                        <ul>
                                            <li>
                                                <div class="icon"><i class="fa fa-user text-success"></i></div>
                                                <div>
                                                    <h6>use this shortcode <span class="text-primary">[year]</span></h6>
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
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">Copyright</h4>
                        <div class="card-options"><a class="card-options-collapse" href="#"
                                data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                    class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <form class="" action="{{route('backend.settings.copyright.update')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label class="form-label required">Copyright Text</label>
                                    <textarea id="description" cols="30" rows="10" name="copyright" required>
                                        {{($copyright!=''?$copyright->copyright:'')}}
                                    </textarea>
                                </div>

                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block" type="submit">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!-- user profile fifth-style end-->
        </div>
    </div>

</div>
<!-- Container-fluid Ends-->

@endsection


@section('custom_script')

<script src="{{asset('assets/backend')}}/js/editor/ckeditor/ckeditor.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/styles.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/ckeditor.custom.js"></script>

<script>

    function autoSettings()
    {
        $.ajax({
            type: "GET",
            url: `{{route('backend.settings.autoSettings')}}`,
            data: {
                'id':'null',
            },
            success: function (data) {
                $('.company_name').html(data.company_name);
                $('.company_email').html(data.company_email);
                $('.company_phone').html(data.company_phone);
                $('.company_address').html(data.company_address);
                $('.company_city').html(data.company_city);
                $('.company_country').html(data.company_country);
                $('.company_website').html((data.company_website ? data.company_website : 'N/A'));
                $('.company_website').attr( 'href' , data.company_website);

                if (data != '') {
                    $('#user_pic').attr('src', `{{url('/')}}/application/uploads/company/${data.company_logo}`);
                } else {
                    $('#user_pic').attr('src', `{{url('/')}}/application/uploads/company/default.png`);
                }
            }
        });
    }

    autoSettings();

</script>

@endsection


@section('custom_style')

@endsection
