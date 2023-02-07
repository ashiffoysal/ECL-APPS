@extends('layouts.frontend')
@section('title', 'Dashboard')
@section('content')
<style>
    .auto-container {
   
    max-width: 1620px !important;
    
}
.contact-banner-section {
    padding-top: 18px !important;
    padding-bottom: 10px !important;
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
                <li>Agent Dashboard</li>
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
                </span> Password update
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  
                </ul>
              </nav>
            </div>
            <div class="row">
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-description">Update your password</p>
                    <form action="{{ url('/student/updatepassword') }}" class="forms-sample" method="post" enctype="multipart/form-data">
                       @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Current Password</label>
                        <input type="password" ame="current_password" class="form-control" placeholder="Current Password">
                        @error('current_password')
                        <div style="color: red">{{ $message }}</div>
                        @enderror
                      </div>
                        <div class="form-group">
                        <label for="exampleInputName1">New Password</label>
                        <input type="password" name="password" class="form-control" placeholder="New Password">
                        @error('password')
                        <div style="color: red">{{ $message }}</div>
                        @enderror
                      </div>
                        <div class="form-group">
                        <label for="exampleInputName1">Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control" value="" placeholder="Password Confirmation" required="">
                            @error('password_confirmation')
                        <div style="color: red">{{ $message }}</div>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    
                    </form>
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
