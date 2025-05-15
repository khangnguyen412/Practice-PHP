<?php 
    $username = $_POST["email"];
    $password = $_POST["password"];
    
    $result = ($username == "admin" && $password == "123")? "đăng nhập thành công": "đăng nhập thất bại";
    echo $result;
?>