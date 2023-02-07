@extends('layouts.frontend')
@section('title', 'Invigilation Services')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/ripon.css') }}">
<style>
.content_image .image_col, .image_content .image_col {

    margin: 100px 0px;
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
                    <h2>Invigilation Services</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>Invigilation Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	<!-- Event Detail Section -->

	<!-- End Event Detail Section -->
	<section class="content_image image_content_btn_one_for_bg">
    	<div class="row">
    		<div class="col-md-6 ">
    			<div class="content_col right_left">
    				<h2 class="zh_heading">Invigilation Services</h2>
    				<div class="p_wrapper">
    					<p>Exam Centre London offers Exam Invigilation Services and Proctored exams for a diverse range of International universities throughout Europe, Australia, New Zealand, America, Canada and the UK.  Exam candidates and groups can access examination services from a range of universities here at our Exam Centre based in the heart of East London.
						Providing an invigilated and tension-free environment for exam candidates in a professional manner, our invigilators are qualified, experienced and fully trained on exam protocols enabling the exams to be accomplished with complete competence and integrity.
						Our prime location close to major transport hubs means we welcome exam candidates from a wide geographical area.  
						We’re happy to chat through costings and practical arrangements for any Exam Invigilation Services – do get in touch.  </p>
    				</div>
    				<div class="p_wrapper with_space">
    					<a href="{{  url('/contact') }}" class="zh_btn">Contact us</a>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-6 image_col" style="background-image: url(frontend/images2/details/EXAMS-10-1.jpg);">
    			<div class="image_left">
    				
    			</div>
    		</div>
    	</div>
    </section>

	@endsection