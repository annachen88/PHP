<?php
//遞增/遞減算子
$a = 3;
++$a;
echo $a."<br>"; //4
//++放變數後,先執行變數再加一
//++放變數前,先加一再指派變數
$b = $a++;
echo $b."<br>";//4

$chinese = 79;
$english = 79;
$math = 60;
$sum = $chinese + $english + $math;
//四捨五入到第二位
$average = round($sum/3,2);
echo "國文成績:".$chinese."分<br>";
echo "英文成績:".$english."分<br>";
echo "數學成績:".$math."分<br>";
echo "總分為:".$sum."分<br>";
echo "平均為:".$average."分<br>";

$data1 = 20;
$data2 = 10;
$result = ($data1 > $data2);
//boolean true or false
var_dump($result);//true
echo "<br>";
$data3 = 100;
$data4 = "100";
//==data3等於data4嗎?只會比較值
//===嚴格檢查值,資料型態
var_dump($data3 == $data4);//true
var_dump($data3 != $data4);//false
var_dump($data3 === $data4);//false
var_dump($data3 !== $data4);//true
echo "<br>";

$data5 = 25;
//data5是否大於0且比50小?
var_dump($data5 > 0 && $data5 < 50);//true
//data5是否大於0 or 比50小?
var_dump($data5 > 0 || $data5 < 50);//true

?>