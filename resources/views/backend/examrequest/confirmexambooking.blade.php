@extends('layouts.backend')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend') }}/datepicker/mc-calendar.min.css" />
<script src="{{ asset('frontend') }}/datepicker/mc-calendar.min.js"></script>
<style>
	img.mainimg {
    height: 300px;
    width: 100%;
}
.form-control {
    padding: 5px 5px;
   
}

.form-control {
    
    margin-bottom: 9px !important;
}
.form-select {
   
    line-height: 1 !important;
}
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Overview</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-200 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">exam booking</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">details</li>
										<!--end::Item-->
										<!--begin::Item-->
										
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container">
								<!--begin::Navbar-->
							
								<!--end::Navbar-->
								<!--begin::Row-->
								<div class="row g-5 g-xxl-8">
									<!--begin::Col-->
									<div class="col-xl-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
											
												<div class="mb-7">
														<div class="card">
														<div class="card-body">
															<div class="col-md-6 d-flex flex-grow-1" style="margin-bottom: 10px;">
																<div class="d-flex flex-column">
																	<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Exam Type: {{ $data->main_exam_type }}</a>
																	<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Booking ID: <span class="badge badge-success">{{ $data->booking_id }}</span></a>
																	<span class="text-gray-400 fw-bold" style="color:black !important;">Exam booking date: {{ $data->created_at->format('d-M-Y') }}</span>
																</div>
															</div>
															<div class="col-md-6 d-flex flex-grow-1" style="margin-bottom: 10px;">
																<div class="d-flex flex-column">
																	<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Name: {{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}</a>
																	<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Eamil: <span class="badge badge-success">{{ $data->email }}</span></a>
																	<span class="text-gray-400 fw-bold" style="color:black !important;">Phone: {{ $data->phone }}</span>
																				
																</div>
															</div>
															<br>
													
														@if($data->main_exam_type =='ACCA' || $data->main_exam_type =='AAT' || $data->main_exam_type == 'Functional Skills')
														<input type="hidden" name="id" id="id" value="{{ $data->id }}">
														<div class="col-md-12 mt-2 row" style="margin-bottom: 10px">
														</div>
														@else

														<div class="col-md-12 mt-2 row" style="margin-bottom: 10px">
															<div class="col-md-12">
																<label>Candidate Number:</label>
															</div>
															@php
																 $gcese_candidate=App\Models\ExamRequest::where('main_exam_type','GCSE')->orderBy('Candidate_number','DESC')->first();

																 $alevel_candidate=App\Models\ExamRequest::where('main_exam_type','A Level')->orderBy('Candidate_number','DESC')->first();

															@endphp
															<div class="col-md-3">
																<input type="hidden" name="id" id="id" value="{{ $data->id }}">
																<input placeholder="Enter Candidate Number" type="text" name="main_candidate_number" class="form-control main_candidate_number" value="{{$data->Candidate_number ??'' }}">
																<span id="success_message_candidate" style="color: red;"></span>


																<span style="color: #000;margin-top: 5px;">Available Candidate Number- @if($data->main_exam_type=='GCSE')
																	000{{ $gcese_candidate->Candidate_number + 0001}} @endif @if($data->main_exam_type=='A Level'){{ $alevel_candidate->Candidate_number + 0001}} @endif</span>
															</div>
															<div class="col-md-2"><button type="button" onclick="submitcandidatenumber()" class="btn-sm btn-success" style="color: white; border-radius: 12px;">Update</button></div>
															</div>
														</div>
														@endif


													
														
													
														
														<!--end::Card footer-->
													</div>
													<!--begin::Text-->
												</div>
												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
												
											</div>
											<!--end::Body-->
										</div>
									</div>
								
									<div class="col-xl-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-xxl-8" id="subject_list_section">
											<!--begin::Body-->
											<div class="card-body pb-0">
												   <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Subject Details</h4>
									                    <div class="row">
									                      <div class="col-md-12 grid-margin stretch-card">
        								                            @if($data->main_exam_type=='GCSE' || $data->main_exam_type=='A Level' ||  $data->main_exam_type=='IGCSE' )
								                            <table class="table table-hover" style="font-size: 16px">
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

								                        	@if($data->main_exam_type=='AAT')
								                            <table class="table table-hover" style="font-size: 16px">
								                              <thead>
								                                <tr>
								                                  <th>Exam Board</th>
								                                  <th>Branch</th>
								                                  <th>Exam Level</th>
								                                  <th>Subject</th>
								                                  <th>Exam Type</th>
								                                  <th>Fees</th>
								                                  <th>Date </th>
								                                  <th>Time</th>
								                                </tr>
								                              </thead>
								                              <tbody>
								                                @foreach(json_decode($data->exam_information) as $exam)
								                                <tr>
								                                  <td>{{$exam->exam_board}}</td>
								                                  <td>{{ $exam->exam_series }}</td>
								                                  <td>{{$exam->type}}</td> 
								                                  @php
								                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
								                                  @endphp
								                                  <td class="text-danger">{{$subject->subject_name}}</td>
								                                  <td class="text-danger">{{ $exam->option_code }}</td>
								                                 
								                                   <td>£ {{ $exam->fees }}</td>
								                                   <td>  {{ \Carbon\Carbon::parse($exam->exam_date)->format('d-m-Y')}}</td>
								                                   <td>{{ $exam->start_exam_time }}</td>
								                                </tr>
								                                @endforeach
								                                
								                              </tbody>
								                            </table>
								                        	@endif

								                        	@if($data->main_exam_type=='ACCA')
								                            <table class="table table-hover" style="font-size: 16px">
								                              <thead>
								                                <tr>
								                                  <th>Exam Board</th>
								                                  <th>Exam Level</th>
								                                  <th>Subject</th>
								                                  <th>Exam Branch</th>
								                                  <th>Fees</th>
								                                  <th>Date </th>
								                                  <th>Time</th>
								                                </tr>
								                              </thead>
								                              <tbody>
								                                @foreach(json_decode($data->exam_information) as $exam)
								                                <tr>
								                                  <td>{{$exam->exam_board}}</td>
								                                  <td>{{$exam->type}}</td> 
								                                  @php
								                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
								                                  @endphp
								                                  <td class="text-danger">{{$subject->subject_name}}</td>
								                                  <td class="text-danger">{{ $exam->option_code }}</td>
								                                 
								                                   <td>£ {{ $exam->fees }}</td>
								                                    <td>  {{ \Carbon\Carbon::parse($exam->exam_date)->format('d-m-Y')}}</td>
								                                   <td>{{ $exam->start_exam_time }}</td>
								                                   
								                                </tr>
								                                @endforeach
								                                
								                              </tbody>
								                            </table>
								                        	@endif

								                        	@if($data->main_exam_type=='Functional Skills')
								                            <table class="table table-hover" style="font-size: 16px">
								                              <thead>
								                                <tr>
								                                  <th>Exam Board</th>
								                                  <th>Exam Branch</th>
								                                  <th>Exam Level</th>
								                                  <th>Subject</th>
								                                  <th>Exam Type</th>
								                                  <th>Fees</th>
								                                  <th>Date </th>
								                                  <th>Time</th>
								                                </tr>
								                              </thead>
								                              <tbody>
								                                @foreach(json_decode($data->exam_information) as $exam)
								                                <tr>
								                                  <td>{{$exam->exam_board}}</td>
								                                  <td>{{$exam->exam_series}}</td> 
								                                  <td>{{$exam->type}}</td> 
								                                  @php
								                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
								                                  @endphp
								                                  <td class="text-danger">@if( $subject){{$subject->subject_name}} @endif</td>
								                                  <td class="text-danger">{{ $exam->option_code }}</td>
								                                 
								                                   <td>£ {{ $exam->fees }}</td>
								                                     <td>  {{ \Carbon\Carbon::parse($exam->exam_date)->format('d-m-Y')}}</td>
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
												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
												<div class="card-footer d-flex justify-content-end py-6">
															
													
												</div>
												
											</div>
											<!--end::Body-->
										</div>
										<div class="card mb-5 mb-xxl-8" id="subjectupdate_section"  @if (Session::has('success')) @else  style="display:none"  @endif>
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													
												</div>
												<form action="{{ url('admin/get/updatesubject/') }}" method="post">
													@csrf

												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
												<div class="card-footer d-flex justify-content-end py-6">
															
													<button type="submit"  class="btn btn-success" style="margin:0px 20px">Submit</button>
													<button type="button" onclick="openeditsubject_cancel()" class="btn btn-primary">Cancel</button>
												</div>
											</form>
												
											</div>
											<!--end::Body-->
										</div>
									</div>
									<div class="col-xl-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-xxl-8" id="subject_list_section">
											<!--begin::Body-->
											<div class="card-body pb-0">
												   <div class="col-md-12 grid-margin stretch-card">
										<div class="card mb-5 mb-xxl-8" id="subjectupdate_section">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													
												</div>
												<form  class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ url('admin/candidate-confirm-exam/booking/'.$data->id) }}" method="post">
												    @csrf
												    
												    <input type="hidden" name="candidate_id" value="{{ $data->user_id }}">
												       <input type="hidden" name="booking_id" value="{{ $data->booking_id }}">
												       <input type="hidden" name="email" value="{{ $data->email }}">
												      
												       												       <input type="hidden" name="exam_id" value="{{ $data->id }}">
												    
											
													<!--begin::Heading-->
													<div class="mb-13 text-center">
														<!--begin::Title-->
														<h1 class="mb-3">Confirm Exam Booking</h1>
														<!--end::Title-->
														<!--begin::Description-->
														{{--
														<div class="text-gray-400 fw-bold fs-5">If you need more info, please check
														<a href="#" class="fw-bolder link-primary">Project Guidelines</a>.</div>
														--}}
														<!--end::Description-->
													</div>
													<!--end::Heading-->
													<!--begin::Input group-->
													<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
												
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row g-9 mb-8">
														<!--begin::Col-->
														<div class="col-md-6 fv-row">
															<label class="required fs-6 fw-bold mb-2">Exam Type</label>
															<select class="form-select form-select-solid"  name="exam_type">
																
																<option value="ACCA" @if($data->main_exam_type=='ACCA') selected @endif>ACCA</option>
																<option value="AAT"  @if($data->main_exam_type=='AAT') selected @endif>AAT</option>
																<option value="Functional Skills"  @if($data->main_exam_type=='Functional Skills') selected @endif>Functional Skills</option>
																
															</select>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-md-6 fv-row">
															<label class="required fs-6 fw-bold mb-2">Exam Date</label>
															<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="exam_date"  id="date_of_birth" required>
															<!--end::Input-->
														</div>
															<div class="col-md-6 fv-row">
															<label class="required fs-6 fw-bold mb-2">Exam Time</label>
															<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="exam_time" required value="11 am">
															<!--end::Input-->
														</div>
															<div class="col-md-6 fv-row">
															<label class="required fs-6 fw-bold mb-2">Exam Centre</label>
															<!--begin::Input-->
													<select class="form-select form-select-solid"  name="exam_branch">
																
																<option value="Forest Gate Branch 54 Upton Lane London E7 9LN">Forest Gate</option>
																<option value="Ilford Branch 269 Ilford Lane, Ilford IG1 2SD">Ilford Lane</option>
															
																
																	
															</select>
															<!--end::Input-->
														</div>
														
															<div class="col-md-12 fv-row">
															<label class="required fs-6 fw-bold mb-2">Subject</label>
															<!--begin::Input-->
													<select class="form-select form-select-solid"  name="subject">
									@foreach(json_decode($data->exam_information) as $exam)
									@php
								         $subject=App\Models\Subject::where('id',$exam->subject)->first();
								                                  @endphp
																<option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
																@endforeach
															
																
															</select>
															<!--end::Input-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="d-flex flex-column mb-8">
														<label class="fs-6 fw-bold mb-2">Details</label>
														<textarea class="form-control form-control-solid" rows="3" name="details" placeholder=" Details" required>Thank you for booking your {{ $data->main_exam_type}} Exam with ECL.Please find below your confirmation.
										
														</textarea>
													</div>
													
														<div class="d-flex flex-column mb-8">
														<label class="fs-6 fw-bold mb-2">Requirments</label>
														<textarea class="form-control form-control-solid" rows="3" name="requirments" placeholder=" Details" required>You must bring your ID (that was submitted with the registration form) and arrive 15
