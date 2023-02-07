@extends('layouts.frontend')
@section('content')
<style>
.main-banner-item.banner-item-four {
    background-image: unset;
    background-color: #73548f !important;
}
img.myimagebanner {
    border-radius: 60px;
}
</style>
        <div class="main-banner"> 
            <div class="main-banner-item banner-item-four">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <span>Play, Learn and Grow</span>
                                        <h1>{{$banner->title}}</h1>
                                        <p>{{ $banner->details }}</p>

                                        <div class="banner-btn">
                                            <a href="{{url('/assesment')}}" class="default-btn">
                                                Free Assessment
                                            </a>
                                            <a href="{{ url('/admission-procedure') }}" class="optional-btn">
                                                Admission Procedure
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="main-banner-image-wrap">
                              
                                        <img class="myimagebanner"  src="{{ asset('uploads/banner/ban.jpg')}}" alt="image">

                                        <div class="banner-image-wrap-shape">
                                            <img src="{{ asset('frontend')}}/assets/img/main-banner/main-banner-shape-2.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-banner-shape">
                <div class="banner-bg-shape">
                    <img src="{{ asset('frontend')}}/assets/img/main-banner/banner-bg-shape-1.png" alt="image">
                </div>

             <!--    <div class="banner-bg-shape-2">
                    <img src="{{ asset('frontend')}}/assets/img/main-banner/banner-bg-shape-2.png" alt="image">
                </div> -->
            </div>
        </div>

            <div class="support-area pt-100 pb-70">
            <div class="container">
                <ul class="support-list-item">
                    <li>
                        <!-- <img src="assets/img/support/support-1.png" alt="image"> -->
                        <!-- <span>About us</span> -->
                         <a href="{{url('/assesment')}}" class="default-btn">
                                Free Assessment
                          </a>
                    </li>

                    <li>
                        <!-- <img src="assets/img/support/support-2.png" alt="image"> -->
                        <!-- <span>Our Courses</span> -->
                         <a href="{{url('/assesment')}}" class="default-btn">
                                Our Courses
                          </a>
                    </li>

                    <li>
                        <!-- <img src="assets/img/support/support-3.png" alt="image"> -->
                        <!-- <span>Admission Procedure</span> -->
                         <a href="{{url('/assesment')}}" class="default-btn">
                                Admission Procedure
                         </a>
                    </li>

                    <li>
                        <!-- <img src="assets/img/support/support-4.png" alt="image"> -->
                        <!-- <span>Free Assessment</span> -->
                        <a href="{{url('/assesment')}}" class="default-btn">
                                Free Assessment
                         </a>
                    </li>

                    <li>
                        <!-- <img src="assets/img/support/support-5.png" alt="image"> -->
                        <!-- <span>Login</span> -->
                        <a href="{{url('/assesment')}}" class="default-btn">
                                Login
                         </a>
                    </li>
                </ul>
            </div>
        </div>
{{--
        <!-- Start Main Banner Area -->
        <div class="main-banner"> 
            <!-- <div class="main-banner-item"> -->
            <div class="main-banner-item banner-item-four">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <span>Play, Learn and Grow</span>
                                        <h1>{{$banner->title}}</h1>
                                        <p>{{ $banner->details }}</p>

                                        <div class="banner-btn">
                                            <a href="{{url('/assesment')}}" class="default-btn">
                                                Free Assesment
                                            </a>
                                            <a href="#" class="optional-btn">
                                                Admission Procedure
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="main-banner-image">
                                        <img src="{{ asset('uploads/courseimage/IMG-2490.jpg')}}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-banner-shape">
                <div class="banner-bg-shape">
                    <img src="{{ asset('frontend')}}/assets/img/main-banner/banner-bg-shape-1.png" alt="image">
                </div>

                <div class="shape-1">
                    <!-- <img src="{{ asset('frontend')}}/assets/img/main-banner/banner-shape-1.png" alt="image"> -->
                </div>

                <div class="shape-2">
                    <img src="{{ asset('frontend')}}/assets/img/value/value-shape-2.png" alt="image">
                </div>

                <div class="shape-3">
                    <!-- <img src="{{ asset('frontend')}}/assets/img/main-banner/banner-shape-3.png" alt="image"> -->
                </div>

                <div class="shape-4">
                    <!-- <img src="{{ asset('frontend')}}/assets/img/main-banner/banner-shape-4.png" alt="image"> -->
                </div>
            </div>
        </div>
        
        --}}
        <!-- End Main Banner Area -->

        <!-- Start Who We Are Area -->
        <section class="who-we-are ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="who-we-are-image">
                            <img class="img_laz" data-original="{{ asset('uploads/aboutus/'.$about->image)}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="who-we-are-content">
                            <span>Who We Are</span>
                            <h3>{{$about->title}}</h3>
                            <p>{!! $about->details  !!}</p>
                            <ul class="who-we-are-list">
                                <li>
                                    <span>1</span>
                                    Homelike Environment
                                </li>
                                <li>
                                    <span>2</span>
                                    Quality Educators
                                </li>
                                <li>
                                    <span>3</span>
                                    Safety and Security
                                </li>
                                <li>
                                    <span>4</span>
                                    Play to Learn
                                </li>
                            </ul>
                            <div class="who-we-are-btn">
                                <a href="{{ url('/about-us') }}" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="who-we-are-shape">
                <!-- <img src="{{ asset('frontend')}}/assets/img/who-we-are/who-we-are-shape.png" alt="image"> -->
            </div>
        </section>
        <!-- End Who We Are Area -->
     <!-- Start Activities Area -->
        <section class="activities-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Our Courses</span>
                    <h2>Our Enjoyable Courses</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-activities">
                            <div class="number">
                                <span>01</span>
                            </div>
                            <div class="activities-content">
                                <h3>
                                    <a href="{{ url('/course/11plus') }}">11 Plus</a>
                                </h3>
                               <!--  <p>We appreciate that every child learns differently, and consequently, our tutors are experienced in teaching children using a variety of different techniques and methods.</p> -->
                                <a href="{{ url('/course/11plus') }}" class="activities-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-activities">
                            <div class="number">
                                <span class="bg-2">02</span>
                            </div>
                            <div class="activities-content">
                                <h3>
                                    <a href="{{ url('/course/ks1-maths') }}">KS1 Maths</a>
                                </h3>
