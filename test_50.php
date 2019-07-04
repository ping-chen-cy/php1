<?php


$img = imagecreatefromjpeg ("upload/image.jpg");

$yellow = ImageColorAllocate( $img, 255,255,0);

$f = getimagesize ("upload/image.jpg") ;

$w = $f[0] - 500 ;
$h = $f[1] - 500 ;


imagefttext ( $img , 40 , rand(-30,30)  , $w , $h , $yellow , "font/Lobster.ttf" , "photo by PING" );


header("Content-type: image/jpeg");
ImageJpeg($img);




ImageDestory($img);


