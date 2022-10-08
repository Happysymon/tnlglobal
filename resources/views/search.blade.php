@extends('layouts.front')
@section('content')
<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url(/assets/img/banner-10.jpg);">
    <div class="container">
        <h1>Search Results</h1>
        <p>Our job exchange for highly qualified personnel</p>
    </div>
</section>
<div class="clearfix"></div>
		
<!-- ========== Begin: Brows job Category ===============  -->
<section class="brows-job-category">
    <div class="container">
        
        @forelse($jobs as $job)
        <div class="item-click">
            <article>
                <div class="brows-job-list">
                    <div class="col-md-1 col-sm-2 small-padding">
                        <div class="brows-job-company-img">
                            <a href="/job/{{ $job->slug }}"><img src="assets/img/com-2.jpg" class="img-responsive" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-5">
                        <div class="brows-job-position">
                            <a href="/job/{{ $job->slug }}"><h3>{{$job->jobtitle}}</h3></a>
                            <p>
                                <span>{{$job->companyname}}</span><span class="brows-job-sallery"><i class="fa fa-money"></i>{{$job->jobsalary}}</span>
                                <span class="job-type bg-trans-warning cl-warning">{{$job->jobtype}}</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="brows-job-location">
                            <p><i class="fa fa-map-marker"></i>{{$job->location}}</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="brows-job-link">
                            <a href="/job/{{ $job->slug }}" class="btn btn-default">View Job</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        @empty
            <div class="text-center"> No Match Found </div>
            <div class="text-center"> <a href="{{ route('jobs') }}" class="btn btn-primary my-2">Browse Jobs</a></div>
        @endforelse

        <!--/.row-->
        <div class="row">
        {{ $jobs->links('inc.custom-paginate') }}
        </div>
    </div>
</section>
<!-- ========== Begin: Brows job Category End ===============  -->
@endsection