<!--                                 <p>KS1 students range from 4 to 7 years old, and our teachers are experienced in handling younger children with a lovely manner where they are encouraged with positive reinforcement rather than forced to do well. Group Tutoring..</p> -->
                                <a href="{{ url('/course/ks1-maths') }}" class="activities-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-activities">
                            <div class="number">
                                <span class="bg-3">03</span>
                            </div>
                            <div class="activities-content">
                                <h3>
                                    <a href="{{ url('/course/ks1-english') }}">KS1 English</a>
                                </h3>
                                <!-- <p>At Merit Tutors, we have a team of qualified schoolteachers and examiners who are experienced in teaching pupils from the East London area.</p> -->
                                <a href="{{ url('/course/ks1-english') }}" class="activities-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-activities">
                            <div class="number">
                                <span class="bg-4">04</span>
                            </div>
                            <div class="activities-content">
                                <h3>
                                    <a href="{{ url('/course/ks2-maths') }}">KS2 Maths</a>
                                </h3>
                              
                                <!-- <p>KS2 students range from Year 3 to Year 6. Lower KS2 pupils are taught to begin to add on from what they have learnt in KS1,</p> -->
                                <a href="{{ url('/course/ks2-maths') }}" class="activities-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-activities">
                            <div class="number">
                                <span class="bg-5">05</span>
                            </div>
                            <div class="activities-content">
                                <h3>
                                    <a href="{{ url('/course/ks2-english') }}">KS2 English</a>
                                </h3>
                                <!-- <p>KS2 students range from Year 3 to Year 6. Lower KS2 pupils are taught to begin to add on from what they have learnt in KS1..</p> -->
                                <a href="{{ url('/course/ks2-english') }}" class="activities-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-activities">
                            <div class="number">
                                <span class="bg-6">06</span>
                            </div>
                            <div class="activities-content">
                                <h3>
                                    <a href="{{ url('/course/ksthree') }}">KS3</a>
                                </h3>
                                <!-- <p>At Merit Tutors, we aim to provide your child with a solid foundation for understanding of the relevant material required for KS3</p> -->
                                <a href="{{ url('/course/ksthree') }}" class="activities-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-activities">
                            <div class="number">
                                <span class="bg-2">07</span>
                            </div>
                            <div class="activities-content">
                                <h3>
                                    <a href="{{ url('/course/gcse') }}">GCSE</a>
                                </h3>
                                <!-- <p>At Merit Tutors, we aim to provide your child with a solid foundation for understanding of the relevant material required for KS3</p> -->
                                <a href="{{ url('/course/gcse') }}" class="activities-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="single-activities">
                            <div class="number">
                                <span class="bg-3">08</span>
                            </div>
                            <div class="activities-content">
                                <h3>
                                    <a href="{{ url('/course/a-level') }}">A Level</a>
                                </h3>
                                <!-- <p>At Merit Tutors, we aim to provide your child with a solid foundation for understanding of the relevant material required for KS3</p> -->
                                <a href="{{ url('course/a-level') }}" class="activities-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Activities Area -->
        <!-- Start Class Area -->
{{--
        <section class="class-area bg-fdf6ed pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Classes</span>
                    <h2>Popular Classes</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="#">
                                    <img src="{{ asset('frontend')}}/assets/img/class/class-1.jpg" alt="image">
                                </a>
                            </div>

                            <div class="class-content">
                                <div class="price">$880</div>
                                <h3>
                                    <a href="#">Color Matching</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <ul class="class-list">
                                    <li>
                                        <span>Age:</span>
                                        3-5 Year
                                    </li>
                                    <li>
                                        <span>Time:</span>
                                        8-10 AM
                                    </li>
                                    <li>
                                        <span>Seat:</span>
                                        25
                                    </li>
                                </ul>

                                <div class="class-btn">
                                    <a href="#" class="default-btn">Join Class</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="#">
                                    <img src="{{ asset('frontend')}}/assets/img/class/class-2.jpg" alt="image">
                                </a>
                            </div>

                            <div class="class-content">
                                <div class="price">$790</div>
                                <h3>
                                    <a href="#">Learning Disciplines</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <ul class="class-list">
                                    <li>
                                        <span>Age:</span>
                                        3-5 Year
                                    </li>
                                    <li>
                                        <span>Time:</span>
                                        8-10 AM
                                    </li>
                                    <li>
                                        <span>Seat:</span>
                                        25
                                    </li>
                                </ul>

                                <div class="class-btn">
                                    <a href="#" class="default-btn">Join Class</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="#">
                                    <img src="{{ asset('frontend')}}/assets/img/class/class-3.jpg" alt="image">
                                </a>
                            </div>

                            <div class="class-content">
                                <div class="price">$590</div>
                                <h3>
                                    <a href="#">Drawing</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <ul class="class-list">
                                    <li>
                                        <span>Age:</span>
                                        3-5 Year
                                    </li>
                                    <li>
                                        <span>Time:</span>
                                        8-10 AM
                                    </li>
                                    <li>
                                        <span>Seat:</span>
                                        25
                                    </li>
                                </ul>

                                <div class="class-btn">
                                    <a href="#" class="default-btn">Join Class</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-shape">
                <div class="shape-1">
                    <img src="{{ asset('frontend')}}/assets/img/class/class-shape-1.png" alt="image">
                </div>
                <div class="shape-2">
                    <img src="{{ asset('frontend')}}/assets/img/class/class-shape-2.png" alt="image">
                </div>
            </div>
        </section>
        <!-- End Class Area -->
--}}
      
        <!-- Start Teacher Area -->
               <!-- Start Facilities Area -->
{{--
        <section class="facilities-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Our Core Values</span>
                    <h2>Best Facilities For Kids</h2>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="single-facilities">
                            <div class="number">
                                <span>01</span>
                            </div>
                            <div class="facilities-content">
                                <h3>
                                    <a href="#">Active Learning</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                            </div>
                        </div>

                        <div class="single-facilities">
                            <div class="number">
                                <span class="bg-2">02</span>
                            </div>
                            <div class="facilities-content">
                                <h3>
                                    <a href="#">Safe Environment</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                            </div>
                        </div>

                        <div class="single-facilities">
                            <div class="number">
                                <span class="bg-3">03</span>
                            </div>
                            <div class="facilities-content">
                                <h3>
                                    <a href="#">Fully Equipment</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="facilities-image">
                            <img src="{{ asset('frontend')}}/assets/img/facilities/facilities-1.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="single-facilities">
                            <div class="number">
                                <span class="bg-4">04</span>
                            </div>
                            <div class="facilities-content">
                                <h3>
                                    <a href="#">Expert Teacher</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                            </div>
                        </div>

                        <div class="single-facilities">
                            <div class="number">
                                <span class="bg-5">05</span>
                            </div>
                            <div class="facilities-content">
                                <h3>
                                    <a href="#">Art Class</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                            </div>
                        </div>

                        <div class="single-facilities">
                            <div class="number">
                                <span class="bg-6">06</span>
                            </div>
                            <div class="facilities-content">
                                <h3>
                                    <a href="#">Sport Section</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="value-shape">
                <div class="shape-1">
                    <img src="{{ asset('frontend')}}/assets/img/value/value-shape-1.png" alt="image">
                </div>
                <div class="shape-2">
                    <img src="{{ asset('frontend')}}/assets/img/value/value-shape-2.png" alt="image">
                </div>
                <div class="shape-3">
                    <img src="{{ asset('frontend')}}/assets/img/value/value-shape-3.png" alt="image">
                </div>
            </div>
        </section>
--}}


        <!-- End Facilities Area -->
        <!-- End Teacher Area -->
                <!-- Start Fun Facts Area -->
        <section class="fun-facts-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="100">00</span><span>%</span>
                            </h3>
                            <p>GCSE PASS RATE</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact bg-1">
                            <h3>
                                <span class="odometer" data-count="80">00</span><span>%</span>
                            </h3>
                            <p>SATS ABOVE AVERAGE</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact bg-2">
                            <h3>
                                <span class="odometer" data-count="95">00</span><span>%</span>
                            </h3>
                            <p>A-LEVEL PASS RATE</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact bg-3">
                            <h3>
                                <span class="odometer" data-count="84">00</span><span>%</span>
                            </h3>
                            <p>11 PLUS</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Fun Facts Area -->
  <!-- Start Gallery Area -->
        <div class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Gallery</span>
                    <h2>Our Activities Gallery</h2>
                </div>

                <div class="row">
                    @foreach($allgallery as $gallary)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery-box">
                            <img class="img_laz"  data-original="{{ asset('uploads/'.$gallary->image)}}" alt="image">
    
                            <a href="{{ asset('uploads/'.$gallary->image)}}" class="gallery-btn" data-imagelightbox="popup-btn">
                                <i class='bx bx-search-alt'></i>
                            </a>
                        </div>
                    </div>
                    @endforeach

                 
                </div>
            </div>
        </div>
        <!-- End Gallery Area -->
          <!-- Start Choose Area -->
          <section class="choose-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Why Choose Us</span>
                    <h2>SOME FACTS ABOUT MERIT TUTORS</h2>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-choose">
                                    <div class="icon">
                                        <i class='bx bx-bulb'></i>
                                    </div>

                                    <div class="content">
                                        <h3>Achieved</h3>
                                        <!-- <p>100% of 2018 A-Level learners achieved either an A*, A or B grade in their final exam. </p> -->
                                        <p>100% of our A Level students in 2021 achieved grade A* to B </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="single-choose">
                                    <div class="icon">
                                        <i class='bx bx-happy'></i>
                                    </div>

                                    <div class="content">
                                        <h3>Success Rate</h3>
                                        <p>100% success rate on 11+ & Year 6 SATs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="single-choose">
                                    <div class="icon">
                                        <i class='bx bx-football'></i>
                                    </div>

                                    <div class="content">
                                        <h3>Amazing Environment</h3>
                                        <p>100% of our GCSE students secured grade 9 to 7 in 2021</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="single-choose">
                                    <div class="icon">
                                        <i class='bx bx-book'></i>
                                    </div>

                                    <div class="content">
                                        <h3>Active Learning</h3>
                                        <p>We are an Ofsted Registered Childcare Centre</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-image">
                        <img class="img_laz" data-original="{{ asset('uploads/courseimage/IMG-2495.jpg') }}" alt="image">

                            <div class="choose-image-shape">
                                <div class="shape-1">
                                    <img class="img_laz" data-original="{{ asset('frontend')}}/assets/img/choose/choose-shape-1.png" alt="image">
                                </div>
                                <div class="shape-2">
                                    <img class="img_laz" data-original="{{ asset('frontend')}}/assets/img/choose/choose-shape-2.png" alt="image">
                                </div>
                                <div class="shape-3">
                                    <img class="img_laz" data-original="{{ asset('frontend')}}/assets/img/choose/choose-shape-3.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Choose Area -->
        <!-- Start Testimonials Area -->
        <section class="choose-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-12">
                <div class="single-choose-item">
                    <span>Merit Tutors</span>
                    <h4>Merit Tutors – The Tuition Centre of Choice for East London - ILFORD - REDBRIDGE</h4>
                    <p>All learners benefit from additional support in reaching their potential.  In a results-driven competitive world, examination grades matter.  Here at Merit Tutors, we help learners to access results without pressure or stress.  Our qualified and experienced Primary and Secondary Teachers tailor sessions to learners’ unique needs in small group or 1:1 settings, building study confidence, enthusiasm for learning and boosting grades.  Based in Forest Gate, Newham and Ilford Lane, Redbridge, Merit Tutors is the Tuition Centre of choice for parents looking for friendly and effective tuition.  
                        Every tutor employed by Merit Tutors has been hand-selected to meet rigorous standards.  We only employ DBS checked tutors qualified as UK Teachers who combine subject expertise, deep knowledge of UK examination requirements and the skills to motivate and inspire learners.  That explains why Merit Tutors are rated as the Best Tuition Centre in East London, according to Google Reviews.  
                        </p>

                    <div class="choose-btn">
                        <!-- <a href="#" class="default-btn">Search Tutor</a> -->
                    </div>
                </div>
                <div class="single-choose-item">
                   
                   <h4>Merit Tutors – Effective Local Tuition </h4>
                   <p>Don’t just take our word for it.  With 18 years’ worth of happy parents and delighted students, Merit Tutors are a leading provider of local high-quality tuition.  Our outstanding reviews speak for themselves.  
                       We offer Tuition across the full UK learning age range and National Curriculum.  Our 11 Plus tuition is also extremely popular with local families.  </p>

                   <div class="choose-btn">
                       <!-- <a href="#" class="default-btn">Search Tutor</a> -->
                   </div>
               </div>
            </div>
           
        </div>
    </div>
