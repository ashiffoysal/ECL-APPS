<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\Models\ExamRequest;

class CandidateDetailsExportController extends Controller
{


     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function exportcandidatedetails($booking_id){
         $data=ExamRequest::where('booking_id',$booking_id)->first();
        return view('backend.examrequest.exportcandidate',compact('data'));
        
        $data=ExamRequest::where('booking_id',$booking_id)->first();
        $pdf = PDF::loadView('backend.examrequest.exportcandidate')->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->download('examrequest.pdf');
    }
}
