@extends('frontend.master')

@section('meta_tag')
@include('meta::manager',[
'title'=> 'Dimarz - Home'
])
@endsection

{{--  --}}
@section('custom_css')
    <style>
        #header_top.single_service_page {
        min-height: 260px !important;
    }

    #header_top {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #header_top .special_text {
        font-size: 5rem;
    }
    /* .post-content{
        max-height:105px;
        overflow: hidden;
    } */
    </style>
@endsection



@section('content')

<section id="header_top" class="single_service_page" style="padding-top: 5rem !important;">
    <div class="special_text_box text-center">
        <h1 class="special_text text-center text-white">
            {{$data->title}}
        </h1>
        <p><a href="{{url('/')}}">Home</a> - <a href="{{route('frontend.blog')}}">Blog</a></p>
    </div>
</section>

<section class="" style="background: #fff;padding:50px 40px;">
    <div class="blog-container">
        <div class="post">
            <p class="date">{{$data->created_at->format('d M Y')}}</p>
            <h1>{{$data->title}}</h1>
            <div class="post-content">
                {!! $data->description !!}
            </div>
            {{-- <div class="post-footer">
                <a href="#">Read More..</a>
            </div> --}}
        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
</div>


@endsection



@section('custom_js')



@endsection
