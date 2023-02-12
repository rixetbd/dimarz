@extends('backend.master')
@section('page_title', 'Country For Marketplace')
@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/datatables.css">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Country</h5>
                    <span>Add Country</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('backend.marketcountry.store')}}" class="dataStore">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Country Name" required="">
                        </div>
                        <div class="my-3 row">
                            <div class="col-6">
                                <input type="text" class="form-control" name="iso2" placeholder="ISO2" required="">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" name="iso3" placeholder="ISO3" required="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Country</button>
                    </form>
                </div>
            </div>

            {{-- <div class="card">
                <div class="card-header pb-0">
                    <h5>Upload</h5>
                    <span>Upload A CSV File</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('backend.csv.countrycsvupload')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="file" class="form-control" name="uploadfile" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload File</button>
                    </form>
                </div>
            </div> --}}

        </div>
        <div class="col-sm-12 col-md-9">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Country List</h5>
                    <span>All Country Information</span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableStyle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">ISO3</th>
                                    <th scope="col">ISO2</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table_data">
                                <tr>
                                    <td>1</td>
                                    <td>Name</td>
                                    <td>Slug</td>
                                    <td>Action</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


{{-- Modal || Start --}}
<div class="modal fade" id="CategoryEditModal" tabindex="-1" role="dialog" aria-labelledby="CategoryEditModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Info</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('backend.marketcountry.update')}}" id="dataUpdate">
                    @csrf
                    <div class="my-3">
                        <input type="hidden" name="id" id="parentID">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Country Name" required="">
                    </div>
                    <div class="my-3 row">
                        <div class="col-6">
                            <input type="text" class="form-control" name="iso2" id="iso2" placeholder="ISO2" required="">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="iso3" id="iso3" placeholder="ISO3" required="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update info</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Modal || End --}}
@endsection

@section('custom_script')
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.min.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/griddata.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.js"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/backend')}}/js/datatable/datatables/datatable.custom.js"></script>

<script>
    function cat_edit(id) {
        $.ajax({
            url: `{{route('backend.marketcountry.edit')}}`,
            method: 'post',
            data: {
                id: id
            },
            success: function (data) {
                $('#parentID').val(id);
                $('#name').val(data.info.name);
                $('#iso2').val(data.info.iso2);
                $('#iso3').val(data.info.iso3);
                $('#CategoryEditModal').modal('show');
            }
        });
    }

</script>

<script>
    $('#dataTableStyle').DataTable({
        ajax: {
            url: `{{route('backend.marketcountry.autocountry')}}`,
            dataSrc: ''
        },
        columns: [{
                data: null,
                render: function (data, type, full, meta) {
                    return meta.row + 1;
                }
            },
            {
                data: 'name',
                defaultContent: ''
            },
            {
                data: 'iso3',
                defaultContent: ''
            },
            {
                data: 'iso2',
                defaultContent: ''
            },
            {
                "data": null, // (data, type, row)
                className: "text-center",
                render: function (data) {
                    return `<button class="border-0 btn-sm btn-info me-2" onclick="cat_edit('` +
                        data.id + `')"><i class="fa fa-edit"></i></button>` +
                        `<button class="border-0 btn-sm btn-danger me-2" onclick="cat_distroy('` +
                        data.id + `')"><i class="fa fa-trash"></i></button>`;
                },
                defaultContent: ''
            },
        ]
    });


    $('.dataStore').on('submit', function (e) {
        e.preventDefault();
        // alert('Ho');
        var form = this;
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (data) {
                $('#dataTableStyle').DataTable().ajax.reload();
                $('input').val('');
                notyf.success("Action Successful");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });

    $('#dataUpdate').on('submit', function (e) {
        e.preventDefault();
        // alert('Ho');
        var form = this;
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (data) {
                $('#dataTableStyle').DataTable().ajax.reload();
                $('input').val('');
                $('#CategoryEditModal').modal('hide');
                notyf.success("Update Successfully!");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });

    function cat_distroy(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: `{{route('backend.marketcountry.destroy')}}`,
                    data: {
                        "id": id
                    },
                    success: function (data) {
                        $('#dataTableStyle').DataTable().ajax.reload();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    },
                    error: function (request, status, error) {
                        notyf.error('Data Delete Unsuccessfully!');
                    }
                });
            }
        })
    }

</script>

@endsection
