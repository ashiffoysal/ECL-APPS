<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{{ $companyInformation->company_name }}  @yield('title')</title>
<!-- Stylesheets -->
<meta property="og:type" content="website" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="{{ $seo->meta_description }}" />
<meta name="keywords" content="{{ $seo->meta_keyword }}" />
<meta name="author" content="{{ $seo->meta_author }}">
<meta property="og:title" content="Exam Centre London I Private Exam Centre London | GCSE, A-Level, Functional Skills, AAT, Private candidates are welcome" />
<meta property="og:url" content="https://www.examcentrelondon.co.uk/" />
<meta property="og:site_name" content="Exam Centre London I Private Exam Centre London | GCSE, A-Level, Functional Skills, AAT, Private candidates are welcome" />
<meta name="google-site-verification" content="Xhe7BCdyujybO4PreXFZCam9W05WXqaomr3yxAAPFmo" />
<link href="{{asset('frontend')}}/css/bootstrap.css" rel="stylesheet">
<link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">
<link href="{{asset('frontend')}}/css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('uploads/logo/'.$companyInformation->favicon)}}" type="image/x-icon">
<link rel="icon" href="{{asset('uploads/logo/'.$companyInformation->favicon)}}" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SE8F0X0QPQ"></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SE8F0X0QPQ');
</script>

</head>

<body class="hidden-bar-wrapper">
@include('sweetalert::alert')
<div class="page-wrapper">
    
<style type="text/css">
.relationship-title-section .title-box .title {
    color: #ffffff;
    font-size: 18px;
    font-weight: 500;
}

