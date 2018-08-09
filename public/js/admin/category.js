$(document).ready(function () {

		var table = $('#dataTables-example').DataTable({
				processing: true,
				serverSide: true,
				ajax: url_categories,
				columns: [{ data: 'id', name: 'id' }, { data: 'name', name: 'name' }, { data: 'thumbnail', name: 'thumbnail' }, { data: 'description', name: 'description', valign: 'center' }, { data: 'action', name: 'action' }]
		});
		// Add
		$(document).on('click', '.create', function (e) {
				e.preventDefault();
				var data = new FormData();
				data.append('thumbnail', $('#form_add').find('input[type=file]')[0].files[0]);
				data.append('name', $('#form_add').find('input[name="name"]').val());
				data.append('description', $('#form_add').find('input[name="description"]').val());
				$.ajax({
						url: 'category',
						processData: false,
						contentType: false,
						method: 'POST',
						data: data,
						// dataType: 'JSON',
						success: function success(response) {
								if (response == "yes") {
										$('#add').modal('hide');
										table.ajax.reload();
										toastr.success('You have been created a new category successful');
								} else {
										toastr.error('You have been created a new category unsuccessful');
								}
						}
				});
		});
		// ------------------


		// Detail
		$(document).on('click', '.detail', function () {
				var id = $(this).attr("data-id");
				$.ajax({
						url: 'category/' + id,
						method: 'GET',

						// dataType: 'JSON',
						success: function success(response) {
								console.log(response);
								// var images = $('#thumbnail').attr("src");
								$('#name').text(response.name);
								document.getElementById('thumbnail').src = response.thumbnail;
								$('#slug').text(response.slug);
								$('#description').text(response.description);
						}
				});
		});

		// -------------


		// Edit
		$(document).on('click', '.btn-edit', function () {
				var id = $(this).attr("data-id");
				$.ajax({
						url: 'category/' + id,
						method: 'GET',
						// dataType: 'JSON',
						success: function success(response) {
								console.log(response);
								$('#form_edit').find('input[name="id"]').val(response.id);
								$('#form_edit').find('input[name="name"]').val(response.name);
								$('#form_edit').find('input[name="description"]').val(response.description);
						}
				});
		});

		$(document).on('submit', '#form_edit', function (even) {
				event.preventDefault();
				var data = new FormData();
				data.append('thumbnail', $('#form_edit').find('input[type=file]')[0].files[0]);
				data.append('name', $('#form_edit').find('input[name="name"]').val());
				data.append('description', $('#form_edit').find('input[name="description"]').val());
				var id = $('input[name="id"]').val();
				$.ajax({
						url: 'category/update/' + id,
						contentType: false,
						processData: false,
						type: 'POST',
						data: data,
						success: function success(result) {
								if (result == "yes") {
										$('#edit').modal('toggle');
										toastr.success('You have been updated a category successful');
										table.ajax.reload();
								} else {
										toastr.error('You have been updated a category unsuccessful');
								}
						},
						error: function error(data) {
								console.log(data);
						}
				});
		});

		// -------------


		// Delete
		$(document).on('click', '.delete', function (e) {
				e.preventDefault();
				var $this = $(this);
				var id = $(this).attr("data-id");
				// console.log(id);
				swal({
						title: "Are you sure?",
						text: "Once deleted, you will not be able to recover this database!",
						icon: "warning",
						buttons: true,
						dangerMode: true
				}).then(function (willDelete) {
						if (willDelete) {
								$.ajax({
										url: "category/" + id,
										type: 'DELETE',
										data: {
												id: id
										},
										success: function success(res) {
												$this.parents('tr').remove();
										},
										error: function error(_error) {}
								});
								swal("Poof! Your category has been deleted!", {
										icon: "success"
								});
						} else {
								swal("Your category is safe!");
						}
				});
		});
		// -------------
});