@php
$currentRouteName = Route::currentRouteName();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/backend')}}/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/backend')}}/images/favicon.png" type="image/x-icon">
    <title> @yield('page_title') | {{ config('app.name', 'DiMarz') }}</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/style.css">
    <link id="color" rel="stylesheet" href="{{asset('assets/backend')}}/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/responsive.css">

    <!-- sweetalert2 css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/sweetalert2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

    @yield('custom_style')

</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper"><a href="{{route('dashboard')}}">
                            <h4>{{ config('app.name', 'DiMarz') }}</h4>
                            {{-- <img class="img-fluid" src="{{asset('assets/backend')}}/images/logo/logo.png" alt="">
                            --}}

                        </a></div>
                    <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid"
                                src="{{asset('assets/backend')}}/images/logo/dark-logo.png" alt="Logo"></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                            id="sidebar-toggle"></i></div>
                </div>
                <div class="left-menu-header col">
                    {{-- <ul>
                        <li>
                            <form class="form-inline search-form">
                                <div class="search-bg"><i class="fa fa-search"></i>
                                    <input class="form-control-plaintext" placeholder="Search here.....">
                                </div>
                            </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                        </li>
                    </ul> --}}
                </div>
                <div class="nav-right col pull-right right-menu p-0">
                    <ul class="nav-menus">
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize"></i></a></li>
                        {{-- <li class="onhover-dropdown">
                            <div class="bookmark-box"><i data-feather="star"></i></div>
                            <div class="bookmark-dropdown onhover-show-div">
                                <div class="form-group mb-0">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-search"></i></span></div>
                                        <input class="form-control" type="text" placeholder="Search for bookmark...">
                                    </div>
                                </div>
                                <ul class="m-t-5">
                                    <li class="add-to-bookmark"><i class="bookmark-icon"
                                            data-feather="inbox"></i>Email<span class="pull-right"><i
                                                data-feather="star"></i></span></li>
                                    <li class="add-to-bookmark"><i class="bookmark-icon"
                                            data-feather="message-square"></i>Chat<span class="pull-right"><i
                                                data-feather="star"></i></span></li>
                                    <li class="add-to-bookmark"><i class="bookmark-icon"
                                            data-feather="command"></i>Feather Icon<span class="pull-right"><i
                                                data-feather="star"></i></span></li>
                                    <li class="add-to-bookmark"><i class="bookmark-icon"
                                            data-feather="airplay"></i>Widgets<span class="pull-right"><i
                                                data-feather="star"> </i></span></li>
                                </ul>
                            </div>
                        </li> --}}
                        {{-- <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span>
                            </div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <p class="f-w-700 mb-0">You have 3 Notifications<span
                                            class="pull-right badge badge-primary badge-pill">4</span></p>
                                </li>
                                <li class="noti-primary">
                                    <div class="media"><span class="notification-bg bg-light-primary"><i
                                                data-feather="activity"> </i></span>
                                        <div class="media-body">
                                            <p>Delivery processing </p><span>10 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-secondary">
                                    <div class="media"><span class="notification-bg bg-light-secondary"><i
                                                data-feather="check-circle"> </i></span>
                                        <div class="media-body">
                                            <p>Order Complete</p><span>1 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-success">
                                    <div class="media"><span class="notification-bg bg-light-success"><i
                                                data-feather="file-text"> </i></span>
                                        <div class="media-body">
                                            <p>Tickets Generated</p><span>3 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-danger">
                                    <div class="media"><span class="notification-bg bg-light-danger"><i
                                                data-feather="user-check"> </i></span>
                                        <div class="media-body">
                                            <p>Delivery Complete</p><span>6 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> --}}
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>

                        {{-- <li class="onhover-dropdown"><i data-feather="message-square"></i>
                            <ul class="chat-dropdown onhover-show-div">
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="{{asset('assets/backend')}}/images/user/4.jpg" alt="User">
                                        <div class="media-body"><span>Ain Chavez</span>
                                            <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12">32 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="{{asset('assets/backend')}}/images/user/1.jpg" alt="User">
                                        <div class="media-body"><span>Erica Hughes</span>
                                            <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12">58 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="{{asset('assets/backend')}}/images/user/2.jpg" alt="User">
                                        <div class="media-body"><span>Kori Thomas</span>
                                            <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12">1 hr ago</p>
                                    </div>
                                </li>
                                <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All </a></li>
                            </ul>
                        </li> --}}
                        <li class="onhover-dropdown p-0">
                            <button class="btn btn-primary-light" type="button">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i data-feather="log-out"></i>{{ __('Log out') }}</a>
                            </button>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends
                                 -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            <header class="main-nav">
                <div class="sidebar-user text-center"><a class="setting-primary"
                        href="{{route('backend.user.index', Auth::user()->username)}}"><i
                            data-feather="settings"></i></a>
                    @if (Auth::user())
                    <img class="img-90 rounded-circle" id="auth_user"
                        src="{{asset('application/uploads/users')}}/{{(Auth::user()->avatar != ''?Auth::user()->avatar:'default.png')}}"
                        alt="{{Auth::user()->name}}">
                    @endif
                    {{-- <div class="badge-bottom"><span class="badge badge-primary">New</span></div> --}}
                    <a href="{{route('backend.user.index', Auth::user()->username)}}">

                        @if (Auth::user())
                        <h6 class="mt-3 f-14 f-w-600">{{Auth::user()->name}}</h6>
                        <p class="mb-0 font-roboto">{{Auth::user()->getRoleName->name}}</p>
                        @endif


                    </a>
                    {{--
                    <ul>
                        <li><span><span class="counter">19.8</span>k</span>
                            <p>Follow</p>
                        </li>
                        <li><span>2 year</span>
                            <p>Experince</p>
                        </li>
                        <li><span><span class="counter">95.2</span>k</span>
                            <p>Follower </p>
                        </li>
                    </ul> --}}
                </div>
                <nav>
                    <div class="main-navbar">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="mainnav">
                            <ul class="nav-menu custom-scrollbar">
                                <li class="back-btn">
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                            aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>General </h6>
                                    </div>
                                </li>
                                <li class="dropdown"><a
                                        class="nav-link menu-title link-nav {{$currentRouteName == "dashboard"?"active":" "}}"
                                        href="{{route('dashboard')}}"><i
                                            data-feather="file-text"></i><span>Dashboard</span></a>
                                </li>
                                <li class="dropdown"><a
                                        class="nav-link menu-title link-nav
                                        {{$currentRouteName == "consultation.index"?"active":" "}}
                                        {{$currentRouteName == "briefmail.index"?"active":" "}}
                                        {{$currentRouteName == "cart.ordergeneral.index"?"active":" "}}
                                        "
                                        href="{{route('consultation.index')}}"><i data-feather="mail"></i>
                                        <span>Inbox</span></a>
                                </li>

                                @if (Auth::user()->getRoleName->category != 0)
                                <li class="dropdown"><a class="nav-link menu-title
                                        {{$currentRouteName == "backend.categories.index"?"active":" "}}
                                        {{$currentRouteName == "backend.products.index"?"active":" "}}
                                        {{$currentRouteName == "backend.subcategories.edit"?"active":" "}}
                                        {{$currentRouteName == "backend.subcategories.index"?"active":" "}}"
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>Category</span></a>

                                            <ul class="nav-submenu menu-content
                                        {{$currentRouteName == "backend.categories.index"?"active":" "}}
                                        {{$currentRouteName == "backend.products.index"?"active":" "}}
                                        {{$currentRouteName == "backend.subcategories.edit"?"active":" "}}
                                        {{$currentRouteName == "backend.subcategories.index"?"active":" "}}">

                                        <li><a href="{{route('backend.categories.index')}}" class="{{$currentRouteName == "backend.categories.index"?"active":" "}}">All Category</a></li>
                                        <li><a href="{{route('backend.subcategories.index')}}" class="
                                            {{$currentRouteName == "backend.subcategories.index"?"active":" "}}
                                            {{$currentRouteName == "backend.subcategories.edit"?"active":" "}}
                                            ">Sub Category</a></li>
                                    </ul>
                                </li>
                                @endif

                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.pagewidget.index"?"active":" "}}
                                    {{$currentRouteName == "backend.pagewidget.show"?"active":" "}}
                                    {{$currentRouteName == "backend.aboutsection.index"?"active":" "}}
                                    {{$currentRouteName == "backend.aboutsection.create"?"active":" "}}
                                    {{$currentRouteName == "backend.aboutsection.edit"?"active":" "}}"
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>Page Widget</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.pagewidget.index"?"active":" "}}
                                    {{$currentRouteName == "backend.pagewidget.show"?"active":" "}}
                                    {{$currentRouteName == "backend.aboutsection.index"?"active":" "}}
                                    {{$currentRouteName == "backend.aboutsection.create"?"active":" "}}
                                    {{$currentRouteName == "backend.aboutsection.edit"?"active":" "}}
                                    ">
                                        <li><a href="{{route('backend.pagewidget.index')}}" class="
                                            {{$currentRouteName == "backend.pagewidget.index"?"active":" "}}
                                            {{$currentRouteName == "backend.pagewidget.show"?"active":" "}}
                                            ">3 Easy Steps</a></li>
                                        <li><a href="{{route('backend.aboutsection.index')}}" class="
                                            {{$currentRouteName == "backend.aboutsection.index"?"active":" "}}
                                            {{$currentRouteName == "backend.aboutsection.create"?"active":" "}}
                                            {{$currentRouteName == "backend.aboutsection.edit"?"active":" "}}">About Section</a></li>
                                    </ul>
                                </li>

                                @if (Auth::user()->getRoleName->articles != 0)
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.articles.index"?"active":" "}}
                                    {{$currentRouteName == "backend.articles.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.articles.create"?"active":" "}}"
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>Work Article</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.articles.index"?"active":" "}}
                                    {{$currentRouteName == "backend.articles.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.articles.create"?"active":" "}}">
                                        <li><a href="{{route('backend.articles.index')}}" class="{{$currentRouteName == "backend.articles.index"?"active":" "}}">All Articles</a></li>
                                        <li><a href="{{route('backend.articles.create')}}" class="{{$currentRouteName == "backend.articles.create"?"active":" "}}">Create Article</a></li>
                                    </ul>
                                </li>
                                @endif


                                @if (Auth::user()->getRoleName->faq != 0)
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.faq.index"?"active":" "}}
                                    {{$currentRouteName == "backend.faq.create"?"active":" "}}
                                    {{$currentRouteName == "backend.faq.show"?"active":" "}}"
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>FAQ</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.faq.index"?"active":" "}}
                                    {{$currentRouteName == "backend.faq.show"?"active":" "}}
                                    {{$currentRouteName == "backend.faq.create"?"active":" "}}">
                                        <li><a href="{{route('backend.faq.index')}}" class="
                                            {{$currentRouteName == "backend.faq.index"?"active":" "}}
                                            {{$currentRouteName == "backend.faq.show"?"active":" "}}
                                            ">All FAQ</a></li>
                                        <li><a href="{{route('backend.faq.create')}}" class="{{$currentRouteName == "backend.faq.create"?"active":" "}}">Create FAQ</a></li>
                                    </ul>
                                </li>
                                @endif

                                @if (Auth::user()->getRoleName->workprocess != 0)
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.workprocess.index"?"active":" "}}
                                    {{$currentRouteName == "backend.workprocess.create"?"active":" "}}
                                    {{$currentRouteName == "backend.workprocess.show"?"active":" "}}
                                    "
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>Work Process</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.workprocess.index"?"active":" "}}
                                    {{$currentRouteName == "backend.workprocess.show"?"active":" "}}
                                    {{$currentRouteName == "backend.workprocess.create"?"active":" "}}">
                                        <li><a href="{{route('backend.workprocess.index')}}" class="{{$currentRouteName == "backend.workprocess.index"?"active":" "}}">All Work Process</a></li>
                                        <li><a href="{{route('backend.workprocess.create')}}" class="{{$currentRouteName == "backend.workprocess.create"?"active":" "}}">Create Work Process</a></li>
                                    </ul>
                                </li>
                                @endif



                                @if (Auth::user()->getRoleName->mainpage != 0)
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.mainpage.index"?"active":" "}}
                                    {{$currentRouteName == "backend.mainpage.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.mainpage.create"?"active":" "}}"
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>Main Pages</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.mainpage.index"?"active":" "}}
                                    {{$currentRouteName == "backend.mainpage.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.mainpage.create"?"active":" "}}">
                                        <li><a href="{{route('backend.mainpage.index')}}" class="{{$currentRouteName == "backend.mainpage.index"?"active":" "}}">All Pages</a></li>
                                        <li><a href="{{route('backend.mainpage.create')}}" class="{{$currentRouteName == "backend.mainpage.create"?"active":" "}}">Create Page</a></li>
                                    </ul>
                                </li>
                                @endif

                                @if (Auth::user()->getRoleName->gigpage != 0)
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.gigpage.index"?"active":" "}}
                                    {{$currentRouteName == "backend.gigpage.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.gigpage.create"?"active":" "}}"
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>Gigs Page</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.gigpage.index"?"active":" "}}
                                    {{$currentRouteName == "backend.gigpage.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.gigpage.create"?"active":" "}}">
                                        <li><a href="{{route('backend.gigpage.index')}}" class="{{$currentRouteName == "backend.gigpage.index"?"active":" "}}">All Gigs</a></li>
                                        <li><a href="{{route('backend.gigpage.create')}}" class="{{$currentRouteName == "backend.gigpage.create"?"active":" "}}">Create Gigs</a></li>
                                    </ul>
                                </li>
                                @endif

                                {{-- @if (Auth::user()->getRoleName->gigpage != 0)
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.menubuild.index"?"active":" "}}
                                    {{$currentRouteName == "backend.menubuild.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.menubuild.create"?"active":" "}}"
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>Menu Build</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.menubuild.index"?"active":" "}}
                                    {{$currentRouteName == "backend.menubuild.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.menubuild.create"?"active":" "}}">
                                        <li><a href="{{route('backend.menubuild.index')}}" class="{{$currentRouteName == "backend.menubuild.index"?"active":" "}}">All Menu</a></li>
                                        <li><a href="{{route('backend.menubuild.create')}}" class="{{$currentRouteName == "backend.menubuild.create"?"active":" "}}">Create Menu</a></li>
                                    </ul>
                                </li>
                                @endif --}}

                                {{-- @if (Auth::user()->getRoleName->gigpage != 0) --}}
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.country.index"?"active":" "}}
                                    {{$currentRouteName == "backend.city.index"?"active":" "}}
                                    {{$currentRouteName == "backend.leads.index"?"active":" "}}
                                    {{$currentRouteName == "backend.leads.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.leads.create"?"active":" "}}"
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>Lead System</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.country.index"?"active":" "}}
                                    {{$currentRouteName == "backend.city.index"?"active":" "}}
                                    {{$currentRouteName == "backend.leads.index"?"active":" "}}
                                    {{$currentRouteName == "backend.leads.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.leads.create"?"active":" "}}">
                                        <li><a href="{{route('backend.leads.index')}}" class="{{$currentRouteName == "backend.leads.index"?"active":" "}}">All Leads</a></li>
                                        <li><a href="{{route('backend.leads.create')}}" class="{{$currentRouteName == "backend.leads.create"?"active":" "}}">Upload Leads</a></li>
                                        <li><a href="{{route('backend.country.index')}}" class="{{$currentRouteName == "backend.country.index"?"active":" "}}">Country</a></li>
                                        <li><a href="{{route('backend.city.index')}}" class="{{$currentRouteName == "backend.city.index"?"active":" "}}">City</a></li>
                                    </ul>
                                </li>
                                {{-- @endif --}}

                                {{-- @if (Auth::user()->getRoleName->gigpage != 0) --}}
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.testimonial.index"?"active":" "}}
                                    {{$currentRouteName == "backend.testimonial.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.testimonial.create"?"active":" "}}"
                                        href="javascript:void(0)"><i data-feather="airplay"></i><span>Testimonial</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.testimonial.index"?"active":" "}}
                                    {{$currentRouteName == "backend.testimonial.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.testimonial.create"?"active":" "}}">
                                        <li><a href="{{route('backend.testimonial.index')}}" class="{{$currentRouteName == "backend.testimonial.index"?"active":" "}}">All Testimonials</a></li>
                                        <li><a href="{{route('backend.testimonial.create')}}" class="{{$currentRouteName == "backend.testimonial.create"?"active":" "}}">Create Testimonial</a></li>
                                    </ul>
                                </li>
                                {{-- @endif --}}

                                {{-- @if (Auth::user()->getRoleName->gigpage != 0) --}}
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.jobboard.index"?"active":" "}}
                                    {{$currentRouteName == "backend.jobboard.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.jobboard.create"?"active":" "}}"
                                        href="javascript:void(0)"><i data-feather="airplay"></i><span>Job Board</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.jobboard.index"?"active":" "}}
                                    {{$currentRouteName == "backend.jobboard.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.jobboard.create"?"active":" "}}">
                                        <li><a href="{{route('backend.jobboard.index')}}" class="{{$currentRouteName == "backend.jobboard.index"?"active":" "}}">All Job Post</a></li>
                                        <li><a href="{{route('backend.jobboard.create')}}" class="{{$currentRouteName == "backend.jobboard.create"?"active":" "}}">Create Job</a></li>
                                    </ul>
                                </li>
                                {{-- @endif --}}

                                {{-- @if (Auth::user()->getRoleName->gigpage != 0) --}}
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.rules.index"?"active":" "}}
                                    {{$currentRouteName == "backend.rules.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.rules.create"?"active":" "}}"
                                        href="javascript:void(0)"><i data-feather="airplay"></i><span>Rules</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.rules.index"?"active":" "}}
                                    {{$currentRouteName == "backend.rules.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.rules.create"?"active":" "}}">
                                        <li><a href="{{route('backend.rules.index')}}" class="{{$currentRouteName == "backend.rules.index"?"active":" "}}">All Rules</a></li>
                                        <li><a href="{{route('backend.rules.create')}}" class="{{$currentRouteName == "backend.rules.create"?"active":" "}}">Create Rules</a></li>
                                    </ul>
                                </li>
                                {{-- @endif --}}

                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Blog</h6>
                                    </div>
                                </li>

                                {{-- @if (Auth::user()->getRoleName->articles != 0) --}}
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.blog.index"?"active":" "}}
                                    {{$currentRouteName == "backend.blog.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.blog.create"?"active":" "}}"
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>All Blog</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.blog.index"?"active":" "}}
                                    {{$currentRouteName == "backend.blog.edit"?"active":" "}}
                                    {{$currentRouteName == "backend.blog.create"?"active":" "}}">
                                        <li><a href="{{route('backend.blog.index')}}" class="{{$currentRouteName == "backend.blog.index"?"active":" "}}">Blogs List</a></li>
                                        <li><a href="{{route('backend.blog.create')}}" class="{{$currentRouteName == "backend.blog.create"?"active":" "}}">Create Blog</a></li>
                                    </ul>
                                </li>
                                {{-- @endif --}}

                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Management</h6>
                                    </div>
                                </li>

                                @if (Auth::user()->getRoleName->name == 'Admin')
                                <li class="dropdown"><a
                                        class="nav-link menu-title {{$currentRouteName == "backend.role.index"?"active":" "}} {{$currentRouteName == "backend.role.create"?"active":" "}}"
                                        href="javascript:void(0)"><i data-feather="users"></i><span>Role Permission</span></a>
                                    <ul class="nav-submenu menu-content {{$currentRouteName == "backend.role.index"?"active":" "}}">
                                        <li><a class="{{$currentRouteName == "backend.role.index"?"active":" "}}" href="{{route('backend.role.index')}}">All Role</a></li>
                                    </ul>
                                </li>
                                @endif

                                @if (Auth::user()->getRoleName->users != 0)
                                <li class="dropdown"><a
                                        class="nav-link menu-title {{$currentRouteName == "backend.user.index"?"active":" "}} {{$currentRouteName == "backend.user.all"?"active":" "}}"
                                        href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                                    <ul class="nav-submenu menu-content {{$currentRouteName == "backend.user.index"?"active":" "}} {{$currentRouteName == "backend.user.all"?"active":" "}}">
                                        <li><a class="{{$currentRouteName == "backend.user.all"?"active":" "}}" href="{{route('backend.user.all')}}">All Users</a></li>
                                        <li><a class="{{$currentRouteName == "backend.user.index"?"active":" "}}" href="{{route('backend.user.index', Auth::user()->username)}}">Profile</a></li>
                                    </ul>
                                </li>
                                @endif

                                @if (Auth::user()->getRoleName->employee != 0)
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.employee.index"?"active":" "}}
                                    {{$currentRouteName == "backend.salary.index"?"active":" "}}"
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>Employee</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.employee.index"?"active":" "}}
                                    {{$currentRouteName == "backend.salary.index"?"active":" "}}">
                                        <li><a href="{{route('backend.employee.index')}}" class="{{$currentRouteName == "backend.employee.index"?"active":" "}}">All Employees</a></li>
                                        <li><a href="{{route('backend.salary.index')}}" class="{{$currentRouteName == "backend.salary.index"?"active":" "}}">Salary</a></li>
                                    </ul>
                                </li>
                                @endif

                                @if (Auth::user()->getRoleName->attendance != 0)
                                <li class="dropdown"><a class="nav-link menu-title
                                    {{$currentRouteName == "backend.attendance.index"?"active":" "}}
                                    {{-- {{$currentRouteName == "backend.salary.index"?"active":" "}} --}}
                                    "
                                        href="javascript:void(0)"><i
                                            data-feather="airplay"></i><span>Attendances</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.attendance.index"?"active":" "}}
                                    {{-- {{$currentRouteName == "backend.salary.index"?"active":" "}} --}}
                                    ">
                                        <li><a href="{{route('backend.attendance.index')}}" class="{{$currentRouteName == "backend.attendance.index"?"active":" "}}">Sign Attendance</a></li>
                                        {{-- <li><a href="{{route('backend.salary.index')}}" class="{{$currentRouteName == "backend.salary.index"?"active":" "}}">Salary</a></li> --}}
                                    </ul>
                                </li>
                                @endif

                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Settings</h6>
                                    </div>
                                </li>

                                @if (Auth::user()->getRoleName->settings != 0)
                                <li class="dropdown"><a
                                    class="nav-link menu-title
                                    {{$currentRouteName == "backend.settings.index"?"active":" "}}
                                    {{$currentRouteName == "backend.settings.copyright"?"active":" "}}
                                    "
                                    href="javascript:void(0)"><i data-feather="sliders"></i><span>Settings</span></a>
                                    <ul class="nav-submenu menu-content
                                    {{$currentRouteName == "backend.settings.index"?"active":" "}}
                                    {{$currentRouteName == "backend.settings.copyright"?"active":" "}}
                                    ">
                                        <li><a class="{{$currentRouteName == "backend.settings.index"?"active":" "}}" href="{{route('backend.settings.index')}}">General Settings</a></li>
                                        <li><a class="{{$currentRouteName == "backend.settings.copyright"?"active":" "}}" href="{{route('backend.settings.copyright')}}">Copyright</a></li>
                                    </ul>
                                </li>
                                @endif


                                <li>
                                    <a class="nav-link menu-title link-nav" href="#">
                                        <i data-feather="headphones"></i>
                                        <span>Support</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </header>
            <!-- Page Sidebar Ends-->
            <div class="page-body dashboard-2-main">
                <!-- Container-fluid starts-->
                @yield('content')
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright &copy; {{date("Y")}} <a href="{{url('/')}}" target="_blank">{{ config('app.name', 'DiMarz') }}</a>. All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Development By <a target="_blank"
                                    href="https://github.com/rixetbd">Rabiul Islam</a> <i class="fa fa-user-secret font-secondary"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    {{-- <script src="{{asset('assets/backend')}}/js/jquery-3.5.1.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- sweetalert js-->
    <script src="{{asset('assets/backend')}}/js/sweet-alert/sweetalert.min.js"></script>

    <!-- feather icon js-->
    <script src="{{asset('assets/backend')}}/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/backend')}}/js/sidebar-menu.js"></script>
    <script src="{{asset('assets/backend')}}/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/backend')}}/js/bootstrap/popper.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/backend')}}/js/chart/chartjs/chart.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/chart/chartist/chartist.js"></script>
    <script src="{{asset('assets/backend')}}/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="{{asset('assets/backend')}}/js/chart/knob/knob.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/chart/apex-chart/apex-chart.js"></script>
    <script src="{{asset('assets/backend')}}/js/chart/apex-chart/stock-prices.js"></script>
    <script src="{{asset('assets/backend')}}/js/prism/prism.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/clipboard/clipboard.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/counter/jquery.waypoints.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/counter/jquery.counterup.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/counter/counter-custom.js"></script>
    <script src="{{asset('assets/backend')}}/js/custom-card/custom-card.js"></script>
    <script src="{{asset('assets/backend')}}/js/owlcarousel/owl.carousel.js"></script>
    <script src="{{asset('assets/backend')}}/js/owlcarousel/owl-custom.js"></script>
    <script src="{{asset('assets/backend')}}/js/dashboard/dashboard_2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/backend')}}/js/script.js"></script>
    {{-- <script src="{{asset('assets/backend')}}/js/theme-customizer/customizer.js"></script> --}}
    <!-- login js-->
    <!-- Plugin used-->
    <script>
        var notyf = new Notyf();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>

    <script>
        // auth_user
        function autoauth(){
            $.ajax({
                type: "POST",
                url: `{{route('backend.user.autoauth')}}`,
                data: {
                    id: 'id',
                },
                success: function (data) {
                    let img_src = `{{url('/')}}/application/uploads/users/${data.src}`; // application/uploads/users/
                    $('#auth_user').attr('src', img_src);
                    console.log('Update Picture');
                },
                error: function (request, status, error) {
                    notyf.error(request.responseJSON.message);
                }
            });
        };

    </script>

    @yield('custom_script')
</body>

</html>
