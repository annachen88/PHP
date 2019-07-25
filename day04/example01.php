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
    echo "你的等級:".$garde."<br>";

    $total = 0;
    for($index = 1; $index<=10; $index++){
        // echo $index."<br>";
        //$total = $total + $index;
        $total += $index;
    }
    echo $total;
    echo "<br>";

    $sum = 0;
    for($index = 3; $index<=103 ; $index+=2){
        $sum += $index;
    }
    echo $sum;
    echo "<br>";

    $text = "";
    for($index = 1; $index<=10 ; $index++){
        if($index===3 || $index===5){
            continue;//跳過
        }else{
            $text .= $index;
        }
    } 
     echo $text;
    echo "<br>";
    
    $j=1;
    $sum=0;
    while($j<=10){
        $sum += $j;
        $j++;
    }
    echo $j."<br>";
    
    //1~100中總和所有4的倍數的數字。
    $total=0;
    for($number=0;$number<=100;$number++){
        if($number%4===0){
            $total += $number;
        }else{
            continue;
        }
    }
    echo $total;
    echo "<br>";

    //尋找1~50中是3的倍數，將前九個印出來，並且找到第九個就停止尋找。
    $count=1;
    for($number=1;$number<=50;$number++){
        if($count<=9){
            if($number%3===0){
                echo "第".$count."個3的倍數:".$number."<br>";
                $count++;
            }else{
                continue;
            }
        }else{
            break;
        }
        
    }
?>