<?php
/* 物件導向的觀念
要有定義 才會有物件
透過類別來進行定義
*/
class Bike {
    //敘述字 初值屬性
    //public $speed = 0;
    //private 資料封裝 只有在{} 中可以存取
    // private $speed = 0;
    //適度打開封裝 允許子類別存取
    protected $speed  = 0 ;
    //兩個方法改變速度屬性
    function upspeed(){
        //代表本類別所代表的物件實體(用 ->（要跟 array 的 ＝> 分清楚） 因為 php 把‘.’ 用於字串相加)
        $this ->speed = $this ->speed<1 ? 1 : $this ->speed*1.2 ;
    }
    function downspeed(){
        $this ->speed = $this ->speed<1 ? 0 : $this ->speed*0.7 ; 
    }
    function getspeed(){
        return $this ->speed;
    }
}
class Scooter extends Bike {
    private $gear = 0 ; 
    //overwrite 把父類別的function "蓋掉"
    // function upspeed(){
            //
    //        parent::upspeed();
    //     // echo 'nwe upspeed';
    // }
    function ChGear($gear){$this ->gear = $gear ;}
    function upspeedV2(){
        $this ->speed = $this ->speed<1 ? 2 : $this ->speed*($this ->gear*1.2) ;

    }
}

class person {
    private $myBike;    // has-a Bike Object
    private $myScoore;
    private $myName;
    // 建構式, 建構子, 建構方法 => 物件的初始化程序
    function __construct($name){
        $this->myBike = new Bike;
        $this->myScooter = new Scooter;
        $this->myName = $name;
    }
    function __destruct(){
        //物件解構
    }
}


//透過“new 來產生物件實體”
$b1 = new Bike ;
$b2 = new Bike ;
//var_dump($b1);
//object(Bike)#1 (0) { }
// object ： 物件

$s1 = new Scooter;

//var_dump($s1);
echo '<hr>';
$s1 ->ChGear(4);
$s1 ->upspeedV2();
$s1 ->upspeedV2();
echo '<hr>';
echo $s1 ->getspeed();
echo '<hr>';


$b1 ->upspeed();$b1 ->upspeed();$b1 ->upspeed();$b1 ->upspeed();
$b1 ->downspeed();

$b2 ->upspeed();$b2 ->upspeed();$b2 ->upspeed();

// echo $b1 ->speed . '<br>'; 
// echo $b2 ->speed . '<br>';
//不合理的設置 不應該可以直接寫值
// $b1 ->speed = 10 ;
// echo $b1 ->speed . '<br>'; 

// echo $b1 ->getspeed() . '<hr >';
// echo $b2 ->getspeed();


//extends 延伸 （繼承的概念）


echo '<hr>';
$p1 = new person('ping') ; 
var_dump($p1);
