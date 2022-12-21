@extends('frontend.master')

@section('meta_tag')
    @include('meta::manager',[
        'title'=> 'Dimarz - Home'
    ])
@endsection

@section('custom_css')
<link href="{{asset('assets/frontend')}}/css/testimonial.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
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

</style>
@endsection

@section('content')

<section id="top_focus">

    <section id="header_top">

        <div class="special_text_box">
            <h2 class="special_text text-center text_color_theme">Dimarz</h2>
            <h3 class="text-center floating_text text_color_theme">Outsourcing</h3>
            <h5 class="text-center">Provide</h5>
            <ul class="text-center w-100">
                <li>Digital marketing</li>
                <li>Data entry</li>
                <li>Web development</li>
                <li>Graphics design Services</li>
            </ul>
            <p class="text-center animate_text_type"><span class="typed-text_block"><span
                        class="typed-text"></span><span class="cursor">&nbsp;</span></span></p>
        </div>

        <!-- <h4>We are your BPO Assistant</h4> -->
        <!-- <h4 class="text-center header_top_title">We are More Than Just an Avarage Outsourcing
            Company!</h4> -->
        <!-- <p class="text-center animate_text_type">We Value <br>
            <span class="typed-text_block"><span class="typed-text"></span><span
                    class="cursor">&nbsp;</span></span></p> -->


        <form action="" method="post">
            <div class="briefing_div">
                <input type="text" placeholder="Email" required>
                <button type="submit">Start Briefing Your Project</button>
            </div>
        </form>
    </section>

    <section class="padding_40 clickable_links_area">
        <div class="p-4 service_need_list">
            <h5 class="text-white" style="background-color: #47657e;">You may need</h5>
            <div class="d-flex">
                <a href="#">B2B Lead Generation</a>
                <a href="#">B2C Lead Generation</a>
                <a href="#">On Page SEO</a>
                <a href="#">OFF Page SEO</a>
                <a href="#">WordPress Development</a>
                <a href="#">Web Application Development</a>
                <a href="#">OFF Page SEO</a>
                <a href="#">WordPress Development</a>
                <a href="#">Web Application Development</a>
                <a href="#">B2B Lead Generation</a>
                <a href="#">B2C Lead Generation</a>
                <a href="#">On Page SEO</a>
                <a href="#">OFF Page SEO</a>
                <a href="#">WordPress Development</a>
                <a href="#">Web Application Development</a>
                <a href="#">OFF Page SEO</a>
                <a href="#">WordPress Development</a>
                <a href="#">Web Application</a>
                <a href="#">B2B Lead Generation</a>
                <a href="#">B2C Lead Generation</a>
                <a href="#">On Page SEO</a>
                <a href="#">OFF Page SEO</a>
                <a href="#">WordPress Development</a>
                <a href="#">Web Application Development</a>
            </div>
            <div id="service_need_list_more" class="cursor_pointer">More</div>
        </div>
    </section>

    <section id="working_process" class="page_part_offset" data-sectionname="Our Working Process"
        data-sectionnameindex="1" style="background-color: #5a80a0;padding-right: 0;padding-left: 0;">
        <div class="row">
            <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                <div class="content_box w-100">
                    <img src="{{asset('assets/frontend')}}/img/working-step-01.png" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                <div class="content_box w-100">
                    <div class="w-100 px-1">
                        <img src="{{asset('assets/frontend')}}/img/working-step-02.png" alt="">
                        <h4>Discuss your project plan</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                <div class="content_box w-100">
                    <div class="w-100 px-1">
                        <img src="{{asset('assets/frontend')}}/img/working-step-03.png" alt="">
                        <h4>Expert team will execute</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                <div class="content_box w-100">
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

<section class="page_part_offset f_poppin pt-5 tndustries_part" data-sectionname="Industries We Serve"
    data-sectionnameindex="2" style="background-color: #fff;">
    <div class="padding_40">

        <div class="industry_title pt-5 pb-5">
            <div class="row">
                <div class="col-sm-12 col-md-2"></div>
                <div class="col-sm-12 col-md-8">
                    <!-- <h4 class="text-center focus_tilte_with_line">Industries We Serve</h4> -->

                    <div class="focus_line_after_title text_dark_theme bg_white">
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
        <img src="{{asset('assets/frontend')}}/img/indestry_lineart-l.png" alt="" class="img-fluid invert_color">
    </div>

</section>

<!-- <div class="line_breaker">
    <div class="line"></div>
    <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
    </div>
</div> -->

