<?php
$a = 100 ;
switch($a){
    case 1:
        echo 'A';
        break ; 
    case 10:
        echo 'B';
        break ;     
    case 100:
        echo 'C';
        break ;     
    default:
        echo 'X';     
    }
?>

<hr />
<!-- 
    由上到下比對 只比值 不比型態（php 特性）
    若要比型態 用 === （全等）
    -->
<?php
$a = 10 ;
switch($a){
    case 1:
        echo 'A';
        break ; 
    case 10:
        echo 'B';
        break ;     
    case 10:
        echo 'B2';
        break ; 
    case 100:
        echo 'C';
        break ;     
    default:
        echo 'X';     
    }
?>
<hr />
<!-- 也可以用變數運算 -->
<!-- break 跳出迴圈 ，不寫會繼續比對-->
<?php 
$a = 10 ; $b = 8 ;
switch($a){
    case 1:
        echo 'A';
        break ; 
    case $b +2 :
        echo 'B1';
        break ;     
    case 10:
        echo 'B2';
        break ; 
    case 100:
        echo 'C';
        break ;     
    default:
        echo 'X';     
    }
    //B1
?>

<hr />
<?php 
$a = 10 ; $b = 8 ;
switch($a){
    case 1:
        echo 'A';
        //break ; 
    case $b +2 :
        echo 'B1';
        //break ;     
    case 10:
        echo 'B2';
        //break ; 
    case 100:
        echo 'C';
        //break ;     
    //default:
      //  echo 'X';
    }
    //B1B2C
?>


<hr />


<!--
    一 三 五 七 八 十 十二 ：31天
    二月：28天
    四 六 九 十一 ：30天 
-->


<!-- php 的switch 沒有 or 的選項 ，所以使用break 續數據的特性達成目的 -->
<?php 
$m = rand (1,12);

switch($m){
    case 1:case 3:case 5:case 7:case 8:case 10:case 12:
        $d = 31;
        break;
    case 4:case 6:case 9:case 11:
        $d = 30;
        break;
    case 2:
        $d = 28;
        break;
    default:
        $d = -1;
    }
echo "$m 月有 $d 天";

?>



<hr />
<?php 
$m = rand (1,12);
if ($m == 1 | $m == 3 | $m == 5 | $m == 7 | $m == 8 | $m == 10 | $m == 12){
    $d = 31;
}else if ($m == 4 | $m == 6 | $m == 9 | $m == 11){
    $d = 30;
}else if ($m == 2){
    $d = 28;
}else{
    $d = -1;
}
echo "$m 月有 $d 天";
?>