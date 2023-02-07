@extends('layouts.frontend')
@section('title', 'Tutor ')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style>

.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
    background: #38962b;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
 
    box-shadow: 1px 3px 9px -1px #883434;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 8px;
    color: white;
    text-transform: uppercase;
    padding: 5px 0px;
}

.profile-nav .user-heading p {
    font-size: 12px;
    color: #fff;
}
.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
    padding: 30px 100px 0px 0px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #ce3333;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #5a5957;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #aec785;
}

.activity.green h4 {
    color: #aec785;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}



.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
}
.profile-nav .user-heading {
    background: #6c6c6c;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
    border-radius: 30px;
    /* box-shadow: 1px 3px 9px -1px #883434; */
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
{{--
<div class="page-banner-area ">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Tutor Hire List</h2>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>Tutor Hire List</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
--}}
    <div class="container bootstrap snippets bootdey" style="padding:50px 0px">
        <div class="row">
            @include('frontend.student.include.dasboardheader')
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <ul class="nav nav-pills nav-stacked">
                        @include('frontend.student.include.sidebar')
                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9 row">
            <form action="{{ url('/tutor/account') }}" method="post" enctype="multipart/form-data">
                        @csrf
                <div class="col-md-12">
                    <section class="quote-area" style="padding:0px 0px 30px 0px">
                        <div class="container">
                            <div class="row">
                                <!--  -->
                                <section class="quote-area" style="padding:0px 0px 10px 0px">
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
                                                        <div class="col-md-12" id="branch_section" @if(Auth::user()->for_branch_tutor==1)  @else style="display:none" @endif>
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
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Headline<span style="color:red">*</span></label>
                                                                    <textarea class="form-control" required name="headline_for_tutor" placeholder="Enter Headline">{{ Auth::user()->headline_for_tutor }}</textarea> 
                                                                    <span style="font-size:10px">A short catchy summary (25-60 characters) help to promote your profile</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Bio<span style="color:red">*</span></label>
                                                                    <textarea class="form-control" required name="bio_details" placeholder="Enter Your Bio">{{ Auth::user()->bio_details }}</textarea> 
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Expericence(Optional)</label>
                                                                    <textarea class="form-control" name="tutor_experience" placeholder="Enter Your Expericence"> {{ Auth::user()->tutor_experience }} </textarea> 
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Expected Hourly Rate ( £ )<span style="color:red">*</span></label>
                                                                    <input type="number" required class="form-control expected_hourly_rate" name="expected_hourly_rate" placeholder="Expected Hourly Rate" value="{{ Auth::user()->expected_hourly_rate }}" min="1" onchange="expectedrate()">
                                                                    <span style="font-size:14px;color: red;" id="you_earn"></span>
                                                                    
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
                                <!--  -->
                                <section class="quote-area" style="padding:0px 0px 10px 0px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="quote-item">
                                                <div class="asif-tutor col-lg-12 row">
                                                    <div class="col-lg-12 col-md-12 mt-1">
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
                                <section class="quote-area" style="padding:0px 0px 10px 0px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="quote-item">
                                                <div class="asif-tutor col-lg-12 row">
                                                    <div class="col-lg-12 col-md-12 mt-1">
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
                                                                            @php 
                                                                                $tutorsubject=App\Models\SelectedTutorSubject::where('tutor_id',Auth::user()->id)->where('subject_id',$subject->id)->first();
                                                                            @endphp

                                                                                <option value="{{$subject->id}}" @if($tutorsubject) selected @endif>{{$subject->name}}</option>
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
                                <!--  -->
                                <section class="quote-area" style="padding:0px 0px 10px 0px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="default-btn" >
                                                    Submit Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--  -->
                            </div>
                        </div>
                    </section>
                    </div>
                <div>
            </form>

            </div>
        </div>
    </div>
</div>
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

        function expectedrate(){
            var rate = $(".expected_hourly_rate").val();
            var pay=Math.round(rate * 0.6);
            if(rate !=null){
               $("#you_earn").html("You Earn "+ pay +" £ (you earn 60% amount of your Hourly Rate)");
            }else{
                $("#you_earn").html("");
            }
            
            
        }

</script>

<script>
    $(document).ready(function(){
        $(".rejectreason").click(function(){
           var cate_id = $(this).data("id");
           if(cate_id) {
             $.ajax({
                 url: "{{  url('/get/tutor/studentrequestlist/reject') }}/"+cate_id,
                 type:"GET",
                 dataType:"json",
                 success:function(data) {

                      $("#requ_id").val(data.id);
                }
             });
         } else {
             alert('danger');
         }
           
        });
    });
</script>


@endsection