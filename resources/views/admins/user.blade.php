@extends('layouts/admins/master')
@section('header')

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
	<style type="text/css">
		.odd td, .even td{
			text-align:center;
		}
	</style>
@endsection

@section('content')
	<div class="content-header">
	    <h1 align="center">
      		List User
		</h1>
		<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#add" style="margin-top:15px;"><i class=" fa fa-plus" style="margin-right:10px"></i>Create user</button>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home/ </a></li>
		    <li class="active">User/</li>
		    <li class="active">List User</li>
		</ol>      
    </div>

    <div class="content">
    	<div id="page-wrapper">
			<div class="row">
		    	<div class="col-lg-12">
		 			<div class="panel panel-default">
		                <div class="panel-body">
		                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="border-bottom: 1px solid #F2F2F2">
					            <thead>
					                <tr>
					                    <th style="text-align: center;border-bottom:none">ID</th>
					                    <th style="text-align: center;border-bottom:none">Name</th>
					                    <th style="text-align: center;border-bottom:none">Email</th>
					                    <th style="text-align: center;border-bottom:none">Username</th>
					                    <th style="text-align: center;border-bottom:none">Action</th>
					                </tr>
					            </thead>
					            
		                    </table>
		                </div>
		            </div>
				</div>
			</div>
			<div class="row">
			{{-- Detail --}}
				<div id="detail" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
						  	<div class="modal-header">
						    	<button type="button" class="close" data-dismiss="modal">&times;</button>
						    	<h4 class="modal-title">Information User</h4>
						  	</div>
					        <div class="modal-body">
						      	<div class="container"> 
									<div class="row">
										<div class="col-md-12">
											<div class="span2 col-md-12">
												<h1 id="name" class="col-md-10">
												</h1>  
												{{-- <img class="img-responsive col-md-8" src="" id="thumbnail" style="float: left;"> --}}
											</div> 
											<div class="span4">
												<p>
													<h3><i class="fa fa-pencil"></i> Username: <span id="username"></span></h3>
													<br>
													<h3><i class="fa fa-envelope"></i> Email: <span id="email"></span></h3>
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
			{{-- ............. --}}
			{{-- Create --}}
			    <div class="row">
					<div id="add" class="modal fade" role="dialog">
						<div class="modal-dialog">
						<!-- Modal content-->
							<div class="modal-content">
							  <div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal">&times;</button>
							    <h4 class="modal-title">Create User</h4>
							  </div>
							  <div class="modal-body">
							  	<form  role="form" id="form_add" method="POST">
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
							          	<label class="control-label">Email</label>
							          	<div class="" style="padding-bottom: 30px">
							          		<div>
								              	<input type="email" multiple="true"  class="form-control" name="email" value="" required="">
							            	</div>
							          	</div>
							        </div>
							        <div class="form-group">
							          	<label class="control-label">Password</label>
							          	<div class="" style="padding-bottom: 30px">
							          		<div>
								              	<input type="password" class="form-control" name="password" value="{{old('name')}}" required="">
							            	</div>
							          	</div>
							        </div>
							       	<div class="form-group">
							          	<label class="control-label">Username</label>
							          	<div class="" style="padding-bottom: 30px">
							          		<div>
								              	<input type="text" class="form-control" name="username" value="{{old('name')}}" required="">
							            	</div>
							          	</div>
							        </div>
							        <div class="modal-footer">
							    
							       		<button type="submit"class="btn btn-primary create" >Creat</button>
									    <button type="button" class="btn btn-default" data-dismiss="modal" id="add1">Cancel</button>
									</div>
								</form>
							  </div>
							</div>

						</div>
					</div>
			    </div>
			{{-- ............... --}}
		    <!-- edit -->
			    <div class="row">
					<div id="edit" class="modal fade" role="dialog">
						<div class="modal-dialog">
						<!-- Modal content-->
							<div class="modal-content">
							  <div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal">&times;</button>
							    <h4 class="modal-title">Edit User</h4>
							  </div>
							  <div class="modal-body">
							  	<form  role="form" id="form_edit" method="POST">
							  		@csrf
							  		<input type="hidden" class="form-control" name="id" value="" required="">
									<div class="form-group">
							          	<label class="control-label">Name</label>
							          	<div class="" style="padding-bottom: 30px">
							          		<div >
								              	<input type="text" id="name" class="form-control" name="name" value="" required="">
							            	</div>
							            	
							          	</div>
							        </div>        
							        <div class="form-group">
							          	<label class="control-label">Email</label>
							          	<div class="" style="padding-bottom: 30px">
							          		<div>
								              	<input type="email" id="email" class="form-control" name="email" value="" required="">
							            	</div>
							          	</div>
							        </div>
							        <div class="form-group">
							          	<label class="control-label">Username</label>
							          	<div class="" style="padding-bottom: 30px">
							          		<div>
								              	<input id="username" type="text" class="form-control" name="username" value="{{old('name')}}" required="">
							            	</div>
							          	</div>
							        </div>
							       	<div class="modal-footer">
						       			<button type="submit"class="btn btn-primary edit" >Save</button>
									    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									</div>
								</form>
							  </div>
							  
							</div>

						</div>
					</div>
			    </div>
			 {{-- ....................... --}}
		</div>
    </div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@endsection
