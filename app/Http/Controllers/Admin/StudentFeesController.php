<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentFee;
use Carbon\Carbon;

class StudentFeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create(){
        return view('backend.studentfees.create');
    }
  // store
  public function store(Request $request)
  {

    
      $validated = $request->validate([
          'fees_title' => 'required',
          'price' => 'required',
      ]);
      $insert = StudentFee::insertGetId([
          'fees_title' => $request->fees_title,
          'fees_price' => $request->price,
          'created_at' => Carbon::now()->toDateTimeString(),
      ]);
      if($insert) {
          $notification = array(
              'messege' => 'Insert success!',
              'alert-type' => 'success'
          );
          return redirect()->back()->with($notification);
      }else{
          $notification = array(
              'messege' => 'insert Faild!',
              'alert-type' => 'error'
          );
          return redirect()->back()->with($notification);
      }
  }
  // all slider
  public function index()
  {
      $alldata = StudentFee::where('is_deleted', 0)->get();
      return view('backend.studentfees.index', compact('alldata'));
  }
  
  public function edit($id)
  {
      $edit = StudentFee::where('id', $id)->first();
      return view('backend.studentfees.update', compact('edit'));
  }
  // delete
  public function delete($id)
  {
      $delete = StudentFee::where('id', $id)->update([
          'is_deleted' => 1,
          'updated_at' => Carbon::now()->toDateTimeString(),
      ]);
      if ($delete) {
          $notification = array(
              'messege' => 'Delete success!',
              'alert-type' => 'success'
          );
          return redirect()->back()->with($notification);
      } else {
          $notification = array(
              'messege' => 'Delete Faild!',
              'alert-type' => 'error'
          );
          return redirect()->back()->with($notification);
      }
  }
  // update
  public function update(Request $request)
  {

    $validated = $request->validate([
        'fees_title' => 'required',
        'price' => 'required',
    ]);
    $insert = StudentFee::where('id',$request->id)->update([
        'fees_title' => $request->fees_title,
        'fees_price' => $request->price,
        'updated_at' => Carbon::now()->toDateTimeString(),
    ]);
    if($insert) {
        $notification = array(
            'messege' => 'Update success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }else{
        $notification = array(
            'messege' => 'Update Faild!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
  }
}
