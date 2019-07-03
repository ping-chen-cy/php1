<?php

if (!isset($_FILES['upload']))exit(0);
$upload = $_FILES['upload'];

//var_dump($upload);

//foreach ($upload as $k => $v){
//echo "{$k} => {$v} <hr >";
 /*
    if ($upload['error'] == 0){
        if (copy($upload['tmp_name'], "upload/{$upload['name']}")){
            echo "upload success";
        }else{
            echo "upload failed";
        }
    }else{
        echo "Ooooops!!";
    }
*/
//}

if ($upload['error'] == 0){
    if (is_uploaded_file($upload['tmp_name'])){
        if (move_uploaded_file($upload['tmp_name'], "upload/{$upload['name']}")){
            echo 'Upload Success';
        }else{
            echo 'Upload Failure';
        }
    }
}else{
    echo 'Ooop!';
}