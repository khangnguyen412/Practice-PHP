<?php 
    /**lấy giá trị của từ người dùng ta sử dụng 2 phương thức sau 
     * $post hay $get 
     * đối vs form có method = post thì ta sử dụng $post
     * đối vs form có method = get thì ta sử dụng $get
     * sử dụng $_REQUEST cho cả 2
     */
    echo $_POST["email"]. "<br>"; // lấy giá trị của email 
    echo $_POST["password"]. "<br>";
    // tương tự như trên cho phương thức get và request 
?>