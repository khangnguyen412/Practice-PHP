<?php
    //xóa nhiều phần tử vị trí đầu hoặc cuối mãng
    $source = array("php" ,"time" ,"name" ,"tên" ,"game");
    echo '<pre>';
    print_r($source);
    echo '</pre>';

    function removeitem(&$arr, $style = "first", $count = 2){
        $result = array();
        if(!empty($arr)){
            if($count >= count($arr)){//kiểm tra xem số lần đếm có bị quá số lượng phần tử của mãng hay ko 
                $result = $arr;//nếu có thì mãng mới sẽ mang giá trị cả mãng cũ
                $arr = null;//mãng cũ sẽ rỗng
            }else{
                if($style == "first"){
                    for($i = 0; $i < $count; $i++){
                        $result[] = array_shift($arr); //$result[] dùng để ném giá trị đã bị loại bỏ vào
                    }
                }elseif($style == "last"){
                    $n = $count;
                    for($i = 0; $i < $count; $i++){
                        $result[] = array_pop($arr);
                    }
                }
            }
        }
        return $result;
    }

    $newarr = removeitem($source, "last", 1);
    echo 'mãng newarr:'.'<br>';
    echo '<pre>';
    print_r($newarr);
    echo '</pre>';

    echo 'mãng source:'.'<br>';
    echo '<pre>';
    print_r($source);
    echo '</pre>';
?>