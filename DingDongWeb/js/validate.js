function validateForm() {
    // lấy thành phần cha của trường inputs
    var username = document.getElementById("username").parentNode.querySelector(".form-message");
    var password = document.getElementById("password").parentNode.querySelector(".form-message");
    var passwordConfirm = document.getElementById("passwordConfirmation").parentNode.querySelector(".form-message");

    // lấy giá trị của các trường input
    var usernameValue = document.getElementById("username").value;
    var passwordValue = document.getElementById("password").value;
    var passwordConfirmValue = document.getElementById("passwordConfirmation").value;

    var rule = true;

    if (usernameValue === "") {
        username.innerHTML = "Vui lòng nhập trường này"
        rule = false;
    } else if (usernameValue.length < 6 || usernameValue.length > 15) {
        username.innerHTML = "Vui lòng từ 6 đến 15 kí tự"
        rule = false;
    } else {
        username.innerHTML = ""
    }

    if (passwordValue === "") {
        password.innerHTML = "Vui lòng nhập trường này"
        rule = false;
    } else if (passwordValue.length < 6 || passwordValue.length > 15) {
        password.innerHTML = "Vui lòng từ 6 đến 15 kí tự"
        rule = false;
    } else {
        password.innerHTML = ""
    }

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