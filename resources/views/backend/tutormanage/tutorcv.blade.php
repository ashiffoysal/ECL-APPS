@extends('layouts.backend')
@section('title', 'Assesment View')
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
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">verification Details</h1>
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
					<li class="breadcrumb-item text-dark">Verification</li>
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
			@if($alldata->count() > 0)
				@foreach($alldata as $newdata)
				<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
					<!--begin::Card header-->
					<div class="card-header cursor-pointer">
						<!--begin::Card title-->
						<div class="card-title m-0">
							<h3 class="fw-bolder m-0">{{$newdata->item_name}}<p style="font-size:10px">{{$newdata->proof_of_address}}</p></h3>
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
								@if($newdata->item_name=='CV')
								<iframe src="{{ asset('/uploads/'.$newdata->image) }}" width="100%" height="700px;"></iframe>
								@else
								<img src="{{ asset('/'.$newdata->image) }}" class="img-fluid" alt="">
								
								@endif
							</div>
						</div>
						
						<form action="{{url('admin/student/details/'.$data->id)}}" method="post">
								@csrf
							<div class="row mb-7">
							<!--begin::Label-->
								<label class="col-lg-2 fw-bold text-muted">Manage</label>
								<!--end::Label-->
								<!--begin::Col-->
								<div class="col-lg-8 fv-row">
									<span class="fw-bold fs-6"> 
										<select class="form-control" name="is_vefiried">
											<option value="1"@if($newdata->is_verify==1) selected @endif>approve</option>
											<option value="0" @if($newdata->is_verify==0) selected @endif>pending</option>
											<option value="2"@if($newdata->is_verify==2) selected @endif>reject</option>
										</select>
									</span>
								</div>
								<!--end::Col-->
							</div>
							<div class="row mb-7">
								<!--begin::Label-->
								<label class="col-lg-2 fw-bold text-muted">Query</label>
								<!--end::Label-->
								<!--begin::Col-->
								<div class="col-lg-8 fv-row">
									<span class="fw-bold fs-6"> 
										<input type="hidden" value="{{ $newdata->id }}" name="v_id">
										<input class="form-control" type="text" value="{{ $newdata->more }}" name="query">
									</span>
								</div>
								<div class="col-lg-4">
									
								</div>
								<div class="col-lg-8 mt-5">
									<button class="btn btn-warning">Update</button>
								</div>
								<!--end::Col-->
							</div>
						</form>
					</div>
					<!--end::Card body-->
				</div>
				@endforeach
			@else
			<p>No Verification Uploaded !!</p>
			@endif
			

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
@endsection