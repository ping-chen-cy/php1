<?php
/* 後端的3個P中(PHP ASP JSP)
只有php 可以跑在 命令列
網頁權限由apache 決定
httpd.conf
apache unixd_midule 上的user group
*/

//創建目錄
/*
if (@mkdir("/opt/lampp/temp/dir2")){
    echo "mkdir ok \n" ;
}else{
    echo "mkdir failure";
}
*/



/*開啟並處理檔案的Function有很多種
fopen 是較老的方式
fopen:https://www.php.net/manual/zh/function.fopen.php
r:  唯讀、指向開頭、不會嘗試創建
r+: 讀寫、指向開頭、不會嘗試創建
w:  只寫、指向開頭、會嘗試創建
w+: 讀寫、指向開頭、會嘗試創建
a:  只寫、指向結尾、會嘗試創建
a+: 讀寫、指向結尾、會嘗試創建
*/
/*
$fp = @fopen('/opt/lampp/temp/dir2/test2.txt', 'r');
var_dump($fp);
//bool(false) 
echo '<hr>';
$fp = @fopen('/opt/lampp/temp/dir2/test2.txt', 'r+');
var_dump($fp);
//bool(false) 
*/
/*
echo '<hr>';
$fp = @fopen('/opt/lampp/temp/dir2/test2.txt', 'w+');
var_dump($fp);
//resource(3) of type (stream)
*/
$fp = @fopen('/opt/lampp/temp/dir2/test2.txt', 'r');
//var_dump($fp);
//resource(3) of type (stream)

$c = fread($fp,1);
echo nl2br($c);

echo '<hr>';

while ($d = fgetc($fp)){
    echo nl2br($d);
    /*
    11
    22
    33
    */
}








//結束串流
fclose($fp);


?>