<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Event;
use Carbon\Carbon;
use Auth;
class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // create
    public function create()
    {
        
        return view('backend.event.create');
    }
    // store
    public function store(Request $request)
    {
           
      
        $validated = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'details' => 'required',
            'address' => 'required',
            'image' => 'required',
        ]);
       
        $insert = Event::insertGetId([

            'title' => $request->title,
            'date' => $request->date,
            'price' => $request->price,
           
            'details' => $request->details,
            'address' => $request->address,
            'google_map' => $request->google_map,
            'end_time' => $request->end_time,
            'start_time' => $request->start_time,

            'tags' => $request->tags,
            'total_slot' => $request->slot,

            'image' => '',

            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'Gallery' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
            Event::where('id', $insert)->update([
                'image' => $ImageName,
            ]);
        }
     
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
        $alldata = Event::where('is_deleted', 0)->orderBy('id', 'DESC')->get();
        return view('backend.event.index', compact('alldata'));
    }
    // edit
    public function edit($id)
    {
        
        $edit = Event::where('id', $id)->first();
        return view('backend.event.update', compact('edit'));
    }
    // delete
    public function delete($id)
    {
        $delete = Event::where('id', $id)->update([
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


    // active
    public function active($id)
    {
        $delete = Event::where('id', $id)->update([
            'status' => 1,
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

    public function deactive($id)
    {
        $delete = Event::where('id', $id)->update([
            'status' => 0,
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
    public function update(Request $request){
      
        $validated = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'details' => 'required',
            'address' => 'required',
           
        ]);
       
        $insert = Event::where('id',$request->id)->update([

            'title' => $request->title,
            'date' => $request->date,
            'price' => $request->price,
           
            'details' => $request->details,
            'address' => $request->address,
            'google_map' => $request->google_map,
            'end_time' => $request->end_time,
            'start_time' => $request->start_time,

            'tags' => $request->tags,
            'total_slot' => $request->slot,

            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'Gallery' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
            Event::where('id', $request->id)->update([
                'image' => $ImageName,
            ]);
        }
     
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
