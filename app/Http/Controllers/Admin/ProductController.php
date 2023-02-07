<?php

namespace App\Http\Controllers\Admin;

use Image;
use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\ResubCategory;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //index
    public function index()
    {
        $alldata = Product::where('is_deleted', 0)
            ->select(['product_name', 'product_sku', 'id', 'image', 'product_price', 'is_active', 'category_id', 'subcategory_id', 'subcategory_id', 'product_description'])
            ->with('Category', 'SubCategory', 'ReSubCategory')->orderBy('id', 'DESC')->get();
        return view('backend.product.index', compact('alldata'));
    }

    // create
    public function create()
    {
        $allCategory = Category::where('is_active', 1)->where('is_deleted', 0)->select(['name', 'id'])->get();
        $allBrand = Brand::where('is_active', 1)->where('is_deleted', 0)->select(['brand', 'id'])->get();
        $allColor = Color::where('is_active', 1)->where('is_deleted', 0)->select(['color_name', 'id'])->get();
        return view('backend.product.create', compact('allCategory', 'allBrand', 'allColor'));
    }

    //store
    public function store(Request $request)
    {

        $validated = $request->validate([
            'product_name' => 'required',
            'product_sku' => 'required ',
            'product_price' => 'required',
            'product_qty' => 'required',
            'category_id' => 'required',
            //'subcategory_id' => 'required',
            'product_description' => 'required',
            'product_img' => 'required',
            //'gallery_img' => 'required'
        ]);

        $proname = $request->product_name;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);
        $insert = Product::insertGetId([
            'product_name' => $request->product_name,
            'product_sku' =>  $request->product_sku,
            'product_slug' => $slug,
            'product_price' => $request->product_price,
            'product_qty' => $request->product_qty,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'resubcategory_id' => $request->resubcategory_id,
            'brand_id' =>  $request->brand_id,
            'product_measurement' => $request->product_measurement,
            'product_size' => $request->product_size,
            'color_id' => json_encode($request->color_id),
            'tags' => $request->tags,
            'is_active' =>  $request->is_active,
            'product_description' => $request->product_description,
            'created_by' => Auth::user()->id . '-' . Auth::user()->name,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if ($request->hasFile('product_img')) {
            $image = $request->file('product_img');
            $ImageName = 'Product' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/product/' . $ImageName);
            Product::where('id', $insert)->update([
                'image' => $ImageName,
            ]);
        }
        $photos = array();
        if ($request->hasFile('images')) {
            foreach ($request->images  as  $key => $photo) {
                $photoName = uniqid() . "." . $photo->getClientOriginalExtension();
                $resizedPhoto = Image::make($photo)->save('uploads/product/ ' . $photoName);
                array_push($photos, $photoName);
            }
            Product::where('id', $insert)->update([
                'gallery_img' => json_encode($photos),
            ]);
        }
        if ($insert) {
            $notification = array(
                'messege' => 'insert success!',
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
    // active
    public function active($id)
    {
        $active = Product::where('id', $id)->update([
            'is_active' => 1,
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
        $Deactive = Product::where('id', $id)->update([
            'is_active' => 0,
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
        $edit = Product::where('id', $id)
            ->select(['id', 'product_name', 'product_sku', 'product_price', 'product_qty', 'is_active', 'category_id', 'subcategory_id', 'subcategory_id', 'resubcategory_id', 'brand_id', 'product_measurement', 'product_size', 'color_id', 'tags', 'product_description', 'image', 'gallery_img'])
            ->first();
        $allCategory = Category::where('is_deleted', 0)->select(['name', 'id'])->get();
        $allSubCategory = SubCategory::where('is_deleted', 0)->select(['name', 'id'])->orderBy('id', 'DESC')->get();
        $allReSubCatagory = ReSubCategory::where('is_deleted', 0)->select(['category', 'sub_category', 'name', 'id', 'is_active'])
            ->orderBy('id', 'DESC')->get();
        $allBrand = Brand::where('is_active', 1)->where('is_deleted', 0)->select(['brand', 'id'])->get();
        $allColor = Color::where('is_active', 1)->where('is_deleted', 0)->select(['color_name', 'id'])->get();
        return view('backend.product.update', compact('edit', 'allCategory', 'allBrand', 'allSubCategory', 'allReSubCatagory', 'allColor'));
    }
    // delete
    public function delete($id)
    {
        $delete = Product::where('id', $id)->update([
            'is_deleted' => 1,
            'updated_by' => Auth::user()->id,
            'deleted_by' => Auth::user()->id . '-' . Auth::user()->name,
            'deleted_at' =>  Carbon::now()->toDateTimeString(),
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
            'product_name' => 'required',
            'product_sku' => 'required ',
            'product_price' => 'required',
            'product_qty' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'product_description' => 'required',
        ]);
        $proname = $request->product_name;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);
        $update = Product::where('id', $request->id)->update([
            'product_name' => $request->product_name,
            'product_sku' =>  $request->product_sku,
            'product_slug' => $slug,
            'product_price' => $request->product_price,
            'product_qty' => $request->product_qty,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'resubcategory_id' => $request->resubcategory_id,
            'brand_id' =>  $request->brand_id,
            'product_measurement' => $request->product_measurement,
            'product_size' => $request->product_size,
            'color_id' => json_encode($request->color_id),
            'tags' => $request->tags,
            'is_active' =>  $request->is_active,
            'product_description' => $request->product_description,
            'updated_by' => Auth::user()->id . '-' . Auth::user()->name,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($request->hasFile('product_img')) {
            $image = $request->file('product_img');
            $ImageName = 'Product' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/product/' . $ImageName);
            Product::where('id', $request->id)->update([
                'image' => $ImageName,
            ]);
        }
        if ($request->has('previous_photos')) {
            $photos = $request->previous_photos;
        } else {
            $photos = array();
        }
        if ($request->hasFile('images')) {
            foreach ($request->images as $key => $photo) {
                $photoName = uniqid() . "." . $photo->getClientOriginalExtension();
                $resizedPhoto = Image::make($photo)->save('uploads/product/' . $photoName);
                array_push($photos, $photoName);
            }
        }
        $updategallery = Product::where('id', $request->id)->update([
            'gallery_img' => json_encode($photos),
        ]);

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
