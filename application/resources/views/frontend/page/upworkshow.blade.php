<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/frontend')}}/img/icon.png" type="image/x-icon">


    @include('meta::manager',[
    'title' => 'Lead Sample - Upwork - Client Preview',
    'author' => 'DiMarz.com',
    'description' => 'We Designed 15 Leads Samples For Our B2B Lead Generation Clients',
    'keywords' => 'Lead Sample, Upwork Client Preview, lead generation, b2b generation, b2c lead, ',
    'image' => asset('assets/frontend/img/upwork/thumbnail.png'),
    ])

    <meta name="theme-color" content="#ffffff">

    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/upworkpage.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/upworkpage-filter.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/upworkpage-responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/flag.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/sweetalert2.min.css')}}">

    <style>
        /* .paste_popup_root{
            position: relative;
        }
        .paste_popup {
            position: absolute;
            bottom: 100%;
            left: 0px;
            width: 220px;
            border-radius: 4px;
        }
        .paste_popup::after{
            content: "";
            position: absolute;
            display: block;
            bottom: 0;
            width: 10px;
            height: 10px;
            transform: rotate(45deg); */
        /* } */

        a.copy_paste_text {
            text-decoration: none;
        }

        .copy_paste_text {
            cursor: pointer;
            padding-left: 5px !important;
            padding-right: 5px !important;
            color: #ffff00 !important;
            font-weight: 600 !important;
        }
        .navbar-light {
            background-color:rgb(255 255 255 / 2%);
        }
    </style>

