<?php
    echo "<h1>hello world <h1>";
?>
<!-- ngoài ra php còn có thể nhận được định dạng từ mã nguồn html,css
     ví dụ:  -->
<div class="content">
    <?php
    // dùng để ghi chú 1 dòng
    
    /* dùng để ghi chú nhiều dòng 
     *
     *  
     */
        echo "<h1>hello world <h1>";
    ?>
</div>

<style type="text/css">
    .content{
        text-align: center;
        color: red;
    }
</style>