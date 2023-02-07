

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
    <section class="contact-banner-section">
        <div class="pattern-layer-one" style="background-image: url(/images/icons/icon-5.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(/images/icons/icon-6.png)"></div>
        <div class="pattern-layer-three" style="background-image: url(/images/icons/icon-4.png)"></div>
        <div class="pattern-layer-four" style="background-image: url(/images/icons/icon-8.png)"></div>
        <div class="auto-container">
            <!-- Page Breadcrumb -->
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Forget Password</li>
            </ul>
            <div class="content-box">
                <!-- <div class="title">A Level Endrosment</div> -->
              
                
                
            </div>
        </div>
    </section>
    <!-- End Event Detail Banner Section -->
    
    <!-- Event Detail Section -->
   <!-- Donate Page Section -->
    <section class="donate-page-section">
        <div class="pattern-layer-one" style="background-image: url(/images/icons/icon-8.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Donate Column -->
                <div class="offset-3 donate-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <h3>Forget Password</h3>
                            <!-- <div class="text">Login your Account</div> -->
                        </div>
                        <div class="title">Enter your email</div>
                        
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

                                                <form method="POST" action="{{ route('login.forgetpass') }}"> 
                                                @csrf
                                                      <div class="row ">
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                        <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
                                                           @error('email')
                                                            <div style="color:red">{{ $message }}</div>
                                                          @enderror
                                                    </div>
                                                    </div>
                                                    <button type="submit" class="btn  btn-success">Submit</button>
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
