<?php
// php7 開始才有的 強制轉型
function test1($x,$y) : string{
    return $x/$y;
}

$v = test1(10,3);
var_dump($v);
//string(15) "3.3333333333333"


echo "<hr>";



function test2($x,$y) : int{
    return $x/$y;
}

$u = test1(10,3);
var_dump($u);





//現成function
//字串處理：
?>