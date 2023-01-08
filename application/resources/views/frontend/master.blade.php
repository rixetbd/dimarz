@php
$currentRouteName = Route::currentRouteName();
@endphp

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset('assets/frontend')}}/img/icon.png" type="image/x-icon">

    @yield('meta_tag')

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="{{asset('assets/frontend')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/responsive2.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/float-icons.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/media.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/d-mobile.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/sticky_nav.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/gigs_page_style.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
                        <h3 class="m-0"><img class="img-fluid" src="{{asset('assets/frontend')}}/img/logo.png" alt=""
                                width="100"></h3>
                        <a href="#">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </header>
                    <div class="logo_area">
                        <a href="{{url('/')}}">
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
                            <li class="single_nav">
                                <a href="{{url('/')}}">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    <span class="title">Home</span>
                                </a>
                            </li>
                            <li class="single_nav">
                                <a class="nav_item_color" id="service_nav_item">
                                    <span class="icon"><i class="fas fa-cog"></i></span>
                                    <span class="title">Service</span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#">
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <span class="title">Service 2</span>
                                </a>
                            </li> --}}
                            <li class="single_nav">
                                <a class="nav_item_color" id="pricing_nav_item">
                                    <span class="icon"><i class="fas fa-dollar-sign"></i></span>
                                    <span class="title">Pricing</span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#">
                                    <span class="icon"><i class="fas fa-user"></i></span>
                                    <span class="title">Pricing 2</span>
                                </a>
                            </li> --}}
                            <li class="single_nav {{($currentRouteName == 'frontend.blog'?'active':'')}}">
                                <a href="{{route('frontend.blog')}}">
                                    <span class="icon"><i class="fas fa-blog"></i></span>
                                    <span class="title">Blog</span>
                                </a>
                            </li>
                            {{-- <li class="single_nav {{($currentRouteName == 'frontend.about'?'active':'')}}">
                            <a href="{{route('frontend.about')}}" class="about_items">
                                <span class="icon"><span class="material-symbols-outlined">info</span></span>
                                <span class="title">About</span>
                            </a>

                            </li> --}}
                            <li class="dropdown_nav_li {{($currentRouteName == 'frontend.career'?'active':'')}}">
                                <div class="dropdown_nav_about">
                                    <span class="icon"><span class="material-symbols-outlined">info</span></span>
                                    <span class="title">About</span>
                                    <div class="dropdown_nav_about_sub">
                                        <a href="#0123"><span class="material-symbols-outlined">
                                                groups
                                            </span>Why Us</a>
                                        <a href="#def"><span class="material-symbols-outlined">
                                                privacy
                                            </span> Case Studies</a>
                                        <a href="#abc"><span class="material-symbols-outlined">
                                                conditions
                                            </span> Terms & Conditions</a>
                                        <a href="#def"><span class="material-symbols-outlined">
                                                privacy_tip
                                            </span> Privacy Policy</a>
                                    </div>
                                </div>
                            </li>
                            <li class="single_nav">
                                <a href="#">
                                    <span class="icon"><span class="material-symbols-outlined">
                                            contacts
                                        </span></span>
                                    <span class="title">Contact</span>
                                </a>
                            </li>
                            <li class="single_nav {{($currentRouteName == 'frontend.career'?'active':'')}}">
                                <a href="{{route('frontend.career')}}">
                                    <span class="icon"><i class="fas fa-briefcase"></i></span>
                                    <span class="title">Career</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div style="padding:0;margin-top: 18rem;width: 70%;margin-left: 15%;">
                        <hr style="color: #fff;">
                    </div>

                    {{-- <div class="service_info_left_menu service_info_left opacity_100" data-index="1">
                        <div class="index_item">
                            <div class="accordion accordion-flush" id="accordionFlushSideNav">

                            </div>
                        </div>
                    </div> --}}

                    @yield('multi_navigation')

                    <div class="links sidenav_links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>

                </div>
            </div>


            <div class="main_content"> {{-- border_one1_side --}}
                <div id="service_navbar" class="d-none border_one1_side">
                    <div class="container">
                        <div class="row w-100 m-0 mega_menu_area">
                            <div class="col-sm-12 col-md-12 pt-4" style="min-height: 100px;">
                                <h4 class="text-center nav_focus_text">CHOOSE THE SERVICE THAT’S RIGHT FOR YOU</h4>
                            </div>
                            <div class="row" id="top_service_menu">

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
                                            <p>With SEO Campaign Boost your organic traffic & bring more Conversations.
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
                                            <span class="service_group_title">E-mail Marketing</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>Directly Reach Your potential Target Audience with the email marketing.
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
                                    <h3 class="service_group_title_two"><i class="fas fa-bezier-curve me-2"></i>
                                        Graphics
                                        Design</h3>
                                    <div class="mb-3">
                                        <a class="help_text_root" href="#">
                                            <span class="service_group_title">Photo Editing</span>
                                            <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                            <p>With the expert photo editing service, take your pictures to the next
                                                level.
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
                                            <p>With Photo Design, you get an opportunity to showcase your company's
                                                visual
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
                                            <p>Intuitive and secure web solutions that help drive your business's
                                                success.
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
                                            <p>Back-end development helps create intricate server-side layers,enabling
                                                cloud
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
                                            <p>Take your operational efficiency to the next level with offline data
                                                entry
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
                                    <h3 class="service_group_title_two">
                                        <i class="fas fa-bezier-curve me-2"></i> Lead Generation
                                    </h3>
                                    <div>

                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two">
                                        <i class="fas fa-bezier-curve me-2"></i> International SEO
                                    </h3>
                                    <div>
                                        <a href="technical-seo-services" class="service_gigs_link">Technical SEO</a>
                                        <a href="on-page-seo-services" class="service_gigs_link">On-Page SEO</a>
                                        <a href="off-page-seo-services" class="service_gigs_link">OFF Page SEO</a></div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two">
                                        <i class="fas fa-bezier-curve me-2"></i> Email Marketing
                                    </h3>
                                    <div><a href="email-template" class="service_gigs_link">Email Template</a></div>
                                </div>
                                <div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two">
                                        <i class="fas fa-bezier-curve me-2"></i> WordPress Development
                                    </h3>
                                    <div>
                                        <a href="aut-quasi-ut-magni-i" class="service_gigs_link">Reiciendis quis
                                            offi</a>
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
                    @include('frontend.footer')

                </div>
            </div>

            <div class="aside right_aside_root">
                <div class="right_aside p-4">
                    <div class="service_right_box">
                        <h5 style="font-size:1.5rem;text-transform:capitalize;">Our most trending services</h5>
                        <div class="search_grp">
                            <i class="fas fa-search"></i>
                            <input type="text" class="search_box" placeholder="Search Service">
                        </div>
                        <ul id="allgigsformdb">

                            {{-- <li><a href="#"><i class="fas fa-square me-2"></i> <span>B2B Lead Generation</span></a></li> --}}

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

    <!-- Plugin used-->
    <script>
        var notyf = new Notyf();

    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function autoservicelist() {
            $.ajax({
                type: "POST",
                url: `{{route('frontend.autoservicelist')}}`,
                data: {
                    id: '',
                },
                success: function (data) {
                    // Left SideBar Menu Aria || Start
                    let html = "";

                    var top_service_menu = "";
                    var top_service_menu_sub = "";

                    $.each(data.data, function (i, value) {
                        var name_list = "";

                        $.each(value.subCategories_data, function (sub_i, subdata) {
                            name_list += `<li class="service_index">
                                <a><i class="fas fa-th-large"></i>
                                    ${subdata.name}
                                </a>
                            </li>`;

                            top_service_menu_sub += `<div class="mb-3"><a class="help_text_root" href="{{url('/')}}/m/${subdata.slug}">
                                <span class="service_group_title">${subdata.name}</span>
                                <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>${subdata.short_info}</p>
                                <div class="help_text">
                                    <div class="text-center">
                                        <span class="help_text_1">You can discover everything for your needs</span>
                                        <span class="help_text_2">Visit Page</span></div></div></a>
                                    </div>`;
                        });

                        html = '';
                        html += `<div class="accordion-item">
                                <h2 class="accordion-header" id="SideNav-heading${i}">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#SideNav-collapse${i}"
                                        aria-expanded="false" aria-controls="SideNav-collapseOne">
                                        ${value.categories_name}
                                    </button>
                                </h2>
                                <div id="SideNav-collapse${i}" class="accordion-collapse collapse ` + ((i == '0') ?
                            'show' : '') + `"
                                    aria-labelledby="SideNav-heading${i}" data-bs-parent="#accordionFlushSideNav">
                                    <div class="accordion-body">
                                        <ul>` + name_list + `</ul>
                                    </div>
                                </div>
                            </div>`;

                        // Left SideBar Menu Aria || End
                        // Top Menu Aria || Start (top_service_menu)
                        $.each(value.subCategories_data, function (sub_i, subdata_top) {

                            top_service_menu_sub += `<div class="mb-3"><a class="help_text_root" href="${subdata_top.slug}">
                                    <span class="service_group_title">${subdata_top.name}</span>
                                    <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                    <p>${subdata_top.short_info}</p>
                                        <div class="help_text">
                                            <div class="text-center">
                                                <span class="help_text_1">You can discover everything for your needs</span>
                                                <span class="help_text_2">Visit Page</span></div></div></a>
                                            </div>`;
                        });


                        top_service_menu +=
                            `<div class="col-sm-12 col-md-3 py-4">
                        <h3 class="service_group_title_two"><i class="fas fa-bullhorn me-2"></i> ${value.categories_name}</h3>` +
                            top_service_menu_sub + `</div>`;
                    });

                    $('#accordionFlushSideNav').html(html);
                    $('#top_service_menu').html(top_service_menu);
                    console.log(top_service_menu);
                    // Top Menu Aria || End

                },
                error: function (request, status, error) {
                    notyf.error(request.responseJSON.message);
                }
            });
        };
        // autoservicelist();

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

    <script>
        function autoNavItems() {
            $.ajax({
                url: `{{route('frontend.allmainpage')}}`,
                method: "GET",
                data: {
                    'id': 'id'
                },
                success: function (data) {

                    var allgigsformdb = "";
                    var sp_box_root = "";
                    var gigmainpagetitle = '';
                    $.each(data.gigpage, function (i, gigpage) {
                        var routeText = `{{url('/')}}/service/${gigpage.slug}`;
                        allgigsformdb += `<li>
                                            <a href="${routeText}">
                                                <i class="fas fa-square me-2"></i>
                                                <span>` + gigpage.title + `</span>
                                            </a>
                                        </li>`;
                        $('#allgigsformdb').html(allgigsformdb);
                    });

                    $.each(data.serviceGroupID, function (i, gigGroup) {
                        sp_box_root += `<div class="col-sm-12 col-md-3">
                                            <div class="sp_box ` + ((i == 0) ? 'active' : '') + `">
                                                <h4>` + gigGroup.category_name + `</h4>
                                            </div>
                                        </div>`;
                        $('#sp_box_root').html(sp_box_root);

                        $.each(gigGroup.mainpage_data, function (i, maindata) {
                            // page_title
                            // gigpage_model

                            var gigpage_model = "";
                            $.each(maindata.gigpage_model, function (i, listdata) {
                                gigpage_model +=
                                    `<a href="${listdata.slug}" class="service_gigs_link">${listdata.title}</a>`;
                            });

                            gigmainpagetitle += `<div class="col-sm-12 col-md-3 py-4">
                                    <h3 class="service_group_title_two">
                                        <i class="fas fa-bezier-curve me-2"></i> ${maindata.page_title}
                                    </h3>
                                        <div>${gigpage_model}</div>
                                </div>`;
                        });

                    });

                    console.log(`<div class="sp_box_single d-none row">` + gigmainpagetitle + `</div>`);


                    $('#sp_box_root .sp_box').each(function (i) {
                        $(`.sp_box_single:eq(${0})`).removeClass('d-none');
                        $(this).click(() => {
                            $('#sp_box_root .sp_box').removeClass('active');
                            $(this).addClass('active');
                            $(`.sp_box_single`).addClass('d-none');
                            $(`.sp_box_single:eq(${i})`).removeClass('d-none');
                        });
                    });




                    var top_service_menu = "";
                    $.each(data.serviceGroupID, function (i, value) {
                        var single_html = "";
                        $.each(value.mainpage_data, function (i, pagedata) {
                            single_html += `<div class="mb-3">
                                    <a class="help_text_root" href="{{url('/')}}/mainpage/${pagedata.slug}">
                    <span class="service_group_title">` + pagedata.page_title + `</span>
                    <p>` + pagedata.short_info + `</p>
                        <div class="help_text">
                            <div class="text-center">
                                <span class="help_text_1">You can discover everything for your
                                    needs</span>
                                    <span class="help_text_2">Visit Page</span>
                                    </div>
                                    </div>
                                    </a>
                                    </div>`;
                        });

                        // top_service_menu += `${value.subcategory_id}`;
                        top_service_menu +=
                            `<div class="col-sm-12 col-md-3 py-4">

                            <h3 class="service_group_title_two mb-4"><i class="fas fa-bullhorn me-2"></i> ${value.category_name}</h3>` +
                            single_html +
                            `</div>`;

                    });
                    $('#top_service_menu').html(top_service_menu);

                    if (data.copyright != '') {
                        let crtext = data.copyright['copyright'];
                        let year = new Date();
                        let result = crtext.replace("[year]", year.getFullYear());
                        $('#copyright_text').html(result);
                    }
                }
            });
        }

        autoNavItems();

    </script>


    @yield('custom_js')

</body>

</html>
