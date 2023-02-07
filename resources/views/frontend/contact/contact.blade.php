@extends('layouts.frontend')
@section('title', 'Contact')
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
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>Contact Us</li>
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
                
                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title-two">
                    
                            <div class="title" style="color: white;">GET IN TOUCH</div>
                        </div>


                        <h2>Visit one of our Exam Centre <br> or Contact us Today</h2>
                        <!-- <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </div> -->
                        <ul>
                            <li><span>Address</span>54 Upton Lane, London E7 9LN</li>
                            <li><span>Our Phone</span>Forest Gate: 0208 616 2526<br>Ilford: 0208 478 9988</li>
                            <li><span>Our Email</span>info@examcentrelondon.co.uk</li>
                            <li><span>Opening Hours</span>Monday - Friday: 9AM - 5PM</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="circle-layer"></div>
                        <div class="pattern-layer-one" style="background-image: url(images/icons/icon-7.png)"></div>
                        <div class="pattern-layer-two" style="background-image: url(images/icons/icon-9.png)"></div>
                        <h2>Leave a message</h2>
                        <div class="contact-form">
                            
                            <form  action="{{ url('/contact') }}" method="post" id="contact-form">
                               @csrf
                                
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="subject" required="">
                                </div>
                                
                                <div class="form-group">
                                    <textarea class="" name="message" placeholder="Comment"></textarea>
                                </div>
                                <div class="form-group" style="padding:10px ">
                                   <span style="color:red"> I am not robot </span><br>
                                    <span>{{ $rand_one }} + {{$rand_two}}</span> = <input style="padding:5px;" type="number" name="number" placeholder="Enter valid number" required>
                                    <input type="hidden" name="mynumber" value="{{ $val }}"><br>
                                    <span class="error_message_robot"></span>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-nine" type="submit" name="submit-form">Send Message</button>
                                </div>
                                
                            </form>
                        </div>
                            
                    </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Contact Page Section -->
    
    <!-- Map Contact Section -->
    <section class="map-contact-section">
        <div class="auto-container">
            <!-- Map Boxed -->
            <div class="map-boxed">
                <!-- Map Outer -->
                <div class="map-outer">
                   {!! $companyInformation->google_map !!}
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Contact Section -->


@endsection