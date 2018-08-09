$(document).ready(function(){
			
	$.validator.addMethod("zipcode",function(value, element) {
        return this.optional(element) || /^[A-Z]{2}[0-9]{5}(?:-[0-9]{4})?$/.test(value);
    }, "Please provide a valid zipcode.");
    $("#form_edit").validate({
        rules: {
            code: {
                required: true,
                zipcode: true
            },
            name: "required",
            price: "required",
            historical_cost: "required",
            description:{
                required: true,
                minlength: 10,
            },
            category_id: "required",
            vendor_id: "required",
            sex: "required",
        },
        messages: {
            price: "Please enter a price",
            historical_cost: "Please enter a price",
            description:{
                required: "Please enter a description",
                minlength: "Text you entered non length",
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
    
    $("#form_add").validate({
        rules: {
            code: {
                required: true,
                zipcode: true
            },
            description:{
                required: true,
                minlength: 10,
            },
            name: "required",
            price: "required",
            historical_cost: "required",
            description: "required",
            category_id: "required",
            vendor_id: "required",
            sex: "required",
        },
        messages: {
            price: "Please enter a price",
            historical_cost: "Please enter a price",
            description:{
                required: "Please enter a description",
                minlength: "Text you entered non length",
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

    $("#form_add1").validate({
        rules: {
            quantity: {
                required: true,
                number: true
            },
            description:{
                required: true,
                minlength: 10,
            },
            description: "required",
            color_id: "required",
            size_id: "required"
        },
        messages: {
            description:{
                required: "Please enter a description",
                minlength: "Text you entered non length",
            },
            color_id: "Please enter a color",
            size_id: "Please enter a size",
            quantity: {
                required: "Please enter a quantity",
                number: "You must enter a number"
            }
        }
    });
    
    $("#form_editdetail").validate({
        rules: {
            quantity: {
                required: true,
                number: true
            },
            description:{
                required: true,
                minlength: 10,
            },
            description: "required",
            color_id: "required",
            size_id: "required",
        },
        messages: {
            description:{
                required: "Please enter a description",
                minlength: "Text you entered non length",
            },
            category_id: "Please enter a category",
            vendor_id: "Please enter a vendor",
            quantity: {
                required: "Please enter a quantity",
                number: "You must enter the correct code"
            },
            color_id: "Please enter a color",
            size_id: "Please enter a size",
        }
    });

});