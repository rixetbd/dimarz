@extends('backend.master')

@section('page_title', 'Edit Blog')

@section('custom_style')
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
        font-size: 16px;
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

    #cke_description {
        border: 1px solid #d3d3d3;
    }

    #cke_1_contents {
        height: 550px !important;
    }

    iframe.cke_reset {
        height: 100%;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <form class="card" action="{{route('backend.blog.update')}}" method="POST" enctype="multipart/form-data"
            id="blogAdd">
            @csrf
            <div class="col-sm-12 col-md-12 col-xl-12">
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Edit Blog
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.blog.index')}}">Check Blog List</a>
                        </span>
                    </h4>
                    <span>Edit Blog Information</span>
                    <div class="card-options">
                        <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i
                                class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                            data-bs-toggle="card-remove"><i class="fe fe-x"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label required" for="title">Title</label>
                                <input class="form-control" type="hidden" id="id" name="id" value="{{$article->id}}" required>
                                <input class="form-control" type="text" id="title" name="title" placeholder="Title" value="{{$article->title}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label required" for="slug">Page Url (Automatic Generate)</label>
                                <input class="form-control" type="text" id="slug" name="slug" placeholder="slug" value="{{$article->slug}}"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="title">Comment (Optional)</label>
                                <input class="form-control" type="text" id="comment" name="comment"
                                    placeholder="Comment" value="{{$article->comment}}">
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div>
                                <label class="form-label required" for="description">Description</label>
                                <textarea class="form-control" placeholder="Enter Description" id="description" name="description">{{$article->description}}</textarea>
                                {{-- <div id="description"></div> --}}
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <label class="form-label pt-0" for="meta_thumbnail">Blog Thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail" id="thumbnail">
                            <div class="meta_pic_caption">* Try uploading an image of 400x210 pixels or it will
                                crop automatically.</div>
                        </div>

                        <h5 class="pt-3 pb-2">SEO Features</h5>

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label class="form-label" for="meta_title">Meta Title</label>
                                    <input class="form-control" type="text" id="meta_title" name="meta_title" value="{{($meta != ''?$meta->meta_title:'')}}"
                                        placeholder="Meta Title" required>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="meta_author">Meta Author</label>
                                    <input class="form-control" type="text" id="meta_author" name="meta_author" value="{{($meta != ''?$meta->meta_author:'')}}"
                                        placeholder="Meta Author" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="comment">Comment (Optional)</label>
                                    <input class="form-control" type="text" id="comment" name="meta_comment" value="{{($meta != ''?$meta->comment:'')}}"
                                        placeholder="Comment">
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label class="form-label" for="meta_description">Description</label>
                                    <textarea class="form-control" placeholder="Enter meta description"
                                        id="meta_description" name="meta_description">{{($meta != ''?$meta->meta_description:'')}}</textarea>
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label class="form-label" for="meta_keywords">Keywords</label>
                                    <textarea class="form-control"
                                        placeholder="Enter meta keywords ( Keywords separated by comma )"
                                        id="meta_keywords" name="meta_keywords">{{($meta != ''?$meta->meta_keywords:'')}}</textarea>
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
                                        @if ($meta)
                                            @if (!empty($meta->meta_thumbnail))
                                                <img id="meta_thumbnail_view" class="img-fluid" src="{{asset('application/uploads/meta/'.$meta->meta_thumbnail)}}" alt="meta-thumbnail.png">
                                            @else
                                                <img id="meta_thumbnail_view" class="img-fluid" src="{{asset('assets/backend/images/meta-thumbnail.png')}}" alt="meta-thumbnail.png">
                                            @endif
                                        @endif
                                        <div class="overly">
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="p-2" style="min-height: 160px;">
                                        <h6 class="meta_slug">{{url('/')}}</h6>
                                        <h5 id="meta_pre_title">Meta Title Placed Here</h5>
                                        <p id="meta_pre_description">With the help of Meta Tags, you can experiment with
                                            your content and see a
                                            sample of how it will appear on Google, Facebook and other search
                                            engines.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Update Blog</button>
            </div>
        </form>
    </div>
</div>

@endsection


@section('custom_script')
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/ckeditor.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/styles.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/ckeditor.custom.js"></script>
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

<script>
    $('#title').on('keyup', function () {
        var sluggen = "{{url('/')}}";
        var data = $('#title').val();
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
            url: `{{route('backend.gigpage.slug.check')}}`,
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
                if (!$('#title').val()) {
                    $('#slug').removeClass('border-success border-danger bg-danger text-white');
                }
            }
        });
    });
</script>

@endsection
