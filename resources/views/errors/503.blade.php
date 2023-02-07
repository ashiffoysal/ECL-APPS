@extends('layouts.frontend')

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
                    <h2>503</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>503</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Banner Section -->
    
    <!-- Contact Page Section -->
        <section class="contact-page-section">
        <div class="pattern-layer-three" style="background-image: url(frontend/images/icons/icon-8.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
                
              <div class="col-md-12 mt-5">
		
			<div class="content-box">
				<h2>503 Server Error!</h2>
			</div>
              </div>
                
            </div>
        </div>
    </section>
    <!-- End Contact Page Section -->
    
    <!-- Map Contact Section -->
  
    <!-- End Map Contact Section -->


@endsection