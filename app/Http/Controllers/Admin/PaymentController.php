<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use Carbon\Carbon;


class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // create
    public function receiveindex()
    {
        $alldata=Wallet::orderBy('id','DESC')->where('amount_type','Dabit')->get();
        return view('backend.paymentmanage.receive',compact('alldata'));
    }
    public function payindex()
    {
        $alldata=Wallet::orderBy('id','DESC')->where('amount_type','Credit')->get();
        return view('backend.paymentmanage.pay',compact('alldata'));
    }
}
