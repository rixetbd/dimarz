@extends('frontend.master')


@section('meta_tag')
@if(array_key_exists('meta_info', $data))
@include('meta::manager',[
'title' => $data['title'] .' | '. config('app.name', 'DiMarz'),
'author' => $data['meta_info']->meta_author,
'description' => $data['meta_info']->meta_description,
'keywords' => $data['meta_info']->meta_keywords,
'image' => asset('/application/uploads/meta/'.$data['meta_info']->meta_thumbnail),
])
@endif
@endsection


@section('custom_css')
<link href="{{asset('assets/frontend')}}/css/mainpage_page.css" rel="stylesheet">
<style>
    .leads_data_table {
        white-space: nowrap;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
    }

    .font_poppins {
        font-family: 'Poppins', sans-serif;
    }

    .filter_btn .btn_city {
        display: inline-block;
        justify-content: space-between;
        align-items: center;
        /* box-shadow: 0 0 10px 0 #ddd; */
        border-radius: 2px !important;
        /* border: 1px solid #dbdbdb !important; */
        border: none;
        padding: 5px 10px !important;
        font-size: 14px;
        width: 175px;
        background: #f8f8f8;
        transition: all 0.3s ease 0s;
        text-align: left;
    }

    .btn_city input[type="checkbox"] {
        margin-top: 4px;
        float: right;
        transform: scale(1.2);
    }

    .leads_data_table th {
        background-color: #5a80a0 !important;
        color: #fff;
        font-size: 14px;
        font-weight: 400;
        letter-spacing: 1px;
        border: 1px solid #0000004d;
        border-right: 1px solid #cbdaec;
    }

    .leads_data_table th:last-child {
        border-right: 1px solid #0000004d;
    }

    .leads_data_table td {
        border: 1px solid #0000004d;
    }

    .bg_theme {
        color: #fff;
        background-color: #47657e !important;
    }

    .service_article h1,
    .service_article h2 {
        font-size: 24px;
    }
    .service_article h3 {
        font-size: 22px;
    }
    .service_article h4 {
        font-size: 20px;
    }
    .service_article p {
        text-align: justify;
    }

    .service_article ul {
        padding-left: 1rem !important;
    }

    .about_section_left h1,
    .about_section_left h2,
    .about_section_left h3,
    .about_section_left h4,
    .about_section_left h5,
    .about_section_left h6 {
        color: #484a7d;
    }

    .about_section_left h1,
    .about_section_left h2,
    .about_section_left h3{
        font-size: 22px;
    }

    .about_section_left ul {
        padding-left: 1rem;
    }

    .about_section_right p {
        opacity: 70%;
        font-style: italic;
    }
    .about_section_left ul{
        padding-left: 0rem;
    }
    .about_section_left ul li{
        list-style: none;
    }
    .about_section_left ul li::before{
        content: "\274F";
        font-size: 20px;
        color: #5a80a0;
        padding-right: 10px;
    }
    .font_l_10{
        font-size: 3.5rem !important;
    }
</style>
@endsection

