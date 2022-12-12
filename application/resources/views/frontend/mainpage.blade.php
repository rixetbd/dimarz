@extends('frontend.master')


@section('meta_tag')
@if(array_key_exists('meta_info', $data))
@include('meta::manager',[
    'title' => $data['meta_info']->meta_title,
    'author' => $data['meta_info']->meta_author,
    'description' => $data['meta_info']->meta_description,
    'keywords' => $data['meta_info']->meta_keywords,
    'image' => asset('/application/uploads/meta/'.$data['meta_info']->meta_thumbnail),
    ])
@endif
@endsection


@section('custom_css')
<link href="{{asset('assets/frontend')}}/css/mainpage_page.css" rel="stylesheet">
<style>
    .leads_data_table {
        white-space: nowrap;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
    }

    .font_poppins {
        font-family: 'Poppins', sans-serif;
    }

    .filter_btn .btn_city {
        display: inline-block;
        justify-content: space-between;
        align-items: center;
        /* box-shadow: 0 0 10px 0 #ddd; */
        border-radius: 2px !important;
        /* border: 1px solid #dbdbdb !important; */
        border: none;
        padding: 5px 10px !important;
        font-size: 14px;
        width: 175px;
        background: #f8f8f8;
        transition: all 0.3s ease 0s;
        text-align: left;
    }

    .btn_city input[type="checkbox"] {
        margin-top: 4px;
        float: right;
        transform: scale(1.2);
    }

    .leads_data_table th {
        background-color: #5a80a0 !important;
        color: #fff;
        font-size: 14px;
        font-weight: 400;
        letter-spacing: 1px;
        border: 1px solid #0000004d;
        border-right: 1px solid #cbdaec;
    }

    .leads_data_table th:last-child {
        border-right: 1px solid #0000004d;
    }

    .leads_data_table td {
        border: 1px solid #0000004d;
    }

    .bg_theme {
        color: #fff;
        background-color: #47657e !important;
    }
    .service_article ul{
        padding-left: 1rem !important;
    }
</style>
@endsection