</section>

        <section class="testimonials-area pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <span>Testimonials</span>
                    <h2>What Parents Say About Us</h2>
                </div>

                <div class="testimonials-slides owl-carousel owl-theme">
                    @foreach($allreview as $review)
                    <div class="testimonials-item">
                        <div class="testimonials-item-box">
                            <div class="icon">
                                <i class='bx bxs-quote-left'></i>
                            </div>
                            <p>{{ $review->review }}</p>
                            <div class="info-box">
                                <h3>{{ $review->name }}</h3>
                                <span>{{ $review->designation }}</span>
                            </div>
                        </div>
                        <div class="testimonials-image">
                            <img src="{{ asset('frontend')}}/assets/img/testimonials/testimonials-1.png" alt="image">
                        </div>
                    </div>
                    @endforeach

                
                </div>
            </div>
        </section>
        <!-- End Testimonials Area -->
        {{--
        <!-- Start Event Area -->
        <section class="event-area bg-ffffff pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Events</span>
                    <h2>Upcoming Events</h2>
                </div>
                @foreach($allevents as $event)
                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="event-image">
                                <a href="#"><img class="img_laz" data-original="{{ asset('uploads/'.$event->image)}}" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="event-content">
                                <h3>
                                    <a href="#">{{ $event->title }}</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        {{ $event->address }}
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>12</h4>
                                <span>September</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="event-image">
                                <a href="#"><img src="{{ asset('frontend')}}/assets/img/event/event-2.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="event-content">
                                <h3>
                                    <a href="#">World Kids Day</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>18</h4>
                                <span>January</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="event-image">
                                <a href="#"><img src="{{ asset('frontend')}}/assets/img/event/event-3.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="event-content">
                                <h3>
                                    <a href="#">World Drawing Day</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>25</h4>
                                <span>March</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-box-item">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="event-image">
                                <a href="#"><img src="{{ asset('frontend')}}/assets/img/event/event-4.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="event-content">
                                <h3>
                                    <a href="#">Teachers Day</a>
                                </h3>
                                <ul class="event-list">
                                    <li>
                                        <i class='bx bx-time'></i>
                                        8:00 AM - 10:00 PM
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        New York 56 Glassford Street Glasgow
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="event-date">
                                <h4>30</h4>
                                <span>April</span>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- End Event Area -->

        <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>News and Blog</span>
                    <h2>Latest News</h2>
                </div>

                <div class="row">
                 @foreach($allblog as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="blog-image">
                                <a href="{{url('/details/'.$blog->slug.'/'.$blog->id)}}">
                                    <img class="mycls img_laz"  data-original="{{asset('uploads/'.$blog->image)}}" alt="image">
                                </a>
                            </div>

                            <div class="blog-content">
                                <ul class="post-meta">
                                    <li>
                                        <span>By Admin:</span>
                                        <!-- <a href="#">Jack John</a> -->
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        {{ $blog->created_at->format('M-d-Y')}}
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{url('/details/'.$blog->slug.'/'.$blog->id)}}">{{ $blog->title }}</a>
                                </h3>
                                <p>{!! Str::limit($blog->description,40) !!}</p>

                                <div class="blog-btn">
                                    <a href="{{url('/details/'.$blog->slug.'/'.$blog->id)}}" class="default-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
              
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        --}}
             <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Reviews</span>
                    <h2>Reviews</h2>
                </div>

                <div class="row">
                <script defer async src='https://cdn.trustindex.io/loader.js?c2c7d1f755da215c505be20e8a'></script>
              
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
@endsection