<section class="page_part_offset f_poppin py-5 padding_40" style="background: #5a80a0;">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-sm-12 col-md-8">
            <!-- <h4 class="text-center focus_tilte_with_line text-white">Find Our A to Z Services</h4> -->

            <div class="focus_line_after_title text-white bg_theme">
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
                            <a class="btn" href="{{$item->getMainpage->slug}}" style="font-size: 14px;"><span class="text_1">You can
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
    <div style="background-color: #47657e;" class="padding_40 pb-5">
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


<section class="padding_40 py-5" data-sectionname="NEW TO OUTSOURCING ?">

    <h4 class="super_heading_text"><span>Work ! </span><span> Read Up</span></h4>
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

<!-- Testimonial || Start -->
<section class="testimonial-area padding_40">
    <div class="container" style="min-height: 100vh;">
        <div class="sec-title white-title">
            <!-- <h2></h2> -->
            <h4 class="super_heading_text"
                style="font-size: 90px;color: #fff;font-weight: 900;font-family: 'Raleway', sans-serif;">
                Testimonials !</h4>
            <p style="font-size: 25px;line-height: 35px !important;">What Client Say About Us?</p>
        </div>
        <div class="testimonial-content owl-carousel">
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen
                    book</p>
                <div class="client-info">
                    <div class="client-video">
                        <a href="#"><img src="{{asset('assets/frontend')}}/img/play-button2.png" alt=""></a>
                    </div>
                    <div class="client-details">
                        <h6>Yeasin Arafat</h6>
                        <span>Designer, LLCG Team</span>
                    </div>
                </div>
            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen
                    book</p>
                <div class="client-info">
                    <div class="client-video">
                        <a href="#"><img src="{{asset('assets/frontend')}}/img/play-button2.png" alt=""></a>
                    </div>
                    <div class="client-details">
                        <h6>Yeasin Arafat</h6>
                        <span>Designer, LLCG Team</span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen
                    book</p>
                <div class="client-info">
                    <div class="client-video">
                        <a href="#"><img src="{{asset('assets/frontend')}}/img/play-button2.png" alt=""></a>
                    </div>
                    <div class="client-details">
                        <h6>Yeasin Arafat</h6>
                        <span>Designer, LLCG Team</span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen
                    book</p>
                <div class="client-info">
                    <div class="client-video">
                        <a href="#"><img src="{{asset('assets/frontend')}}/img/play-button2.png" alt=""></a>
                    </div>
                    <div class="client-details">
                        <h6>Yeasin Arafat</h6>
                        <span>Designer, LLCG Team</span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen
                    book</p>
                <div class="client-info">
                    <div class="client-video">
                        <a href="#"><img src="{{asset('assets/frontend')}}/img/play-button2.png" alt=""></a>
                    </div>
                    <div class="client-details">
                        <h6>Yeasin Arafat</h6>
                        <span>Designer, LLCG Team</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Testimonial || End -->


<!-- This is The Start of Footer Part -->
<section class="global_contact_card">
    <div class="contact_card_box">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <form action="" method="post">
                    <div class="say_hello_box">
                        <span>Say</span>
                        <span>Hello</span>
                    </div>

                    <div>Hello there, my name is <input type="text" placeholder="your name here">
                    </div>
                    <div class="pt-5">and looking for a team to help me with <br>
                        <textarea class="w-100 pt-3" name="" id=""
                            placeholder="your project discription here"></textarea></div>
                    <div class="pt-3">You can reach me at <input type="text" placeholder="your email address.">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="float-end global_contact_submit">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-4 links">
                <div class="w-100">
                    <a href="#"><i class="fab fa-whatsapp"></i> Connect with Whatsapp</a>
                    <a href="#"><i class="fab fa-telegram"></i> Connect with Telegram</a>
                    <a href="#"><i class="fab fa-facebook-messenger"></i> Connect with Messenger</a>
                    <a href="#"><i class="fab fa-skype"></i> Connect with Skype</a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="padding_40">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <h4>Menu Tilte</h4>
            <ul>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-3">
            <h4>Top Services</h4>
            <ul>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-3">
            <h4>Tranding Services</h4>
            <ul>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-3">
            <h4>Address</h4>
            <ul>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
                <li>Item 01</li>
            </ul>
        </div>
    </div>
</section>

<section class="footer_area">
    <div class="row justify-content-between">
        <div class="col-sm-12 col-md-6 copyright_text">Copyright &copy; 2022. All Rights Reserved.
            Development By <a href="#">DiMarz</a></div>
        <div class="col-sm-12 col-md-6 text-end links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</section>

@endsection


@section('custom_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
