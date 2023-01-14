@extends('frontend.master')

@section('meta_tag')
@include('meta::manager',[
'title'=> 'Dimarz - Home'
])
@endsection

@section('custom_css')
<link href="{{asset('assets/frontend')}}/css/testimonial.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('assets/frontend/css/custom-semantic.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/css/extra-semantic.min.css')}}">

<style>
    .home_service_box .content_box.industry h4 {
        position: relative;
        font-weight: 700;
        color: #5a80a0;
        margin-bottom: 19px;
        font-size: 17px;
    }

    .home_service_box .content_box.industry h4::after {
        position: absolute;
        content: '';
        background-color: #5a80a0;
        height: 2px;
        bottom: -5px;
        width: 80%;
        left: 10%;
    }

    .btn_no_css:focus,
    .btn_no_css {
        background-color: transparent;
        border: none;
        outline: none;
        padding: 0;
        margin: 0;
    }

</style>

<style>
    /* input_position_grp || Start */
    .input_position_grp {
        position: relative;
        padding: 5px 0;
    }

    .input_position_grp select,
    .input_position_grp input {
        padding: 0px 10px;
        outline: none;
        border-radius: 5px;
        opacity: 80%;
        font-size: 14px;
        letter-spacing: .5px;
    }

    .input_position_grp select:focus,
    .input_position_grp textarea:focus,
    .input_position_grp input:focus {
        box-shadow: none;
    }

    .grp_text_low,
    .input_position_grp label {
        opacity: 60%;
        font-size: 14px;
        letter-spacing: .5px;
    }
    .custom-control-label{
        opacity: 90%;
        font-size: 14px;
        letter-spacing: .5px;
    }
    /*
    .input_position_grp input:focus > label{
        position: absolute;
        top: -10px;
        left: 15px;
    } */
    /* input_position_grp || End */

</style>

@endsection

@section('multi_navigation')
<div class="multi_navigation" id="multi_navigation">
    <h4>Service Menu</h4>
    @foreach ($serviceGroupID as $item)
    {{-- <h4>{{$item['mainpage_data'][0]['category_name']}}</h4> --}}
    @foreach ($item['mainpage_data'] as $key=> $mainpage)
    {{-- @if ($loop->first)
            This is the first iteration.
        @endif --}}
    <h5 class="service_index">
        <span class="icon"><i class="fas fa-square padding__right_20"></i></span>
        <span class="text">{{$mainpage['page_title']}}</span>
    </h5>
    @endforeach
    @endforeach
</div>
@endsection

@section('content')

