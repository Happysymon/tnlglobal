@extends('layouts.front')
@section('content')
<!-- End Navigation -->
<div class="clearfix"></div>
			
<!-- Header Title Start -->
<section class="inner-header-title blank">
    <div class="container">
        <h1>Submit Your Resume</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Header Title End -->

<!-- General Detail Start -->
<div class="section detail-desc">
    <div class="container white-shadow">
        <div class="row">
            <div class="detail-pic js">
                <div class="box">
                <input type="hidden" name="upload-pic[]" id="upload-pic" class="inputfile" />
                    <label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
                </div>
            </div>
        </div>
        
        <div class="row bottom-mrg">
            <!-- Error message here -->
			@if(count($errors) > 0)
				@foreach($errors->all() as $error)
					<div class="alert alert-danger mt-3 mx-5 text-center">
						{{ $error }}
					</div>
				@endforeach
			@endif
			<!-- Error message here -->
            <form action="{{ route('postresum') }}" method="post" enctype="multipart/form-data" class="form-row">
                @csrf
                <div class="form-group col-md-6 col-sm-12">
                    <div class="">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Your Name">
                    </div>
                </div>
                
                <div class="form-group col-md-6 col-sm-12">
                    <div class="">
                        <input type="email" name="email" value="{{ old('subject') }}" class="form-control" placeholder="Your Email">
                    </div>
                </div>
                
                <div class="form-group col-md-6 col-sm-6">
                    <div class="">
                        <input type="text" name="pro_title" value="{{ old('title') }}" class="form-control" placeholder="Professional Title">
                    </div>
                </div>
                
                <div class="form-group col-md-6 col-sm-6">
                    <div class="">
                        <select name="field" value="{{ old('field') }}" class="form-control input-lg">
                            <option value="0">All Categories</option>
                            <option value="Software">Software</option>
                            <option value="Hardware">Hardware</option>
                            <option value="Machanical">Machanical</option>
                            <option value="HR/Manager">HR/Manager</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group col-md-12 col-sm-12">
                    <div class="">
                        <input type="file" name="resume" value="{{ old('resume') }}" class="form-control" >
                        <small>Upload your Resume in pdf or docx formats</small>
                        <!-- <small>*Upload your Resume in pdf or docx formats</small> -->
                    </div>
                </div>

                <div class="form-group col-md-12 col-sm-12 py-2">
                    <div class="">
                        <button type="submit" class="btn btn-block btn-primary"> <i class="fa fa-upload" aria-hidden="true"></i> Upload Resume</button>
                    </div>
                </div>
                
            </form>
        </div>
        
    </div>
</div>
<!-- General Detail End -->
@endsection