@extends('layouts.frontend')
@section('title', 'IGCSE Exam')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/ripon/ripon.css') }}">
   <!-- Content by Ripon -->
   {{--
    <section class="zh_hero" style="background-image: url(frontend/images2/details/zh_hero_bg.jpg);">
    	<div class="zh_form_wrapper">
    			<h1>IGCSE Exam Details</h1>
    			<p>Exam Centre London has a network of exams centres covering a wide range of subjects, across the UK.</p>
         	<form>
         	<a href="{{ url('/exam-booking-igcse') }}" class="sectors-form btn btn-secondary" style="color:white">IGCSE Exam Booking</a>
         	</form>
      	</div>
    	<div class="for-position">
    		<div class="image_wrapper">
	    		<img src="{{asset('frontend')}}/images2/details/learning-partners-collage.jpg" alt="">
	    	</div>
    	</div>
    </section>
 	--}}

    <section class="zh_detail_2 section_padding">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h2 class="zh_heading">IGCSE Exam Details:</h2>
    			</div>
    			<div class="col-md-8">
    				<div class="p_wrapper">
    					<p>You will find all information you need if you looking for one the following:</p>
    					<p>IGCSE Exam Centre in London I Private IGCSE Exam Centre in London I Private Candidate IGCSE Examination Centre I IGCSE Exam Centre in East London I Private Maths IGCSE exam.</p>

						<p>If you are a student or adult looking to do a IGCSE exam, whether for the first time, or as a resit to improve your grade, you have come to the right place. We are one of the leading Private IGCSE Exam Centres in London – we specialise in being a IGCSE Maths Exams Centre for private candidates but we also offer other subjects.</p>

						<p>We can offer all sorts of help to ensure you are totally prepared for these exams as we are here to meet your specific needs. Our help includes tailored tuition prior to your IGCSE exams,a range of well-prepared resources, mock tests, and a full exam preparation course.</p>

						<p>So if you are a private exam student needing an external IGCSE exam centre then book your exam with us – we will make the whole process easy and effective. If you want tuition – whether a complete course or a short series of back up revision lessons – we offer you our excellent tutors and resources.</p>

						
    					<a  href="{{ url('/exam-booking-igcse') }}" class="btn btn-secondary" style="color:white; margin-top: 80px !important ;">Book your exam</a>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="details_2_right md_right_content">
    					<h2 class="zh_heading" style="font-size:16px">IGCSE SUBJECTS:</h2>
    					<div class="row">
    						<div class="col-md-6">
    							<ul class="disc_list">
		    						<li>Maths</li>
		    						<li>English</li>
		    						<li>Science</li>
		    						<li>History</li>
		    						<li>Language & many other subjects</li>
		    					</ul>
    						</div>
    				
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <!-- image with content -->
    <!-- image content 01 -->
    <section class="image_content">
    	<div class="row">
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/exam1.jpg);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading" style="color:#e4442f;">IGCSE</h2>
    				<div class="p_wrapper">
    					<h2 class="zh_heading" style="font-size:16px">EXAM TIMESTABLE</h2>
    					<p class="zh_tagline">Please visit the relevant exam board websites for details of your timetables. If you need further assistant, give us a call on 0208 616 25 26.</p>
						<p>Cambridge International time table</p>
						<p>Edexcel IGCSE Timetable</p>
    					
    				</div>
    				
    			</div>
    		</div>
    	</div>
    </section>
    <!--/ image content 01 -->

    <!-- image content 02 -->
    <section class="content_image">
    	<div class="row">
    		
    		<div class="col-md-6 ">
    			<div class="content_col">
    				<div class="right_left">
    				<h2 class="zh_heading" style="color:#e4442f;">EXAM BOOKING</h2>
    				<div class="p_wrapper with_space">
						<p>Step 1: Complete the <a href="{{ url('/exam-booking-igcse')}}">Exam  Application Form</a></p>
						<p>Step 2: Make Payment </p>
						<p>Step 3: Revise while We confirm your booking</p>
    				</div>
    				<h2 class="zh_heading" style="margin: 6px 0px !important;font-size:16px">EXAM BODIES</h2>
    				<div class="p_wrapper with_space" style="margin-top:1px !important">
						<p>Edexcel, AQA, OCR, WJCE</p>
						
						<a  href="{{ url('/exam-booking-igcse') }}" class="btn btn-secondary" style="color:white; margin-top: 10px !important ;">Book your exam</a>
    				</div>

    			</div>
    			</div>
    			
    		</div>
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/bg-gcse-exam-centre.jpg);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    	</div>
    </section>
 <section class="image_content" style="background-color:#fff !important">
    	<div class="row">
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/exam1.jpg);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading" style="color:#e4442f;">EXAM PREPARATION</h2>
    				<div class="p_wrapper">
    					<p>Resources, Mock Test, Revision Guide, Advice Tuition, Tuition</p>
    				</div>
    				<h2 class="zh_heading" style="margin-top: 6px;margin-top: 2px !important;font-size:16px;margin-bottom: 10px !important;"> Exam Day</h2>
    				<div class="p_wrapper with_space">
						<p>Visit the link to find the details: <a target="__blank"  style="color: red;" href="{{ url('/exam-day') }}">Exam day</a></p>
    				</div>
    				<h2 class="zh_heading" style="margin-top: 6px;margin-top: 2px !important;font-size:16px;margin-bottom: 10px !important;"> RESULTS DAY</h2>
    				<div class="p_wrapper with_space">
						<p>Results & Certificates <a style="color: red;" href=""> Click here</a></p>
						
    				</div>
    				<h2 class="zh_heading" style="margin-top: 6px;margin-top: 2px !important;font-size:16px;margin-bottom: 10px !important;">JCQ CAND. INFOR.</h2>
    				<div class="p_wrapper with_space">
						<p>JCQ Candidates information<a target="__blank" style="color: red;" href="https://www.jcq.org.uk/exams-office/information-for-candidates-documents"> Click here</a></p>
    				</div>
    				<h2 class="zh_heading" style="margin-top: 6px;margin-top: 2px !important;font-size:16px;margin-bottom: 10px !important;">JCQ CAND. WARN.</h2>
    				<div class="p_wrapper with_space">
						<a target="__blank" style="color:red;padding: 0px 0px 20px 0px" href="{{ asset('uploads/Warning-to-Candidates-1718.pdf') }}">Warning to Candidates 1718</a>
    				</div>
    				<h2 class="zh_heading" style="margin-top: 6px;margin-top: 2px !important;font-size:16px; margin-bottom: 10px !important;">RESOURCES</h2>
    				<div class="p_wrapper with_space">
						<p><a target="__blank"  href="">IGCSE Maths Resources</a></p>
						<p><a target="__blank"  href="">IGCSE English Resources</a></p>
						<p><a target="__blank"  href=""> IGCSE Science Resources</a></p>
						
    				</div>
    				
    			</div>
    		</div>
    	</div>
    </section>



    



    <!-- top logo content -->
    
    <!--/ top logo content -->
       <section class="zh_center_content section_padding">
    	<div class="container">
    		<div class="text-center">
    			<h2 class="zh_heading">IGCSE Exam Booking</h2>
    			<div class="p_wrapper">
					<p>We work with a  Distance Learning providers to offer assessments that fit their requirements. If you are studying a Distance Learning Course and interested in sitting your assessment in one of our centres, contact us to see how we can help.</p>
				</div>
				<div class="p_wrapper with_space">
					<a href="{{ url('/exam-booking-igcse') }}" class="btn btn-secondary" style="color:white"> Book your exam</a>
					
				</div>
    		</div>
    	</div>
    </section>


@endsection