<section id="top_focus">

    <section id="header_top" class="spin_header_bg">

        <div class="special_text_box" style="padding-top:3rem;">
            <h2 class="special_text text-center ">Dimarz</h2>
            <h3 class="text-center floating_text">Outsourcing</h3>
            <h5 class="text-center">Provide</h5>
            <ul class="text-center w-100">
                <li>Digital Marketing</li>
                <li>Data Entry</li>
                <li>Web Development</li>
                <li>Graphics Design Services</li>
            </ul>
            <p class="text-center animate_text_type"><span class="typed-text_block"><span
                        class="typed-text"></span><span class="cursor">&nbsp;</span></span></p>
            {{-- <div class="header_bottom_note">
                <span class="text-white">Employee shortage ? Need more work to done?</span>
                <span class="snd">We will help you.</span>
            </div> --}}
        </div>

        <!-- <h4>We are your BPO Assistant</h4> -->
        <!-- <h4 class="text-center header_top_title">We are More Than Just an Avarage Outsourcing
            Company!</h4> -->
        <!-- <p class="text-center animate_text_type">We Value <br>
            <span class="typed-text_block"><span class="typed-text"></span><span
                    class="cursor">&nbsp;</span></span></p> -->

        {{-- <div class="row header_four_box">
            <div class="col-sm-12 col-md-3">
                <div class="first custom_toltip_main">

                    <h6>Book</h6>
                    <a href="#">30 Minutes Consultation</a>
                    <div class="custom_toltip top">
                        Booking a 30-minute free consultation is a great opportunity to ask questions, learn more about a particular topic or service, and get personalized advice.
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3">
                <div class="second custom_toltip_main">

                    <h6>Email</h6>
                    <a href="#">Brief Your Project Plan</a>
                    <div class="custom_toltip top">
                        Sending an email to brief your project plan is an effective way to communicate the details and goals of your project to others.
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3">
                <div class="third custom_toltip_main cursor_pointer" data-bs-toggle="modal" data-bs-target="#comparemodal">
                    <h6>Compare</h6>
                    <button class="btn_no_css text-white">
                        Pricing & Packages
                    </button>
                    <div class="custom_toltip top">
                        Comparing the services can be a useful way to determine which one is the best fit for your needs.
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3">
                <div class="forth custom_toltip_main">

                    <h6>Customize</h6>
                    <a href="#">Your Service Plan</a>
                    <div class="custom_toltip bottom">
                        Custom ordering allows you to personalize service to meet your specific needs and preferences.
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <form action="" method="post">
            <div class="briefing_div">
                <input type="text" placeholder="Email" required>
                <button type="submit">Start Briefing Your Project</button>
            </div>
        </form> --}}
    </section>

    <div class="" style="background: #dee2e6;padding: 0 40px 40px 40px;">
        <div class="header_bottom_note">
            <span style="color: #000;">Employee shortage ? Need more work to done?</span>
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

    <section class="padding_40 clickable_links_area">
        <div class="p-4 service_need_list">
            <h5 class="text-white">You may need</h5>
            <div class="d-flex justify-content-center">
                @foreach ($allgigs as $item)
                <a href="{{route('frontend.gigpage', $item->slug)}}">{{$item->title}}</a>
                @endforeach
            </div>
            <div id="service_need_list_more" class="cursor_pointer"><i class="fas fa-arrow-down"></i> More</div>
        </div>
    </section>

    <section id="working_process" class="page_part_offset" data-sectionname="Our Working Process"
        data-sectionnameindex="1" style="padding-right: 0;padding-left: 0;">
        <div class="row">
            <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                <div class="content_box w-100" style="background-color: unset;">
                    <img src="{{asset('assets/frontend')}}/img/working-step-01.png" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                <div class="content_box w-100" style="background-color: unset;">
                    <div class="w-100 px-1">
                        <img src="{{asset('assets/frontend')}}/img/working-step-02.png" alt="">
                        <h4>Discuss your project plan</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                <div class="content_box w-100" style="background-color: unset;">
                    <div class="w-100 px-1">
                        <img src="{{asset('assets/frontend')}}/img/working-step-03.png" alt="">
                        <h4>Expert team will execute</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                <div class="content_box w-100" style="background-color: unset;">
                    <div class="w-100 px-1">
                        <img src="{{asset('assets/frontend')}}/img/working-step-04.png" alt="">
                        <h4>Recive your project within time</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
    </div> -->
</div>


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


<div class="modal fade" id="pricingmodal" tabindex="-1" aria-labelledby="pricingmodalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-xl"> {{-- modal-dialog-centered --}}
        <div class="modal-content">
            <div class="modal-header px-5 pt-4">
                <h1 class="modal-title fs-5" id="pricingmodalLabel">Pricing</h1>
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
                                    {{-- <h6 class="duration">{{$gigpage['pricing_one']->pricing_duration}}</h6>
                                    <p>{{$gigpage['pricing_one']->pricing_shortinfo}}</p> --}}
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
                                    {{-- <h6 class="duration">{{$gigpage['pricing_two']->pricing_duration}}</h6>
                                    <p>{{$gigpage['pricing_two']->pricing_shortinfo}}</p> --}}
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
                                    {{-- <h6 class="duration">{{$gigpage['pricing_three']->pricing_duration}}</h6>
                                    <p>{{$gigpage['pricing_three']->pricing_shortinfo}}</p> --}}
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


