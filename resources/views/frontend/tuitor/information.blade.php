@extends('layouts.frontend')
@section('title', 'Tutor Dashboard')
@section('content')
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
.profile-nav .user-heading {
    background: #38962b;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
  
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
.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 600;
    margin: 0 0 20px;
}
span.asif_test {
    font-weight: 500;
}

.profile-nav .user-heading {
    background: #8c958a;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
    box-shadow: 1px 1px 1px 1p;
    border-radius: 19px;
    /* box-shadow: 1px 6px 7px -1px #888834; */
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
                    <h2>Dashboard</h2>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>Dashboard</li>
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
  <div class="profile-info col-md-9">
      <div class="panel">
       
      </div>
      <div class="panel">
                            <section class="quote-area" style="padding:30px 0px 0px 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="quote-item">
                                        <div class="panel-body bio-graph-info">
                                            <h1 style="margin-top:20px">Basic Information</h1>
                                            <div class="row">
                                                <div class="bio-row">
                                                    <p><span class="asif_test">First Name </span>: {{Auth::user()->name}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span class="asif_test">Last Name </span>: {{Auth::user()->name}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span class="asif_test"> Country </span>: Australia</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span class="asif_test"> Date Of Birth</span>: 13 July 1983</p>
                                                </div>
                                                
                                                <div class="bio-row">
                                                    <p><span class="asif_test">Email </span>: {{Auth::user()->email}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span class="asif_test">Mobile </span>: (12) 03 4567890</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span class="asif_test">Phone </span>: {{Auth::user()->phone}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span class="asif_test">Address One</span>: {{Auth::user()->address}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span class="asif_test">Address Two</span>: {{Auth::user()->address_two}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span class="asif_test">City</span>: {{Auth::user()->city}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span class="asif_test">Country</span>: {{Auth::user()->country}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    <p><span class="asif_test">Post Code</span>: {{Auth::user()->zip}}</p>
                                                </div>
                                                <div class="bio-row">
                                                    @php
                                                    $tutorsubject=App\Models\SelectedTutorSubject::where('tutor_id',Auth::user()->id)->get();
                                                    @endphp
                                                   
                                                    <p><span class="asif_test">Subject</span>: @foreach($tutorsubject as $sub) <span class="btn-sm btn-success">{{ $sub->Subject->name ?? ''}}</span>  @endforeach</p>
                                                </div>
                                                 <div class="bio-row">
                                                    <p><span class="asif_test"></span></p>
                                                </div>
                                                 <div class="bio-row">
                                                    <p><span class="asif_test">Hourly Rate</span>: {{Auth::user()->expected_hourly_rate}} £</p>
                                                </div>
                                                
                                            </div>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
            </section>
        
            <section class="quote-area" style="padding:30px 0px 0px 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="quote-item">
                                        <div class="panel-body bio-graph-info">
                                            
                                            
                                            <div class="row">
                                                <h1 style="margin-top:20px">Extra Information</h1>
                                                <div class="col-md-12">
                                                    <p><span class="asif_test">Tutor Headline</span>: {{Auth::user()->headline_for_tutor}}</p>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <p><span class="asif_test">Bio Details</span>: {{Auth::user()->bio_details}}</p>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <p><span class="asif_test">Tutor Experience</span>: {{Auth::user()->tutor_experience}}</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p><span class="asif_test">Travel Distance</span>: {{Auth::user()->travel_distence}}</p>
                                                </div>
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </section>
      </div>
      <div>
       
      </div>
  </div>
</div>
</div>


@endsection