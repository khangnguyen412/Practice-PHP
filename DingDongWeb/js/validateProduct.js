function validateForm() {
    var rule = true;

    if (document.getElementById("productName")) {
        var productName = document.getElementById("productName").parentNode.querySelector(".form-message");
        var productNameValue = document.getElementById("productName").value.trim();
        if (productNameValue === "") {
            productName.innerHTML = "Vui lòng nhập trường này"
            rule = false;
        } else {
            productName.innerHTML = ""
        }
    }

    if (document.getElementById("productPrice")) {
        var productPrice = document.getElementById("productPrice").parentNode.querySelector(".form-message");
        var productPriceValue = document.getElementById("productPrice").value.trim();
        if (productPriceValue === "") {
            productPrice.innerHTML = "Vui lòng nhập trường này"
            rule = false;
        } else {
            productPrice.innerHTML = ""
        }
    }

    if (document.getElementById("productOldImage")) {
        var productImage = document.getElementById("productOldImage").parentNode.querySelector(".form-message");
        var productImageValue = document.getElementById("productOldImage").value.trim();
    } else if (document.getElementById("productImage")) {
        var productImage = document.getElementById("productImage").parentNode.querySelector(".form-message");
        var productImageValue = document.getElementById("productImage").value.trim();
        if (productImageValue === "") {
            productImage.innerHTML = "Vui lòng nhập trường này"
            rule = false;
        } else {
            productImage.innerHTML = ""
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