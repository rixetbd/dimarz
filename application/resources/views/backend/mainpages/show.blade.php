@extends('backend.master')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<style>
    .trash_icon{
        cursor: pointer;
        background: #24695c;
        width: 25px;
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
                    <h4 class="card-title mb-0">Single FAQ
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.faq.index')}}"><i class="fa fa-arrow-left me-2"></i> Back to FAQ List
                            </a>
                        </span>
                    </h4>
                    <span>Check FAQ info ( Question & Answer )</span>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>

                {{-- faq_id	question	answer	index	created_at --}}

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="mb-3">
                                <label class="form-label w-100 pt-0" for="faq_id">FAQ Name</label>
                                <select class="form-select" id="faq_id" name="faq_id" required>
                                    <option value="">-- Select a FAQ</option>
                                    @foreach ($faq as $item)
                                        <option value="{{$item->id}}" {{($item->id == $activeFaq_qa->id?'selected':'')}}>{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label w-100" for="subtitle">Sub Title</label>
                                <input class="form-control" type="text" id="subtitle" name="subtitle" placeholder="Subtitle" value="{{$activeFaq_qa->subtitle}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label w-100" for="comment">Comment</label>
                                <input class="form-control" type="text" id="comment" name="comment" placeholder="comment" value="{{$activeFaq_qa->comment}}" disabled>
                            </div>
                        </div>

                        <div id="faqALLQA" class="row">
                            @forelse ($faq_qa as $key=> $item)
                            <div class="col-md-6 my-3 faq_qa_div{{$item->id}}">
                                <div class="mb-3">
                                    <label class="form-label w-100" for="question">Question : {{$key+1}}
                                        <span class="float-end ms-2 trash_icon" onclick="delete_faq_qa('{{$item->id}}','faq_qa_div{{$item->id}}')"><i class="fa fa-trash"></i></span>
                                        <span class="float-end trash_icon" onclick="update_faq_qa('{{$item->id}}')"><i class="fa fa-check"></i></span>
                                    </label>
                                    <input class="form-control" type="hidden" id="id" name="id" value="{{$item->id}}" data-id="{{$item->id}}" required>
                                    <input class="form-control" type="text" id="question" name="question" placeholder="Question" value="{{$item->question}}" data-question="{{$item->id}}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label w-100" for="answer">Description</label>
                                    <textarea class="form-control" placeholder="Enter answer" id="answer" name="answer"  data-answer="{{$item->id}}" rows="3">{{$item->answer}}</textarea>
                                </div>
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
    $('#faq_id').on('change', function(){
        $.ajax({
            type: "POST",
            url: `{{route('autofaqs_qa')}}`,
            data: {
                faq_id: $('#faq_id').val(),
            },
            success: function (data) {
                $('#faqALLQA').html('');
                $('#subtitle').val(data['faq_active']['subtitle']);
                $('#comment').val(data['faq_active']['comment']);
                var faq_qa_data = data['faq_qa_data'];

                $.each(faq_qa_data, function(i, item) {
                    // console.log(data[i].question);
                    // console.log(data[i].answer);

                    htmlBox = `<div class="col-md-6 my-3 faq_qa_div${faq_qa_data[i].id}">
                                <div class="mb-3">
                                    <label class="form-label w-100" for="question">Question : ${i+1}
                                    <span class="float-end ms-2 trash_icon" onclick="delete_faq_qa('${faq_qa_data[i].id}','faq_qa_div${faq_qa_data[i].id}')"><i class="fa fa-trash"></i></span>
                                    <span class="float-end trash_icon" onclick="update_faq_qa('${faq_qa_data[i].id}')"><i class="fa fa-check"></i></span>
                                    </label>
                                    <input class="form-control" type="hidden" id="id" name="id" value="${faq_qa_data[i].id}" data-id="${faq_qa_data[i].id}" required>
                                    <input class="form-control" type="text" id="question" name="question" placeholder="Question" value="${faq_qa_data[i].question}"  data-question="${faq_qa_data[i].id}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label w-100" for="answer">Description</label>
                                    <textarea class="form-control" placeholder="Enter answer" id="answer" name="answer" data-answer="${faq_qa_data[i].id}" rows="3">${faq_qa_data[i].answer}</textarea>
                                </div>
                            </div>`;
                    $('#faqALLQA').append(htmlBox);
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
                notyf.success("Q&A Saved Successfully!");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
    });
});
</script>


<script>
    function delete_faq_qa(id, class_name)
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

    function update_faq_qa(id)
    {
        let faqid = $('input[data-id="' + id + '"]').val();
        let question = $('input[data-question="' + id + '"]').val();
        let answer = $('textarea[data-answer="' + id + '"]').html();
        $.ajax({
            type: "POST",
            url: `{{route('faqs_qa_update')}}`,
            data: {
                faqid: faqid,
                question: question,
                answer: answer,
            },
            success: function (data) {
                notyf.success('FAQ Update Successfully!');
            },
            error: function (request, status, error) {
                notyf.error('FAQ Update Unsuccessfully!');
            }
        });

    }
</script>

@endsection


