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
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Ucas</h1>
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
										<li class="breadcrumb-item text-muted">Ucas</li>
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
								
							
								
								<div class="card card-flush pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2 class="fw-bolder">Ucas Booking Details</h2>
													</div>
													<!--begin::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
													  
														<a href="{{ url('admin/ucasbooking/confirmexam/'.$data->id) }}" class="btn btn-light-primary" style="margin-left:5px;margin-right:5px;">Confirm Exam booking</a>
														
														
														
														
														
														<a href="{{ url('admin/ucasbooking/export/'.$data->id) }}" class="btn btn-light-primary" style="margin-left:5px;margin-right:5px;">Export PDF</a>
												
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Options-->
													<div id="kt_create_new_payment_method">
														<!--begin::Option-->
														<div class="py-1">
															<!--begin::Header-->
															<div class="py-3 d-flex flex-stack flex-wrap">
																<!--begin::Toggle-->
																<div class="d-flex align-items-center collapsible toggle" data-bs-toggle="collapse" data-bs-target="#">
																	<!--begin::Arrow-->
																	<!--end::Arrow-->
																	<!--begin::Icon-->
																	<div class="symbol symbol-40px me-3">
																		<div class="symbol-label bg-light">
																			<img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px" alt="">
																		</div>
																	</div>
																	<!--end::Icon-->
																	<!--begin::Summary-->
																	<div class="me-3">
																		<div class="d-flex align-items-center fw-bolder" style="font-size: 14px">Exam Type:
																		<div class="badge badge-light-primary ms-5">Ucas Mock Exams</div>
																		</div>
																			<div class="d-flex align-items-center fw-bolder" style="margin:5px 0px !important;font-size: 14px;
