@extends('layouts/webs/master')
	@section('slider')
		<!-- breadcrumbs -->
			<div class="breadcrumbs">
				<div class="container">
					<ol class="breadcrumb breadcrumb--ys pull-left">
						<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>										
						<li class="active">Account Login</li>
					</ol>
				</div>
			</div>
		<!-- /breadcrumbs --> 
	@endsection
	@section('content')
		<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">LOGIN OR CREATE AN ACCOUNT</h1>
				</div>
				<!-- /title -->		
				<div class="row">
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xl-offset-2">
						 <div class="login-form-box">
						 	 <h3 class="color small">NEW CUSTOMER</h3>
				             <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				            <br>
				            <a href="{{asset('register')}}"><button class="btn btn--ys btn--xl" ><span class="icon icon-person_add"></span>CREATE AN ACCOUNT</button></a>
						 </div>
					</section>
					<div class="divider divider--md visible-sm visible-xs"></div>
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
						<div class="login-form-box">
							<h3 class="color small">{{ __('LOGIN') }} CUSTOMER</h3>
							<p>
								If you have an account with us, please log in.
							</p>
				            <form action="{{ route('login') }}" method="POST">
				              	@csrf
				                <div class="form-group">
				                	<label for="email">{{ __('E-Mail Address') }} <sup>*</sup></label>
				                	<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}" autofocus required="">
				                  	@if ($errors->has('email'))
	                                    <span class="invalid-feedback">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
                                	@endif
				                </div>
				                <div class="form-group">
				                  	<label for="password">{{ __('Password') }} <sup>*</sup></label>
				                  	<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="password" >
				                  	@if ($errors->has('password'))
	                                    <span class="invalid-feedback">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
                                	@endif
				                </div>
				                <div class="row">
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<button type="submit" class="btn btn--ys btn-top btn--xl"><span class="icon icon-vpn_key"></span>{{ __('Login') }}</button>			               			
				                	</div>
				                	<div class="divider divider--md visible-xs"></div>
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<div class="pull-right note btn-top">* Required Fields</div>
				                	</div>
				                </div>			               			                
				                <p class="btn-top">
		               				<a class="link-color" href="{{ route('password.request') }}">Forgot Your Password?</a>
		               			</p>
				            </form>
						</div>
					</section>
				</div>						
			</div>
	@endsection