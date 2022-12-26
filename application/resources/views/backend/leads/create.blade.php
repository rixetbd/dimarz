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
                    <span>You can upload multiple Lead</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('backend.csv.leadscsvupload')}}" enctype="multipart/form-data">
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
            <h4>File Formation</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTableStyle">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Company_Name</th>
                            <th scope="col">Industry</th>
                            <th scope="col">Company_Size</th>
                            <th scope="col">Revenue</th>
                            <th scope="col">Zip</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th scope="col">Website</th>
                            <th scope="col">Source link-1</th>
                            <th scope="col">Source link-2</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td>Abham Ivo</td>
                            <td>Partner</td>
                            <td>abr**@***al.ca</td>
                            <td>4898****</td>
                            <td>Abraham Legal</td>
                            <td>Law Firm</td>
                            <td>10 to 30</td>
                            <td>5 M</td>
                            <td>1254</td>
                            <td>Brampton</td>
                            <td>Canada</td>
                            <td>https://ww***..ca</td>
                            <td>https://example.com</td>
                            <td>https://example.com</td>
                        </tr>
                        <tr>
                            <td>Kent Green</td>
                            <td>Manager</td>
                            <td>kgr**@***aw.ca</td>
                            <td>4898****</td>
                            <td>Bronson Jones</td>
                            <td>Law Firm</td>
                            <td>10 to 30</td>
                            <td>28 M</td>
                            <td>14/A</td>
                            <td>Brampton</td>
                            <td>Canada</td>
                            <td>https://ww***..ca</td>
                            <td>https://example.com</td>
                            <td>https://example.com</td>
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
