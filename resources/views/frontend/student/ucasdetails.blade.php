@extends('layouts.frontend')
@section('title', 'Student Dashboard')
@section('content')
<style>
    .auto-container {
   
    max-width: 1620px !important;
    
}
.contact-banner-section {
    padding-top: 18px !important;
    padding-bottom: 10px !important;
}
img.upimage {
    height: 260px !important;
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
                <li>Ucas-Exam Booking Details</li>
            </ul>
         
        </div>
    </section>
   @include('frontend.student.include.maincss')
    <section class="featured-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="container-scroller">
                <nav class="navbar default-layout-navbar col-lg-12">
                    @include('frontend.student.include.dasboardheader')
                </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          @include('frontend.student.include.sidebar')
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Ucas Exam Booking Details
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-warning">Basic Information</h4>
                    <p class="card-description text-danger"> Exam Booking No: <span class="btn-sm btn-success"> {{ $data->ucas_booking_id }}</span> </p>
                    <p class="card-description text-danger"> Exam Booking Date: <span class="btn-sm btn-warning"> {{ $data->created_at->format('d-M-Y') }}</span> </p>
                    <div class="row">
                      <div class="col-md-6">
                        
                          <p class="font-weight-bold">NAME: {{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}</p>
                          <p class="font-weight-bold">EMAIL:  {{ $data->email }}</p>
                          <p class="font-weight-bold">PHONE: {{ $data->phone }}</p>
                          <p class="font-weight-bold">CONTACT NUMBER: {{ $data->emergency_contact_number }}</p>
                          <p class="font-weight-bold">ADDRESS LINE 1: {{ $data->address_line_one }}</p>
                          <p class="font-weight-bold">ADDRESS LINE 2: {{ $data->address_line_two }}</p>
                       
                        
                      </div>
                      <div class="col-md-6">
                           <p class="font-weight-bold">CITY: {{ $data->city }}</p>
                          <p class="font-weight-bold">POST CODE: {{ $data->post_code }}</p>
                          <p class="font-weight-bold">DATE OF BIRTH: {{ $data->date_of_birth }}</p>
                          <p class="font-weight-bold">GENDER: {{ $data->gender }}</p>
                        
                      </div>

                    </div>
                  </div>
                </div>
              </div>
               <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-warning">Ucas Mock Exam Information</h4>
                   
                    <div class="row">
                      <div class="col-md-12 grid-margin stretch-card">
                    
                    
                            <table class="table table-hover">
                                
                                
                               <thead>
							                                <tr>
							                                  <th>#</th>
							                                  <th>Subject</th>
							                                  <th>Paper</th>
							                                </tr>
								                    </thead>
								                           
								                          
								                    <tbody>
								                       
					                                  @foreach(json_decode($data->exam_subject_details) as $new => $subject)
						                                <tr>
						                                    <td>{{ ++$new }}</td>
						                                    <td>{{ $subject->subject }}</td>
						                                    
						                                    <td>{{ $subject->paper }}</td>
					                                  </tr>
					                                  @endforeach
					                                  
								                    </tbody>
                              
                              
                              
                            </table>
                            
                            
                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           
              
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-warning">Other Information</h4>
                    <p class="card-description text-danger">Payment Status: <span class="btn-sm btn-success">@if($data->is_paid_verify==0) Unpaid @elseif($data->is_paid_verify==1) Paid @endif</span> </p>
                    
                      @php
													  
						  $myimage=pathinfo($data->photo_id, PATHINFO_EXTENSION);
						  $myrecent=pathinfo($data->recent_photo, PATHINFO_EXTENSION);
						
					@endphp
                    <div class="row">
                      <div class="col-md-4 ">
                          
                        <p>Recent Photo</p><br>
                        
                         @if($myrecent=='pdf')
                         {{--
                         <a target="__blank" href="{{ url('updatecore/public/'.$data->recent_photo) }}" class="btn btn-warning">View</a>
                         --}}
                         <iframe src="{{ url('updatecore/public/'.$data->recent_photo) }}" height="200" width="300"></iframe>
                         
                         
							 @else
                        <img class="upimage" src="{{ asset('/'.$data->recent_photo) }}" height="300px" >
                        @endif
                       
                        
                      </div>
                      <div class="col-md-4 ">
                        <p>Photo ID</p><br>
                         @if($myimage=='pdf')
                         {{--
                          <a target="__blank" href="{{ url('updatecore/public/'.$data->photo_id) }}" class="btn btn-warning">View</a> --}}
                             <iframe src="{{ url('updatecore/public/'.$data->photo_id) }}" height="200" width="300"></iframe>
						 @else

                        <img class="upimage" src="{{ asset('/'.$data->photo_id) }}" height="300px">
                        
                        @endif
                        
                        
                      </div>
                       <div class="col-md-4 ">
                        <p>Signature</p><br>
                        <img class="upimage" src="{{ asset('/'.$data->signed) }}" height="300px">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
              
           
									                            
									                            
			<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-warning">TERMS AND CONDITIONS</h4>
                    <div class="row">
                      <div class="col-md-12 grid-margin stretch-card">
                          <table class="table table-hover" style="font-size: 16px">
                           
									                              <tbody>
									                                <tr>
									                                  <td>Review your personal statement.</td>
									                                  <td><span class="badge badge-danger">{{ $data->review_personal_statement }}</span></td> 
									                                </tr>
									                                <tr>
									                                  <td>UCAS application support including documents verifying and referencing.</td>
									                                  <td><span class="badge badge-danger">{{ $data->application_support }}</span></td> 
									                                </tr>
									                                
									                                @if($data->application_support=='yes')
									                                
									                                @foreach(json_decode($data->application_support_details) as $mysupports)
									                                 <tr>
									                                  <td>{{ $mysupports->documents_details }}</td>
									                                  <td><a target="__blank" href="{{ url('updatecore/public/uploads/'.$mysupports->documents) }}">{{ $mysupports->documents }}</a></td> 
									                                </tr>
									                                @endforeach
									                                
									                              
									                                
									                                @endif
									                                
									                                
									                                
									                              </tbody>
									                            </table>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-warning">TERMS AND CONDITIONS</h4>
                    <div class="row">
                      <div class="col-md-12 grid-margin stretch-card">
                           <table class="table table-hover">
                           
                              <tbody>
                                <tr>
                                  <td>Name</td>
                                  <td>{{ $data->relation_name }}</td> 
                                </tr>
                             
                                 <tr>
                                  <td>Date</td>
                                  <td><span class="badge badge-danger">{{ $data->exam_date }}</span></td> 
                                </tr>
                              </tbody>
                            </table>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-warning">Payment Information</h4>
                    <div class="row">
                      <div class="col-md-12 grid-margin stretch-card">
                      
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Total Amount</th>
                                  <th>Discount</th>
                                  <th>Booking ID</th>
                                  
                                  <th>Paid Option</th>
                                  <th>Transection ID</th>
                                 
                                </tr>
                              </thead>
                              <tbody>
                                
                                <tr>
                                  <td>£ {{ $data->total_subject_amount + $data->review_statement_amount + $data->doucment_check_amount - $data->discount_amount}}</td>
                                  <td>£ {{  $data->discount_amount }}</td>
                                  <td>{{ $data->ucas_booking_id }}</td> 
                               
                                  <td class="text-danger">{{ $data->payment_option }}</td>
                                  <td>{{ $data->transaction_id }}</td>
                              </tbody>
                            </table>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 



               -->


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
