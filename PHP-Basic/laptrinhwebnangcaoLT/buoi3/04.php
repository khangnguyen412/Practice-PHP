<?php
    $soNguyen = array("a" => 1 , "b" => 6 , "c" => 3, "d" => 28);
    function Xuat($a = array()){
        foreach($a as $c){
            echo $c."<br>";
        }
    }
    xuat($soNguyen);
?>