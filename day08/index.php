<?php
class Rec{
    //static屬性 建立計算Rec已經建立多少物件
    public static $count = 0;
    //隱藏屬性private
    private $length = 10;
    private $width = 20;
    //建構式
    public function __construct($lengthInput,$widthInput){
        //每建立一個物件 $count遞增1
        self::$count++; //::表static
        if($lengthInput>0) $this->length = $lengthInput;
        if($widthInput>0) $this->width = $widthInput;
    }
    public function getLength(){
        return $this->length;
    }
    public function getWidth(){
        return $this->length;
    }
    public function getArea(){
        return ($this->length) * ($this->width);
    }
    public function getPerimeter(){
        return ($this->length + $this->width) * 2;
    }
}
//新增物件
$myRec = new Rec(20,40);
echo "長:".$myRec->getLength()."<br>";
echo "寬:".$myRec->getWidth()."<br>";
echo "面積:".$myRec->getArea()."<br>";
$myRec2 = new Rec(5,5);
echo "已建立物件的數量:".Rec::$count; 
echo "<br>";


// class FrontEndDeveloper{
//     private $basicSalary = 25000;
//     private $pieceRate = 5000;
//     private $pieceWorkNumber = 0;
//     public function __construct($pieceNumber){
//         $this->pieceWorkNumber = $pieceNumber;
//     }
//     public function getTotalSalary(){
//         return $this->basicSalary + ($this->pieceRate * $this->pieceWorkNumber);

//     }
// }



//protected 繼承
class Employee{
    protected $basicSalary = 25000;
    protected $pieceRate = 0;
    protected $pieceWorkNumber = 0;

    public function __construct($numberInput){
        $this->pieceWorkNumber = $numberInput;
    }

    public function getTotalSalary(){
        return $this->basicSalary + ($this->pieceRate * $this->pieceWorkNumber);
    }
}

//繼承Employee 寫唯一差異的值
class FrontEndDeveloper extends Employee{
    protected $pieceRate = 5000;
}
class UIDeveloper extends Employee{
    protected $pieceRate = 4000;
}
$anna = new FrontEndDeveloper(5);
$amy = new UIDeveloper(10);
echo "anna的薪水".$anna->getTotalSalary()."<br>";
echo "amy的薪水".$amy->getTotalSalary()."<br>";
?>