@section('content')
<section id="top_focus">

    <section id="header_top" class="single_service_page">
        <div class="special_text_box">
            @php
                $title_length = Str::length($data['title']);
            @endphp
            <h2 class="special_text text-center text-white {{($title_length > 10?'font_l_10':'font_l_10sm')}}">
                {{$data['title']}}
            </h2>
            <h3 class="text-center floating_text text-white">Services</h3>
            <h3 class="gig_focus_title">{{$data['sub_title']}}</h3>
            <p class="text-center animate_text_type"><span class="typed-text_block"><span
                        class="typed-text"></span><span class="cursor">&nbsp;</span></span></p>
        </div>

        <form action="" method="post">
            <div class="briefing_div">
                <input type="text" placeholder="example@your-mail.com" required>
                <button type="submit">Start Briefing Your Project</button>
            </div>
        </form>
    </section>

    @if(array_key_exists('easy_steps', $data))
    <section id="working_process" class="page_part_offset" data-sectionname="Our Working Process"
        data-sectionnameindex="1">
        <div class="row">
            @foreach ($data['easy_steps'] as $item)
            <div class="col-sm-12 col-md-3 d-flex justify-content-center my-2">
                <div class="content_box gig_page">
                    <div class="w-100 px-1">
                        <img class="gig_page" src="{{asset('application/uploads/stepsdata/'.$item->picture)}}" alt="">
                        @if ($item->text != '')
                            <h4>{{$item->text}}</h4>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif

    @if (count($data['related_service']) != 0)

    <section class="padding_40 clickable_links_area">
        <div class="p-4 service_need_list">
            <h5 class="text-white">You may need</h5>
            <div class="d-flex auto_height">
                @forelse ($data['related_service'] as $item)
                <a href="{{route('frontend.mainpage', $item->slug)}}">{{$item->page_title}}</a>
                @empty

                @endforelse
            </div>
        </div>
    </section>
    @endif

    <div class="line_breaker">
        <div class="line"></div>
        <!-- <div class="icon_box">
                            <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
                        </div> -->
    </div>

    {{-- about_service_left --}}
    @if(array_key_exists('about_service_left', $data) || array_key_exists('about_service_right', $data))
    <section class="page_part_offset py-5 padding_40" style="background: #fff;">
        <div class="row">
            <h4 class="super_heading_text">
                @php
                    $as_title = explode(' ', $data['about_service_left']->title);
                @endphp
                @foreach ($as_title as $item)
                    <span>{{$item}}</span>
                @endforeach
            </h4>
            <hr>
            @if(array_key_exists('about_service_left', $data))
            <div class="col-sm-12 col-md-6 about_section_left">
                {!! $data['about_service_left']->description !!}
            </div>
            @endif
            @if(array_key_exists('about_service_right', $data))
            <div class="col-sm-12 col-md-6">
                <div style="border-left: 1px solid #fdba13;padding-left: 20px;" class="about_section_right">

                    <h5 class="py-2" style="font-size: 24px;color: #484a7d;">Industries We Serve
                    </h5>

                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">We are Covering</h3>
                        <h4 class="in_sub_title"><span class="in_title">Many Industries
                                Globally</span>
                        </h4>
                    </div>

                    {!! $data['about_service_right']->description !!}

                    <div class="icons_area_sec">
                        <!-- <h4 class="text-center">Are your needs match with us ?</h4> -->
                        <!-- Floating Logo || Start -->
                        <div class="icons">
                            <div class="icon-container icons-1">
                                <div class="icon"> <img src="" alt=""> Software</div>
                            </div>

                            <div class="icon-container icons-2">
                                <div class="icon">Legal</div>
                            </div>

                            <div class="icon-container icons-3">
                                <div class="icon">eCommerce</div>
                            </div>

                            <div class="icon-container icons-4">
                                <div class="icon">
                                    Healthcare </div>
                            </div>
                            <div class="icon-container icons-5">
                                <div class="icon">Real Estate</div>
                            </div>

                            <div class="icon-container icons-6">
                                <div class="icon">Legal</div>
                            </div>

                            <div class="icon-container icons-7">
                                <div class="icon">eCommerce</div>
                            </div>

                            <div class="icon-container icons-8">
                                <div class="icon">
                                    Healthcare </div>
                            </div>
                        </div>
                        <!-- Floating Logo || End -->
                    </div>

                </div>
            </div>
            @endif
        </div>
    </section>
    @endif

    {{-- gigs_list --}}
    @if(array_key_exists('gigs_list', $data))
    @if (count($data['gigs_list']) != 0)
    <section class="page_part_offset f_poppin py-5 padding_40" style="background: #47657e;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-sm-12 col-md-8">
                <h4 class="text-center text-white" style="font-size: 40px;">Find your right service
                    below</h4>
            </div>
        </div>
    </section>
    @endif

    @forelse ($data['gigs_list'] as $item)
    <section class="single_part service_card_section overflow-hidden service_card_offset">
        <div class="row align-items-center">
            <div class="s_card">
                <div class="row">
                    <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                        <div class="rotate_box">
                            <div class="w-100">
                                <h6>Service</h6>
                                <hr>
                                <h5>{{$data['category_id']}}</h5>
                                <hr>
                                <h5 class="sub_category">{{$data['title']}}</h5>
                                <hr>
                                <h4 class="m-0 p-0 underlined underlined--gradient">{{$item->title}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="s_card_content">
                        <div>
                            <h3>{{$item->title}}</h3>

                            {!! $item->short_description !!}
                            <div class="s_card_absolute_2">
                                <a class="btn" href="{{route('frontend.gigpage', $item->slug)}}"
                                    style="font-size: 14px;"><span class="text_1">You can
                                        discover everything for your needs</span><span class="text_2">Visit Page <i
                                            class="fas fa-arrow-right"></i></span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="line_breaker">
        <div class="line"></div>
    </div>
    @empty

    @endforelse
    @endif


    {{-- @include('frontend.includes.leads') --}}


    <div class="line_breaker">
        <div class="line"></div>
    </div>

    @if(array_key_exists('work_article', $data))
    <section class="padding_40" style="background-color: #fff;">
        <div class="service_article py-5">
            <h4 class="super_heading_text"><span>Work ! </span><span> Read Up</span></h4>
            <hr>
            {{-- <div>
                <h5 class="py-2" style="font-size: 20px;color: #484a7d;">{{$data['work_article']->title}}</h5>
            </div> --}}
            {!! $data['work_article']->description !!}
        </div>
    </section>
    @endif


    @if(array_key_exists('faq_title', $data) && $data['faq_title'] != '')
    <section class="page_part_offset p-0 pt-3" data-sectionname="FAQ" data-sectionnameindex="3"
        style="background: #5a80a0;">
        <div style="background-color: #ffffff;" class="padding_40 py-5">
            <div class="focus_line_after_title text_dark_theme bg_white">
                <h4>{{$data['faq_title']->title}}</h4>
            </div>
            <p class="text-center" style="font-size: 25px;">{{$data['faq_title']->subtitle}}</p>
            <div class="row py-5">
                <div class="col-sm-12 col-md-12">
                    <div class="accordion accordion-flush" id="accordionFlushFAQ">

                        @forelse ($data['faq_data'] as $key=>$item)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="FAQflush-heading{{$key}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#FAQflush-collapse{{$key}}" aria-expanded="false"
                                    aria-controls="FAQflush-collapse{{$key}}">
                                    {{$item->question}}
                                </button>
                            </h2>
                            <div id="FAQflush-collapse{{$key}}" class="accordion-collapse collapse"
                                aria-labelledby="FAQflush-heading{{$key}}" data-bs-parent="#accordionFlushFAQ">
                                <div class="accordion-body">{{$item->answer}}</div>
                            </div>
                        </div>
                        @empty
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="FAQflush-heading0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#FAQflush-collapse0" aria-expanded="false"
                                    aria-controls="FAQflush-collapse0">
                                    No information added yet, please add questions first then answer.
                                </button>
                            </h2>
                            <div id="FAQflush-collapse0" class="accordion-collapse collapse"
                                aria-labelledby="FAQflush-heading0" data-bs-parent="#accordionFlushFAQ">
                                <div class="accordion-body">Give The Answer</div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(array_key_exists('working_process', $data))
    <section class="padding_40 py-5" style="background-color: #47657e;">
        <div>
            <div class="focus_line_after_title text-white bg_dark_theme">
                <h4>{{$data['working_process']->title}}</h4>
            </div>
            <p class="text-center" style="font-size: 25px;color: #9cb7cd !important;">
                {{$data['working_process']->subtitle}}</p>
        </div>
        @forelse ($data['working_process_data'] as $key=>$item)
        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">{{$key+1}}</div>
            <div class="working_process_right_card_two">
                <h5>{{$item->heading}}</h5>
                <p>{{$item->description}}</p>
            </div>
        </div>
        @empty

        @endforelse
    </section>
    @endif

@endsection
