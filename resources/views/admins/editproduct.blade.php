@extends('layouts/admins/master')
@section('header')
	<style type="text/css">
		.odd td, .even td{
			text-align:center;
		}
	</style>
@endsection

@section('content')
	<div class="content-header">
	    <h1>
      		Update Product
		</h1>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home/ </a></li>
		    <li class="active"><a href="{{asset('admin/product')}}">Product/</a></li>
		    <li class="active">Update Product</li>
		</ol>      
    </div>
	<div class="content">
		<div id="page-wrapper">
			<form action="{{asset('admin/')}}/product/update/{{$detail->id}}{{$product->id}}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal row">
				@csrf
				<div class="col-md-6">            
		            <div class="card card-primary">
		            	{{-- <div class="card-body">
		              		<div class="form-group" >
								<label for="">Code</label>
								<input type="hidden" class="form-control" id="" placeholder="Code" name="code" value="{{$product->code}}">
							</div>
		              	</div> --}}
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" id="" placeholder="Name" name="name" value="{{$product->name}}">
							</div>
		              	</div>	              	
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Hitorical cost</label>
								<input type="number" class="form-control" name="historical_cost" placeholder="Hitorical cost" value="{{$product->historical_cost}}">
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Price</label>
								<input type="number" class="form-control" name="price" placeholder="Price" value="{{$product->price}}">
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Quantity</label>
								<input type="number" class="form-control" name="quantity" placeholder="Quantity" required="" value="{{$detail->quantity}}">
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Description</label>
								<textarea  class="form-control" name="decription"  rows="4" >{{$product->decription}}</textarea>
							</div>
		              	</div>
			        </div>
			                  
	          	</div>
	          	<div class="col-md-6 clearfix">
	          		<div class="card card-primary">
		          		<div class="card-body">
		              		<div class="form-group">
								<label for="">Vendor</label>
								<select name="vendor_id" size="4" class="form-control" required="required">
									@foreach($vendors as $vendor)
										<option value="{{$vendor->id}}" @if($vendor->id==$product->vendor_id) selected @endif>{{$vendor->name}}</option>
									@endforeach
								</select>
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Category</label>
								<select name="category_id" size="4" class="form-control" required="required" >
									@foreach($categories as $category)
										<option value="{{$category->id}}" @if($category->id==$product->category_id) selected @endif>{{$category->name}}</option>
									@endforeach
								</select>
							</div>
		              	</div>
	              	</div> 
	          		<div class="card card-primary">
	          			
		          		<div class="card-body">
		              		<div class="form-group">
								<label for="">Size</label>
								<select name="size_id" size="4" class="form-control" required="required" >
									@foreach($sizes as $size)
										<option value="{{$size->id}}" @if($size->id==$detail->size_id) selected @endif>{{$size->size}}</option>
									@endforeach
								</select>
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Color</label>
								<select name="color_id" size="4" class="form-control" required="required" >
									@foreach($colors as $color)
										<option value="{{$color->id}}" @if($color->id==$detail->color_id) selected @endif>{{$color->color}}</option>
									@endforeach
								</select>
							</div>
		              	</div>
		            </div>            	
	          	</div>
	          	<button class="btn btn-success col-md-offset-5 col-md-2" type="submit">Update product</button>
			</form>	
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
@endsection
@section('footer')
	<script type="text/javascript">
		$(document).ready(function(){

		});
	</script>
@endsection