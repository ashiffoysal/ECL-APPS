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
								
							
								
								<div class="card card-flush pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2 class="fw-bolder">Exam Booking Details</h2>
													</div>
													<!--begin::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
													     @if($data->main_exam_type=='AAT' || $data->main_exam_type=='ACCA' || $data->main_exam_type=='Functional Skills')
														<a href="{{ url('admin/candidate-confirm-exam/booking/'.$data->id) }}" class="btn btn-light-primary" style="margin-left:5px;margin-right:5px;">Confirm Exam booking</a>
														  @else
															<a href="{{ url('admin/candidate-gcse-alevel-igcse-confirmation/exambooking/'.$data->id) }}" class="btn btn-light-primary" style="margin-left:5px;margin-right:5px;">Confirm Exam booking</a>
															@endif
														
														
														
														
														<a href="{{ url('candidate/details/exports/'.$data->booking_id) }}" class="btn btn-light-primary" style="margin-left:5px;margin-right:5px;">Export PDF</a>
														<a href="{{ url('/admin/user/notify/'.$data->user_id) }}" class="btn btn-light-primary" style="margin-left:5px;margin-right:5px;">Notify Chats</a>
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
																		<div class="badge badge-light-primary ms-5">{{ $data->main_exam_type }}</div>
																		</div>
																			<div class="d-flex align-items-center fw-bolder" style="margin:5px 0px !important;font-size: 14px;
