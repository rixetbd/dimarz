@extends('backend.master')

@section('page_title', 'Dashboard')

@section('content')

<div class="container-fluid">
    <div class="row">
        {{-- <div class="col-xl-6 col-md-6 des-xl-100 box-col-12">
            <div class="row">
                <div class="col-xl-4 col-sm-6 box-col-3 chart_data_right">
                    <div class="card income-card card-secondary">
                        <div class="card-body align-items-center">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="10" data-height="70"
                                        data-thickness=".3" data-angleoffset="0" data-linecap="round"
                                        data-fgcolor="#ba895d" data-bgcolor="#e0e9ea" value="60">
                                </div>
                                <h5>$9,84,235</h5>
                                <p>Our Annual Income</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 box-col-3 chart_data_right second">
                    <div class="card income-card card-primary">
                        <div class="card-body">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="50" data-height="70"
                                        data-thickness=".3" data-fgcolor="#24695c" data-linecap="round"
                                        data-angleoffset="0" value="60">
                                </div>
                                <h5>$4,55,462</h5>
                                <p>Our Annual Income</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 box-col-3 chart_data_right second">
                    <div class="card income-card card-primary">
                        <div class="card-body">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="50" data-height="70"
                                        data-thickness=".3" data-fgcolor="#24695c" data-linecap="round"
                                        data-angleoffset="0" value="60">
                                </div>
                                <h5>$4,55,462</h5>
                                <p>Our Annual Income</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 box-col-6 top-sell-sec">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div
                                class="header-top d-sm-flex justify-content-between align-items-center">
                                <h5>Top Selling Product</h5>
                                <div class="center-content">
                                    <ul class="week-date">
                                        <li class="font-primary">Today</li>
                                        <li>Month</li>
                                    </ul>
                                </div>
                                <div class="setting-list">
                                    <ul class="list-unstyled setting-option">
                                        <li>
                                            <div class="setting-primary"><i class="icon-settings"></i>
                                            </div>
                                        </li>
                                        <li><i class="view-html fa fa-code font-primary"></i></li>
                                        <li><i
                                                class="icofont icofont-maximize full-card font-primary"></i>
                                        </li>
                                        <li><i
                                                class="icofont icofont-minus minimize-card font-primary"></i>
                                        </li>
                                        <li><i
                                                class="icofont icofont-refresh reload-card font-primary"></i>
                                        </li>
                                        <li><i
                                                class="icofont icofont-error close-card font-primary"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="media"><img class="img-fluid"
                                    src="{{asset('assets/backend')}}/images/dashboard-2/9.png" alt="">
        <div class="media-body"><a href="product-page.html">
                <h6>Trending Nike shoes</h6>
            </a>
            <p>New Offer Only $126.00</p>
            <ul class="rating-star">
                <li> <i class="fa fa-star"></i></li>
                <li> <i class="fa fa-star"></i></li>
                <li> <i class="fa fa-star"></i></li>
                <li> <i class="fa fa-star"></i></li>
                <li> <i class="fa fa-star"></i></li>
            </ul>
        </div><a class="btn btn-iconsolid" href="cart.html"><i class="icon-bag"></i></a>
    </div>
    <div class="code-box-copy">
        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#top-selling-product" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
    </div>
</div>
</div>
</div>
</div>
</div> --}}
<div class="col-xl-12 box-col-12 des-xl-100 top-dealer-sec">
    <div class="card">
        <div class="card-header pb-0">
            <div class="header-top d-sm-flex justify-content-between align-items-center">
                <h5>All Users</h5>
                {{-- <div class="center-content">
                            <p class="d-sm-flex align-items-center"><span class="m-r-10">845
                                    Dealer</span><i
                                    class="toprightarrow-primary fa fa-arrow-up m-r-10"></i>86% More
                                Than Last Year</p>
                        </div>
                        <div class="setting-list">
                            <ul class="list-unstyled setting-option">
                                <li>
                                    <div class="setting-primary"><i class="icon-settings"></i></div>
                                </li>
                                <li><i class="view-html fa fa-code font-primary"></i></li>
                                <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                <li><i class="icofont icofont-minus minimize-card font-primary"></i>
                                </li>
                                <li><i class="icofont icofont-refresh reload-card font-primary"></i>
                                </li>
                                <li><i class="icofont icofont-error close-card font-primary"> </i></li>
                            </ul>
                        </div> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="owl-carousel owl-theme" id="owl-carousel-14">
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel-16 owl-carousel owl-theme">
                                @forelse ($users as $item)
                                <div class="item">
                                    <div class="card">
                                        <div class="top-dealerbox text-center"><img class="card-img-top"
                                                src="{{asset('application/uploads/users')}}/{{($item->avatar != ''?$item->avatar:'default.png')}}"
                                                alt="...">
                                            <h6>{{$item->name}}</h6>
                                            <p>{{$item->getRoleName->name}}</p><a class="btn btn-rounded"
                                                href="{{route('backend.user.index', $item->username)}}">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>

@endsection

@section('custom_script')

<script type="text/javascript">
    // var Tawk_API = Tawk_API || {},
    //     Tawk_LoadStart = new Date();
    // (function () {
    //     var s1 = document.createElement("script"),
    //         s0 = document.getElementsByTagName("script")[0];
    //     s1.async = true;
    //     s1.src = 'https://embed.tawk.to/63fdc7c131ebfa0fe7efc042/1gqbl8ji4';
    //     s1.charset = 'UTF-8';
    //     s1.setAttribute('crossorigin', '*');
    //     s0.parentNode.insertBefore(s1, s0);
    // })();
</script>
@endsection
