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
										<li class="breadcrumb-item text-muted">ACCA</li>
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
								<form action="{{ url('admin/exam-booking-acca/create') }}" method="post"  enctype="multipart/form-data">
									@csrf
								<div class="card">
									
									   <div class="card-body">
					                    <!--begin::Stepper-->
					                        <div class="row">
				                                <!--begin::Col-->
				                                <div class="col-lg-12">
				                                    <label for="middle_name" class="form-label">Exam Type</label>
				                               		<input type="hidden" name="main_exam_type" value="ACCA">
				                               		<input type="text" class="form-control form-control-lg form-control-solid" disabled value="ACCA" />
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
				                                  <label class="form-label mb-3">ACCA REGISTRATION NUMBER* </label>
				                                  <input type="text"  class="form-control form-control-lg form-control-solid acca_registration" id="aat_registration" name="acca_registration" placeholder="Please Enter ACCA Registration Number" required/>
				                                  <span style="color: red;" id="warning-message"></span>
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

				               
				                            	    <div class="mb-10 fv-row row">
                                <div class="col-md-4" style="margin-bottom:8px">
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
                                      <option value="11 am">11 am</option>
                                      <option value="2 pm">2 pm</option>
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
                                          
                                          <input type="date" name="exam_date[]" class="form-select form-select-lg form-select-solid">
                                            
                                          </div>
                                          <!--end::Options-->
                                        </div>
                                  </div>
                               
                                 <div class="col-md-3">
                                    <!--begin::Label-->
                                  <label class="form-label mb-3">Exam Branch</label>
                                  <!--end::Label-->
                                  <!--begin::Input-->
                                  <select name="type[]"  id="type_0"  class="form-select form-select-lg form-select-solid type">
                                    
                                    <option value="Forest Gate">Forest Gate</option>
                                    
                                  </select>
                                </div>
                                 <div class="col-md-3">
                                    <!--begin::Label-->
                                   <label class="form-label mb-3">SUBJECT</label>
                                   <select name="subject[]" onchange="subjectcheange(this)" id="subject_0"  class="form-select form-select-lg form-select-solid subject">
                                      <option>--Select--</option>
                                      @foreach($allsub as $sub)
                                      <option value="{{  $sub->id }}">{{  $sub->subject_name }}</option>
                                      @endforeach
                                     
                                  </select>
                                </div>
                                
                                  <div class="col-md-3">
                                    <!--begin::Label-->
                                  <label class="form-label mb-3">Exam Type</label>
                                  <!--end::Label-->
                                  <!--begin::Input-->
                                 <!--  <input type="text" class="form-control form-control-lg form-control-solid" name="option_code[]" id="option_code_0" /> -->
                                   <select name="option_code[]" id="option_code_0"  class="form-select form-select-lg form-select-solid type">
                                   
                                    <option value="On Screen">On Screen</option>
                                    
                                    
                                  </select>


                                </div>
                                 <div class="col-md-2">
                                    <!--begin::Label-->
                                  <label class="form-label mb-3">FEES</label>
                                  <!--end::Label-->
                                  <!--begin::Input-->
                                  <input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_0" disabled/>
                                  <input type="hidden" class="fees" name="fees[]" id="fees_0"/>
                                   <input type="hidden" id="totalmain_amount" class="totalmain_amount" value="0" />
                                  
                                </div>
                              <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row row" id="add_more">

                            </div>
                            <div class="mb-10 fv-row row">
                              <div class="col-md-12 text-end">
                                <button type="button" onclick="addmore()" class="btn-sm btn-success" style="color:#fff">Add Subjects</button>
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
    var i=1;
    function addmore(){
        $("#add_more").append('<div class="mb-10 fv-row row"><div class="col-md-4" style="margin-bottom:8px"><label class="form-label mb-3">EXAM BOARD</label><select name="exam_board[]" class="form-select form-select-lg form-select-solid"><option value="ACCA">ACCA</option></select></div>  <div class="col-md-4" style=""><div class="mb-0 fv-row"><label class="form-label mb-3">What time to start your exam?</label><div class="mb-0 row"><select class="form-select form-select-lg form-select-solid" name="start_exam_time[]"><option value="11 am">11 am</option><option value="2 pm">2 pm</option></select></div></div></div><div class="col-md-3" style="margin: 0px 5px;"><div class="mb-0 fv-row"><label class="form-label mb-3">Choose the dates*</label><div class="mb-0 row"><input type="date" name="exam_date[]" class="form-select form-select-lg form-select-solid"></div></div></div><div class="col-md-3"><label class="form-label mb-3">Exam Branch</label><select id="type_'+i+'" name="type[]" data-id="'+i+'" class="form-select form-select-lg form-select-solid type"> <option value="Forest Gate">Forest Gate</option></select></div><div class="col-md-3"><label class="form-label mb-3">SUBJECT</label><select name="subject[]" id="subject_'+i+'" onchange="subjectcheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid subject"><option>--Select--</option>@foreach($allsub as $sub)<option value="{{  $sub->id }}">{{  $sub->subject_name }}</option>@endforeach</select></div><div class="col-md-3"><label class="form-label mb-3">Exam Type</label> <select name="option_code[]" id="option_code_'+i+'"  class="form-select form-select-lg form-select-solid type"><option value="On Screen">On Screen</option></select></div><div class="col-md-2"><label class="form-label mb-3">FEES</label><input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_'+i+'" disabled/><input type="hidden" class="amount_fees" name="fees[]" id="fees_'+i+'"/><a style="color:red;padding:0px 4px" onclick="deleterow(this)" style="cursor:pointer; color:red" >Delete</a></div></div>');
      i++
    }
    
  </script>
  <script>
