
$(document).ready(function () {
    $.validator.addMethod(
            "regex",
            function (value, element, regexp) {
                return this.optional(element) || regexp.test(value);
            },
            "Please check your input."
            );
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#user_create_form").validate({
        rules: {
            username: {
                required: true,
                regex: /^[a-zA-Z-' ]*$/,
                minlength: 5,
                maxlength: 15
            },
            email: {
                required: true,
                minlength: 5,
                maxlength: 100
            }
        },
        messages: {
            username: {
                required: "Vui lòng nhập username",
                minlength: "Username tối thiểu 5 ký tự",
                maxlength: "Username tối đa 10 ký tự",
                regex: "Vui lòng nhập chỉ ký tự"
            },
            email: {
                required: "Bắt buộc phải điền email"
            }
        }
    });
});

