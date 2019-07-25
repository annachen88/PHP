<?php
    $colors = array("Red","Black","Pink");
    echo $colors[2]."<br>";
    //陣列元素數量count() sizeof()
    echo count($colors)." ".sizeof($colors)."<br>";
    //取陣列的值
    for($index = 0;$index < count($colors);$index++){
        echo $colors[$index]."<br>";
    }
    //foreach
    //array as value
    foreach($colors as $color){
        echo $color."<br>";
    }
    $products = array("iphone6"=>22500,
                    "iphone7"=>24500,
                    "iphone8"=>26500);
    //array as key => value
    foreach ($products as $iphone =>$price){
        echo $iphone."售價是".$price."元<br>";
    }
?>