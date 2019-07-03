<!-- 擺在陣列中的特殊系統變數 -->
<?php

echo count($_SERVER);

echo '<hr>';
foreach($_SERVER as $key => $value){
    echo "{$key} => {$value} <br>";
}

echo '<hr>';

?>