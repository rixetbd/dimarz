<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Upwork - Client Preview</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/upworkpage.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/upworkpage-filter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/flag.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/sweetalert2.min.css')}}">
</head>

<body>

    <body>
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3"
                data-navbar-on-scroll="data-navbar-on-scroll">
                <div class="container"><a class="navbar-brand" href="#">
                        <span class="text-1000 fs-3 ms-2 fw-medium"><span class="fw-bold"
                                style="color: #1dbf73;">DiMarz</span></span></a><button class="navbar-toggler collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
                            <li class="nav-item"><a class="nav-link active active" aria-current="page"
                                    href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Service</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Pricing </a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="#LetMakeACover">Let's Make A Cover
                                    Proposal</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pb-6" style="background-color:#1b1a1d;" id="top_header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 order-md-1 p-4 header_leftside" style="">
                            {{-- <div class="typing_text_box">
                                <h1 id="typing_text_box_h1"> </h1>
                                <p id="typing_text_box_p">If you are watching this you know that even a perfect
                                    product or service won’t sell unless you can get it in front of the right people. As
                                    a Fellow Entrepreneur, I remember the long nights searching Endlessly Online for
                                    relevant leads for my business. It was tiring and time-consuming after years of
                                    struggling to find a solution. I decided to create one myself since then I have been
                                    conducting Diligent Lead Generation for thousands of businesses across the world.
                                    Every type of business can benefit from effective Lead Generation. Whether you are
                                    kickstarting a new venture scaling up your customer base or Anything In between we
                                    can help. Our lists are uniquely tailored to each client's needs and specifications.
                                    Any Industry Any location and any contact you let us know and we will find it for
                                    you. We have generated thousands of customers for clients across the world. We take
                                    our job very seriously, We pride ourselves on quality, communication, and
                                    Efficiency. And are confident that shows in our work. Let’s make sales simple and
                                    grow together.</p>

                            </div> --}}
                            <h5 class="py-2 ps-3" style="color: #1dbf73;">FAQ</h5>
                            <div class="accordion accordion-flush" id="accordionFlushFAQ">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="FAQflush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapseOne"
                                            aria-expanded="false" aria-controls="FAQflush-collapseOne">
                                            <i class="far fa-star star_css"></i> Do you have a discount for a big order ?
                                        </button>
                                    </h2>
                                    <div id="FAQflush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="FAQflush-headingOne" data-bs-parent="#accordionFlushFAQ">
                                        <div class="accordion-body">Of course, If it's a big order in general, we can discuss that. If it is doable for me then I don't have any problem giving some discount.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="FAQflush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapseTwo"
                                            aria-expanded="false" aria-controls="FAQflush-collapseTwo">
                                            <i class="far fa-star star_css"></i> What methods do you use to generate leads ?
                                        </button>
                                    </h2>
                                    <div id="FAQflush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="FAQflush-headingTwo" data-bs-parent="#accordionFlushFAQ">
                                        <div class="accordion-body">I will use manual research and collect leads using various resources such as LinkedIn Sales Navigator - Apollo.io - ZoomInfo - Crunchbase Pro - Google Advanced Search - Clearbit - Hunter.io - Debounce and many more.

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="FAQflush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapseThree"
                                            aria-expanded="false" aria-controls="FAQflush-collapseThree">
                                            <i class="far fa-star star_css"></i> Can I get a sample of your work before I place an order ?
                                        </button>
                                    </h2>
                                    <div id="FAQflush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="FAQflush-headingThree" data-bs-parent="#accordionFlushFAQ">
                                        <div class="accordion-body">
                                            Yeah, sure! The sample already in <a href="#table_section_area">this page.</a> The leads in the sample are up to date and 100% verified, so you can use them as a sample. Examine the example data provided below.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="FAQflush-heading4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapse4"
                                            aria-expanded="false" aria-controls="FAQflush-collapse4">
                                            <i class="far fa-star star_css"></i> Can you provide C-level contacts or specific titles ?
                                        </button>
                                    </h2>
                                    <div id="FAQflush-collapse4" class="accordion-collapse collapse"
                                        aria-labelledby="FAQflush-heading4" data-bs-parent="#accordionFlushFAQ">
                                        <div class="accordion-body">Yes, according to your requirements, We can provide you with C-level contacts (CEO, CFO, Owner, Partner, Founder, COO etc.) or specific job title leads from any industries/locations.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="FAQflush-heading5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapse5"
                                            aria-expanded="false" aria-controls="FAQflush-collapse5">
                                            <i class="far fa-star star_css"></i> How many leads can you deliver per week ?
                                        </button>
                                    </h2>
                                    <div id="FAQflush-collapse5" class="accordion-collapse collapse"
                                        aria-labelledby="FAQflush-heading5" data-bs-parent="#accordionFlushFAQ">
                                        <div class="accordion-body">We have a highly experienced and well-maintained team. We can deliver 2000+ leads per week.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="FAQflush-heading6">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapse6"
                                            aria-expanded="false" aria-controls="FAQflush-collapse6">
                                            <i class="far fa-star star_css"></i> Will you provide a detailed report ?
                                        </button>
                                    </h2>
                                    <div id="FAQflush-collapse6" class="accordion-collapse collapse"
                                        aria-labelledby="FAQflush-heading6" data-bs-parent="#accordionFlushFAQ">
                                        <div class="accordion-body">
                                            We offer reports for all services that are provided by us. Our specialist team is always ready to give you proper reports basis on the right work. We also provide you with daily, weekly, and monthly reports based on your taken services.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 col-lg-7 mt-5 text-center text-md-start" style="padding-right: 100px;">
                            <div class="header_top_left">
                                <h5 class="header_font_01">We Designed</h5>
                                <h4 class="header_font_01">15 Leads Samples</h4>
                                <h1 class="header_font_01">For Our B2B Lead Generation Clients</h1>
                                <h6>- Upwork Exclusive</h6>
                                <p>We serve a wide range of industries and commercial companies, and the leads in the sample are up to date and 100% verified, so you can use them as a sample. Examine the example data provided below.</p>
                                <span>
                                    <span style="font-size: 10px;color:#14a800;margin-right:5px;">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span> This page is for general preview purposes only to make understand the Clients.</span>
                            </div>
                            {{-- <a class="btn btn-lg btn-upwork btn-glow" href="#">Get Started </a> --}}
                            {{-- <form action="">
                                <div class="search_area">
                                    <input type="text" class="form-control" placeholder="Search for leads...">
                                    <button type="submit">Search</button>
                                    <span class="search_icon"><i class="fas fa-search"></i></span>
                                </div>
                            </form> --}}

                            {{-- <div class="d-flex mt-5 py-2 search_area_badge">
                                <div class="pe-2 text-white" style="width: 100px;">Popular : </div>
                                <div>
                                    <span>Web Research</span>
                                    <span>B2B Leads</span>
                                    <span>B2C Leads</span>
                                    <span>E-Commerce</span>
                                    <span>Law Firm</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- ============================================-->

            {{-- <section class="p-0 marquee_notes">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="marquee_notes_title">></div>
                        <marquee behavior="" direction="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                            quia provident ducimus numquam dolores voluptate commodi consectetur necessitatibus, atque
                            vel repudiandae, nobis quasi earum deleniti ad suscipit libero unde blanditiis?</marquee>
                    </div>
                </div>
            </section> --}}


            <!-- ============================================-->
            <!-- <Table Section> begin ============================-->

            <section style="padding-top: 3rem;" class="table_section" id="table_section_area">
                <div class="container">
                    <div class="row py-4">
                        <div class="col-12 pb-4">
                            <h2 class="table_section_title">15 Leads Samples</h2>
                            <h5 class="subtitle">Try searching for your leads using the dropdown section. If this does not meet your requirements, please  <a href="https://www.upwork.com/freelancers/samiur22?s=1017484851352698936">contact us.</a></h5>
                        </div>
                        <div class="col-sm-12 col-md-3 pe-2">
                            <div class="ui fluid search selection dropdown" id="country_Name">
                                <input type="hidden" name="country" id="country_Name_Input">
                                <i class="dropdown icon"></i>
                                <div class="default text">Select Country</div>
                                <div class="menu">
                                    @foreach ($country as $item)
                                    <div class="item" data-value="{{$item->name}}"><i
                                            class="cs flag"></i>{{$item->name}}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 px-2">
                            <select class="ui fluid search dropdown" id="industry_Name">
                                <option value="">Industry</option>
                                @foreach ($industry as $item)
                                <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3 px-2" id="niche_Name_area">
                            <select class="ui fluid search dropdown" id="niche_Name">
                                <option value="">Search Niche</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3 ps-2 pe-0">
                            <select class="ui fluid search dropdown" id="search_dropdown">
                                <option value="">Search By ...</option>
                                <option value="aa">Only Country</option>
                                <option value="AL">Only Industry</option>
                                <option value="AL">Only Niche</option>
                                <option value="AK">Country + Industry</option>
                                <option value="AK">Country + Industry + Niche</option>
                            </select>
                        </div>
                        {{-- <div class="col-sm-12 col-md-3">
                            <button class="btn-filter-search">Search</button>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered leads_main_table unselectable">
                                <thead>
                                    <tr>
                                        <th title="Company Name">Company Name</th>
                                        <th title="Website">Website</th>
                                        <th title="Company Address">Company Address</th>
                                        <th title="Revenue">Revenue</th>
                                        <th title="Company Size">Company Size</th>
                                        <th title="Company Size">Industry</th>
                                        <th title="Company Size">Niche</th>
                                        <th title="First Name">First Name</th>
                                        <th title="Last Name">Last Name</th>
                                        <th title="Title">Title</th>
                                        <th title="Personal Email">Personal Email</th>
                                        <th title="Company Email">Company Email</th>
                                        <th title="Phone 1">Phone 1</th>
                                        <th title="Phone 2">Phone 2</th>
                                        <th title="Linkedin">Linkedin</th>
                                        <th title="INSTAGRAM">INSTAGRAM</th>
                                        <th title="Facebook">Facebook</th>
                                        <th title="Source LINK">Source LINK</th>
                                    </tr>
                                </thead>
                                <tbody id="searchable_data">
                                    @foreach ($leads as $item)
                                    <tr>
                                        <td>{{$item->company_name}}</td>
                                        <td>{{$item->website}}</td>
                                        <td>{{$item->company_address}}</td>
                                        <td>{{$item->revenue}}</td>
                                        <td>{{$item->company_size}}</td>
                                        <td>{{$item->industry}}</td>
                                        <td>{{$item->niche}}</td>
                                        <td>{{$item->person_fname}}</td>
                                        <td>{{$item->person_lname}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->p_email}}</td>
                                        <td>{{$item->company_email}}</td>
                                        <td>{{$item->phone_one}}</td>
                                        <td>{{$item->phone_two}}</td>
                                        <td>{{$item->linkedin}}</td>
                                        <td>{{$item->instagram}}</td>
                                        <td>{{$item->facebook}}</td>
                                        <td>{{$item->source_link}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <Table Section> close ============================-->
            <!-- ============================================-->


            <!-- ============================================-->
            <!-- <Cover Letter Section> begin ============================-->
            <section class="pb-5" id="LetMakeACover" style="background-color: #292a2e;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 pb-3">
                            <h3 class="pb-5" style="font-size: 40px;color: #1dbf73;font-weight: 600;">We Design 3 Easy
                                Steps For You.</h3>
                            <p class="text-white step_btn_three" id="step_btn_one"><span>1.</span> Fill the input field below as per your
                                requirments.</p>
                            <p class="text-white step_btn_three"><span>2.</span> Click <span
                                    style="color:#1dbf73;padding:5px;cursor: pointer;">Copy</span> Button to Copy the
                                information you filled below & Paste the text to Upwork Message. We will contact you
                                there.</p>
                            {{-- <p class="text-white step_btn_three"><span>3.</span> Paste it to Upwork Message.</p> --}}
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5" id="" style="background-color: #202124;">
                <div class="container">
                    <div class="row">
                        {{-- <div class="col-sm-12 col-md-12 pb-5">
                            <h3 class="pb-5" style="font-size: 40px;color: #1dbf73;font-weight: 600;">We Design 3 Easy Steps For You.</h3>
                            <p class="text-white step_btn_three"><span>1.</span> Fill the input field below as per your requirments.</p>
                            <p class="text-white step_btn_three"><span>2.</span> Click <span style="color:#1dbf73;padding:5px;cursor: pointer;">Copy</span> Button to Copy the information you filled below & Paste the text to Upwork Message. We will contact you there.</p>
                        </div> --}}

                        <div class="col-sm-12 col-md-6 pt-3 pb-0 write_cover_text text-white gen_left_side">
                            I am looking for <input type="number" id="gen_custom_quantity"
                                class="form-control border_bottom width_150 py-1 px-2" placeholder="Fill Quantity"
                                required>
                            leads with the following specific criteria.

                            <br />
                            <h5 class="pt-3 text-white">Criteria:</h5>
                            <div class="d-flex py-3">
                                <span style="min-width:100px;">Location : </span>
                                <input type="text" id="gen_custom_location" class="form-control border_bottom py-1 px-2"
                                    placeholder="Example: USA" style="width: -webkit-fill-available;" required>
                            </div>
                            <div class="d-flex py-3">
                                <span style="min-width:100px;">Industry : </span>
                                <input type="text" id="gen_custom_industry" class="form-control border_bottom py-1 px-2"
                                    placeholder="Example: Real Estate, Law Firm etc."
                                    style="width: -webkit-fill-available;" required>
                            </div>
                            <div class="d-flex py-3">
                                <span style="min-width:100px;">Condition : </span>

                                {{-- <input type="text" id="gen_custom_location" class="form-control border_bottom"
                                    placeholder="Example: 1. German headquartered, 2. textActively Hiring in Spain 3. 10-250 Employees"
                                    style="width: -webkit-fill-available;" required>.
                                     --}}

                                <textarea class="form-control p-2" name="" id="gen_custom_condition" rows="2"
                                    placeholder="Example: 1. German headquartered, 2. textActively Hiring in Spain 3. 10-250 Employees"
                                    style="width: -webkit-fill-available;border:none;border-bottom: 1px solid #d9d9d9;font-size:14px;"></textarea>
                            </div>
                            <br>

                            <h5 class="pt-1 text-white">Data Type:</h5>

                            <label class="btn btn_cselection">
                                First Name <input type="checkbox" name="p_fname" id="p_fname" value="First Name">
                            </label>
                            <label class="btn btn_cselection">
                                Last Name <input type="checkbox" name="p_lname" id="p_lname" value="Last Name">
                            </label>
                            <label class="btn btn_cselection">
                                Email <input type="checkbox" name="p_email" id="p_email" value="Email">
                            </label>
                            <label class="btn btn_cselection">
                                Company Name <input type="checkbox" name="p_cname" id="p_cname" value="Company Name">
                            </label>
                            <label class="btn btn_cselection">
                                Company Email <input type="checkbox" name="p_cemail" id="p_cemail"
                                    value="Company Email">
                            </label>
                            <label class="btn btn_cselection">
                                Company Phone <input type="checkbox" name="p_cphone" id="p_cphone"
                                    value="Company Phone">
                            </label>
                            <label class="btn btn_cselection">
                                Website <input type="checkbox" name="p_website" id="p_website" value="Website">
                            </label>
                            <label class="btn btn_cselection">
                                Address <input type="checkbox" name="p_address" id="p_address" value="Address">
                            </label>
                            <label class="btn btn_cselection">
                                Revenue <input type="checkbox" name="p_revenue" id="p_revenue" value="Revenue">
                            </label>
                            <label class="btn btn_cselection">
                                Number Of Employee <input type="checkbox" name="p_numof_em" id="p_numof_em"
                                    value="Number Of Employee">
                            </label>
                            <label class="btn btn_cselection">
                                Source Link <input type="checkbox" name="p_src_link" id="p_src_link"
                                    value="Source Link">
                            </label>

                            <p class="pt-5 pb-3"><span style="font-size: 20px;color:#008000"><i
                                        class="fas fa-star"></i></span> Starting / Delivery Time and Rate of the
                                project will be fixed after dissuasion.</p>

                            <h5 class="pt-1 text-white">Additional Information:</h5>
                            <textarea class="form-control px-2 py-2" name="" id="additional_text" rows="3"
                                style="background: #ddd;"
                                placeholder="You can write here, if you have any additional query..."></textarea>
                        </div>
                        <div class="col-sm-12 col-md-1"></div>
                        <div class="col-sm-12 col-md-5 font_wieght_300 px-4"
                            style="background-color: #2c2d30;color:#fff;padding-top:4rem;border-left:1px solid #1dbf73;">
                            <div class="row" style="align-content: space-between;height: 100%;">
                                <div class="col-12">
                                    <div style="display: inline;">
                                        I am looking for <span style="color: #48f9a6;" id="Iamlookingforleads"></span>
                                        leads with the following specific criteria.
                                    </div>

                                    <div class="pt-4">
                                        <strong>Criteria:</strong>
                                        <hr class="mt-1 mb-3">
                                        <div class="d-flex width_150forTitle">
                                            <div>Location <span>:</span></div>
                                            <div id="pre_location">N/A</div>
                                        </div>
                                        <div class="d-flex width_150forTitle">
                                            <div>Industry <span>:</span></div>
                                            <div id="pre_industry">N/A</div>
                                        </div>
                                        <div class="d-flex width_150forTitle">
                                            <div>Condition <span>:</span></div>
                                            <p id="pre_condition">Describe your leads conditions...</p>
                                        </div>
                                    </div>

                                    <div class="pt-3">
                                        <strong>Data Type:</strong>
                                        <hr class="mt-1 mb-3">
                                        <ul class="ps-3" id="pre_listData">
                                            <li> First Name</li>
                                            <li> Last Name</li>
                                            <li> Email</li>
                                        </ul>
                                    </div>

                                    <div class="pt-2">
                                        <p id="additional_info">Your Additional Information Will Be Placed Here... (
                                            Type Sometings now )</p>
                                    </div>

                                </div>
                                <div class="col-12 pb-4">
                                    <p class="pt-1 mt-0" style="color: #48f9a6">* Starting/Delivery Time and Rate of the
                                        project will be fixed after dissuasion.</p>
                                    <button id="copy_text_r_upwork" class="py-2 btn btn-upwork float-end">Copy</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 py-4">
                            <textarea class="form-control p-4 d-none" name="" id="message_show_box" rows="20"
                                placeholder="You can write your needs..."></textarea>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <Cover Letter Section> close ============================-->
            <!-- ============================================-->



            <!-- ============================================-->
            <!-- <section> begin ============================-->
            {{-- <section class="pt-4 pt-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 text-lg-center"><img class="img-fluid mb-5 mb-md-0"
                                src="{{asset('assets/frontend/img/upwork/header-vector-2.png')}}" alt="" /></div>
            <div class="col-md-6 col-lg-6 text-center text-md-start">
                <h2>We Provide Many <br />Service If You Need</h2>
                <p id="typing_text_box_p">If you are watching this you know that even a perfect
                    product or service won’t sell unless you can get it in front of the right people. As
                    a Fellow Entrepreneur, I remember the long nights searching Endlessly Online for
                    relevant leads for my business. It was tiring and time-consuming after years of
                    struggling to find a solution. I decided to create one myself since then I have been
                    conducting Diligent Lead Generation for thousands of businesses across the world.
                    Every type of business can benefit from effective Lead Generation. Whether you are
                    kickstarting a new venture scaling up your customer base or Anything In between we
                    can help. Our lists are uniquely tailored to each client's needs and specifications.
                    Any Industry Any location and any contact you let us know and we will find it for
                    you. We have generated thousands of customers for clients across the world. We take
                    our job very seriously, We pride ourselves on quality, communication, and
                    Efficiency. And are confident that shows in our work. Let’s make sales simple and
                    grow together.</p>
            </div>
            </div>
            </div>
            </section> --}}
            <!-- <section> close ============================-->
            <!-- ============================================-->

        </main><!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->

        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script src="{{asset('assets/frontend')}}/js/upwork/popper.min.js"></script>
        <script src="{{asset('assets/frontend')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/frontend')}}/js/upwork/is.min.js"></script>
        <script src="{{asset('assets/frontend')}}/js/upwork/custom.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
        <script src="{{asset('assets/frontend')}}/js/upwork/theme.js"></script>
        <script src="{{asset('assets/frontend/js/sweetalert2.all.js')}}"></script>

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#country_Name').dropdown({
                forceSelection: false
            });
            $('#industry_Name').dropdown({
                forceSelection: false
            });
            $('#niche_Name').dropdown({
                forceSelection: false
            });

            $('#search_dropdown').dropdown({
                forceSelection: false
            });

            $('#gen_country_Name').dropdown({
                forceSelection: false
            });
            $('#gen_industry_Name').dropdown({
                forceSelection: false
            });

        </script>

        <script>
            function typeEffect(element, speed) {
                var text = element.innerHTML;
                element.innerHTML = "";

                var i = 0;
                var timer = setInterval(function () {
                    if (i < text.length) {
                        element.append(text.charAt(i));
                        i++;
                    } else {
                        clearInterval(timer);
                    }
                }, speed);
            }


            // application
            var speed = 10;
            var h1 = document.getElementById('typing_text_box_h1');
            var p = document.getElementById('typing_text_box_p');
            var delay = h1.innerHTML.length * speed + speed;

            // type affect to header
            // typeEffect(h1, speed);


            // type affect to body
            // setTimeout(function () {
            p.style.display = "inline-block";
            typeEffect(p, speed);
            // }, delay);

        </script>

        <script>
            // ID Name - top_header
            // $('#top_header');
            function changeColor() {
                let colorArr = ['#404258', '#413F42', '#1b1a1d'];
                for (let i = 0; i < colorArr.length; i++) {
                    let colorcode = colorArr[i];
                    setTimeout(function () {
                        $('#top_header').css('background-color', colorcode);
                        console.log(colorcode);
                    }, 4000 * i);
                }
                setTimeout(changeColor, 12000);
            }

            $(document).ready(function () {
                changeColor();
            });

            $("#message_show_box").elasticHeight();

        </script>

        <script>
            function generate_message() {
                let gen_custom_quantity = $('#gen_custom_quantity').val();
                let gen_custom_location = $('#gen_custom_location').val();
                let gen_custom_industry = $('#gen_custom_industry').val();
                let gen_custom_condition = $('#gen_custom_condition').val();
                let additional_text = $('#additional_text').val();
                let gen_custom_duration = $('#gen_custom_duration').val();

                // Lead Data Type
                let p_fname = $('#p_fname').val();
                let p_lname = $('#p_lname').val();
                let p_email = $('#p_email').val();
                let p_cname = $('#p_cname').val();
                let p_cemail = $('#p_cemail').val();
                let p_cphone = $('#p_cphone').val();
                let p_website = $('#p_website').val();
                let p_address = $('#p_address').val();
                let p_revenue = $('#p_revenue').val();
                let p_numof_em = $('#p_numof_em').val();
                let p_src_link = $('#p_src_link').val();

                if (gen_custom_quantity != '') {
                    var gen_custom_quantity_message = `Hi, \nI am looking for ` + gen_custom_quantity +
                        ` leads with the following specific criteria.`;
                    $('#Iamlookingforleads').html(gen_custom_quantity);
                } else {
                    var gen_custom_quantity_message =
                        `Hi, \nI am looking for some leads with the following specific criteria.`;
                    $('#Iamlookingforleads').html('');
                }

                if (gen_custom_location != '') {
                    var cl_location = `\nLocation: ` + gen_custom_location;
                    $('#pre_location').html(gen_custom_location);
                } else {
                    var cl_location = ``;
                    $('#pre_location').html('N/A');
                }

                if (gen_custom_industry != '') {
                    var cl_industry = `\nIndustry: ` + gen_custom_industry;
                    $('#pre_industry').html(gen_custom_industry);
                } else {
                    var cl_industry = ``;
                    $('#pre_industry').html('N/A');
                }

                if (gen_custom_condition != '') {
                    var cl_condition = `\nCondition: ` + gen_custom_condition;
                    $('#pre_condition').html(gen_custom_condition);
                } else {
                    var cl_condition = ``;
                    $('#pre_condition').html('N/A');
                }

                if (additional_text != '') {
                    var cl_additional_text = `\n\nAdditional Information:\n` + additional_text;
                    $('#additional_info').html(additional_text);
                } else {
                    var cl_additional_text = ``;
                    $('#additional_info').html('');
                }

                // User Information
                if ($('#p_fname').is(':checked')) {
                    var cl_p_fname = `\n- ${p_fname}`;
                    var preview_fname = `<li> ${p_fname}</li>`;
                } else {
                    var cl_p_fname = ``;
                    var preview_fname = ``;
                }

                if ($('#p_lname').is(':checked')) {
                    var cl_p_lname = `\n- ${p_lname}`;
                    var preview_lname = `<li> ${p_lname}</li>`;
                } else {
                    var cl_p_lname = ``;
                    var preview_lname = ``;
                }

                if ($('#p_email').is(':checked')) {
                    var cl_p_email = `\n- ${p_email}`;
                    var preview_email = `<li> ${p_email}</li>`;
                } else {
                    var cl_p_email = ``;
                    var preview_email = ``;
                }

                if ($('#p_cname').is(':checked')) {
                    var cl_p_cname = `\n- ${p_cname}`;
                    var preview_cname = `<li> ${p_cname}</li>`;
                } else {
                    var cl_p_cname = ``;
                    var preview_cname = ``;
                }

                if ($('#p_cemail').is(':checked')) {
                    var cl_p_cemail = `\n- ${p_cemail}`;
                    var preview_cemail = `<li> ${p_cemail}</li>`;
                } else {
                    var cl_p_cemail = ``;
                    var preview_cemail = ``;
                }

                if ($('#p_cphone').is(':checked')) {
                    var cl_p_cphone = `\n- ${p_cphone}`;
                    var preview_cphone = `<li> ${p_cphone}</li>`;
                } else {
                    var cl_p_cphone = ``;
                    var preview_cphone = ``;
                }

                if ($('#p_website').is(':checked')) {
                    var cl_p_website = `\n- ${p_website}`;
                    var preview_website = `<li> ${p_website}</li>`;
                } else {
                    var cl_p_website = ``;
                    var preview_website = ``;
                }

                if ($('#p_address').is(':checked')) {
                    var cl_p_address = `\n- ${p_address}`;
                    var preview_address = `<li> ${p_address}</li>`;
                } else {
                    var cl_p_address = ``;
                    var preview_address = ``;
                }

                if ($('#p_revenue').is(':checked')) {
                    var cl_p_revenue = `\n- ${p_revenue}`;
                    var preview_revenue = `<li> ${p_revenue}</li>`;
                } else {
                    var cl_p_revenue = ``;
                    var preview_revenue = ``;
                }

                if ($('#p_numof_em').is(':checked')) {
                    var cl_p_numof_em = `\n- ${p_numof_em}`;
                    var preview_numof_em = `<li> ${p_numof_em}</li>`;
                } else {
                    var cl_p_numof_em = ``;
                    var preview_numof_em = ``;
                }

                if ($('#p_src_link').is(':checked')) {
                    var cl_p_src_link = `\n- ${p_src_link}`;
                    var preview_src_link = `<li> ${p_src_link}</li>`;
                } else {
                    var cl_p_src_link = ``;
                    var preview_src_link = ``;
                }

                var pre_listData = preview_fname + preview_lname + preview_email + preview_cname +
                    preview_cemail + preview_cphone + preview_website + preview_address +
                    preview_revenue + preview_numof_em + preview_src_link;
                $('#pre_listData').html(pre_listData);

                var data_type = `\n\nData Type:` + cl_p_fname + cl_p_lname + cl_p_email + cl_p_cname +
                    cl_p_cemail + cl_p_cphone + cl_p_website + cl_p_address + cl_p_revenue + cl_p_numof_em +
                    cl_p_src_link;

                // gen_custom_industry
                if (gen_custom_location != '' || gen_custom_industry != '' || gen_custom_condition != '') {
                    var message2 = `\n\nCriteria: ` + cl_location + cl_industry + cl_condition;
                } else {
                    var message2 = ``;
                }

                $('#message_show_box').text(gen_custom_quantity_message + message2 + data_type + cl_additional_text);

            }

            // message_show_box
            $('#gen_custom_quantity').on('keyup', function () {
                generate_message();
            });
            $('#gen_custom_quantity').on('change', function () {
                generate_message();
            });
            $('#gen_custom_location').on('keyup', function () {
                generate_message();
            });
            $('#gen_custom_location').on('change', function () {
                generate_message();
            });
            $('#gen_custom_industry').on('keyup', function () {
                generate_message();
            });
            $('#gen_custom_industry').on('change', function () {
                generate_message();
            });
            $('#gen_custom_condition').on('keyup', function () {
                generate_message();
            });
            $('#gen_custom_condition').on('change', function () {
                generate_message();
            });
            $('#additional_text').on('keyup', function () {
                generate_message();
            });
            $('#additional_text').on('change', function () {
                generate_message();
            });

            $('#p_fname').click(function () {
                generate_message();
            });
            $('#p_lname').click(function () {
                generate_message();
            });
            $('#p_email').click(function () {
                generate_message();
            });
            $('#p_cname').click(function () {
                generate_message();
            });
            $('#p_cemail').click(function () {
                generate_message();
            });
            $('#p_cphone').click(function () {
                generate_message();
            });
            $('#p_website').click(function () {
                generate_message();
            });
            $('#p_address').click(function () {
                generate_message();
            });
            $('#p_revenue').click(function () {
                generate_message();
            });
            $('#p_numof_em').click(function () {
                generate_message();
            });
            $('#p_src_link').click(function () {
                generate_message();
            });

        </script>

        <script>

            function searchbyinputs(){
                let country = $('#country_Name_Input').val();
                let industry = $('#industry_Name').val();
                let niche = $('#niche_Name').val();
                $.ajax({
                    type: 'POST',
                    url: `{{route('search.marketplace.leadBycountry')}}`,
                    data: {
                        'country': country,
                        'industry': industry,
                        'niche': niche,
                    },
                    success: function (data) {
                        // console.log(data.htmldata);
                        $('#searchable_data').html(data.htmldata);
                    }
                });
            }

            $('#country_Name').change(function () {
                searchbyinputs();
            });


            $('#industry_Name').change(function () {
                let industry = $('#industry_Name').val();
                $.ajax({
                    type: 'POST',
                    url: `{{route('search.marketplace.nicheupdate')}}`,
                    data: {
                        'industry': industry,
                    },
                    success: function (data) {
                        // console.log(data.htmldata);


                        $('#niche_Name').html(data.htmldata);
                        // $('#niche_Name_area > .text').html('data.htmldata');
                        $('#niche_Name_area').next($('.text').eq(2).html('Search Niche'));
                        // $('#niche_Name').dropdown('clear');
                        searchbyinputs();
                    }
                });
            });


            $('#niche_Name').change(function () {
                searchbyinputs();
            });

        </script>
    </body>

</html>
