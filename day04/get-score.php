<?php
    $chinese = $_POST['chinese'];
    $english = $_POST['english'];
    $math = $_POST['math'];
    $total = $chinese+$english+$math;
    $average = round($total/3,2);
    echo "國文成績:".$chinese."分<br>";
    echo "英文成績:".$chinese."分<br>";
    echo "數學成績:".$chinese."分<br>";
    echo "總分:".$total."分<br>";
    echo "平均:".$average."分<br>";

?>