
@extends('layouts.frontend')
@section('title', 'Find Tutor')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('frontend')}}/style.css" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend')}}/responsive.css" rel="stylesheet" type="text/css" />
<div class="preimage-cls" style="visibility: hidden;">
    <img class="pre-image" src="{{ asset('frontend/Double Ring-1s-200px.svg') }}" alt="">
</div>
<style>
.preimage-cls{
    position: fixed;
    left: 45%;
    top: 40%;
    z-index: 999999;
    height: 100%;
    overflow: hidden;
}
span.new-price {
    padding: 10px 10px;
    background: #e3e3e3;
    margin: 6px 0px;
    border-radius: 19px;
    font-size: 13px !important;
}
</style>
<section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="all-filter">

                    <div class="filter-tag">
                            <h4 class="filter-title">Tutor Type</h4>
                            <a href="#tags-filter" data-bs-toggle="collapse" class="filter-link"><span>Tutor Type </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-tag collapse" id="tags-filter">
                                <li class="choice-size">
                                    <input type="checkbox" class="tutor_type common_selector tutor_wish" name="tutor_type" id="t-1"
                                    value="1" data-name="Online" data-slug="type-online">
                                    <label for="t-1">Online Tutor</label>
                                   
                                </li>
                                <br>
                                <li class="choice-size">
                                <input type="checkbox" class="tutor_type common_selector tutor_wish" name="tutor_type" id="t-2"
                                    value="2" data-name="Home" data-slug="type-online">
                                    <label for="t-2">Home Tutor</label>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Subjects</h4>
                            <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Subjects </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-option collapse" id="category-filter">

                            @foreach($allsubject as $subject)
                                <li class="grid-list-option">
                                    <input type="checkbox" class="subject common_selector subject_wish" name="subject" id="b-{{ $subject->id }}"
                                    value="{{ $subject->id}}" data-name="{{ $subject->name}}" data-slug="brand-{{ $subject->name }}">
                                    <label style="margin:0px 0px 0px 10px" for="b-{{ $subject->id }}"> {{ $subject->name}}</label>
                                </li>
                             @endforeach

                                
                            </ul>
                        </div>
                        <div class="price-filter">
                            <h4 class="filter-title">Filter by price</h4>
                            <a href="#price-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by price </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-price collapse" id="price-filter">
                                <li class="f-price">
                                    <input  type="checkbox" class="price common_selector price_wish" name="price" value="1" id="p-1">
                                    <label for="p-1"> £5 - £10</label>
                                </li>
                                <li class="f-price">
                                    <input  type="checkbox" class="price common_selector price_wish" name="price" value="2" id="p-2">
                                    <label  for="p-2">£11 - £20</label>
                                </li>
                                <li class="f-price">
                                    <input type="checkbox" class="price common_selector price_wish" name="price" value="3"  id="p-3">
                                    <label  for="p-3">£21 - £30</label>
                                </li>
                                <li class="f-price">
                                    <input type="checkbox" class="price common_selector price_wish" name="price" value="4"  id="p-4">
                                    <label  for="p-4">£31 - £40</label>
                                </li>
                                <li class="f-price">
                                    <input type="checkbox" class="price common_selector price_wish" name="price" value="5"  id="p-5">
                                    <label  for="p-5">£41 - £51</label>
                                </li>
                             
                            </ul>
                        </div>
                        <div class="pro-size">
                            <h4 class="filter-title">Gender</h4>
                            <a href="#size-filter" data-bs-toggle="collapse" class="filter-link"><span>Gender </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-size collapse" id="size-filter">
                                <li class="choice-size">
                                    <input type="checkbox" class="gender common_selector gender_wish" name="gender" id="g-1"
                                    value="Male" data-name="Male" data-slug="gender-Male">
                                    <label for="g-1">Male</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox" class="gender common_selector gender_wish" name="gender" id="g-2"
                                    value="Female" data-name="Female" data-slug="gender-Female">
                                    <label for="g-2">Female</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="grid-list-area">
                        <div class="row">
                            <div class="col-md-6">
                                {{--
                                <div class="grid-list-select">
                                    <ul class="grid-list">
                                        <li class="colloction-icn"><a href="" class="active"><i class="ti-layout-list-thumb"></i></a></li>
                                        <li class="colloction-icn"><a href=""><i class="ti-layout-grid2"></i></a></li>
                                        <li class="colloction-icn three-grid"><a href=""><i class="ti-layout-grid3"></i></a></li>
                                        <li class="colloction-icn four-grid"><a href=""><i class="ti-layout-grid4"></i></a></li>
                                    </ul>
                                    <ul class="grid-list-selector">
                                        <li>
                                            <label>Subject</label>
                                          
                                            <select class="common_selector" name="sortBy" id="sortBy">

                                                <option selected data-slug="sortBy-Price-Low-to-High" data-name="Name (A to Z)" value="3">Name (A to Z)</option>
                                                <option  data-slug="sortBy-Price-Low-to-High" data-name="Price (Low to High)" value="1">Hourly Rate (Low
                                                    to High)
                                                </option>
                                                <option data-slug="sortBy-Price-High-to-Low" data-name="Price (High to Low)" value="2">Hourly Rate (High to Low)
                                                </option>
                                               
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                                --}}
                            </div>

                              <div class="col-md-6">
                                <div class="grid-list-select">
                                    <ul class="grid-list">
                                        <li class="colloction-icn"><a href="" class="active"><i class="ti-layout-list-thumb"></i></a></li>
                                        <li class="colloction-icn"><a href=""><i class="ti-layout-grid2"></i></a></li>
                                        <li class="colloction-icn three-grid"><a href=""><i class="ti-layout-grid3"></i></a></li>
                                        <li class="colloction-icn four-grid"><a href=""><i class="ti-layout-grid4"></i></a></li>
                                    </ul>
                                    <ul class="grid-list-selector">
                                        <li>
                                            <label>Sort by</label>
                                          
                                            <select class="common_selector" name="sortBy" id="sortBy">

                                                <option selected data-slug="sortBy-Price-Low-to-High" data-name="Name (A to Z)" value="3">Name (A to Z)</option>
                                                <option  data-slug="sortBy-Price-Low-to-High" data-name="Price (Low to High)" value="1">Hourly Rate (Low
                                                    to High)
                                                </option>
                                                <option data-slug="sortBy-Price-High-to-Low" data-name="Price (High to Low)" value="2">Hourly Rate (High to Low)
                                                </option>
                                               
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    

                        <div class="list-product" id="defultData">
                            @foreach($allteacher as $key => $data)
                                <div class="list-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ url('tutor-find/details/'.$data->id) }}">
                                                <img class="img-fluid img_laz" data-original="{{ asset('/'.$data->photo) }}" alt="pro-img1">
                                                {{-- 
                                                <img class="img_laz" data-original="{{ asset('/'.$data->photo) }}" alt="">
                                                <img class="img-fluid additional-image" src="image/pro/pro-img-01.jpg" alt="additional image">
                                                --}}
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">Tutor</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ url('tutor-find/details/'.$data->id) }}">{{ $data->name}}</a></h3>
                                        <p class="list-description">{{ $data->headline_for_tutor }}</p>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">£ {{ $data->expected_hourly_rate }} per hour</span>
                                        </div>
                                         @if($data->subject !=null)
                                            @php
                                                $subjectstutor=App\Models\SelectedTutorSubject::where('tutor_id', $data->id)->get();
                                            @endphp
                                           @foreach($subjectstutor as $sub)
                                           <a href="#" class="btn-sm btn-success">{{$sub->Subject->name}}</a>
                                            @endforeach
                                         @endif
                                        <div class="pro-icn">
                                        <a href="{{ url('tutor-find/details/'.$data->id) }}">view-profile</a>  
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="list-product"  id="filterData"></div>
                    </div>
                </div>
            </div>

            <div class="list-all-page text-center" id="pagina">
                <span class="page-title"> </span>
                <div class="page-number text-center">
                    {{ $allteacher->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </section>
<style>
    .page-number.text-center {
    display: inline-flex !important;
}
</style>


@endsection