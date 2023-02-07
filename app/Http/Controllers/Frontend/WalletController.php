<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\AmountWithdrawrequest;
use Carbon\Carbon;
use Auth;
use Alert;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $alldata=Wallet::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        $dabit_amount=Wallet::where('user_id',Auth::user()->id)->where('amount_type','Dabit')->sum('amount');
        $credit_amount=Wallet::where('user_id',Auth::user()->id)->where('amount_type','Credit')->sum('amount');
        return view('frontend.tuitor.mywallet',compact('alldata','dabit_amount','credit_amount'));

    }

    public function withdrawrequest(){
        $alldata=Wallet::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        $dabit_amount=Wallet::where('user_id',Auth::user()->id)->where('amount_type','Dabit')->sum('amount');
        $credit_amount=Wallet::where('user_id',Auth::user()->id)->where('amount_type','Credit')->sum('amount');

        $amountwithdrawrequest=AmountWithdrawrequest::where('tutor_id',Auth::user()->id)->orderBy('id','DESC')->paginate(5);

        return view('frontend.tuitor.amountwithdraw',compact('alldata','dabit_amount','credit_amount','amountwithdrawrequest'));
    }

    public function withdrawrequestsubmit(Request $request){


            if($request->amount > 0){

                 $insert=AmountWithdrawrequest::insert([
                'tutor_id'=>Auth::user()->id,
                'account_holder_name'=>$request->account_holder_name,
                'account_number'=>$request->account_number,
                'amount'=>$request->amount,
                'bank_name'=>$request->bank_name,
                'account_address'=>$request->account_address,
                'details'=>$request->account_details,
                'created_at'=>Carbon::now()->toDateTimeString(),
              
                ]);

                if($insert){
                    Alert::toast(' Success!', 'success');
                    return redirect()->back();
                }else{
                    Alert::toast('Faild! Please Try Again!', 'error');
                    return redirect()->back();
                }

            }else{
                Alert::toast('Faild! You Have No enough Amount!', 'error');
                return redirect()->back();
            }
           




          
    }
}
