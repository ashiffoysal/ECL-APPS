@extends('layouts.frontend')
@section('title', 'Agent Dashboard')
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
                <li>Agent Dashboard</li>
            </ul>
         
        </div>
    </section>
   @include('frontend.student.include.maincss')
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
                </span> All Exam Booking
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
                    <p class="card-description text-danger"> Exam Booking No: <span class="btn-sm btn-success"> {{ $data->booking_id }}</span> </p>
                    <p class="card-description text-danger"> Exam Booking Date: <span class="btn-sm btn-warning"> {{ $data->created_at->format('d-M-Y') }}</span> </p>
                    <div class="row">
                      <div class="col-md-6">
                        
                          <p class="font-weight-bold">NAME: {{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}</p>
                          <p class="font-weight-bold">EMAIL:  {{ $data->email }}</p>
                          <p class="font-weight-bold">PHONE: {{ $data->phone }}</p>
                          <p class="font-weight-bold">CONTACT NUMBER: {{ $data->emergency_contact_number }}</p>
                          <p class="font-weight-bold">ADDRESS LINE 1: {{ $data->address_line_1 }}</p>
                          <p class="font-weight-bold">ADDRESS LINE 2: {{ $data->address_line_2 }}</p>
                       
                        
                      </div>
                      <div class="col-md-6">
                           <p class="font-weight-bold">CITY: {{ $data->city }}</p>
                          <p class="font-weight-bold">POST CODE: {{ $data->postcode }}</p>
                          <p class="font-weight-bold">DATE OF BIRTH: {{ $data->date_of_birth }}</p>
                          <p class="font-weight-bold">GENDER: {{ $data->gender }}</p>
                          <p class="font-weight-bold">Has a candidate before?. ans:  {{ $data->has_a_candidate }} @if($data->has_a_candidate=='yes'){{ $data->has_a_candidate_number }} @endif</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
               <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-warning">Exam Information</h4>
                    <p class="card-description text-danger">Exam Type: <span class="btn-sm btn-success">{{ $data->main_exam_type }}</span> </p>
                    <div class="row">
                      <div class="col-md-12 grid-margin stretch-card">
                        @if($data->main_exam_type=='GCSE' || $data->main_exam_type=='A Level' || $data->main_exam_type=='AS Level'||  $data->main_exam_type=='IGCSE' )
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Exam Board</th>
                                  <th>Exam Series</th>
                                  <th>Subject</th>
                                  <th>Unit Code</th>
                                  <th>Option Code</th>
                                  <th>Fees</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach(json_decode($data->exam_information) as $exam)
                                <tr>
                                  <td>{{$exam->exam_board}}</td>
                                  <td>{{$exam->exam_series}}</td> 
                                  @php
                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
                                  @endphp
                                  <td class="text-danger">{{$subject->subject_name}}</td>
                                  <td><label class="badge badge-danger">{{$subject->unit_code}}</label></td>
                                  <td><label class="badge badge-danger">{{ $exam->option_code }}</label></td>
                                   <td>£ {{ $exam->fees }}</td>
                                </tr>
                                @endforeach
                                
                              </tbody>
                            </table>
                        @endif
                          @if($data->main_exam_type=='Functional Skills' || $data->main_exam_type=='AAT')
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Exam Board</th>
                                  <th>Subject</th>
                                  <th>Unit Code</th>
                                  <th>Exam Type</th>
                                  <th>Fees</th>
                                  <th>Date</th>
                                  <th>Time</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach(json_decode($data->exam_information) as $exam)
                                <tr>
                                  <td>{{$exam->exam_board}}</td>
                                  @php
                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
                                  @endphp
                                  <td class="text-danger">{{$subject->subject_name}}</td>
                                  <td><label class="badge badge-danger">{{$subject->unit_code}}</label></td>
                                  <td><label class="badge badge-danger">{{ $exam->option_code }}</label></td>
                                   <td>£ {{ $exam->fees }}</td>
                                   <td>{{ $exam->exam_date }}</td>
                                   <td>{{ $exam->start_exam_time }}</td>
                                </tr>
                                @endforeach
                                
                              </tbody>
                            </table>
                        @endif
                               @if($data->main_exam_type=='ACCA' )
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Exam Board</th>
                                  <th>Subject</th>
                                  <th>Unit Code</th>
                                  <th>Exam Type</th>
                                  <th>Fees</th>
                                  <th>Date</th>
                                  <th>Time</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach(json_decode($data->exam_information) as $exam)
                                <tr>
                                  <td>{{$exam->exam_board}}</td>
                                  @php
                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
                                  @endphp
                                  <td class="text-danger">{{$subject->subject_name}}</td>
                                  <td><label class="badge badge-danger">{{$subject->unit_code}}</label></td>
                                  <td><label class="badge badge-danger">{{ $exam->option_code }}</label></td>
                                   <td>£ {{ $exam->fees }}</td>
                                   <td>{{ $exam->exam_date }}</td>
                                   <td>{{ $exam->start_exam_time }}</td>
                                </tr>
                                @endforeach
                                
                              </tbody>
                            </table>
                        @endif
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
                    <div class="row">
                      <div class="col-md-4 ">
                        <p>Recent Photo</p><br>
                        <img class="upimage" src="{{ asset('/'.$data->recent_photo) }}" height="300px" >
                      </div>
                      <div class="col-md-4 ">
                        <p>Photo ID</p><br>

                        <img class="upimage" src="{{ asset('/'.$data->photo_id) }}" height="300px">
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
                    <h4 class="card-title text-warning">Others Information</h4>
                    <div class="row">
                      <div class="col-md-12 grid-margin stretch-card">
                            <table class="table table-hover">
                              <tbody>
                                
                                <tr>
                                  <td>Do you have a UCI Number ( 13 digits )?  </td>
                                  <td><span class="badge badge-danger">{{ $data->uci }}</span> </td> 
                                </tr>
                                @if($data->uci=='yes')
                                <tr>
                                  <td>UCI NUMBER:</td>
                                  <td>{{ $data->uci_number }}</td> 
                                </tr>
                                @endif

                                <tr>
                                  <td>Do you have a ULN number (10 Digits)?</td>
                                  <td><span class="badge badge-danger">{{ $data->uln }}</span></td>
                                </tr>

                                @if($data->uln=='yes')
                                <tr>
                                  <td>ULN NUMBER:</td>
                                  <td>{{ $data->uln_number }}</td> 
                                </tr>
                                @endif

                                <tr>
                                  <td>Are you retaking these exams?</td>
                                  <td><span class="badge badge-danger">{{ $data->retaking_exams }}</span></td> 
                                </tr>
                                @if( $data->retaking_exams == 'yes')
                                <tr>
                                  <td>Please specify which exams you are retaking.</td>
                                  <td>{{ $data->retaking_exams_name }}</td> 
                                </tr>

                                @endif

                                <tr>
                                  <td>Are you caring forward your practical endorsement /course work/ spoken/ or any other assessment?</td>
                                  <td><span class="badge badge-danger">{{ $data->caring_forwad }}</span></td> 
                                </tr>
                                @if($data->caring_forwad=='yes')
                                <tr>
                                  <td>Caring forwad Details</td>
                                  <td>{{$data->caring_forwad_details}}</td> 
                                </tr>
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
                                  <td>If you are not the candidate but the person responsible for the candidate please tell us the relationship.</td>
                                  <td>{{ $data->relationship }}</td> 
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
                    <h4 class="card-title text-warning">SPECIAL ARRANGEMENTS AND NEEDS</h4>
                    <div class="row">
                      <div class="col-md-12 grid-margin stretch-card">
                      
                           <table class="table table-hover">
                           
                              <tbody>
                                <tr>
                                  <td>Do you require special access requirements during your exam?</td>
                                  <td><span class="badge badge-danger">{{ $data->special_acces }}</span></td> 
                                </tr>
                                @if($data->special_acces=='yes')
                                <tr>
                                  <td>Evidence</td>
                                  <td><span class="badge badge-danger">{{ $data->special_acces_evidence }}</span></td> 
                                </tr>
                                @endif
                                 <tr>
                                  <td>Do you suffer from any mental conditions such as high levels of anxiety?</td>
                                  <td><span class="badge badge-danger">{{ $data->mental_conditions }}</span></td> 
                                </tr>
                                @if($data->mental_conditions == 'yes')
                                <tr>
                                  <td>Details</td>
                                  <td><span class="badge badge-danger">{{ $data->mental_condition_details }}</span></td> 
                                </tr>
                                @endif

                                 <tr>
                                  <td>Do you have any conditions or disability?</td>
                                  <td><span class="badge badge-danger">{{ $data->condition_disability }} </span></td> 
                                </tr>
                                @if($data->condition_disability=='yes')
                                 <tr>
                                  <td> conditions or disability details</td>
                                  <td><span class="badge badge-danger">{{ $data->condition_disability_detail }} </span></td> 
                                 </tr>
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
                    <h4 class="card-title text-warning">Payment Information</h4>
                    <div class="row">
                      <div class="col-md-12 grid-margin stretch-card">
                      
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Total Amount</th>
                                  <th>Booking ID</th>
                                  <th>Exam Type</th>
                                  <th>Paid By</th>
                                  <th>Transection ID</th>
                                 
                                </tr>
                              </thead>
                              <tbody>
                                
                                <tr>
                                  <td>£ {{ $data->total_amount }}</td>
                                  <td>{{ $data->booking_id }}</td> 
                                  <td class="text-danger">{{ $data->main_exam_type }}</td>
                                  <td class="text-danger">{{ $data->payment_option }}</td>
                                  <td>{{ $data->transection_id }}</td>
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
