@extends('layouts.frontend')
@section('title', 'A Level Endrosment')
@section('content')
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
                    <h2>A Level Endrosment</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>A Level Practical Endrosment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	<!-- Event Detail Banner Section -->
 
	<!-- End Event Detail Banner Section -->
	
	<!-- Event Detail Section -->
	<section class="event-detail-section">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Content Column -->
				<div class="content-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<h5>Endrosment Details</h5>
						
						<p>Exam Centre London offers the opportunity for candidates to sit A-Level practical exams for biology, chemistry and physics. We will be holding these sessions in nearby secondary schools, all within the borough of Newham. To ensure that you receive the best experience, Exam Centre London will provide highly qualified and competent science tutors to carry out these practical lessons. There will be practice lessons where candidates will be taught how to accurately and confidently manage equipment and tutors will also provide clear and concise instructions on how to conduct experiments.<br>
							<br>

Sessions will be held in local state schools during the spring half term to ensure that candidates can maximise the use of the labs and equipment. This will also ensure there are no disturbances and candidates are able to participate during sessions in a comfortable manner.<br>
<br>

Practice practical sessions will be led by one member of staff and five candidates with the opportunity for candidates to familiarise themselves with the lab and equipment and inquire regarding queries. During practice sessions, tutors will also allow candidates the opportunity to conduct these experiments individually and then provide feedback on improvements.  Tutors will also provide tips and tricks on how to conduct these practical assessments and how to efficiently manage time.</p>
						<div class="image">
							<img src="images2/resource/event-10.jpg" alt="" />
						</div>
						
						<div class="learn-box">
							<h5>Fees</h5>
							<ul class="learn-list">
								<li>Exam Centre London offers private A-Level candidates with a five day course per subject at the cost of <span style="color:red">£900</span>.</li>
								<li>These sessions will be detailed and provide a clear and thorough understanding of practical assessments with the opportunity for candidates to individually conduct practice assessments.</li>
								
							</ul>
						</div>
						
						<h5>Sessions</h5>
						<ul class="learn-list-two">
							<li>Prior to the sessions, the centre will conduct risk assessments to ensure that the labs and equipment are safe to use.</li>
							<li>During the practical sessions, tutors will make candidates aware of health and safety hazards and ensure that candidates are made aware of how to correctly handle lab equipment. Tutors will then provide clear demonstrations of the experiments required to understand for practical assessments. There will be an opportunity for candidates to make any inquiries regarding the practical assessments. Tutors will then give candidates the opportunity to conduct practice experiments where they will be closely monitored and given adequate feedback.</li>
						
							<li>
The second and final session will allow candidates the opportunity to demonstrate what they have learned during the practical sessions and this session will also allow tutors to provide the final feedback.</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Event Detail Section -->
	
	@endsection