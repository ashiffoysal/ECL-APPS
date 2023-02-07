@extends('layouts.frontend')
@section('title', 'Tutor Details')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>
<!-- <script src="https://use.fontawesome.com/5f267863cb.js"></script> -->

<style>
.pricing-table .table tbody tr th {

    font-size: 14px;
}
.pricing-table .table thead th {

    font-size: 14px;
  
}
.teacher-details-information {
 
    border-top: 3px solid #02ff6a;
 
}
.teacher-details-information h3::before {

    background-color: #02ff6a;
}
.pricing-table .table tbody tr td {
    border: 1px solid #f0f0f0;
    font-weight: 400;
    color: #6b6b84;
    overflow-x: auto;
    font-family: "Roboto", sans-serif;
    padding: 22px 25px;
    font-size: 16px;
}


blockquote, .blockquote {
    background-color: #fafafa;
    padding: 30px !important;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
    border-left: 3px solid #02ff6a;
    border-right: 3px solid #02ff6a;
    border-radius: 5px;
}
</style>
    <!-- Start Page Banner -->
    <!-- <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Tutor Details</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Tutor Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Page Banner -->
        <!-- Start Teacher Details Area -->
        <section class="teacher-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 row">
                        <div class="col-md-12">
                            <section class="quote-area" style="padding:0px 0px 30px 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="quote-item">
                                            <div class="asif-tutor col-lg-12 row">
                                                <div class="col-md-2">
                                                    <img class="img_laz" data-original="{{ asset('/'.$data->photo) }}" alt="">
                                                </div>
                                                <div class="col-md-6">
                                                <h4>{{ $data->name }}</h4>
                                                <p>{{ $data->headline_for_tutor }}</p>
                                               
                                              
                                                </div>
                                                <div class="col-md-4 text-end">
                                                <form action="{{ url('/student/tutorsave') }}" method="post">
                                                    @csrf
                                                    @if(Auth::user())
                                                        <input type="hidden" name="student_id" value="{{ Auth::user()->id }}">
                                                    @else
                                                    <input type="hidden" name="student_id" value="">
                                                    @endif
                                                    <input type="hidden" name="tutor_id" value="{{ $data->id }}">
                                                    @if(Auth::user())

                                                        @if(Auth::user()->user_type==1)
                                                            @php
                                                                $check=App\Models\SaveTutor::where('student_id',Auth::user()->id)->where('tutor_id',$data->id)->first();
                                                            @endphp
                                                        
                                                                @if($check)
                                                                <button type="button" class="btn-sm btn-dark">All Ready Saved</button>
                                                                @else
                                                                <button type="submit" class="btn-sm btn-warning">Save Tutor</button>
                                                                @endif
                                                        @else
                                                        <a href="#" class="btn-sm btn-dark">Save Tutor</a>
                                                        @endif
                                                    @else
                                                    <a href="{{url('/login')}}" class="btn-sm btn-dark">Save Tutor</a>
                                                    @endif
                                                </form>
                                                        <br>
                                                        <br>
                                                    <span><i class="fa fa-star"></i> {{$reviewcount}} reviews</span>
                                                    <br>
                                                    <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{$lessoncompleted}} completed lessons</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12">
                            <div class="teacher-details-desc">

                                <div class="teacher-desc-content">
                                    <h5 style="padding:10px 0px">About me</h5>
                                    <p>{{ $data->headline_for_tutor }}</p>
                                    <blockquote class="wp-block-quote">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </blockquote>
                                    <h5 style="padding:10px 0px">Teacher Subjects</h5>

                                    <p>
                                    @if($data->subject !=null) 
                                        @php
                                        $subjectstutor=App\Models\SelectedTutorSubject::where('tutor_id', $data->id)->get();
                                        @endphp
                                       @foreach($subjectstutor as $sub)
                                        <span class="btn-sm btn-danger" style="margin:0px 10px">{{$sub->Subject->name}}</span>
                                        @endforeach 
                                    @endif
                                </p>

             


                                    <br>
                                    <h5 style="padding:10px 0px">Teacher Bio</h5>
                                    <p>{{ $data->bio_details }}</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="teacher-details-desc">
                                <div class="teacher-desc-content">
                                    <h5 style="padding:10px 0px">Qualifications</h5>
                                    <div class="pricing-area ">
                                        <div class="">
                                        

                                            <div class="pricing-table table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            Subject
                                                        </th>
                                                        <th>
                                                            Qualification
                                                        </th>
                                                        <th>
                                                            Grade
                                                        </th>
                                                        
                                                    </tr>
                                                    </thead>
                                
                                                    <tbody>
                                                        @foreach($alleducation as $education)
                                                        <tr>
                                                            <td>{{$education->subject}}</td>
                                                            <td>{{$education->name_of_degree}}</td>
                                                            <td>{{$education->grade}}</td>
                                                        </tr>
                                                        @endforeach
                                                     
                                                  
                                                    </tbody>
                                                </table>
                                                <div class="table-title">
                                                    <!-- <p>The preschool reserves the right to increase the said fees at any time.</p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="comments-area">
                                <h3 class="comments-title">Gurdian/Student Review:</h3>

                                <ol class="comment-list">
                                    <li class="comment">
                                        @foreach($allreview as $review)
                                        <div class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img src="{{ asset('frontend') }}/aa.png" class="avatar" alt="image">
                                                    <b class="fn">{{ $review->Student->name }}</b>
                                                </div>
                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <span>{{$review->created_at->format('d-M-Y')}}</span>
                                                    </a>
                                                    @if($review->star==1)
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    @elseif($review->star==2)
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star "></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    @elseif($review->star==3)
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    @elseif($review->star==4)
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    @elseif($review->star==5)
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    @endif


                                                </div>
                                            </footer>
                                            <div class="comment-content">
                                                <p>{{ $review->details }}</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </li>
                                </ol>

                               
                            </div>
                        </div>




                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="teacher-details-information">
                            <h3>Profile Details</h3>
                            <ul>
                                <li>
                                    <span>Name:</span>
                                    {{$data->name}}
                                </li>
                                <li>
                                    <span>Phone:</span>
                                    <a href="#">HIDDEN</a>
                                </li>
                                <li>
                                    <span>Email:</span>
                                    <a href="#">HIDDEN</a>
                                </li>
                                <li>
                                    <span>Address:</span>
                                    HIDDEN
                                </li>
                                <li>
                                    <span>Tutor Type:</span>
                                     @if($data->for_online_tutor==1)
                                      <span class="btn-sm btn-danger" style="margin:0px 5px;color:#fff">ONLINE TUTOR</span>
                                      @endif
                                        @if($data->for_home_tutor==1)
                                    <span class="btn-sm btn-danger" style="margin:0px 5px;color:#fff">HOME TUTOR</span>
                                    @endif
                                   
                                </li>
                                <li>
                                    <span>Gender:</span>
                                   {{$data->gender}}
                                </li>
                                <li>
                                    <span>Experience:</span>
                                    {{$data->tutor_experience}}
                                </li>
                            </ul>
                        </div>
                        <div class="teacher-details-information" style="padding:20px 30px">
                            <h3>SMS Chat</h3>
                            <div class="row" height="300px">
                                <div class="col-md-12">
                                    <!-- chat box -->
                                    @if(Auth::user())
                                    @if(Auth::user()->user_type==1)
                                    <div class="container">
                                        <div class="chat_box">
                                            <form action="{{ url('user/message/chat') }}" method="post">
                                                @csrf
                                                <div class="body" style="height:250px; overflow: scroll;">
                                                @php
                                                $allsms=App\Models\smschat::where('sender_id',Auth::user()->id)->where('receiver_id',$data->id)->get();
                                                @endphp
                                                @foreach($allsms as $sms)
                                                    @if($sms->type=='outgoing')
                                                    <div class="incoming">
                                                        <div class="bubble">
                                                            <p>{{$sms->message}}</p>
                                                        </div>
                                                    
                                                    </div>
                                                    @else
                                                    <div class="outgoing">
                                                        <div class="bubble lower">
                                                            <p>{{$sms->message}}</p>
                                                        </div>
                                                    </div>
                                                    @endif
                                                @endforeach
                                                <div class="typing">
                                                    <div class="bubble">
                                                        <div class="ellipsis dot_1"></div>
                                                        <div class="ellipsis dot_2"></div>
                                                        <div class="ellipsis dot_3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="foot">
                                                <input type="text" name="message" class="msg" placeholder="Type a message..." required />
                                                <input type="hidden" name="tutor_id" value="{{  $data->id }}" />
                                                <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                     <!-- chat box end-->
                                     @endif
                                     @else
                                     <a class="btn-sm btn-warning" href="{{url('/login')}}">Login</a>
                                     @endif
                                </div>
                            </div>
                            
                        </div>

                        <div class="teacher-details-information" style="padding:20px 30px">
                            <h3>Contact</h3>
                            <a href="{{ url('/tutor/contact-a-tutor/'.$data->id) }}" class="default-btn">HIRE THIS TUTOR</a>
                        </div>
                         
                    </div>
                </div>
            </div>
        </section>
        <!-- End Teacher Details Area -->
        <style>
            .blog {
	font-size: 14px;
	font-weight: bold;
	text-align: center;
	position: absolute;
	bottom: 15px;
	left: 50%;
	transform: translateX(-50%);
	z-index: 1;
}
.alink {
	display: inline-block;
	text-align: center;
	cursor: pointer;
}
input[type="text"],
button {
	padding: 4px 8px;
	border: 0;
	outline: 0;
}
button {
	background-color: transparent;
	cursor: pointer;
}
button:hover i {
	color: #79c7c5;
	transform: scale(1.2);
}

