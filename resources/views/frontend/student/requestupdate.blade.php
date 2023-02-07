@extends('layouts.frontend')
@section('title', 'Request Update')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/datepicker/mc-calendar.min.css" />
<script src="{{ asset('frontend') }}/datepicker/mc-calendar.min.js"></script>
<link href="{{asset('frontend/timepicker')}}/mdtimepicker.css" rel="stylesheet">
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
.profile-nav .user-heading {
    background: #38962b;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
    box-shadow: 1px 1px 1px 1p;
    box-shadow: 1px 6px 7px -1px #888834;
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

.quote-item form .form-group .form-control {
    height: 50px;
    
}
.profile-nav .user-heading {
    background: #38962b;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
    box-shadow: 1px 1px 1px 1p;
    box-shadow: 0px 0px 0px 0px #888834;
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
          <div class="panel-body bio-graph-info">
              <div class="row">
              <div class="col-lg-12">
                        <div class="quote-item">
                            <form action="{{ url('/student/tutorrequestlist/update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <label for="exampleInputEmail1" style="font-weight:600">Tutor Name</label>
                                    <input type="text" disabled class="form-control" value="{{ $data->Tutor->name }} (Rate: {{  $data->Tutor->expected_hourly_rate }} per Hour ) ">
                                    
                                </div>
                                <div class="form-group">
                              
                                    <label for="exampleInputEmail1" style="font-weight:600">Tutor For</label>
                                    <select name="tutor_type" class="form-control" id="">
                                        <option value="For Home" @if($data->tutor_for=="For Home") selected @endif>For Home</option>
                                        <option value="For Online" @if($data->tutor_for=="For Online") selected @endif>For Online</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                <label for="exampleInputEmail1" style="font-weight:600">Subject</label>
                                    <select name="subject" class="form-control" id="">
                                        @foreach($allsubject as $subject)
                                        <option value="{{$subject->name}}" @if($data->subject==$subject->name) selected @endif>{{$subject->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" style="font-weight:600">Level</label>
                                    <select name="level" class="form-control" id="">
                                        <option value="GCSE" @if($data->tutor_type=="GCSE") selected @endif>GCSE</option>
                                        <option value="KS1" @if($data->tutor_type=="KS1") selected @endif>KS1</option>
                                        <option value="KS2" @if($data->tutor_type=="KS2") selected @endif>KS2</option>
                                        <option value="KS3" @if($data->tutor_type=="KS3") selected @endif>KS3</option>
                                        <option value="11 Plus" @if($data->tutor_type=="11 Plus") selected @endif>11 Plus</option>
                                        <option value="A level" @if($data->tutor_type=="A level") selected @endif>A Level</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                            <label for="exampleInputPassword1"style="font-weight:600">How often would you like lessons? (Optional)</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio1" value="ONCE A WEEK" @if($data->lessons_type=="ONCE A WEEK") checked @endif>
                                                <label class="form-check-label" for="inlineRadio1">ONCE A WEEK</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio2" value="TWICE A WEEK" @if($data->lessons_type=="TWICE A WEEK") checked @endif>
                                                <label class="form-check-label" for="inlineRadio2">TWICE A WEEK</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio3" value="FORTNIGHTLY" @if($data->lessons_type=="FORTNIGHTLY") checked @endif>
                                                <label class="form-check-label" for="inlineRadio3">FORTNIGHTLY</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio4" value="I’LL DECIDE LATER" @if($data->lessons_type=="I’LL DECIDE LATER") checked @endif>
                                                <label class="form-check-label" for="inlineRadio4">I’LL DECIDE LATER</label>
                                            </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"  style="font-weight:600">Exam Board (Optional)</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio5" value="AQA"  @if($data->exam_board=="AQA") checked @endif>
                                        <label class="form-check-label" for="inlineRadio5">AQA</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio6" value="EDEXCEL"  @if($data->exam_board=="EDEXCEL") checked @endif>
                                        <label class="form-check-label" for="inlineRadio6">EDEXCEL</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio7" value="OCR"  @if($data->exam_board=="OCR") checked @endif>
                                        <label class="form-check-label" for="inlineRadio7">OCR</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio8" value="SQA"  @if($data->exam_board=="SQA") checked @endif>
                                        <label class="form-check-label" for="inlineRadio8">SQA</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio9" value="OTHER"   @if($data->exam_board=="OTHER") checked @endif>
                                        <label class="form-check-label" for="inlineRadio9">OTHER</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"  style="font-weight:600">Hour (Approximate Hour Which You Want)</label>
                                   <input type="text" class="form-control" disabled value="{{ $data->total_hour }} Hours">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"  style="font-weight:600">Start Day</label>
                                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pick Day"> -->
                                    <input class="form-control" name="date" id="example" type="text" disabled placeholder="Enter Start Date"  value="{{ $data->pick_date }}"/>
                                    @error('date')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"  style="font-weight:600">End Day(Optional)</label>
                                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pick Day"> -->
                                    <input class="form-control" name="end_date" id="exampletwo" type="text" disabled placeholder="Enter End Date"  value="{{ $data->end_date }}"/>
                                    @error('date')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>




                                <div class="form-group">
                                    <label for="exampleInputEmail1"  style="font-weight:600">Pick Time(Optional)</label>
                                    <input type="text" name="time" id="timepicker" class="form-control timepicker" placeholder="Enter Pick Time" value="{{ $data->pick_time }}">
                                    @error('time')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="default-btn">
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>
              </div>
          </div>
      </div>
      <div>
       
      </div>
  </div>
</div>
</div>
<script>
            const myDatePicker = MCDatepicker.create({ 
                el: '#example',
                dateFormat: 'MMM-DD-YYYY',
            });
        </script>
          <script>
            const mydDatePicker = MCDatepicker.create({ 
                el: '#exampletwo',
                dateFormat: 'MMM-DD-YYYY',
            });
        </script>
@endsection