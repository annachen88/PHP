<?php
    //定義function
    function addTwoNumbers($a,$b){
         $total = $a + $b;
        return $total;
    }
    //呼叫function
    $sum = addTwoNumbers(3,4);
    echo $sum."<br>";

    //折扣
    function discount($price,$percent = 0.9){
        return $price * $percent;
    }
    //呼叫函數
    $originalPrice = 100;
    $discountPrice = discount($originalPrice);
    echo $discountPrice."元<br>";

    //定義給陣列的函數
    function getDiscountPrices($prices){
        $discountResult = array();
        //$discountResult = [];宣告陣列
        for($i=0;$i<count($prices);$i++){
            $discountResult[$i]=$prices[$i] * 0.8;
        }
        return $discountResult;
    }
    //呼叫函數
    $oriArray = array(3000,10000,8000);
    print_r (getDiscountPrices($oriArray));
    //陣列內容轉字串
    echo implode(",",getDiscountPrices($oriArray));// 2400,8000,6400
    echo "<br>";
    function countDistinct($input){
        $result = array();
        foreach($input as $value){
            if(!in_array($value,$result)){
               array_push($result,$value);
               //in_array
               //array_push
            }
        }
            
        return count($result)."個不重複數字";
     }

     $numbers =array(2, 2, 3, 4, 4, 5, 10, 33, 33, 1, 56, 67);
     echo countDistinct($numbers)."<br>";
     

     function getMaxMin($input){
         $max = $input[0];
         $min = $input[0];
        foreach($input as $value){
            if($value > $max){
                $max = $value;
            }
            if($value < $min){
                $min = $value;
            }
        }
        return "最大值:".$max."最小值:".$min;
     }
     echo getMaxMin($numbers);
     
?>