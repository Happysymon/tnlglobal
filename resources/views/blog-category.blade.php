@extends('layouts.front')
@section('content')
<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url(/assets/img/banner-10.jpg);">
    <div class="container">
        <h1>{{ $category->name}}</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- All blog List Start -->
<section class="section">
    <div class="container">
        <div class="row .no-mrg">
            <!-- Start Blogs -->
            <div class="col-md-9">
                @forelse($posts as $post)
                <article class="blog-news">
                    <div class="short-blog">
                        <figure class="img-holder">
                            <a href="/post/{{ $post->slug }}"><img src="{{ Voyager::image($post->image) }}" loading="lazy" class="img-responsive" alt="{{ $post->title}}"></a>
                            <div class="blog-post-date">
                                Mar 12, 2017 {{ date('d-m-Y', strtotime($post->from_date)); }}
                            </div>
                        </figure>
                        <div class="blog-content">
                            <div class="post-meta">By: <span class="author">  {{ $post->author->name}}</span> </div>
                            <a href="/post/{{ $post->slug }}"><h2>{{ $post->title}}</h2></a>
                            <div class="blog-text">
                                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                <div class="post-meta">Filed Under: <span class="category"><a href="#">{{ $post->category->name}}</a></span></div>
                            </div>
                        </div>
                    </div>
                </article>
                @empty
                    <div class="text-center"> No Posts Found </div>
                @endforelse
                
            </div>
            <!-- End Blogs -->
            
            <!-- Sidebar Start -->
            <div class="col-md-3 ">
                <div class="position-sticky  blog-sidebar ">
                
                    <form action="#" class="">
                        <div class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search…">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default">Go</button>
                                </span>
                            </div>
                        </div>
                    </form>
                    
                    <div class="sidebar-widget">
                        <h4>Popular Category</h4>
                        <ul class="sidebar-list">
                            @forelse($categories as $category)
                            <li><a href="{{$category->slug}}">{{$category->name}} <span>({{$category->posts->count()}})</span></a></li>
                            @empty
                                <div class="text-center"> No Categories Found </div>
                            @endforelse
                        </ul>
                    </div>
                    
                    
                    
                    <div class="sidebar-widget">
                        <h4>Recent Post</h4>
                        <div class="blog-item">
                            <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/1.jpg" class="img-responsive" alt=""></a></div>
                            <div class="blog-detail">
                                <a href="#"><h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4></a>
                                <div class="post-info">Aug 10 2016</div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/2.jpg" class="img-responsive" alt=""></a></div>
                            <div class="blog-detail">
                                <a href="#"><h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4></a>
                                <div class="post-info">Aug 10 2016</div>
                            </div>
                        </div><div class="blog-item">
                            <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/3.jpg" class="img-responsive" alt=""></a></div>
                            <div class="blog-detail">
                                <a href="#"><h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4></a>
                                <div class="post-info">Aug 10 2016</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- End Sidebar Start -->
        </div>
        <div class="row">
        
            <!-- Pagination -->
        </div>
    </div>
</section>
<!-- All Blog List End -->
@endsection