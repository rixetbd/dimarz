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
                        <span class="text-1000 fs-3 ms-2 fw-medium"><span
                                class="fw-bold">DiMarz</span></span></a><button class="navbar-toggler collapsed"
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
            <section class="pb-6">
                <div class="container">
                    <div class="row flex-center">
                        <div class="col-lg-6 col-md-5 order-md-1"><img class="img-fluid"
                                src="{{asset('assets/frontend/img/upwork/header-vector.png')}}" alt="" /></div>
                        <div class="col-md-7 col-lg-6 mt-5 text-center text-md-start">
                            <h1 class="fw-medium">Get Qualified Leads<br />with <span class="fw-bold">Dimarz.</span>
                            </h1>
                            <p class="mt-3 mb-4">
                                The most important part of any marketing policy is generating qualified leads. Our Lead
                                generation Specialists work with you to fill your sales pipeline with quality leads. We
                                Build a structure and implement a lead generation strategy built upon marketing
                                mechanization, which will bring more qualified leads to your business. So, let DiMarz
                                help you out with your B2B lead generation.
                            </p>

                            {{-- <a class="btn btn-lg btn-upwork btn-glow" href="#">Get Started </a> --}}
                            <form action="">
                                <div class="search_area">
                                    <input type="text" class="form-control" placeholder="Search for leads...">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                            <div class="d-flex py-2 search_area_badge">
                                <div class="pe-2">Popular : </div>
                                <div>
                                    <span>Real Estate</span>
                                    <span>Law Firm</span>
                                    <span>Dental</span>
                                    <span>E-Commerce</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- ============================================-->



            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pb-4 pt-2">
                <div class="container">
                    <div class="card py-2 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="border-end d-flex justify-content-md-center">
                                        <div class="mx-2 mx-md-0 me-md-5">
                                            <div class="badge badge-circle bg-soft-danger">
                                                <svg class="bi bi-person-fill" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="#F53838" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="fw-bolder text-1000 mb-0">52K+ </p>
                                            <p class="mb-0">Leads </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border-end d-flex justify-content-md-center">
                                        <div class="mx-2 mx-md-0 me-md-5">
                                            <div class="badge badge-circle bg-soft-danger">
                                                <svg class="bi bi-geo-alt-fill" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="#F53838" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="fw-bolder text-1000 mb-0">07+ </p>
                                            <p class="mb-0">Country </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-md-center">
                                        <div class="mx-2 mx-md-0 me-md-5">
                                            <div class="badge badge-circle bg-soft-danger">
                                                <svg class="bi bi-hdd-stack-fill" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="#F53838" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="fw-bolder text-1000 mb-0">42+ </p>
                                            <p class="mb-0">Industry </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of .container-->
            </section><!-- <section> close ============================-->
            <!-- ============================================-->


            <!-- ============================================-->
            <!-- <Table Section> begin ============================-->

            <section>
                <div class="container">
                    <div class="row py-4">
                        <div class="col-sm-12 col-md-3">
                            <div class="ui fluid search selection dropdown" id="country_Name">
                                <input type="hidden" name="country">
                                <i class="dropdown icon"></i>
                                <div class="default text">Select Country</div>
                                <div class="menu">
                                    <div class="item" data-value="af"><i class="af flag"></i>Afghanistan</div>
                                    <div class="item" data-value="ax"><i class="ax flag"></i>Aland Islands</div>
                                    <div class="item" data-value="ve"><i class="ve flag"></i>Venezuela</div>
                                    <div class="item" data-value="vn"><i class="vn flag"></i>Vietnam</div>
                                    <div class="item" data-value="wf"><i class="wf flag"></i>Wallis and Futuna</div>
                                    <div class="item" data-value="eh"><i class="eh flag"></i>Western Sahara</div>
                                    <div class="item" data-value="ye"><i class="ye flag"></i>Yemen</div>
                                    <div class="item" data-value="zm"><i class="zm flag"></i>Zambia</div>
                                    <div class="item" data-value="zw"><i class="zw flag"></i>Zimbabwe</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <select class="ui fluid search dropdown" id="city_Name">
                                <option value="">State</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <select class="ui fluid search dropdown" id="industry_Name">
                                <option value="">State</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <table class="unselectable ui celled table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>Name</td>
                                    <td>Name</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- <Table Section> close ============================-->
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
        <script src="{{asset('assets/frontend')}}/js/upwork/theme.js"></script>

        <script>
            $('#country_Name').dropdown({
                forceSelection: false
            });
            $('#city_Name').dropdown({
                forceSelection: false
            });
            $('#industry_Name').dropdown({
                forceSelection: false
            });

        </script>
    </body>

</html>
