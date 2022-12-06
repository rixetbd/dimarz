@extends('backend.master')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<style>
    .img{
        position: relative;
        width: 100%;
        height: 200px;
        background: #4a4a4a;
        margin: 10px 0;
        border-radius: 5px;
    }

    .img_upload_box .img input{
        display: block;
        height: 100%;
        width: 100%;
        opacity: 0;
    }
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>ALL FAQ</h5>
                    <span>List of FAQ</span>
                    <hr>
                </div>
                <div class="card-body">
                    <ul>
                        {{-- @foreach ($faq as $item)
                            <li class="my-2">
                                <i class="fa fa-link me-2"></i> {{$item->title}} - {{$item->comment}}
                                <a class="float-end text-primary" href="{{route('backend.faq.show', $item->id)}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </li>
                        @endforeach --}}
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-8 col-xl-8">
            <form class="card" action="{{route('backend.pagewidget.store')}}" method="POST" enctype="multipart/form-data"> {{--  id="faqQA" --}}
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Add Service
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.faq.index')}}">Check Faq List
                            </a>
                        </span>
                    </h4>
                    <span>Add new question & answer</span>
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
                            <div>
                                <div class="d-flex">
                                    <div class="img_upload_box m-1">
                                        <div>
                                            <label class="form-label" for="text">text</label>
                                            <input type="text" class="form-control" name="text[]">
                                        </div>
                                        <div class="img">
                                            {{-- <label class="form-label" for="picture">Picture</label> --}}
                                            <input type="file" class="form-control step_img" name="picture[]" >
                                        </div>
                                    </div>
                                    <div class="img_upload_box m-1">
                                        <div>
                                            <label class="form-label" for="text">text</label>
                                            <input type="text" class="form-control" name="text[]">
                                        </div>
                                        <div class="img">
                                            {{-- <label class="form-label" for="picture">Picture</label> --}}
                                            <input type="file" class="form-control step_img" name="picture[]" >
                                        </div>
                                    </div>
                                    <div class="img_upload_box m-1">
                                        <div>
                                            <label class="form-label" for="text">text</label>
                                            <input type="text" class="form-control" name="text[]">
                                        </div>
                                        <div class="img">
                                            {{-- <label class="form-label" for="picture">Picture</label> --}}
                                            <input type="file" class="form-control step_img" name="picture[]" >
                                        </div>
                                    </div>
                                    <div class="img_upload_box m-1">
                                        <div>
                                            <label class="form-label" for="text">text</label>
                                            <input type="text" class="form-control" name="text[]">
                                        </div>
                                        <div class="img">
                                            {{-- <label class="form-label" for="picture">Picture</label> --}}
                                            <input type="file" class="form-control step_img" name="picture[]" >
                                        </div>
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

    // $('.step_img').on('change', function(){

    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
    //             reader.onload = function (e) {
    //             // var image = $('#img').attr('src', e.target.result);
    //             console.log(e.target.result);
    //         }
    //         reader.readAsDataURL(input.files[0]);
    //     }


    //     // onchange="document.getElementById('meta_thumbnail_view').src = window.URL.createObjectURL(this.files[0])"
    //     console.log($(this).readAsDataURL(this.files[0]));
    //     // $(this).prev().css('background-image', imageUrl);
    // });


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


