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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{asset('assets/frontend/css/custom-semantic.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/css/extra-semantic.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/flags/flag.css')}}">
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
    .about_section_left h3 {
        font-size: 22px;
    }

    .about_section_left ul {
        padding-left: 1rem;
    }

    .about_section_right p {
        opacity: 70%;
        font-style: italic;
    }

    .about_section_left ul {
        padding-left: 0rem;
    }

    .about_section_left ul li {
        list-style: none;
    }

    .about_section_left ul li::before {
        content: "\274F";
        font-size: 20px;
        color: #5a80a0;
        padding-right: 10px;
    }

    .font_l_10 {
        font-size: 3.5rem !important;
    }

</style>

<style>
    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
        font-size: 14;
    }

    .box_shadow_table {
        padding: 15px;
        box-shadow: inset 3px 3px 13.5px 0 #eeeeee;
        border-radius: 5px;
    }

    #myTableSimple_filter,
    #myTableSimple_length {
        display: none !important;
    }

    @media only screen and (max-width: 600px) {

        #myTableSimple_length,
        #myTableSimple_filter {
            display: none !important;
        }
    }

    #industry_Name_display,
    #city_name_display {
        display: inline-block;
    }

    #industry_Name_display .new_item,
    #city_name_display .new_item {
        font-size: 14px;
        text-align: justify;
        color: #000;
        background-color: #fff !important;
        padding: 8px 0 0px 10px;
        margin: 0px 10px 10px 0px;
        width: 200px;
        border: none;
        border-radius: 3px;
        line-height: 20px;
        box-shadow: 1px 1px 15px rgb(201 201 201);
    }


    #city_name_display .new_item:hover,
    #industry_Name_display .new_item:hover {
        background: #87b4d856 !important;
    }

    #city_name_display .new_item_close,
    #industry_Name_display .new_item_close {
        color: #000;
        float: right;
        /* padding-right: 10px; */
        background: #ffffff;
        border-left: 1px solid #ababab61 !important;
        margin-top: -8px;
        width: 36px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0 3px 3px 0;
        /* border-left: 1px solid #a1a1a1; */
    }

    #city_name_display .new_item_close:hover,
    #industry_Name_display .new_item_close:hover {
        background-color: #87b4d8ad;
        color: #fff
    }


    .ui.fluid.dropdown {
        /* background: #9672589e; */
        background: #fff;
        border: none;
    }

    .ui.fluid.dropdown .menu {
        color: #000;
    }

    /* .ui.fluid.dropdown .menu .item{color: #fff} */
    .ui.fluid.dropdown .default.text,
    .ui.fluid.dropdown .text {
        /* color: #fff; */
        color: #000;
    }

    /* #Filterreset {
        background: #5928e5;
        -webkit-box-shadow: inset 3px 3px 23.5px -17px #000000;
        -moz-box-shadow: inset 3px 3px 23.5px -17px #000000;
        box-shadow: inset 3px 3px 23.5px -17px #000000;
        border: 5px solid #511fd8;
        font-weight: 600 !important;
        font-size: 16px;
        margin-right: 15px;
        width: 180px;
        color: #fff !important;
        line-height: 25px;
        text-align: center;
    } */

    #myTableSimple th:last-child() {
        border-right: none
    }

    #myTableSimple th {
        background-color: #5a80a0 !important;
        /* background-color: #dacdc4; */
        /* color: #5928e5; */
        color: #fff;
        border-right: 2px solid #cbdaec;
        font-size: 14px;
        font-weight: 400;
    }

    #myTableSimple thead {
        border-bottom: #fff
    }

    /* #table_refresh{
        background-color: #5928e5 !important;
        color: #fff;
    } */

    .bg_theme {
        background-color: #5a80a0 !important;
    }

    .bg_theme_tomato {
        background-color: #fd6769 !important;
    }


    #Filterreset,
    #table_refresh {
        color: #fff;
        /* border: 1px solid #ffffff; */
        border-radius: 5px !important;
        box-shadow: 0 3px 10px -1px #0000006b;
        text-align: center;
        letter-spacing: .8px;
        /* text-transform: uppercase; */
    }

    /* #Filterreset{font-weight: 600 !important;font-size: 16px;line-height: 30px;} */
    #Filterreset {
        width: 200px;
        height: 35px;
    }


    .custom_paginate .pagination {
        overflow: hidden;
    }

    .pagination .page-item.active .page-link {
        background-color: #5a80a0 !important;
        border: none
    }

    table.dataTable thead th,
    table.dataTable thead td {
        padding: 8px !important;
    }

    table.dataTable thead>tr>th.sorting:before,
    table.dataTable thead>tr>th.sorting_asc:before,
    table.dataTable thead>tr>th.sorting_desc:before,
    table.dataTable thead>tr>th.sorting_asc_disabled:before,
    table.dataTable thead>tr>th.sorting_desc_disabled:before,
    table.dataTable thead>tr>td.sorting:before,
    table.dataTable thead>tr>td.sorting_asc:before,
    table.dataTable thead>tr>td.sorting_desc:before,
    table.dataTable thead>tr>td.sorting_asc_disabled:before,
    table.dataTable thead>tr>td.sorting_desc_disabled:before {
        bottom: 50%;
        content: "" !important;
    }

    table.dataTable thead>tr>th.sorting:after,
    table.dataTable thead>tr>th.sorting_asc:after,
    table.dataTable thead>tr>th.sorting_desc:after,
    table.dataTable thead>tr>th.sorting_asc_disabled:after,
    table.dataTable thead>tr>th.sorting_desc_disabled:after,
    table.dataTable thead>tr>td.sorting:after,
    table.dataTable thead>tr>td.sorting_asc:after,
    table.dataTable thead>tr>td.sorting_desc:after,
    table.dataTable thead>tr>td.sorting_asc_disabled:after,
    table.dataTable thead>tr>td.sorting_desc_disabled:after {
        top: 50%;
        content: "" !important;
    }

    input[type="checkbox"]:disabled {
        background: #ff2a2a !important;
    }

    .ui.popup {
        /* color: #fff; */
        /* background-color: #5928e5 !important; */
        color: #000;
        background-color: #fdef25 !important;
    }

    .ui.popup::before {
        background-color: #5a80a0 !important;
    }

    .table-responsive::-webkit-scrollbar {
        height: 8px;
        border-radius: 5px;
    }

    .table-responsive::-webkit-scrollbar-thumb {
        background: #cccccc;
        box-shadow: inset 2px 2px 2px hsl(0deg 0% 100% / 25%), inset -2px -2px 2px rgb(0 0 0 / 25%);
    }

    .table-responsive::-webkit-scrollbar-track {
        background: #5a80a0;
    }

    .dataTables_wrapper {
        padding-bottom: 15px;
    }

    .search_input_st{
        font-size: 14px !important;
        letter-spacing: .5px;
        box-shadow: 1px 1px 5px #b7b7b788 !important;
    }
    .search_div label{
        font-size: 14px;
        padding: 15px 0 5px 0;
        letter-spacing: .5px;
    }
    .leadtableC_btn{
        background-color: #5a80a0;
        letter-spacing: .5px;
        border-radius:2px;
        color: #fff;
    }
    .leadtableC_btn:hover{
        background-color: #5a80a0;
        color: #fff;
    }
    </style>