<section class="page_part_offset f_poppin pt-5 tndustries_part" data-sectionname="Industries We Serve"
    data-sectionnameindex="2" style="background-color: #dee2e6;">
    <div class="padding_40">

        <div class="industry_title pt-5 pb-5">
            <div class="row">
                <div class="col-sm-12 col-md-2"></div>
                <div class="col-sm-12 col-md-8">
                    <!-- <h4 class="text-center focus_tilte_with_line">Industries We Serve</h4> -->

                    <div class="focus_line_after_title text_dark_theme bg_white_rel">
                        <h4>Industries We Serve</h4>
                    </div>

                    <p class="text-center" style="font-size: 25px;line-height: 35px !important;">We
                        don't generalize — we are specialized. From tech companies to specialized
                        industries, we have strategic solutions for your unique industry needs.</p>
                </div>
            </div>
        </div>


        <!-- Industry Carsousel || Start -->
        <div class="industry_carsousel owl-carousel">
            <!-- Single Testimonial -->
            <div class="single_industry_carousel">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <div>
                                <img src="{{asset('assets/frontend')}}/img/industry-icons-01.png" alt="">
                            </div>
                        </div>
                        <div class="content_box industry">
                            <h4>SOFTWARE INDUSTRY</h4>
                            <p>We offer marketing services that will help your software industry
                                prosper! Our services include but are not limited to: market
                                research, website design, social promotion, and more. We know how to
                                build a successful business.
                            </p>
                        </div>
                        <div class="footer_box">
                            <a href="#" class="btn btn-sm button_slider_effect"><span>Read
                                    More...</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single_industry_carousel">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <div>
                                <img src="{{asset('assets/frontend')}}/img/industry-icons-02.png" alt="">
                            </div>
                        </div>
                        <div class="content_box industry">
                            <h4>HEALTHCARE INDUSTRY</h4>
                            <p>We support the core elements of your healthcare IT infrastructure to
                                keep you up and running when and where it matters most. We are proud
                                to be a leading provider of outsourced healthcare IT services</p>
                        </div>
                        <div class="footer_box">
                            <a href="#" class="btn btn-sm button_slider_effect"><span>Read
                                    More...</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single_industry_carousel">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <div>
                                <img src="{{asset('assets/frontend')}}/img/industry-icons-03.png" alt="">
                            </div>
                        </div>
                        <div class="content_box industry">
                            <h4>LEGAL INDUSTRY</h4>
                            <p>We offer a multitude of services that can grow your law firm into a
                                thriving practice! Our team can customize a multi-channel digital
                                marketing strategy to achieve your specific firm goals.</p>
                        </div>
                        <div class="footer_box">
                            <a href="#" class="btn btn-sm button_slider_effect"><span>Read
                                    More...</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single_industry_carousel">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <div>
                                <img src="{{asset('assets/frontend')}}/img/industry-icons-04.png" alt="">
                            </div>
                        </div>
                        <div class="content_box industry">
                            <h4>REAL ESTATE</h4>
                            <p>Our experience and understanding of real estate help us leverage
                                technology to provide Services like leads list Building, Graphics
                                Design, Digital marketing, responsive website, and SEO, which will
                                significantly enhance your ROI.</p>
                        </div>
                        <div class="footer_box">
                            <a href="#" class="btn btn-sm button_slider_effect"><span>Read
                                    More...</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single_industry_carousel">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <div>
                                <img src="{{asset('assets/frontend')}}/img/industry-icons-05.png" alt="">
                            </div>
                        </div>
                        <div class="content_box industry">
                            <h4>FASHION & BEAUTY</h4>
                            <p>Nowadays the fashion & beauty industries are nothing without an
                                online presence. Our expertise can help you to build a stunning
                                online entity for your business and improve your web presence
                                through our digital marketing services.
                            </p>
                        </div>
                        <div class="footer_box">
                            <a href="#" class="btn btn-sm button_slider_effect"><span>Read
                                    More...</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single_industry_carousel">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <div>
                                <img src="{{asset('assets/frontend')}}/img/industry-icons-06.png" alt="">
                            </div>
                        </div>
                        <div class="content_box industry">
                            <h4>RETAIL INDUSTRY</h4>
                            <p>Meet your customer needs and maintain online activities with our
                                digital marketing and web-related Services. Find the right
                                maintenance programs to keep you steady as you grow your customer
                                base.</p>
                        </div>
                        <div class="footer_box">
                            <a href="#" class="btn btn-sm button_slider_effect"><span>Read
                                    More...</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single_industry_carousel">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <div>
                                <img src="{{asset('assets/frontend')}}/img/industry-icons-07.png" alt="">
                            </div>
                        </div>
                        <div class="content_box industry">
                            <h4>E-COMMERCE INDUSTRY</h4>
                            <p>E-Commerce and online marketing are the two sides of the coin. One is
                                incomplete without the other. Our E-commerce solutions will help
                                your business grow and reach your potential customers.
                            </p>
                        </div>
                        <div class="footer_box">
                            <a href="#" class="btn btn-sm button_slider_effect"><span>Read
                                    More...</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single_industry_carousel">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <div>
                                <img src="{{asset('assets/frontend')}}/img/industry-icons-08.png" alt="">
                            </div>
                        </div>
                        <div class="content_box industry">
                            <h4>FINANCE INDUSTRY</h4>
                            <p>Since financial services are driven by technologies, we create
                                compelling marketing solutions for various banking and finance
                                groups worldwide to help them create loyal engagements with
                                consumers through online portals.</p>
                        </div>
                        <div class="footer_box">
                            <a href="#" class="btn btn-sm button_slider_effect"><span>Read
                                    More...</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonial -->

        </div>
        <!-- Industry Carsousel || End -->

        <!-- <div class="row">
            <div class="col-sm-12 col-md-3 pt-4 icons_area">
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

            </div>
            <div class="col-sm-12 col-md-9 industry_26_css">
                <div class="col-12 industry_26_css_top">
                    <h3 class="in_sub_title">We are Covering</h3>
                    <h4 class="in_sub_title"><span class="in_title">Many Industries Globally</span>
                    </h4>
                </div>
                <div class="col-12 industry_26_css_bottom">
                    <p class="text-justify">Your main goal should be to make sure that your <span
                            id="industry_name">Software Industry</span>, <br>is easier to navigate
                        and
                        more attractive from your biggest competitors. We believe that you are ready
                        to
                        get services for your industry, Dimarz can help you on your most demanding
                        services such as Website Design & Development, Digital Marketing, Graphics
                        Designing, Data Entry and so on.</p>

                    <p class="text-justify">As a tech team, DiMarz strives to deliver the quality
                        that
                        will help our clients expand their ventures. With our VPO strategy, which
                        stands
                        for Visualize, Process and Outcome we can give your project the best
                        possible
                        results. We visualize and understand the needs our clients want to achieve.
                        Then
                        we process that visualization to bring out the best possible outcome.</p>

                    <p class="text-justify">At DiMarz, our team is well-versed & researched with the
                        latest trends and upcoming opportunities for the growing industries. Our
                        expertise and knowledge will provide you the advantage you need to scale up
                        your
                        business.</p>
                </div>
            </div>

        </div> -->

    </div>
    <div class="col-sm-12 col-md-12 m-0 p-0">
        <img src="{{asset('assets/frontend')}}/img/indestry_lineart-dark.png" alt="" class="img-fluid invert_color">
    </div>

