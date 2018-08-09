@extends('layouts/webs/master')
	@section('header')
		<style type="text/css">
			ul.color-li .active{
				border: 2px solid red !important;
				border-radius: 30%;
			}
			ul.size-li .active .select-size{
				background:red;
			}
		</style>
	@endsection
	@section('slider')
		<!-- breadcrumbs -->
			<div class="breadcrumbs">
				<div class="container">
					<ol class="breadcrumb breadcrumb--ys pull-left">
						<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>										
						<li class="active">Product</li>
					</ol>
				</div>
			</div>
		<!-- /breadcrumbs -->
	@endsection
	@section('content')
		<div class="container">
				<!-- two columns -->
				<div class="row">
					<!-- left column -->
					<aside class="col-md-4 col-lg-3 col-xl-2" id="leftColumn">
						<a href="#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span>back</a>
						<div class="filters-block visible-xs">
							<div class="filters-row__select">
								<label>Sort by: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>Position</option>
										<option>Price</option>
										<option>Rating</option>
									</select>
								</div>
								<a href="#" class="sort-direction icon icon-arrow_back"></a> 
							</div>
							<div class="filters-row__select">
								<label>Show: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select>
								</div>
							</div>
							<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
						</div>
						<!-- shopping by block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">SHOPPING BY:</h4>
							<div class="collapse-block__content">
								<ul class="filter-list">
									<li> Color: <span>White</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
									<li> Size: <span>S</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
								</ul>
								<a class="btn btn--ys btn--sm btn--light">Clear All</a> 
							</div>
						</div>
						<!-- /shopping by block --> 
						<!-- category block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title ">Product</h4>
							<div class="collapse-block__content">
								<ul class="expander-list">
									<li class="active">
										<a href="#">TOPS</a><span class="expander"></span>
										<ul>
											<li class="active"><a href="#">Blouses &amp; Shirts</a></li>
											<li><a href="#">Dresses</a></li>
										</ul>
									</li>
									<li>
										<a href="#">BOTTOMS</a><span class="expander"></span>
										<ul>
											<li><a href="#">Trousers</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">Leggings</a></li>
											<li><a href="#">Jumpsuit &amp; shorts</a></li>
											<li><a href="#">Skirts</a></li>
											<li><a href="#">Tights</a></li>
										</ul>
									</li>
									<li>
										<a href="#">ACCESSORIES</a><span class="expander"></span>
										<ul>
											<li><a href="#">Jewellery</a></li>
											<li><a href="#">Hats</a></li>
											<li><a href="#">Scarves &amp; snoods</a></li>
											<li><a href="#">Belts</a></li>
											<li><a href="#">Bags</a></li>
											<li><a href="#">Shoes</a></li>
											<li><a href="#">Sunglasses</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<!-- /category block --> 
						<!-- price slider block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">PRICE</h4>
							<div class="collapse-block__content">
								<div id="priceSlider" class="price-slider"></div>
								<form action="#">
									<div class="price-input">
										<label>From:</label>
										<input type="text" id="priceMin" />
									</div>
									<div class="price-input-divider">-</div>
									<div class="price-input">
										<label>To:</label>
										<input type="text" id="priceMax" />
									</div>
									<div class="price-input">
										<button type="submit" class="btn btn--ys btn--md">Filter</button>
									</div>
								</form>
							</div>
						</div>
						<!-- /price slider block --> 
						<!-- size block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">SIZE</h4>
							<div class="collapse-block__content">
								<ul class="options-swatch options-swatch--size options-swatch--lg">
									 @foreach ($sizes as $size)
	                                    <li><a href="{{route('web.list',[ $size->id])}}">{{ $size->name }}</a></li>
	                                                                                                              
	                                @endforeach
								</ul>
							</div>
						</div>
						<!-- /size block --> 
						<!-- color block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">COLOR</h4>
							<div class="collapse-block__content">
								<ul class="options-swatch options-swatch--color options-swatch--lg">
									@foreach ($colors as $color)
	                                   <li><a href="{{route('web.color',[ $color->id])}}"><span class="swatch-label" style="background: {{$color->name}}; border:  1px solid #dadada"></span></a></li>
	                                @endforeach
									
								</ul>
							</div>
						</div>
						<!-- /color block --> 
						<!-- brands block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">BRANDS</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									@foreach ($vendors as $vendor)
	                                   <li><a href="{{route('web.list',[ $vendor->id])}}">{{$vendor->name}}</a></li>
	                                @endforeach
								</ul>
							</div>
						</div>
						<!-- /brands block --> 
						<!-- gender block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">GENDER</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									<li><a href="#">Men</a></li>
									<li><a href="#">Women</a></li>
									<li><a href="#">Unisex</a></li>
								</ul>
							</div>
						</div>
						<!-- /gender block --> 
						<!-- poll block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">COMMUNITY POLL</h4>
							<div class="collapse-block__content">
								<p class="under-form-text color">What is your favorite color</p>
								<form id="pollForm" action="#">
									<ul class="filter-list">
										<li>
											<label class="radio">
											<input id="radio1" type="radio" name="radios" checked>
											<span class="outer"><span class="inner"></span></span>Green</label>
										</li>
										<li>
											<label class="radio">
											<input id="radio2" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Red</label>
										</li>
										<li>
											<label class="radio">
											<input id="radio3" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Black</label>
										</li>
										<li>
											<label class="radio">
											<input id="radio4" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Magenta</label>
										</li>
									</ul>
									<button type="submit" class="btn btn--ys btn--md btn--light">Vote</button>
								</form>
							</div>
						</div>
						<!-- /poll block --> 
						<!-- featured block -->
						<div class="collapse-block open coll-products-js">
							<h4 class="collapse-block__title">FEATURED</h4>
							<div class="collapse-block__content coll-gallery">
							</div>
							
							<div class="coll-gallery-clone" style="display:none">
								
									<div class="vertical-carousel vertical-carousel-2 offset-top-10">
										<div class="vertical-carousel__item">
											<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a>
											</div>
											<div class="vertical-carousel__item__title">
												<h2><a href="#">Quis nostrud exercit ation</a></h2>
											</div>
											<div class="price-box">$26.00 <span class="price-box__old">$28.00</span></div>
											<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										</div>
										<div class="vertical-carousel__item">
											<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-2.jpg" alt=""></a>
											</div>
											<div class="vertical-carousel__item__title">
												<h2><a href="#">Quis nostrud exercit ation</a></h2>
											</div>
											<div class="price-box">$26.00</div>
											<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										</div>
										<div class="vertical-carousel__item">
											<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a></div>
											<div class="vertical-carousel__item__title">
												<h2><a href="#">Quis nostrud exercit ation</a></h2>
											</div>
											<div class="price-box">$26.00</div>
											<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										</div>
									</div>
								
							</div>
						</div>
						<!-- /featured block --> 
						<!-- tags block -->
						{{-- <div class="collapse-block">
							<h4 class="collapse-block__title">POPULAR TAGS</h4>
							<div class="collapse-block__content">
								<ul class="tags-list">
									<li><a href="#">Grey</a></li>
									<li><a href="#">Shirt</a></li>
									<li><a href="#">suit</a></li>
									<li><a href="#">Dresses </a></li>
									<li><a href="#">Outerwear</a></li>
								</ul>
							</div>
						</div> --}}
						<!-- /tags block --> 
					</aside>
					<!-- /left column --> 
					<!-- center column -->
					<aside class="col-md-8 col-lg-9 col-xl-10" id="centerColumn">
						<!-- title -->
						<div class="title-box">
							<h2 class="text-center text-uppercase title-under">product’s</h2>
						</div>
						<!-- /title -->
						<div class="row">
							<div class="col-sm-6">
								<a href="listing-without-col-without-static-block_06.html" class="banner banner--md link-img-hover">
								<span class="figure">
									<img src="images/custom/category-women-1.jpg" alt="" class="vis-hid-img-small " /> 
									<img src="images/custom/category-women-1-xl.jpg" alt="" class="vis-hid-img-big  " />
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size1">New<br>collection</span>
												<span class="text size2">OF FASHION CLOTHES</span>
											</span>
										</span>
									</span>
								</span>
								</a>
							</div>
							<div class="divider divider-md visible-xs"></div>
							<div class="col-sm-6">
								<a href="listing-without-col-without-static-block_06.html" class="banner banner--md link-img-hover">
								<span class="figure">
									<img src="images/custom/category-women-2.jpg" alt="" class="vis-hid-img-small" /> 
									<img src="images/custom/category-women-2-xl.jpg" alt="" class="vis-hid-img-big" />
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size2">15% OFF</span>
												<span class="text size5"><em>on brand-new models</em></span>
												<span class="btn btn--ys btn--xl">Shop now!</span> 
											</span>
										</span>
									</span>
								</span>
								</a>
							</div>
						</div>
						<div class="offset-top-20">
							<p class="light-font">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui.</p>
						</div>
						<div class="divider"></div>
						<div class="row">
							@foreach($categories as $category)
								<div class="subcategory-item col-sm-4 col-xs-6 col-xl-one-fifth">
									<a href="{{asset('category')}}/{{$category->id}}">
										<span class="figure"> <img src="{{asset(\Storage::url($category->thumbnail))}}" alt=""  class="img-responsive" /> </span>
										<h3 class="subcategory-item__title">{{$category->name}}</h3>
									</a>
									
								</div>
							@endforeach
							
						</div>
						
						<!-- filters row -->
						<div class="filters-row">
							<div class="pull-left">
								<div class="filters-row__mode">
									<a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a> 
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
								</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Sort by: </label>
									<div class="select-wrapper">
										<select class="select--ys sort-position">
											<option>Position</option>
											<option>Price</option>
											<option>Rating</option>
										</select>
									</div>
									<a href="#" class="sort-direction icon icon-arrow_back"></a> 
								</div>
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">{{count($products)}}items</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Show: </label>
									<div class="select-wrapper">
										<select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
									</div>
									<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
								</div>
								<div class="filters-row__pagination">
									{{$products->links()}}
								</div>
							</div>
						</div>
						<!-- /filters row -->
						<div class="product-listing row">
							@foreach($products as $product)
								<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
									<!-- product -->
									<div class="product product--zoom">
										<div class="product__inside">
											<!-- product image -->
											<div class="product__inside__image">
												<a href="{{asset('')}}/product/{{$product->id}}"> <img src="{{asset(\Storage::url($product->thumbnail))}}" alt="" class="img-responsive" style="height: 350px"> </a> 
												<!-- quick-view --> 
												<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view" data-id="{{$product->id}}"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
												<!-- /quick-view --> 
											</div>
											<!-- /product image --> 
											<!-- product name -->
											<div class="product__inside__name">
												<h2><a href="{{asset('')}}/product/{{$product->id}}">{{$product->name}}</a></h2>
											</div>
											<!-- /product name -->                 <!-- product description --> 
											<!-- visible only in row-view mode -->
											<div class="product__inside__description row-mode-visible"> {{$product->description}}</div>
											<!-- /product description -->                 <!-- product price -->
											<div class="product__inside__price price-box">{{$product->price}}</div>
											<!-- /product price --> 
											<!-- product review --> 
											<!-- visible only in row-view mode -->
											<div class="product__inside__review row-mode-visible">
												<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
											</div>
											<!-- /product review --> 
											<div class="product__inside__hover">
												<!-- product info -->
												<div class="product__inside__info">
													<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
														<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
														<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
														<a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> 
													</div>
													<ul class="product__inside__info__link hidden-sm">
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
						</div>
						<!-- filters row -->
						<div class="filters-row">
							<div class="pull-left">
								<div class="filters-row__mode">
									<a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a> 
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
								</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Sort by: </label>
									<div class="select-wrapper">
										<select class="select--ys sort-position">
											<option>Position</option>
											<option>Price</option>
											<option>Rating</option>
										</select>
									</div>
									<a href="#" class="sort-direction icon icon-arrow_back"></a> 
								</div>
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">{{count($products)}} Item(s)</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Show: </label>
									<div class="select-wrapper">
										<select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
									</div>
									<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
								</div>
								<div class="filters-row__pagination">
									<ul class="pagination">
										{{$products->links()}}
									</ul>
								</div>
							</div>
						</div>
						<!-- /filters row --> 
					</aside>
					<!-- center column --> 
				</div>
				<!-- /two columns --> 
			</div>


	@endsection
	@section('modal')
    	<div class="modal  modal--bg fade"  id="quickViewModal">
		  <div class="modal-dialog white-modal">
		    <div class="modal-content container">
		    	<div class="modal-header">
		       	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		     	 </div>
		    	<!--  -->
		    	<div class="product-popup">
					<div class="product-popup-content">
					<div class="container-fluid">
						<div class="row product-info-outer">
							<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
								<div class="product-main-image">
									<div class="product-main-image__item"><img src='images/product/product-big-1.jpg' alt="" /></div>
								</div>
							</div>
							<div class="product-info col-xs-12 col-sm-7 col-md-6 col-lg-6">
								<div class="wrapper">
									<div class="product-info__sku pull-left">SKU: <strong id="code"></strong></div>
									<div class="product-info__availabilitu pull-right">Availability:   <strong class="color">In Stock</strong></div>
								</div>
								<div class="product-info__title">
									<h2 id="title"></h2>
								</div>
								<div class="price-box product-info__price"><span class="price-box__new" id="price"></span></div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="product-info__description">
									<div class="product-info__description__brand"><img src="images/custom/brand.png" alt=""> </div>
									<div class="product-info__description__text"></div>
								</div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">COLOR:</span>  Red + $10.00 *</div>
									<div class="pull-right required">* Required Fields</div>
								</div>
								{{-- COlor --}}
								<ul class="options-swatch options-swatch--color options-swatch--lg color-li">
								</ul>						
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">SIZE:</span></div>
									<div class="pull-left required">*</div>
								</div>
								{{-- Size --}}
								<ul class="options-swatch options-swatch--size options-swatch--lg size-li">

								</ul>
								<div class="divider divider--sm"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="qty-label">QTY:</span></div>
									<div class="pull-left"><input type="number" name="quantity" class="input--ys qty-input pull-left quantity" value="1"></div>
									<div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl" id="buyprodcut"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
								</div>
								<ul class="product-link">
									<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
									<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#"><span class="text">Add to compare</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					</div>
				</div>
		    	<!-- / -->
		    </div>
		  </div>
		</div>
		<!-- / Modal (quickViewModal) -->
    @endsection
	
	@section('footer')

		<script src="{{mix('js/webs/js-product.js')}}"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$(document).on('click','.quick-view', function(e){
					var id = $(this).attr("data-id");
					e.preventDefault();
					$.ajax({
						url: 'show/'+id,
						type: 'GET',
						success: function success(response) {
							console.log(response);
							$('#code').attr('data-id',response[0].id);
							$('#code').text(response[0].code);
							$('#title').text(response[0].name);
							$('#price').text(response[0].price);
							$('.color-li').html('');
							console.log(response[2][1]);
							$.each(response[1][response[0].code], function(index, itemData) {
								var color="<li style='background: "+itemData+"; border: 1px solid #dadada'; data-id='"+index+"' id='"+index+"'><button class='btn-link select_color' data-id='"+index+"'><a><span class='swatch-label'></span></a></button></li>";
								$('.color-li').append(color);
								if (response[2][index]!= undefined) {
									$(document).on('click','#'+index,function(){

										var color_id = $(this).attr('data-id');
										
										$('.color-li').attr('data-id', color_id);
										$('.size-li').html('');
										$.each(response[2][index], function(k, v) {
											var size="<li  data-id='"+k+"'><button class='btn-link select_size'><a>"+v+"</a></button></li>";
											$('.size-li').append(size);
										});

									});
								}
								
							});
						}
					});
				});
				
				$(document).on('click','ul.color-li>li',function(e){
					e.preventDefault();
					$('ul.color-li>li').removeClass('active');
					$(this).addClass('active');
					
				});
				$(document).on('click','ul.size-li li',function(){
					var size_id = $(this).attr('data-id');
					$('.size-li').attr('data-id', size_id);
					$('ul.size-li>li').removeClass('active');
					$(this).addClass('active');

				});
				$(document).on('click','#buyprodcut',function(e){
					e.preventDefault();
					var size_id=$('.size-li').attr('data-id');
					var color_id=$('.color-li').attr('data-id');
					var product_id=$('#code').attr('data-id');
					var quantity=$('.quantity').val();
					console.log(size_id);
					console.log(color_id);
					console.log(product_id);
					$.ajax({
						url: 'buy',
						type: 'POST',
						data:{
							'size_id':size_id,
							'color_id':color_id,
							'product_id':product_id,
							'quantity':quantity,
						},
						cache: false,
						success: function success(response) {
							
						}
					});
				});
			});
		</script>			
		
	@endsection	