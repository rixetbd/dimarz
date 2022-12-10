@extends('backend.master')

@section('custom_style')
 <style>
    #cke_description{
        border: 1px solid #d3d3d3;
    }
    #cke_1_contents{
        height: 35vh;
    }
 </style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-xl-12">
            <form class="card" action="{{route('backend.articles.update')}}" method="POST">
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Edit Article
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.articles.index')}}">Check Article List</a>
                        </span>
                    </h4>
                    <span>Add a new article</span>
                    <div class="card-options">
                        <a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label required" for="title">Title</label>
                                <input class="form-control" type="text" id="id" name="id" value="{{$article->id}}" required>
                                <input class="form-control" type="text" id="title" name="title" placeholder="Title" value="{{$article->title}}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="title">Comment (Optional)</label>
                                <input class="form-control" type="text" id="comment" name="comment" placeholder="Comment" value="{{$article->comment}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <label class="form-label required" for="description">Description</label>
                                <textarea class="form-control" placeholder="Enter Description" id="description" name="description">{{$article->description}}</textarea>
                                {{-- <div id="description"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Update Article</button>
                    {{-- <button type="reset" class="btn btn-danger">Reset</button> --}}
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


@section('custom_script')
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/ckeditor.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/styles.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/ckeditor.custom.js"></script>


@endsection


