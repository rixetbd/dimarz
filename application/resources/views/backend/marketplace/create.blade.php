@extends('backend.master')
@section('page_title', 'Lead Data')
@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/datatables.css">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row align-items-center justify-content-center" style="padding-top:10vh;">
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Lead Information</h5>
                    <span>You can upload multiple Lead for marketplace sheet.</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('backend.marketleads.leadscsvupload')}}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label pt-0 required" for="uploadfile">Upload File</label>
                            <input class="form-control" id="uploadfile" name="uploadfile" type="file" required>
                            <span style="color:#707070;"><small>* Upload a CSV File</small></span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h4>Columns Formation</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTableStyle">
                    <thead>
                        <tr>
                            <th scope="col">CombinedLeads</th>
                            <th scope="col">Lead Code</th>
                            <th scope="col">Country</th>
                            <th scope="col">Industry</th>
                            <th scope="col">Niche</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Company_Name</th>
                            <th scope="col">Website</th>
                            <th scope="col">Company_Address</th>
                            <th scope="col">Revenue</th>
                            <th scope="col">Company_Size</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Person Email</th>
                            <th scope="col">Company Email</th>
                            <th scope="col">Person Phone</th>
                            <th scope="col">Company Phone</th>
                            <th scope="col">Linkedin</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Source Link-1</th>
                            <th scope="col">Other Info</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td>DM01 | USA | Construction | Interior Designers</td>
                            <td>DM01</td>
                            <td>USA</td>
                            <td>Construction</td>
                            <td>Interior Designers</td>
                            <td>Los Angeles</td>
                            <td>California</td>
                            <td>Metropolitan Animal Specialty Hospital</td>
                            <td>http://www.mash.vet/</td>
                            <td>X</td>
                            <td>$9 M</td>
                            <td>X</td>
                            <td>Adam</td>
                            <td>Strom</td>
                            <td>Surgeon</td>
                            <td>astrom@mash.vet</td>
                            <td>X</td>
                            <td>18553507387</td>
                            <td>X</td>
                            <td>http://www.linkedin.com/in/lissa-richardson-b2a67150</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_script')

@endsection
