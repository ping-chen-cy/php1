<!-- 閏年規則
被四整除 要潤
但 被 100 整除 不潤
但 又被 400 整除 潤
-->

<?php
$year = rand (2000,3000);
// == 比對
if ($year % 400  == 0){
    echo "西元{$year}年，要閏年！！！！";
}else if ($year % 100 == 0 ) {
    echo "西元{$year}年，不閏年～～～～";
}else if ($year % 4 == 0 ){
    echo "西元{$year}年，要閏年！！！！";
}else{
    echo "西元{$year}年，不閏年～～～～";
}


echo "<hr \>";

if ($year %4 == 0){
    if ($year % 100 == 0){
        if ($year % 400 == 0){
            echo "西元{$year}年，要閏年！！！！";
        }else{
            echo "西元{$year}年，不閏年～～～～";
        }
    }else{
        echo "西元{$year}年，要閏年！！！！";
    }
}else{
    echo "西元{$year}年，不閏年～～～～";
}


?>





