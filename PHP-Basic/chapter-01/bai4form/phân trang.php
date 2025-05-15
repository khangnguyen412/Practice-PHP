<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="phân trang.php?trang=-1">Previous</a></li>
          <li class="page-item"><a class="page-link" href="phân trang.php?trang=1">1</a></li> 
          <!-- phân trang.php?trang=1 dùng để hiển thị số trang trên url -->
          <li class="page-item"><a class="page-link" href="phân trang.php?trang=2">2</a></li>
          <li class="page-item"><a class="page-link" href="phân trang.php?trang=3">3</a></li>
          <li class="page-item"><a class="page-link" href="phân trang.php?trang=4">4</a></li>
          <li class="page-item"><a class="page-link" href="phân trang.php?trang=5">5</a></li>
          <li class="page-item"><a class="page-link" href="phân trang.php?trang=6">6</a></li>
          <li class="page-item"><a class="page-link" href="phân trang.php?trang=7">7</a></li>
          <li class="page-item"><a class="page-link" href="phân trang.php?trang=-2">Next</a></li>
        </ul>
    </nav>
    <?php
        $page = (isset($_GET["trang"]) == true)? $_GET["trang"]: "0"; // isset đề xét biến trang có giá trị hay chưa
    ?>
    <p>bạn đang ở trang thứ <?php echo $page ?></p>
    <script src="./js/bootstrap.js"></script>
</body>
</html>