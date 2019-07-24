<?php
    // print_r($_GET);
    // echo "你點了連結".$_GET["id"];
    $capitals["Japan"] = "Tokyo";
    $capitals["Russia"] = "Moscow";
    $capitals["Germany"] = "Berlin";
    $capitals["Canada"] = "Ottawa";

    $input = $_GET['country'];
    echo "查詢結果:".$capitals[$input];
    echo "<br>";
    $color = $_GET['color'];
    echo "你選的顏色:".$color;
?>