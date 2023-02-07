@extends('layouts.frontend')
@section('title', 'Register')
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
  background-image: url("../frontend/breadcrumb-bg.jpg");
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
                    <h2> Register</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
   <!-- Donate Page Section -->
    <section class="donate-page-section">
        <div class="pattern-layer-one" style="background-image: url(frontend/images/icons/icon-8.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Donate Column -->
                <div class="offset-2 donate-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <h3>Register</h3>
                            <!-- <div class="text">Login your Account</div> -->
                        </div>
                        <div class="title">Enter all input & create your account for exam booking</div>
                        
                        <!-- Donate Info Tabs-->
                        <div class="donate-info-tabs">
                            <!--Donate Tabs-->
                            <div class="donate-tabs tabs-box">
                                
                                <!--Tabs Container-->
                                <div class="tabs-content">
                                    
                                    <!-- Tab / Active Tab -->
                                    <div class="tab active-tab" id="prod-monthly">
                                        <div class="content">
                                            
                                            <!-- Donate Form -->
                                            <div class="donate-form">
                                                
                                                <form action="{{url('/student/signup')}}" method="post">

                                                    @csrf
                                                    <div class="row clearfix">
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="text" name="name" value="" placeholder="Enter Your First Name" required>

                                                               @error('name')
                                                                <div style="color:red">{{ $message }}</div>
                                                              @enderror
                                                        </div>
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="text" name="middle_name" value="" placeholder="Enter Your Middle name">
                                                        </div>
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="text" name="last_name" value="" placeholder="Enter Your Last Name" required>
                                                        </div>
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="email" name="email" value="" placeholder="Enter Your Email" required>

                                                               @error('email')
                                                                <div style="color:red">{{ $message }}</div>
                                                              @enderror
                                                        </div>
                                                         <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="text" name="phone" value="" placeholder="Enter Your phone" required>

                                                               @error('email')
                                                                <div style="color:red">{{ $message }}</div>
                                                              @enderror
                                                        </div>
                                                        {{--
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                                <select name="type">
                                                                        <option value="1">Student</option>
                                                                        <option value="2">Agents</option>
                                                                </select>

                                                               @error('email')
                                                                <div style="color:red">{{ $message }}</div>
                                                              @enderror
                                                        </div>
                                                        --}}
                                                        
                                                        
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="password" name="password" value="" placeholder="Enter Your Password" required>
                                                             @error('password')
                                                                <div style="color:red">{{ $message }}</div>
                                                              @enderror
                                                        </div>
                                                        <div class="form-group col-lg-12col-md-12 col-sm-12">
                                                            <input type="password" name="confirm_password" value="" placeholder="Enter Your Password Confirm" required>
                                                             @error('confirm_password')
                                                                <div style="color:red">{{ $message }}</div>
                                                              @enderror
                                                        </div>
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <button type="submit" class="theme-btn btn-style-five" style="background-color: #000000;color: #fff;">Register Now</button>
                                                        </div>
                                                           <div class="form-group  col-sm-6 col-md-6">
                                                              <div class="important-text">
                                                                    <p>Have an account? <a href="{{ url('/login') }}">Login now!</a></p>
                                                                </div>
                                                        </div>
                                                         <div class="form-group col-sm-6 col-md-6 text-right">
                                                            <a href="{{ url('/forget-password') }}" class="lost-your-password">Forgot your password?</a> 
                                                        </div>
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Event Detail Section -->
        
@endsection