@extends('layouts.frontend')
@section('title', 'Privacy Policy')
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
  padding: 100px 0;
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
                    <h2>Our Policy</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>Our Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-section" style="padding: 50px 0px;">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Feature Block -->
                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box" style="background-color: #ff6868 !important;">
                        <h6 style="color: white;">Complaints & Appeals</h6>
                        <a target="__blank" href="{{ asset('uploads/Internal-Procedures-Policy-2023.pdf') }}" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Our Policy</a>
                    </div>
                </div>
                
                <!-- Feature Block -->
                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box" style="background-color: #39e7a1 !important;">
                        <h6 style="color: white;">Privacy Policy</h6>
                        <a target="__blank" href="{{ asset('uploads/Privacy-Policy.pdf') }}" class="btn btn-success" style="color: black;background: #fff;margin: 15px 0px;border: 1px solid #fff;padding: 10px 18px;font-size: 15px;font-weight: 400;border-radius: 9px;">Our Policy</a>
                    </div>
                </div>
                
                <!-- Feature Block -->
              
                
            </div>
        </div>
    </section>
        
@endsection