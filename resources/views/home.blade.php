@extends('layouts.front')
@section('content')
<section class="slide-banner scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
        <div class="slideshow-container">
            <div class="slideshow-item">
                <div class="bg" data-bg="/assets/img/banner-3.jpg"></div>
            </div>
            <div class="slideshow-item">
                <div class="bg" data-bg="/assets/img/banner-6.jpg"></div>
            </div>
            <div class="slideshow-item">
                <div class="bg" data-bg="/assets/img/banner-5.jpg"></div>
            </div>
            <div class="slideshow-item">
                <div class="bg" data-bg="/assets/img/banner-2.jpg"></div>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="hero-section-wrap fl-wrap">
            <div class="container">
                <div class="intro-item fl-wrap">
                    <div class="caption text-center cl-white">
                        <h2>We’re here to help you.</h2>

                        <p>We connect talented people with great companies. Join our network today.</p>
                    </div>
                    <form class="form-horizontal" method="post" action="{{ route('search-post') }}">
                    @csrf
                        
                        <div class="col-md-5 no-padd">
                            <div class="input-group">
                                <input type="search" class="form-control br-1" required id="quary" name="quary" placeholder="Eg. IT Manager, Accountant, etc..." role="search"></div>
                        </div>
                        <!-- <div class="col-md-3 no-padd">
                            <div class="input-group">
                                <input type="text" class="form-control br-1" id="location" name="location" placeholder="Search By Location.."></div>
                        </div> -->
                        <div class="col-md-5 no-padd">
                            <div class="input-group">
                                <select id="choose-city" name="location"  class="form-control">
                                    <option value="">Choose City</option>
                                    <option value="England">England</option>
                                    <option value="Moroco">Moroco</option>
                                    <option value="India">Mumbai,India </option>
                                    <option value="Malawi">Malawi</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 no-padd">
                            <div class="input-group">
                                <button type="submit" class="btn btn-success full-width">Search Job</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- <section class="first-feature">
        <div class="container">
            <div class="all-features">
                <h2>Job Categories</h2>
                @forelse($categories as $category)
                <div class="col-md-3 col-sm-6 mt-3">
                    
                    <div class="job-feature">
                        <div class="feature-icon"></div>
                        <div class="feature-caption">
                            <a href="{{$category->slug}}"><h5>{{$category->name}} </h5></a>
                        </div>
                    </div>
                    
                </div>
                @empty
                    <div class="text-center"> No Categories Currently Found </div>
                @endforelse

            </div>
        </div>
    </section>   -->


    </div>
    <div class="clearfix"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>New Jobs</p>

                    <h2>New & Random <span>Jobs</span></h2>
                </div>
            </div>
            <div class="row extra-mrg">
                @forelse($jobs as $job)
                <div class="col-md-3 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="brows-job-company-img">
                            <img src="{{ Voyager::image($job->companylogo) }}" class="img-responsive" alt="" />
                        </div>
                        <div class="brows-job-position">
                            <h3><a href="/job/{{ $job->slug }}">{{$job->jobtitle}}</a></h3>

                            <p><span>{{$job->companyname}}</span></p>
                        </div>
                        
                        <div class="brows-job-type"><span class="part-time">{{$job->jobtype}}</span></div>
                        <ul class="grid-view-caption">
                            <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>{{$job->location}}</p>
                                </div>
                            </li>
                            <li>
                                <p><span class="brows-job-sallery">
                                    <i class="fa fa-money"></i>{{$job->jobsalary}}</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                @empty
                    <div class="text-center"> No Jobs Currently Found </div>
                @endforelse

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="wp-process">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>How TNL Global Recrut Works for You</p>

                    <h2>Our Work <span>Process</span></h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-search"></span></div>
                    <div class="work-process-caption">
                        <h4>Find the Right Job</h4>

                        <p>Through our extensive job database we search the job that will perfectly fix you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-mobile"></span></div>
                    <div class="work-process-caption">
                        <h4>Research Companies</h4>

                        <p>We find out from campanies for job</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-profile-male"></span></div>
                    <div class="work-process-caption">
                        <h4>Hire Employee</h4>

                        <p>We look for suitable candidates for different posions and help people get the opportunities</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-layers"></span></div>
                    <div class="work-process-caption">
                        <h4>Start Work</h4>

                        <p>After finding you work, you start working on your dream job.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-happy"></span></div>
                    <div class="work-process-caption">
                        <h4>Happy</h4>

                        <p>We always deliver to our client by helping the their dream jobs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <div class="clearfix"></div>
    <section class="dark" id="video" style="background-image:url(assets/img/banner-10.jpg);">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>We're not your typical job site.</p>

                    <h2>Search For Your <span>Dream Job</span></h2>
                    <a href="{{ route('jobs') }}" class="btn btn-primary">Browse Job Listing</a>
                </div>
            </div>
            
        </div>
    </section>
    <section class="brows-job-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Here are some opportunities with the best companies in the market today. Join our network, and we’ll find the best fit for you!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @forelse($browses as $browse)
                    <div class="item-click">
                        <article>
                            <div class="brows-job-list">
                                <div class="col-md-1 col-sm-2 small-padding">
                                    <div class="brows-job-company-img">
                                        <a href="job-detail.html">
                                            <img src="{{ Voyager::image($browse->companylogo) }}" class="img-responsive" alt=""/>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <div class="brows-job-position">
                                        <a href="/job/{{ $job->slug }}">
                                            <h3>{{$browse->jobtitle}}</h3>
                                        </a>

                                        <p><span>Autodesk</span><span class="brows-job-sallery"><i
                                                class="fa fa-money"></i>{{$browse->jobtitle}}</span><span
                                                class="job-type cl-success bg-trans-success">{{$browse->jobtype}}</span></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="brows-job-location">
                                        <p><i class="fa fa-map-marker"></i>{{$browse->location}}</p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="brows-job-link"><a href="/job/{{ $browse->slug }}" class="btn btn-default">View
                                        Job</a></div>
                                </div>
                            </div>
                        </article>
                    </div>
                    @empty
                    <div class="text-center"> No jobs Currently Found </div>
                    @endforelse
                </div>
            </div>
            
        </div>
    </section>
    
    <div class="clearfix"></div>
    <section class="how-it-works">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="main-heading">
                        

                        <h2>How It <span>Works</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/verified.svg" class="img-responsive" alt=""/><span
                                class="process-num">01</span></span>
                        <h4>Verified jobs</h4>

                        <p>We source jobs directly from employer websites so you can get the highest-quality, most accurate listings. No duplicates. No spam.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/listings.svg" class="img-responsive" alt=""/><span
                                class="process-num">02</span></span>
                        <h4>Up to date listings</h4>

                        <p>Get there first. Our jobs are updated every single day so you can browse the most current listings available, with many you won't find on other job sites.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/connections.svg" class="img-responsive" alt=""/><span
                                class="process-num">03</span></span>
                        <h4>Direct connections</h4>

                        <p>Apply without the hassle. Our listings bring you directly to company websites so you can apply at the source, without extra signups.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>What Say Our Client</p>

                    <h2>Our Success <span>Stories</span></h2>
                </div>
            </div>
            <div class="row">
                <div id="client-testimonial-slider" class="owl-carousel">
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
                        <p class="client-description">After a long, unsuccessful job search, 
                            I contacted Prios Experts - also for reasons of time - 
                            and commissioned them to look for my dream job. After the first
                            consultation I was able to sit back and relax. Prios Experts 
                            really has a large network and found the perfect position for me 
                            after a short time.</p>

                        <h3 class="client-testimonial-title">Petra V., technical draftswoman</h3>
                        <ul class="client-testimonial-rating">
                            
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star-o"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-2.jpg" alt=""></div>
                        <p class="client-description">n my job I didn't have much time to look 
                            for new job offers. But a change was urgently needed.
                             The Prios Experts team took care of everything and found the 
                             perfect position 
                             for me. The process was absolutely discreet and the support 
                             was very personal 
                             and approachable.</p>

                        <h3 class="client-testimonial-title">Christian P., PLC programmer</h3>
                        <ul class="client-testimonial-rating">
                            
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star-o"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
                        <p class="client-description">After a long, unsuccessful job search, 
                            I contacted Prios Experts - also for reasons of time - 
                            and commissioned them to look for my dream job. After the first
                            consultation I was able to sit back and relax. Prios Experts 
                            really has a large network and found the perfect position for me 
                            after a short time.</p>

                        <h3 class="client-testimonial-title">Petra V., technical draftswoman</h3>
                        <ul class="client-testimonial-rating">
                            
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star-o"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="/assets/img/client-3.jpg" alt=""></div>
                        <p class="client-description">I didn't have much time to look for new job offers. 
                            But a change was urgently needed.
                             The Prios Experts team took care of everything and found 
                             the perfect position 
                             for me. The process was absolutely discreet and the support was 
                             very personal 
                             and approachable. </p>

                        <h3 class="client-testimonial-title">Mavin Symon, Accountant</h3>
                        <ul class="client-testimonial-rating">
                            
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star-o"></li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    
    <section class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <p>Be informed</p>

                        <h2>Our <span> Blog</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($latest_posts as $post)
                <div class="col-md-4 col-sm-6">
                    <div class="freelance-container style-2">
                        <div class="">
                            

                            <div class="card ">
                                <div class=""><img src="{{ Voyager::image($post->image) }}"  height="200" class="img-responsive" alt="blog"/></div>
                                    <span class="freelance-status">Blog</span>
                                    <h4 class="flc-rate"></h4>
                                    <div class="card-body px-3">
                                        <h2>{{ $post->title}}</h2> 
                                        <p>{!! $truncated = Str::of($post->body)->limit(150) !!}</p>	
                                        <div class="">
                                            
                                    
                                        </div>
                                        <a href="/post/{{ $post->slug }}" class="btn btn-freelance-two bg-info">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="text-center"> Currently we have no post! </div>
                    @endforelse
                
                
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center"><a href="{{ route('blog') }}" class="btn btn-primary">See More</a></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="download-app" style="background-image:url(assets/img/banner-7.jpg);">
        <div class="container">
            <!-- <div class="col-md-5 col-sm-5 hidden-xs"> -->
                <!-- <img src="assets/img/iphone.png" alt="iphone"
                                                          class="img-responsive"/></div> -->
            <div class="col-md-9 col-sm-12">
                <div class="app-content">
                    
                    <h3>Match! We will find the right job for you!</h3>

                    <p>We know who fits together and bring qualified specialists together with renowned employers.</p>
                    <p>Prios Experts provides skilled workers from all sectors and areas with attractive jobs at TOP companies</p>
                    <p>Thanks to many years of expertise, a huge network and individual applicant support, we are one of the leading recruiters</p>
                    <!-- <a href="#" class="btn call-btn">
                        Learn More</a> -->
                        <a href="{{ route('jobs') }}" class="btn call-btn">Search for jobs</a>
                </div>
            </div>
        </div>
    </section>
@endsection