">Booking ID:
																		<div class="badge badge-light-primary ms-5">{{ $data->booking_id }}</div>
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
														    <form action="{{ url('admin/get/exmabooking/updatedate/') }}" method="get">
														        @csrf
														  
															<div class="col-md-6 mt-5 ">
																<label>Exam Booking Date</label>
																<input type="date" id="bookingsubmitdate" class="form-control" name="date" placeholder="Exam Booking Date" value="{{$data->exambookingbyadmin_date}}">

																<span style="color: green;" id="bookingsubmitdate_success"></span>
																<span  style="color: red;" id="bookingsubmitdate_error"></span>
															</div>
															<div class="col-md-2 mt-5">
															    {{--
																<button style="margin-top:20px;color: white; border-radius: 12px;" type="button" onclick="bookingsubmitcandidatenumber()" class="btn-sm btn-success" style="color:#fff">Update</button>
																--}}
																<button class="btn" type="submit"> Submit</button>
															</div>
															<div class="col-md-2 mt-5">
																<button style="margin-top:20px;color: white; border-radius: 12px;" type="button" onclick="canclesubmitcandidatenumber()" class="btn-sm btn-warning" style="color:#fff">Cancel</button>
															</div>
															 </form>
														</div>
														
														
														
														@if($data->main_exam_type =='ACCA' || $data->main_exam_type =='AS Level' || $data->main_exam_type =='AAT' || $data->main_exam_type == 'Functional Skills')
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
														@endif	<!--begin::Row-->
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
																			<div class="text-gray-800 fw-bold">{{ $data->address_line_1 }}</div>
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
																				<a href="#" class="text-gray-900 text-hover-primary">{{ $data->address_line_2 }}</a>
																			</div>
																			<!--end::Value-->
																		</div>
																		
																			<div class="d-flex mb-3">
																			<!--begin::Label-->
																			<div class="text-gray-400 fw-bold w-125px">PostCode:</div>
																			<!--end::Label-->
																			<!--begin::Value-->
																			<div class="text-gray-800 fw-bold">
																				<a href="#" class="text-gray-900 text-hover-primary">{{ $data->postcode }}</a>
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
														<!--end::Option-->
														<div class="separator separator-dashed"></div>
												
														<div class="separator separator-dashed"></div>
													
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
															

															@if($data->main_exam_type=='ACCA')
															<div class="col-md-10">
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">ACCA Registration Number:</div>
																	</div>
																	<div class="col-md-9">

																		<input type="text" class="form-control" id="acca_registration_num" name="acca_registration_num" value="{{ $data->acca_registration_num }}">
																		
																	</div>
																<!--end::Col-->
																</div>
															</div>
															@endif
															@if($data->main_exam_type=='AAT')
															<div class="col-md-10">
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">AAT Registration Number:</div>
																	</div>
																	<div class="col-md-9">

																		<input type="text" class="form-control" id="acca_registration_num" name="acca_registration_num" value="{{ $data->acca_registration_num }}">
																		
																	</div>
																<!--end::Col-->
																</div>
															</div>
															@endif

															
															<div class="col-md-6">
																<div class="row mb-8">
																<!--begin::Col-->
																	<div class="col-md-3">
																		<div class="fs-6 fw-bold mt-2 mb-3">First Name:</div>
																	</div>
																	<div class="col-md-6">

																		<input type="text" class="form-control" id="first_name" name="first_name" value="{{ $data->first_name }}">
																		
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
																		<input type="text" class="form-control" id="address_line_1" name="address_line_1" value="{{ $data->address_line_1 }}">
																		
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
																<!--end::Col-->
																</div>
																
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

																		<input type="text" class="form-control" id="postcode" name="postcode" value="{{ $data->postcode }}">
																		
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

																		<input type="text" class="form-control" id="address_line_2" name="address_line_2" value="{{ $data->address_line_2 }}">
																		
																	</div>
																<!--end::Col-->
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
									<div class="col-xl-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													
												</div>
												
												   <div class="col-md-12 grid-margin stretch-card">
									                <!-- edit start -->
									                <div class="card" id="edit_option_section" style="display: none;">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Edit Others Information</h4>
									                    <div class="row">
									                      <div class="col-md-12 grid-margin stretch-card">
									                      			@if($data->main_exam_type=='AAT' || $data->main_exam_type=='ACCA' || $data->main_exam_type=='Functional Skills')
									                              	
									                              	@else
									                      		<div class="row mb-8">
																	<div class="col-md-12">
																		<label>Has the candidate sat exams with us before? </label>
										                                  <div class="form-check" style="margin:10px 0px">
										                                    <input class="form-check-input has_a_candidate" id="has_a_candidate_no" type="radio" checked="checked" name="has_a_candidate" value="no" @if($data) @if($data->has_a_candidate=='no') checked="checked" @endif @endif>
										                                    <label class="form-check-label" for="has_a_candidate_no">
										                                     No
										                                    </label>
										                                  </div>
										                                  <div class="form-check" style="margin:10px 0px">
										                                    <input class="form-check-input" onchange="insertmybooking()" type="radio" id="has_a_candidate_yes" name="has_a_candidate" value="yes"  @if($data) @if($data->has_a_candidate=='yes') checked="checked" @endif @endif/>
										                                    <label class="form-check-label" for="has_a_candidate_yes">
										                                     Yes
										                                    </label>
										                                  </div>
																		
																	</div>
																	<div class="col-lg-8 mt-2" id="has_a_candidate_section" 	@if($data) @if($data->has_a_candidate=='yes') @else 	style="display:none" @endif @else 						style="display:none" @endif > 
										                                  <label for="" class="form-label">Exams Candidate Number*</label><br>
										                                  <span>This will be on Previous Timetables and Results Information</span>
										                                    <input type="text" name="has_a_candidate_number" id="has_a_candidate_number" class="form-control form-control-lg" aria-describedby="passwordHelpBlock" value="@if($data) {{ $data->has_a_candidate_number }}  @endif" max="4">
										                            </div> 

																<!--end::Col-->
																</div>


																<div class="row mb-8">
																	<div class="col-md-12">
																		<label>Do you have a UCI Number ( 13 digits )*? </label>
										                              <div class="form-check" style="margin:10px 0px">
									                                    <input    class="form-check-input uci" id="no" type="radio" checked="checked" name="uci" value="no" @if($data) @if($data->uci=='no') checked="checked" @endif @endif/>
									                                    <label class="form-check-label" for="no">
									                                     No
									                                    </label>
									                                  </div>
									                                  <div class="form-check" style="margin:10px 0px">
									                                     <input  class="form-check-input uci" type="radio" id="yes" name="uci" value="yes" @if($data) @if($data->uci=='yes') checked="checked" @endif @endif/>
									                                    <label class="form-check-label" for="yes">
									                                     Yes
									                                    </label>
									                                  </div>
																		
																	</div>
																	 <div class="col-lg-8 mt-2" id="uci_section" @if($data) @if($data->uci=='yes') @else style="display:none" @endif @else style="display:none" @endif >
										                                  <label for="UCI" class="">UCI Number ( 13 digits )</label>
										                                    <input type="text" onchange="insertmybooking()" name="uci_number" class="form-control form-control-lg uci_number" aria-describedby="passwordHelpBlock" value="@if($data) {{ $data->uci_number }} @endif">
										                             </div> 

																<!--end::Col-->
																</div>
																<div class="row mb-8">
									   								<div class="col-lg-12 mt-2">
									                                  <label for="" class="">Do you have a ULN Number ( 10 digits )*? </label>
									                                  <div class="form-check" style="margin:10px 0px">
									                                    <input class="form-check-input" id="uln_no" type="radio" checked="checked" name="uln"  value="no" @if($data) @if($data->uln=='no') checked="checked" @endif @endif/>
									                                    <label class="form-check-label" for="">
									                                     No
									                                    </label>
									                                  </div>
									                                  <div class="form-check" style="margin:10px 0px">
									                                      <input class="form-check-input" id="uln_yes" type="radio" name="uln" value="yes" @if($data) @if($data->uln=='yes') checked="checked" @endif @endif />
									                                    <label class="form-check-label" for="Female">
									                                     Yes
									                                    </label>
									                                  </div>
									                                </div>
									                                 <div class="col-lg-8 mt-2" id="uln_section"  @if($data) @if($data->uln=='yes') @else style="display:none" @endif @else style="display:none" @endif >
									                                  <label for="UCI" class="form-label">ULN Number ( 10 digits )</label>
									                                    <input type="text" max="10" name="uln_number" id="uln" class="form-control form-control-lg  uln_number" aria-describedby="passwordHelpBlock" value=" @if($data) {{ $data->uln_number }} @endif">
									                                 </div>
																</div>
																@endif

																<div class="row mb-8">
																	 <div class="col-lg-12 mt-2">
									                                  <label for="" class="">Type of Learner</label>
									                                  <div class="form-check" style="margin:10px 0px">
									                                    <input onchange="insertmybooking()" class="form-check-input" id="Learning_via" type="radio"  name="type_of_learner"  value="Learning via, or registered with, one of our Partners"   @if($data) @if($data->type_of_learner=='Learning via, or registered with, one of our Partners') checked="checked" @endif @else  checked="checked"  @endif/>

									                                    <label class="form-check-label" for="Learning_via">
									                                     Learning via, or registered with, one of our Partners
									                                    </label>
									                                  </div>
									                                  <div class="form-check" style="margin:10px 0px">
									                                   <input onchange="insertmybooking()" class="form-check-input" id="Private_Candidate" type="radio" name="type_of_learner" value="Private Candidate"  @if($data) @if($data->type_of_learner=='Private Candidate') checked="checked" @endif @endif />
									                                    <label class="form-check-label" for="Private_Candidate">
									                                     Private Candidate
									                                    </label>
									                                  </div>
									                                </div>
																</div>
 	@if($data->main_exam_type=='AAT' || $data->main_exam_type=='ACCA' || $data->main_exam_type=='Functional Skills')

									                              	@else
																<div class="row mb-8">
																	  <div class="col-lg-12 mt-2">
	                                 									 <label for="" class="">Are you retaking these exams?*</label>
										                                  <div class="form-check" style="margin:10px 0px">
										                                    <input  class="form-check-input" id="retaking_exams_no" type="radio" name="retaking_exams" value="no"  @if($data) @if($data->retaking_exams=='no') checked="checked" @endif  @else checked="checked" @endif/>
										                                    <label class="form-check-label" for="Learning_via">
										                                    No
										                                    </label>
										                                  </div>
									                                  <div class="form-check" style="margin:10px 0px">
									                                      <input  class="form-check-input" id="retaking_exams_yes" type="radio" name="retaking_exams" value="yes" @if($data) @if($data->retaking_exams=='yes') checked="checked" @endif @endif/>
									                                    <label class="form-check-label" for="Private_Candidate">
									                                     Yes
									                                    </label>
									                                  </div>
									                                </div>

									                                <div class="col-lg-8 mt-2" id="retaking_section"  @if($data) @if($data->retaking_exams=='yes') @else  style="display:none" @endif @else  style="display:none" @endif>
									                                  <label for="retaking_exams" class="form-label">Please specify which exams you are retaking?</label>
									                                  <input type="text" onchange="insertmybooking()" name="retaking_exams_name" id="retaking_exams_name" class="form-control form-control-lg " aria-describedby="passwordHelpBlock" value="@if($data) {{ $data->retaking_exams_name }} @endif">
									                                </div>
																</div>
																<div class="row mb-8">
																	  <div class="col-lg-12 mt-2">
										                                  <label>Are you caring forward your practical endorsement /course work/ spoken/ or any other assessment?</label>
										                                  <div class="form-check" style="margin:10px 0px">
										                                    <input class="form-check-input" id="caring_forwad_no" type="radio" checked="checked" name="caring_forwad" value="no" @if($data) @if($data->caring_forwad=='no') checked="checked" @endif @else checked="checked" @endif/>
										                                    <label class="form-check-label" for="caring_forwad_no">
										                                    No
										                                    </label>
										                                  </div>
										                                  <div class="form-check" style="margin:10px 0px">
										                                      <input onchange="insertmybooking()" class="form-check-input" id="caring_forwad_yes" type="radio" name="caring_forwad" value="yes" @if($data) @if($data->caring_forwad=='yes') checked="checked" @endif @endif/>
										                                    <label class="form-check-label" for="caring_forwad_yes">
										                                     Yes
										                                    </label>
										                                  </div>
										                                </div>
										                              <div class="col-lg-12 mt-2" id="caring_forwad_section" @if($data) @if($data->caring_forwad=='yes') @else style="display:none" @endif @else style="display:none" @endif >
										                                <label for="UCI">Please Specify the details including exam board & grade*
										                                </label>
										                                <input type="text" name="caring_forwad_details" id="caring_forwad_details" class="form-control form-control-lg " aria-describedby="passwordHelpBlock" value="@if($data) {{ $data->caring_forwad_details }} @endif">
										                              </div>
																</div>
																@endif
																
									                      </div>
									                    </div>
									                  </div>
									                   <div class="separator mb-4"></div>
									                        <span  style="color:green" id="success_message_other_formation_update"></span>
														<div class="card-footer d-flex justify-content-end py-6">
															<button  onclick="other_formation_update()" type="button"  class="btn btn-primary" style="margin: 0px 10px">update</button>
															<button type="button" onclick="cancel_other_option_edit()" class="btn btn-warning">Cancel</button>
														</div>
									                </div>

									                 <div class="card" id="other_option_section">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Others Information</h4>
									                    <div class="row">
									                      <div class="col-md-12 grid-margin stretch-card">
																<div id="">
									                            <table  class="table table-hover" style="font-size: 16px !important">
									                              <tbody>
									                              	@if($data->main_exam_type=='AAT' || $data->main_exam_type=='ACCA' || $data->main_exam_type=='Functional Skills')

									                              	@else
									                              	 <tr>
									                                  <td>Has the candidate sat exams with us before?  </td>
									                                  <td><span class="badge badge-danger">{{ $data->has_a_candidate }}</span> </td> 
									                                </tr>
									                                @if($data->has_a_candidate=="yes")
									                                 <tr>
									                                  <td>Candidate Number:  </td>
									                                  <td>{{ $data->has_a_candidate_number }} </td> 
									                                </tr>
									                                @endif
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

									                                @endif
									                               
									                                <tr>
									                                  <td> Type of Learner:</td>
									                                  <td><span>{{ $data->type_of_learner }}</span></td> 
									                                </tr>
	@if($data->main_exam_type=='AAT' || $data->main_exam_type=='ACCA' || $data->main_exam_type=='Functional Skills')

	@else

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
									                                  <td>Caring forwad Details:</td>
									                                  <td>{{ $data->caring_forwad_details }}</td> 
									                                </tr>
									                               @if($data->carring_forward_image !=null)
									     @foreach(json_decode($data->carring_forward_image) as $kesy => $cphotos)
									                                <tr>
								       <td>Caring Forwad Documents {{++$kesy}}:</td>
								      
								       <td>
								         
								           	
								           <img src="{{ asset('uploads/student/exambooking/'.$cphotos) }}" height="200px">
								             	<a class="badge badge-danger" href="{{ asset('uploads/student/exambooking/'.$cphotos) }}" target="_blank" download >Download Image</a>
								             
								             	
								           </td>
								            
								             
									                                </tr>
									                                @endforeach
									                                @endif
									                                
																	@endif
	                                                    @endif
									                                </tbody>
									                            </table>
									                        </div>
									                      </div>
									                    </div>
									                  </div>
									                  <div class="separator mb-4"></div>

														<div class="card-footer d-flex justify-content-end py-6">

															<button type="button" onclick="other_option_edit()" class="btn btn-primary">Edit</button>
														</div>


									                </div>
									                <!-- edit end -->

									              </div>
												<!--end::Post-->
												<!--begin::Separator-->
												
												
											</div>
											<!--end::Body-->
										</div>
									</div>
									<div class="col-xl-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8"id="SPECIAL_ARRANGEMENTS_section">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													
												</div>
												
												   <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">SPECIAL ARRANGEMENTS AND NEEDS</h4>
									                    <div class="row">
									                      <div class="col-md-12 grid-margin stretch-card">
									                   			<table class="table table-hover" style="font-size: 16px">
										                              <tbody>
										                                <tr>
										                                  <td>Do you require special access requirements during your exam?</td>
										                                  <td><span class="badge badge-danger">{{ $data->special_acces }}</span></td> 
										                                </tr>
										                                @if($data->special_acces=='yes')
										                                <tr>
										                                  <td>Evidence</td>
										                                  <td><span>{{ $data->special_acces_evidence }}</span></td> 
										                                </tr>
										                                
										                                
										                                   <tr>
										                                  <td>Evidence Documents</td>
									@php
									
									$my_evidence=pathinfo($data->special_evidents_documents, PATHINFO_EXTENSION);
									 @endphp                             
								
									                       
									<td>
									    @if($my_evidence=='pdf')	<a target="__blank" href="{{ url('updatecore/public/'.$data->special_evidents_documents) }}"> <span>Click here</span></a>
									    @else
									    <a target="__blank" href="{{ url('/'.$data->special_evidents_documents) }}"> <span>Click here</span></a>
									    @endif
									    	
									    	</td> 
										                                </tr>
										                                @endif
										                                 <tr>
										                                  <td>Do you suffer from any mental conditions such as high levels of anxiety?</td>
										                                  <td><span class="badge badge-danger">{{ $data->mental_conditions }}</span></td> 
										                                </tr>
										                                @if($data->mental_conditions == 'yes')
										                                <tr>
										                                  <td>Details</td>
										                                  <td><span >{{ $data->mental_condition_details }}</span></td> 
										                                </tr>
										                                @endif

										                                 <tr>
										                                  <td>Do you have any conditions or disability?</td>
										                                  <td><span class="badge badge-danger">{{ $data->condition_disability }} </span></td> 
										                                </tr>
										                                @if($data->condition_disability=='yes')
										                                 <tr>
										                                  <td> conditions or disability details</td>
										                                  <td><span >{{ $data->condition_disability_detail }} </span></td> 
										                                 </tr>
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
															
													<button type="button" onclick="SPECIAL_ARRANGEMENTS_click_section()" class="btn btn-primary">Edit</button>
												</div>
												
											</div>
											<!--end::Body-->
										</div>
										<div class="card mb-5 mb-xxl-8" id="SPECIAL_ARRANGEMENTS_edit_section" style="display: none;">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Header-->
												<div class="d-flex align-items-center mb-5">
													
												</div>
												
												   <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">EDIT SPECIAL ARRANGEMENTS AND NEEDS</h4>
									                    	<div class="row mb-8">
									                    		<!--  -->
															  <div class="col-lg-12 mt-2">
										                                    <label for="" >Do you require special access requirements during your exam?*</label>
										                                    <div class="form-check" style="margin:10px 0px">
										                                      <input  onchange="insertmybooking()" class="form-check-input" id="special_acces_no" type="radio" checked="checked" name="special_acces" value="no" @if($data) @if($data->special_acces=='no') checked="checked" @endif @else checked="checked" @endif/>
										                                      <label class="form-check-label" for="special_acces_no">
										                                      No
										                                      </label>
										                                    </div>
										                                    <div class="form-check" style="margin:10px 0px">
										                                        <input onchange="insertmybooking()"  class="form-check-input" id="special_acces_yes" type="radio" name="special_acces" value="yes" @if($data) @if($data->special_acces=='yes') checked="checked" @endif @endif/>
										                                      <label class="form-check-label" for="special_acces_yes">
										                                       Yes
										                                      </label>
										                                    </div>
										                                </div>


										                            <div class="col-lg-12 mt-2" id="evidence_section" @if($data) @if($data->special_acces=='yes') @else style="display:none" @endif @else style="display:none" @endif >
										                              <label for="" class="form-label">If yes, please provide any evidence to support your need for access arrangements as required by the relevant awarding bodies?</label>
										                              <input onchange="insertmybooking()"  type="text" name="special_acces_evidence" id="special_acces_evidence" class="form-control form-control-lg " aria-describedby="passwordHelpBlock" value="@if($data) {{ $data->special_acces_evidence }} @endif">
										                            </div>


										                             <div class="col-lg-12 mt-2">
										                                  <label for="" class="d-flex align-items-center form-label">Do you suffer from any mental conditions such as high levels of anxiety?</label>
										                                  <div class="form-check" style="margin:10px 0px">
										                                    <input onchange="insertmybooking()" class="form-check-input" id="mental_conditions_no" type="radio" checked="checked" name="mental_conditions" value="no" @if($data) @if($data->mental_conditions=='no') checked="checked" @endif @else checked="checked" @endif/>
										                                    <label class="form-check-label" for="mental_conditions_no">
										                                    No
										                                    </label>
										                                  </div>
										                                  <div class="form-check" style="margin:10px 0px">
										                                      <input onchange="insertmybooking()" class="form-check-input" id="mental_conditions_yes" type="radio" name="mental_conditions" value="yes"  @if($data) @if($data->mental_conditions=='yes') checked="checked" @endif @endif/>
										                                    <label class="form-check-label" for="mental_conditions_yes">
										                                     Yes
										                                    </label>
										                                  </div>
										                                </div>
										                            <div class="col-lg-12 mt-2" id="mental_conditions_section"@if($data) @if($data->mental_conditions=='yes') @else style="display:none" @endif @else style="display:none" @endif >
										                              <label for="UCI" class="form-label">If yes, please specify</label>
										                              <input type="text" onchange="insertmybooking()" name="mental_condition_details" id="mental_condition_details" class="form-control form-control-lg " aria-describedby="passwordHelpBlock" value="@if($data) {{ $data->mental_condition_details }} @endif">
										                            </div>

										                             <div class="col-lg-12 mt-2">
										                                <label for="" class="d-flex align-items-center form-label">Do you have any conditions or disability?</label>
										                                <div class="form-check" style="margin:10px 0px">
										                                  <input class="form-check-input" id="condition_disability_no" type="radio" onchange="insertmybooking()" checked="checked" name="condition_disability" value="no" @if($data) @if($data->condition_disability=='no') checked="checked" @endif @else checked="checked" @endif/>
										                                  <label class="form-check-label" for="condition_disability_no">
										                                  No
										                                  </label>
										                                </div>
										                                <div class="form-check" style="margin:10px 0px">
										                                    <input onchange="insertmybooking()" class="form-check-input" id="condition_disability_yes" type="radio" name="condition_disability" value="yes" @if($data) @if($data->condition_disability=='yes') checked="checked" @endif @endif/>
										                                  <label class="form-check-label" for="condition_disability_yes">
										                                   Yes
										                                  </label>
										                                </div>
										                              </div>
										                            <div class="col-lg-12 mt-2" id="condition_disability_section"  @if($data) @if($data->condition_disability=='yes') @else style="display:none" @endif @else style="display:none" @endif >
										                              <label for="condition_disability_details" class="form-label">If yes, please specify</label>
										                              <input type="text" onchange="insertmybooking()" name="condition_disability_details" id="condition_disability_details" class="form-control form-control-lg " aria-describedby="passwordHelpBlock" value="@if($data) {{ $data->condition_disability_details }} @endif" >
										                            </div>

																<!--  -->
																	  
															</div>
									                  </div>
									                </div>
									              </div>
												<!--end::Post-->
												<!--begin::Separator-->
												<div class="separator mb-4"></div>
													<span style="color: green;" id="success_message_special_arrangements_update"></span>
												<div class="card-footer d-flex justify-content-end py-6">
													<button onclick="SPECIAL_ARRANGEMENTS_update()" type="button" style="margin: 0px 10px" class="btn btn-primary">Update</button>
													<button type="button" onclick="cancel_SPECIAL_ARRANGEMENTS()" class="btn btn-warning">Cancel</button>
												</div>
												
											</div>
											<!--end::Body-->
										</div>
									</div>
									<div class="col-xl-12">
										<!--begin::Feeds Widget 1-->
										<div class="card mb-5 mb-xxl-8" id="subject_list_section">
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
								                            @if($data->main_exam_type=='GCSE' || $data->main_exam_type=='A Level' || $data->main_exam_type=='AS Level' ||  $data->main_exam_type=='IGCSE' )
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
								                                  @if($data->exam_information !=null)
								                                @foreach(json_decode($data->exam_information) as $exam)
								                                <tr>
								                                  <td>{{$exam->exam_board}}</td>
								                                  <td>{{$exam->exam_series}}</td> 
								                                  @php
								                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
								                                  @endphp
								                                  <td class="text-danger">{{$subject->subject_name ?? ''}}</td>
								                                  <td><label class="badge badge-danger">{{$subject->unit_code ?? ''}}</label></td>
								                                  <td><label class="badge badge-danger">{{ $exam->option_code }}</label></td>
								                                   <td>£ {{ $exam->fees }}</td>
								                                </tr>
								                                @endforeach
								                                @endif
								                                
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
								                                  <td class="text-danger">{{$subject->subject_name ?? ''}}</td>
								                                  <td class="text-danger">{{ $exam->option_code }}</td>
								                                 
								                                   <td>£ {{ $exam->fees }}</td>
								                                   <td>
								                           
								                                   {{ \Carbon\Carbon::parse($exam->exam_date)->format('d-m-Y')}}
								                                   </td>
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
								                                  <td class="text-danger">{{$subject->subject_name ?? ''}}</td>
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
								                                  @if($data->exam_information !=null)
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
								                                @endif
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
															
													<button type="button" onclick="openeditsubject()" class="btn btn-primary">Edit</button>
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

												@if($data->main_exam_type=='GCSE')
												 @if($data->exam_information ==null)
												 @else
												  <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Subject Details</h4>
									                    <div class="row">
									                    	<input type="hidden" name="id" value="{{ $data->id }}">
									                      <div class="col-md-12 grid-margin stretch-card">

									                      	@php
									                      		 $count=json_decode($data->exam_information, true);
									                      		 $maincount=sizeof($count);
									                      	@endphp
									                      	@foreach(json_decode($data->exam_information) as $yes => $random)
									                      		@php
												             	$allsub=App\Models\Subject::where('exam_type','GCSE')->where('exam_board',$random->exam_board)->get();
												             	@endphp
									                      	<div class="mb-10 fv-row row">
								                                <div class="col-md-12" style="margin-bottom:8px">
								                                  <label class="form-label mb-3">EXAM BOARD </label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                 <select name="exam_board[]" onchange="typecheangegcse(this)" id="type_{{ $yes }}"  class="form-select form-select-lg form-select-solid">
								                                    <option value="Edexcel" @if($random->exam_board=='Edexcel') selected @endif>Edexcel</option>
								                                    <option value="AQA" @if($random->exam_board=='AQA') selected @endif>AQA</option>
								                                    <option value="OCR" @if($random->exam_board=='OCR') selected @endif>OCR</option>
								                                    <option value="Cambridge CIE" @if($random->exam_board=="Cambridge CIE") selected @endif>Cambridge(CIE)</option>
								                                    <option value="WJEC" @if($random->exam_board=='WJEC') selected @endif>WJEC</option>
								                                 </select>

								                                </div>
								                                <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">EXAM SERIES</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                   <select name="exam_series[]" id="exam_series_{{ $yes }}" class="form-select form-select-lg form-select-solid">
								                                    <option>--Select--</option>
								                                    <option value="November 2023" @if($random->exam_series=='November 2023') selected @endif>November 2023</option>
								                                    <option value="January 2023" @if($random->exam_series=='January 2023') selected @endif>January 2023</option>
								                                    <option value="June 2023" @if($random->exam_series=='June 2023') selected @endif>June 2023</option>
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">TYPE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <select name="type[]"  class="form-select form-select-lg form-select-solid type">
								                                    <option value="GCSE">GCSE</option>
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                   <label class="form-label mb-3">SUBJECT</label>
								                                   <select name="subject[]" onchange="subjectcheange(this)" id="subject_{{ $yes }}"  class="form-select form-select-lg form-select-solid subject">
								                                      <option disabled>Select</option>
								                                      @foreach($allsub as $sub)
								                                      <option value="{{ $sub->id }}" @if($sub->id==$random->subject) selected @endif>{{$sub->subject_name}}</option>
								                                      @endforeach
								                                     
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">UNIT CODE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg" value="{{$random->unit_code}}" name="unit_code[]" id="unit_code_{{ $yes }}" />
								                                </div>
								                                  <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">OPTION CODE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg " name="option_code[]" id="option_code_{{ $yes }}"  value="{{$random->option_code}}" />
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">FEES</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                               
								                                  <input type="text" class="fees form-control form-control-lg" name="fees[]" id="fees_{{ $yes }}" value="{{ $random->fees }}" />
								                                  
								                                </div>
                            								</div>
                            								@endforeach
								                            <div class="mb-10 fv-row row" id="add_more">

								                            </div>
								                            <div class="mb-10 fv-row row">
								                              <div class="col-md-12 text-end">
								                                <button type="button" onclick="addmore()" class="btn-sm btn-danger" style="color: #fff; border-radius:31px">Add Subjects</button>
								                              </div>
								                            </div>

									                      </div>
									                    </div>
									                  </div>
									                </div>
									              </div>
									             @endif
									            @endif
									            @if($data->main_exam_type=='A Level')
										            
												  <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Subject Details</h4>
									                    <div class="row">
									                    	<input type="hidden" name="id" value="{{ $data->id }}">
									                      <div class="col-md-12 grid-margin stretch-card">

									                      	@php
									                      		 $count=json_decode($data->exam_information, true);
									                      		 $maincount=sizeof($count);
									                      	@endphp
									                      	@foreach(json_decode($data->exam_information) as $yes => $random)
									                      		@php
												             		$allsub=App\Models\Subject::where('exam_type','A Level')->where('exam_board',$random->exam_board)->get();
												             	@endphp
									                      	<div class="mb-10 fv-row row">
								                                <div class="col-md-12" style="margin-bottom:8px">
								                                  <label class="form-label mb-3">EXAM BOARD </label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                 <select name="exam_board[]" onchange="typecheangealevel(this)" id="type_{{ $yes }}" class="form-select form-select-lg form-select-solid">
								                                    <option value="Edexcel" @if($random->exam_board=='Edexcel') selected @endif>Edexcel</option>
								                                    <option value="AQA" @if($random->exam_board=='AQA') selected @endif>AQA</option>
								                                    <option value="OCR" @if($random->exam_board=='OCR') selected @endif>OCR</option>
								                                    <option value="Cambridge CIE" @if($random->exam_board=="Cambridge CIE") selected @endif>Cambridge(CIE)</option>
								                                    <option value="WJEC" @if($random->exam_board=='WJEC') selected @endif>WJEC</option>
								                                 </select>

								                                </div>
								                                <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">EXAM SERIES</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                   <select name="exam_series[]" id="exam_series_{{ $yes }}" class="form-select form-select-lg form-select-solid">
								                                    <option>--Select--</option>
								                                    <option value="November 2023" @if($random->exam_series=='November 2023') selected @endif>November 2023</option>
								                                    <option value="January 2023" @if($random->exam_series=='January 2023') selected @endif>January 2023</option>
								                                    <option value="June 2023" @if($random->exam_series=='June 2023') selected @endif>June 2023</option>
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">TYPE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <select name="type[]"   class="form-select form-select-lg form-select-solid type">
								                                    <option value="A Level">A Level</option>
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                   <label class="form-label mb-3">SUBJECT</label>
								                                   <select name="subject[]" onchange="subjectcheange(this)" id="subject_{{ $yes }}"  class="form-select form-select-lg form-select-solid subject">
								                                      <option disabled>Select</option>
								                                      @foreach($allsub as $sub)
								                                      <option value="{{ $sub->id }}" @if($sub->id==$random->subject) selected @endif>{{$sub->subject_name}}</option>
								                                      @endforeach
								                                     
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">UNIT CODE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg" value="{{$random->unit_code}}" name="unit_code[]" id="unit_code_{{ $yes }}" />
								                                </div>
								                                  <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">OPTION CODE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg " name="option_code[]" id="option_code_{{ $yes }}"  value="{{$random->option_code}}" />
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">FEES</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg " id="fees_demo_{{ $yes }}" value="{{ $random->fees }}" disabled/>
								                                  <input type="hidden" class="fees" name="fees[]" id="fees_{{ $yes }}" value="{{ $random->fees }}" />
								                                  <a style="cursor:pointer;color:red;padding:5px 4px" onclick="deleterow(this)">Remove</a>
								                                </div>
                            								</div>
                            								@endforeach
								                            <div class="mb-10 fv-row row" id="add_more">

								                            </div>
								                            <div class="mb-10 fv-row row">
								                              <div class="col-md-12 text-end">
								                                <button type="button" onclick="addmore()" class="btn-sm btn-danger" style="color: #fff; border-radius:31px">Add Subjects</button>
								                              </div>
								                            </div>
								                            @if($data->main_exam_type=='GCSE' || $data->main_exam_type=='A Level' ||  $data->main_exam_type=='IGCSE')
								                         
								                        	@endif

								                        	@if($data->main_exam_type=='AAT')
								                          
								                        	@endif

								                        	@if($data->main_exam_type=='ACCA')
								                            
								                        	@endif

								                        	@if($data->main_exam_type=='Functional Skills')
								                           
								                        	@endif

									                      </div>
									                    </div>
									                  </div>
									                </div>
									              </div>
									             @endif
									             
									              @if($data->main_exam_type=='AS Level')
										            
												  <div class="col-md-12 grid-margin stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Subject Details</h4>
									                    <div class="row">
									                    	<input type="hidden" name="id" value="{{ $data->id }}">
									                      <div class="col-md-12 grid-margin stretch-card">

									                      	@php
									                      		 $count=json_decode($data->exam_information, true);
									                      		 $maincount=sizeof($count);
									                      	@endphp
									                      	@foreach(json_decode($data->exam_information) as $yes => $random)
									                      		@php
												             		$allsub=App\Models\Subject::where('exam_type','AS Level')->where('exam_board',$random->exam_board)->get();
												             	@endphp
									                      	<div class="mb-10 fv-row row">
								                                <div class="col-md-12" style="margin-bottom:8px">
								                                  <label class="form-label mb-3">EXAM BOARD </label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                 <select name="exam_board[]" onchange="typecheangeaslevel(this)" id="type_{{ $yes }}" class="form-select form-select-lg form-select-solid">
								                                    <option value="Edexcel" @if($random->exam_board=='Edexcel') selected @endif>Edexcel</option>
								                                    <option value="AQA" @if($random->exam_board=='AQA') selected @endif>AQA</option>
								                                    <option value="OCR" @if($random->exam_board=='OCR') selected @endif>OCR</option>
								                                    <option value="Cambridge CIE" @if($random->exam_board=="Cambridge CIE") selected @endif>Cambridge(CIE)</option>
								                                    <option value="WJEC" @if($random->exam_board=='WJEC') selected @endif>WJEC</option>
								                                 </select>

								                                </div>
								                                <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">EXAM SERIES</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                   <select name="exam_series[]" id="exam_series_{{ $yes }}" class="form-select form-select-lg form-select-solid">
								                                    <option>--Select--</option>
								                                    <option value="November 2023" @if($random->exam_series=='November 2023') selected @endif>November 2023</option>
								                                    <option value="January 2023" @if($random->exam_series=='January 2023') selected @endif>January 2023</option>
								                                    <option value="June 2023" @if($random->exam_series=='June 2023') selected @endif>June 2023</option>
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">TYPE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <select name="type[]"   class="form-select form-select-lg form-select-solid type">
								                                    <option value="AS Level">AS Level</option>
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                   <label class="form-label mb-3">SUBJECT</label>
								                                   <select name="subject[]" onchange="subjectcheange(this)" id="subject_{{ $yes }}"  class="form-select form-select-lg form-select-solid subject">
								                                      <option disabled>Select</option>
								                                      @foreach($allsub as $sub)
								                                      <option value="{{ $sub->id }}" @if($sub->id==$random->subject) selected @endif>{{$sub->subject_name}}</option>
								                                      @endforeach
								                                     
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">UNIT CODE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg" value="{{$random->unit_code}}" name="unit_code[]" id="unit_code_{{ $yes }}" />
								                                </div>
								                                  <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">OPTION CODE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg " name="option_code[]" id="option_code_{{ $yes }}"  value="{{$random->option_code}}" />
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">FEES</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg " id="fees_demo_{{ $yes }}" value="{{ $random->fees }}" disabled/>
								                                  <input type="hidden" class="fees" name="fees[]" id="fees_{{ $yes }}" value="{{ $random->fees }}" />
								                                  <a style="cursor:pointer;color:red;padding:5px 4px" onclick="deleterow(this)">Remove</a>
								                                </div>
                            								</div>
                            								@endforeach
								                            <div class="mb-10 fv-row row" id="add_more">

								                            </div>
								                            <div class="mb-10 fv-row row">
								                              <div class="col-md-12 text-end">
								                                <button type="button" onclick="addmore()" class="btn-sm btn-danger" style="color: #fff; border-radius:31px">Add Subjects</button>
								                              </div>
								                            </div>
								                            @if($data->main_exam_type=='GCSE' || $data->main_exam_type=='A Level' ||  $data->main_exam_type=='IGCSE')
								                         
								                        	@endif

								                        	@if($data->main_exam_type=='AAT')
								                          
								                        	@endif

								                        	@if($data->main_exam_type=='ACCA')
								                            
								                        	@endif

								                        	@if($data->main_exam_type=='Functional Skills')
								                           
								                        	@endif

									                      </div>
									                    </div>
									                  </div>
									                </div>
									              </div>
									             @endif

									            @if($data->main_exam_type=='IGCSE')
										             
												<div class="col-md-12 grid-margin  stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Subject Details</h4>
									                    <div class="row">
									                    	<input type="hidden" name="id" value="{{ $data->id }}">
									                      <div class="col-md-12 grid-margin stretch-card">

									                      	@php
									                      		 $count=json_decode($data->exam_information, true);
									                      		 $maincount=sizeof($count);
									                      	@endphp
									                      	@foreach(json_decode($data->exam_information) as $yes => $random)

									                      	@php
											             	$allsub=App\Models\Subject::where('exam_type','IGCSE')->where('exam_board',$random->exam_board)->get();
											             	@endphp
									                      	<div class="mb-10 fv-row row">
								                                <div class="col-md-12" style="margin-bottom:8px">
								                                  <label class="form-label mb-3">EXAM BOARD </label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                 <select name="exam_board[]" onchange="typecheangeigcse(this)" id="type_{{ $yes }}"  class="form-select form-select-lg form-select-solid">
								                                    <option value="Edexcel" @if($random->exam_board=='Edexcel') selected @endif>Edexcel</option>
								                                    <option value="AQA" @if($random->exam_board=='AQA') selected @endif>AQA</option>
								                                    <option value="OCR" @if($random->exam_board=='OCR') selected @endif>OCR</option>
								                                    <option value="Cambridge CIE" @if($random->exam_board=="Cambridge CIE") selected @endif>Cambridge(CIE)</option>
								                                    <option value="WJEC" @if($random->exam_board=='WJEC') selected @endif>WJEC</option>
								                                 </select>

								                                </div>
								                                <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">EXAM SERIES</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                   <select name="exam_series[]" id="exam_series_{{ $yes }}" class="form-select form-select-lg form-select-solid">
								                                    <option>--Select--</option>
								                                    <option value="November 2023" @if($random->exam_series=='November 2023') selected @endif>November 2023</option>
								                                    <option value="January 2023" @if($random->exam_series=='January 2023') selected @endif>January 2023</option>
								                                    <option value="June 2023" @if($random->exam_series=='June 2023') selected @endif>June 2023</option>
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">TYPE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <select name="type[]"   class="form-select form-select-lg form-select-solid type">
								                                    <option value="IGCSE">IGCSE</option>
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                   <label class="form-label mb-3">SUBJECT</label>
								                                   <select name="subject[]" onchange="subjectcheange(this)" id="subject_{{ $yes }}"  class="form-select form-select-lg form-select-solid subject">
								                                      <option disabled>Select</option>
								                                      @foreach($allsub as $sub)
								                                      <option value="{{ $sub->id }}" @if($sub->id==$random->subject) selected @endif>{{$sub->subject_name}}</option>
								                                      @endforeach
								                                     
								                                  </select>
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">UNIT CODE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg" value="{{$random->unit_code}}" name="unit_code[]" id="unit_code_{{ $yes }}" />
								                                </div>
								                                  <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">OPTION CODE</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg " name="option_code[]" id="option_code_{{ $yes }}"  value="{{$random->option_code}}" />
								                                </div>
								                                 <div class="col-md-2">
								                                    <!--begin::Label-->
								                                  <label class="form-label mb-3">FEES</label>
								                                  <!--end::Label-->
								                                  <!--begin::Input-->
								                                  <input type="text" class="form-control form-control-lg " id="fees_demo_{{ $yes }}" value="{{ $random->fees }}" disabled/>
								                                  <input type="hidden" class="fees" name="fees[]" id="fees_{{ $yes }}" value="{{ $random->fees }}" />
								                                  
								                                </div>
                            								</div>
                            								@endforeach
								                            <div class="mb-10 fv-row row" id="add_more">

								                            </div>
								                            <div class="mb-10 fv-row row">
								                              <div class="col-md-12 text-end">
								                                <button type="button" onclick="addmore()" class="btn-sm btn-danger" style="color: #fff; border-radius:31px">Add Subjects</button>
								                              </div>
								                            </div>
								                        

									                      </div>
									                    </div>
									                  </div>
									                </div>
									              </div>
									             @endif
									             @if($data->main_exam_type=='Functional Skills')
									                  @php
										             	$allsub=App\Models\Subject::where('exam_type','Functional Skills')->get();
										             @endphp
												<div class="col-md-12 grid-margin  stretch-card">
									                <div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Subject Details</h4>
									                    <div class="row">
									                    	<input type="hidden" name="id" value="{{ $data->id }}">
									                      <div class="col-md-12 grid-margin stretch-card">
                                                            @if($data->exam_information !=null)
									                      	@php
									                      		 $count=json_decode($data->exam_information, true);
									                      		 $maincount=sizeof($count);
									                      	@endphp
									                      	@foreach(json_decode($data->exam_information) as $yes => $random)
									                      	<div class="mb-10 fv-row row">
							                                <div class="col-md-4" style="">
							                                    <label class="form-label mb-3">EXAM BOARD</label>
							                                    <!--end::Label-->
							                                    <!--begin::Input-->
							                                      <select name="exam_board[]" class="form-select form-select-lg form-select-solid">
								                                    <option value="Edexcel" @if($random->exam_board=='Edexcel') selected @endif>Edexcel</option>
								                                    <option value="AQA" @if($random->exam_board=='AQA') selected @endif>AQA</option>
								                                    <option value="OCR" @if($random->exam_board=='OCR') selected @endif>OCR</option>
								                                    <option value="Cambridge(CIE)" @if($random->exam_board=="Cambridge(CIE)") selected @endif>Cambridge(CIE)</option>
								                                    <option value="WJEC" @if($random->exam_board=='WJEC') selected @endif>WJEC</option>
								                                 </select>

							                                </div>
							                                <div class="col-md-4" style="">
							                                    <div class="mb-0 fv-row">
							                                    <!--begin::Label-->
							                                    <label class="form-label mb-3">What time to start your exam?
							                                    </label>
							                                    <!--end::Label-->
							                                    <!--begin::Options-->
							                                    <div class="mb-0 row">
							                                    
							                                    <select class="form-select form-select-lg form-select-solid" name="start_exam_time[]">
							                                      <option value="11 am" @if($random->start_exam_time=='11 am') selected @endif>11 am</option>
							                                      <option value="2 pm" @if($random->start_exam_time=='2 pm') selected @endif>2 pm</option>
							                                    </select>
							                                    </div>
							                                    <!--end::Options-->
							                                  </div>
							                                </div>
							                                <div class="col-md-3" style="margin: 0px 5px;">
							                                         
							                                        <div class="mb-0 fv-row">
							                                          <!--begin::Label-->
							                                          <label class="form-label mb-3">
							                                          Choose the dates*
							                                          </label>
							                                          <!--end::Label-->
							                                          <!--begin::Options-->
							                                          <div class="mb-0 row">
							                                          
							                                          <input type="date" name="exam_date[]" class="form-select form-select-lg form-select-solid" value="{{ $random->exam_date }}">
							                                            
							                                          </div>
							                                          <!--end::Options-->
							                                        </div>
							                                  </div>
							                                
							                                <div class="col-md-2 mt-2">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">Branch</label>
							                                  <!--end::Label-->
							                                  <!--begin::Input-->
							                                   <select name="exam_series[]" id="exam_series_{{ $yes }}" class="form-select form-select-lg form-select-solid">
							                                    <option>--Select--</option>
							                                    <option value="Forest Gate" @if($random->exam_series=='Forest Gate') selected @endif>FOREST GATE</option>
							                                    <option value="ILFORD" @if($random->exam_series=='ILFORD') selected @endif>ILFORD</option>
							                                    
							                                  </select>
							                                </div>
							                                 <div class="col-md-2 mt-2">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">Exam Level</label>
							                                  <!--end::Label-->
							                                  <!--begin::Input-->
							                                  <select name="type[]" id="type_{{$yes}}"  class="form-select form-select-lg form-select-solid type">
							                                    <option>--Select--</option>
							                                    <option value="Entry Level 1" @if($random->type=='Entry Level 1') selected @endif>Entry Level 1</option>
							                                    <option value="Entry Level 2" @if($random->type=='Entry Level 2') selected @endif>Entry Level 2</option>
							                                    <option value="Entry Level 3" @if($random->type=='Entry Level 3') selected @endif>Entry Level 3</option>
							                                    <option value="Level 1" @if($random->type=='Level 1') selected @endif>Level 1</option>
							                                    <option value="Level 2" @if($random->type=='Level 2') selected @endif>Level 2</option>
							                                    <option value="Level 2 Resources" @if($random->type=='Level 2 Resources') selected @endif>Level 2 Resources</option>
							                                  </select>
							                                </div>
							                                 <div class="col-md-2 mt-2">
							                                    <!--begin::Label-->
							                                   <label class="form-label mb-3">SUBJECT</label>
							                                   <select name="subject[]" onchange="subjectcheange(this)" id="subject_{{ $yes }}"  class="form-select form-select-lg form-select-solid subject">
							                                      <option>--Select--</option>
							                                      @foreach($allsub as $sub)
							                                      <option value="{{  $sub->id }}" @if($random->subject==$sub->id) selected @endif>{{  $sub->subject_name }}</option>
							                                      @endforeach
							                                     
							                                  </select>
							                                </div>
							                                
							                                  <div class="col-md-3 mt-2">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">Exam Type</label>
							                                  <!--end::Label-->
							                                  <!--begin::Input-->
							                                 <!--  <input type="text" class="form-control form-control-lg form-control-solid" name="option_code[]" id="option_code_0" /> -->
							                                   <select name="option_code[]" id="option_code_{{$yes}}"  class="form-select form-select-lg form-select-solid type">
							                                    <option>--Select--</option>
							                                    <option value="On Paper" @if($random->option_code=='On Paper') selected @endif>On Paper</option>
							                                    <option value="On Screen" @if($random->option_code=='On Screen') selected @endif>On Screen</option>
							                                  </select>
							                                </div>
							                                 <div class="col-md-2 mt-2">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">FEES</label>
							                                  <!--end::Label-->
							                                  <!--begin::Input-->
							                                  <input type="text" class="fees form-control form-control-lg form-control-solid" name="fees[]" id="fees_{{$yes}}" value="{{ $random->fees}}" />
							                                   <input type="hidden" id="totalmain_amount" class="totalmain_amount" value="0" />
							                                   <a style="color:red;padding:0px 4px" onclick="deleterow(this)" style="cursor:pointer;color:red">Delete</a>
							                                </div>
							                              <!--end::Input-->
							                            </div>
									                      
                            								@endforeach
                            								@endif
								                            <div class="mb-10 fv-row row" id="add_more">

								                            </div>
								                            <div class="mb-10 fv-row row">
								                              <div class="col-md-12 text-end">
								                                <button type="button" onclick="addmore()" class="btn-sm btn-danger" style="color: #fff; border-radius:31px">Add Subjects</button>
								                              </div>
								                            </div>
								                        

									                      </div>
									                    </div>
									                  </div>
									                </div>
									              </div>
									             @endif

									             @if($data->main_exam_type=='ACCA')
									                  @php
										             	$allsub=App\Models\Subject::where('exam_type','ACCA')->get();
										             @endphp
													<div class="col-md-12 grid-margin  stretch-card">
									                	<div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Subject Details</h4>
									                    <div class="row">
									                    	<input type="hidden" name="id" value="{{ $data->id }}">
									                      <div class="col-md-12 grid-margin stretch-card">

									                      	@php
									                      		 $count=json_decode($data->exam_information, true);
									                      		 $maincount=sizeof($count);
									                      	@endphp
									                      	@foreach(json_decode($data->exam_information) as $yes => $random)
									                      	<div class="mb-10 fv-row row">
							                                <div class="col-md-4" style="">
							                                    <label class="form-label mb-3">EXAM BOARD</label>
							                                    <!--end::Label-->
							                                    <!--begin::Input-->
							                                      <select name="exam_board[]" class="form-select form-select-lg form-select-solid">
								                                     <option value="ACCA">ACCA</option>
								                                 </select>

							                                </div>
							                                <div class="col-md-4" style="">
							                                    <div class="mb-0 fv-row">
							                                    <!--begin::Label-->
							                                    <label class="form-label mb-3">What time to start your exam?
							                                    </label>
							                                    <!--end::Label-->
							                                    <!--begin::Options-->
							                                    <div class="mb-0 row">
							                                    
							                                    <select class="form-select form-select-lg form-select-solid" name="start_exam_time[]">
							                                      <option value="11 am" @if($random->start_exam_time=='11 am') selected @endif>11 am</option>
							                                      <option value="2 pm" @if($random->start_exam_time=='2 pm') selected @endif>2 pm</option>
							                                    </select>
							                                    </div>
							                                    <!--end::Options-->
							                                  </div>
							                                </div>
							                                <div class="col-md-3" style="margin: 0px 5px;">
							                                         
							                                        <div class="mb-0 fv-row">
							                                          <!--begin::Label-->
							                                          <label class="form-label mb-3">
							                                          Choose the dates*
							                                          </label>
							                                          <!--end::Label-->
							                                          <!--begin::Options-->
							                                          <div class="mb-0 row">
							                                          
							                                          <input type="date" name="exam_date[]" class="form-select form-select-lg form-select-solid" value="{{ $random->exam_date }}">
							                                            
							                                          </div>
							                                          <!--end::Options-->
							                                        </div>
							                                  </div>
							                                
							                                
							                                 <div class="col-md-3">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">Exam Level</label>
							                                  <!--end::Label-->
							                                  <!--begin::Input-->
							                                  <select name="type[]" onchange="typecheange(this)" id="type_{{$yes}}"  class="form-select form-select-lg form-select-solid type">
							                                    <option>--Select--</option>
                                   								 	<option value="Applied Knowledge"@if($random->type=='Applied Knowledge') selected @endif>Applied Knowledge</option>
                                    								<option value="Applied Skills"@if($random->type=='Applied Skills') selected @endif>Applied Skills</option>
                                    								<option value="Foundation in Accountancy"@if($random->type=='Foundation in Accountancy') selected @endif>Foundation In Accountancy</option>
							                                  </select>
							                                </div>
							                                 <div class="col-md-3">
							                                    <!--begin::Label-->
							                                   <label class="form-label mb-3">SUBJECT</label>
							                                   <select name="subject[]" onchange="subjectcheange(this)" id="subject_{{ $yes }}"  class="form-select form-select-lg form-select-solid subject">

							                                      <option>--Select--</option>

							                                      @foreach($allsub as $sub)
							                                      <option value="{{  $sub->id }}" @if($random->subject==$sub->id) selected @endif>{{  $sub->subject_name }}</option>
							                                      @endforeach
							                                     
							                                  </select>
							                                </div>
							                                
							                                <div class="col-md-3">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">Exam Type</label>
							                                  
							                                   <select name="option_code[]" id="option_code_{{$yes}}"  class="form-select form-select-lg form-select-solid type">
							                                    <option>--Select--</option>
							                                    <option value="On Screen" @if($random->option_code=='On Screen') selected @endif>On Screen</option>
							                                  </select>
							                                </div>
							                                <div class="col-md-2">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">FEES</label>
							                                  <!--end::Label-->
							                                  <!--begin::Input-->
							                                  <input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_{{$yes}}" value="{{ $random->fees}}" disabled/>

							                                  <input type="hidden" class="fees" name="fees[]" id="fees_{{$yes}}" value="{{ $random->fees}}" />
							                                  <a style="color:red;padding:0px 4px" onclick="deleterow(this)" style="cursor:pointer;color:red">Delete</a>
							                                </div>
							                              <!--end::Input-->
							                            </div>
									                      
                            								@endforeach
								                            <div class="mb-10 fv-row row" id="add_more">

								                            </div>
								                            <div class="mb-10 fv-row row">
								                              <div class="col-md-12 text-end">
								                                <button type="button" onclick="addmore()" class="btn-sm btn-danger" style="color: #fff; border-radius:31px">Add Subjects</button>
								                              </div>
								                            </div>
								                        

									                      </div>
									                    </div>
									                  </div>
									                </div>
									              </div>
									             @endif
									               @if($data->main_exam_type=='AAT')
									                  @php
										             	$allsub=App\Models\Subject::where('exam_type','AAT')->get();
										             @endphp
													<div class="col-md-12 grid-margin  stretch-card">
									                	<div class="card">
									                  <div class="card-body">
									                    <h4 class="card-title text-warning">Subject Details</h4>
									                    <div class="row">
									                    	<input type="hidden" name="id" value="{{ $data->id }}">
									                      <div class="col-md-12 grid-margin stretch-card">

									                      	@php
									                      		 $count=json_decode($data->exam_information, true);
									                      		 $maincount=sizeof($count);
									                      	@endphp
									                      	@foreach(json_decode($data->exam_information) as $yes => $random)
									                      	<div class="mb-10 fv-row row">
							                                <div class="col-md-4" style="">
							                                    <label class="form-label mb-3">EXAM BOARD</label>
							                                    <!--end::Label-->
							                                    <!--begin::Input-->
							                                      <select name="exam_board[]" class="form-select form-select-lg form-select-solid">
								                                     <option value="AAT">AAT</option>
								                                 </select>

							                                </div>
							                                <div class="col-md-4" style="">
							                                    <div class="mb-0 fv-row">
							                                    <!--begin::Label-->
							                                    <label class="form-label mb-3">What time to start your exam?
							                                    </label>
							                                    <!--end::Label-->
							                                    <!--begin::Options-->
							                                    <div class="mb-0 row">
							                                    
							                                    <select class="form-select form-select-lg form-select-solid" name="start_exam_time[]">
							                                      <option value="11 am" @if($random->start_exam_time=='11 am') selected @endif>11 am</option>
							                                      <option value="2 pm" @if($random->start_exam_time=='2 pm') selected @endif>2 pm</option>
							                                    </select>
							                                    </div>
							                                    <!--end::Options-->
							                                  </div>
							                                </div>
							                                <div class="col-md-3" style="margin: 0px 5px;">
							                                         
							                                        <div class="mb-0 fv-row">
							                                          <!--begin::Label-->
							                                          <label class="form-label mb-3">
							                                          Choose the dates*
							                                          </label>
							                                          <!--end::Label-->
							                                          <!--begin::Options-->
							                                          <div class="mb-0 row">
							                                          
							                                          <input type="date" name="exam_date[]" class="form-select form-select-lg form-select-solid" value="{{$random->exam_date}}">
							                                            
							                                          </div>
							                                          <!--end::Options-->
							                                        </div>
							                                  </div>
							                                
							                                <div class="col-md-2 mt-2">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">Branch</label>
							                                  <!--end::Label-->
							                                  <!--begin::Input-->
							                                   <select name="exam_series[]" id="exam_series_0" class="form-select form-select-lg form-select-solid">
							                                    <option>--Select--</option>
							                                    <option value="Forest Gate" @if($random->exam_series=='Forest Gate') selected @endif>FOREST GATE</option>
							                                    <option value="ILFORD" @if($random->exam_series=='ILFORD') selected @endif>ILFORD</option>
							                                    
							                                  </select>
							                                </div>
							                                 <div class="col-md-2 mt-2">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">Exam Level</label>
							                                  <!--end::Label-->
							                                  <!--begin::Input-->
							                                  <select name="type[]" id="type_{{$yes}}"  class="form-select form-select-lg form-select-solid type">
														        <option>--Select--</option>
														        <option value="Level 1" @if($random->type =='Level 1') selected @endif>Level 1</option>
							                                    <option value="Level 2" @if($random->type =='Level 2') selected @endif>Level 2</option>
							                                    <option value="Level 3" @if($random->type =='Level 3') selected @endif>Level 3</option>
							                                    <option value="Level 4" @if($random->type =='Level 4') selected @endif>Level 4</option>
							                                   
							                                  </select>
							                                </div>
							                                 <div class="col-md-3 mt-2">
							                                    <!--begin::Label-->
							                                   <label class="form-label mb-3">SUBJECT</label>
							                                   <select name="subject[]" onchange="subjectcheange(this)" id="subject_{{ $yes }}"  class="form-select form-select-lg form-select-solid subject">

							                                      <option>--Select--</option>

							                                      @foreach($allsub as $sub)
							                                      <option value="{{  $sub->id }}" @if($random->subject==$sub->id) selected @endif>{{  $sub->subject_name }}</option>
							                                      @endforeach
							                                     
							                                  </select>
							                                </div>
							                                
							                                <div class="col-md-3 mt-2">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">Exam Type</label>
							                                  
							                                   <select name="option_code[]" id="option_code_{{$yes}}"  class="form-select form-select-lg form-select-solid type">
							                                    <option value="On Screen" @if($random->option_code=='On Screen') selected @endif>On Screen</option>
							                                  </select>
							                                </div>
							                                <div class="col-md-2 mt-2">
							                                    <!--begin::Label-->
							                                  <label class="form-label mb-3">FEES</label>
							                                  <!--end::Label-->
							                                  <!--begin::Input-->
							                                  <input type="text" class="form-control form-control-lg form-control-solid fees" name="fees[]" id="fees_{{$yes}}" value="{{ $random->fees}}" />
							                            
							                                   <a style="color:red;padding:0px 4px" onclick="deleterow(this)">Delete</a>
							                                </div>
							                              <!--end::Input-->
							                            </div>
									                      
                            								@endforeach
								                            <div class="mb-10 fv-row row" id="add_more">

								                            </div>
								                            <div class="mb-10 fv-row row">
								                              <div class="col-md-12 text-end">
								                                <button type="button" onclick="addmore()" class="btn-sm btn-danger" style="color: #fff; border-radius:31px">Add Subjects</button>
								                              </div>
								                            </div>
								                        

									                      </div>
									                    </div>
									                  </div>
									                </div>
									              </div>
									             @endif


									             


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
									                    <h4 class="card-title text-warning">TERMS AND CONDITIONS</h4>
									                    <div class="row">
									                    	<div class="col-md-12 grid-margin stretch-card">
									                       <table class="table table-hover" style="font-size: 16px">
                           
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
									                                  <td><span class="badge badge-danger">@if($data)  {{ $data->todays_date  }} @endif</span></td> 
									                                </tr>
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
														<img class="mainimg" src="{{ asset('/'.$data->signed) }}">
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
								                                  <th>Due Amount</th>
								                                  <th>Booking ID</th>
								                                  <th>Exam Type</th>
								                                  <th>Paid By</th>
								                                  <th>Transection ID</th>
								                                
								                                 
								                                </tr>
								                              </thead>
								                              @php
								                              	$allwallet=App\Models\Wallet::where('order_id',$data->booking_id)->first();
								                              	$total_amount=0;
								                              @endphp
								                              
								                              
								                              
								                              @foreach(json_decode($data->exam_information) as $yes => $price)
								                              	@php
																	$total_amount=$total_amount + $price->fees;
																@endphp
								                              @endforeach
								                              
								                              
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
								                                  	£ {{$data->total_amount - $data->discount_amount}}
								                                  </td>
								                                  <td>
								                                  	@if($allwallet ) £ {{ $allwallet->amount }} @else
								                                  	<span class="badge badge-danger"> Not Yet </span>  
								                                  	 @endif
								                                  </td>
								                                   <td>£ {{ $data->due_amount }}</td>
								                                  <td>{{ $data->booking_id }}</td> 
								                                  <td class="text-danger">{{ $data->main_exam_type }}</td>
								                                  <td class="text-danger">@if($data->payment_option !=null) {{ $data->payment_option }} @else  <span class="badge badge-danger"> Not Yet </span>   @endif</td>
								                                  <td>@if($data->transection_id!=null) 
								                                  	{{ $data->transection_id }} @else  
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
									                	@if($data->due_amount==0)
									                	<p>No Due Amount Here!</p>
									                	@else
									                	  <form action="{{ url('admin/mainpayment/update') }}" method="post">
									                	  	@csrf
															  <div class="form-group">
															    <label for="exampleInputEmail1">Due Amount</label>
															    <input type="text" class="form-control" placeholder="Due Amount" value="{{ $data->due_amount }}">
															    <input type="hidden" name="booking_id" value="{{ $data->booking_id }}">
															    <input type="hidden" name="total_amount" value="{{ $total_amount }}">
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
															    <input type="text" class="form-control" name="transection_id" placeholder="Transection Id">
															  </div>
															  <button type="submit" class="btn btn-primary">Submit</button>
															</form>
															@endif
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
								                              	$allwallets=App\Models\Wallet::where('order_id',$data->booking_id)->get();
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
		function addpayment(){
			$("#main_payment").show();
			$("#payment_details_option").hide();
		}
	</script>

	<script>
		function onladbasicoption() {

			$("#basic_option_contents").hide();
			$("#basic_edit_option").show();

			
		}

		function cancelbasicoption() {

			$("#basic_option_contents").show();
			$("#basic_edit_option").hide();

			
		}

		function other_option_edit(){

			$("#edit_option_section").show();
			$("#other_option_section").hide();
		}


		function cancel_other_option_edit(){
			$("#edit_option_section").hide();
			$("#other_option_section").show();
		}

		// 

		function SPECIAL_ARRANGEMENTS_click_section(){
			$("#SPECIAL_ARRANGEMENTS_edit_section").show();
			$("#SPECIAL_ARRANGEMENTS_section").hide();
		}


		function cancel_SPECIAL_ARRANGEMENTS(){
			$("#SPECIAL_ARRANGEMENTS_edit_section").hide();
			$("#SPECIAL_ARRANGEMENTS_section").show();
		}


		function TERMS_AND_CONDITIONS_edit(){
			$("#TERMS_AND_CONDITION_edit_section").show();
			$("#TERMS_AND_CONDITION_section").hide();
		}


		function TERMS_AND_CONDITIONS_edit(){
			$("#TERMS_AND_CONDITION_edit_section").show();
			$("#TERMS_AND_CONDITION_section").hide();
		}
		function TERMS_AND_CONDITIONS_cancel(){
			$("#TERMS_AND_CONDITION_edit_section").hide();
			$("#TERMS_AND_CONDITION_section").show();
		}

		function openeditsubject(){
			$("#subject_list_section").hide();
			$("#subjectupdate_section").show();
		}

		function openeditsubject_cancel(){
			$("#subject_list_section").show();
			$("#subjectupdate_section").hide();
		}



	</script>
	<script>
		$(document).ready(function(){

			$("#has_a_candidate_yes").click(function(){
	          $("#has_a_candidate_section").show();
	        });

	      $("#has_a_candidate_no").click(function(){
	        $("#has_a_candidate_section").hide();
	      });


	       $("#yes").click(function(){
		      $("#uci_section").show();
		    });

		    $("#no").click(function(){
		      $("#uci_section").hide();
		    });

		     $("#uln_yes").click(function(){
			      $("#uln_section").show();
			    });

			    $("#uln_no").click(function(){
			      $("#uln_section").hide();
			    });


			      // retaking exam
			      $("#retaking_exams_yes").click(function(){
			        $("#retaking_section").show();
			      });

			      $("#retaking_exams_no").click(function(){
			        $("#retaking_section").hide();
			      });

			       // caring forwad exam
			      $("#caring_forwad_yes").click(function(){
			        $("#caring_forwad_section").show();
			      });

			      $("#caring_forwad_no").click(function(){
			        $("#caring_forwad_section").hide();
			      });


			      $("#special_acces_yes").click(function(){
        $("#evidence_section").show();
      });

      $("#special_acces_no").click(function(){
        $("#evidence_section").hide();
      });

     //  mental_conditions_section

     // mental_conditions_section

        $("#mental_conditions_yes").click(function(){
        $("#mental_conditions_section").show();
      });

      $("#mental_conditions_no").click(function(){
        $("#mental_conditions_section").hide();
      });

       // mental_conditions_section

        $("#condition_disability_yes").click(function(){
          $("#condition_disability_section").show();
        });

      $("#condition_disability_no").click(function(){
        $("#condition_disability_section").hide();
      });

		})
	</script>



