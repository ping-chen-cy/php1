<?php
/* fwrite 進行資料寫出
*/

$fp = fopen('/opt/lampp/temp/dir2/test2.txt','r+');
fwrite($fp, "hello\ni'm ping\n ");
//很重要！！！！！！
//將記憶體的緩存資料沖出，避免串流資料滯留在記憶體內
fflush($fp);
fclose($fp);
/*
cat test2.txt                 
hello
i'm ping
*/

$fp = fopen('/opt/lampp/temp/dir2/test2.txt','w');
fwrite($fp, "test");
//test ！！！會將原資料清除 重寫新資料

$fp = fopen('/opt/lampp/temp/dir2/test2.txt','a');
fwrite($fp, "testaaaaaaa");
//testtestaaaaaaa ！！！加在文末




