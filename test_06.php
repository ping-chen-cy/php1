<?php
//收參數
// $_ 特殊參數
    $x = $_GET['x'];
    $y = $_GET['y'];
    echo gettype($x) . '<br>';
    //string 
    //參數傳遞為字串

    $z = $x + $y ;
    echo "{$x} + {$y} = {$z} ";


?>