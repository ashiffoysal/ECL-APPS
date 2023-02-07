@extends('layouts.frontend')
@section('title', 'Exam Booking')
@section('content')

<style>
.form-control.form-control-solid {
    background-color: #ffffff !important;
    border-color: #3d7822 !important;
    color: #000000 !important;
    padding: 20px 10px !important;
    border-radius: 5px;
}

select.form-select.form-select-lg.form-select-solid {
   background-color: #ffffff !important;
    border-color: #3d7822 !important;
    color: #000000 !important;
    padding: 20px 10px !important;
    border-radius: 5px;
}
.form-select form-select-lg form-select-solid{
     background-color: #ffffff !important;
    border-color: #3d7822 !important;
    color: #000000 !important;
    padding: 20px 10px !important;
    border-radius: 5px;
}
.form-select.form-select-solid {
         background-color: #ffffff !important;
    border-color: #3d7822 !important;
    color: #000000 !important;
    padding: 20px 10px !important;
    border-radius: 5px;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/sign.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        $(document).ready(function()
        {
            $('#myCanvas').sign({
                resetButton: $('#resetSign'), 
                lineWidth: 5 
            });
        });
    </script>
    <style>
        #myCanvas {
            border:4px solid #444;
            border-radius: 15px;
        }
    </style>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->


