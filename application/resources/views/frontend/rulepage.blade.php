@extends('frontend.master')

@section('meta_tag')
@include('meta::manager',[
'title'=> 'Privacy Policy - Dimarz'
])
@endsection

{{--  --}}
@section('custom_css')
<style>
    #privacy_policy h2 {
        font-size: 1.6rem;
    }

    #header_top.single_service_page {
        min-height: 260px !important;
    }
    #header_top {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #header_top .special_text{
        font-size: 5rem;
    }
    #privacy_policy h2{
        font-size: 1.5rem;
    }
    #privacy_policy h3{
        font-size: 1.25rem;
    }
</style>
@endsection



@section('content')

<section id="header_top" class="single_service_page" style="padding-top: 5rem !important;">
    <div class="special_text_box">
        <h1 class="special_text text-center text-white">
            {{$data->title}}
        </h1>
    </div>
</section>

<div class="padding_40 py-4 pt-5" id="privacy_policy">
    {!! $data->description !!}
</div>
<div class="line_breaker">
    <div class="line"></div>
</div>
@endsection



@section('custom_js')



@endsection
