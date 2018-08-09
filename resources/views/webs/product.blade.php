@extends('layouts/webs/master')
	@section('header')
	<style type="text/css">
		img {   
			max-width: 100%;
		}
 		ul.color-li .active{
			border: 2px solid red !important;
			border-radius: 30%;
		}
		ul.size-li .active .select-size{
			background:red;
		}
		.preview {  
		display: -webkit-box;   
		display: -webkit-flex;  
		display: -ms-flexbox;   
		display: flex;  
		-webkit-box-orient: vertical;   
		-webkit-box-direction: normal;  
		-webkit-flex-direction: column; 
		-ms-flex-direction: column; 
		flex-direction: column;
		} 
		 
		.preview-pic {  
		-webkit-box-flex: 1;    
		-webkit-flex-grow: 1;   
		-ms-flex-positive: 1;   
		flex-grow: 1;
		}
		 
		.preview-thumbnail.nav-tabs {   
		border: none;   
		margin-top: 15px;
		}
		 
		.preview-thumbnail.nav-tabs li {    
		width: 18%; 
		margin-right: 2.5%;
		}
		 
		.preview-thumbnail.nav-tabs li img {    
		max-width: 100%;    
		display: block;
		}
		 
		.preview-thumbnail.nav-tabs li a {  
		padding: 0; 
		margin: 0;  
		cursor:pointer;
		}
		 
		.preview-thumbnail.nav-tabs li:last-of-type {   
		margin-right: 0;
		}
		 
		.tab-content {  
		overflow: hidden;
		}
		 
		.tab-content img {  
		width: 100%;    
		-webkit-animation-name: opacity;    
		animation-name: opacity; 
		-webkit-animation-duration: .3s; 
		animation-duration: .3s;
		}
	</style>
	@endsection
	@section('slider')
		<!-- breadcrumbs -->
			<div class="breadcrumbs">
				<div class="container">
					<ol class="breadcrumb breadcrumb--ys pull-left">
						<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>										
						<li class="active">Product Detail</li>
					</ol>
				</div>
			</div>
		<!-- /breadcrumbs -->
	@endsection
	@section('content')
		<section class="content offset-top-0">
			<div class="container">
				<div class="row product-info-outer">
					<div id="productPrevNext" class="hidden-xs hidden-sm">
						<a href="{{asset('product')}}/{{$previous}}" class="product-prev"><img src="{{asset('')}}images/product/product-2.jpg" alt="" /></a>
						<a href="{{asset('product')}}/{{$next}}" class="product-next"><img src="{{asset('')}}images/product/product-3.jpg" alt="" /></a>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 hidden-xs">
								<div class="product-main-image">
									<div class="product-main-image__item"><img class="product-zoom" src='public/images/product/product-big-1.jpg' data-zoom-image="public/images/product/product-big-1-zoom.jpg" alt="" /></div>
									<div class="product-main-image__zoom"></div>
								</div>
								<div class="preview col-md-12"> 
					     			<div class="preview-pic tab-content"> 
					      				 
					     			</div> 
						     		<ul class="preview-thumbnail nav nav-tabs">
								    	
						     		</ul> 
						    	</div>
								<div class="smallGallery">
									<ul id="smallGallery" class="col-md-12" style="list-style-type: none">
										<li ><img src="{{asset(\Storage::url($products->thumbnail))}}" alt="" class="img-responsive" style="width: 500px" /><li>
									</ul>
								</div>
							</div>
							<div class="product-info col-sm-6 col-md-6 col-lg-6 col-xl-6">
								<div class="wrapper hidden-xs">
									{{-- product --}}
									<div class="product-info__sku pull-left product_id" data-id='{{$products->id}}'>SKU: <strong>{{$products->name}}</strong></div>
									<div class="product-info__availability pull-right">Availability: <strong class="color"> {{ isset($col) ? 'In Stock' : 'Not In Stock' }}</strong></div>
								</div>
								<div class="product-info__title">
									<h2>Lorem ipsum dolor sit ctetur</h2>
								</div>
								<div class="wrapper visible-xs">
									<div class="product-info__sku pull-left">SKU: <strong>{{$products->code}}</strong></div>
									<div class="product-info__availability pull-right">Availability:   <strong class="color"> {{ isset($col) ? 'In Stock' : 'Not In Stock' }}</strong></div>
								</div>
								
								<div class="price-box product-info__price"><span class="price-box__new">{{$products->price}}</span> <span class="price-box__old"></span></div>
								<div class="product-info__review">
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
								</div>
								<div class="divider divider--xs product-info__divider hidden-xs"></div>
								<div class="product-info__description hidden-xs">
									<div class="product-info__description__brand"><img src="{{asset('')}}images/custom/brand.png"  alt="" /> </div>
									<div class="product-info__description__text">{{$products->description}}</div>
								</div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">COLOR:</span>  Red + $10.00 *</div>
									<div class="pull-right required">* Required Fields</div>
								</div>
								<ul class="options-swatch options-swatch--color options-swatch--lg color-li">
									@if(isset($col))
										@foreach($col[$products->code] as $key=>$value)
											<li class="color_li" style="background: {{$value}}; border: 1px solid #da" data-id={{$key}}><a href="#"><span class="swatch-label"></span></a></li>
										
										@endforeach
									
									@endif
								</ul>
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">SIZE:</span></div>
									<div class="pull-left required">*</div>
								</div>
								<ul class="options-swatch options-swatch--size options-swatch--lg size-li">
									
								</ul>
								<div class="divider divider--sm"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="qty-label">QTY:</span></div>
									<div class="pull-left">											
										<!--  -->
										<div class="number input-counter">
										    <span class="minus-btn"></span>
										    <input type="text" value="1" size="5" name="quantity" />
										    <span class="plus-btn"></span>
										</div>
										<!-- / -->
									</div>
									<div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl addcart"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
								</div>
								<ul class="product-link">
									<li class="text-right"><a href="#"><span class="icon icon-favorite_border  tooltip-link"></span><span class="text">Add to wishlist</span></a></li>
									<li class="text-left"><a href="#"><span class="icon icon-sort  tooltip-link"></span><span class="text">Add to compare</span></a></li>
								</ul>									
							</div>	
						</div>
						<div class="content">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs nav-tabs--ys1" role="tablist">
								<li class="active"><a href="#Tab1"  role="tab" data-toggle="tab" class="text-uppercase">DESCRIPTION</a></li>
								<li><a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">Reviews</a></li>
								<li><a href="#Tab3" role="tab" data-toggle="tab" class="text-uppercase">Tags</a></li>
								<li><a href="#Tab4" role="tab" data-toggle="tab" class="text-uppercase">CUSTOM TAB</a></li>
								<li><a href="#Tab5" role="tab" data-toggle="tab" class="text-uppercase">Sizing Guide</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content tab-content--ys nav-stacked">
								<div role="tabpanel" class="tab-pane active" id="Tab1">
									<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<div class="divider divider--md"></div>
									<table class="table table-params">
										<tbody>
											<tr>
												<td class="text-right"><span class="color">PROOF</span></td>
												<td>PDF Proof</td>
											</tr>
											<tr>
												<td class="text-right"><span class="color">SAMPLES</span></td>
												<td>Digital, Printed</td>
											</tr>
											<tr>
												<td class="text-right"><span class="color">WRAPPING</span></td>
												<td>Yes,  No</td>
											</tr>
											<tr>
												<td class="text-right"><span class="color">UV GLOSS COATING</span></td>
												<td>Yes</td>
											</tr>
											<tr>
												<td class="text-right"><span class="color">SHRINK WRAPPING</span></td>
												<td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>
											</tr>
											<tr>
												<td class="text-right"><span class="color">WEIGHT</span></td>
												<td>0.05, 0.06, 0.07ess cards</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div role="tabpanel" class="tab-pane" id="Tab2">
									<h5><strong class="color">CUSTOMER REVIEWS 1 ITEM(S)</strong></h5>
									<p> GREAT!</p>
									<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<div class="divider divider--xs"></div>
									<table class="table table-params">
										<tbody>
											<tr>
												<td class="text-right"><span class="color">QUALITY</span></td>
												<td>
													<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												</td>
											</tr>
											<tr>
												<td class="text-right"><span class="color">PRICE</span></td>
												<td>
													<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												</td>
											</tr>
											<tr>
												<td class="text-right"><span class="color">VALUE</span></td>
												<td>
													<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												</td>
											</tr>
										</tbody>
									</table>
									<p class="color-light">Review by User / (posted on 16/9/2016)</p>
									<div class="divider divider--xs"></div>
									<h5><strong class="color">WRITE YOUR OWN REVIEW</strong></h5>
									<p><span class="color">YOU'RE REVIEWING:</span>  Lorem ipsum dolor sit amet conse ctetur</p>
									<p><span class="color">HOW DO YOU RATE THIS PRODUCT?</span></p>
									<div class="divider divider--xs"></div>
									<div class="table-responsive">
										<table class="table table-params">
											<tbody>
												<tr>
													<td class="text-right"></td>
													<td class="text-center">
														<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
													</td>
													<td class="text-center">
														<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
													</td>
													<td class="text-center">
														<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
													</td>
													<td class="text-center">
														<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
													</td>
													<td class="text-center">
														<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
													</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">QUALITY</span></td>
													<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">PRICE</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">VALUE</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
													<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="divider divider--xs"></div>
									<form action="#" class="contact-form">
										<label>Nickname<span class="required">*</span></label>
										<input type="text" class="input--ys input--ys--full">
										<label>Summary of Your Review<span class="required">*</span></label>
										<input type="text" class="input--ys input--ys--full">
										<label>Review<span class="required">*</span></label>
										<textarea class="textarea--ys input--ys--full"></textarea>
										<div class="divider divider--xs"></div>
										<button type="submit" class="btn btn--ys text-uppercase">Submit Review</button>
									</form>
								</div>
								<div role="tabpanel" class="tab-pane" id="Tab3">
									<h5><strong class="color">OTHER PEOPLE MARKED THIS PRODUCT WITH THESE TAGS:</strong></h5>
									<p>Pattern (1)</p>
									<div class="divider divider--xs"></div>
									<h5><strong class="color">ADD YOUR TAGS:</strong></h5>
									<form action="#" class="contact-form">
										<input type="text" class="input--ys input--ys--full">
										<p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
										<div class="divider divider--xs"></div>
										<button type="submit" class="btn btn--ys">Add Tags</button>
									</form>
								</div>
								<div role="tabpanel" class="tab-pane" id="Tab4">
									<h5><strong class="color text-uppercase">Lorem ipsum dolor sit amet conse ctetur adipisicing elit</strong></h5>
									<div class="divider divider--xs"></div>
									<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  orem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
									<ul class="marker-list-circle">
										<li><span class="text-uppercase">Lorem ipsum dolor sit amet</span></li>
										<li><span class="text-uppercase">Conse ctetur adipisicing</span></li>
										<li><span class="text-uppercase">Elit sed do eiusmod tempor</span></li>
										<li><span class="text-uppercase">Incididunt ut laborev</span></li>
										<li><span class="text-uppercase">Et dolore magna aliqua</span></li>
										<li><span class="text-uppercase">Ut enim ad min</span></li>
									</ul>
								</div>
								<div role="tabpanel" class="tab-pane" id="Tab5">
									<h5><strong class="color text-uppercase">Clothing - Single Size Conversion (Continued)</strong></h5>
									<div class="divider divider--xs"></div>
									<div class="table-responsive">
										<table class="table table-params">
											<tbody>
												<tr>
													<td class="text-right"><span class="color">UK</span></td>
													<td>
														<ul class="sizes-row">
															<li>18</li>
															<li>20</li>
															<li>22</li>
															<li>24</li>
															<li>26</li>
														</ul>
													</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">European</span></td>
													<td>
														<ul class="sizes-row">
															<li>46</li>
															<li>48</li>
															<li>50</li>
															<li>52</li>
															<li>54</li>
														</ul>
													</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">US</span></td>
													<td>
														<ul class="sizes-row">
															<li>14</li>
															<li>16</li>
															<li>18</li>
															<li>20</li>
															<li>22</li>
														</ul>
													</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">Australia</span></td>
													<td>
														<ul class="sizes-row">
															<li>8</li>
															<li>10</li>
															<li>12</li>
															<li>14</li>
															<li>16</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>						
					<div class="custom-product-block col-xl-4 visible-xl">
						<div class="delivery-banner" onclick="window.location.href = '#'">
							<div class="delivery-banner__icon"><span class="icon-redeem"></span></div>
							<div class="delivery-banner__text">
								<h3>SPECIAL OFFER 1+1=3</h3>
								<h5>Get a gift!</h5>
								<p>Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.</p>
							</div>
						</div>
						<div class="delivery-banner" onclick="window.location.href = '#'">
							<div class="delivery-banner__icon"><span class="icon-card_membership"></span></div>
							<div class="delivery-banner__text">
								<h3>FREE REWARD CARD</h3>
								<h5>Worth 10$, 50$, 100$</h5>
								<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
							</div>
						</div>
						<div class="delivery-banner" onclick="window.location.href = '#'">
							<div class="delivery-banner__icon"><span class="icon-local_shipping"></span></div>
							<div class="delivery-banner__text">
								<h3>Free Shipping</h3>
								<h5>on orders over $100</h5>
								<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
							</div>
						</div>
						<div class="delivery-banner" onclick="window.location.href = '#'">
							<div class="delivery-banner__icon"><span class="icon-replay_5"></span></div>
							<div class="delivery-banner__text">
								<h3>Order Return</h3>
								<h5>Returns within 5 days</h5>
								<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
							</div>
						</div>
						<div class="divider-line"></div>
						<h4 class="text-uppercase">Related Products</h4>
						<p>Check items to add to the cart or <a href="#" class="color">select all</a></p>
						<div class="vertical-carousel vertical-carousel-2 with-checkbox offset-top-40">
							<div class="vertical-carousel__item">
								<div class="vertical-carousel__item__select pull-left">
									<div class="checkbox-group"><input type="checkbox" name="checkbox1" value="product1" id="checkBox1"><label for="checkBox1"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
								</div>
								<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-3.jpg" alt=""></a></div>
								<div class="vertical-carousel__item__title">
									<h2><a href="#">Quis nostrud exercit ation</a></h2>
								</div>
								<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
							</div>
							<div class="vertical-carousel__item">
								<div class="vertical-carousel__item__select pull-left">
									<div class="checkbox-group"><input type="checkbox" name="checkbox2" value="product2" id="checkBox2"><label for="checkBox2"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
								</div>
								<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-4.jpg" alt=""></a></div>
								<div class="vertical-carousel__item__title">
									<h2><a href="#">Quis nostrud exercit ation</a></h2>
								</div>
								<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
							</div>
							<div class="vertical-carousel__item">
								<div class="vertical-carousel__item__select pull-left">
									<div class="checkbox-group"><input type="checkbox" name="checkbox3" value="product3" id="checkBox3"><label for="checkBox3"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
								</div>
								<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a></div>
								<div class="vertical-carousel__item__title">
									<h2><a href="#">Quis nostrud exercit ation</a></h2>
								</div>
								<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
							</div>
							<div class="vertical-carousel__item">
								<div class="vertical-carousel__item__select pull-left">
									<div class="checkbox-group"><input type="checkbox" name="checkbox4" value="product4" id="checkBox4"><label for="checkBox4"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
								</div>
								<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-2.jpg" alt=""></a></div>
								<div class="vertical-carousel__item__title">
									<h2><a href="#">Quis nostrud exercit ation</a></h2>
								</div>
								<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>			
		<!-- related products -->
		<section class="content">
			<div class="container">
				<!-- title -->
				<div class="title-with-button">
					<div class="carousel-products__center pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
					<h2 class="text-left text-uppercase title-under pull-left">YOU MAY ALSO BE INTERESTED IN THE FOLLOWING PRODUCT(S)</h2>
				</div>
				<!-- /title --> 
				<!-- carousel -->
				<div class="carousel-products row" id="carouselRelated">
					@if(!empty($category))
						@foreach($category as $row)
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
								<!-- product -->
								<div class="product">
									<div class="product__inside">
										<!-- product image -->
										<div class="product__inside__image">
											<a href="{{asset('product')}}/{{$row->id}}"> <img src="{{asset('storage')}}/{{$row->thumbnail}}" alt=""> </a> 
											<!-- quick-view --> 
											<!-- /quick-view --> 
										</div>
										<!-- /product image --> 
										<!-- product name -->
										<div class="product__inside__name">
											<h2><a href="{{asset('product')}}/{{$row->id}}">{{$row->name}}</a></h2>
										</div>
										<!-- /product name -->                 
										<!-- product description --> 
										<!-- visible only in row-view mode -->
										<div class="product__inside__description row-mode-visible"> {{$row->description}}</div>
										<!-- /product description -->                 <!-- product price -->
										<div class="product__inside__price price-box">{{$row->price}}</div>
										<!-- /product price -->                 <!-- product review --> 
										<!-- visible only in row-view mode -->
										<div class="product__inside__review row-mode-visible">
											<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
											<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
										</div>
										<!-- /product review --> 
										<div class="product__inside__hover">
											<!-- product info -->
											<div class="product__inside__info">
												
												<ul class="product__inside__info__link hidden-xs">
													<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
													<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
												</ul>
											</div>
											<!-- /product info --> 
											<!-- product rating -->
											<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
											<!-- /product rating --> 
										</div>
									</div>
								</div>
								<!-- /product --> 
							</div>
						@endforeach
					@endif
					
				</div>
				<!-- /carousel --> 
			</div>
		</section>
	@endsection
	
	@section('footer')
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.js"></script>
		<script src="{{mix('js/webs/js-product.js')}}"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var path = "{{asset('')}}";
				var size=@if (isset($size))
						<?=json_encode($size)?>;
					@endif;
				var link= @if (isset($links))
						<?=json_encode($links)?>;
							@endif;
				$(document).on('click','.color_li', function(e){
					e.preventDefault();
					var id= $(this).attr('data-id');
					console.log(size);
					if (size[id]!= 'undefined') {
							
						$('.size-li').html('');
						$.each(size[id], function(k, v) {
							var size="<li  data-id='"+k+"'><button class='btn-link select_size'><a>"+v+"</a></button></li>";
							$('.size-li').append(size);
						});

					}
				});
				$('.tabs .tab-links a').on('click', function(e)  {
			        var currentAttrValue = $(this).attr('href');
			        // Show/Hide Tabs
			        $('.tabs ' + currentAttrValue).show().siblings().hide();
			        // Change/remove current tab to active
			        $(this).parent('li').addClass('active').siblings().removeClass('active');
			        e.preventDefault();
			    });
				$(document).on('click','.size-li', function(e){
					var links=$.parseJSON(link);
					console.log($.parseJSON(link));
					$('.preview-pic').html('');
					$('.preview-thumbnail').html('');
					$('.smallGallery').css('display','none');
					for (var i = 0; i < links.length; i++) {
						var l = links[i];
						if (i==0) {
							var text = "<div class='tab-pane active' id='pic-" + i + "'><img src='" + path + 'storage/' + l + "'></div>";
							var text1 = "<li><a data-target='#pic-" + i + "' data-toggle='tab'> <img src='" + path + 'storage/' + l + "' alt='' ></a></li>";
							$('.preview-pic').append(text);
							$('.preview-thumbnail').append(text1);

						} else {
							var text = "<div class='tab-pane' id='pic-" + i + "'><img src='" + path + 'storage/' + l + "'></div>";
							var text1 = "<li><a data-target='#pic-" + i + "' data-toggle='tab'> <img src='" + path + 'storage/' + l + "' alt='' ></a></li>";
							$('.preview-pic').append(text);
							$('.preview-thumbnail').append(text1);
						}
					}
				});
				$(document).on('click','ul.color-li>li',function(e){
					e.preventDefault();
					var color_id = $(this).attr('data-id');
					$('.color-li').attr('data-id', color_id);
					$('ul.color-li>li').removeClass('active');
					$(this).addClass('active');
					
				});
				$(document).on('click','ul.size-li li',function(){
					var size_id = $(this).attr('data-id');
					$('.size-li').attr('data-id', size_id);
					$('ul.size-li>li').removeClass('active');
					$(this).addClass('active');


				});
				$(document).on('click','.addcart',function(e){
					e.preventDefault();
					var size_id=$('.size-li').attr('data-id');
					var color_id=$('.color-li').attr('data-id');
					var product_id=$('.product_id').attr('data-id');
					var quantity=$('input[name=quantity]').val();
					console.log(size_id);
					console.log(color_id);
					console.log(quantity);
					console.log(product_id);
					$.ajax({
						url: '{{asset("buy")}}',
						type: 'POST',
						data:{
							'size_id':size_id,
							'color_id':color_id,
							'product_id':product_id,
							'quantity':quantity,
						},
						cache: false,
						success: function success(response) {
							if (response='yes') {
								toastr.success('Thanks you!');
							} else {
								toastr.warning('You have purchased the product in excess of the stock','Stock:res'+response.quantity);
							}
						}
					});


				});
			});
		</script>			
		
	@endsection	