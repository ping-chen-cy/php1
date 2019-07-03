<?php
    //foreach($_GET as $k => $v){
    //foreach($_POST as $k => $v){
    // REQUEST : POST 與 GET 通吃 使用 post 或 get 由前端決定
    foreach($_REQUEST as $k => $v){
        if (is_array($v)){
            foreach($v as $k => $v){
                echo "{$k} => {$v}<br>";
            }
        }else{
            echo "{$k} => {$v}<br>";    
        }
    }
?>