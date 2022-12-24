@extends('backend.master')
@section('page_title', 'Add Testimonial')
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
            <form class="card" action="{{route('backend.testimonial.store')}}" method="POST" enctype="multipart/form-data" id="articlesAdd">
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Add Testimonial
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.testimonial.index')}}">Check Testimonial</a>
                        </span>
                    </h4>
                    <span>Add a new Testimonial</span>
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
                        <div class="col-md-6 mb-3">
                                <label class="form-label required" for="name">Client Name</label>
                                <input class="form-control" type="text" id="name" name="client_name" placeholder="Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                                <label class="form-label required" for="title">Location</label>
                                <input class="form-control" type="text" id="comment" name="location" placeholder="Where are you from ?">
                        </div>
                        <div class="col-md-12 mb-3">
                                <label class="form-label required" for="description">Message</label>
                                <textarea class="form-control" placeholder="Enter Message" id="description" name="text"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Add Testimonial</button>
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


