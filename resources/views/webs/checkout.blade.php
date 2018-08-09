@extends('layouts/webs/master')
	@section('header')
		<style type="text/css">
			
		</style>
	@endsection
	@section('slider')
		<!-- breadcrumbs -->
			<div class="breadcrumbs">
				<div class="container">
					<ol class="breadcrumb breadcrumb--ys pull-left">
						<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>										
						<li class="active">Checkout</li>
					</ol>
				</div>
			</div>
		<!-- /breadcrumbs -->
	@endsection
	@section('content')
		<div class="container">
			<div id="pageContent">
				<div class="container">				
					<!-- title -->
					<div class="title-box">
						<h1 class="text-center text-uppercase title-under">Checkout</h1>
					</div>
					<!-- /title -->
					<div class="row">					
						<div class="col-sm-4 col-xs-12">
							<div class="pull-left">
								<button type="submit" class="btn btn--ys"><span class="icon icon-vpn_key"></span>Login</button>
							</div>						
						</div>
						<div class="col-sm-8  col-xs-12">
							<div class="visible-xs divider--sm"></div>
							<div class="pull-right pull-extra-left">
								<div class="dropdown select-basket">
									<a class="dropdown-toggle" data-toggle="dropdown">
										<span class="caret"></span>
										<span class="icon icon-shopping_basket"></span> {{Cart::total()}}										
									</a>
									<div class="dropdown-menu  " role="menu">
										<div class="select-basket__inner">
											<h6 class="font18">REVIEW YOUR ORDER</h6>
											<table class="select-basket__table">
												<thead>
													<tr>
														<th>Product</th>
														<th>Qty</th>
														<th>Subtotal</th>
													</tr>
												</thead>
												<tbody>
													@foreach(Cart::content() as $row)
														<tr>
															<td>
																<span class="color">{{$row->name}}</span>
															</td>
															<td>
																{{$row->qty}}
															</td>
															<td>
																<b class="color">{{$row->price}}</b>
															</td>
														</tr>
													
													@endforeach																					
												</tbody>
												<tfoot>
													<tr>
														<td></td>
														<th>Subtotal:</th>
														<td>{{Cart::total()}}</td>
													</tr>
													<tr>
														<td></td>
														<th>Tax:</th>
														<td>{{Cart::tax()}}</td>
													</tr>
												</tfoot>
											</table>
										</div>								
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<!--================= col-left =================-->
						<div class="col-md-12 col-lg-4">
							<!-- NAME & ADDRESS -->
							<h2 class="title-checkout">
								<span class="icon icon-person icon-large color"></span>
								NAME &amp; ADDRESS
							</h2>
							<form >
								<!-- row-col-2 -->
								<div class="row">
									<div class="col-md-12 col-lg-12 col-xl-6">
										<div class="form-group">
										    <label for="checkoutFormFirstName">First Name <sup>*</sup></label>
										    <input type="text" class="form-control" id="checkoutFormFirstName">
										</div>	
										<div class="form-group">
										    <label for="checkoutFormCompany">Company</label>
										    <input type="text" class="form-control" id="checkoutFormCompany">
										</div>
									</div>
									<div class="col-md-12 col-lg-12 col-xl-6">
										<div class="form-group">
											<span class="note pull-right">* Required Fields</span>
										    <label for="checkoutFormLastName">Last Name  <sup>*</sup></label>
										    <input type="text" class="form-control" id="checkoutFormLastName">
										</div>
										<div class="form-group">
										    <label for="checkoutFormEmailAddress">Email Address  <sup>*</sup></label>
										    <input type="email" class="form-control" id="checkoutFormEmailAddress">
										</div>	
									</div>
								</div>
								<!-- /row-col-2 -->
								<div class="form-group">
								    <label for="checkoutFormAddress11">Address 1 <sup>*</sup></label>
								    <input type="text" class="form-control" id="checkoutFormAddress11">
								</div>						
								<!-- /row-col-2 -->
								<div class="checkbox-group form-group-top clearfix">
				                  <input type="checkbox" id="checkBox1">
				                  <label for="checkBox1"> 
				                  	<span class="check"></span>
				                  	<span class="box"></span>
				                  	Create an account for later use
				                  </label>
				                </div>
								
							    <div class="checkbox-group form-group-top clearfix">
				                  <input type="checkbox" id="checkBox22">
				                  <label for="checkBox2"> 
				                  	<span class="check"></span>
				                  	<span class="box"></span>
				                  	Ship to this address
				                  </label>
				                </div>
							</form>
							<div class="divider--xl"></div>
							<!-- /NAME & ADDRESS  -->
							<!-- SHIPPING ADDRESS -->
							<h2 class="title-checkout">
								<span class="icon icon-store color"></span>
								SHIPPING ADDRESS							
							</h2>
							<!-- row-col-2 -->
								<div class="row">
									<div class="col-md-12 col-lg-12 col-xl-6">
										<div class="form-group">
										    <label for="checkoutFormFirstName1">First Name <sup>*</sup></label>
										    <input type="text" class="form-control" id="checkoutFormFirstName1">
										</div>	
										<div class="form-group">
										    <label for="checkoutFormCompany1">Company</label>
										    <input type="text" class="form-control" id="checkoutFormCompany1">
										</div>
									</div>
									<div class="col-md-12 col-lg-12 col-xl-6">
										<div class="form-group">										
										    <label for="checkoutFormLastName1">Last Name  <sup>*</sup></label>
										    <input type="text" class="form-control" id="checkoutFormLastName1">
										</div>
										<div class="form-group">
										    <label for="checkoutFormEmailAddress1">Email Address  <sup>*</sup></label>
										    <input type="email" class="form-control" id="checkoutFormEmailAddress1">
										</div>	
										<div class="form-group">
										    <label for="checkoutFormEmailAddress1">Telephone <sup>*</sup></label>
										    <input type="phone" class="form-control" id="checkoutFormEmailAddress1">
										</div>
									</div>
								</div>
								<!-- /row-col-2 -->
								<div class="form-group">
								    <label for="checkoutFormAddress1">Address 1 <sup>*</sup></label>
								    <input type="text" class="form-control" id="checkoutFormAddress1">
								</div>						
								
							<div class="divider--lg"></div>
							<!-- /SHIPPING ADDRESS -->
						</div>
						<!--================= /col-left =================-->
						<!--================= col-center =================-->
						<div class="col-md-12 col-lg-4">
							<!-- SHIPPING METHOD -->
							<h2 class="title-checkout">
								<span class="icon color icon-local_shipping"></span>
								SHIPPING METHOD
							</h2>
							<p>Sorry, no quotes are available for this order at this time.</p>
							<form >
								<h6 class="color">DO YOU HAVE ANY GIFT ITEMS IN YOUR ORDER?</h6>
								<div class="divider--md"></div>
								<div class="checkbox-group clearfix">
				                  <input type="checkbox" id="checkBox3">
				                  <label for="checkBox3"> 
				                  	<span class="check"></span>
				                  	<span class="box"></span>
				                  	Add gift options.
				                  </label>
				                </div>							
							    <h6 class="color">GIFT OPTIONS FOR THE ENTIRE ORDER.</h6>
							    <div class="divider--md"></div>
								<div class="checkbox-group clearfix">
				                  <input type="checkbox" id="checkBox4">
				                  <label for="checkBox4"> 
				                  	<span class="check"></span>
				                  	<span class="box"></span>
				                  	Add gift options for the Entire Order
				                  </label>
				                </div>									
							     <p>
							     	You can leave this box blank if you do not wish to add a gift message for whole order.
							     </p>
							     <div class="form-group">
								    <label for="checkoutFormFrom">From </label>
								    <input type="text" class="form-control" id="checkoutFormFrom">
								</div>
								<div class="form-group">
								    <label for="checkoutFormTo1">To </label>
								    <input type="text" class="form-control" id="checkoutFormTo1">
								</div>
								<div class="form-group">
								    <label for="checkoutFormMessage">Message</label>
								    <textarea class="form-control" id="checkoutFormMessage" rows="6"></textarea>							   
								</div>
								<div class="divider--md"></div>
								<h6 class="color">GIFT OPTIONS FOR INDIVIDUAL ITEMS</h6>
							    <div class="divider--md"></div>
								<div class="checkbox-group">
				                  <input type="checkbox" id="checkBox2">
				                  <label for="checkBox2"> 
				                  	<span class="check"></span>
				                  	<span class="box"></span>
				                  	Add gift options for Individual Items
				                  </label>
				                </div>
							    <p>
							      	You can leave this box blank if you do not wish to add a gift message for the item.
							    </p>
							    <div class="row">
							    	<div class="col-md-12 col-lg-12 col-xl-6">
							    		<img src="images/product/product-16.jpg" class="img-responsive"  alt="">
							    		<div class="divider--md hidden-xl hidden-xl"></div>
							    	</div>
							    	<div class="col-md-12 col-lg-12 col-xl-6">
							    		<h6 class="color text-uppercase">Ut enim ad minim veniam</h6>
							    		<div class="form-group">
										    <label for="checkoutFormFrom1">From</label>
										    <input type="text" class="form-control" id="checkoutFormFrom1">
										</div>
										<div class="form-group">
										    <label for="checkoutFormTo">To</label>
										    <input type="text" class="form-control" id="checkoutFormTo">
										</div>
										<div class="form-group">
										    <label for="checkoutFormMessage1">Message</label>
										    <textarea class="form-control" id="checkoutFormMessage1" rows="4"></textarea>		
										</div>
							    	</div>
							    </div>
							</form>
							
							<div class="divider--lg"></div>
							<!-- /SHIPPING METHOD -->
							<!-- Discount Codes -->												
								
							<div class="collapse-block no-border-bottom open">
								<h2 class="collapse-block__title title-large-icon text-uppercase">
									<span class="icon icon-card_giftcard color"></span>
									Discount Codes
								</h2>
								<div class="collapse-block__content">
									<form >																	
										<label for="checkoutFormCouponCode">Enter your coupon code:</label>
										<div class="input-group">									    
										    <input type="text" class="form-control" id="checkoutFormCouponCode">
										    <div class="input-group-btn">
										    	<button type="submit" class="btn btn-left btn--ys">Apply</button>
										    </div>									    
										</div>								
									</form>	
								</div>
							</div>		
							<!-- /Discount Codes -->
						</div>
						<!--================= /col-center =================-->
						<!--================= col-right =================-->
						<div class="col-md-12 col-lg-4">
							<!-- Payment Method -->
							<h2 class="title-checkout">
								<span class="icon icon-account_balance_wallet color"></span>
								Payment Method
							</h2>
							<!-- /Payment Method -->
							<div class="form-group form-group-top clearfix">
						     	<label class="radio">
		                       		<input id="radio1" type="radio" name="radios">
		                        	<span class="outer">
		                        		<span class="inner"></span>
		                        	</span>
		                        	Ship to this address
		                        </label>
						    </div>
						    <div class="form-group clearfix">								      	  						      
		                          <label class="radio">
		                            <input id="radio2" type="radio" name="radios" checked>
		                            <span class="outer">
		                            	<span class="inner"></span>
		                            </span>
		                            Ship to different address
		                          </label>
						    </div>
						    <div class="form-group">
							    <label for="checkoutFormNameOnCard">Name on Card <sup>*</sup></label>
							    <input type="text" class="form-control" id="checkoutFormNameOnCard">
							</div>
							<div class="form-group">
							    <label for="checkoutFormCreditCartType">Credit Card Type  <sup>*</sup></label>
							    <select  id="checkoutFormCreditCartType" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">                  
									<option>Type</option>						                    
				                </select>
							</div>
							<div class="form-group">
							    <label for="checkoutFormCreditCartNumber">Credit Card Number  <sup>*</sup></label>
							    <input type="text" class="form-control" id="checkoutFormCreditCartNumber">
							</div>
							<div class="form-group">
							    <label>Expiration Date <sup>*</sup></label>
							</div>
							<!-- row-col-2 -->
							<div class="row">
								<div class="col-md-12 col-lg-12 col-xl-6">
									<div class="form-group">
									    <select  id="checkoutFormCountry" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">                 
											<option>text</option>						                    
						                </select>
									</div>																
								</div>	
								<div class="col-md-12 col-lg-12 col-xl-6">
									<div class="form-group">
									     <select  id="checkoutFormCountry2" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">                
											<option>text</option>						                    
						                </select>
									</div>
								</div>						
							</div>						
							<!-- /row-col-2 -->
							<div class="form-group">
							    <label for="checkoutFormCardVerificationNumber">Card Verification Number   <sup>*</sup></label>
							    <input type="text" class="form-control" id="checkoutFormCardVerificationNumber">
							</div>
							<a class="link-underline" href="#">What is this?</a>
							<div class="divider--xl"></div>
							<!-- GRAND TOTAL -->
							<div class="card card--padding fill-bg">
								<table class="table-total-checkout">								
									<tbody>
										<tr>
											<th>GRAND TOTAL:</th>
											<td>$56.00</td>
										</tr>
									</tbody>
								</table>
								<a href="#" class="btn btn--ys btn--full btn--xl">Place Order Now <span class="icon icon-reply icon--flippedX"></span></a>							
							</div>
							<!-- /GRAND TOTAL -->
						</div>
						<!--================= /col-right =================-->			
					</div>								
				</div>
			</div>	
		</div>


	@endsection
	@section('modal')
    	
    @endsection
	
	@section('footer')

				
		
	@endsection	