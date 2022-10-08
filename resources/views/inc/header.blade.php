<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs==================================================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- MINIFIED -->
    {!! SEO::generate(true) !!}
     <!-- fav icon -->
     <link rel="icon" type="image/x-icon" href="/assets/img/logo/tl sign.svg">
    <!-- CSS==================================================-->
    
    <link rel="stylesheet" href="/css/bootstrap-4-utilities.min.css">
    <link rel="stylesheet" href="/assets/plugins/css/plugins.css">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="/assets/css/colors/green-style.css">
</head>
<body>
<div class="Loader"></div>
<div class="wrapper">
    <nav class="navbar navbar-default navbar-fixed  navbar-light white bootsnav">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i
                    class="fa fa-bars"></i></button>
            <div class="navbar-header pb-2"><a class="navbar-brand" href="{{ route('home') }}">
                <img src="/assets/img/logo/tl logo.png" class="logo logo-display" alt="">
                <img src="/assets/img/logo/tl logo.png" class="logo PB-5" alt=""></a></div>
            <div class="collapse navbar-collapse mb-5" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <!-- <li><a href="login.html"><i class="fa fa-pencil" aria-hidden="true"></i>SignUp</a></li>
                    <li><a href="pricing.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Pricing</a></li> -->
                    <li class="left-br"><a href="{{ route('resume') }}" class="signin">Submit Resume</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('jobs') }}">Jobs</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="clearfix"></div>