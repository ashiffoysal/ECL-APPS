@extends('layouts.frontend')
@section('title', 'AAT Exam Centre In London')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/ripon/ripon.css') }}">
   <!-- Content by Ripon -->
   {{-- 
    <section class="zh_hero" style="background-image: url(frontend/images2/details/zh_hero_bg.jpg);">
    	<div class="zh_form_wrapper">
    		<h1>AAT Exam Details</h1>
    		<p>Exam Centre London has a network of exams centres covering a wide range of subjects, across the UK.</p>
         	<form>
	             
         	<a href="{{ url('/exam-booking-aat') }}" class="sectors-form btn btn-secondary" style="color:white">AAT Exam Booking</a>
         	</form>
      	</div>
    	<div class="for-position">
    		<div class="image_wrapper">
	    		<img src="{{asset('frontend')}}/images2/details/learning-partners-collage.jpg" alt="">
	    	</div>
    	</div>
    </section>
--}}
    <section class="zh_top_logo_content" style="background-color:#fff">
    	<div class="container">
    		<div class="logo_wrapper text-center">
    			<img src="{{asset('frontend')}}/images2/details/AAT_Approved_assessment_venue_colour.png" alt="" class="img-fluid">
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="p_wrapper">
    					<p>Exam Centre London are proud to partner with AAT to offer assessment options for a suite of Accounting Qualifications. As a licensed AAT Computer-Based-Examination Centre, we follow AAT procedures and protocols.</p>
    					<p>AAT Accounting Qualifications give you practical, internationally recognised finance and accountancy skills that can open doors for you in any industry across the world.AAT short qualifications provide a solid foundation in bookkeeping and accounting software, acting as a good starting point if you’re new to these subjects.</p>
    					
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="p_wrapper">
    					<p>AAT is open to everyone – you don’t need previous qualifications or experience, and you can work at a pace that fits in with your lifestyle. Whether you’re looking for your first job in accountancy, or simply want to enhance your existing accounting skills, AAT will give you the training you need.</p>
						<p>AAT offers a range of benefits for student members (including study support, career advice to help find the perfect job and exclusive discounts), as well as a route into chartered accountancy. If you choose to further your studies with one of the leading chartered professional bodies, such as ACCA, CIPFA or CIMA, your AAT qualification will give you generous exemptions.</p>
    				</div>
    				<div class="p_wrapper with_space">
    					<a href="{{ url('/exam-booking-aat') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
    				</div>
    				
    			</div>	
    		</div>
    	</div>
    </section>




    <!-- image with content -->
    <!-- image content 01 -->
    <section class="image_content">
    	<div class="row">
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/16.jpg);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading">AAT EXAM DETAILS</h2>
    				<div class="p_wrapper">
    					<p class="zh_tagline">The Benefits of AAT Membership.</p>
    					<p class="zh_tagline">Once you’ve registered as an AAT student member you’ll be able to access a range of AAT support resources to help you succeed in your studies.</p>
    					<ul class="disc_list">

    						<li>Study support: Including practice assessments, interactive e-learning modules,qualification specification, Green Light tests, Real life scenarios and much more.</li>
    						<li>Dedicated call centre: AAT’s Customer Support team have a helpline especially for student queries.</li>

    						<li>Boosting your career prospects: From an online CV builder, interviews tips to the latest accountancy vacancies courtesy of our dedicated jobs site aat-jobs.co.uk.</li>

    						<li>Exclusive discounts: AAT Rewards is your exclusive rewards site that can help you save money on the things you buy every day. Find great offers on everything from cinema tickets to holidays and insurance.</li>

    						
    					</ul>
    				</div>
    				{{--
    				<div class="p_wrapper with_space">
    					<p>Excluding Science subjects, where we advise candidates to sit alternative IGCSE sciences to avoid the practical element contained within GCSE Science specifications, we offer assessment on over 45 subjects and 100+ specifications across all Awarding Organisations<p>
    					<p>Details of the subjects we offer can be found here.</p>
    				</div>
    				--}}
    			</div>
    		</div>
    	</div>
    </section>
    <!--/ image content 01 -->

    <!-- image content 02 -->
    <section class="content_image" style="background-color:#fff;">
    	<div class="row">
    		<div class="col-md-6 ">
    			<div class="content_col">
    				<div class="right_left">
    				<h2 class="zh_heading" style="color:#247e3d;">What’s covered and is it right for me?</h2>
    				<div class="p_wrapper with_space">
						<p class="zh_tagline">AAT’s Access Award in Bookkeeping and Access Award in Accounting Software provide you the opportunity to gain introductory skills across these the two key accountancy areas. The Access Award in Business Skills is a perfect all-round entry qualification, covering the basic requirements to prepare you for the workplace.</p>
    				</div>
    				<h2 class="zh_heading" style="font-size:16px">Foundation qualifications</h2>
    				<div class="p_wrapper with_space">
						<p class="zh_tagline">Whether you’re considering the Foundation Certificate in Bookkeeping, the Foundation Certificate in Accounting Software, or the Foundation Certificate in Accounting, the qualifications cover a range of basic accounting practices and techniques, from costing and double-entry bookkeeping to using accounting software.</p>
						<p class="zh_tagline">These qualifications are perfect if you’re new to finance or simply looking to brush up on your foundation knowledge and skills.</p>
    				</div>
    			</div>
    			</div>
    			
    		</div>
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/14.jpg);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    	</div>
    </section>
    <!--/ image content 02 -->

    <!-- image content 03 -->
    <section class="image_content">
    	<div class="row">
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/9.png);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading" style="color:#247e3d;">Advanced qualifications</h2>
    				<div class="p_wrapper">
    					<p>The Advanced Certificate in Bookkeeping and the Advanced Diploma in Accounting introduce more complex accounting tasks, like maintaining cost accounting records and the preparation of reports and returns.</p>
						<p>These are perfect if you’ve completed one of the foundation qualifications, or you’re already at a more advanced level and you’re looking to develop your accounting skills.</p>
    				</div>

    				<h2 class="zh_heading" style="font-size:16px">Professional qualifications</h2>
    				<div class="p_wrapper with_space">
						<p class="zh_tagline">The Professional Diploma in Accounting covers higher-level accounting tasks, including drafting financial statements, managing budgets and evaluating financial performance. You’ll also have the opportunity to specialise in areas from tax to auditing and credit control.</p>

						<p class="zh_tagline">This qualification is perfect if you’ve progressed through the foundation and advanced qualifications, or you’re at a higher stage in your career and you want a qualification to give you the confidence and proof that you have the skills to do the job.</p>

						<p class="zh_tagline">Once you’ve achieved this qualification, and with proof of relevant work experience, perhaps gathered while you were training, you’ll be able to apply to become a full member of AAT and use the letters MAAT after your name.</p>
						
    				</div>

    				<div class="p_wrapper with_space">
    					
						<a href="{{ url('/exam-booking-aat') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
    				</div>


    			</div>
    		</div>
    	</div>
    </section>
    <!--/ image content 03 -->

    <section class="content_image" style="background-color: #fff;">
    	<div class="row">
    		
    		<div class="col-md-6 ">
    			<div class="content_col">
    				<div class="right_left">
    				<h2 class="zh_heading" style="color:#247e3d;">What level shall I start at?</h2>
    				<div class="p_wrapper with_space">
						<p class="zh_tagline">Use AAT’s Qualifications Navigator to see which qualification is right for you. If you’re thinking about starting an AAT Accounting Qualification use AAT’s Skillcheck to help you decide which level is best suited to your skills.</p><p class="zh_tagline">Learn more about each level of the AAT Accounting Qualifications.</p>
    				</div>
    				<div class="p_wrapper with_space">
						<h2 class="zh_heading" style="font-size:16px">Next steps after qualifying</h2>
						<p class="zh_tagline">Once you’ve achieved the Professional Diploma in Accounting, you’ll be able to:</p>

						<ul class="" style="color: #000;">
							<li> Apply for AAT professional membership and use the letters MAAT after your name.</li>

							<li> Learn more about each level of the AAT Accounting Qualifications</li>

							<li> Become your own boss as an AAT Licensed Accountant</li>

							<li> Progress to university with AAT giving you 160 UCAS points</li>

							<li> Work overseas with our internationally recognised qualification</li>

						</ul>
						<p class="zh_tagline">Once you’ve successfully achieved the Advanced Diploma in Accounting or the Advanced Certificate in Bookkeeping you’ll be eligible to apply for AAT associate bookkeeping membership and use the designatory letters AATQB.</p>


	    				
    				</div>
    			</div>
    			</div>
    			
    		</div>
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/4.png);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    	</div>
    </section>


    <!-- top logo content -->
   
     <section class="zh_center_content section_padding" >
    	<div class="container">
    		<div class="text-center">
    			<h2 class="zh_heading">AAT Exam Booking</h2>
    			<div class="p_wrapper">
					<p>We work with a  Distance Learning providers to offer assessments that fit their requirements. If you are studying a Distance Learning Course and interested in sitting your assessment in one of our centres, contact us to see how we can help.</p>
				</div>
				<div class="p_wrapper with_space">
					<a href="{{ url('/exam-booking-aat') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
				</div>
    		</div>
    	</div>
    </section>
@endsection
