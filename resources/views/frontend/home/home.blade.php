@extends('layouts.frontend')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/ripon.css') }}">
<style>
.relationship-section {
   
 padding: 80px 0px 0px 0px;
}
.course-detail-section .content-column .learn-box {
    position: relative;
    margin-bottom: 50px;
    padding: 35px 30px 45px;
    border: 1px solid #e9e9e9;
    background-color: #f9f8f3;
}
.learn-list-two {
    position: relative;
    margin-bottom: 30px;
}
.learn-list-two li:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 5px;
    width: 23px;
    height: 23px;
    background: url(frontend/images/icons/check-1.png) no-repeat;
}
.case-study-section .content-column h4{
    font-family: 'Lato', sans-serif;
    margin-bottom: 20px;
    color: #0c0d24;
    font-weight: 700;
}

.case-study-section {
    padding: 10px 0px 0px;
    background-color: #d7f0fd;
}
</style>
 <!-- Hero -->


<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap");
/* Author CSS */
body {
  margin: 0;
  color: #606060;
  font-family: "Roboto", sans-serif; }

h1 {
  font-size: 60px; }
  @media (min-width: 768px) and (max-width: 991.98px) {
    h1 {
      font-size: 48px; } }
  @media (max-width: 767.98px) {
    h1 {
      font-size: 36px; } }

h2 {
  font-size: 42px; }
  @media (max-width: 767.98px) {
    h2 {
      font-size: 30px; } }

h3 {
  font-size: 30px; }
  @media (max-width: 767.98px) {
    h3 {
      font-size: 24px; } }

h4 {
  font-size: 24px; }
  @media (max-width: 767.98px) {
    h4 {
      font-size: 20px; } }

h5 {
  font-size: 20px; }
  @media (max-width: 767.98px) {
    h5 {
      font-size: 18px; } }

h6 {
  font-size: 16px;
  margin-bottom: 0; }

h1,
h2,
h3,
h4,
h5,
h6 {
  color: #102039;
  font-family: "Roboto", sans-serif;
  font-weight: 700;
  text-transform: capitalize;
  line-height: 1.2;
  margin-bottom: 0; }

p {
  color: #606060;
  margin-bottom: 10px; }

ul {
  margin: 0;
  padding: 0;
  list-style: none; }

a:hover,
a:focus {
  text-decoration: none;
  outline: none; }

input:focus,
textarea:focus,
select:focus,
button:focus,
.slick-slide {
  outline: none; }

button {
  cursor: pointer; }

img {
  width: 100%;
  height: auto;
  display: block; }

    .hero-section-2 {
  background-image: url("frontend/home-2-hero-bg.png");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding: 50px 0; }
  @media (min-width: 768px) and (max-width: 991.98px) {
    .hero-section-2 {
      padding: 120px 0; } }
  @media (max-width: 767.98px) {
    .hero-section-2 {
      padding: 80px 0; } }
  .hero-section-2 .tagline {
    color: #fe630e;
    font-size: 20px;
    text-transform: capitalize;
    font-weight: 500; }
  .hero-section-2 .button-part {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
    .hero-section-2 .button-part img {
      width: 40px; }
    .hero-section-2 .button-part span {
      color: #606060;
      text-transform: uppercase;
      font-weight: 500; }
  .hero-section-2 .hero-image {
    position: relative;
    z-index: 1; }
    @media (min-width: 768px) and (max-width: 991.98px) {
      .hero-section-2 .hero-image {
        display: none; } }
    @media (min-width: 576px) and (max-width: 767.98px) {
      .hero-section-2 .hero-image {
        display: none; } }
    @media (max-width: 575.98px) {
      .hero-section-2 .hero-image {
        display: none; } }
    .hero-section-2 .hero-image .hero-shape {
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1; }
</style>
      
 <section class="hero-section-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-content">
                        <!-- <span class="tagline">ECL</span> -->
                        <h1 class="margin-top-20">EXAM CENTRE LONDON | ECL</h1>
                        <p class="margin-top-20" style="font-size: 19px;">Your trusted private exam centre in London</p>
                        <div class="button-part margin-top-40">
                            <a class="zh_btn" href="{{ url('/exam-list') }}">Book Your Exam Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-image">
                        <img src="{{asset('frontend')}}/home-2-hero-image.png" alt="hero-image" class="main-image">
                        <div class="shape-image">
                            <img src="{{asset('frontend')}}/home-2-hero-shape.png" alt="shape" class="hero-shape item-rotate">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- EXAM CENTRE LONDON | ECL -->
    <section class="zh_exam_center section_padding" style="background-color: #fff;">
        <div class="container">
            <div class="zh_exam_center_heading text-center">
                <div class="zh_label">EXAM CENTRE LONDON | ECL</div>
                <h2 class="zh_heading">Independent London based Exam Centre</h2>
                
                
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <img src="{{ asset('frontend') }}/images2/details/flip-image.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="md_right_content">
                        <div class="p_wrapper">
                            <p>Welcome to ECL- <br>An affordable and accessible London based Exam Centre, meeting the assessment
needs of various candidates, including home educators, distance learners, excluded
and local authority learners as well as independent learners. We provide a wealth of
examination and assessment options, including:</p>
                        </div>
                        <div class="zh_exam_program_wrapper">
                            <!-- Visit for change icon -->
                            <div class="row">
                                 <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/aat-exams') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>AAT</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/gcse-exams') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>GCSEs</a>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/acca-exams') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>ACCA</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/igcse-exams') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>IGCSEs</a>
                                    </div>
                                </div>
                               
                                
                                <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/functional-skills-exams') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>FUNCTIONAL SKILLS</a>
                                    </div>
                                </div>
                                
                                 <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/a-level-exams') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>A LEVEL</a>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/exam-booking-aslevel') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>AS LEVEL</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p_wrapper with_space">
                            <p>Located in the heart of East London, close to transport hubs, Exam Centre London offers accessible and affordable assessment opportunities tailored to our learners’ needs. Our Ilford and Forest Gate Exam Centres provide Assessment solutions for candidates across London and the South-East. We’re proud to have been part of the qualification journey for thousands of candidates from the Central and Greater London and Essex areas.</p>
                            <a href="{{ url('/exam-list') }}" class="zh_btn mt-2">Book Your Exam Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ EXAM CENTRE LONDON | ECL -->
