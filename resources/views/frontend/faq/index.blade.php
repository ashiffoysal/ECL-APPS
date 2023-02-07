@extends('layouts.frontend')
@section('title', 'FAQ')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/ripon.css') }}">
    <!-- Event Detail Banner Section -->
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
                    <h2>FAQ</h2>
                    <ul>
                        <li><a href="">home</a></li>
                        <li>/</li>
                        <li>faq</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faq Blocks Section -->
    
    <section class="zh_faq_area section_padding">
        <div class="container">
            <div class="row">
                {{--
                <div class="col-md-6">
                    <img src="{{ asset('frontend') }}/images2/details/faq-5.png" alt="" class="img-fluid">
                </div>
                --}}
               <div class="col-md-12 align-self-center">
                    <div class="zh_faq_right_content md_right_content">
                        <h5 class="zh_sub_heading">FAQs</h5>
                        <!-- <h2 class="zh_heading">Over 10 Years in <span>Distant <br>Skill</span> Development</h2> -->
                        <ul class="accordion">
                            
                            
                              <li>
                                <a>What is included in the cost of the exam?</a>
                                <p>Exam Centre London has carefully generated the price list in an attempt to make our prices
affordable to all candidates. Therefore, our prices only reflect the cost associated with sitting
the exam with us without any preparatory sessions. However, we acknowledge that having a
tutor to support is highly beneficial, hence we have this option available to all candidates that
require it at an additional cost. Speak to a member of our staff today to see if we can help.</p>
                            </li>
                            
                            
                              <li>
                                <a>I need some help! Have you got any tutors that could support me?</a>
                                <p>Exam Centre London takes pride to support our candidates in their academic journey. We
strive to make this experience as simple as we can, lightening the heavy load from the
shoulders of the candidates. Exam Centre London is able to schedule lessons with our
subject experts to support you in this journey!</p>
                            </li>
                            
                                <li>
                                <a>Can I do my practical endorsement with Exam Centre London?</a>
                                <p>We are delighted to share that our candidates have the opportunity to sit their Science
practical endorsement with Exam Centre London. Our practical endorsements are carried
out during the term holidays under the guidance of our highly qualified and experienced
science teachers.</p>
                            </li>
                            
                               <li>
                                <a>I need predicted grades for my UCAS application? Can I obtain it from Exam Centre
London?</a>
                                <p>Exam Centre London is able to provide private candidates predicted grades to submit on
their UCAS applications. Candidates will be required to sit a mock paper under controlled
conditions at our exam centre. Based on the performance on the mock paper, Exam Centre
London can finalise the predicted grades.</p>
                            </li>
                            
                              <li>
                                <a>Have you got free parking?</a>
                                <p>Whilst we do not have any private parking for our candidates, we are surrounded by many
roads providing free and/or paid parking throughout the day.</p>
                            </li>
                            <li>
                                <a>Can I pay in instalments?</a>
                                <p>Exam Centre London appreciates that our prices may be costly for some candidates,
therefore we have an interest free instalment plan for candidates wishing for the extra time to
pay for the exam.</p>
                            </li>
                            
                             <li>
                                <a>What if I don’t have a valid ID?</a>
                                <p>Photo IDs are a crucial requirement to book any exams. If you do not have a valid photo ID,
then contact our support team who will help to proceed via an alternative route.</p>
                            </li>
                            
                            
                            
                            
                            
                            
                            
                            
                            <!---->
                            <li>
                                <a>What if I don’t have a valid photo ID?</a>
                                <p>If you do not have photo ID, contact us and we will send you more information on how to proceed with your application.</p>
                            </li>
                            
                            
                            <li>
                                <a>When can I get my results?</a>
                                 <p>Functional Skills results are issues between two to four weeks after your <span style="font-weight:bold;">assessment</span> .January IGCSE results are issued in March. </p>
                                 <p>Summer GCSE and A-Level exam results are issued in August.November GCSE and A-Level exam results are issued in January. </p>
                                 <p>We’ll keep you informed of when and how you can access your results and your examination certificates. </p>
                                  
                                
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
                            <h3>TOP TEACHERS</h3>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
 
     
        
@endsection