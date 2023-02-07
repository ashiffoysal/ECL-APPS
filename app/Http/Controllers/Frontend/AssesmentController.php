<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assesment;
use Carbon\Carbon;
use Alert;

class AssesmentController extends Controller
{
    public function create(){
        return view('frontend.assesmentfrom.create');
    }

    // 
    public function store(Request $request){
        
            $validatedData = $request->validate([
                'branch' => 'required',
                'parent_name' => 'required',
                'mobile' => 'required',
            ]);
            $insert=Assesment::insertGetId([
                'branch'=>$request->branch,
                'parent_name'=>$request->parent_name,
                'email'=>$request->email,
                'mobile'=>$request->mobile,
                'parent_relation'=>$request->parent_relation,
                'address'=>$request->address,
                'assesment_date_time'=>$request->assesment_date_time,
                'date'=>$request->date,
                'write_details'=>$request->write_details,
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);

            $child_information = array();
            if ($request->has('first_name')) {
                foreach ($request->first_name as $key => $no) {
                  
                    $item['first_name'] = $request->first_name[$key];
                    $item['last_name'] = $request->last_name[$key];
                    $item['subject'] = $request->subject[$key];
                    $item['year'] = $request->year[$key];
                    array_push($child_information, $item);
                }
                $update=Assesment::where('id',$insert)->update([
                    'child_information'=>json_encode($child_information),
                ]);
            }
            if($insert){
                Alert::toast('Thank you for submitting your free assessment request. We are looking forward to seeing you!','success');
                return redirect()->back();
            }else{
                Alert::toast('Failed!Please Try Again','error');
                return redirect()->back();
                return redirect()->back();
            }
            
    }
}
