// document.getElementById("myForm").addEventListener('submit', function(event) {
//     event.preventDefault();
// });

function validateForm() {
    var rule = true;

    // kiểm tra và lấy thành phần cha, giá trị của trường inputs đó
    if (document.getElementById("username")) {
        //lấy thành phần cha, giá trị của trường inputs đó
        var username = document.getElementById("username").parentNode.querySelector(".form-message");
        var usernameValue = document.getElementById("username").value.trim();

        // validation rules
        if (usernameValue === "") {
            username.innerHTML = "Vui lòng nhập trường này"
            rule = false;
        } else if (usernameValue.length < 6 || usernameValue.length > 15) {
            username.innerHTML = "Vui lòng từ 6 đến 15 kí tự"
            rule = false;
        } else {
            username.innerHTML = ""
        }
    }

    if (document.getElementById("password")) {
        var password = document.getElementById("password").parentNode.querySelector(".form-message");
        var passwordValue = document.getElementById("password").value.trim();
        if (passwordValue === "") {
            password.innerHTML = "Vui lòng nhập trường này"
            rule = false;
        } else if (passwordValue.length < 6 || passwordValue.length > 15) {
            password.innerHTML = "Vui lòng từ 6 đến 15 kí tự"
            rule = false;
        } else {
            password.innerHTML = ""
        }
    }

    if (document.getElementById("passwordConfirmation")) {
        var passwordConfirm = document.getElementById("passwordConfirmation").parentNode.querySelector(".form-message");
        var passwordConfirmValue = document.getElementById("passwordConfirmation").value.trim();
        if (passwordConfirmValue === "") {
            passwordConfirm.innerHTML = "Vui lòng xác nhận lại mật khẩu"
            rule = false;
        } else if (passwordConfirmValue.length < 6 || passwordConfirmValue.length > 15) {
            passwordConfirm.innerHTML = "Xác nhận mật khẩu không hợp lệ"
            rule = false;
        } else if (passwordConfirmValue != passwordValue) {
            passwordConfirm.innerHTML = "Xác nhận mật khẩu không đúng"
            rule = false;
        } else {
            passwordConfirm.innerHTML = ""
        }
    }


    if (!rule) {
        return false;
    } else {
        clearMesss = document.querySelectorAll(".form-message")
        clearMesss.forEach((element) => {
            element.textContent = ""
        });
        return true;
    }
}