@endsection

{{-- @section('multi_navigation')
@if(array_key_exists('gigs_list', $data))
    @if (count($data['gigs_list']) != 0)

    @forelse ($data['gigs_list'] as $item)
        <div>
            {{$item->title}}
        </div>
    @endforeach
    @endif
@endif
@endsection
 --}}

 @section('multi_navigation')
<div class="multi_navigation" id="multi_navigation">
    <h4>Service Menu</h4>
    @foreach ($data['gigs_list'] as $item)
        {{-- @foreach ($item['mainpage_data'] as $key=> $mainpage)
        @endforeach --}}
        <h5 class="service_index">
            <span class="icon">
                <i class="fas fa-square padding__right_20"></i>
            </span>
            <span class="text">
                {{$item->title}}</h5>
            </span>
    @endforeach
</div>
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

        {{-- <form action="" method="post">
            <div class="briefing_div">
                <input type="text" placeholder="example@your-mail.com" required>
                <button type="submit">Start Briefing Your Project</button>
            </div>
        </form> --}}




        <div class="">
            <div class="header_bottom_note">
                <span style="color: #70bfff;">Employee shortage ? Need more work to done?</span>
                <span class="snd">We will help you.</span>
            </div>

            <div class="row header_four_box">
                <div class="col-sm-12 col-md-3">
                    <div class="first custom_toltip_main">
                        <a href="https://calendly.com/janifer/30min">
                            <h6><i class="fas fa-comment-dots"></i> Book</h6>
                            <hr class="m-0">
                            <p>30 Minutes Free Consultation</p>
                            <div class="custom_toltip top">
                                Booking a 30-minute free consultation is a great opportunity to ask questions, learn more
                                about
                                a particular topic or service, and get personalized advice.
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="second custom_toltip_main">
                        <a href="{{route('frontend.orderpage.brief_by_email')}}">
                            <h6><i class="fas fa-at"></i> Email</h6>
                            <hr class="m-0">
                            <p>Brief Your Project Plan</p>
                        </a>
                        <div class="custom_toltip top">
                            Sending an email to brief your project plan is an effective way to communicate the details and
                            goals of your project to others.
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="third custom_toltip_main cursor_pointer" data-bs-toggle="modal"
                        data-bs-target="#comparemodal">
                        <h6><i class="fas fa-exchange-alt"></i> Compare</h6>
                        <hr class="m-0">
                        <p>Pricing & Packages</p>
                        <div class="custom_toltip top">
                            Comparing the services can be a useful way to determine which one is the best fit for your
                            needs.
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="forth custom_toltip_main">
                        <a href="{{route('frontend.orderpage.custom')}}">
                            <h6><i class="fas fa-edit"></i> Customize</h6>
                            <hr class="m-0">
                            <p>Your Service Plan</p>
                            <div class="custom_toltip top">
                                Custom ordering allows you to personalize service to meet your specific needs and
                                preferences.
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>




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
    <section class="page_part_offset py-5 padding_40" style="background: #fff;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
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
    {{-- <section class="page_part_offset f_poppin py-5 padding_40" style="background: #25517e;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-sm-12 col-md-8">
                <h4 class="text-center text-white" style="font-size: 40px;">Find your right service
                    below</h4>
            </div>
        </div>
    </section> --}}

    <section class="page_part_offset f_poppin py-5 padding_40" style="background: #2a5989;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-sm-12 col-md-8">
                <!-- <h4 class="text-center focus_tilte_with_line text-white">Find Our A to Z Services</h4> -->

                <div class="focus_line_after_title text-white bg_theme_light">
                    <h4>Find Your Right Service Below</h4>
                </div>

                <p class="m-0 text-center text-white" style="font-size: 25px;line-height: 35px !important;">Dimarz can
                    provide you with
                    the service you
                    require and demand for your Business. With our experienced and qualified
                    professional team members, you'll be able to find the perfect services for your
                    needs.</p>
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

    @if(array_key_exists('extra_section', $data))
    @if ($data['extra_section'] == "lead")
        @include('frontend.includes.leads')
        {{-- @include('frontend.includes.leadtable'); --}}
        <div class="line_breaker">
            <div class="line"></div>
        </div>
    @endif
    @if ($data['extra_section'] == "graphic")
    Hi graphic.
    @endif

    @endif

    @if(array_key_exists('work_article', $data))
    <section class="padding_40" style="background-color: #fff;">
        <div class="service_article py-5">
            <h4 class="super_heading_text"><span style="color: #25517e;">Work ! </span><span> Read Up</span></h4>
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
        style="background: #25517e;">
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
    <section class="padding_40 py-5" style="background-color: #2a5989;">
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






    <!-- Modal -->
