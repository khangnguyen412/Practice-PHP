<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $pdo = new PDO('mysql:dbname=test;host=localhost', 'locahost', 'khang',  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $query = $pdo->query('SHOW VARIABLES like "version"');
        $row = $query->fetch();
        echo 'MySQL version:' . $row['Value'];
    ?>
</body>
</html>