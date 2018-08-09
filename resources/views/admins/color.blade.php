@extends('layouts/admins/master')
@section('header')
  
	<style type="text/css">
		.odd td, .even td{
			text-align:center;
		}
		.colors input{
			float: left;
			background: transparent;
			height: 80px;
		}
	</style>

@endsection

@section('content')
	<div class="content-header">
	    <h1>
      		List color
		</h1>
		<button type="button" class="btn btn-primary" style="margin-top:15px;" data-toggle="modal" data-target="#add"><i class=" fa fa-plus" style="margin-right:10px"></i>Create color</button>
		<ol class="breadcrumb">
		    <li><a href=""><i class="fa fa-dashboard"></i> Home/ </a></li>
		    <li class="active"><a href="{{asset('vendor')}}">Color/</a></li>
		    <li class="active">List color</li>
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
					                    <th style="text-align: center;border-bottom:none;">Name</th>
					                    <th style="text-align: center;border-bottom:none">Color</th>
					                    <th style="text-align: center;border-bottom:none;">Action</th>
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
				    	<h4 class="modal-title">Information color</h4>
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
												<div id="color"></div>
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
		<div id="add" class="modal fade" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h4 class="modal-title">Create color</h4>
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
				          	<label class="control-label">Color</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div class="colors">
					              	<input class="col-md-6 colorpicker" type="color"  pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55"> 
									<input class="col-md-6 hexcolor" type="text" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55" >
				            	</div>
				            	
				          	</div>
				        </div>        
				        
					</form>
				  </div>
				  <div class="modal-footer">
			       	<button type="submit"class="btn btn-primary create" >Create</button>
				    
				    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				  </div>
				</div>

			</div>
		</div>
    </div>
    <!-- edit -->
    <div class="content" id="page-wrapper">
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
				          	<label class="control-label">Color</label>
				          	<div class="" style="padding-bottom: 30px">
				          		<div class="colors">
					              	<input class="col-md-6 colorpicker" type="color" id="colorpicker" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$"> 
									<input class="col-md-6 hexcolor" type="text" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" id="hexcolor">
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
    <script type="text/javascript">

		$(document).ready(function(){
			$('.colorpicker').on('change', function() {
				$('.hexcolor').val(this.value);
			});
			$('.hexcolor').on('change', function() {
			  $('.colorpicker').val(this.value);
			});
		    var table = $('#dataTables-example').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: url_color,
		        columns: [
		            { data: 'id', name: 'id' },
		            { data: 'name', name: 'name' },
		            { data: 'color', name: 'color' },
		            { data: 'action', name: 'action' }
		        ]
		    });
		    // Add
			    $(document).on('click','.create', function(e){
			    	e.preventDefault();
			    	var data = new FormData();
	        		data.append('name',$('#form_add').find('input[name="name"]').val());
	        		data.append('color',$('#form_add').find('input[name="color"]').val());
	        		console.log(data);
					$.ajax({
					    url: 'color',
					    contentType: false,
		        		processData: false,
					    type: 'POST',
					    data: data,
					    success: function (response) {
					        if(response == "yes"){
				            	$('#add').modal('hide');
				            	table.ajax.reload();
				            	toastr.success('You have been created a new color successful');
				            }else{
				            	toastr.error('You have been created a new color unsuccessful');

				            }
					    }
					});
			 	});
			// ------------------


		 	// Detail
			 	$(document).on('click','.detail', function(){
			 		var id=$(this).attr("data-id");
					$.ajax({
					    url: 'color/'+id,
					    method: 'GET',
					    success: function (response) {
					        console.log(response);
					        $('#name').text(response.name);
					        $('.colorpicker').val(response.color);
					        $('.hexcolor').val(response.color);

					    }
					});
			 	});

			// -------------


		 	// Edit
			 	$(document).on('click','.btn-edit', function(){
			 		var id=$(this).attr("data-id");
					$.ajax({
					    url: 'color/'+id,
					    method: 'GET',
					    // dataType: 'JSON',
					    success: function (response) {
					        console.log(response);
					        $('#form_edit').find('input[name="id"]').val(response.id);
					        $('#form_edit').find('input[name="name"]').val(response.name);
					        $('#form_edit').find('input[name="color"]').val(response.color);
					        $('#form_edit').find('input[id="colorpicker"]').val(response.color);

					    }
					});
			 	});
		 	
			 	$(document).on('click','.edit', function(even){
				    event.preventDefault();
				    var data = new FormData();
	        		data.append('name',$('#form_edit').find('input[name="name"]').val());
	        		data.append('color',$('#form_edit').find('input[name="color"]').val());
				    var id = $('input[name="id"]').val();
				    console.log(data);
				    $.ajax({
				        url: 'color/update/'+id ,
				        contentType: false,
		        		processData: false,
					    data: data,
				        type: 'POST',
				        success: function(result)
				        {
				            if(result == "yes"){
				            	$('#edit').modal('hide');
				            	toastr.success('You have been created a new color successful');
				            	table.ajax.reload();
				            }
				        },
				        error: function(data)
				        {
				            toastr.error('You have been updated a new color unsuccessful');
				        }
				    });

				});

			// -------------



			// Delete
			 	$(document).on('click','.delete', function(e){
					e.preventDefault();
					var $this=$(this);
					var id=$(this).attr("data-id");
					// console.log(id);
					swal({
		              title: "Are you sure?",
		              text: "Once deleted, you will not be able to recover this database!",
		              icon: "warning",
		              buttons: true,
		              dangerMode: true,
		            })
		            .then((willDelete) => {
			              if (willDelete) {
			                $.ajax({
							url:"color/"+id,
							type:'DELETE',
							data:{
								id:id
							},
							success: function(res){
								$this.parents('tr').remove();
							},
							error: function(error){

							}
						})
		                swal("Poof! Your category has been deleted!", {
		                  icon: "success",
		                });
		              } else {
		                swal("Your category is safe!");
		              }
		            });
					
				});
			// -------------

		});
	</script>

@endsection
@section('footer')


@endsection