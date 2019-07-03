<?php
/* 理牌 洗牌 發牌
*/
$poker = [] ;


$counter = 0 ;
//運用 do-while 迴圈改善
for ($i=0 ; $i < 52 ;$i++){
    do{
        $rand = rand(0,51);
        //檢查重複
        $isRepeat = false ;
        $counter++;
        for ($j=0 ; $j < $i ; $j++ ){
            if ($rand == $poker[$j]){
                $isRepeat = true ;
                break;
            }
        }

    }while ($isRepeat);

    $poker[$i] = $rand;
    echo $poker[$i] . '<br>';
}
echo '<hr>';
//用counter 來計數
echo $counter;