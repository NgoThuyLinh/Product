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
      		List Vendor
		</h1>
		<button type="button" class="btn btn-primary" style="margin-top:15px;" data-toggle="modal" data-target="#add"><i class=" fa fa-plus" style="margin-right:10px"></i>Create vendor</button>
		<ol class="breadcrumb">
		    <li><a href=""><i class="fa fa-dashboard"></i> Home/ </a></li>
		    <li class="active"><a href="{{asset('vendor')}}">Vendor/</a></li>
		    <li class="active">List Vendor</li>
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
					                    <th style="text-align: center;border-bottom:none">ID</th>
					                    <th style="text-align: center;border-bottom:none">Name</th>
					                    <th style="text-align: center;border-bottom:none;">Phone</th>
					                    <th style="text-align: center;border-bottom:none">Address</th>
					                    <th style="text-align: center;border-bottom:none">Description</th>
					                    <th style="text-align: center;border-bottom:none; width: 90px">Action</th>
					                </tr>
					            </thead>
					            
		                    </table>
		                </div>
		            </div>
				</div>
			</div>
		</div>
    </div>
    <div class="content" id="page-wrapper">
		<div id="detail" class="modal fade" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
				  	<div class="modal-header">
				    	<button type="button" class="close" data-dismiss="modal">&times;</button>
				    	<h4 class="modal-title">Information vendor</h4>
				  	</div>
			        <div class="modal-body">
				      	<div class="container"> 
							<div class="row">
								<div class="col-md-12">
									<div class=" col-md-12">
										<h1 id="name" class="col-md-4" style="float: left; margin-top: 2rem;">
										</h1>  
										<div class="col-md-8" style="float: left;padding-left: 1rem;">
											
											<div class="row">
												<b class=" col-md-5"><i class="fa fa-phone"></i> Phone: </b>
												<span id="phone" class="col-md-7"></span>
											</div>
											<div class="row">
												<b class=" col-md-5"><i class="fa fa-map "></i> Address: </b>
												<span id="address" class="col-md-7"></span>
											</div>
											<div class="row">
												<b class=" col-md-5"><i class="fa fa-pencil "></i> Decription: </b>
												<span id="description" class="col-md-7"></span>
											</div>
										</div>
									</div> 
								</div>
							</div> 
							
						</div>
				    	<div style="height: 50px"></div>
			        </div>
	    		</div>
	    		<!-- /.modal-content --> 
	  		</div>
	    	<!-- /.modal-dialog --> 
		</div>
	</div>
	{{-- Create --}}
    <div class="content" id="page-wrapper">
		<div id="add" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-remote=""> 
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h4 class="modal-title">Create Category</h4>
				  </div>
				  <div class="modal-body">
				  	<form  role="form" id="form_add" method="POST" enctype="multipart/form-data">
				  		@csrf
						<div class="form-group">
				          	<label class="control-label">Name</label>
				          	<div style="padding-bottom: 30px">
				          		<div >
					              	<input type="text" class="form-control" name="name" value="" required="">
				            	</div>
				            	
				          	</div>
				        </div>        
				        <div class="form-group">
				          	<label class="control-label">Phone</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="text" class="form-control" name="phone" value="" required="">
				            	</div>
				            	
				          	</div>
				        </div>        
				        <div class="form-group">
				          	<label class="control-label">Address</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="text" class="form-control" name="address" value="" required="">
				            	</div>
				            	
				          	</div>
				        </div>        
				        
				       	<div class="form-group">
				          	<label class="control-label">Description</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div>
					              	<input type="text" class="form-control" name="description" value="{{old('description')}}" required="">
				            	</div>
				          	</div>
				        </div>
				       	<button type="submit"class="btn btn-primary create" >Creat</button>
					</form>
				  </div>
				  <div class="modal-footer">
				    
				    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				  </div>
				</div>

			</div>
		</div>
    </div>
    <!-- edit -->
    <div class="content" id="page-wrapper">
		<div id="edit" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-remote="">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h4 class="modal-title">Edit Category</h4>
				  </div>
				  <div class="modal-body">
				  	<form  role="form" id="form_edit" enctype="multipart/form-data">
				  		@csrf
				  		<input type="hidden" class="form-control" name="id" value="" required="">
						<div class="form-group">
				          	<label class="control-label">Name</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="text" class="form-control" name="name" value="" required="" value="{{old('name')}}" >
				            	</div>
				            	
				          	</div>
				        </div>        
				       <div class="form-group">
				          	<label class="control-label">Phone</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="text" class="form-control" name="phone" value="" required="" value="{{old('phone')}}" >
				            	</div>
				            	
				          	</div>
				        </div>        
				       <div class="form-group">
				          	<label class="control-label">Address</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div >
					              	<input type="text" class="form-control" name="address" value="" required="" value="{{old('address')}}" >
				            	</div>
				            	
				          	</div>
				        </div>        
				       
				       	<div class="form-group">
				          	<label class="control-label">Description</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div>
					              	<input type="text" class="form-control" name="description" value="{{old('description')}}" required="">
				            	</div>
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="{{mix('js/admin/vendor.js')}}"></script>

@endsection
@section('footer')


@endsection