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
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table_data">
                                <tr>
                                    <td>1</td>
                                    <td>Name</td>
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
            <form class="theme-form" method="post" action="{{route('backend.role.update')}}" id="roleUpdate">
                @csrf
                <div class="modal-body">
                        <div class="mb-3">
                            <input class="form-control" id="roleID" type="hidden" name="id" required>
                            <label class="form-label pt-0" for="name">Role Name</label>
                            <input class="form-control" id="role-name" type="text" name="name" placeholder="Role Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label pt-0" for="name">Role Permissions</label>
                            <div class="form-group m-checkbox-inline mb-0">
                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-articles" type="checkbox" name="articles">
                                    <label for="role-articles">Article</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-attendance" type="checkbox" name="attendance">
                                    <label for="role-attendance">Attendance</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-category" type="checkbox" name="category">
                                    <label for="role-category">Category</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-employee" type="checkbox" name="employee">
                                    <label for="role-employee">Employee</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-faq" type="checkbox" name="faq">
                                    <label for="role-faq">FAQ</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-gigpage" type="checkbox" name="gigpage">
                                    <label for="role-gigpage">Gigpage</label>
                                </div>
                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-mainpage" type="checkbox" name="mainpage">
                                    <label for="role-mainpage">Mainpage</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-seo" type="checkbox" name="seo">
                                    <label for="role-seo">SEO</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-salary" type="checkbox" name="salary">
                                    <label for="role-salary">Salary</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-settings" type="checkbox" name="settings">
                                    <label for="role-settings">Settings</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-users" type="checkbox" name="users">
                                    <label for="role-users">Users</label>
                                </div>

                                <div class="checkbox checkbox-dark col-5">
                                    <input id="role-workprocess" type="checkbox" name="workprocess">
                                    <label for="role-workprocess">Workprocess</label>
                                </div>

                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="button" type="submit" id="CategoryUpdate">Category Update</button>
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
    function cat_edit(id) {

        $.ajax({
            type: "POST",
            url: `{{route('role.getrole')}}`,
            data: {id: id},
            success: function (data) {
                $('#roleID').val(data.id);
                $('#role-name').val(data.name);

               if (data.articles == 1) {$('#role-articles').attr('checked', '');}
               else{$('#role-articles').removeAttr('checked');}
               if (data.attendance == 1) {$('#role-attendance').attr('checked', '');}
               else{$('#role-attendance').removeAttr('checked');}
               if (data.category == 1) {$('#role-category').attr('checked', '');}
               else{$('#role-category').removeAttr('checked');}
               if (data.employee == 1) {$('#role-employee').attr('checked', '');}
               else{$('#role-employee').removeAttr('checked');}
               if (data.faq == 1) {$('#role-faq').attr('checked', '');}
               else{$('#role-faq').removeAttr('checked');}
               if (data.gigpage == 1) {$('#role-gigpage').attr('checked', '');}
               else{$('#role-gigpage').removeAttr('checked');}
               if (data.mainpage == 1) {$('#role-mainpage').attr('checked', '');}
               else{$('#role-mainpage').removeAttr('checked');}
               if (data.seo == 1) {$('#role-seo').attr('checked', '');}
               else{$('#role-seo').removeAttr('checked', '');}
               if (data.salary == 1) {$('#role-salary').attr('checked', '');}
               else{$('#role-salary').removeAttr('checked');}
               if (data.settings == 1) {$('#role-settings').attr('checked', '');}
               else{$('#role-settings').removeAttr('checked', '');}
               if (data.users == 1) {$('#role-users').attr('checked', '');}
               else{$('#role-users').removeAttr('checked');}
               if (data.workprocess == 1) {$('#role-workprocess').attr('checked', '');}
               else{$('#role-workprocess').removeAttr('checked');}

                $('#CategoryEditModal').modal('show');
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });



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
                        data.id +`')"><i class="fa fa-edit"></i></button>` +
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
        $.ajax({
            url: `{{route('backend.role.update')}}`,
            method: 'POST',
            data: {
                'id': $('#roleID').val(),
                'name': $('#role-name').val(),
                'articles': $('#role-articles').val(),
                'attendance': $('#role-attendance').val(),
                'category': $('#role-category').val(),
                'employee': $('#role-employee').val(),
                'faq': $('#role-faq').val(),
                'gigpage': $('#role-gigpage').val(),
                'mainpage': $('#role-mainpage').val(),
                'seo': $('#role-seo').val(),
                'salary': $('#role-salary').val(),
                'settings': $('#role-settings').val(),
                'users': $('#role-users').val(),
                'workprocess': $('#role-workprocess').val(),
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
                let formUrlData = `{{route('backend.role.destroy')}}`;
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
                        notyf.error('Data Delete Unsuccessfully!');
                    }
                });
            }
        })
    }

</script>

@endsection
