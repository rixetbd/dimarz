<!doctype html>
<html lang="en">

<head>
    <title>DiMarz - Site Layout</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset('assets/frontend')}}/img/icon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="{{asset('assets/frontend')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/responsive2.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/float-icons.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/media.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/d-mobile.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/sticky_nav.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/gigs_page_style.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/notyf.min.css">

    @yield('custom_css')

</head>

<body>

    <div class="di_container-fluid">
        <div class="row">

            <div class="aside left_aside_root">
                <div class="left_aside">
                    <!-- ABCD -->
                    <header>
                        <div class="toggle">
                            <i class="fas fa-bars"></i>
                        </div>
                        <h3 class="m-0"><img class="img-fluid" src="{{asset('assets/frontend')}}/img/logo.png" alt="" width="100"></h3>
                        <a href="#">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </header>
                    <div class="logo_area">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets/frontend')}}/img/logo.png" alt="">
                        </a>
                    </div>
                    <nav class="active">
                        <ul>
                            <!-- <li>
                                <a class="toggle">
                                    <span class="icon"><i class="fas fa-bars"></i></span>
                                    <span class="title">Menu</span>
                                </a>
                            </li> -->
                            <li>
                                <a href="https://rixetbd.github.io/site-layout/">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    <span class="title">Home</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav_item_color" id="service_nav_item">
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <span class="title">Service</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <span class="title">Service 2</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav_item_color" id="pricing_nav_item">
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <span class="title">Pricing</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <span class="title">Pricing 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="fas fa-envelope"></i></span>
                                    <span class="title">Blog</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="fas fa-info"></i></span>
                                    <span class="title">About</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="fas fa-cog"></i></span>
                                    <span class="title">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div style="padding:0;margin-top: 20rem;width: 70%;margin-left: 15%;">
                        <hr style="color: #fff;">
                    </div>

                    <div class="service_info_left_menu service_info_left opacity_100" data-index="1">
                        <div class="index_item">
                            <div class="accordion accordion-flush" id="accordionFlushSideNav">
                                {{-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="SideNav-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#SideNav-collapseOne"
                                            aria-expanded="false" aria-controls="SideNav-collapseOne">
                                            Digital Marketing
                                        </button>
                                    </h2>
                                    <div id="SideNav-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="SideNav-headingOne" data-bs-parent="#accordionFlushSideNav">
                                        <div class="accordion-body">
                                            <ul>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        Lead Generation
                                                    </a>
                                                </li>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        SEO
                                                    </a>
                                                </li>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        Email Marketing
                                                    </a>
                                                </li>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        Content Writing
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="SideNav-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#SideNav-collapseTwo"
                                            aria-expanded="false" aria-controls="SideNav-collapseTwo">
                                            Data Entry
                                        </button>
                                    </h2>
                                    <div id="SideNav-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="SideNav-headingTwo" data-bs-parent="#accordionFlushSideNav">
                                        <div class="accordion-body">
                                            <ul>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        Offline Data Entry
                                                    </a>
                                                </li>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        Online Data Entry
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="SideNav-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#SideNav-collapseThree"
                                            aria-expanded="false" aria-controls="SideNav-collapseThree">
                                            Web Development
                                        </button>
                                    </h2>
                                    <div id="SideNav-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="SideNav-headingThree" data-bs-parent="#accordionFlushSideNav">
                                        <div class="accordion-body">
                                            <ul>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        WordPress Development
                                                    </a>
                                                </li>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        Web Application
                                                    </a>
                                                </li>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        Frontend Development
                                                    </a>
                                                </li>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        Backend Development
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="SideNav-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#SideNav-collapseFour"
                                            aria-expanded="false" aria-controls="SideNav-collapseFour">
                                            Graphics Design
                                        </button>
                                    </h2>
                                    <div id="SideNav-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="SideNav-headingFour" data-bs-parent="#accordionFlushSideNav">
                                        <div class="accordion-body">
                                            <ul>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        Photo Editing
                                                    </a>
                                                </li>
                                                <li class="service_index">
                                                    <a><i class="fas fa-th-large"></i>
                                                        Design
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="main_content border_one1_side">
                <div id="service_navbar" class="d-none border_one1_side">
                    <div class="container">
                        <div class="row w-100 m-0 mega_menu_area">
                            <div class="col-sm-12 col-md-12 pt-4" style="min-height: 100px;">
                                <h4 class="text-center nav_focus_text">CHOOSE THE SERVICE THAT’S RIGHT FOR YOU</h4>
                            </div>
                            <div class="col-sm-12 col-md-3 py-4">
                                <h3 class="service_group_title_two"><i class="fas fa-bullhorn me-2"></i> Digital
                                    Marketing</h3>
                                <div class="mb-3">
                                    <a class="help_text_root" href="lead-generation.html">
                                        <span class="service_group_title">Lead Generation Services</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>With the help of lead generation services, your business will gain more
                                            qualified leads.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">Search Engine Optimization</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>With SEO Campaign Boost your organic traffic & bring more Conversations.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">E-mail Marketing</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>Directly Reach Your potential Target Audience with the email marketing.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-3">
                                    <a class="help_text_root" href="content-writing.html">
                                        <span class="service_group_title">Content Writing</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>Make high-quality content that works to increase visitors from organic
                                            search.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">Social Media Marketing</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>Increase your engagement and sales by using social media marketing.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 py-4">
                                <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Graphics
                                    Design</h3>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">Photo Editing</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>With the expert photo editing service, take your pictures to the next level.
                                        </p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">Photo Design</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>With Photo Design, you get an opportunity to showcase your company's visual
                                            identity.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 py-4">
                                <h3 class="service_group_title_two"><i class="fas fa-code me-2"></i> Web Development
                                </h3>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">WordPress Development</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p> Design, Optimize, Maintenance & build your websites with wordpress.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">Web Application</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>Intuitive and secure web solutions that help drive your business's success.
                                        </p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">Front End Development</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>Creative frontend engineers give you highly responsive, attractive,
                                            user-friendly websites.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">Backend Development</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>Back-end development helps create intricate server-side layers,enabling cloud
                                            integration.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 py-4">
                                <h3 class="service_group_title_two"><i class="fas fa-file-signature me-2"></i> Data
                                    Entry</h3>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">Online Data Entry</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>Online data entry is an excellent way to quickly and easily enter the
                                            information.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-3">
                                    <a class="help_text_root" href="#">
                                        <span class="service_group_title">Offline Data Entry</span>
                                        <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                        <p>Take your operational efficiency to the next level with offline data entry
                                            services.</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your
                                                    needs</span>
                                                <span class="help_text_2">Visit Page</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="pricing_navbar" class="d-none border_one1_side">
                    <div class="container">
                        <div class="col-sm-12 col-md-12 pt-4" style="min-height: 100px;">
                            <h4 class="text-center nav_focus_text">CHOOSE THE SERVICE THAT’S RIGHT FOR YOU</h4>
                        </div>
                        <div class="row w-100 m-0" id="sp_box_root">
                            <div class="col-sm-12 col-md-3">
                                <div class="sp_box active">
                                    <h4>Digital Marketing</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="sp_box">
                                    <h4>Data Entry</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="sp_box">
                                    <h4>Web Development</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="sp_box">
                                    <h4>Graphics Design</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row w-100 m-0 pt-4 mega_menu_area">
                            <div class="sp_box_single d-none row">
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Lead
                                        Generation</h3>
                                    <div>
                                        <a href="gigs.html" class="service_gigs_link">B2B Lead Generation</a>
                                        <a href="gigs.html" class="service_gigs_link">B2C Lead Generation</a>
                                        <a href="gigs.html" class="service_gigs_link">Product Lead Generation</a>


                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> SEO
                                    </h3>
                                    <div>
                                        <a href="gigs.html" class="service_gigs_link">On Page SEO</a>
                                        <a href="gigs.html" class="service_gigs_link">Off Page SEO</a>
                                        <a href="gigs.html" class="service_gigs_link">Monthly SEO</a>


                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Email
                                        Marketing</h3>
                                    <div>
                                        <a href="gigs.html" class="service_gigs_link">Email Template</a>
                                        <a href="gigs.html" class="service_gigs_link">Email Signature</a>
                                        <a href="gigs.html" class="service_gigs_link">Email Campaign</a>


                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Content
                                        Writing</h3>
                                    <div>
                                        <a href="gigs.html" class="service_gigs_link">SEO Friendly Content</a>
                                        <a href="gigs.html" class="service_gigs_link">Blog Content</a>
                                        <a href="gigs.html" class="service_gigs_link">Content Research</a>

                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                        <a href="gigs.html" class="service_gigs_link">Demo Text</a>
                                    </div>
                                </div>
                            </div>

                            <div class="sp_box_single d-none row">
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Online
                                        Data Entry </h3>
                                    <div class="mb-3">
                                        <a class="help_text_root" href="#">
                                            <span class="service_group_title">Search Engine Optimization</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>With Proper SEO campaign, you can boost your daily
                                                organic traffic and bring more conversions by organically
                                                ranking.</p>
                                            <div class="help_text">
                                                <div class="text-center">
                                                    <span class="help_text_1">You can discover everything for your
                                                        needs</span>
                                                    <span class="help_text_2">Visit Page</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Ofline
                                        Data Entry</h3>
                                    <div class="mb-3">
                                        <a class="help_text_root" href="#">
                                            <span class="service_group_title">Photo Editing and Retouching</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>With Proper SEO campaign, you can boost your daily
                                                organic traffic and bring more conversions by organically
                                                ranking.</p>
                                            <div class="help_text">
                                                <div class="text-center">
                                                    <span class="help_text_1">You can discover everything for your
                                                        needs</span>
                                                    <span class="help_text_2">Visit Page</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sp_box_single d-none row">
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i>
                                        WordPress Development </h3>
                                    <div class="mb-3">
                                        <a class="help_text_root" href="#">
                                            <span class="service_group_title">Search Engine Optimization</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>With Proper SEO campaign, you can boost your daily
                                                organic traffic and bring more conversions by organically
                                                ranking.</p>
                                            <div class="help_text">
                                                <div class="text-center">
                                                    <span class="help_text_1">You can discover everything for your
                                                        needs</span>
                                                    <span class="help_text_2">Visit Page</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Web
                                        Application</h3>
                                    <div class="mb-3">
                                        <a class="help_text_root" href="#">
                                            <span class="service_group_title">Photo Editing and Retouching</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>With Proper SEO campaign, you can boost your daily
                                                organic traffic and bring more conversions by organically
                                                ranking.</p>
                                            <div class="help_text">
                                                <div class="text-center">
                                                    <span class="help_text_1">You can discover everything for your
                                                        needs</span>
                                                    <span class="help_text_2">Visit Page</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i>
                                        Frontend Development </h3>
                                    <div class="mb-3">
                                        <a class="help_text_root" href="#">
                                            <span class="service_group_title">Search Engine Optimization</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>With Proper SEO campaign, you can boost your daily
                                                organic traffic and bring more conversions by organically
                                                ranking.</p>
                                            <div class="help_text">
                                                <div class="text-center">
                                                    <span class="help_text_1">You can discover everything for your
                                                        needs</span>
                                                    <span class="help_text_2">Visit Page</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Backend
                                        Development</h3>
                                    <div class="mb-3">
                                        <a class="help_text_root" href="#">
                                            <span class="service_group_title">Photo Editing and Retouching</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>With Proper SEO campaign, you can boost your daily
                                                organic traffic and bring more conversions by organically
                                                ranking.</p>
                                            <div class="help_text">
                                                <div class="text-center">
                                                    <span class="help_text_1">You can discover everything for your
                                                        needs</span>
                                                    <span class="help_text_2">Visit Page</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="sp_box_single d-none row">
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Motion
                                        Graphic </h3>
                                    <div class="mb-3">
                                        <a class="help_text_root" href="#">
                                            <span class="service_group_title">Search Engine Optimization</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>With Proper SEO campaign, you can boost your daily
                                                organic traffic and bring more conversions by organically
                                                ranking.</p>
                                            <div class="help_text">
                                                <div class="text-center">
                                                    <span class="help_text_1">You can discover everything for your
                                                        needs</span>
                                                    <span class="help_text_2">Visit Page</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Logo
                                        Design</h3>
                                    <div class="mb-3">
                                        <a class="help_text_root" href="#">
                                            <span class="service_group_title">Photo Editing and Retouching</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>With Proper SEO campaign, you can boost your daily
                                                organic traffic and bring more conversions by organically
                                                ranking.</p>
                                            <div class="help_text">
                                                <div class="text-center">
                                                    <span class="help_text_1">You can discover everything for your
                                                        needs</span>
                                                    <span class="help_text_2">Visit Page</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i> Social
                                        Media Design</h3>
                                    <div class="mb-3">
                                        <a class="help_text_root" href="#">
                                            <span class="service_group_title">Photo Editing and Retouching</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>With Proper SEO campaign, you can boost your daily
                                                organic traffic and bring more conversions by organically
                                                ranking.</p>
                                            <div class="help_text">
                                                <div class="text-center">
                                                    <span class="help_text_1">You can discover everything for your
                                                        needs</span>
                                                    <span class="help_text_2">Visit Page</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div id="bg_overlay" class="d-none border_one1_side"></div> -->
                <div class="sct_content">
                    <!-- Section Concept Start || Start -->

                    @yield('content')



                </div>
            </div>

            <div class="aside right_aside_root">
                <div class="right_aside p-4">
                    <div class="service_right_box">
                        <h5>Our most trending services</h5>
                        <div class="search_grp">
                            <i class="fas fa-search"></i>
                            <input type="text" class="search_box" placeholder="Search Service">
                        </div>
                        <ul>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>B2B Lead Generation</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>B2C Lead Generation</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>On Page SEO</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>OFF Page SEO</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>WordPress Development</span></a>
                            </li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>Web Application
                                        Development</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>OFF Page SEO</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>WordPress Development</span></a>
                            </li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>Web Application
                                        Development</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>B2B Lead Generation</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>B2C Lead Generation</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>On Page SEO</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>OFF Page SEO</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>WordPress Development</span></a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square me-2"></i>
                                    <span>Web Application Development</span>
                                </a>
                            </li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> OFF Page SEO</a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> WordPress Development</a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> Web Application Development</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/jquery-3.6.1.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/mainscript.js"></script>
    <script src="{{asset('assets/frontend')}}/js/onscroll.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script> -->
    <script src="{{asset('assets/frontend')}}/js/notyf.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function autoservicelist(){
            $.ajax({
                type: "POST",
                url: `{{route('frontend.autoservicelist')}}`,
                data: {id: '1',},
                success: function (data) {

                    let html = "";
                    $.each(data.data, function (i, value) {
                        var name_list = "";
                        $.each(value.subCategories_data, function (sub_i, subdata) {
                            name_list += `<li class="service_index">
                                <a><i class="fas fa-th-large"></i>
                                    ${subdata.name}
                                </a>
                            </li>`;
                        });
                        html += `<div class="accordion-item">
                                <h2 class="accordion-header" id="SideNav-heading${i}">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#SideNav-collapse${i}"
                                        aria-expanded="false" aria-controls="SideNav-collapseOne">
                                        ${value.categories_name}
                                    </button>
                                </h2>
                                <div id="SideNav-collapse${i}" class="accordion-collapse collapse `+ ((i == '0') ? 'show':'')+`"
                                    aria-labelledby="SideNav-heading${i}" data-bs-parent="#accordionFlushSideNav">
                                    <div class="accordion-body">
                                        <ul>`+ name_list + `</ul>
                                    </div>
                                </div>
                            </div>`;
                    });

                    $('#accordionFlushSideNav').html(html);
                },
                error: function (request, status, error) {
                    notyf.error(request.responseJSON.message);
                }
            });
        };
        autoservicelist();

    </script>

    <script>
        var getSidebar = document.querySelector('nav');
        var getToggle = document.getElementsByClassName('toggle');
        for (var i = 0; i <= getToggle.length; i++) {
            getToggle[i].addEventListener('click', function () {
                getSidebar.classList.toggle('active');
            });
        }

    </script>

    <script>
        $(window).on('scroll', function () {

            var windowScroll = $(window).scrollTop();
            var topScroll = $('.service_info_left').offset().top;
            var service_info_left = $('.service_info_left').offset().top - 750;

            var service_info_left_data = $('.service_info_left').data('index');

            if (windowScroll > service_info_left) {
                $('.service_info_left').addClass('opacity_100');
            } else {
                $('.service_info_left').removeClass('opacity_100');
            }
        });
        // for (let i = 0; i < array.length; i++) {
        //     const element = array[i];

        // }

    </script>

    @yield('custom_js')

</body>

</html>
