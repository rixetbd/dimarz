@extends('frontend.master')

@section('meta_tag')
@include('meta::manager',[
'title'=> 'Career - Dimarz'
])
@endsection

{{--  --}}
@section('custom_css')
<style>
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

<section class="padding_40 career_event_area">
    <div class="row">
        <div class="col-sm-12 col-md-4 career_event career_event_1 active">
            <div class="text_box">
                <h4 class="m-0">Career At DiMarz</h4>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 career_event career_event_2">
            <div class="text_box">
                <h4 class="m-0">Culture & Oportunities</h4>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 career_event career_event_3">
            <div class="text_box">
                <h4 class="m-0">Join Our Talent Pool</h4>
            </div>
        </div>
    </div>
</section>

<section class="padding_40 career_event_output" id="career_event_output1">

    <p>Working for DiMarz is an exciting opportunity for those interested in a career in the field of Digital Marketing
        and Web Development. With an ever-evolving industry, DiMarz offers a diverse range of services that are tailored
        to the needs of the customers. We provide a supportive and encouraging environment that fosters growth and
        development, allowing employees to reach their full potential. Being for many years in the industry, DiMarz
        offers competitive salaries and great benefits, making it an attractive option for a career. DiMarz is always
        looking for talented individuals to join our team and help continue to drive the success of our business. If
        you're looking for a rewarding and challenging career, DiMarz is the place to go.</p>

    <h2>A Fresh Place With Endless Growing Opportunities</h2>
    <p>At our company, we recognize that our employees are our greatest asset. We are committed to providing our staff
        with a supportive and enriching work environment, and are proud to offer a variety of career opportunities. Our
        internal growth and development pathways provide employees with the opportunity to explore new roles, and our
        comprehensive training program ensures that employees have the skills necessary to succeed. We are also
        committed to fostering an inclusive and equal workplace for all, and strive to create an environment that
        provides equal access to opportunities for everyone. We believe that by giving our employees the chance to grow
        and develop, we are able to create a more productive and successful organization.</p>

    <h2>Be a Part of Something Great!</h2>
    <p>Join our team and be part of something bigger! We are looking for motivated, ambitious individuals who want to
        make a positive impact and take their career to the next level. We offer a diverse and inclusive working
        environment, with equal opportunities and a supportive team atmosphere. We offer competitive wages, flexible
        hours, and a range of benefits to make sure that our team is well rewarded for their hard work. We encourage all
        applicants to apply, regardless of background, gender, age or race. We believe that everyone should have the
        opportunity to reach their full potential and be part of a successful team. Come join us and be part of a
        winning team!</p>

</section>
<section class="padding_40 career_event_output d-none" id="career_event_output2">
    <p>At DiMarz, we believe in providing our employees with endless opportunities to grow and develop their skills. We
        are committed to creating a positive and supportive work environment, where each individual can reach their
        highest potential. We offer a wide range of internal and external training programs to ensure that our employees
        are well-equipped to handle the challenges of their roles. We also provide access to a diverse range of
        resources and programs that promote overall job satisfaction. Our commitment to our employees is to provide them
        with the tools and support needed to lead successful, meaningful careers. DiMarz understands that our employees
        are our biggest asset and we will continue to strive to provide them with ample opportunities to reach their
        goals.</p>

    <h3>Growth</h3>
    <p>At our company, we strive to provide endless growth opportunities for our employees. We believe that every
        employee has the potential to excel and contribute to our organization's continued success. We offer a wide
        range of opportunities, from training and development programs to professional certifications, to help our
        employees reach their fullest potential. We also provide the necessary resources and support to ensure that our
        employees can take advantage of these growth opportunities. We are committed to creating a culture of learning
        and innovation, and we recognize that our employees are key to our success. We are dedicated to helping our
        employees reach their goals, and we are proud to provide them with the tools they need to do so.</p>

    <h3>Learn Teamwork</h3>
    <p>Teamwork is an integral part of our company's culture. We greatly focus on teamwork and how it affects our work
        product. We strive to create a culture of collaboration and communication, which allows us to leverage the
        strengths of our team to achieve outstanding results. We believe that working together as a team is the best way
        to overcome challenges and to remain competitive. We consistently encourage our employees to share their ideas
        and engage in meaningful conversations to further our collective goals. We recognize that great things can be
        accomplished when everyone is working together towards a common objective. We strive to create an environment
        where everyone feels valued and supported, allowing our team to excel and reach their full potential.</p>

    <h3>Face New Challenges</h3>
    <p>We understand that the workplace can be a daunting place, and that employees may be faced with challenging tasks
        and expectations. That's why we are dedicated to providing our employees with the motivation and support they
        need to face new challenges. We offer comprehensive training and development programs, encouraging our employees
        to continue learning and growing. In addition, our team is available to provide guidance and assistance whenever
        needed. By providing our employees with the necessary resources, we are confident that they can tackle any
        challenge that comes their way and become successful in the workplace.</p>

    <h3>Appreciation</h3>
    <p>In any professional environment, it is important to be appreciated for great work. When an individual produces
        quality work, they should feel pride in their accomplishments and seek recognition. Acknowledging the hard work
        that is put in helps to motivate employees to continue to strive for excellence. When an individual is
        recognized for their efforts, it can also inspire their peers to strive for the same level of achievement. This
        creates a culture of excellence within the workplace, which can ultimately lead to improved productivity and
        success for the organization. As such, it is important for employers to properly recognize and appreciate their
        employees for their hard work, dedication, and contributions to the team. We always give proper credit to our
        employees who pull out outstanding results.</p>

    <h3>Honesty and Integrity</h3>
    <p>One of the most important values of our company is our honesty and integrity. We always try to keep our works
        fresh and transparent whether it is to clients or to our employees. That being said, we are looking for those
        who can match our values. Which means, as a candidate or our staff, you have to be honest and maintain
        integrity. Being in our team, you will soon realize this fact and learn to be honest and humble.</p>


    <h3>Become a Leader</h3>
    <p>At DiMarz, we don’t see ourselves or our team members as mere stuff, we see them as a leader. For us, each and
        every member has the ability to be a leader who will lead their distinctive sectors. We will help you to learn
        and grow as you keep going with our endless journey of new challenges. With us, you will be able to harness the
        qualities that a leader possesses. Join us if you have the mentality to be a global leader.</p>

</section>
<section class="padding_40 career_event_output d-none" id="career_event_output3">
    <h2>We Are Hiring/Join Our Talentpool</h2>
    <p>After knowing about our company, our cultures and opportunities, if you feel interested to be a part of the
        DiMarz team, you can apply here. We have listed out the opening we have right now. Select your preferred job and
        apply. Please read the job description and responsibilities carefully before applying.</p>

    <p>If we think you are fit for our company, we will get in touch with you through your provided contact information.
        So, be careful when you fill up the candidate form.</p>

    Best of Luck!

    <h2>Our Openings</h2>

    <div id="job_box">
        <div class="job_group">
            <h4>Digital Marketing Manager</h4>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    {{--
Digital Marketing Manager


Lead Generation Specialist


Data Entry Specialist


SEO Manager


Front-End Developer


Back-End Developer


Full Stack Developer


Graphics Designer
 --}}

</section>

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

</script>


@endsection
