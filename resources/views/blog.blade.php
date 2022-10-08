@extends('layouts.front')
@section('content')
<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
    <div class="container">
        <h1>Blog</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- All blog List Start -->
<section class="section">
    <div class="container">
        <div class="row .no-mrg">
            <!-- Start Blogs -->
            @forelse($posts as $post)
            <div class="col-md-6">
                
                <article class="blog-news">
                    <div class="short-blog">
                        <figure class="img-holder">
                            <a href="/post/{{ $post->slug }}"><img src="{{ Voyager::image($post->image) }}" loading="lazy" class="img-responsive" alt="{{ $post->title}}"></a>
                            <div class="blog-post-date">
                                {{ date('j F, Y', strtotime($post->from_date)) }}
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
                
                
            </div>
            @empty
                <div class="text-center"> No Posts Found </div>
            @endforelse
            <!-- End Blogs -->
            
            <!-- Sidebar Start -->
            
            <!-- End Sidebar Start -->
        </div>
        <div class="row">
            {{ $posts->links('inc.custom-paginate') }}
            <!-- Pagination -->
        </div>
    </div>
</section>
<!-- All Blog List End -->
@endsection