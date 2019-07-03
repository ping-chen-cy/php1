<h1>數值交換</h1>
<?php



$a = 10 ;
$b = 3;
echo "{$a} : {$b}";

echo '<hr>';
$c = $a ;
$a = $b ;
$b = $c ;
echo "{$a} : {$b}";


echo '<hr>';

$a = 6 ;
$b = 7 ;
echo "{$a} : {$b}";
echo '<hr>';

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "{$a} : {$b}";