<!--  -->
<style>
        .features {
      padding-top: 0px;
    }

    .features .icon-box {
      display: flex;
      align-items: center;
      padding: 20px;
      transition: 0.3s;
      border: 1px solid #eef0ef;
    }

    .features .icon-box i {
      font-size: 32px;
      padding-right: 10px;
      line-height: 1;
    }

    .features .icon-box h3 {
      font-weight: 700;
      margin: 0;
      padding: 0;
      line-height: 1;
      font-size: 16px;
    }

    .features .icon-box h3 a {
      color: #37423b;
      transition: 0.3s;
    }

    .features .icon-box:hover {
      border-color: #5fcf80;
    }

    .features .icon-box:hover h3 a {
      color: #5fcf80;
    }
</style>
    <section class="case-study-section course-detail-section" style="background-color: #F7F7F7 !important;">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h4 style="text-transform: none;">We are a Joint Council for Qualification (JCQ) approved exam Centre and work in partnership with multiple awarding bodies to offer a plethora of assessment and qualification options.</h4>

                        <ul class="learn-list-two">
                            <li>Open 7-days per week</li>
                            <li>Ilford and Forest Gate sites for increased accessibility</li>
                            <li>Close to major transport links</li>
                            <li>Friendly and experienced staff</li>
                            <li>Pre-visits to help with exam-nerves</li>
                            <li>Private, Independent, Professional, Home-Based, Distance and Excluded Learners all catered for</li>
                            <li>Competitive prices</li>
                            <li>Tailored tuition available</li>
                        </ul>
                        <div class="text">
                            <p>Offering simple solutions to your assessment needs, Exam Centre London would love to chat through your requirements.  If you’re anxious about examinations, we offer pre-visits to help settle nerves.  Our friendly Team have significant exam knowledge and experience in supporting learners to gain qualifications.  We offer a holistic service that includes Exam preparation and tuition in conjunction with Merit Tutors.  Connect with us to find out more and chat through how we can help.</p>
                        </div>
                    </div>
                </div>
                
                
                <div class="image-column col-lg-7 col-md-12 col-sm-12">
                 
                </div>
                
            </div>
        </div>
    </section>
    <!-- Clients Section Two -->
    <section class="relationship-section" style="background-color: #fff;">
        <div class="auto-container">
            <div class="row clearfix">
              <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="color-box"></div>
                        <!-- <div class="icon-layer-one" style="background-image:url(frontend/images2/icons/icon-12.png)"></div> -->
                        <h2 class="zh_heading" style="color: #247e3d;font-size: 28px;font-weight: 800;line-height: 1.2em;margin-bottom: 30px">PRIVATE EXAM CENTRE LONDON</h2>
                        <p style="font-weight: bold;line-height: 30px;user-select: none;color: #181818 !important;font-size: 18px !important;font-family: 'Noto Sans TC', sans-serif;">GCSE | A-Level | IGCSE | ACCA ICBE | AAT</p>
                        <p style="color: #06092d;font-size: 16px;line-height: 1.9em;">
                        There’s a huge range of assessment options available at Exam Centre London.  We work with different Awarding Bodies to offer multiple Joint Council for Qualifications approved assessments.  It can feel daunting finding the assessment options that are right for you. Take a look at the assessment options we offer to find the examination that meets your assessment needs. </p>
                    </div>
                </div>
         
              
                
            </div>
        </div>
    </section>
    <!-- End Clients Section Two -->
    <section class="feature-section-three" style="background-color: #fff;">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <!-- Blocks Column -->
                <div class="blocks-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-two" style="background-image:url(frontend/images2/icons/icon-26.png)"></div>
                        <div class="blocks-pattern-layer" style="background-image:url(frontend/images2/background/pattern-19.png)"></div>
                        <div class="pattern-layer-four" style="background-image:url(frontend/images2/icons/icon-28.png)"></div>
                        <div class="row clearfix">
                            
                            <!-- Feature Block Five -->
                            <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <a href="{{ url('/gcse-exams') }}" class="overlay-box"></a>
                                    <div class="icon flaticon-teaching"></div>
                                    <h4 style="font-weight: bold;line-height: 30px;user-select: none;color: #181818 !important;font-size: 18px !important;font-family: 'Noto Sans TC', sans-serif;">GCSE Exams</h4>
                                </div>
                            </div>

                            <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <a href="{{ url('/igcse-exams') }}" class="overlay-box"></a>
                                    <div class="icon flaticon-teaching"></div>
                                    <h4 style="font-weight: bold;line-height: 30px;user-select: none;color: #181818 !important;font-size: 18px !important;font-family: 'Noto Sans TC', sans-serif;">IGCSE Exams</h4>
                                </div>
                            </div>
                               <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <a href="{{ url('/a-level-exams') }}" class="overlay-box"></a>
                                    <div class="icon flaticon-teaching"></div>
                                    <h4 style="font-weight: bold;line-height: 30px;user-select: none;color: #181818 !important;font-size: 18px !important;font-family: 'Noto Sans TC', sans-serif;">A-LEVEL Exams</h4>
                                </div>
                            </div>
                              <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <a href="{{ url('/exam-booking-aslevel') }}" class="overlay-box"></a>
                                    <div class="icon flaticon-teaching"></div>
                                    <h4 style="font-weight: bold;line-height: 30px;user-select: none;color: #181818 !important;font-size: 18px !important;font-family: 'Noto Sans TC', sans-serif;">AS-LEVEL Exams</h4>
                                </div>
                            </div>

                            
                            <!-- Feature Block Five -->
                            <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <a href="{{ url('/functional-skills-exams') }}" class="overlay-box"></a>
                                     <div class="icon flaticon-teaching"></div>
                                    <h4 style="font-weight: bold;line-height: 30px;user-select: none;color: #181818 !important;font-size: 18px !important;font-family: 'Noto Sans TC', sans-serif;">FUNCTIONAL SKILLS</h4>
                                </div>
                            </div>
                            
                            <!-- Feature Block Five -->
                            <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <a href="{{ url('/acca-exams') }}" class="overlay-box"></a>
                                    <div class="icon flaticon-teaching"></div>
                                    <h4 style="font-weight: bold;line-height: 30px;user-select: none;color: #181818 !important;font-size: 18px !important;font-family: 'Noto Sans TC', sans-serif;">ACCA CBE Exams</h4>
                                </div>
                            </div>
                            <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                                
                            </div>
                            <!-- Feature Block Five -->
                            <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <a href="{{ url('/aat-exams') }}" class="overlay-box"></a>
                                     <div class="icon flaticon-teaching"></div>
                                    <h4 style="font-weight: bold;line-height: 30px;user-select: none;color: #181818 !important;font-size: 18px !important;font-family: 'Noto Sans TC', sans-serif;">AAT Exams</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Connection Section -->



    <!-- End Testimonial Section Three -->

 <!-- News Section -->

    <!-- End News Section -->
        <!-- FAQ & Counter -->
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
                            <h3>TEACHERS</h3>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--/ FAQ & Counter -->
    
    <!-- Newsletter Section Two -->
    <section class="clients-section" style="background-color: #F7F7F7;" style="padding-top: 50px;padding-bottom: 70px;">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2 class="zh_heading" style="color: #247e3d;font-size: 28px;font-weight: 800;line-height: 1.2em;margin-bottom: 30px">We are an approved examination centre</h2>
                <!--<div class="text">Internal Appeals Procedure  2022/23</div>-->
            </div>
            
            <div class="sponsors-outer" style="padding-top: 40px;">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                      <li class="slide-item"><figure class="image-box"><a href="#"><img style="width: 150px;height: 100px;" src="frontend/images2/details/AAT_Approved_assessment_venue_colour.png" alt=""></a></figure></li>

                    <li class="slide-item"><figure class="image-box"><a href="#"><img style="width: 150px;height: 100px;" src="frontend/WJEC_CBAC_logo.svg.png" alt=""></a></figure></li>

                    <li class="slide-item"><figure class="image-box"><a href="#"><img style="width: 150px;height: 100px;" src="frontend/ocr-logo-2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img style="width: 196px;height: 80px;" src="frontend/New-Cambridge-Logo.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img style="width: 150px;height: 100px;" src="frontend/aqa_og_logo.png" alt=""></a></figure></li>
           
                </ul>
            </div>
            
        </div>
    </section>
    <!-- End Newsletter Section Two -->
    <!-- FAQ -->

@endsection