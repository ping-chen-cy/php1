<?php
$a = 12;
//函數var_dump ()函數用於輸出變量的相關信息
var_dump($a);
//int(12)
echo "<hr> ";

$a = [];
var_dump($a);
//array(0) { }

echo "<hr> ";
$a[] =1 ;
$a[] = 'ping';
$a[] = true;
$a[] = 12.33; 
var_dump($a);
//array(4) { [0]=> int(1) [1]=> string(4) "ping" [2]=> bool(true) [3]=> float(12.33) } 
echo "<br>" ;
//count 用來計算陣列內的數量
echo count($a) . '<br>';
//4

echo "<hr>";

$a[10] = 12;
$a[1] = 'chen' ;
var_dump($a);
//array(5) { [0]=> int(1) [1]=> string(4) "chen" [2]=> bool(true) [3]=> float(12.33) [10]=> int(12) }
//php並不會在不存在的陣列列數加入null

echo "<hr>";
$a[] = 128;
var_dump($a);
//array(6) { [0]=> int(1) [1]=> string(4) "chen" [2]=> bool(true) [3]=> float(12.33) [10]=> int(12) [11]=> int(128) }
//php 陣列特性，會直接從 最高的陣列開始往後排
//php 陣列特性2 並不一定要從 "0" 開始
echo "<hr>";

$b = array(1,2,3,4,5);
var_dump($b);
//array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
echo "<hr>";



$b = array(4 => 1 ,2,15 => 3,4,5);
var_dump($b);
//array(5) { [4]=> int(1) [5]=> int(2) [15]=> int(3) [16]=> int(4) [17]=> int(5) }



?>