@if($data->main_exam_type=='AAT')
	@php
  		 $count=json_decode($data->exam_information, true);
  		 $maincount=sizeof($count);
  	@endphp
	<script>
		@if($maincount)
			var i={{$maincount}};
		@else
		var i=1;
		@endif
    function addmore(){
        $("#add_more").append('<div class="mb-10 fv-row row"><div class="col-md-4" style="margin-bottom:8px"><label class="form-label mb-3">EXAM BOARD</label><select name="exam_board[]" class="form-select form-select-lg form-select-solid"><option value="AAT">AAT</option></select></div><div class="col-md-4" style=""><div class="mb-0 fv-row"><label class="form-label mb-3">What time to start your exam?</label><div class="mb-0 row"><select class="form-select form-select-lg form-select-solid" name="start_exam_time[]"><option value="11 am">11 am</option><option value="2 pm">2 pm</option></select></div></div></div><div class="col-md-3" style="margin: 0px 5px;"><div class="mb-0 fv-row"><label class="form-label mb-3">Choose the dates*</label><div class="mb-0 row"><input type="date" name="exam_date[]" class="form-select form-select-lg form-select-solid"></div></div></div><div class="col-md-2"><label class="form-label mb-3">Branch</label><select name="exam_series[]" class="form-select form-select-lg form-select-solid"><option>--Select--</option><option value="Forest Gate">FOREST GATE</option><option value="ILFORD">ILFORD</option></select></div><div class="col-md-2"><label class="form-label mb-3">Exam Level</label><select name="type[]" id="type_'+i+'" data-id="'+i+'" class="form-select form-select-lg form-select-solid type"><option value="Level 1">Level 1</option><option value="Level 2">Level 2</option><option value="Level 3">Level 3</option><option value="Level 3">Level 3</option></select></div><div class="col-md-2"><label class="form-label mb-3">SUBJECT</label><select name="subject[]" id="subject_'+i+'" onchange="subjectcheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid subject"><option>--Select--</option>@foreach($allsub as $sub)<option value="{{  $sub->id }}">{{  $sub->subject_name }}</option>@endforeach</select></div><div class="col-md-3"><label class="form-label mb-3">Exam Type</label> <select name="option_code[]" id="option_code_'+i+'"  class="form-select form-select-lg form-select-solid type"><option value="On Screen">On Screen</option></select></div><div class="col-md-2"><label class="form-label mb-3">FEES</label><input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_'+i+'" disabled/><input type="hidden" class="amount_fees" name="fees[]" id="fees_'+i+'"/><a style="color:red;padding:0px 4px" onclick="deleterow(this)" style="color:red !important; cursor:pointer">Delete</a></div></div>');
      i++
    }
  </script>
  @endif



