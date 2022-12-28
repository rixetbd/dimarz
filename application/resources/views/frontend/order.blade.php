<!doctype html>
<html lang="en">

<head>

    <title>DiMarz - Site Layout</title>
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
            color: #555;
            font-weight: 700;
            font-size: 22px;
        }
        /* form label{color: #fff;} */
        form input.form-control,
        form select.form-control,
        form select.form-select,
        form textarea.form-control,
        .form-control:disabled,
        .form-control[readonly] {
            /* background-color: #ffffff8e; */
            background-color: #373737;
            opacity: 1;
            border: 1px solid #b0b4bbd0;
            box-shadow: none;
            border-radius: 0;
            letter-spacing: 1px;
            padding: 10px 15px;
            color: #fff;
        }

        .inline_input .input {
            width: -webkit-fill-available;
        }
        body{
            background-color: #035d4d;
        }
        .bg_three_seven{
            background-color: #373737;
            color: #fff;
        }
        .bg_three_seven_shadow{
            box-shadow: 0px 0px 10px #28282899;
        }
        .border_radius_10{
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="padding-top: 3rem;" id="place_a_order">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="py-5 text-center">
                        <h1>Place a order</h1>
                        <p class="lead">Please fill up all fields with valid information.</p>
                    </div>

                    <div class="col-12 mb-4 bg_three_seven bg_three_seven_shadow border_radius_10" style="">
                        <div class="row px-4 py-5">
                            <div class="col-sm-12 col-md-8">
                                <h6>Your Order</h6>
                                <h3>B2B Lead Generation Services</h3>
                                <p>After confirm your order we will contact with you as soon as possible. Please don't use any false information at submiting time.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 text-end">
                                <h6>Subtotal: $<span>50.99</span></h6>
                                <h4>Total Pay: $<span>50.99</span></h4>
                            </div>
                        </div>
                    </div>

                    <div class="row pb-4">

                        <div class="col-md-12">
                            <div class="border_1x p-3 border_radius_10">
                                <form action="" method="POST">
                                    <h4 class=""> </h4>
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
                                    <hr class="mb-4">
                                    <h4 class="mb-3 order_heading">Billing Information</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-12 mb-3 inline_input">
                                                <div class="input">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="firstName" placeholder="First name" value="" required="">
                                                </div>
                                                <div class="invalid-feedback">
                                                    Valid first name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12 mb-3 inline_input">
                                                <div class="input">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="firstName" placeholder="Last name" value="" required="">
                                                </div>
                                                <div class="invalid-feedback">
                                                    Valid last name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12 mb-3 inline_input">
                                                <div class="input">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="firstName" placeholder="Email" value="" required="">
                                                </div>
                                                <div class="invalid-feedback">
                                                    Valid first name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12 mb-3 inline_input">
                                                <div class="input">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="firstName" placeholder="Company Name" value="" required="">
                                                </div>
                                                <div class="invalid-feedback">
                                                    Valid first name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12 mb-3 inline_input">
                                                <div class="input">
                                                    <input type="tel" class="form-control form-control-sm"
                                                        id="firstName" placeholder="Phone" value="" required="">
                                                </div>
                                                <div class="invalid-feedback">
                                                    Valid first name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12 mb-3 inline_input">
                                                <div class="input">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="firstName" placeholder="Country Name" value="" required="">
                                                </div>
                                                <div class="invalid-feedback">
                                                    Valid first name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mt-3 order_heading">Service Details</h4>
                                        <div class="col-md-12 mb-4">
                                            <textarea name="" class="form-control form-control-sm"
                                                placeholder="Working Description (Example - I need a service ... )"
                                                style="height:100px;"></textarea>
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
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
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 my-4">
                            <div class="p-4 border_radius_10 bg_three_seven bg_three_seven_shadow">
                                <h4 class="d-flex justify-content-between align-items-center">
                                    <span>What is Pre Build Packages ?</span>
                                </h4>
                                <p>
                                    A service package is a collection of services offered as a unit by a business. At
                                    the
                                    customer's
                                    request, a product can be customized by having one-time effects added. Contacting
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




    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>


</body>

</html>
