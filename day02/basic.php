<?php
    //變數
    $a=1;
    $b=3;
    $firstName="Harry ";
    $lastName="Potter";
    //br換行
    echo $a."<br>";
    //字串相連 串接運算子.
    echo $firstName.$lastName."<br>";
    echo $a+$b."<br>";
    //檢查變數資料型態 var_dump($lastName);
    $a=$a+10;
    echo $a."<br>";
    //雙引號&單引號
    $greeting="Hello!";
    echo $greeting."很高興認識你!<br>";
    echo "$greeting 很高興認識你!<br>";
    echo '$greeting 很高興認識你!<br>';
    echo "I'm happy!";
    echo "<br>";
    //跳脫字元\
    echo 'I\'m happy!<br>';
    echo "I'm learning \"PHP\"!";
    echo "<br>";
    //常數
    define("pi",3.14159);
    echo pi;
    echo "<br>";
    //運算
    $c=10;
    $c+=5;
    echo $c;

?>