@if($data->main_exam_type=='ACCA')
	@php
  		 $count=json_decode($data->exam_information, true);
  		 $maincount=sizeof($count);
  	@endphp
	<script>
		@if($maincount)
			var i={{$maincount}};
		@else
		var i=1;
		@endif
	 function addmore(){
        $("#add_more").append('<div class="mb-10 fv-row row"><div class="col-md-4" style="margin-bottom:8px"><label class="form-label mb-3">EXAM BOARD</label><select name="exam_board[]" class="form-select form-select-lg form-select-solid"><option value="ACCA">ACCA</option></select></div>  <div class="col-md-4" style=""><div class="mb-0 fv-row"><label class="form-label mb-3">What time to start your exam?</label><div class="mb-0 row"><select class="form-select form-select-lg form-select-solid" name="start_exam_time[]"><option value="11 am">11 am</option><option value="2 pm">2 pm</option></select></div></div></div><div class="col-md-3" style="margin: 0px 5px;"><div class="mb-0 fv-row"><label class="form-label mb-3">Choose the dates*</label><div class="mb-0 row"><input type="date" name="exam_date[]" class="form-select form-select-lg form-select-solid"></div></div></div><div class="col-md-3"><label class="form-label mb-3">Exam Level</label><select onchange="typecheange(this)" name="type[]" id="type_'+i+'" data-id="'+i+'" class="form-select form-select-lg form-select-solid type"><option value="Applied Knowledge">Applied Knowledge</option><option value="Applied Skills">Applied Skills</option><option value="Foundation in Accountancy">Foundation In Accountancy</option></select></div><div class="col-md-3"><label class="form-label mb-3">SUBJECT</label><select name="subject[]" id="subject_'+i+'" onchange="subjectcheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid subject"><option>--Select--</option>@foreach($allsub as $sub)<option value="{{  $sub->id }}">{{  $sub->subject_name }}</option>@endforeach</select></div><div class="col-md-3"><label class="form-label mb-3">Exam Type</label> <select name="option_code[]" id="option_code_'+i+'"  class="form-select form-select-lg form-select-solid type"><option value="On Screen">On Screen</option></select></div><div class="col-md-2"><label class="form-label mb-3">FEES</label><input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_'+i+'" disabled/><input type="hidden" class="amount_fees" name="fees[]" id="fees_'+i+'"/><a style="color:red;padding:0px 4px" onclick="deleterow(this)" style="cursor:pointer; color:red" >Delete</a></div></div>');
      i++
    }
