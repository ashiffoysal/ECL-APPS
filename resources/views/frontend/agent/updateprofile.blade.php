@extends('layouts.frontend')
@section('title', 'Update Profile')
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
                </span> Edit profile
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
                    <p class="card-description">Update your personal information</p>
                    <form action="{{ url('/student/updateprofile') }}" class="forms-sample" method="post" enctype="multipart/form-data">
                       @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="{{ Auth::user()->name }}">
                        @error('first_name')
                        <div style="color: red">{{ $message }}</div>
                        @enderror
                      </div>
                       <div class="form-group">
                        <label for="exampleInputName1">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control" placeholder="Enter Middle Name" value="{{ Auth::user()->middle_name }}">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputName1">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="{{ Auth::user()->last_name }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Phone</label>
                       <input type="text" name="phone" class="form-control" placeholder="Enter Phone" value="{{ Auth::user()->phone }}">
                        @error('phone')
                        <div style="color: red">{{ $message }}</div>
                        @enderror
                      </div>
                       <div class="form-group">
                            <label for="exampleSelectGender">Country</label>
                            <select name="country" class="form-control" placeholder="Select Country">
                                <option selected disabled>Select Country</option>
                                <option value="United Kingdom" @if(Auth::user()->country=='United Kingdom') selected @endif>United Kingdom</option>
                            </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" name="city" class="form-control" placeholder="Enter City" value="{{ Auth::user()->city }}">
                                                @error('city')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Address line one</label>
                        <textarea name="address_line_one" class="form-control" rows="4" placeholder="Enter Address Line 1">{{ Auth::user()->address }}</textarea>
                        @error('address_line_one')
                        <div style="color: red">{{ $message }}</div>
                        @enderror
                      </div>
                       <div class="form-group">
                        <label for="exampleTextarea1">Address line one</label>
                          <textarea  name="address_line_two" class="form-control" placeholder="Enter Address Line 2">{{ Auth::user()->address_two }}</textarea>
                        @error('address_line_two')
                        <div style="color: red">{{ $message }}</div>
                        @enderror
                      </div>
                       <div class="form-group">
                          <label for="exampleTextarea1">Postcode</label>
                          <input type="text" name="postcode" class="form-control" placeholder="Enter Postcode" value="{{ Auth::user()->zip }}">
                            @error('postcode')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                      </div>
                    <div class="form-group">
                        <label>Photo upload</label>
                       <div id="thumbnail_img"></div>
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

