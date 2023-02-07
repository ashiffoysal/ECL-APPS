@extends('layouts.frontend')
@section('title', 'A Level Exam Centre In London')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/ripon/ripon.css') }}">
   <!-- Content by Ripon -->
   {{--
    <section class="zh_hero" style="background-image: url(frontend/images2/details/zh_hero_bg.jpg);">
    	<div class="zh_form_wrapper">
    		<h1>A Level Exam Details</h1>
    		<p>Exam Centre London has a network of exams centres covering a wide range of subjects, across the UK.</p>
         	<form>
         	<a href="{{ url('/exam-booking-alevel') }}" class="sectors-form btn btn-secondary" style="color:white">A Level Exam Booking</a>
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
    				<h2 class="zh_heading">A Level Exam Details:</h2>
    			</div>
    			<div class="col-md-6">
    				<div class="p_wrapper">
    					<p>Exam Centre London are an independent, JCQ approved Assessment Centre for A-Level Examinations. We offer individual and group tuition with experienced tutors in addition to A-Level Assessments with leading Awarding Bodies including Pearson Edexcel, AQA, OCR and WJCE.</p>
						<p>Thousands of home-learners, distance-dearners and independent learners throughout London and Essex have benefitted from A-Level Examinations with Exam Centre London across a range of A-Level subjects including Maths, English, Physics, Chemistry and Biology.</p>
						<p>Many of our A-Level Candidates choose Exam Centre London as the Private Assessment Centre of choice offering highly experienced tutors for ongoing supportive tuition, exam preparation and fuss-free, affordable, external assessment.</p>
						<p>Whether you are resitting examinations to improve your grade or looking to sit A-Levels for the first time, Exam Centre London offers a tailored package that meets your learning and assessment needs. Our experienced, qualified teachers offer exam preparation through personalised tuition with ongoing assessment to gauge progress and target areas for development– all aimed at enabling you to obtain your highest possible grade.</p>
    				</div>
    				<div class="p_wrapper with_space">
					<!-- <a href="{{ url('/contact') }}" class="btn btn-secondary" style="color:white">Contact us</a> -->
					<a href="{{ url('/exam-booking-alevel') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
					
				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="details_2_right md_right_content">
    					<h2 class="zh_heading" style="font-size: 16px;">A LEVEL SUBJECTS:</h2>
    					<p style="color: #06092d;font-size: 16px;line-height: 1.9em;">We offer a wealth of different A-Level options and are always happy to consider offering a subject of your choice if not listed below. Please get in touch to chat through your requirements and we’ll be happy to help.</p>
    					<div class="row">
    						<div class="col-md-6">
    							<ul class="disc_list">
		    						<li>Accounting</li>
		    						<li>Biology</li>
		    						<li>Bengali</li>
		    						<li>Art & design</li>
		    						<li>Business studies</li>
		    						<li>Arabic</li>
		    						<li>Computer Science</li>
		    						<li>Chemistry</li>
		    						<li>Religious studies</li>
		    						<li>Statistics</li>
		    						<li>Further Maths</li>
		    					</ul>
    						</div>
    						<div class="col-md-6">
    							<ul class="disc_list">
		    						<li>Economics</li>
		    						<li>English</li>
		    						<li>History</li>
		    						<li>Geography</li>
		    						<li>Maths</li>
		    						<li>Law</li>
		    						<li>Statistics</li>
		    						<li>Phychology</li>
		    						<li>Physics</li>
		    						<li>Sociology</li>
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
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/4.png);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading" style="color:#247e3d;">A Level Exam Bodies</h2>
    				<div class="p_wrapper">
    					<!-- <h2 class="zh_heading" style="font-size:16px">Exam Bodies</h2> -->
    					<p class="zh_tagline">We work in partnership with a range of Awarding Bodies (often referred to as Exam Bodies). We offer A-Levels with the following Awarding Bodies:</p>
    					<ul class="disc_list">
    						<li>Pearson Edexcel</li>
    						<li>AQA</li>
    						<li>OCR</li>
    						<li>WJCE</li>
    					</ul>
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
    			<h2 class="zh_heading" style="color:#247e3d;">November Re-Sit</h2>
    				<div class="p_wrapper with_space">
						<p class="zh_tagline">We offer A-Level Re-Sit Examinations in November. This is a popular option for School and College Leavers who wish to improve their grade(s). Please contact us on 0208 616 25 26 for more information.</p>
						<br>
						<p><a style="color: red; font-weight: 600" href="{{ url('/exam-fees') }}">Click here</a>  for more details of our Examinations Fees.</p>
						<a  href="{{ url('/exam-booking-alevel') }}" class="btn btn-secondary" style="color:white; margin-top: 80px !important ;">Book your exam</a>
    				</div>
    			</div>
    			</div>
    			
    		</div>
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/6.png);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    	</div>
    </section>
    



    <!-- top logo content -->
    <section class="zh_top_logo_content" style="background-color:#fff !important;">
    	<div class="container ">
    		<h2 class="zh_heading mt-5" style="color:#247e3d;">A-Level Practical Assessments</h2>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="p_wrapper">
    					<p>Exam Centre London works in conjunction with Merit Tutors to offer A-Level practical exams for Biology, Chemistry and Physics. Sessions are held in fully equipped science labs in within the borough of Newham and supervised by . highly qualified and competent science tutors. Practice sessions prior to the examination will equip candidates to accurately, confidently and safely manage equipment and conduct experiments.</p>

    					<p>Sessions are held in local state schools during the spring half term to ensure that candidates can maximise the use of labs without being disturbed. Detailed risk assessments are completed to ensure labs and equipment are safe to use.</p>

    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="p_wrapper">
    					<p>Practice practical sessions are led by one member of staff and up to five candidates giving learners opportunity to familiarise themselves with the lab and equipment. Tutors will demonstrate core practical skills with chance for learners to ask questions before conducting their own individual practical experiments individually. Tutors provide tailored feedback across the week on how to improve and maximise grades.</p>
    					<p>The five-day practical course culminates with a final session in which candidates demonstrate their learning under assessed conditions. Details of fees for our A-Level Practical Assessments course can be accessed here.</p>
    				</div>
    				<div class="p_wrapper with_space">
    					
    				</div>
    				
    			</div>	
    		</div>
    	</div>
    </section>
    <!--/ top logo content -->
       <section class="zh_center_content section_padding">
    	<div class="container">
    		<div class="text-center">
    			<h2 class="zh_heading">A-Level Exam Booking</h2>
    			<div class="p_wrapper">
					<p>We work with a  distance learning providers to offer assessments that fit their requirements. If you are studying a distance learning course and interested in sitting your assessment in one of our centres, contact us to see how we can help.</p>
				</div>
				<div class="p_wrapper with_space">
					<!-- <a href="{{ url('/contact') }}" class="btn btn-secondary" style="color:white">Contact us</a> -->
					<a href="{{ url('/exam-booking-alevel') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
					
				</div>
    		</div>
    	</div>
    </section>
{{--

    <!-- top Heading content -->
    <section class="top_heading_content section_padding">
    	<div class="container">
    		<div class="logo_wrapper text-center">
    			<h2 class="zh_heading">University of London</h2>
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="p_wrapper">
    					<p>Exam Centre London Coventry and Bolton are approved University of London International Programmes Examination centres. We accommodate their Distance Learning Programme’s assessments.<br>
    					You will need to complete University of London’s Examination Application Form and send it to us to complete the application process. Please refer to Exam Centre London Fees List for entry fees.</p>
    					<p>Upon receipt of the application form we will issue you with an invoice which can be paid by bank transfer, cash or card payment. Please state at the time of returning the application form what your intended payment method will be, and we will send you a WorldPay link  if required. Please note we do not accept cheques. Your validation code will be issued once payment is received.</p>
    					<p>The above process needs to be completed by University of London’s deadline. More information about UoL entry deadlines and examinations can be viewed here.</p>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="p_wrapper">
    					<p>Joining instructions, including centre details and examination start times, will be forwarded to you on completion of booking. Please be aware that our examination start times differ to  University of London’s published start times.</p>
    					<p>Withdrawals and Refunds: If you wish to withdraw from a UoL exam that you have booked previously, please email your centre. Refunds will be issued up to 28 days prior to the examination date, less a £50 admin fee charge.</p><p>If you require any further information in the meantime, please do not hesitate to contact us.</p>
    				</div>
    				<div class="p_wrapper text-center d-inline-block">
    					<img src="{{asset('frontend')}}/images2/details/5os92IiU_400x400.svg" alt="" class="img-fluid"><br>
    					<a href="#" class=zh_btn>UOL Application Form</a>
    				</div>

    			</div>
    		</div>
    		<hr class="mt-4">
    	</div>
    </section>
    <!--/ top Heading content -->

    <!-- image content with button 01 -->
    <section class="image_content image_content_btn_one_for_bg">
    	<div class="row">
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/EXAMS-09-1.jpg);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading">Proctoring and University Students Abroad</h2>
    				<div class="p_wrapper">
    					<p>We have worked with dozens of Universities across the world to deliver one off exams to their learners on vacation or learning in the UK. Contact us to let us know your needs and we will arrange your exams with your learning provider.</p>
    				</div>
    				<div class="p_wrapper with_space">
    					<a href="#" class="zh_btn">Contact us</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!--/ image content with button 01 -->

    <!-- image content with button 02 -->
    <section class="content_image image_content_btn_one_for_bg">
    	<div class="row">
    		
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading">UK University distance learning</h2>
    				<div class="p_wrapper">
    					<p>We work with a number of UK Universities and distance learning providers to offer assessments that fit their requirements. If you are studying a distance learning course and interested in sitting your assessment in one of our centres, contact us to see how we can help.</p>
    				</div>
    				<div class="p_wrapper with_space">
    					<a href="#" class="zh_btn">Contact us</a>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/EXAMS-10-1.jpg);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    	</div>
    </section>
    <!--/ image content with button 02 -->

    <section class="zh_center_content section_padding">
    	<div class="container">
    		<div class="text-center">
    			<h2 class="zh_heading">UK University Distance Learning</h2>
    			<div class="p_wrapper">
					<p>We work with a number of UK Universities and Distance Learning providers to offer assessments that fit their requirements. If you are studying a Distance Learning Course and interested in sitting your assessment in one of our centres, contact us to see how we can help.</p>
				</div>
				<div class="p_wrapper with_space">
					<a href="#" class="zh_btn">Contact us</a>
				</div>
    		</div>
    	</div>
    </section>
