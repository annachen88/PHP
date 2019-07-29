<?php
    $numbers = array(22,3,24,5);
    echo implode(",",$numbers);
    echo "<br>";
    sort($numbers);//小到大
    echo implode(",",$numbers);
    rsort($numbers);//大到小
    echo "<br>";
    echo implode(",",$numbers);
    echo "<br>";


    $scores=array(
        "Cindy"=>86,"Ben"=>76,"Anna"=>89,"Lucy"=>90,"David"=>99
     );
     //關聯式陣列排序
     arsort($scores);//大到小
     $k = 1;
     foreach($scores as $student => $score){
         echo  $k++.":".$student."考了".$score."分<br>";
     }
     $values = range(0,9);
     $values = range('a','h');
     print_r($values);

     //shuffle()隨機排列
     shuffle($values);
     print_r($values);

     //合併陣列 array_merge()
     $mergeArray = array_merge(array(1,2,3),array(4,5));
     print_r($mergeArray);


     //隨機取得一組英文數字夾雜的字串
     $charArray = array_merge(range('a','z'),range('A','Z'),range(0,9));
     shuffle($charArray);
     $charArray = array_slice($charArray,0,10); //array_slice(複製)
     $randomString = implode('',$charArray);
     echo $randomString."<br>";

     echo rand(0,9)."<br>";

     //example:設計一個程式隨機取得1000個1~6之間的整數，統計各個數字出現的次數以及出現的機率。
     $times = 1000;
     $result = array("1" => 0,
                    "2" => 0,
                    "3" => 0,
                    "4" => 0,
                    "5" => 0,
                    "6" => 0);
     //$result = array_fill(1,6,0);－－＞放入1~6的key,值=0
    for($i=0;$i < $times;$i++){
        $randomNumber = rand(1,6);
        $result[$randomNumber]++;
    }
    
    foreach($result as $key => $value){
        $rate = ($value/$times)*100;
        echo "骰到".$key."的次數為".$value."。機率為".$rate."%<br>";
    }

?>