<?php
    //xuất các phần tử của mãng 
    $source2 = array('php', 'zend freamwork', 'joomla');  // -> đây là một mãng
    print_r($source2);
    echo '<br>';

    //in ra phần tử được chỉ định trong mãng 
    echo $source2[1];
    echo '<br>';

    //in ra phần tử được chỉ định trong mãng 
    echo "<pre>";
    print_r($source2);
    echo "</pre>";

    //cách 1
    if(!empty($source2))
    for($i = 0; $i < count($source2); $i++){
        echo $source2[$i]. '<br>';
    }

    //cách 2
    if(!empty($source2)){
        foreach($source2 as $key => $value){
            echo 'giá trị thứ '. $key. ' là: '. $value. '<br>';
        }
    }
?>