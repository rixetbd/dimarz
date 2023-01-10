@extends('backend.master')

@section('page_title', 'Consultation')

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
                            <a class="btn btn-primary" href="{{route('consultation.index')}}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </span>
                    </h5>
                    <span>From - {{$data->email}}</span>
                </div>

                <div class="card-body" style="min-height: 70vh">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-8">
                            <div class="my-3">
                                <label class="">Name</label>
                                <div>{{$data->firstname}} {{$data->lname}}</div>
                            </div>
                            <div class="my-3">
                                <label class="">Email</label>
                                <div>{{$data->email}}</div>
                            </div>
                            <div class="my-3">
                                <label class="">Company Name</label>
                                <div>{{$data->company}}</div>
                            </div>
                            <div class="my-3">
                                <label class="">Website</label>
                                <div>{{$data->website}}</div>
                            </div>
                            <div class="my-3">
                                <label class="">Location</label>
                                <div>{{$data->city}}, {{$data->country}}</div>
                            </div>
                            <div class="my-3">
                                <label class="">Service</label>
                                <div>
                                {{-- @foreach ($servicedata as $item)
                                    {{$item['page_title']}}
                                @endforeach --}}
                                {{$data->service}}
                                </div>
                            </div>
                            <div class="my-3">
                                <label class="">Budget</label>
                                <div>{{$data->budget}}</div>
                            </div>
                            <div class="my-3">
                                <label class="">Refer By</label>
                                <div>{{$data->referby}}</div>
                            </div>

                            <div class="my-3">
                                <label class="">Please share anything that will helpprepare for our
                                    meeting.</label>
                                <div class="">
                                    <div>
                                        {{$data->message}}
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="">Event created at {{$data->created_at->format('d M Y')}}</div>
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
