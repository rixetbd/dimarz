@extends('frontend.master')

<!-- This is The End of Header Part -->
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

<section class="single_part service_card_section overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Digital Marketing</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Lead Generation</h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>Lead Generation</h3>
                        </div>

                        <h4>Find Your Targeted Audience</h4>
                        <p>Lead Generation services are a fundamental segment of growing your
                            business's
                            revenue.</p>

                        <p class="text_600">As per the Web Report, 85% of B2B marketers say lead
                            generation is their most important content marketing goal.</p>

                        <p>That is why we create solid lead-generation strategies for you to present
                            organized & updated leads about your products and services.
                            To bring new customers into your sales funnel and convert them into your
                            target audience, you need top-notch leads, and that's why many companies
                            invest in lead generation services. With lead generation, you can find
                            your
                            targeted company, their revenue, number, email & much other information
                            that
                            can help quickly reach your audience.</p>

                        <h4>Get Qualified leads With DiMarz</h4>
                        <p>Dimarz provides customized support tailored to your business's needs– we
                            can
                            make it happen no matter what type of leads you want. We have an expert
                            team
                            of lead generation that can get you the results you need. Using our
                            services, you can acquire more qualified leads for your company.</p>

                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You can
                                    discover everything for your needs</span><span class="text_2">Visit Page <i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <div class="s_card_absolute_2">
                <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You can
                        discover everything for your needs</span><span class="text_2">Visit Page <i
                            class="fas fa-arrow-right"></i></span></a>
            </div> -->
        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>

<section class="single_part service_card_section_2 overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Digital Marketing</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Search Engine
                                Optimization</h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>Search Engine Optimization (SEO)</h3>
                        </div>

                        <h4>Importance Of SEO</h4>
                        <p class="text_600">As per globally research 51% of all website traffic
                            comes
                            from
                            organic searches.</p>
                        <p>But many websites aren’t getting the audiences they deserve. Why?
                            Because,
                            most of
                            the sites that are on the internet aren’t properly Search Engine
                            Optimized.
                            DiMarz
                            has got the solutions for your SEO.</p>

                        <h4>We Know What Works For You</h4>
                        <blockquote>“High-quality content and links are the best way to rank well on
                            Google.” -
                            Search Engine Land</blockquote>

                        <p>So, our experts will optimize your website for search engines with smart,
                            healthy &
                            best search engine approaches that will help you to get the top spot of
                            any
                            <strong title="Search Engine Ranking Position">SERP(Search Engine
                                Ranking
                                Position)</strong>. We will handle & optimize your Contents,
                            keywords, landing pages and other major aspects to bring the best
                            results.
                        </p>

                        <p>By deeply auditing the Technical, On-Page & Off-page status of your
                            website
                            and
                            applying persuasive SEO strategies, your website will gain more traffic
                            to
                            your
                            website. DiMarz will make sure of that.</p>


                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>

<section class="single_part service_card_section overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Digital Marketing</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Email Marketing</h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">

                    <div>

                        <div>
                            <h3>Email Marketing</h3>
                        </div>

                        <h4>A Potential Weapon To Scale Up Businesses</h4>
                        <blockquote>“A majority of marketers using email leverage mobile-friendly
                            emails
                            as part of their marketing strategy.” (Hubspot)</blockquote>
                        <p>Email marketing plays a vital role in the Digital Marketing sector as it
                            is a
                            direct ticket to advertise your product to potential customers. A well
                            organized campaign can bring greater revenue, higher ROI and more
                            engagement
                            to your brand.</p>

                        <h4>We Ensure Minimal Bounce Rate & Decent Engagement</h4>

                        <p>The first thing that everybody fears about email marketing is the heavy
                            bounce rates which leads people to take it as a waste of money. But,
                            it's
                            totally different with DiMarz. We value your time and money. Our
                            campaign
                            will ensure you a decent brand engagement along with minimal bounce
                            rate.
                            With the latest technologies and researches, we will ensure a decent
                            result
                            with our service.</p>
                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>

