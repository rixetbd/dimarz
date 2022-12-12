@extends('backend.master')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<style>

    .img_upload_box {
        width: 25%;
        padding-right: 15px;
    }
    .img_upload_box:last-child{
        padding-right: 0px;
    }
    .img{
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 200px;
        background: #4a4a4a;
        margin: 10px 0;
        border-radius: 5px;
    }
    .img_upload_box .img img{
        width: 100%;
        transform: translate(-0%, -0%);
    }
    .img_upload_box .img input{
        display: block;
        height: 100%;
        width: 100%;
        opacity: 0;
    }
    #picture1,#picture2,#picture3,#picture4{cursor: pointer;}
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>ALL Easy Steps</h5>
                    <span>List of Easy Steps</span>
                    <hr>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($easysteps as $item)
                            <li class="my-2">
                                <i class="fa fa-link me-2"></i> {{$item->title}} - {{$item->comment}}
                                <a class="float-end text-primary ms-2" href="{{route('backend.pagewidget.destroy', $item->id)}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a class="float-end text-primary ms-2" href="{{route('backend.pagewidget.destroy', $item->id)}}">
                                    <i class="fa fa-eye"></i>
                                </a>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-8 col-xl-8">
            <form class="card" action="{{route('backend.pagewidget.store')}}" method="POST" enctype="multipart/form-data"> {{--  id="faqQA" --}}
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Add Easy Step
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.faq.index')}}">Check Easy Steps List
                            </a>
                        </span>
                    </h4>
                    <span>Add new easy step</span>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>

                {{-- title	comment	picture --}}

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input class="form-control" type="text" id="title" name="title" placeholder="Title" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="comment">Comment</label>
                                <input class="form-control" type="text" id="comment" name="comment" placeholder="Comment" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                                <div class="d-flex">
                                    <div class="img_upload_box">
                                        <div>
                                            <label class="form-label" for="text">Text One</label>
                                            <input type="text" class="form-control" name="text[]">
                                        </div>
                                        <div class="img">
                                            {{-- <label class="form-label" for="picture">Picture</label> --}}
                                            <img class="img-fluid" src="" alt="" id="picture1">
                                            <input type="file" class="form-control step_img" name="picture[]" onchange="document.getElementById('picture1').src = window.URL.createObjectURL(this.files[0])" required>
                                        </div>
                                    </div>
                                    <div class="img_upload_box">
                                        <div>
                                            <label class="form-label" for="text">Text Two</label>
                                            <input type="text" class="form-control" name="text[]" required>
                                        </div>
                                        <div class="img">
                                            {{-- <label class="form-label" for="picture">Picture</label> --}}
                                            <img class="img-fluid" src="" alt="" id="picture2">
                                            <input type="file" class="form-control step_img" name="picture[]" onchange="document.getElementById('picture2').src = window.URL.createObjectURL(this.files[0])" required>
                                        </div>
                                    </div>
                                    <div class="img_upload_box">
                                        <div>
                                            <label class="form-label" for="text">Text Three</label>
                                            <input type="text" class="form-control" name="text[]" required>
                                        </div>
                                        <div class="img">
                                            {{-- <label class="form-label" for="picture">Picture</label> --}}
                                            <img class="img-fluid" src="" alt="" id="picture3">
                                            <input type="file" class="form-control step_img" name="picture[]" onchange="document.getElementById('picture3').src = window.URL.createObjectURL(this.files[0])" required>
                                        </div>
                                    </div>
                                    <div class="img_upload_box">
                                        <div>
                                            <label class="form-label" for="text">Text Four</label>
                                            <input type="text" class="form-control" name="text[]" required>
                                        </div>
                                        <div class="img">
                                            {{-- <label class="form-label" for="picture">Picture</label> --}}
                                            <img class="img-fluid" src="" alt="" id="picture4">
                                            <input type="file" class="form-control step_img" name="picture[]" onchange="document.getElementById('picture4').src = window.URL.createObjectURL(this.files[0])" required>
                                        </div>
                                    </div>

                                </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Add Q&A</button>
                    {{-- <button type="reset" class="btn btn-danger">Reset</button> --}}
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


@section('custom_script')
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.min.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/griddata.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.js"></script>

<script>


    $('#picture1').click(()=>{
        $('.step_img:eq(0)').click();
    });
    $('#picture2').click(()=>{
        $('.step_img:eq(1)').click();
    });
    $('#picture3').click(()=>{
        $('.step_img:eq(2)').click();
    });
    $('#picture4').click(()=>{
        $('.step_img:eq(3)').click();
    });


    $('#category_id').on('change', function(){

        $.ajax({
            type: "POST",
            url: `{{route('backend.get_subcategory_auto')}}`,
            data: {
                category_id: $('#category_id').val(),
            },
            success: function (data) {

                let html = '<option value="">-- Select a sub category</option>';

                $.each(data.data, function (i, value) {
                    html += `<option value="${value.id}">${value.name}</option>`;
                });

                $('#subcategory_id').html(html);
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });
</script>

<script>


$('#faqQA').on('submit', function (e) {
    e.preventDefault();
        var form = this;
        $.ajax({
            url:$(form).attr('action'),
            method:$(form).attr('method'),
            data:new FormData(form),
            dataType:'json',
            processData:false,
            contentType:false,
            success: function (data) {
                $('input').val('');
                $('select').val('');
                $('textarea').val('');
                notyf.success("Q&A Saved Successfully!");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
    });
});
</script>

@endsection