--}}





{{-- 
			<style>
				}
				}
				.course-detail-section .info-column {
				    
				    padding-bottom: 40px;
				    padding-top: 400PX;
				}
				.btn-style-nine:hover {
				    color: #000000;
				}
			</style>
			<!-- Cource Detail Banner Section -->
		    <section class="cource-detail-banner-section" style="padding-top: 10px; background-color: #c7aaed !important; color: #fff;">

				<div class="auto-container">
					<!-- Page Breadcrumb -->
					<ul class="page-breadcrumb">
						<li><a href="{{url('/')}}">Home</a></li>
						<li style="color: #000;">A-LEVEL EXAM </li>
					</ul>
					<div class="content-box">
						<h2>A-LEVEL EXAM CENTRE LONDON</h2>			</div>
				</div>
			</section>
			<!-- End Cource Detail Banner Section -->
			
			<!-- Course Detail Section -->
			<section class="course-detail-section">
				<div class="auto-container">
					<div class="row clearfix">
						<!-- Content Column -->
						<div class="content-column col-lg-8 col-md-12 col-sm-12">
							<div class="inner-column">
								<h5>Exam Details</h5>

								<p>Exam Centre London are an Independent, JCQ approved Assessment Centre for A-Level Examinations.   We offer Individual and Group Tuition with experienced tutors in addition to A-Level Assessments with leading Awarding Bodies including Pearson Edexcel, AQA, OCR and WJCE.</p>
								
								<p>Thousands of Home-Learners, distance-learners and independent Learners throughout London and Essex have benefitted from A-Level Examinations with Exam Centre London across a range of A-Level subjects including Maths, English, Physics, Chemistry and Biology.  </p>

								<p>Many of our A-Level Candidates choose Exam Centre London as the Private Assessment Centre of choice offering highly experienced tutors for ongoing supportive tuition, exam preparation and fuss-free, affordable, external assessment.</p>

								<p>Whether you are resitting examinations to improve your grade or looking to sit A-Levels for the first time, Exam Centre London offers a tailored package that meets your learning and assessment needs.   Our experienced,qualified teachers offer exam preparation through personalised tuition with ongoing assessment to gauge progress and target areas for development– all aimed at enabling you to obtain your highest possible grade.</p>
								<!-- <div class="learn-box">
									<h5>Your FUNCTIONAL SKILLS ENGLISH (On Screen OR on Paper)</h5>
									<p>Each of the following components will have three assessments</p>
									<ul class="learn-list">
										<li>Reading 2. Writing 3. Speaking</li>
										<li>English Level 1</li>
										<li>English Level 2</li>
									</ul>
								</div>
								<div class="learn-box">
									<h5>FUCTIONAL SKILLS MATHS (On Screen OR On Paper)</h5>
									<p>Any of the following test will have a one written assessment</p>
									<ul class="learn-list">
										<li>Maths Entry Level</li>
										<li>Maths Level 1</li>
										<li>Maths Level 2</li>
									</ul>
								</div>
								<div class="learn-box">
									<h5>FUNCTIONAL SKILLS ICT</h5>
									<p>Any of the following test will have a one written assessment</p>
									<ul class="learn-list">
										<li>Level 1</li>
										<li>Level 2</li>
										<li>Entry Level 1, 2, 3</li>
									</ul>
								</div> -->
							
								
								<ul class="accordion-box-two">
								
									<!-- Block -->
									<!-- <li class="accordion block active-block">
										<div class="acc-btn active">A-LEVEL SUBJECTS <div class="icon fa fa-angle-down"></div></div>
										<div class="acc-content current">
											<div class="content">
												<ul class="accordion-list">
													<p>These are some of the A-Level Subjects  we offer. Please browse our A-Level Fees Page for more details. If the subject is not listed, please contact us.</p>
													<br>

													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Accounting</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Biology</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Bengali</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Art & design</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Arabic</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Business studies</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Chemistry</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Computer Science</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>English</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Geography</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>History</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Law</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Maths</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Physics</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Phychology</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Religious Studies</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Sociology</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Further Maths</a></li>
													<li><a href="#"><span class="list-icon fa fa-file-o"></span>Statistics</a></li>
											
												
												</ul>
											</div>
										</div>
									</li> -->
									
									<!--Block-->
									<li class="accordion block active-block">
										<div class="acc-btn active">A-LEVEL EXAM FEES</span> <div class="icon fa fa-angle-down"></div></div>
										<div class="acc-content current">
											<div class="content">
												<p></p>
												<a target="__blank" style="margin-top:10px" href="{{ url('/exam-fees') }}" style="color:red">Click here</a> for more details of our Examinations Fees.
											</div>
										</div>
									</li>
									
									<!-- Block -->
									<li class="accordion block">
										<div class="acc-btn">Exam Bodies</span> <div class="icon fa fa-angle-down"></div></div>
										<div class="acc-content">
											<div class="content">
												<p style="padding-top: 12px;">We work in partnership with a range of Awarding Bodies (often referred to as Exam Bodies).  We offer A-Levels with the following Awarding Bodies:<p>
												<ul class="accordion-list">
												<li>Pearson Edexcel</li>
												<li>AQA</li>
												<li>OCR </li>
												<li>WJCE</li>
													
											
												</ul>
											</div>
										</div>
									</li>
									<li class="accordion block">
										<div class="acc-btn">November Re-Sit</span> <div class="icon fa fa-angle-down"></div></div>
										<div class="acc-content">
											<div class="content">
												<p style="padding-top: 12px;">We offer A-Level Re-Sit Examinations in November.  This is a popular option for School and College Leavers who wish to improve their grade(s).  Please contact us on 0208 616 25 26 for more information.<p>
												
											</div>
										</div>
									</li>
										<li class="accordion block">
										<div class="acc-btn">A-Level Practical Assessments</span> <div class="icon fa fa-angle-down"></div></div>
										<div class="acc-content">
											<div class="content">
												<p style="padding-top: 12px;">Exam Centre London works in conjunction with Merit Tutors to offer A-Level practical exams for biology, chemistry and physics.   Sessions are held in fully equipped science labs in within the borough of Newham and supervised by  highly qualified and competent science tutors.  Practice sessions prior to the examination will equip candidates to accurately, confidently and safely manage equipment and conduct experiments.  <p>

												<p style="padding-top: 12px;">Sessions are held in local state schools during the spring half term to ensure that candidates can maximise the use of labs without being disturbed.  Detailed risk assessments are completed to ensure labs and equipment are safe to use.<p>

												<p style="padding-top: 12px;">Practice practical sessions are led by one member of staff and up to five candidates giving learners opportunity to familiarise themselves with the lab and equipment.  Tutors will demonstrate core practical skills with chance foe learners to ask questions before conducting their own individual practical experiments individually.  Tutors provide tailored feedback across the week on how to improve and maximise grades.<p>

												<p style="padding-top: 12px;">The five-day practical course culminates with a final session in which candidates demonstrate their learning under assessed conditions.    Details of fees for our A-Level Practical Assessments course can be accessed here. <p>
												
											</div>
										</div>
									</li>
									
									
									
									<!-- Block -->
									
									<!-- Block -->
							
									<!-- Block -->
								

								
									
								</ul>
								<!-- End Accordion Box -->
							
								<!-- Read More -->
								<div class="read-more">
									<!-- <a href="#">Book Exam</a> -->
								</div>
								
							</div>
						</div>
						
						<!-- Info Column -->
						<div class="info-column col-lg-4 col-md-12 col-sm-12">
							<div class="inner-column">
								<h5>This Exam Subjects:</h5>
								<p style="color: #000;font-size: 13px; margin-top:10px">We offer a wealth of different A-Level options and are always happy to consider offering a subject of your choice if not listed below.  Please get in touch to chat through your requirements and we’ll be happy to help.</p>
								
								<ul class="level-list">
									<li>Accounting</li>
									<li>Biology</span></li>
									<li>Bengali</li>
									<li>Art & design</li>
									<li>Business studies</li>
									<li>Arabic</li>
									<li>Computer Science</li>
									<li>Chemistry</li>
									<li>Economics</li>
									<li>English</li>
									<li>History</li>
									<li>Geography</li>
									<li>Maths</li>
									<li>Law</li>
									<li>Phychology</li>
									<li>Physics</li>
									<li>Sociology</li>
									<li>Religious studies</li>
									<li>Statistics</li>
									<li>Further Maths</li>
								</ul>
							
								
								
								<!-- Coupon Form -->
							
								<div class="btns-box">
									<a href="{{ url('/exam-booking-alevel') }}" class="theme-btn btn-style-nine" style="color:white">Book your exam</a>
								
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- End Course Detail Section -->

		--}}
@endsection
