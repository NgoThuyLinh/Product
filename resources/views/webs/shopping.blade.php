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
		<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">SHOPPING CART</h1>
				</div>
				<!-- /title -->		
				<!-- Shopping cart table -->
				<div class="container-widget">
					<table class="shopping-cart-table">
						<thead>
							<tr>
								<th>Product</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>Unit Price</th>
								<th>Qty</th>
								<th>Subtotal</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach(Cart::content() as $row)
							<tr>
								<td>
									<div class="shopping-cart-table__product-image">
										<a href="{{asset('product')}}{{$row->id}}">
											<img class="img-responsive" src="{{asset('')}}storage/{{$row->options->thumbnail}}" alt="">
										</a>
									</div>
								</td>
								<td>
									<h5 class="shopping-cart-table__product-name text-left text-uppercase">
										<a href="{{asset('product')}}{{$row->id}}">{{$row->name}}</a>
									</h5>
									<ul class="shopping-cart-table__list-parameters">
										<li>
											<span>Color:</span> <div style="width: 50px; height: 50px; background: {{$row->options->color}}"></div>
										</li>
										<li>
											<span>Quantity:</span>{{$row->qty}}
										</li>
										<li>
											<span>Image:  <img src="{{asset('')}}storage/{{$k=json_decode($row->options->link)[0]}}" class="img-responsive" style="height: 100px"></span>
										</li>
										<li>
											<span>Paper:</span> Type Linen 
										</li>
										<li>
											<span>Size:</span> {{$row->options->size}}
										</li>
										<li class="visible-xs">
											<span>Price:</span>
											<span class="price-mobile">{{$row->price}}</span>
										</li>
										<li class="visible-xs">
											<span>Qty:</span>
											<!--  -->
											<div class="number input-counter">
											    <span class="minus-btn"></span>
											    <input type="text" value="{{$row->qty}}" name="quantity" />
											    <span class="plus-btn"></span>
											</div>
											<!-- / -->
										</li>
									</ul>																				
								</td>
								<td>
									<a class="shopping-cart-table__create icon icon-create " href="#"></a>
									<a class="shopping-cart-table__delete icon icon-delete visible-xs" href="#"></a>
								</td>
								<td>
									<div class="shopping-cart-table__product-price unit-price">
										{{$row->price}}
									</div>
								</td>
								<td>
									<div class="shopping-cart-table__input">
										<!--  -->
										<div class="number input-counter">
										    <span class="minus-btn"></span>
										    <input type="text" value="1" size="5"/>
										    <span class="plus-btn"></span>
										</div>
										<!-- / -->
									</div>								
								</td>
								<td>
									<div class="shopping-cart-table__product-price subtotal">
										{{$row->price*$row->qty}}
									</div>
								</td>
								<td>
									<a class="shopping-cart-table__delete icon icon-clear" href="#"></a>
								</td>
							</tr>
							@endforeach								
						</tbody>
					</table>
				</div>
				<!-- /Shopping cart table -->
				<div class="divider divider--xs"></div>
				<div class="clearfix shopping-cart-btns">
					<a class="btn btn--ys btn--light pull-right" href="#"><span class="icon icon-autorenew"></span>UPDATE SHOPPING CART</a>
					<div class="divider divider--xs visible-xs"></div>
		            <a class="btn btn--ys btn--light" href="#"><span class="icon icon-delete"></span>CLEAR SHOPPING CART</a> 
		            <div class="divider divider--xs visible-xs"></div>
		            <a class="btn btn--ys btn--light pull-left btn-right" href="{{asset('list')}}"><span class="icon icon-keyboard_arrow_left"></span>CONTINUE SHOPPING </a>         
		            <div class="divider divider--xs visible-xs"></div>   	
		           
		        </div>		        
				<div class="divider--md"></div>
				<div class="row">
					<div class="col-md-4">
						<div class=" card card--padding">
							<h4>DISCOUNT CODES</h4>
								<div class="form-group">
							      <label for="inputDiscountCodes">Enter your coupon code if you have one.</label>
							      <input type="text" class="form-control" id="inputDiscountCodes">
							    </div>
								
						</div>
					</div>
					<div class="divider--md visible-sm visible-xs"></div>
					<div class="col-md-4">
						<div class="card card--padding">
							<h4>ESTIMATE SHIPPING AND TAX</h4>
							<p>Enter your destination to get a shipping estimate.</p>
							<div class="form_custorm">
								<div class="form-group">
									<label  for="selectCountry">Name <sup>*</sup></label>
									<input type="text" name="name" class="form-control" required="" value="{{old('name')}}">									
								</div>									
								<div class="form-group">
							      <label for="inputCity">Phone</label>
							      <input type="text" class="form-control" name="phone" required="" value="{{old('phone')}}">
							    </div>
							    <div class="form-group">
							      <label for="inputZip">Addresses</label>
							      <input type="text" class="form-control" name="address" required="" value="{{old('address')}}">
							    </div>
							</div>
						</div>
					</div>
					<div class="divider--md visible-sm visible-xs"></div>
					
					<div class="col-md-4">
						<div class="card card--padding">
							<table class="table-total">
								<tbody>
									<tr>
										<th class="text-left">Subtotal:</th>
										<td class="text-right">{{Cart::subtotal()}}</td>
									</tr>
									<tr>
										<th class="text-left">Tax:</th>
										<td class="text-right">{{Cart::tax()}}</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>GRAND TOTAL:</th>
										<td>{{Cart::total()}}</td>
									</tr>
								</tfoot>
							</table>
							<button type="submit" class="btn btn--ys btn--full btn--xl custorm_checkout">PROCEED TO CHECKOUT <span class="icon icon--flippedX icon-reply"></span></button>
							
						</div>
					</div>
				</div>				
			</div>
		</div>
	@endsection
	@section('modal')
    	
    @endsection
	
	@section('footer')
		<script type="text/javascript">
			$(document).ready(function(){
				$(document).on('click','.custorm_checkout',function(){
					$.ajax({
						url: checkout,
						type: 'POST',
						cache: false,
						data:{
							'name':$('.form_custorm').find('input[name="name"]').val(),
							'phone':$('.form_custorm').find('input[name="phone"]').val(),
							'address':$('.form_custorm').find('input[name="address"]').val(),
						},
						success: function success(response) {
							toastr.success('Thanks you!');
							window.location.href = "{{asset('list')}}";
						}
					});
				});
			});
		</script>
	@endsection	