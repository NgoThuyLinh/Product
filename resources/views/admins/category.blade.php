@extends('layouts/admins/master')
@section('content')
	<div class="content-header">
	    <h1>
      		List Category
		</h1>
		<button type="button" class="btn btn-primary" style="margin-top:15px;" data-toggle="modal" data-target="#add"><i class=" fa fa-plus" style="margin-right:10px"></i>Create category</button>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home/ </a></li>
		    <li class="active"><a href="{{asset('category')}}">Category/</a></li>
		    <li class="active">List Category</li>
		</ol>      
    </div>
    <div class="content">
    	<div id="page-wrapper">
			<div class="row">
		    	<div class="col-lg-12">
		 			<div class="panel panel-default">
		                <div class="table-responsive card-body">
		                    <table width="100%" class="table table-striped table-bordered table-hover  " id="dataTables-example" style="border-bottom: 1px solid #F2F2F2"  valign="center" align="center">
					            <thead>
					                <tr>
					                    <th style="text-align: center;border-bottom:none">ID</th>
					                    <th style="text-align: center;border-bottom:none">Name</th>
					                    {{-- <th style="text-align: center;border-bottom:none;width: 160px">Title</th> --}}
					                    <th  valign="center" style="text-align: center;border-bottom:none;">Thumbnail</th>
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
		<div class="row">
			<div id="detail" class="modal fade" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
					  	<div class="modal-header">
					    	<button type="button" class="close" data-dismiss="modal">&times;</button>
					    	<h4 class="modal-title">Information Category</h4>
					  	</div>
				        <div class="modal-body">
					      	<div class="container"> 
								<div class="row">
									<div class="col-md-12">
										<div class="span2 col-md-12">
											<h1 id="name" class="col-md-10">
											</h1>  
											<img class="img-responsive col-md-8" src="" id="thumbnail" style="float: left;">
										</div> 
										<div class="span4">
											
											<p>
												<h3><i class="fa fa-pen"></i></i> Decription: </h3><span id="description"></span>
												<br>
											</p>
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
	    <div class="row">
			<div id="add" class="modal fade" role="dialog">
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
					          	<div class="" style="padding-bottom: 30px">
					          		<div >
						              	<input type="text" class="form-control" name="name" value="" required="">
					            	</div>
					            	
					          	</div>
					        </div>        
					        <div class="form-group">
					          	<label class="control-label">Thumbnail</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="file" class="form-control" name="thumbnail" value="">
					            	</div>
					          	</div>
					        </div>
					       	<div class="form-group">
					          	<label class="control-label">Description</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="text" class="form-control" name="description" value="{{old('name')}}" required="">
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
	    <div class="row">
			<div id="edit" class="modal fade" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal">&times;</button>
					    <h4 class="modal-title">Edit Category</h4>
					  </div>
					  <div class="modal-body">
					  	<form  role="form" id="form_edit" enctype="multipart/form-data" method="POST">
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
					          	<label class="control-label">Thumbnail</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="file" class="form-control thumbnail" name="thumbnail" value="">
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
    </div>
	{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script> --}}
	
	
    

@endsection
@section('footer')
	<script type="text/javascript" src="{{mix('js/admin/category.js')}}"></script>
@endsection