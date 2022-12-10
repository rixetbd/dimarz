@extends('frontend.master')

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

</style>
@endsection

@section('content')
<section id="top_focus">

    <section id="header_top" class="single_service_page">
        <div class="special_text_box">
            <h2 class="special_text text-center text-white">Lead Generation</h2>
            <h3 class="text-center floating_text text-white">Services</h3>
            <h3 class="gig_focus_title">We Provide Effective LEAD GENERATION Services</h3>
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

    <section class="padding_40 clickable_links_area">
        <div class="p-4 service_need_list">
            <h5 class="text-white">You may need</h5>
            <div class="d-flex auto_height">
                <a href="#">B2B Lead Generation</a>
                <a href="#">B2C Lead Generation</a>
                <a href="#">Web Research</a>
                <a href="#">Data Scraping</a>
            </div>
        </div>
    </section>


    <div class="line_breaker">
        <div class="line"></div>
        <!-- <div class="icon_box">
                            <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
                        </div> -->
    </div>


    <section class="page_part_offset py-5 padding_40" style="background: #fff;">
        <div class="row">
            <h4 class="super_heading_text"><span>Lead</span> <span>Generation</span></h4>
            <hr>
            <div class="col-sm-12 col-md-6">
                <h5 class="py-2" style="font-size: 24px;color: #484a7d;">Top-Notch Lead Generation
                    Services by DiMarz</h5>
                <!-- <h2 class="py-2" style="font-size: 30px;color: #484a7d;">What is Lead Generation, and How Does it Work ?</h2> -->

                <!-- <p class="m-0 text-center text-white">Dimarz can provide you with the service you
                                        require and demand for your Business. With our experienced and qualified
                                        professional team members, you'll be able to find the perfect services for your
                                        needs.</p> -->

                <p class="">Lead generation is a process of searching for people who are probably
                    interested in your service and getting in contact with them to communicate
                    further and convert . Repeat and Regular paying customers are every business’s
                    sweetest dream. You aren’t in business until then you find and retain paying
                    customers. However, achieving this dream isn’t a piece of cake in the park of
                    other million businesses. Thousands of businesses also compete for your target
                    customers.
                    So, how do you get a competitive edge? Do you have any magic lamp to assist you
                    in prospecting and turning prospects into paying customers?</p>
                <p class="">Thankfully, DiMarz is here to generate millions $$$ in revenue through
                    our magic tools, personalized email generator, and dedicated lead generation
                    specialist team.</p>

                <h2 style="font-size: 24px;color: #484a7d;">Generate Leads With Professionals</h2>
                <p class="">Lead Generation is our specialty, but it starts with your Discussion. We
                    take your unique business idea and understand your needs. We tailor a marketing
                    strategy with our lead generation services so that you get the most effective
                    return.
                    We provide you the best service on time, within the budget you allocate. We
                    serve:</p>
                <ul class="">
                    <li>B2B Lead generation</li>
                    <li>B2C lead generation</li>
                    <li>Product base lead generation</li>
                    <li>Service base lead generation</li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6">
                <div style="border-left: 1px solid #fdba13;padding-left: 20px;">

                    <h5 class="py-2" style="font-size: 24px;color: #484a7d;">Industries We Serve
                    </h5>

                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">We are Covering</h3>
                        <h4 class="in_sub_title"><span class="in_title">Many Industries
                                Globally</span>
                        </h4>
                    </div>

                    <p class="text-justify" style="opacity: 70%;font-style: italic;">Your main goal
                        should be to make sure that your <br>
                        <span id="industry_name">Software Industry</span>, <br>is easier to
                        navigate
                        and
                        more attractive from your biggest competitors. We believe that you are
                        ready
                        to
                        get services for your industry, Dimarz can help you on your most
                        demanding
                        services such as Website Design & Development, Digital Marketing,
                        Graphics
                        Designing, Data Entry and so on.</p>

                    <p class="text-justify" style="opacity: 70%;font-style: italic;">As a tech team,
                        DiMarz strives to deliver the
                        quality
                        that
                        will help our clients expand their ventures. With our VPO strategy,
                        which
                        stands
                        for Visualize, Process and Outcome we can give your project the best
                        possible
                        results. We visualize and understand the needs our clients want to
                        achieve.
                        Then
                        we process that visualization to bring out the best possible outcome.
                    </p>

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
        </div>
    </section>

    <section class="page_part_offset f_poppin py-5 padding_40" style="background: #47657e;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-sm-12 col-md-8">
                <h4 class="text-center text-white" style="font-size: 40px;">Find your right service
                    below</h4>
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
                                <h5 class="sub_category">Lead Generation</h5>
                                <hr>
                                <h4 class="m-0 p-0 underlined underlined--gradient">B2B Lead
                                    Generation</h4>
                            </div>
                        </div>
                    </div>
                    <div class="s_card_content">
                        <div>
                            <h3>B2B Lead Generation</h3>

                            <p>Every day your sales team is looking for warm and qualified leads to
                                work with. Our Lead generation Specialists work with you to fill
                                your team’s sales pipeline with quality leads. We work with you to
                                structure and implement a lead generation strategy that is built
                                upon marketing mechanization. It allows us to rise it fast and
                                optimize it on the fly.</p>
                            <div class="s_card_absolute_2">
                                <a class="btn" href="#" style="font-size: 14px;"><span class="text_1">You can
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
                                <h5 class="sub_category">Lead Generation</h5>
                                <hr>
                                <h4 class="m-0 p-0 underlined underlined--gradient">Web Research
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="s_card_content">
                        <div>
                            <div>
                                <h3>Web Research</h3>
                            </div>

                            <p>
                                We believe that business success comes from doing what you’re good
                                at. As integrated lead generation Specialists, we can act as your
                                marketing team, or as an extension of your in-house team, so you can
                                concentrate on managing other tasks. When we work with you, we
                                ensure that the lead generation practices we put in action are
                                multi-channel and that we innovate – in both tactics and strategy.
                            </p>


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
                                <h5 class="sub_category">Lead Generation</h5>
                                <hr>
                                <h4 class="m-0 p-0 underlined underlined--gradient">B2C LEAD
                                    Generation</h4>
                            </div>
                        </div>
                    </div>
                    <div class="s_card_content">
                        <div>
                            <div>
                                <h3>B2C LEAD Generation</h3>
                            </div>

                            <p>Lead generation is essential for moving your business onward. New B2C
                                leads can help your business by building your customer base. With
                                our business-to-consumer (B2C) lead generation services, you can
                                reach more qualified prospects. By understanding your precise needs,
                                we create a custom lead generation strategy that will effortlessly
                                educate, allure, and nurture the interest of your leads to help them
                                recognize the merits of becoming your customer.</p>
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
                                <h5 class="sub_category">Lead Generation</h5>
                                <hr>
                                <h4 class="m-0 p-0 underlined underlined--gradient">Data Scraping
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="s_card_content">
                        <div>
                            <div>
                                <h3>Data Scraping</h3>
                            </div>

                            <p>Your ability to extract and analyze web data at scale can constantly
                                be the difference between business failure and success. Our web
                                scraping services help you to do everything from sourcing
                                competitive pricing to auditing trader's directories to monitoring
                                consumer sentiment.Our data scraping process is dedicated to every
                                stage of developing a strong, secure, scalable & result-oriented
                                solution that meets your needs. Our process is highly flexible that
                                adapts, evolves, and responds as per your exceptional needs.
                            </p>
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

    <section class="padding_40">
        <div class="lead_data_table">

            <div class="focus_line_after_title text_dark_theme bg_white pt-5">
                <h4>Sample Of Leads Table</h4>
            </div>
            <p class="text-center">You can customize your needs as you seen below demo.</p>


        </div>
    </section>


    <section class="padding_40 pb-5">
        <!-- <div class="pb-3">
                                <div class="row justify-content-between align-items-end pt-4">
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <h4 style="font-size:25px;text-transform:uppercase;">Search Specific Leads</h4>
                                        <div class="col-12 search_div" id="country_Name_Box">
                                            <input type="hidden" id="country_Name_catch">
                                            <label for="" class="w-100" style="text-transform:uppercase;">Country Name
                                            </label>
                                            <div class="ui fluid search selection dropdown" id="country_Name">
                                                <input type="hidden" name="country" id="country_Name_Input">
                                                <i class="dropdown icon"></i>
                                                <div class="default text">Search Country</div>
                                                <div class="menu">
                                                    <div class="item" data-value="1"><i class="AO flag"></i> Country
                                                        Name
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-9">
                                        <button class="btn btn_city text-white float-end bg_theme_tomato"
                                            id="Filterreset">
                                            <div class="ui toltip" data-content="You can reset filter"
                                                data-position="top center">
                                                RESET ALL
                                            </div>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-12 row" style="padding-bottom:15px;border-bottom:1px solid #fff">
                                    <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
                                        <div class="col-12 search_div" id="">
                                            <label for="" class="w-100" style="text-transform:uppercase;">City
                                                Name</label>
                                            <div class="ui toltip"
                                                data-content="You can choose multiple cities as per your needs"
                                                data-position="left center">
                                                <select name="states" class="ui fluid search dropdown city_Name"
                                                    id="city_Name">
                                                    <option value="">All Cities</option>
                                                    <option value="id">City Name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9 mt-3" id="city_name_display">
                                        <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>
                                    </div>
                                </div>

                                <div class="col-12 row" style="padding-bottom: 15px;border-bottom:1px solid #fff">
                                    <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
                                        <div class="col-12 search_div" id="">
                                            <label for="" class="w-100" style="text-transform:uppercase;">Industry
                                                Name</label>
                                            <div class="ui toltip" data-content="You can choose multiple industry"
                                                data-position="left center">
                                                <select name="states" class="ui fluid search dropdown city_Name"
                                                    id="industry_Name">
                                                    <option value="">All Industry</option>
                                                    <option value="id">Industry Name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9 mt-3" id="industry_Name_display">
                                        <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>
                                    </div>
                                </div>


                                <div class="row my-3 filter_btn">

                                </div>

                                <div class="row my-3 filter_btn font_poppins">

                                    <div class="col-2"> <label class="btn btn_city w-100" id="table_Name">Person Name
                                            <input type="checkbox" disabled checked id="table_Name_IN"></label></div>
                                    <div class="col-2"><label class="btn btn_city w-100" id="table_Title">Job Title
                                            <input type="checkbox" disabled checked id="table_Title_IN"></label></div>
                                    <div class="col-2"><label class="btn btn_city w-100" id="table_Company">Company Name
                                            <input type="checkbox" disabled checked id="table_Company_IN"></label></div>
                                    <div class="col-2"><label class="btn btn_city w-100" id="table_City">City <input
                                                type="checkbox" disabled checked id="table_City_IN"></label></div>
                                    <div class="col-2"><label class="btn btn_city w-100" id="">Industry <input
                                                type="checkbox" disabled checked id="table_City_IN"></label></div>
                                    <div class="col-2">
                                        <div class="ui toltip" data-content="Selected Tabs Action"
                                            data-position="top center">
                                            <label class="btn btn_city w-100 bg_theme" id="table_refresh">All Tabs
                                                Selected</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row filter_btn">
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_Email">Email <input type="checkbox"
                                                checked id="table_Email_IN"></label>
                                    </div>
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_Phone">Phone <input type="checkbox"
                                                checked id="table_Phone_IN"></label>
                                    </div>
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_Company_Size">Company Size <input
                                                type="checkbox" checked id="table_Company_Size_IN"></label>
                                    </div>
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_Revenue">Revenue <input
                                                type="checkbox" checked id="table_Revenue_IN"></label>
                                    </div>
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_Zip_code">Zip Code <input
                                                type="checkbox" checked id="table_Zip_code_IN"></label>
                                    </div>
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_URL">Website <input type="checkbox"
                                                checked id="table_URL_IN"></label>
                                    </div>

                                </div>
                            </div> -->

        <div class="col-lg-12 col-md-12 col-sm-12" style="overflow-x:auto;">
            <table class="table table-responsive cell-border TableIDADD leads_data_table" id="myTableSimple">
                <thead>
                    <th>Person Name</th>
                    <th style="">Job Title</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th style="min-width: 170px;">Company Name</th>
                    <th style="width: 105px;min-width: 105px;">Company Size</th>
                    <th>Revenue</th>
                    <th style="min-width: 100px;">City</th>
                    <th style="min-width: 72px;">Zip Code</th>
                    <th>Website</th>
                </thead>
                <tbody id="lead_data">
                    <tr class="odd">
                        <td class="sorting_1">Abraham Ivor</td>
                        <td>Partner</td>
                        <td>abr****@*****al.ca</td>
                        <td>4898****</td>
                        <td>Abraham Legal S...</td>
                        <td>10 to 30</td>
                        <td>5 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                    <tr class="even">
                        <td class="sorting_1">Adele Tagirova</td>
                        <td>Partner</td>
                        <td>ade****@*****y.com</td>
                        <td>4414****</td>
                        <td>Adele Tagirova...</td>
                        <td>11 to 50</td>
                        <td>5 M</td>
                        <td>British Columbia</td>
                        <td>N/A</td>
                        <td>https://ww***.com</td>
                    </tr>
                    <tr class="odd">

                        <td class="sorting_1">Andrew Ain</td>
                        <td>Manager</td>
                        <td>aai****@*****d.com</td>
                        <td>8171****</td>
                        <td>Ain Whitehead L...</td>
                        <td>11 to 50</td>
                        <td>5 M</td>
                        <td>Barrie</td>
                        <td>N/A</td>
                        <td>https://ww***.com</td>
                    </tr>
                    <tr class="even">

                        <td class="sorting_1">Andrew Iacobelli</td>
                        <td>Partner</td>
                        <td>iac****@*****w.com</td>
                        <td>1070****</td>
                        <td>Iacobelli Law F...</td>
                        <td>11 to 50</td>
                        <td>5 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***.com</td>
                    </tr>
                    <tr class="odd">

                        <td class="sorting_1">Andrew Stewart</td>
                        <td>CEO</td>
                        <td>ast****@*****w.com</td>
                        <td>0626****</td>
                        <td>Dale Streiman A...</td>
                        <td>11 to 50</td>
                        <td>18 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***.com</td>
                    </tr>
                    <tr class="even">

                        <td class="sorting_1">Angela K. Brown</td>
                        <td>Partner</td>
                        <td>abr****@*****al.ca</td>
                        <td>1889****</td>
                        <td>Templeman LLP</td>
                        <td>51 to 200</td>
                        <td>13 M</td>
                        <td>Belleville</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                    <tr class="odd">

                        <td class="sorting_1">Anita Taneja</td>
                        <td>Partner</td>
                        <td>ani****@*****aw.ca</td>
                        <td>4000****</td>
                        <td>Taneja Law</td>
                        <td>44586</td>
                        <td>5 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                    <tr class="even">

                        <td class="sorting_1">Anne Downton</td>
                        <td>Partner</td>
                        <td>ann****@*****w.com</td>
                        <td>2290****</td>
                        <td>Dhindsa Law-Cri...</td>
                        <td>11 to 50</td>
                        <td>5 M</td>
                        <td>Abbotsford</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                    <tr class="odd">

                        <td class="sorting_1">Antar Kahlon</td>
                        <td>Partner</td>
                        <td>ant****@*****w.com</td>
                        <td>8444****</td>
                        <td>Kahlon Law Offi...</td>
                        <td>11 to 50</td>
                        <td>5 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                    <tr class="even">

                        <td class="sorting_1">Anthony Anushika</td>
                        <td>Partner</td>
                        <td>anu****@*****s.com</td>
                        <td>7011****</td>
                        <td>Anushika Anthon...</td>
                        <td>1 to 10</td>
                        <td>5 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>


    <div class="line_breaker">
        <div class="line"></div>
        <!-- <div class="icon_box">
                            <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
                            <div class="arrow-1 animated hinge infinite zoomIn"></div>
                        </div> -->
    </div>


    @if ($data->work_article)
        HiiH
    @endif


    <section class="padding_40" style="background-color: #fff;">
        <div class="service_article py-5">
            <h4 class="super_heading_text"><span>Work ! </span><span> Read Up</span></h4>
            <hr>
            <div>
                <h5 class="py-2" style="font-size: 20px;color: #484a7d;">The Definitive Guide To
                    Outsource leads</h5>
                <h2 class="py-2" style="font-size: 30px;color: #484a7d;">What is Lead Generation,
                    and How Does it Work ?</h2>

            </div>

            <p>Lead Generation Outsourcing is a great way to earn quality prospects and convert
                revenues within a short time with a few bucks, but without proper knowledge, you may
                waste more money than you need to. And you will get no result. But, with good
                command
                over lead generation outsourcing and the right person, you will get outstanding
                results
                that you didn't even imagine. This Lead Generation Outsourcing Definitive Guide will
                tell you how to do it. So, stay till the end, and you will discover the hidden gems
                of
                lead generation and how you can use it to get greater results.</p>

            <p>Lead generation outsourcing is a great way for businesses to get new leads from
                potential customers and create a healthy sales funnel. By outsourcing lead
                generation,
                businesses can save time and money while still getting the best possible results.
                Businesses need to consider a few things when outsourcing lead generation from a
                lead
                generation agency, including the type of leads they want to produce, their budget,
                and
                their desired outcome. Outsource leads if you want to increase your business's sales
                and
                reach new markets. But, of course, with proper knowledge!</p>

            <h2>What is Lead Generation, and How Does it Work?</h2>

            <p>Lead generation is the process of generating sales leads from potential customers. It
                can be done through several different means. Some lead generation methods can be a
                little different. But all lead generation methods are successful in generating
                leads.
                The most common way or traditional lead generation process was through contact with
                a
                salesperson. But, modern day lead generation can be done through online. There are a
                few
                criteria for lead generation and types of leads.</p>

            <h2>What are The Types of Lead Generations ?</h2>

            <p>All the lead-generation processes in the world fall under these two criteria;
                <ul class="ps-3">
                    <li>Inbound Lead Generation</li>
                    <li>Outbound Lead Generation</li>
                    <li>Inbound Lead Generation Process</li>
                </ul>
            </p>
            <p>Inbound lead generation is a process that starts with identifying the needs of
                your
                target market and then coming up with a list of potential leads. Next, you need
                to
                create an email course that addresses those needs and offers information that
                will
                interest your potential customers. Finally, you must create a landing page that
                greets
                your new customers and sells them the products or services you offer.</p>
            <p>So in other words, this is a process of organic lead generation. Organic lead
                generation
                uses natural resources to generate leads for businesses. This process can
                include
                creating a website, conducting market research, and contacting potential
                customers. By
                using this process, businesses can increase their lead generation rate by up to
                50%.
                These leads include prospects' email addresses, contact numbers, or other
                information.</p>

            <h4>Outbound Lead Generation Process</h4>
            <p>Outbound lead generation is the process of creating leads for a business, and it
                is done
                through the use of traditional marketing channels. This process involves
                gathering
                information from prospects willing to buy your product or service. The marketing
                department or sales department does the process of outbound lead generation, it
                involves
                contacting prospects to gather information.</p>

            <p>This process involves contacting people who have an interest in your product or
                service.
                This lead is done through cold calling, telemarketing, and through direct mail.
                This
                process involves gathering information about the customer, and it is done to
                generate
                leads. Outbound lead generation starts with identifying who your target
                customers are,
                building a relationship with them, and developing a strategy to convert them.
                After
                developing a plan, you send marketing efforts to those identified customers to
                convert
                them.</p>

            <h3>Who Needs Lead Generation?</h3>
            <p>Lead generation is a necessary function for any business. Not only do businesses
                need to
                generate leads, but they also need to keep them coming. Here, we tried to list
                out some
                needed companies or industries that need lead generation outsourcing to keep
                their
                business up and running;</p>

            <h4>B2B Companies</h4>
            <p>Businesses that conduct business as the bulk of their operations, rather than
                consumers,
                usually require Business to Business or B2B lead generation services. They
                typically
                sell products or services to other businesses, not individual consumers. B2B
                businesses
                typically have longer sales cycles and higher prices, so they typically do not
                use
                traditional marketing strategies to generate leads. They thus need to use
                targeted lead
                generation.</p>

            <p>Lead generation services can assist B2B companies in honing in on their target
                customers, lead generation strategy and generating more leads. These services
                can
                include premium digital ads, commercial mailings, telesales, and more. Through
                lead
                generation services, B2B companies can increase the prospects of making a profit
                and
                reaching their business goals.</p>

            <h4>B2C Companies</h4>
            <p>Lead generation is enormously critical for site owners and organizations since
                they want
                to sell their items to as many people as possible. Raising the number of leads
                theoretically enhances the number of customers in the target audience, making
                their
                interest in a brand product or service more noticeable. In the end, lead
                generation is a
                multibillion-dollar industry. A significant percentage of this industry is
                devoted to
                online marketing campaigns, along with the help of lead generation services.</p>

            <h4>Online Businesses</h4>
            <p>A salesman wishing to earn money in an online business world wants lead
                generation for
                buyers' contact info to resell to them later. Most conventional retailers would
                like
                their clients to return repeatedly to patronize their services. However, this
                isn't
                possible in online services due to the broad distance and the large number of
                customers.
                So, small to big online business owners need lead generation outsourcing
                services are
                required for them to market their products or services to more customers.</p>

            <h3>Is it Better To Outsource Lead Generation?</h3>
            <p>The decision to outsource lead generation is complex, with many factors to
                consider. The
                more important ones include the company's needs, the client's preferences, and
                the
                competition. Outsource lead generation if you think it will save your business
                money,
                improve your customer service scores, or take on a lessening role in your
                overall
                marketing efforts.</p>

            <p>Whether you need lead generation outsourcing services or not depends on your
                industry
                and how it will profit you. If you are in a business that sells services to
                businesses,
                then you surely need lead generation outsourcing services.</p>

            <p>If you are a multichain retailer or small online business owner, you need lead
                generation outsourcing to reach your potential clients. You can perform your
                marketing
                efforts to your leads and increase sales.</p>

            <p>Finally, lead generation is especially needed if you have a labor shortage or
                can't
                spend much on an extra employee to collect leads month after month. So, you can
                outsource lead generation service from a company to do your work at a small
                cost, and
                yes, lead generation outsourcing is pretty cost-effective too!</p>

            <h3>Are Lead Generation Companies Worth it?</h3>
            <p>Well, it depends on your needs! Do you need to build a list of prospects? Or do
                you just
                want to reach some new potential customers? And last but not least, do you need
                to
                generate leads for different projects? Then lead generation companies are worth
                it!
                Lead generation companies are becoming more and more popular as a way to
                increase your
                online presence and create leads for new business opportunities. These companies
                have
                experienced teams and dedicated staff who know what they do. Besides, some
                companies are
                experts and have well-researched abilities in different industries, which may
                help your
                company to get more qualified prospects.</p>

            <p>These lead generation outsourcing companies have lots of potential customers
                under their
                piggy bank, which they can provide you quickly. They also take responsibility
                for these
                leads, and provide high-quality leads.</p>

            <p>Another reason you should outsource leads from these companies is that you can
                get them
                at a very affordable cost. So, it is a great opportunity to market your product
                to a
                whole bunch of potential clients without spending a big fortune!</p>

            <h3>How Do You Choose a Lead Generation Company?</h3>

            <p>Many factors matter in this case, as there are many lead generation outsourcing
                companies worldwide.</p>

            <p>The first thing you need to consider before choosing a company for your lead
                generation
                outsourcing is the authority and trustworthiness of the company. It means that
                you
                should be sure that the company is reliable and trustworthy to get quality leads
                for
                your business. You have to ensure that the company is dedicated to helping
                businesses
                grow by providing them with the right guidance and training.</p>

            <p>Then you must consider the quality of the leads they are providing. Let me clear
                things
                up first. If the leads you gathered have high bounce rates, then there is no
                meaning in
                those leads and spending any money on them. The best way to get quality leads is
                to find
                the right company with enough data, samples, and proof for outsourcing lead
                generation
                and investing in them.</p>

            <p>The next thing you should remember while outsourcing leads is that your company
                is
                keeping your industry in mind while providing you with leads. Suppose your
                business
                belongs to the healthcare industry. If your company provides you with leads in
                the
                fashion industry, then there is no meaning in these leads, as generating revenue
                from
                these leads is almost impossible, and the chance to increase your sales is down
                to zero.
                Finally, you should consider the experience, lead generation metrics, research
                level,
                and pricing of the company from which you may be thinking of outsourcing your
                leads. You
                must consider their pricing with the quality of the leads they are providing and
                what
                information they are providing you in the leads.</p>

            <p>If these terms are well-matched, then you can outsource your lead from that
                company
                without any haste.</p>

            <h3>Need Experts For Lead Generation Outsourcing | Try DiMarz</h3>

            <p>Lead Generation Outsourcing can bring fortunes for your company if you choose the
                right
                company to do it for you. You can decide on the right company, if you follow the
                above
                steps and this guide properly, you can easily outsource quality leads with 100%
                accuracy
                and bring immense success to your business.</p>

            <p>To ease your pain of choosing the perfect one for your lead generation
                outsourcing, We,
                the DiMarz team, are here to help you!</p>

            <p>DiMarz is a team of highly qualified experts who are the best at what they do. We
                provide quality leads with unlimited revisions if you find any bounce leads. We
                showed
                our prices and packages on our official website.</p>

            <p>(Here is a special offer for you! We have a database of tons of leads according
                to your
                niche. You can search your desired industry and get the first 20 leads for
                free!)</p>
            <p>We serve the most competitive and challenging industries like;
                <ul class="ps-3">
                    <li>Software Industry</li>
                    <li>Healthcare Industry</li>
                    <li>Legal Industry</li>
                    <li>Real Estate Industry</li>
                    <li>Fashion Industry</li>
                    <li>Retail Industry</li>
                    <li>E-commerce Industry</li>
                    <li>Finance Industry And more.</li>
                </ul>
            </p>
            <p>So, if you are looking to outsource or are new to lead generation
                outsourcing, you can
                have a free consultation and start your lead generation outsourcing journey
                with us.</p>

        </div>
    </section>



    <section class="page_part_offset p-0 pt-3" data-sectionname="FAQ" data-sectionnameindex="3"
        style="background: #5a80a0;">
        <div style="background-color: #ffffff;" class="padding_40 py-5">
            <!-- <h4 class="text-center focus_tilte_with_line pt-5">FAQ</h4> -->

            <div class="focus_line_after_title text_dark_theme bg_white">
                <h4>FAQ</h4>
            </div>

            <p class="text-center" style="font-size: 25px;">We will explain
                everything simply, we understand it well enough.</p>

            <div class="row py-5">
                <div class="col-sm-12 col-md-12">
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
                                    We provide Digital Marketing,Web Development,Graphics Design &
                                    Data
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
                                    We selected our pricing model after global research. And
                                    definitely
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
                                    We have customization options for you. For each service we have
                                    a
                                    customized ordering option for you so that you can order as per
                                    your
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
                                    We can communicate through Email, Whats App, Zoom, Google Meet
                                    or
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
                                    We Offer 30 Min free Consultation. Our experienced consultants
                                    can
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
                                    We Provide reports for each of our services. Our Specialist team
                                    is
                                    always ready to deliver your reports. They provide you with
                                    daily,
                                    weekly, monthly reports according to your services.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="padding_40 py-5" style="background-color: #47657e;">

        <div>
            <!-- <h4 class="text-center focus_tilte_with_line text-white">Working Process</h4> -->

            <div class="focus_line_after_title text-white bg_dark_theme">
                <h4>Working Process</h4>
            </div>

            <p class="text-center" style="font-size: 25px;color: #9cb7cd !important;">We like to
                descrive what are doing as a process.</p>
        </div>

        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">1</div>
            <div class="working_process_right_card_two">
                <h5>CONNECT</h5>
                <p>Looking to enhance your digital platform? Contact with us today for a first free
                    consultation to determine the objectives of the transistion and decide the next
                    steps of your digital journey.</p>
            </div>
        </div>
        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">2</div>
            <div class="working_process_right_card_two">
                <h5>AGREEMENT</h5>
                <p>We love to discuss about the project in details before making up an agreement.
                    After a successful discussion we go for an agreement with you.</p>
            </div>
        </div>


        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">3</div>
            <div class="working_process_right_card_two">
                <h5>FINAL STRATEGY</h5>
                <p>The initial step after getting the project is research & planning to make a final
                    strategy. Our experts analyze your project to find the most appropriate method
                    for the project.</p>
            </div>
        </div>
        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">4</div>
            <div class="working_process_right_card_two">
                <h5>IMPLEMENTATION</h5>
                <p>An essential part of the Work process is implementation. While technology is a
                    main factor, we are also focusing on the people and your enterprise culture to
                    make sure the project is successful.</p>
            </div>
        </div>
        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">5</div>
            <div class="working_process_right_card_two">
                <h5>QUALITY CHECK & HANDOVER</h5>
                <p>We always try to maintain the best quality for submitting error-free tasks. In
                    this case, we maintain a strict quality check for your Desire services. Then,
                    The final step is here ; After final checking we deliver your project. We always
                    assure the best quality service for you.</p>
            </div>
        </div>

    </section>


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
                        <a href="#"><i class="fab fa-facebook-messenger"></i> Connect with
                            Messenger</a>
                        <a href="#"><i class="fab fa-skype"></i> Connect with Skype</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="footer_area">
        <div class="row justify-content-between">
            <div class="col-sm-12 col-md-6 copyright_text">Copyright &copy; 2022. All Rights
                Reserved. Development By <a href="#">DiMarz</a></div>
            <div class="col-sm-12 col-md-6 text-end links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </section>
@endsection
