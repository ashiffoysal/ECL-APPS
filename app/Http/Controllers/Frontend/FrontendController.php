<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Color;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Banner;
use App\Models\AboutUs;
use App\Models\Event;
use App\Models\Review;
use App\Models\User;
use App\Models\Gallery;
use App\Models\SelectedTutorSubject;
use App\Models\ContactMesssage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Mail\ContactMessage;
use Alert;
use Mail;

class FrontendController extends Controller
{
    public function home()
    {
        
        return view('frontend.home.home');
    }

    public function contact()
    {
        $rand_one=rand(0,9);
        $rand_two=rand(0,8);
        $val=$rand_one + $rand_two;
        return view('frontend.contact.contact',compact('rand_one','rand_two','val'));
    }
    public function gallary()
    {
        $alldata=Gallery::where('is_deleted',0)->orderBy('id','DESC')->paginate(6);
        return view('frontend.gallary.index',compact('alldata'));
    }

    // 
    public function contactstore(Request $request){

        if($request->number == $request->mynumber){
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);
            $insert=ContactMesssage::insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'subject'=>$request->subject,
                'message'=>$request->message,
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            
            if($insert){
               
                Alert::success('Success', 'Thank you for contacting Exam Centre London. We can confirm that your query has been sent successfully and will be dealt with as soon as possible.');
                return redirect()->back();
            }else{
                Alert::error('Faild', 'Message Send Faild');
                return redirect()->back();
            }
            
        }else{
             Alert::error('Faild', 'Please Enter Valid Number');
                return redirect()->back();
        }

    }
    // 
    public function blogs(){
        $allblog=Blog::where('is_deleted',0)->orderBy('id','DESC')->paginate(6);
        return view('frontend.blog.allblog',compact('allblog'));
    }
    // blog details
    public function blogsdetails($slug,$id){

        $popularPost=Blog::where('is_deleted',0)->orderBy('view','DESC')->limit(5)->get();
        $data=Blog::where('id',$id)->first();
        $allcategory=Category::where('is_deleted',0)->get();
        return view('frontend.blog.blogdetails',compact('data','allcategory','popularPost'));
    }
    // about page

    public function productData(){
        return User::where('is_deleted',0)->where('is_verified',1)->where('is_tutor_approve',1)->where('user_type',2)->select(['id','for_home_tutor','for_online_tutor','id','name','photo','headline_for_tutor','expected_hourly_rate','subject','gender']);
    }

    public function filter_shop(Request $request){
     
            $products =$this->productData();
        

        if ($request->subject == null && $request->tutor_type == null && $request->gender == null && $request->price == null && $request->sortingval == null) {
            $products = $products;
        }
        if ($request->subject != null) {
            
           

            $categoryId=$request->subject;
            $products=$products->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
            
            

            
             
             
            
        }
        if ($request->tutor_type != null) {
            if($request->tutor_type==1){
                $products = $products->where('for_online_tutor',1);
            }elseif($request->tutor_type==2){
                $products = $products->where('for_home_tutor',1);
            }
           
        }
        if ($request->gender != null) {
           
            $products = $products->whereIn('gender',$request->gender);
           
        }
        if ($request->subject != null && $request->tutor_type != null) {

            if($request->tutor_type==1){
                $products = $products->whereRawIn('json_contains(subject, \'["' . $request->subject . '"]\')')->where('for_online_tutor',1);
            }elseif($request->tutor_type==2){
                $products = $products->whereRawIn('json_contains(subject, \'["' . $request->subject . '"]\')')->where('for_home_tutor',1);
            }
           
        }

        if ($request->subject != null && $request->sortingval != null) {



              $categoryId=$request->subject;
          

                if ($request->sortingval == 1) {
                    $products = $products->orderBy('expected_hourly_rate', 'ASC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
                } elseif ($request->sortingval == 2) {
                    $products = $products->orderBy('expected_hourly_rate', 'DESC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
                } elseif ($request->sortingval == 3) {
                    $products = $products->orderBy('name', 'ASC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
                }
                
           
           
        }
        if ($request->price != null) {
            $priceVal = implode(',', $request->price);
            if ($priceVal == 1) {
                $products = $products->where('expected_hourly_rate', '>', '5')->where('expected_hourly_rate', '<=', '10');
            } elseif ($priceVal == 2) {
                $products = $products->where('expected_hourly_rate', '>', '11')->where('expected_hourly_rate', '<=', '20');
            } elseif ($priceVal == 3) {
                $products = $products->where('expected_hourly_rate', '>', '21')->where('expected_hourly_rate', '<=', '30');
            } elseif ($priceVal == 4) {
                $products = $products->where('expected_hourly_rate', '>', '31')->where('expected_hourly_rate', '<=', '40');
            }
            elseif ($priceVal == 5) {
                $products = $products->where('expected_hourly_rate', '>', '41')->where('expected_hourly_rate', '<=', '50');
            }
        }
        // if (isset($request["sortingval"])) {
        if ($request->sortingval != null) {
           
            if ($request->sortingval == 1) {
                $products = $products->orderBy('expected_hourly_rate', 'ASC');
            } elseif ($request->sortingval == 2) {
                $products = $products->orderBy('expected_hourly_rate', 'DESC');
            } elseif ($request->sortingval == 3) {
                $products = $products->orderBy('name', 'ASC');
            }
        }


        if ($request->gender != null && $request->subject != null) {
            $categoryId=$request->subject;
            $products = $products->whereIn('gender', $request->gender)->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });

        }
        if ($request->subject && $request->sortingval != null) {
           
            $sortVal = $request->sortingval;

            $categoryId=$request->subject;

            if ($sortVal == 1) {
                $products = $products->orderBy('expected_hourly_rate', 'ASC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });;
            } elseif ($sortVal == 2) {
                $products = $products->orderBy('expected_hourly_rate', 'DESC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
            } elseif ($sortVal == 3) {
                $products = $products->orderBy('name', 'ASC')->with('Selectedtutor')
                ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                    $query->where('subject_id', $categoryId);
                });
            }
        }
        if ($request->subject != null && $request->gender != null && $request->sortingval != null) {
           
            $sortVal = $request->sortingval;
            $categoryId=$request->subject;
            if ($sortVal == 1) {
                $products = $products->whereIn('gender', $request->gender)->orderBy('expected_hourly_rate', 'ASC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });;;
            } elseif ($sortVal == 2) {
                $products = $products->whereIn('gender', $request->gender)->orderBy('expected_hourly_rate', 'DESC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
            } elseif ($sortVal == 3) {
                $products = $products->whereIn('gender', $request->gender)->orderBy('name', 'ASC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
            }
        }


        $products = $products->get();
        return view('frontend.tutorfind.ajax.filter', compact('products'));
   
    }



    public function termsCondition(){
       $data = AboutUs::select(['details', 'id'])->where('keyword', 'terms_condition')->first();
        return view('frontend.termscondition.index',compact('data'));
    }
    // 
    public function faq(){

     return view('frontend.faq.index');
    }
    public function privacyPolicy(){
    $data = AboutUs::select(['details', 'id'])->where('keyword', 'privacy_policy')->first();
     return view('frontend.privacypolicy.index',compact('data'));
    }


    public function examlist(){

        return view('frontend.allexam.index');
    }

    public function supports(){

        return view('frontend.supports.index');
    }

    public function examdates(){

        return view('frontend.examdateslist.index');
    }

    public function ucasregistered(){

        return view('frontend.ucas.index');

    }
    
    public function applicationform(){
        return redirect('/exam-list');
    }




}
