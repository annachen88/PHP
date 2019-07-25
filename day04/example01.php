<?php
    $number = 10;
    if($number % 2 === 0){
       if($number > 5){
            echo "是>5的偶數";
       } else{
            echo "是<5的偶數";
       }
    }else{
        if($number > 5){
            echo "是>5的奇數";
        }else{
            echo "是>5的奇數";
        }
    }
    echo "<br>";
    //三元運算子(精簡if else)
    $score = 70;
    $isPass = ($score>=60)?"及格":"不及格";
    echo $score."分<br>".$isPass;
    echo "<br>";
    //if elseif
    if($score>=90){
        //echo "90分以上:A+";
        $garde="A+";
    }elseif($score>=80){
        //echo "80~89分:A";
        $garde="A";
    }elseif($score>=70){
        //echo "70~79分:B+";
        $garde="B+";
    }elseif($score>=60){
       // echo "60~69分:B";
       $garde="B";
    }else{
        //echo "不足60分:C";
        $garde="C";
    }
    echo "你的等級:".$garde;
?>