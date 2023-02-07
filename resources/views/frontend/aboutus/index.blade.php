@extends('layouts.frontend')
@section('title', 'About Us')
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
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
   {{-- <section class="zh_exam_center section_padding">
        <div class="container">
            <div class="zh_exam_center_heading text-center">
                <div class="zh_label">About Us</div>
                <h2 class="zh_heading">Independent London-Based Exam</h2>
                
                
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <img src="{{ asset('frontend') }}/images2/details/flip-image.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="md_right_content">
                        <div class="p_wrapper">
                            <p>Welcome to ECL- Affordable and Accessible London-Based Exam Centres. Meeting the Assessment Needs of Home Educators, Distance Learners, Excluded and Local Authority Learners and Independent Learners. We provide a wealth of examination and assessment options, including:</p>
                        </div>
                        <div class="zh_exam_program_wrapper">
                            <!-- Visit for change icon -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/gcse-exams') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>GCSE</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/igcse-exams') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>IGCSE</a>
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
                                <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/functional-skills') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>FUNCTIONAL SKILLS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/acca-exams') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>ACCA</a>
                                    </div>
                                </div>
                             
                                <div class="col-sm-6">
                                    <div class="zh_exam_program">
                                        <a href="{{ url('/aat-exams') }}"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i>AAT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p_wrapper with_space">
                            <p>Located in the heart of East London, close to transport hubs Exam Centre London offers accessible and affordable assessment opportunities tailored to our learners’ needs. Our Ilford and Forest Gate Exam Centres provide Assessment solutions for candidates across London and the South-East. We’re proud to have been part of the qualification journey for thousands of candidates from the Central and Greater London and Essex areas.</p>
                            <a href="{{ url('/exam-list') }}" class="zh_btn mt-2">Booked Your Exams</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
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
                            <a href="{{ url('/exam-list') }}" class="zh_btn mt-2">Book your exam</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- 
   <section class="about-section" style="background-color: #fff !important;">
        <div class="color-layer"></div>
        <div class="pattern-layer-two" style="background-image:url(images2/icons/pattern-15.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="500ms">
                        <div class="sec-title-two">
                            <div class="title">About us</div>
                            <h2>Welcome To Exam Centre London</h2>
                        </div>
                        <div class="dark-text">Our unique learning environment sparks physical growth and discovery while our creative curriculum which combines the traditional and the progressive </div>
                        <div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </div>
                        <div class="row clearfix">
                            
                            <!-- Feature Column -->
                            <div class="feature-column col-lg-6 col-md-6 col-sm-12">
                                <div class="feature-inner">
                                    <div class="icon"><img src="{{asset('frontend')}}/images2/icons/feature-1.png" alt=""></div>
                                    <strong>Onsite Exams</strong>
                                    With flexible courses
                                </div>
                            </div>
                            
                            <!-- Feature Column -->
                            <div class="feature-column col-lg-6 col-md-6 col-sm-12">
                                <div class="feature-inner">
                                    <div class="icon"><img src="{{asset('frontend')}}/images2/icons/feature-2.png" alt=""></div>
                                    <strong>Online Exams</strong>
                                    Study flexibly online
                                </div>
                            </div>
                        </div>
                        <!-- Button Box -->
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    --}}

@endsection