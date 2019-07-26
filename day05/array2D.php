<?php
    //二維陣列
    //索引陣列
    $numbers = array(array(1,2,3),
                    array(4,5,6),
                    array(7,8,9));
    // print_r($numbers);
    echo $numbers[1][0]."<br>"; //4
    foreach($numbers as $row => $data){
        foreach($data as $column => $number){
            echo "數字:".$number."編號(".$row.",".$column.")<br>";
        }
    }
    //關聯式陣列
    $students = array(
        "Elsa"=> array(
            "Math" => 80,
            "English" => 99
        ),
        "Anna"=> array(
            "Math" => 100,
            "English" => 99
        )
    );
    echo $students["Anna"]["Math"]."<br>";
    
    //印出全部內容
    foreach($students as $student => $name){
        echo "姓名:".$student."<br>";
        foreach($name as $subject => $grade){
            echo $subject.":".$grade."分<br>"; 
        }
    }


?>