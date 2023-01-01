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
        }

        input.custom_radio[type='radio']:checked {
            background: #333;
        }

        label.required::after {
            content: ' *';
            color: #ff0000;
        }
        .only_underline{
            border: none;
            border-bottom: 1px solid #000;
        }
        /* Custom Radio || End */

    </style>
</head>

<body>
    <form action="" method="POST">
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
                                            <input type="radio" id="custom" name="package" value="PreCmium">
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
                                        <input type="text" class="coupon_input" placeholder="Use Code">
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
                                        <input type="text" class="form-control form-control-sm" id="firstName"
                                            placeholder="First name" value="" required="">
                                    </div>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" id="firstName"
                                            placeholder="Last name" value="" required="">
                                    </div>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" id="firstName"
                                            placeholder="Email" value="" required="">
                                    </div>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" id="firstName"
                                            placeholder="Company Name" value="" required="">
                                    </div>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="tel" class="form-control form-control-sm" id="firstName"
                                            placeholder="Phone" value="" required="">
                                    </div>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="text" class="form-control form-control-sm" id="firstName"
                                            placeholder="Country Name" value="" required="">
                                    </div>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Tell me about your keywords" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="How many pages for SEO ?" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field One" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field Two" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- For SEO || End --}}

                            {{-- For Lead Generation || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_lead_inputs">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Industry Like - Real Estate, Law Firm, Fashion etc"
                                                    value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Which Country" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Cities Name" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Lead Quantity" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <table class="price_table table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Lead Colums</td>
                                                    <td>Checkbox</td>
                                                </tr>
                                                <tr>
                                                    <td>First &amp; Last Name</td>
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
                                                    <td><input type="checkbox" name="" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Number Of Employee</td>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Source Link</td>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- For Lead Generation || End --}}

                            {{-- For Email Marketing || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_email_inputs">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Template Design" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="00" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field One" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field Two" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- For Email marketing || End --}}

                            {{-- For Content Wwriting || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none"
                                id="custom_contentwriting_inputs">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Tell me about your keywords" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Content Quantity" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="How many words need in every content" value=""
                                                    required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field Two" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- For SEO || End --}}

                            {{-- For Web Development || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_web_inputs">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="How many pages need to design ?" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field Three" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- For Web Development || End --}}

                            {{-- For Graphic Design || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_graphic_inputs">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field One" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field Two" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field Three" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- For Graphic Design || End --}}

                            {{-- For Data Entry || Start --}}
                            <div class="col-sm-12 col-md-12 my-2 custom-inputs d-none" id="custom_dataentry_inputs">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field One" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field Two" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 mb-3 inline_input">
                                            <div class="input">
                                                <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Field Three" value="" required="">
                                            </div>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- For Data Entry || End --}}


                            <hr>
                            <h6 style="font-size: 18px;">The way you brief your project. (Example)</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptatem, dolorem consectetur repellat dolorum distinctio. Repellendus voluptate, nemo provident magnam rem quos quibusdam eaque! Facilis commodi iste blanditiis sit harum fugit culpa dolorum consectetur odit perspiciatis earum atque esse corporis quibusdam aut dicta voluptatem et fuga voluptates repudiandae, excepturi molestias!</p>

                            <div class="col-md-12 mb-4">
                                <h4 style="font-size: 18px;">Brief Your Project Plan</h4>
                                <textarea name="" class="form-control form-control-sm"
                                    placeholder="Follow above Example..."
                                    style="height:100px;"></textarea>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 mb-2">
                                <div class="row">
                                    {{-- <div class="col-md-12 mb-3 inline_input">
                                        <div class="input">
                                            <label for="" class="required pb-2">Project Duration</label>
                                            <input type="text" class="form-control form-control-sm" id="firstName"
                                                placeholder="Project Duration" value="" required="">
                                        </div>
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div> --}}

                                    {{-- <div style="height:150px;">

                                    </div> --}}

                                    <div class="col-md-12 mb-3 inline_input">
                                        <div class="input">
                                            <label for="" class="required pb-2">Your Estimated Budget</label>
                                            {{-- <input type="text" class="form-control form-control-sm" id="firstName"
                                                    placeholder="Budget Offer" value="" required=""> --}}
                                            <select class="form-select" name="" id="">
                                                <option value="">Please Choose...</option>
                                                <option value="$7,000-$10,000">$7,000-$10,000</option>
                                                <option value="$10,000-$20,000">$10,000-$20,000</option>
                                                <option value="$20,000-$40,000">$20,000-$40,000</option>
                                                <option value="$40,000-$85,000">$40,000-$85,000</option>
                                                <option value="$85,000+">$85,000+</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
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
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
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

                                                <input type="checkbox" class="custom-control-input" id="save-info">
                                                <label class="custom-control-label" for="save-info">I agree to the Terms
                                                    and
                                                    conditions</label>

                                                <a class="btn btn-sm btn-light float-end" href="#"><strong>Next</strong>
                                                    <i class="fas fa-arrow-right"></i></a>
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

                                <div class="border_1x p-3 border_radius_10" style="margin-top: 450px;">
                                    <div class="row">
                                        <div class="col-md-2 mb-3 order_heading">
                                            <h4>Project Duration</h4>
                                        </div>
                                        <div class="col-md-5 mb-3 inline_input">
                                            <input type="email" class="form-control form-control-sm" id="email"
                                                placeholder="When you want to start (Date)" onfocus="(this.type='date')"
                                                required="">
                                            <div class="invalid-feedback">
                                                Email required.
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3 inline_input">
                                            <input type="text" class="form-control form-control-sm" id="company"
                                                placeholder="Before at (Date)" onfocus="(this.type='date')" required="">
                                            <div class="invalid-feedback">
                                                Company required.
                                            </div>
                                        </div>
                                        <div class="col-md-7 mb-3 order_heading">
                                            <h4>What's your standard budget </h4>
                                        </div>
                                        <div class="col-md-5 mb-3 inline_input">
                                            <input type="text" class="form-control form-control-sm" id="company"
                                                placeholder="$ USD " required="">
                                            <div class="invalid-feedback">
                                                Company required.
                                            </div>
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
                                                            id="firstName" placeholder="Leads Quantity" value=""
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3 inline_input">
                                                    <div class="input">
                                                        <input type="text" class="form-control form-control-sm mt-0"
                                                            id="firstName" placeholder="Regular Price" value=""
                                                            disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3 inline_input">
                                                    <div class="input">
                                                        <input type="text" class="form-control form-control-sm mt-0"
                                                            id="firstName" placeholder="Discount %" value=""
                                                            disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3 inline_input">
                                                    <div class="input">
                                                        <input type="text" class="form-control form-control-sm mt-0"
                                                            id="firstName" placeholder="After Discount" value=""
                                                            disabled="">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Valid first name is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3 inline_input">
                                                    <div class="input">
                                                        <input type="text" class="form-control form-control-sm mt-0"
                                                            id="firstName" placeholder="Offer Budget From You $"
                                                            value="" required="">
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
                                    <button class="btn btn-lg" type="submit"
                                        style="background: transparent;">Submit</button>
                                </div>
                            </div>

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
            } else if (value == 'International SEO') {
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
            } else if (text == 'International SEO') {
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
            } else if (text == 'Photo Editing' || text == 'Professional Design') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_graphic_inputs').removeClass('d-none');
            } else if (text == 'Online Data Entry' || text == 'offline Data Entry') {
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
                                `<input type="radio" class="custom_radio" name="serv1245" id="forinput` +
                                pagedata.id + `">` +
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
