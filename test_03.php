<?php

$var1 = 1 ; //$[a-zA-Z$_][a-zA-Z$_]*
echo gettype($var1) . '<br>'; 
$var1 = 'Brad' ;
echo gettype($var1) . '<br>' ;
$var1 = true ;
echo gettype($var1) . '<br>';
$var1 = 12.4 ;
echo gettype($var1) . '<hr />';

/* php 是弱型別語言 型別會隨時改變 */




$var1 = 10 ; 
$var2 = 3 ;
$var3 = $var1 / $var2;
echo (int)($var3) . '<br>' ;    
// 強制轉型
$var4 = $var1 % $var2 ;
// % 為餘數
echo $var4 ;
$var5 = 012 ;
// 0開頭 自動辨認為8進位
echo $var5 . '<br>';

$var6 = 0x12 ;
//16進位
echo $var6 . '<br>';

$var7 = 10;
$var8 = $var7++;
echo "($var7) : ($var8)" . '<br>';
// (11) : (10)
$var71 = 10 ;
$var81 = ++$var71 ;
echo "($var71) : ($var81)" ;
// (11) : (11)
/* ++ 在前 與 ++在後的區別
 ++ 在前 後處理
 ++在後 先處理
*/


?>
