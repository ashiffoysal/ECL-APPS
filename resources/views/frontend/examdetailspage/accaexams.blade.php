@extends('layouts.frontend')
@section('title', 'ACCA Exam')
@section('content')
<style>
	img.new_img {
    height: 150px !important;
}
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/ripon/ripon.css') }}">
   <!-- Content by Ripon -->
  
 
    <section class="zh_top_logo_content" style="background-color:#fff">
    	<div class="container">
    		<div class="logo_wrapper text-center">
    			<img src="{{asset('frontend/CBE-LOGOnew.jpg')}}" alt="" class="new_img" height="200px">
    		</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="p_wrapper text-center">
    					<p class="zh_tagline text-center">This document must be read and understood in full, by each student, prior to sitting each computer-based exam.
						ACCA offers computer-based exams for the first seven papers within the Foundations in Accountancy suite of awards and papers AB, MA, FA and LW of the ACCA Qualification.
						Exam Centre London are proud to partner with ACCA to offer assessment options for a suite of Chartered Certified Accountant Qualifications.As a licensed ACCA Computer-Based-Examination Centre, we follow ACCA procedures and protocols.</p>
						<a href="{{ url('/exam-booking-acca') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
    				</div>
    					
    			</div>
    				
    		</div>
    	</div>
    </section>
    <!-- image with content -->
    <!-- image content 01 -->
    <section class="image_content">
    	<div class="row">
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/15.jpg);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading">ACCA EXAM DETAILS</h2>
    				<div class="p_wrapper">
    					<p class="zh_tagline">HOW DOES IT WORK?</p>
    					<p>The exams are conducted at centres which are licensed by ACCA.

Centres register students for the computer-based exams via ACCA’s online administration system. They download exams for each student, the exams are then sat offline and results uploaded to the ACCA server upon completion of the exams.

If you intend sitting ACCA’s CBEs you must, in the first instance, be registered with ACCA. The centre will require the following personal information from you as well as proof that you are a registered and eligible student:</p>
    					<ul class="disc_list">
    						<li>Your ACCA student registration number</li>
    						<li>Date of birth (in day, month, year format)</li>
    						<li>Full Name and address</li>
    						<li>The qualification for which you are studying</li>
    						<li>Email address</li>
    						<li>Telephone Number</li>
    						<li>Gender</li>
    					</ul>
    				</div>
    				
    				<div class="p_wrapper with_space">
    					<p>Excluding Science subjects, where we advise candidates to sit alternative IGCSE sciences to avoid the practical element contained within GCSE Science specifications, we offer assessment on over 45 subjects and 100+ specifications across all Awarding Organisations<p>
    					<p>Details of the subjects we offer can be found here.</p>
    				</div>
    					<div class="p_wrapper with_space">
    					
						<a href="{{ url('/exam-booking-acca') }}" class="btn btn-secondary" style="color:white">Book Your Exam Now</a>
    				
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
    				<h2 class="zh_heading">ACCA Information</h2>
    				<div class="right_left">
    				<div class="p_wrapper with_space">
						<p>This information will be used only for the purposes of registering you as a student for the exams and informing ACCA of your exam results. The centre is required to inform you of the use of these personal details and the purpose for which the information will be used under the terms of data protection legislation. You should also be aware that ACCA is entitled to provide such information to the centre as it requires to do so from time to time. ACCA shall do so solely for the purposes of the administration of the exams and such information may be passed to a centre in a country where no data protection legislation exists. To prove you are registered and eligible to sit the requested CBEs, you will be required to provide your registration number, date of birth and contact details to the centre. You must also provide a valid, and official, form of photographic identification, eg passport. Failure to provide an official form of photographic identification will mean you cannot be booked in for a CBE session. The CBE centre will also require you to pay a fee directly to them to cover the administration, invigilation and exam fee costs. It may be possible for special arrangements to be made during exams for students who have a long term or permanent disability, indisposition, are visually impaired or who have a specific learning difficulty that might affect their exams. If you require such support, please notify the exams department by raising a request on the Additional Support Portal (access via the Disability Support link on the MyACCA page) at least three weeks in advance of your exam session. To allow us to fully consider your request, supporting documentary medical evidence must also be submitted. You should also contact the CBE centre’s examinations co-ordinator ahead of the exam session to make them aware of any adjustments which have been approved by ACCA.</p>

						
    				</div>
    					<div class="p_wrapper with_space">
    					
						<a href="{{ url('/exam-booking-acca') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
    					
    				</div>
    			</div>
    			</div>
    			
    		</div>
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/16.jpg);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    	</div>
    </section>
    <!--/ image content 02 -->

    <!-- image content 03 -->
    <section class="image_content">
    	<div class="row">
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/1.png);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading" style="color:#247e3d;">WHAT CAN YOU EXPECT?</h2>
    				<div class="p_wrapper">
    					<p>Once the centre has registered you for the exam you will be given a time and date for the exam by the centre’s examination co-ordinator. On the day of the exam, you will be provided with a workstation where you will attempt the exam. Workstations have to conform to standards and specifications laid down by ACCA. These have to be quietly situated, with individual PCs separated from other students, free from glare and conform to current health and safety requirements. An invigilator will be on hand to assist you with any queries you may have at the time of sitting the exam.</p>
    				</div>

    				<div class="p_wrapper with_space">
    					
						<a href="{{ url('/exam-booking-acca') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
    					<!-- 
    					<form>
						   <select class="zh_select">
						      <option value="none" selected>Exam Booking Now !</option>
						   </select>
						</form> -->
    				</div>


    			</div>
    		</div>
    	</div>
    </section>
    <!--/ image content 03 -->

    <section class="content_image">
    	<div class="row">
    		
    		<div class="col-md-6 ">
    			<div class="content_col">
    				<div class="right_left">
	    				<h2 class="zh_heading" style="color:#247e3d;">WHAT ABOUT THE EXAM ITSELF?</h2>
	    				<div class="p_wrapper with_space">
							<p class="zh_tagline">For all exams you will be given:</p>

							<ul>
								<li>=> Paper to do your rough workings.</li>
								<li>=> on-screen instructions showing you how to navigate through the exam screens.</li>
							</ul>
	    				</div>
	    				<p>If you are sitting FMA/MA, Management Accounting you will be provided with a formulae sheet, present value table and annuity table on screen.
						Prior to the exam start time the invigilator will read instructions to you. You will then be required to start the exam software which will prompt you to input your ACCA registration number and date of birth, to provide access to your exam. The invigilator will check the details on screen, your identity against your photographic ID and will ensure that you have been assigned the correct exam. You will then be permitted to start the exam.</p>
	    			</div>
    			</div>
    			
    		</div>
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/2.png);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    	</div>
    </section>


    <!-- top logo content -->

    <section class="image_content">
    	<div class="row">
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/3.png);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading" style="color:#247e3d;">CBE QUESTION TYPES</h2>
    				<div class="p_wrapper">
    					<p>The types of questions contained in the exams are:</p>
						<div class="learn-box">
							<ul class="learn-list" style="color:#000">
								<li>Multiple choice – where you are required to choose one answer from a list of options by clicking on the appropriate ‘radio button’.</li>

								<li>Multiple response – where you are required to select more than one response from the options provided by clicking the appropriate tick boxes. </li>

								<li>Multiple response matching – where you are required to select a response to a number of related statements by clicking on the ‘radio button’ which corresponds to the appropriate response for each statement.</li>

								<li>Number entry – where you are required to key in a numerical response to the question.</li>
							
							</ul>
						</div>
						<p>The Introductory and Intermediate Certificate in Financial and Management Accounting exams FA1, MA1, FA2 and MA2 exams will contain the Objective Test (OT) questions listed above – all two marks.

						The Diploma in Accounting and Business (FAB, FMA & FFA) and ACCA Qualification exams will contain the OTs outlined above in Section A and Multi Task Questions (MTQs) in Section B. MTQs are a series of tasks to be completed which relate to one or more scenarios.</p>
						<p>The following additional question types may also be present in MTQs:</p>
						<div class="learn-box">
							<ul class="learn-list" style="color:#000">
								<li>Gapfill – where you are required to enter answers into blank answer areas.</li>
								<li>Hotspot – where you are required to choose one or more answers by clicking on the appropriate hotspot area/areas on an image.</li>
							</ul>
						</div>
						<p>To allow you to become familiar with the question types above, and the operation of the CBE software, specimen exams are available for each paper on ACCA’s website.</p>
    				</div>

    				<div class="p_wrapper with_space">
    					
						<a href="{{ url('/exam-booking-acca') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
    				</div>


    			</div>
    		</div>
    	</div>
    </section>
    <!--/ image content 03 -->
 	<section class="content_image">
    	<div class="row">
    		
    		<div class="col-md-6 ">
    			<div class="content_col">
    				<div class="right_left">
	    				<h2 class="zh_heading" style="color:#247e3d;">DURING THE EXAM</h2>
	    				<div class="p_wrapper with_space">
							<p class="zh_tagline">The screen is locked down to ensure that only the exam software runs.You cannot use the on-screen calculator function.
								The keyboard and mouse must only be used for the purpose of answering questions. Any key presses not for the purpose of answering questions are prohibited and automatically reported to ACCA.</p>
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
    <section class="image_content">
    	<div class="row">
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/5.png);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading" style="color:#247e3d;">ANSWERING QUESTIONS</h2>
    				<div class="p_wrapper">
    					<p>During the exam you will be required to select or input your answer on-screen to the questions set. When you answer a question, your answer will automatically be saved.</p>
						
						<p>You can revisit questions and change your answers at any time during the exam.

							You can change your answer, move back or forward through the exam, skipping questions and returning to them at any time, provided that you do not quit from the program and that you do not exceed the time allocated overall for the exam.

							You can navigate between questions by clicking the next or previous button. You can also move to any specific question by clicking on a question number from the Exam Progress Details panel.

							The exam will automatically finish after the allocated time has been reached.

							If you wish to finish the exam early, click on the ‘Exit’ button. You will be notified if there are any incomplete questions or any questions remaining flagged and asked if you wish to proceed. If you do proceed, you will not be able to return to the exam.

							The instructions provided on the exam day will explain these steps in detail.</p>
						
    				</div>

    				<div class="p_wrapper with_space">
    					
						<a href="{{ url('/exam-booking-acca') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
    				</div>


    			</div>
    		</div>
    	</div>
    </section>
    <section class="content_image">
    	<div class="row">
    		
    		<div class="col-md-6 ">
    			<div class="content_col">
    				<div class="right_left">
	    				<h2 class="zh_heading" style="color:#247e3d;">AT THE END OF THE EXAM</h2>
	    				<div class="p_wrapper with_space">
							<p class="zh_tagline">The % mark which you have achieved will be shown on screen together with confirmation of whether your attempt at the exam has been successful. Print two copies of the provisional result notification when instructed to do so. Please retain one copy and leave the other with the invigilator.

							Your rough workings booklet and all instructions remain the property of ACCA, and will be collected by the invigilator and will not be returned to you.</p>
						</div>
						<h2 class="zh_heading" style="font-size: 16px;">WHAT HAPPENS NEXT?</h2>
	    				<div class="p_wrapper with_space">
							<p class="zh_tagline">The CBE centre is required to upload your exam results to ACCA’s server within a specified period of time. ACCA will process your result and will update your student record to reflect your CBE result.<br>

							The CBE centre is responsible for the administration, scheduling, cancellation and delivery of your exam. Any queries or complaints should be referred to the centre’s examinations coordinator in the first instance before contacting ACCA.<br>

							Where an exam is suspended, cancelled or otherwise nullified by ACCA (the examining board), it shall apply it’s compensation policy as follows:<br>

							If an examination paper(s) attempt is suspended, cancelled or otherwise nullified by the examining board (at any stage, whether before or after the examination sitting itself) ACCA will waive the fee (or part of it) for the next attempt at the paper(s) unless such suspension, cancellation or otherwise is caused by an epidemic, pandemic or any other event against which ACCA is unable to obtain insurance on reasonable commercial terms. Due to the nature and complexity of operating professional examinations, ACCA reserves the right not to reschedule any examination or offer any compensation other than as specified above.</p>
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
      <section class="image_content">
    	<div class="row">
    	
    		
    	</div>
    </section>
    <section class="zh_center_content section_padding">
    	<div class="container">
    		<div class="text-left">
    			<h2 class="zh_heading">EXAM REGULATIONS</h2>
    			<div class="p_wrapper row">
    				<div class="p_wrapper col-md-6">
    					<p>Taking your ACCA exams is part of your journey towards becoming an ACCA professional accountant and we therefore expect you to act in a professional manner when taking your exams.<br>
						The following regulations apply to students sitting paper based and computer-based exams, as well as those taking internally-assessed ACCA courses.</p>
						
						<p>You are required to adhere at all times to the examination regulations and guidelines below. If you are found to be in breach of any of these regulations or fail to adhere to the guidelines below, you may become liable to disciplinary action which could result in your removal from the student register.</p>

						<p>You are required to comply in all respects with any instructions issued by the exam supervisor/s, invigilator/s and any ACCA personnel before, during and at the conclusion of an exam.</p>
						<p>You may not attempt to deceive the exam supervisor/s, invigilator/s and any ACCA personnel by giving false or misleading information.</p>

						<p>You are not permitted during the exam to possess, use or attempt to use any written materials except those expressly permitted in the guidelines below. These are known as ‘unauthorised materials’.</p>

						<p>You are not permitted to use or attempt to use during the course of the exam any communication, photographic or electronic device other than an electronic calculator (where permitted). These are known as ‘unauthorised items’.</p>

						<p>You are not permitted to use or attempt to use during the course of the exam any communication, photographic or electronic device other than an electronic calculator (where permitted). These are known as ‘unauthorised items’.</p>

						<p>If you breach exam regulation 4 and the ‘unauthorised materials’ are relevant to the syllabus being examined, and or you use or attempt to use any unauthorised item or items in breach of regulation 5 above it will be assumed that you intended to use it or them to gain an unfair advantage in the exam. In any subsequent disciplinary proceedings, you will have to prove that you did not breach regulations 4 and/ or 5 to gain an unfair advantage in the exam.</p>
						<p>You (irrespective of if you are a licensed weapon holder) are not allowed to attend your exam with a weapon. If you are found to have a weapon in your possession you will be excluded from the exam without any reimbursement.</p>

						<p>You are required to comply with the ruling of supervisor/s, invigilator/s and any ACCA personnel. They are obliged to report any cases of irregularity or improper conduct to ACCA. They are also empowered to discontinue your exam if you are suspected of misconduct and to exclude you from the exam room.</p>

						<p>You may not engage in any improper conduct designed to assist you in your exam attempt or provide any improper assistance to any other exam entrant in their exam attempt.</p>

						<p>If you are sitting paper-based examinations, you are not permitted to remove either your candidate answer booklet(s) or your question paper from the exam room. All candidate answer booklets remain the property of ACCA. If you are taking a computer- based exam you are not permitted to remove any working papers issued to you. All exam working papers remain the property of ACCA. You must not copy, photograph or reproduce in any manner exam questions. You are also strictly prohibited from distributing or seeking to exploit for commercial gain unauthorised copies of exam questions.</p>
						<p>You must not seek to gain an unfair advantage in the exam (whether by breaching an exam regulation or otherwise).</p>

						<p>Candidates must not talk to, or attempt to communicate with, other candidates during the exam under any circumstances.</p>

						<p>You must not attempt to obtain and/or obtain your examination results prior to ACCA’s official published results release date.</p>
						
    				</div>
    				<div class="p_wrapper col-md-6">
    					<p>Taking your ACCA exams is part of your journey towards becoming an ACCA professional accountant and we therefore expect you to act in a professional manner when taking your exams.<br>
						The following regulations apply to students sitting paper based and computer-based exams, as well as those taking internally-assessed ACCA courses.</p>
						
						<p>You are required to adhere at all times to the examination regulations and guidelines below. If you are found to be in breach of any of these regulations or fail to adhere to the guidelines below, you may become liable to disciplinary action which could result in your removal from the student register.</p>

						<p>You are required to comply in all respects with any instructions issued by the exam supervisor/s, invigilator/s and any ACCA personnel before, during and at the conclusion of an exam.</p>
						<p>You may not attempt to deceive the exam supervisor/s, invigilator/s and any ACCA personnel by giving false or misleading information.</p>

						<p>You are not permitted during the exam to possess, use or attempt to use any written materials except those expressly permitted in the guidelines below. These are known as ‘unauthorised materials’.</p>

						<p>You are not permitted to use or attempt to use during the course of the exam any communication, photographic or electronic device other than an electronic calculator (where permitted). These are known as ‘unauthorised items’.</p>

						<p>You are not permitted to use or attempt to use during the course of the exam any communication, photographic or electronic device other than an electronic calculator (where permitted). These are known as ‘unauthorised items’.</p>

						<p>If you breach exam regulation 4 and the ‘unauthorised materials’ are relevant to the syllabus being examined, and or you use or attempt to use any unauthorised item or items in breach of regulation 5 above it will be assumed that you intended to use it or them to gain an unfair advantage in the exam. In any subsequent disciplinary proceedings, you will have to prove that you did not breach regulations 4 and/ or 5 to gain an unfair advantage in the exam.</p>
						<p>You (irrespective of if you are a licensed weapon holder) are not allowed to attend your exam with a weapon. If you are found to have a weapon in your possession you will be excluded from the exam without any reimbursement.</p>

						<p>You are required to comply with the ruling of supervisor/s, invigilator/s and any ACCA personnel. They are obliged to report any cases of irregularity or improper conduct to ACCA. They are also empowered to discontinue your exam if you are suspected of misconduct and to exclude you from the exam room.</p>

						<p>You may not engage in any improper conduct designed to assist you in your exam attempt or provide any improper assistance to any other exam entrant in their exam attempt.</p>

						<p>If you are sitting paper-based examinations, you are not permitted to remove either your candidate answer booklet(s) or your question paper from the exam room. All candidate answer booklets remain the property of ACCA. If you are taking a computer- based exam you are not permitted to remove any working papers issued to you. All exam working papers remain the property of ACCA. You must not copy, photograph or reproduce in any manner exam questions. You are also strictly prohibited from distributing or seeking to exploit for commercial gain unauthorised copies of exam questions.</p>
						<p>You must not seek to gain an unfair advantage in the exam (whether by breaching an exam regulation or otherwise).</p>

						<p>Candidates must not talk to, or attempt to communicate with, other candidates during the exam under any circumstances.</p>

						<p>You must not attempt to obtain and/or obtain your examination results prior to ACCA’s official published results release date.</p>
						
    				</div>

    				<div class="p_wrapper with_space">
    					
						<a href="{{ url('/exam-booking-acca') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
    				</div>


				</div>
				
    		</div>
    	</div>
    </section>
    <section class="content_image" style="background-color:#fff">
    	<div class="row">
    		
    		<div class="col-md-5 ">
    			<div class="content_col">
    				<div class="right_left">
	    				<h2 class="zh_heading" style="color:#247e3d;">EXAM FORMAT</h2>
	    				<div class="p_wrapper with_space">
							<p class="zh_tagline">Foundations in Accountancy</p>
							<p>Introductory Certificate in Financial and Management Accounting (FA1 and MA1)</p>

							<ul>
								<li>=> Is of two hours’ duration.</li>
								<li>=> Contains 50 questions.</li>
								<li>=> Is out of 100 marks.</li>
								<li>=> Has a pass mark of 50%.</li>
								<li>=> Contains two-mark objective test questions –multiple choice questions only.</li>
							</ul>
							<p>Intermediate Certificate in Financial and Management Accounting (FA2 and MA2)</p>
							<ul>
								<li>=> Is of two hours duration.</li>
								<li>=> Contains 50 questions.</li>
								<li>=> Is out of 100 marks.</li>
								<li>=> Has a pass mark of 50%.</li>
								<li>=> Has a pass mark of 50%.</li>
								</ul>
							<p>Contains the following objective test questions (OTs) -all worth two marks:</p>
							<ul>
								<li>=> Multiple choice questions.</li>
								<li>=> Multiple response questions.</li>
								<li>=> Multiple response matching questions.</li>
								<li>=> Number entry questions.</li>
								
							</ul>
							
	    				</div>
	    				
	    			</div>
    			</div>
    			
    		</div>
    		<div class="col-md-6 ">
    			<div class="content_col">
    				<div class="right_left">
	    				<div class="p_wrapper with_space">
							<p>Diploma in Accounting and Business (FAB, FMA and FFA)</p>

							<ul>
								<li>=> Is of two hours duration.</li>
								<li>=> Is out of 100 marks.</li>
								<li>=> Has a pass mark of 50%.</li>
							</ul>
							<p>Contains 2 sections:</p>
							<ul>
								<li>=> Section A contains objective test questions (OTs).</li>
								<li>=> Section B contains multi-task questions (MTQs).</li>
								
							</ul>
							<p>ACCA Qualification (AB, MA, FA and LW)</p>
							<ul>
								<li>=> Is of two hours duration.</li>
								<li>=> Is out of 100 marks.</li>
								<li>=> Has a pass mark of 50%.</li>
								<li>=> Multiple response matching questions.</li>
								<li>=> Number entry questions.</li>
							</ul>
							<p>Contains 2 sections:</p>
							<ul>
								<li>Section A contains objective test questions (OTs).</li>
								<li>Section B contains multi-task questions (MTQs).</li>
							</ul>
							
	    				</div>
	    				
	    			</div>
    			</div>
    			
    		</div>
    	</div>
    </section>

     <section class="zh_center_content section_padding">
    	<div class="container">
    		<div class="text-center">
    			<h2 class="zh_heading">ACCA Exam Booking</h2>
    			<div class="p_wrapper">
					<p>We work with a  Distance Learning providers to offer assessments that fit their requirements. If you are studying a Distance Learning Course and interested in sitting your assessment in one of our centres, contact us to see how we can help.</p>
				</div>
				<div class="p_wrapper with_space">
					<a href="{{ url('/exam-booking-acca') }}" class="btn btn-secondary" style="color:white">Book your exam</a>
				</div>
    		</div>
    	</div>
    </section>




@endsection
