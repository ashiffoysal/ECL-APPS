@extends('layouts.frontend')
@section('title', 'Exam Day')
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
.breadcrumb-section {
    padding: 50px 0 !important;
   
}
</style>

    <section class="breadcrumb-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Exam Day</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>Exam Day</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
   <section class="zh_detail_2 section_padding">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h2 class="zh_heading">THE DAY OF YOUR EXAM(S)</h2>
    				<div class="p_wrapper">
    					<p>IMPORTANT EXAM INFORMATION</p>
    						<div class="details_2_right md_right_content">
    					<ul class="disc_list">
    						<li>Correct credentials and identification are absolutely necessary.</li>
    						<li>You need to bring them with you when you turn up for your exam.</li>
    						<li>If you do not have the correct documents you will not be allowed to sit the exam.</li>
    						<li>The test will NOT be delivered without the appropriate form of identification. There is no exception or circumstance to this rule. Failure to produce the correct ID will be deemed a “No-Show” and you will forfeit your exam.</li>
    		
    					</ul>
    				</div>
    				<br>
    				<p>If you are doing A-Levels you must turn up on time to sit the exam.  These exams are national exams and start and finish on the same day, at the same time, throughout the country.  If you turn up late or on the wrong day you cannot sit the exam.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- image with content -->
    <!--/ image content with button 02 -->

    <section class="zh_center_content section_padding">
    	<div class="container">
    			<div class="row">
	    			<div class="col-md-12">
	    			<h2 class="zh_heading">WHAT FORMS OF ID DO I NEED TO BRING WITH ME IN ORDER TO SIT THE EXAM(S) IN THE EXAM CENTRE?</h2>
	    			<p>You MUST bring TWO forms of IDENTIFICATION.</p>
	    			<p>One MUST be a current, in-date, Government-Issued Photo ID, that contains a photo that looks like you and contains your signature.  This could be</p>
	    			<div class="p_wrapper">
	    				<div class="details_2_right md_right_content">
	    					<ul class="disc_list">
	    						<li>A valid Passport or</li>
	    						<li>Driver’s License or</li>
	    						<li>Public Service Card</li>
	    					</ul>
	    				</div>
					</div>
					<br>
					<p>The second may be a</p>
					<div class="p_wrapper">
	    				<div class="details_2_right md_right_content">
	    					<ul class="disc_list">
	    						<li>A signed Bank Card or credit card.</li>
	    						<li>Social Security Card.</li>
	    						<li>A National Identity Card ISacceptable for those who hold one provided that it is still current.</li>
	    					</ul>
	    				</div>
					</div>
					<br>
					<p>A good and common combination Proof of Identity is a Passport or Driving Licence (or both) and a SIGNED Bank / Credit card.</p>

				</div>
				
    		</div>
    	</div>
    </section>
   <section class="zh_detail_2 section_padding">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h2 class="zh_heading">WHAT FORMS OF ID ARE NOT ACCEPTABLE?</h2>
    				<div class="p_wrapper">
    					<p>Please note the following are NOT acceptable forms of ID.</p>
    						<div class="details_2_right md_right_content">
		    					<ul class="disc_list">
		    						<li>Utility Bills</li>
		    						<li>Birth or Marriage Certificate</li>
		    		
		    					</ul>
		    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="zh_center_content section_padding">
    	<div class="container">
    			<div class="row">
	    			<div class="col-md-12">
	    			<h2 class="zh_heading">WHAT ELSE DOES MY ID NEED?</h2>
	    			<div class="p_wrapper">
	    				<div class="details_2_right md_right_content">
	    					<p>Be sure the names on your ID’s are displayed the same way it is displayed on your exam record, and that BOTH IDs have <br>a current signature that look like yours.</p>
	    				</div>
					</div>

				</div>
				
    		</div>
    	</div>
    </section>


        
@endsection