</script>
@endif

@if($data->main_exam_type=='Functional Skills')
	@php
  		 $count=json_decode($data->exam_information, true);
  		 $maincount=sizeof($count);
  	@endphp
	<script>
		@if($maincount)
			var i={{$maincount}};
		@else
		var i=1;
		@endif
		function addmore(){
        $("#add_more").append('<div class="mb-10 fv-row row"><div class="col-md-4" style=""><label class="form-label mb-3">EXAM BOARD</label><select name="exam_board[]" class="form-select form-select-lg form-select-solid"><option value="Edexcel">Edexcel</option><option value="AQA">AQA</option><option value="OCR">OCR</option><option value="Cambridge(CIE)">Cambridge(CIE)</option><option value="WJEC">WJEC</option></select></div><div class="col-md-4" style=""><div class="mb-0 fv-row"><label class="form-label mb-3">What time to start your exam?</label><div class="mb-0 row"><select class="form-select form-select-lg form-select-solid" name="start_exam_time[]"><option value="11 am">11 am</option><option value="2 pm">2 pm</option></select></div></div></div><div class="col-md-3" style="margin: 0px 5px;"><div class="mb-0 fv-row"><label class="form-label mb-3">Choose the dates*</label><div class="mb-0 row"><input type="date" name="exam_date[]" class="form-select form-select-lg form-select-solid"></div></div></div><div class="col-md-2"><label class="form-label mb-3">Branch</label><select name="exam_series[]" id="exam_series_'+i+'" class="form-select form-select-lg form-select-solid"><option>--Select--</option><option value="Forest Gate">FOREST GATE</option><option value="ILFORD">ILFORD</option></select></div><div class="col-md-2"><label class="form-label mb-3">Exam Level</label><select name="type[]" id="type_'+i+'" data-id="'+i+'" class="form-select form-select-lg form-select-solid type"><option value="Entry Level 1">Entry Level 1</option><option value="Entry Level 2">Entry Level 2</option><option value="Entry Level 3">Entry Level 3</option><option value="Level 1">Level 1</option><option value="Level 2">Level 2</option><option value="Level 2 Resources">Level 2 Resources</option></select></div><div class="col-md-2"><label class="form-label mb-3">SUBJECT</label><select name="subject[]" id="subject_'+i+'" onchange="subjectcheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid subject"><option>--Select--</option>@foreach($allsub as $sub)<option value="{{  $sub->id }}">{{  $sub->subject_name }}</option>@endforeach</select></div><div class="col-md-3"><label class="form-label mb-3">Exam Type</label> <select name="option_code[]" id="option_code_'+i+'"  class="form-select form-select-lg form-select-solid type"><option>--Select--</option><option value="On Paper">On Paper</option><option value="On Screen">On Screen</option></select></div><div class="col-md-2"><label class="form-label mb-3">FEES</label><input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_'+i+'" disabled/><input type="hidden" class="amount_fees" name="fees[]" id="fees_'+i+'"/><a style="color:red;padding:0px 4px" onclick="deleterow(this)" style="cursor:pointer;color:red">Delete</a></div></div>');
      i++
    }

		

    
  </script>
  @endif


