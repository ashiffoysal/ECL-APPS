@extends('layouts.frontend')
@section('title', 'Booking Procedure')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/ripon.css') }}">

  <style>
    h1, h2, h3, h4, h5, h6 {
    color: #102039;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    text-transform: capitalize;
    line-height: 1.2;
    margin-bottom: 0;
}
    .breadcrumb-section {
  padding: 40px 0;
  background-image: url("frontend/breadcrumb-bg.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover; }
  @media (min-width: 768px) and (max-width: 991.98px) {
    .breadcrumb-section {
      padding: 80px 0; } }
  @media (max-width: 767.98px) {
    .breadcrumb-section {
      padding: 60px 0; } }
  .breadcrumb-section ul {
    margin-top: 10px; }
    .breadcrumb-section ul li {
      display: inline-block;
      text-transform: capitalize;
      font-size: 18px;
      margin: 0 2px; }
      @media (min-width: 768px) and (max-width: 991.98px) {
        .breadcrumb-section ul li {
          font-size: 16px; } }
      @media (max-width: 767.98px) {
        .breadcrumb-section ul li {
          font-size: 16px; } }
      .breadcrumb-section ul li a {
        color: #606060;
        -webkit-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in; }
        .breadcrumb-section ul li a:hover {
          color: #fe630e; }
</style>

    <section class="breadcrumb-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Booking Procedure</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>Booking Procedure</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

   

    <section class="top_heading_content section_padding">
        <div class="container">
            <div class="logo_wrapper text-center">
                <h2 class="zh_heading">Exam Booking Procedure</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="p_wrapper">
                        <p>Book your exam with Exam Centre london in 4 simple steps!</p>
                        <ul>
                            <li style="color: #000;">1. <a style="color: red" href="{{ url('/exam-list') }}">Select the exam</a> that you would like to book with Exam Centre London.</li>
                            <li style="color: #000;">2. <a style="color: red" href="{{ url('/student/signup') }}">Register<a> on our website for free!</li>
                            <li style="color: #000;">3. Fill in the exam application form and make the payment.</li>
                            <li style="color: #000;">4. Revise whilst we send you a confirmation of your exam booking.</li>                        
                        </ul>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="p_wrapper">
                      <p>Need some clarification? Speak to a member of our team on 0208 616 2526. We're here to help!</p>
                    </div>
                    {{--
                    <div class="p_wrapper text-center d-inline-block">
                        <img src="images2/details/5os92IiU_400x400.svg" alt="" class="img-fluid"><br>
                        <a href="{{ url('/exam-list') }}" class="zh_btn">Book Your Exam Now</a>
                    </div>
                    --}}
                </div>
            </div>
            <hr class="mt-4">
        </div>
    </section>
        <section class="zh_faq_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('frontend') }}/images2/details/faq-5.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="zh_faq_right_content md_right_content">
                        <h5 class="zh_sub_heading">FAQs</h5>
                        <!-- <h2 class="zh_heading">Over 10 Years in <span>Distant <br>Skill</span> Development</h2> -->
                        <ul class="accordion">
                            <li>
                                <a>What if I don’t have a valid photo ID?</a>
                                <p>If you do not have photo ID, contact us and we will send you more information on how to proceed with your application.</p>
                            </li>
                            <li>
                                <a>When can I get my results?</a>
                                <p>Functional Skills results are issues between two to four weeks after your assessment.January IGCSE results are issued in March.Summer GCSE and A-Level exam results are issued in August.November GCSE and A-Level exam results are issued in January.We’ll keep you informed of when and how you can access your results and your examination certificates.</p>
                            </li>
                            <li>
                                <a>How can I pay?</a>
                                <p>We accept card, bank transfer and cash payment.</p>
                            </li>
                            <li>
                                <a>How do I book my exam?</a>
                                <p>
                                    <span style="color: black;">-Step 1: Book Your Exam  Click here to exam booking</span><br>
                                     <span style="color: black;">-Step 2: Make Payment</span><br>
                                     <span style="color: black;">-Step 3: We’ll Confirm Your Booking</span>
                                </p>
                            </li>
                            <li>
                                <a>Can I practice assessments before the day of the exam?</a>
                                <p>Yes.In fact, we actively encourage our learners to build confidence and skills around exams by making use of resources such as past papers as part of the preparation for the assessment. Not only can this help to alleviate anxiety around exams, but it’s also chance to practice the types of assessment tasks used within the exams. When you work with Exam Centre London, we’ll provide you with a range of resources to support you in preparing for assessments.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Counter -->
            <div class="zh_counter_area">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="zh_counter">
                            <h6><span class="counter">2.1</span>k</h6>
                            <h3>STUDENT ENROLLED</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="zh_counter">
                            <h6><span class="counter">2</span>k</h6>
                            <h3>EXAM COMPLETED</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="zh_counter">
                            <h6><span class="counter">100</span>%</h6>
                            <h3>SATISFACTION RATE</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="zh_counter">
                            <h6><span class="counter">64</span>+</h6>
                            <h3>TOP INSTRUCTORS</h3>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection