<?php
//curl 呼叫遠端ＡＰＩ
//參考：https://expect7.pixnet.net/blog/post/36428081-%5B%E7%A8%8B%E5%BC%8F%5D%5Bphp%5D-%E5%A6%82%E4%BD%95%E4%BD%BF%E7%94%A8php-curl%EF%BC%8C%E5%9F%BA%E7%A4%8E%E6%95%99%E5%AD%B8%E3%80%82
//php 官網：https://www.php.net/manual/en/book.curl.php
//初始化
$ch =curl_init();
//設定URL
//set option
curl_setopt($ch,CURLOPT_URL, "https://www.chungyo.com/" );
//header 不抓
curl_setopt($ch,CURLOPT_HEADER, 0 );
var_dump($ch);

//執行
$ret = curl_exec($ch);
//抓完關閉
curl_close($ch);
//先印出資料型別
var_dump($ret);