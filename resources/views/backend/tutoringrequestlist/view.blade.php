@extends('layouts.backend')
@section('title', 'Request View')
@section('content')
<style>
.form-control {
 
    padding: 0rem 1rem;
   
   
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Tutor Assign Details</h1>
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
        <div id="kt_content_container" class="container">
            <!--begin::Navbar-->
            <div class="card mb-10">
                <div class="card-body pt-9 pb-0">
                 
                    <div class="separator"></div>
                    <!--begin::Nav wrapper-->
                    <div class="d-flex overflow-auto h-55px">
                        <!--begin::Nav links-->
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" href="">Request  Details</a>
                            </li>
                        </ul>
                        <!--end::Nav links-->
                    </div>
                    <!--end::Nav wrapper-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::Modals-->
            <!--begin::Modal - View Users-->
          
            <!--end::Modal - View Users-->
           
            <form class="form" action="{{ url('/admin/student-request/approve') }}" method="post">
                @csrf
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card header-->
                        <div class="card-title fs-3 fw-bolder">Information Details</div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                    <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <div class="fs-6 fw-bold mt-2 mb-3">Assign Status</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-2">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                   @if($data->is_approve==0)
                                     <button type="button" class="btn-warning">Pending</button>
                                   @endif
                                   @if($data->is_approve==1)
                                     <button type="button" class="btn-success">Approve</button>
                                   @endif
                                   @if($data->is_approve==2)
                                     <button type="button" class="btn-danger">Pending</button>
                                   @endif
                                   
                                </div>
                                <!--end::Progress-->
                            </div>
                         
                            <!--end::Col-->
                        </div>
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Student Name</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="">
                                    {{ $data->Student->name }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                             <!--begin::Col-->
                             <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Student Email</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                {{ $data->Student->email }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Student Phone</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                {{ $data->Student->phone }}
                                </div>
                                <!--end::Progress-->
                            </div>
                             <!--begin::Col-->
                             <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Subject</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->subject }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Start Date</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->pick_date }}
                                </div>
                                <!--end::Progress-->
                            </div>
                             <!--begin::Col-->
                             <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Start Time</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->pick_time }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Lessons Type</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->lessons_type }}
                                </div>
                                <!--end::Progress-->
                            </div>
                             <!--begin::Col-->
                             <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Exam Board</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->exam_board }}
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
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                {{ $data->intotal_amount }} £
                                </div>
                                <!--end::Progress-->
                            </div>
                        </div>
                        <div class="row mb-8">
                            <!--end::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Paid Amount</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                {{ $data->total_amount }} £
                                </div>
                                <!--end::Progress-->
                            </div>
                        </div>
                        <div class="row mb-8">
                            <div class="col-xl-3 mt-1">
                                <div class="fs-6 fw-bold mt-2 mb-3">Discount Amount</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                @if($data->discount_amount==null) 0 £ @else {{ $data->discount_amount }} £ @endif
                                </div>
                                <!--end::Progress-->
                            </div>
                        </div>
                         <div class="row mb-8">
                        
                             <!--begin::Col-->
                             <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Due Amount</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                {{ $data->due_amount }} £
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                                <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Total Hours</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->total_hour }} Hours
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Paid Hours</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->paid_hour }} Hours
                                </div>
                                <!--end::Progress-->
                            </div>
                             <!--begin::Col-->
                             <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Due Hours</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                {{ $data->due_hour }} £
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                 <!--begin::Card-->
                 <br>
                 <br>
                 <div class="card">
                    <div class="card-header">
                        <!--begin::Card header-->
                        <div class="card-title fs-3 fw-bolder">Tutor Information</div>
                        <!--end::Card header-->
                    </div>
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Teacher Name</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->Tutor->name }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                             <!--begin::Col-->
                             <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Teacher Email</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                  {{ $data->Tutor->email }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Teacher Phone</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->Tutor->phone }}
                                </div>
                                <!--end::Progress-->
                            </div>
                             <!--begin::Col-->
                             <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Hourly Rate</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->Tutor->expected_hourly_rate }} £ per Hour
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <!--begin::Card header-->
                        <div class="card-title fs-3 fw-bolder">Payment Details</div>
                        <!--end::Card header-->
                    </div>
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row mb-8">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Order id</th>
                                <th scope="col">Pay Amount</th>
                              
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $allwallet=App\Models\Wallet::where('order_id',$data->order_id)->orderBy('id','DESC')->get();
                                @endphp
                                @foreach($allwallet as $key => $wallet)
                                <tr>
                                    <th scope="row">{{ ++$key}}</th>
                                    <td>{{ $wallet->created_at->format('F-d-Y') }}</td>
                                    <td>{{ $wallet->order_id }}</td>
                                    <td>{{ $wallet->amount }} £</td>
                                    
                                </tr>
                                @endforeach
                               
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end py-6 row">

                        <div class="col-md-6">
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <select name="is_approve" class="form-control" id="">
                                <option value="0" @if($data->is_approve==0) selected @endif>Pending</option>
                                <option value="1" @if($data->is_approve==1) selected @endif>Approved</option>
                                <option value="3" @if($data->is_approve==3) selected @endif>Rejected</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                        
                    </div>
                   
                </div>
               
            </form>
           
        </div>
        
    </div>
    
</div>
@endsection