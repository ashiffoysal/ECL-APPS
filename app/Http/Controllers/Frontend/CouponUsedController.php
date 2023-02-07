<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cupon;
use App\Models\ExamRequest;
use Carbon\Carbon;

class CouponUsedController extends Controller
{
    public function couponInsert(Request $request){

        $main_amount=ExamRequest::where('booking_id',$request->booking_id)->select(['user_id','id','total_amount','coupon_used','coupon_code','discount_amount'])->first();
        if($main_amount->coupon_used==1){

            return response()->json("already_used");

        }else{



            $coupon=Cupon::first();

            if($coupon->custom_cupon_code==$request->cupon_code){

                if($coupon->custom_cupon_status==1){

                    $discount_amount=$main_amount->total_amount * ($coupon->custom_cupon_percent/100);
                    $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                        'coupon_used'=>1,
                        'coupon_code'=>$request->cupon_code,
                        'discount_amount'=>$discount_amount,
                    ]);
                    return response()->json("success");

                }else{

                    return response()->json("cupon_not_found");

                }


            }elseif($coupon->global_cupon_code==$request->cupon_code){

                 if($coupon->global_cupon_status==1){

                    $discount_amount=$main_amount->total_amount * ($coupon->global_cupon_percent/100);
                    $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                        'coupon_used'=>1,
                        'coupon_code'=>$request->cupon_code,
                        'discount_amount'=>$discount_amount,
                    ]);
                    return response()->json("success");

                }else{

                    return response()->json("cupon_not_found");

                }
            }else{
                 return response()->json("cupon_not_found");
            }

                    
        }
        


    }
}
