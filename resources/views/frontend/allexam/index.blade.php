@extends('layouts.frontend')
@section('title', 'Exam List')
@section('content')
<style>

img {
    height: 70px !important;
}
</style>
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
                    <h2>Exam Booking List</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>Exam Booking List</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


 <section class="relationship-title-section" style="padding-top:100px">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="title-box" >
                <div class="section-color-layer"></div>
                 <div class="sec-title-two">
                    <div class="title">EXAM CENTRE LONDON | ECL</div>
                    <h2>Independent London-Based Exam</h2>
                </div>
                <div class="text"></div>
                <div class="text">Welcome to ECL- Affordable and Accessible London-Based Exam Centres.  Meeting the Assessment Needs of Home Educators, Distance Learners, Excluded and Local Authority  Learners and Independent Learners.  We provide a wealth of examination and assessment options, including:</div>
            </div>
        </div>
    </section>
 <section class="featured-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                    <a href="{{ url('/exam-booking-gcse') }}">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-mortarboard"></span>
                            </div>
                            <h6>GCSEs</h6>
                        </div>
                    </a> 
                </div>
                <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                    <a href="{{ url('/exam-booking-igcse') }}">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-mortarboard"></span>
                            </div>
                            <h6>IGCSEs</h6>
                        </div>
                    </a>
                </div>
                <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                    <a href="{{ url('/exam-booking-alevel') }}">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-mortarboard"></span>
                            </div>
                            <h6>A LEVELs</h6>
                        </div>
                    </a>
                </div>
                 <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                    <a href="{{ url('/exam-booking-aslevel') }}">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-mortarboard"></span>
                            </div>
                            <h6>AS LEVELs</h6>
                        </div>
                    </a>
                </div>
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                      <a href="{{ url('/exam-booking-functional-skills') }}">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-mortarboard"></span>
                            </div>
                            <h6>FUNCTIONAL SKILLS</h6>
                        </div>
                      </a>
                </div>
                
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                    <a href="{{ url('/exam-booking-acca') }}">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-mortarboard"></span>
                            </div>
                            <h6>ACCA</h6>
                        </div>
                    </a>
                </div>
                
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                    
                </div>
                 <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                    <a href="{{ url('/exam-booking-aat') }}">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-mortarboard"></span>
                            </div>
                            <h6>AAT</h6>
                        </div>
                    </a>
                </div>

                <div class="col-md-12 mt-5">
                    <div class="relationship-title-section">
                           <div class="title-box">
                        <div class="section-color-layer"></div>
               
                        <div class="text"></div>
                        <div class="text">Located in the heart of East London, close to transport hubs Exam Centre London offers accessible and affordable assessment opportunities tailored to our learners’ needs.  Our Ilford and Forest Gate Exam Centres provide Assessment solutions for candidates across London and the South-East.  We’re proud to have been part of the qualification journey for thousands of candidates from the Central and Greater London and Essex areas.   
                        </div>
                    </div>
                    </div>
                 
                </div>
                
            </div>
        </div>
    </section>
{{-- 
<section class="faq-blocks-section" style="margin: 50px 0px 0px 0px;">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					<!-- Faq Block -->
					<div class="faq-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
							<div class="icon-box">
								<img src="{{ asset('frontend/exam.png') }}" height="30px">
							</div>
							<h5><a href="{{ url('/exam-booking-fuctional-skills') }}">FUNCTIONAL SKILLS EXAMS</a></h5>
							<div class="text">consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</div>
							<a href="{{ url('/exam-booking-fuctional-skills') }}" class="read-more">Exam Booking</a>
						</div>
					</div>
					
					<!-- Faq Block -->
					<div class="faq-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
							<div class="icon-box">
								<img src="{{ asset('frontend/exam.png') }}" height="30px">
							</div>
							<h5><a href="{{url('/exam-booking-acca')}}">ACCA EXAMS</a></h5>
							<div class="text">consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</div>
							<a href="{{url('/exam-booking-acca')}}" class="read-more">Exam Booking</a>
						</div>
					</div>
					
					<!-- Faq Block -->
					<div class="faq-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
							<div class="icon-box">
								<img src="{{ asset('frontend/exam.png') }}" height="30px">
							</div>
							<h5><a href="{{ url('/exam-booking-aat') }}">AAT EXAMS</a></h5>
							<div class="text">consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</div>
							<a href="{{ url('/exam-booking-aat') }}" class="read-more">Exam Booking</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

--}}

@endsection