function deleterow(em) {
 
     
   var okkk=$(em).closest(".row").find('.amount_fees').val();
   var oldamount=$(".total_amount").val();
   var finalamount= oldamount - okkk ;
   $(".total_amount").val(finalamount)
   console.log(finalamount);
  $(em).closest(".row").remove();
    
    // countamout();

}
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
  <script>
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
                    
                        
                     }
             });
         } else {
             alert('sorry data not found');
         }
    }
  </script>
    <script src="{{asset('backend')}}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{asset('backend')}}/assets/js/scripts.bundle.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/modals/create-account-two.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/widgets.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/modals/create-app.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/modals/upgrade-plan.js"></script>



    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Help Section</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Option code/ Help Text Here or pdf or Docx File ..........................................
        ................
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalLongss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Option Code Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @php
        $alloptioncode=App\Models\Subject::where('exam_type','A Level')->where('has_option_code',1)->orderBy('id','DESC')->get();
        @endphp
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Level</th>
              <th scope="col">Subject</th>
              <th scope="col">Option Code & Details</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($alloptioncode as $yes => $code)
            <tr>
              <th scope="row">{{++ $yes}}</th>
              <th>{{ $code->exam_type }}</th>
              <td>{{$code->subject_name}}</td>
              <td>
                <table class="table">
                  <tbody>
                    @foreach(json_decode($code->option_code_details) as $opcode)
                    <tr>
                      <td>{{$opcode->option_code}}</td>
                      <td>{{$opcode->description}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </td>
              
            </tr>
            @endforeach
           
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalLongpp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Payment Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Payment Policy text here.................................
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<script>
  (function() {
  function Init() {
    var fileSelect = document.getElementById('file-upload'),
      fileDrag = document.getElementById('file-drag'),
      submitButton = document.getElementById('submit-button');

    fileSelect.addEventListener('change', fileSelectHandler, false);

    // Is XHR2 available?
    var xhr = new XMLHttpRequest();
    if (xhr.upload) 
    {
      // File Drop
      fileDrag.addEventListener('dragover', fileDragHover, false);
      fileDrag.addEventListener('dragleave', fileDragHover, false);
      fileDrag.addEventListener('drop', fileSelectHandler, false);
    }
  }

  function fileDragHover(e) {
    var fileDrag = document.getElementById('file-drag');

    e.stopPropagation();
    e.preventDefault();
    
    fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
  }

  function fileSelectHandler(e) {
    // Fetch FileList object
    var files = e.target.files || e.dataTransfer.files;

    // Cancel event and hover styling
    fileDragHover(e);

    // Process all File objects
    for (var i = 0, f; f = files[i]; i++) {
      parseFile(f);
      uploadFile(f);
    }
  }

  function output(msg) {
    var m = document.getElementById('messages');
    m.innerHTML = msg;
  }

  function parseFile(file) {
    output(
      '<ul>'
      + '<li>Name: <strong>' + encodeURI(file.name) + '</strong></li>'
      + '<li>Type: <strong>' + file.type + '</strong></li>'
      + '<li>Size: <strong>' + (file.size / (1024 * 1024)).toFixed(2) + ' MB</strong></li>'
      + '</ul>'
    );
  }

  function setProgressMaxValue(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.max = e.total;
    }
  }

  function updateFileProgress(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.value = e.loaded;
    }
  }

  function uploadFile(file) {

    var xhr = new XMLHttpRequest(),
      fileInput = document.getElementById('class-roster-file'),
      pBar = document.getElementById('file-progress'),
      fileSizeLimit = 1024; // In MB
    if (xhr.upload) {
      // Check if file is less than x MB
      if (file.size <= fileSizeLimit * 1024 * 1024) {
        // Progress bar
        pBar.style.display = 'block';
        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
        xhr.upload.addEventListener('progress', updateFileProgress, false);

        // File received / failed
        xhr.onreadystatechange = function(e) {
          if (xhr.readyState == 4) {
            // Everything is good!
            
            // progress.className = (xhr.status == 200 ? "success" : "failure");
            // document.location.reload(true);
          }
        };

        // Start upload
        xhr.open('POST', document.getElementById('file-upload-form').action, true);
        xhr.setRequestHeader('X-File-Name', file.name);
        xhr.setRequestHeader('X-File-Size', file.size);
        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
        xhr.send(file);
      } else {
        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
      }
    }
  }

  // Check for the various File API support.
  if (window.File && window.FileList && window.FileReader) {
    Init();
  } else {
    document.getElementById('file-drag').style.display = 'none';
  }
})();
</script>

