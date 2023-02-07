@extends('layouts.frontend')
@section('title', 'Agents Dashboard')
@section('content')
<style>
    .auto-container {
   
    max-width: 1620px !important;
    
}
.contact-banner-section {
    padding-top: 18px !important;
    padding-bottom: 10px !important;
}

a {
    color: #0d6efd;
     text-decoration: none !important;
}
.feature-block .inner-box {

    padding: 20px 10px !important;
}
</style>
  <section class="contact-banner-section">
        <div class="pattern-layer-one" style="background-image: url(frontend/images/icons/icon-5.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(frontend/images/icons/icon-6.png)"></div>
        <div class="pattern-layer-three" style="background-image: url(frontend/images/icons/icon-4.png)"></div>
        <div class="auto-container">
            <!-- Page Breadcrumb -->
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Agents Dashboard</li>
            </ul>
         
        </div>
    </section>
   @include('frontend.agent.include.maincss')
    <section class="featured-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="container-scroller">
                <nav class="navbar default-layout-navbar col-lg-12">
                    @include('frontend.agent.include.dasboardheader')
                </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          @include('frontend.agent.include.sidebar')
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('frontend/dashboard')}}/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">
                    <a style="color:#fff" href="{{url('exam-booking-list')}}">Total Exam Booking  <i class="mdi mdi-chart-line mdi-24px float-right"></i></a>
                    </h4>
                    @php
                    $count=App\Models\ExamRequest::where('user_id',Auth::user()->id)->where('is_completed_from',1)->count();
                    @endphp
                    <h2 class="mb-5">{{  $count }}</h2>
                    <!-- <h6 class="card-text">Increased by 60%</h6> -->
                  </div>
                </div>
              </div>
               <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('frontend/dashboard')}}/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">
                        <a style="color:#fff" href="{{url('exam-booking-list')}}">Payment Due List <i class="mdi mdi-chart-line mdi-24px float-right"></i></a>
                    </h4>
                    @php
                    $maincount=App\Models\ExamRequest::where('user_id',Auth::user()->id)->where('is_paid',0)->where('is_completed_from',1)->count();
                    @endphp
                    <h2 class="mb-5">{{  $maincount }}</h2>
                    <!-- <h6 class="card-text">Increased by 60%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('frontend/dashboard')}}/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Paid<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"> £ {{$totalwallet}}</h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('frontend/dashboard')}}/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Completed Exams <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">0</h2>
                    <!-- <h6 class="card-text">Increased by 5%</h6> -->
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
            </div>
        </div>
        
    </div>
    </div>
</section>

   @include('frontend.student.include.mainjs') 
@endsection