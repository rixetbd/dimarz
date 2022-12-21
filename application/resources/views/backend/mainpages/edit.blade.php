@extends('backend.master')
@section('page_title', 'Update Mainpage')
@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<style>
    .meta_box {
        width: 400px;
        overflow: hidden;
        border: 1px solid #ccc;
    }

    .meta_box .img_box {
        position: relative;
        height: 210px;
        overflow: hidden;
        width: 400px;
    }

    .meta_box h6 {
        font-weight: 400;
        font-size: 13px;
        color: #898989;
    }

    .meta_box h5 {
        font-size: 18px;
        color: #727272;
    }

    .meta_box P {
        font-size: 12px;
        font-weight: 500;
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

    .meta_pic_caption {
        padding-top: 5px;
        font-size: 13px;
        color: #898989;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-xl-12">
            <form class="card" action="{{route('backend.mainpage.update')}}" enctype="multipart/form-data" method="POST"
                id="faqQA">
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Edit MainPage
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.mainpage.index')}}">Check Mainpage List
                            </a>
                        </span>
                    </h4>
                    <span>Edit mainpage information</span>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label required" for="page_title">Title</label>
                                <input class="form-control" type="hidden" name="id" required value="{{$mainpage->id}}">
                                <input class="form-control" type="text" id="page_title" name="page_title"
                                    placeholder="Page Title" required value="{{$mainpage->page_title}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label required" for="page_sub_title">Subtitle</label>
                                <input class="form-control" type="text" id="page_sub_title" name="page_sub_title"
                                    placeholder="Page Sub Title" required value="{{$mainpage->page_sub_title}}">
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0 required" for="category_id">Category Name</label>
                                <select class="form-select" id="category_id" name="category_id" required {{(count($categories) == '0'?'disabled':'')}}>
                                    <option value="">-- Select a Category</option>
                                    @foreach ($categories as $item)
                                    <option value="{{$item->id}}" {{($item->id == $mainpage->category_id?'selected':'')}}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0 required" for="subcategory_id">Sub Category Name</label>
                                <select class="form-select" id="subcategory_id" name="subcategory_id" required>
                                    <option value="">-- Select a Category First</option>
                                    @foreach ($subCategories as $item)
                                        <option value="{{$item->id}}" {{($item->id == $mainpage->subcategory_id?'selected':'')}}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label required" for="slug">Page Url (Automatic Generate)</label>
                                <input class="form-control" type="text" id="slug" name="slug"
                                    placeholder="slug" required value="{{$mainpage->slug}}">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0" for="easy_steps">3 Easy Steps</label>
                                <select class="form-select" id="easy_steps" name="easy_steps" {{(count($easyStepList) == '0'?'disabled':'')}}>
                                    <option value="">-- Select a Easy Steps</option>
                                    @foreach ($easyStepList as $item)
                                    <option value="{{$item->id}}" {{($item->id == $mainpage->easy_steps?'selected':'')}}>{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        @php
                            $left = json_decode($mainpage->about_service)->about_service_left;
                            $right = json_decode($mainpage->about_service)->about_service_right;
                        @endphp

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="about_service_left">About Service Left</label>
                                <select class="form-select" id="about_service_left" name="about_service_left" {{(count($aboutSectionLeft) == '0'?'disabled':'')}}>
                                    <option value="">-- Select a About Section</option>
                                    @foreach ($aboutSectionLeft as $item)
                                        <option value="{{$item->id}}" {{($item->id == $left?'selected':'')}}>{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="about_service_right">About Service Right</label>
                            <select class="form-select" id="about_service_right" name="about_service_right" {{(count($aboutSectionRight) == '0'?'disabled':'')}}>
                                <option value="">-- Select a About Section</option>
                                @foreach ($aboutSectionRight as $item)
                                <option value="{{$item->id}}" {{($item->id == $right?'selected':'')}}>{{$item->title}} - {{$item->comment}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0 required" for="work_article">Work Article</label>
                                <select class="form-select" id="work_article" name="work_article" required {{(count($articlesList) == '0'?'disabled':'')}}>
                                    <option value="">-- Select A Work Article</option>
                                    @foreach ($articlesList as $item)
                                    <option value="{{$item->id}}" {{($item->id == $mainpage->work_article?'selected':'')}}>{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0 required" for="faq_id">FAQ</label>
                                <select class="form-select" id="faq_id" name="faq_id" required {{(count($faqList) == '0'?'disabled':'')}}>
                                    <option value="">-- Select a FAQ</option>
                                    @foreach ($faqList as $item)
                                    <option value="{{$item->id}}" {{($item->id == $mainpage->faq_id?'selected':'')}}>{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0 required" for="working_process">Working Process</label>
                                <select class="form-select" id="working_process" name="working_process" required {{(count($workProcessList) == '0'?'disabled':'')}}>>
                                    <option value="">-- Select a work process</option>
                                    @foreach ($workProcessList as $item)
                                    <option value="{{$item->id}}" {{($item->id == $mainpage->working_process?'selected':'')}}>{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <h5 class="pt-3 pb-2">SEO Features</h5>

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label class="form-label required" for="meta_title">Meta Title</label>
                                    <input class="form-control" type="hidden" id="meta_id" name="meta_id" value="{{($meta_info!=''?$meta_info->id:'')}}">
                                    <input class="form-control" type="text" id="meta_title" name="meta_title"
                                        placeholder="Meta Title" required value="{{($meta_info!=''?$meta_info->meta_title:'')}}">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label required" for="meta_author">Meta Author</label>
                                    <input class="form-control" type="text" id="meta_author" name="meta_author"
                                        placeholder="Meta Author" required value="{{($meta_info!=''?$meta_info->meta_author:'')}}">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="comment">Identify Comment (Optional)</label>
                                    <input class="form-control" type="text" id="comment" name="comment"
                                        placeholder="Comment" value="{{($meta_info!=''?$meta_info->comment:'')}}">
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label class="form-label required" for="meta_description">Description</label>
                                    <textarea class="form-control" placeholder="Enter meta description"
                                        id="meta_description" name="meta_description">{{($meta_info!=''?$meta_info->meta_description:'')}}</textarea>
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label class="form-label required" for="meta_keywords">Keywords</label>
                                    <textarea class="form-control" placeholder="Enter meta keywords ( Keywords separated by comma )" id="meta_keywords"
                                        name="meta_keywords">{{($meta_info!=''?$meta_info->meta_keywords:'')}}</textarea>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="form-label pt-0" for="meta_thumbnail">Meta Thumbnail</label>
                                    <input class="form-control" type="file" name="meta_thumbnail" id="meta_thumbnail"
                                        onchange="document.getElementById('meta_thumbnail_view').src = window.URL.createObjectURL(this.files[0])">
                                    <div class="meta_pic_caption">* Try uploading an image of 400x210 pixels or it will
                                        crop automatically.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pt-4">
                            <div class="d-flex justify-content-center">
                                <div class="meta_box">
                                    <div class="img_box">
                                        <img id="meta_thumbnail_view" class="img-fluid"
                                            src="{{asset(($meta_info!=''? 'application/uploads/meta/'.$meta_info->meta_thumbnail:'assets/backend/images/meta-thumbnail.png'))}}" alt="meta_thumbnail">
                                        <div class="overly">
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="p-2" style="min-height: 160px;">
                                        <h6>{{url('/')}}</h6>
                                        <h5 id="meta_pre_title">{{($meta_info!=''?$meta_info->meta_title:'Meta Title Placed Here')}}</h5>
                                        <p id="meta_pre_description">{{($meta_info!=''?$meta_info->meta_description:'With the help of Meta Tags, you can experiment with
                                            your content and see a sample of how it will appear on Google, Facebook and other search engines.')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Update Mainpage</button>
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

    $('#page_title').on('keyup', function(){
        var data = $('#page_title').val();
        var slug = data.toLowerCase().replace(/[^\w\s-]/g, '').replace(/[\s_-]+/g, '-').replace(/^-+|-+$/g, '');
        $('#slug').val(slug);
        $('#slug').keyup();
        $('.meta_slug').html(sluggen + '/' + slug);
        if (!$(this).val()) {
            $('#slug').removeClass('border-success border-danger bg-danger text-white');
        }
    });

    $('#slug').on('keyup', function () {
        $.ajax({
            type: "POST",
            url: `{{route('backend.mainpage.slug.check')}}`,
            data: {
                id: $('#id').val(),
                slug: $('#slug').val(),
            },
            success: function (data) {
                if (data.status == 1) {
                    $('#slug').addClass('border-danger bg-danger text-white');
                    $('#slug').removeClass('border-success');
                } else {
                    $('#slug').addClass('border-success');
                    $('#slug').removeClass('border-danger bg-danger text-white');
                }
                if (!$('#page_title').val()) {
                    $('#slug').removeClass('border-success border-danger bg-danger text-white');
                }
            }
        });
    });

    $('#category_id').on('change', function () {

        $.ajax({
            type: "POST",
            url: `{{route('backend.get_subcategory_auto')}}`,
            data: {
                category_id: $('#category_id').val(),
            },
            success: function (data) {

                let html = '<option value="">-- Select a Sub Category</option>';

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
    $('.img_box').click(() => {
        $('#meta_thumbnail').click();
    });

    $('#meta_title').on('keyup', function () {
        var data = $('#meta_title').val();
        if (data != '') {
            $('#meta_pre_title').html(data);
        } else {
            $('#meta_pre_title').html("Meta Title Placed Here");
        }
    });

    $('#meta_description').on('keyup', function () {
        var data = $('#meta_description').val();
        if (data != '') {
            $('#meta_pre_description').html(data);
        } else {
            $('#meta_pre_description').html(
                `With the help of Meta Tags, you can experiment with your content and see a sample of how it will appear on Google, Facebook and other search engines.`
                );
        }
    });

</script>

@endsection