.main-header.header-style-four .login-box li:nth-child(2) a {
    position: relative;
    color: #ffffff;
    font-size: 18px;
    margin-left: 25px;
    padding: 10px 22px;
    border-radius: 50px;
    background-color: #000000;
    transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    font-family: 'Glory', sans-serif;
}
.btn-secondary {
    background-color: var(--porto-secondary-color,#e36159);
    border-color: var(--porto-secondary-color,#e36159) var(--porto-secondary-color,#e36159) var(--porto-secondary-dark-10,#dc372d);
    color: var(--porto-secondary-color-inverse,#fff);
}
    .sec-title {
   
     margin-bottom: 1px !important; 
}
.logo img {
    height: 50px !important;
}
.main-menu .navigation > li > a {
    font-weight: 600;
}
    .main-header.header-style-four .main-menu .navigation > li > a {
        font-size: 15px;
       
    }

    .main-header.header-style-four .login-box li a {
    
    font-size: 15px;
   
}

.main-header.header-style-four .login-box li:nth-child(2) a {
 
    font-size: 15px;
    
}
.main-header.header-style-four .header-lower .logo-box {
   
    background-color: #fff;
   
}
.main-header.header-style-four .main-menu .navigation > li > ul > li > a, .main-header.header-style-four .main-menu .navigation > li > ul > li > ul > li > a {
    font-size: 12px;
    
}
.main-menu .navigation > li > ul > li > a {
   
    font-size: 15px;
    
}

.contact-banner-section {

    padding-top: 50px !important;
    padding-bottom: 10px !important;
   
}
   </style>
   <style>
    .navbar-top {
  padding: 9px 0 6px 0;
  background: #000;
  height: 70px;
}
.navbar-top ul {
  margin: 0;
  padding: 0;
  line-height: initial;
}
.navbar-top ul li {
  display: inline-block;
  list-style: none;
  margin-right: 22px;
  padding-bottom: 10px;
  font-size: 13px;
  font-weight: 300;
}
.navbar-top ul li:last-child {
  margin-right: 0;
}
.navbar-top ul li p,
.navbar-top ul li a {
  margin: 0;
  color: #fff;
}
.navbar-top ul li p img,
.navbar-top ul li a img {
  margin-right: 5px;
}
.navbar-top ul li p i,
.navbar-top ul li a i {
  margin-right: 5px;
}
.navbar-top .topbar-right a {
  margin: 0 5px;
}
.navbar-top .topbar-right li {
  margin-right: 0;
}
.navbar-top .topbar-right li a i {
  margin-right: 0;
}
.navbar-top .topbar-right li a:last-child {
  margin-right: 0;
}
.navbar-top .topbar-right li:last-child {
  border-right: 0;
}

.navbar-area {
  position: absolute;
  width: 100%;
  z-index: 99;
}



.footer-bottom {
  padding: 10px 0px !important;
  position: relative;
  z-index: 2;
  background: #000;
}
.footer-bottom a img {
  max-width: 150px;
}
.footer-bottom p {
  margin-bottom: 0;
  color: #fff;
}
   </style>
   <div class="navbar-top">
            <div class="container">
                <div class="row">
                    <div class="col-6 align-self-center text-md-left text-center mt-2">
                        <ul>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li><a target="_blank" href="{{ url('/ucas-registered-centre') }}">UCAS Registered Centre</a></li>
                            <li class="d-none d-md-inline-block"><p><i class="fa fa-envelope-o"></i>info@examcentrelondon.co.uk</p></li>
                        </ul>
                    </div>
                    <div class="col-6 mt-2">
                        <ul class="text-right">
                            <!-- <li class="d-lg-inline-block d-none"><p><i class="fa fa-info-circle"></i> Become A Student</p></li> -->
                            <li class="d-lg-inline-block d-none"><a href="{{ url('/exam-booking-procedure') }}"><p><i class="fa fa-briefcase"></i>Booking Procedure</p></a></li>
                            <li><a href="{{ url('/exam-list') }}"><p class="add-to-cart-icon"><i class="fa fa-info-circle"></i>Book Your Exam</p><a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
   <header class="main-header header-style-four">
        <div class="header-lower">
            <div class="lower-inner">
                <div class="outer-container">
                    <div class="inner-container clearfix">
                        <div class="pull-left logo-box">
                            <div class="logo"><a href="{{url('/')}}"><img  src="{{ asset('/uploads/logo/logo_1662996021.png') }}"></a></div>
                        </div>
                        
                        <div class="pull-right nav-outer clearfix">
                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu show navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                       <li><a href="{{ url('/') }}">Home</a></li>
                                         <li class="dropdown"><a href="#">Exam</a>
                                            <ul>
                                                <li><a href="{{url('/functional-skills-exams')}}">Functional Skills Exams</a></li>
                                                <li><a href="{{url('/a-level-exams')}}">A Level  Exams</a></li>
                                                
                                                <li><a href="{{url('/exam-booking-aslevel')}}">AS Level  Exams</a></li>
                                                <li><a href="{{url('/gcse-exams')}}">GCSE Exams</a></li>
                                                <li><a href="{{url('/igcse-exams')}}"> IGCSE Exams</a></li>
                                                <li><a href="{{url('acca-exams')}}">ACCA Exams</a></li>
                                                <li><a href="{{url('aat-exams')}}">AAT Exams</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="{{ url('/invigilation-services') }}">Invigilation Services</a></li>
                                        <li class=""><a href="{{ url('/exam-fees') }}">Our Fees</a></li>
                                        <li class="dropdown"><a href="#"> Practical Endorsement</a>
                                            <ul>
                                                <li><a href="{{url('/a-level-endorsment')}}">A LEVEL ENDORSEMENT</a></li>
                                                <li><a href="{{url('/gcse-endorsment')}}">GCSE ENDORSEMENT</a></li>
                                               
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                               
                                     </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                            
                            <!-- Outer Box -->
                            <div class="outer-box clearfix">
                            
                                
                                @if(Auth::user())
                                    @if(Auth::user()->user_type==1)
                                    <!-- Login Box -->
                                    <ul class="login-box">
                                        <li><a href="{{ url('/student/dashboard') }}" class="register"><span class="icon flaticon-homework"></span>Dashboard</a></li>
                                    </ul>
                                    @endif
                                     @if(Auth::user()->user_type==2)
                                    <ul class="login-box">
                                        <li><a href="{{ url('/agent/dashboard') }}" class="register"><span class="icon flaticon-homework"></span>Dashboard</a></li>
                                    </ul>
                                    @endif

                                @else
                                <ul class="login-box">
                                    <li><a href="{{url('/login')}}" class="login"><span class="icon flaticon-homework"></span>Login</a></li>
                                    <li><a href="{{ url('/student/signup') }}" class="register "><span class="icon flaticon-homework"></span>Register</a></li>
                                </ul>
                                @endif
                                
                            </div>
                                
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
             <nav class="menu-box">
                <div class="nav-logo"><a href="{{url('/')}}"><img src="{{ asset('uploads/logo/'.$companyInformation->logo) }}" alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
            {{-- 
                <nav class="menu-box mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 361px;"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                    <div class="nav-logo"><a href="index.html"><img src="{{ asset('uploads/logo/'.$companyInformation->logo) }}" alt="" title="" class="mCS_img_loaded"></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    
                                    <div class="navbar-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    
                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                           <li class="current"><a href="{{ url('/') }}">HOME</a></li>
                                        
                                             <li class="dropdown"><a href="#">EXAM</a>
                                                <ul>
                                                    <li><a href="{{url('/functional-skills-exams-in-centre-london')}}">Functional Skills Exams</a></li>
                                                    
                                                      <li><a href="{{url('/a-level-exams-in-centre-london')}}">A Level  Exams</a></li>
                                                      
                                                        <li><a href="{{url('gcse-exams-in-centre-london')}}">GCSE Exams</a></li>
                                                 
                                                   
                                                </ul>
                                            </li>


                                            <li class=""><a href="{{ url('/invigilation-services') }}">INVIGILATION SERVICES</a></li>
                                            <li class=""><a href="{{ url('/exam-fees') }}">OUR FEES</a></li>
                                           
                                            <li class="dropdown"><a href="#">PRACTICAL ENDORSEMENT</a>
                                                <ul>
                                                    <li><a href="{{url('/a-level-endorsment')}}">A LEVEL ENDORSEMENT</a></li>
                                                    <li><a href="{{url('/gcse-endorsment')}}">GCSE ENDORSEMENT</a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                                         </ul>
                                    </div>
                                </div>
                </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
            </nav>
            --}}
        </div><!-- End Mobile Menu -->
    
    </header>

    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">
                    
                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="#" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-two">
                                    <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                                    <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                    <li><span class="icon fa fa-envelope"></span>lebari@gmail.com</li>
                                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
   
    

         @yield('content')
    

    
    <footer class="main-footer" style="background-color:#EFF7FF">
        <!-- <div class="circle-layer"></div> -->
        
   <!--      <div class="pattern-layer-two" style="background-image: url(frontend/images/background/pattern-13.png)"></div>
        <div class="pattern-layer-three" style="background-image: url(frontend/images/background/pattern-14.png)"></div>
        <div class="pattern-layer-four" style="background-image: url(frontend/images/background/pattern-13.png)"></div> -->
        <div class="auto-container" style="padding: 10px 15px !important;">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    
                    <!-- Footer Column -->
                    <div class="footer-column col-lg-5 col-md-12 col-sm-12">
                        <div class="footer-widget logo-widget">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{ asset('uploads/logo/'.$companyInformation->logo) }}"  class="mylogo" alt="" /></a>
                            </div>
                            <style>
                                .mylogo{
                                height: 67px;
                                 width: 243px;
                                }
 
                            </style>
                            <ul class="info-list">
                                <li>Address:<a href="#"> 54 Upton Lane, London E7 9LN</a></li>
                                <li>Tel:<a href="tel:020 8616 2526">  020 8616 2526</a></li>
                                <li>Email:<a href="mailto:info@examcentrelondon.co.uk"> info@examcentrelondon.co.uk</a></li>
                                <li>Opening Hours:<a href=""> Monday - Friday: 9AM - 5PM</a></li>
 
                            </ul>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="twitter"><a target="_blank" href="{{ $social->twitter }}" class="fa fa-twitter"></a></li>
                                <li class="pinterest"><a target="_blank" href="{{ $social->skype }}" class="fa fa-skype"></a></li>
                                <li class="facebook"><a target="_blank" href="{{ $social->facebook }}" class="fa fa-facebook-f"></a></li>
                                <li class="dribbble"><a target="_blank" href="{{ $social->youtube }}" class="fa fa-youtube"></a></li>
                            </ul>
                            <!-- <div class="text">Get started now and take advantage of <br> our 30 day free trial today.</div> -->
                        </div>
                    </div>
                    
                    <!-- Footer Column -->
                    <div class="footer-column col-lg-7 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="column col-lg-4 col-md-4 col-sm-12">
                                <h5>About</h5>
                                <ul class="list">
                                     <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                   
                                    <li><a href="{{ url('/exam-fees') }}">Exam Fees</a></li>
                                    <li><a href="{{ url('/exam-tips') }}">Exam Tips</a></li>
                                    <li><a href="{{ url('/exam-booking-date-details') }}">Exam Entry Deadline</a></li>
                             
                                    
                                </ul>
                            </div>
                            <!-- Column -->
                            <div class="column col-lg-4 col-md-4 col-sm-12">
                                <h5>Need some help?</h5>
                                <ul class="list">
                                    <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                                    
                                   
                                    <li><a href="{{ url('/terms-condition') }}">Terms & Condition</a></li>
                                      
                                   
                                    
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    
                                        <li><a href="{{ url('/blogs') }}">Blogs</a></li>
                                
                                    
                                </ul>
                            </div>
                            <!-- Column -->
                            <div class="column col-lg-4 col-md-4 col-sm-12">
                                <h5>Pages</h5>
                                <ul class="list">
                                     @if(Auth::user())
                                    <li><a href="{{ url('/student/dashboard') }}">Dashboard</a></li>
                                    @else
                                         <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/student/singup') }}">Register</a></li>
                                    @endif
                                    <li><a href="{{ url('/faq') }}">FAQs</a></li>
                                    {{--
                                    <li><a href="{{ url('/supports') }}">Supports</a></li>
                                     --}}
                                    <li><a href="{{url('/exam-list')}}">Exam List</a></li>
                                  
                                   
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Lower Box -->
            <!-- Footer Bottom -->
            {{--
            <div class="footer-bottom">
                <div class="row clearfix">
                    <!-- Copyright Column -->
                    <div class="copyright-column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright">Copyright 2022, All Right Reserved</div>
                    </div>
                    
                    <!-- Nav Column -->
                    <div class="nav-column col-lg-6 col-md-12 col-sm-12">

                        <ul>
                            @if(Auth::user())
                            
                                @if(Auth::user()->user_type==1)
                                <li><a href="{{ url('/student/dashboard') }}">Dashboard</a></li>
                                @endif

                                @if(Auth::user()->user_type==2)
                                <li><a href="{{ url('/agent/dashboard') }}">Dashboard</a></li>
                                @endif
                            @else
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/student/singup') }}">Sign up</a></li>
                            @endif
                        </ul>
                    </div>
                    
                </div>
            </div>
            --}}
            
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 align-self-center">
                        <p>Designed &amp; Developed By Exam Centre London</p>
                    </div>
                    <div class="col-md-7 text-md-right align-self-center mt-lg-0 mt-3">
                        <p>© Copyrights 2023 Exam Centre London All rights reserved. </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<script src="{{asset('frontend')}}/js/jquery.js"></script>
<script src="{{asset('frontend')}}/js/popper.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.fancybox.js"></script>
<script src="{{asset('frontend')}}/js/appear.js"></script>
<script src="{{asset('frontend')}}/js/parallax.min.js"></script>
<script src="{{asset('frontend')}}/js/tilt.jquery.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.paroller.min.js"></script>
<script src="{{asset('frontend')}}/js/owl.js"></script>
<script src="{{asset('frontend')}}/js/wow.js"></script>
<script src="{{asset('frontend')}}/js/nav-tool.js"></script>
<script src="{{asset('frontend')}}/js/jquery-ui.js"></script>

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
<link href="{{asset('frontend/signature')}}/css/jquery.signature.css" rel="stylesheet">

<style>
.kbw-signature { width: 400px; height: 200px; }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="{{asset('frontend/signature')}}/js/jquery.signature.js"></script>
<script>
$(function() {

  var sig = $('#sig').signature({
    syncField:'#signature', 
    syncFormat:'PNG'
    });

  $('#clear').click(function() {
    sig.signature('clear');
  });

});
</script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script>
        $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            swal({
                    title: "Are you Want to delete?",
                    text: "Once Delete, This will be Permanently Delete!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = link;
                    } else {
                        swal("Safe Data!");
                    }
                });
        });
    </script>
        <script src="{{asset('backend')}}/assets/izitost.js"></script>
    <script>
        @if(Session::has('messege'))
        var type = "{{Session::get('alert-type','info')}}"
        switch (type) {
            case 'success':
                iziToast.success({
                    message: '{{ Session::get('messege') }}',
                    'position': 'topRight'
                });
                break;
            case 'info':
                iziToast.info({
                    message: '{{ Session::get('messege') }}',
                    'position': 'topRight'
                });
                break;
            case 'warning':
                iziToast.warning({
                    message: '{{ Session::get('messege') }}',
                    'position': 'topRight'
                });
                break;
            case 'error':
                iziToast.error({
                    message: '{{ Session::get('messege') }}',
                    'position': 'topRight'
                });
                break;
        }
        @endif
    </script>
    <script src="{{asset('backend')}}/assets/js/spartan-multi-image-picker.js"></script>
        <script>
    $(document).ready(function() {

        $('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
    
        $("#update_image").spartanMultiImagePicker({
            fieldName: 'thumbnail_img',
            maxCount: 1,
            rowHeight: '60px',
            allowedExt:'png|jpg|jpeg|gif',
            groupClassName: 'col-lg-12 col-md-12 col-sm-12 col-xs-12',
            maxFileSize: '',
            dropFileLabel: "Drop Here",
            

            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file');
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            },
        });

        $("#photos").spartanMultiImagePicker({
            fieldName: 'photos[]',
            maxCount: 4,
            rowHeight: '200px',
            groupClassName: 'col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6',
            maxFileSize: '',
            dropFileLabel: "",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });
        $("#product_img").spartanMultiImagePicker({
            fieldName: 'fileUpload',
            maxCount: 1,
            rowHeight: '200px',
            groupClassName: 'col-xl-12 col-md-12 col-sm-12 col-xs-12',
            maxFileSize: '1200000',
            dropFileLabel: "Drag & Drop",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big max file size 120kb');
                alert('file size too big, max file size 120kb');
            }
        });
        
        $("#thumbnail_img").spartanMultiImagePicker({
            fieldName: 'thumbnail_img',
            maxCount: 1,
            rowHeight: '200px',
            groupClassName: 'col-xl-12 col-md-12 col-sm-12 col-xs-12',
            maxFileSize: '',
            dropFileLabel: "Drag & Drop",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });
    });
</script>
<script>
  
    (function($) {
        $('.accordion > li:eq(0) a').addClass('active').next().slideDown();
        $('.accordion a').click(function(j) {
            var dropDown = $(this).closest('li').find('p');
            $(this).closest('.accordion').find('p').not(dropDown).slideUp();
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.accordion').find('a.active').removeClass('active');
                $(this).addClass('active');
            }
            dropDown.stop(false, true).slideToggle();
            j.preventDefault();
        });
    })(jQuery);    
      
    </script>  


    <!-- Counter -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'></script> 
    <script src='https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js'></script> 
    <script> 
      $('.counter').counterUp({ 
        delay: 10, 
        time: 2000 
      }); 
      $('.counter').addClass('animated fadeInDownBig'); 
    </script>
    
@yield('myjs')
<script src="{{asset('frontend')}}/js/script.js"></script>
</body>
</html>
