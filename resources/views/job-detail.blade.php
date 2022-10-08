@extends('layouts.front')
@section('content')

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url(/assets/img/banner-10.jpg);">
    <div class="container">
        <h2>{{$job->jobtitle}}</h2>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Job Detail Start -->
<section class="detail-desc">
    <div class="container white-shadow">
    
        <div class="row">
        
            <div class="detail-pic">
                <img src="{{ Voyager::image($job->companylogo) }}" class="img" alt="" />
                <a href="#" class="detail-edit" title="edit" ></a>
            </div>
            
            <div class="detail-status">
            Due:   <span> {{ date('j F, Y', strtotime($job->expires_at)) }}</span>
            </div>
            
        </div>
        
        <div class="row bottom-mrg">
            <div class="col-md-8 col-sm-8">
                <div class="detail-desc-caption">
                    <h4>{{$job->companyname}}</h4>
                    <span class="designation">{{$job->jobtitle}}</span>
                    <div>{{$job->companydescription}}</div>
                    <ul>
                        <li><i class="fa fa-briefcase"></i><span>{{$job->jobtype}}</span></li>
                        
                    </ul>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4">
                <div class="get-touch">
                    <h4>Get in Touch</h4>
                    <ul>
                        <li><i class="fa fa-map-marker"></i><span>{{$job->location}}</span></li>
                        <li><i class="fa fa-envelope"></i><span>{{$job->companyemail}}</span></li>
                        
                        
                        <li><i class="fa fa-money"></i><span>{{$job->jobsalary}}</span></li>
                    </ul>
                </div>
            </div>
            
        </div>
        
        <div class="row no-padd">
            <div class="detail pannel-footer">
                
                
                <div class="col-md-12 col-sm-12">
                    <div class="detail-pannel-footer-btn pull-right">
                        <!-- <a href="{{ route('resume') }}" class="footer-btn grn-btn" title="">Submit Resume</a> -->
                        <a href="{{ route('resume') }}" class="footer-btn blu-btn" title="">Submit Resume</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Job Detail End -->

<!-- Job full detail Start -->
<section class="full-detail-description full-detail">
    <div class="container">
        <div class="row row-bottom">
            <h2 class="detail-title">Job Decription </h2>
            <div>{!! $job->jobdecription !!}</div>
        </div>
        
        <div class="row row-bottom">
            <h2 class="detail-title">Qualification and Requirement</h2>
            <div>{!! $job->jobskillrequirement !!}</div>
        </div>
        
        <div class="row row-bottom">
            <h2 class="detail-title"> Responsibilities</h2>
            <div>{!! $job->	jobresponsibilities !!}</div>
        </div>
    </div>
</section>
<!-- Job full detail End -->
@endsection