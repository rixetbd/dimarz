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
                                style="color: #fff;">DiMarz</span></span></a><button class="navbar-toggler collapsed"
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
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pb-6" style="background-color:#1b1a1d;" id="top_header">
                <div class="container">
                    <div class="row flex-center">
                        <div class="col-lg-5 col-md-5 order-md-1 header_leftside" style="">
                            {{-- <img class="img-fluid" src="{{asset('assets/frontend/img/upwork/header-vector.png')}}"
                            alt="" /> --}}
                            <div class="typing_text_box">
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
                            </div>
                        </div>

                        <div class="col-md-7 col-lg-7 mt-5 text-center text-md-start" style="padding-right: 100px;">
                            <h1 class="header_font_01">
                                Find the perfect freelance <br /> for your business
                            </h1>
                            {{-- <a class="btn btn-lg btn-upwork btn-glow" href="#">Get Started </a> --}}
                            <form action="">
                                <div class="search_area">
                                    <input type="text" class="form-control" placeholder="Search for leads...">
                                    <button type="submit">Search</button>
                                    <span class="search_icon"><i class="fas fa-search"></i></span>
                                </div>
                            </form>
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
            <section class="py-0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h3>Let's Make A Cover Leter As Per Your Needs</h3>
                            <p>Give us some information for making a cover leter.</p>
                        </div>
                        <div class="col-sm-12 col-md-3"></div>
                        <div class="col-sm-12 col-md-3"></div>
                        <div class="col-sm-12 col-md-3"></div>
                        <div class="col-sm-12 col-md-12 py-3 write_cover_text">
                            <p>
                                <form action="" method="post" id="generate_cover">
                                    @csrf
                                    I am looking for <input type="text" id="gen_custom_quantity" class="form-control border_bottom width_150"
                                    placeholder="Fill Quantity" required> leads with the following specific criteria.

                                    <br />
                                    <h5 class="pt-3">Criteria Of Industry:</h5>
                                    <input id="gen_criteria_industry" type="text" class="form-control border_bottom text-left"
                                    placeholder="Example - 1. German headquartered, 2. Actively Hiring in Spain (at least 5 roles) 3. 10-250 Employees" required>

                                    <h5 class="pt-3">Data Type:</h5>
                                    <select class="form-select form-select-custom_industry" id="gen_custom_industry" required>
                                        <option value="">Industry Name</option>
                                        <option value="AL">Construction</option>
                                        <option value="AK">E-commerce</option>
                                        <option value="WI">Tech</option>
                                        <option value="WY">Shop</option>
                                        <option value="WY">Auto Services</option>
                                        <option value="WY">Restaurant</option>
                                        <option value="WY">Healthcare</option>
                                        <option value="WY">Beauty & Product</option>
                                    </select>
                                    into
                                    <select class="form-select form-select-custom_industry" id="gen_custom_country" required>
                                        <option value="">Country Name</option>
                                        <option value="AL">Bangladesh</option>
                                        <option value="AL">Canada</option>
                                        <option value="AK">USA</option>
                                    </select>

                                    <h5 class="pt-3">Data Type:</h5>

                                    <input type="checkbox" name="p_name"
                                        id="p_name" value="name"> <label for="p_name">First Name</label>,
                                    <input type="checkbox" name="p_name" id="p_name" value="name"> <label
                                        for="p_name">Last Name</label>,
                                    <input type="checkbox" name="p_name" id="p_name" value="name"> <label
                                        for="p_name">Email</label>,
                                    <input type="checkbox" name="p_name" id="p_name" value="name"> <label
                                        for="p_name">Comapny Name</label>,
                                    <input type="checkbox" name="p_name" id="p_name" value="name"> <label
                                        for="p_name">Comapny Email</label>,
                                    <input type="checkbox" name="p_name" id="p_name" value="name"> <label
                                        for="p_name">Comapny Phone</label>,
                                    <input type="checkbox" name="p_name" id="p_name" value="name"> <label
                                        for="p_name">Website</label>,
                                    <input type="checkbox" name="p_name" id="p_name" value="name"> <label
                                        for="p_name">Address</label>,
                                    <input type="checkbox" name="p_name" id="p_name" value="name"> <label
                                        for="p_name">Revenue</label>,
                                    <input type="checkbox" name="p_name" id="p_name" value="name"> <label
                                        for="p_name">Number Of Employee</label>,
                                    <input type="checkbox" name="p_name" id="p_name" value="name"> <label
                                        for="p_name">Source Link</label>.
                                        <br>I want to start this task for
                                    <select class="form-select form-select-custom_industry" id="gen_custom_duration" required>
                                        <option value="">Project Duration</option>
                                        <option value="AL">One Time Project</option>
                                        <option value="AL">Hourly Based</option>
                                    </select> .
                                    <br>
                                    {{-- <button class="py-2 mt-3 btn btn-upwork" type="submit">Generate Message</button> --}}
                                </form>
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <textarea class="form-control" name="" id="message_show_box" cols="30" rows="10" disabled
                                placeholder="You can write your needs..."></textarea>
                            <button id="copy_text_r_upwork" class="py-2 mt-3 btn btn-upwork float-end">Copy & Send
                                Message</button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <Cover Letter Section> close ============================-->
            <!-- ============================================-->



            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pt-4 pt-md-6">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-lg-7 text-lg-center"><img class="img-fluid mb-5 mb-md-0"
                                src="{{asset('assets/frontend/img/upwork/header-vector-2.png')}}" alt="" /></div>
                        <div class="col-md-7 col-lg-5 text-center text-md-start">
                            <h2>We Provide Many <br />Service If You Need</h2>
                            <p> You can explore the service that we provide with fun and have their own functions each
                                feature.</p>
                            <div class="d-flex"><svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                    </path>
                                </svg>
                                <p class="ms-2">Powerfull online protection.</p>
                            </div>
                            <div class="d-flex"><svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                    </path>
                                </svg>
                                <p class="ms-2">Internet without borders.</p>
                            </div>
                            <div class="d-flex"><svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                    </path>
                                </svg>
                                <p class="ms-2">Supercharged VPN.</p>
                            </div>
                            <div class="d-flex"><svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                    </path>
                                </svg>
                                <p class="ms-2">Internet without borders.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- ============================================-->



            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-7">
                <div class="container">
                    <div class="row flex-center">
                        <div class="col-md-8 col-lg-5 text-center">
                            <h2>Happy Customer</h2>
                            <p>These are the stories of our customers who have joined us with great pleasure when using
                                this crazy feature.</p>
                        </div>
                    </div>
                    <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="row h-100">

                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center"><img class="img-fluid"
                                                            src="assets/img/gallery/user-1.png" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                            <p class="fs--2 fw-normal mb-0">arsaw, Poland</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center"><span
                                                            class="text-900 me-3">4.5</span><svg class="bi bi-star-fill"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#FEA250" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <p class="card-text pt-3">“Wow...I am very happy to use this VPN, it
                                                    turned out to be more than my expectations and so far there have
                                                    been no problems. DiMarz always the best”.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center"><img class="img-fluid"
                                                            src="assets/img/gallery/user-2.png" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou
                                                            </h6>
                                                            <p class="fs--2 fw-normal mb-0">Seoul, South Korea</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center"><span
                                                            class="text-900 me-3">5</span><svg class="bi bi-star-fill"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#FEA250" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <p class="card-text pt-3">“I like it because I like to travel far and
                                                    still can connect with high speed.”</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center"><img class="img-fluid"
                                                            src="assets/img/gallery/user-3.png" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                            <p class="fs--2 fw-normal mb-0">Shanxi, China</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center"><span
                                                            class="text-900 me-3">4.8</span><svg class="bi bi-star-fill"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#FEA250" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <p class="card-text pt-3">like it because I like to travel far and still
                                                    can connect with high speed”.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row h-100">
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center"><img class="img-fluid"
                                                            src="assets/img/gallery/user-1.png" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                            <p class="fs--2 fw-normal mb-0">arsaw, Poland</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center"><span
                                                            class="text-900 me-3">4.5</span><svg class="bi bi-star-fill"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#FEA250" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <p class="card-text pt-3">“Wow...I am very happy to use this VPN, it
                                                    turned out to be more than my expectations and so far there have
                                                    been no problems. DiMarz always the best”.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center"><img class="img-fluid"
                                                            src="assets/img/gallery/user-2.png" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou
                                                            </h6>
                                                            <p class="fs--2 fw-normal mb-0">Seoul, South Korea</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center"><span
                                                            class="text-900 me-3">5</span><svg class="bi bi-star-fill"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#FEA250" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <p class="card-text pt-3">“I like it because I like to travel far and
                                                    still can connect with high speed.”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center"><img class="img-fluid"
                                                            src="assets/img/gallery/user-3.png" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                            <p class="fs--2 fw-normal mb-0">Shanxi, China</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center"><span
                                                            class="text-900 me-3">4.8</span><svg class="bi bi-star-fill"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#FEA250" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <p class="card-text pt-3">like it because I like to travel far and still
                                                    can connect with high speed”.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row h-100">
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center"><img class="img-fluid"
                                                            src="assets/img/gallery/user-1.png" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                            <p class="fs--2 fw-normal mb-0">arsaw, Poland</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center"><span
                                                            class="text-900 me-3">4.5</span><svg class="bi bi-star-fill"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#FEA250" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <p class="card-text pt-3">“Wow...I am very happy to use this VPN, it
                                                    turned out to be more than my expectations and so far there have
                                                    been no problems. DiMarz always the best”.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center"><img class="img-fluid"
                                                            src="assets/img/gallery/user-2.png" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou
                                                            </h6>
                                                            <p class="fs--2 fw-normal mb-0">Seoul, South Korea</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center"><span
                                                            class="text-900 me-3">5</span><svg class="bi bi-star-fill"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#FEA250" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <p class="card-text pt-3">“I like it because I like to travel far and
                                                    still can connect with high speed.”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center"><img class="img-fluid"
                                                            src="assets/img/gallery/user-3.png" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                            <p class="fs--2 fw-normal mb-0">Shanxi, China</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center"><span
                                                            class="text-900 me-3">4.8</span><svg class="bi bi-star-fill"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#FEA250" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <p class="card-text pt-3">like it because I like to travel far and still
                                                    can connect with high speed”.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row px-3 px-md-0 mt-4">
                            <div class="col-6 position-relative">
                                <ol class="carousel-indicators">
                                    <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                                </ol>
                            </div>
                            <div class="col-6 position-relative"><a
                                    class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark"
                                    role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                        aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a
                                    class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark"
                                    role="button" data-bs-slide="next"><span class="carousel-control-next-icon"
                                        aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                        </div>
                    </div>
                </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- ============================================-->



            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-5 z-index-1" style="margin-bottom: -10rem">
                <div class="container">
                    <div class="card py-5 px-5 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="row flex-center">
                                <div class="col-12 col-lg-6 text-lg-start">
                                    <h2>Subscribe Now for <br />Get Special Features!</h2>
                                    <p class="mb-lg-0">Let's subscribe with us and find the fun.</p>
                                </div>
                                <div class="col-12 col-lg-6 text-lg-end"><a
                                        class="btn btn-lg btn-danger hover-top btn-glow text-end" href="#">Subscribe
                                        Now</a></div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- ============================================-->



            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="bg-200 pt-9 pb-0">
                <div class="container">
                    <div class="row">
                        <div class="text-400 text-center">
                            <p><i class="fas fa-user-secret"></i> Development By <a class="text-900" href="{{url('/')}}"
                                    target="_blank">DiMarz</a></p>
                        </div>
                    </div>
                </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
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

        </script>

        <script>
            function generate_message(){
                let gen_custom_quantity = $('#gen_custom_quantity').val();
                let gen_criteria_industry = $('#gen_criteria_industry').val();
                let gen_custom_industry = $('#gen_custom_industry').val();
                let gen_custom_country = $('#gen_custom_country').val();
                let gen_custom_duration = $('#gen_custom_duration').val();

                let message = `I am looking for `+gen_custom_quantity+
                                ` leads with the following specific criteria.`;
                let message2 = `Criteria Of Industry:`+ gen_criteria_industry;

                if (gen_custom_quantity != '') {
                    $('#message_show_box').text(message);
                }

            }

            // message_show_box
            $('#gen_custom_quantity').on('keyup', function(){
                generate_message();
            });
        </script>
    </body>

</html>
