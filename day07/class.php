<?php
    //類別 vs. 物件
    //物件就是類別的實體化 要有物件要先有類別
    //ex:(物件)做出餅乾就要做(類別)餅乾的模型
    
    //新增類別
    class Rectangle{
        public $length = 10;
        public $width = 20;
        public function getArea(){
            return ($this->length) * ($this->width);
        }
        public function getPerimeter(){
            return ($this->length + $this->width) * 2;
        }
    }
    //新增物件
    $myRectangle = new Rectangle();
    echo "長:".$myRectangle->length."<br>";
    echo "寬:".$myRectangle->width."<br>";
    echo "面積:".$myRectangle->getArea()."<br>";
    echo "周長:".$myRectangle->getPerimeter()."<br>";



    //建立自訂屬性的長方形 當輸入錯誤，使用預設值
    class Rec1{
        public $length = 10;
        public $width = 20;
        //建構子 確定輸入物件
        public function __construct($lengthInput,$widthInput){
            if($lengthInput>0) $this->length = $lengthInput;
            if($widthInput>0) $this->width = $widthInput;
        }
        public function getArea(){
            return ($this->length) * ($this->width);
        }
        public function getPerimeter(){
            return ($this->length + $this->width) * 2;
        }
    }
    //新增物件
    $myRect1 = new Rec1(20,40);
    echo "長:".$myRect1->length."<br>";
    echo "寬:".$myRect1->width."<br>";
?>