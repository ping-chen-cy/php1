<?php
if (!isset($_REQUEST['filename'])) die ("exit");

$filename = $_REQUEST['filename'];
$conteent = $_REQUEST['content'];

$fp = @fopen("./dir1/{$filename}", 'w');
if (@fwrite($fp, $conteent)){
    //header 送出html 檔頭資料
    //header 要在其他輸出之前做 不能有其他輸出
    header("location: ./dir1/{$filename}");
}else{
    echo "ERROR";
}