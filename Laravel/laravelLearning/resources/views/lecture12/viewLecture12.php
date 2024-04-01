<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>Kết Quả: <?php echo json_encode($data, JSON_PRETTY_PRINT); ?></pre>
    <?php
    if ($_SERVER['REQUEST_URI'] == '/addDataModel12') { ?>
        <script>
            setTimeout(function() {
                window.location.href = "/getDataModel12"
            }, 5000); // sau 5 giây tự đông redirect về
        </script>
    <?php } ?>
</body>

</html>