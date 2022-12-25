@extends('frontend.master')

@section('meta_tag')
@include('meta::manager',[
'title'=> 'Career - Dimarz'
])
@endsection

{{--  --}}
@section('custom_css')
<style>
    .icon-facebook{color: #000;}
    .icon-instagram{color: #000;}
    .icon-twitter{color: #000;}
    .icon-linkedin{color: #000;}
    .icon-whatsapp{color: #000;}

    .icon-facebook svg{color: #3b5998;margin-right: 5px;}
    .icon-instagram svg{color: #3f729b;margin-right: 5px;}
    .icon-twitter svg{color: #55acee;margin-right: 5px;}
    .icon-linkedin svg{color: #0077b5;margin-right: 5px;}
    .icon-whatsapp svg{color: #43d854;margin-right: 5px;}

    #privacy_policy h2 {
        font-size: 1.6rem;
    }

    #header_top.single_service_page {
        min-height: 260px !important;
    }

    #header_top {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #header_top .special_text {
        font-size: 5rem;
    }

    .career_event_area {
        padding: 50px 40px;
        /* background-color: #5a5a5a; */
    }

    .career_event .text_box {
        font-family: 'Poppins', sans-serif;
        /* border:1px solid #4a4a4a; */
        display: flex;
        padding: 30px 15px;
        margin: 5px 0;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        box-shadow: 1px 1px 5px #d1d1d1;
        cursor: pointer;
    }

    .career_event.active .text_box,
    .career_event .text_box:hover {
        background-color: #5a80a0;
        color: #fff;
    }

    .career_event .text_box h4 {
        text-align: center;
        letter-spacing: 1px;
    }

    .career_event_output {
        font-family: 'Poppins', sans-serif;

    }

    .career_event_output p {
        margin-bottom: 1.2rem;
    }

    .career_event_output h2,
    .career_event_output h3,
    .career_event_output h4 {
        font-weight: 400;
    }

    .career_event_output h2 {
        font-size: 1.4rem;
    }

    .career_event_output h3 {
        font-size: 1.3rem;
    }

    .career_event_output h4 {
        font-size: 1.2rem;
    }

    .job_group {
        margin-top: 15px;
        /* border: 1px solid #5a80a0; */
        box-shadow: 1px 1px 5px #d1d1d1;
        cursor: pointer;
        border-radius: 5px;
        padding: 10px 20px;
    }

    .job_group .btn-theme {
        width: 120px;
    }

    .job_group .row {
        padding: 15px 0;
        border-radius: 5px;
    }

    .job_group.active .row {
        background-color: #e4e4e4;
    }

    .job_group.active {
        background-color: #f0f0f0;
    }

    .btn-theme {
        background-color: #5a80a0;
        color: #fff;
    }

    .btn-theme.disabled:hover {
        background-color: #5a80a0;
        color: #fff;
    }

    .text_small {
        font-size: 13px;
        letter-spacing: .5px;
        color: #585858
    }

    .career_focus_heading {
        font-size: 2.2rem !important;
        font-weight: 600 !important;
    }

    .career_focus_heading2 {
        font-size: 1.5rem !important;
        font-weight: 600 !important;
    }
    .jobapplication label{
        font-size: 14px;
        color: #585858;
    }
    .jobapplication .form-select,
    .jobapplication .form-control{
        font-size: 13px;
        letter-spacing: .5px;
        border-radius: 0;
    }
    .jobapplication .form-select:focus,
    .jobapplication .form-control:focus{
        box-shadow: none;

    }

    .global_contact_card {
        display: none !important;
    }

</style>
@endsection



@section('content')
<section id="header_top" class="single_service_page" style="padding-top: 5rem !important;">
    <div class="special_text_box">
        <h1 class="special_text text-center text-white">
            DiMarz Career
        </h1>
    </div>
</section>

<section class="padding_40 my-5 career_event_output" id="career_event_output3">
    <div class="row align-items-center">
        <div class="col-6">
            <h2 class="career_focus_heading">{{$data->title}}</h2>
            <strong>Vacency :</strong> {{$data->vacency}}
        </div>
        <div class="col-6 text-end">
            <i class="far fa-clock"></i><strong> Job Status:</strong> {{$data->job_status}}
            <span class="mx-2"></span>
            <strong>Deadline:</strong> {{$data->deadline}}
        </div>
    </div>
    <hr>
    {!! $data->description !!}

    <div class="pt-4">
        <hr>
        <h4 class="career_focus_heading2">APPLY FOR THE JOB</h4>
        <div class="mb-4" style="font-size:14px;">
            <Strong>Note :</Strong> Please fill up all the infomation given in the form carefully.
        </div>
        <form class="jobapplication" action="{{route('frontend.career.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="required">Name</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Your name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="required">Email</label>
                    <input class="form-control" type="text" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone" class="required">Contact Number</label>
                    <input class="form-control" type="number" name="phone" id="phone" placeholder="Phone" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="website">Website/Portfolio link (Optional)</label>
                    <input class="form-control" type="url" name="website" id="website"
                        placeholder="Website/Portfolio link">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="website" class="required">Available For</label>
                    <select class="form-select" name="status" id="" required>
                        <option value="">-- Select A Option</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Remote">Remote</option>
                        <option value="Internship">Internship</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="website" class="required">Working Experience</label>
                    <select class="form-select" name="status" id="" required>
                        <option value="">-- Select A Option</option>
                        <option value="Expert">Expert</option>
                        <option value="Mid Level">Mid Level</option>
                        <option value="Fresher">Fresher</option>
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="coverletter" class="required">Cover Letter</label>
                    <textarea class="form-control" name="coverletter" id="coverletter" rows="5" placeholder="Tell us about yourself..."></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="resume" class="required">Resume/CV</label>
                    <input class="form-control" type="file" name="resume" id="resume" required>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="submit_btn">
                        <button class="btn btn-sm btn-theme" type="submit">Apply Now</button>
                    </div>
                </div>
            </div>
        </form>
        <hr>
        <div class="d-flex">
            <h4 style="font-size: 16px;letter-spacing: .5px;">Share With Your Friends : </h4>
            <div>
                <a target="_blank" class="ms-3 icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/career/{{$data->slug}}">
                    <i class="fab fa-facebook-square"></i> Facebook
                </a>
                <a target="_blank" class="ms-3 icon-instagram" href="https://twitter.com/intent/tweet?text={{url('/')}}/career/{{$data->slug}}">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a target="_blank" class="ms-3 icon-twitter" href="https://twitter.com/intent/tweet?url={{url('/')}}/career/{{$data->slug}}&text=Apply%20Now&via=">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
                <a target="_blank" class="ms-3 icon-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{url('/')}}/career/{{$data->slug}}">
                    <i class="fab fa-linkedin-in"></i> Linkedin
                </a>
                <a target="_blank" class="ms-3 icon-whatsapp" href="whatsapp://send?text={{url('/')}}/career/{{$data->slug}}">
                    <i class="fab fa-whatsapp"></i> By Whatsapp
                </a>
            </div>
        </div>
    </div>
</section>


<div class="line_breaker">
    <div class="line"></div>
</div>
@endsection



@section('custom_js')
<script>
    $('.career_event_1').click(function () {
        $('.career_event').removeClass('active');
        $(this).addClass('active');
        $(`.career_event_output`).addClass('d-none');
        $(`#career_event_output1`).removeClass('d-none');
    });
    $('.career_event_2').click(function () {
        $('.career_event').removeClass('active');
        $(this).addClass('active');
        $(`.career_event_output`).addClass('d-none');
        $(`#career_event_output2`).removeClass('d-none');
    });
    $('.career_event_3').click(function () {
        $('.career_event').removeClass('active');
        $(this).addClass('active');
        $(`.career_event_output`).addClass('d-none');
        $(`#career_event_output3`).removeClass('d-none');
    });

    $('.job_group').click(function () {

        if ($(this).hasClass("active")) {
            $('.job_group').removeClass('active');
            $('.descript_wrap').addClass('d-none');
        } else {
            $('.descript_wrap').addClass('d-none');
            $(this).children('.descript_wrap').removeClass('d-none');
            $('.job_group').removeClass('active');
            $(this).addClass('active');

            let scrollTopValue = $(this).offset().top - 10;
            window.scrollTo({
                top: scrollTopValue,
                behavior: 'smooth'
            });
        }
    });

</script>


@endsection
