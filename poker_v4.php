<?php
/* 
PHP.NET
PHP Manual Function Reference Variable and Type Related Extensions
使用 function
產生牌：
range —根據范圍創建數組，包含指定的元素
用range 產稱 一附牌
洗牌：
shuffle — 打乱数组
Shuffle 在一堆 不重複的資料結構 重新打亂
*/


$poker = range (0,51);

shuffle($poker);

foreach($poker as $value){
    echo $value . '<br>';
}

echo '<hr>';
$players = [[],[],[],[]];

// var_dump($players);
//array(4) { [0]=> array(0) { } [1]=> array(0) { } [2]=> array(0) { } [3]=> array(0) { } }
foreach($poker as $i => $card){
    //$players[?][?] = $card;
    $players[$i%4][(int)($i/4)] = $card;


}
foreach($players[0] as $card){
    echo $card . '<br>';
}


/*
echo '<hr>';
echo $card ;
echo '<hr>';
echo (int)($card/13);
switch ((int)($card/13);){
    case 0
    case 1
    case 2
    case 3
}
echo '<hr>';
*/


?>



<table border="1" width="100%">
    <!-- 雙層 foreach 印出所有玩家的牌 -->
    <?php
    foreach($players as $player){
    
        echo '<tr>';
        foreach($player as $card){
            echo  "<td> {$card}  </td>";
        }
        echo '<tr>';
    }
    ?>



</table>

<table border="1" width="100%">
    <!-- 雙層 foreach 印出所有玩家的牌 -->
    <!--加上花色-->

    <?php
    $suits = array("&spades;","<font color='red'>&hearts;</font>","<font color='red'>&diams;</font>","&clubs;");
    $values = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
    foreach($players as $player){
        //使用sort function 排序
        sort($player);
        echo '<tr>';
        foreach($player as $card){
            echo  "<td> {$suits[(int)($card/13)]} {$values[$card%13]} </td>";
        }
        echo '<tr>';
    }
    ?>



</table>