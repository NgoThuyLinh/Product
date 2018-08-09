function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

$(document).ready(function () {
	// Modal
	$(document).on('shown.bs.modal','#uploadimage, #detailproduct, #edit1', function () {
	  $('#detail').css('overflow','hidden');
	}).on('hidden.bs.modal', function() {
	  $('#detail').css('overflow','auto');
	});
	
	// Select, Radio Input
	
	$(".form-check-input1").on("click", function () {
		$(this).attr('checked', true);
		$('.form-check-input2').attr('checked', false);
	});
	$(".form-check-input2").on("click", function () {
		$(this).attr('checked', true);
		$('.form-check-input1').attr('checked', false);
	});
	// end select-----------------------------------------------


	// Product
	var table = $('#dataTables-example').DataTable({
		processing: true,
		serverSide: true,
		ajax: url_product,
		orders: [],
		columns: [{ data: 'id', name: 'id' }, { data: 'code', name: 'code' }, { data: 'name', name: 'name' }, { data: 'vendor', name: 'vendor' }, { data: 'price', name: 'price' }, { data: 'description', name: 'description' }, { data: 'action', name: 'action' }]
	});
	// Delete
	$(document).on('click', '.delete', function (e) {
		e.preventDefault();
		var $this = $(this);
		var id = $(this).attr("data-id");
		console.log(id);
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this database!",
			icon: "warning",
			buttons: true,
			dangerMode: true
		}).then(function (willDelete) {
			if (willDelete) {
				$.ajax({
					url: "product/" + id,
					type: 'DELETE',
					data: {
						id: id
					},
					success: function success(res) {
						if (res == "yes") {
							$this.parents('tr').remove();
						} else {
							toastr.warning('You must delete all of products. After it is allowed to delete it');
							table.ajax.reload();
						}
					},
					error: function error(_error) {}
				});
				swal("Poof! You has been deleted a product!", {
					icon: "success"
				});
			} else {
				swal("Your database is safe!");
			}
		});
	});

	// Detail
	$(document).on('click', '.detail', function (e) {
		var id = $(this).attr("data-id");

		$('.adddetail').attr('data-id', id);

		console.log(id);
		$('#data-detail').DataTable().destroy();
		$('#data-detail').DataTable({
			paging: false,
			retrieve: true,
			processing: true,
			serverSide: true,
			ajax: url_productdetail + '/' + id,
			orders: [],
			columns: [{ data: 'id', name: 'id' }, { data: 'code', name: 'code' }, { data: 'color', name: 'color' }, { data: 'size', name: 'size' }, { data: 'quantity', name: 'quantity' }, { data: 'action', name: 'action' }]
		});
		$('#data-detail').DataTable().ajax.reload();
	});

	// Select category, size, color, vendor
	$(document).on('click', '.add', function () {
		$.ajax({
			url: "product/anydata",
			method: 'GET',
			// dataType: 'JSON',
			success: function success(response) {
				if ($('.same').children('option').length == 0) {

					$.each(response[1], function () {
						$('.vendors').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
					$.each(response[0], function () {
						$('.categories').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
					$.each(response[2], function () {
						$('.sizes').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
					$.each(response[3], function () {
						$('.colors').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
				}
			}
		});
	});
	$(document).on('click', '.adddetail ', function () {
		$.ajax({
			url: "product/anydata",
			method: 'GET',
			// dataType: 'JSON',
			success: function success(response) {
				if ($('.same').children('option').length == 0) {

					$.each(response[2], function () {
						$('.sizes').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
					$.each(response[3], function () {
						$('.colors').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
				}
			}
		});
	});
	
	$(document).on('click', '#adddetail', function () {
		$.ajax({
			url: "product/anydata",
			method: 'GET',
			// dataType: 'JSON',
			success: function success(response) {
				if ($('.same').children('option').length == 0) {

					$.each(response[1], function () {
						$('.vendors').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
					$.each(response[0], function () {
						$('.categories').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
					$.each(response[2], function () {
						$('.sizes').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
					$.each(response[3], function () {
						$('.colors').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
				}
			}
		});
	});

	// Add
	$('#form_add').submit(function (event) {
		var _rules;

		event.preventDefault();

		$("#form_add").validate({
			rules: (_rules = {
				code: {
					required: true,
					zipcode: true
				},
				description: {
					required: true,
					minlength: 10
				},
				name: "required",
				price: "required",
				historical_cost: "required"
			}, _defineProperty(_rules, 'description', "required"), _defineProperty(_rules, 'category_id', "required"), _defineProperty(_rules, 'vendor_id', "required"), _defineProperty(_rules, 'sex', "required"), _rules),
			messages: {
				price: "Please enter a price",
				historical_cost: "Please enter a price",
				description: {
					required: "Please enter a description",
					minlength: "Text you entered non length"
				},
				category_id: "Please enter a category",
				vendor_id: "Please enter a vendor",
				code: {
					required: "Vui lòng nhập địa chỉ",
					zipcode: "You must enter the correct code"
				},
				name: "Please enter a name",
				sex: "Please select  a sex"
			}
		});
		var data = new FormData();
		data.append('code', $('#form_add').find('input[name="code"]').val());
		data.append('thumbnail', $('#form_add').find('input[type=file]')[0].files[0]);
		data.append('name', $('#form_add').find('input[name="name"]').val());
		data.append('price', $('#form_add').find('input[name="price"]').val());
		data.append('historical_cost', $('#form_add').find('input[name="historical_cost"]').val());
		data.append('description', $('#form_add').find('textarea[name="description"]').val());
		data.append('vendor_id', $('.vendors').val());
		data.append('sex', $("input[name='sex']:checked").val());
		data.append('category_id', $('.categories').val());
		$.ajax({
			url: 'product',
			type: 'POST',
			contentType: false,
			processData: false,
			data: data,

			success: function success(result) {
				if (result == "yes") {
					$('#add').modal('toggle');
					toastr.success('You have been successfully created a new product');

					table.ajax.reload();
				} else {
					toastr.error('You have been unsuccessfully created a new product');
				}
			},
			error: function error(data) {}
		});
	});

	// Edit
	$(document).on('click', '.edit', function () {
		var id = $(this).attr("data-id");
		console.log(id);
		$("#form_edit").validate({
			rules: {
				code: {
					required: true,
					zipcode: true
				},
				name: "required",
				price: "required",
				historical_cost: "required",
				description: {
					required: true,
					minlength: 10
				},
				category_id: "required",
				vendor_id: "required",
				sex: "required"
			},
			messages: {
				price: "Please enter a price",
				historical_cost: "Please enter a price",
				description: {
					required: "Please enter a description",
					minlength: "Text you entered non length"
				},
				category_id: "Please enter a category",
				vendor_id: "Please enter a vendor",
				code: {
					required: "Vui lòng nhập địa chỉ",
					zipcode: "You must enter the correct code"
				},
				name: "Please enter a name",
				sex: "Please select  a sex"
			}
		});
		$.ajax({
			url: "product/" + id,
			method: 'GET',
			// dataType: 'JSON',
			success: function success(response) {
				if ($('.same').children('option').length == 0) {

					$.each(response[1], function () {
						$('.vendors').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
					$.each(response[0], function () {
						$('.categories').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
				}
				console.log(response[2]);
				$('.categories').val(response[2].category_id);
				$('.vendors').val(response[2].vendor_id);
				$('#form_edit').find('input[name="id"]').val(id);
				$('#form_edit').find('input[name="code"]').val(response[2].code);
				$('#form_edit').find('input[name="name"]').val(response[2].name);
				$('#form_edit').find('input[name="price"]').val(response[2].price);
				$('#form_edit').find('input[name="historical_cost"]').val(response[2].historical_cost);
				$('#form_edit').find('textarea[name="description"]').text(response[2].description);
				$('#form_edit').find('input[name="sex"][value=' + response[2].sex + ']').attr('checked', true);
			}
		});
	});

	$('#form_edit').submit(function (event) {
		event.preventDefault();
		var id = $('#form_edit').find('input[name="id"]').val();
		var data = new FormData();
		data.append('code', $('#form_edit').find('input[name="code"]').val());
		data.append('name', $('#form_edit').find('input[name="name"]').val());
		data.append('thumbnail', $('#form_edit').find('input[type=file]')[0].files[0]);
		data.append('price', $('#form_edit').find('input[name="price"]').val());
		data.append('historical_cost', $('#form_edit').find('input[name="historical_cost"]').val());
		data.append('description', $('#form_edit').find('textarea[name="description"]').text());
		data.append('category_id', $('.categories').val());
		data.append('vendor_id', $('.vendors').val());
		data.append('sex', $("input[name='sex']:checked").val());
		$.ajax({
			url: 'product/update/'+ id,
			type: 'POST',
			contentType: false,
			processData: false,
			data: data,

			success: function success(result) {
				if (result == "yes") {
					$('#edit').modal('toggle');
					toastr.success('You have been successfully updated a product');
					table.ajax.reload();
				} else {
					toastr.error('You have been unsuccessfully updated a product');
				}
			},
			error: function error(data) {}
		});
	});
	// end product-------------------------------------------------


	// Product detail
	// add
	$(document).on('click', '#formadd', function (even) {
		var _rules2;

		event.preventDefault();
		$("#form_add1").validate({
			rules: (_rules2 = {
				quantity: {
					required: true,
					number: true
				},
				description: {
					required: true,
					minlength: 10
				}
			}, _defineProperty(_rules2, 'description', "required"), _defineProperty(_rules2, 'color_id', "required"), _defineProperty(_rules2, 'size_id', "required"), _rules2),
			messages: {
				description: {
					required: "Please enter a description",
					minlength: "Text you entered non length"
				},
				color_id: "Please enter a color",
				size_id: "Please enter a size",
				quantity: {
					required: "Please enter a quantity",
					number: "You must enter a number"
				}
			}
		});
		var id = $('.adddetail').attr("data-id");
		console.log(id);
		var data = new FormData();
		data.append('product_id', id);
		data.append('quantity', $('#form_add1').find('input[name="quantity"]').val());
		data.append('description', $('#form_add1').find('textarea[name="description"]').val());
		data.append('size_id', $('.sizes').val());
		data.append('color_id', $('.colors').val());
		$.ajax({
			url: 'productdetail',
			type: 'POST',
			contentType: false,
			processData: false,
			data: data,
			success: function success(result) {
				if (result == "yes") {
					$('#adddetail').modal('toggle');
					toastr.success('You have been successfully created a new product');
					$('#data-detail').DataTable().ajax.reload();
				} else if ('no') {
					toastr.warning('The database already exists this product.You can create a new product');
				} else {
					toastr.error('You have been unsuccessfully created a new product');
				}
			},
			error: function error(data) {}
		});
	});
	$(document).on('click', '.delete1', function (e) {
		e.preventDefault();
		var $this = $(this);
		var id = $(this).attr("data-id");
		console.log(id);
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this database!",
			icon: "warning",
			buttons: true,
			dangerMode: true
		}).then(function (willDelete) {
			if (willDelete) {
				$.ajax({
					url: "productdetail/" + id,
					type: 'DELETE',
					data: {
						id: id
					},
					success: function success(res) {
						$this.parents('tr').remove();
						$('#data-detail').DataTable().ajax.reload();
					},
					error: function error(_error2) {}
				});
				swal("Poof! You has been deleted a product!", {
					icon: "success"
				});
			} else {
				swal("Your database is safe!");
			}
		});
	});

	// Edit
	$(document).on('click', '.edit1', function () {
		var id = $(this).attr("data-id");
		console.log(id);
		$.ajax({
			url: "productdetail/show1/" + id,
			method: 'GET',
			// dataType: 'JSON',
			success: function success(response) {
				if ($('.same').children('option').length == 0) {

					$.each(response[0], function () {
						$('.sizes').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
					$.each(response[1], function () {
						$('.colors').append($('<option>', {
							value: this.id,
							text: this.name
						}));
					});
				}
				console.log(response[2]);
				$('.sizes').val(response[2].size_id);
				$('.colors').val(response[2].color_id);
				$('#form_editdetail').find('input[name="id"]').val(response[2].id);
				$('#form_editdetail').find('input[name="product_id"]').val(response[2].product_id);
				$('#form_editdetail').find('input[name="code"]').val(response[2].code);
				$('#form_editdetail').find('input[name="quantity"]').val(response[2].quantity);
				$('#form_editdetail').find('input[name="price"]').val(response[2].price);
				$('#form_editdetail').find('textarea[name="description"]').val(response[2].description);
			}
		});
	});

	$('#form_editdetail').submit(function (event) {
		var _rules3;

		event.preventDefault();
		$("#form_editdetail").validate({
			rules: (_rules3 = {
				quantity: {
					required: true,
					number: true
				},
				description: {
					required: true,
					minlength: 10
				}
			}, _defineProperty(_rules3, 'description', "required"), _defineProperty(_rules3, 'color_id', "required"), _defineProperty(_rules3, 'size_id', "required"), _rules3),
			messages: {
				description: {
					required: "Please enter a description",
					minlength: "Text you entered non length"
				},
				category_id: "Please enter a category",
				vendor_id: "Please enter a vendor",
				quantity: {
					required: "Please enter a quantity",
					number: "You must enter the correct code"
				},
				color_id: "Please enter a color",
				size_id: "Please enter a size"
			}
		});
		var id = $('#form_editdetail').find('input[name="id"]').val();
		var data = new FormData();
		data.append('code', $('#form_editdetail').find('input[name="code"]').val());
		data.append('quantity', $('#form_editdetail').find('input[name="quantity"]').val());
		data.append('description', $('#form_editdetail').find('textarea[name="description"]').val());
		data.append('size_id', $('.sizes').val());
		data.append('color_id', $('.colors').val());
		$.ajax({
			url: 'productdetail/update/' + id,
			type: 'POST',
			contentType: false,
			processData: false,
			data: data,

			success: function success(result) {
				if (result == "yes") {
					$('#edit1').modal('toggle');
					toastr.success('You have been successfully updated a product');
					$('#data-detail').DataTable().ajax.reload();
				} else {
					toastr.error('You have been unsuccessfully updated a product');
				}
			},
			error: function error(data) {}
		});
	});
	$("#file-1").fileinput({

		theme: 'fa',
		uploadUrl: "image-view",
		uploadExtraData: function uploadExtraData() {
			// var id=$('.adddetail').attr("data-id");

			return {
				_token: $("input[name='_token']").val(),
				product_id: $('.uploadimage').attr("data-id")
			};
		},
		allowedFileExtensions: ['jpg', 'png', 'gif', 'jpeg'],
		overwriteInitial: false,
		maxFileSize: 2000,
		maxFilesNum: 10,
		slugCallback: function slugCallback(filename) {
			return filename.replace('(', '_').replace(']', '_');
		}
	});
	$(document).on('click', '#uploadimage1', function (e) {

		e.preventDefault();
		var formData = new FormData($(this).parents('form_upload')[0]);
		var product_id = $('.uploadimage').attr("data-id");
		var filelist = [];
		var formData = new FormData();
		formData.append('product_id', product_id);
		//for each entry, add to formdata to later access via $_FILES["file" + i]
		for (var i = 0, len = document.getElementById('file-1').files.length; i < len; i++) {
			// filelist.push(document.getElementById('file-1').files[i]);
			formData.append("file[" + i + "]", document.getElementById('file-1').files[i]);
		}

		console.log(formData);
		$.ajax({
			url: 'image',
			type: 'POST',
			data: formData,
			dataType: 'json',
			async: true,
			processData: false, // tell jQuery not to process the data
			contentType: false,
			success: function success(result) {
				if (result == "yes") {
					$('#uploadimage').modal('toggle');
					toastr.success('You have been successfully uploaded images');
					$('#data-detail').DataTable().ajax.reload();
				} else {
					toastr.error('You have been unsuccessfully  uploaded images');
				}
			},
			error: function error(data) {}
		});
	});
	// detail
	$(document).on('click', '.detail1', function () {
		var id = $(this).attr("data-id");
		console.log(id);
		$.ajax({
			url: 'productdetail/show/' + id,
			method: 'GET',
			success: function success(response) {
				console.log(response);
				$('.product-title').text(response[0].name);
				$('.product-description').text(response[0].description);
				$('.product-price').text('Price: ' + response[0].price);
				$('.product-size').text(response[0].size);
				$('.product-color').css({ "background-color": response[0].color, "width": "5rem", "height": "4rem", "border": "1px solid #777", "float": "left" });
				var links = $.parseJSON(response[1].links);
				$('.preview-pic').html('');
				$('.preview-thumbnail').html('');
				console.log(links);
				for (var i = 0; i < links.length; i++) {
					var link = links[i];
					if (i==0) {
						var text = "<div class='tab-pane active' id='pic-" + i + "'><img src='" + path + 'storage/' + link + "'></div>";
						var text1 = "<li><a data-target='#pic-" + i + "' data-toggle='tab'> <img src='" + path + 'storage/' + link + "' alt='' ></a></li>";
						$('.preview-pic').append(text);
						$('.preview-thumbnail').append(text1);

					} else {
						var text = "<div class='tab-pane' id='pic-" + i + "'><img src='" + path + 'storage/' + link + "'></div>";
						var text1 = "<li><a data-target='#pic-" + i + "' data-toggle='tab'> <img src='" + path + 'storage/' + link + "' alt='' ></a></li>";
						$('.preview-pic').append(text);
						$('.preview-thumbnail').append(text1);
					}
					
					
				}
			}
		});
	});
	// end product detail--------------------------
	$('.tabs .tab-links a').on('click', function (e) {
		var currentAttrValue = $(this).attr('href');
		// Show/Hide Tabs
		$('.tabs ' + currentAttrValue).show().siblings().hide();
		// Change/remove current tab to active
		$(this).parent('li').addClass('active').siblings().removeClass('active');
		e.preventDefault();
	});
});