@extends('backend.master')
@section('page_title', 'Easy Steps Data')
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
            <form class="card" action="{{route('backend.faq.store_qa')}}" method="POST" id="faqQA">
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Single Steps
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.pagewidget.index')}}"><i
                                    class="fa fa-arrow-left me-2"></i> Back to Steps List
                            </a>
                        </span>
                    </h4>
                    <span>Check Steps info ( Ttitle & Picture )</span>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>

                {{-- steps_id	question	answer	index	created_at --}}

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="mb-3">
                                <label class="form-label w-100 pt-0" for="steps_id">Steps Name</label>
                                <select class="form-select" id="steps_id" name="steps_id" required>
                                    <option value="">-- Select A Easy Steps</option>
                                    @foreach ($threeEasyStep as $item)
                                    <option value="{{$item->id}}" {{($item->id == $data->id?'selected':'')}}>
                                        {{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label w-100" for="comment">Comment</label>
                                <input class="form-control" type="text" id="comment" name="comment"
                                    placeholder="comment" value="{{$data->comment}}" disabled>
                            </div>
                        </div>

                        {{-- @php
                            print($data->stepsdata)
                        @endphp --}}


                        <div id="faqALLQA" class="row">
                            @forelse (json_decode($data->stepsdata) as $key=> $item)
                            <div class="col-md-3 my-3 faq_qa_div1">
                                <label class="form-label w-100" for="">Title : 0{{$key+1}}</label>
                                <input type="text" class="form-control" id="" value="{{$item->text}}" disabled>
                                <img class="img-fluid my-2"
                                    src="{{asset('application/uploads/stepsdata/'.$item->picture)}}" alt=""
                                    style="border-radius:3px;">
                            </div>
                            @empty

                            @endforelse
                        </div>

                    </div>
                </div>
                {{-- <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Add Q&A</button>
                </div> --}}
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
    $(".input_status").on('keyup', function () {
        $(this).addClass('border-success');
    });

    $('#steps_id').on('change', function () {
        if ($('#steps_id').val() != '') {
            $.ajax({
                type: "POST",
                url: `{{route('backend.pagewidget.autosteps')}}`,
                data: {
                    id: $('#steps_id').val(),
                },
                success: function (data) {
                    $('#faqALLQA').html('');
                    $('#comment').val(data['threeEasyStep']['comment']);
                    // var threeEasyStep_data = data['threeEasyStep']['stepsdata'];

                    $.each(data.threeEasydata, function (i, value) {

                        htmlBox = `<div class="col-md-3 my-3 faq_qa_div1">
                        <label class="form-label w-100" for="">Title : 0${i+1}</label>
                               <input type="text" class="form-control" id="" value="${value.text}" disabled>
                               <img class="img-fluid my-2" src="{{url('/')}}/application/uploads/stepsdata/${value.picture}" alt="" style="border-radius:3px;">
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
        }
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
    function delete_faq_qa(id, class_name) {
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
                let formUrlData = `{{route('backend.faq_qa.destroy')}}`;
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
                            'Your file has been deleted.',
                            'success'
                        )
                        // notyf.success("FAQ Delete Successfully!");
                    },
                    error: function (request, status, error) {
                        notyf.error('FAQ Delete Unsuccessfully!');
                    }
                });
            }
        })
    }

    function update_faq_qa(id) {
        let faqid = $('input[data-id="' + id + '"]').val();
        let question = $('input[data-question="' + id + '"]').val();
        let answer = $('textarea[data-answer="' + id + '"]').val();
        $.ajax({
            type: "POST",
            url: `{{route('faqs_qa_update')}}`,
            data: {
                faqid: faqid,
                question: question,
                answer: answer,
            },
            success: function (data) {
                $('input[data-question="' + id + '"]').removeClass('border-success');
                $('textarea[data-answer="' + id + '"]').removeClass('border-success');
                notyf.success('FAQ Update Successfully!');
            },
            error: function (request, status, error) {
                notyf.error('FAQ Update Unsuccessfully!');
            }
        });

    }

</script>

@endsection
