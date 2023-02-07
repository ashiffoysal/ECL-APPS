@extends('layouts.backend')
@section('title', 'Exam Date Manage')
@section('content')




<style>
    .file_upload {
        border: 3px dashed #7eabf3 !important;
        height: 300px !important;
    }
    p {
        color: #5FAAE1 !important;
        display: inline !important;
        width: auto !important;
    }
    .badge-info {
        color: #fff;
        background-color: #98969c;
        margin-left: 8px;
    }
    p {
        color: #5FAAE1 !important;
        display: inline !important;
        width: auto !important;
    }
    .form-control {
        padding:-0.25rem 1rem;
    }
    input[type="text"] {
    border: 1px solid #f7f7f7;
    padding: 10px 10px;
    /* background: #f5f5f5; */
    background-color: #f5f8fa;
    border-color: #f5f8fa;
    color: #5e6278;
    }
    .form-control.form-control-solid {
    background-color: #f5f8fa;
    border-color: #f5f8fa;
    color: #5e6278;
    transition: color .2s ease,background-color .2s ease;
    padding: 7px 10px;
    }
    .bootstrap-tagsinput {
        background-color: #f5f8fa;
        border-color: #f5f8fa;
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        display: inline-block;
        padding: 4px 6px;
        color: #b9b9b9;
        vertical-align: middle;
        border-radius: 4px;
        max-width: 100%;
        line-height: 25px;
        cursor: text;
        width: 100%;
        background: aliceblue;
    }
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Manage Date</h1>
                <!--end::Title-->
            </div>

        </div>
        <!--end::Container-->
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <div class="card mb-10">
                <div class="card-body d-flex align-items-center p-5 p-lg-8">
                    <!--begin::Icon-->
                    <div class="d-flex h-50px w-50px h-lg-80px w-lg-80px flex-shrink-0 flex-center position-relative align-self-start align-self-lg-center mt-3 mt-lg-0">
                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-polygon.svg-->
                        <span class="svg-icon svg-icon-primary position-absolute opacity-15">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none" class="h-50px w-50px h-lg-80px w-lg-80px">
                                <path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--begin::Svg Icon | path: icons/duotone/Tools/Tools.svg-->
                        <span class="svg-icon svg-icon-2x svg-icon-lg-3x svg-icon-primary position-absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000"></path>
                                    <path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Description-->
                    <div class="ms-6">
                        <p class="list-unstyled text-gray-600 fw-bold fs-6 p-0 m-0">Manage Date</p>
                    </div>
                    <!--end::Description-->
                </div>
            </div>
            <div class="card">
                <form action="{{ url('admin/subject/create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <!-- radio ends -->
                    <div class="row">
                        <div class="col-md-10 col-xl-10">
                            <div class="card-body">
                                <div class="tab-content pt-3" data-select2-id="select2-data-89-mk7z">
                                    <div class="tab-pane active" id="kt_builder_main" data-select2-id="select2-data-kt_builder_main">
                                         <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">NOVEMBER 2022 (GCSE Retake):<span class="required"></span></label>
                                            <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date" onchange="changedatefirst(this)" id="GCSE_Retake_entry_date" class="form-control form-control-solid " name="GCSE_Retake_entry_date" placeholder="Enter Entry Deadline" value="{{$first->entry_dateline}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date" onchange="changedatefirst(this)" class="form-control form-control-solid" name="GCSE_Retake_late_entry_date" placeholder="Enter Late Fees Charge From" value="{{$first->entry_latefees}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date" onchange="changedatefirst(this)" class="form-control form-control-solid" name="GCSE_Retake_high_late_entry_date" placeholder="Enter High Late Fees Charge From" value="{{$first->entry_highlatefees}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">NOVEMBER 2022 (CIE 1st Time):<span class="required"></span></label>
                                            <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date" onchange="changedatesecond(this)" class="form-control form-control-solid" id="examplefour" name="GCSE_Retake_entry_date" placeholder="Enter Entry Deadline" value="{{$second->entry_dateline}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date" onchange="changedatesecond(this)" class="form-control form-control-solid" name="GCSE_Retake_late_entry_date" placeholder="Enter Late Fees Charge From" value="{{$second->entry_latefees}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date" onchange="changedatesecond(this)" class="form-control form-control-solid"  id="examplesix" name="GCSE_Retake_high_late_entry_date" placeholder="Enter High Late Fees Charge From" value="{{$second->entry_highlatefees}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">NOVEMBER 2022 (CIE Retake):<span class="required"></span></label>
                                            <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date"  onchange="changedatethird(this)" class="form-control form-control-solid" id="exampleseven" name="GCSE_Retake_entry_date" placeholder="Enter Entry Deadline" value="{{$third->entry_dateline}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date"  onchange="changedatethird(this)" class="form-control form-control-solid " id="exampleeight" name="GCSE_Retake_late_entry_date" placeholder="Enter Late Fees Charge From" value="{{$third->entry_latefees}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date"  onchange="changedatethird(this)" class="form-control form-control-solid" id="examplenine"  name="GCSE_Retake_high_late_entry_date" placeholder="Enter High Late Fees Charge From" value="{{$third->entry_highlatefees}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">JANUARY 2023:<span class="required"></span></label>
                                            <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date"  onchange="changedatefour(this)" class="form-control form-control-solid" id="exampleten" name="GCSE_Retake_entry_date" placeholder="Enter Entry Deadline" value="{{$forth->entry_dateline}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date"   onchange="changedatefour(this)" class="form-control form-control-solid" id="exampleeleven" name="GCSE_Retake_late_entry_date" placeholder="Enter Late Fees Charge From" value="{{$forth->entry_latefees}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date" onchange="changedatefour(this)" class="form-control form-control-solid" id="exampletwelve" name="GCSE_Retake_high_late_entry_date" placeholder="Enter High Late Fees Charge From "value="{{$forth->entry_highlatefees}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">JUNE 2023:<span class="required"></span></label>
                                            <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date" onchange="changedatefive(this)" class="form-control form-control-solid" id="examplethirteen"name="GCSE_Retake_entry_date" placeholder="Enter Entry Deadline" value="{{$firth->entry_dateline}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date" onchange="changedatefive(this)" class="form-control form-control-solid" id="examplefourteen" name="GCSE_Retake_late_entry_date" placeholder="Enter Late Fees Charge From" value="{{$firth->entry_latefees}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-xl-3">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                 <input type="date" onchange="changedatefive(this)" class="form-control form-control-solid" id="examplefifteen" name="GCSE_Retake_high_late_entry_date" placeholder="Enter High Late Fees Charge From " value="{{$firth->entry_highlatefees}}">
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer py-6">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <!-- <div class="col-lg-9">
                                        <button type="submit" id="kt_layout_builder_preview" class="btn btn-primary me-2">
                                            <span class="indicator-label">Update</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-xl-5">
                            <div class="card-body" data-select2-id="select2-data-90-elj6">
                                <!-- image -->
                                <div class="tab-content pt-3" data-select2-id="select2-data-89-mk7z" id="image_upload_sec">
                                    <div class="tab-pane active" id="kt_builder_main" data-select2-id="select2-data-kt_builder_main">
                                 
                                       
                                    </div>
                                </div>
                                  <!-- image end-->
                            </div>
                        </div>
                        <div class="col-md-7 col-xl-">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    
function changedatefirst(el){

    var value = el.value;
    var name = el.name;
        $.ajax({
             url: "{{  url('admin/getessuesfirst/update') }}",
             type:"GET",
             data:{
               
                'value':value,
                'name':name,
             },
             success:function(data){
                     $("#paid_status_success").html("Paid Status update success");
                }
        });
    

}
function changedatesecond(el){

    var value = el.value;
    var name = el.name;
        $.ajax({
             url: "{{  url('admin/getessuessecond/update') }}",
             type:"GET",
             data:{
               
                'value':value,
                'name':name,
             },
             success:function(data){
                     $("#paid_status_success").html("Paid Status update success");
                }
        });
    

}
function changedatethird(el){

    var value = el.value;
    var name = el.name;
        $.ajax({
             url: "{{  url('admin/getessuesthird/update') }}",
             type:"GET",
             data:{
               
                'value':value,
                'name':name,
             },
             success:function(data){
                     $("#paid_status_success").html("Paid Status update success");
                }
        });
    

}
function changedatefour(el){

    var value = el.value;
    var name = el.name;
        $.ajax({
             url: "{{  url('admin/getessuesfour/update') }}",
             type:"GET",
             data:{
               
                'value':value,
                'name':name,
             },
             success:function(data){
                     $("#paid_status_success").html("Paid Status update success");
                }
        });
    

}
function changedatefive(el){

    var value = el.value;
    var name = el.name;
        $.ajax({
             url: "{{  url('admin/getessuesfive/update') }}",
             type:"GET",
             data:{
               
                'value':value,
                'name':name,
             },
             success:function(data){
                     $("#paid_status_success").html("Paid Status update success");
                }
        });
    

}



</script>




@endsection