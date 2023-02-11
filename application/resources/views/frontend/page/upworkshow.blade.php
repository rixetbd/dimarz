<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
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
                            <h5 class="py-2" style="color: #1dbf73;">What does the buyer need?</h5>
                            <div class="accordion accordion-flush" id="accordionFlushFAQ">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="FAQflush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapseOne"
                                            aria-expanded="false" aria-controls="FAQflush-collapseOne">
                                            <i class="far fa-star star_css"></i> What Type Of Service Do You Provide?
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapseTwo"
                                            aria-expanded="false" aria-controls="FAQflush-collapseTwo">
                                            <i class="far fa-star star_css"></i> What is Your Pricing Model?
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapseThree"
                                            aria-expanded="false" aria-controls="FAQflush-collapseThree">
                                            <i class="far fa-star star_css"></i> Can I Customize Your Package?
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapse4"
                                            aria-expanded="false" aria-controls="FAQflush-collapse4">
                                            <i class="far fa-star star_css"></i> How do you prefer to communicate?
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapse5"
                                            aria-expanded="false" aria-controls="FAQflush-collapse5">
                                            <i class="far fa-star star_css"></i> Do You Offer Free Consultation?
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#FAQflush-collapse6"
                                            aria-expanded="false" aria-controls="FAQflush-collapse6">
                                            <i class="far fa-star star_css"></i> Will you provide a detailed report ?
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

                        <div class="col-md-7 col-lg-7 mt-5 text-center text-md-start" style="padding-right: 100px;">
                            <h1 class="header_font_01">
                                Find the perfect freelance <br /> for your business
                            </h1>
                            {{-- <a class="btn btn-lg btn-upwork btn-glow" href="#">Get Started </a> --}}
                            {{-- <form action="">
                                <div class="search_area">
                                    <input type="text" class="form-control" placeholder="Search for leads...">
                                    <button type="submit">Search</button>
                                    <span class="search_icon"><i class="fas fa-search"></i></span>
                                </div>
                            </form> --}}
                            <div class="d-flex py-2 search_area_badge">
                                <div class="pe-2 text-white" style="width: 100px;">Popular : </div>
                                <div>
                                    <span>Web Research</span>
                                    <span>B2B Leads</span>
                                    <span>B2C Leads</span>
                                    <span>E-Commerce</span>
                                    <span>Law Firm</span>
                                </div>
                            </div>
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

            <section style="padding-top: 3rem;" class="table_section">
                <div class="container">
                    <div class="row py-4">
                        <div class="col-12">
                            <h2 class="table_section_title">A Title Will Be Placed Here.</h2>
                        </div>
                        <div class="col-sm-12 col-md-3 pe-2">
                            <div class="ui fluid search selection dropdown" id="country_Name">
                                <input type="hidden" name="country">
                                <i class="dropdown icon"></i>
                                <div class="default text">Select Country</div>
                                <div class="menu">
                                    <div class="item" data-value="cs"><i class="cs flag"></i>Canada</div>
                                    <div class="item" data-value="us"><i class="us flag"></i>United States</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 px-2">
                            <select class="ui fluid search dropdown" id="industry_Name">
                                <option value="">Industry</option>
                                <option value="AL">Construction</option>
                                <option value="AK">E-commerce</option>
                                <option value="WI">Tech</option>
                                <option value="WY">Shop</option>
                                <option value="WY">Auto Services</option>
                                <option value="WY">Restaurant</option>
                                <option value="WY">Healthcare</option>
                                <option value="WY">Beauty & Product</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3 px-2">
                            <select class="ui fluid search dropdown" id="niche_Name">
                                <option value="">Niche</option>
                                <option value="AL">Real Estate</option>
                                <option value="AL">Roofing</option>
                                <option value="AL">Plumbing</option>
                                <option value="AL">HVAC</option>
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
                                        <th title="Revinue">Revinue</th>
                                        <th title="Company Size">Company Size</th>
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
                                <tbody>
                                    <tr>
                                        <td>Atelier AM Inc</td>
                                        <td>https://www.atelieram.com/</td>
                                        <td>7956 W 3rd St, Los Angeles, CA 90048</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Alexandra</td>
                                        <td>Misczynski</td>
                                        <td>CEO</td>
                                        <td>alexandra@atelieram.com</td>
                                        <td>info@atelieram.com</td>
                                        <td>310 245-4281</td>
                                        <td>323-951-0500</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/atelier_am_inc/?hl=en</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>MI Design, Inc.</td>
                                        <td>http://midesigncorp.com/</td>
                                        <td>15445 VENTURA BLVD. SUITE 367 SHERMAN OAKS, CA 91403</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Lamia</td>
                                        <td>Maalouf</td>
                                        <td>Owner</td>
                                        <td>lamia@midesigncorp.com</td>
                                        <td>info@midesigncorp.com</td>
                                        <td>818-766-2376</td>
                                        <td>818-766-2376</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/midesigncorp/?hl=en</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>DESIGN SYNDICATE</td>
                                        <td>http://designsyndicate.us/</td>
                                        <td>315 W 9th St., Suite 302, Los Angeles, CA 90015</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Melissa</td>
                                        <td>Salamoff</td>
                                        <td>Founder</td>
                                        <td>melissa@designsyndicate.us</td>
                                        <td>admin@designsyndicate.us</td>
                                        <td>818 954-8203</td>
                                        <td>213 395-0066</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/wearedesignsyndicate/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Antoinette Allande Interiors</td>
                                        <td>https://www.antoinetteallandeinteriors.com/los-angeles</td>
                                        <td>East Coast Studio Address: 634 Park Ave, Apt. 3 Hoboken, NJ 07030</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Antoinette</td>
                                        <td>Allande</td>
                                        <td>Owner</td>
                                        <td>aa@antoinetteallandeinteriors.com</td>
                                        <td>aa@antoinetteallandeinteriors.com</td>
                                        <td>201-920-3943</td>
                                        <td>201-920-3943</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/antoinetteallandeinteriors/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Preen, Inc.</td>
                                        <td>https://www.preeninc.com/</td>
                                        <td>931 CHUNG KING ROAD, LOS ANGELES, CA</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Alexis</td>
                                        <td>Readinger</td>
                                        <td>Founder</td>
                                        <td>alexis@preeninc.com</td>
                                        <td>INFO@PREENINC.COM</td>
                                        <td>323 336-1866</td>
                                        <td>213-625-2100</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/preeninc/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Imagine CM Design Studio</td>
                                        <td>http://candaceallen.com/</td>
                                        <td>17011 Beach Blvd #900 , Huntington Beach, CA</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Candace</td>
                                        <td>Allen</td>
                                        <td>Owner</td>
                                        <td>allecandace@gmail.com</td>
                                        <td>Imaginecmdesigns@gmail.com</td>
                                        <td>310-945-6128</td>
                                        <td>310-945-6128</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/candypants1111/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Studio Blu Inc.</td>
                                        <td>https://www.studiobluinc.com/</td>
                                        <td>14021 Marquesas Way #216C, Marina Del Rey, CA 90292</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Adrienne</td>
                                        <td>Mascaro</td>
                                        <td>CEO</td>
                                        <td>amascaro@studiobluinc.com</td>
                                        <td>amascaro@studiobluinc.com</td>
                                        <td>310-823-1720</td>
                                        <td>310-823-1720</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/studiobluinc/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Arroyo Interior Design LLC</td>
                                        <td>https://www.arroyo-id.com/</td>
                                        <td>7417 SE Maple Avenue Vancouver, WA 98664</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Amy</td>
                                        <td>Arroyo</td>
                                        <td>Owner</td>
                                        <td>amy@arroyodesignllc.com</td>
                                        <td>amy@arroyodesignllc.com</td>
                                        <td>213-200-5955</td>
                                        <td>206-909-7765</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/arroyodesignco/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Nickey Â· Kehoe</td>
                                        <td>http://nickeykehoe.com/</td>
                                        <td>7266 Beverly Blvd, Los Angeles, CA</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Amy</td>
                                        <td>Kehoe</td>
                                        <td>Partner</td>
                                        <td>amy@nickeykehoe.com</td>
                                        <td>info@nickeykehoe.com</td>
                                        <td>323-954-9300</td>
                                        <td>323-954-9300</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/nickeykehoe/?hl=en</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Annette English + Associates</td>
                                        <td>http://annetteenglish.com/</td>
                                        <td>6230 Wilshire Blvd. Suite 1775 Los Angeles, CA 90048</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Andrea</td>
                                        <td>Popkin</td>
                                        <td>Partner</td>
                                        <td>andrea@annetteenglish.com</td>
                                        <td>info@annetteenglish.com</td>
                                        <td>323-556-3377</td>
                                        <td>323-556-3377</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/aea_interiors/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Avenue Interior Design</td>
                                        <td>http://www.avenueid.com/</td>
                                        <td>833 S. Spring St., Suite 300 Los Angeles, CA 90014</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Andrea</td>
                                        <td>DeRosa</td>
                                        <td>Owner</td>
                                        <td>andrea@avenueid.com</td>
                                        <td>info@avenueid.com</td>
                                        <td>310-401-8116</td>
                                        <td>310-401-8116</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/avenue.id/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>JAC INTERIORS</td>
                                        <td>https://www.jacinteriors.com/</td>
                                        <td>10401 Venice Blvd Suite 257 Los Angeles, CA 90034</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Andrea</td>
                                        <td>Putman</td>
                                        <td>Co-Founder</td>
                                        <td>andrea@jacinteriors.com</td>
                                        <td>info@jacinteriors.com</td>
                                        <td>213-510-1834</td>
                                        <td>213-401-7593</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/jacinteriors/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Anna Design</td>
                                        <td>https://annadesignla.com/</td>
                                        <td>145 S Fairfax Ave Suite 200, Los Angeles, CA,</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Anna</td>
                                        <td>Vasiltsova</td>
                                        <td>CEO</td>
                                        <td>anna@annadesignla.com</td>
                                        <td>contact@annadesignla.com</td>
                                        <td>424-333-6130</td>
                                        <td>310-994-5256â€¬</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/annadesignla/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Ashleigh Underwood Home &amp; Interior Design</td>
                                        <td>https://www.ashleighunderwooddesign.com/</td>
                                        <td>1800 CENTURY PARK EAST, STE 600, LOS ANGELES, CA 90067</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>Nancy</td>
                                        <td>Sardella</td>
                                        <td>Owner</td>
                                        <td>ashleigh@ashleighunderwooddesign.com</td>
                                        <td>ashleigh@ashleighunderwooddesign.com</td>
                                        <td>310-734-8255</td>
                                        <td>310-734-8255</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/ashleigh_underwood_design/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
                                    <tr>
                                        <td>Wolcott Architecture</td>
                                        <td>http://www.wolcottai.com/</td>
                                        <td>1708 N. Alexandria Ave Los Angeles, CA 90027</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>A.J.</td>
                                        <td>Wilder</td>
                                        <td>President</td>
                                        <td>awilder@wolcottai.com</td>
                                        <td>info@wolcottai.com</td>
                                        <td>310-204-2290</td>
                                        <td>310-204-2290</td>
                                        <td>X</td>
                                        <td>https://www.instagram.com/wolcottarchitecture/</td>
                                        <td>X</td>
                                        <td>X </td>
                                    </tr>
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
                            <p class="text-white step_btn_three"><span>1.</span> Fill the input field below as per your
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

                        <div class="col-sm-12 col-md-6 pt-3 pb-0 write_cover_text text-white" style=";">
                            I am looking for <input type="number" id="gen_custom_quantity"
                                class="form-control border_bottom width_150" placeholder="Fill Quantity" required>
                            leads with the following specific criteria.

                            <br />
                            <h5 class="pt-3 text-white">Criteria:</h5>
                            <div class="d-flex py-3">
                                <span style="min-width:100px;">Location : </span>
                                <input type="text" id="gen_custom_location" class="form-control border_bottom"
                                    placeholder="Example: USA" style="width: -webkit-fill-available;" required>
                            </div>
                            <div class="d-flex py-3">
                                <span style="min-width:100px;">Industry : </span>
                                <input type="text" id="gen_custom_industry" class="form-control border_bottom"
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
                                        I am looking for <span style="color: #48f9a6;" id="Iamlookingforleads"></span> leads with the following specific criteria.
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
                                            <div id="pre_condition">Describe your leads conditions...</div>
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
                                        <p id="additional_info">Your Additional Information Will Be Placed Here... ( Type Sometings now )</p>
                                    </div>

                                </div>
                                <div class="col-12 pb-4">
                                    <p class="pt-1 mt-0" style="color: #48f9a6">* Starting/Delivery Time and Rate of the project will be fixed after dissuasion.</p>
                                    <button id="copy_text_r_upwork"
                                        class="py-2 btn btn-upwork float-end">Copy</button>
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
                    }, 3000 * i);
                }
                setTimeout(changeColor, 9000);
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

                var pre_listData = preview_fname+preview_lname+preview_email+preview_cname+
                                    preview_cemail+preview_cphone+preview_website+preview_address+
                                    preview_revenue+preview_numof_em+preview_src_link;
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
    </body>

</html>
