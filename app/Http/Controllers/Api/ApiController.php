<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ResubCategory;
use Devfaysal\BangladeshGeocode\Models\District;

class ApiController extends Controller
{
    public function subcatagory($cate_id)
    {
        $data = SubCategory::where("category", $cate_id)->where('is_active', 1)->where('is_deleted', 0)
            ->select(['name', 'id'])->orderBy('id', 'DESC')->get();
        return response()->json($data);
    }

    public function  resubcatagory($resubcate_id)
    {
        $data = ResubCategory::where("sub_category", $resubcate_id)->where('is_active', 1)->where('is_deleted', 0)
            ->select(['name', 'id'])->orderBy('id', 'DESC')->get();
        return response()->json($data);
    }

    public function  getDistrict($division_id)
    {
        $data = District::where('division_id', $division_id)->get();
        return response()->json($data);
    }
}