">Booking ID:
																		<div class="badge badge-light-primary ms-5">{{ $data->ucas_booking_id }}</div>
																		</div>
																		<div class="text-gray-400">Created At: {{ $data->created_at->format('d-M-Y') }}</div>
																	</div>
																	<!--end::Summary-->
																</div>
																<!--end::Toggle-->
																<!--begin::Input-->
																<div class="d-flex my-3 ms-9">
																	<!--begin::Radio-->
																	
																	<!--end::Radio-->
																</div>
																<!--end::Input-->
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div id="kt_create_new_payment_method_1" class="collapse show fs-6 ps-10">
																<!--begin::Row-->
																<div class="row py-5">
																
																		<div class="card-body" style="padding-left:0px !important;">
														    
														
														<div class="col-md-6 row" id="confimexambooking_date_section" style="display:none">
															<div class="col-md-6 mt-5 ">
																<label>Exam Booking Date</label>
																<input type="date" id="bookingsubmitdate" class="form-control" name="date" placeholder="Exam Booking Date" value="{{$data->exambookingbyadmin_date}}">

																<span style="color: green;" id="bookingsubmitdate_success"></span>
																<span  style="color: red;" id="bookingsubmitdate_error"></span>
															</div>
															<div class="col-md-2 mt-5">
																<button style="margin-top:20px;color: white; border-radius: 12px;" type="button" onclick="bookingsubmitcandidatenumber()" class="btn-sm btn-success" style="color:#fff">Update</button>
															</div>
															<div class="col-md-2 mt-5">
																<button style="margin-top:20px;color: white; border-radius: 12px;" type="button" onclick="canclesubmitcandidatenumber()" class="btn-sm btn-warning" style="color:#fff">Cancel</button>
															</div>
														</div>
									
																	<div class="col-md-6">
																	@if($data->main_exam_type=='AAT')	
																	<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">			AAT Registration Number</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">	{{ $data->acca_registration_num }}</div>
																			<!--end::Value-->
																		</div>
																		@endif
																																			@if($data->main_exam_type=='ACCA')	
																	<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">			ACCA Registration Number</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">	{{ $data->acca_registration_num }}</div>
																			<!--end::Value-->
																		</div>
																		@endif
																		
																		
																		<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">First Name</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">{{ $data->first_name }}</div>
																			<!--end::Value-->
																		</div>
															
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">Middle Name</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">{{ $data->middle_name }}</div>
																			<!--end::Value-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">Last Name</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">{{ $data->last_name }}</div>
																			<!--end::Value-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">Eamil</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">{{ $data->email }}</div>
																			<!--end::Value-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">Phone</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">{{ $data->phone }}</div>
																			<!--end::Value-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">Gender</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">{{ $data->gender }}</div>
																			<!--end::Value-->
																		</div>
																		<!--end::Item-->
																	</div>
																	<!--end::Row-->
																	<!--begin::Row-->
																	<div class="col-md-6">
																		<!--begin::Item-->
																		<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">Contact Number</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">{{ $data->emergency_contact_number }}</div>
																			<!--end::Value-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">Address Line 1:</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">{{ $data->address_line_one }}</div>
																			<!--end::Value-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">Address Line 2:</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">
																				<a href="#" class="text-gray-900 text-hover-primary">{{ $data->address_line_two }}</a>
																			</div>
																			<!--end::Value-->
																		</div>
																		
																			<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">PostCode:</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">
																				<a href="#" class="text-gray-900 text-hover-primary">{{ $data->post_code }}</a>
																			</div>
																			<!--end::Value-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">City</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">{{ $data->city }}
																			<div class="symbol symbol-20px symbol-circle ms-2">
																				
																			</div></div>
																			<!--end::Value-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">Date of Birth:</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">{{ $data->date_of_birth }}
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Double-check.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-success">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24"></polygon>
																						<path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002)"></path>
																						<path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002)"></path>
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon--></div>
																			<!--end::Value-->
																		</div>
																		<!--end::Item-->
																	</div>
																	<div class="offset-8 col-md-2 mt-5">
																	   	<button type="button" onclick="onladbasicoption()" class="btn btn-primary">Edit</button> 
																	</div>
																	<!--end::Row-->
																</div>
																<!--end::Row-->
															</div>
															<!--end::Body-->
														</div>
													
													
													</div>
													<!--end::Options-->
												</div>
												<!--end::Card body-->
											</div>
								<!--begin::Row-->
									<div class="row g-5 g-xxl-8">
									<!--begin::Col-->
									<div class="col-xl-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5 row">
													
												</div>
												<!--end::Header-->
												<!--begin::Post-->
												<div class="mb-7">
														<div class="card">
														<div class="card-body" id="basic_edit_option" style="display: none">
															


															
															<div class="col-md-6">
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">First Name:</div>
																	</div>
																	<div class="col-md-6">

																		<input type="text" class="form-control" id="first_name" name="first_name" value="{{ $data->first_name }}">
																			<input type="hidden" id="id" name="id" value="{{ $data->id }}">
																		
																	</div>
																<!--end::Col-->
																</div>

																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">Middle Name:</div>
																	</div>
																	<div class="col-md-6">

																		<input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ $data->middle_name }}">
																		
																	</div>
																<!--end::Col-->
																</div>
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">Last Name:</div>
																	</div>
																	<div class="col-md-6">

																		<input type="text" class="form-control" id="last_name" name="last_name" value="{{ $data->last_name }}">
																		
																	</div>
																<!--end::Col-->
																</div>
																
																	<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">Date of Birth:</div>
																	</div>
																	<div class="col-md-6">
																		<input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $data->date_of_birth }}">
																	</div>
																<!--end::Col-->
																</div>
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">Address Line 1:</div>
																	</div>
																	<div class="col-md-6">
																		<input type="text" class="form-control" id="address_line_one" name="address_line_one" value="{{ $data->address_line_one }}">
																		
																	</div>
																<!--end::Col-->
																</div>
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">Emergency Contact Number:</div>
																	</div>
																	<div class="col-md-6">

																		<input type="text" class="form-control" id="emergency_contact_number" name="emergency_contact_number" value="{{ $data->emergency_contact_number }}">
																		
																	</div>
																	</div>
																<!--end::Col-->
															
																
															</div>
															<div class="col-md-6">
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">Email:</div>
																	</div>
																	<div class="col-md-6">

																		<input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}">
																		
																	</div>
																<!--end::Col-->
																</div>
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">Phone:</div>
																	</div>
																	<div class="col-md-6">

																		<input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}">
																		
																	</div>
																<!--end::Col-->
																</div>
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">Postcode:</div>
																	</div>
																	<div class="col-md-6">

																		<input type="text" class="form-control" id="post_code" name="post_code" value="{{ $data->post_code }}">
																		
																	</div>
																<!--end::Col-->
																</div>
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">City:</div>
																	</div>
																	<div class="col-md-6">

																		<input type="text" class="form-control" id="city" name="city" value="{{ $data->city }}">
																		
																	</div>
																<!--end::Col-->
																</div>
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">Address Line 2:</div>
																	</div>
																	<div class="col-md-6">

																		<input type="text" class="form-control" id="address_line_two" name="address_line_two" value="{{ $data->address_line_two }}">
																		
																	</div>
																
																<!--end::Col-->
																</div>
																	<div class="row mb-8">
																		<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">Gender</div>
																	</div>
																	<div class="col-md-6">

																		<select  class="form-control" id="gender" name="gender" >
																		    <option value="Male" @if($data->gender=="Male") selected @endif>Male</option>
																		    <option value="Female" @if($data->gender=="Female") selected @endif>Female</option>
																		</select>
																		
																	</div>
																</div>
																<div class="row mb-8">
																	<div class="col-md-10">
																		<span id="success_message_basic_information" style="color: green;"></span>
																	</div>
																</div>
																<div class="row mb-8">
																	<div class="card-footer d-flex justify-content-end py-6">
															
																	<button onclick="basicinformation_update()" type="button" class="btn btn-primary" style="margin: 0px 10px">Submit</button>
																	<button type="button" onclick="cancelbasicoption()" class="btn btn-warning">Cancel</button>
																</div>
																</div>
																
															</div>
															
															
														</div>
													
														
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
								</div>
								<div class="row g-5 g-xxl-8">
								    <div class="col-md-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
												</div>
												  <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Subject Details</h4>
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


									           
												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
												
											</div>
											<!--end::Body-->
										</div>
									</div>
							
									<div class="col-md-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8" id="TERMS_AND_CONDITION_section">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													
												</div>
												   <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Other Includes</h4>
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
												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
												<div class="card-footer d-flex justify-content-end py-6">
															
													<button type="button" onclick="TERMS_AND_CONDITIONS_edit()" class="btn btn-primary">Edit</button>
												</div>
												
											</div>
											<!--end::Body-->
										</div>
										<div class="card mb-5 mb-xxl-8" id="TERMS_AND_CONDITION_edit_section" style="display:none">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													
												</div>
												   <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">TERMS AND CONDITIONS</h4>
									                    <div class="row">
									                    
									                       	<div class="col-lg-12 mt-2 fv-row">
								                              <label for="" class="form-label">Relation</label>
								                              <input type="text"  name="relationship" id="relationship" class="form-control form-control-lg " aria-describedby="passwordHelpBlock" value="@if($data) {{ $data->relationship }} @endif">
								                            </div>
								                            <div class="col-lg-12 mt-2 fv-row">
								                              <label for="UCI" class="form-label">Name</label>
								                              <input type="text"  name="relation_name" id="relation_name" class="form-control form-control-lg " aria-describedby="passwordHelpBlock" value="@if($data) {{ $data->relation_name }} @endif">
								                            </div>
								                            <div class="col-lg-12 mt-2 fv-row">
								                              <label for="UCI" class="form-label">Date</label>
								                              <input type="text"  name="todays_date" id="todays_date" class="form-control form-control-lg " aria-describedby="passwordHelpBlock" value="@if($data) {{ $data->todays_date }} @endif">
								                            </div>
									                    </div>
									                  </div>
									                </div>
									              </div>
												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
												<span style="color: green;" id="success_message_terms_and_conditon_update"></span>
												<div class="card-footer d-flex justify-content-end py-6">
													<button onclick="TERMS_AND_CONDITIONS_Update()" type="button" class="btn btn-primary" style="margin: 0px 10px">Update</button>
													<button type="button" onclick="TERMS_AND_CONDITIONS_cancel()" class="btn btn-warning">Cancel</button>
												</div>
												
											</div>
											<!--end::Body-->
										</div>
									</div>
										
									<div class="col-md-4">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::User-->
													<div class="d-flex align-items-center flex-grow-1">
														<!--begin::Avatar-->
														
														<!--end::Avatar-->
														<!--begin::Info-->
														<div class="d-flex flex-column">
															<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Photo ID</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::User-->
													<!--begin::Menu-->
													<div class="my-0">
													</div>
													<!--end::Menu-->
												</div>
												<!--end::Header-->
												<!--begin::Post-->
													<div class="mb-7">
													<!--begin::Text-->
													<div class="text-gray-800 mb-5">
													  @php
													  
						                                $myimage=pathinfo($data->photo_id, PATHINFO_EXTENSION);
						                                $myrecent=pathinfo($data->recent_photo, PATHINFO_EXTENSION);
						
													  @endphp
													  @if($myimage=='pdf')
													  <p>PDF file upload.Please click here.</p>
													    <a target="__blank" href="{{ url('updatecore/public/'.$data->photo_id) }}" class="btn btn-warning">View</a>
													  @else
														<img class="mainimg" src="{{ asset('/'.$data->photo_id) }}">
														
														@endif
														
														
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Post-->
												<!--begin::Separator-->
												@if($myimage !='pdf')
												<a class="badge badge-danger" href="{{ asset('/'.$data->photo_id) }}" target="_blank" download >Download Image</a>
												@endif
												
												<div class="separator mb-4"></div>

												
											</div>
											<!--end::Body-->
										</div>
									</div>
									<div class="col-md-4">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::User-->
													<div class="d-flex align-items-center flex-grow-1">
														<!--begin::Avatar-->
														
														<!--end::Avatar-->
														<!--begin::Info-->
														<div class="d-flex flex-column">
															<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Recent Photo</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::User-->
													<!--begin::Menu-->
													<div class="my-0">
													</div>
													<!--end::Menu-->
												</div>
												<!--end::Header-->
												<!--begin::Post-->
											<div class="mb-7">
													<!--begin::Text-->
													<div class="text-gray-800 mb-5">
													     @if($myrecent=='pdf')
													     
													       <p>PDF file upload.Please click here.</p>
													    <a target="__blank" href="{{ url('updatecore/public/'.$data->recent_photo) }}" class="btn btn-warning">View</a>
													     
													     @else
														<img class="mainimg" src="{{ asset('/'.$data->recent_photo) }}">
														@endif
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Post-->
												<!--begin::Separator-->
												@if($myrecent !='pdf')
													<a class="badge badge-danger" href="{{ asset('/'.$data->recent_photo) }}" target="_blank" download >Download Image</a>
													@endif
												<div class="separator mb-4"></div>
												
											</div>
											<!--end::Body-->
										</div>
									</div>
									<div class="col-md-4">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::User-->
													<div class="d-flex align-items-center flex-grow-1">
														<!--begin::Avatar-->
														
														<!--end::Avatar-->
														<!--begin::Info-->
														<div class="d-flex flex-column">
															<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Signature</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::User-->
													<!--begin::Menu-->
													<div class="my-0">
													</div>
													<!--end::Menu-->
												</div>
												<!--end::Header-->
												<!--begin::Post-->
												<div class="mb-7">
													<!--begin::Text-->
													<div class="text-gray-800 mb-5">
														<img class="mainimg" src="{{ asset('/'.$data->signature) }}">
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
											
											</div>
											<!--end::Body-->
										</div>
									</div>
									
									<!--end::Col-->
									
									<!--begin::Col-->
									<div class="col-md-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
												</div>
												  <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Payment Details</h4>
									                    <div class="row">
									                      <div class="col-md-12 grid-margin stretch-card">
								                            <table class="table table-hover">
								                              <thead>
								                                <tr>
								                                  <th>Paid Status</th>
								                                  <th>Total Amount</th>
								                                  <th>Paid Amount</th>
								                   
								                                  <th>Booking ID</th>
								                   
								                                  <th>Paid By</th>
								                                  <th>Transection ID</th>
								                                
								                                 
								                                </tr>
								                              </thead>
								                              @php
								                              	$allwallet=App\Models\Wallet::where('order_id',$data->ucas_booking_id)->first();
								                              	$total_amount=0;
								                              @endphp
								                          
								                              <tbody>
								                                <tr>
								                                <td>
								                                	@if( $data->is_paid==0 ) 
								                                	<span class="badge badge-warning">Unpaid</span> 
								                                	@elseif( $data->is_paid==1 ) 
								                                	<span class="badge badge-success">Paid</span>  
								                                    @endif
								                            </td>
								                                  <td>
								                                  	£ {{ $data->total_subject_amount + $data->review_statement_amount + $data->doucment_check_amount }}
								                                  </td>
								                                  <td>
								                                  	@if($allwallet ) £ {{ $allwallet->amount }} @else
								                                  	<span class="badge badge-danger"> Not Yet </span>  
								                                  	 @endif
								                                  </td>
								                                  
								                                  <td>{{ $data->ucas_booking_id }}</td> 
								                      
								                                  <td class="text-danger">@if($data->payment_option !=null) {{ $data->payment_option }} @else  <span class="badge badge-danger"> Not Yet </span>   @endif</td>
								                                  <td>@if($data->transaction_id!=null) 
								                                  	{{ $data->transaction_id }} @else  
								                                  	<span class="badge badge-danger"> Not Yet </span> 
								                                  @endif</td>
								                                  </tr>
								                              </tbody>
								                              <tfoot class="mt-5">
								                              	<tr class="mt-5">
								                              	
								                              		<td></td>
								                              		<td></td>
								                              		<td></td>
								                              		<td></td>
								                              		<td></td>
								                              	
								                              		<td><a style="cursor: pointer;" onclick="addpayment()"><span class="badge badge-success">Add Payment</span></a></td>
								                              	</tr>
								                              </tfoot>
								                            </table>
									                      </div>
									                    </div>
									                  </div>
									                </div>
									              </div>


									            <div class="col-md-8 grid-margin stretch-card" id="main_payment" style="display: none">
									                <div class="card">
									              
									                	  <form action="{{ url('/admin/ucas/payment-update') }}" method="post">
									                	  	@csrf
															  <div class="form-group">
														
															    <input type="hidden" name="booking_id" value="{{ $data->ucas_booking_id }}">
															    <input type="hidden" name="id" value="{{ $data->id }}">
															    <input type="hidden" name="total_amount" value="{{ $data->total_amount }}">
															  </div>
															  <div class="form-group">
															    <label for="exampleInputPassword1">Paid Amount</label>
															    <input type="text" class="form-control" name="paid_amount" placeholder="Paid Amount">
															    @error('paid_amount')
																<div style="color: red">{{ $message }}</div>
																@enderror
															  </div>
															  <div class="form-group">
															    <label for="exampleInputPassword1">Paid By</label>
															    <select class="form-select form-select-lg form-select-solid" name="paid_by">
															    	<option value="Cash">Cash Payment</option>
															    	<option value="Bank">Bank Transfer</option>
															    	<option value="Card">Stripe Payment</option>
															    </select>
															  </div>
															   <div class="form-group">
															    <label for="exampleInputPassword1">Transection Id</label>
															    <input type="text" class="form-control" name="transaction_id" placeholder="Transection Id">
															  </div>
															  <button type="submit" class="btn btn-primary">Submit</button>
															</form>
														
									                </div>
									             </div>
												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
												
											</div>
											<!--end::Body-->
										</div>
									</div>
									<div class="col-md-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
												</div>
												   <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Transection History</h4>
									                    <div class="row">
									                      <div class="col-md-12 grid-margin stretch-card">
								                            <table class="table table-hover">
								                              <thead>
								                                <tr>
								                                  <th>Booking ID</th>
								                                  <th>Paid Amount</th>
								                                  <th>Date & Time</th>
								                                  <th>Transection ID</th>
								                                  <th>Paid By</th>
								                                </tr>
								                              </thead>
								                              @php
								                              	$allwallets=App\Models\Wallet::where('order_id',$data->ucas_booking_id)->get();
								                              @endphp
								                              <tbody>
								                              	@foreach($allwallets as $mainwallets)
									                                <tr>
									                                	<td>{{ $mainwallets->order_id }}</td>
									                                    <td>£{{ $mainwallets->amount }}</td>
									                                    <td>{{ $mainwallets->date }}</td>
									                                    <td>{{ $mainwallets->transection_id }}</td>
									                                    <td>{{ $mainwallets->paid_by }}</td>
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
												
											</div>
											<!--end::Body-->
										</div>
									</div>
									<!--end::Col-->
									<div class="col-md-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													
												</div>
												   <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning"></h4>
									                    <span id="success_message_paid_status_update"></span>
									                    <div class="row">
									                    	<form>
										                      <div class="col-md-8">
																  <div class="form-group">
																    <label for="exampleInputEmail1">Payment Status</label>
																   	<select id="paid_status" class="form-control form-select">
																   		<option value="0" @if($data->is_paid_verify==0) selected @endif>Pending</option>
																   		<option value="1" @if($data->is_paid_verify==1) selected @endif>Approve</option>
																   		<option value="2" @if($data->is_paid_verify==2) selected @endif>Reject</option>
																   	</select>
																   	
																  </div>
																</div>
																<div class="col-md-8">
																  <div class="form-group">
																    <label for="exampleInputEmail1">Notes</label>
																   	<textarea class="form-control" name="notes" id="notes" placeholder="Notes">{{ $data->notes }}</textarea>
																   	<span style="color:green;" id="paid_status_success"></span>
																  </div>
																</div>
																<div class="col-md-8 mt-5">
																  <button onclick="paidstatusupdate()" type="button" class="btn btn-primary">update</button>
										                       </div>
									                      </form>
									                    </div>
									                  </div>
									                </div>
									              </div>
												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
												
											</div>
											<!--end::Body-->
										</div>
									</div>
								</div>
							
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					
<script>
		function onladbasicoption() {

			$("#basic_option_contents").hide();
			$("#basic_edit_option").show();

			
		}

		function cancelbasicoption() {

			$("#basic_option_contents").show();
			$("#basic_edit_option").hide();

			
		}
