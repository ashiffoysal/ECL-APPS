@extends('layouts.frontend')
@section('title', 'Tutor Application')
@section('content')
<style>
    .apply-form {
    background-color: #ffffff;
    -webkit-box-shadow: 0 0px 0px 0 rgb(0 0 0 / 9%) !important; 
     box-shadow: 0 0px 0px 0 rgb(0 0 0 / 9%) !important; 
    padding: 50px;
}
.apply-form form .form-group .form-control {
    height: 50px !important;
    color: #1b0238 !important;
    -webkit-box-shadow: unset !important;
    box-shadow: unset !important;
    border: 1px solid #d7d2d2 !important;;
    background-color: transparent !important;;
    -webkit-transition: 0.5s !important;;
    transition: 0.5s !important;;
    border-radius: 7px !important;;
    padding: 0 0 0 15px !important;;
    font-weight: 400 !important;;
}
.h1, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
   
    font-family: "Poppins", sans-serif !important;
    font-weight: bold !important;
}

.form-label {
    font-size: 14px;
    font-weight: 600;
}
.apply-form form .form-group .form-control {
    height: 50px !important;
    color: #1b0238 !important;
    -webkit-box-shadow: unset !important;
    box-shadow: unset !important;
    border: 1px solid #d7d2d2 !important;
    background-color: transparent !important;
    -webkit-transition: 0.5s !important;
    transition: 0.5s !important;
    border-radius: 7px !important;
    padding: 6px 0 0 15px !important;
    font-weight: 400 !important;
}


section.how_its_work.ptb-90 {
    padding: 50px 0px;
    background: #fff;

}
.row.workprogress {
    padding: 78px 0px 0px 0px;
}
span.counting-work {
    font-size: 28px;
    border: 1px solid #b7b7b7;
    padding: 0px 20px;
    font-weight: 600;
    border-radius: 100%;
}
h5.title-work {
    margin: 30px 0px;
    font-size: 24px;

}
p.para-work {
    font-size: 20px;
}
.how_its_works{
    font-size: 30px;
    font-weight: normal;
    color: #666;
    padding-bottom: 20px;
}
h6 {
    text-align: center;
    font-weight: bold;
    font-size: 30px;
    margin: 20px 0px;
}


