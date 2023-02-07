<?php

namespace App\Providers;

use App\Models\Seo;
use App\Models\Social;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\CompanyInformation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
    }


    public function boot()
    {   
        
       
        
        $companyInformation = CompanyInformation::first();
        $seo = Seo::first();
        $social = Social::first();
        $galari = Gallery::where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->limit(9)->get();
        $allcate = Category::where('is_deleted',0)->limit(6)->get();
        view()->share('companyInformation', $companyInformation);
        view()->share('social', $social);
        view()->share('galari', $galari);
        view()->share('allcate', $allcate);
        view()->share('seo', $seo);
      
        
        Paginator::useBootstrap();
    }
}
