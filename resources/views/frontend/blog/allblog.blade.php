@extends('layouts.frontend')
@section('title', 'Blogs')
@section('content')
<style>
.news-block .inner-box .lower-content h4 {
 
    font-size: 15px;
}
</style>
 <section class="blog-page-section">
        <div class="pattern-layer-one" style="background-image: url(frontend/images/icons/icon-5.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(frontend/images/icons/icon-6.png)"></div>
        <div class="pattern-layer-three" style="background-image: url(frontend/images/icons/icon-4.png)"></div>
        <div class="auto-container">
            <!-- Page Breadcrumb -->
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blog</li>
            </ul>
            <div class="content-box">
                <h2>Latest articles & news</h2>
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                 @foreach($allblog as $blog)
                <div class="news-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{url('/details/'.$blog->slug.'/'.$blog->id)}}"><img src="{{asset('uploads/'.$blog->image)}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="border-layer"></div>
                            <ul class="post-info">
                                <li>{{$blog->Category->name}}</li>
                                <li>Updated  {{ $blog->created_at->format('M-d-Y')}}</li>
                            </ul>
                            <h4><a href="{{url('/details/'.$blog->slug.'/'.$blog->id)}}">{{ $blog->title }}</a></h4>
                            <a href="{{url('/details/'.$blog->slug.'/'.$blog->id)}}" class="more">More <span class="fa fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Button Box -->
            <div class="btn-box text-center">
                {{ $allblog->links('vendor.pagination.custom') }}
            </div>
            
        </div>
    </section>

@endsection