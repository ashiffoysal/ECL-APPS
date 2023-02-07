<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $allevents=Event::where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('frontend.event.index',compact('allevents'));
    }
  
    public function eventdetails ($id){
        $data=Event::where('id',$id)->first();
        return view('frontend.event.details',compact('data'));
    }
}
