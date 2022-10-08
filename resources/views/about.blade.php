@extends('layouts.front')
@section('content')
<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
    <div class="container">
        <h1>About Us</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->
<div class="clearfix"></div>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2 class="font-weight-bold">Tnl Global.</h2>
                <p class="lead">Tnl Global is a UK recruitment agency with 
                    offices in London, Malawi, Morocco and India. 
                    We provide specialist recruitment services to organisations across the public, 
                    private and not for profit sectors.</p>
                    <p class="lead">we’ve become renowned for connecting talented candidates and 
                        brilliant organisations within the charity, education, finance, 
                        government, housing, professional services, 
                        property & construction, social care and technology sectors.</p>
            </div>
            <div class="col-md-6 col-sm-6">
                <img src="assets/img/pic1.jpg" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>About Us</h2>
                <p>Our mission is to provide job seekers and employers alike with the purest, most efficient, most relevant and rewarding job search experience imaginable online. We drive those looking for employment directly to real jobs in Malawi from real employers.</p>

                <p>That is why we say it is time to search with your eyes wide open. Employers can now easily Post a Job and job seekers can Find Jobs at any time.</p>

                <p>For a sea of hungry (but frustrated) job seekers, this is a direct route to incredible employment opportunities that match your particular skill set. Those looking for employment can subscribe to free services such as Email Job Alerts.</p>
            </div>
        </div>
    </div>
</div>

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
        <section class="call-to-act">
            <div class="container-fluid">
                <div class="col-md-6 col-sm-6 no-padd bl-dark">
                    <div class="call-to-act-caption">
                        <h2>Contact us today</h2>

                        <h3>Let us know what kind og work your looking for qirg ease.</h3>
                        <a href="{{ route('contact') }}" class="btn bat-call-to-act">Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 no-padd gr-dark">
                    <div class="call-to-act-caption">
                        <h2>We are expert </h2>

                        <h3>In finding  suitable worke for you from different companies and country</h3>
                        <a href="{{ route('jobs') }}" class="btn bat-call-to-act">Find Work</a>
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
<div class="clearfix"></div>
@endsection