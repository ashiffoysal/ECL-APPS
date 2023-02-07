@extends('layouts.backend')
@section('content')

<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.2/jQuery.print.min.js"> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
				
		<!--end::Header-->
		<!--begin::Content-->
		<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
			<!--begin::Toolbar-->
			<div class="toolbar" id="kt_toolbar">
				<!--begin::Container-->
				<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
					<!--begin::Page title-->
					<div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
						<!--begin::Title-->
						<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Candidate Exam Bookings</h1>
						<!--end::Title-->
						<!--begin::Separator-->
						<span class="h-20px border-gray-200 border-start mx-4"></span>
						<!--end::Separator-->
						<!--begin::Breadcrumb-->
						<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
							<!--begin::Item-->
							<li class="breadcrumb-item text-muted">
								<a href="index.html" class="text-muted text-hover-primary">Booking Details</a>
							</li>
							<!--end::Item-->
							<!--begin::Item-->
							<li class="breadcrumb-item">
								<span class="bullet bg-gray-200 w-5px h-2px"></span>
							</li>
							<!--end::Item-->
							<!--begin::Item-->
							<li class="breadcrumb-item text-muted">Candidate Booking Details</li>
							<!--end::Item-->
						
							<!--end::Item-->
						</ul>
						<!--end::Breadcrumb-->
					</div>
					<!--end::Page title-->
					<!--begin::Actions-->
					
					<!--end::Actions-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Toolbar-->
			<!--begin::Post-->
			<div class="post d-flex flex-column-fluid" id="kt_post">
				<!--begin::Container-->
				<div id="kt_content_container" class="container">
					<!--begin::Invoice 2 main-->
					<div class="card">
						<!--begin::Body-->
						<div class="card-body p-lg-20">
							<!--begin::Layout-->
							<div class="d-flex flex-column flex-xl-row" id="printableArea">
								<!--begin::Content-->
								<div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
									<!--begin::Invoice 2 content-->
									<div class="mt-n1">
										<!--begin::Top-->
										<div class="d-flex flex-stack pb-10">
											<!--begin::Logo-->
											<a href="#">
												<img alt="Logo" src="{{ asset('/uploads/logo/logo_1662996021.png') }}" />
											</a>
											<!--end::Logo-->
											<!--begin::Action-->
										
											<!--end::Action-->
										</div>
										<!--end::Top-->
										<!--begin::Wrapper-->
										<div class="m-0">
											<!--begin::Label-->
											<div class="fw-bolder fs-3 text-gray-800 mb-8">Booking-ID #{{$data->booking_id}}</div>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row g-5 mb-2">
												<!--end::Col-->
												<div class="col-sm-6">
													<!--end::Label-->
													<div class="fw-bold fs-7 text-gray-600 mb-1">Booking Date:</div>
													<!--end::Label-->
													<!--end::Col-->
													<div class="fw-bolder fs-6 text-gray-800">{{$data->created_at->format('d M-Y')}}</div>
													<!--end::Col-->
												</div>
												<!--end::Col-->
												<!--end::Col-->
												<div class="col-sm-6">
													<!--end::Label-->
												
													<!--end::Info-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="row g-5 mb-2">
												<!--end::Col-->
												<div class="col-sm-6">
													<!--end::Label-->
													<div class="fw-bold fs-7 text-gray-600 mb-1">Invoice For:</div>
													<!--end::Label-->
													<!--end::Text-->
													<div class="fw-bolder fs-6 text-gray-800">{{$data->first_name}} {{$data->middle_name}} {{$data->last_name}}</div>
													<!--end::Text-->
													<!--end::Description-->
													<div class="fw-bold fs-7 text-gray-600">{{$data->address_line_1}} {{$data->address_line_1}}
													<br />{{$data->phone}}
													<br />{{$data->email}}
												</div>
													<!--end::Description-->
												</div>
												<!--end::Col-->
												<!--end::Col-->
												<div class="col-sm-6">
													<!--end::Label-->
													<div class="fw-bold fs-7 text-gray-600 mb-1">Invoice By:</div>
													<!--end::Label-->
													<!--end::Text-->
													<div class="fw-bolder fs-6 text-gray-800">Exam Centre London</div>
													<!--end::Text-->
													<!--end::Description-->
													<div class="fw-bold fs-7 text-gray-600"> 54 Upton Lane,London E7 9LN
													<br />020 8616 2526
													<br/>info@examcentrelondon.co.uk
												</div>
													<!--end::Description-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Content-->
											<div class="flex-grow-1">
												<!--begin::Table-->
												<div class="table-responsive border-bottom mb-9">
													@if($data->main_exam_type=='GCSE' || $data->main_exam_type=='IGCSE' || $data->main_exam_type=='A Level' || $data->main_exam_type=='AS Level')
													<table class="table mb-3">

														<thead>
															<tr class="">
                                  								  <th class="">Exam Board</th>
								                                  <th class="">Exam Series</th>
								                                  <th class="">Subject</th>
								                                  <th class="">Unit Code</th>
								                                  <th class="">Option Code</th>
								                                  <th class="">Fees</th>
															</tr>
														</thead>
														<tbody>
															   @foreach(json_decode($data->exam_information) as $exam)
								                                <tr>
								                                  <td>{{$exam->exam_board}}</td>
								                                  <td>{{$exam->exam_series}}</td> 
								                                  @php
								                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
								                                  @endphp
								                                  <td class="text-danger">{{$subject->subject_name}}</td>
								                                  <td><label class="badge badge-danger">{{$subject->unit_code}}</label></td>
								                                  <td><label class="badge badge-danger">{{ $exam->option_code }}</label></td>
								                                   <td>£ {{ $exam->fees }}</td>
								                                </tr>
								                                @endforeach
														</tbody>

													</table>
													@endif
													@if($data->main_exam_type=='Functional Skills' )
													<table class="table mb-3">

														<thead>
															<tr class="">
                                  								  <th class="">Exam Board</th>
								                                  <th class="">Exam Branch</th>
								                                  <th class="">Exam Level</th>
								                                  <th class="">Subject</th>
								                                  <th class="">Exam Type</th>
								                                  <th class="">Fees</th>
								                                  <th class="">Date </th>
								                                  <th class="">Time</th>
															</tr>
														</thead>
														<tbody>
															
															    @foreach(json_decode($data->exam_information) as $exam)
								                                <tr>
								                                  <td>{{$exam->exam_board}}</td>
								                                  <td>{{$exam->exam_series}}</td> 
								                                  <td>{{$exam->type}}</td> 
								                                  @php
								                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
								                                  @endphp
								                                  <td class="text-danger">@if( $subject){{$subject->subject_name}} @endif</td>
								                                  <td class="text-danger">{{ $exam->option_code }}</td>
								                                 
								                                   <td>£ {{ $exam->fees }}</td>
								                                     <td>{{ $exam->exam_date }}</td>
								                                   <td>{{ $exam->start_exam_time }}</td>
								                                   
								                                </tr>
								                                @endforeach
														</tbody>

													</table>
													@endif
													@if($data->main_exam_type=='AAT' )
													<table class="table mb-3">

														<thead>
															<tr class="">
																 <th class="">Exam Board</th>
								                                  <th class="">Branch</th>
								                              
								                                  <th class="">Subject</th>
								                                  <th class="">Exam Type</th>
								                                  <th class="">Fees</th>
								                                  <th class="">Date </th>
								                                  <th class="">Time</th>
															</tr>
														</thead>
														<tbody>
															
															   @foreach(json_decode($data->exam_information) as $exam)
								                                <tr>
								                                  <td>{{$exam->exam_board}}</td>
								                                  <td>{{ $exam->exam_series }}</td>
								                         
								                                  @php
								                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
								                                  @endphp
								                                  <td class="text-danger">{{$subject->subject_name}}</td>
								                                  <td class="text-danger">{{ $exam->option_code }}</td>
								                                 
								                                   <td>£ {{ $exam->fees }}</td>
								                                   <td>{{ $exam->exam_date }}</td>
								                                   <td>{{ $exam->start_exam_time }}</td>
								                                </tr>
								                                @endforeach
														</tbody>

													</table>
													@endif
													@if($data->main_exam_type=='ACCA' )
													<table class="table mb-3">

														<thead>
															<tr class="">
																<th class="">Exam Board</th>
																<th class="">Subject</th>
																<th class="">Unit Code</th>
																<th class="">Option Code</th>
																<th class="">Fees</th>
																<th class="">Date</th>
                                  								<th class="">Time</th>
															</tr>
														</thead>
														<tbody>
															   @foreach(json_decode($data->exam_information) as $exam)
								                                <tr  class="">
								                                  <td  class="">{{$exam->exam_board}}</td>
								                                  @php
								                                    $subject=App\Models\Subject::where('id',$exam->subject)->first();
								                                  @endphp
								                                  <td class="text-danger">{{$subject->subject_name}}</td>
								                                  <td><label class="badge badge-danger">{{$subject->unit_code}}</label></td>
								                                  <td><label class="badge badge-danger">{{ $exam->option_code }}</label></td>
								                                   <td>£ {{ $exam->fees }}</td>
								                                   <td>{{ $exam->exam_date }}</td>
								                                   <td>{{ $exam->start_exam_time }}</td>
								                                </tr>
								                                @endforeach
														</tbody>

													</table>
													@endif
																				 





												</div>
												<!--end::Table-->
												<!--begin::Container-->
												<div class="d-flex justify-content-end">
													<!--begin::Section-->
													<div class="mw-300px">
														<!--begin::Item-->
														<div class="d-flex flex-stack mb-3">
															<!--begin::Accountname-->
															<div class="fw-bold pe-10 text-gray-600 fs-7">Subtotal:</div>
															<!--end::Accountname-->
															<!--begin::Label-->
															<div class="text-end fw-bolder fs-6 text-gray-800">£ {{ $data->total_amount }}</div>
															<!--end::Label-->
														</div>
														<!--end::Item-->
															<div class="d-flex flex-stack mb-3">
															<!--begin::Accountname-->
															<div class="fw-bold pe-10 text-gray-600 fs-7">Discount</div>
															
															<div class="text-end fw-bolder fs-6 text-gray-800">£ {{ $data->discount_amount }}</div>
															
														</div>
														<!--begin::Item-->
														<div class="d-flex flex-stack mb-3">
															<!--begin::Accountname-->
															<div class="fw-bold pe-10 text-gray-600 fs-7">Total</div>
														
															<div class="text-end fw-bolder fs-6 text-gray-800">£ {{ $data->total_amount }}</div>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack mb-3">
															<!--begin::Accountnumber-->
															<div class="fw-bold pe-10 text-gray-600 fs-7">Paid</div>
															<!--end::Accountnumber-->
															<!--begin::Number-->
															<div class="text-end fw-bolder fs-6 text-gray-800">£ {{ $data->paid_amount }}</div>
															<!--end::Number-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Code-->
															<div class="fw-bold pe-10 text-gray-600 fs-7">Due</div>
															<!--end::Code-->
															<!--begin::Label-->
															<div class="text-end fw-bolder fs-6 text-gray-800">£ {{ $data->due_amount }}</div>
															<!--end::Label-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Container-->
											</div>
											<!--end::Content-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Invoice 2 content-->
								</div>
								<!--end::Content-->
								<!--begin::Sidebar-->
								<div class="m-0">
									<!--begin::Invoice 2 sidebar-->
									<div class="border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
										<!--begin::Labels-->
										<div class="mb-8">
											@if($data->is_paid_verify==0)
												<span class="badge badge-light-warning">Pending Payment</span>
													@endif
											@if($data->is_paid_verify==1) 
											<span class="badge badge-light-success me-2">Payment Approved</span>
												@endif
											@if($data->is_paid_verify==2)
											<span class="badge badge-light-danger me-2">Payment Reject</span>
											@endif
										</div>
										<!--end::Labels-->
										<!--begin::Title-->
										<h6 class="mb-2 text-hover-primary">PAYMENT DETAILS</h6>
										<!--end::Title-->
										<!--begin::Item-->
										<div class="mb-2">
											<div class="fw-bold text-gray-600 fs-7">@if($data->payment_option !=null){{$data->payment_option}} Payment @else Not Yet @endif</div>
											<div class="fw-bolder text-gray-800 fs-6">{{$data->email}}</div>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-2">
											<div class="fw-bold text-gray-600 fs-7">Account/Transection Id:</div>
											<div class="fw-bolder text-gray-800 fs-6">{{ $data->transection_id }}
											</div>
										</div>
										<div class="mb-2">
											<div class="fw-bold text-gray-600 fs-7"></div>
											<div class="fw-bolder fs-6 text-gray-800">Exam Name:
											<a href="#" class="link-primary ps-1">{{ $data->main_exam_type }}</a>
											</div>
											@if($data->main_exam_type=='ACCA' )
											<div class="fw-bold text-gray-600 fs-7">ACCA Registration Number:<br>
												{{ $data->acca_registration_num }}
											</div>
											@endif
											@if($data->main_exam_type=='AAT' )
											<div class="fw-bold text-gray-600 fs-7">AAT Registration Number:<br>
												{{ $data->acca_registration_num }}
											</div>
											@endif
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="mb-6">
											<div class="fw-bold text-gray-600 fs-7">Completed By:</div>
											<div class="fw-bolder text-gray-800 fs-6">{{ $data->relation_name }}  {{ $data->relationship }} </div>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<!-- <div class="m-0">
											<div class="fw-bold text-gray-600 fs-7">Time Spent:</div>
											<div class="fw-bolder fs-6 text-gray-800 d-flex align-items-center">230 Hours
											<span class="fs-7 text-success d-flex align-items-center">
											<span class="bullet bullet-dot bg-success mx-2"></span>35$/h Rate</span></div>
										</div> -->
										<!--end::Item-->
									</div>
									<!--end::Invoice 2 sidebar-->
								</div>
								<!--end::Sidebar-->
							</div>
							<!--end::Layout-->
							<div>
								<a style="cursor: pointer;" onclick="printDiv('printableArea')" class="btn btn-sm btn-success">Print Now</a>
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Invoice 2 main-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Post-->
		</div>
				
		
<!-- <div>
    <button onclick="printDiv('printableArea')" class="btn btn-primary btn-sm" style="float: right">Print Customer
        Invoice </button>
    <button onclick="printDiv('printableArea2')" class="btn btn-primary btn-sm" style="float: right">Print Admin
        Invoice</button>
</div> -->

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