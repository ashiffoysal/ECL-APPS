@extends('layouts.frontend')
@section('title', 'Student Login')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/ripon.css') }}">

   <section class="zh_center_content section_padding" style="background-color: #fff;">
    	<div class="container">
    		<div class="text-center">
    			<h2 class="zh_heading">Examination Entry Deadline</h2>
    			<div class="p_wrapper">
					<p>Candidates must submit their exam entry form by the deadlines below to secure a place with Exam Centre London, enabling us with sufficient
time to issue the statement of entries. Late submissions will incur additional fees.<br>
Book your exam now with Exam Centre London!</p>
				</div>

				<div class="p_wrapper with_space">
					<a href="{{ url('/exam-list') }}" class="zh_btn">Book your exam</a>
				</div>
    		</div>
    	</div>
    </section>


    <section class="zh_center_content section_padding" >
    	<div class="container">
			<div class="container table-responsive"> 
			<table class="table table-bordered table-hover">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">EXAM SERIES</th>
			      <th scope="col">ENTRY DEADLINE</th>
			      <th scope="col">LATE FEES CHARGE FROM</th>
			      <th scope="col">HIGH LATE FEES CHARGE FROM</th>
			      <th scope="col">SUBMISSION DEADLINES</th>
			      <th scope="col">AVAILABILITY</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@php
			  		$alldata=App\Models\Examessuedate::get();
			  	@endphp
			  	@foreach($alldata as $data)
			    <tr>
			      <th scope="row">{{ $data->exam_name }}</th>
			      @php
			      	$time = strtotime($data->entry_dateline);
					$newformat = date('d-m-Y',$time);
					
			      	$timetwo = strtotime($data->entry_latefees);
					$newformattwo = date('d-m-Y',$timetwo);

					$timethree = strtotime($data->entry_highlatefees);
					$newformatthree = date('d-m-Y',$timethree);
			      @endphp
			      <td>{{$newformat }}</td>
			      <td>{{ $newformattwo }}</td>
			      <td>{{ $newformatthree }}</td>
			      <td>{{$data->submission_dead_lines }}</td>
			      <td>{{ $data->availability }}</td>
			 
			    </tr>
			    @endforeach
			    
			  </tbody>
			</table>
			</div>

    	</div>
    </section>
@endsection