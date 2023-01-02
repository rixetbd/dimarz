<!doctype html>
<html lang="en">

<head>

    <title>DiMarz - Custom Order</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="{{asset('assets/frontend')}}/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .border_1x {
            border: 1px solid #b0b4bb;
        }

        /* #place_a_order {
            background: #D8DBE1;
        } */

        .normal_text_p {
            font-size: 14px;
            line-height: 25px !important;
            letter-spacing: 1px;
            font-weight: 500;
        }

        .inline_input {
            display: flex;
            align-items: center;
        }

        .order_heading {
            /* color: #fff; */
            font-weight: 400;
            font-size: 22px;
        }

        .font_400 {
            font-weight: 400 !important;
        }

        /* form label{color: #fff;} */
        form input.form-control,
        form select.form-control,
        form select.form-select,
        form textarea.form-control,
        .form-control:disabled,
        .form-control[readonly] {
            /* background-color: #ffffff8e; */
            /* background-color: #373737; */
            box-shadow: none;
            opacity: 1;
            border: 1px solid #b0b4bbd0;
            box-shadow: none;
            border-radius: 0;
            letter-spacing: 1px;
            padding: 10px 15px;
            color: #000;
        }

        form input.form-control:focus,
        form select.form-control:focus,
        form select.form-select:focus,
        form textarea.form-control:focus,
        .form-control:disabled:focus,
        .form-control[readonly] {
            box-shadow: none;
        }

        .inline_input .input {
            width: -webkit-fill-available;
        }

        body {
            /* background-color: #035d4d; */
            /* background-color: #5a80a0; */
            background-color: #fff;
        }

        .bg_three_seven {
            background-color: #fff;
            color: #000;
            /* background-color: #373737;
            color: #fff; */
        }

        .bg_three_seven_shadow {
            box-shadow: 0px 0px 10px #28282899;
        }

        .border_radius_10 {
            border-radius: 10px;
        }

        #payment_area {
            letter-spacing: .5px;
            padding-top: 40px;
        }

        #payment_area label,
        #payment_area input {
            cursor: pointer;
        }

        #payment_area label {
            margin-left: 2px;
        }

        .package_btn_area h4 {
            font-size: 30px;
        }

        .package_btn_grp {
            margin-left: 15px;
            padding: 8px 15px;
            border: 1px solid #ffffff41;
            border-radius: 5px;
            cursor: pointer;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .bg_three_seven ul li {
            padding-right: 10px;
            font-size: 14px;
            letter-spacing: .5px;
        }

        .coupon_input_area button {
            /* background: #373737; */
            /* color: #fff; */
            border: none;
            padding: 0 15px;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: .75px;
        }

        .coupon_input {
            border: 1px solid #b1b1b1;
            font-size: 12px;
            margin: 0 5px;
            padding: 5px 10px;
            color: #000;
            background-color: transparent;
        }

        .coupon_input:active,
        .coupon_input:focus {
            box-shadow: none;
            outline: none;
        }

        .cursor_pointer {
            cursor: pointer;
        }

        .custom_field_allmenu_item {
            cursor: pointer;
        }

        .custom_field_allmenu_item:hover {
            color: #5a80a0;
        }

        .custom_field_menu_title {
            position: relative;
            font-size: 18px;
            width: fit-content;
        }

        .custom_field_menu_title::after {
            position: absolute;
            content: '';
            width: 100%;
            height: 1px;
            background-color: #000;
            left: 0;
            bottom: -4px;
        }

        .input_group {
            width: auto;
        }

        /* Custom Radio || Start */
        input.custom_radio[type='radio'] {
            box-sizing: border-box;
            appearance: none;
            background: white;
            outline: 2px solid #333;
            outline: 1.5px solid #333;
            border: 2px solid white;
            width: 12px;
            height: 12px;
            cursor: pointer;
        }

        input.custom_radio[type='radio']:checked {
            background: #333;
        }

        label.required::after {
            content: ' *';
            color: #ff0000;
        }

        .only_underline {
            border: none;
            border-bottom: 1px solid #a8a8a8;
            padding-left: 5px;
        }

        .only_underline:focus {
            outline: none;
        }

        /* Custom Radio || End */
        .custom-inputs input {
            width: -webkit-fill-available;
            font-size: 15px;
            letter-spacing: .5px;
        }

        .custom-inputs h6 {
            font-weight: 400;
            font-size: 15px;
            letter-spacing: .5px;
            min-width: fit-content;
        }

        .custom-inputs h6::before {
            content: '\274F';
            color: #292929;
            padding-right: 5px;
        }

        .fit_content {
            min-width: fit-content;
        }

    </style>
</head>

<body>
    <form action="{{route('frontend.custom.ordersubmit')}}" method="POST">
        @csrf
        <div class="container-fluid" style="padding-top: 3rem;" id="place_a_order">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="py-5 text-center">
                            <h1>Your Custom Order</h1>
                            {{-- <p class="lead">Please fill up all fields with valid information.</p> --}}
                        </div>

                        <div class="col-12 mb-4 bg_three_seven border_radius_10" style="">
                            {{-- bg_three_seven_shadow --}}
                            <div class="row pt-5">
                                <div class="col-12" style="margin-bottom:40px;">
                                    <div class="d-flex align-items-center package_btn_area">
                                        <h4 class="font_400">Service package</h4>
                                        <div class="package_btn_grp">
                                            <input type="radio" id="Basic" name="package" value="Basic" checked>
                                            <label for="Basic" class="cursor_pointer">Basic</label>
                                        </div>
                                        <div class="package_btn_grp">
                                            <input type="radio" id="standard" name="package" value="Standard">
                                            <label for="standard" class="cursor_pointer">Standard</label>
                                        </div>
                                        <div class="package_btn_grp">
                                            <input type="radio" id="Premium" name="package" value="Premium">
                                            <label for="Premium" class="cursor_pointer">Premium</label>
                                        </div>
                                        <div class="package_btn_grp">
                                            <input type="radio" id="custom" name="package" value="Custom">
                                            <label for="custom" class="cursor_pointer">Custom</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <h3>Email Templates Services</h3>
                                    <p>20 Email templates with maximum 8 Blocks. Ideal for product launch and
                                        newsletters.
                                    </p>

                                    <ul class="m-0 d-flex pt-2">
                                        <li><i class="fa fa-check me-1"></i> Email Support</li>
                                        <li><i class="fa fa-check me-1"></i> Content Strategy Planning</li>
                                    </ul>

                                    {{-- <form action=""> --}}
                                    <div class="d-flex pt-5 coupon_input_area">
                                        <h5 class="font_400">Update Coupon</h5>
                                        <input type="text" class="coupon_input" name="coupon_input" placeholder="Use Code">
                                        <button type="submit">Update</button>
                                    </div>
                                    {{-- </form> --}}
                                </div>
                                <div class="col-sm-12 col-md-6 text-end" id="pirce_display">
                                    <h5 class="font_400">Total Pay: $<span>50.99</span></h5>
                                    <h6 class="font_400">Discount: $<span>10.99</span></h6>
                                    <h4 class="font_400">Subtotal: $<span>40.99</span></h4>
                                </div>
                            </div>
                        </div>



                        <h4 class="mb-3 pt-2 order_heading">Customer Information</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" name="customer_fname"
                                            placeholder="First name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" name="customer_lname"
                                            placeholder="Last name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" name="customer_email"
                                            placeholder="Email Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" name="customer_cname"
                                            placeholder="Company Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="tel" class="form-control form-control-sm" name="customer_phone"
                                            placeholder="Phone" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" name="customer_website"
                                            placeholder="Website URL" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" name="customer_city"
                                            placeholder="Your City Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" name="customer_country"
                                            placeholder="Your Country Name" required>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row pt-3" id="customization_section">
                            <h4>Services We Provide</h4>
                            <div class="row" id="custom_field_allmenu">

                            </div>

                            <h5 class="order_heading pt-2">Choose single or multiple</h5>
                            <div class="row checkbox_area pb-2">

                            </div>

                            {{-- For SEO || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_seo_inputs">

                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How many pages need to SEO ?</h6>
                                    <input type="hidden" name="seo_requirement[qa_01_Q]" value="How many pages need to SEO ?">
                                    <input type="text" class="only_underline" name="seo_requirement[qa_01]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Website URL</h6>
                                    <input type="hidden" name="seo_requirement[qa_02_Q]" value="Website URL">
                                    <input type="text" class="only_underline" name="seo_requirement[qa_02]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How long Do You Want The Ranking?</h6>
                                    <input type="hidden" name="seo_requirement[qa_03_Q]" value="How long Do You Want The Ranking?">
                                    <input type="text" class="only_underline" name="seo_requirement[qa_03]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">What Kind Of Technical Problem Do You Have?</h6>
                                    <input type="hidden" name="seo_requirement[qa_04_Q]" value="What Kind Of Technical Problem Do You Have?">
                                    <input type="text" class="only_underline" name="seo_requirement[qa_04]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How Many Backlinks Do You Want?</h6>
                                    <input type="hidden" name="seo_requirement[qa_05_Q]" value="How Many Backlinks Do You Want?">
                                    <input type="text" class="only_underline" name="seo_requirement[qa_05]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Do You Want To Full SEO Package?</h6>
                                    <input type="hidden" name="seo_requirement[qa_06_Q]" value="Do You Want To Full SEO Package?">
                                    <input type="text" class="only_underline" name="seo_requirement[qa_06]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Your Local Area Location Name </h6>
                                    <input type="hidden" name="seo_requirement[qa_07_Q]" value="Your Local Area Location Name">
                                    <input type="text" class="only_underline" name="seo_requirement[qa_07]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0">Do You Need Content Optimization?</h6>
                                    {{-- <input type="text" class="only_underline" name="" id=""> --}}
                                    <input name="seo_requirement[qa_08_Q]" type="hidden" value="Do You Need Content Optimization?">
                                    <input class="custom_radio ms-4 mx-2" type="radio" class="only_underline"
                                        name="seo_requirement[qa_08]" id="optionyes" value="Yes">
                                    <label class="cursor_pointer" for="optionyes">Yes</label>
                                    <input class="custom_radio mx-2" type="radio" class="only_underline"
                                        name="seo_requirement[qa_08]" id="optionno" value="No">
                                    <label class="cursor_pointer" for="optionno">No</label>
                                </div>

                            </div>
                            {{-- For SEO || End --}}


                            {{-- For Email Marketing || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_email_inputs">
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How Many Email Templates Do You Need ?</h6>
                                    <input type="hidden" name="email_marketing[qa_01_Q]" value="How Many Email Templates Do You Need ?">
                                    <input type="text" class="only_underline" name="email_marketing[qa_01]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Your Target Audience</h6>
                                    <input type="hidden" name="email_marketing[qa_02_Q]" value="Your Target Audience">
                                    <input type="text" class="only_underline" name="email_marketing[qa_02]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">What Will The Email Template Be Used For ?</h6>
                                    <input type="hidden" name="email_marketing[qa_03_Q]" value="What Will The Email Template Be Used For ?">
                                    <input type="text" class="only_underline" name="email_marketing[qa_03]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Number of Email Sends</h6>
                                    <input type="hidden" name="email_marketing[qa_04_Q]" value="Number of Email Sends">
                                    <input type="text" class="only_underline" name="email_marketing[qa_04]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Do You Need Source File?</h6>
                                    <input type="hidden" name="email_marketing[qa_05_Q]" value="Do You Need Source File?">
                                    <input class="custom_radio ms-4 mx-2" type="radio" class="only_underline"
                                        name="email_marketing[qa_05]" id="optionyes">
                                    <label class="cursor_pointer" for="optionyes">Yes</label>
                                    <input class="custom_radio mx-2" type="radio" class="only_underline"
                                        name="email_marketing[qa_05]" id="optionno">
                                    <label class="cursor_pointer" for="optionno">No</label>
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0">Do You Need Social icon & website Clickable ?</h6>
                                    {{-- <input type="text" class="only_underline" name="" id=""> --}}
                                    <input type="hidden" name="email_marketing[qa_06_Q]" value="Do You Need Social icon & website Clickable ?">
                                    <input class="custom_radio ms-4 mx-2" type="radio" class="only_underline"
                                        name="email_marketing[qa_06]" id="emoptionyes" value="Yes">
                                    <label class="cursor_pointer" for="emoptionyes">Yes</label>
                                    <input class="custom_radio mx-2" type="radio" class="only_underline"
                                        name="email_marketing[qa_06]" id="emoptionno" value="No">
                                    <label class="cursor_pointer" for="emoptionno">No</label>
                                </div>
                            </div>
                            {{-- For Email marketing || End --}}

                            {{-- For Content Wwriting || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none"
                                id="custom_contentwriting_inputs">
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">What Language Do You want ?</h6>
                                    <input type="hidden" name="content_writing[qa_01_Q]" value="What Language Do You want ?">
                                    <input type="text" class="only_underline" name="content_writing[qa_01]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Your Niche Name</h6>
                                    <input type="hidden" name="content_writing[qa_02_Q]" value="Your Niche Name">
                                    <input type="text" class="only_underline" name="content_writing[qa_02]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How many Words Do You Want?</h6>
                                    <input type="hidden" name="content_writing[qa_03_Q]" value="How many Words Do You Want?">
                                    <input type="text" class="only_underline" name="content_writing[qa_03]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Industry name</h6>
                                    <input type="hidden" name="content_writing[qa_04_Q]" value="Industry name">
                                    <input type="text" class="only_underline" name="content_writing[qa_04]" placeholder="Optional">
                                </div>
                            </div>
                            {{-- For Content Wwriting || End --}}

                            {{-- For Data Entry || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_dataentry_inputs">
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Format of the final collected data</h6>
                                    <input type="hidden" name="online_data_entry[qa_01_Q]" value="Format of the final collected data">
                                    <input type="text" class="only_underline" name="online_data_entry[qa_01]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Source of the data</h6>
                                    <input type="hidden" name="online_data_entry[qa_02_Q]" value="Source of the data">
                                    <input type="text" class="only_underline" name="online_data_entry[qa_02]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Website URL</h6>
                                    <input type="hidden" name="online_data_entry[qa_03_Q]" value="Website URL">
                                    <input type="text" class="only_underline" name="online_data_entry[qa_03]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Platform for product listing</h6>
                                    <input type="hidden" name="online_data_entry[qa_04_Q]" value="Platform for product listing">
                                    <input type="text" class="only_underline" name="online_data_entry[qa_04]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How Many pages Do You Need Convert?</h6>
                                    <input type="hidden" name="online_data_entry[qa_05_Q]" value="How Many pages Do You Need Convert?">
                                    <input type="text" class="only_underline" name="online_data_entry[qa_05]">
                                </div>
                            </div>
                            {{-- For Data Entry || End --}}

                            {{-- For Web Development || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_web_inputs">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id=""
                                                    placeholder="How many pages need to design ?" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id=""
                                                    placeholder="Field Three" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- For Web Development || End --}}

                            {{-- For Graphic Design || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_photo_editing_inputs">
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How Many Photos Do You Want To Edit?</h6>
                                    <input type="hidden" name="photo_editing[qa_01_Q]" value="How Many Photos Do You Want To Edit?">
                                    <input type="text" class="only_underline" name="photo_editing[qa_01]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">The Desired Delivery Format</h6>
                                    <input type="hidden" name="photo_editing[qa_02_Q]" value="The Desired Delivery Format">
                                    <input type="text" class="only_underline" name="photo_editing[qa_02]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Do You Have Any Specific Instructions?</h6>
                                    <input type="hidden" name="photo_editing[qa_03_Q]" value="Do You Have Any Specific Instructions?">
                                    <input type="text" class="only_underline" name="photo_editing[qa_03]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How Many Photos Do You Want To Remove Background?</h6>
                                    <input type="hidden" name="photo_editing[qa_04_Q]" value="How Many Photos Do You Want To Remove Background?">
                                    <input type="text" class="only_underline" name="photo_editing[qa_04]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How many Design Do You Want?</h6>
                                    <input type="hidden" name="photo_editing[qa_05_Q]" value="How many Design Do You Want?">
                                    <input type="text" class="only_underline" name="photo_editing[qa_05]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Which Type OF Motion Graphics Do You Want?</h6>
                                    <input type="hidden" name="photo_editing[qa_06_Q]" value="Which Type OF Motion Graphics Do You Want?">
                                    <input type="text" class="only_underline" name="photo_editing[qa_06]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Do You Need Source File?</h6>
                                    <input type="hidden" name="photo_editing[qa_07_Q]" value="Do You Need Source File?">
                                    <input class="custom_radio ms-4 mx-2" type="radio" class="only_underline"
                                        name="photo_editing[qa_07]" id="optionyes">
                                    <label class="cursor_pointer" for="optionyes">Yes</label>
                                    <input class="custom_radio mx-2" type="radio" class="only_underline"
                                        name="photo_editing[qa_07]" id="optionno">
                                    <label class="cursor_pointer" for="optionno">No</label>
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0">Do You Need Social icon & website Clickable ?</h6>
                                    {{-- <input type="text" class="only_underline" name="" id=""> --}}
                                    <input type="hidden" name="photo_editing[qa_08_Q]" value="Do You Need Social icon & website Clickable ?">
                                    <input class="custom_radio ms-4 mx-2" type="radio" class="only_underline"
                                        name="photo_editing[qa_08]" id="optionyes">
                                    <label class="cursor_pointer" for="optionyes">Yes</label>
                                    <input class="custom_radio mx-2" type="radio" class="only_underline"
                                        name="photo_editing[qa_08]" id="optionno">
                                    <label class="cursor_pointer" for="optionno">No</label>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_professional_design_inputs">
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How many Design Do You Want?</h6>
                                    <input type="hidden" name="professional_design[qa_01_Q]" value="How many Design Do You Want?">
                                    <input type="text" class="only_underline" name="professional_design[qa_01]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">The Desired Delivery Format</h6>
                                    <input type="hidden" name="professional_design[qa_02_Q]" value="The Desired Delivery Format">
                                    <input type="text" class="only_underline" name="professional_design[qa_02]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Do You Have Any Specific Instructions?</h6>
                                    <input type="hidden" name="professional_design[qa_03_Q]" value="Do You Have Any Specific Instructions?">
                                    <input type="text" class="only_underline" name="professional_design[qa_03]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Which Type OF Motion Graphics Do You Want?</h6>
                                    <input type="hidden" name="professional_design[qa_04_Q]" value="Which Type OF Motion Graphics Do You Want?">
                                    <input type="text" class="only_underline" name="professional_design[qa_04]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How many Design Do You Want?</h6>
                                    <input type="hidden" name="professional_design[qa_05_Q]" value="How many Design Do You Want?">
                                    <input type="text" class="only_underline" name="professional_design[qa_05]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How many Logo Design Concepts Do you Need?</h6>
                                    <input type="hidden" name="professional_design[qa_06_Q]" value="How many Logo Design Concepts Do you Need?">
                                    <input type="text" class="only_underline" name="professional_design[qa_06]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">How Much Data Do You Need For Your Infographics?</h6>
                                    <input type="hidden" name="professional_design[qa_07_Q]" value="How Much Data Do You Need For Your Infographics?">
                                    <input type="text" class="only_underline" name="professional_design[qa_07]">
                                </div>
                            </div>
                            {{-- For Graphic Design || End --}}


                            {{-- For Lead Generation || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_lead_inputs">

                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Country Name</h6>
                                    <input type="text" class="only_underline" name="lead_generation[country_name]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Cities Name</h6>
                                    <input type="text" class="only_underline" name="lead_generation[city_name]">
                                </div>
                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">lead Quantity</h6>
                                    <input type="text" class="only_underline" name="lead_generation[lead_quantity]">
                                </div>


                                <div class="d-flex my-2 align-items-center">
                                    <h6 class="m-0 me-2">Which Industry Leads need you ?</h6>
                                    <div class="d-flex" style="flex-wrap: wrap;">
                                        <div class="d-flex">
                                            <input class="mx-2" type="checkbox" class="only_underline"
                                                name="lead_industry[]" id="lead_software_industry" value="Software Industry">
                                            <label class="cursor_pointer fit_content"
                                                for="lead_software_industry">Software
                                                Industry</label>
                                        </div>
                                        <div class="d-flex">
                                            <input class=" mx-2" type="checkbox" class="only_underline"
                                                name="lead_industry[]" id="lead_legal_industry" value="Legal Industry">
                                            <label class="cursor_pointer fit_content" for="lead_legal_industry">Legal
                                                Industry</label>
                                        </div>
                                        <div class="d-flex">
                                            <input class=" mx-2" type="checkbox" class="only_underline"
                                                name="lead_industry[]" id="lead_healthcare_industry" value="Healthcare Industry">
                                            <label class="cursor_pointer fit_content"
                                                for="lead_healthcare_industry">Healthcare Industry</label>
                                        </div>
                                        <div class="d-flex">
                                            <input class=" mx-2" type="checkbox" class="only_underline"
                                                name="lead_industry[]" id="lead_realestate_industry" value="Real Estate Industry">
                                            <label class="cursor_pointer fit_content" for="lead_realestate_industry">Real
                                                Estate Industry</label>
                                        </div>
                                        <div class="d-flex">
                                            <input class=" mx-2" type="checkbox" class="only_underline"
                                                name="lead_industry[]" id="lead_fashion_beauty" value="Fashion & Beauty">
                                            <label class="cursor_pointer fit_content"
                                                for="lead_fashion_beauty">Fashion &
                                                Beauty</label>
                                        </div>
                                        <div class="d-flex">
                                            <input class=" mx-2" type="checkbox" class="only_underline"
                                                name="lead_industry[]" id="lead_retail_industry" value="Retail Industry">
                                            <label class="cursor_pointer fit_content" for="lead_retail_industry">Retail
                                                Industry</label>
                                        </div>
                                        <div class="d-flex">
                                            <input class=" mx-2" type="checkbox" class="only_underline"
                                                name="lead_industry[]" id="lead_ecommerce_industry" value="E-commerce Industry">
                                            <label class="cursor_pointer fit_content"
                                                for="lead_ecommerce_industry">E-commerce Industry</label>
                                        </div>
                                        <div class="d-flex">
                                            <input class=" mx-2" type="checkbox" class="only_underline"
                                                name="lead_industry[]" id="lead_finance_industry" value="Finance Industry">
                                            <label class="cursor_pointer fit_content"
                                                for="lead_finance_industry">Finance
                                                Industry</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="price_table table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Lead Colums</td>
                                                    <td>Checkbox</td>
                                                </tr>
                                                <tr>
                                                    <td>First &amp; Last Name</td>
                                                    <td><input type="checkbox" name="lead_colum[name]" id="" checked=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td><input type="checkbox" name="lead_colum[email]" id="" checked=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Comapny Name</td>
                                                    <td><input type="checkbox" name="lead_colum[cname]" id="" checked=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Comapny Phone</td>
                                                    <td><input type="checkbox" name="lead_colum[cphone]" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Website</td>
                                                    <td><input type="checkbox" name="lead_colum[website]" id="" checked=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><input type="checkbox" name="lead_colum[address]" id="" checked=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Revenue</td>
                                                    <td><input type="checkbox" name="lead_colum[revenue]" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Number Of Employee</td>
                                                    <td><input type="checkbox" name="lead_colum[employee_count]" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Source Link</td>
                                                    <td><input type="checkbox" name="lead_colum[source-link]" id=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- For Lead Generation || End --}}



                            <hr>
                            <h6 style="font-size: 18px;">The way you brief your project. (Example)</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptatem, dolorem
                                consectetur repellat dolorum distinctio. Repellendus voluptate, nemo provident magnam
                                rem quos quibusdam eaque! Facilis commodi iste blanditiis sit harum fugit culpa dolorum
                                consectetur odit perspiciatis earum atque esse corporis quibusdam aut dicta voluptatem
                                et fuga voluptates repudiandae, excepturi molestias!</p>

                            <div class="col-md-12 mb-4">
                                <h4 style="font-size: 18px;">Brief Your Project Plan</h4>
                                <textarea name="plan_brief" class="form-control form-control-sm"
                                    placeholder="Follow above Example..." style="height:100px;"></textarea>
                            </div>

                            <div class="col-sm-12 col-md-12 mb-2">
                                <div class="row">

                                    <div class="col-md-12 mb-3 inline_input">
                                        <div class="input">
                                            <label for="" class="required pb-2">Your Estimated Budget</label>
                                            <select class="form-select" name="budget">
                                                <option value="">Please Choose...</option>
                                                <option value="$7,000-$10,000">$7,000-$10,000</option>
                                                <option value="$10,000-$20,000">$10,000-$20,000</option>
                                                <option value="$20,000-$40,000">$20,000-$40,000</option>
                                                <option value="$40,000-$85,000">$40,000-$85,000</option>
                                                <option value="$85,000+">$85,000+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <div class="row pb-4">
                            <div class="col-md-12">
                                <div class="border_radius_10"> {{-- p-3  border_1x --}}
                                    {{-- <h4 class=""> </h4>
                                    <div class="row">
                                        <div class="col-md-6 inline_input">
                                            <label for="package_badge" class="default">Service Name : </label>
                                            <div class="input">
                                                <p id="package_badge">Package Badge</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 inline_input justify-content-end">
                                            <label for="package_price">Package Price :
                                                <span class="ms-4" id="package_price">$50 US</span></label>
                                        </div>
                                    </div>
                                    <hr class="mb-4"> --}}

                                    <div class="row">
                                        {{-- <h4 class="order_heading">Your Message</h4> --}}

                                        <div class="col-sm-12 col-md-12" id="payment_area">
                                            <h4 class="mb-3 font_400">Payment Method</h4>

                                            <div class="my-2">
                                                <input type="radio" id="mastercard" name="payment" value="Credit Card"
                                                    checked>
                                                <label for="mastercard"><i class="fab fa-cc-visa me-1"></i><i
                                                        class="fab fa-cc-mastercard"></i> Credit Card</label>
                                            </div>
                                            <div class="my-2">
                                                <input type="radio" id="payPal" name="payment" value="PayPal Account">
                                                <label for="payPal"><i class="fab fa-cc-paypal"></i> PayPal
                                                    Account</label>
                                            </div>
                                            <div class="my-1">
                                                <input type="radio" id="payoneer" name="payment" value="Payoneer">
                                                <label for="payoneer">Payoneer</label>
                                            </div>
                                            <div class="my-2">
                                                <input type="radio" id="wiretransfer" name="payment"
                                                    value="Wire Transfer">
                                                <label for="wiretransfer">Wire Transfer</label>
                                            </div>
                                            <div class="my-2">
                                                <input type="radio" id="bankaccount" name="payment"
                                                    value="Bank Account">
                                                <label for="bankaccount">Transfer to Bank Account</label>
                                            </div>
                                            <div class="my-2">
                                                <input type="radio" id="purchaseorder" name="payment"
                                                    value="Purchase Order">
                                                <label for="purchaseorder">First Payment After 20% Task Complete</label>
                                            </div>
                                            <hr>
                                            <div class="pb-5">

                                                <input type="checkbox" class="custom-control-input" id="save-info" required>
                                                <label class="custom-control-label" for="save-info">I agree to the Terms
                                                    and
                                                    conditions</label>

                                                <button class="btn btn-sm btn-light float-end" type="submit"><strong>Next</strong>
                                                    <i class="fas fa-arrow-right"></i></button>
                                            </div>
                                            <div class="mt-5">
                                                <p class="text-center m-0" style="font-size:14px;"> <i
                                                        class="fa fa-lock"></i> We use industry-standard encryption to
                                                    protect the confidentiality of your personal information. <br>
                                                    This purchase and product fulfillment are through FastSpring, a
                                                    trusted reseller for http://www.example.com
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>





{{--
                                <div class="border_1x p-3 border_radius_10" style="margin-top: 450px;">
                                    <div class="row">
                                        <div class="col-md-2 mb-3 order_heading">
                                            <h4>Project Duration</h4>
                                        </div>
                                        <div class="col-md-5 mb-3 inline_input">
                                            <input type="email" class="form-control form-control-sm" id="email"
                                                placeholder="When you want to start (Date)" onfocus="(this.type='date')"
                                                >
                                        </div>
                                        <div class="col-md-5 mb-3 inline_input">
                                            <input type="text" class="form-control form-control-sm" id="company"
                                                placeholder="Before at (Date)" onfocus="(this.type='date')" >

                                        </div>
                                        <div class="col-md-7 mb-3 order_heading">
                                            <h4>What's your standard budget </h4>
                                        </div>
                                        <div class="col-md-5 mb-3 inline_input">
                                            <input type="text" class="form-control form-control-sm" id="company"
                                                placeholder="$ USD " >
                                        </div>
                                    </div>
                                </div>

                                <div class="border_1x mt-5 p-3 border_radius_10">
                                    <div class="row">
                                        <h4 class="pt-4 mb-3 order_heading">Leads Custom Pricing</h4>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 mb-3 inline_input">
                                                    <div class="input">
                                                        <input type="text" class="form-control form-control-sm mt-0"
                                                            id="" placeholder="Leads Quantity" value=""
                                                            >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3 inline_input">
                                                    <div class="input">
                                                        <input type="text" class="form-control form-control-sm mt-0"
                                                            id="" placeholder="Regular Price" value=""
                                                            disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3 inline_input">
                                                    <div class="input">
                                                        <input type="text" class="form-control form-control-sm mt-0"
                                                            id="" placeholder="Discount %" value=""
                                                            disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3 inline_input">
                                                    <div class="input">
                                                        <input type="text" class="form-control form-control-sm mt-0"
                                                            id="" placeholder="After Discount" value=""
                                                            disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3 inline_input">
                                                    <div class="input">
                                                        <input type="text" class="form-control form-control-sm mt-0"
                                                            id="" placeholder="Offer Budget From You $"
                                                            value="" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <p>Note : Enter your leads quantity, Regular &amp; Discount price
                                                        will
                                                        calculate
                                                        for you. <strong class="me-2">Get 10% Discount on 1,000+
                                                            Leads.</strong>
                                                        Don't worry ! You can offer your
                                                        standerd budget.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <table class="price_table">
                                                <tbody>
                                                    <tr>
                                                        <td>Lead Colums</td>
                                                        <td>Price ( USD )</td>
                                                        <td>Checkbox</td>
                                                    </tr>
                                                    <tr>
                                                        <td>First &amp; Last Name</td>
                                                        <td rowspan="6">0.50</td>
                                                        <td><input type="checkbox" name="" id="" checked=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><input type="checkbox" name="" id="" checked=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Comapny Name</td>
                                                        <td><input type="checkbox" name="" id="" checked=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Comapny Phone</td>
                                                        <td><input type="checkbox" name="" id=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Website</td>
                                                        <td><input type="checkbox" name="" id="" checked=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address</td>
                                                        <td><input type="checkbox" name="" id="" checked=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Revenue</td>
                                                        <td>0.30</td>
                                                        <td><input type="checkbox" name="" id=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Number Of Employee</td>
                                                        <td>0.20</td>
                                                        <td><input type="checkbox" name="" id=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Source Link</td>
                                                        <td>Free</td>
                                                        <td><input type="checkbox" name="" id=""></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h4 class="mb-3 pt-5 order_heading">Payment Method</h4>
                                        <div class="col-md-12 mb-3 inline_input">
                                            <p>Our payment method is in processing. So we will choose a <mark>payment
                                                    gateway</mark>
                                                after discussing the
                                                project.</p>
                                        </div>
                                    </div>

                                    <hr class="mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="save-info">
                                        <label class="custom-control-label" for="save-info">I agree to the Terms and
                                            conditions</label>
                                    </div>

                                    <hr class="mb-4">
                                </div>
 --}}

                            </div>

                            <div style="min-height:250px;"></div>


                            <div class="col-md-12 my-4">
                                <div class="p-4 border_radius_10 bg_three_seven bg_three_seven_shadow">
                                    <h4 class="d-flex justify-content-between align-items-center">
                                        <span>What is Pre Build Packages ?</span>
                                    </h4>
                                    <p>
                                        A service package is a collection of services offered as a unit by a business.
                                        At
                                        the
                                        customer's
                                        request, a product can be customized by having one-time effects added.
                                        Contacting
                                        people on
                                        a
                                        client's behalf is the focus of customer contact services.
                                    </p>
                                    <h4 class="pt-3">Why Custom Order ?</h4>
                                    <p class="ps-0">A custom order is one that is placed for products that have been
                                        commissioned, altered, personalized, customized, or created to meet your
                                        particular needs. An order for services that is customized to requirements
                                        outside the purview of a Standard Order is referred to as a Custom Order.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
    <script src="{{asset('assets/frontend')}}js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/jquery-3.6.1.min.js"></script>

    <script>
        $('.package_btn_grp').click(() => {
            $(this).child('input').click();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#custom_category_name').on('change', function () {
            $('.custom-inputs').addClass('d-none');

            let value = $('#custom_category_name option:selected').text();

            if (value == 'Lead Generation') {
                $('#custom_lead_inputs').removeClass('d-none');
            } else if (value == 'WordPress Development' || value == 'Frontend Development' || value ==
                'Backend Development' || value == 'Web Application Development') {
                $('#custom_web_inputs').removeClass('d-none');
            } else if (value == 'Photo Editing' || value == 'Professional Design') {
                $('#custom_graphic_inputs').removeClass('d-none');
            } else if (value == 'Online Data Entry' || value == 'Offline Data Entry') {
                $('#custom_dataentry_inputs').removeClass('d-none');
            } else if (value == 'SEO') {
                $('#custom_seo_inputs').removeClass('d-none');
            } else if (value == 'Email Marketing') {
                $('#custom_email_inputs').removeClass('d-none');
            } else if (value == 'Content Writing') {
                $('#custom_contentwriting_inputs').removeClass('d-none');
            }






        });

        function custom_order() {
            $("#pirce_display").removeClass('d-none');
            $('#customization_section').addClass('d-none');
        }

        $('#Basic').click(() => {
            custom_order();
        });
        $('#standard').click(() => {
            custom_order();
        });
        $('#Premium').click(() => {
            custom_order();
        });

        $('#custom').click(() => {
            $("#pirce_display").addClass('d-none');
            $('#customization_section').removeClass('d-none');
        });

        function getservice(input_value, text) {

            /*

                    Lead Generation
                    International SEO
                    Email Marketing
                    Content Writing
                    Data Entry
                    Online Data Entry
                    Offline Data Entry
                    WordPress Development
                    Frontend Development
                    Backend Development
                    Web Application
                    Graphic Design
                    Photo Editing
                    Professional Design

            */

            if (text == 'Lead Generation') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_lead_inputs').removeClass('d-none');
            } else if (text == 'SEO') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_seo_inputs').removeClass('d-none');
            } else if (text == 'Email Marketing') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_email_inputs').removeClass('d-none');
            } else if (text == 'Content Writing') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_contentwriting_inputs').removeClass('d-none');
            } else if (text == 'WordPress Development') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_web_inputs').removeClass('d-none');
            } else if (text == 'Frontend Development' || text == 'Backend Development' || text == 'Web Application') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_web_inputs').removeClass('d-none');
            } else if (text == 'Photo Editing') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_photo_editing_inputs').removeClass('d-none');
            } else if (text == 'Professional Design') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_professional_design_inputs').removeClass('d-none');
            } else if (text == 'Online Data Entry' || text == 'Offline Data Entry') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_dataentry_inputs').removeClass('d-none');
            }



            $.ajax({
                type: "POST",
                url: `{{route('frontend.custom.getservice')}}`,
                data: {
                    id: input_value,
                },
                success: function (data) {
                    let service_data = ''; // <option value="">Select a Service</option>
                    $.each(data.gigpage, function (key, value) {
                        service_data += `<div class="input_group py-1">
                                    <input type="checkbox" name="gigname[]" id="service_N` + value.id + `" value="` +
                            value.title + `">
                                    <label class="ms-1" for="service_N` + value.id + `">` + value.title + `</label>
                                </div>`;
                    });
                    $('.checkbox_area').html(service_data);
                    $('#custom_category_name').html(`<option selected>` + text + `</option>`);
                }
            });
        };

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
                    var top_service_menu = "";
                    $.each(data.serviceGroupID, function (i, value) {
                        var single_html = "";
                        $.each(value.mainpage_data, function (i, pagedata) {
                            single_html +=
                                `<input type="radio" class="custom_radio" name="service_category_name" id="forinput` +
                                pagedata.id + `" onclick="getservice('` + pagedata.id +
                                `','` + pagedata.page_title + `')" value="${pagedata.id}">` +
                                `<label for="forinput` + pagedata.id +
                                `" class="ps-2 py-1 custom_field_allmenu_item" onclick="getservice('` +
                                pagedata.id + `','` + pagedata.page_title + `')">` +
                                pagedata.page_title + `</label><br>`;
                        });
                        // top_service_menu += `${value.subcategory_id}`;
                        top_service_menu += `<div class="col-sm-12 col-md-3 py-4">` +
                            `<h4 class="custom_field_menu_title">${value.category_name}</h4>` +
                            single_html + `</div>`;

                    });
                    $('#custom_field_allmenu').html(top_service_menu);

                }
            });
        }
        autoNavItems();

    </script>


</body>

</html>
