<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo $host = "mysql"; // lấy tên của container trong service mysql
        echo "<br>";
        echo $dbname = "test";
        $pdo = new PDO('mysql:dbname='.$dbname.';host='.$host.'', 'admin', 'admin', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $query = $pdo->query('SHOW VARIABLES like "version"');
        $row = $query->fetch();
        echo 'MySQL version:' . $row['Value'];
    ?>
</body>
</html>