@if($data->main_exam_type=='GCSE')
	@php
  		 $count=json_decode($data->exam_information, true);
  		 $maincount=sizeof($count);
  	@endphp
	<script>
		@if($maincount)
			var i={{$maincount}};
		@else
		var i=1;
		@endif 

		
    function addmore(){
        $("#add_more").append('<div class="mb-10 fv-row row"><div class="col-md-12" style="margin-bottom:8px"><label class="form-label mb-3">EXAM BOARD</label><select id="type_'+i+'" onchange="typecheangegcse(this)" data-id="'+i+'" name="exam_board[]" class="form-select form-select-lg form-select-solid"><option value="Edexcel">Edexcel</option><option value="AQA">AQA</option><option value="OCR">OCR</option><option value="Cambridge(CIE)">Cambridge(CIE)</option><option value="WJEC">WJEC</option></select></div><div class="col-md-2"><label class="form-label mb-3">EXAM SERIES</label><select name="exam_series[]" id="exam_series_'+i+'" class="form-select form-select-lg form-select-solid"><option>--Select--</option><option value="November 2023">November 2023</option><option value="January 2023">January 2023</option><option value="June 2023">June 2023</option></select></div><div class="col-md-2"><label class="form-label mb-3">TYPE</label><select name="type[]"  class="form-select form-select-lg form-select-solid type"><option value="GCSE">GCSE</option></select></div><div class="col-md-2"><label class="form-label mb-3">SUBJECT</label><select name="subject[]" id="subject_'+i+'" onchange="subjectcheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid subject"><option selected disabled>--Select--</option>@foreach($allsub as $sub)<option value="{{ $sub->id }}">{{$sub->subject_name}}</option>@endforeach</select></div><div class="col-md-2"><label class="form-label mb-3">UNIT CODE</label><input type="text" class="form-control form-control-lg " name="unit_code[]" id="unit_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">OPTION CODE</label><input type="text" class="form-control form-control-lg " name="option_code[]"  id="option_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">FEES</label><input type="text" class="form-control form-control-lg " id="fees_demo_'+i+'" disabled/><input type="hidden" class="amount_fees" name="fees[]" id="fees_'+i+'"/><a style="cursor:pointer;color:red;padding:5px 4px" onclick="deleterow(this)">Remove</a></div></div>');
      i++
    }
    
  </script>
  @endif


