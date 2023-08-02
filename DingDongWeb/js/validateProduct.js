function validateForm() {
    var rule = true;

    if (document.getElementById("productName")) {
        var username = document.getElementById("productName").parentNode.querySelector(".form-message");
        var usernameValue = document.getElementById("productName").value;
        if (usernameValue === "") {
            username.innerHTML = "Vui lòng nhập trường này"
            rule = false;
        } else {
            username.innerHTML = ""
        }
    }

    if (document.getElementById("productPrice")) {
        var password = document.getElementById("productPrice").parentNode.querySelector(".form-message");
        var passwordValue = document.getElementById("productPrice").value;
        if (passwordValue === "") {
            password.innerHTML = "Vui lòng nhập trường này"
            rule = false;
        } else {
            password.innerHTML = ""
        }
    }

    if (document.getElementById("productImage")) {
        var passwordConfirm = document.getElementById("productImage").parentNode.querySelector(".form-message");
        var passwordConfirmValue = document.getElementById("productImage").value;
        if (passwordConfirmValue === "") {
            passwordConfirm.innerHTML = "Vui lòng nhập trường này"
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