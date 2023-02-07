@extends('layouts.frontend')
@section('title', 'Gallery')
@section('content')
       <!-- Start Page Banner -->
       <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Gallery</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Gallery Area -->
        <div class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    @foreach($alldata as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery-box">
                            <img src="{{ asset('uploads/'.$data->image) }}" alt="image">
                            <a href="{{ asset('uploads/'.$data->image) }}" class="gallery-btn" data-imagelightbox="popup-btn">
                                <i class='bx bx-search-alt'></i>
                            </a>
                        </div>
                    </div>
                    @endforeach

                   
                </div>

                <div class="row">
                <div class="col-lg-12 col-md-12">
                      
                      {{ $alldata->links('vendor.pagination.custom') }}
               
                  </div>
                </div>
            </div>
        </div>
        

@endsection