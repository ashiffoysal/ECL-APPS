@extends('layouts.backend')
@section('content')
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
									                                  <label for="UCI" class="form-label">ULN Number ( 13 digits )</label>
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
									                                  <td>Caring forwad Details</td>
									                                  <td>{{ $data->caring_forwad_details }}</td> 
									                                </tr>
																	@endif
	@endif
									                                </tbody>
									                            </table>
									                        </div>
									                      </div>
									                    </div>
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
								                                    <option value="November 2022" @if($random->exam_series=='November 2022') selected @endif>November 2022</option>
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
								                                    <option value="November 2022" @if($random->exam_series=='November 2022') selected @endif>November 2022</option>
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
								                                    <option value="November 2022" @if($random->exam_series=='November 2022') selected @endif>November 2022</option>
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
														<img class="mainimg" src="{{ asset('/'.$data->photo_id) }}">
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Post-->
												<!--begin::Separator-->
												<a class="badge badge-danger" href="{{ asset('/'.$data->photo_id) }}" target="_blank" download >Download Image</a>
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
														<img class="mainimg" src="{{ asset('/'.$data->recent_photo) }}">
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Post-->
												<!--begin::Separator-->
													<a class="badge badge-danger" href="{{ asset('/'.$data->recent_photo) }}" target="_blank" download >Download Image</a>
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
															    <label for="exampleInputPassword1">Pay Amount</label>
															    <input type="text" class="form-control" name="paid_amount" placeholder="Paid Amount">
															    @error('paid_amount')
																<div style="color: red">{{ $message }}</div>
																@enderror
															  </div>
															  <div class="form-group">
															    <label for="exampleInputPassword1">Paid By</label>
															    <select class="form-select form-select-lg form-select-solid" name="paid_by">
															    	<option value="Cash Payment">Cash Payment</option>
															    	<option value="Bank Transfer">Bank Transfer</option>
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
Payment Status
Success!
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
								
								</div>
							
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>


@endsection