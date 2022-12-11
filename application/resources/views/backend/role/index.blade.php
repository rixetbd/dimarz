@extends('backend.master')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/datatables.css">
<style>
    .checkbox-dark label {
        color: #707070;
        font-weight: 500;
    }

    .checkbox-dark label::before {
        border-color: #c3c3c3;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Role Permission</h5>
                    <span>Add Role</span>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('backend.role.store')}}" id="rolePermission"> {{-- id="ajaxForm" --}}
                        @csrf
                        <div class="mb-3">
                            <label class="form-label pt-0" for="name">Role Name</label>
                            <input class="form-control" id="name" type="text" name="name" placeholder="Role Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label pt-0" for="name">Role Permissions</label>
                            <div class="form-group m-checkbox-inline mb-0">
                                <div class="checkbox checkbox-dark col-5">
                                    <input id="articles" type="checkbox" name="articles">
                                    <label for="articles">Article</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="attendance" type="checkbox" name="attendance">
                                    <label for="attendance">Attendance</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="category" type="checkbox" name="category">
                                    <label for="category">Category</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="employee" type="checkbox" name="employee">
                                    <label for="employee">Employee</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="faq" type="checkbox" name="faq">
                                    <label for="faq">FAQ</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="gigpage" type="checkbox" name="gigpage">
                                    <label for="gigpage">Gigpage</label>
                                </div>
                                <div class="checkbox checkbox-dark col-5">
                                    <input id="mainpage" type="checkbox" name="mainpage">
                                    <label for="mainpage">Mainpage</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="seo" type="checkbox" name="seo">
                                    <label for="seo">SEO</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="salary" type="checkbox" name="salary">
                                    <label for="salary">Salary</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="settings" type="checkbox" name="settings">
                                    <label for="settings">Settings</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="users" type="checkbox" name="users">
                                    <label for="users">Users</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="workprocess" type="checkbox" name="workprocess">
                                    <label for="workprocess">Workprocess</label>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-8">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Role List</h5>
                    <span>All Role Permission Information</span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableStyle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Permissions</th>
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
                <h5 class="modal-title">Category Edit</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="theme-form" method="post" action="javascript:void(0)">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input id="CategoryID" type="hidden" name="id">
                        <label class="col-form-label pt-0" for="CategoryName">Category Name</label>
                        <input class="form-control" id="CategoryNameEdit" type="text" name="name"
                            placeholder="Category Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="button" type="submit" id="CategoryUpdate"
                        data-bs-dismiss="modal">Category Update</button>
                </div>
            </form>
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
    function cat_edit(id, name) {
        $('#CategoryEditModal').modal('show');
        $('#CategoryID').val(id);
        $('#CategoryNameEdit').val(name);
    }

</script>

<script>
    $('#dataTableStyle').DataTable({
        ajax: {
            url: `{{route('autoroles')}}`,
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
                "data": null, // (data, type, row)
                className: "text-center",
                render: function (data) {
                    return `<button class="border-0 btn-sm btn-info me-2" onclick="cat_edit('` +
                        data.id + `','` + data.name + `')"><i class="fa fa-edit"></i></button>` +
                        `<button class="border-0 btn-sm btn-danger me-2" onclick="cat_distroy('` +
                        data.id + `')"><i class="fa fa-trash"></i></button>`;
                },
                defaultContent: ''
            },
        ]
    });

    // $('#rolePermission').on('submit', function (e) {
    //     e.preventDefault();
    //     // alert('Ho');
    //     var form = this;
    //     $.ajax({
    //         url: $(form).attr('action'),
    //         method: $(form).attr('method'),
    //         data: new FormData(form),
    //         dataType: 'json',
    //         processData: false,
    //         contentType: false,
    //         success: function (data) {
    //             $('#dataTableStyle').DataTable().ajax.reload();
    //             $('input').val('');
    //             notyf.success("Role Saved Successfully!");
    //         },
    //         error: function (request, status, error) {
    //             notyf.error(request.responseJSON.message);
    //         }
    //     });
    // });

    $('#CategoryUpdate').on('click', function () {
        let formUrlData = `{{route('backend.categories.update')}}`;
        $.ajax({
            type: "POST",
            url: `${formUrlData}`,
            data: {
                id: $('#CategoryID').val(),
                name: $('#CategoryNameEdit').val(),
            },
            success: function (data) {
                $('#dataTableStyle').DataTable().ajax.reload();
                $('#CategoryEditModal').modal('hide');
                notyf.success("Category Update Successfully!");
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
                let formUrlData = `{{route('backend.categories.destroy')}}`;
                $.ajax({
                    type: "POST",
                    url: `${formUrlData}`,
                    data: {
                        "id": id,
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
                        notyf.error('Category Delete Unsuccessfully!');
                    }
                });
            }
        })
    }

</script>

@endsection
