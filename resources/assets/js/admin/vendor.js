$(document).ready(function(){

		    var table = $('#dataTables-example').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: url_vendor,
		        columns: [
		            { data: 'id', name: 'id' },
		            { data: 'name', name: 'name' },
		            { data: 'phone', name: 'phone' },
		            { data: 'address', name: 'address' },
		            { data: 'description', name: 'description' },
		            { data: 'action', name: 'action' }
		        ]
		    });
		    // Add
			    $(document).on('submit','#form_add', function(e){
			    	e.preventDefault();
			    	var data = new FormData();
	        		data.append('name',$(this).find('input[name="name"]').val());
	        		data.append('phone',$(this).find('input[name="phone"]').val());
	        		data.append('address',$(this).find('input[name="address"]').val());
	        		data.append('description',$(this).find('input[name="description"]').val());
					$.ajax({
					    url: 'vendor',
					    data: data,
				        type: 'POST',
				        contentType: false,
		        		processData: false,
					    success: function (response) {
					        if(response == "yes"){
				            	$('#add').modal('toggle');
				            	doRefresh();
				            	table.ajax.reload();
				            	toastr.success('You have been created a new vendor successful');
				            }else{
				            	toastr.error('You have been created a new vendor unsuccessful');

				            }
					    }
					});
			 	});
			// ------------------


		 	// Detail
			 	$(document).on('click','.detail', function(){
			 		var id=$(this).attr("data-id");
					$.ajax({
					    url: 'vendor/'+id,
					    method: 'GET',
					    success: function (response) {
					        console.log(response);
					        $('#name').text(response.name);
					        $('#phone').text(response.phone);
					        $('#address').text(response.address);
					        $('#description').text(response.description);

					    }
					});
			 	});

			// -------------


		 	// Edit
			 	$(document).on('click','.btn-edit', function(){
			 		var id=$(this).attr("data-id");
					$.ajax({
					    url: 'vendor/'+id,
					    method: 'GET',
					    // dataType: 'JSON',
					    success: function (response) {
					        console.log(response);
					        $('#form_edit').find('input[name="id"]').val(response.id);
					        $('#form_edit').find('input[name="name"]').val(response.name);
					        $('#form_edit').find('input[name="phone"]').val(response.phone);
					        $('#form_edit').find('input[name="address"]').val(response.address);
					        $('#form_edit').find('input[name="description"]').val(response.description);

					    }
					});
			 	});
		 	
			 	$(document).on('click','.edit', function(even){
				    event.preventDefault();
				    var data = new FormData();
	        		data.append('name',$('#form_edit').find('input[name="name"]').val());
	        		data.append('phone',$('#form_edit').find('input[name="phone"]').val());
	        		data.append('address',$('#form_edit').find('input[name="address"]').val());
	        		data.append('description',$('#form_edit').find('input[name="description"]').val());
				    var id = $('input[name="id"]').val();
				    $.ajax({
				        url: 'vendor/update/'+id ,
					    data: data,
				        type: 'POST',
				        contentType: false,
		        		processData: false,
				        success: function(result)
				        {
				            if(result == "yes"){
				            	$('#edit').modal('hide');
				            	toastr.success('You have been created a new vendor successful');
				            	table.ajax.reload();
				            }
				        },
				        error: function(data)
				        {
				            toastr.error('You have been updated a new vendor unsuccessful');
				            
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
							url:"vendor/"+id,
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