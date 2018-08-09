@extends('layouts/webs/master')
	@section('slider')
		<!-- breadcrumbs -->
			<div class="breadcrumbs">
				<div class="container">
					<ol class="breadcrumb breadcrumb--ys pull-left">
						<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>										
						<li class="active">Contact</li>
					</ol>
				</div>
			</div>
		<!-- /breadcrumbs -->
	@endsection

	@section('content')
		<!-- map -->
			<div class="content-bottom">
				<div id="map"></div>
			</div>				
			<!-- /map -->
			<section class="container">				
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<h2 class="text-uppercase title-bottom">CONTACTs</h2>
						<ul class="list-icon">
							<li>
								<span class="icon icon-home"></span>
								<strong>Address :</strong> 7563 St. Vicent Place, Glasgow
							</li>
							<li>
								<span class="icon icon-call"></span>
								<strong>Phone:</strong> +777 2345 7885
							</li>
							<li>
								<span class="fa fa-fax"></span>
								<strong>Fax:</strong> +777 2345 7886
							</li>
							<li>
								<span class="icon icon-schedule"></span>
								<strong>Hours:</strong> 7 Days a week from  10:00 am to 6:00 pm
							</li>
							<li>
								<span class="icon icon-mail"></span>
								<strong>E-mail:</strong> <a class="color" href="mailto:info@mydomain.com">info@mydomain.com</a>
							</li>
						</ul>
						<div class="divider divider--sm"></div>
						<div class="social-links social-links--large">
							<ul>
								<li><a class="icon fa fa-facebook" href="http://www.facebook.com/"></a></li>
								<li><a class="icon fa fa-twitter" href="http://www.twitter.com/"></a></li>
								<li><a class="icon fa fa-google-plus" href="http://www.google.com/"></a></li>
								<li><a class="icon fa fa-instagram" href="https://instagram.com/"></a></li>
								<li><a class="icon fa fa-youtube-square" href="https://www.youtube.com/"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-9  col-sm-12">
						<div class="divider divider--lg visible-xs"></div>
						<h2 class="text-uppercase title-bottom">GET IN TOUCH WITH US</h2>
						<form action="#" class="contact-form">
							<!-- input -->
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputName">Name <sup>*</sup></label>
									    <input type="text" class="form-control" id="inputName">
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputEmail">Email <sup>*</sup></label>
									    <input type="email" class="form-control" id="inputEmail">
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputPhone">Phone </label>
									    <input type="text" class="form-control" id="inputPhone">
									  </div>
								</div>
							</div>
							<!-- /input -->
							<!-- textarea -->
							<div class="form-group">
							    <label for="textareaMessage">Message <sup>*</sup></label>
							    <textarea  class="form-control" rows="12"  id="textareaMessage"></textarea>
						   </div>
						   <!-- /textarea -->
						   <!-- button -->
						   <div class="pull-right note">* Required Fields</div>
						   <button class="btn btn--ys btn--xl btn-top" type="submit">Send message</button>
						   <!-- /button -->						   
						</form>						
					</div>
				</div>					
			</section>
	@endsection

	@section('footer')
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="{{mix('js/webs/google_map_init.js')}}"></script>
	@endsection