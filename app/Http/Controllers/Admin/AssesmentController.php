<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assesment;

class AssesmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $alldata=Assesment::where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('backend.assesmentlist.index',compact('alldata'));
    }

    // 
    public function details($id){
        $data=Assesment::where('id',$id)->first();
        return view('backend.assesmentlist.view',compact('data'));
    }
}