minutes before the exam start time.</textarea>
													</div>
													<div class="d-flex flex-column mb-8">
														<label class="fs-6 fw-bold mb-2">Rescheduling</label>
														<textarea class="form-control form-control-solid" rows="3" name="rescheduling" placeholder=" Details" required>Minimum of 2 working days notice, rescheduling fee: £30</textarea>
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-15 fv-row">
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack">
															<!--begin::Label-->
															<div class="fw-bold me-5">
																<label class="fs-6">Notifications</label>
																<div class="fs-7 text-gray-400">Allow Notifications by Phone or Email</div>
															</div>
															<!--end::Label-->
															<!--begin::Checkboxes-->
															<div class="d-flex align-items-center">
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-10">
																	<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked">
																	<span class="form-check-label fw-bold">Email</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone">
																	<span class="form-check-label fw-bold">Phone</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Checkboxes-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Input group-->
													
													<!--end::Actions-->
												<div>
												    
												</div>
												<div class="card-footer d-flex justify-content-end py-6">
															
													<button type="submit"  class="btn btn-success" style="margin:0px 20px">Submit</button>
													
												</div>
											</form>
												
											</div>
											<!--end::Body-->
										</div>
									</div>
							
									
									<!--end::Col-->
									<!--begin::Col-->
								
								
									
								</div>
							
							</div>
							<!--end::Container-->
						</div>
						<div class="col-xl-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-xxl-8" id="subject_list_section">
											<!--begin::Body-->
											<div class="card-body pb-0">
												   <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Confirm Details</h4>
									                    <div class="row">
									                      <div class="col-md-12 grid-margin stretch-card">
        								                            
								                            <table class="table table-hover" style="font-size: 16px">
								                              <thead>
								                                <tr>
								                                  <th>Branch</th>
								                                  <th>Subject</th>
								                                  <th>Date Time </th>
								                                  <th>Booking ID</th>
								                                  <th>Exam Type</th>
								                          
								                                  <th>Confirmation</th>
								                                </tr>
								                              </thead>
								                              <tbody>
								                                  @php
								                                  $maindata =App\Models\CandidateConfirmation::where('exam_id',$data->id)->get();
								                                  @endphp
								                                @foreach($maindata as $exam)
								                                <tr>
								                                  <td>{{$exam->exam_branch}}</td>
								                                  <td>{{$exam->subject}}</td>
								                                  <td>{{$exam->exam_date}}, {{$exam->exam_time}}</td>
								                                    <td>{{$exam->booking_id}}</td>
								                                 
								                                  <td class="text-danger">{{$exam->exam_type}}</td>
								                                  
								                                  <td><label class="badge badge-danger">{{ $exam->created_at }}</label></td>
								                                   
								                                </tr>
								                                @endforeach
								                                
								                              </tbody>
								                            </table>
								                        

								                       

								                        	

								                   
									                      </div>
									                    </div>
									                  </div>
									                </div>
									              </div>
												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
												<div class="card-footer d-flex justify-content-end py-6">
															
													
												</div>
												
											</div>
											<!--end::Body-->
										</div>
									
									</div>
						<!--end::Post-->
					</div>

<script>
            const myDatePicker = MCDatepicker.create({ 
                el: '#date_of_birth',
                dateFormat: 'DD-MMM-YYYY',
            });
        </script>
@endsection