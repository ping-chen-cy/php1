<h1>數值交換</h1>
<?php



$a = 10 ;
$b = 3;
echo "交換前：{$a} : {$b}";

echo '<hr>';
$c = $a ;
$a = $b ;
$b = $c ;
echo "交換後：{$a} : {$b}";


echo '<hr>';

$a = 6 ;
$b = 7 ;
echo "交換前：{$a} : {$b}";
echo '<hr>';

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "交換後：{$a} : {$b}";


