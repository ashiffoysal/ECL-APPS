@extends('layouts.backend')
@section('title', 'History')
@section('content')
<style>
.form-control {
    padding: 0rem 1rem !important;
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
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">History Details</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-200 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="{{ url('/admin') }}" class="text-muted text-hover-primary">Home</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Tutor</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-dark">History</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center py-1">
				<!--begin::Wrapper-->
				<div class="me-4"> 
		
				
					
				</div>
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
			@include('backend.tutormanage.include.header')
			<!--end::Navbar-->
			<!--begin::details View-->
	
				<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
					<!--begin::Card header-->
					<div class="card-header cursor-pointer">
						<!--begin::Card title-->
						<div class="card-title m-0">
							<h3 class="fw-bolder m-0"><p style="font-size:10px"></p></h3>
						</div>
						<!--end::Card title-->
						<!--begin::Action-->
						<!-- <a href="account/settings.html" class="btn btn-primary align-self-center">Not Verified</a> -->
						<!--end::Action-->
					</div>
					<!--begin::Card header-->
					<!--begin::Card body-->
					<div class="card-body p-9">
						<!--begin::Row-->
						<div class="row mb-7">

							<div class="col-md-12">
                                <h2>Wallet History:</h2>
                                <br>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Transection Type</th>
                                        <th scope="col">Transection Id</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allwallet as $key => $data)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td>{{ $data->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $data->amount }} £</td>
                                        <td>@if($data->amount_type=='Dabit') <span class="btn-sm btn-success">Cash In</span> @elseif($data->amount_type=='Credit') <span class="btn-sm btn-danger">Cash out</span> @endif</td>
                                        <td>{{  $data->transection_id }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            
						</div>
					</div>
					<!--end::Card body-->
				</div>
                
				<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
					<!--begin::Card header-->
					<div class="card-header cursor-pointer">
						<!--begin::Card title-->
						<div class="card-title m-0">
							<h3 class="fw-bolder m-0"><p style="font-size:10px"></p></h3>
						</div>
						<!--end::Card title-->
						<!--begin::Action-->
						<!-- <a href="account/settings.html" class="btn btn-primary align-self-center">Not Verified</a> -->
						<!--end::Action-->
					</div>
					<!--begin::Card header-->
					<!--begin::Card body-->
					<div class="card-body p-9">
						<!--begin::Row-->
						<div class="row mb-7">

                            <div class="col-md-12">
                                <h2>Lesson History:</h2>
                                <br>
                                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="dataTableExample1" class="data-table" style="width:100%;font-size:14px" >
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Student</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Total Hours</th>
                                    <th scope="col">Lesson Details</th>
                                    <th scope="col">Student Confirmation</th>
                                    <th scope="col">Student Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach($alltutorlessoncomplate as $key => $data)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td>{{$data->date}}</td>
                                        <td>{{ $data->Student->name }}</td>
                                        <td>{{ $data->subject }}</td>
                                        <td>{{ $data->total_hour }}</td>
                                        <td>{{ $data->lesson_complete_details }}</td>
                                        <td>
                                             @if($data->is_approve==0)
                                              <span class="btn-sm btn-warning">Pending</span>
                                              @elseif($data->is_approve==1)
                                              <span class="btn-sm btn-success">Accept</span>
                                              @elseif($data->is_approve==2)
                                              <span class="btn-sm btn-danger">Reject</span>
                                              @endif
                                        </td>
                                        <td>{{ $data->student_query }}</td>
                                    </tr>
                                    @endforeach
                                   
                                    
                                </tbody>
                                </table>
							</div>
						</div>
					</div>
					<!--end::Card body-->
				</div>
		

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
@endsection