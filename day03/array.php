<?php
    //索引式陣列0,1,2,3編號
    $colors = array("red","black","pink");
    $colors[3] = "tomato";
    echo $colors[1].$colors[2];//blackpink
    echo "<br>";
    //顯示陣列所有內容var_dump or print_r
    var_dump($colors);
    echo "<br>";
    print_r($colors);
    echo "<br>";
    //關聯式陣列 -> 自訂編號 key=>value
    $products = array("iphone7"=>24500,
                "iphone8"=>26500,
                "iphoneX"=>32500
                 );
    echo $products["iphone7"];
    echo "<br>";
    print_r($products);
    echo "<br>";
    $products["iponeXS"] = 40000;
    print_r($products);

    $capitals = array("Austria"=>"Vienna",
                    "Canada"=>"Ottawa",
                    "France"=>"Paris",
                    "Germany"=>"Berlin"
                  );
    print_r($capitals);
    echo "<br>";
    $capitals["Japan"] = "Tokyo";
    $capitals["Russia"] = "Moscow";
    print_r($capitals);
    echo "<br>";
    $input = "JAPAN";
    $input = ucfirst(strtolower($input));
    echo $input."的首都是".$capitals[$input];

?>