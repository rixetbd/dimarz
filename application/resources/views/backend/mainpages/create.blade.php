@extends('backend.master')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<style>
    .meta_box {
        width: 380px;
        overflow: hidden;
        border: 1px solid #ccc;
    }

    .meta_box .img_box {
        position: relative;
        max-height: 280px;
        overflow: hidden;
    }

    .meta_box h6 {
        font-weight: 400;
        font-size: 13px;
    }

    .meta_box h5 {
        font-size: 18px;
    }

    .meta_box P {
        font-size: 12px;
        font-weight: 600;
        color: #898989;
    }

    .overly {
        cursor: pointer;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: #cccccce3;
        height: -webkit-fill-available;
        justify-content: center;
        align-items: center;
        font-size: 80px;
        color: #fff;
        display: none;
    }
    .meta_box .img_box:hover .overly {
        display: flex;
        transition: 1s ease-in;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-xl-12">
            <form class="card" action="{{route('backend.mainpage.store')}}" enctype="multipart/form-data" method="POST" id="faqQA">
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Add MainPage
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.mainpage.index')}}">Check Faq List
                            </a>
                        </span>
                    </h4>
                    <span>Add new question & answer</span>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>

                {{-- faq_id	question	answer	index	created_at --}}

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input class="form-control" type="text" id="title" name="title" placeholder="Title"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="subtitle">Subtitle</label>
                                <input class="form-control" type="text" id="subtitle" name="subtitle"
                                    placeholder="Subtitle" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="title">About Service Left</label>
                                <select class="form-select" id="faq_id" name="faq_id" required>
                                    <option value="">-- Select a Sub Category</option>
                                    @foreach ($subCategories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="title">About Service Right</label>
                            <select class="form-select" id="faq_id" name="faq_id" required>
                                <option value="">-- Select a Sub Category</option>
                                @foreach ($subCategories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0" for="faq_id">Sub Category Name</label>
                                <select class="form-select" id="faq_id" name="faq_id" required>
                                    <option value="">-- Select a Sub Category</option>
                                    @foreach ($subCategories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0" for="faq_id">Work Article</label>
                                <select class="form-select" id="faq_id" name="faq_id" required>
                                    <option value="">-- Select a Sub Category</option>
                                    @foreach ($articlesList as $item)
                                    <option value="{{$item->id}}">{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0" for="faq_id">FAQ</label>
                                <select class="form-select" id="faq_id" name="faq_id" required>
                                    <option value="">-- Select a FAQ</option>
                                    @foreach ($faqList as $item)
                                    <option value="{{$item->id}}">{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0" for="faq_id">Working Process</label>
                                <select class="form-select" id="faq_id" name="faq_id" required>
                                    <option value="">-- Select a work process</option>
                                    @foreach ($workProcessList as $item)
                                    <option value="{{$item->id}}">{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <h5 class="pt-3 pb-2">SEO Features</h5>

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="meta_title">Meta Title</label>
                                    <input class="form-control" type="text" id="meta_title" name="meta_title"
                                        placeholder="Meta Title" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="meta_author">Meta Author</label>
                                    <input class="form-control" type="text" id="meta_author" name="meta_author"
                                        placeholder="Meta Author" required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="meta_description">Description</label>
                                    <textarea class="form-control" placeholder="Enter meta description"
                                        id="meta_description" name="meta_description"></textarea>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="meta_keywords">Keywords</label>
                                    <textarea class="form-control" placeholder="Enter meta keywords" id="meta_keywords"
                                        name="meta_keywords"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label pt-0" for="picture">Picture</label>
                                    <input class="form-control" type="file" name="picture" id="picture"
                                        onchange="document.getElementById('meta_thumbnail').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pt-4">
                            <div class="d-flex justify-content-center">
                                <div class="meta_box">
                                    <div class="img_box">
                                        <img id="meta_thumbnail" class="img-fluid" src="{{asset('assets/backend/images/meta-thumbnail.png')}}" alt="">
                                        <div class="overly">
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <h6>http://auto-domain.com/</h6>
                                        <h5 id="meta_pre_title">Meta Title Placed Here</h5>
                                        <p id="meta_pre_description">With the help of Meta Tags, you can experiment with your content and see a
                                            sample of how it will appear on Google, Facebook and other search
                                            engines.</p>
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
    $('#category_id').on('change', function () {

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

{{-- <script>
    $('#faqQA').on('submit', function (e) {
        e.preventDefault();
        var form = this;
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            dataType: 'json',
            processData: false,
            contentType: false,
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
</script> --}}

<script>

    $('.img_box').click(()=>{
        $('#picture').click();
    });

    $('#meta_title').on('keyup', function(){
        var data = $('#meta_title').val();
        if (data != '') {
            $('#meta_pre_title').html(data);
        }else{
            $('#meta_pre_title').html("Meta Title Placed Here");
        }
    });

    $('#meta_description').on('keyup', function(){
        var data = $('#meta_description').val();
        if (data != '') {
            $('#meta_pre_description').html(data);
        }else{
            $('#meta_pre_description').html(`With the help of Meta Tags, you can experiment with your content and see a sample of how it will appear on Google, Facebook and other search engines.`);
        }
    });

</script>

@endsection
