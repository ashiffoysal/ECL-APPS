@extends('layouts.frontend')
@section('title', 'DBS Check')
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
                    <section class="quote-area" style="padding:0px 0px 30px 0px">
                        <div class="container">
                            <div class="row">
                             
                                <section class="quote-area" style="padding:0px 0px 30px 0px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="quote-item">
                                                <div class="asif-tutor col-lg-12 row">
                                                    <!--  -->
                                                    <div class="content">
                                                        <h6>Profile Verification</h6>
                                                    </div>
                                                    <table class="table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">MANDATORY ITEMS</th>
                                                                <th scope="col">PROGRESS</th>
                                                                <th scope="col">MANAGE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(Auth::user()->user_type==2)
                                                            <tr>
                                                                <td>DBS Certification</td>
                                                                <td>
                                                                @if($dbs)
                                                                    @if($dbs->is_verify==0)
                                                                    <span class="btn-sm btn-warning">pending</span>
                                                                    @elseif($dbs->is_verify==1)
                                                                    <span class="btn-sm btn-success">approve</span>
                                                                    @else
                                                                    <span class="btn-sm btn-danger">reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="btn-sm btn-danger">Unverified</span>
                                                                @endif

                                                                </td>
                                                                <td><a href="{{ url('/user/dbs-certification') }}"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Your Update CV (PDF)</td>
                                                                <td>
                                                                @if($cv)
                                                                    @if($cv->is_verify==0)
                                                                    <span class="btn-sm btn-warning">pending</span>
                                                                    @elseif($cv->is_verify==1)
                                                                    <span class="btn-sm btn-success">approve</span>
                                                                    @else
                                                                    <span class="btn-sm btn-danger">reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="btn-sm btn-danger">Unverified</span>
                                                                @endif
                                                                </td>
                                                                <td><a href="{{ url('/user/cv') }}"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Profile image</td>
                                                                <td>
                                                                @if($profileimage)
                                                                    @if($profileimage->is_verify==0)
                                                                    <span class="btn-sm btn-warning">pending</span>
                                                                    @elseif($profileimage->is_verify==1)
                                                                    <span class="btn-sm btn-success">approve</span>
                                                                    @else
                                                                    <span class="btn-sm btn-danger">reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="btn-sm btn-danger">Unverified</span>
                                                                @endif
                                                                </td>
                                                                <td><a href="{{ url('/user/profile-image') }}"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                         
                                                            @endif
                                                            <tr>
                                                                <td>Proof of Address</td>
                                                                <td>
                                                                @if($proof_of_address)
                                                                    @if($proof_of_address->is_verify==0)
                                                                    <span class="btn-sm btn-warning">pending</span>
                                                                    @elseif($proof_of_address->is_verify==1)
                                                                    <span class="btn-sm btn-success">approve</span>
                                                                    @else
                                                                    <span class="btn-sm btn-danger">reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="btn-sm btn-danger">Unverified</span>
                                                                @endif
                                                                </td>
                                                                <td><a href="{{ url('/user/proof-of-address') }}"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                        </div>
                                                        </tbody>
                                                    </table>
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
                                                    <!--  -->
                                                    <div class="content">
                                                        <h6>Verification Step Summary</h6>
                                                    </div>
                                                    <table class="table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">ITEMS NAME</th>
                                                                <th scope="col">DATE OF SUBMISSION</th>
                                                                <th scope="col">PROGRESS</th>
                                                                <th scope="col">MORE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($maindata as $data)
                                                            <tr>
                                                                <td>{{$data->item_name}}
                                                                    <br><span style="font-size:10px">{{ $data->proof_of_address }}</span>
                                                            </td>
                                                                <td>{{$data->created_at->format('F-d-Y')}}</td>
                                                                <td>
                                                                    @if($data->is_verify==0)
                                                                    <span class="btn-sm btn-warning">pending</span>
                                                                    @elseif($data->is_verify==1)
                                                                    <span class="btn-sm btn-success">approve</span>
                                                                    @else
                                                                    <span class="btn-sm btn-danger">reject</span>
                                                                    @endif
                                                                </td>
                                                                <td><p style="font-size:10px">{{$data->more}}</p></td>
                                                            </tr>
                                                        @endforeach
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </section>
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