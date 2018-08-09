function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

$(document).ready(function () {
    var _rules, _rules2, _rules3;

    $.validator.addMethod("zipcode", function (value, element) {
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
        }, _defineProperty(_rules, "description", "required"), _defineProperty(_rules, "category_id", "required"), _defineProperty(_rules, "vendor_id", "required"), _defineProperty(_rules, "sex", "required"), _rules),
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
        }, _defineProperty(_rules2, "description", "required"), _defineProperty(_rules2, "color_id", "required"), _defineProperty(_rules2, "size_id", "required"), _rules2),
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
        }, _defineProperty(_rules3, "description", "required"), _defineProperty(_rules3, "color_id", "required"), _defineProperty(_rules3, "size_id", "required"), _rules3),
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
});