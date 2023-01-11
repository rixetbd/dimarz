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
    <title>{{$general_data['invoice']}}</title>
</head>

<body cz-shortcut-listen="true">

    {{-- <pre>
        @php
            print_r($general_data)
        @endphp
    </pre> --}}

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
                                    <h1 class="big-title">Invoice</h1><span><b>Invoice No:
                                        </b>{{$general_data['invoice']}}</span>
                                </div>
                            </div>
                        </header>
                        <hr class="style1">
                        <div class="row justify-content-between my-4">
                            <div class="col-auto">
                                <div class="">
                                    <b>{{$general_data['customer_fname'].' '.$general_data['customer_lname']}}</b>
                                    <address>{{$general_data['customer_cname']}},
                                        <br>{{$general_data['customer_city']}}, {{$general_data['customer_country']}}
                                        <br>{{$general_data['customer_phone']}}
                                        <br>{{$general_data['customer_email']}}</address>
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
                                        Method:</b><br><span>{{$general_data['payment']}}</span></div>
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
                                    {{-- <td>{{$general_data['category']->page_title}}</td> --}}
                                    {{-- <td>{{$general_data['gigname']}}</td> --}}
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
                        </table>

                        <div class="col-12">
                            <div class="invoice-left"><b>Your Message:</b>
                                <p>
                                    {{$general_data['plan_brief']}}
                                </p>
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-6"><b>Total Budget Offer:</b></div>
                            <div class="col-6 text-end">{{$general_data['budget']}}</div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-sm-12 col-md-auto"><b>Payment Notice:</b>
                                <p class="mb-0">Our payment method is in processing. So we will choose a payment gateway
                                    after discussing the project.</p>
                            </div>
                        </div>

                        <p class="invoice-note mt-3"><svg width="13" height="16" viewBox="0 0 13 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.22969 12.6H9.77031V11.4H3.22969V12.6ZM3.22969 9.2H9.77031V8H3.22969V9.2ZM1.21875 16C0.89375 16 0.609375 15.88 0.365625 15.64C0.121875 15.4 0 15.12 0 14.8V1.2C0 0.88 0.121875 0.6 0.365625 0.36C0.609375 0.12 0.89375 0 1.21875 0H8.55156L13 4.38V14.8C13 15.12 12.8781 15.4 12.6344 15.64C12.3906 15.88 12.1063 16 11.7812 16H1.21875ZM7.94219 4.92V1.2H1.21875V14.8H11.7812V4.92H7.94219ZM1.21875 1.2V4.92V1.2V14.8V1.2Z"
                                    fill="#1CB9C8"></path>
                            </svg> <b>NOTE: </b>This is computer generated receipt and does not require physical
                            signature.</p>
                    </div>
                    <div class="invoice-buttons">

                        <button class="back_btn mx-2" onclick="history.back(-1)">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back</span>
                        </button>

                        <button class="print_btn mx-2">
                            <i class="fas fa-print"></i>
                            <span>Print</span>
                        </button>

                        <form action="{{route('cart.single.confirmgeneralorder')}}" method="post">
                            @csrf
                            <button class="confirm_btn mx-2" type="submit">
                                <i class="fas fa-download"></i>
                                <span>Confirm Order</span>
                            </button>
                        </form>

                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{asset('assets/invoice')}}/jquery-3.6.0.min.js"></script>
    <script src="{{asset('assets/invoice')}}/app.min.js"></script>
    <script src="{{asset('assets/invoice')}}/main.js"></script>
</body>

</html>
