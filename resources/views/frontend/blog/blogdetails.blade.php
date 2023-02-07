@extends('layouts.frontend')
@section('title', 'Blog Details')
@section('content')
<style>
    .blog-detail-banner-section .page-breadcrumb {

    margin-bottom: 11px;
   
}

.blog-detail-banner-section {
    padding-bottom: 32px;
}


.blog-detail .inner-box p {

    margin-bottom: 1px !important;
}

.sidebar .popular-posts .post .text {
   
    font-size: 12px;

    font-weight: 400;

}

.sidebar-widget {
    margin-bottom: 35px;
    padding: 1px 0px;
}

.sidebar .popular-tags a {
    font-size: 13px;
    font-weight: 400;
}
</style>
    <!-- Blog Detail Banner Section -->
    <section class="blog-detail-banner-section">
        <div class="auto-container">
            <!-- Page Breadcrumb -->
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Post-Details</li>
            </ul>
            <div class="content-box">
                <h5 style="color:black">{{ $data->title }}</h5>
            </div>
        </div>
    </section>
    <!-- End Blog Detail Banner Section -->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container style-two">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="inner-box">
                             <div class="article-image">
                                <img src="{{ asset('uploads/'.$data->image) }}" alt="image">
                            </div>
                            <br>
                            {!! $data->description  !!}
                           
                            
                            <!-- Post Share Options-->
                            <div class="post-share-options">
                                <ul class="tags">
                                    <li><span class="icon fa fa-tag"></span></li>
                                        @foreach(explode(',',$data->tag) as $tags)
                                     <li><a href="#">{{$tags}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                    
                        <!-- Popular Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h4>Recent Post</h4>
                            </div>
                            <div class="widget-content">
                                @foreach($popularPost as $post)
                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ asset('/uploads/'.$post->image) }}" alt=""><a href="{{ url('/details/'.$post->slug.'/'.$post->id) }}" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                    <div class="post-info">{{ $post->created_at->format('D M Y') }}</div>
                                    <div class="text"><a href="{{ url('/details/'.$post->slug.'/'.$post->id) }}">{{ $post->title }}</a></div>
                                </article>
                                @endforeach
                             
                           
                            </div>
                        </div>
                        
                        <!-- Links Widget -->
                        {{--
                        <div class="sidebar-widget links-widget">
                            <div class="sidebar-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="blog-cat">
                                        @foreach($allcategory as $category)
                                    <li><a href="#">{{$category->name}}</a></li>
                                    @endforeach
                                   
                                    
                                </ul>
                            </div>
                        </div>
                        --}}
                    
                        
                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title">
                                <h4>Tags</h4>
                            </div>
                            <div class="widget-content">
                                @foreach(explode(',',$data->tag) as $tags)
                                     <a href="#">{{$tags}}</a>
                                    @endforeach
                            </div>
                        </div>
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
{{-- 
      <!-- Start Page Banner -->
      <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Blog Details</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-image">
                                <img src="{{ asset('uploads/'.$data->image) }}" alt="image">
                            </div>

                            <div class="article-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <span>Posted On:</span> 
                                            <a href="#">{{  $data->created_at->format('d M Y') }}</a>
                                        </li>
                                        <li>
                                            <span>Posted By:</span> 
                                            <a href="#">Admin</a>
                                        </li>
                                    </ul>
                                </div>

                                <h3>{{ $data->title }}</h3>
                                <p>{!!  $data->description !!}</p>
                                
                            </div>

                            <div class="article-footer">
                                <div class="article-tags">
                                    <span>
                                        <i class='bx bxs-bookmark'></i>
                                    </span>
                                    <a href="#">Preschool</a>,
                                    <a href="#">Children</a>
                                </div>

                                <div class="article-share">
                                    <ul class="social">
                                        <li><span>Share:</span></li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-twitter'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-navigation">
                                <div class="navigation-links">
                                    <div class="nav-previous">
                                        <a href="index.html">
                                            <i class='bx bx-chevron-left'></i>
                                            Prev Post
                                        </a>
                                    </div>
                                    <div class="nav-next">
                                        <a href="index.html">
                                            Next Post 
                                            <i class='bx bx-chevron-right'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            <section class="widget widget_search">
                                <h3 class="widget-title">Search</h3>

                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label>
                                    <button type="submit">
                                        <i class='bx bx-search-alt'></i>
                                    </button>
                                </form>
                            </section>

                            <section class="widget widget_ketan_posts_thumb">
                                <h3 class="widget-title">Popular Posts</h3>
                                @foreach($popularPost as $post)
                                <article class="item">
                                  
                                    <a href="{{ url('/details/'.$post->slug.'/'.$post->id) }}" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <style>
                                        .fullimage.bg1 {
                                            background-image: url({{asset('uploads/'.$post->image)}}) !important;
                                        }
                                        .widget-area .widget_ketan_posts_thumb .item .thumb .fullimage {
                                            width: 80px;
                                            height: 80px;
                                            display: inline-block;
                                            border-radius: 5px;
                                            background-size: cover !important;
                                            background-repeat: no-repeat;
                                            /* background-position: center center !important; */
                                        }
                                    </style>
                                    <div class="info">
                                        <span>{{ $post->created_at->format('D M Y') }}</span>
                                        <h4 class="title usmall"><a href="{{ url('/details/'.$post->slug.'/'.$post->id) }}">{{ $post->title }}</a></h4>
                                    </div>
                                </article>
                                @endforeach
                            </section>

                            <section class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>

                                <ul>
                                    @foreach($allcategory as $category)
                                    <li><a href="#">{{$category->name}}</a></li>
                                    @endforeach
                                   
                                </ul>
                            </section>

                            <section class="widget widget_tag_cloud">
                                <h3 class="widget-title">Tags</h3>

                                <div class="tagcloud">
                                    @foreach(explode(',',$data->tag) as $tags)
                                    <a href="#">{{$tags}}</a>
                                    @endforeach
                                   
                                </div>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->
        --}}
@endsection