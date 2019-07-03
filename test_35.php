<h1>PHP 對 FS 相關操作</h1>
<?php
// date_default_timezone_set 設定預設時區
date_default_timezone_set('Asai/Taipe');
//filesystem 相關 function:https://www.php.net/manual/zh/book.filesystem.php
//opendir : https://www.php.net/manual/en/function.opendir.php


//當前目錄 php檔案放置位置
$mydir = '.';
// @ : 抑制錯誤訊息
// or 
// die = exit 如果 不存在 回傳
$fp = @opendir($mydir) or die('server is busy');
/*
echo gettype($fp);
//resource
echo '<hr>';
var_dump($fp);
//resource(3) of type (stream)
//stream 串流
*/

//readdir : https://www.php.net/manual/en/function.readdir.php
//$str = readdir($fp);
//echo $str .'<br>';

//用 readdir 把檔案名稱讀出來
while ($file = readdir($fp)){
    echo "{$file} <br>";
    $len = filesize("{$mydir}/{$file}");
    echo "{$file} : {$len} <br>";

    echo '<hr>';

    $dir = is_dir("{$mydir}/{$file}");
    if ($dir == true ){
    echo "{$file} : is dir <br>";
    }
    //mtime 採用uinux 時間紀元 時間戳記
    $mtime = filemtime("{$mydir}/{$file}");
    //date 處理時間 未設定時區 會是 "+0"
    $ntime = date('Y-m-d H:i:s', $mtime);
    echo "{$file} : {$ntime} <br>";

}

if (unlink("./dir1")){
    echo 'delete OK!';
    //Warning: unlink(./dir1/text.txt): Permission denied in /opt/lampp/htdocs/test_35.php on line 47
}



?>