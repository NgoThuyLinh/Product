@extends('layouts/admins/master')
@section('header')
	<link rel="stylesheet" type="text/css" href="{{mix('css/admin/product.css')}}">
	<style type="text/css">
		.error {
		    font-family: Arial;
		    font-size: 10pt;
		    color: red;
		}
		
	</style>
	
@endsection
@section('content')
	<div class="content-header">
	    <h1>
      		List Product
		</h1>
		<button class="btn btn-sm btn-success add" data-toggle="modal" data-target="#add" style="margin-top:15px;"><i class=" fa fa-plus" style="margin-right:10px"></i>Create product</button>		
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home/ </a></li>
		    <li class="active"><a href="{{asset('admin/product')}}">Product/</a></li>
		    <li class="active">List Product</li>
		</ol>      
    </div>
    <div class="content">
    	<div id="page-wrapper">
			<div class="row">
		    	<div class="col-lg-12">
		 			<div class="panel panel-default">
		                <div class="table-responsive card-body">
		                    <table width="100%" class="table table-striped table-bordered table-hover  " id="dataTables-example" style="border-bottom: 1px solid #F2F2F2">
					            <thead>
					                <tr>
					                	<th style="text-align: center;border-bottom:none;">ID</th>
					                    <th style="text-align: center;border-bottom:none;">Code</th>
					                    <th style="text-align: center;border-bottom:none">Name</th>
					                   	<th style="text-align: center;border-bottom:none">Vendor</th>
					                    <th style="text-align: center;border-bottom:none">Price</th>
					                    <th style="text-align: center;border-bottom:none">Description</th>
					                    <th style="text-align: center;border-bottom:none; width: 90px;">Action</th>
					                </tr>
					            </thead>
					            
		                    </table>
		                </div>
		            </div>
				</div>
			</div>
		</div>
    </div>

    
	{{-- EDit product --}}
	<div class="content" id="page-wrapper">
		<div class="row">
			<div id="edit" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h4 class="modal-title">Update product</h4>
				  </div>
				  <div class="modal-body">
				  	<form  role="form" id="form_edit" enctype="multipart/form-data">
				  		@csrf
				  		<input type="hidden" class="form-control" name="id" value="" required="">
				  		<div class="form-group">
				          	<label class="control-label">Code</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="text" class="form-control" name="code" value="{{old('code')}}" placeholder="MD12345 MD12345-1234">
				            	</div>
				            	
				          	</div>
				        </div>
						<div class="form-group">
				          	<label class="control-label">Name</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="text" class="form-control" name="name" value="{{old('name')}}" >
				            	</div>
				            	
				          	</div>
				        </div>
				        <div class="form-group">
				          	<label class="control-label">Historical cost</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="text" class="form-control" name="historical_cost" value="{{old('historical_cost')}}">
				            	</div>
				            	
				          	</div>
				        </div>
				        <div class="form-group">
				          	<label class="control-label">Price</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="text" class="form-control" name="price" value="{{old('price')}}" required="">
				            	</div>
				            	
				          	</div>
				        </div>
				        <div class="form-group">
				          	<label class="control-label">Description</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div>
					              	<textarea name="description" class="form-control">{{old('description')}}</textarea>
				            	</div>
				          	</div>
				        </div>
				        <div class="form-group">
					          	<label class="control-label">Thumbnail</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="file" class="form-control thumbnail" name="thumbnail" value="">
					            	</div>
					          	</div>
					        </div>
				        <div class="form-group">
							<label for="">Vendor</label>
							<select name="vendor_id"class="form-control vendors same">
							</select>
						</div>
	              		<div class="form-group">
							<label for="">Category</label>
							<select name="category_id" class="form-control categories same">
							</select>
						</div>
						<div class="form-group">
							<div class="form-check">
								<label style="margin-right: 2rem;">Sex:</label>
							  	<label class="form-check-label">
							    	<input type="radio" class="form-check-input1" value="1" name="sex" checked="true">Female
							  	</label>
							  	<label class="form-check-label">
							    	<input type="radio" class="form-check-input2" value="0"  name="sex">Male
								</label>
							</div>
						</div>
				       	
				       	<button type="submit" class="btn btn-primary edit" >Save</button>
					</form>
				  </div>
				  <div class="modal-footer">
				    
				    <button type="button" class="btn btn-default" id="closeModal" data-dismiss="modal">Cancel</button>
				  </div>
				</div>
			</div>
		</div>
		</div>
		
	</div>
	

	{{-- Add product --}}
		<div class="content" id="page-wrapper">
			<div id="add" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal">&times;</button>
					    <h4 class="modal-title">Add product</h4>
					  </div>
					  <div class="modal-body">
					  	<form  role="form" id="form_add" enctype="multipart/form-data" method="POST">
					  		@csrf
					  		<div class="form-group">
					          	<label class="control-label">Code</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div >
						              	<input type="text" class="form-control" name="code" value="{{old('code')}}" placeholder="MD12345 MD12345-1234">
					            	</div>
					            	
					          	</div>
					        </div>
							<div class="form-group">
					          	<label class="control-label">Name</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div >
						              	<input type="text" class="form-control" name="name" value="{{old('name')}}" required="">
					            	</div>
					            	
					          	</div>
					        </div>
					        <div class="form-group">
					          	<label class="control-label">Historical cost</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div >
						              	<input type="text" class="form-control" name="historical_cost" value="{{old('historical_cost')}}">
					            	</div>
					            	
					          	</div>
					        </div>
					        <div class="form-group">
					          	<label class="control-label">Price</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div >
						              	<input type="text" class="form-control" name="price" value="{{old('price')}}" required="">
					            	</div>
					            	
					          	</div>
					        </div>       
					        <div class="form-group">
					          	<label class="control-label">Description</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
					          			<textarea class="form-control" name="description">{{old('description')}}</textarea>
					            	</div>
					          	</div>
					        </div>
					        <div class="form-group">
					          	<label class="control-label">Thumbnail</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="file" class="form-control thumbnail" name="thumbnail" value="">
					            	</div>
					          	</div>
					        </div>
		              		<div class="form-group">
								<label for="">Vendor</label>
								<select name="vendor_id"class="form-control vendors" required="required">
								</select>
							</div>
		              		<div class="form-group">
								<label for="">Category</label>
								<select name="category_id" class="form-control categories" required="required" >
								</select>
							</div>
							<div class="form-group">
								<div class="form-check">
									<label style="margin-right: 2rem;">Sex:</label>
								  	<label class="form-check-label">
								    	<input type="radio" class="form-check-input1" value="1" name="sex" checked="true">Female
								  	</label>
								  	<label class="form-check-label">
								    	<input type="radio" class="form-check-input2" value="0"  name="sex">Male
									</label>
								</div>
							</div>
					       	<button type="submit" class="btn btn-primary" >Create</button>
						</form>
					  </div>
					  <div class="modal-footer">
					    
					    <button type="button" class="btn btn-default" id="closeModal" data-dismiss="modal">Cancel</button>
					  </div>
					</div>
				</div>
			</div>
		</div>
	{{-- Product detail --}}
		<div class="content" id="page-wrapper">
			<div id="detail" class="modal fade" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content" style="width: 200%; right: 8rem;">
					  	<div class="modal-header">
					    	<button type="button" class="close" data-dismiss="modal">&times;</button>
					    	<h4 class="modal-title" style="margin-right: 29rem">Product detail</h4>
					  	</div>
				        <div class="modal-body">
					      	<div class="container"> 
								<div class="row">
							    	<div class="col-lg-12">
							 			<div class="panel panel-default">
							                <div class="table-responsive card-body">
							                	<button class="btn btn-sm btn-success adddetail add" data-toggle="modal" data-target="#adddetail" style="margin-top:15px;"><i class=" fa fa-plus" style="margin-right:10px"></i>Create product</button>
							                    <table width="100%" class="table table-striped table-bordered table-hover  " id="data-detail" style="border-bottom: 1px solid #F2F2F2">
										            <thead>
										                <tr>
										                	<th style="text-align: center;border-bottom:none;">ID</th>
										                    <th style="text-align: center;border-bottom:none;">Code</th>
										                    <th style="text-align: center;border-bottom:none">Color</th>
										                   	<th style="text-align: center;border-bottom:none">Size</th>
										                    <th style="text-align: center;border-bottom:none">Quantity</th>
										                    <th style="text-align: center;border-bottom:none; width: 120px;">Action</th>
										                </tr>
										            </thead>
										            
							                    </table>
							                </div>
							            </div>
									</div>
								</div>				
							</div>
					    	<div style="height: 50px"></div>
				        </div>
				        <div class="modal-footer">
						    
					    	<button type="button" class="btn btn-default" id="closeModal" data-dismiss="modal">Cancel</button>
					  	</div>
		    		</div>
		    		<!-- /.modal-content --> 
		  		</div>
		    	<!-- /.modal-dialog --> 
			</div>
		</div>
	{{-- //................................................. --}}
	


	
	{{-- Productdetail detail --}}
		<div class="content" id="page-wrapper">
			<div id="detailproduct" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">
					<!-- Modal content-->
					<div class="modal-content" style="width: 123%;margin-left:1.5rem">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal">&times;</button>
					    <h4 class="modal-title">Detail product</h4>
					  </div>
					  <div class="modal-body">
					  		<div class="container"> 
								<div class="card"> 
								  	<div class="container-fliud"> 
								   		<div class="wrapper row"> 
								    		<div class="preview col-md-6"> 
								     			<div class="preview-pic tab-content"> 
								      				 
								     			</div> 
									     		<ul class="preview-thumbnail nav nav-tabs">
											    	 
									     		</ul> 
									    	</div> 
										    <div class="details col-md-6"> 
										     	<h3 class="product-title"></h3> 
										     	<div class="rating"> 
										      		<div class="stars"> 
										      			<span class="fa fa-star checked"></span> 
										      			<span class="fa fa-star checked"></span> 
										      			<span class="fa fa-star checked"></span> 
										      			<span class="fa fa-star"></span> 
										      			<span class="fa fa-star"></span> 
										      		</div>
										      		<span class="review-no">123 đánh giá</span> 
										     	</div> 
										     	<p class="product-description"></p> 
										     	<h4 class="product-price"></h4> 
										     	<p class="vote">
										     		<strong>91%</strong> of người mua hài lòng với sản phẩm này 
										     		<strong>(87 bình chọn)</strong>
										     	</p> 
										     	<h5 >Kích cỡ: 
										     		<span class="product-size" data-toggle="tooltip" title="small"></span>
										     	</h5> 
										     	<div>
										     		<h5 style="float: left;margin-right: 1rem;margin-top: 1rem;">Màu:</h5>  
										     		<div class="product-color"></div>
										     	</div>
										     	
										    </div> 
								   		</div> 
								  	</div> 
								</div>
							</div> 
						</div>
					  </div>
				</div>
			</div>
		</div>
	{{-- Productdetail add --}}
	<div class="content" id="page-wrapper">
		<div id="adddetail" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h4 class="modal-title">Add product</h4>
				  </div>
				  <div class="modal-body">
				  	<form  role="form" id="form_add1" enctype="multipart/form-data" method="POST">
				  		@csrf
				        <div class="form-group">
				          	<label class="control-label">Quantity</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="number" class="form-control" name="quantity" value="{{old('quantity')}}" required="">
				            	</div>
				            	
				          	</div>
				        </div> 
				        <div class="form-group">
				          	<label class="control-label">Description</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div>
				          			<textarea class="form-control" name="description">{{old('description')}}</textarea>
				            	</div>
				          	</div>
				        </div>
	              		<div class="form-group">
							<label for="">Size</label>
							<select name="size_id"class="form-control sizes same">
							</select>
						</div>
	              		<div class="form-group">
							<label for="">Color</label>
							<select name="color_id" class="form-control colors same">
							</select>
						</div>
	                    
					</form>
				  </div>
				  <div class="modal-footer">
			       	<button type="submit" class="btn btn-primary" id="formadd">Create</button>
				    <button type="button" class="btn btn-default" id="closeModal" data-dismiss="modal">Cancel</button>
				  </div>
				</div>
			</div>
		</div>
	</div>

	{{-- Productdetail edit --}}

	<div class="content" id="page-wrapper">
		<div id="edit1" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h4 class="modal-title">Update product detail</h4>
				  </div>
				  <div class="modal-body">
				  	<form  role="form" id="form_editdetail" enctype="multipart/form-data">
				  		@csrf
				  		<input type="hidden" class="form-control" name="id" value="">
				  		<input type="hidden" class="form-control" name="code" value="" >
				  		<input type="hidden" class="form-control" name="product_id" value="">
				  		
				        <div class="form-group">
				          	<label class="control-label">Quantity</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="number" class="form-control" name="quantity" value="{{old('quantity')}}">
				            	</div>
				            	
				          	</div>
				        </div>       
				        <div class="form-group">
				          	<label class="control-label">Description</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div>
					              	<textarea name="description" class="form-control">{{old('description')}}</textarea>
				            	</div>
				          	</div>
				        </div>
				        <div class="form-group">
							<label for="">Size</label>
							<select name="size_id"class="form-control sizes same">
							</select>
						</div>
	              		<div class="form-group">
							<label for="">Color</label>
							<select name="color_id" class="form-control colors same">
							</select>
						</div>
				       	
				       	<button type="submit" class="btn btn-primary edit" >Save</button>
					</form>
				  </div>
				  <div class="modal-footer">
				    
				    <button type="button" class="btn btn-default" id="closeModal" data-dismiss="modal">Cancel</button>
				  </div>
				</div>
			</div>
		</div>
	</div>

	{{-- Upload images --}}
	<div class="content" id="page-wrapper">
		<div id="uploadimage" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content" style="margin-left: 50px">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h4 class="modal-title">Upload image of product</h4>
				  </div>
				  <div class="modal-body">
				  	<form  role="form" id="form_upload" enctype="multipart/form-data" method="POST" name="form_upload">
				  		@csrf
				  		
	                    <div class="form-group">
	                        <div class="file-loading">
							    <input id="file-1" name="file[]" multiple type="file" accept="image/*">
							</div>
							<button type="submit" class="btn btn-primary" id="uploadimage1" style="margin-top:10px">Upload</button>
							<span style="color:red; font-size: 12px;line-height: 12px; "><br>Upload photos at the same time</span>
	                    </div>
	                    <div class="form-group" style="margin-top: 10px">
				  			
				  		</div>
					</form>
				  </div>
				  <div class="modal-footer">
			       	
				    <button type="button" class="btn btn-default" id="closeModal" data-dismiss="modal">Cancel</button>
				  </div>
				</div>
			</div>
		</div>
	</div>

@endsection
@section('footer')
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/piexif.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/sortable.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/fileinput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/themes/fa/theme.js"></script>
	
	<script type="text/javascript">
		var path = "{{asset('')}}"
	</script>
	<script type="text/javascript" src="{{mix('js/admin/product.js')}}"></script>
	
@endsection