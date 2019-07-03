<!-- 簡單的 if else -->
<?php


$ok = true ;
if ($ok){
    echo 'OK';
}
else{
    echo 'XX';

}

?>


<hr />
<!-- 
    單列敘述可以不用加{} 
    EX: 
        if ($a >= 60) echo "A";
        else echo "no pass";
    但為了擴充性 習慣使用{}
    -->


<!-- 加入亂數（rand) -->
<?php
$score = rand (0,100);

echo "$score" .'<br>' ;

if ($score >= 60 ){
    echo 'Pass';
}else{
    echo "NoPass";
}
?>
<hr />


<!-- 巢狀的判斷式 -->
<?php
$score = rand (0,100);

echo "$score" .'<br>' ;

if ($score >= 90 ){
    echo 'A';
}else{
    if ($score >= 80 ){
        echo 'B';
    }else{
        if ($score >= 70 ){
            echo 'C';
        }else{
            if ($score >= 60 ){
                echo 'D';
            }else{
                echo "E";
            }
        }

    }
}
?>
<hr />
<!-- 轉換成過濾式結構 -->
<!-- 比對執行結束後 跳出迴圈 -->
<?php
$score = rand (0,100);

echo "$score" .'<br>' ;

if ($score >= 90 ){
    echo 'A';
}else if ($score >= 80 ){
    echo 'B';
    $score = 59;
}else if ($score >= 70 ){
    echo 'C';
}else if ($score >= 60 ){
    echo 'D';
}else{
    echo "E";
}
echo "<br> {$score}";
?>
