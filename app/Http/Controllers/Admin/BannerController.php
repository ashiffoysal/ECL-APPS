<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Carbon\Carbon;
use Image;

class BannerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function bannerupdate(){
        $edit=Banner::first();
        return view('backend.banner.update',compact('edit'));
    }
    public function update(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
        ]);
        $update = Banner::where('id', $request->id)->update([
            'title' => $request->title,
            'details' => $request->details,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'About' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
            Banner::where('id', $update)->update([
                'image' => $ImageName,
            ]);
        }
        if ($update) {
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