@section('footer')
	<script type="text/javascript">

		$(document).ready(function(){
		    var table=$('#dataTables-example').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: url_users,
		        columns: [
		            { data: 'id', name: 'id' },
		            { data: 'name', name: 'name' },
		            { data: 'email', name: 'email' },
		            { data: 'username', name: 'username' },
		            { data: 'action', name: 'action' }
		        ]
		    });
		    $('#form_add').submit(function(event) {
			    event.preventDefault();
			    var data = new FormData();
        		data.append('name',$('#form_add').find('input[name="name"]').val());
        		data.append('username',$('#form_add').find('input[name="username"]').val());
        		data.append('password',$('#form_add').find('input[name="password"]').val());
        		data.append('email',$('#form_add').find('input[name="email"]').val());
				$.ajax({
				    url: 'user',
				    method: 'POST',
				    contentType: false,
			        processData: false,
			        data : data,
				    // dataType: 'JSON',
				    success: function (response) {
				        console.log(response);
				        $('#add').modal('toggle');
		            	// swal("Good job!", "You clicked the button!", "success");
		            	table.ajax.reload();
		            	swal("Success!", "You updated record!", "success");
				    }
				});
		 	});
		 	$(document).on('click','.edit', function(){
		 		var id=$(this).attr("data-id");
				$.ajax({
				    url: 'user/show/'+id,
				    method: 'GET',
				    // dataType: 'JSON',
				    success: function (response) {
				        console.log(response);
				        $('#form_edit').find('input[name="id"]').val(response.id);
				        $('#form_edit').find('input[name="name"]').val(response.name);
				        //$('#form_edit').find('input[name="thumbnail"]').val(response.thumbnail);
				        $('#form_edit').find('input[name="email"]').val(response.email);
				        $('#form_edit').find('input[name="username"]').val(response.username);

				    }
				});
		 	});
		 	$(document).on('click','.detail', function(){
		 		var id=$(this).attr("data-id");
				$.ajax({
				    url: 'user/show/'+id,
				    method: 'GET',
				    // dataType: 'JSON',
				    success: function (response) {
				        console.log(response);
				        // var images = $('#thumbnail').attr("src");
				        $('#name').text(response.name);
				        // document.getElementById('thumbnail').src=response.thumbnail;
				        // $("#thumbnail").attr("src").replace(response.thumbnai);
				        // $('#thumbnail').html("<img src="' + response.thumbnai + '">");
				        //$('#form_edit').find('input[name="thumbnail"]').val(response.thumbnail);
				        $('#username').text(response.username);
				        $('#email').text(response.email);

				    }
				});
		 	});
		 	$('#form_edit').submit(function(event) {
			    event.preventDefault();
			    var data = new FormData();
        		data.append('name',$('#form_edit').find('input[name="name"]').val());
        		data.append('username',$('#form_edit').find('input[name="username"]').val());
        		data.append('email',$('#form_edit').find('input[name="email"]').val());
			    var id = $('input[name="id"]').val();
			    $.ajax({
			        url: 'user/update/'+ id,
			        type: 'POST',
			        contentType: false,
			        processData: false,
			        data : data
			        ,
			        success: function(result)
			        {
			            if(result == "yes"){
			            	$('#add').modal('toggle');
			            	table.ajax.reload();
		            		swal("Good job!", "Update success!", "success");
			            }
			        },
			        error: function(data)
			        {
			            console.log(data);
			        }
			    });

			});
		 	$(document).on('click','.edit',function(){
				var category_id= $(this).attr('data-id');
				$.ajax({

					type: 'GET',
					url: 'user/show/'+ category_id,
					success: function(response){
						console.log(response);
						 $('#name').text(response.name);
				        $('#username').text(response.username);
				        $('#email').text(response.email);
					}
				})
			});
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
						url:"user/"+id,
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
	                swal("Poof! You has been deleted user!", {
	                  icon: "success",
	                });
	              } else {
	                swal("Your imaginary file is safe!");
	              }
	            });
			});

		});
	</script>
@endsection