@extends('layouts.frontend')
@section('title', 'Tutor Application')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="{{asset('backend')}}/assets/css/image-uploader.min.css">
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
</style>
<link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css">
    {{--
     <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2 style="color:#fff !important;">Tutor Applycation</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">HOME</a>
                                </li>
                                <li>APPLYCATION FORM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    --}}
        <!-- End Page Banner -->

        <!-- Start Apply Area -->
        <section class="apply-area ptb-90">
            <div class="container">
                <div class="apply-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="content">
                                    <h4>Working for Merit Tutors Education</h4>
                                </div>
                                <p>We welcome enquiries from enthusiastic and experienced teachers for school holiday, evening and weekend tutoring opportunities.We specialise in small group tuition and one-to-one tuition, usually outside of school hours. Our students are highly motivated and enjoy our courses which make learning fun and gives them the top-up in their studies they need. Both students and tutors enjoy the creative and varied techniques used to engage students and meet their learning needs.</p>
                                <p>You will need to be resourceful, motivated, well prepared and able to create a flexible programme according to the students’ requirements. Our tutors also promote independent learning, time management and revision techniques beyond the course.</p>
                                <p>We are currently particularly interested to hear from tutors specialising in Physics, Chemistry and Biology.</p>
                          
                            </div>
                            <div class="col-md-12 mt-5">
                                <div class="content">
                                    <h4>What  Merit Tutors offers tutors</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       <p>Professional Development
                                    Additional earning opportunity with competitive rates of pay
                                    A fun and rewarding style of tutoring
                                    Networking with other teaching professionals
                                    Experience working in prestigious schools across the UK
                                    Demonstration of skills from student feedback
                                    Experience in online tuition</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 text-center mt-5">
                                <h6>APPLICATION FORM</h6>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 mt-5">
                                <div class="content">
                                     <h6>Basic Information</h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Name<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Mobile Number<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Address<span style="color:red">*</span></label>
                                                <textarea class="form-control" name="address" id="" cols="30" rows="10" placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-5">
                                <div class="content">
                                     <h6>Tutor Types</h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" for="Branch" class="form-label">For Branch<span style="color:red"></span></label>
                                                <input type="checkbox" class="" id="Branch">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" for="online" class="form-label">For Online<span style="color:red"></span></label>
                                                <input type="checkbox" class="" id="online">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Branch<span style="color:red">*</span></label>
                                                <select name="branch" id="" class="form-control">
                                                    <option value="FOREST GATE">FOREST GATE</option>
                                                    <option value="ILFORD LANE">ILFORD LANE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Username<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Password<span style="color:red">*</span></label>
                                               <input type="text" class="form-control" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-5">
                                <div class="content">
                                    <h6>Educational Information</h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">University Name<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="" id="" placeholder="Enter University Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Major Subject <span style="color:red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Major Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Write Something</label>
                                                <textarea class="form-control" name="address" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Image <span style="color:red">*</span></label>
                                                <input type="file" placeholder="Enter Major Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">CV(pdf)<span style="color:red">*</span></label>
                                                <input type="file" placeholder="Enter Major Subject">
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