<section class="single_part service_card_section_2 overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Digital Marketing</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Content Writing</h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>Content Writing</h3>
                        </div>
                        <h4>Assurance of Unique, Error-Free & Original Contents</h4>
                        <p>Everyone expects their contents to be error-free, original and unique. We
                            can
                            assure you that. Our experienced writers will provide you with
                            well-researched, spun, plagiarism, grammar & spelling mistakes free
                            contents. And yes, we are against any kind of paraphrasing, rewriting or
                            duplicate writing to make sure that you get contents which are engaging,
                            easy to understand and SEO friendly.</p>

                        <h4>We Cover Various Industries</h4>
                        <p>You must need content writing services if you belong from Agencies,
                            Entreprises, Publishers, E-Commerce or any industry. Our experts can
                            handle
                            any kind of writing such as articles, blogs, product reviews,
                            copywriting,
                            social media contents and so on. We do not compromise with the quality
                            and
                            freshness of the contents. Providing the best service is our primary
                            objective.</p>
                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>

<section class="single_part service_card_section overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Data Entry</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Offline Data Entry
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>Offline Data Entry</h3>
                        </div>

                        <p>Offline data entry is the process of entering information into a list,
                            spreadsheet, database, or word processing program without the need for a
                            Web
                            connection. A well-organized and Error-free Data is the primary demand
                            of
                            every organization in the digital world.</p>

                        <p><strong>As per Research, 60% of companies feel that their overall data
                                quality
                                is erratic.</strong></p>

                        <p>Our Offline data entry Service is the perfect option for you to get
                            accurate
                            & Well organized Data. With our skilled data entry teams and years of
                            industry experience, we can enhance your business processes by providing
                            appropriate Data.</p>
                        <h4>Get well-organized Data From DiMarz</h4>
                        <p>DiMarz follows a diligent process to ensure you a high level of speed,
                            accuracy, and ease of understanding. We strive to provide professional &
                            Error-free offline data entry services that exactly match standards in
                            terms
                            of timeliness and efficiency.</p>
                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>

<section class="single_part service_card_section_2 overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Data Entry</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Online Data Entry
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>Online Data Entry</h3>
                        </div>
                        <p>The daily hassle of dealing with large volumes of data continues to pose
                            a
                            formidable problem for organizations & businesses. It is essential that
                            an
                            Error-free, efficient, and easily accessible data format is maintained
                            for a
                            smooth and error-free business.</p>

                        <p>In order to help you easily access and retrieve business-critical data,
                            or
                            collect your data from different sources, DiMarz offers the best online
                            data
                            entry services. With our perfect processes, a highly-skilled team of
                            data
                            entry operators, the best infrastructure, and stringent security
                            measures;
                            you can stay assured that your online data entry project is in safe
                            hands
                        </p>

                        <h4>DiMarz– your trustworthy data entry outsourcing partner</h4>
                        <p>We use the most advanced technology to ensure perfect delivery outputs
                            that
                            are high in quality and accuracy. By Outsourcing your Data entry project
                            to
                            us you can Saving up to 65% to 75% of company's expense.</p>

                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>



<!-- Web Development || Service Start -->
<section class="single_part service_card_section overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Web Development</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">WordPress
                                Development</h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>WordPress Development</h3>
                        </div>
                        <h4>Choose WordPress For Your Business</h4>
                        <p>Wordpress is a popular content management system (CMS) which is easy to
                            use
                            and has a wide range of features, which makes it a great choice for any
                            businesses .One of the best features of wordpress is the easy-to-use
                            administration panel. This panel includes a variety of tools that can be
                            used to customize your website, such as a Custom Fields Panel, Security
                            Panel, and more.</p>

                        <p><strong>Based on statistics, WordPress is used by 43.2 percent of all
                                websites.</strong></p>

                        <h4>WordPress Services Provided By Us</h4>

                        <p>So are you looking for a Wordpress development company? DiMarz is here to
                            help you.We can provide you with the best services possible and will be
                            able
                            to guide you through every step of your project. So if you're looking
                            for an
                            affordable and reliable Wordpress development company, then DiMarz is
                            the
                            perfect choice for you!</p>
                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>

<section class="single_part service_card_section_2 overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Web Development</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Web Application</h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>Web Application</h3>
                        </div>
                        <h4>Web Application Development: necessaries and prospects</h4>
                        <p>Web application development is a growing industry that offers many
                            benefits
                            to businesses. By building web applications, companies can reduce costs
                            and
                            time while increasing their security and efficiency. Additionally, web
                            application development can help companies grow their customer base and
                            increase profits.</p>

                        <h4>Why We're The Best Choice For Your Business</h4>
                        <p>DiMArz is a full-service web development team that provides web
                            application
                            design and technical support for your business. We build web
                            applications
                            using the best tools, including modern programming technology. Our goal
                            is
                            to construct websites with full implications for your growth potential
                            at a
                            low expense.</p>
                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>
