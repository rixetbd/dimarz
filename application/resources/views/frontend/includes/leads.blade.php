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
</section>
