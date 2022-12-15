@extends('backend.master')

@section('page_title', "Single Work Process")

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<style>
    .trash_icon {
        cursor: pointer;
        background: #24695c;
        padding: 10px;
        height: 25px;
        display: flex;
        color: #fff;
        border-radius: 3px;
        justify-content: center;
        align-items: center;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-8 col-xl-8">
                <div class="card-header p-1 py-3" style="background: transparent;">
                    <h4 class="card-title mb-0">Single Work Process
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.workprocess.index')}}"><i
                                    class="fa fa-arrow-left me-2"></i> Back to Work Process List
                            </a>
                        </span>
                    </h4>
                    <span>Check Work Process info ( Heading & Description )</span>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>

                {{-- faq_id	heading	description	index	created_at --}}

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="mb-3">
                                <label class="form-label w-100 pt-0" for="work_process_id">Work Process Name</label>
                                <select class="form-select" id="work_process_id" name="work_process_id" required>
                                    <option value="">-- Select a Work Process</option>
                                    @foreach ($workprocess as $item)
                                    <option value="{{$item->id}}"
                                        {{($item->id == $activeWorkprocess->id?'selected':'')}}>{{$item->title}} -
                                        {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label w-100" for="subtitle">Sub Title</label>
                                <input class="form-control" type="text" id="subtitle" name="subtitle"
                                    placeholder="Subtitle" value="{{$activeWorkprocess->subtitle}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label w-100" for="comment">Comment</label>
                                <input class="form-control" type="text" id="comment" name="comment"
                                    placeholder="comment" value="{{$activeWorkprocess->comment}}" disabled>
                            </div>
                        </div>

                        <div id="faqALLQA" class="row">
                            @forelse ($workProcessSteps as $key=> $item)
                            <div class="col-md-6 my-3 wp_step_div{{$item->id}}">
                                <div class="mb-3">
                                    <label class="form-label w-100" for="heading">Heading : {{$key+1}}
                                        <span class="float-end ms-2 trash_icon"
                                            onclick="delete_wp_steps('{{$item->id}}','wp_step_div{{$item->id}}')"><i
                                                class="fa fa-trash"></i></span>
                                        <span class="float-end trash_icon" onclick="update_wp_steps('{{$item->id}}')"><i
                                                class="fa fa-check"></i></span>
                                    </label>
                                    <input class="form-control" type="hidden" id="id" name="id" value="{{$item->id}}"
                                        data-id="{{$item->id}}" required>
                                    <input class="form-control input_status" type="text" id="heading" name="heading"
                                        placeholder="Heading" value="{{$item->heading}}" data-heading="{{$item->id}}"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label w-100" for="description">Description</label>
                                    <textarea class="form-control input_status" placeholder="Enter description"
                                        id="description" name="description" data-description="{{$item->id}}"
                                        rows="3">{{$item->description}}</textarea>
                                </div>
                            </div>
                            @empty

                            @endforelse
                        </div>

                    </div>
                </div>
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

    $(".input_status").on('keyup', function () {
        $(this).addClass('border-success');
    });

    $('#work_process_id').on('change', function () {
        $.ajax({
            type: "POST",
            url: `{{route('autoworkprocess.steps')}}`,
            data: {
                work_process_id: $('#work_process_id').val(),
            },
            success: function (data) {
                $('#faqALLQA').html('');
                $('#subtitle').val(data['workProcess']['subtitle']);
                $('#comment').val(data['workProcess']['comment']);
                var workProcess_step_data = data['workProcess_step_data'];

                $.each(workProcess_step_data, function (i, item) {
                    // console.log(data[i].answer);

                    htmlBox = `<div class="col-md-6 my-3 wp_step_div${workProcess_step_data[i].id}">
                                <div class="mb-3">
                                    <label class="form-label w-100" for="heading">Heading : ${i+1}
                                    <span class="float-end ms-2 trash_icon" onclick="delete_wp_steps('${workProcess_step_data[i].id}','wp_step_div${workProcess_step_data[i].id}')"><i class="fa fa-trash"></i></span>
                                    <span class="float-end trash_icon" onclick="update_wp_steps('${workProcess_step_data[i].id}')"><i class="fa fa-check"></i></span>
                                    </label>
                                    <input class="form-control" type="hidden" id="id" name="id" value="${workProcess_step_data[i].id}" data-id="${workProcess_step_data[i].id}" required>
                                    <input class="form-control input_status" type="text" id="heading" name="heading" placeholder="Heading" value="${workProcess_step_data[i].heading}" data-heading="${workProcess_step_data[i].id}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label w-100" for="answer">Description</label>
                                    <textarea class="form-control input_status" placeholder="Enter answer" id="answer" name="answer" data-description="${workProcess_step_data[i].id}" rows="3">${workProcess_step_data[i].description}</textarea>
                                </div>
                            </div>`;
                    $('#faqALLQA').append(htmlBox);
                });

                $(".input_status").on('keyup', function () {
                    $(this).addClass('border-success');
                });

            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });

</script>

<script>
    $('#faqQA').on('submit', function (e) {
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
                $('input').val('');
                $('select').val('');
                $('textarea').val('');
                notyf.success("Q&A Saved Successfully!");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });

</script>


<script>
    function delete_wp_steps(id, class_name) {
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
                let formUrlData = `{{route('backend.workprocess.steps.destroy')}}`;
                $.ajax({
                    type: "POST",
                    url: `${formUrlData}`,
                    data: {
                        "id": id,
                    },
                    success: function (data) {
                        $(`.${class_name}`).remove();
                        Swal.fire(
                            'Deleted!',
                            'Your data has been deleted.',
                            'success'
                        )
                        // notyf.success("FAQ Delete Successfully!");
                    },
                    error: function (request, status, error) {
                        notyf.error('Work Process Steps Delete Unsuccessfully!');
                    }
                });
            }
        })
    }

    function update_wp_steps(id) {
        let work_process_id = $('input[data-id="' + id + '"]').val();
        let heading = $('input[data-heading="' + id + '"]').val();
        let description = $('textarea[data-description="' + id + '"]').val();
        $.ajax({
            type: "POST",
            url: `{{route('backend.workprocess.steps.update')}}`,
            data: {
                work_process_id: work_process_id,
                heading: heading,
                description: description,
            },
            success: function (data) {
                $('input[data-heading="' + id + '"]').removeClass('border-success');
                $('textarea[data-description="' + id + '"]').removeClass('border-success');
                notyf.success('Steps Update Successfully!');
            },
            error: function (request, status, error) {
                notyf.error('Steps Update Unsuccessfully!');
            }
        });

    }

</script>

@endsection
