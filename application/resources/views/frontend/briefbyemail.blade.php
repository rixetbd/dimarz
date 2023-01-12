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

        input[type="checkbox"]{
            width: 1.35rem;
            height: 1.35rem;
        }
        input[type="radio"]{
            width: 1.35rem;
            height: 1.35rem;
        }
        .form-check-input:focus{
            box-shadow: none;
        }
    </style>
</head>

<body>
    <form action="{{route('frontend.contactmail.briefbyemailstore')}}" method="POST">
        @csrf
        <div class="container-fluid" style="padding-top: 3rem;" id="place_a_order">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="py-5 text-center">
                            <h1>Brief Your Project Plan</h1>
                            <p class="lead"><a style="text-decoration: none;color:#292929" href="{{url('/')}}">Home</a>
                                - Email Us</p>
                        </div>
                    </div>


                    <div class="col-md-10 p-5 mb-5" style="background-color: #f4f4f4;border-radius:15px;">
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
                                            placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <input type="url" class="form-control form-control-sm" name="customer_website"
                                            placeholder="Website URL">
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
                            <h4>Choose Single or Multiple</h4>
                            <div class="row" id="custom_field_allmenu">
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12 mb-4">
                            <h4 style="font-size: 18px;">Write Your Project Details</h4>
                            <textarea name="plan_brief" class="form-control form-control-sm"
                                placeholder="Follow above Example..." style="height:100px;" required></textarea>
                        </div>

                        <div class="col-sm-12 col-md-12 mb-2">
                            <div class="row">
                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input">
                                        <label for="" class="required pb-2">Your Estimated Budget</label>
                                        <select class="form-select" name="budget" required>
                                            <option value="">Please Choose...</option>
                                            <option value="$100-$499">$100-$499</option>
                                            <option value="$500-$999">$500-$999</option>
                                            <option value="$1000+">$1000+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2 mb-3 inline_input">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input cursor_pointer" type="checkbox" value=""
                                            id="where_you_referred">
                                        <label class="form-check-label ms-2 cursor_pointer where_you_referred" for="where_you_referred">
                                            Were you referred to Dimarz ?
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3 inline_input where_you_referred_display d-none">
                                    <div class="input">
                                        <label class="required pb-2 cursor_pointer" for="">Who referred you?</label>
                                        <input class="form-control" type="text" id="" name="referby"
                                            placeholder="How did you hear about us ?">
                                    </div>
                                </div>
                                <h4 style="font-size: 16px;">Join our email list?</h4>
                                <div class="col-md-12 mb-1 inline_input">
                                    <div class="input d-flex align-items-center">
                                        <input name="joinemail" type="radio" value="1" id="joinemailyes"
                                            placeholder="How did you hear about us ?">
                                        <label class="ms-2 cursor_pointer" for="joinemailyes">Yes, Please!</label>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3 inline_input">
                                    <div class="input d-flex align-items-center">
                                        <input class="" name="joinemail" type="radio" value="0" id="joinemailno"
                                            placeholder="How did you hear about us ?">
                                        <label class="ms-2 cursor_pointer" for="joinemailno">Not yet, Thanks.</label>
                                    </div>
                                </div>
                                <p>Join our mailing list to get our blog updates. You can unsubscribe at any time. We respect your privacy and will never share your information.</p>
                            </div>
                        </div>


                        <div class="row pb-4">
                            <div class="col-md-12">
                                <div class="border_radius_10">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12" id="payment_area">
                                            <hr>
                                            <div class="pb-5">
                                                <input type="checkbox" class="custom-control-input" id="save-info"
                                                    required>
                                                <label class="custom-control-label" for="save-info">I agree to the Terms
                                                    and
                                                    conditions</label>

                                                <button class="btn btn-sm btn-light float-end"
                                                    type="submit"><strong>Next</strong>
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
        $('#where_you_referred').click(() => {
            if ($('.where_you_referred_display').hasClass( "d-none" )) {
                $('.where_you_referred_display').removeClass('d-none');
            } else {
                $('.where_you_referred_display').addClass('d-none');
            }
        });



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
            } else if (value == 'WordPress Development') {
                $('#custom_wordPress_inputs').removeClass('d-none');
            } else if (value == 'Frontend Development') {
                $('#custom_frontend_inputs').removeClass('d-none');
            } else if (value == 'Backend Development') {
                $('#custom_backend_inputs').removeClass('d-none');
            } else if (value == 'Web Application') {
                $('#custom_web_application_inputs').removeClass('d-none');
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
            $("#overview_area").removeClass('d-none');
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
            $("#overview_area").addClass('d-none');
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
                $('#custom_wordPress_inputs').removeClass('d-none');
            } else if (text == 'Frontend Development') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_frontend_inputs').removeClass('d-none');
            } else if (text == 'Backend Development') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_backend_inputs').removeClass('d-none');
            } else if (text == 'Web Application') {
                $('.custom-inputs').addClass('d-none');
                $('#custom_web_application_inputs').removeClass('d-none');
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
                                `<div class="d-flex align-items-center my-2"><input type="checkbox" class="custom_radio" name="service_category_name[]" id="forinput` +
                                pagedata.id + `" onclick="getservice('` + pagedata.id +
                                `','` + pagedata.page_title +
                                `')" value="${pagedata.id}">` +
                                `<label for="forinput` + pagedata.id +
                                `" class="ps-2 py-1 custom_field_allmenu_item" onclick="getservice('` +
                                pagedata.id + `','` + pagedata.page_title + `')">` +
                                pagedata.page_title + `</label></div>`;
                        });
                        // top_service_menu += `${value.subcategory_id}`;
                        top_service_menu += `<div class="col-sm-12 col-md-3 py-4">` +
                            `<h4 class="custom_field_menu_title mb-3">${value.category_name}</h4>` +
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
