<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>YOURStore - Responsive HTML5 Template</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="YOURStore">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="favicon.ico">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- External Plugins CSS -->
		<link rel="stylesheet" href="{{mix('css/webs/slick.css')}}">
		<link rel="stylesheet" href="{{mix('css/webs/slick-theme.css')}}">
		<link rel="stylesheet" href="{{mix('css/webs/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{mix('css/webs/nouislider.css')}}">
		<link rel="stylesheet" href="{{mix('css/webs/bootstrap-select.css')}}">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="{{mix('css/webs/settings.css')}}" media="screen" />
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{mix('css/webs/style.css')}}">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="{{mix('css/webs/style-font.css')}}">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet">
		@yield('header')
		<!-- Head Libs -->	
		<!-- Modernizr -->
		<script src="{{mix('js/webs/modernizr.js')}}"></script>
	</head>
	<body class="index">				  
		<div id="loader-wrapper">
			<div id="loader">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>
		<!-- Back to top -->
	    <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
	    <!-- /Back to top -->
	    <!-- mobile menu -->
		<div class="hidden">
			<nav id="off-canvas-menu">				
				<ul class="expander-list">				
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{asset('home')}}"><span class="act-underline">HOME</span></a>
						</span>
						
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{asset('list')}}"><span class="act-underline"><span class="act-underline">PRODUCT</span></span></a>
						</span>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{asset('blog')}}"><span class="act-underline">BLOG</span></a>
						</span>
					</li>
					<li>
						<span class="name"><span class="expander">-</span>
							<a href="{{asset('about')}}"><span class="act-underline">PAGES</span></a>
						</span>						
						<ul class="multicolumn">
							<li><a href="{{asset('about')}}">About</a></li>
							<li><a href="support-24.html">Support 24/7 page</a></li>
							<li><a href="services.html">Services</a></li>	
							<li><a href="faq.html">FAQs</a></li>													
							<li><a href="{{asset('contact')}}">Contact</a></li>
							<li><a href="under-construction.html">Under Construction</a></li>
							<li><a href="warranty.html">Warranty Page</a></li>
							<li><a href="site-map.html">Site Map</a></li>												
							<li><a href="delivery-page.html">Delivery Page</a></li>
							<li><a href="payment-page.html">Payment page</a></li>													
							<li><a href="typography.html">Typography</a></li>	
							<li><a href="page-404.html">Page 404</a></li>		
							<li><a href="_newsletter-template/newsletter-template.html">Newsletter template</a></li>											
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="listing.html"><span class="act-underline">WOMEN’s<span class="badge badge--menu">NEW</span></span></a>
						</span>
						<ul class="multicolumn-level">
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>TOPS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Blouses & Shirts</a></li>									
									<li class="level3">										
										<span class="name">
											<span class="expander">-</span>
											<a href="listing.html"><span class="act-underline">Dresses</span></a>
										</span>
										<ul class="image-links-level-4 megamenu__submenu">
											<li class="level4"><a href="listing.html">Bodycon Dresses</a></li>
											<li class="level4">												
												<span class="name">
													<span class="expander">-</span>
													<a href="listing.html"><span class="act-underline">Midi Dresses</span></a>
												</span>
												<ul class="image-links-level-5 megamenu__submenu">
													<li class="level5"><a href="listing.html">Occasion & Cocktail</a></li>
													<li class="level5"><a href="listing.html">Casual Everyday</a></li>
													<li class="level5"><a href="listing.html">Going Out & Party Dresses</a></li>
												</ul>
											</li>
											<li class="level4"><a href="listing.html">Fit & Flare</a></li>
											<li class="level4"><a href="listing.html">Shift Dresses</a></li>											
											<li class="level4"><a href="listing.html">Slip Dresses</a></li>
											<li class="level4"><a href="listing.html">Tunic Dresses</a></li>
										</ul>
									</li>
									<li class="level3"><a href="listing.html">Tops & T-shirts</a></li>
									<li class="level3"><a href="listing.html">Sleeveless Tops</a></li>									
									<li class="level3"><a href="listing.html">Sweaters & Cardigans</a></li>
									<li class="level3"><a href="listing.html">Jackets</a></li>
									<li class="level3"><a href="listing.html">Outerwear</a></li>
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>BOTTOMS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Trousers</a></li>
									<li class="level3"><a href="listing.html">Jeans</a></li>
									<li class="level3"><a href="listing.html">Leggings</a></li>
									<li class="level3"><a href="listing.html">Jumpsuit & shorts</a></li>
									<li class="level3"><a href="listing.html">Skirts</a></li>
									<li class="level3"><a href="listing.html">Tights</a></li>								
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>ACCESSORIES</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Jewellery</a></li>
									<li class="level3"><a href="listing.html">Hats</a></li>
									<li class="level3"><a href="listing.html">Scarves & snoods</a></li>
									<li class="level3"><a href="listing.html">Belts</a></li>
									<li class="level3"><a href="listing.html">Bags</a></li>
									<li class="level3"><a href="listing.html">Shoes</a></li>
									<li class="level3"><a href="listing.html">Sunglasses</a></li>																	
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="listing.html"><span class="act-underline">MEN’s<span class="badge badge--menu badge--color">SALE</span></span></a>
						</span>
						<ul class="multicolumn-level">
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>TOPS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Jackets</a></li>									
									<li class="level3"><a href="listing.html">Shirts</a></li>
									<li class="level3"><a href="listing.html">Sweaters & Cardigans</a></li>
									<li class="level3"><a href="listing.html">T-shirts</a></li>									
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>BOTTOMS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Trousers</a></li>									
									<li class="level3"><a href="listing.html">Jeans</a></li>
									<li class="level3"><a href="listing.html">Skirts</a></li>
									<li class="level3"><a href="listing.html">Swimwear</a></li>									
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">										
										<span>ACCESSORIES</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="listing.html">Bags</a></li>									
									<li class="level3"><a href="listing.html">Shoes</a></li>
									<li class="level3"><a href="listing.html">Sunglasses</a></li>																		
								</ul>
							</li>
						</ul>
					</li>
					
				</ul>
			</nav>
		</div>		
	    <!-- /mobile menu -->
		<!-- HEADER section -->
		<div class="header-wrapper">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-6 col-xl-7">
							<!-- logo start --> 
							<a href="index.html"><img class="logo replace-2x img-responsive" src="{{asset('images/logo.png')}}" alt=""/> </a> 
							<!-- logo end --> 
						</div>
						<div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right">
							<!-- slogan start -->
							<div class="slogan"> Welcome <i>{{session('name')}}</i>! </div>
							<!-- slogan end --> 						
							<div class="settings">
								<!-- currency start -->
								<div class="currency dropdown text-right">
									<div class="dropdown-label hidden-sm hidden-xs">Currency:</div>
									<a class="dropdown-toggle" data-toggle="dropdown"> USD<span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="#">GBP - British Pound Sterling</a></li>
										<li><a href="#">EUR - Euro</a></li>
										<li><a href="#">USD - US Dollar</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
									</ul>
								</div>
								<!-- currency end --> 
								<!-- language start -->
								<div class="language dropdown text-right">
									<div class="dropdown-label hidden-sm hidden-xs">Language:</div>
									<a class="dropdown-toggle" data-toggle="dropdown"> English<span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="#">English</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
										<li><a href="#">Russian</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
									</ul>
								</div>
								<!-- language end --> 
							</div>
						</div>
					</div>
				</div>
				<div class="stuck-nav">
					<div class="container offset-top-5">
						<div class="row">
							<div class="pull-left col-sm-9 col-md-9 col-lg-10">
								<!-- navigation start -->
								<nav class="navbar">
									<div class="responsive-menu mainMenu">									
										<!-- Mobile menu Button-->
										<div class="col-xs-2 visible-mobile-menu-on">
											<div class="expand-nav compact-hidden">
												<a href="#off-canvas-menu" class="off-canvas-menu-toggle">
													<div class="navbar-toggle"> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="menu-text">MENU</span> 
													</div>
												</a>
											</div>
										</div>
										<!-- //end Mobile menu Button -->
										<ul class="nav navbar-nav">
											<li class="dl-close"><a href="#"><span class="icon icon-close"></span>close</a></li>										
											<li class="dropdown dropdown-mega-menu">											
												<a href="{{asset('home')}}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">HOME</span></a>
											</li>											
											
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{asset('product')}}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">PRODUCT</span></a>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{asset('about')}}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">BLOG</span></a>
											</li>
											<li class="dropdown dropdown-mega-menu dropdown-two-col">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="about.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">PAGES</span></a>
												<ul class="dropdown-menu multicolumn two-col" role="menu">
													<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>													
													<li><a href="{{asset('about')}}">About</a></li>
													<li><a href="support-24.html">Support 24/7 page</a></li>
													<li><a href="services.html">Services</a></li>	
													<li><a href="faq.html">FAQs</a></li>													
													<li><a href="{{asset('contact')}}">Contact</a></li>
													<li><a href="under-construction.html">Under Construction</a></li>
													<li><a href="warranty.html">Warranty Page</a></li>
													<li><a href="site-map.html">Site Map</a></li>												
													<li><a href="delivery-page.html">Delivery Page</a></li>
													<li><a href="payment-page.html">Payment page</a></li>													
													<li><a href="typography.html">Typography</a></li>	
													<li><a href="page-404.html">Page 404</a></li>		
													<li><a href="_newsletter-template/newsletter-template.html">Newsletter template</a></li>
												</ul>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="listing.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">WOMEN’s<span class="badge badge--menu">NEW</span></span></a>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="listing.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">MEN’s<span class="badge badge--menu badge--color">SALE</span></span></a>
											</li>
										</ul>
									</div>
								</nav>
							</div>
							<!-- navigation end -->
							<div class="pull-right col-sm-3 col-md-3 col-lg-2">
								<div class="text-right">	
									<!-- search start -->
									<div class="search link-inline">
										<a href="#" class="search__open"><span class="icon icon-search"></span></a>
										<div class="search-dropdown">
											<form action="#" method="get">
												<div class="input-outer">
													<input type="search" name="search" value="" maxlength="128" placeholder="SEARCH:">
													<button type="submit" title="" class="icon icon-search"></button>
												</div>
												<a href="#" class="search__close"><span class="icon icon-close"></span></a>									
											</form>
										</div>
									</div>
									<!-- search end -->										
									<!-- account menu start -->
									<div class="account link-inline">
										<div class="dropdown text-right">
											<a class="dropdown-toggle" data-toggle="dropdown">
											<span class="icon icon-person "> </span>
											</a>
											<ul class="dropdown-menu dropdown-menu--xs-full">
												<li><a href="login_form.html"><span class="icon icon-person"></span>My Account</a></li>
												<li><a href="wishlist.html"><span class="icon icon-favorite_border"></span>My Wishlist</a></li>
												<li><a href="compare.html"><span class="icon icon-sort"></span>Compare</a></li>
												<li><a href="checkout-step.html"><span class="icon icon-done_all"></span>Checkout</a></li>
												<li><a href="#"  data-toggle="modal" data-target="#modalLoginForm"><span class="icon icon-lock"></span>Log In</a></li>
												<li>
													<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon fa fa-sign-out"></i> Log Out</a>
        											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
												</li>

												<li><a href="login_form.html"><span class="icon icon-person_add"></span>Create an account</a></li>
												<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
											</ul>
										</div>
									</div>
									<!-- account menu end -->
									<!-- shopping cart start -->
									<div class="cart link-inline">
										<div class="dropdown text-right">
											<a class="dropdown-toggle">
											<span class="icon icon-shopping_basket"></span>
											<span class="badge badge--cart">2</span>
											</a>
											<div class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
												<div class="container">
													<div class="cart__top">Recently added item(s)</div>
													<a href="#" class="icon icon-close cart__close"><span>CLOSE</span></a>
													<ul id="for_cart">
														@foreach(Cart::content() as $row)
															<li class="cart__item {{$row->rowId}}">
																<div class="cart__item__image pull-left"><a href="#"><img src="{{asset('')}}storage/{{$row->options->thumbnail}}" alt=""/></a></div>
																<div class="cart__item__control"  >
																	<div class="cart__item__delete delete" data-id={{$row->rowId}}><a href="#" class="icon icon-delete" data-id={{$row->rowId}}><span  data-id={{$row->rowId}}>Delete</span></a></div>
																	<div class="cart__item__edit edit" data-id={{$row->rowId}}><a href="#" class="icon icon-edit"><span>Edit</span></a></div>
																</div>
																<div class="cart__item__info">
																	<div class="cart__item__info__title">
																		<h2><a href="#">{{$row->name}}</a></h2>
																	</div>
																	<div class="cart__item__info__price"><span class="info-label">Price:</span><span>{{$row->price}}</span></div>
																	<div class="cart__item__info__qty"><span class="info-label">Qty:</span><input type="number" class="input--ys quantity" value='{{$row->qty}}' name="quantity" /></div>
																	<div class="cart__item__info__details">
																		<div class='multitooltip'>
																			<a href="#">Details</a>
																			<div class="tip on-bottom">
																				<span><strong>Color:</strong> <div style="width: 50px; height: 50px; background: {{$row->options->color}}"></div></span>
																				<span><strong>Quantity:</strong> {{$row->qty}}</span>
																				<span><strong>Image:</strong> <img src="{{asset('')}}storage/{{$k=json_decode($row->options->link)[0]}}" class="img-responsive"></span>
																				<span><strong>Size:</strong>{{$row->options->size}}</span>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														@endforeach
													</ul>
													<div class="cart__bottom">
														<div class="cart__total">Cart subtotal: <span> {{Cart::total()}}</span></div>
														<button class="btn btn--ys btn-checkout">Checkout <span class="icon icon--flippedX icon-reply"></span></button>
														<a href="#" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> View Cart</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- shopping cart end -->			
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<!-- End HEADER section -->

		<!-- Slider section -->
		<div>
			@yield('slider')
		</div>
		
		<!-- END REVOLUTION SLIDER -->
		<!-- Content -->
		<div id="pageContent">
			
			@yield('content')
		</div>
		<!-- ........................ -->
		<!-- FOOTER section -->
		<footer>
			<!-- footer-data -->
			<div class="container inset-bottom-60">
				<div class="row" >
					<div class="col-sm-12 col-md-5 col-lg-6 border-sep-right">
						<div class="footer-logo hidden-xs">
							<!--  Logo  --> 
							<a class="logo" href="index.html"> <img class="replace-2x" src="{{asset('images/logo.png')}}"  alt="YOURStore"> </a> 
							<!-- /Logo --> 
						</div>
						<div class="box-about">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title visible-xs">ABOUT US</h4>
								<div class="mobile-collapse__content">
									<p> No more need to look for other ecommerce themes. We provide huge number of different layouts. Yourstore comes packed with free and useful features developed to make your website creation easier. Innovative clean design, advanced functionality, UI made for humans, extensive documenta- tion and support i continue this list infinitely... </p>
								</div>
							</div>
						</div>
						<!-- subscribe-box -->
						<div class="subscribe-box offset-top-20">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title">NEWSLETTER SIGNUP</h4>
								<div class="mobile-collapse__content">
									<form class="form-inline">
										<input class="subscribe-form__input" type="text" name="subscribe">
										<button type="submit" class="btn btn--ys btn--xl">SUBSCRIBE</button>
									</form>
								</div>
							</div>
						</div>
						<!-- /subscribe-box --> 
					</div>
					<div class="col-sm-12 col-md-7 col-lg-6 border-sep-left">
						<div class="row">
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">INFORMATION</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="about.html">About Us</a></li>
											<li><a href="support-24.html">Customer Service</a></li>
											<li><a href="faq.html">Privacy Policy</a></li>
											<li><a href="site-map.html">Site Map</a></li>
											<li><a href="typography.html">Search Terms</a></li>
											<li><a href="warranty.html">Advanced Search</a></li>
											<li><a href="delivery-page.html">Orders and Returns</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">WHY BUY FROM US</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="warranty.html">Shipping &amp; Returns</a></li>
											<li><a href="typography.html">Secure Shopping</a></li>
											<li><a href="about.html">International Shipping</a></li>
											<li><a href="delivery-page.html">Affiliates</a></li>
											<li><a href="support-24.html">Group Sales</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">MY ACCOUNT</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="login_form.html">Sign In</a></li>
											<li><a href="shopping_cart.html">View Cart</a></li>
											<li><a href="wishlist.html">My Wishlist</a></li>
											<li><a href="support-24.html">Track My Order</a></li>
											<li><a href="faq.html">Help</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-data --> 
			<div class="divider divider-md visible-xs visible-sm visible-md"></div>
			<!-- social-icon -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
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
				</div>
			</div>
			<!-- /social-icon --> 
			<!-- footer-copyright -->
			<div class="container footer-copyright">
				<div class="row">
					<div class="col-lg-12"> <a href="index.html"><span>Your</span>Store</a> &copy; 2016 . All Rights Reserved. </div>
				</div>
			</div>
			<!-- /footer-copyright --> 
			<a href="#" class="btn btn--ys btn--full visible-xs" id="backToTop">Back to top <span class="icon icon-expand_less"></span></a> 
		</footer>
		<!-- END FOOTER section -->
		<div id="productQuickView" class="white-popup mfp-hide">
			<h1>Modal dialog</h1>
			<p>You won't be able to dismiss this by usual means (escape or
				click button), but you can close it programatically based on
				user choices or actions.
			</p>
		</div>
		<div id="compareSlide" class="hidden-xs">
			<div class="container">
				<div class="compareSlide__top">
					Compare
				</div>
				<a class="compareSlide__close icon icon-close">
				</a>
				<div class="compared-product-row">
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
				</div>
				<div class="compareSlide__bot">
					<a href="#" class="clear-all icon icon-delete"><span>Clear All</span></a>
					<a href="#" class="btn btn--ys btn-compare"><span class="icon icon-shopping_basket"></span> Compare</a>
				</div>
			</div>
		</div>
		<!-- Button trigger modal -->
	  

		<!--================== modal ==================-->
		<!-- modalAddToCart -->
		<div class="modal  fade"  id="modalAddToCart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		      </div>
		      <div class="modal-body">
		        <div class="text-center">
		        	"Mauris lacinia lectus" added to cart successfully! 
		        </div>
		      </div>
		      <div class="modal-footer text-center">		       	
		        <a href="shopping-cart-right-column.html"  class="btn btn--ys btn--full btn--lg">go to cart</a>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- /modalAddToCart -->
		<!-- modalLoginForm-->
		<div class="modal  fade"  id="modalLoginForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		        <h4 class="modal-title text-center text-uppercase">Login form</h4>
		      </div>
		      <form action="{{route('login')}}" method="POST">
		      		@csrf
			      <div class="modal-body indent-bot-none">
			      	<div class="form-group">
			      		<div class="input-group">
						    <span class="input-group-addon">
						    	<span class="icon icon-person"></span>
						    </span>
						    <input type="email" id="LoginFormName"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email:">
						    @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        	@endif
						</div>
			      	</div>
					<div class="form-group">
						<div class="input-group">
						    <span class="input-group-addon">@</span>
						    <input type="password" id="LoginFormPass" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password:">
						    @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        	@endif
						</div>
					</div>			         				    				     
 	                 <div class="checkbox-group">
	                  <input type="checkbox" id="checkBox2">
	                  <label for="checkBox2"> 
	                  	<span class="check"></span>
	                  	<span class="box"></span>
	                  	Remember me
	                  </label>
	                </div>
	                <button type="submit" class="btn btn--ys btn--full btn--lg">Login</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-blue"><span class="fa fa-facebook"></span> Login with Facebook</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-red"><span class="fa fa-google-plus"></span> Login with Google</button>
			        <div class="divider divider--xs"></div>
			        <ul class="list-arrow-right">
			        	<li><a href="#">Forgot your username?</a></li>
			        	<li><a href="#">Forgot your password?</a></li>
			        	<li><a href="#">Create an account</a></li>
			        </ul>
			      </div>			      
			  </form>
		    </div>
		  </div>
		</div>	
		<!-- /modalLoginForm-->

      <!-- Modal (quickViewModal) -->
      @yield('modal')		
		
		
		<!--================== /modal ==================-->
		




		<!-- jQuery 1.10.1--> 
		<script src="{{mix('js/webs/jquery-2.1.4.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		{{-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> --}}
		<!-- Bootstrap 3--> 
		<script src="{{mix('js/webs/bootstrap.js')}}"></script> 
		<!-- Specific Page External Plugins --> 

		<script src="{{mix('js/webs/slick.js')}}"></script>
		<script src="{{mix('js/webs/bootstrap-select.min.js')}}"></script>  
		<script src="{{mix('js/webs/jquery.plugin.min.js')}}"></script> 
		<script src="{{mix('js/webs/jquery.countdown.min.js')}}"></script>  		
		<script src="{{mix('js/webs/instafeed.min.js')}}"></script>  		
		<script src="{{mix('js/webs/jquery.magnific-popup.min.js')}}"></script>  		
		<script src="{{mix('js/webs/nouislider.js')}}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/11.1.0/nouislider.js"></script>
		<script src="{{mix('js/webs/isotope.pkgd.min.js')}}"></script> 
		<script src="{{mix('js/webs/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{mix('js/webs/jquery.colorbox-min.js')}}"></script>
		 <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
		<script type="text/javascript" src="{{mix('js/webs/jquery.themepunch.tools.min.js')}}"></script> 
		<script type="text/javascript" src="{{mix('js/webs/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<script src="{{mix('js/webs/custom.js')}}"></script>
		<script type="text/javascript">
			var update="{{asset('update/')}}";
			var checkout="{{asset('buycart/')}}";
			var email='<?=session('id')?>';
			var del="{{asset('delete/')}}";
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
				$(document).on('click','.delete',function(){
					var id= $(this).attr('data-id');
					console.log(id);
					$.ajax({
						url: del+'/' + id,
						type: 'DELETE',
						data: {
							id: id
						},
						success: function success(res) {
							toastr.success('You have deleted  it');
							window.location.reload(true);
						},
						error: function error(_error) {}
					});
				});
				$(document).on('click','.edit',function(){
					var id= $(this).attr('data-id');
					console.log(id);
					var quantity=$('.quantity').val();
					console.log(quantity);
					$.ajax({
						url: update+'/' + id,
						type: 'POST',
						data: {
							'quantity' : quantity,
						},
						success: function success(res) {
								toastr.success('You have update  it');
								window.location.reload(true);
						},
						error: function error(_error) {}
					});
				});
				$(document).on('click','.btn-checkout',function(){
					console.log(email);
					if (email=='') {
						window.location.href = "{{asset('shop')}}";
						
					}else{
						$.ajax({
							url: checkout,
							type: 'POST',
							cache: false,
							success: function success(response) {
								window.location.reload(true);
								console.log(response);
							}
						});
					}
				});
		</script>			
		<!-- Custom --> 
		@yield('footer')		
	</body>
</html>