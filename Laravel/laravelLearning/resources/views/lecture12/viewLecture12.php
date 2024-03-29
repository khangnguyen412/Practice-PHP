<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>Kết Quả: <?php echo json_encode($data, JSON_PRETTY_PRINT); ?></pre>
    <script>
        setTimeout(function() {
            window.location.href = "/getDataModel12"
        }, 2000); // 2 second
    </script>
</body>

</html>