@extends('layouts.front')
@section('content')
<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
	<div class="container">
		<h1>Contact Us</h1>
	</div>
</section>
	<div class="clearfix"></div>
	<!-- Title Header End -->
	
	<!-- Contact Page Section Start -->
	<section class="contact-page">
		<div class="container">
			<h2>Drop A Mail</h2>
		
			<div class="col-md-4 col-sm-4">
				<div class="contact-box">
					<i class="fa fa-map-marker"></i>
					<p>108 Belgrave Gate, 941 Uxbridge Road, Leicester LE1 3GR, Uxbridge UB10 0NJ</p>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-4">
				<div class="contact-box">
					<i class="fa fa-envelope"></i>
					<p>career@tnlglobal-recrut.com<br>info@tnlglobal-recrut.com</p>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-4">
				<div class="contact-box">
					<i class="fa fa-phone"></i>
					<p>UK: 01 123 456 7895<br>Ind: +91 123 546 8758</p>
				</div>
			</div>
			
		</div>
	</section>
	<!-- contact section End -->
	
	<!-- contact form -->
	<section class="contact-form">
		<div class="container">
			<h2>Drop A Mail</h2>
			<!-- Error message here -->
			@if(count($errors) > 0)
				@foreach($errors->all() as $error)
					<div class="alert alert-danger mt-3 text-center">
						{{ $error }}
					</div>
				@endforeach
			@endif
			<!-- Error message here -->
			<form action="{{ route('postmsg') }}" method="post">
				@csrf
				<div class="col-md-6 col-sm-6">
					<input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Your Name">
				</div>
				
				<div class="col-md-6 col-sm-6">
					<input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Your Email">
				</div>
				
				<div class="col-md-6 col-sm-6">
					<input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone Number">
				</div>
				
				<div class="col-md-6 col-sm-6">
					<input type="text" name="subject" value="{{ old('subject') }}" class="form-control" placeholder="Subject">
				</div>
				
				<div class="col-md-12 col-sm-12">
					<textarea class="form-control" name="message"  placeholder="Message">{{ old('message') }}</textarea>
				</div>
				
				<div class="col-md-12 col-sm-12">
					<button type="submit" class="btn btn-block btn-primary">Submit</button>
				</div>
			</form>
		</div>
		
	</section>
	<!-- Contact form End -->
	<div class="container" id="loca">
		<div class="row text-center">
			<div class="card shadow col-md-12 mt-4">
					<div class="card-body">
						<h3>London Office</h3>
						<h4>Email Address:</h4>
						<p>info@tnlglobal-recrut.com</p>
						<h4>Physical Address:</h4>
						<p> 108 Belgrave Gate, 941 Uxbridge Road, Leicester LE1 3GR, Uxbridge UB10 0NJ </p>
						<div class="google-map pt-4">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30973.25857592879!2d33.73572612939007!3d-13.978991442134925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d3e903ec7121%3A0x3de15bac5c7d703!2sCorporate%20Mall!5e0!3m2!1sen!2smw!4v1662216692296!5m2!1sen!2smw" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
				<div class="card shadow col-md-12 mt-4">
					<div class="card-body">
						<h3>India Office</h3>
						<h4>Email Address:</h4>
						<p>info@tnlglobal-recrut.com</p>
						<h4>Physical Address:</h4>
						<p> Mahadev shelar , disa compound, room 1 , near link road, Jogeshwari west, Mumbai :- 400102</p>
						<div class="google-map pt-4">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30973.25857592879!2d33.73572612939007!3d-13.978991442134925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d3e903ec7121%3A0x3de15bac5c7d703!2sCorporate%20Mall!5e0!3m2!1sen!2smw!4v1662216692296!5m2!1sen!2smw" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
				<div class="card shadow col-md-12 mt-4">
					<div class="card-body">
						<h3>Morocco Office</h3>
						<h4>Email Address:</h4>
						<p>info@tnlglobal-recrut.com</p>
						<h4>Physical Address:</h4>
						<p> Shop N 7, Bldg 97,Project Albahja , Mhamid 10Marrakech, Morocco</p>
						<div class="google-map pt-4">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30973.25857592879!2d33.73572612939007!3d-13.978991442134925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d3e903ec7121%3A0x3de15bac5c7d703!2sCorporate%20Mall!5e0!3m2!1sen!2smw!4v1662216692296!5m2!1sen!2smw" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
				<div class="card shadow col-md-12 mt-4">
					<div class="card-body">
						<h3>Malawi Office</h3>
						<h4>Email Address:</h4>
						<p>info@tnlglobal-recrut.com</p>
						<h4>Phone:</h4>
						<p>+265 997861985</p>
						<h4>Physical Address:</h4>
						<p> Area 4, Corporate mall, Lilongwe, Malawi</p>
						<div class="google-map pt-4">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30973.25857592879!2d33.73572612939007!3d-13.978991442134925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d3e903ec7121%3A0x3de15bac5c7d703!2sCorporate%20Mall!5e0!3m2!1sen!2smw!4v1662216692296!5m2!1sen!2smw" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			
		</div>
	</div>
@endsection