</section>

<!-- <div class="line_breaker">
    <div class="line"></div>
    <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
    </div>
</div> -->

<section class="page_part_offset f_poppin py-5 padding_40" style="background: #2a5989;">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-sm-12 col-md-8">
            <!-- <h4 class="text-center focus_tilte_with_line text-white">Find Our A to Z Services</h4> -->

            <div class="focus_line_after_title text-white bg_theme_light">
                <h4>Find Our A to Z Services</h4>
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

@foreach ($subcategories as $item)
<section class="single_part service_card_section overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>{{$item->getCategoryName->name}}</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">{{$item->name}}</h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>{{$item->name}}</h3>
                        </div>
                        {!! $item->description !!}
                        <div class="s_card_absolute_2">
                            <a class="btn" href="{{route('frontend.mainpage', $item->getMainpage->slug)}}"
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
@endforeach

<section class="page_part_offset gigs_section gigs_faq_section p-0" data-sectionname="FAQ" data-sectionnameindex="3">
    <div style="background-color: #2a5989;" class="padding_40 pb-5">
        <!-- <h4 class="text-center focus_tilte_with_line pt-5" style="color: #fff;">FAQ</h4> -->

        <div class="focus_line_after_title bg_dark_theme text-white pt-5">
            <h4>FAQ</h4>
        </div>

        <p class="text-center" style="font-size: 25px;line-height: 35px !important;color: #9ccaf1;">
            Ask the right question & you discover everything, We will explain
            everything simply, we understand it well enough.</p>
        <div class="row py-5">
            <div class="col-sm-12 col-md-6">
                <h5 class="ps-2" style="color: #9ccaf1;">What does the buyer need?</h5>
                <div class="accordion accordion-flush" id="accordionFlushFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#FAQflush-collapseOne" aria-expanded="false"
                                aria-controls="FAQflush-collapseOne">
                                What Type Of Service Do You Provide?
                            </button>
                        </h2>
                        <div id="FAQflush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-headingOne" data-bs-parent="#accordionFlushFAQ">
                            <div class="accordion-body">
                                We provide Digital Marketing,Web Development,Graphics Design & Data
                                Entry Services.We also cover all part of these services.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#FAQflush-collapseTwo" aria-expanded="false"
                                aria-controls="FAQflush-collapseTwo">
                                What is Your Pricing Model?
                            </button>
                        </h2>
                        <div id="FAQflush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-headingTwo" data-bs-parent="#accordionFlushFAQ">
                            <div class="accordion-body">
                                We selected our pricing model after global research. And definitely
                                it
                                is budget friendly.We have made 3 types of pricing models like
                                basic,
                                standard, Premium and also offer customized pricing model and
                                services.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#FAQflush-collapseThree" aria-expanded="false"
                                aria-controls="FAQflush-collapseThree">
                                Can I Customize Your Package?
                            </button>
                        </h2>
                        <div id="FAQflush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-headingThree" data-bs-parent="#accordionFlushFAQ">
                            <div class="accordion-body">
                                We have customization options for you. For each service we have a
                                customized ordering option for you so that you can order as per your
                                requirement.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#FAQflush-collapse4" aria-expanded="false"
                                aria-controls="FAQflush-collapse4">
                                How do you prefer to communicate?
                            </button>
                        </h2>
                        <div id="FAQflush-collapse4" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-heading4" data-bs-parent="#accordionFlushFAQ">
                            <div class="accordion-body">
                                We can communicate through Email, Whats App, Zoom, Google Meet or
                                any
                                other platforms you are comfortable with.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#FAQflush-collapse5" aria-expanded="false"
                                aria-controls="FAQflush-collapse5">
                                Do You Offer Free Consultation?
                            </button>
                        </h2>
                        <div id="FAQflush-collapse5" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-heading5" data-bs-parent="#accordionFlushFAQ">
                            <div class="accordion-body">
                                We Offer 30 Min free Consultation. Our experienced consultants can
                                identify the problem and suggest appropriate solutions for your
                                business
                                and find out the steps you should take before setting a goal.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#FAQflush-collapse6" aria-expanded="false"
                                aria-controls="FAQflush-collapse6">
                                Will you provide a detailed report ?
                            </button>
                        </h2>
                        <div id="FAQflush-collapse6" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-heading6" data-bs-parent="#accordionFlushFAQ">
                            <div class="accordion-body">
                                We Provide reports for each of our services. Our Specialist team is
                                always ready to deliver your reports. They provide you with daily,
                                weekly, monthly reports according to your services.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <h5 class="ps-2" style="color: #9ccaf1;">What Do We Need?</h5>
                <div class="accordion accordion-flush" id="RigthAccordionFlushFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="RigthFAQflush-heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#RigthFAQflush-collapse1" aria-expanded="false"
                                aria-controls="RigthFAQflush-collapse1">
                                What is your Business niche?
                            </button>
                        </h2>
                        <div id="RigthFAQflush-collapse1" class="accordion-collapse collapse"
                            aria-labelledby="RigthFAQflush-heading1" data-bs-parent="#RigthAccordionFlushFAQ">
                            <div class="accordion-body">
                                It is important to know about your niche because we don’t work in
                                some
                                niche like adults, Gambling, Drugs etc.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#RigthFAQflush-collapse2" aria-expanded="false"
                                aria-controls="RigthFAQflush-collapse2">
                                Do you have any websites?
                            </button>
                        </h2>
                        <div id="RigthFAQflush-collapse2" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-heading2" data-bs-parent="#RigthAccordionFlushFAQ">
                            <div class="accordion-body">
                                Although you do not have a website, you shouldn't worry, as we can
                                manage the entire process from scratch. Already, if you have a
                                website
                                like that it's even better.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#RigthFAQflush-collapse3" aria-expanded="false"
                                aria-controls="RigthFAQflush-collapse3">
                                Do you need an urgent delivery?
                            </button>
                        </h2>
                        <div id="RigthFAQflush-collapse3" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-heading3" data-bs-parent="#RigthAccordionFlushFAQ">
                            <div class="accordion-body">
                                We have urgent delivery service available.Our team has made a
                                special
                                arrangement for your urgent delivery services. If you need urgent
                                delivery our special team will also work for your project.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#RigthFAQflush-collapse4" aria-expanded="false"
                                aria-controls="RigthFAQflush-collapse4">
                                Do you have a marketing strategy?
                            </button>
                        </h2>
                        <div id="RigthFAQflush-collapse4" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-heading4" data-bs-parent="#RigthAccordionFlushFAQ">
                            <div class="accordion-body">
                                Every company has a long-term vision and strategy in mind. Our team
                                can
                                assist you with your business's marketing program, and understanding
                                customers' needs is crucial to achieving that. So you can share with
                                us
                                your business marketing strategy.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#RigthFAQflush-collapse5" aria-expanded="false"
                                aria-controls="RigthFAQflush-collapse5">
                                What is your business goal?
                            </button>
                        </h2>
                        <div id="RigthFAQflush-collapse5" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-heading5" data-bs-parent="#RigthAccordionFlushFAQ">
                            <div class="accordion-body">
                                Business goals help you focus on the right things. With a business
                                goal,
                                knowing what you should work towards and why can be easier. If you
                                need
                                help setting your business goals, don't worry; our teams are here to
                                help you set your business goals.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="FAQflush-heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#RigthFAQflush-collapse6" aria-expanded="false"
                                aria-controls="RigthFAQflush-collapse6">
                                When do we like to charge extra?
                            </button>
                        </h2>
                        <div id="RigthFAQflush-collapse6" class="accordion-collapse collapse"
                            aria-labelledby="FAQflush-heading6" data-bs-parent="#RigthAccordionFlushFAQ">
                            <div class="accordion-body">
                                Sometimes, a few projects require extra work like website
                                development,
                                extra leads, guest posting or designing, etc. It may cost extra
                                money.
                                You must confirm or agree if you're willing to go for these extra
                                costs
                                or not. We will work according to that.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="padding_40 py-5" data-sectionname="NEW TO OUTSOURCING ?" style="background-color: #dee2e6;">

    <h4 class="super_heading_text"><span style="color: #25517e;">Work ! </span><span> Read Up</span></h4>
    <hr>
    <div>
        <h5 class="py-2" style="font-size: 20px;color: #484a7d;">NEW TO OUTSOURCING ?</h5>
        <h2 class="py-2" style="font-size: 30px;color: #484a7d;">Innovative Outsourcing Plan For New
            Companies | DiMarz</h2>

    </div>

    <!-- <h4 class="text-center focus_tilte_with_line default_article_hd">NEW TO OUTSOURCING ?</h4> -->

    <div class="default_article">

        <p>There are a number of ways to outsource services, but the most innovative plan is to
            outsource part of your
            business. This will minimize the need for workers and make it easier to manage your
            company. Outsourcing can
            be especially helpful if you are new to the business or if you have difficulty finding
            the right people to
            do the job. In other words, if you are having a shortage of labor or people to do your
            job, especially if
            you are a new or start-up company, then it's time you take some necessary innovative
            outsourcing plans in
            action.</p>

        <h3>What is Outsourcing?</h3>

        <p>Before you jump right into an outsourcing or Business Process Outsourcing BPO service you
            must know what
            actually outsourcing is. Outsourcing is basically a business process management concept
            that involves
            businesses putting their products and services to the market, where they are bought and
            sold by the
            customer. A small number of companies specialize in this type of work and make it one of
            their core business
            activities.</p>

        <p>So, basically what this means is that you take help from a third-party organization to
            help you promote your
            company's products or for the most part sell them in the market. And, to do that, you
            need a team of experts
            who will outsource your business to fulfill your demands. For instance, you need to sell
            your X product in
            the market. So, you need to market or promote your product in the market. But, it is a
            matter of sorrow that
            you don't have enough marketing experts to do it for you. If you even want to hire some
            marketers, it will
            cost you much. So, you purchase an Outsourcing company or BPO service provider to market
            your product. They
            will do it for you for a minimal cost and your product will be promoted accordingly.
            Isn't it a good
            solution?</p>

        <h3>How Outsourcing Can Help Your Business Grow?</h3>
        <p>There are many benefits of outsourcing. Outsourcing can make your business grow. It can
            also be a good
            solution for those companies who have not enough marketing human resources to market
            their products.
            Outsourcing is a way to get rid of all the problems associated with marketing and
            promotion. You can hire
            professional outsourcers and BPO service providers for outsourcing services to do your
            job. Here are some
            positive aspects of how these outsourcing services can help you to grow your business;
        </p>

        <ul class="padding_l1">
            <li>Innovative Outsourcing Plan</li>
            <li>Better company products promotion</li>
            <li>Technology solutions</li>
            <li>Team up with professionals</li>
            <li>Scalability and Flexibility</li>
            <li>Minimal cost rate than hiring a full-time member</li>
            <li>Build relationships</li>
            <li>Excellent Results</li>
            <li>Excellent customer service</li>
        </ul>

        <h3>How To Create an Innovative Outsourcing Plan For Your New Business</h3>

        <p>At first, what you need to do is analyze your business well. This means how your business
            is doing, how your
            products are performing in the market, your monthly revenue, etc. The best way to do
            this is by introducing
            the challenges that you face in your business. How can you overcome all these challenges
            and keep them
            alive?</p>

        <p>To do that, you need to make an innovative outsourcing plan for your business. Here is
            the step by step
            process towards a strategic outsourcing;
        </p>
        <ul class="padding_l1">
            <li>Analyze your business and decide which part of your business need to be outsourced
            </li>
            <li>Research some BPO companies and see if they can solve your problems</li>
            <li>Confirm if your Outsourcer have the ability to provide digital solutions</li>
            <li>Open to provide innovative solutions</li>
        </ul>
        <p></p>

        <h3>How To Choose The Right BPO Company?</h3>
        <p>Choosing the right outsourcer can be a difficult task. But, if you follow the steps
            mentioned above, it will
            be easy for you to choose the right driver for your car.</p>
        <p>DiMarz is a Business Process Outsourcer BPO company who can provide you the best
            outsourcing experience you
            are looking for. We have all innovative outsourcing plan and solutions which will enable
            you to rank your
            startup business to the next level. We serve small or startup businesses to enterprise
            level businesses to
            achieve their goals.
        </p>

        <h2>Why Consider Choosing DiMarz? </h2>

        <h3>Strategic Outsourcing</h3>
        <p>We provide creative solutions for any kinds of businesses from startup to enterprise
            level companies. We
            always thrive to provide innovative solutions to our clients which helps them to reach
            their goal within the
            deadline. We are a team of outsourcing service providers who maintain a excellent
            company profile to deliver
            the best strategy at the right time</p>

        <h3>Innovative Solutions</h3>
        <p>We always try to provide the best strategic outsourcing solutions. We have all the
            necessary equipment and
            staff to deal with your task. Some mentionable sides of our company are;
        </p>
        <ul class="padding_l1">
            <li>Technology Solutions</li>
            <li>Enhanced Profile of Our Company</li>
            <li>Advance Digital marketing</li>
            <li>Certified Social Media Marketer</li>
            <li>Effective Email Campaigns</li>
            <li>Maintain Good Outsourcing Company Profile & Outsourcing Employees</li>
            <li>Data management</li>
            <li>Digital Advertising</li>
        </ul>
        <p></p>
        <p>Want to know how we work & process your business? Schedule a free consultation now!</p>


    </div>