</script>
  <script>
  	function basicinformation_update(){
          
		$("#success_message_basic_information").empty();
  		var id=$("#id").val();
  		var first_name=$("#first_name").val();
  		var middle_name=$("#middle_name").val();
  		var last_name=$("#last_name").val();
  		var city=$("#city").val();
  		var phone=$("#phone").val();
  		var gender=$("#gender").val();
  		var email=$("#email").val();
  		var address_line_one=$("#address_line_one").val();
  		var address_line_two=$("#address_line_two").val();
  		var date_of_birth=$("#date_of_birth").val();
  		var post_code=$("#post_code").val();
  		var emergency_contact_number=$("#emergency_contact_number").val();

  		$.ajax({
	             url: "{{  url('/admin/ucas/basicinformation-update/') }}",
	             type:"GET",
	             data:{
	             	'id':id,
	             	'first_name':first_name,
	             	'middle_name':middle_name,
	             	'last_name':last_name,
	             	'city':city,
	             	'phone':phone,
	             	'email':email,
	             	'address_line_one':address_line_one,
	             	'address_line_two':address_line_two,
	             	'date_of_birth':date_of_birth,
	             	'gender':gender,
	             	'post_code':post_code,
	             	'emergency_contact_number':emergency_contact_number,
	             },
	             success:function(data) {
	                	
	                	 $("#success_message_basic_information").html(data +'<br>')
	                	console.log(data);
	                    
	                }
	        });
  	
  	}
  </script>
  
  	<script>
		function addpayment(){
		   
			$("#main_payment").show();
			$("#payment_details_option").hide();
		}
	</script>
<script>
            const myDatePicker = MCDatepicker.create({ 
                el: '#date_of_birth',
                dateFormat: 'DD-MMM-YYYY',
            });
        </script>
        
          <script>
  	function paidstatusupdate(){
  	    
  	    
  		var id=$("#id").val();
  		var paid_status = $("#paid_status").val();
  		var notes = $("#notes").val();
  		$("#paid_status_success").empty();
		$.ajax({
             url: "{{  url('admin/get/ucasbooking/updateapaymentstatus/') }}",
             type:"GET",
             data:{
             	'id':id,
             	'paid_status':paid_status,
             	'notes':notes,
             },
             success:function(data){
                	 $("#paid_status_success").html("update success");
                }
        });

  	}
  	
  </script>
@endsection