</style>
<link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css">
     <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2 style="color:#fff !important;">Tutor Application</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">HOME</a>
                                </li>
                                <li>APPLICATION FORM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
        <section class="how_its_work ptb-90">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-md-12 text-center">
                         
                            <h4 class="how_its_works">How Its Works</h4>
                        
                    </div>
                </div>
                <div class="row workprogress">
                    <div class="col-md-3 text-center">
                         
                            <span class="counting-work">1</span>
                            <h5 class="title-work">Register</h5>
                            <p class="para-work">Join our great network of enthusiastic and committed tutors with exceptional experience by simply submitting an application form today! </p>
                        
                    </div>
                    <div class="col-md-3 text-center">
                         
                            <span class="counting-work">2</span>
                            <h5 class="title-work">Interview </h5>
                            <p class="para-work">Attend an interview where you will be introduced to our approach of providing professional and interactive teaching to students of various abilities.</p>
                        
                    </div>
                    <div class="col-md-3 text-center">
                         
                            <span class="counting-work">3</span>
                            <h5 class="title-work">Training</h5>
                            <p class="para-work">The only opportunity to shadow  our highly dedicated and ambitious tutors delivering their valuable lessonsA chance to familiarise yourself with our unique range of resources, created by our own hardworking qualified tutors to assist our students in their learning journey.</p>
                        
                    </div>
                    <div class="col-md-3 text-center">
                         
                            <span class="counting-work">4</span>
                            <h5 class="title-work">Schedule lessons and start teaching</h5>
                            <p class="para-work">And this is how simple it is! Start tutoring and impart your valuable knowledge and understanding to the future generation of leaders</p>
                        
                    </div>
                </div> -->
                <div class="col-lg-12 mydesign">
                        <div class="who-we-are-content">
                     
                            <div class="container my-5">
                                <section>
                                    <div class="text-center mb-5">
                                    <span style="font-size:24px">Tutor Register</span>
                                        <h2 class="font-weight-bold display-4 ">How It Works?</h2>
                                    </div>
                                    <div class="col-12 col-md-12 mx-auto">
                                        <div class="">
                                            <div class="bg-light position-relative px-3 my-5">
                                                <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                                    style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                                                    1
                                                </div>
                                                <div class="px-3 text-center pb-3">
                                                    <h4>Register</h4>
                                                    <p class="font-weight-light my-3">Join our great network of enthusiastic and committed tutors with exceptional experience by simply submitting an application form today!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="bg-light position-relative px-3 my-5">
                                                <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                                    style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                                                    2
                                                </div>
                                                <div class="px-3 text-center pb-3">
                                                    <h4>Interview</h4>
                                                    <p class="font-weight-light my-3">Attend an interview where you will be introduced to our approach of providing professional and interactive teaching to students of various abilities.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="bg-light position-relative px-3 my-5">
                                                <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                                    style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                                                    3
                                                </div>
                                                <div class="px-3 text-center pb-3">
                                                    <h4>Training</h4>
                                                    <p class="font-weight-light my-3">The only opportunity to shadow  our highly dedicated and ambitious tutors delivering their valuable lessons. A chance to familiarise yourself with our unique range of resources, created by our own hardworking qualified tutors to assist our students in their learning journey.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="bg-light position-relative px-3 my-5">
                                                <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                                                    style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                                                    4
                                                </div>
                                                <div class="px-3 text-center pb-3">
                                                    <h4>Schedule lessons and start teaching</h4>
                                                    <p class="font-weight-light my-3">And this is how simple it is! Start tutoring and impart your valuable knowledge and understanding to the future generation of leaders!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            
                        </div>
                    </div>
            </div>
        </section>
        <!-- Start Apply Area -->
        <section class="apply-area ptb-90">
            <div class="container">
                <div class="apply-form">
                    <form action="{{ url('/tutor/singup') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="content">
                                    <h4>Working for Merit Tutors Education</h4>
                                </div>
                                <p>Merit Tutors is always seeking to recruit enthusiastic and determined tutors to join our network of tutors with exceptional experience and strong academic background in their teaching subject.
You will be part of a propitious environment where you will observe the great impacts of quality teaching combined with a passion to teach children, creating a phenomenal source of experience for you that will enable many progressions in the future.
Join our team today and start your journey here! 
</p>
                          
                            </div>
                            <div class="col-md-12 mt-5">
                                <div class="content">
                                    <h4>What Merit Tutors offers? </h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       <p>Merit Tutors provides tailored lessons that support the national curriculum for students at all levels, starting from Primary up to A-Levels. Our tutors are DBS checked and thoroughly trained to aid students boost their grades and flourish in their studies, as well as preparing them to face the challenges of education. We strive to provide our students the support they require to excel in their education and progress far in the future!</p>
                                       <p>We offer the following:</p>

                                       <ul>
                                           <li>Primary</li>
                                           <li>11+ and SATs</li>
                                           <li>Secondary</li>
                                           <li>GCSEs</li>
                                           <li>A-Levels </li>
                                           <li>Bangla lessons for all Ages</li>
                                       </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 text-center mt-5">
                                <h6>Join our growing community of tutors</h6>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 mt-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Full Name<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ old('name') }}" required>
                                                @error('name')
                                                    <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>
                                                  @error('email')
                                                    <div style="color: red">{{ $message }}</div>
                                                 @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Phone Number<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{ old('phone') }}" required>
                                                @error('phone')
                                                    <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Password<span style="color:red">*</span></label>
                                                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                                 @error('password')
                                                    <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Confirm Password<span style="color:red">*</span></label>
                                                <input type="password" class="form-control" name="confirm_password" placeholder="Enter Confirm Password" required>
                                                @error('confirm_password')
                                                    <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="default-btn" style="border-radius:24px">
                                    Submit Now
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
        <!-- End Apply Area -->

@endsection