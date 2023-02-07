@extends('layouts.backend')
@section('title', 'Subject')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend') }}/datepicker/mc-calendar.min.css" />
<script src="{{ asset('frontend') }}/datepicker/mc-calendar.min.js"></script>
<style>
	.kbw-signature {
    width: 430px !important;
    height: 220px !important;
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
									<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Exam Booking</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-200 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Exam Booking</li>
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">GCSE</li>
										<!--end::Item-->
										
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center py-1">
							
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container">
								<!--begin::Card-->
								<form action="{{ url('admin/exam-booking-gcse/create') }}" method="post"  enctype="multipart/form-data">
									@csrf
								<div class="card">
									
									   <div class="card-body">
					                    <!--begin::Stepper-->
					                        <div class="row">
				                                <!--begin::Col-->
				                                <div class="col-lg-12">
				                                    <label for="middle_name" class="form-label">Exam Type</label>
				                               		<input type="hidden" name="main_exam_type" value="GCSE">
				                               		<input type="text" class="form-control form-control-lg form-control-solid" disabled value="GCSE" />
				                                </div>
				                                 <div class="col-lg-6 mt-3" style="margin-bottom: 4px">
				                                  <label class="form-label mb-3">Recent Photo</label>
				                                  <input type="file" name="thumbnail_img" required  class="form-control form-control-lg form-control-solid"/>
				                                </div>
				                                 <div class="col-lg-6 mt-3" style="margin-bottom: 4px">
				                                  <label class="form-label mb-3">Photo ID</label>
				                                  <input type="file" name="fileUpload" required  class="form-control form-control-lg form-control-solid"/>
				                                </div>
				                                <div class="col-lg-6 mt-3">
				                                  <label class="form-label mb-3">Legal First Name </label>
				                                  <input type="text"  class="form-control form-control-lg form-control-solid" id="first_name" name="first_name" placeholder="Please Enter Legal First name" required />
				                                </div>
				                                <div class="col-lg-6 mt-3">
				                                    <label for="middle_name" class="form-label">Middle name(s)</label>
				                                    <input type="text" name="middle_name" id="middle_name" class="form-control form-control-lg form-control-solid" placeholder="Please Enter Middle name">
				                                </div>
				                                <div class="col-lg-6 mt-3">
				                                    <label for="last_name" class="form-label">Legal Last Name</label>
				                                    <input type="text" name="last_name" id="last_name" class="form-control form-control-lg form-control-solid" placeholder="Please Enter Legal Last Name" required>
				                                </div>
				                                  <div class="col-lg-6 mt-3">
				                                    <label for="email" class="form-label">Email</label>
				                                    <input type="email" name="email" id="email" class="form-control form-control-lg form-control-solid" placeholder="Please Enter Email" required>
				                                </div>
				                                 <div class="col-lg-6 mt-3">
				                                    <label for="phone" class="form-label">phone number</label>
				                                    <input type="text" id="phone" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Please Enter Phone Number" required>
				                                </div>
				                                 <div class="col-lg-6 mt-3">
				                                    <label for="emergency_contact_number" class="form-label">Emergency contact number </label>
				                                    <input type="text"  id="emergency_contact_number" placeholder="Please Enter Emergency Contact Number" name="emergency_contact_number" class="form-control form-control-lg form-control-solid" required>
				                                </div>
				                                
				                                 <div class="col-lg-6 mt-3">
				                                    <label for="inputPassword5" class="form-label">Address line 1</label>
				                                    <textarea type="text" name="address_line_1" id="address_line_1" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock" placeholder="Please Enter Address Line 1" required></textarea>
				                                </div>
				                                  <div class="col-lg-6 mt-3">
				                                    <label for="inputPassword5" class="form-label">Address line 2</label>
				                                    <textarea  type="text" name="address_line_2" id="address_line_2" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock" placeholder="Please Enter Address Line 2"></textarea>
				                                </div>
				                                <div class="col-lg-6 mt-3">
				                                    <label for="=" class="form-label">City</label>
				                                    <input type="text" id="city" class="form-control form-control-lg form-control-solid city" name="city"  placeholder="Please Enter City" required>
				                                </div>
				                                <div class="col-lg-6 mt-3">
				                                    <label for="inputPassword5" class="form-label">Post-code</label>
				                                    <input type="text"  id="postcode" placeholder="Please Enter Post Code" name="postcode" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock" required>
				                                </div>
				                                 <div class="col-lg-6 mt-3">
				                                    <label for="inputPassword5" class="form-label">Date of birth</label>
				                                    <input type="text" id="date_of_birth" class="form-control form-control-lg form-control-solid" name="date_of_birth" placeholder="Please Enter Date of birth" aria-describedby="passwordHelpBlock" required>
				                                </div>
				                                <div class="col-lg-12 mt-3">
				                                  <label for="" class="d-flex align-items-center form-label">Gender</label>
				                                  <div class="form-check" style="margin:10px 0px">
				                                    <input class="form-check-input gender" type="radio" checked="checked" id="male" name="gender" value="Male"/>
				                                    <label class="form-check-label" for="male">
				                                     Male
				                                    </label>
				                                  </div>
				                                  <div class="form-check" style="margin:10px 0px">
				                                   <input class="form-check-input gender" type="radio" name="gender" id="female" value="Female" />
				                                    <label class="form-check-label" for="Female">
				                                     Female
				                                    </label>
				                                  </div>
				                                </div>

				                            </div>

				                            <div class="row" id="GCSE">
				                                <div class="col-lg-12 mt-2">
				                                  <label for="" class="d-flex align-items-center form-label">Has the candidate sat exams with us before?</label>
				                                  <div class="form-check" style="margin:10px 0px">
				                                    <input class="form-check-input"  id="has_a_candidate_no" type="radio" checked="checked" name="has_a_candidate" value="no">
				                                    <label class="form-check-label" for="has_a_candidate_no">
				                                     No
				                                    </label>
				                                  </div>
				                                  <div class="form-check" style="margin:10px 0px">
				                                    <input class="form-check-input" type="radio" id="has_a_candidate_yes" name="has_a_candidate" value="yes" />
				                                    <label class="form-check-label" for="has_a_candidate_yes">
				                                     Yes
				                                    </label>
				                                  </div>
				                                </div>
				                                <!--  -->
				                                <div class="col-lg-12 mt-2" id="has_a_candidate_section" style="display: none"> 
				                                  <label for="" class="form-label">Exams Candidate Number*</label><br>
				                                  <span>This will be on Previous Timetables and Results Information</span>
				                                    <input type="text"  name="has_a_candidate_number" id="has_a_candidate_number" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock" value="">
				                                    <span id="candidate_number_new_message" style="color: red;"></span>
				                                 </div> 

				                                <div class="col-lg-12 mt-2">
				                                  <label for="" class="d-flex align-items-center form-label">Do you have a UCI Number ( 13 digits )*?</label>

				                                  <div class="form-check" style="margin:10px 0px">
				                                    <input class="form-check-input uci" id="no" type="radio" checked="checked" name="uci" value="no" />
				                                    <label class="form-check-label" for="no">
				                                     No
				                                    </label>
				                                  </div>
				                                  <div class="form-check" style="margin:10px 0px">
				                                     <input class="form-check-input uci" type="radio" id="yes" name="uci" value="yes"/>
				                                    <label class="form-check-label" for="yes">
				                                     Yes
				                                    </label>
				                                  </div>
				                                </div>
				                                
				                                <div class="col-lg-12 mt-2" id="uci_section"  style="display: none">
				                                  <label for="UCI" class="form-label">UCI Number ( 13 digits )</label>
				                                    <input type="text" onchange="insertmybooking()" name="uci_number" class="form-control form-control-lg form-control-solid uci_number" aria-describedby="passwordHelpBlock">
				                                    <span id="warning-message" style="color: red;"></span>
				                                 </div> 

				                                  <div class="col-lg-12 mt-2">
				                                  <label for="" class="d-flex align-items-center form-label">Do you have a ULN Number ( 10 digits )*? </label>
				                                  <div class="form-check" style="margin:10px 0px">
				                                    <input class="form-check-input" id="uln_no" type="radio" checked="checked" name="uln"  value="no"/>
				                                    <label class="form-check-label" for="">
				                                     No
				                                    </label>
				                                  </div>
				                                  <div class="form-check" style="margin:10px 0px">
				                                      <input class="form-check-input" id="uln_yes" type="radio" name="uln" value="yes" />
				                                    <label class="form-check-label" for="Female">
				                                     Yes
				                                    </label>
				                                  </div>
				                                </div>
				                                 <div class="col-lg-12 mt-2" id="uln_section"  style="display: none">
				                                  <label for="UCI" class="form-label">ULN Number ( 10 digits )</label>
				                                    <input type="text" onchange="insertmybooking()" max="10" name="uln_number" id="uln" class="form-control form-control-lg form-control-solid uln_number" aria-describedby="passwordHelpBlock">
				                                    <span id="new-message" style="color: red;"></span>
				                                 </div>

				                                  <div class="mb-10 fv-row row">
					                                <div class="col-md-12" style="margin-bottom:8px">
					                                  <label class="form-label mb-3">EXAM BOARD</label>
					                                  <!--end::Label-->
					                                  <!--begin::Input-->
					                                 <select name="exam_board[]"  onchange="typecheange(this)" id="type_0" class="form-select form-select-lg form-select-solid">
					                                   <option value="OCR">OCR</option>
					                                    <option value="Edexcel">Edexcel</option>
					                                    <option value="AQA">AQA</option>
					                                    
					                                    <option value="Cambridge CIE">Cambridge(CIE)</option>
					                                    <option value="WJEC">WJEC</option>
					                                 </select>

					                                </div>
					                                <div class="col-md-2">
					                                    <!--begin::Label-->
					                                  <label class="form-label mb-3">EXAM SERIES</label>
					                                  <!--end::Label-->
					                                  <!--begin::Input-->
					                                   <select name="exam_series[]" id="exam_series_0" class="form-select form-select-lg form-select-solid">
					                                 
					                                    <option value="November 2022">November 2022</option>
					                                    <option value="January 2023">January 2023</option>
					                                    <option value="June 2023">June 2023</option>
					                                  </select>
					                                </div>
					                                 <div class="col-md-2">
					                                    <!--begin::Label-->
					                                  <label class="form-label mb-3">TYPE</label>
					                                  <select name="type[]"  class="form-select form-select-lg form-select-solid type">
					                                    <option value="GCSE">GCSE</option>
					                                  </select>
					                                </div>
					                                 <div class="col-md-2">
					                                    <!--begin::Label-->
					                                   <label class="form-label mb-3">SUBJECT</label>
					                                   <select name="subject[]" onchange="subjectcheange(this)" id="subject_0"  class="form-select form-select-lg form-select-solid subject">
					                                      <option selected disabled>Select</option>
					                                     @foreach($allgcsesub as $sub)
					                                     	<option value="{{ $sub->id }}">{{$sub->subject_name}}</option>
					                                     @endforeach
					                                    
					                                     
					                                  </select>
					                                </div>
					                                 <div class="col-md-2">
					                                    <!--begin::Label-->
					                                  <label class="form-label mb-3">UNIT CODE</label>
					                                 
					                                  <input type="text" class="form-control form-control-lg form-control-solid" name="unit_code[]" id="unit_code_0" />
					                                </div>
					                                  <div class="col-md-2">
					                                   
					                                  <label class="form-label mb-3">OPTION CODE</label>
					                                 
					                                  <input type="text" class="form-control form-control-lg form-control-solid" name="option_code[]" id="option_code_0" />
					                                </div>
					                                 <div class="col-md-2">
					                                    
					                                  <label class="form-label mb-3">FEES</label>
					                                  
					                                  <input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_0" disabled/>
					                                  <input type="hidden" class="fees" name="fees[]" id="fees_0"/>
					                                   <input type="hidden" id="totalmain_amount" class="totalmain_amount" value="0"/>
					                                </div>
					                              <!--end::Input-->
					                            </div>
					                            <div class="mb-10 fv-row row" id="add_more">

					                            </div>
					                            <div class="mb-10 fv-row row">
					                              <div class="col-md-12 text-end">
					                                <button type="button" onclick="addmore()" class="btn-sm btn-success" style="color: #fff;">Add Subjects</button>
					                              </div>
					                            </div>
				                            </div>

				                             <div class="mb-10 fv-row row">
				                              <div class="col-lg-12 mt-2">
				                                  <label for="" class="d-flex align-items-center form-label">Type of Learner</label>
				                                  <div class="form-check" style="margin:10px 0px">
				                                    <input class="form-check-input" id="Learning_via" type="radio"  name="type_of_learner"  value="Learning via, or registered with, one of our Partners"  checked />

				                                    <label class="form-check-label" for="Learning_via">
				                                     Learning via, or registered with, one of our Partners
				                                    </label>
				                                  </div>
				                                  <div class="form-check" style="margin:10px 0px">
				                                   <input  class="form-check-input" id="Private_Candidate" type="radio" name="type_of_learner" value="Private Candidate" />
				                                    <label class="form-check-label" for="Private_Candidate">
				                                     Private Candidate
				                                    </label>
				                                  </div>
				                                </div>

				                                <div class="col-lg-12 mt-2">
				                                  <label for="" class="d-flex align-items-center form-label">Are you retaking these exams?*</label>
				                                  <div class="form-check" style="margin:10px 0px">
				                                    <input class="form-check-input" id="retaking_exams_no" type="radio" name="retaking_exams" value="no" />
				                                    <label class="form-check-label" for="Learning_via">
				                                    No
				                                    </label>
				                                  </div>
				                                  <div class="form-check" style="margin:10px 0px">
				                                      <input class="form-check-input" id="retaking_exams_yes" type="radio" name="retaking_exams" value="yes"/>
				                                    <label class="form-check-label" for="Private_Candidate">
				                                     Yes
				                                    </label>
				                                  </div>
				                                </div>

				                                <div class="col-lg-12 mt-2" id="retaking_section" style="display:none;">
				                                  <label for="retaking_exams" class="form-label">Please specify which exams you are retaking?</label>
				                                  <input type="text" name="retaking_exams_name" id="retaking_exams_name" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
				                                </div>
				                                <div class="col-lg-12 mt-2">
				                                  <label for="" class="d-flex align-items-center form-label">Are you carrying forward your practical endorsement /course work/ spoken/ or any other assessment?</label>
				                                  <div class="form-check" style="margin:10px 0px">
				                                    <input  class="form-check-input" id="caring_forwad_no" type="radio" checked="checked" name="caring_forwad" value="no"/>
				                                    <label class="form-check-label" for="caring_forwad_no">
				                                    No
				                                    </label>
				                                  </div>
				                                  <div class="form-check" style="margin:10px 0px">
				                                      <input class="form-check-input" id="caring_forwad_yes" type="radio" name="caring_forwad" value="yes" />
				                                    <label class="form-check-label" for="caring_forwad_yes">
				                                     Yes
				                                    </label>
				                                  </div>
				                                </div>
				                                
				                              <div class="col-lg-12 mt-2" id="caring_forwad_section" style="display: none;" >
				                                <label for="UCI"  class="form-label">Please Specify the details including exam board & grade*
				                                </label>
				                                <input type="text" name="caring_forwad_details" id="caring_forwad_details" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock" >
				                              </div>



					                              <div class="col-lg-12 mt-2">
					                                    <label for="" class="d-flex align-items-center form-label">Do you require special access requirements during your exam?*</label>
					                                    <div class="form-check" style="margin:10px 0px">
					                                      <input  class="form-check-input" id="special_acces_no" type="radio" checked="checked" name="special_acces" value="no" checked />
					                                      <label class="form-check-label" for="special_acces_no">
					                                      No
					                                      </label>
					                                    </div>
					                                    <div class="form-check" style="margin:10px 0px">
					                                        <input class="form-check-input" id="special_acces_yes" type="radio" name="special_acces" value="yes"/>
					                                      <label class="form-check-label" for="special_acces_yes">
					                                       Yes
					                                      </label>
					                                    </div>
					                                </div>


				                            <div class="col-lg-12 mt-2" id="evidence_section" style="display: none;" >
				                              <label for="UCI" class="form-label">If yes, please provide any evidence to support your need for access arrangements as required by the relevant awarding bodies?</label>
				                              <input type="text" name="special_acces_evidence" id="special_acces_evidence" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
				                            </div>


				                             <div class="col-lg-12 mt-2">
				                                  <label for="" class="d-flex align-items-center form-label">Do you suffer from any mental conditions such as high levels of anxiety?</label>
				                                  <div class="form-check" style="margin:10px 0px">
				                                    <input class="form-check-input" id="mental_conditions_no" type="radio" checked="checked" name="mental_conditions" value="no"/>
				                                    <label class="form-check-label" for="mental_conditions_no">
				                                    No
				                                    </label>
				                                  </div>
				                                  <div class="form-check" style="margin:10px 0px">
				                                      <input class="form-check-input" id="mental_conditions_yes" type="radio" name="mental_conditions" value="yes"/>
				                                    <label class="form-check-label" for="mental_conditions_yes">
				                                     Yes
				                                    </label>
				                                  </div>
				                                </div>
				                            <div class="col-lg-12 mt-2" id="mental_conditions_section" style="display: none;"  >
				                              <label for="UCI" class="form-label">If yes, please specify</label>
				                              <input type="text" name="mental_condition_details" id="mental_condition_details" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
				                            </div>

				                             <div class="col-lg-12 mt-2">
				                                <label for="" class="d-flex align-items-center form-label">Do you have any conditions or disability?</label>
				                                <div class="form-check" style="margin:10px 0px">
				                                  <input class="form-check-input" id="condition_disability_no" type="radio" checked="checked" name="condition_disability" value="no"/>
				                                  <label class="form-check-label" for="condition_disability_no">
				                                  No
				                                  </label>
				                                </div>
				                                <div class="form-check" style="margin:10px 0px">
				                                    <input  class="form-check-input" id="condition_disability_yes" type="radio" name="condition_disability" value="yes"/>
				                                  <label class="form-check-label" for="condition_disability_yes">
				                                   Yes
				                                  </label>
				                                </div>
				                              </div>
				                            <div class="col-lg-12 mt-2" id="condition_disability_section" style="display: none;" >
				                              <label for="condition_disability_details" class="form-label">If yes, please specify</label>
				                              <input type="text" name="condition_disability_details" id="condition_disability_details" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
				                            </div>
				                                   <div class="col-lg-12 mt-2 fv-row">
					                              <p>If you are not the candidate but the person responsible for the candidate please tell us the relationship.</p>
					                            
					                              <label for="" class="form-label">Relation</label>
					                              <input type="text"  name="relationship" id="relationship" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock" required>
					                            </div>
					                            <div class="col-lg-12 mt-2 fv-row">
					                              <label for="UCI" class="form-label">Name</label>
					                              <input type="text" required name="relation_name" id="relation_name" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
					                            </div>
					                            <div class="col-lg-12 mt-2">
					                              <label  class="form-label">Signature</label>
					                              <input type="file" required name="signed" class="form-control form-control-lg form-control-solid">
					                            </div>
					                             <div class="col-lg-12 fv-row" style="margin-top: 30px !important;">
					                              	<button type="Submit" class="btn-success btn">Submit</button>
					                            </div>
				                            </div>
					                    <!--end::Stepper-->
					                  </div>
								</div>
								<!--end::Card-->
								</form>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>

	
<script>
	function changeexamtype(el){
		
		if(el.value=='GCSE'){

			$("#GCSE").show();
			$("#IGCSE").hide();
			$("#A_Level").hide();
			$("#AAT").hide();
			$("#ACCA").hide();
			$("#Functional_Skills").hide();

		}

		if(el.value=='IGCSE'){

			$("#GCSE").hide();
			$("#IGCSE").show();
			$("#A_Level").hide();
			$("#AAT").hide();
			$("#ACCA").hide();
			$("#Functional_Skills").hide();

		}
		if(el.value=='A Level'){

			$("#GCSE").hide();
			$("#IGCSE").hide();
			$("#A_Level").show();
			$("#AAT").hide();
			$("#ACCA").hide();
			$("#Functional_Skills").hide();

		}
		if(el.value=='ACCA'){

			$("#GCSE").hide();
			$("#IGCSE").hide();
			$("#A_Level").hide();
			$("#AAT").hide();
			$("#ACCA").show();
			$("#Functional_Skills").hide();

		}
		if(el.value=='AAT'){

			$("#GCSE").hide();
			$("#IGCSE").hide();
			$("#A_Level").hide();
			$("#AAT").show();
			$("#ACCA").hide();
			$("#Functional_Skills").hide();

		}
		if(el.value=='Functional Skills'){

			$("#GCSE").hide();
			$("#IGCSE").hide();
			$("#A_Level").hide();
			$("#AAT").hide();
			$("#ACCA").hide();
			$("#Functional_Skills").show();

		}

	}
</script>
 <script>
function deleterow(em) {
   var okkk=$(em).closest(".row").find('.amount_fees').val();
   $(em).closest(".row").remove();
}
</script>

<script>
    var i=1;
    function addmore(){
        
        $("#add_more").append('<div class="mb-10 fv-row row"><div class="col-md-12" style="margin-bottom:8px"><label class="form-label mb-3">EXAM BOARD</label><select  id="type_'+i+'" onchange="typecheange(this)" data-id="'+i+'" name="exam_board[]" class="form-select form-select-lg form-select-solid"><option value="OCR">OCR</option><option value="Edexcel">Edexcel</option><option value="AQA">AQA</option><option value="Cambridge CIE ">Cambridge(CIE)</option><option value="WJEC">WJEC</option></select></div><div class="col-md-2"><label class="form-label mb-3">EXAM SERIES</label><select name="exam_series[]" id="exam_series_'+i+'" class="form-select form-select-lg form-select-solid"><option>--Select--</option><option value="November 2022">November 2022</option><option value="January 2023">January 2023</option><option value="June 2023">June 2023</option></select></div><div class="col-md-2"><label class="form-label mb-3">TYPE</label><select name="type[]"  class="form-select form-select-lg form-select-solid type"><option value="GCSE">GCSE</option></select></div><div class="col-md-2"><label class="form-label mb-3">SUBJECT</label><select name="subject[]" id="subject_'+i+'" onchange="subjectcheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid subject"><option selected disabled>--Select--</option>@foreach($allgcsesub as $sub)<option value="{{ $sub->id }}">{{$sub->subject_name}}</option>@endforeach</select></div><div class="col-md-2"><label class="form-label mb-3">UNIT CODE</label><input type="text" class="form-control form-control-lg form-control-solid" name="unit_code[]" id="unit_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">OPTION CODE</label><input type="text" class="form-control form-control-lg form-control-solid" name="option_code[]"  id="option_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">FEES</label><input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_'+i+'" disabled/><input type="hidden" class="amount_fees" name="fees[]" id="fees_'+i+'"/><a style="cursor:pointer;color:red;padding:5px 4px" onclick="deleterow(this)">Remove</a></div></div>');
      i++
    }

</script>

  <script>

    function typecheange(el){

          var type_id=el.value;
          var index_id = el.id; 
          var arr = index_id.split('_');
          var mainid=arr[1];

          if(type_id) {
             $.ajax({
                  url: "{{  url('/get/admin-gcse/subject/all/') }}/"+type_id,
                 type:"GET",
                 dataType:"json",
                 success:function(data) {
                    console.log(data);

                        $('#subject_'+mainid).empty();
                        $('#subject_'+mainid).append(' <option value="">Select</option>');
                        $.each(data,function(index,districtObj){
                         $('#subject_'+mainid).append('<option value="' + districtObj.id + '">'+districtObj.subject_name+'</option>');
                       });

                        $('#unit_code_'+mainid).val('');
                        $('#fees_demo_'+mainid).val('');
                        $('#fees_'+mainid).val('');
                        

                     }
             });
         } else {
             alert('sorry subject not found');
         }
    }
  

   function subjectcheange(el){

          var s_id=el.value;
          var index_id = el.id; 
          var total_amount = $("#total_amount").val();
          var arr = index_id.split('_');
          var mainid=arr[1];
          if(s_id) {
             $.ajax({
                 url: "{{  url('/get/admin-subject/details/') }}/"+s_id,
                 type:"GET",
                 success:function(data) {
                    
                        $('#unit_code_'+mainid).val(data.unit_code);
                        $('#fees_demo_'+mainid).val(data.exam_fees);
                        $('#fees_'+mainid).val(data.exam_fees);
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
            const myDatePicker = MCDatepicker.create({ 
                el: '#date_of_birth',
                dateFormat: 'DD-MMM-YYYY',
            });
        </script>
        <script>
            const mydDatePicker = MCDatepicker.create({ 
                el: '#exampletwo',
                dateFormat: 'DD-MMM-YYYY',
            });
        </script>

        <script>
var uciminLength = 13;
var ucimaxLength = 13;
$(document).ready(function(){
    $('.uci_number').on('keydown keyup change', function(){
        var char = $(this).val();
        var charLength = $(this).val().length;
        if(charLength < uciminLength){
            $('#warning-message').text('Length is short, minimum '+uciminLength+' required.');
        }else if(charLength > ucimaxLength){
            $('#warning-message').text('Length is not valid, maximum '+ucimaxLength+' allowed.');
            $(this).val(char.substring(0, ucimaxLength));
        }else{
            $('#warning-message').text('');
        }
    });
});
</script>
<script>
var minLength = 10;
var maxLength = 10;
$(document).ready(function(){
    $('.uln_number').on('keydown keyup change', function(){
        var char = $(this).val();
        var charLength = $(this).val().length;
        if(charLength < minLength){
            $('#new-message').text('Length is short, minimum '+minLength+' required.');
        }else if(charLength > maxLength){
            $('#new-message').text('Length is not valid, maximum '+maxLength+' allowed.');
            $(this).val(char.substring(0, maxLength));
        }else{
            $('#new-message').text('');
        }
    });
});
</script>
<script>
var numberminLength = 4;
var numbermaxLength = 4;
$(document).ready(function(){
    $('#has_a_candidate_number').on('keydown keyup change', function(){
        var char = $(this).val();
        var charLength = $(this).val().length;
        if(charLength < numberminLength){
            $('#candidate_number_new_message').text('Length is short, minimum '+numberminLength+' required.');
        }else if(charLength > numbermaxLength){
            $('#candidate_number_new_message').text('Length is not valid, maximum '+numbermaxLength+' allowed.');
            $(this).val(char.substring(0, numbermaxLength));
        }else{
            $('#candidate_number_new_message').text('');
        }
    });
});
</script>

  <script>
  $(document).ready(function(){

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

     // 
      // caring forwad exam
      $("#caring_forwad_yes").click(function(){
        $("#caring_forwad_section").show();
      });

      $("#caring_forwad_no").click(function(){
        $("#caring_forwad_section").hide();
      });
     //
      // caring forwad exam
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
       

        $("#card_transfer").click(function(){
          $("#cardsection").show();
          $("#banksection").hide();
        });
        $("#bank_transfer").click(function(){
          $("#cardsection").hide();
          $("#banksection").show();
        });

// before 

    $("#has_a_candidate_yes").click(function(){
          $("#has_a_candidate_section").show();
        });

      $("#has_a_candidate_no").click(function(){
        $("#has_a_candidate_section").hide();
      });



      $("#mock_test_yes").click(function(){
        $("#papers_section").show();
        $("#marked_section").show();
      });

      $("#mock_test_no").click(function(){
         $("#papers_section").hide();
         $("#marked_section").hide();
      });
       



  });
  </script>








@endsection