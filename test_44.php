<?php
/*
if (!isset($_FILES['upload']))exit(0);
$upload = $_FILES['upload'];
var_dump($upload);

foreach($upload['error'] as $k => $v){
    if ($v == 0){
        if (is_uploaded_file($upload['tmp_name'][$k])){
            if (move_uploaded_file($upload['tmp_name'][$k],"dir1/{$upload['name'][$k]"}){
                echo "$upload['name'][$k] upload seccuss";
            }else{
                echo "($upload['name'][$k] upload fail";
            }
        }
    }
}


?> 
*/