<?php

$n=13 ;
//是否為質數
$isPrime = true ;

for ($i =2 ; $i < $n ; $i++){
    if ($n % $i == 0){
        $isPrime = false ;
        //已經檢查到非質數，跳脫迴圈
        break;
    }
}
echo $isPrime? 'OK':'XX';