<style>
  .form-select-lg {
    
  font-size: 12px !important;
}
.form-control-lg {
    font-size: 12px !important;
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
                <li>Exam Booking</li>
            </ul>
         
        </div>
    </section>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{asset('backend')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Toolbar-->
            <div class="toolbar" id="kt_toolbar">
              <!--begin::Container-->
              <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                  <!--begin::Title-->
                  
                  <!--end::Title-->
                  <!--begin::Separator-->
                  <span class="h-20px border-gray-200 border-start mx-4"></span>
             
               
                  <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                  <!--begin::Wrapper-->
                  <div class="me-4">
                  
                  </div>
               
                  <!--end::Button-->
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
                <div class="card" style="border-radius:55px">
                  <!--begin::Card body-->
                  <div class="card-body">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
                      <!--begin::Nav-->
                      <div class="stepper-nav py-5 mt-5">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav">
                          <h3 class="stepper-title">Student Info</h3>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                          <h3 class="stepper-title">Exam Details</h3>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                          <h3 class="stepper-title">Special Arrangements</h3>
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                          <h3 class="stepper-title">Payment Details</h3>
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                          <h3 class="stepper-title">Completed</h3>
                        </div>
                        <!--end::Step 5-->
                      </div>
                      <!--end::Nav-->
                      <!--begin::Form-->
                      <form class="mx-auto mw-1000px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_create_account_form" action="{{ url('/exam-booking') }}" method="post">

                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                          <!--begin::Wrapper-->
                          <div class="w-100">
                            <div class="fv-row">
                              <!--begin::Row-->
                              <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-12">
                                    <!--begin::Label-->
                                  <label class="form-label mb-3">FIRST NAME</label>
                                  <!--end::Label-->
                                  <!--begin::Input-->
                                  <input type="text" class="form-control form-control-lg form-control-solid" name="first_name" placeholder="Please Enter First Name" value="{{ Auth::user()->name }}"/>
                                  <!--end::Input-->
                                </div>
                                <div class="col-lg-12">
                                    <label for="inputPassword5" class="form-label">MIDDLE NAME</label>
                                    <input type="text" name="middle_name" id="inputPassword5" class="form-control form-control-lg form-control-solid" placeholder="Please Enter Middle Name" value="{{ Auth::user()->middle_name }}" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <label for="inputPassword5" class="form-label">LAST NAME</label>
                                    <input type="text" name="last_name" id="inputPassword5" class="form-control form-control-lg form-control-solid" placeholder="Please Enter Last Name" value="{{ Auth::user()->last_name }}"aria-describedby="passwordHelpBlock">
                                </div>
                                  <div class="col-lg-12 mt-2">
                                    <label for="inputPassword5" class="form-label">EMAIL</label>
                                    <input type="email" name="email" id="inputPassword5" class="form-control form-control-lg form-control-solid" placeholder="Please Enter Email" value="{{ Auth::user()->email }}" aria-describedby="passwordHelpBlock">
                                </div>
                                 <div class="col-lg-12 mt-2">
                                    <label for="inputPassword5" class="form-label">PHONE NUMBER</label>
                                    <input type="text" id="inputPassword5" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Please Enter Phone Number" value="{{ Auth::user()->phone }}" aria-describedby="passwordHelpBlock">
                                </div>
                                 <div class="col-lg-12 mt-2">
                                    <label for="inputPassword5" class="form-label">EMERGENCY CONTACT NUMBER</label>
                                    <input type="text" id="inputPassword5" placeholder="Please Enter Emergency Contact Number" name="emergency_contact_number" class="form-control form-control-lg form-control-solid"aria-describedby="passwordHelpBlock">
                                </div>
                                
                                 <div class="col-lg-12 mt-2">
                                    <label for="inputPassword5" class="form-label">ADDRESS LINE 1</label>
                                    <textarea type="text" name="address_line_1" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock" placeholder="Please Enter Address Line 1">{{ Auth::user()->address }}</textarea>
                                </div>
                                  <div class="col-lg-12 mt-2">
                                    <label for="inputPassword5" class="form-label">ADDRESS LINE 2</label>
                                    <textarea type="text" name="address_line_2" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock" placeholder="Please Enter Address Line 2">{{ Auth::user()->address_two }}</textarea>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <label for="inputPassword5" class="form-label">CITY</label>
                                    <input type="text" id="inputPassword5" class="form-control form-control-lg form-control-solid" name="city" value="{{ Auth::user()->city }}" aria-describedby="passwordHelpBlock" placeholder="Please Enter City">
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <label for="inputPassword5" class="form-label">POST CODE</label>
                                    <input type="text" id="inputPassword5" placeholder="Please Enter Post Code" name="postcode" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock" value="{{ Auth::user()->zip }}">
                                </div>
                                 <div class="col-lg-12 mt-3">
                                    <label for="inputPassword5" class="form-label">DATE OF BIRTH</label>
                                    <input type="date" id="inputPassword5" class="form-control form-control-lg form-control-solid"  name="date_of_birth" aria-describedby="passwordHelpBlock" value="{{ Auth::user()-> date_of_birth }}">
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label for="PHOTO_ID" class="form-label">RECENT PHOTO</label>
                                    <input type="file"name="photo_id" id="PHOTO_ID" class="form-control form-control-lg form-control-solid">
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label for="PHOTO_ID" class="form-label">PHOTO ID</label>
                                    <input type="file"name="photo_id" id="PHOTO_ID" class="form-control form-control-lg form-control-solid">
                                </div>
                                 <div class="col-lg-12 mt-2">
                                    <div class="mb-0 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center form-label mb-5">Gender
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="mb-0">
                                        
                                          <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                              <!--begin::Icon-->
                                              <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                  <!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
                                                  <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
                                                    </svg>
                                                  </span>
                                                  <!--end::Svg Icon-->
                                                </span>
                                              </span>
                                              <!--end::Icon-->
                                              <!--begin::Description-->
                                              <span class="d-flex flex-column">
                                                <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Male</span>
                                              </span>
                                              <!--end:Description-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                              <input class="form-check-input" type="radio" checked="checked" name="gender" value="Male" @if(Auth::user()->gender=='Male') checked="checked" @endif />
                                            </span>
                                            <!--end:Input-->
                                          </label>
                                          <!--end::Option-->
                                          <!--begin:Option-->
                                          <label class="d-flex flex-stack mb-0 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                              <!--begin::Icon-->
                                              <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                  <!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Down.svg-->
                                                  <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
                                                    </svg>
                                                  </span>
                                                  <!--end::Svg Icon-->
                                                </span>
                                              </span>
                                              <!--end::Icon-->
                                              <!--begin::Description-->
                                              <span class="d-flex flex-column">
                                                <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Female</span>
                                              </span>
                                              <!--end:Description-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                              <input class="form-check-input" type="radio" name="gender" value="Female" @if(Auth::user()->gender=='Female') checked="checked" @endif />
                                            </span>
                                            <!--end:Input-->
                                          </label>
                                          <!--end::Option-->
                                        </div>
                                        <!--end::Options-->
                                      </div>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <div class="mb-0 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center form-label mb-5">Do you have a UCI Number ( 13 digits )*
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="mb-0">
                                        
                                          <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                              <!--begin::Icon-->
                                              <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                  <!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
                                                  <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
                                                    </svg>
                                                  </span>
                                                  <!--end::Svg Icon-->
                                                </span>
                                              </span>
                                              <!--end::Icon-->
                                              <!--begin::Description-->
                                              <span class="d-flex flex-column">
                                                <span class="fw-bolder text-gray-800 text-hover-primary fs-5">No</span>
                                             
                                              </span>
                                              <!--end:Description-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                              <input class="form-check-input" id="no" type="radio" checked="checked" name="uci" value="no" />
                                            </span>
                                            <!--end:Input-->
                                          </label>
                                          <!--end::Option-->
                                          <!--begin:Option-->
                                          <label class="d-flex flex-stack mb-0 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                              <!--begin::Icon-->
                                              <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                  <!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Down.svg-->
                                                  <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
                                                    </svg>
                                                  </span>
                                                  <!--end::Svg Icon-->
                                                </span>
                                              </span>
                                              <!--end::Icon-->
                                              <!--begin::Description-->
                                              <span class="d-flex flex-column">
                                                <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Yes</span>
                                                
                                              </span>
                                              <!--end:Description-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                              <input class="form-check-input" type="radio" id="yes" name="uci" value="yes" />
                                            </span>
                                            <!--end:Input-->
                                          </label>
                                          <!--end::Option-->
                                        </div>
                                        <!--end::Options-->
                                      </div>
                                </div>
                                <div class="col-lg-12 mt-2" id="uci_section">
                                  <label for="UCI" class="form-label">number</label>
                                    <input type="text" name="" id="" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                                 </div> 
                                <div class="col-lg-12 mt-2">
                                    <div class="mb-0 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center form-label mb-5">Do you have a UCI Number ( 13 digits )*
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="mb-0">
                                        
                                          <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                              <!--begin::Icon-->
                                              <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                  <!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
                                                  <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
                                                    </svg>
                                                  </span>
                                                  <!--end::Svg Icon-->
                                                </span>
                                              </span>
                                              <!--end::Icon-->
                                              <!--begin::Description-->
                                              <span class="d-flex flex-column">
                                                <span class="fw-bolder text-gray-800 text-hover-primary fs-5">No</span>
                                             
                                              </span>
                                              <!--end:Description-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                              <input class="form-check-input" id="no" type="radio" checked="checked" name="uci" value="no" />
                                            </span>
                                            <!--end:Input-->
                                          </label>
                                          <!--end::Option-->
                                          <!--begin:Option-->
                                          <label class="d-flex flex-stack mb-0 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                              <!--begin::Icon-->
                                              <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                  <!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Down.svg-->
                                                  <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
                                                    </svg>
                                                  </span>
                                                  <!--end::Svg Icon-->
                                                </span>
                                              </span>
                                              <!--end::Icon-->
                                              <!--begin::Description-->
                                              <span class="d-flex flex-column">
                                                <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Yes</span>
                                                
                                              </span>
                                              <!--end:Description-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                              <input class="form-check-input" type="radio" id="yes" name="uci" value="yes" />
                                            </span>
                                            <!--end:Input-->
                                          </label>
                                          <!--end::Option-->
                                        </div>
                                        <!--end::Options-->
                                      </div>
                                </div>
                                <div class="col-lg-12 mt-2" id="uci_section" style="display:none">
                                  <label for="UCI" class="form-label">UCI Number ( 13 digits )</label>
                                    <input type="text" name="uci_number" id="UCI" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                                 </div> 
                                 <div class="col-lg-12 mt-2">
                                    <div class="mb-0 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center form-label mb-5">Do you have a ULN Number ( 13 digits )*
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="mb-0">
                                        
                                          <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                              <!--begin::Icon-->
                                              <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                  <!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
                                                  <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
                                                    </svg>
                                                  </span>
                                                  <!--end::Svg Icon-->
                                                </span>
                                              </span>
                                              <!--end::Icon-->
                                              <!--begin::Description-->
                                              <span class="d-flex flex-column">
                                                <span class="fw-bolder text-gray-800 text-hover-primary fs-5">No</span>
                                             
                                              </span>
                                              <!--end:Description-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                              <input class="form-check-input" id="uln_no" type="radio" checked="checked" name="uln" value="no" />
                                            </span>
                                            <!--end:Input-->
                                          </label>
                                          <!--end::Option-->
                                          <!--begin:Option-->
                                          <label class="d-flex flex-stack mb-0 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                              <!--begin::Icon-->
                                              <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label">
                                                  <!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Down.svg-->
                                                  <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
                                                    </svg>
                                                  </span>
                                                  <!--end::Svg Icon-->
                                                </span>
                                              </span>
                                              <!--end::Icon-->
                                              <!--begin::Description-->
                                              <span class="d-flex flex-column">
                                                <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Yes</span>
                                                
                                              </span>
                                              <!--end:Description-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                              <input class="form-check-input" id="uln_yes" type="radio" name="uln" value="yes" />
                                            </span>
                                            <!--end:Input-->
                                          </label>
                                          <!--end::Option-->
                                        </div>
                                        <!--end::Options-->
                                      </div>
                                </div>
                                 <div class="col-lg-12 mt-2" id="uln_section" style="display:none">
                                  <label for="UCI" class="form-label">ULN Number ( 13 digits )</label>
                                    <input type="text" name="uln_number" id="uln" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                                 </div>
                               
                                <!--end::Col-->
                              </div>
                              <!--end::Row-->
                            </div>
                            <!--end::Input group-->
                          </div>
                          <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div data-kt-stepper-element="content">
                          <!--begin::Wrapper-->
                          <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-15">
                              <!--begin::Title-->
                              <h2 class="fw-bolder text-dark">Exam Info</h2>
                              <!--end::Title-->
                              <!--begin::Notice-->
                              <div class="text-gray-400 fw-bold fs-6">
                                Option Code Information <a data-toggle="modal" data-target="#exampleModalLongss" href="#">Click</a>
                              <a href="#" class="link-primary fw-bolder">

                                <input type="text" class="form-control total_amount" name="total_amount" id="total_amount" value="0" />
                              </a>
                             
                           </div>

                              <!--end::Notice-->
                            </div>
                             <div class="mb-10 fv-row row">
                                <div class="col-md-12" style="margin-bottom:8px">
                                  <label class="form-label mb-3">EXAM BOARD</label>
                                  <!--end::Label-->
                                  <!--begin::Input-->
                                 <select name="exam_board[]" class="form-select form-select-lg form-select-solid">
                                    <option value="Edexcel">Edexcel</option>
                                    <option value="AQA">AQA</option>
                                    <option value="OCR">OCR</option>
                                    <option value="Cambridge(CIE)">Cambridge(CIE)</option>
                                    <option value="WZEC">WZEC</option>
                                 </select>

                                </div>
                                <div class="col-md-2">
                                    <!--begin::Label-->
                                  <label class="form-label mb-3">EXAM SERIES</label>
                                  <!--end::Label-->
                                  <!--begin::Input-->
                                   <select name="exam_series[]" id="exam_series_0" class="form-select form-select-lg form-select-solid">
                                    <option>--Select--</option>
                                    <option value="November 2022">November 2022</option>
                                    <option value="January 2022">January 2022</option>
                                    <option value="June 2022">June 2022</option>
                                  </select>
                                </div>
                                 <div class="col-md-2">
                                    <!--begin::Label-->
                                  <label class="form-label mb-3">TYPE</label>
                                  <!--end::Label-->
                                  <!--begin::Input-->
                                  <select name="type[]" onchange="typecheange(this)" id="type_0"  class="form-select form-select-lg form-select-solid type">
                                    <option>--Select--</option>
                                    <option value="GCSE">GCSE</option>
                                    <option value="IGCSE">IGCSE</option>
                                    <option value="A Level">A Level</option>
                                  </select>
                                </div>
                                 <div class="col-md-2">
                                    <!--begin::Label-->
                                   <label class="form-label mb-3">SUBJECT</label>
                                   <select name="subject[]" onchange="subjectcheange(this)" id="subject_0"  class="form-select form-select-lg form-select-solid subject">
                                      <option>--Select--</option>
                                     
                                  </select>
                                </div>
                                 <div class="col-md-2">
                                    <!--begin::Label-->
                                  <label class="form-label mb-3">UNIT CODE</label>
                                  <!--end::Label-->
                                  <!--begin::Input-->
                                  <input type="text" class="form-control form-control-lg form-control-solid" name="unit_code[]" id="unit_code_0" />
                                </div>
                                  <div class="col-md-2">
                                    <!--begin::Label-->
                                  <label class="form-label mb-3">OPTION CODE</label>
                                  <!--end::Label-->
                                  <!--begin::Input-->
                                  <input type="text" class="form-control form-control-lg form-control-solid" name="option_code[]" id="option_code_0" />
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
                                <button type="button" onclick="addmore()" class="btn-sm btn-success">Add Subjects</button>
                              </div>
                            </div>
                             <div class="col-lg-12 mt-2">
                                <div class="mb-0 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center form-label mb-5">Are you retaking these exams?*
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="mb-0">
                                    
                                      <label class="d-flex flex-stack mb-5 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                          <!--begin::Icon-->
                                          <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                              <!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
                                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon-->
                                            </span>
                                          </span>
                                          <!--end::Icon-->
                                          <!--begin::Description-->
                                          <span class="d-flex flex-column">
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">No</span>
                                         
                                          </span>
                                          <!--end:Description-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input" id="retaking_exams_no" type="radio" checked="checked" name="retaking_exams" value="no" />
                                        </span>
                                        <!--end:Input-->
                                      </label>
                                      <!--end::Option-->
                                      <!--begin:Option-->
                                      <label class="d-flex flex-stack mb-0 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                          <!--begin::Icon-->
                                          <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                              <!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Down.svg-->
                                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon-->
                                            </span>
                                          </span>
                                          <!--end::Icon-->
                                          <!--begin::Description-->
                                          <span class="d-flex flex-column">
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Yes</span>
                                            
                                          </span>
                                          <!--end:Description-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input" id="retaking_exams_yes" type="radio" name="retaking_exams" value="yes" />
                                        </span>
                                        <!--end:Input-->
                                      </label>
                                      <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                  </div>
                            </div>
                            <div class="col-lg-12 mt-2" id="retaking_section" style="display:none">
                              <label for="retaking_exams" class="form-label">Please specify which exams you are retaking?</label>
                              <input type="text" name="retaking_exams_name" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                            </div>

                            <div class="col-lg-12 mt-2">
                                <div class="mb-0 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center form-label mb-5">Are you caring forward your practical endorsement /course work/ spoken/ or any other assessment?
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="mb-0">
                                    
                                      <label class="d-flex flex-stack mb-5 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                          <!--begin::Icon-->
                                          <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                              <!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
                                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon-->
                                            </span>
                                          </span>
                                          <!--end::Icon-->
                                          <!--begin::Description-->
                                          <span class="d-flex flex-column">
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">No</span>
                                         
                                          </span>
                                          <!--end:Description-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input" id="caring_forwad_no" type="radio" checked="checked" name="caring_forwad" value="no" />
                                        </span>
                                        <!--end:Input-->
                                      </label>
                                      <!--end::Option-->
                                      <!--begin:Option-->
                                      <label class="d-flex flex-stack mb-0 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                          <!--begin::Icon-->
                                          <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                              <!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Down.svg-->
                                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon-->
                                            </span>
                                          </span>
                                          <!--end::Icon-->
                                          <!--begin::Description-->
                                          <span class="d-flex flex-column">
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Yes</span>
                                            
                                          </span>
                                          <!--end:Description-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input" id="caring_forwad_yes" type="radio" name="caring_forwad" value="yes" />
                                        </span>
                                        <!--end:Input-->
                                      </label>
                                      <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                  </div>
                            </div>
                            <div class="col-lg-12 mt-2" id="caring_forwad_section" style="display:none">
                              <label for="UCI" class="form-label">Please Specify the details including exam board & grade*
                              </label>
                              <input type="text" name="caring_forwad_details" id="uln" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                            </div>
                            
                         
                           
                          </div>
                          <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div data-kt-stepper-element="content">
                          <!--begin::Wrapper-->
                          <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-12">
                              <!--begin::Title-->
                              <h2 class="fw-bolder text-dark">Special Arrangements</h2>
                              <!--end::Title-->
                              <!--begin::Notice-->
                              <div class="text-gray-400 fw-bold fs-6">If you need more info, please check out
                                <a data-toggle="modal" data-target="#exampleModalLong"  href="#" class="link-primary fw-bolder">Help Page</a>.</div>

                              <!--end::Notice-->
                            </div>
                           <div class="col-lg-12 mt-2">
                                <div class="mb-0 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center form-label mb-5">Do you require special access requirements during your exam?*
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="mb-0">
                                    
                                      <label class="d-flex flex-stack mb-5 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                          <!--begin::Icon-->
                                          <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                              <!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
                                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon-->
                                            </span>
                                          </span>
                                          <!--end::Icon-->
                                          <!--begin::Description-->
                                          <span class="d-flex flex-column">
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">No</span>
                                         
                                          </span>
                                          <!--end:Description-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input" id="special_acces_no" type="radio" checked="checked" name="special_acces" value="no" />
                                        </span>
                                        <!--end:Input-->
                                      </label>
                                      <!--end::Option-->
                                      <!--begin:Option-->
                                      <label class="d-flex flex-stack mb-0 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                          <!--begin::Icon-->
                                          <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                              <!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Down.svg-->
                                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon-->
                                            </span>
                                          </span>
                                          <!--end::Icon-->
                                          <!--begin::Description-->
                                          <span class="d-flex flex-column">
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Yes</span>
                                            
                                          </span>
                                          <!--end:Description-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input" id="special_acces_yes" type="radio" name="special_acces" value="yes" />
                                        </span>
                                        <!--end:Input-->
                                      </label>
                                      <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                  </div>
                            </div>
                            <div class="col-lg-12 mt-2" id="evidence_section" style="display:none">
                              <label for="UCI" class="form-label">If yes, please provide any evidence to support your need for access arrangements as required by the relevant awarding bodies?</label>
                              <input type="text" name="special_acces_evidence" id="" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                            </div>
                            <div class="col-lg-12 mt-2">
                                <div class="mb-0 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center form-label mb-5">Do you suffer from any mental conditions such as high levels of anxiety?
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="mb-0">
                                    
                                      <label class="d-flex flex-stack mb-5 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                          <!--begin::Icon-->
                                          <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                              <!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
                                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon-->
                                            </span>
                                          </span>
                                          <!--end::Icon-->
                                          <!--begin::Description-->
                                          <span class="d-flex flex-column">
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">No</span>
                                         
                                          </span>
                                          <!--end:Description-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input" id="mental_conditions_no" type="radio" checked="checked" name="mental_conditions" value="no" />
                                        </span>
                                        <!--end:Input-->
                                      </label>
                                      <!--end::Option-->
                                      <!--begin:Option-->
                                      <label class="d-flex flex-stack mb-0 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                          <!--begin::Icon-->
                                          <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                              <!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Down.svg-->
                                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon-->
                                            </span>
                                          </span>
                                          <!--end::Icon-->
                                          <!--begin::Description-->
                                          <span class="d-flex flex-column">
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Yes</span>
                                            
                                          </span>
                                          <!--end:Description-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input" id="mental_conditions_yes" type="radio" name="mental_conditions" value="yes" />
                                        </span>
                                        <!--end:Input-->
                                      </label>
                                      <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                  </div>
                            </div>
                            <div class="col-lg-12 mt-2" id="mental_conditions_section" style="display:none">
                              <label for="UCI" class="form-label">If yes, please specify</label>
                              <input type="text" name="mental_condition_details" id="uln" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                            </div>
                            <div class="col-lg-12 mt-2">
                                <div class="mb-0 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center form-label mb-5">Do you have any conditions or disability?
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="mb-0">
                                    
                                      <label class="d-flex flex-stack mb-5 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                          <!--begin::Icon-->
                                          <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                              <!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
                                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon-->
                                            </span>
                                          </span>
                                          <!--end::Icon-->
                                          <!--begin::Description-->
                                          <span class="d-flex flex-column">
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">No</span>
                                         
                                          </span>
                                          <!--end:Description-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input" id="condition_disability_no" type="radio" checked="checked" name="condition_disability" value="no" />
                                        </span>
                                        <!--end:Input-->
                                      </label>
                                      <!--end::Option-->
                                      <!--begin:Option-->
                                      <label class="d-flex flex-stack mb-0 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                          <!--begin::Icon-->
                                          <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                              <!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Down.svg-->
                                              <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon-->
                                            </span>
                                          </span>
                                          <!--end::Icon-->
                                          <!--begin::Description-->
                                          <span class="d-flex flex-column">
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5">Yes</span>
                                            
                                          </span>
                                          <!--end:Description-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input" id="condition_disability_yes" type="radio" name="condition_disability" value="yes" />
                                        </span>
                                        <!--end:Input-->
                                      </label>
                                      <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                  </div>
                            </div>
                            <div class="col-lg-12 mt-2" id="condition_disability_section" style="display:none">
                              <label for="UCI" class="form-label">If yes, please specify</label>
                              <input type="text" name="condition_disability_details" id="uln" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                            </div>
                            <div class="col-lg-12 mt-2">
                              <p></p>
                            </div>
                             <div class="col-lg-12 mt-2">
                              <p>If you are not the candidate but the person responsible for the candidate please tell us the relationship.</p>
                              <br>
                              <label for="UCI" class="form-label">Relation</label>
                              <input type="text" name="relationship" id="relationship" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                            </div>
                            <div class="col-lg-12 mt-2">
                              <label for="UCI" class="form-label">Name</label>
                              <input type="text" name="relation_name" id="relation_name" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                            </div>
                            <div class="col-lg-12 mt-2">
                              <label  class="form-label">Signature</label><br>
                            <canvas id="myCanvas"></canvas>
                            <input type="button" value="Reset" id='resetSign'>
                              
                            </div>
                            <div class="col-lg-12 mt-2">
                              <label for="todays_date" class="form-label">Date</label>
                              <input type="date" name="todays_date" class="form-control form-control-lg form-control-solid" aria-describedby="passwordHelpBlock">
                            </div>
                          
                           
                          </div>
                          <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div data-kt-stepper-element="content">
                          <!--begin::Wrapper-->
                          <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-15">
                              <!--begin::Title-->
                              <h2 class="fw-bolder text-dark">Payment Details</h2>
                              <!--end::Title-->
                              <!--begin::Notice-->
                              <div class="text-gray-400 fw-bold fs-6">If you need more info, please check out
                              <a href="#" class="text-primary fw-bolder">Help Page</a>.</div>
                              <!--end::Notice-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="row" style="margin:10px 0px">
                              <div class="col-md-12">
                                <div class="form-check" style="margin:10px 0px">
                                  <input class="form-check-input" name="payment_option" type="radio" id="card_transfer" checked value="Card">
                                  <label class="form-check-label" for="card">
                                    Card
                                  </label>
                                </div>
                                <div class="form-check" style="margin:10px 0px">
                                  <input class="form-check-input" type="radio" name="payment_option" id="bank_transfer" value="Bank Transfer">
                                  <label class="form-check-label" for="bank_transfer">
                                    Bank Transfer
                                  </label>
                                </div>
                              </div>  
                            </div>
                            <div id="cardsection">
                              <!-- card page -->
                              <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                  <span class="required">Name On Card</span>
                                  <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Jon Doe" />
                              </div>
                              <!--end::Input group-->
                              <!--begin::Input group-->
                              <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                  <!--begin::Input-->
                                  <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4242424242424242" />
                                  <!--end::Input-->
                                  <!--begin::Card logos-->
                                  <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                    <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                    <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                    <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                  </div>
                                  <!--end::Card logos-->
                                </div>
                                <!--end::Input wrapper-->
                              </div>
                              <!--end::Input group-->
                              <!--begin::Input group-->
                              <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-md-8 fv-row">
                                  <!--begin::Label-->
                                  <label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
                                  <!--end::Label-->
                                  <!--begin::Row-->
                                  <div class="row fv-row">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                      <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                        <option></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                      </select>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                      <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                        <option></option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                      </select>
                                    </div>
                                    <!--end::Col-->
                                  </div>
                                  <!--end::Row-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                  <!--begin::Label-->
                                  <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">CVV</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
                                  </label>
                                  <!--end::Label-->
                                  <!--begin::Input wrapper-->
                                  <div class="position-relative">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                    <!--end::Input-->
                                    <!--begin::CVV icon-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                      <!--begin::Svg Icon | path: icons/duotone/Shopping/Credit-card.svg-->
                                      <span class="svg-icon svg-icon-2hx">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2" />
                                            <rect fill="#000000" x="2" y="8" width="20" height="3" />
                                            <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1" />
                                          </g>
                                        </svg>
                                      </span>
                                      <!--end::Svg Icon-->
                                    </div>
                                    <!--end::CVV icon-->
                                  </div>
                                  <!--end::Input wrapper-->
                                </div>
                                <!--end::Col-->
                              </div>
                            </div>
                            <div id="banksection" style="display:none;">
                              <p>Account Name: EDU SERVICE LIMITED Account Number: 18901601</p>
                              <p>Sort Code: 04-06-05</p>
                            
                            </div>
                         
                            <!-- card page end -->
                 
                          </div>
                          <!--end::Wrapper-->
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div data-kt-stepper-element="content">
                          <!--begin::Wrapper-->
                          <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-8 pb-lg-10">
                              <!--begin::Title-->
                              <h2 class="fw-bolder text-dark">All Most Done! Please Submit</h2>
                              <!--end::Title-->
                              <!--begin::Notice-->
                              <div class="text-gray-400 fw-bold fs-6">If you need more info, please
                               <a data-toggle="modal" data-target="#exampleModalLong"  href="#" class="link-primary fw-bolder">Help Page</a>.</div>

                              <!--end::Notice-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div class="mb-0">
                              <!--begin::Text-->
                              <div class="fs-6 text-gray-600 mb-5"></div>
                              <!--end::Text-->
                              <!--begin::Alert-->
                              <!--begin::Notice-->
                              <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                    <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1" />
                                    <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1" />
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                  <!--begin::Content-->
                                  <div class="fw-bold">
                                    Some Text
                                  </div>
                                  <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                              </div>
                              <!--end::Notice-->
                              <!--end::Alert-->
                            </div>
                            <!--end::Body-->
                          </div>
                          <!--end::Wrapper-->
                        </div>
                        <!--end::Step 5-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-15">
                          <!--begin::Wrapper-->
                          <div class="mr-2">
                            <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Left-2.svg-->
                            <span class="svg-icon svg-icon-4 me-1">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <polygon points="0 0 24 0 24 24 0 24" />
                                  <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
                                  <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                </g>
                              </svg>
                            </span>
                            <!--end::Svg Icon-->Back</button>
                          </div>
                          <!--end::Wrapper-->
                          <!--begin::Wrapper-->
                          <div>
                            <button type="submit" class="btn btn-lg btn-primary me-3">
                              <span class="indicator-label">Submit
                              <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                              <span class="svg-icon svg-icon-3 ms-2 me-0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                  </g>
                                </svg>
                              </span>
                              <!--end::Svg Icon--></span>
                              <span class="indicator-progress">Please wait...
                              <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <polygon points="0 0 24 0 24 24 0 24" />
                                  <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                  <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                </g>
                              </svg>
                            </span>
                            <!--end::Svg Icon--></button>
                          </div>
                          <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                      </form>
                      <!--end::Form-->
                    </div>
                    <!--end::Stepper-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Card-->
              </div>
              <!--end::Container-->
            </div>
            <!--end::Post-->
          </div>
  <script>
    var i=1;
    function addmore(){
        $("#add_more").append('<div class="mb-10 fv-row row"><div class="col-md-12" style="margin-bottom:8px"><label class="form-label mb-3">EXAM BOARD</label><select name="exam_board[]" class="form-select form-select-lg form-select-solid"><option value="Edexcel">Edexcel</option><option value="AQA">AQA</option><option value="OCR">OCR</option><option value="Cambridge(CIE)">Cambridge(CIE)</option><option value="WZEC">WZEC</option></select></div><div class="col-md-2"><label class="form-label mb-3">EXAM SERIES</label><select name="exam_series[]" id="exam_series_'+i+'" class="form-select form-select-lg form-select-solid"><option>--Select--</option><option value="November 2022">November 2022</option><option value="January 2022">January 2022</option><option value="June 2022">June 2022</option></select></div><div class="col-md-2"><label class="form-label mb-3">TYPE</label><select name="type[]" id="type_'+i+'" onchange="typecheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid type"><option>--Select--</option><option value="GCSE">GCSE</option><option value="IGCSE">IGCSE</option><option value="A Level">A Level</option></select></div><div class="col-md-2"><label class="form-label mb-3">SUBJECT</label><select name="subject[]" id="subject_'+i+'" onchange="subjectcheange(this)" data-id="'+i+'" class="form-select form-select-lg form-select-solid subject"><option>--Select--</option></select></div><div class="col-md-2"><label class="form-label mb-3">UNIT CODE</label><input type="text" class="form-control form-control-lg form-control-solid" name="unit_code[]" id="unit_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">OPTION CODE</label><input type="text" class="form-control form-control-lg form-control-solid" name="option_code[]"  id="option_code_'+i+'" /></div><div class="col-md-2"><label class="form-label mb-3">FEES</label><input type="text" class="form-control form-control-lg form-control-solid" id="fees_demo_'+i+'" disabled/><input type="hidden" class="amount_fees" name="fees[]" id="fees_'+i+'"/><a style="cursor:pointer;color:red;padding:5px 4px" onclick="deleterow(this)">Remove</a></div></div>');
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
        $("#retaking_section").hide();
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
          var subject_id=el.value;
          var index_id = el.id; 
          var total_amount = $("#total_amount").val();

          var arr = index_id.split('_');
          var mainid=arr[1];
         if(subject_id) {
             $.ajax({
                 url: "{{  url('/get/subject/details/') }}/"+subject_id,
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
    <script src="{{asset('backend')}}/assets/js/custom/modals/create-account.js"></script>
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
        $alloptioncode=App\Models\Subject::where('has_option_code',1)->orderBy('id','DESC')->get();
        @endphp
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Level</th>
              <th scope="col">Subject</th>
              <th scope="col">Option Code</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($alloptioncode as $yes => $code)
            <tr>
              <th scope="row">{{++ $yes}}</th>
              <th>{{ $code->exam_type }}</th>
              <td>{{$code->subject_name}}</td>
              <td>
                <table>
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
@endsection