</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>

@if (count($testimonial) != 0)
<!-- Testimonial || Start -->
<section class="testimonial-area padding_40">
    <div class="container">
        <div class="sec-title white-title">
            <!-- <h2></h2> -->
            <h4 class="super_heading_text"
                style="font-size: 90px;color: #fff;font-weight: 900;font-family: 'Raleway', sans-serif;">
                Testimonials !</h4>
            <p style="font-size: 25px;line-height: 35px !important;color:#ffc107;">What Client Say About Us?</p>
        </div>
        <div class="testimonial-content owl-carousel">
            <!-- Single Testimonial -->
            @foreach ($testimonial as $item)
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                {!! $item->text !!}
                <div class="client-info">
                    <div class="client-video">
                        <a href="#"><img src="{{asset('assets/frontend')}}/img/play-button2.png" alt=""></a>
                    </div>
                    <div class="client-details">
                        <h6>{{$item->client_name}}</h6>
                        <span>{{$item->location}}</span>
                    </div>
                </div>
            </div>
            <!-- Single Testimonial -->
            @endforeach
        </div>
    </div>
</section>
<!-- Testimonial || End -->
@endif

<section class="mb-4" style="background: #dee2e6;">
    <div class="row m-0 align-items-stretch">
        <div class="col-sm-12 col-md-8 pt-5 padding_40">
            <h4>Fill out simple step below & we will connect you shortly</h4>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="input_position_grp">
                        <label for="">First Name</label>
                        <input type="text" class="form-control form-control-sm" name="customer_fname"
                             required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input_position_grp">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control form-control-sm" name="customer_lname"
                             required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input_position_grp">
                        <label for="">Email</label>
                        <input type="text" class="form-control form-control-sm" name="customer_email"
                             required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input_position_grp">
                        <label for="">Company Name</label>
                        <input type="text" class="form-control form-control-sm" name="customer_cname"
                            >
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input_position_grp">
                        <label for="">Phone</label>
                        <input type="tel" class="form-control form-control-sm" name="customer_phone"
                            >
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input_position_grp">
                        <label for="">Website</label>
                        <input type="url" class="form-control form-control-sm" name="customer_website"
                            >
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input_position_grp">
                        <label for="">City</label>
                        <input type="text" class="form-control form-control-sm" name="customer_city"
                             required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input_position_grp">
                        <label for="">Country</label>
                        <input type="text" class="form-control form-control-sm" name="customer_country"
                             required>
                    </div>
                </div>
                <div class="col-md-6 mb-3 inline_input">
                    <div class="input_position_grp">
                        <label for="" class="required">Choose Your Service</label>
                        <select class="form-select form-control-sm" name="budget" required>
                            <option value="">-- Select A Service</option>
                            <option value="lead">Lead Generation</option>
                            <option value="lead">Email Marketing</option>
                            <option value="lead">SEO</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-3 inline_input">
                    <div class="input_position_grp">
                        <label for="" class="required">Your Estimated Budget</label>
                        <select class="form-select form-control-sm" name="budget" required>
                            <option value="">Please Choose...</option>
                            <option value="$100-$499">$100-$499</option>
                            <option value="$500-$999">$500-$999</option>
                            <option value="$1000+">$1000+</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="input_position_grp">
                        <h4 class="grp_text_low">Write Your Project Details</h4>
                        <textarea name="plan_brief" class="form-control form-control-sm"
                        placeholder="Follow above Example..." style="height:100px;" required></textarea>
                    </div>
                </div>
                <div class="col-md-12 mt-2 mb-3 inline_input">
                    <div class="form-check d-flex align-items-center">
                        <input class="form-check-input cursor_pointer" type="checkbox" value="" id="where_you_referred">
                        <label class="form-check-label ms-2 cursor_pointer where_you_referred grp_text_low" for="where_you_referred">
                            Were you referred to Dimarz ?
                        </label>
                    </div>
                </div>
                <div class="col-md-12 mb-3 inline_input where_you_referred_display d-none">
                    <div class="input">
                        <label class="required pb-2 cursor_pointer" for="">Who referred you?</label>
                        <input class="form-control" type="text" id="" name="referby"
                            placeholder="How did you hear about us ?">
                    </div>
                </div>
                <h4 class="grp_text_low">Join our email list?</h4>
                <div class="col-md-12 mb-1 inline_input">
                    <div class="input d-flex align-items-center">
                        <input name="joinemail" type="radio" value="1" id="joinemailyes"
                            placeholder="How did you hear about us ?">
                        <label class="ms-2 cursor_pointer grp_text_low" for="joinemailyes">Yes, Please!</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3 inline_input">
                    <div class="input d-flex align-items-center">
                        <input class="" name="joinemail" type="radio" value="0" id="joinemailno"
                            placeholder="How did you hear about us ?">
                        <label class="ms-2 cursor_pointer grp_text_low" for="joinemailno">Not yet, Thanks.</label>
                    </div>
                </div>
                <p class="grp_text_low">Note: Join our mailing list to get our blog updates. You can unsubscribe at any time. We respect your
                    privacy and will never share your information.</p>
                <hr>
                <div class="pb-5">
                    <input type="checkbox" class="custom-control-input" id="save-info" required>
                    <label class="custom-control-label cursor_pointer" for="save-info">I agree to the Terms
                        and
                        conditions</label>

                    <button class="btn btn-sm btn-light float-end" type="submit"><strong class="pe-2">Send</strong><i class="fas fa-paper-plane"></i></button>
                </div>

            </div>
        </div>
        <div class="col-sm-12 col-md-4 text-center instant_connet_root">
            <h4 class="instant_connet_title">Instant Connect</h4>
            <div class="instant_connet_icons">
                <a class="hover-skype" href="#"><i class="fab fa-skype"></i></a>
                <a class="hover-whatsapp" href="#"><i class="fab fa-whatsapp"></i></a>
                <a class="hover-telegram" href="#"><i class="fab fa-telegram"></i></a>
            </div>
            <div class="pt-4 instant_connet_address">
                <h6>Address</h6>
                Sector 01, Mirpur 1216
                Dhaka, Bangladesh
                <a href="https://goo.gl/maps/BBF28v2BSQCVU3eA8" target="_blank">Get Location</a>
            </div>
        </div>
    </div>
