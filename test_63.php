<?php

//$ch =curl_init("http://www.bradchao.com/apptest/posttest1.php");
//$ch =curl_init("http://192.168.64.2/php1/test_64.php");
$ch =curl_init("http://192.168.64.2/php1/test_65.php");

//要傳遞的參數
// $dataString = "name=PING&age=29";
$dataString = "id=1";


//預設為get 
//CURLOPT_CUSTOMREQUEST 宣告使用POST
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

//接收RETURNTRANSFER
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//參數傳遞
curl_setopt($ch ,CURLOPT_POSTFIELDS, $dataString);


$ret = curl_exec($ch);

curl_close($ch);

// echo $ret;


//json 處理

$ret = json_decode($ret);


//echo $obj->name . ':' . $obj->age


if ($ret->code == '200'){
    echo $ret->product->pname . ':' . $ret->product->product  ;
}