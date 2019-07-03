<?php
/* 理牌 洗牌 發牌
*/
$poker = [] ;
//洗52張牌
//會出現重複值
/*
for ($i=0 ; $i < 52 ;$i++){
    $rand = rand(0,51);
    $poker[$i] = $rand;
    echo $poker[$i] . '<br>';

}
*/


//加上檢查機制
for ($i=0 ; $i < 52 ;$i++){
    $rand = rand(0,51);
    //檢查重複
    $isRepeat = false ;
    for ($j=0 ; $j < $i ; $j++ ){
        if ($rand == $poker[$j]){
            $isRepeat = true ;
            break;
        }
    }

    if ($isRepeat){
        $i-- ;
        continue;
        //continue 以下不做
        //break 跳出迴圈
    }
    $poker[$i] = $rand;
    echo $poker[$i] . '<br>';
}