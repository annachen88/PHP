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
    
     //date
     echo date("Y/m/d H:i:s");
     echo "<br>";
     //今天是民國108年07月30日
     //現在是下午14點59分04秒
     $timeSlot = (date("a")==="am")? "早上" : "下午";
     echo "今天是民國".(date("Y")-1911)."年".date("m")."月".date("d")."日<br>";
     echo "現在是".$timeSlot.date("H")."點".date("i")."分".date("s")."秒<br>";
     
     //時間(秒)mktime(時，分，秒，月，日，年)
     $targetTimestamp = mktime(0,0,0,12,31,2019);
     echo $targetTimestamp."<br>";
     //推回日期時間格式
     $dateTime = date("Y-m-d H:i:s" , $targetTimestamp);
     echo $dateTime."<br>";
     //倒數日秒數
     $eventDate = mktime(0,0,0,01,01,2020);
     $currentTime = date('U'); //目前絕對秒數
     $leftTime = $eventDate - $currentTime;
     //秒 => 天
     $leftTime = floor($leftTime/60/60/24); //floor小數後捨去
     echo $leftTime;
   
?>