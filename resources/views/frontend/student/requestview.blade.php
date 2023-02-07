@extends('layouts.frontend')
@section('title', 'Request Details')
@section('content')
<style>

.profile-nav, .profile-info{
    margin-top:30px;   
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



.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
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
            <div class="profile-info col-md-9 row">
                <div class="col-md-12">
                    <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                <div class="quote-item">
                                    <div class="asif-tutor col-lg-12 row">
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Tutor Name:</label> <span> {{$data->Tutor->name}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Total Hour:</label><span> {{ $data->total_hour }} Hours</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Total Amount:</label><span> {{ $data->total_amount }} £</span>
                                        </div>
                                         <div class="col-md-6">
                                            <label for="" style="font-weight:500">Completed Hours:</label><span> {{$totalhourcompleted}} Hours</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Remaining Hour:</label><span> {{$data->total_hour - $totalhourcompleted}} Hours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                <div class="quote-item">
                                    <div class="asif-tutor col-lg-12 row">
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Subject:</label> <span> {{$data->subject}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Start Date:</label><span>@if($data->tutor_is_approve==1) {{$data->pick_date }} @else Hidden @endif</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Pick Time:</label><span>@if($data->tutor_is_approve==1) {{$data->pick_time }} @else Hidden @endif</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Lessons Type:</label><span>@if($data->tutor_is_approve==1) {{ $data->lessons_type }} @else Hidden @endif</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Exam Board:</label><span>@if($data->tutor_is_approve==1) {{ $data->exam_board }} @else Hidden @endif</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                     <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                <div class="quote-item">
                                    <div class="asif-tutor col-lg-12 row">
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Total Hours(You purchase):</label> <span>  {{$data->total_hour}} Hours</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Paid Hours:</label><span> {{$data->paid_hour}} Hours</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500"> Paid Due Hours :</label><span> {{$data->due_hour}} hours</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Total Amount:</label><span>{{$data->intotal_amount}} £</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Paid Amount:</label><span> {{$data->paid_amount}} £</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Discount Amount:</label><span> @if($data->discount_amount==null) 0 £ @else {{$data->discount_amount}} £ @endif</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Due Amount:</label><span> {{$data->due_amount}} £</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @if($data->tutor_is_approve==1)
                    <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                
                                <div class="quote-item">
                                    <div class="asif-tutor col-lg-12 row">
                                        <h6>Feedback</h6>
                                        @php
                                        $feedback=App\Models\Studentfeedback::where('student_id',Auth::user()->id)->where('course_id',$data->id)->first();
                                        @endphp

                                        <form action="{{ url('user/feedback/submit') }}" method="post">
                                            @csrf
                                          <div class="form-group">
                                                <label for="exampleFormControlInput1">Review </label><br>
                                                <div class="rate">
                                                    <input type="radio" id="star5" name="rate" value="5" @if($feedback) @if($feedback->star==5) checked @endif  @endif/>
                                                    <label for="star5" title="text">5 stars</label>
                                                    <input type="radio" id="star4" name="rate" value="4"  @if($feedback)  @if($feedback->star==4) checked @endif  @endif />
                                                    <label for="star4" title="text">4 stars</label>
                                                    <input type="radio" id="star3" name="rate" value="3"  @if($feedback)  @if($feedback->star==3) checked @endif  @endif/>
                                                    <label for="star3" title="text">3 stars</label>
                                                    <input type="radio" id="star2" name="rate" value="2"  @if($feedback)  @if($feedback->star==2) checked @endif  @endif/>
                                                    <label for="star2" title="text">2 stars</label>
                                                    <input type="radio" id="star1" name="rate" value="1"  @if($feedback)  @if($feedback->star==1) checked @endif  @endif/>
                                                    <label for="star1" title="text">1 star</label>
                                                </div>
                                          </div>
                                          <br>
                                          <br>
                                          <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Review Details</label>
                                            <input type="hidden" name="tutor_id" value="{{  $data->tutor_id }}">
                                            <input type="hidden" name="course_id" value="{{  $data->id }}">
                                            <input type="hidden" name="order_id" value="{{  $data->order_id }}">
                                            <textarea class="form-control" name="feedback_details" id="exampleFormControlTextarea1" rows="3" required> @if($feedback)   {{ $feedback->details }}   @endif</textarea>
                                          </div>
                                          <div class="form-group">
                                            <button type="submit" class="btn-sm btn-success">Submit</button>
                                          </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                
                                <div class="quote-item">
                                    <div class="asif-tutor col-lg-12 row">
                                        <h6>Lesson Complete History</h6>
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                  
                                                    <th scope="col">Lesson Details</th>
                                                    <th scope="col">Hours</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($alllessonhistory as $history)
                                                <tr>
                                                    <th scope="row">{{  $history->created_at->format('d-F-Y') }}</th>
                                                    <td>{{  $history->lesson_complete_details}}</td>
                                                     <td>{{  $history-> total_hour }}</td>
                                                    <td> @if($history->is_approve==0)
                                              <span class="btn-sm btn-warning">Pending</span>
                                              @elseif($history->is_approve==1)
                                              <span class="btn-sm btn-success">Assign</span>
                                              @elseif($history->is_approve==2)
                                              <span class="btn-sm btn-danger">Reject</span>
                                              @endif</td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                             
                                        </table>

                                    </div>
                                    <div class="col-md-12">
                                        {{ $alllessonhistory->links('vendor.pagination.custom') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @endif 
                </div>
             
               
            <div>
        
        </div>
    </div>
</div>
</div>


@endsection