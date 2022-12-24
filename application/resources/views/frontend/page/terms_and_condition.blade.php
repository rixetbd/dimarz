@extends('frontend.master')

@section('meta_tag')
@include('meta::manager',[
'title'=> 'Terms And Conditions - Dimarz'
])
@endsection

{{--  --}}
@section('custom_css')
<style>
    #terms_and_condition h2 {
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
        font-size: 3.5rem;
    }

</style>
@endsection



@section('content')

<section id="header_top" class="single_service_page" style="padding-top: 5rem !important;">
    <div class="special_text_box">
        <h1 class="special_text text-center text-white">
            Terms And Conditions
        </h1>
    </div>
</section>

<div class="padding_40 py-3" id="terms_and_condition">

    <h2>Welcome to DiMarz!</h2>
    <p>These terms and conditions outline the rules and regulations for the use of DiMarz's Website, located at
        {{url('/')}}.</p>
    <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use DiMarz if you
        do not agree to take all of the terms and conditions stated on this page. The following terminology applies to
        these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and
        "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The
        Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both
        the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to
        undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of
        meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and
        subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular,
        plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to the
        same.</p>

        <h2>Cookies</h2>
        <p>We employ the use of cookies. By accessing DiMarz, you agreed to use cookies in agreement with DiMarz's Privacy Policy. Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
<h2>License</h2>
<p>Unless otherwise stated, DiMarz and/or its licensors own the intellectual property rights for all material on DiMarz. All intellectual property rights are reserved. You may access this from DiMarz for your own personal use subjected to restrictions set in these terms and conditions.<p>
<p>You must not:
    <ul>
        <li>Republish material from DiMarz</li>
        <li>Sell, rent or sub-license material from DiMarz</li>
        <li>Reproduce, duplicate or copy material from DiMarz</li>
        <li>Redistribute content from DiMarz</li>
    </ul>
</p>

<p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the Free Terms and Conditions Generator.
Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. DiMarz does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of DiMarz,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, DiMarz shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

<p>
    DiMarz reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.
You warrant and represent that:
<ul>
<li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
<li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
<li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
<li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
</ul>
</p>

<p>
    You hereby grant DiMarz a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.
</p>
<h2>Hyperlinking to our Content</h2>

</div>
@endsection



@section('custom_js')



@endsection
