@extends('backend.master')
@section('page_title', 'Edit Job Post')
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
            <form class="card" action="{{route('backend.jobboard.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Edit Job Post
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.jobboard.index')}}">Check Job Post</a>
                        </span>
                    </h4>
                    <span>Edit Job Post</span>
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
                                <label class="form-label required" for="title">Job Title</label>
                                <input class="form-control" type="hidden" id="id" name="id" required value="{{$data->id}}">
                                <input class="form-control" type="text" id="title" name="title" placeholder="Job Title" required value="{{$data->title}}">
                        </div>
                        <div class="col-md-6 mb-3">
                                <label class="form-label required" for="vacency">Vacency</label>
                                <input class="form-control" type="number" id="vacency" name="vacency" placeholder="Total Vacency" required value="{{$data->vacency}}">
                        </div>
                        <div class="col-md-6 mb-3">
                                <label class="form-label required" for="job_status">Job Status</label>
                                <input class="form-control" type="text" id="job_status" name="job_status" placeholder="Job Status ( Ex- Full-time, Part Time, Remote )" required value="{{$data->job_status}}">
                        </div>
                        <div class="col-md-6 mb-3">
                                <label class="form-label" for="deadline">Deadline</label>
                                <input class="form-control" type="date" id="deadline" name="deadline" value="{{$data->deadline}}">
                        </div>
                        <div class="col-md-12 mb-3">
                                <label class="form-label required" for="description">Message</label>
                                <textarea class="form-control" placeholder="Enter Message" id="description" name="description" required>{{$data->description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Update Job Post</button>
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
