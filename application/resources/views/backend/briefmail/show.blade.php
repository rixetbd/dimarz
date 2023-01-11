@extends('backend.master')

@section('page_title', 'Brief BY Mail')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/datatables.css">
<style>
    .toggle_btn {
        font-size: 20px;
        cursor: pointer;
    }
    label{
        color: #919191;
    }
    ol,
    ul {
        padding-left: 1rem;
    }
    .font-20500li,
    .font-20500{
        font-size:15px;
        font-weight:500;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Mail From - {{$data->firstname}} {{$data->lname}}
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('briefmail.index')}}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </span>
                    </h5>
                    <span>From - {{$data->email}}</span>
                </div>

                <div class="card-body" style="min-height: 70vh">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-8">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 my-3">
                                    <label class="">Name</label>
                                    <div class="font-20500">{{$data->firstname}} {{$data->lname}}</div>
                                </div>
                                <div class="col-sm-12 col-md-6 my-3">
                                    <label class="">Email</label>
                                    <div class="font-20500"><a href="mailto:{{$data->email}}">{{$data->email}}</a></div>
                                </div>
                                <div class="col-sm-12 col-md-6 my-3">
                                    <label class="">Company Name</label>
                                    <div class="font-20500">{{$data->company}}</div>
                                </div>
                                <div class="col-sm-12 col-md-6 my-3">
                                    <label class="">Website</label>
                                    <div class="font-20500">{{$data->website}}</div>
                                </div>
                                <div class="col-sm-12 col-md-6 my-3">
                                    <label class="">Location</label>
                                    <div class="font-20500">{{$data->city}}, {{$data->country}}</div>
                                </div>
                                <div class="col-sm-12 col-md-6 my-3">
                                    <label class="">Budget</label>
                                    <div class="font-20500">{{$data->budget}}</div>
                                </div>
                                <div class="col-sm-12 col-md-6 my-3">
                                    <label class="">Service</label>
                                    <div>
                                        <ol class="font-20500li">
                                            @foreach ($servicedata as $item)
                                            <li>{{$item}}</li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 my-3">
                                    <label class="">Refer By</label>
                                    <div class="font-20500">{{$data->referby}}</div>
                                </div>

                                <div class="col-sm-12 col-md-6 my-3">
                                    <label class="">Please share anything that will helpprepare for our
                                        meeting.</label>
                                    <div class="">
                                        <div class="font-20500">
                                            {{$data->message}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="font-20500">Mail created at {{$data->created_at->format('d M Y')}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_script')
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.min.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/griddata.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.js"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/backend')}}/js/datatable/datatables/datatable.custom.js"></script>


@endsection
