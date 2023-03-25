<?php 
    /**trường hợp ++$x và $x++ có gì khác nhau 
     * trường hợp ++$x là tăng x lên 1 đơn vị, sau đó trả về giá trị x
     * trường hợp $x++ là trả về giá trị x, sau đó tăng x lên 1 đơn vị
     * --$x và $x-- cũng tương tự 
     * ví dụ:
     */
    $x = 10;
    $y = $x++;
    echo "y = ". $y. "<br>";
    echo "x = ". $x. "<br>";

    $i = ++$x;
    echo "i = ".$i . "<br>";
    echo "x = ".$x;
?>