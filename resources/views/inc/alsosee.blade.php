<!-- Latest Blog Post or related -->
<h2 class="py-3 pt-1 font-weight-bold">Latest From Our Blog</h2>
<div class="row">
    @forelse($latest_posts as $latest_post)
    <!--one post-->
    <div class="col-lg-6 col-md-6 mb-4 mt-0 pt-0" itemscope itemtype="http://schema.org/Article">
                
            <div class="card shadow" style="">
               
                    <img class="card-img-top" src="{{ Voyager::image($latest_post->image) }}"width="200" height="500" loading="lazy" alt="-Diabetic Reversed"/>
                
                <div class="card-body px-5 mb-5">
                    
                    <h3 class="card-title primary-text" itemprop="name">
                    <a href="/post/{{ $latest_post->slug }}" class="text-primary"><strong>{{ $latest_post->title}}</strong></a>
                    </h3>
                    
                    <a href="/post/{{ $latest_post->slug }}" class="btn btn-block btn-primary mx-0">Read more</a>
                </div>
            </div>
    </div>
    <!--end one post-->
    @empty
        <div class="text-center"> No Data Found </div>
    @endforelse
</div>