@extends('backend.master')
@section('page_title', 'Sub Category')
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
            <form class="card" action="{{route('backend.subcategories.store')}}" method="POST" enctype="multipart/form-data" id="articlesAdd">
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Add Sub Category
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.subcategories.index')}}">Check Sub Category List</a>
                        </span>
                    </h4>
                    <span>Add a new Sub Category</span>
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
                        <div class="col-sm-12 col-md-6 mb-3">
                            <label class="form-label pt-0 required" for="CategoryID">Category Name</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                <option value="">-- Select a category</option>
                                @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                                <label class="form-label required" for="name">Sub Category Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="col-md-12 mb-3">
                                <label class="form-label" for="title">Comment (Optional)</label>
                                <input class="form-control" type="text" id="comment" name="comment" placeholder="Comment">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label pt-0 required" for="short_info">Short Info</label>
                            <textarea class="form-control" id="short_info" name="short_info" placeholder="Short Info"
                                required></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                                <label class="form-label required" for="description">Description</label>
                                <textarea class="form-control" placeholder="Enter Description" id="description" name="description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Add Sub Category</button>
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


