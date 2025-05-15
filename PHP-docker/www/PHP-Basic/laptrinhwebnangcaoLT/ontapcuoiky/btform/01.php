<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="so1" placeholder="nhập số thứ nhất">
        <input type="text" name="so2" placeholder="nhập số thứ hai">
        <select name="pheptinh">
            <!-- <optgroup label="Opera">
            <option value="">Opera 9.0 or higher</option>
            <option value="8.x">Opera 8.x</option>
            <option value="7.x">Opera 7.x</option>
            </optgroup> -->
            <option value="0">chọn một phép tính</option>
            <option value="cong">cộng</option>
            <option value="tru">trừ</option>
            <option value="nhan">nhân</option>
            <option value="chia">chia</option>
            <option value="laydu">lấy dư</option>
        </select>

        <p>
            <h4>Tính phương trình</h4>
            <input type="text" name="so3" placeholder="nhập số 3">
            <input type="radio" name="ptrinh" value="ptb1" id="ptb1"><span>phương trình bậc 1</span>
            <input type="radio" name="ptrinh" value="ptb2" id="ptb2"><span>phương trình bậc 2</span>
            <input type="radio" name="ptrinh" value="NULL" id="NULL" checked="checked"><span>không tính pt</span>
        </p>
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