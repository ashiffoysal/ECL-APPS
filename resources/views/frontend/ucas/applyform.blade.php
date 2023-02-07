@extends('layouts.frontend')
@section('title', 'Exam Booking')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  
  .registration-btn {
    width: 135px;
    height: 45px;
    background: transparent linear-gradient(105deg, #00672E 0%, #2B8B30 100%) 0% 0% no-repeat padding-box;
    box-shadow: none;
    border: none;
    border-radius: 6px;
    opacity: 1;
    color: #fff !important;
}
</style>

<style>
  .kbw-signature {
    width: 430px !important;
    height: 220px !important;
  }
  #regForm {
    background-color: #e2efef;
    margin: 40px auto;
    padding: 40px;
    width: 90%;
    min-width: 300px;
    border-radius: 15px;
}

/* Style the input fields */
input {
  padding: 10px;
 
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>
<style>
 #cover {
  position: fixed;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  background: #141526;
  z-index: 9999;
  font-size: 65px;
  text-align: center;
  padding-top: 200px;
  color: #fff;
  font-family:tahoma;
}
</style>



    <section class="zh_faq_area" style="background: #fff !important;">
        
        
        
          <div id="cover" style="display:none"> <span class="glyphicon glyphicon-refresh w3-spin preloader-Icon"></span> loading...</div>
          
          
        <div class="container">
            <div class="row">
                <form id="regForm" action="{{ url('ucas/register/apply') }}" method="post" enctype="multipart/form-data">


                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                   <div class="row mt-1 text-center" style="margin-bottom: 20px;">
                        <div class="col-md-12">
                          <h1 style="color:black; font-size: 26px; font-weight: 700; width:100%">FORM FOR UCAS APPLICATION</h1>
                          <h5 style="color: #707070;font-size: 14px; font-weight: 500;">Please complete this form, if you are interesting to link your ucas application with us.</h5>
                        </div>
                    </div>
                  <div class="form-group">
                    <label for="first_name" style="color:black">First Name <span style="color:red">*</span></label>
                    <input type="text" class="form-control required" name="first_name" id="first_name" aria-describedby="emailHelp" placeholder="Enter First Name" value="{{ Auth::user()->name }}">
                </div>
                 <div class="form-group">
                    <label for="middle_name" style="color:black">Middle Name </label>
                    <input type="text" class="form-control" name="middle_name" id="middle_name" aria-describedby="emailHelp" placeholder="Enter Middle Name" value="{{ Auth::user()->middle_name }}">
                </div>
                  <div class="form-group">
                    <label for="last_name" style="color:black">Last Name <span style="color:red">*</span></label>
                    <input type="text" class="form-control required" name="last_name" id="last_name" aria-describedby="emailHelp" placeholder="Enter Last Name" value="{{ Auth::user()->last_name }}">
                  </div>
                   <div class="form-group">
                    <label for="last_name" style="color:black">Gender <span style="color:red">*</span></label>
                    <select class="form-control" name="gender">
                        <option value="Male" @if(Auth::user()->gender=='Male') selected @endif>Male</option>
                        <option value="Female"  @if(Auth::user()->gender=='Female') selected @endif>Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="phone" style="color:black">Phone <span style="color:red">*</span></label>
                    <input type="text" class="form-control required" name="phone" id="phone" aria-describedby="emailHelp" placeholder="Enter Phone" value="{{ Auth::user()->phone }}">
                  </div>
                   <div class="form-group">
                    <label for="email" style="color:black">Email<span style="color:red">*</span></label>
                    <input type="text" class="form-control required" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email" value="{{ Auth::user()->email }}">
                  </div>
                    <div class="form-group">
                    <label for="emergence_contact_number" style="color:black">Emergency contact number <span style="color:red">*</span></label>
                    <input type="text" class="form-control required" name="emergency_contact_number" id="emergence_contact_number" aria-describedby="emailHelp" placeholder="Enter Emergency contact number" value="{{ Auth::user()->emergency_contact_number  }}">
                  </div>
                  <div class="form-group">
                    <label for="address_line_one" style="color:black">Address line 1<span style="color:red">*</span></label>
                    <textarea class="form-control required" name="address_line_one" id="address_line_one"  placeholder="Enter Address line 1"> {{ Auth::user()->address }} </textarea>
                  </div>
                  <div class="form-group">
                    <label for="address_line_two" style="color:black">Address line 2</label>
                    <textarea class="form-control" name="address_line_two" id="address_line_two"  placeholder="Enter Address line 2"> {{ Auth::user()->address_two }} </textarea>
                  </div>

                    <div class="form-group">
                    <label for="city" style="color:black">City<span style="color:red">*</span></label>
                    <input type="text" class="form-control required" name="city" id="city" aria-describedby="emailHelp" placeholder="Enter City" value="{{ Auth::user()->city }}">
                    </div>
                    <div class="form-group">
                    <label for="post_code" style="color:black">Post Code<span style="color:red">*</span></label>
                    <input type="text" class="form-control required" name="post_code" id="post_code" aria-describedby="emailHelp" placeholder="Enter Post Code" value="{{ Auth::user()->zip }}">
                  </div>
                   <div class="form-group">
                    <label for="country" style="color:black">Country<span style="color:red">*</span></label>
                    <input type="text" class="form-control required" name="country" id="country" aria-describedby="emailHelp" placeholder="Enter Country Name" value="{{ Auth::user()->country }}">
                  </div>
                    <div class="form-group">
                    <label for="date_of_birth" style="color:black">Date Of Birth<span style="color:red">*</span></label>
                    <input type="text" class="form-control required" name="date_of_birth" id="date_of_birth" aria-describedby="emailHelp" placeholder="Enter Date Of Birth" value="{{ Auth::user()->date_of_birth }}">
                  </div>
                </div>
                <div class="tab">
                    <div class="row mt-1 text-center" style="margin-bottom: 20px;">
                        <div class="col-md-12">
                          <h1 style="font-size: 26px; font-weight: 700; width:100%">Add Mock Exam Subject Information!</h1>
                        </div>
                    </div>
                       <label for="post_code" style="color:black">Mock Exam Type<span style="color:red">*</span></label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio"  name="exam_type" id="flexRadioDefault1">
                        <label style="color:black" class="form-check-label" for="flexRadioDefault1">
                          GCSE
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exam_type" id="flexRadioDefault2" checked>
                        <label style="color:black" class="form-check-label" for="flexRadioDefault2">
                          A Levels
                        </label>
                      </div>
                      <br>
                      <div class="row mt-1">
                          <div class="col-md-12">
                              <p style="color:black;">If your subject has 3 papers, we expect you to sit all 3 papers so we dan predict your grade effectively</p>
                          </div>
                      </div>
                      <div class="row mt-1">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="" style="color:black">Subject<span style="color:red">*</span></label>
                            <input type="text" class="form-control required" name="subject[]"  aria-describedby="emailHelp" placeholder="Enter Subject Name">
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="" style="color:black">Paper<span style="color:red">*</span></label>
                            <select class="form-control" name="paper[]">
                                
                                <option value="Paper 1">Paper 1</option>
                                <option value="Paper 2">Paper 2</option>
                                <option value="Paper 3">Paper 3</option>
                                <option value="Paper 4">Paper 4</option>
                            </select>
                            
                            
                            
                          </div>
                        </div>
                    </div>

                    <div class="row mt-1" style="margin-bottom: 20px;">
                      <div class="col-md-12" id="add_more_sub">
                    
          
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn-sm btn-danger" onclick="add_more()">add more subjects</button>
                    </div>
                </div>
                <div class="tab">
                         <div class="row mt-1 text-center" style="margin-bottom: 20px;">
                        <div class="col-md-12">
                          <h1 style="color:black; font-size: 26px; font-weight: 700; width:100%">Important information regarding your UCAS application</h1>
                     
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                      <label for="first_name" style="color:black">Would you like us to review your personal statement professionally?
( up to 2 hours £50) <span style="color:red">*</span></label>

                         <div class="form-check">
                          <input class="form-check-input" value="no" type="radio" name="review_personal_statement" id="flexRadioDefault2" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                            No
                          </label>
                        </div>
                      <div class="form-check">
                          <input class="form-check-input" value="yes" type="radio" name="review_personal_statement" id="flexRadioDefault1" checked>
                          <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                          </label>
                        </div>
                                     
                      </div>
                        <div class="form-group">
                          <label for="first_name" style="color:black">UCAS application support including documents verifying and referencing: <span style="color:red">*</span></label>
                          
                               <div class="form-check">
                              <input class="form-check-input" value="no" onclick="opendocuments(this)" type="radio" name="application_support" id="no_support" checked>
                              <label class="form-check-label" for="no_support">
                                No
                              </label>
                            </div>    
                          <div class="form-check">
                              <input class="form-check-input" value="yes" onclick="opendocuments(this)" type="radio" name="application_support" id="yes_support">
                              <label class="form-check-label" for="yes_support">
                                Yes (You need to choose yes in order us to proceed your application)
                              </label>
                            </div>
                          
                        </div>
                         <div id="main_documents_section" style="display:none">
                             <div class="row mt-1">
                                 <div class="col-md-12"><p>  We will contact you to bring original documents to us for verification purpose.</p>
                                 </div>
                             </div>
                            <div class="row mt-1" style="margin-bottom: 20px;">
                                <div class="col-md-12 row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="" style="color:black">Documents<span style="color:red">*</span></label>
                                    <input type="file" class="form-control " name="documents[]"  aria-describedby="emailHelp" placeholder="Enter Documents">
                                  </div>
                                </div>
                                  <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="" style="color:black">Documents Details<span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="documents_details[]"  aria-describedby="emailHelp" placeholder="Enter Document Details">
                                  </div>
                                </div>
                                </div>
                            </div>

                            <div class="row  mt-1" style="margin-bottom: 20px;" id="uploads_documents">
                              
                            </div>
                             <div class="row col-12">
                              <div class="form-group">
                                <button type="button" class="btn-sm btn-danger" onclick="add_more_documents()">add more Documents</button>
                              </div>
                            </div>
                      </div>
                         <div class="form-group">
                      <label for="date_of_birth" style="color:black">Recent Photo:<span style="color:red">*</span></label>
                      <input type="file" class="form-control " name="recent_photo"  aria-describedby="emailHelp" placeholder="Uploads Recent Photo" >
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth" style="color:black">Photo ID:<span style="color:red">*</span></label>
                        <input type="file" class="form-control " name="photo_id" id="date_of_birth" aria-describedby="emailHelp" placeholder="Uploads Photo ID" >
                    </div>
                     <div class="form-group">
                        <label  class="form-label" style="color:black">Signature</label><br>
                              <div id="sig"></div>
                              <textarea name="signed" id="signature" style="display:none"></textarea>
                              <p style="clear: both;">
                            <button type="button" id="clear">Clear</button> 

                          </p>
                     
                    </div>
                      
                </div>
                <div class="tab">
                    <div class="row mt-1 text-center" style="margin-bottom: 20px;">
                        <div class="col-md-12">
                          <!-- <h1 style="font-size: 26px; font-weight: 700; width:100%">Documents</h1> -->
                        </div>
                    </div>
                     <div class="row mt-1 text-center" style="margin-bottom: 20px;">
                              <div class="col-md-12">
                                <!-- <h1 style="font-size: 26px; font-weight: 700; width:100%">Documents</h1> -->
                              </div>
                          </div>

                          <div class="form-group">
                           <span style="color:red;font-weight: 700;">Payment Details:</span><br><p  style="color:black">
                              Mock exam fees are £70 per exam including marrking. We cannot proceed with this form until we receive full payment<br></p>


                              <br><span style="color:red;font-weight: 700;">Refunds:</span><br>
                              <p style="color:black">Candidates may wish to withdraw their application with us by emailing or calling us before we schedule the exam. However once the exam has been scheduled, there will be a charge of £30 per exam subject to one week notice. We can’t provide refund if you are contacting us within 1 week of your exam taking place. We also cannot provide refunds if the candidate is absent from the exam.</p>


                               </p>
                          </div>

                          <div class="form-group">
                               <div class="form-check">
                                <input class="form-check-input required" type="checkbox" id="agree" name="agree" value="1" checked>
                                <label class="form-check-label " for="agree"> I agree to the terms and conditions Terms and Conditions</label>
                              </div>
                          </div>
                          
                          {{--
                          <div class="row">
                              <div class="col-md-12">
                                  <br><span style="color:red;font-weight: 700;">Your Amount Details:</span><br><br>
                              </div>
                              <div class="col-md-6">
                                     <table class="table table-striped">
                                          <tbody>
                                            <tr>
                                              <th scope="row">Total Mock Exam Fees</th>
                                              <th scope="row">£210</th>
                                            </tr>
                                              <tr>
                                                <th scope="row"> Review your personal statement</th>
                                              <th scope="row">£50</th>
                                            </tr>
                                            
                                             <tr>
                                                <th scope="row">Documents verifying and referencing</th>
                                              <th scope="row">£100</th>
                                            </tr>
                                            
                                            <tr>
                                                <th scope="row" style="color:red;">Total Amount</th>
                                              <th scope="row">£360</th>
                                            </tr>
                                            
                                            
                                            
                                         
                                          </tbody>
                                </table>
                              </div>
                          </div>
                          --}}
                       
                            <div class="form-group">
                                <label for="first_name" style="color:black">Payment Option:<span style="color:red">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" value="Card" type="radio" name="payment_option" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Card Payment
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" value="Bank" type="radio" name="payment_option" id="flexRadioDefault2" >
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Bank Transfer
                                    </label>
                                  </div>
                                                  
                            </div>

                 
         
                </div>
              
                <div style="overflow:auto;">
                  <div style="float:right;">
                    @csrf
                    <button type="button" id="prevBtn"  class="registration-btn"  onclick="nextPrev(-1)">Previous</button>
                    <button type="button" class="registration-btn" id="nextBtn" onclick="nextPrev(1)">Next</button>
                  </div>
                </div>
              
                <div style="text-align:center;margin-top:40px;">
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                </div>

                </form>

            </div>
        </div>

