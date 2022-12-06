@extends('backend.master')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/datatables.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/lightbox.min.css">

@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    {{-- <h5>Work Process List
                            <span class="float-end">
                            <a class="btn btn-primary" href="#">
                                <i class="fa fa-plus"></i> Add Work Process
                            </a>
                        </span>
                    </h5> --}}

                    <h5>Work Process List <span class="float-end"><button class="btn btn-primary" id="add_workprocess"> <i
                                    class="fa fa-plus"></i> Add Work Process</button></span></h5>

                    <span>All Work Process Information</span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableStyle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Author</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table_data">
                                <tr>
                                    <td colspan="5">
                                        <div class="d-flex justify-content-center">
                                            <div class="spinner-border" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </td>
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
                <h5 class="modal-title">Work Process Info</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4">
                <form class="" action="{{route('backend.workprocess.store')}}" method="POST" id="workprocessAdd">
                    @csrf
                    <div class="mb-3">
                        <input id="workprocessID" type="hidden" name="id" value="">
                        <label class="col-form-label pt-0" for="title">Title</label>
                        <input class="form-control" id="title" type="text" name="title" placeholder="Title" required>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="subtitle">Sub Title</label>
                        <textarea class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="comment">Comment</label>
                        <textarea class="form-control" id="comment" name="comment" placeholder="Comment"
                            required></textarea>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<script>
    $('#add_workprocess').click(() => {
        $('input[type=text]').val('');
        $('textarea').html('');
        $('#workprocessAdd').attr('action', `{{route('backend.workprocess.store')}}`);
        $('#CategoryEditModal').modal('show');
    });

    function cat_edit(id) {
        let formUrlData = `{{route('backend.workprocess.edit')}}`;
        $.ajax({
            type: "POST",
            url: `${formUrlData}`,
            data: {
                "id": id,
            },
            success: function (data) {
                $('#workprocessID').val(data.workProcessData.id);
                $('#title').val(data.workProcessData.title);
                $('#subtitle').html(data.workProcessData.subtitle);
                $('#comment').html(data.workProcessData.comment);
                $('#workprocessAdd').attr('action', `{{route('backend.workprocess.update')}}`);
                $('#CategoryEditModal').modal('show');
            },
            error: function (request, status, error) {
                notyf.error('Work Process Data Catch Unsuccessfully!');
            }
        });
    }

</script>

<script>
    function post_view(id) {
        var url = '{{ route("backend.workprocess.show", ":id") }}';
        url = url.replace(':id', id);
        // window.open(url, '_blank');
        window.location.href = url;
    }

</script>

<script>
    $('#dataTableStyle').DataTable({
        ajax: {
            type: "POST",
            url: `{{route('autoworkprocess')}}`,
            dataSrc: ''
        },
        columns: [{
                data: null,
                render: function (data, type, full, meta) {
                    return meta.row + 1;
                }
            },
            {
                data: 'title'
            },
            {
                data: 'comment'
            },
            {
                data: 'author'
            },
            {
                "data": null, // (data, type, row)
                className: "text-center",
                render: function (data) {
                    return `<button class="border-0 btn-sm btn-info me-2 my-1" onclick="cat_edit('` +
                        data.id +
                        `')"><i class="fa fa-edit"></i></button>` +
                        `<button class="border-0 btn-sm btn-primary me-2 my-1" onclick="post_view('` + data
                        .id + `')"><i class="fa fa-eye"></i></button>` +
                        `<button class="border-0 btn-sm btn-danger me-2 my-1" onclick="cat_distroy('` +
                        data.id + `')"><i class="fa fa-trash"></i></button>`;
                },
            },
        ]
    });

    $('#CategoryUpdate').on('click', function () {
        let formUrlData = `{{route('backend.subcategories.update')}}`;
        $.ajax({
            type: "POST",
            url: `${formUrlData}`,
            data: {
                category_id: $('#MCategoryID').val(),
                id: $('#SubCategoryID').val(),
                name: $('#CategoryNameEdit').val(),
            },
            success: function (data) {
                $('#dataTableStyle').DataTable().ajax.reload();
                $('#CategoryEditModal').modal('hide');
            }
        });
    });

    function cat_distroy(id)
    {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#24695c',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                let formUrlData = `{{route('backend.workprocess.destroy')}}`;
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
                        notyf.error('Work Process Delete Unsuccessfully!');
                    }
                });
            }
        })
    }

</script>


<script>
    $('#workprocessAdd').on('submit', function (e) {
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
                // $('input[type=text]').val('');
                // $('textarea').val('');
                $('#dataTableStyle').DataTable().ajax.reload();
                $('#CategoryEditModal').modal('hide');
                notyf.success("Faq Action Successfully!");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });

</script>


@endsection
