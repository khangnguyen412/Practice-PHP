<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">181A010020_khang Nhập số thứ nhất</label><br>
        <input type="text" name="so1" placeholder="nhập số thứ nhất"><br>
        <label for="">181A010020_khang Nhập số thứ hai</label><br>
        <input type="text" name="so2" placeholder="nhập số thứ hai">
        <select name="pheptinh">
            <option value="0">chọn một phép tính</option>
            <option value="cong">cộng</option>
            <option value="tru">trừ</option>
            <option value="nhan">nhân</option>
            <option value="chia">chia</option>
            <option value="laydu">lấy dư</option>
        </select>
        <p>
            kết quả: 
            <?php
                include_once './02.php';
            ?>
        </p>
        <button type="submit" value="">tính</button>
    </form>
</body>
</html>