<section class="single_part service_card_section overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Web Development</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Frontend Development
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>Frontend Development</h3>
                        </div>
                        <h4>Fluid, User Friendly & Optimized Front-End Development</h4>

                        <p>Front-End is the face of a website. It determines the look and feel of
                            your
                            web application. So, we will develop a user friendly and fully optimized
                            front-end structure which will give your traffic a different experience
                            that
                            they will like. All you need to do is just describe what you want and
                            our
                            developers will create it for you.</p>

                        <h4>We are Covering The Most Demanded Services</h4>

                        <p>Front-End development is a rich sector and has various kinds of services.
                            We
                            use technologies like HTML, CSS, JavaScript & REACT. From front-end
                            designing to converting HTML to other frameworks like CSS or React,
                            anything
                            is possible with DiMarz.</p>
                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>

<section class="single_part service_card_section_2 overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Web Development</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Backend Development
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>Backend Development</h3>
                        </div>
                        <h4>Build a Strong Foundation of Your Web Application</h4>
                        <p>The Back-End part of your website is the driving force which ensures the
                            performance and efficiency of your web application. It will ensure that
                            your
                            web servers, applications, and databases run effectively by using
                            various
                            types of web technologies. </p>

                        <h4>Smart Back-End Development Services By DiMarz team</h4>
                        <p>DiMarz can create customized backend options for web applications for
                            your
                            websites. Whatever your requirements, our backend development team will
                            provide you with a tailored solution that will help you achieve your
                            goals.
                            We also utilize technologies to help our customers build innovative
                            products
                            and solutions.</p>
                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>
<!-- Web Development || Service End -->



<!-- Graphics Design || Service Start -->
<section class="single_part service_card_section overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Graphics Design</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Photo Editing</h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>Photo Editing</h3>
                        </div>
                        <h4>Different Type Of Photo Editing Services</h4>
                        <p>Photo editing services are a great way to make your photos look more
                            professional and attractive. There are many different types of photo
                            editing services available, like Background Removal Services,eCommerce
                            Photo Editing, Advance Photo Editing, Real, Estate Photo Editing, Photo
                            manipulation, Vector Illustration & Digital Art so you can find the
                            right one for your needs.</p>

                        <h4>Choose The Perfect Service For You</h4>

                        <p>When you want to have a photo edited, find an agency with the skills and
                            experience to do a great job. are many different types of photo editing,
                            each requiring a specific approach. We have a photo editing team who
                            will deliver the work per your requirement. If you want your photos to
                            look their best, you can communicate with our team Dimarz.</p>
                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>

<section class="single_part service_card_section_2 overflow-hidden service_card_offset">
    <div class="row align-items-center">
        <div class="s_card">
            <div class="row">
                <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                    <div class="rotate_box">
                        <div class="w-100">
                            <h6>Service</h6>
                            <hr>
                            <h5>Graphics Design</h5>
                            <hr>
                            <h4 class="m-0 p-0 underlined underlined--gradient">Design</h4>
                        </div>
                    </div>
                </div>
                <div class="s_card_content">
                    <div>
                        <div>
                            <h3>Design</h3>
                        </div>

                        <h4>Why Your Business Needs A Designer</h4>

                        <p>Graphic design is a valuable service that can help your business stand
                            out. It can create a visual identity for your company and help to
                            communicate your message to customers. Graphic designers can help you
                            create better marketing materials. They can create brochures, advertise
                            your social media campaigns, website designs, logo design, and Motion
                            graphics.</p>


                        <h4>Hire a Graphic Design Company</h4>

                        <p>Dimarz a professional graphic design service provider that creates
                            stunning
                            visuals for brochures, banners, flyers, business cards, logo design,
                            social
                            media design, and many more. Our team of expert designers can help you
                            establish an attention-grabbing profile in the online world with our
                            complete professional services.</p>


                        <div class="s_card_absolute_2">
                            <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You
                                    can
                                    discover everything for your needs</span><span class="text_2">Visit
                                    Page <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="line_breaker">
    <div class="line"></div>
    <!-- <div class="icon_box">
        <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
        <div class="arrow-1 animated hinge infinite zoomIn"></div>
    </div> -->
</div>


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