</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a class="navbar-brand" href="{{route('frontend.marketplace.upwork')}}">
                    <span class="text-1000 fs-3 ms-2 fw-medium"><span class="fw-bold"
                            style="color: #1dbf73;">DiMarz.com</span></span></a><button class="navbar-toggler collapsed"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#top_header">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#table_section_area_fp">Leads Sample</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#LetMakeACover_part">Proposal Builder</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#article_area_title">Articles</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-3" style="background-color:#1b1a1d;" id="top_header">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-sm-12 col-md-7 col-lg-7 mt-5 text-center text-md-start top_header_left">
                        <div class="header_top_left">
                            <h5 class="header_font_01">We Designed</h5>
                            <h4 class="header_font_01">15 Leads Samples</h4>
                            <h1 class="header_font_01">For Our B2B Lead Generation Clients</h1>
                            <h6>- Upwork Exclusive</h6>
                            <p>We serve a wide range of industries and commercial companies, and the leads in the
                                sample are up to date and 100% verified, so you can use them as a sample. Examine
                                the example data provided below.</p>
                            <span>
                                <span style="font-size: 10px;color:#14a800;margin-right:5px;">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span> This page is for general preview purposes only to make understand the
                                Clients.
                            </span>

                            {{-- <div class="field pt-3">
                                    <div class="mouse"></div>
                                </div> --}}
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

                    <div class="col-lg-5 col-md-5 p-4 header_leftside top_faq_area" style="">
                        <h5 class="py-2 ps-3" style="color: #1dbf73;">FAQ</h5>
                        <div class="accordion accordion-flush" id="accordionFlushFAQ">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="FAQflush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#FAQflush-collapseOne" aria-expanded="false"
                                        aria-controls="FAQflush-collapseOne">
                                        <i class="far fa-star star_css"></i> Do you have a discount for a big order
                                        ?
                                    </button>
                                </h2>
                                <div id="FAQflush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="FAQflush-headingOne" data-bs-parent="#accordionFlushFAQ">
                                    <div class="accordion-body">Of course, If it's a big order in general, we can
                                        discuss that. If it is doable for me then I don't have any problem giving
                                        some discount.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="FAQflush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#FAQflush-collapseTwo" aria-expanded="false"
                                        aria-controls="FAQflush-collapseTwo">
                                        <i class="far fa-star star_css"></i> What methods do you use to generate
                                        leads ?
                                    </button>
                                </h2>
                                <div id="FAQflush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="FAQflush-headingTwo" data-bs-parent="#accordionFlushFAQ">
                                    <div class="accordion-body">I will use manual research and collect leads using
                                        various resources such as LinkedIn Sales Navigator - Apollo.io - ZoomInfo -
                                        Crunchbase Pro - Google Advanced Search - Clearbit - Hunter.io - Debounce
                                        and many more.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="FAQflush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#FAQflush-collapseThree" aria-expanded="false"
                                        aria-controls="FAQflush-collapseThree">
                                        <i class="far fa-star star_css"></i> Can I get a sample of your work before
                                        I place an order ?
                                    </button>
                                </h2>
                                <div id="FAQflush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="FAQflush-headingThree" data-bs-parent="#accordionFlushFAQ">
                                    <div class="accordion-body">
                                        Yeah, sure! The sample already in <a href="#table_section_area">this
                                            page.</a> The leads in the sample are up to date and 100% verified, so
                                        you can use them as a sample. Examine the example data provided below.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="FAQflush-heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#FAQflush-collapse4" aria-expanded="false"
                                        aria-controls="FAQflush-collapse4">
                                        <i class="far fa-star star_css"></i> Can you provide C-level contacts or
                                        specific titles ?
                                    </button>
                                </h2>
                                <div id="FAQflush-collapse4" class="accordion-collapse collapse"
                                    aria-labelledby="FAQflush-heading4" data-bs-parent="#accordionFlushFAQ">
                                    <div class="accordion-body">Yes, according to your requirements, We can provide
                                        you with C-level contacts (CEO, CFO, Owner, Partner, Founder, COO etc.) or
                                        specific job title leads from any industries/locations.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="FAQflush-heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#FAQflush-collapse5" aria-expanded="false"
                                        aria-controls="FAQflush-collapse5">
                                        <i class="far fa-star star_css"></i> How many leads can you deliver per week
                                        ?
                                    </button>
                                </h2>
                                <div id="FAQflush-collapse5" class="accordion-collapse collapse"
                                    aria-labelledby="FAQflush-heading5" data-bs-parent="#accordionFlushFAQ">
                                    <div class="accordion-body">We have a highly experienced and well-maintained
                                        team. We can deliver 2000+ leads per week.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="FAQflush-heading6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#FAQflush-collapse6" aria-expanded="false"
                                        aria-controls="FAQflush-collapse6">
                                        <i class="far fa-star star_css"></i> Will you provide a detailed report ?
                                    </button>
                                </h2>
                                <div id="FAQflush-collapse6" class="accordion-collapse collapse"
                                    aria-labelledby="FAQflush-heading6" data-bs-parent="#accordionFlushFAQ">
                                    <div class="accordion-body">
                                        We offer reports for all services that are provided by us. Our specialist
                                        team is always ready to give you proper reports basis on the right work. We
                                        also provide you with daily, weekly, and monthly reports based on your taken
                                        services.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

        <section class="p-0">
            <div class="container">
                <div class="col-sm-12 col-md-12 d-flex justify-content-center">
                    <a href="#table_section_area_fp" class="icon-font">
                        <span class="fontawesome-angle-down"></span>
                    </a>
                </div>
            </div>
        </section>

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

        <section style="padding-top: 1rem;" class="table_section bg_white" id="table_section_area">
            <div class="container">
                <div class="row py-4" id="table_section_area_fp">
                    <div class="col-12 pb-4">
                        <h2 class="table_section_title">15 Leads Samples</h2>
                        <h5 class="subtitle">Try searching for your leads using the dropdown section. If this does
                            not meet your requirements, please <a
                                href="https://www.upwork.com/freelancers/samiur22?s=1017484851352698936">contact
                                us.</a></h5>
                    </div>
                    <div class="col-sm-12 col-md-3 pe-2">
                        <div class="ui fluid search selection dropdown" id="country_Name">
                            <input type="hidden" name="country" id="country_Name_Input">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Country</div>
                            <div class="menu">
                                @foreach ($country as $item)
                                <div class="item" data-value="{{$item->name}}"><i
                                        class="{{Str::lower($item->iso2)}} flag"></i>{{$item->name}}</div>
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
                    <div class="col-sm-12 col-md-3 ps-2 pe-0 suggestion_input_area">
                        <input type="text" class="suggestion_input" placeholder="Search here...">
                        <ul class="suggestion_ul d-none" id="suggestion_ul">

                        </ul>
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
                                    {{-- <th title="Company Size">Industry</th>
                                        <th title="Company Size">Niche</th> --}}

                                    <th title="Company Name">Company Name</th>
                                    <th title="Website">Website</th>
                                    <th title="Company Address">Company Address</th>
                                    <th title="First Name">First Name</th>
                                    <th title="Last Name">Last Name</th>
                                    <th title="Title">Title</th>
                                    <th title="Personal Email">Personal Email</th>
                                    <th title="Company Email">Company Email</th>
                                    <th title="Phone 1">Phone 1</th>
                                    <th title="Phone 2">Phone 2</th>
                                    <th title="Revenue">
                                        <span style="font-size: 12px;color:yellow">
                                            <i class="fas fa-star"></i>
                                        </span> Revenue
                                    </th>
                                    <th title="Company Size">
                                        <span style="font-size: 12px;color:yellow">
                                            <i class="fas fa-star"></i>
                                        </span> Company Size
                                    </th>
                                    <th title="Linkedin">
                                        <span style="font-size: 12px;color:yellow">
                                            <i class="fas fa-star"></i>
                                        </span> Linkedin
                                    </th>
                                    <th title="INSTAGRAM">
                                        <span style="font-size: 12px;color:yellow">
                                            <i class="fas fa-star"></i>
                                        </span> INSTAGRAM
                                    </th>
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
                                    <td>{{$item->person_fname}}</td>
                                    <td>{{$item->person_lname}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->p_email}}</td>
                                    <td>{{$item->company_email}}</td>
                                    <td>{{$item->phone_one}}</td>
                                    <td>{{$item->phone_two}}</td>
                                    <td>{{$item->revenue}}</td>
                                    <td>{{$item->company_size}}</td>
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
        <section class="pb-5 pt-3" id="LetMakeACover" style="background-color: #292a2e;">
            <div class="container" id="LetMakeACover_part">
                <div class="row">
                    <div class="col-sm-12 col-md-12 pb-3">
                        <h3 class="pt-5 font_20_onmobile" style="font-size: 40px;color: #ffff00;font-weight: 600;">Let us know your
                            requirments</h3>

                        <h3 class="pb-5 font_15_onmobile" style="font-size: 40px;color: #1dbf73;font-weight: 600;">We Design 2 Easy
                            Steps For You.</h3>
                        <p class="text-white step_btn_three" id="step_btn_one">
                            <span>Step-1.</span>
                            <span>Fill the input field
                                below as per your
                                requirments.</span>
                        </p>
                        <p class="text-white step_btn_three">
                            <span>Step-2.</span>
                            <span>Click <a id="copy_destination" class="copy_paste_text"
                                    style="color:#1dbf73;padding:5px;cursor: pointer;"
                                    href="#gen_custom_quantity">Copy</a> Button to Copy the
                                information you filled below & <span class="copy_paste_text">Paste</span> the text to
                                Upwork Message. We will contact you
                                there.</span>
                        </p>
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

                    <div class="col-sm-12 col-md-6 write_cover_text text-white gen_left_side second_steps_right">
                        <h3 class="steps_super_title ps-3">Step - 1</h3>
                        <div style="position: relative;z-index:1">

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

                                <textarea class="form-control p-2" name="" id="gen_custom_condition" rows="2"
                                    placeholder="Example: 1. German headquartered, 2. textActively Hiring in Spain 3. 10-250 Employees"
                                    style="width: -webkit-fill-available;border:none;border-bottom: 1px solid #d9d9d9;font-size:14px;"></textarea>
                            </div>
                            <br>

                            <h5 class="pt-1 text-white">Data Type:</h5>

                            <div class="row m-0">
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
                                    Company Name <input type="checkbox" name="p_cname" id="p_cname"
                                        value="Company Name">
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
                            </div>

                            <p class="pt-5 pb-3"><span style="font-size: 20px;color:#008000"><i
                                        class="fas fa-star"></i></span> Starting / Delivery Time and Rate of the
                                project will be fixed after dissuasion.</p>

                            <h5 class="pt-1 text-white">Additional Information:</h5>
                            <textarea class="form-control px-2 py-2" name="" id="additional_text" rows="3"
                                style="background: #ddd;"
                                placeholder="You can write here, if you have any additional query..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-1"></div>
                    <div class="col-sm-12 col-md-5 font_wieght_300 px-4 second_steps_right" style="padding:40px;">
                        {{-- background-color: #2c2d30;color:#fff;padding-top:4rem;border-left:1px solid #1dbf73; --}}
                        <h3 class="steps_super_title">Step - 2</h3>
                        <div class="d-flex" style="flex-direction: column;justify-content: space-between;height: 100%;">
                            <div class="row"
                                style="align-content: space-between;background-color: #2c2d30;color:#fff;padding-top:4rem;border-left:1px solid #1dbf73;position: relative;z-index: 1;">
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
                                    <p class="pt-1 mt-0" style="color: #48f9a6;font-size: 13px;">* Starting/Delivery Time and Rate of the
                                        project will be fixed after dissuasion.</p>
                                </div>

                                <div class="col-12 pb-3" style="background: ;z-index: 5;position: relative;">
                                    <button id="copy_text_r_upwork" class="py-2 btn btn-upwork float-end">Copy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 py-4">
                        <textarea class="form-control p-4 d-none" name="" id="message_show_box" rows="20"
                            placeholder="You can write your needs..."></textarea>
                        {{--  --}}
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="col-lg-5 col-md-5 p-4 header_leftside top_faq_area2" style="">
                    <h5 class="py-2 ps-3" style="color: #1dbf73;">FAQ</h5>
                    <div class="accordion accordion-flush" id="accordionFlushFAQ2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="FAQflush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#FAQflush-collapseOne" aria-expanded="false"
                                    aria-controls="FAQflush-collapseOne">
                                    <i class="far fa-star star_css"></i> Do you have a discount for a big order
                                    ?
                                </button>
                            </h2>
                            <div id="FAQflush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="FAQflush-headingOne" data-bs-parent="#accordionFlushFAQ2">
                                <div class="accordion-body">Of course, If it's a big order in general, we can
                                    discuss that. If it is doable for me then I don't have any problem giving
                                    some discount.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="FAQflush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#FAQflush-collapseTwo" aria-expanded="false"
                                    aria-controls="FAQflush-collapseTwo">
                                    <i class="far fa-star star_css"></i> What methods do you use to generate
                                    leads ?
                                </button>
                            </h2>
                            <div id="FAQflush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="FAQflush-headingTwo" data-bs-parent="#accordionFlushFAQ2">
                                <div class="accordion-body">I will use manual research and collect leads using
                                    various resources such as LinkedIn Sales Navigator - Apollo.io - ZoomInfo -
                                    Crunchbase Pro - Google Advanced Search - Clearbit - Hunter.io - Debounce
                                    and many more.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="FAQflush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#FAQflush-collapseThree" aria-expanded="false"
                                    aria-controls="FAQflush-collapseThree">
                                    <i class="far fa-star star_css"></i> Can I get a sample of your work before
                                    I place an order ?
                                </button>
                            </h2>
                            <div id="FAQflush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="FAQflush-headingThree" data-bs-parent="#accordionFlushFAQ2">
                                <div class="accordion-body">
                                    Yeah, sure! The sample already in <a href="#table_section_area">this
                                        page.</a> The leads in the sample are up to date and 100% verified, so
                                    you can use them as a sample. Examine the example data provided below.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="FAQflush-heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#FAQflush-collapse4" aria-expanded="false"
                                    aria-controls="FAQflush-collapse4">
                                    <i class="far fa-star star_css"></i> Can you provide C-level contacts or
                                    specific titles ?
                                </button>
                            </h2>
                            <div id="FAQflush-collapse4" class="accordion-collapse collapse"
                                aria-labelledby="FAQflush-heading4" data-bs-parent="#accordionFlushFAQ2">
                                <div class="accordion-body">Yes, according to your requirements, We can provide
                                    you with C-level contacts (CEO, CFO, Owner, Partner, Founder, COO etc.) or
                                    specific job title leads from any industries/locations.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="FAQflush-heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#FAQflush-collapse5" aria-expanded="false"
                                    aria-controls="FAQflush-collapse5">
                                    <i class="far fa-star star_css"></i> How many leads can you deliver per week
                                    ?
                                </button>
                            </h2>
                            <div id="FAQflush-collapse5" class="accordion-collapse collapse"
                                aria-labelledby="FAQflush-heading5" data-bs-parent="#accordionFlushFAQ2">
                                <div class="accordion-body">We have a highly experienced and well-maintained
                                    team. We can deliver 2000+ leads per week.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="FAQflush-heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#FAQflush-collapse6" aria-expanded="false"
                                    aria-controls="FAQflush-collapse6">
                                    <i class="far fa-star star_css"></i> Will you provide a detailed report ?
                                </button>
                            </h2>
                            <div id="FAQflush-collapse6" class="accordion-collapse collapse"
                                aria-labelledby="FAQflush-heading6" data-bs-parent="#accordionFlushFAQ2">
                                <div class="accordion-body">
                                    We offer reports for all services that are provided by us. Our specialist
                                    team is always ready to give you proper reports basis on the right work. We
                                    also provide you with daily, weekly, and monthly reports based on your taken
                                    services.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- <Cover Letter Section> close ============================-->
        <!-- ============================================-->


        <section class="py-4" style="background-color: #292a2e0e">
            <div class="container" id="article_area_title">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-8 box_shadow_title">
                        <h2><span>10 Advantages</span> of Lead Generation</h2>
                        <h5>That will help your business succeed</h5>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" id="article_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 box_shadow_area">
                        <div class="box_shadow_at">
                            <div class="top_part">
                                <h5 class="step_title">Step 01</h5>
                                <h4>Targeted Marketing</h4>
                                <p>To get targeted marketing with lead generation, consider the following:</p>

                                <ol>
                                    <li>Identify your ideal customer: Define your target audience based on
                                        demographics,
                                        interests, behaviors, and needs. This will help you create content and
                                        offers
                                        that appeal to them.</li>

                                    <li>Develop buyer personas: Develop detailed buyer personas that capture the
                                        characteristics and needs of your target audience. This will help you tailor
                                        your marketing messages to their specific needs and interests.</li>

                                    <li>Use data and analytics: Use data and analytics to track user behavior and
                                        understand what motivates your target audience. This will help you create
                                        more
                                        effective marketing campaigns that resonate with your audience.</li>

                                    <li>Create personalized content: Create personalized content that speaks
                                        directly to
                                        your target audience. This can include blog posts, videos, social media
                                        posts,
                                        and email marketing campaigns.</li>

                                    <li>Leverage social media: Use social media platforms to target specific
                                        audiences
                                        based on interests, demographics, and behaviors. This will help you reach
                                        your
                                        ideal customers and generate leads.</li>

                                    <li>Use lead magnets: Use lead magnets such as eBooks, webinars, and free trials
                                        to
                                        attract leads and encourage them to engage with your brand.</li>
                                </ol>

                                <p>By implementing these strategies, you can create a targeted marketing campaign
                                    that
                                    resonates with your ideal customer, generates leads, and drives conversions.</p>

                            </div>
                            <div class="bottom_part">
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 box_shadow_area">
                        <div class="box_shadow_at">
                            <div class="top_part">
                                <h5 class="step_title">Step 02</h5>
                                <h4>Grow Your Following</h4>
                                <p>Here are some ways to grow your following with lead generation:</p>
                                <ol>
                                    <li>Offer valuable content: Provide valuable content to your audience that they
                                        can't get anywhere else. This will encourage them to follow you to stay
                                        updated and engaged.</li>
                                    <li>Use social media platforms: Promote your content on social media platforms
                                        like Facebook, Instagram, Twitter, and LinkedIn. This will increase the
                                        visibility of your content and reach a wider audience.</li>
                                    <li>Run ads: Invest in social media ads that are targeted towards your ideal
                                        customer. This will help you reach people who are more likely to be
                                        interested in your content.</li>
                                    <li>Optimize your website: Optimize your website for lead generation. Use
                                        landing pages, call-to-actions, and lead magnets to capture the contact
                                        information of your website visitors.</li>
                                    <li>Collaborate with others: Collaborate with other influencers and brands in
                                        your niche. This will help you reach a wider audience and gain more
                                        followers.</li>
                                </ol>
                                <p>Remember, it's not just about the number of followers you have, but the quality
                                    of your followers. Focus on providing value and building meaningful
                                    relationships with your followers, and the growth will come naturally.</p>
                            </div>
                            <div class="bottom_part">
                                <span class="read_more">Read more...</span>
                                {{-- <span>Step 02</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 box_shadow_area">
                        <div class="box_shadow_at">
                            <div class="top_part">
                                <h5 class="step_title">Step 03</h5>
                                <h4>Gather More Customer Reviews</h4>
                                <p>To gather more customer reviews with lead generation, consider the following:</p>
                                <ol>
                                    <li>Ask for reviews: Ask your customers to leave a review of your product or
                                        service. You can do this through email, social media, or in person.</li>

                                    <li>Make it easy to leave a review: Make the review process as easy as possible
                                        for your customers. Provide clear instructions and links to your review
                                        platforms.</li>

                                    <li>Offer incentives: Offer incentives such as discounts, free products, or
                                        entry into a prize draw for leaving a review. This can encourage more
                                        customers to share their experiences.</li>

                                    <li>Use review platforms: Use review platforms such as Yelp, Google My Business,
                                        and Facebook to collect reviews. These platforms are popular among customers
                                        and can help increase the visibility of your business.</li>

                                    <li>Respond to reviews: Respond to customer reviews, both positive and negative.
                                        This shows that you value customer feedback and are committed to providing
                                        the best possible experience.</li>

                                    <li>Showcase reviews: Showcase customer reviews on your website, social media
                                        channels, and in marketing materials. This can help build trust with
                                        potential customers and encourage them to make a purchase.</li>

                                </ol>
                                <p>By implementing these strategies, you can generate more customer reviews, which
                                    can help build trust with potential customers, improve your online reputation,
                                    and ultimately drive more sales.</p>

                            </div>
                            <div class="bottom_part">
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 box_shadow_area">
                        <div class="box_shadow_at">
                            <div class="top_part">
                                <h5 class="step_title">Step 04</h5>
                                <h4>Boost Your Revenue</h4>
                                <p>To boost your revenue with lead generation, consider the following:</p>
                                <ol>

                                    <li>Optimize your website for lead generation: Use landing pages, lead magnets,
                                        and call-to-actions to capture the contact information of your website
                                        visitors. This will allow you to nurture leads and convert them into paying
                                        customers.</li>

                                    <li>Create targeted marketing campaigns: Develop marketing campaigns that target
                                        your ideal customer based on demographics, interests, and behaviors. This
                                        will help you generate high-quality leads that are more likely to convert.
                                    </li>

                                    <li>Use social media advertising: Use social media advertising to target
                                        specific audiences and generate leads. This can be particularly effective on
                                        platforms like Facebook and Instagram, which allow you to target users based
                                        on a variety of factors.</li>

                                    <li>Use email marketing: Use email marketing to nurture leads and stay
                                        top-of-mind with your audience. This can help move leads further down the
                                        sales funnel and increase your conversion rates.</li>

                                    <li>Offer upsells and cross-sells: Offer complementary products or services to
                                        your existing customers. This can increase the lifetime value of each
                                        customer and boost your revenue.</li>

                                    <li>Focus on customer retention: Focus on retaining your existing customers by
                                        providing excellent customer service and offering loyalty programs. This can
                                        lead to repeat business and increased revenue over time.</li>


                                </ol>
                                <p>By implementing these strategies, you can generate more high-quality leads,
                                    convert more customers, and increase your revenue.</p>

                            </div>
                            <div class="bottom_part">
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 box_shadow_area">
                        <div class="box_shadow_at">
                            <div class="top_part">
                                <h5 class="step_title">Step 05</h5>
                                <h4>Generate Business Opportunities</h4>
                                <p>To generate business opportunities with lead generation, consider the following:
                                </p>

                                <ol>
                                    <li>Identify your ideal customer: Define your target audience based on
                                        demographics, interests, behaviors, and needs. This will help you create
                                        content and offers that appeal to them.</li>

                                    <li>Use data and analytics: Use data and analytics to track user behavior and
                                        understand what motivates your target audience. This will help you create
                                        more effective marketing campaigns that resonate with your audience.</li>

                                    <li>Develop strategic partnerships: Develop partnerships with other businesses
                                        that share your target audience. This can help you reach a wider audience
                                        and generate more leads.</li>

                                    <li>Attend industry events: Attend industry events and conferences to network
                                        with potential customers and generate business opportunities. This can help
                                        you build relationships with key decision-makers in your industry.</li>

                                    <li>Offer valuable content: Provide valuable content that addresses the needs
                                        and pain points of your target audience. This can help position your
                                        business as a thought leader in your industry and attract more business
                                        opportunities.</li>

                                    <li>Leverage social media: Use social media platforms to connect with potential
                                        customers and generate business opportunities. This can include promoting
                                        your content, engaging with your followers, and using paid advertising to
                                        reach a wider audience.</li>
                                </ol>

                                <p>By implementing these strategies, you can generate more business opportunities,
                                    build relationships with potential customers, and grow your business.</p>

                            </div>
                            <div class="bottom_part">
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 box_shadow_area">
                        <div class="box_shadow_at">
                            <div class="top_part">
                                <h5 class="step_title">Step 06</h5>
                                <h4>Cost-Effective Customer Acquisition</h4>
                                <p>To achieve cost-effective customer acquisition with lead generation, consider the
                                    following:</p>

                                <ol>
                                    <li>Optimize your website for lead generation: Use landing pages, lead magnets,
                                        and call-to-actions to capture the contact information of your website
                                        visitors. This will allow you to nurture leads and convert them into paying
                                        customers.</li>

                                    <li>Use targeted marketing campaigns: Develop marketing campaigns that target
                                        your ideal customer based on demographics, interests, and behaviors. This
                                        will help you generate high-quality leads that are more likely to convert.
                                    </li>

                                    <li>Use social media advertising: Use social media advertising to target
                                        specific audiences and generate leads. This can be particularly effective on
                                        platforms like Facebook and LinkedIn, which allow you to target users based
                                        on a variety of factors.</li>

                                    <li>Use email marketing: Use email marketing to nurture leads and stay
                                        top-of-mind with your audience. This can help move leads further down the
                                        sales funnel and increase your conversion rates.</li>

                                    <li>Leverage customer referrals: Encourage your existing customers to refer
                                        their friends and family to your business. This can be an effective way to
                                        generate new leads at a low cost.</li>

                                    <li>Focus on customer retention: Focus on retaining your existing customers by
                                        providing excellent customer service and offering loyalty programs. This can
                                        lead to repeat business and increased revenue over time.</li>
                                </ol>

                                <p>By implementing these strategies, you can generate more high-quality leads and
                                    convert them into paying customers at a lower cost. This can help you achieve a
                                    better return on investment and grow your business more effectively.</p>



                            </div>
                            <div class="bottom_part">
                                <span class="read_more">Read more...</span>
                                {{-- <span>Step 02</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 box_shadow_area">
                        <div class="box_shadow_at">
                            <div class="top_part">
                                <h5 class="step_title">Step 07</h5>
                                <h4>Customer Insights</h4>
                                <p>To gain customer insights with lead generation, consider the following:</p>
                                <ol>

                                    <li>Use lead capture forms: Use lead capture forms on your website to collect
                                        data on your website visitors, such as their name, email, and interests.
                                        This can provide valuable information on who is visiting your website and
                                        what they are interested in.</li>

                                    <li>Track user behavior: Use analytics tools to track user behavior on your
                                        website, including which pages they visit, how long they stay, and what
                                        actions they take. This can provide insights into how your customers
                                        interact with your brand and what they are looking for.</li>

                                    <li>Conduct surveys: Conduct surveys to gather information directly from your
                                        customers. This can include questions about their preferences, needs, and
                                        pain points. This can provide valuable insights that can inform your
                                        marketing and product development efforts.</li>

                                    <li>Monitor social media: Monitor social media platforms for mentions of your
                                        brand and competitors. This can provide insights into what your customers
                                        are saying about your business and what they are interested in.</li>
                                    <li>Use customer feedback: Use customer feedback to gain insights into what is
                                        working and what can be improved in your business. This can include feedback
                                        from customer service interactions, online reviews, and customer surveys.
                                    </li>

                                </ol>
                                <p>By implementing these strategies, you can gain valuable customer insights that
                                    can inform your marketing and product development efforts. This can help you
                                    better understand your customers and provide them with a more personalized
                                    experience.</p>


                            </div>
                            <div class="bottom_part">
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 box_shadow_area">
                        <div class="box_shadow_at">
                            <div class="top_part">
                                <h5 class="step_title">Step 08</h5>
                                <h4>Helps Save Your Time</h4>
                                <p>To save time in your business with lead generation, consider the following:</p>

                                <ol>
                                    <li>Automate lead capture: Use lead capture forms and landing pages to automate
                                        the process of collecting contact information from website visitors. This
                                        can help you capture leads around the clock without requiring manual
                                        intervention.</li>

                                    <li>Use marketing automation: Use marketing automation tools to automate your
                                        email marketing campaigns, social media posts, and other marketing
                                        activities. This can save time and ensure that your marketing efforts are
                                        consistent and effective.</li>

                                    <li>Use lead scoring: Use lead scoring to prioritize your leads based on their
                                        level of engagement and potential value. This can help you focus your
                                        efforts on the leads that are most likely to convert.</li>

                                    <li>Use pre-written email templates: Use pre-written email templates to save
                                        time when responding to leads and follow up with them.</li>
                                    <li>Outsource lead generation: Consider outsourcing your lead generation efforts
                                        to a third-party provider. This can help you save time and ensure that your
                                        lead generation efforts are effective and efficient.</li>

                                    <li>Use data and analytics: Use data and analytics to track the effectiveness of
                                        your lead generation efforts and make data-driven decisions. This can help
                                        you save time by focusing your efforts on the activities that are most
                                        likely to generate results.</li>
                                </ol>

                                <p>By implementing these strategies, you can save time in your business and improve
                                    the efficiency of your lead generation efforts. This can help you focus on other
                                    important aspects of your business and achieve your goals more effectively.</p>

                            </div>
                            <div class="bottom_part">
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 box_shadow_area">
                        <div class="box_shadow_at">
                            <div class="top_part">
                                <h5 class="step_title">Step 09</h5>
                                <h4>Long-Term Customer Relationships</h4>
                                <p>To make long-term customer relationships through lead generation, consider the
                                    following:</p>

                                <ol>
                                    <li>Personalize your interactions: Use the information you gather through lead
                                        generation to personalize your interactions with customers. This can help
                                        you build rapport and establish a strong relationship with them.</li>

                                    <li>Nurture leads: Use email marketing and other lead nurturing techniques to
                                        stay top-of-mind with your leads and keep them engaged over time. This can
                                        help you build trust and establish a long-term relationship with them.</li>

                                    <li>Provide excellent customer service: Provide excellent customer service to
                                        your customers at all times. This can help you build a positive reputation
                                        and establish trust and loyalty with your customers.</li>

                                    <li>Use customer feedback: Use customer feedback to continuously improve your
                                        products and services. This can help you provide better value to your
                                        customers over time and establish a long-term relationship with them.</li>

                                    <li>Offer loyalty programs: Offer loyalty programs and other incentives to
                                        reward your customers for their loyalty. This can help you retain your
                                        existing customers and build long-term relationships with them.</li>

                                    <li>Keep in touch: Stay in touch with your customers even after the sale is
                                        complete. This can include sending follow-up emails, providing ongoing
                                        support, and offering special promotions or discounts.</li>
                                </ol>

                                <p>By implementing these strategies, you can build long-term customer relationships
                                    through lead generation. This can help you retain your existing customers,
                                    generate repeat business, and establish a positive reputation for your brand.
                                </p>

                            </div>
                            <div class="bottom_part">
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 box_shadow_area">
                        <div class="box_shadow_at">
                            <div class="top_part">
                                <h5 class="step_title">Step 10</h5>
                                <h4>Faster Sales Cycles</h4>

                                <p>To grow faster sales cycles through lead generation, consider the following:</p>
                                <ol>
                                    <li>Use targeted lead generation: Use targeted lead generation to focus your
                                        efforts on high-quality leads that are most likely to convert. This can help
                                        you shorten your sales cycle and improve your conversion rate.</li>

                                    <li>Provide valuable content: Provide valuable content that educates and informs
                                        your leads about your products or services. This can help you establish
                                        credibility and trust with your leads, which can shorten the sales cycle.
                                    </li>

                                    <li>Use lead nurturing techniques: Use lead nurturing techniques, such as email
                                        marketing and targeted advertising, to keep your leads engaged and move them
                                        through the sales cycle. This can help you build trust and establish a
                                        relationship with your leads, which can shorten the sales cycle.</li>

                                    <li>Use social proof: Use social proof, such as customer reviews and
                                        testimonials, to demonstrate the value and effectiveness of your products or
                                        services. This can help you establish trust with your leads and shorten the
                                        sales cycle.</li>

                                    <li>Offer incentives: Offer incentives, such as discounts or free trials, to
                                        encourage your leads to take action and move through the sales cycle more
                                        quickly. This can help you accelerate the sales cycle and improve your
                                        conversion rate.</li>

                                    <li>Use data and analytics: Use data and analytics to track your sales cycle and
                                        identify areas for improvement. This can help you make data-driven decisions
                                        and optimize your lead generation and sales processes over time.</li>
                                </ol>

                                <p>By implementing these strategies, you can shorten your sales cycle and accelerate
                                    your revenue growth through lead generation.</p>


                            </div>
                            <div class="bottom_part">
                                <span class="read_more">Read more...</span>
                                {{-- <span>Step 02</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-1 thank_you_aria mt-4">
            <div class="container">
                <div class="row align-items-center justify-content-center py-5">
                    <div class="col-sm-12 col-md-5 text-white py-5">
                        <h2 class="text-center thanks">Thank you !</h2>
                        <p class="text-center">We are very happy for your valuable time to visiting this page. Hope you like the samples Leads here. Let us know your needs at Upwork, we are always at your service.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-white text-center">&copy; Copyright {{date('Y')}}. Development By <a href="{{url('/')}}" style="color:#1dbf73;">Dimarz.com</a></p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <Articles Section> Start ============================-->
        {{-- <section class="py-5 bg_white" id="article_area">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h2 class="super_title">10 Benefits of Lead Generation that Drive Success</h2>
                            <p>Lead generation plays a vital role in the success of a business's online presence,
                                particularly in terms of search engine optimization (SEO). One of the key benefits of
                                lead generation in SEO is that it helps businesses attract high-quality leads from their
                                target audience. By using relevant keywords, creating engaging content, and utilizing
                                other SEO strategies, businesses can improve their visibility in search engine results
                                pages and attract visitors who are interested in their products or services. This not
                                only helps increase website traffic, but also drives qualified leads to a company's
                                website.</p>

                            <p>Another benefit of lead generation for SEO is that it helps businesses establish thought
                                leadership and credibility in their industry. By creating and sharing high-quality
                                content that provides value to their audience, businesses can position themselves as
                                experts in their field, which can attract more leads and increase brand awareness.
                                Additionally, lead generation helps businesses build relationships with their audience,
                                which can result in repeat visitors and increased customer loyalty.</p>

                            <p>Overall, lead generation is a crucial component of SEO because it helps businesses
                                attract and convert visitors into customers, build relationships, and establish
                                themselves as experts in their industry. This can result in higher search engine
                                rankings, increased website traffic, and improved business success.</p>

                        </div>
                        <div class="col-sm-12 col-md-12">

                            <div class="single_samary">
                                <div class="d-flex align-items-center py-3">
                                    <img src="{{asset('assets/frontend/img/upwork/article_title_1.png')}}" alt="">
        <h4><span>01.</span>Targeted Marketing:</h4>
        </div>
        <p>Targeted marketing refers to the practice of delivering personalized and relevant
            marketing messages to a specific group of potential customers based on their
            characteristics, behaviors, and preferences. This approach has become increasingly
            popular with the growth of digital marketing and the availability of big data.</p>

        <p>One of the key benefits of targeted marketing in lead generation is the ability to
            reach the right people with the right message at the right time. By using
            demographic, psychographic, and behavioral data, businesses can identify their ideal
            customers and tailor their marketing messages to meet their specific needs and
            interests. This can result in higher engagement and conversion rates, as well as
            more qualified leads.</p>

        <p>Another benefit is increased efficiency and cost-effectiveness. Instead of spending
            resources on broad, generic marketing campaigns that may not reach the right
            audience, targeted marketing allows businesses to focus their efforts on those most
            likely to be interested in their products or services. This can lead to a more
            efficient use of marketing budget and a higher return on investment.</p>

        <p>Targeted marketing also helps to build stronger relationships with customers. By
            delivering personalized and relevant messages, businesses can establish a stronger
            connection with their target audience and foster a sense of trust and loyalty. This
            can lead to repeat business and positive word-of-mouth recommendations, which can
            have a significant impact on the success of a business.</p>

        <p>In conclusion, targeted marketing has numerous benefits for lead generation. By
            delivering personalized and relevant marketing messages, businesses can reach the
            right people with the right message, increase efficiency and cost-effectiveness, and
            build stronger relationships with customers. All of these benefits can have a
            significant impact on the success of a business in terms of generating leads and
            ultimately, driving sales.</p>
        </div>

        <div class="single_samary">
            <div class="d-flex align-items-center py-3">
                <img src="{{asset('assets/frontend/img/upwork/article_title_2.png')}}" alt="">
                <h4><span>02.</span>Grow Your Following:</h4>
            </div>
            <p>Grow Your Following is a strategy that involves increasing the number of people who
                follow or subscribe to a business's online presence, such as its website, social
                media accounts, or email list. This is an important benefit in lead generation
                because having a large and engaged following can help to drive traffic, increase
                brand awareness, and generate leads.</p>

            <p>One of the key benefits of growing your following is the ability to reach a wider
                audience. By having a larger number of followers, businesses can expand their reach
                and attract new potential customers. This can be particularly effective for
                businesses that offer niche products or services, as it allows them to connect with
                individuals who are interested in their specific offerings.</p>

            <p>Another benefit of growing your following is the ability to establish thought
                leadership and credibility. Having a large and engaged following can demonstrate to
                potential customers that a business is respected and authoritative in its industry.
                This can help to build trust and establish the business as a credible source of
                information, which can lead to increased conversions and sales.</p>

            <p>In addition, growing your following can also help to increase brand awareness and
                visibility. By having a larger presence on social media and other online platforms,
                businesses can increase their visibility and reach a wider audience. This can help
                to increase brand recognition and build a strong brand identity, which can have a
                positive impact on lead generation and overall business success.</p>

            <p>Finally, growing your following can also help to generate leads through increased
                engagement and interaction. By engaging with followers and creating a sense of
                community, businesses can encourage people to share their products or services with
                others, which can lead to increased referrals and word-of-mouth marketing.</p>

            <p>In conclusion, growing your following is an important benefit in lead generation. By
                increasing the number of followers and subscribers, businesses can reach a wider
                audience, establish thought leadership and credibility, increase brand awareness and
                visibility, and generate leads through increased engagement and interaction. All of
                these benefits can contribute to the overall success of a business in terms of
                generating leads and driving sales.</p>

        </div>

        <div class="single_samary">
            <div class="d-flex align-items-center py-3">
                <img src="{{asset('assets/frontend/img/upwork/article_title_3.png')}}" alt="">
                <h4><span>03.</span>Gather More Customer Reviews:</h4>
            </div>
            <p>Gathering more customer reviews is a strategy that involves encouraging customers to
                provide feedback and testimonials about a business's products or services. This is a
                crucial benefit in lead generation because customer reviews can play a significant
                role in attracting new potential customers and building trust in a business.</p>

            <p>One of the key benefits of gathering more customer reviews is the ability to increase
                credibility and establish trust. Positive customer reviews can provide social proof
                that a business offers high-quality products or services, which can be a powerful
                influence on the buying decisions of potential customers. Additionally, negative
                reviews can help a business identify areas for improvement, which can increase
                customer satisfaction and lead to better reviews in the future.</p>

            <p>Another benefit of gathering more customer reviews is the ability to improve search
                engine optimization (SEO). Online reviews can improve a business's search engine
                ranking by providing valuable content that can be indexed by search engines. This
                can help to increase visibility and drive more traffic to a business's website,
                which can lead to more leads and conversions.</p>

            <p>In addition, customer reviews can also provide valuable insights into customer needs
                and preferences. By analyzing customer feedback, businesses can gain a better
                understanding of what their customers like and dislike about their products or
                services, which can help them to improve their offerings and better meet customer
                needs.</p>

            <p>Finally, gathering more customer reviews can also help to build brand loyalty and
                increase repeat business. By providing a platform for customers to express their
                satisfaction or dissatisfaction with a business, customer reviews can foster a sense
                of community and encourage customers to return for future purchases.</p>

            <p>In conclusion, gathering more customer reviews is a crucial benefit in lead
                generation. By increasing credibility and trust, improving SEO, providing valuable
                insights, and building brand loyalty, customer reviews can play a significant role
                in attracting new potential customers and driving sales for a business.</p>

        </div>
        <div class="single_samary">
            <div class="d-flex align-items-center py-3">
                <img src="{{asset('assets/frontend/img/upwork/article_title_4.png')}}" alt="">
                <h4><span>04.</span>Boost Your Revenue:</h4>
            </div>

            <p>Boosting your revenue is the ultimate goal of lead generation and a key benefit of
                effective lead generation strategies. By generating a steady stream of qualified
                leads, businesses can increase their customer base, drive sales, and ultimately,
                boost their revenue.</p>

            <p>One of the key benefits of boosting your revenue through lead generation is the
                ability to increase market share and gain a competitive edge. By attracting more
                customers and generating more sales, businesses can expand their market share and
                establish a strong presence in their industry. This can help to differentiate them
                from their competitors and give them a competitive advantage.</p>

            <p>Another benefit of boosting your revenue is the ability to improve the bottom line
                and increase profitability. By attracting more customers and increasing sales,
                businesses can improve their financial performance and achieve better results. This
                can help to ensure long-term success and stability for the business.</p>

            <p>In addition, boosting your revenue can also help to provide a foundation for growth
                and expansion. By increasing sales and improving profitability, businesses can have
                the resources and financial stability to invest in new products, services, or
                markets, which can help to drive future growth.</p>

            <p>Finally, boosting your revenue can also help to establish a strong brand and
                reputation. By delivering high-quality products or services and generating positive
                customer reviews, businesses can establish a strong brand and reputation, which can
                attract new customers and drive future sales.</p>

            <p>In conclusion, boosting your revenue is a key benefit of lead generation. By
                attracting more customers, increasing sales, and improving profitability, businesses
                can achieve better results, drive growth and expansion, and establish a strong brand
                and reputation. These benefits can all contribute to the long-term success and
                stability of a business.</p>

        </div>

        <div class="single_samary">
            <div class="d-flex align-items-center py-3">
                <img src="{{asset('assets/frontend/img/upwork/article_title_5.png')}}" alt="">
                <h4><span>05.</span>Generate Business Opportunities:</h4>
            </div>
            <p>Generating business opportunities is a crucial benefit of lead generation that can
                help businesses to find new prospects and create new sales opportunities. By
                identifying and targeting potential customers who are likely to be interested in
                their products or services, businesses can increase their chances of generating new
                sales and growing their customer base.</p>

            <p>One of the key benefits of generating business opportunities through lead generation
                is the ability to reach new markets and expand into new areas. By targeting new
                customers and attracting new prospects, businesses can explore new markets and find
                new opportunities for growth and expansion. This can help to diversify their
                customer base and reduce the risk associated with relying on a single market or
                customer group.</p>

            <p>Another benefit of generating business opportunities is the ability to increase sales
                and revenue. By attracting new prospects and creating new sales opportunities,
                businesses can increase their sales and improve their financial performance. This
                can help to ensure the long-term success and stability of the business.</p>

            <p>In addition, generating business opportunities can also help to build brand awareness
                and establish a strong reputation. By reaching new customers and generating new
                sales, businesses can raise their profile and establish a strong presence in their
                industry. This can help to create a positive reputation and build brand recognition,
                which can be a powerful influence on the buying decisions of potential customers.
            </p>

            <p>Finally, generating business opportunities can also help to create a more efficient
                sales process. By identifying and targeting potential customers who are more likely
                to be interested in their products or services, businesses can save time and
                resources that would otherwise be wasted on ineffective sales and marketing efforts.
            </p>

            <p>In conclusion, generating business opportunities is a crucial benefit of lead
                generation. By reaching new markets, increasing sales and revenue, building brand
                awareness, and creating a more efficient sales process, businesses can find new
                prospects, create new sales opportunities, and drive growth and success.</p>

        </div>
        <div class="single_samary">
            <div class="d-flex align-items-center py-3">
                <img src="{{asset('assets/frontend/img/upwork/article_title_6.png')}}" alt="">
                <h4><span>06.</span>Cost-Effective Customer Acquisition:</h4>
            </div>
            <p>Cost-effective customer acquisition is a critical benefit of lead generation, as it
                can help businesses to reach new customers and expand their customer base without
                incurring high costs. By utilizing targeted and effective lead generation
                strategies, businesses can attract new prospects and convert them into paying
                customers at a lower cost than traditional marketing methods.</p>

            <p>One of the key benefits of cost-effective customer acquisition is the ability to
                maximize return on investment (ROI). By spending less money on customer acquisition,
                businesses can achieve a higher ROI and get more value from their marketing efforts.
                This can help to improve their financial performance and ensure the long-term
                success of the business.</p>

            <p>Another benefit of cost-effective customer acquisition is the ability to reach more
                customers with limited resources. By using lead generation methods that are
                cost-effective, businesses can reach more customers without having to invest large
                amounts of money in marketing efforts. This can help to ensure that they are able to
                reach their target audience without having to sacrifice other important aspects of
                their business.</p>

            <p>In addition, cost-effective customer acquisition can also help to increase customer
                loyalty and reduce customer churn. By delivering high-quality products or services
                at a lower cost, businesses can attract new customers and retain existing ones. This
                can help to ensure that they are able to build a strong and loyal customer base,
                which is critical for long-term success.</p>

            <p>Finally, cost-effective customer acquisition can also help to improve the overall
                efficiency of the sales process. By reducing the cost of customer acquisition,
                businesses can invest more time and resources into other important aspects of the
                sales process, such as nurturing and converting leads.</p>

            <p>In conclusion, cost-effective customer acquisition is a critical benefit of lead
                generation. By reducing the cost of customer acquisition, maximizing return on
                investment, reaching more customers with limited resources, increasing customer
                loyalty, and improving the overall efficiency of the sales process, businesses can
                attract new customers, grow their customer base, and drive long-term success.</p>

        </div>
        <div class="single_samary">
            <div class="d-flex align-items-center py-3">
                <img src="{{asset('assets/frontend/img/upwork/article_title_7.png')}}" alt="">
                <h4><span>07.</span>Customer Insights:</h4>
            </div>
            <p>Gaining customer insights is a valuable benefit of lead generation as it provides
                businesses with a deeper understanding of their target audience and their customers.
                By collecting and analyzing data on their prospects and customers, businesses can
                gain insights into their behavior, preferences, and needs, which can help them to
                make informed decisions about their marketing and sales strategies.</p>

            <p>One of the key benefits of customer insights is the ability to improve target
                audience segmentation. By gaining a better understanding of their target audience,
                businesses can segment their market more effectively, which can help them to target
                their marketing efforts more precisely and reach the right people with the right
                message. This can improve the overall effectiveness of their marketing efforts and
                lead to higher conversion rates.</p>

            <p>Another benefit of customer insights is the ability to tailor products and services
                to meet the needs of their customers. By understanding the preferences and needs of
                their customers, businesses can tailor their offerings to better meet their needs,
                which can improve customer satisfaction and loyalty.</p>

            <p>In addition, customer insights can also help to improve the overall customer
                experience. By gaining a deeper understanding of their customers' behavior and
                preferences, businesses can create a more personalized and tailored customer
                experience, which can improve customer satisfaction and lead to higher customer
                retention rates.</p>

            <p>Finally, customer insights can also help to inform product development and
                innovation. By understanding the needs and preferences of their customers,
                businesses can create new products and services that are aligned with their
                customers' needs, which can help to drive growth and success.</p>

            <p>In conclusion, gaining customer insights is a valuable benefit of lead generation. By
                providing businesses with a deeper understanding of their target audience and
                customers, it can help them to improve target audience segmentation, tailor products
                and services, improve the customer experience, and inform product development and
                innovation. This can help businesses to drive growth, improve customer satisfaction,
                and achieve long-term success.</p>

        </div>
        <div class="single_samary">
            <div class="d-flex align-items-center py-3">
                <img src="{{asset('assets/frontend/img/upwork/article_title_8.png')}}" alt="">
                <h4><span>08.</span>Helps Save Your Time:</h4>
            </div>
            <p>Saving time is a key benefit of lead generation for businesses, as it allows them to
                focus on their core activities and achieve more in less time. Lead generation can
                help businesses to streamline their sales and marketing processes, and reduce the
                time and effort required to find, engage, and convert new customers.</p>

            <p>One of the main ways lead generation helps to save time is by automating many of the
                manual and time-consuming tasks involved in the sales and marketing processes. For
                example, lead generation software can automate the process of lead qualification and
                scoring, freeing up valuable time for businesses to focus on other important
                activities.</p>

            <p>Another way lead generation saves time is by providing businesses with a centralized
                database of leads, which makes it easier to manage, track, and analyze lead data.
                This can help businesses to quickly identify high-quality leads, prioritize their
                outreach efforts, and improve the efficiency of their sales and marketing processes.
            </p>

            <p>Lead generation also helps businesses to save time by providing them with valuable
                insights and data on their target audience and customers. This data can help
                businesses to better understand the preferences, needs, and behavior of their target
                audience, allowing them to make informed decisions about their sales and marketing
                strategies, and reduce the time and effort required to reach and convert new
                customers.</p>

            <p>In conclusion, lead generation can help businesses to save time by automating manual
                and time-consuming tasks, providing a centralized database of leads, and providing
                valuable customer insights and data. By streamlining their sales and marketing
                processes, businesses can focus on their core activities, achieve more in less time,
                and drive growth and success.</p>

        </div>
        <div class="single_samary">
            <div class="d-flex align-items-center py-3">
                <img src="{{asset('assets/frontend/img/upwork/article_title_9.png')}}" alt="">
                <h4><span>09.</span>Long-Term Customer Relationships:</h4>
            </div>
            <p>Establishing long-term customer relationships is a critical benefit of lead
                generation, as it allows businesses to build strong and lasting relationships with
                their customers, which is crucial for long-term success. Lead generation can help
                businesses to reach and engage with new customers, and establish the foundation for
                long-term, mutually beneficial relationships.</p>

            <p>One of the key benefits of long-term customer relationships is the ability to improve
                customer loyalty and reduce customer churn. By building strong and lasting
                relationships with their customers, businesses can establish a sense of trust and
                credibility, which can help to improve customer loyalty and reduce customer churn.
            </p>

            <p>Another benefit of long-term customer relationships is the ability to increase
                customer lifetime value. By establishing lasting relationships with their customers,
                businesses can create loyal customers who are more likely to make repeat purchases,
                refer new customers, and provide positive reviews, which can help to increase
                customer lifetime value and drive long-term growth and success.</p>

            <p>Lead generation also helps businesses to establish long-term customer relationships
                by providing valuable insights and data on their target audience and customers. This
                data can help businesses to better understand the preferences, needs, and behavior
                of their target audience, and tailor their sales and marketing efforts accordingly,
                which can improve the customer experience and lead to stronger, more lasting
                relationships.</p>

            <p>In conclusion, establishing long-term customer relationships is a key benefit of lead
                generation. By improving customer loyalty, increasing customer lifetime value, and
                providing valuable customer insights and data, businesses can build strong and
                lasting relationships with their customers, drive growth and success, and achieve
                long-term success.</p>
        </div>
        <div class="single_samary">
            <div class="d-flex align-items-center py-3">
                <img src="{{asset('assets/frontend/img/upwork/article_title_10.png')}}" alt="">
                <h4><span>10.</span>Faster Sales Cycles:</h4>
            </div>
            <p>Faster sales cycles is a significant benefit of lead generation for businesses, as it
                allows them to close deals faster and increase their revenue. Lead generation helps
                to speed up sales cycles by streamlining the process of identifying and engaging
                with high-quality leads, which is crucial for closing deals quickly and effectively.
            </p>

            <p>One of the main ways lead generation helps to speed up sales cycles is by automating
                the lead qualification and scoring process. Lead generation software can quickly
                identify high-quality leads based on predefined criteria, allowing businesses to
                prioritize their outreach efforts and engage with the most promising leads first.
            </p>

            <p>Another way lead generation speeds up sales cycles is by providing businesses with
                valuable insights and data on their target audience and customers. This data can
                help businesses to better understand the preferences, needs, and behavior of their
                target audience, allowing them to tailor their sales and marketing efforts
                accordingly and improve the customer experience.</p>

            <p>Lead generation also helps businesses to speed up sales cycles by providing a
                centralized database of leads, which makes it easier to manage, track, and analyze
                lead data. This can help businesses to identify trends and patterns in their lead
                data, and make informed decisions about their sales and marketing strategies, which
                can help to improve the efficiency of their sales and marketing processes.</p>

            <p>In conclusion, faster sales cycles is a key benefit of lead generation for
                businesses. By automating lead qualification and scoring, providing valuable
                customer insights and data, and streamlining their sales and marketing processes,
                businesses can close deals faster, increase their revenue, and achieve long-term
                success.</p>

        </div>

        </div>
        <div class="col-sm-12 col-md-12"></div>
        </div>
        </div>
        </section> --}}
        <!-- <Articles Section> End ============================-->
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
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
    <script src="{{asset('assets/frontend')}}/js/upwork/popper.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/upwork/is.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/upwork/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/upwork/theme.js"></script>
    <script src="{{asset('assets/frontend/js/sweetalert2.all.js')}}"></script>

    <script>
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
                }, 4000 * i);
            }
            setTimeout(changeColor, 12000);
        }

        $(document).ready(function () {
            changeColor();
        });

        // $("#message_show_box").elasticHeight();

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
        function searchbyinputs() {
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
                    console.log(data.htmldata);
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



        // =============[ Slider Articles - End ]========
        $('.suggestion_input').on('keyup', function () {
            let suggestion_input = $('.suggestion_input').val();
            if (suggestion_input.length > 2) {
                if ($('.suggestion_ul').hasClass('d-none')) {
                    $('.suggestion_ul').removeClass('d-none');
                }
            } else {
                $('.suggestion_ul').addClass('d-none');
            }

            $.ajax({
                url: "{{route('search.marketplace.selectsearch')}}",
                method: "POST",
                data: {
                    // 'newinput': $(this).text(),
                    'newinput': suggestion_input,
                },
                success: function (data) {
                    $('#searchable_data').html(data
                        .leadresult);
                },
            });

            $.ajax({
                url: "{{route('search.marketplace.randomsearch')}}",
                method: "POST",
                data: {
                    'input': suggestion_input,
                },
                success: function (data) {
                    $('.suggestion_ul').html(data.result);
                    $('.suggestion_ul li').click(function () {
                        $('.suggestion_ul').addClass('d-none');
                        $('.suggestion_input').val($(this).text());
                        $.ajax({
                            url: "{{route('search.marketplace.selectsearch')}}",
                            method: "POST",
                            data: {
                                'newinput': $(this).text(),
                            },
                            success: function (data) {
                                $('#searchable_data').html(data
                                    .leadresult);
                            },
                        });
                    });
                },
            });
        });

    </script>
</body>

</html>
