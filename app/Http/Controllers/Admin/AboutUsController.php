<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // update
    public function update()
    {
        $data = AboutUs::where('keyword', 'about_us')->select(['details', 'id', 'title', 'image'])->first();
        return view('backend.about-us.update', compact('data'));
    }
    // update Store
    public function updateSubmit(Request $request)
    {
        $this->validate($request, [
            'details' => 'required',
        ]);
        $update = AboutUs::where('id', $request->id)->update([
            'title' => $request->title,
            'details' => $request->details,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'About' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/aboutus/' . $ImageName);
            AboutUs::where('id', $update)->update([
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

    public function privacyPolicy()
    {
        $data = AboutUs::select(['details', 'id'])->where('keyword', 'privacy_policy')->first();
        return view('backend.about-us.privacy_policy', compact('data'));
    }

    public function termsCondition()
    {
        $data = AboutUs::select(['details', 'id'])->where('keyword', 'terms_condition')->first();
        return view('backend.about-us.terms_conditions', compact('data'));
    }
    
    public function allconfirmation(){
        return view('backend.confirmationpage.index');
    }
}
