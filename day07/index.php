<?php
    //trim去除字串前後空白
    $test = " Hello ";
    var_dump($test);
    $testTrim = trim($test);
    var_dump($testTrim);
    echo "<br>";

    //字串長度(幾個字元)
    strlen($test);
    echo strlen($test);
    echo "<br>";

    //取部分字串
    $subString = substr($testTrim,1,3); //從一號位置取三個字ell
    echo $subString;
    echo "<br>";

    //分割字串轉為陣列explode  implode連接陣列
    $url = "www.google.com.tw";
    $urlArr = explode(".",$url);
    print_r($urlArr);
    echo "<br>";

   
?>