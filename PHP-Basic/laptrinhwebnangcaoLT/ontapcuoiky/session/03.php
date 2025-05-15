<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_SESSION)){
            session_start();
        }
        if($_SESSION["is_login"] == true){
            echo "xin chào ". $_SESSION["username"]. "<br>";
            print_r($_SESSION);
        }else{
            header("Location: ./01.php");
        } 
    ?>
    <form action="./02.php" method="POST">
        <button type="submit" name="usercontrol" value="logout">đăng xuất</button>
    </form>
    <p>Xin chào tới trang 3</p>
    <form action="./02.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="username" id="" placeholder="nhập tên user">
        <input type="password" name="password" id="" placeholder="nhập pass">
        <input type="email" name="email" id="" placeholder="nhập email">
        <input type="file" name="file" id="">
        <button type="submit" name="usercontrol" value="create">đăng ký</button>
    </form>
</body>
</html>