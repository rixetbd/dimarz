<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="{{asset('assets/invoice')}}/css2" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/invoice')}}/app.min.css">
    <link rel="stylesheet" href="{{asset('assets/invoice')}}/css.css">
    <link rel="stylesheet" href="{{asset('assets/invoice')}}/style.css">
</head>

<body cz-shortcut-listen="true">
    <div class="invoice-container-wrap">
        <div class="invoice-container">
            <main>
                <div class="as-invoice invoice_style17">
                    <div class="download-inner" id="download_section">
                        <header class="as-header header-layout12">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <div class="header-logo"><a href="{{url('/')}}" target="_blank">DiMarz</a></div>
                                </div>
                                <div class="col-auto">
                                    <h1 class="big-title">Invoice</h1><span><b>Invoice No: </b>{{$invoiceID}}</span>
                                </div>
                            </div>
                        </header>
                        <hr class="style1">
                        <div class="row justify-content-between my-4">
                            {{-- <div class="col-8">
                                <div class="invoice-left"><b>Your Message:</b>
                                    <p>
                                        {{$order_data['plan_brief']}}
                                    </p>
                                </div>
                            </div> --}}
                            <div class="col-auto">
                                <div class=""> {{-- invoice-right --}}
                                    <b>{{$order_data['customer_fname'].' '.$order_data['customer_lname']}}</b>
                                    <address>{{$order_data['customer_cname']}},
                                        <br>{{$order_data['customer_city']}}, {{$order_data['customer_country']}}
                                        <br>{{$order_data['customer_phone']}}
                                        <br>{{$order_data['customer_email']}}</address>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-0 justify-content-between my-4">
                            <div class="col-6">
                                <div class="info-box2 text-start"><b>Order Date:</b><br><span>{{date('d/m/Y')}}</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="info-box2 text-end"><b>Payment
                                        Method:</b><br><span>{{$order_data['payment']}}</span></div>
                            </div>
                        </div>

                        <p class="table-title"><b>Serive Information:</b></p>
                        <table class="invoice-table table-stripe3 style5">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Service Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$order_data['category']->page_title}}</td>
                                    <td>{{$order_data['gigname']}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="invoice-table table-stripe3">
                            <thead>
                                <tr>
                                    <th colspan="2" class="text-start">Primary Requirement</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (array_key_exists('qa_01_Q', $service_data))
                                <tr>
                                    <td>{{$service_data['qa_01_Q']}}</td>
                                    <td>{{($service_data['qa_01'] != ''?$service_data['qa_01']:'N/A')}}</td>
                                </tr>
                                @endif

                                @if(array_key_exists('qa_02_Q', $service_data))
                                <tr>
                                    <td>{{$service_data['qa_02_Q']}}</td>
                                    <td>{{($service_data['qa_02'] != ''?$service_data['qa_02']:'N/A')}}</td>
                                </tr>
                                @endif
                                @if(array_key_exists('qa_03_Q', $service_data))
                                <tr>
                                    <td>{{$service_data['qa_03_Q']}}</td>
                                    <td>{{($service_data['qa_03'] != ''?$service_data['qa_03']:'N/A')}}</td>
                                </tr>
                                @endif
                                @if(array_key_exists('qa_04_Q', $service_data))
                                <tr>
                                    <td>{{$service_data['qa_04_Q']}}</td>
                                    <td>{{($service_data['qa_04'] != ''?$service_data['qa_04']:'N/A')}}</td>
                                </tr>
                                @endif

                                @if (array_key_exists('qa_05_Q', $service_data))
                                <tr>
                                    <td>{{$service_data['qa_05_Q']}}</td>
                                    <td>{{($service_data['qa_05'] != ''?$service_data['qa_05']:'N/A')}}</td>
                                </tr>
                                @endif

                                @if(array_key_exists('qa_06_Q', $service_data))
                                <tr>
                                    <td>{{$service_data['qa_06_Q']}}</td>
                                    <td>{{($service_data['qa_06'] != ''?$service_data['qa_06']:'N/A')}}</td>
                                </tr>
                                @endif
                                @if(array_key_exists('qa_07_Q', $service_data))
                                <tr>
                                    <td>{{$service_data['qa_07_Q']}}</td>
                                    <td>{{($service_data['qa_07'] != ''?$service_data['qa_07']:'N/A')}}</td>
                                </tr>
                                @endif
                                @if(array_key_exists('qa_08_Q', $service_data))
                                <tr>
                                    <td>{{$service_data['qa_08_Q']}}</td>
                                    @if(array_key_exists('qa_08', $service_data))
                                        <td>{{($service_data['qa_08'] != ''?$service_data['qa_08']:'N/A')}}</td>
                                    @else
                                        <td>N/A</td>
                                    @endif
                                </tr>
                                @endif

                            </tbody>
                            {{-- <tfoot>
                                <tr>
                                    <td><b>Total Budget Offer:</b></td>
                                    <td>{{$order_data['budget']}}</td>
                                </tr>
                            </tfoot> --}}
                        </table>

                        <div class="col-12">
                                <div class="invoice-left"><b>Your Message:</b>
                                    <p>
                                        {{$order_data['plan_brief']}}
                                    </p>
                                </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-6"><b>Total Budget Offer:</b></div>
                            <div class="col-6 text-end">{{$order_data['budget']}}</div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-sm-12 col-md-auto"><b>Payment Notice:</b>
                                <p class="mb-0">Our payment method is in processing. So we will choose a payment gateway
                                    after discussing the project.</p>
                            </div>
                            {{-- <div class="col-sm-12 col-md-6">
                                <table class="total-table2">
                                    <tbody>
                                        <tr>
                                            <th>Paid:</th>
                                            <td>$00.00</td>
                                        </tr>
                                        <tr>
                                            <th>Budget Offer:</th>
                                            <td>{{$order_data['budget']}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> --}}
                        </div>

                        <p class="invoice-note mt-3"><svg width="13" height="16" viewBox="0 0 13 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.22969 12.6H9.77031V11.4H3.22969V12.6ZM3.22969 9.2H9.77031V8H3.22969V9.2ZM1.21875 16C0.89375 16 0.609375 15.88 0.365625 15.64C0.121875 15.4 0 15.12 0 14.8V1.2C0 0.88 0.121875 0.6 0.365625 0.36C0.609375 0.12 0.89375 0 1.21875 0H8.55156L13 4.38V14.8C13 15.12 12.8781 15.4 12.6344 15.64C12.3906 15.88 12.1063 16 11.7812 16H1.21875ZM7.94219 4.92V1.2H1.21875V14.8H11.7812V4.92H7.94219ZM1.21875 1.2V4.92V1.2V14.8V1.2Z"
                                    fill="#1CB9C8"></path>
                            </svg> <b>NOTE: </b>This is computer generated receipt and does not require physical
                            signature.</p>
                    </div>
                    <div class="invoice-buttons"><button class="print_btn"><svg width="16" height="16"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9688 8.46875C12.1146 8.32292 12.2917 8.25 12.5 8.25C12.7083 8.25 12.8854 8.32292 13.0312 8.46875C13.1771 8.61458 13.25 8.79167 13.25 9C13.25 9.20833 13.1771 9.38542 13.0312 9.53125C12.8854 9.67708 12.7083 9.75 12.5 9.75C12.2917 9.75 12.1146 9.67708 11.9688 9.53125C11.8229 9.38542 11.75 9.20833 11.75 9C11.75 8.79167 11.8229 8.61458 11.9688 8.46875ZM13.5 5.5C14.1875 5.5 14.7708 5.75 15.25 6.25C15.75 6.72917 16 7.3125 16 8V12C16 12.1458 15.9479 12.2708 15.8438 12.375C15.7604 12.4583 15.6458 12.5 15.5 12.5H13.5V15.5C13.5 15.6458 13.4479 15.7604 13.3438 15.8438C13.2604 15.9479 13.1458 16 13 16H3C2.85417 16 2.72917 15.9479 2.625 15.8438C2.54167 15.7604 2.5 15.6458 2.5 15.5V12.5H0.5C0.354167 12.5 0.229167 12.4583 0.125 12.375C0.0416667 12.2708 0 12.1458 0 12V8C0 7.3125 0.239583 6.72917 0.71875 6.25C1.21875 5.75 1.8125 5.5 2.5 5.5V1C2.5 0.729167 2.59375 0.5 2.78125 0.3125C2.96875 0.104167 3.1875 0 3.4375 0H10.375C10.7917 0 11.1458 0.145833 11.4375 0.4375L13.0625 2.0625C13.3542 2.35417 13.5 2.70833 13.5 3.125V5.5ZM4 1.5V5.5H12V3.5H10.5C10.3542 3.5 10.2292 3.45833 10.125 3.375C10.0417 3.27083 10 3.14583 10 3V1.5H4ZM12 14.5V12.5H4V14.5H12ZM14.5 11V8C14.5 7.72917 14.3958 7.5 14.1875 7.3125C14 7.10417 13.7708 7 13.5 7H2.5C2.22917 7 1.98958 7.10417 1.78125 7.3125C1.59375 7.5 1.5 7.72917 1.5 8V11H14.5Z"
                                    fill="white"></path>
                            </svg> <span>Print</span></button></div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{asset('assets/invoice')}}/jquery-3.6.0.min.js"></script>
    <script src="{{asset('assets/invoice')}}/app.min.js"></script>
    <script src="{{asset('assets/invoice')}}/main.js"></script>
</body>

</html>