.chat_box {
	display: flex;
	flex-direction: column;
	height: 100%;
}
.chat_box > * {
	padding: 16px;
}

/* head */
.head {
	display: flex;
	align-items: center;
}
.head .user {
	display: flex;
	align-items: center;
	flex-grow: 1;
}
.head .user .avatar {
	margin-right: 8px;
}
.head .user .avatar img {
	display: block;
	border-radius: 50%;
}
.head .bar_tool {
	display: flex;
}
.head .bar_tool i {
	padding: 5px;
	width: 30px;
	height: 30px;
	display: flex;
	align-items: center;
	justify-content: center;
}

/* body */
.body {
	flex-grow: 1;
	background-color: #eee;
}
.body .bubble {
	display: inline-block;
	padding: 10px;
	margin-bottom: 5px;
	border-radius: 15px;
}
.body .bubble p {
	color: #f9fbff;
	font-size: 14px;
	text-align: left;
	line-height: 1.4;
}
.body .incoming {
	text-align: left;
}
.body .incoming .bubble {
	background-color: #b2b2b2;
}
.body .outgoing {
	text-align: right;
}
.body .outgoing .bubble {
	background-color: #79c7c5;
}

/* foot */
.foot {
	display: flex;
}
.foot .msg {
	flex-grow: 1;
}

@keyframes bounce {
	50% {
		transform: translate(0, 5px);
	}
	100% {
		transform: translate(0, 0);
	}
}
.ellipsis {
	display: inline-block;
	width: 5px;
	height: 5px;
	border-radius: 50%;
	background-color: #b7b7b7;
}
.dot_1 {
	/* animation: name duration timing-function delay iteration-count */
	animation: bounce 0.8s linear 0.1s infinite;
}
.dot_2 {
	animation: bounce 0.8s linear 0.2s infinite;
}
.dot_3 {
	animation: bounce 0.8s linear 0.3s infinite;
}

        </style>
@endsection