</section>
<script>
function myloader(){
    $("#cover").fadeOut(1750);
}
   

   
</script>
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n);

}

function nextPrev(n) {
    myloader();
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("required");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>



<script>
    i=0;
  function add_more(){
    $("#add_more_sub").append('<div class="row mt-1"><div class="col-md-6"><div class="form-group"><label for="" style="color:black">Subject<span style="color:red">*</span></label><input type="text" class="form-control required" id="mysubject'+i+'" name="subject[]"  aria-describedby="emailHelp" placeholder="Enter Subject Name"></div></div><div class="col-md-6"><div class="form-group"><label for="" style="color:black">Paper<span style="color:red">*</span></label><select id="mypaper'+i+'" class="form-control" name="paper[]"><option value="Paper 1">Paper 1</option><option value="Paper 2">Paper 2</option><option value="Paper 3">Paper 3</option><option value="Paper 4">Paper 4</option></select></div><a  onclick="deleterow(this)" style="cursor:pointer;color:red">Delete</a></div></div>');
      i++; 
  }
</script>

  
  <script>
function deleterow(em) {
 
   
   $(em).closest(".row").remove();
    

}
</script>
<script>
  function add_more_documents(){
   $("#uploads_documents").append('<div class="col-md-12 row"><div class="col-md-6"><div class="form-group"><label for="" style="color:black">Documents<span style="color:red">*</span></label><input type="file" class="form-control" name="documents[]"  aria-describedby="emailHelp" placeholder="Enter Documents"></div></div><div class="col-md-6"><div class="form-group"><label for="" style="color:black">Documents Details<span style="color:red">*</span></label><input type="text" class="form-control" name="documents_details[]"  aria-describedby="emailHelp" placeholder="Enter Document Details"></div><a onclick="deletemainrow(this)" style="cursor:pointer;color:red">Delete</a></div></div>');
  }



  function opendocuments(el){
    var val =el.value;
    if(val=='yes'){
      $("#main_documents_section").show();
    }
    if(val=='no'){
      $("#main_documents_section").hide();
    }
  }


  function deletemainrow(em) {
 
   
   $(em).closest(".row").remove();
    

}


</script>

<script>
function mytabel(i){
    alert(i);
   
}
</script>


<script>
  
jQuery(document).ready(function($){
    
    var canvas = document.getElementById("signature");
    var signaturePad = new SignaturePad(canvas);
    
    $('#clear-signature').on('click', function(){
        signaturePad.clear();
    });
    
});
</script>




@endsection
