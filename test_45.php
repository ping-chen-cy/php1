<?php
/* 使用 GD https://www.php.net/manual/en/book.image.php
imagecreatefromstring 影像轉 Base64 到 server 再轉 影像 
*/
//1. canvas (new)
//2. process 
//3. ooput =1 display or export to file 
//4. free momory

//$rate = 50; //50%

$rate = $_GET['rate'];


// imagecreatetruecolor : https://www.php.net/manual/en/function.imagecreatetruecolor.php

$img = ImageCreateTrueColor ( 400 , 20 ) ;

//配置顏色
//imagecolorallocate :https://www.php.net/manual/en/function.imagecolorallocate.php
$yellow = imagecolorallocate ( $img , 255 , 255 , 0 );
$red = imagecolorallocate ( $img , 255 , 0 , 0 );

//填滿
//imagefilledrectangle
imagefilledrectangle ( $img , 0 , 0 , 400, 20 , $yellow );
imagefilledrectangle ( $img , 0 , 0 , $rate*400/100 , 20 , $red );


//輸出到瀏覽器
header("Content-type: image/jpeg");

//輸出
//imagejpeg https://www.php.net/manual/en/function.imagejpeg.php

imagejpeg($img);

echo "{$rate} %";





//ImageDestroy :https://www.php.net/manual/en/function.imagedestroy.php
//摧毀影像
ImageDestroy($img);