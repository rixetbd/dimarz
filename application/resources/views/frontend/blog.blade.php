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
    .post-content{
        max-height:105px;
        overflow: hidden;
    }
    </style>
@endsection



@section('content')

<section id="header_top" class="single_service_page" style="padding-top: 5rem !important;">
    <div class="special_text_box">
        <h1 class="special_text text-center text-white">
            Blog
        </h1>
    </div>
</section>

@if (count($data))
<section class="" style="background: #fff;padding:50px 40px;">
    <div class="blog-container">
        @foreach ($data as $item)
        <div class="post">
            <p class="date">{{$item->created_at->format('d M Y')}}</p>
            <h1>{{$item->title}}</h1>
            <div class="post-content">
                {!! $item->description !!}
            </div>
            <div class="post-footer">
                <a href="{{route('frontend.blog.single', ['slug'=>$item->slug])}}">Read More..</a>
            </div>
        </div>
        <hr />
        @endforeach
    </div>
</section>

@endif
<div class="line_breaker">
    <div class="line"></div>
</div>


@endsection



@section('custom_js')



@endsection
