@extends('layouts.backend')
@section('title', 'Assesment View')
@section('content')
<style>
	.form-control {
    display: block;
    width: 100%;
     padding: 0rem 1rem; 
    font-size: 1.1rem;
    font-weight: 500;
    line-height: 1.5;
    color: #181c32;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e4e6ef;
    appearance: none;
    border-radius: 0;
    box-shadow: inset 0 1px 2px rgb(0 0 0 / 8%);
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
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
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Tutor Educational Information</h1>
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
					<li class="breadcrumb-item text-muted">Tutor</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-dark">Educational Information</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center py-1">
				<!--begin::Wrapper-->
				<div class="me-4">
		
				
					<!--end::Menu-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Button-->
				
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
			@include('backend.tutormanage.include.header')
			<!--end::Navbar-->
			<!--begin::details View-->
			@if($educational_in->count() > 0)
			@foreach($educational_in as $data)
			<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<!--begin::Card header-->
				<div class="card-header cursor-pointer">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">{{$data->name_of_degree}}</h3>
					</div>
				</div>
				<!--begin::Card header-->
				<!--begin::Card body-->
				<div class="card-body p-9">
					<!--begin::Row-->
					<div class="row">
						<form action="{{ url('/admin/tutor/education-details/'.$id) }}" method="post">
							@csrf
							<div class="col-md-7">
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Institution</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-dark">{{$data->institution}}</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Grade</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-bold fs-6"> {{ $data->grade }}</span>
										</div>
										<!--end::Col-->
									</div>
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Status</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-bold fs-6"> @if($data->is_verify==0) Pending @elseif($data->is_verify==1) Approve @else Reject @endif</span>
										</div>
										<!--end::Col-->
									</div>
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Manage</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-bold fs-6"> 
												<select class="form-control" name="is_vefiried">
													<option value="1"@if($data->is_verify==1) selected @endif>approve</option>
													<option value="0" @if($data->is_verify==0) selected @endif>pending</option>
													<option value="2"@if($data->is_verify==2) selected @endif>reject</option>
												</select>
											</span>
										</div>
										<!--end::Col-->
									</div>
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Query</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-bold fs-6"> 
												<input type="hidden" value="{{ $data->id }}" name="edu_id">
												<input class="form-control" type="text" value="{{ $data->more }}" name="query">
											</span>
										</div>
										<div class="col-lg-4">
											
										</div>
										<div class="col-lg-8 mt-5">
											<button class="btn btn-warning">Update</button>
										</div>
										<!--end::Col-->
									</div>
							</div>
							<div class="col-md-5">
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-4 fw-bold text-muted">Certificate Image
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">
										<img src="{{ asset('/'.$data->image) }}" alt="" height="50px">
									</div>
									<!--end::Col-->
								</div>
							</div>
						</form>
					</div>
					
					<!--end::Input group-->
					<!--begin::Input group-->
				
				</div>
				<!--end::Card body-->
			</div>
			@endforeach
			@else
			<p>Not Uploads Any Educational Information</p>
			@endif

			{{-- 
            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<!--begin::Card header-->
				<div class="card-header cursor-pointer">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">A Level</h3>
					</div>
				</div>

				<div class="card-body p-9">
				
					<div class="row mb-7">
					
						<label class="col-lg-4 fw-bold text-muted">Institution</label>
					
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">@if($data->a_level_institution==null) Not Yet @else {{ $data->a_level_institution }} @endif</span>
						</div>
					
					</div>
					<!--end::Row-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Grade</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 fv-row">
							<span class="fw-bold fs-6">@if($data->a_level_grade==null) Not Yet @else {{ $data->a_level_grade }} @endif</span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Certificate Image
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 d-flex align-items-center">
							<span class="fw-bolder fs-6 me-2">@if($data->a_level_certificate_image==null) Not Yet @else <img src="{{ asset('/'.$data->a_level_certificate_image) }}" alt="" height="50px"> @endif</span>
						</div>
						<!--end::Col-->
					</div>
				</div>
				<!--end::Card body-->
			</div>
            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<!--begin::Card header-->
				<div class="card-header cursor-pointer">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">Degree</h3>
					</div>
					<!--end::Card title-->
					<!--begin::Action-->
					<!-- <a href="" class="btn btn-primary align-self-center">Not Verified</a> -->
					<!--end::Action-->
				</div>
				<!--begin::Card header-->
				<!--begin::Card body-->
				<div class="card-body p-9">
					<!--begin::Row-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Institution</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">@if($data->degree_institution==null) Not Yet @else {{ $data->degree_institution }} @endif</span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Grade</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 fv-row">
							<span class="fw-bold fs-6">@if($data->degree_grade==null) Not Yet @else {{ $data->degree_grade }} @endif</span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Certificate Image
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 d-flex align-items-center">
							<span class="fw-bolder fs-6 me-2">@if($data->degree_certificate_image==null) Not Yet @else <img src="{{ asset('/'.$data->degree_certificate_image) }}" height="40px" alt=""> @endif</span>
						</div>
						<!--end::Col-->
					</div>
				</div>
				<!--end::Card body-->
			</div>
            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<!--begin::Card header-->
				<div class="card-header cursor-pointer">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">Masters</h3>
					</div>
					<!--end::Card title-->
					<!--begin::Action-->
					<!-- <a href="" class="btn btn-primary align-self-center">Not Verified</a> -->
					<!--end::Action-->
				</div>
				<!--begin::Card header-->
				<!--begin::Card body-->
				<div class="card-body p-9">
					<!--begin::Row-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Institution</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">@if($data->masters_institution==null) Not Yet @else {{ $data->masters_institution }} @endif</span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Grade</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 fv-row">
							<span class="fw-bold fs-6">@if($data->masters_grade==null) Not Yet @else {{ $data->masters_grade }} @endif</span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Certificate Image
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 d-flex align-items-center">
							<span class="fw-bolder fs-6 me-2">@if($data->masters_certificate_image==null) Not Yet @else <img src="{{ asset('/'.$data->masters_certificate_image) }}" height="40px" alt=""> @endif</span>
						</div>
						<!--end::Col-->
					</div>
				</div>
				<!--end::Card body-->
			</div>
			--}}

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
@endsection