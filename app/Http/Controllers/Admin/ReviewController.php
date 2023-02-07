<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Image;
use Carbon\Carbon;
use Auth;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // create
    public function create()
    {
        return view('backend.review.create');
    }
    // store
    public function store(Request $request)
    {

      
        $validated = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'review' => 'required',
        ]);
       
        $insert = Review::insertGetId([
            'name' => $request->name,
            'designation' => $request->designation,
            'review' => $request->review,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
   
        if ($insert) {
            $notification = array(
                'messege' => 'Insert success!',
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
    // all slider
    public function index()
    {
        $alldata = Review::where('is_deleted', 0)->orderBy('id', 'DESC')->get();
        return view('backend.review.index', compact('alldata'));
    }
    // active
    public function active($id)
    {
        $active = Review::where('id', $id)->update([
            'status' => 1,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now()->todateTimeString(),
        ]);
        if ($active) {
            $notification = array(
                'messege' => 'Active success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Active Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    // Deactive
    public function deactive($id)
    {
        $Deactive = Review::where('id', $id)->update([
            'status' => 0,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now()->todateTimeString(),
        ]);
        if ($Deactive) {
            $notification = array(
                'messege' => 'Deactive success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Deactive Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    // edit
    public function edit($id)
    {
        $edit = Review::where('id', $id)->first();
        return view('backend.review.update', compact('edit'));
    }
    // delete
    public function delete($id)
    {
        $delete = Review::where('id', $id)->update([
            'is_deleted' => 1,
            'updated_by' => Auth::user()->id,
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
            'name' => 'required',
            'designation' => 'required',
            'review' => 'required',
        ]);
       
        $insert = Review::where('id',$request->id)->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'review' => $request->review,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
   
        if ($insert) {
            $notification = array(
                'messege' => 'Update success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Update Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
