<?php
// file : 將檔案的內容 一次讀到陣列中


$content = file('/opt/lampp/temp/dir2/test2.txt');
var_dump($content);
echo '<hr>';
foreach ($content as $k => $line){
    echo $line. '<br>';
}