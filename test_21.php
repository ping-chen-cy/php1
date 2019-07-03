<?php
//$p 出現點數 = 出現次數
// 陣列初始化
$p = array(1 => 0,0,0,0,0,0); 
//相當於 $p[1] =0 ,$p[2] = 0 ...... $p[6] = 0
//用 1 => 指定從1 開始
var_dump($p);
//array(6) { [1]=> int(0) [2]=> int(0) [3]=> int(0) [4]=> int(0) [5]=> int(0) [6]=> int(0) }

echo '<hr>';

for ($i = 0 ; $i < 10000 ; $i++){
    //$point = rand(1,6);
    //$p{$point}++;
    $p{rand(1,6)}++;
}

echo '<hr>';
var_dump($p);

echo '<hr>';
for ($i =1 ; $i <= 6 ; $i++){
    echo "{$i}點出現{$p[$i]}次。<br>";
}
//陣列的重點在於index 的控制！！


echo '<hr>';
//改用foreach

foreach($p as $key => $value){
    echo $key . "點出現" . $value . '次<br>';
}

echo '<hr>';
//運用加權控制賠率
$q = array(1 => 0,0,0,0,0,0);
for ($i = 0 ; $i < 10000000 ; $i++){
    $point = rand(1,9);
    $q{$point>6?$point-3 : $point }++;
}
foreach($q as $key => $value){
    echo $key . "點出現" . $value . '次<br>';
}


?>





