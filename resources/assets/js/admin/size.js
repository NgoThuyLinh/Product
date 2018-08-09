$(document).ready(function(){

		    var table = $('#dataTables-example').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: url_size,
		        columns: [
		            { data: 'id', name: 'id' },
		            { data: 'name', name: 'name' },
		            { data: 'description', name: 'description' },
		            { data: 'action', name: 'action' }
		        ]
		    });
		    // Add
			    $(document).on('submit','#form_add', function(e){
			    	e.preventDefault();
			    	var data = new FormData();
	        		data.append('name',$(this).find('input[name="name"]').val());
	        		data.append('description',$(this).find('input[name="description"]').val());
					$.ajax({
					    url: 'size',
					    data: data,
				        type: 'POST',
				        contentType: false,
		        		processData: false,
					    success: function (response) {
					        if(response == "yes"){
				            	$('#add').modal('toggle');
				            	table.ajax.reload();
				            	toastr.success('You have been created a new category successful');
				            }else{
				            	toastr.error('You have been created a new category unsuccessful');

				            }
					    }
					});
			 	});
			// ------------------


		 	// Detail
			 	$(document).on('click','.detail', function(){
			 		var id=$(this).attr("data-id");
					$.ajax({
					    url: 'size/'+id,
					    method: 'GET',
					    success: function (response) {
					        console.log(response);
					        $('#name').text(response.name);
					        $('#description').text(response.description);

					    }
					});
			 	});

			// -------------


		 	// Edit
			 	$(document).on('click','.btn-edit', function(){
			 		var id=$(this).attr("data-id");
					$.ajax({
					    url: 'size/'+id,
					    method: 'GET',
					    // dataType: 'JSON',
					    success: function (response) {
					        console.log(response);
					        $('#form_edit').find('input[name="id"]').val(response.id);
					        $('#form_edit').find('input[name="name"]').val(response.name);
					        $('#form_edit').find('input[name="description"]').val(response.description);

					    }
					});
			 	});
		 	
			 	$(document).on('click','.edit', function(even){
				    event.preventDefault();
				    var data = new FormData();
	        		data.append('name',$('#form_edit').find('input[name="name"]').val());
	        		data.append('description',$('#form_edit').find('input[name="description"]').val());
				    var id = $('input[name="id"]').val();
				    $.ajax({
				        url: 'size/update/'+id ,
					    data: data,
				        type: 'POST',
				        contentType: false,
		        		processData: false,
				        success: function(result)
				        {
				            if(result == "yes"){
				            	$('#edit').modal('hide');
				            	toastr.success('You have been updated a new size successful');
				            	table.ajax.reload();
				            }
				        },
				        error: function(data)
				        {
				            toastr.error('You have been updated a new size unsuccessful');
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
							url:"size/"+id,
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