<script>
    function editimageremove(em) {
        $("#editimage").hide();
        $("#thumbnail_img").show();
    }
</script>
<script>
 $(function() {
$( "#datepicker" ).datepicker();
});

</script>
<script>
  
  function insertmybooking(){

            var main_exam_type = $("#main_exam_type").val();
            var user_id = $("#user_id").val();
            var booking_id = $("#booking_id").val();
            var first_name=$("#first_name").val();
            var middle_name=$("#middle_name").val();
            var last_name=$("#last_name").val();
            var email=$("#email").val();
            var phone=$("#phone").val();
            var emergency_contact_number=$("#emergency_contact_number").val();
            var address_line_1=$("#address_line_1").val();
            var address_line_2=$("#address_line_2").val();
            var date_of_birth=$("#date_of_birth").val();
            var postcode=$("#postcode").val();
            var city=$("#city").val();
            var gender = $("input[name='gender']:checked").val();
            var candidatebefore = $("input[name='has_a_candidate']:checked").val();
            var uci = $("input[name='uci']:checked").val();
            var uln = $("input[name='uln']:checked").val();
            var has_a_candidate_number = $("#has_a_candidate_number").val();
            var uci_number = $(".uci_number").val();
            var uln_number = $(".uln_number").val();

            var type_of_learner =  $("input[name='type_of_learner']:checked").val();
            var retaking_exams = $("input[name='retaking_exams']:checked").val();
            var retaking_exams_name = $("#retaking_exams_name").val();
            var caring_forwad = $("input[name='caring_forwad']:checked").val();
            var caring_forwad_details = $("#caring_forwad_details").val();

            var special_acces =$("input[name='special_acces']:checked").val();
            var special_acces_evidence = $("#special_acces_evidence").val();

            var mental_conditions = $("input[name='mental_conditions']:checked").val();
            var mental_condition_details = $("#mental_condition_details").val();

            var condition_disability =$("input[name='condition_disability']:checked").val();
            var condition_disability_details = $("#condition_disability_details").val();
            var relationship = $("#relationship").val();
            var relation_name = $("#relation_name").val();
            var todays_date = $(".todays_date").val();



            $.ajax({

               url: "{{  url('/get/insertmybooking/all/') }}",
               type:"GET",
               data:{

                  'type_of_learner':type_of_learner,
                  'user_id':user_id,
                  'retaking_exams':retaking_exams,
                  'retaking_exams_name':retaking_exams_name,
                  'caring_forwad':caring_forwad,
                  'caring_forwad_details':caring_forwad_details,
                  'special_acces':special_acces,
                  'special_acces_evidence':special_acces_evidence,
                  'mental_conditions':mental_conditions,
                  'mental_condition_details':mental_condition_details,
                  'condition_disability':condition_disability,
                  'condition_disability_details':condition_disability_details,
                  'relationship':relationship,
                  'relation_name':relation_name,
                  'todays_date':todays_date,
                  'main_exam_type':main_exam_type,
                  'booking_id': booking_id,
                  'first_name':first_name,
                  'middle_name':middle_name,
                  'last_name':last_name,
                  'emergency_contact_number':emergency_contact_number,
                  'phone':phone,
                  'email':email,
                  'address_line_1':address_line_1,
                  'address_line_2':address_line_2,
                  'date_of_birth':date_of_birth,
                  'postcode':postcode,
                  'city':city,
                  'gender':gender,
                  'candidatebefore':candidatebefore,
                  'has_a_candidate_number':has_a_candidate_number,
                  'uci':uci,
                  'uci_number':uci_number,
                  'uln':uln,
                  'uln_number':uln_number,

               },
               success:function(data) {
                   
                      console.log(data);

                }
           });

  }
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
var uciminLength = 7;
var ucimaxLength = 7;
$(document).ready(function(){
    $('.acca_registration').on('keydown keyup change', function(){
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

@endsection