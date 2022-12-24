@extends('backend.master')
@section('page_title', 'Menu Builder')
@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/datatables.css">
<style>
    .link_btn{
        color: #0000ff;
        cursor: pointer;
    }
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Menu Builder</h5>
                    <span>Add Menu</span>
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label pt-0" for="selectMenu">Select the you want to edit / <span class="link_btn" onclick="freshModal()">Or, Create a new one</span></label>
                        <select class="form-select" name="" id="selectMenu">
                            <option value="">-- Select A Menu</option>
                            @foreach ($menuName as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <form class="theme-form" id="ajaxForm" method="post" action="javascript:void(0)">
                        @csrf
                        <h6>Create Custom Link</h6>
                        <div class="mb-3">
                            <label class="form-label pt-0 required" for="name">Label</label>
                            <input class="form-control" id="name" type="text" name="name"
                                placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label pt-0 required" for="url">Url</label>
                            <input class="form-control" id="url" type="url" name="url"
                                placeholder="Enter url" required>
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
                    <h5>Menu List</h5>
                    <span>Selected Menu Information</span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableStyle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Url</th>
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
                <h5 class="modal-title">Create Menu</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="menubuild_store" action="{{route('backend.menubuild.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label pt-0 required" for="title">Title</label>
                        <input class="form-control" id="id" type="text" name="id" placeholder="ID">
                        <input class="form-control" id="title" type="text" name="title" placeholder="Title" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-danger" type="reset" data-bs-dismiss="modal">Cancel</button>
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
function cat_edit(id, name) {
    $('#CategoryEditModal').modal('show');
    $('#CategoryID').val(id);
    $('#CategoryNameEdit').val(name);
}
</script>

<script>

    function freshModal(){
        $('#id').val('');
        $('#title').val('');
        $('#CategoryEditModal').modal('show');
    }


    $('#dataTableStyle').DataTable({
        ajax: {
            url: `{{route('backend.menubuild.automenubuild')}}`,
            dataSrc: ''
        },
        columns: [{
                data: null,
                render: function (data, type, full, meta) {
                    return meta.row + 1;
                }
            },
            {
                data: 'title',
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

    $('#menubuild_store').on('submit', function (e) {
        e.preventDefault();
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

    function selectMenu(){
        $.ajax({
            type: "POST",
            url: `{{route('backend.menubuild.menutablename')}}`,
            data: {id: ''},
            success: function (data) {
                alert('Hi');
            }
        });
    }

</script>

@endsection