</section>


@endsection



@section('custom_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('assets/frontend/js/custom-semantic.min.js')}}"></script>
<script>
    // $('.toltip').popup();
    $('.toltip').popup({
        inline: true
    });

</script>
<script>
    const typedTextSpan = document.querySelector(".typed-text");
    const cursorSpan = document.querySelector(".cursor");

    const textArray = ["Digital marketing", "Data entry", "Web Development", "Graphics Design"];
    const typingDelay = 50;
    const erasingDelay = 50;
    const newTextDelay = 2000; // Delay between current and next text
    let textArrayIndex = 0;
    let charIndex = 0;

    function type() {
        if (charIndex < textArray[textArrayIndex].length) {
            if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
            typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingDelay);
        } else {
            cursorSpan.classList.remove("typing");
            setTimeout(erase, newTextDelay);
        }
    }

    function erase() {
        if (charIndex > 0) {
            if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
            typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, erasingDelay);
        } else {
            cursorSpan.classList.remove("typing");
            textArrayIndex++;
            if (textArrayIndex >= textArray.length) textArrayIndex = 0;
            setTimeout(type, typingDelay + 1100);
        }
    }

    document.addEventListener("DOMContentLoaded", function () { // On DOM Load initiate the effect
        if (textArray.length) setTimeout(type, newTextDelay + 50);
    });

</script>

<script>
    $(".testimonial-content").owlCarousel({
        loop: true,
        items: 2,
        margin: 50,
        dots: true,
        nav: false,
        mouseDrag: true,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 800,
        // responsiveClass:true,
        // responsive:{
        //     0:{
        //         items:1,
        //         nav:true
        //     },
        //     600:{
        //         items:3,
        //         nav:false
        //     },
        //     1000:{
        //         items:5,
        //         nav:true,
        //         loop:false
        //     }
        // }
    });

    $(".industry_carsousel").owlCarousel({
        loop: true,
        items: 3,
        margin: 50,
        dots: false,
        nav: false,
        mouseDrag: true,
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 800,
        autoplayHoverPause: true,
    });

</script>
@endsection
