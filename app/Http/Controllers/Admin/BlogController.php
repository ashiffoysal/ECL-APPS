<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Image;
use Carbon\Carbon;
use Auth;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // create
    public function create()
    {
        $allCategory=Category::where('is_deleted',0)->get();
        return view('backend.blog.create',compact('allCategory'));
    }
    // store
    public function store(Request $request)
    {
           
      
        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);
        $proname = $request->title;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);
        $insert = Blog::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'tag' => $request->tags,
            'slug' => $slug,
            'image' => '',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'Blog' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
            Blog::where('id', $insert)->update([
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
        $alldata = Blog::where('is_deleted', 0)->orderBy('id', 'DESC')->get();
        return view('backend.blog.index', compact('alldata'));
    }
    // edit
    public function edit($id)
    {
        $allCategory=Category::where('is_deleted',0)->get();
        $edit = Blog::where('id', $id)->first();
        return view('backend.blog.update', compact('edit','allCategory'));
    }
    // delete
    public function delete($id)
    {
        $delete = Blog::where('id', $id)->update([
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
    public function update(Request $request){
      
        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
        ]);
        $proname = $request->title;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);
        $insert = Blog::where('id',$request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'tag' => $request->tags,
            'slug' => $slug,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'Blog' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
            Blog::where('id', $request->id)->update([
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