@if($data->main_exam_type=='A Level')
	@php
  		$count=json_decode($data->exam_information, true);
  		$maincount=sizeof($count);
  	@endphp
	<script>
		@if($maincount)
			var i={{$maincount}};
		@else
		var i=1;
		@endif
		function addmore(){
        	$("#add_more").append('<div class="mb-10 fv-row row"><div class="col-md-12" style="margin-bottom:8px"><label class="form-label mb-3">EXAM BOARD</label><select id="type_'+i+'" onchange="typecheangealevel(this)" data-id="'+i+'" name="exam_board[]" class="form-select form-select-lg form-select-solid"><option value="Edexcel">Edexcel</option><option value="AQA">AQA</option><option value="OCR">OCR</option><option value="Cambridge(CIE)">Cambridge(CIE)</option><option value="WJEC">WJEC</option></select></div><div class="col-md-2"><label class="form-label mb-3">EXAM SERIES</label><select name="exam_series[]" id="exam_series_'+i+'" class="form-select form-select-lg form-select-solid"><option>--Select--</option><option value="November 2023">November 2023</option><option value="January 2023">January 2023</option><option value="June 2023">June 2023</option></select></div><div class="col-md-2"><label class="form-label mb-3">TYPE</label><select name="type[]"  class="form-select form-select-lg form-select-solid type"><option value="A Level">A Level</option></select></div><div class="col-md-2"><label class="form-label mb-3">SUBJECT</label><select name="subject[]" id="subject_'+i+'" onchange="subjectcheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid subject"><option selected disabled>--Select--</option>@foreach($allsub as $sub)<option value="{{ $sub->id }}">{{$sub->subject_name}}</option>@endforeach</select></div><div class="col-md-2"><label class="form-label mb-3">UNIT CODE</label><input type="text" class="form-control form-control-lg form-control-solid" name="unit_code[]" id="unit_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">OPTION CODE</label><input type="text" class="form-control form-control-lg form-control-solid" name="option_code[]"  id="option_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">FEES</label><input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_'+i+'" disabled/><input type="hidden" class="amount_fees" name="fees[]" id="fees_'+i+'"/><a style="cursor:pointer;color:red;padding:5px 4px" onclick="deleterow(this)">Remove</a></div></div>');
      i++
    }




	</script>
@endif
@if($data->main_exam_type=='AS Level')
	@php
  		$count=json_decode($data->exam_information, true);
  		$maincount=sizeof($count);
  	@endphp
	<script>
		@if($maincount)
			var i={{$maincount}};
		@else
		var i=1;
		@endif
		function addmore(){
        	$("#add_more").append('<div class="mb-10 fv-row row"><div class="col-md-12" style="margin-bottom:8px"><label class="form-label mb-3">EXAM BOARD</label><select id="type_'+i+'" onchange="typecheangeaslevel(this)" data-id="'+i+'" name="exam_board[]" class="form-select form-select-lg form-select-solid"><option value="Edexcel">Edexcel</option><option value="AQA">AQA</option><option value="OCR">OCR</option><option value="Cambridge(CIE)">Cambridge(CIE)</option><option value="WJEC">WJEC</option></select></div><div class="col-md-2"><label class="form-label mb-3">EXAM SERIES</label><select name="exam_series[]" id="exam_series_'+i+'" class="form-select form-select-lg form-select-solid"><option>--Select--</option><option value="November 2023">November 2023</option><option value="January 2023">January 2023</option><option value="June 2023">June 2023</option></select></div><div class="col-md-2"><label class="form-label mb-3">TYPE</label><select name="type[]"  class="form-select form-select-lg form-select-solid type"><option value="AS Level">AS Level</option></select></div><div class="col-md-2"><label class="form-label mb-3">SUBJECT</label><select name="subject[]" id="subject_'+i+'" onchange="subjectcheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid subject"><option selected disabled>--Select--</option>@foreach($allsub as $sub)<option value="{{ $sub->id }}">{{$sub->subject_name}}</option>@endforeach</select></div><div class="col-md-2"><label class="form-label mb-3">UNIT CODE</label><input type="text" class="form-control form-control-lg form-control-solid" name="unit_code[]" id="unit_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">OPTION CODE</label><input type="text" class="form-control form-control-lg form-control-solid" name="option_code[]"  id="option_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">FEES</label><input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_'+i+'" disabled/><input type="hidden" class="amount_fees" name="fees[]" id="fees_'+i+'"/><a style="cursor:pointer;color:red;padding:5px 4px" onclick="deleterow(this)">Remove</a></div></div>');
      i++
    }




	</script>
@endif
@if($data->main_exam_type=='IGCSE')
	@php
  		$count=json_decode($data->exam_information, true);
  		$maincount=sizeof($count);
  	@endphp
	<script>
		@if($maincount)
			var i={{$maincount}};
		@else
		var i=1;
		@endif

		function addmore(){
        $("#add_more").append('<div class="mb-10 fv-row row"><div class="col-md-12" style="margin-bottom:8px"><label class="form-label mb-3">EXAM BOARD</label><select id="type_'+i+'" onchange="typecheangeigcse(this)" data-id="'+i+'" name="exam_board[]" class="form-select form-select-lg form-select-solid"><option value="Edexcel">Edexcel</option><option value="AQA">AQA</option><option value="OCR">OCR</option><option value="Cambridge(CIE)">Cambridge(CIE)</option><option value="WJEC">WJEC</option></select></div><div class="col-md-2"><label class="form-label mb-3">EXAM SERIES</label><select name="exam_series[]" id="exam_series_'+i+'" class="form-select form-select-lg form-select-solid"><option>--Select--</option><option value="November 2023">November 2023</option><option value="January 2023">January 2023</option><option value="June 2023">June 2023</option></select></div><div class="col-md-2"><label class="form-label mb-3">TYPE</label><select name="type[]" class="form-select form-select-lg form-select-solid type"><option value="IGCSE">IGCSE</option></select></div><div class="col-md-2"><label class="form-label mb-3">SUBJECT</label><select name="subject[]" id="subject_'+i+'" onchange="subjectcheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid subject"><option selected disabled>--Select--</option>@foreach($allsub as $sub)<option value="{{ $sub->id }}">{{$sub->subject_name}}</option>@endforeach</select></div><div class="col-md-2"><label class="form-label mb-3">UNIT CODE</label><input type="text" class="form-control form-control-lg form-control-solid" name="unit_code[]" id="unit_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">OPTION CODE</label><input type="text" class="form-control form-control-lg form-control-solid" name="option_code[]"  id="option_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">FEES</label><input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_'+i+'" disabled/><input type="hidden" class="amount_fees" name="fees[]" id="fees_'+i+'"/><a style="cursor:pointer;color:red;padding:5px 4px" onclick="deleterow(this)">Remove</a></div></div>');
      i++
    }
    



	</script>
@endif










  <script>
