@extends('backend.master')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>ALL Work Process</h5>
                    <span>List of Work Process</span>
                    <hr>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($workProcess as $item)
                            <li class="my-2" title="{{$item->title}} - {{$item->comment}}">
                                <i class="fa fa-link me-2"></i> {{$item->title}} - {{Str::limit($item->comment, 25)}}
                                <a class="float-end text-primary" href="{{route('backend.workprocess.show', $item->id)}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-8 col-xl-8">
            <form class="card" action="{{route('backend.workprocess.steps.store')}}" method="POST" id="steps_store">
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Add Work Process
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.workprocess.index')}}">Check Work Process List
                            </a>
                        </span>
                    </h4>
                    <span>Add new Heading & Description</span>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>

                {{-- Work Process heading and description index	created_at --}}

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="mb-3">
                                <label class="form-label pt-0" for="work_process_id">Work Process Name</label>
                                <select class="form-select" id="work_process_id" name="work_process_id" required>
                                    <option value="">-- Select a Work Process</option>
                                    @foreach ($workProcess as $item)
                                        <option value="{{$item->id}}">{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="heading">Heading</label>
                                <input class="form-control" type="text" id="heading" name="heading" placeholder="Heading" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div>
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control" placeholder="Enter description" id="description" name="description"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Add Work Process Step</button>
                    {{-- <button type="reset" class="btn btn-danger">Reset</button> --}}
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


@section('custom_script')
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.min.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/griddata.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.js"></script>

<script>
    $('#category_id').on('change', function(){

        $.ajax({
            type: "POST",
            url: `{{route('backend.get_subcategory_auto')}}`,
            data: {
                category_id: $('#category_id').val(),
            },
            success: function (data) {

                let html = '<option value="">-- Select a sub category</option>';

                $.each(data.data, function (i, value) {
                    html += `<option value="${value.id}">${value.name}</option>`;
                });

                $('#subcategory_id').html(html);
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });
</script>

<script>


$('#steps_store').on('submit', function (e) {
    e.preventDefault();
        var form = this;
        $.ajax({
            url:$(form).attr('action'),
            method:$(form).attr('method'),
            data:new FormData(form),
            dataType:'json',
            processData:false,
            contentType:false,
            success: function (data) {
                $('input').val('');
                $('select').val('');
                $('textarea').val('');
                notyf.success("Steps Saved Successfully!");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
    });
});
</script>

@endsection


