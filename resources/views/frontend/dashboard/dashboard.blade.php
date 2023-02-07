@extends('layouts.frontend')
@section('title', 'Dashboard')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css"> -->
<script src="https://use.fontawesome.com/5f267863cb.js"></script>

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
.bootstrap-tagsinput {
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    display: inline-block;
    padding: 4px 6px;
    color: #555;
    vertical-align: middle;
    border-radius: 4px;
    width: 100%;
    line-height: 22px;
    cursor: text;
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
                            <h2 style="color:#fff !important;">Profile</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">HOME</a>
                                </li>
                                <li>TUTOR DASHBOARD</li>
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
                    <form action="{{ url('/dashboard') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 text-center mt-5">
                            <section class="quote-area" style="padding:0px 0px 30px 0px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="quote-item">
                                                <div class="asif-tutor col-lg-12 row">
                                                    <h6>Update Profile</h6>
                                                    <p>Thanks for submitting your profile!</p>
                                                    <p>Please note, due to an increased volume of tutors looking for work, we are not processing any new tutor applications right now.In the meantime, please complete your profile to the best of your ability and we will get in touch when we think there will be more demand for your tutoring work!</p>
                                                </div>
                                             </div>
                                       </div>
                                    </div>
                            </section>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-5">
                                <section class="quote-area" style="padding:0px 0px 30px 0px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="quote-item">
                                                <div class="asif-tutor col-lg-12 row">
                                                    <!--  -->
                                                    <div class="content">
                                                        <h6>Tutor Types</h6>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" for="Branch" class="form-label">For Branch Tutor<span style="color:red"></span></label>
                                                                    <input id="forbranch" type="checkbox"  name="for_branch"  value="1" @if(Auth::user()->for_branch_tutor==1) checked @endif>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" for="online" class="form-label">For Online Tutor<span style="color:red"></span></label>
                                                                    <input type="checkbox"  name="for_online" id="online" value="1" @if(Auth::user()->for_online_tutor==1) checked @endif>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" for="onhome" class="form-label">For Home Tutor<span style="color:red"></span></label>
                                                                    <input type="checkbox"  name="for_home" id="onhome" value="1"  @if(Auth::user()->for_home_tutor==1) checked @endif>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                    <div class="row">
                                                        <div class="col-md-6" id="branch_section" @if(Auth::user()->for_branch_tutor==1)  @else style="display:none" @endif>
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Branch<span style="color:red">*</span></label>
                                                                    <select name="branch_name" id="" class="form-control">
                                                                        <option value="FOREST GATE" @if(Auth::user()->branch=='FOREST GATE') @endif >FOREST GATE</option>
                                                                        <option value="ILFORD LANE" @if(Auth::user()->branch=='ILFORD LANE') @endif >ILFORD LANE</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- branch -->
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </section>
                            </div>
                          <!--  -->
                                <section class="quote-area" style="padding:0px 0px 30px 0px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="quote-item">
                                                <div class="asif-tutor col-lg-12 row">
                                                    <div class="col-lg-12 col-md-12 mt-5">
                                                        <div class="content">
                                                            <h6>Basic Information</h6>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Title<span style="color:red">*</span></label>
                                                                        <select class="form-control" name="title">
                                                                        <option value="Mr" @if(Auth::user()->name_of_title=='Mr') selected @endif>Mr</option>
                                                                        <option value="Mrs" @if(Auth::user()->name_of_title=='Mrs') selected @endif>Mrs</option>
                                                                        <option value="Ms" @if(Auth::user()->name_of_title=='Ms') selected @endif>Ms</option>
                                                                        <option value="Miss" @if(Auth::user()->name_of_title=='Miss') selected @endif>Miss</option>
                                                                        <option value="Mx" @if(Auth::user()->name_of_title=='Mx') selected @endif>Mx</option>
                                                                        <option value="Dr" @if(Auth::user()->name_of_title=='Dr') selected @endif>Dr</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Full Name<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{ Auth::user()->name }}" required />
                                                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Mobile Number<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="phone" placeholder="Enter Mobile number" value="{{ Auth::user()->phone }}" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Email<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="email" id="" placeholder="Enter Email" value="{{ Auth::user()->email }}" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Date of Birth<span style="color:red">*</span></label>
                                                                        <input type="date" class="form-control" name="date_of_birth" placeholder="Enter Date of birth" required value="{{ Auth::user()->date_of_birth }}"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Gender<span style="color:red">*</span></label>
                                                                        <select class="form-control" name="gender">
                                                                        <option value="Male" @if(Auth::user()->gender=='Male') selected @endif>Male</option>
                                                                        <option value="Female" @if(Auth::user()->gender=='Female') selected @endif>Female</option>
                                                                        </select>
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
                            <!--  -->

                            <!--  Contact Information -->
                            <section class="quote-area" style="padding:0px 0px 30px 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="quote-item">
                                            <div class="asif-tutor col-lg-12 row">
                                                <div class="col-lg-12 col-md-12 mt-5">
                                                    <div class="content">
                                                        <h6>Contact Information</h6>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Address Line 1<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="address_line_1" placeholder="Address Line 1" value="{{ Auth::user()->address }}" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Address Line 2<span style="color:red">(Optional)</span></label>
                                                                    <input type="text" class="form-control" name="address_line_2" placeholder="Address Line 2" value="{{ Auth::user()->address_two }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">City<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="city" placeholder="Enter City" value="{{ Auth::user()->city }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Zip Code<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="zip_code" placeholder="Enter Zip Code" value="{{ Auth::user()->zip }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Travel Distance<span style="color:red">(optional)</span></label>
                                                                    <select name="travel_distence" class="form-control">
                                                                        <option disabled selected>--Select--</option>
                                                                        <option value="1 mile" @if(Auth::user()->travel_distence=='1 mile') selected @endif>1 mile</option>
                                                                        <option value="2 mile"  @if(Auth::user()->travel_distence=='2 mile') selected @endif>2 mile</option>
                                                                        <option value="3 mile"  @if(Auth::user()->travel_distence=='3 mile') selected @endif>3 mile</option>
                                                                        <option value="4 mile"  @if(Auth::user()->travel_distence=='4 mile') selected @endif>4 mile</option>
                                                                        <option value="5 mile"  @if(Auth::user()->travel_distence=='5 mile') selected @endif>5 mile</option>
                                                                        <option value="6 mile"  @if(Auth::user()->travel_distence=='6 mile') selected @endif>6 mile</option>
                                                                        <option value="7 mile"  @if(Auth::user()->travel_distence=='7 mile') selected @endif>7 mile</option>
                                                                        <option value="8 mile"  @if(Auth::user()->travel_distence=='8 mile') selected @endif>8 mile</option>
                                                                        <option value="9 mile"  @if(Auth::user()->travel_distence=='9 mile') selected @endif>9 mile</option>
                                                                        <option value="10 mile"  @if(Auth::user()->travel_distence=='10 mile') selected @endif>10 mile</option>
                                                                        <option value="11 mile"  @if(Auth::user()->travel_distence=='11 mile') selected @endif>11 mile</option>
                                                                        <option value="12 mile"  @if(Auth::user()->travel_distence=='12 mile') selected @endif>12 mile</option>
                                                                        <option value="13 mile"  @if(Auth::user()->travel_distence=='13 mile') selected @endif>13 mile</option>
                                                                        <option value="14 mile"  @if(Auth::user()->travel_distence=='14 mile') selected @endif>14 mile</option>
                                                                        <option value="15 mile"  @if(Auth::user()->travel_distence=='15 mile') selected @endif>15 mile</option>
                                                                    
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Subjects<span style="color:red">*</span></label>
                                                                    <select  class="form-control form-control-solid js-example-basic-multiple" name="subjects[]" multiple="multiple">
                                                                        <option disabled value="">--select--</option>
                                                                        @foreach($allsubject as $subject)
                                                                            <option value="{{$subject->name}}" @if(Auth::user()->subject !=null) <?php if(in_array($subject->name, json_decode(Auth::user()->subject))) echo 'selected'?> @endif>{{$subject->name}}</option>
                                                                        @endforeach
                                                                    </select>
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
                            <section class="quote-area" style="padding:0px 0px 30px 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="quote-item">
                                            <div class="asif-tutor col-lg-12 row">
                                                <div class="col-lg-12 col-md-12 mt-5">
                                                    <div class="content">
                                                        <h6>Educational Information</h6>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Qualifications<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" placeholder="Enter Degree Name" value="GCSE" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">University/School/College<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="gcse_institution" placeholder="Enter University/School/College" value="{{ Auth::user()->gcse_institution }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="gcse_subject" placeholder="Enter Subject" value="{{ Auth::user()->gcse_subject }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Grade<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="gcse_grade" placeholder="Enter Grade" value="{{ Auth::user()->gcse_grade }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Certificate Image<span style="color:red">*</span></label>
                                                                    <input type="file" name="gcse_image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Qualifications<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" value="A-Level" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">University/School/College<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="a_level_institution" placeholder="Enter University/School/College" value="{{ Auth::user()->a_level_institution }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="a_level_subject" placeholder="Enter Subject" value="{{ Auth::user()->a_level_subject }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Grade<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="a_level_grade" placeholder="Enter Grade" value="{{ Auth::user()->a_level_grade }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Certificate Image<span style="color:red">*</span></label>
                                                                    <input type="file" name="a_level_certificate_image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Qualifications<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="degree_name"  placeholder="Enter Degree Name" value="Degree" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">University/School/College<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="degree_institution" placeholder="Enter University/School/College" value="{{ Auth::user()->degree_institution }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="degree_subject" placeholder="Enter Subject" value="{{ Auth::user()->degree_subject }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Grade<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="degree_grade" placeholder="Enter Grade" value="{{ Auth::user()->degree_grade }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Certificate Image<span style="color:red">*</span></label>
                                                                    <input type="file" name="degree_certificate_image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Qualifications<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" value="Masters" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">University/School/College<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="masters_institution" placeholder="Enter University/School/College" value="{{ Auth::user()->masters_institution }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="masters_subject" placeholder="Enter Subject" value="{{ Auth::user()->masters_subject }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Grade<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" name="masters_grade" placeholder="Enter Grade" value="{{ Auth::user()->masters_grade }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Certificate Image<span style="color:red">*</span></label>
                                                                    <input type="file" name="masters_certificate_image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" id="more_option">

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <a onclick="add_moreoption()" class="btn btn-sm btn-warning">Add More</a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Headline<span style="color:red">*</span></label>
                                                                    <textarea class="form-control" name="headline_for_tutor" placeholder="Enter Headline">{{ Auth::user()->headline_for_tutor }}</textarea> 
                                                                    <span>A short catchy summary (25-60 characters) help to promote your profile</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Bio<span style="color:red">*</span></label>
                                                                    <textarea class="form-control" name="bio_details" placeholder="Enter Your Bio">{{ Auth::user()->bio_details }}</textarea> 
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Expericence(Optional)</label>
                                                                    <textarea class="form-control" name="tutor_experience" placeholder="Enter Your Expericence"> {{ Auth::user()->tutor_experience }} </textarea> 
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Expected Hourly Rate(Optional)</label>
                                                                    <input type="text" class="form-control" name="expected_hourly_rate" placeholder="Expected Hourly Rate" value="{{ Auth::user()->expected_hourly_rate }}">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Your Update CV(PDF)</label>
                                                                    <input type="file" class="form-control" name="cv" >
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-6">
                                                            <br>
                                                            <div class="form-group">
                                                            <div class="mb-3">

                                                                <label for="exampleFormControlInput1" class="form-label">Image<span style="color:red">*</span></label>
                                                                <div class="card-body" data-select2-id="select2-data-90-elj6">
                                                                    <!-- image -->
                                                                    <div class="tab-content pt-3" data-select2-id="select2-data-89-mk7z" id="image_upload_sec">
                                                                        <div class="tab-pane active" id="kt_builder_main" data-select2-id="select2-data-kt_builder_main">
                                                                            <div class="row mb-10">
                                                                                

                                                                                <!-- image start -->
                                                                                <div id="editimage"  class="col-xl-12 col-md-12 col-sm-12 col-xs-12 spartan_item_wrapper" data-spartanindexrow="0" style="margin-bottom : 20px; ">
                                                                                    <div style="position: relative;">
                                                                                        <div class="spartan_item_loader" data-spartanindexloader="0" style="position: absolute; width: 100%; height: 450px; background: rgba(255,255,255, 0.7); z-index: 22; text-align: center; align-items: center; margin: auto; justify-content: center; flex-direction: column; display : none; font-size : 1.7em; color: #CECECE"><i class="fas fa-sync fa-spin"></i></div>
                                                                                        <label class="file_upload" style="width: 100%; height: 450px; border: 2px dashed #ddd; border-radius: 3px; cursor: pointer; text-align: center; overflow: hidden; padding: 5px; margin-top: 5px; margin-bottom : 5px; position : relative; display: flex; align-items: center; margin: auto; justify-content: center; flex-direction: column;">
                                                                                            <a href="javascript:void(0)" onclick="editimageremove(this)" data-spartanindexremove="0" style="right: 3px; top: 3px; background: rgb(237, 60, 32); border-radius: 3px; width: 30px; height: 30px; line-height: 30px; text-align: center; text-decoration: none; color: rgb(255, 255, 255); position: absolute !important;" class="spartan_remove_row">

                                                                                                <i class="fas fa-times" ></i> </a>
                                                                                            <img style="width: 100%; margin: 0px auto; vertical-align: middle; display: ;" data-spartanindexi="0" src="{{asset('/'.Auth::user()->photo)}}">
                                                                                            <input class="form-control spartan_image_input" accept="image/*" data-spartanindexinput="0" style="display : none" name="product_img" type="file">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="product_img" style="display: none;"></div>
                                                                                @error('image')
                                                                                    <div style="color:red ;margin-left: 15px">{{ $message }}</div>
                                                                                @enderror

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- image end-->
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
<script>
$(document).ready(function(){

   $("#forbranch").click(function() {

       if($(this).is(":checked")) {

           $("#branch_section").show();

       } else {

           $("#branch_section").hide();

       }
   });
});
   
</script>

<script>
    i=1;
    function add_moreoption(){
        $("#more_option").append('<div class="row"><div class="col-md-2"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Enter Qualifications<span style="color:red">*</span></label><input type="text" class="form-control" name="more_degree_name[]" id="" placeholder="Enter Qualifications Name"></div></div></div><div class="col-md-3"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">University/School/College<span style="color:red">*</span></label><input type="text" class="form-control" name="more_institions_name[]" placeholder="Enter University/School/College"></div></div></div>    <div class="col-md-2"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label><input type="text" class="form-control" name="more_subject[]" placeholder="Enter Subject"></div></div></div><div class="col-md-2"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Grade<span style="color:red">*</span></label><input type="text" class="form-control" name="more_grade[]" placeholder="Enter Grade"></div></div></div><div class="col-md-2"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Certificate Image<span style="color:red">*</span></label><input type="file" name="more_file[]" required></div></div></div><div class="col-md-1"><div class="form-group"><div class="mt-3"> <a onclick="deleterow(this)"  style="color:red"> <i class="fa fa-trash"></i></a></div></div></div> </div> ')
    }
</script>
<script>
  
function deleterow(em) {

$(em).closest(".row").remove();

}
</script>
<script>
    function editimageremove(em) {
    //   alert('ok');
        $("#editimage").hide();
        $("#product_img").show();
    }
</script>
@endsection