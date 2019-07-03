<h1> 字串處理  </h1>
<!-- 
    .php 先解析php code 後 再結合 html 進行回傳 
 --> 

<?php
$var1 = 'ping' ; 
$var2 = 80 ;
echo "$var1 => $var2 kg" . '<br>' ;
// ping => 80 kg
echo '$var1 => $var2 kg' . '<br>' ;
//$var1 => $var2 kg
/* 
單引號不解析
*/
// echo "$var1 => $var2kg" . '<br>' ;
// 會錯誤
echo "{$var1} => {$var2}kg". '<br>';
//ping => 80kg
echo $var1 . ' => ' . $var2 . 'kg<br>';
//ping => 80kg 使用 "." 來處理字串相加


$var3 = 10;
$var4 = 3;

$var5 = $var3 + $var4 ;
echo $var5 . '<br>'; 
// 13

$var31 = 'ping';
$var41 = 3 ;

$var51 = $var31 + $var41 ;
echo $var51 . '<br>';
//3
// Warning: A non-numeric value encountered in /opt/lampp/htdocs/test_04.php on line 33
// 會顯示告警， 但將字串視為 0
$var31 = '10ping';
$var41 = 3 ;

$var51 = $var31 + $var41 ;
echo $var51 . '<br>';
//13
//Notice: A non well formed numeric value encountered in /opt/lampp/htdocs/test_04.php on line 41
$var31 = '10.12312dkfkfds;l123123';
$var41 = 3 ;

$var51 = $var31 + $var41 ;
echo $var51 . '<br>';
//13.12312
//Notice: A non well formed numeric value encountered in /opt/lampp/htdocs/test_04.php on line 49

$var31 = true ; 
$var41 = false ;

$var51 = $var31 + $var41 ;
echo $var51 . '<br>';
//1 true = 1 false = 0

$var31 = ' ' ; 
$var41 = ' ' ;

$var51 = $var31 + $var41 ;
echo $var51 . '<br>';

//前端 vs 後端
// 前端 ： 瀏覽器執行
// 後端 ： server 執行

?>