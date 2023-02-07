<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
Use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create(){

		$allroles = DB::table('roles')->get();
    	return view('backend.adminuser.create',compact('allroles'));

    }
    public function store(Request $request){
       

    	  $validated = $request->validate([

		        'first_name' => 'required',
		        'last_name' => 'required',
		        'phone' => 'required',
		        'email' => 'required|unique:admins',
		        'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
	            'password_confirmation' => 'min:6',
	        
	    	]);
    	  $insert=Admin::insertGetId([

    	  		'role'=>$request->role,
    	  		'first_name'=>$request->first_name,
    	  		'last_name'=>$request->last_name,
    	  		'phone'=>$request->phone,
    	  		'email'=>$request->email,
    	  		'address'=>$request->address,
    	  		'password'=> Hash::make($request->password),
    	  		'exam_date'=>$request->exam_date,
    	  		'update_exam_date'=>$request->update_exam_date,
    	  		'create_exam_booking'=>$request->create_exam_booking,
    	  		'student_list'=>$request->student_list,
    	  		'all_exam'=>$request->all_exam,
    	  		'subjects'=>$request->subjects,
    	  		'receive_payment'=>$request->receive_payment,
    	  		'payment_request'=>$request->payment_request,
    	  		'contact_message'=>$request->contact_message,
    	  		'settings'=>$request->settings,
    	  		'banner'=>$request->banner,
    	  		'terms_and_condition'=>$request->terms_and_condition,
    	  		'notification'=>$request->notification,
    	  		'gallery'=>$request->gallery,
    	  		'events'=>$request->events,
    	  		'blogs'=>$request->blogs,
    	  		'reviews'=>$request->reviews,

    	  ]);
		if ($insert) {
            $notification = array(
                'messege' => 'insert success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'insert Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function index(){
		$alldata=Admin::where('is_deleted',0)->get();
    	return view('backend.adminuser.index',compact('alldata'));

    }

    public function edit($id){
    	$edit = Admin::where('id',$id)->first();
    	$allroles = DB::table('roles')->get();
    	return view('backend.adminuser.update',compact('allroles','edit'));
    }

    public function update(Request $request){
       
    	  $validated = $request->validate([
		        'first_name' => 'required',
		        'last_name' => 'required',
		        'phone' => 'required',
		        'email' => 'required|unique:admins,email,'.$request->id,
	    	]);
    	  $insert=Admin::where('id',$request->id)->update([
    	  		'role'=>$request->role,
    	  		'first_name'=>$request->first_name,
    	  		'last_name'=>$request->last_name,
    	  		'phone'=>$request->phone,
    	  		'email'=>$request->email,
    	  		'address'=>$request->address,
    	  		'exam_date'=>$request->exam_date,
    	  		'update_exam_date'=>$request->update_exam_date,
    	  		'create_exam_booking'=>$request->create_exam_booking,
    	  		'student_list'=>$request->student_list,
    	  		'all_exam'=>$request->all_exam,
    	  		'subjects'=>$request->subjects,
    	  		'receive_payment'=>$request->receive_payment,
    	  		'payment_request'=>$request->payment_request,
    	  		'contact_message'=>$request->contact_message,
    	  		'settings'=>$request->settings,
    	  		'banner'=>$request->banner,
    	  		'terms_and_condition'=>$request->terms_and_condition,
    	  		'notification'=>$request->notification,
    	  		'gallery'=>$request->gallery,
    	  		'events'=>$request->events,
    	  		'blogs'=>$request->blogs,
    	  		'reviews'=>$request->reviews,
    	  ]);
		if ($insert) {
            $notification = array(
                'messege' => 'update success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'update Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

     public function delete($id){

    	 $delete=Admin::where('id',$id)->update([
    	 	'is_deleted'=>1,
    	 ]);

    	 if($delete){
	            Alert::toast('Delete Success!', 'success');
	            return redirect()->back();
	        }else{
	            Alert::toast('Faild! Please Try Again!', 'error');
	            return redirect()->back();
	        }

    }


    public function active($id){

    	$delete=Admin::where('id',$id)->update([
    	 	'is_active'=>1,
    	]);

    	if($delete){
	        Alert::toast('Active Success!', 'success');
	        return redirect()->back();
	    }else{
	        Alert::toast('Faild! Please Try Again!', 'error');
	        return redirect()->back();
	    }

    }
    public function deactive($id){

    	 $delete=Admin::where('id',$id)->update([
    	 	'is_active'=>0,
    	 ]);

    	 if($delete){
	            Alert::toast('deactive Success!', 'success');
	            return redirect()->back();
	        }else{
	            Alert::toast('Faild! Please Try Again!', 'error');
	            return redirect()->back();
	        }

    }


}