<div class="modal fade" id="comparemodal" tabindex="-1" aria-labelledby="comparemodalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-xl"> {{-- modal-dialog-centered --}}
        <div class="modal-content">
            <div class="modal-header px-5 pt-4">
                <h1 class="modal-title fs-5" id="comparemodalLabel">Compare Our Services</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4 px-5">
                @foreach ($serviceGroupID as $item)
                <h4>{{$item['category_name']}}</h4>
                @foreach ($item['mainpage_data'] as $mainpage)
                <h5 class="categoryNameitem">{{$mainpage['page_title']}}</h5>
                <div class="modal_gig_grouping mb-4">
                    @foreach ($mainpage['gigpage_model'] as $gigpage)
                    <div class="row modal_gigBox align-items-center">
                        <div class="col-sm-12 col-md-3" style="border-right: 1px solid #e5e5e5;">
                            <div class="modal_gigBox_part0">
                                <h6><a href="{{route('frontend.gigpage', $gigpage['slug'])}}">{{$gigpage['title']}}</a>
                                </h6>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <a href="{{route('frontend.gigpage', $gigpage['slug'])}}">
                                <div class="modal_gigBox_part modal_gigBox_part1">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0">{{$gigpage['pricing_one']->pricing_name}}</h6>
                                        <h6 class="m-0">${{$gigpage['pricing_one']->pricing_price}}</h6>
                                    </div>
                                    <h6 class="duration">{{$gigpage['pricing_one']->pricing_duration}}</h6>
                                    <p>{{$gigpage['pricing_one']->pricing_shortinfo}}</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <a href="{{route('frontend.gigpage', $gigpage['slug'])}}">
                                <div class="modal_gigBox_part modal_gigBox_part2">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0">{{$gigpage['pricing_two']->pricing_name}}</h6>
                                        <h6 class="m-0">${{$gigpage['pricing_two']->pricing_price}}</h6>
                                    </div>
                                    <h6 class="duration">{{$gigpage['pricing_two']->pricing_duration}}</h6>
                                    <p>{{$gigpage['pricing_two']->pricing_shortinfo}}</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <a href="{{route('frontend.gigpage', $gigpage['slug'])}}">
                                <div class="modal_gigBox_part modal_gigBox_part3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0">{{$gigpage['pricing_three']->pricing_name}}</h6>
                                        <h6 class="m-0">${{$gigpage['pricing_three']->pricing_price}}</h6>
                                    </div>
                                    <h6 class="duration">{{$gigpage['pricing_three']->pricing_duration}}</h6>
                                    <p>{{$gigpage['pricing_three']->pricing_shortinfo}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
                @endforeach
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>







@endsection

