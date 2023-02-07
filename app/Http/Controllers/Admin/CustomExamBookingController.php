<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\ExamRequest;
use App\Models\Wallet;
use App\Models\User;
use Carbon\Carbon;
use Image;
use Alert;
use Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\ExamBookingMail;
use App\Mail\UserRegisterMail;
use App\Mail\ExamBookingDetailsForAdmin;
use App\Mail\ExamBooking;
use Session;

class CustomExamBookingController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function exambookingcreate(){

    	$allgcsesub=Subject::where('exam_type','GCSE')->where('exam_board','OCR')->get();
    	$alligcsesub=Subject::where('exam_type','IGCSE')->where('exam_board','Edexcel')->get();
    	$allalevelsub=Subject::where('exam_type','A Level')->where('exam_board','Edexcel')->get();

    	return view('backend.exambooking.create',compact('allgcsesub','alligcsesub'));

    }
     public function gcsegetsubject($type_id){

        $data=Subject::where('exam_board',$type_id)->where('exam_type','GCSE')->get();
        return response()->json($data);
    }

    public function igcsegetsubject($type_id){

        $data=Subject::where('exam_board',$type_id)->where('exam_type','IGCSE')->get();
        return response()->json($data);
    }

    public function alevelgetsubject($type_id){

        $data=Subject::where('exam_board',$type_id)->where('exam_type','A Level')->get();
        return response()->json($data);
    }

    public function subjectdetails($subject_id){
        $data=Subject::where('id',$subject_id)->first();
        return response()->json($data);
    }


    public function exambookingStore(Request $request){
		 $booking_id=rand(11111,99999);


		$this->validate($request, [
            'email' => 'required',
        ]);
        $check=User::where('email',$request->email)->first();
        if($check){

        	$user_id=$check->id;

        }else{

        	$user_id=User::insertGetId([
        		'user_type'=>1,
        		'name'=>$request->first_name,
        		'middle_name'=>$request->middle_name,
        		'last_name'=>$request->last_name,
        		'email'=>$request->email,
	            'phone'=>$request->phone,
        		'is_verified'=>1,
        		'city'=>$request->city,
        		'zip'=>$request->postcode,
        		'date_of_birth'=>$request->date_of_birth,
        		'address'=>$request->address_line_1,
        		'gender'=>$request->gender,
        		'password' => Hash::make($request->phone),
        	]);

        	$maindata=([
        		'email'=>$request->email,
        		'phone'=>$request->phone,
        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
        	]);
        	Mail::to($request->email)->send(new UserRegisterMail($maindata));

        }


       if($request->main_exam_type=='GCSE'){


	       	if($request->subject !=null ){

	    		$insert=ExamRequest::insertGetId([
		            'booking_id'=>$booking_id,
		            'user_id'=>$user_id,
		            'main_exam_type'=>$request->main_exam_type,
		            'first_name'=>$request->first_name,
		            'middle_name'=>$request->middle_name,
		            'last_name'=>$request->last_name,
		            'email'=>$request->email,
		            'phone'=>$request->phone,
		            'emergency_contact_number'=>$request->emergency_contact_number,
		            'address_line_1'=>$request->address_line_1,
		            'address_line_2'=>$request->address_line_2,
		            'city'=>$request->city,
		            'postcode'=>$request->postcode,
		            'date_of_birth'=>$request->date_of_birth,
		            'gender'=>$request->gender,
		            'uci'=>$request->uci,
		            'uci_number'=>$request->uci_number,
		            'uln'=>$request->uln,
		            'uln_number'=>$request->uln_number,
		          
		            'retaking_exams'=>$request->retaking_exams,
		            'retaking_exams_name'=>$request->retaking_exams_name,
		            'caring_forwad'=>$request->caring_forwad,
		            'caring_forwad_details'=>$request->caring_forwad_details,
		            'special_acces'=>$request->special_acces,
		            'special_acces_evidence'=>$request->special_acces_evidence,
		            'mental_conditions'=>$request->mental_conditions,
		            'mental_condition_details'=>$request->mental_condition_details,
		            'condition_disability'=>$request->condition_disability,
		            'condition_disability_details'=>$request->condition_disability_details,
		            'relationship'=>$request->relationship,
		            'relation_name'=>$request->relation_name,
		            'todays_date'=>$request->todays_date,
		            'created_at'=>Carbon::now()->toDateTimeString(),
		            'has_a_candidate'=>$request->has_a_candidate,
		            'has_a_candidate_number'=>$request->has_a_candidate_number,
		            'mock_test'=>$request->mock_test,
		            'marked_mocks'=>$request->marked_mocks,
		            'mock_test_paper_1'=>$request->mock_test_paper_1,
		            'mock_test_paper_2'=>$request->mock_test_paper_2,
		            'mock_test_paper_3'=>$request->mock_test_paper_3,
		            'mock_test_paper_4'=>$request->mock_test_paper_4,
		            'is_completed_from'=>1,
		            'status'=>1,
		        ]);

	            $exam_information = array();

	            if ($request->has('exam_board')) {
	                $total_amount=0;
	                foreach ($request->exam_board as $key => $no) {
	                  
	                    $item['exam_board'] = $request->exam_board[$key];
	                    $item['exam_series'] = $request->exam_series[$key];
	                    $item['type'] = $request->type[$key];
	                    $item['subject'] = $request->subject[$key];
	                    $item['unit_code'] = $request->unit_code[$key];
	                    $item['option_code'] = $request->option_code[$key];
	                    $item['fees'] = $request->fees[$key];
	                    array_push($exam_information, $item);
	                    $total_amount=$total_amount + $request->fees[$key];
	                }
	                $update=ExamRequest::where('id',$insert)->update([
	                    'exam_information'=>json_encode($exam_information),
	                    'paid_amount'=>0,
	                     'total_amount'=>$total_amount,
	                    'due_amount'=>$total_amount,
	                ]);
	            }

	            if ($request->hasFile('fileUpload')) {

	                   $image = $request->file('fileUpload');
	                    $ImageName = 'Recent' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                    Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                    ExamRequest::where('id',$insert)->update([
	                        'photo_id' => 'uploads/student/exambooking/' . $ImageName,
	                    ]);
	               

	            }

	            if ($request->signed) {
	            	$images = $request->file('signed');
	                $ImageNames = 'signed' . '_' . time() . '.' . $images->getClientOriginalExtension();
	                Image::make($images)->save('uploads/student/exambooking/' . $ImageNames);
	                ExamRequest::where('id',$insert)->update([
	                    'signed' => 'uploads/student/exambooking/' . $ImageNames,
	                ]);
	                   
	               
	              
	            }
	            if ($request->hasFile('thumbnail_img')) {
	                $image = $request->file('thumbnail_img');
	                $ImageName = 'recent_photo' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                ExamRequest::where('id',$insert)->update([
	                    'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
	                ]);
	            }    

	              // Mail::to($request->email)->send(new ExamBookingMail());
	        	if ($insert) {
		           		$email="ashiffoysal8818@gmail.com";
		            // Mail::to($email)->send(new ExamBooking());
		                Alert::toast('success', 'success');
		                return redirect('admin/make-payment/exambooking/'.$insert);
		            } else {
		                Alert::toast('Something Went Wrong', 'error');
		                return redirect()->back();
	            	}
	    		}

       		}


    	

    	  
    }


	public function makepayment($id){

		$data=ExamRequest::where('id',$id)->first();
		return view('backend.exambooking.payamount',compact('data'));
	}


	public function paid_amount(Request $request){

		    $validated = $request->validate([
                'pay_amount' => 'required',
            ]);
            $check=ExamRequest::where('booking_id',$request->booking_id)->select(['paid_amount','due_amount','id','booking_id'])->first();
            if($check){

                $paid_amount=$check->paid_amount;
                $due_amount=$check->due_amount;

                $Walletinsert=Wallet::insert([
                    'order_id'=>$request->booking_id,
                    'user_id'=>$check->user_id,
                    'amount'=>$request->pay_amount,
                    'amount_type'=>'Dabit',
                    'paid_by'=>$request->paid_by,
                    'is_verified'=>1,
                    'transection_id'=>$request->transection_id,
                    'date'=>Carbon::now(),
                    'created_at'=>Carbon::now()->toDateTimeString(),
                ]);

                $update=ExamRequest::where('booking_id',$request->booking_id)->update([

                    'paid_amount'=>$paid_amount + $request->pay_amount,
                    'due_amount'=>$due_amount - $request->pay_amount,
                    
                ]);

				$newcheck=ExamRequest::where('booking_id',$request->booking_id)->first();
                if($newcheck->due_amount==0){
                	ExamRequest::where('booking_id',$request->booking_id)->update([
                	 'is_paid'=>1,

                	  ]);
                }else{

                	ExamRequest::where('booking_id',$request->booking_id)->update([
                	 'is_paid'=>0,
                	 ]);

                }


                if($update){
                        Session::flash('success','success');
                        return redirect('/admin/exambooking/maindetails/'.$check->id);
                    }else{
                        Session::flash('errors','errors');
                        return redirect()->back();
                    }



            }
	}


	// igcse start

	public function exambookingcreateigcse(){

		
    	$allsub=Subject::where('exam_type','IGCSE')->where('exam_board','Edexcel')->get();
    	

    	return view('backend.exambooking.igcse',compact('allsub'));
	}

	public function exambookingStoreigcse(Request $request){
				 $booking_id=rand(11111,99999);
				$this->validate($request, [
		            'email' => 'required',
		        ]);
		        $check=User::where('email',$request->email)->first();
		        if($check){

		        	$user_id=$check->id;

		        }else{

		        	$user_id=User::insertGetId([
		        		'user_type'=>1,
		        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
		        		'email'=>$request->email,
			            'phone'=>$request->phone,
		        		'is_verified'=>1,
		        		'city'=>$request->city,
		        		'zip'=>$request->postcode,
		        		'date_of_birth'=>$request->date_of_birth,
		        		'address'=>$request->address_line_1,
		        		'gender'=>$request->gender,
		        		'password' => Hash::make($request->phone),
		        	]);
		        	$maindata=([
		        		'email'=>$request->email,
		        		'phone'=>$request->phone,
		        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
		        	]);
		        	Mail::to($request->email)->send(new UserRegisterMail($maindata));

		        }
		    
       		  if($request->subject !=null ){

	    		$insert=ExamRequest::insertGetId([
		            'booking_id'=>$booking_id,
		            'user_id'=>$user_id,
		            'main_exam_type'=>$request->main_exam_type,
		            'first_name'=>$request->first_name,
		            'middle_name'=>$request->middle_name,
		            'last_name'=>$request->last_name,
		            'email'=>$request->email,
		            'phone'=>$request->phone,
		            'emergency_contact_number'=>$request->emergency_contact_number,
		            'address_line_1'=>$request->address_line_1,
		            'address_line_2'=>$request->address_line_2,
		            'city'=>$request->city,
		            'postcode'=>$request->postcode,
		            'date_of_birth'=>$request->date_of_birth,
		            'gender'=>$request->gender,
		            'uci'=>$request->uci,
		            'uci_number'=>$request->uci_number,
		            'uln'=>$request->uln,
		            'uln_number'=>$request->uln_number,
		            'retaking_exams'=>$request->retaking_exams,
		            'retaking_exams_name'=>$request->retaking_exams_name,
		            'caring_forwad'=>$request->caring_forwad,
		            'caring_forwad_details'=>$request->caring_forwad_details,
		            'special_acces'=>$request->special_acces,
		            'special_acces_evidence'=>$request->special_acces_evidence,
		            'mental_conditions'=>$request->mental_conditions,
		            'mental_condition_details'=>$request->mental_condition_details,
		            'condition_disability'=>$request->condition_disability,
		            'condition_disability_details'=>$request->condition_disability_details,
		            'relationship'=>$request->relationship,
		            'relation_name'=>$request->relation_name,
		            'todays_date'=>$request->todays_date,
		            'created_at'=>Carbon::now()->toDateTimeString(),
		            'has_a_candidate'=>$request->has_a_candidate,
		            'has_a_candidate_number'=>$request->has_a_candidate_number,
		            'mock_test'=>$request->mock_test,
		            'marked_mocks'=>$request->marked_mocks,
		            'mock_test_paper_1'=>$request->mock_test_paper_1,
		            'mock_test_paper_2'=>$request->mock_test_paper_2,
		            'mock_test_paper_3'=>$request->mock_test_paper_3,
		            'mock_test_paper_4'=>$request->mock_test_paper_4,
		            'is_completed_from'=>1,
		            'status'=>1,
		        ]);

	            $exam_information = array();

	            if ($request->has('exam_board')) {
	                $total_amount=0;
	                foreach ($request->exam_board as $key => $no) {
	                  
	                    $item['exam_board'] = $request->exam_board[$key];
	                    $item['exam_series'] = $request->exam_series[$key];
	                    $item['type'] = $request->type[$key];
	                    $item['subject'] = $request->subject[$key];
	                    $item['unit_code'] = $request->unit_code[$key];
	                    $item['option_code'] = $request->option_code[$key];
	                    $item['fees'] = $request->fees[$key];
	                    array_push($exam_information, $item);
	                    $total_amount=$total_amount + $request->fees[$key];
	                }
	                $update=ExamRequest::where('id',$insert)->update([
	                    'exam_information'=>json_encode($exam_information),
	                    'paid_amount'=>0,
	                     'total_amount'=>$total_amount,
	                    'due_amount'=>$total_amount,
	                ]);
	            }

	            if ($request->hasFile('fileUpload')) {

	                   $image = $request->file('fileUpload');
	                    $ImageName = 'Recent' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                    Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                    ExamRequest::where('id',$insert)->update([
	                        'photo_id' => 'uploads/student/exambooking/' . $ImageName,
	                    ]);
	               

	            }

	            if ($request->signed) {
	            	$images = $request->file('signed');
	                $ImageNames = 'signed' . '_' . time() . '.' . $images->getClientOriginalExtension();
	                Image::make($images)->save('uploads/student/exambooking/' . $ImageNames);
	                ExamRequest::where('id',$insert)->update([
	                    'signed' => 'uploads/student/exambooking/' . $ImageNames,
	                ]);
	                   
	               
	              
	            }
	            if ($request->hasFile('thumbnail_img')) {
	                $image = $request->file('thumbnail_img');
	                $ImageName = 'recent_photo' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                ExamRequest::where('id',$insert)->update([
	                    'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
	                ]);
	            }    

	              // Mail::to($request->email)->send(new ExamBookingMail());
	        	if ($insert) {
		           $email="ashiffoysal8818@gmail.com";
		            // Mail::to($email)->send(new ExamBooking());
		                Alert::toast('success', 'success');
		                return redirect('admin/make-payment/exambooking/'.$insert);
		            } else {
		                Alert::toast('Something Went Wrong', 'error');
		                return redirect()->back();
	            	}
	    		}
	    		else{
	    			   Alert::toast('Please select Your Subject', 'error');
		                return redirect()->back();
	    		}


    
		
	}
	// igcse end

	// alevel start

	public function exambookingcreatealevel(){

		$allsub=Subject::where('exam_type','A Level')->where('exam_board','Edexcel')->get();
    	

    	return view('backend.exambooking.alevel',compact('allsub'));

	}

	public function exambookingStorealevel(Request $require){

				$booking_id=rand(11111,99999);
				$this->validate($request, [
		            'email' => 'required',
		        ]);
		        $check=User::where('email',$request->email)->first();
		        if($check){

		        	$user_id=$check->id;

		        }else{

		        	$user_id=User::insertGetId([
		        		'user_type'=>1,
		        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
		        		'email'=>$request->email,
			            'phone'=>$request->phone,
		        		'is_verified'=>1,
		        		'city'=>$request->city,
		        		'zip'=>$request->postcode,
		        		'date_of_birth'=>$request->date_of_birth,
		        		'address'=>$request->address_line_1,
		        		'gender'=>$request->gender,
		        		'password' => Hash::make($request->phone),
		        	]);
		        	$maindata=([
		        		'email'=>$request->email,
		        		'phone'=>$request->phone,
		        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
		        	]);
		        	Mail::to($request->email)->send(new UserRegisterMail($maindata));

		        }
		    
       		  if($request->subject !=null ){

	    		$insert=ExamRequest::insertGetId([
		            'booking_id'=>$booking_id,
		            'user_id'=>$user_id,
		            'main_exam_type'=>$request->main_exam_type,
		            'first_name'=>$request->first_name,
		            'middle_name'=>$request->middle_name,
		            'last_name'=>$request->last_name,
		            'email'=>$request->email,
		            'phone'=>$request->phone,
		            'emergency_contact_number'=>$request->emergency_contact_number,
		            'address_line_1'=>$request->address_line_1,
		            'address_line_2'=>$request->address_line_2,
		            'city'=>$request->city,
		            'postcode'=>$request->postcode,
		            'date_of_birth'=>$request->date_of_birth,
		            'gender'=>$request->gender,
		            'uci'=>$request->uci,
		            'uci_number'=>$request->uci_number,
		            'uln'=>$request->uln,
		            'uln_number'=>$request->uln_number,
		            'retaking_exams'=>$request->retaking_exams,
		            'retaking_exams_name'=>$request->retaking_exams_name,
		            'caring_forwad'=>$request->caring_forwad,
		            'caring_forwad_details'=>$request->caring_forwad_details,
		            'special_acces'=>$request->special_acces,
		            'special_acces_evidence'=>$request->special_acces_evidence,
		            'mental_conditions'=>$request->mental_conditions,
		            'mental_condition_details'=>$request->mental_condition_details,
		            'condition_disability'=>$request->condition_disability,
		            'condition_disability_details'=>$request->condition_disability_details,
		            'relationship'=>$request->relationship,
		            'relation_name'=>$request->relation_name,
		            'todays_date'=>$request->todays_date,
		            'created_at'=>Carbon::now()->toDateTimeString(),
		            'has_a_candidate'=>$request->has_a_candidate,
		            'has_a_candidate_number'=>$request->has_a_candidate_number,
		            'mock_test'=>$request->mock_test,
		            'marked_mocks'=>$request->marked_mocks,
		            'mock_test_paper_1'=>$request->mock_test_paper_1,
		            'mock_test_paper_2'=>$request->mock_test_paper_2,
		            'mock_test_paper_3'=>$request->mock_test_paper_3,
		            'mock_test_paper_4'=>$request->mock_test_paper_4,
		            'is_completed_from'=>1,
		            'status'=>1,
		        ]);

	            $exam_information = array();

	            if ($request->has('exam_board')) {
	                $total_amount=0;
	                foreach ($request->exam_board as $key => $no) {
	                  
	                    $item['exam_board'] = $request->exam_board[$key];
	                    $item['exam_series'] = $request->exam_series[$key];
	                    $item['type'] = $request->type[$key];
	                    $item['subject'] = $request->subject[$key];
	                    $item['unit_code'] = $request->unit_code[$key];
	                    $item['option_code'] = $request->option_code[$key];
	                    $item['fees'] = $request->fees[$key];
	                    array_push($exam_information, $item);
	                    $total_amount=$total_amount + $request->fees[$key];
	                }
	                $update=ExamRequest::where('id',$insert)->update([
	                    'exam_information'=>json_encode($exam_information),
	                    'paid_amount'=>0,
	                     'total_amount'=>$total_amount,
	                    'due_amount'=>$total_amount,
	                ]);
	            }

	            if ($request->hasFile('fileUpload')) {

	                   $image = $request->file('fileUpload');
	                    $ImageName = 'Recent' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                    Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                    ExamRequest::where('id',$insert)->update([
	                        'photo_id' => 'uploads/student/exambooking/' . $ImageName,
	                    ]);
	               

	            }

	            if ($request->signed) {
	            	$images = $request->file('signed');
	                $ImageNames = 'signed' . '_' . time() . '.' . $images->getClientOriginalExtension();
	                Image::make($images)->save('uploads/student/exambooking/' . $ImageNames);
	                ExamRequest::where('id',$insert)->update([
	                    'signed' => 'uploads/student/exambooking/' . $ImageNames,
	                ]);
	                   
	               
	              
	            }
	            if ($request->hasFile('thumbnail_img')) {
	                $image = $request->file('thumbnail_img');
	                $ImageName = 'recent_photo' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                ExamRequest::where('id',$insert)->update([
	                    'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
	                ]);
	            }    

	              // Mail::to($request->email)->send(new ExamBookingMail());
	        	if ($insert) {
		           $email="ashiffoysal8818@gmail.com";
		            // Mail::to($email)->send(new ExamBooking());
		                Alert::toast('success', 'success');
		                return redirect('admin/make-payment/exambooking/'.$insert);
		            } else {
		                Alert::toast('Something Went Wrong', 'error');
		                return redirect()->back();
	            	}
	    		}
	    		else{
	    			   Alert::toast('Please select Your Subject', 'error');
		                return redirect()->back();
	    		}
		
	}
	// alevel end

	// Aat start

	public function exambookingcreateaat(){
		$allsub=Subject::where('exam_type','AAT')->get();
    	return view('backend.exambooking.aat',compact('allsub'));
	}

	public function exambookingStoreaat(Request $request){
		
				$booking_id=rand(11111,99999);
				$this->validate($request, [
		            'email' => 'required',
		        ]);
		        $check=User::where('email',$request->email)->first();
		        if($check){

		        	$user_id=$check->id;

		        }else{

		        	$user_id=User::insertGetId([
		        		'user_type'=>1,
		        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
		        		'email'=>$request->email,
			            'phone'=>$request->phone,
		        		'is_verified'=>1,
		        		'city'=>$request->city,
		        		'zip'=>$request->postcode,
		        		'date_of_birth'=>$request->date_of_birth,
		        		'address'=>$request->address_line_1,
		        		'gender'=>$request->gender,
		        		'password' => Hash::make($request->phone),
		        	]);

		        	$maindata=([
	        		'email'=>$request->email,
	        		'phone'=>$request->phone,
	        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
	        	]);
	        	Mail::to($request->email)->send(new UserRegisterMail($maindata));

		        }
		    
       		  if($request->subject !=null ){

	    		$insert=ExamRequest::insertGetId([
		            'booking_id'=>$booking_id,
		            'acca_registration_num'=>$request->aat_registration,
		            'user_id'=>$user_id,
		            'main_exam_type'=>$request->main_exam_type,
		            'first_name'=>$request->first_name,
		            'middle_name'=>$request->middle_name,
		            'last_name'=>$request->last_name,
		            'email'=>$request->email,
		            'phone'=>$request->phone,
		            'emergency_contact_number'=>$request->emergency_contact_number,
		            'address_line_1'=>$request->address_line_1,
		            'address_line_2'=>$request->address_line_2,
		            'city'=>$request->city,
		            'postcode'=>$request->postcode,
		            'date_of_birth'=>$request->date_of_birth,
		            'gender'=>$request->gender,
		            'uci'=>$request->uci,
		            'uci_number'=>$request->uci_number,
		            'uln'=>$request->uln,
		            'uln_number'=>$request->uln_number,
		            'retaking_exams'=>$request->retaking_exams,
		            'retaking_exams_name'=>$request->retaking_exams_name,
		            'caring_forwad'=>$request->caring_forwad,
		            'caring_forwad_details'=>$request->caring_forwad_details,
		            'special_acces'=>$request->special_acces,
		            'special_acces_evidence'=>$request->special_acces_evidence,
		            'mental_conditions'=>$request->mental_conditions,
		            'mental_condition_details'=>$request->mental_condition_details,
		            'condition_disability'=>$request->condition_disability,
		            'condition_disability_details'=>$request->condition_disability_details,
		            'relationship'=>$request->relationship,
		            'relation_name'=>$request->relation_name,
		            'todays_date'=>$request->todays_date,
		            'created_at'=>Carbon::now()->toDateTimeString(),
		            'has_a_candidate'=>$request->has_a_candidate,
		            'has_a_candidate_number'=>$request->has_a_candidate_number,
		            'mock_test'=>$request->mock_test,
		            'marked_mocks'=>$request->marked_mocks,
		            'mock_test_paper_1'=>$request->mock_test_paper_1,
		            'mock_test_paper_2'=>$request->mock_test_paper_2,
		            'mock_test_paper_3'=>$request->mock_test_paper_3,
		            'mock_test_paper_4'=>$request->mock_test_paper_4,
		            'is_completed_from'=>1,
		            'status'=>1,
		        ]);

	  


	        $exam_information = array();
            if ($request->has('exam_board')) {
                $total_amount=0;
                foreach ($request->exam_board as $key => $no) {

                    $item['exam_board'] = $request->exam_board[$key];
                    $item['exam_series'] = $request->exam_series[$key];
                    $item['type'] = $request->type[$key];
                    $item['subject'] = $request->subject[$key];
                    $item['option_code'] = $request->option_code[$key];
                    $item['fees'] = $request->fees[$key];
                    $item['exam_date'] = $request->exam_date[$key];
                    $item['start_exam_time'] = $request->start_exam_time[$key];
                    array_push($exam_information, $item);
                    $total_amount=$total_amount + $request->fees[$key];

                    }
                    $update=ExamRequest::where('id',$insert)->update([
                        'exam_information'=>json_encode($exam_information),
                        'paid_amount'=>0,
                         'total_amount'=>$total_amount,
                        'due_amount'=>$total_amount,
                    ]);
            }

	            if ($request->hasFile('fileUpload')) {

	                   $image = $request->file('fileUpload');
	                    $ImageName = 'Recent' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                    Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                    ExamRequest::where('id',$insert)->update([
	                        'photo_id' => 'uploads/student/exambooking/' . $ImageName,
	                    ]);
	               

	            }

	            if ($request->signed) {
	            	$images = $request->file('signed');
	                $ImageNames = 'signed' . '_' . time() . '.' . $images->getClientOriginalExtension();
	                Image::make($images)->save('uploads/student/exambooking/' . $ImageNames);
	                ExamRequest::where('id',$insert)->update([
	                    'signed' => 'uploads/student/exambooking/' . $ImageNames,
	                ]);
	                   
	               
	              
	            }
	            if ($request->hasFile('thumbnail_img')) {
	                $image = $request->file('thumbnail_img');
	                $ImageName = 'recent_photo' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                ExamRequest::where('id',$insert)->update([
	                    'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
	                ]);
	            }    

	              // Mail::to($request->email)->send(new ExamBookingMail());
	        	if ($insert) {
		           $email="ashiffoysal8818@gmail.com";
		            // Mail::to($email)->send(new ExamBooking());
		                Alert::toast('success', 'success');
		                return redirect('admin/make-payment/exambooking/'.$insert);
		            } else {
		                Alert::toast('Something Went Wrong', 'error');
		                return redirect()->back();
	            	}
	    		}
	    		else{
	    			   Alert::toast('Please select Your Subject', 'error');
		                return redirect()->back();
	    		}
	}
	// Aat end


	// acca start

	public function exambookingcreateacca(){

		$allsub=Subject::where('exam_type','ACCA')->get();
    	return view('backend.exambooking.acca',compact('allsub'));

	}

	public function exambookingStoracca(Request $request){
		
				$booking_id=rand(11111,99999);
				$this->validate($request, [
		            'email' => 'required',
		        ]);
		        $check=User::where('email',$request->email)->first();
		        if($check){

		        	$user_id=$check->id;

		        }else{

		        	$user_id=User::insertGetId([
		        		'user_type'=>1,
		        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
		        		'email'=>$request->email,
			            'phone'=>$request->phone,
		        		'is_verified'=>1,
		        		'city'=>$request->city,
		        		'zip'=>$request->postcode,
		        		'date_of_birth'=>$request->date_of_birth,
		        		'address'=>$request->address_line_1,
		        		'gender'=>$request->gender,
		        		'password' => Hash::make($request->phone),
		        	]);

		        	$maindata=([
		        		'email'=>$request->email,
		        		'phone'=>$request->phone,
		        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
		        	]);
		        	Mail::to($request->email)->send(new UserRegisterMail($maindata));

		        }
		    
       		  if($request->subject !=null ){

	    		$insert=ExamRequest::insertGetId([
		            'booking_id'=>$booking_id,
		            'acca_registration_num'=>$request->acca_registration,
		            'user_id'=>$user_id,
		            'main_exam_type'=>$request->main_exam_type,
		            'first_name'=>$request->first_name,
		            'middle_name'=>$request->middle_name,
		            'last_name'=>$request->last_name,
		            'email'=>$request->email,
		            'phone'=>$request->phone,
		            'emergency_contact_number'=>$request->emergency_contact_number,
		            'address_line_1'=>$request->address_line_1,
		            'address_line_2'=>$request->address_line_2,
		            'city'=>$request->city,
		            'postcode'=>$request->postcode,
		            'date_of_birth'=>$request->date_of_birth,
		            'gender'=>$request->gender,
		            'uci'=>$request->uci,
		            'uci_number'=>$request->uci_number,
		            'uln'=>$request->uln,
		            'uln_number'=>$request->uln_number,
		            'retaking_exams'=>$request->retaking_exams,
		            'retaking_exams_name'=>$request->retaking_exams_name,
		            'caring_forwad'=>$request->caring_forwad,
		            'caring_forwad_details'=>$request->caring_forwad_details,
		            'special_acces'=>$request->special_acces,
		            'special_acces_evidence'=>$request->special_acces_evidence,
		            'mental_conditions'=>$request->mental_conditions,
		            'mental_condition_details'=>$request->mental_condition_details,
		            'condition_disability'=>$request->condition_disability,
		            'condition_disability_details'=>$request->condition_disability_details,
		            'relationship'=>$request->relationship,
		            'relation_name'=>$request->relation_name,
		            'todays_date'=>$request->todays_date,
		            'created_at'=>Carbon::now()->toDateTimeString(),
		            'has_a_candidate'=>$request->has_a_candidate,
		            'has_a_candidate_number'=>$request->has_a_candidate_number,
		            'mock_test'=>$request->mock_test,
		            'marked_mocks'=>$request->marked_mocks,
		            'mock_test_paper_1'=>$request->mock_test_paper_1,
		            'mock_test_paper_2'=>$request->mock_test_paper_2,
		            'mock_test_paper_3'=>$request->mock_test_paper_3,
		            'mock_test_paper_4'=>$request->mock_test_paper_4,
		            'is_completed_from'=>1,
		            'status'=>1,
		        ]);

      	$exam_information = array();

            if ($request->has('exam_board')) {
                $total_amount=0;
                foreach ($request->exam_board as $key => $no) {
                  
                    $item['exam_board'] = $request->exam_board[$key];
                    $item['type'] = $request->type[$key];
                    $item['subject'] = $request->subject[$key];
                    $item['option_code'] = $request->option_code[$key];
                    $item['fees'] = $request->fees[$key];
                    $item['exam_date'] = $request->exam_date[$key];
                    $item['start_exam_time'] = $request->start_exam_time[$key];
                    array_push($exam_information, $item);
                     $total_amount=$total_amount + $request->fees[$key];
                        }
                            $update=ExamRequest::where('id',$insert)->update([
                                'exam_information'=>json_encode($exam_information),
                                'paid_amount'=>0,
                                'total_amount'=>$total_amount,
                                'due_amount'=>$total_amount,
                            ]);
            }

	  
	            if ($request->hasFile('fileUpload')) {

	                   $image = $request->file('fileUpload');
	                    $ImageName = 'Recent' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                    Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                    ExamRequest::where('id',$insert)->update([
	                        'photo_id' => 'uploads/student/exambooking/' . $ImageName,
	                    ]);
	               

	            }

	            if ($request->signed) {
	            	$images = $request->file('signed');
	                $ImageNames = 'signed' . '_' . time() . '.' . $images->getClientOriginalExtension();
	                Image::make($images)->save('uploads/student/exambooking/' . $ImageNames);
	                ExamRequest::where('id',$insert)->update([
	                    'signed' => 'uploads/student/exambooking/' . $ImageNames,
	                ]);
	                   
	               
	              
	            }
	            if ($request->hasFile('thumbnail_img')) {
	                $image = $request->file('thumbnail_img');
	                $ImageName = 'recent_photo' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                ExamRequest::where('id',$insert)->update([
	                    'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
	                ]);
	            }    

	              // Mail::to($request->email)->send(new ExamBookingMail());
	        	if ($insert) {
		           $email="ashiffoysal8818@gmail.com";
		            // Mail::to($email)->send(new ExamBooking());
		                Alert::toast('success', 'success');
		                return redirect('admin/make-payment/exambooking/'.$insert);
		            } else {
		                Alert::toast('Something Went Wrong', 'error');
		                return redirect()->back();
	            	}
	    		}
	    		else{
	    			   Alert::toast('Please select Your Subject', 'error');
		                return redirect()->back();
	    		}

		
	}
	// acca end

		// Functional start

	public function exambookingcreatefunctionalskills(){
		$allsub=Subject::where('exam_type','FUNCTIONAL SKILLS')->get();
    	return view('backend.exambooking.functionalskills',compact('allsub'));
	}

	public function exambookingStorefunctionalskills(Request $request){

				$booking_id=rand(11111,99999);
				$this->validate($request, [
		            'email' => 'required',
		        ]);
		        $check=User::where('email',$request->email)->first();
		        if($check){

		        	$user_id=$check->id;

		        }else{

		        	$user_id=User::insertGetId([
		        		'user_type'=>1,
		        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
		        		'email'=>$request->email,
			            'phone'=>$request->phone,
		        		'is_verified'=>1,
		        		'city'=>$request->city,
		        		'zip'=>$request->postcode,
		        		'date_of_birth'=>$request->date_of_birth,
		        		'address'=>$request->address_line_1,
		        		'gender'=>$request->gender,
		        		'password' => Hash::make($request->phone),
		        	]);
		        	$maindata=([
		        		'email'=>$request->email,
		        		'phone'=>$request->phone,
		        		'name'=>$request->first_name,
		        		'middle_name'=>$request->middle_name,
		        		'last_name'=>$request->last_name,
		        	]);
		        	Mail::to($request->email)->send(new UserRegisterMail($maindata));

		        }
		    
       		  if($request->subject !=null ){

	    		$insert=ExamRequest::insertGetId([
		            'booking_id'=>$booking_id,
		            'user_id'=>$user_id,
		            'main_exam_type'=>$request->main_exam_type,
		            'first_name'=>$request->first_name,
		            'middle_name'=>$request->middle_name,
		            'last_name'=>$request->last_name,
		            'email'=>$request->email,
		            'phone'=>$request->phone,
		            'emergency_contact_number'=>$request->emergency_contact_number,
		            'address_line_1'=>$request->address_line_1,
		            'address_line_2'=>$request->address_line_2,
		            'city'=>$request->city,
		            'postcode'=>$request->postcode,
		            'date_of_birth'=>$request->date_of_birth,
		            'gender'=>$request->gender,
		            'uci'=>$request->uci,
		            'uci_number'=>$request->uci_number,
		            'uln'=>$request->uln,
		            'uln_number'=>$request->uln_number,
		            'retaking_exams'=>$request->retaking_exams,
		            'retaking_exams_name'=>$request->retaking_exams_name,
		            'caring_forwad'=>$request->caring_forwad,
		            'caring_forwad_details'=>$request->caring_forwad_details,
		            'special_acces'=>$request->special_acces,
		            'special_acces_evidence'=>$request->special_acces_evidence,
		            'mental_conditions'=>$request->mental_conditions,
		            'mental_condition_details'=>$request->mental_condition_details,
		            'condition_disability'=>$request->condition_disability,
		            'condition_disability_details'=>$request->condition_disability_details,
		            'relationship'=>$request->relationship,
		            'relation_name'=>$request->relation_name,
		            'todays_date'=>$request->todays_date,
		            'created_at'=>Carbon::now()->toDateTimeString(),
		            'has_a_candidate'=>$request->has_a_candidate,
		            'has_a_candidate_number'=>$request->has_a_candidate_number,
		            'mock_test'=>$request->mock_test,
		            'marked_mocks'=>$request->marked_mocks,
		            'mock_test_paper_1'=>$request->mock_test_paper_1,
		            'mock_test_paper_2'=>$request->mock_test_paper_2,
		            'mock_test_paper_3'=>$request->mock_test_paper_3,
		            'mock_test_paper_4'=>$request->mock_test_paper_4,
		            'is_completed_from'=>1,
		            'status'=>1,
		        ]);

                $exam_information = array();
	            if ($request->has('exam_board')) {
	                $total_amount=0;
	                foreach ($request->exam_board as $key => $no) {
	                  
	                    $item['exam_board'] = $request->exam_board[$key];
	                    $item['type'] = $request->type[$key];
	                    $item['subject'] = $request->subject[$key];
	                    $item['option_code'] = $request->option_code[$key];
	                    $item['fees'] = $request->fees[$key];
	                    $item['exam_date'] = $request->exam_date[$key];
	                    $item['start_exam_time'] = $request->start_exam_time[$key];
	                    array_push($exam_information, $item);
	                     $total_amount=$total_amount + $request->fees[$key];
	                            }
	                            $update=ExamRequest::where('id',$insert)->update([
	                                'exam_information'=>json_encode($exam_information),
	                                'paid_amount'=>0,
	                                 'total_amount'=>$total_amount,
	                                'due_amount'=>$total_amount,
	                            ]);
	            }

	  
	            if ($request->hasFile('fileUpload')) {

	                   $image = $request->file('fileUpload');
	                    $ImageName = 'Recent' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                    Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                    ExamRequest::where('id',$insert)->update([
	                        'photo_id' => 'uploads/student/exambooking/' . $ImageName,
	                    ]);
	               

	            }

	            if ($request->signed) {
	            	$images = $request->file('signed');
	                $ImageNames = 'signed' . '_' . time() . '.' . $images->getClientOriginalExtension();
	                Image::make($images)->save('uploads/student/exambooking/' . $ImageNames);
	                ExamRequest::where('id',$insert)->update([
	                    'signed' => 'uploads/student/exambooking/' . $ImageNames,
	                ]);
	                   
	               
	              
	            }
	            if ($request->hasFile('thumbnail_img')) {
	                $image = $request->file('thumbnail_img');
	                $ImageName = 'recent_photo' . '_' . time() . '.' . $image->getClientOriginalExtension();
	                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
	                ExamRequest::where('id',$insert)->update([
	                    'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
	                ]);
	            }    

	              // Mail::to($request->email)->send(new ExamBookingMail());
	        	if ($insert) {
		           $email="ashiffoysal8818@gmail.com";
		            // Mail::to($email)->send(new ExamBooking());
		                Alert::toast('success', 'success');
		                return redirect('admin/make-payment/exambooking/'.$insert);
		            } else {
		                Alert::toast('Something Went Wrong', 'error');
		                return redirect()->back();
	            	}
	    		}
	    		else{
	    			   Alert::toast('Please select Your Subject', 'error');
		                return redirect()->back();
	    		}
		}
	// Functional end





}
