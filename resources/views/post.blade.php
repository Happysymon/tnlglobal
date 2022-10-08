@extends('layouts.front')
@section('content')
<section class="inner-header-title" style="background-image:url(/assets/img/banner-10.jpg);">
    <div class="container">
        <h2> {{ $post->title }}</h2>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Blog Detail -->
<section class="section">
    <div class="container">
        <div class="row no-mrg">
            <div class="col-md-12">
                <article class="">
                    <div class="">
                    
                        <figure class="img-holder">
                            <a href="/post/{{ $post->slug }}"><img src="{{ Voyager::image($post->image) }}" class="img-responsive" alt="News"></a>
                            <div class="blog-post-date">
                                Mar 12, 2017
                            </div>
                        </figure>
                        
                        <div class="full blog-content">
                            <div class="post-meta">By: <span class="author">Daniel Dax</span> | 10 view </div>
                            <a href="/post/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a>
                            <div class="blog-text">
                                {!! $post->body !!}
                                <div class="post-meta">Filed Under: <span class="category"><a href="#">Technology</a></span></div>
                            </div>
                            <div class="row no-mrg">
                                <div class="blog-footer-social">
                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                    <ul class="list-inline social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </article>
                
            </div>
            
            
            <!-- Start Sidebar -->
            
            <!-- End Start Sidebar -->
        </div>
        <div class="">
                <!-- you may also like  -->
                @include('inc.alsosee')
                     <!-- end you may also like  -->
            </div>
    </div>
</section>
<!-- Blog Detail End -->

@endsection