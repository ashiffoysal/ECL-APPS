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
							<div id="kt_content_container" class="container">
									<div class="card">
										<div class="card-body">
											<div class="col-md-10">

												@if($data->main_exam_type=='GCSE' || $data->main_exam_type=='A Level' ||  $data->main_exam_type=='IGCSE' )
								                            <table class="table table-hover" style="font-size: 16px">
								                              <thead>
								                                <tr>
								                                  <th>Exam Board</th>
								                                  <th>Exam Series</th>
								                                  <th>Subject</th>
								                                  <th>Unit Code</th>
								                                  <th>Option Code</th>
								                                  <th>Fees</th>
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

								                        	@if($data->main_exam_type=='AAT')
								                            <table class="table table-hover" style="font-size: 16px">
								                              <thead>
								                                <tr>
								                                  <th>Exam Board</th>
								                                  <th>Branch</th>
								                                  <th>Exam Level</th>
								                                  <th>Subject</th>
								                                  <th>Exam Type</th>
								                                  <th>Fees</th>
								                                  <th>Date </th>
								                                  <th>Time</th>
								                                </tr>
								                              </thead>
								                              <tbody>
								                                @foreach(json_decode($data->exam_information) as $exam)
								                                <tr>
								                                  <td>{{$exam->exam_board}}</td>
								                                  <td>{{ $exam->exam_series }}</td>
								                                  <td>{{$exam->type}}</td> 
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

								                        	@if($data->main_exam_type=='ACCA')
								                            <table class="table table-hover" style="font-size: 16px">
								                              <thead>
								                                <tr>
								                                  <th>Exam Board</th>
								                                  <th>Exam Level</th>
								                                  <th>Subject</th>
								                                  <th>Exam Type</th>
								                                  <th>Fees</th>
								                                  <th>Date </th>
								                                  <th>Time</th>
								                                </tr>
								                              </thead>
								                              <tbody>
								                                @foreach(json_decode($data->exam_information) as $exam)
								                                <tr>
								                                  <td>{{$exam->exam_board}}</td>
								                                  <td>{{$exam->type}}</td> 
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

								                        	@if($data->main_exam_type=='Functional Skills')
								                            <table class="table table-hover" style="font-size: 16px">
								                              <thead>
								                                <tr>
								                                  <th>Exam Board</th>
								                                  <th>Exam Branch</th>
								                                  <th>Exam Level</th>
								                                  <th>Subject</th>
								                                  <th>Exam Type</th>
								                                  <th>Fees</th>
								                                  <th>Date </th>
								                                  <th>Time</th>
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
												 
											</div>
										</div>
									</div>
							</div>
						</div>



						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container">
								<!--begin::Card-->
								<form action="{{ url('admin/make-payment/update') }}" method="post">
									@csrf
									<div class="card">
										<div class="card-body">

															<div class="form-group">
															    <label for="exampleInputEmail1">Total Amount</label>
															    <input type="text" class="form-control" placeholder="Total Amount" disabled value="{{ $data->total_amount }}">
															   
															 </div>
						                     				<div class="form-group">
															    <label for="exampleInputEmail1">Due Amount</label>
															    <input type="text" class="form-control" placeholder="Due Amount" value="{{ $data->due_amount }}">
															    <input type="hidden" name="booking_id" value="{{ $data->booking_id }}">
															    <input type="hidden" name="total_amount" value="{{ $data->total_amount }}">
															  </div>
															  <div class="form-group">
															    <label for="exampleInputPassword1">Pay Amount</label>
															    <input type="text" class="form-control" name="pay_amount" placeholder="Paid Amount">
															    @error('pay_amount')
																<div style="color: red">{{ $message }}</div>
																@enderror
															  </div>
															  <div class="form-group">
															    <label for="exampleInputPassword1">Paid By</label>
															    <select class="form-select form-select-lg form-select-solid" name="paid_by">
															    	<option value="Cash Payment">Cash Payment</option>
															    	<option value="Bank Transfer">Bank Transfer</option>
															    	<option value="Card">Stripe Payment</option>
															    </select>
															  </div>
															   <div class="form-group">
															    <label for="exampleInputPassword1">Transection Id</label>
															    <input type="text" class="form-control" name="transection_id" placeholder="Transection Id">
															  </div>
															  <button type="submit" class="btn btn-success">Pay Now</button>
						                </div>
									</div>
								<!--end::Card-->
								</form>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>


@endsection