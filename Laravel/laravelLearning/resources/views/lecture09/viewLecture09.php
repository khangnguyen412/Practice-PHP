<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> lecture09 </title>
        <link rel="stylesheet" href="">
    </head>

    <body>
        <div class="container">
            <pre>Data đã thêm:<?php echo json_encode($users, JSON_PRETTY_PRINT); ?></pre>
        </div>
        <div class="container">
            Data sau khi đã xóa: <br>
                <?php 
                    foreach($usersAfterDelete as $item){
                        echo json_encode($item, JSON_PRETTY_PRINT).'<br>'; 
                    }
                    
                ?>
        </div>
    </body>
</html>