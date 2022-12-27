<section class="padding_40">
    <div class="lead_data_table">

        <div class="focus_line_after_title text_dark_theme bg_white pt-5">
            <h4>Sample Of Leads Table</h4>
        </div>
        <p class="text-center">You can customize your needs as you seen below demo.</p>


    </div>
</section>

<section class="padding_40 pb-5">
    <div class="pb-3">
        <div class="row justify-content-between align-items-end pt-4">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <h4 style="font-size:25px;text-transform:uppercase;">Search Specific Leads</h4>

                <div class="mb-3">
                    <label for="" class="w-100" style="text-transform:uppercase;">Country Name</label>
                    <select name="country" class="js-select2 w-100" id="">
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Amer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="w-100" style="text-transform:uppercase;">Country Name</label>
                    <select name="city" class="js-select2 w-100" id="">
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Amer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="w-100" style="text-transform:uppercase;">Country Name</label>
                    <select name="industry" class="js-select2 w-100" id="">
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Country</option>
                        <option value="0">-- Select A Amer</option>
                    </select>
                </div>


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
                <button class="btn btn_city text-white float-end bg_theme_tomato" id="Filterreset">
                    <div class="ui toltip" data-content="You can reset filter" data-position="top center">
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
                    <div class="ui toltip" data-content="You can choose multiple cities as per your needs"
                        data-position="left center">
                        <select name="states" class="ui fluid search dropdown city_Name" id="city_Name">
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
                    <div class="ui toltip" data-content="You can choose multiple industry" data-position="left center">
                        <select name="states" class="ui fluid search dropdown city_Name" id="industry_Name">
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
                    <th style="min-width: 100px;">City</th>
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
</section>

@section('custom_js')
<script src="{{asset('assets/backend')}}/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/backend')}}/js/datatable/datatables/datatable.custom.js"></script>
<script src="{{asset('assets/frontend/js/table-filter.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>

    $('.js-select2').select2();

    $(document).ready(function () {
        $('#myTableSimple').DataTable();
    });

</script>
<script>
    $('#myTableSimple').DataTable({
        ajax: {
            url: `http://localhost/dimar_pro/onehalfleads`,
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
                data: 'zip_code'
            },
            {
                data: 'city'
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
@endsection
