@extends('layouts.backend')
@section('title', 'Exam-Booking')
@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">ExamBooking Details</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('/') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <!--begin::Wrapper-->
                <div class="me-4">
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                 
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <!-- <label class="form-label fw-bold">Notifications:</label> -->
                                <!--end::Label-->
                                <!--begin::Switch-->
                               
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                         
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                <!-- <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a> -->
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
        <div  class="container">
            <!--begin::Navbar-->
            <div  id="printableArea">
                <div class="card mb-10">
                    <div class="card-body pt-9 pb-0">
                      <img alt="Logo" src="{{asset('uploads/logo/'.$companyInformation->logo)}}" style="height:60px !important" />
                    </div>
                </div>
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card header-->
                        <div class="card-title fs-3 fw-bolder">
                            <!--logo-->
                         
                            <h2>Booking Details</h2>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body content">
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Name</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->first_name }}   {{ $data->middle_name }} {{ $data->last_name }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                          <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Email</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->email }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Phone</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->phone }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                           <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Emergency Contact Number</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->emergency_contact_number }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                         <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Address Line One</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->address_line_1 }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Address Line Two</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->address_line_2 }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">City & PostCode</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->city }} , {{$data->postcode}}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Date of Birth</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->date_of_birth }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Gender</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->gender }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">UCI</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->uci }} 
                                    <br>
                                    {{ $data->uci_number }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">ULN</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->uln }} 
                                    <br>
                                    {{ $data->uln_number }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                      
                        
                        
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Total Amount</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->total_amount }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Booking Date</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->created_at }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                  
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-12">
                                <div class="fs-6 fw-bold mt-2 mb-3">Booking Information</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-12">
                                @if($data->main_exam_type=='GCSE')
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Board</th>
                                        <th scope="col">Series</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Unit Code</th>
                                        <th scope="col">Option Code</th>
                                        <th scope="col">Fees</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(json_decode($data->exam_information) as $key => $newdata)
                                        <tr>
                                            <td>{{$newdata->exam_board}}</td>
                                            <td>{{$newdata->exam_series ?? ''}}</td>
                                            <td>{{$newdata->type}}</td>
                                            <td>@php
                                                    $subjectname=App\Models\Subject::where('id',$newdata->subject)->first();
                                                @endphp
                                                {{$subjectname->subject_name}}
                                            </td>
                                            <td>{{$newdata->unit_code ?? ''}}</td>
                                            <td>{{$newdata->option_code}}</td>
                                            <td>{{$newdata->fees}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                @endif
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                  
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Retaking Exams</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                {{ $data->retaking_exams }}<br>
                                {{$data->retaking_exams_name}}
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Caring Forwad</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                 {{ $data->caring_forwad }}<br>{{ $data->caring_forwad_details }}
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Address</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                               {{ $data->special_acces }}<br>
                               {{ $data->special_acces_evidence }}
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                           <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Mental Conditions</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                               {{ $data->mental_conditions }}<br>
                               {{ $data->mental_condition_details }}
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Condition Disability</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                               {{ $data->condition_disability }}<br>
                               {{ $data->condition_disability_details }}
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Payment Method</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                               {{ $data->payment_option }}<br>
                               
                            </div>
                            <!--end::Col-->
                        </div>
                        
                        <!--end::Row-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
            </div>
            <!--end:Form-->
            <div class="card-footer d-flex justify-content-end py-6">
                <button type="button" onclick="printDiv('printableArea')" class="btn btn-primary btn-sm" style="float: right">Print</button>
            </div>
        </div>
     
            
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.2/jQuery.print.js"
    integrity="sha512-BaXrDZSVGt+DvByw0xuYdsGJgzhIXNgES0E9B+Pgfe13XlZQvmiCkQ9GXpjVeLWEGLxqHzhPjNSBs4osiuNZyg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
@endsection