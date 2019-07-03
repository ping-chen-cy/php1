<?php
function fx($x){
    return 2 * $x +1;
}

$var1 = fx(3);
echo $var1;
//7
echo '<hr>';


function test1($var1){
    $var1 += 10;
    return $var1 ;  
}


$var1 = 100;
test1($var1);
echo $var1;
//100
echo '<hr>';
$var1 = test1($var1);
echo $var1;
//110

//傳值 ＶＳ 傳址



function test2(&$var1){
    $var1 += 10 ;
}
echo '<hr>';
$var1 = 100;
test2($var1);
echo $var1;



?>




