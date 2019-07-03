<?php

function test1(){
    //宣告 $v 為全域 不建議 function相依性會變高 失去原本用意
    global $v;
    $v += 7;
}




$v = 100;
test1();
test1();
test1();
test1();
test1();
echo $v;

?>