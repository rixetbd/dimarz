@extends('frontend.master')


@section('meta_tag')
@if(array_key_exists('meta_info', $data))
@include('meta::manager',[
'title' => $data['title'] .' | '. config('app.name', 'DiMarz'),
'author' => $data['meta_info']->meta_author,
'description' => $data['meta_info']->meta_description,
'keywords' => $data['meta_info']->meta_keywords,
'image' => asset('/application/uploads/meta/'.$data['meta_info']->meta_thumbnail),
])
@endif
@endsection

@section('custom_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<style>
    .overview_info_area ul li::before,
    #why_us_area ul li::before{
        content: "\274F";
        font-size: 20px;
        color: #5a80a0;
        padding-right: 10px;
    }
    .releted_card_box h1,
    .releted_card_box h2,
    .releted_card_box h3,
    .releted_card_box h4{
        font-size: 18px;
    }
</style>
@endsection


@section('content')


<section id="top_focus">
    <section id="header_top" class="single_service_page" style="padding-top: 5rem !important;">
        <div class="special_text_box">
            <h2 class="special_text text-center text-white">{{$data['title']}}</h2>
            <h3 class="text-center floating_text text-white">Services</h3>
            <h3 class="gig_focus_title">{{$data['sub_title']}}</h3>
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
    @if(array_key_exists('easy_steps', $data))
    <section id="working_process" class="page_part_offset" data-sectionname="Our Working Process"
        data-sectionnameindex="1">
        <div class="row">
            @foreach ($data['easy_steps'] as $item)
            <div class="col-sm-12 col-md-3 d-flex justify-content-center my-2">
                <div class="content_box gig_page">
                    <div class="w-100 px-1">
                        <img class="gig_page" src="{{asset('application/uploads/stepsdata/'.$item->picture)}}" alt="">
                        @if ($item->text != '')
                            <h4>{{$item->text}}</h4>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif

    @if(array_key_exists('similer_gigpage', $data))
    <section class="padding_40 clickable_links_area">
        <div class="p-4 service_need_list">
            <h5 class="text-white">You may need</h5>
            <div class="d-flex auto_height">
                @foreach ($data['similer_gigpage'] as $item)
                    <a href="{{route('frontend.gigpage', $item['slug'])}}">{{$item['title']}}</a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <div class="gigs_section py-5" style="background-color: #f9f9f9;">
        <div class="py-2">
            <div class="focus_line_after_title text_dark_theme bg_f9">
                <h4>{{$data['overview_title']}}</h4>
            </div>
        </div>

        <div class="py-2 overview_info_area">
            {!! $data['overview_info'] !!}
        </div>
    </div>

    @if(array_key_exists('pricing', $data))
    <!-- Pricing Card || Set 01 || Start -->
    <div class="gigs_pricing_card_area" style="background-color: #f9f9f9;">
        <div class=" pb-3">
            <!-- <h4 class="text-center focus_tilte_with_line" style="color: #4a4a4a;">CHOOSE THE PACKAGE
                THAT’S RIGHT FOR YOU</h4> -->

            <div class="focus_line_after_title text_dark_theme bg_f9">
                <h4>{{$data['pricing']['title']}}</h4>
            </div>

            <p class="text-center">{{$data['pricing']['subtitle']}}</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 py-2  vh_150px">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <!-- <img src="img/Untitled-2-02.png" alt=""> -->
                            <h4>{{$data['pricing']['pack_one']->pricing_name}}</h4>
                        </div>
                        <div class="content_box gig_page">
                            <div class="text-center discount_info">
                                <p class="pt-3"><sup>$</sup><span id="ser_pack_price">{{$data['pricing']['pack_one']->pricing_price}}</span><sub>US</sub></p>
                                <!-- <p id="ser_pack_title">For 5 Pages</p>
                                <p class="yellow_color">Days Delivery : <span id="ser_pack_duration">30</span></p> -->
                            </div>
                            <div class="ser_date">
                                <p>{{$data['pricing']['pack_one']->pricing_duration}}</p>
                            </div>
                            <p>{{$data['pricing']['pack_one']->pricing_shortinfo}}</p>

                            <!-- <hr> -->
                            <ul class="li_space features">
                                @foreach ($data['features'] as $item)
                                    <li><i class="fas fa-check {{($item['one'] != 0?'active':'')}}"></i> {{$item['title']}}</li>
                                @endforeach
                            </ul>

                            <hr>
                            <ul class="li_space">
                                <li><i class="fas fa-check"></i> Email Support</li>
                                <li><i class="fas fa-check"></i> Content Strategy Planning</li>
                            </ul>
                        </div>
                        <div class="footer_box">
                            <a href="{{$data['pricing']['pack_one']->pricing_name}}" class="btn btn-sm button_slider_effect"><span>Get
                                    Started</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 py-2 vh_150px">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <!-- <img src="img/Untitled-2-02.png" alt=""> -->
                            <h4>{{$data['pricing']['pack_two']->pricing_name}}</h4>
                        </div>
                        <div class="content_box gig_page">
                            <div class="text-center discount_info">
                                <p class="pt-3"><sup>$</sup><span id="ser_pack_price">{{$data['pricing']['pack_two']->pricing_price}}</span><sub>US</sub></p>
                                <!-- <p id="ser_pack_title">For 5 Pages</p>
                                <p class="yellow_color">Days Delivery : <span id="ser_pack_duration">30</span></p> -->
                            </div>
                            <div class="ser_date">
                                <p>{{$data['pricing']['pack_two']->pricing_duration}}</p>
                            </div>
                            <p>{{$data['pricing']['pack_two']->pricing_shortinfo}}</p>

                            <!-- <hr> -->
                            <ul class="li_space features">
                                @foreach ($data['features'] as $item)
                                    <li><i class="fas fa-check {{($item['two'] != 0?'active':'')}}"></i> {{$item['title']}}</li>
                                @endforeach
                            </ul>

                            <hr>
                            <ul class="li_space">
                                <li><i class="fas fa-check"></i> Email Support</li>
                                <li><i class="fas fa-check"></i> Content Strategy Planning</li>
                            </ul>
                        </div>
                        <div class="footer_box">
                            <a href="#" class="btn btn-sm button_slider_effect"><span>Get
                                    Started</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 py-2  vh_150px">
                <div class="glow-on-hover">
                    <div class="home_service_box">
                        <div class="img_box">
                            <!-- <img src="img/Untitled-2-02.png" alt=""> -->
                            <h4>{{$data['pricing']['pack_three']->pricing_name}}</h4>
                        </div>
                        <div class="content_box gig_page">
                            <div class="text-center discount_info">
                                <p class="pt-3"><sup>$</sup><span id="ser_pack_price">{{$data['pricing']['pack_three']->pricing_price}}</span><sub>US</sub></p>
                                <!-- <p id="ser_pack_title">For 5 Pages</p>
                                <p class="yellow_color">Days Delivery : <span id="ser_pack_duration">30</span></p> -->
                            </div>
                            <div class="ser_date">
                                <p>{{$data['pricing']['pack_three']->pricing_duration}}</p>
                            </div>
                            <p>{{$data['pricing']['pack_three']->pricing_shortinfo}}</p>

                            <!-- <hr> -->
                            <ul class="li_space features">
                                @foreach ($data['features'] as $item)
                                    <li><i class="fas fa-check {{($item['three'] != 0?'active':'')}}"></i> {{$item['title']}}</li>
                                @endforeach
                            </ul>

                            <hr>
                            <ul class="li_space">
                                <li><i class="fas fa-check"></i> Email Support</li>
                                <li><i class="fas fa-check"></i> Content Strategy Planning</li>
                            </ul>
                        </div>
                        <div class="footer_box">
                            <a href="#" class="btn btn-sm button_slider_effect"><span>Get
                                    Started</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 row m-0">
                <div class="col-sm-12 col-md-8 pt-3">
                    <h6>Included in all premium plans:</h6>
                    <p>24/7 Support | Video Meeting | Dedicated Manager | Thorough Consultation</p>
                </div>

                <div class="col-sm-12 col-md-4 text-end">
                    <a class="link_compare" href="#compare_packages_section"><i class="fas fa-list-ul"></i> Compare Package</a>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="gigs_section" style="padding-bottom: 5rem;background-color: #f9f9f9;" id="why_us_area">
        {!! $data['why_us'] !!}
    </div>

    @if(array_key_exists('faq_title', $data) && $data['faq_title'] != '')
    <section class="page_part_offset p-0 pt-3" data-sectionname="FAQ" data-sectionnameindex="3"
        style="background: #5a80a0;">
        <div style="background-color: #ffffff;" class="padding_40 py-5">
            <div class="focus_line_after_title text_dark_theme bg_white">
                <h4>{{$data['faq_title']->title}}</h4>
            </div>
            <p class="text-center" style="font-size: 25px;">{{$data['faq_title']->subtitle}}</p>
            <div class="row py-5">
                <div class="col-sm-12 col-md-12">
                    <div class="accordion accordion-flush" id="accordionFlushFAQ">

                        @forelse ($data['faq_data'] as $key=>$item)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="FAQflush-heading{{$key}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#FAQflush-collapse{{$key}}" aria-expanded="false"
                                    aria-controls="FAQflush-collapse{{$key}}">
                                    {{$item->question}}
                                </button>
                            </h2>
                            <div id="FAQflush-collapse{{$key}}" class="accordion-collapse collapse"
                                aria-labelledby="FAQflush-heading{{$key}}" data-bs-parent="#accordionFlushFAQ">
                                <div class="accordion-body">{{$item->answer}}</div>
                            </div>
                        </div>
                        @empty
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="FAQflush-heading0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#FAQflush-collapse0" aria-expanded="false"
                                    aria-controls="FAQflush-collapse0">
                                    No information added yet, please add questions first then answer.
                                </button>
                            </h2>
                            <div id="FAQflush-collapse0" class="accordion-collapse collapse"
                                aria-labelledby="FAQflush-heading0" data-bs-parent="#accordionFlushFAQ">
                                <div class="accordion-body">Give The Answer</div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(array_key_exists('working_process', $data))
    <section class="padding_40 py-5" style="background-color: #47657e;">
        <div>
            <div class="focus_line_after_title text-white bg_dark_theme">
                <h4>{{$data['working_process']->title}}</h4>
            </div>
            <p class="text-center" style="font-size: 25px;color: #9cb7cd !important;">
                {{$data['working_process']->subtitle}}</p>
        </div>
        @forelse ($data['working_process_data'] as $key=>$item)
        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">{{$key+1}}</div>
            <div class="working_process_right_card_two">
                <h5>{{$item->heading}}</h5>
                <p>{{$item->description}}</p>
            </div>
        </div>
        @empty

        @endforelse
    </section>
    @endif

    @if(array_key_exists('pricing', $data))
    <div class="gigs_section" id="compare_packages_section">
        <h4>Find the features you need</h4>
        <table class="table table-bordered pt-2">
            <tbody id="compare_packages_table">
                <tr style="border: none;">
                    <td class="text-left" style="border: none;width: 31%;"></td>
                    <td class="text-center" style="border: 1px solid #ddd;width: 23%;">
                        <h3>{{$data['pricing']['pack_one']->pricing_name}}</h3>
                    </td>
                    <td class="text-center" style="border: 1px solid #ddd;width: 23%;">
                        <h3>{{$data['pricing']['pack_two']->pricing_name}}</h3>
                    </td>
                    <td class="text-center" style="border: 1px solid #ddd;width: 23%;">
                        <h3>{{$data['pricing']['pack_three']->pricing_name}}</h3>
                    </td>
                </tr>
                <tr style="background-color: #5a80a0;color: #fff;">
                    <td class="text-left">Packages</td>
                    <td class="text-center" id="price_pack_0">US $ {{$data['pricing']['pack_one']->pricing_price}}</td>
                    <td class="text-center" id="price_pack_1">US $ {{$data['pricing']['pack_two']->pricing_price}}</td>
                    <td class="text-center" id="price_pack_2">US $ {{$data['pricing']['pack_three']->pricing_price}}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td id="packages_description_01">{{$data['pricing']['pack_one']->pricing_shortinfo}}</td>
                    <td id="packages_description_02">{{$data['pricing']['pack_two']->pricing_shortinfo}}</td>
                    <td id="packages_description_03">{{$data['pricing']['pack_three']->pricing_shortinfo}}</td>
                </tr>
                @foreach ($data['features'] as $item)
                    {{-- <li><i class="fas fa-check {{($item['one'] != 0?'active':'')}}"></i> {{$item['title']}}</li> --}}
                    <tr>
                        <td class="text-left">{{$item['title']}}</td>
                        <td class="text-center">
                            <i class="fas fa-check {{($item['one'] != 0?'text-success':'')}}"></i>
                        </td>
                        <td class="text-center">
                            <i class="fas fa-check {{($item['two'] != 0?'text-success':'')}}"></i>
                        </td>
                        <td class="text-center">
                            <i class="fas fa-check  {{($item['three'] != 0?'text-success':'')}}"></i>
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <td class="text-left">Delivery Time</td>
                    <td class="text-center" id="delivery_time_0">{{$data['pricing']['pack_one']->pricing_duration}}</td>
                    <td class="text-center" id="delivery_time_1">{{$data['pricing']['pack_two']->pricing_duration}}</td>
                    <td class="text-center" id="delivery_time_2">{{$data['pricing']['pack_three']->pricing_duration}}</td>
                </tr>

                <tr>
                    <td class="text-left" colspan="4">Support</td>
                </tr>
                <tr>
                    <td class="text-left">Email Support</td>
                    <td class="text-center" id="price_pack_0">No</td>
                    <td class="text-center" id="price_pack_1">Yes</td>
                    <td class="text-center" id="price_pack_2">Yes</td>
                </tr>

                <tr>
                    <td class="text-left">Choose Your Package</td>
                    <td class="text-center"><a href="#" class="btn btn-sm btn_theme"
                            id="confirm_order_btn_pack_0">Select
                            Package</a></td>
                    <td class="text-center"><a href="#" class="btn btn-sm btn_theme"
                            id="confirm_order_btn_pack_1">Select
                            Package</a></td>
                    <td class="text-center"><a href="#" class="btn btn-sm btn_theme"
                            id="confirm_order_btn_pack_2">Select
                            Package</a></td>
                </tr>

            </tbody>
        </table>
        <p>* Need customized services! Don’t Worry! Create a custom price for a service that is specific
            to
            your budget. You can change the price of your desired service depending on how much you need
            or want. Place
            a custom order with us and get an amazing customized offer!</p>
        <p>In that case,</p>
        <ul class="square_color">
            <li><i class="fas fa-square"></i> Go to Contact Us</li>
            <li><i class="fas fa-square"></i> Tell us your industry/service</li>
            <li><i class="fas fa-square"></i> Fill up the contact form. Please put authentic and real
                information because we will
                contact you through
                this.</li>
            <li><i class="fas fa-square"></i> Now in the message section, suggest your customized
                pricing &amp; details</li>
            <li><i class="fas fa-square"></i> Click send &amp; your work is done!</li>
        </ul>

        <p>One of our professionals will contact you through your mail or contact details you have
            provided. We will
            contact with you as soon as possible.</p>
    </div>
    @endif



    @if(array_key_exists('similer_gigpage', $data))
    <div style="background-color: #5a80a0;height:50px;"></div>
    <section class="padding_40 pt-2" id="releted_card_area">
        <div>
            <div class="focus_line_after_title text-white bg_theme">
                <h4>Related Services</h4>
            </div>

            <p class="text-center text-white">You can see more services provided by us, which will be
                effective in expanding your business.</p>
        </div>
        <div class="overflow_scroll">

            @foreach ($data['similer_gigpage'] as $item)
            <div class="releted_card_box">
                <div>
                    <h6>{{$item['mainpage_id']}}</h6>
                    <h3><a href="{{route('frontend.gigpage', $item['slug'])}}">{{$item['title']}}</a></h3>
                    {!! Str::limit($item['short_description'], 300, '...') !!}
                </div>
                <div>
                    <a class="page_link" href="{{route('frontend.gigpage', $item['slug'])}}">Check Now</a>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    @endif

</section>

@endsection

@section('custom_js')

@endsection