@section('content')
<section id="top_focus">

    <section id="header_top" class="single_service_page">
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
    @if(array_key_exists('meta_info', $data))
    @if (count($data['related_service']) != 0)

    <section class="padding_40 clickable_links_area">
        <div class="p-4 service_need_list">
            <h5 class="text-white">You may need</h5>
            <div class="d-flex auto_height">
                @forelse ($data['related_service'] as $item)
                <a href="{{route('frontend.mainpage', $item->slug)}}">{{$item->page_title}}</a>
                @empty

                @endforelse
            </div>
        </div>
    </section>
    @endif
    @endif

    <div class="line_breaker">
        <div class="line"></div>
        <!-- <div class="icon_box">
                            <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
                        </div> -->
    </div>


    <section class="page_part_offset py-5 padding_40" style="background: #fff;">
        <div class="row">
            <h4 class="super_heading_text"><span>Lead</span> <span>Generation</span></h4>
            <hr>
            <div class="col-sm-12 col-md-6">
                <h5 class="py-2" style="font-size: 24px;color: #484a7d;">Top-Notch Lead Generation
                    Services by DiMarz</h5>
                <!-- <h2 class="py-2" style="font-size: 30px;color: #484a7d;">What is Lead Generation, and How Does it Work ?</h2> -->

                <!-- <p class="m-0 text-center text-white">Dimarz can provide you with the service you
                                        require and demand for your Business. With our experienced and qualified
                                        professional team members, you'll be able to find the perfect services for your
                                        needs.</p> -->

                <p class="">Lead generation is a process of searching for people who are probably
                    interested in your service and getting in contact with them to communicate
                    further and convert . Repeat and Regular paying customers are every business’s
                    sweetest dream. You aren’t in business until then you find and retain paying
                    customers. However, achieving this dream isn’t a piece of cake in the park of
                    other million businesses. Thousands of businesses also compete for your target
                    customers.
                    So, how do you get a competitive edge? Do you have any magic lamp to assist you
                    in prospecting and turning prospects into paying customers?</p>
                <p class="">Thankfully, DiMarz is here to generate millions $$$ in revenue through
                    our magic tools, personalized email generator, and dedicated lead generation
                    specialist team.</p>

                <h2 style="font-size: 24px;color: #484a7d;">Generate Leads With Professionals</h2>
                <p class="">Lead Generation is our specialty, but it starts with your Discussion. We
                    take your unique business idea and understand your needs. We tailor a marketing
                    strategy with our lead generation services so that you get the most effective
                    return.
                    We provide you the best service on time, within the budget you allocate. We
                    serve:</p>
                <ul class="">
                    <li>B2B Lead generation</li>
                    <li>B2C lead generation</li>
                    <li>Product base lead generation</li>
                    <li>Service base lead generation</li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6">
                <div style="border-left: 1px solid #fdba13;padding-left: 20px;">

                    <h5 class="py-2" style="font-size: 24px;color: #484a7d;">Industries We Serve
                    </h5>

                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">We are Covering</h3>
                        <h4 class="in_sub_title"><span class="in_title">Many Industries
                                Globally</span>
                        </h4>
                    </div>

                    <p class="text-justify" style="opacity: 70%;font-style: italic;">Your main goal
                        should be to make sure that your <br>
                        <span id="industry_name">Software Industry</span>, <br>is easier to
                        navigate
                        and
                        more attractive from your biggest competitors. We believe that you are
                        ready
                        to
                        get services for your industry, Dimarz can help you on your most
                        demanding
                        services such as Website Design & Development, Digital Marketing,
                        Graphics
                        Designing, Data Entry and so on.</p>

                    <p class="text-justify" style="opacity: 70%;font-style: italic;">As a tech team,
                        DiMarz strives to deliver the
                        quality
                        that
                        will help our clients expand their ventures. With our VPO strategy,
                        which
                        stands
                        for Visualize, Process and Outcome we can give your project the best
                        possible
                        results. We visualize and understand the needs our clients want to
                        achieve.
                        Then
                        we process that visualization to bring out the best possible outcome.
                    </p>

                    <div class="icons_area_sec">
                        <!-- <h4 class="text-center">Are your needs match with us ?</h4> -->
                        <!-- Floating Logo || Start -->
                        <div class="icons">
                            <div class="icon-container icons-1">
                                <div class="icon"> <img src="" alt=""> Software</div>
                            </div>

                            <div class="icon-container icons-2">
                                <div class="icon">Legal</div>
                            </div>

                            <div class="icon-container icons-3">
                                <div class="icon">eCommerce</div>
                            </div>

                            <div class="icon-container icons-4">
                                <div class="icon">
                                    Healthcare </div>
                            </div>
                            <div class="icon-container icons-5">
                                <div class="icon">Real Estate</div>
                            </div>

                            <div class="icon-container icons-6">
                                <div class="icon">Legal</div>
                            </div>

                            <div class="icon-container icons-7">
                                <div class="icon">eCommerce</div>
                            </div>

                            <div class="icon-container icons-8">
                                <div class="icon">
                                    Healthcare </div>
                            </div>
                        </div>
                        <!-- Floating Logo || End -->
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="page_part_offset f_poppin py-5 padding_40" style="background: #47657e;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-sm-12 col-md-8">
                <h4 class="text-center text-white" style="font-size: 40px;">Find your right service
                    below</h4>
            </div>
        </div>
    </section>

    {{-- gigs_list --}}
    @if(array_key_exists('gigs_list', $data))
    @forelse ($data['gigs_list'] as $item)
    <section class="single_part service_card_section overflow-hidden service_card_offset">
        <div class="row align-items-center">
            <div class="s_card">
                <div class="row">
                    <div class="p-0 rotate_box_main" style="background-color: #1b3348;">
                        <div class="rotate_box">
                            <div class="w-100">
                                <h6>Service</h6>
                                <hr>
                                <h5>{{$data['category_id']}}</h5>
                                <hr>
                                <h5 class="sub_category">{{$data['title']}}</h5>
                                <hr>
                                <h4 class="m-0 p-0 underlined underlined--gradient">{{$item->title}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="s_card_content">
                        <div>
                            <h3>{{$item->title}}</h3>

                            {!! $item->short_description !!}
                            <div class="s_card_absolute_2">
                                <a class="btn" href="{{route('frontend.gigpage', $item->slug)}}" style="font-size: 14px;"><span class="text_1">You can
                                        discover everything for your needs</span><span class="text_2">Visit Page <i
                                            class="fas fa-arrow-right"></i></span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="line_breaker">
        <div class="line"></div>
        <!-- <div class="icon_box">
                            <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
                            <div class="arrow-1 animated hinge infinite zoomIn"></div>
                        </div> -->
    </div>
    @empty

    @endforelse
    @endif


{{--
    <section class="padding_40">
        <div class="lead_data_table">

            <div class="focus_line_after_title text_dark_theme bg_white pt-5">
                <h4>Sample Of Leads Table</h4>
            </div>
            <p class="text-center">You can customize your needs as you seen below demo.</p>


        </div>
    </section>


    <section class="padding_40 pb-5">
        <!-- <div class="pb-3">
                                <div class="row justify-content-between align-items-end pt-4">
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <h4 style="font-size:25px;text-transform:uppercase;">Search Specific Leads</h4>
                                        <div class="col-12 search_div" id="country_Name_Box">
                                            <input type="hidden" id="country_Name_catch">
                                            <label for="" class="w-100" style="text-transform:uppercase;">Country Name
                                            </label>
                                            <div class="ui fluid search selection dropdown" id="country_Name">
                                                <input type="hidden" name="country" id="country_Name_Input">
                                                <i class="dropdown icon"></i>
                                                <div class="default text">Search Country</div>
                                                <div class="menu">
                                                    <div class="item" data-value="1"><i class="AO flag"></i> Country
                                                        Name
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-9">
                                        <button class="btn btn_city text-white float-end bg_theme_tomato"
                                            id="Filterreset">
                                            <div class="ui toltip" data-content="You can reset filter"
                                                data-position="top center">
                                                RESET ALL
                                            </div>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-12 row" style="padding-bottom:15px;border-bottom:1px solid #fff">
                                    <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
                                        <div class="col-12 search_div" id="">
                                            <label for="" class="w-100" style="text-transform:uppercase;">City
                                                Name</label>
                                            <div class="ui toltip"
                                                data-content="You can choose multiple cities as per your needs"
                                                data-position="left center">
                                                <select name="states" class="ui fluid search dropdown city_Name"
                                                    id="city_Name">
                                                    <option value="">All Cities</option>
                                                    <option value="id">City Name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9 mt-3" id="city_name_display">
                                        <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>
                                    </div>
                                </div>

                                <div class="col-12 row" style="padding-bottom: 15px;border-bottom:1px solid #fff">
                                    <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
                                        <div class="col-12 search_div" id="">
                                            <label for="" class="w-100" style="text-transform:uppercase;">Industry
                                                Name</label>
                                            <div class="ui toltip" data-content="You can choose multiple industry"
                                                data-position="left center">
                                                <select name="states" class="ui fluid search dropdown city_Name"
                                                    id="industry_Name">
                                                    <option value="">All Industry</option>
                                                    <option value="id">Industry Name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9 mt-3" id="industry_Name_display">
                                        <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>
                                    </div>
                                </div>


                                <div class="row my-3 filter_btn">

                                </div>

                                <div class="row my-3 filter_btn font_poppins">

                                    <div class="col-2"> <label class="btn btn_city w-100" id="table_Name">Person Name
                                            <input type="checkbox" disabled checked id="table_Name_IN"></label></div>
                                    <div class="col-2"><label class="btn btn_city w-100" id="table_Title">Job Title
                                            <input type="checkbox" disabled checked id="table_Title_IN"></label></div>
                                    <div class="col-2"><label class="btn btn_city w-100" id="table_Company">Company Name
                                            <input type="checkbox" disabled checked id="table_Company_IN"></label></div>
                                    <div class="col-2"><label class="btn btn_city w-100" id="table_City">City <input
                                                type="checkbox" disabled checked id="table_City_IN"></label></div>
                                    <div class="col-2"><label class="btn btn_city w-100" id="">Industry <input
                                                type="checkbox" disabled checked id="table_City_IN"></label></div>
                                    <div class="col-2">
                                        <div class="ui toltip" data-content="Selected Tabs Action"
                                            data-position="top center">
                                            <label class="btn btn_city w-100 bg_theme" id="table_refresh">All Tabs
                                                Selected</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row filter_btn">
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_Email">Email <input type="checkbox"
                                                checked id="table_Email_IN"></label>
                                    </div>
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_Phone">Phone <input type="checkbox"
                                                checked id="table_Phone_IN"></label>
                                    </div>
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_Company_Size">Company Size <input
                                                type="checkbox" checked id="table_Company_Size_IN"></label>
                                    </div>
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_Revenue">Revenue <input
                                                type="checkbox" checked id="table_Revenue_IN"></label>
                                    </div>
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_Zip_code">Zip Code <input
                                                type="checkbox" checked id="table_Zip_code_IN"></label>
                                    </div>
                                    <div class="col-2">
                                        <label class="btn btn_city w-100" id="table_URL">Website <input type="checkbox"
                                                checked id="table_URL_IN"></label>
                                    </div>

                                </div>
                            </div> -->

        <div class="col-lg-12 col-md-12 col-sm-12" style="overflow-x:auto;">
            <table class="table table-responsive cell-border TableIDADD leads_data_table" id="myTableSimple">
                <thead>
                    <th>Person Name</th>
                    <th style="">Job Title</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th style="min-width: 170px;">Company Name</th>
                    <th style="width: 105px;min-width: 105px;">Company Size</th>
                    <th>Revenue</th>
                    <th style="min-width: 100px;">City</th>
                    <th style="min-width: 72px;">Zip Code</th>
                    <th>Website</th>
                </thead>
                <tbody id="lead_data">
                    <tr class="odd">
                        <td class="sorting_1">Abraham Ivor</td>
                        <td>Partner</td>
                        <td>abr****@*****al.ca</td>
                        <td>4898****</td>
                        <td>Abraham Legal S...</td>
                        <td>10 to 30</td>
                        <td>5 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                    <tr class="even">
                        <td class="sorting_1">Adele Tagirova</td>
                        <td>Partner</td>
                        <td>ade****@*****y.com</td>
                        <td>4414****</td>
                        <td>Adele Tagirova...</td>
                        <td>11 to 50</td>
                        <td>5 M</td>
                        <td>British Columbia</td>
                        <td>N/A</td>
                        <td>https://ww***.com</td>
                    </tr>
                    <tr class="odd">

                        <td class="sorting_1">Andrew Ain</td>
                        <td>Manager</td>
                        <td>aai****@*****d.com</td>
                        <td>8171****</td>
                        <td>Ain Whitehead L...</td>
                        <td>11 to 50</td>
                        <td>5 M</td>
                        <td>Barrie</td>
                        <td>N/A</td>
                        <td>https://ww***.com</td>
                    </tr>
                    <tr class="even">

                        <td class="sorting_1">Andrew Iacobelli</td>
                        <td>Partner</td>
                        <td>iac****@*****w.com</td>
                        <td>1070****</td>
                        <td>Iacobelli Law F...</td>
                        <td>11 to 50</td>
                        <td>5 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***.com</td>
                    </tr>
                    <tr class="odd">

                        <td class="sorting_1">Andrew Stewart</td>
                        <td>CEO</td>
                        <td>ast****@*****w.com</td>
                        <td>0626****</td>
                        <td>Dale Streiman A...</td>
                        <td>11 to 50</td>
                        <td>18 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***.com</td>
                    </tr>
                    <tr class="even">

                        <td class="sorting_1">Angela K. Brown</td>
                        <td>Partner</td>
                        <td>abr****@*****al.ca</td>
                        <td>1889****</td>
                        <td>Templeman LLP</td>
                        <td>51 to 200</td>
                        <td>13 M</td>
                        <td>Belleville</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                    <tr class="odd">

                        <td class="sorting_1">Anita Taneja</td>
                        <td>Partner</td>
                        <td>ani****@*****aw.ca</td>
                        <td>4000****</td>
                        <td>Taneja Law</td>
                        <td>44586</td>
                        <td>5 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                    <tr class="even">

                        <td class="sorting_1">Anne Downton</td>
                        <td>Partner</td>
                        <td>ann****@*****w.com</td>
                        <td>2290****</td>
                        <td>Dhindsa Law-Cri...</td>
                        <td>11 to 50</td>
                        <td>5 M</td>
                        <td>Abbotsford</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                    <tr class="odd">

                        <td class="sorting_1">Antar Kahlon</td>
                        <td>Partner</td>
                        <td>ant****@*****w.com</td>
                        <td>8444****</td>
                        <td>Kahlon Law Offi...</td>
                        <td>11 to 50</td>
                        <td>5 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                    <tr class="even">

                        <td class="sorting_1">Anthony Anushika</td>
                        <td>Partner</td>
                        <td>anu****@*****s.com</td>
                        <td>7011****</td>
                        <td>Anushika Anthon...</td>
                        <td>1 to 10</td>
                        <td>5 M</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section> --}}


    <div class="line_breaker">
        <div class="line"></div>
        <!-- <div class="icon_box">
                            <i class="fas fa-caret-left"></i><i class="fas fa-caret-right"></i>
                            <div class="arrow-1 animated hinge infinite zoomIn"></div>
                        </div> -->
    </div>


    @if(array_key_exists('work_article', $data))
    <section class="padding_40" style="background-color: #fff;">
        <div class="service_article py-5">
            <h4 class="super_heading_text"><span>Work ! </span><span> Read Up</span></h4>
            <hr>
            <div>
                <h5 class="py-2" style="font-size: 20px;color: #484a7d;">{{$data['work_article']->title}}</h5>
                <h2 class="py-2" style="font-size: 30px;color: #484a7d;">What is Lead Generation,
                    and How Does it Work ?</h2>
            </div>
            {!! $data['work_article']->description !!}
        </div>
    </section>
    @endif


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
            <p class="text-center" style="font-size: 25px;color: #9cb7cd !important;">{{$data['working_process']->subtitle}}</p>
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

{{--
        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">2</div>
            <div class="working_process_right_card_two">
                <h5>AGREEMENT</h5>
                <p>We love to discuss about the project in details before making up an agreement.
                    After a successful discussion we go for an agreement with you.</p>
            </div>
        </div>


        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">3</div>
            <div class="working_process_right_card_two">
                <h5>FINAL STRATEGY</h5>
                <p>The initial step after getting the project is research & planning to make a final
                    strategy. Our experts analyze your project to find the most appropriate method
                    for the project.</p>
            </div>
        </div>
        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">4</div>
            <div class="working_process_right_card_two">
                <h5>IMPLEMENTATION</h5>
                <p>An essential part of the Work process is implementation. While technology is a
                    main factor, we are also focusing on the people and your enterprise culture to
                    make sure the project is successful.</p>
            </div>
        </div>
        <div class="d-flex working_process_right_card">
            <div class="working_process_right_card_one">5</div>
            <div class="working_process_right_card_two">
                <h5>QUALITY CHECK & HANDOVER</h5>
                <p>We always try to maintain the best quality for submitting error-free tasks. In
                    this case, we maintain a strict quality check for your Desire services. Then,
                    The final step is here ; After final checking we deliver your project. We always
                    assure the best quality service for you.</p>
            </div>
        </div> --}}

    </section>
    @endif

    <section class="global_contact_card">
        <div class="contact_card_box">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <form action="" method="post">
                        <div class="say_hello_box">
                            <span>Say</span>
                            <span>Hello</span>
                        </div>

                        <div>Hello there, my name is <input type="text" placeholder="your name here">
                        </div>
                        <div class="pt-5">and looking for a team to help me with <br>
                            <textarea class="w-100 pt-3" name="" id=""
                                placeholder="your project discription here"></textarea></div>
                        <div class="pt-3">You can reach me at <input type="text" placeholder="your email address.">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="float-end global_contact_submit">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4 links">
                    <div class="w-100">
                        <a href="#"><i class="fab fa-whatsapp"></i> Connect with Whatsapp</a>
                        <a href="#"><i class="fab fa-telegram"></i> Connect with Telegram</a>
                        <a href="#"><i class="fab fa-facebook-messenger"></i> Connect with
                            Messenger</a>
                        <a href="#"><i class="fab fa-skype"></i> Connect with Skype</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="footer_area">
        <div class="row justify-content-between">
            <div class="col-sm-12 col-md-6 copyright_text">Copyright &copy; 2022. All Rights
                Reserved. Development By <a href="#">DiMarz</a></div>
            <div class="col-sm-12 col-md-6 text-end links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </section>
@endsection
