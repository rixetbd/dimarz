<section class="padding_40">
    <div class="lead_data_table">

        <div class="focus_line_after_title text_dark_theme bg_white pt-5">
            <h4>Sample Of Leads Table</h4>
        </div>
        <p class="text-center">You can customize your needs as you seen below demo.</p>


    </div>
</section>

@php
$all_countries = App\Models\Country::select('id','name','iso2')->orderBy('name','ASC')->get();
$all_city = App\Models\City::select('id','name')->orderBy('name','ASC')->get();
@endphp

<section class="padding_40 pb-5">
    <div class="pb-3">

        <div class="row justify-content-between align-items-end pt-4">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <h4 style="font-size:18px;text-transform:uppercase;">Search Specific Leads</h4>
                <hr>
                <div class="col-12 search_div" id="country_Name_Box">
                    <input type="hidden" id="country_Name_catch">
                    <label for="" class="w-100" style="text-transform:uppercase;">Country Name </label>
                    {{-- <i class="fa-solid fa-angle-down CONCON1"></i> --}}
                    <div class="ui fluid search selection dropdown search_input_st" id="country_Name">
                        <input type="hidden" name="country" id="country_Name_Input">
                        <i class="dropdown icon"></i>
                        <div class="default text">Search Country</div>
                        <div class="menu">
                            @foreach ($all_countries as $country)
                            <div class="item" data-value="{{$country->id}}"><i
                                    class="{{Str::lower($country->iso2)}} flag"></i>{{$country->name}}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <button class="btn btn_city text-white float-end bg_theme_tomato" id="Filterreset">
                    <div class="ui toltip" data-content="You can reset filter" data-position="top center">
                        RESET ALL
                    </div>
                </button>
            </div>
        </div>

        <div class="col-12 row" style="padding-bottom:15px;border-bottom:1px solid #f1f1f1;padding-bottom: 10px;">
            <div class="col-xs-12 col-sm-12 col-md-4" id="NullData">
                <div class="col-12 search_div" id="">
                    <label for="" class="w-100" style="text-transform:uppercase;">City Name</label>
                    <div class="ui toltip" data-content="You can choose multiple cities as per your needs"
                        data-position="right center">
                        <select name="states" class="ui fluid search_input_st search dropdown city_Name" id="city_Name">
                            <option value="">All Cities</option>
                        @foreach ($all_city as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 mt-3" id="city_name_display">
                <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>
            </div>
        </div>

        <div class="col-12 row" style="padding-bottom:15px;border-bottom:1px solid #f1f1f1">
            <div class="col-xs-12 col-sm-12 col-md-4" id="NullData">
                <div class="col-12 search_div" id="">
                    <label for="" class="w-100" style="text-transform:uppercase;">Industry Name</label>
                    <div class="ui toltip" data-content="You can choose multiple industry" data-position="right center">
                        <select name="states" class="ui fluid search dropdown search_input_st city_Name"
                            id="industry_Name">
                            <option value="">All Industry</option>
                            <option value="dental">Dental</option>
                            <option value="law firm">Law Firm</option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="HVAC">HVAC</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Chiropactor">Chiropactor</option>
                            <option value="Dentist">Dentist</option>
                            <option value="Physiotherapy">Physiotherapy</option>
                            <option value="Eye">Eye</option>

                            {{-- @foreach ($all_industry as $industry)
                            <option value="{{$industry->id}}">{{$industry->name}}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 mt-3" id="industry_Name_display">
                <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>
            </div>
        </div>
        {{--

        <div style="margin:25px 0;">
            <p style="line-height: 0.5715em;">* Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
                atque?</p>
            <p style="line-height: 0.5715em;">* Lorem ipsum dolor sit amet consectetur adipisicingi, atque?</p>
        </div> --}}


        {{-- Click Here to Select All (Default) --}}

        <div class="row my-3 filter_btn">
            {{-- <div class="col-2"><label class="btn btn_city w-100" id="table_refresh">All Tabs Selected <i
                class="fas fa-redo-alt ms-3"></i></label></div> --}}
        </div>


        <div class="row my-3 filter_btn font_poppins">

            <div class="col-2"> <label class="btn btn_city w-100" id="table_Name">Person Name
                    <input type="checkbox" disabled checked id="table_Name_IN"></label></div>
            <div class="col-2"><label class="btn btn_city w-100" id="table_Title">Job Title
                    <input type="checkbox" disabled checked id="table_Title_IN"></label></div>
            <div class="col-2"><label class="btn btn_city w-100" id="table_Company">Company Name
                    <input type="checkbox" disabled checked id="table_Company_IN"></label></div>
            <div class="col-2"><label class="btn btn_city w-100" id="table_City">City <input type="checkbox" disabled
                        checked id="table_City_IN"></label></div>
            <div class="col-2"><label class="btn btn_city w-100" id="">Industry <input type="checkbox" disabled checked
                        id="table_City_IN"></label></div>
            <div class="col-2">
                <div class="ui toltip" data-content="Selected Tabs Action" data-position="top center">
                    <label class="btn btn_city w-100 bg_theme" id="table_refresh">All Tabs
                        Selected</label>
                </div>
            </div>

        </div>

        <div class="row filter_btn">
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_Email">Email <input type="checkbox" checked
                        id="table_Email_IN"></label>
            </div>
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_Phone">Phone <input type="checkbox" checked
                        id="table_Phone_IN"></label>
            </div>
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_Company_Size">Company Size <input type="checkbox" checked
                        id="table_Company_Size_IN"></label>
            </div>
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_Revenue">Revenue <input type="checkbox" checked
                        id="table_Revenue_IN"></label>
            </div>
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_Zip_code">Zip Code <input type="checkbox" checked
                        id="table_Zip_code_IN"></label>
            </div>
            <div class="col-2">
                <label class="btn btn_city w-100" id="table_URL">Website <input type="checkbox" checked
                        id="table_URL_IN"></label>
            </div>

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12" style="overflow-x:auto;">
        <div class="table-responsive">
            <table class="table cell-border TableIDADD leads_data_table" id="myTableSimple">
                <thead>
                    <th>Person Name</th>
                    <th style="">Job Title</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th style="min-width: 170px;">Company Name</th>
                    <th style="width: 105px;min-width: 105px;">Company Size</th>
                    <th>Revenue</th>
                    <th style="min-width: 50px;">City</th>
                    <th style="min-width: 72px;">Zip Code</th>
                    <th>Website</th>
                </thead>
                <tbody id="lead_data">
                    <tr class="odd">
                        <td class="sorting_1">person_name</td>
                        <td>title</td>
                        <td>abr****@*****al.ca</td>
                        <td>4898****</td>
                        <td>Abraham Legal S...</td>
                        <td>10 to 30</td>
                        <td>revenue</td>
                        <td>Brampton</td>
                        <td>N/A</td>
                        <td>https://ww***..ca</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4 justify-content-center">
        <div class="col-sm-12 col-md-4 text-center">
            <button class="btn btn-sm leadtableC_btn"><i class="fas fa-shopping-cart"></i> Order Now</button>
            <button class="btn btn-sm leadtableC_btn">Contact Us</button>
        </div>
    </div>
</section>

@section('custom_js')
<script src="{{asset('assets/backend')}}/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/backend')}}/js/datatable/datatables/datatable.custom.js"></script>
<script src="{{asset('assets/frontend/js/table-filter.js')}}"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/frontend/js/custom-semantic.min.js')}}"></script>

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

    $(document).ready(function () {
        $('#myTableSimple').DataTable();
    });

    $('#city_Name22').popup({
        inline: true
    });

    // $('.toltip').popup();
    $('.toltip').popup({
        inline: true
    });

</script>
<script>
    $('#myTableSimple').DataTable({
        ajax: {
            url: `{{route('frontend.onehalfleads')}}`,
            dataSrc: ''
        },
        columns: [{
                data: 'person_name'
            },
            {
                data: 'title'
            },
            {
                data: 'email'
            },
            {
                data: 'phone'
            },
            {
                data: 'company_name'
            },
            {
                data: 'company_size'
            },
            {
                data: 'revenue'
            },
            {
                data: 'city'
            },
            {
                data: 'zip_code'
            },
            {
                data: 'website'
            },
        ],
        error: function (request, status, error) {
            notyf.error('No data available in table');
        }
    });

</script>

<script>
    $('#country_Name').change(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let country = $('#country_Name_Input').val();
        $('#city_name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');
        // $('.city_name').next('.text').html('');
        // $('#myTableSimple').DataTable().clear().draw();

        var tableData = $('#myTableSimple').DataTable();

        $.ajax({
            type: 'POST',
            url: `{{route('search.getcities')}}`,
            data: {
                'country': country
            },
            success: function (data) {
                $('#country_Name_catch').val(data.country_name);
                $('#city_Name').html(data.cities);
                // $('#lead_data').html(data.lead_datasearch);
                tableData.clear().draw();
                tableData.destroy();
                let leadsurl = `{{url('/')}}/search/leadbycountry/:countryname`;
                leadsurl_f = leadsurl.replace(':countryname', data.country_name);
                $('#myTableSimple').DataTable({
                    ajax: {
                        url: leadsurl_f,
                        dataSrc: ''
                    },
                    columns: [{
                            data: 'person_name'
                        },
                        {
                            data: 'title'
                        },
                        {
                            data: 'email'
                        },
                        {
                            data: 'phone'
                        },
                        {
                            data: 'company_name'
                        },
                        {
                            data: 'company_size'
                        },
                        {
                            data: 'revenue'
                        },
                        {
                            data: 'city'
                        },
                        {
                            data: 'zip_code'
                        },
                        {
                            data: 'website'
                        },
                    ],
                    error: function (request, status, error) {
                        notyf.error('No data available in table');
                    }
                });
            }
        });
    });

</script>


<script>
    var industries = [];

    $('#industry_Name').change(function () {

        let newDataIN = $('#industry_Name option:selected').text();
        if (industries.indexOf(newDataIN) !== -1) {
            notyf.error("Already Selected.");
        } else {
            industries.push($('#industry_Name option:selected').text());
            $('#industry_Name_display').append($('<button class="new_item">').html($(
                    '#industry_Name option:selected')
                .text() + '<span class="new_item_close"><i class="fas fa-times"></i></span>'));
        }
        console.log(industries);
        $('#industry_Name_display .new_item').click(function () {
            // alert($(this).text());
            $(this).remove();
            let text = $(this).text();
            let citiesindex = industries.indexOf(text);
            if (citiesindex > -1) {
                industries.splice(citiesindex, 1); // 2nd parameter means remove one item only
            }
        });

        setTimeout(
            function () {
                // $('#industry_Name').next($('.menu .active').addClass('d-none'));
            }, 500);


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $country = $('#country_Name_Input').val();
        $.ajax({
            type: 'POST',
            url: `{{route('search.leadresetdata.leadBycities')}}`,
            data: {
                'country': $country,
                'city_Name': JSON.stringify(cities),
                'industry_Name': JSON.stringify(industries),
            },
            success: function (data) {
                // $('#lead_data').html(data.lead_datasearch);
                // console.log(data.lead_datasearch);
                console.log(data.data);
            }
        });
    });

</script>


<script>
    $('#Filterreset').click(function () {
        $('#country_Name').next($('.text').eq(0).html('Search Country'));
        $('#country_Name').val('');
        cities = [];
        industries = [];
        $('#city_name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');
        $('#industry_Name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');

        $.ajax({
            type: 'POST',
            url: `{{route('search.leadresetdata')}}`,
            data: {
                id: 'all'
            },
            success: function (data) {
                // $('#lead_data').html('');
                $('#city_Name').html(data.cities);
                // $('#lead_data').html(data.lead_datasearch);
            }
        });

    });

</script>


<script>
    var cities = [];

    $('#city_Name').change(function () {
        let newData = $('#city_Name option:selected').text().trim();;
        if (cities.indexOf(newData) !== -1) {
            notyf.error("Already Selected.");
        } else {
            cities.push(newData);
            console.log(cities);
            $('#city_name_display').append($('<button class="new_item">').html($('#city_Name option:selected')
                .text() + '<span class="new_item_close"><i class="fas fa-times"></i></span>'));
        }

        // localStorage.setItem("cities", cities);


        setTimeout(
            function () {
                // $('#city_Name').next($('.menu .active').addClass('d-none'));
            }, 500);

        $('#city_name_display .new_item').click(function () {
            // alert($(this).text());
            $(this).remove();
            let text = $(this).text();
            let citiesindex = cities.indexOf(text);
            if (citiesindex > -1) {
                cities.splice(citiesindex, 1); // 2nd parameter means remove one item only
            }

            // $.ajax({
            //     type: 'POST',
            //     url: `{{route('search.getcities')}}`,
            //     data: {
            //         'city_Name': JSON.stringify(cities),
            //         // 'country': $country
            //     },
            //     success: function (data) {
            //         $('#lead_data').html(data.lead_datasearch);
            //     },
            //     // error: function (data) {
            //     //     alert("fail");
            //     // }
            // });

        });

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        $country = $('#country_Name_Input').val();
        $.ajax({
            type: 'POST',
            url: `{{route('search.leadresetdata.leadBycities')}}`,
            data: {
                'city_Name': JSON.stringify(cities),
                'country': $country
            },
            success: function (data) {
                $('#lead_data').html(" ");
                $('#city_Name').html(data.cities);
                $('#lead_data').html(data.lead_datasearch);
                $('.TableIDADD').attr('id', 'myTableSimple');
                $('#myTableSimple').DataTable();
                console.log(data.lead_datasearch);
                // console.log(data.lead_datasearch);
            },
            // error: function (data) {
            //     alert("fail");
            // }
        });

        // let country = $('#country_Name_Input').val();
        // $('#city_name_display').html('<label for="" class="w-100" style="min-height: 24px;">&nbsp;</label>');
        // // $('.city_name').next('.text').html('');
        // $.ajax({
        //     type: 'POST',
        //     url: `{{route('search.getcities')}}`,
        //     data: {
        //         'country': country
        //     },
        //     success: function (data) {
        //         $('#country_Name_catch').val(data.country_name);
        //         $('#city_Name').html(data.cities);
        //         // $('#lead_data').html(data.lead_datasearch);
        //     }
        // });
        // });

        $('#city_Name').next($('.text').eq(1).html('Search cities'));
    });

    $('body').click(function () {

        $('#city_Name').next($('.text').eq(1).html('Search cities'));
        $('#industry_Name').next($('.text').eq(2).html('Search industry'));

    });

</script>


@endsection
