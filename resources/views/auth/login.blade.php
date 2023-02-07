@extends('layouts.frontend')
@section('title', 'Student Login')
@section('content')

<style>
    /* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 10;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
}
.loginBtn--google:before {
  
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
}

.loginBtn--facebook {

    padding: 10px 40px;
}



a.loginBtn.loginBtn--google {
    padding: 10px 53px;
}
.loginBtn--google:hover, .loginBtn--google:focus {
    
    padding: 10px 53px;
    color: black;
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
                    <h2>Login</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li>/</li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="donate-page-section">
        <div class="pattern-layer-one" style="background-image: url(/images/icons/icon-8.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Donate Column -->
                <div class="offset-2 donate-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <h3>Login</h3>
                            <!-- <div class="text">Login your Account</div> -->
                        </div>
                        <div class="title">Enter your email & password</div>
                        
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
                                                <form method="POST" action="{{ route('login.custom') }}"> 
                                                    @csrf
                                                    <div class="row ">
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="email" name="email_login" value="" placeholder="Enter Your Email" required>

                                                               @error('email_login')
                                                                <div style="color:red">{{ $message }}</div>
                                                              @enderror
                                                        </div>
                                                        
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-12col-md-12 col-sm-12">
                                                            <input type="password" name="password" value="" placeholder="Enter Your Password" required>

                                                            <input type="hidden" name="previous_url" value="{{ url()->previous() }}" >
                                                             @error('password')
                                                                <div style="color:red">{{ $message }}</div>
                                                              @enderror
                                                        </div>
                                                        <!-- Form Group -->
                                                       
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <button type="submit" class="theme-btn btn-style-five" style="background-color: #000000;color: #fff;">Login</button>
                                                        </div>
                                                        <div class="form-group  col-sm-6 col-md-6">
                                                            <div class="important-text">
                                                                <p>Don't have an account? <a href="{{ url('student/signup') }}">Register now!</a></p>
                                                            </div>
                                                        </div>
                                                         <div class="form-group col-sm-6 col-md-6 text-right">
                                                                <a href="{{ url('/forget-password') }}" class="lost-your-password">Forgot your password?</a> 
                                                        </div>
                                                        <!-- <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                            <a href="{{ url('auth/google') }}" class="loginBtn loginBtn--google">
                                                              Login with Google
                                                            </a>
                                                        </div> -->

                                                        <div class="form-group col-sm-12  col-md-12 text-center">
                                                            <a href="{{ url('auth/google') }}" class="login-with-google-btn" >
                                                              Login with Google
                                                            </a>
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
<style >
    .login-with-google-btn {
  transition: background-color .3s, box-shadow .3s;
    
  padding: 12px 16px 12px 42px;
  border: none;
  border-radius: 3px;
  box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
  
  color: #757575;
  font-size: 14px;
  font-weight: 500;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
  
  background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTcuNiA5LjJsLS4xLTEuOEg5djMuNGg0LjhDMTMuNiAxMiAxMyAxMyAxMiAxMy42djIuMmgzYTguOCA4LjggMCAwIDAgMi42LTYuNnoiIGZpbGw9IiM0Mjg1RjQiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik05IDE4YzIuNCAwIDQuNS0uOCA2LTIuMmwtMy0yLjJhNS40IDUuNCAwIDAgMS04LTIuOUgxVjEzYTkgOSAwIDAgMCA4IDV6IiBmaWxsPSIjMzRBODUzIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNNCAxMC43YTUuNCA1LjQgMCAwIDEgMC0zLjRWNUgxYTkgOSAwIDAgMCAwIDhsMy0yLjN6IiBmaWxsPSIjRkJCQzA1IiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNOSAzLjZjMS4zIDAgMi41LjQgMy40IDEuM0wxNSAyLjNBOSA5IDAgMCAwIDEgNWwzIDIuNGE1LjQgNS40IDAgMCAxIDUtMy43eiIgZmlsbD0iI0VBNDMzNSIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHBhdGggZD0iTTAgMGgxOHYxOEgweiIvPjwvZz48L3N2Zz4=);
  background-color: white;
  background-repeat: no-repeat;
  background-position: 12px 11px;
  
  &:hover {
    box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 2px 4px rgba(0, 0, 0, .25);
  }
  
  &:active {
    background-color: #eeeeee;
  }
  
  &:focus {
    outline: none;
    box-shadow: 
      0 -1px 0 rgba(0, 0, 0, .04),
      0 2px 4px rgba(0, 0, 0, .25),
      0 0 0 3px #c8dafc;
  }
  
  &:disabled {
    filter: grayscale(100%);
    background-color: #ebebeb;
    box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
    cursor: not-allowed;
  }
}

</style>

@endsection