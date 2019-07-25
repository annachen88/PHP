<?php
    $products = array("iphone6"=>22500,
                    "iphone7"=>24500,
                    "iphone8"=>26500);
    $input = "iphone8";
    //array_key_exists (key,array)
    var_dump(array_key_exists($input,$products));
    //in_array(value,array)
    var_dump(in_array(22500,$products));
    echo "<br>";
    //echo $products[$input];
    if(array_key_exists($input,$products)){
        echo $input."的價格是:".$products[$input]."元";
    }else{
        echo "查無此手機!";
    }
 ?>