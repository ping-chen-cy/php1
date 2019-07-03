<!-- 
&& and
|| or
& and 兩邊都會去運算（二進位運算 非布林判斷)
| or  兩邊都會去運算 (二進位運算 非布林判斷)
^ xor 互斥 異性相吸 (二進位運算 非布林判斷)
-->
<?php
$a = 10;
$b = 3;
if ( $a++ >= 10 && $b-- <= 3){
    echo "ok; a = $a , b= $b";
}else{
    echo "xx; a = $a , b= $b";
}
// ok; a = 11 , b= 2
?>

<hr />
<?php
$a = 10;
$b = 3;
if ( $a++ > 10 && $b-- < 3){
    echo "ok; a = $a , b= $b";
}else{
    echo "xx; a = $a , b= $b";
}
//xx; a = 11 , b= 3
// 因為 使用 and 已判斷a 為 fales 不會去算B

?>

<hr />
<?php
$a = 10;
$b = 3;
if ( $a++ > 10 || $b-- < 3){
    echo "ok; a = $a , b= $b";
}else{
    echo "xx; a = $a , b= $b";
}
//xx; a = 11 , b= 2
// 因為 使用 or 雖判斷a 為 fales 還是會去算B

?>


<hr />


<?php
$c = 3 ;
$d = 2 ;
$e = $c & $d;
echo $e;
//2
?>
<hr />
<?php
$c = 3 ;
$d = 2 ;
$e = $c | $d;
echo $e;
//3
?>

<hr />
<?php
$f = 3 ;
$g = 2 ;
$h = $f ^ $g;
echo $e;
//3
?>