function deleterow(em) {
 
   $(em).closest(".row").remove();

}
</script>



    <script>
    // gcse
    function typecheangegcse(el){

    	
          var type_id=el.value;
         
          var index_id = el.id; 
          var arr = index_id.split('_');
          var mainid=arr[1];
          if(type_id) {
             $.ajax({
                 url: "{{  url('/get/gcse/subject/all/') }}/"+type_id,
                 type:"GET",
                 dataType:"json",
                 success:function(data) {
                    console.log(data);

                        $('#subject_'+mainid).empty();
                        $('#subject_'+mainid).append(' <option value="">--Select--</option>');
                        $.each(data,function(index,districtObj){
                         $('#subject_'+mainid).append('<option value="' + districtObj.id + '">'+districtObj.subject_name+'</option>');
                       });

                        $('#unit_code_'+mainid).val('');
                        $('#fees_demo_'+mainid).val('');
                        $('#fees_'+mainid).val('');
                        

                     }
             });
         } else {
             alert('sorry data not found');
         }
    }
        function typecheangeigcse(el){

    	
          var type_id=el.value;
          alert(type_id);
          var index_id = el.id; 
          var arr = index_id.split('_');
          var mainid=arr[1];
          if(type_id) {
             $.ajax({
                 url: "{{  url('/get/igcse/subject/all/') }}/"+type_id,
                 type:"GET",
                 dataType:"json",
                 success:function(data) {
                    console.log(data);

                        $('#subject_'+mainid).empty();
                        $('#subject_'+mainid).append(' <option value="">--Select--</option>');
                        $.each(data,function(index,districtObj){
                         $('#subject_'+mainid).append('<option value="' + districtObj.id + '">'+districtObj.subject_name+'</option>');
                       });

                        $('#unit_code_'+mainid).val('');
                        $('#fees_demo_'+mainid).val('');
                        $('#fees_'+mainid).val('');
                        

                     }
             });
         } else {
             alert('sorry data not found');
         }
    }
   function typecheangealevel(el){

    	
          var type_id=el.value;
          
          var index_id = el.id; 
          var arr = index_id.split('_');
          var mainid=arr[1];
          if(type_id) {
             $.ajax({
                 url: "{{  url('get/alevel/subject/all/') }}/"+type_id,
                 type:"GET",
                 dataType:"json",
                 success:function(data) {
                    console.log(data);

                        $('#subject_'+mainid).empty();
                        $('#subject_'+mainid).append(' <option value="">--Select--</option>');
                        $.each(data,function(index,districtObj){
                         $('#subject_'+mainid).append('<option value="' + districtObj.id + '">'+districtObj.subject_name+'</option>');
                       });

                        $('#unit_code_'+mainid).val('');
                        $('#fees_demo_'+mainid).val('');
                        $('#fees_'+mainid).val('');
                        

                     }
             });
         } else {
             alert('sorry data not found');
         }
    }

   function typecheangeaslevel(el){

    	
          var type_id=el.value;
          
          var index_id = el.id; 
          var arr = index_id.split('_');
          var mainid=arr[1];
          if(type_id) {
             $.ajax({
                 url: "{{  url('get/aslevel/subject/all/') }}/"+type_id,
                 type:"GET",
                 dataType:"json",
                 success:function(data) {
                    console.log(data);

                        $('#subject_'+mainid).empty();
                        $('#subject_'+mainid).append(' <option value="">--Select--</option>');
                        $.each(data,function(index,districtObj){
                         $('#subject_'+mainid).append('<option value="' + districtObj.id + '">'+districtObj.subject_name+'</option>');
                       });

                        $('#unit_code_'+mainid).val('');
                        $('#fees_demo_'+mainid).val('');
                        $('#fees_'+mainid).val('');
                        

                     }
             });
         } else {
             alert('sorry data not found');
         }
    }

    // igcse
	    function typecheange(el){
	          var type_id=el.value;

	          var index_id = el.id; 
	          var arr = index_id.split('_');
	          var mainid=arr[1];
	          if(type_id) {
	             $.ajax({
	                 url: "{{  url('/get/subject/all/') }}/"+type_id,
	                 type:"GET",
	                 dataType:"json",
	                 success:function(data) {
	                    console.log(data);

	                        $('#subject_'+mainid).empty();
	                        $('#subject_'+mainid).append(' <option value="">--Select--</option>');
	                        $.each(data,function(index,districtObj){
	                         $('#subject_'+mainid).append('<option value="' + districtObj.id + '">'+districtObj.subject_name+'</option>');
	                       });

	                        $('#unit_code_'+mainid).val('');
	                        $('#fees_demo_'+mainid).val('');
	                        $('#fees_'+mainid).val('');
	                        

	                     }
	             });
	         } else {
	             alert('sorry data not found');
	         }
	    }


    // A level
  

   function subjectcheange(el){

          var s_id=el.value;
          var index_id = el.id; 
          var total_amount = $("#total_amount").val();
          var arr = index_id.split('_');
          var mainid=arr[1];
          if(s_id) {
             $.ajax({
                 url: "{{  url('/get/subject/details/') }}/"+s_id,
                 type:"GET",
                 success:function(data) {
                    
                        $('#unit_code_'+mainid).val(data.unit_code);
                        $('#fees_demo_'+mainid).val(data.exam_fees);
                        $('#fees_'+mainid).val(data.exam_fees);
                        // $('#option_code_'+mainid).val(data.exam_fees);

                        var amou=parseInt(data.exam_fees);
                        $("#total_amount").val(Number(total_amount) + Number(amou));
                        addmockexam(s_id);
                        
                     }
             });
         } else {
             alert('sorry data not found');
         }
    }



    function addmockexam(id){
      $("#mock_exam_section_ofsubject").append('<div class="col-lg-12 mt-5"><label for="" class="d-flex align-items-center form-label">Mock Exams (Please refer to fees list for cost)*</label><br><div class="form-check" style="margin:10px 0px"><input class="form-check-input" name="mock_test" type="radio" id="mock_test_no" checked  value="mock_test_no"><label class="form-check-label" for="">I do not require a mock for this exam</label></div><div class="form-check" style="margin:10px 0px"><input class="form-check-input" name="mock_test" id="mock_test_yes" type="radio"  value="mock_test_yes"><label class="form-check-label" for="">I would like to book a mock for this exam</label></div></div><div class="col-lg-12 mt-4" id="marked_section" style="display: none;"><label for="" class="d-flex align-items-center form-label">Information About Mocks*</label><br><div class="form-check" style="margin:10px 0px"><input class="form-check-input" name="marked_mocks" type="radio" checked value="I would like to marked mocks"><label class="form-check-label" for="card"> I would like to marked mocks</label></div><div class="form-check" style="margin:10px 0px"><input class="form-check-input" name="marked_mocks" type="radio" id=""  value="I do not require my  mock marked"><label class="form-check-label" for="card">I do not require my  mock marked</label> </div></div><div class="col-lg-12 mt-4" id="papers_section" style="display: none;"><label for="" class="d-flex align-items-center form-label">I would like to sit the following papers*</label><br><div class="form-check" style="margin:10px 0px"><input class="form-check-input" name="mock_test_paper_1" type="checkbox" checked value="Papers 1 of this Spec"><label class="form-check-label" for="card">Papers 1 of this Spec</label></div><div class="form-check" style="margin:10px 0px"><input class="form-check-input" name="mock_test_paper_2" type="checkbox" id=""  value="Papers 2 of this Spec"><label class="form-check-label" for="card"> Papers 2 of this Spec</label></div><div class="form-check" style="margin:10px 0px"><input class="form-check-input" name="mock_test_paper_3" type="checkbox" id=""  value="Papers 3 of this Spec"><label class="form-check-label" for="card">Papers 3 of this Spec</label></div><div class="form-check" style="margin:10px 0px"><input class="form-check-input" name="mock_test_paper_4" type="checkbox" id=""  value="Papers 4 of this Spec"><label class="form-check-label" for="card"> 4 of this Spec</label></div></div>')
    }
  </script>
  <script>
  	function submitcandidatenumber(){
  		$("#success_message_candidate").empty();
  		var main_candidate_number=$(".main_candidate_number").val();
  		var id=$("#id").val();
  		if(main_candidate_number==''){
  			$("#success_message_candidate").html('Please Enter Candidate Number<br>');
  		}else{
			   var countmaincan=$(".main_candidate_number").val().length;
			   if(countmaincan ==4 ){
		   		    $.ajax({
	                 url: "{{  url('admin/get/insert/candidatenumbers/') }}",
	                 type:"GET",
	                 data:{
	                 	'id':id,
	                 	'main_candidate_number':main_candidate_number,
	                 },
	                 success:function(data) {
	                    	
	                    	$("#success_message_candidate").html(data +'<br>')
	                        
	                    }
	             });
		   		}else{
		   			$("#success_message_candidate").html('Need 4 Digits Candidate Numbers<br>');
		   		}

		
  		}
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
  		var email=$("#email").val();
  		var address_line_1=$("#address_line_1").val();
  		var address_line_2=$("#address_line_2").val();
  		var date_of_birth=$("#date_of_birth").val();
  		var postcode=$("#postcode").val();
  		var emergency_contact_number=$("#emergency_contact_number").val();

  		$.ajax({
	             url: "{{  url('admin/get/update/basicinformation_update/') }}",
	             type:"GET",
	             data:{
	             	'id':id,
	             	'first_name':first_name,
	             	'middle_name':middle_name,
	             	'last_name':last_name,
	             	'city':city,
	             	'phone':phone,
	             	'email':email,
	             	'address_line_1':address_line_1,
	             	'address_line_2':address_line_2,
	             	'date_of_birth':date_of_birth,
	             	'postcode':postcode,
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
  	function other_formation_update(){

		$("#success_message_basic_information").empty();
		$("#success_message_other_formation_update").empty();

  		    var id=$("#id").val();

  		    var has_a_candidate = $("input[name='has_a_candidate']:checked").val();
  		    var has_a_candidate_number = $("#has_a_candidate_number").val();

            var uci = $("input[name='uci']:checked").val();
            var uci_number = $(".uci_number").val();

            var uln = $("input[name='uln']:checked").val();
            var uln_number = $(".uln_number").val();

            var type_of_learner =  $("input[name='type_of_learner']:checked").val();

            var retaking_exams = $("input[name='retaking_exams']:checked").val();
            var retaking_exams_name = $("#retaking_exams_name").val();


            var caring_forwad = $("input[name='caring_forwad']:checked").val();
            var caring_forwad_details = $("#caring_forwad_details").val();

  		

  		

  		$.ajax({
	             url: "{{  url('admin/get/update/other_formation_update/') }}",
	             type:"GET",
	             data:{
	             	'id':id,

	             	'has_a_candidate':has_a_candidate,
	             	'has_a_candidate_number':has_a_candidate_number,

	             	'uci':uci,
	             	'uci_number':uci_number,

	             	'uln':uln,
	             	'uln_number':uln_number,

	             	'type_of_learner':type_of_learner,

	             	'retaking_exams':retaking_exams,
	             	'retaking_exams_name':retaking_exams_name,

	             	'caring_forwad':caring_forwad,
	             	'caring_forwad_details':caring_forwad_details,
	             	
	             },
	             success:function(data) {
	                	
	                	$("#success_message_other_formation_update").html(data +'<br>')
	                	console.log(data);
	                    
	                }
	        });
  	
  	}
  </script>
  <script>
  	function SPECIAL_ARRANGEMENTS_update(){

  		$("#success_message_SPECIAL_ARRANGEMENTS_information").empty();
  		$("#success_message_special_arrangements_update").empty();

  		    var id=$("#id").val();
			var special_acces =$("input[name='special_acces']:checked").val();
            var special_acces_evidence = $("#special_acces_evidence").val();

            var mental_conditions = $("input[name='mental_conditions']:checked").val();
            var mental_condition_details = $("#mental_condition_details").val();

            var condition_disability =$("input[name='condition_disability']:checked").val();
            var condition_disability_details = $("#condition_disability_details").val();
  		   

  		

  		

  		$.ajax({
	             url: "{{  url('admin/get/update/special_arrangements_update/') }}",
	             type:"GET",
	             data:{
	             	'id':id,
	             	'special_acces':special_acces,
	             	'special_acces_evidence':special_acces_evidence,

	             	'mental_conditions':mental_conditions,
	             	'mental_condition_details':mental_condition_details,

	             	'condition_disability':condition_disability,
	             	'condition_disability_details':condition_disability_details,
	             	
	             },
	             success:function(data) {
	                	
	                	$("#success_message_special_arrangements_update").html(data +'<br>')
	                	console.log(data);
	                    
	                }
	        });
  	}
  </script>

  <script>
  	function TERMS_AND_CONDITIONS_Update(){

  		$("#success_message_SPECIAL_ARRANGEMENTS_information").empty();
  		$("#success_message_special_arrangements_update").empty();

  		   var id=$("#id").val();
			var relationship = $("#relationship").val();
            var relation_name = $("#relation_name").val();
            var todays_date = $(".todays_date").val();
  		   

  		

  		

  		$.ajax({
	             url: "{{  url('admin/get/update/terms_and_conditon_update/') }}",
	             type:"GET",
	             data:{
	             	'id':id,
	             	'relationship':relationship,
	             	'relation_name':relation_name,
	             	'todays_date':todays_date,
	             },
	             success:function(data) {
	                	$("#success_message_terms_and_conditon_update").html(data +'<br>')
	                	console.log(data);
	                }
	        });

  	}
  </script>

  <script>
  	function paid_status(){
  		 var id=$("#id").val();
  		 var paid_status=$("#paid_status").val();
  		 $.ajax({
	             url: "{{  url('admin/get/update/paid_status/') }}",
	             type:"GET",
	             data:{
	             	'id':id,
	             	'paid_status':paid_status,
	             },
	             success:function(data) {
	                	$("#success_message_paid_status_update").html(data +'<br>')
	                }
	        });
  	}
  </script>



  <script>
  	function updatesubjectsubmit(){
  		 var id=$("#id").val();
  		 alert(id);
  	}
  </script>
  <script>
  	function confimexambooking(){
  		$("#confimexambooking_date_section").show();
  	}

  	function canclesubmitcandidatenumber(){
  		$("#confimexambooking_date_section").hide();
  	}


  	function bookingsubmitcandidatenumber(){

  		var id=$("#id").val();
  		var bookingsubmitdate = $("#bookingsubmitdate").val();
  		 $("#bookingsubmitdate_success").empty();
  		 $("#bookingsubmitdate_error").empty();

  		if(bookingsubmitdate ==''){

			$("#bookingsubmitdate_error").html("Please Enter Date");
  			 

  		}else{
			$.ajax({
	             url: "{{  url('admin/get/exmabooking/updatedate/') }}",
	             type:"GET",
	             data:{
	             	'id':id,
	             	'bookingsubmitdate':bookingsubmitdate,
	             },
	             success:function(data){
                        alert(data);
	               // 	 $("#bookingsubmitdate_success").html("Booking date update success");

	                }
	        });
			 

  		}

  		
  	}
  </script>

  <script>
  	function paidstatusupdate(){
  		var id=$("#id").val();
  		var paid_status = $("#paid_status").val();
  		var notes = $("#notes").val();
  		$("#paid_status_success").empty();
		$.ajax({
             url: "{{  url('admin/get/exmabooking/updateapaymentstatus/') }}",
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
  <script>
            const myDatePicker = MCDatepicker.create({ 
                el: '#date_of_birth',
                dateFormat: 'DD-MMM-YYYY',
            });
        </script>
@endsection