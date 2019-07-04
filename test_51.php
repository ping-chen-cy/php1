<?php

/* 
GD處理 圖像縮放
*/

$dstW = 240 ;
$dstH = 240 ;

$src = ImageCreateFromJpeg("upload/coffee.jpg");
$srcW = imagesx($src);
$srcH = imagesx($src);


if ($srcW > $srcH){
    //寬型
    $dstX = $dstW ;
    $dstY = $dstH * $srcH / $srcY ; 
}else{
    //直型
    $dstY = $dstH ; 
    $dstX = $dstW * $srcW / $srcH ;
}


$dst = ImageCreate($dstW, $dstH);


//imagecopyresampled
// imagecopyresampled ( $dst , $src,
//     //int $dst_x , int $dst_y ,
//     0 ,0 ,
//     //int $src_x , int $src_y ,
//     0 ,0 ,
//     //int $dst_w , int $dst_h ,
//     $dstX , $dstY ,
//     //, int $src_w , int $src_h 
//     $srcW , $srcH );


//ImageCopyresized
imagecopyresized( $dst , $src,
//int $dst_x , int $dst_y ,
0 ,0 ,
//int $src_x , int $src_y ,
0 ,0 ,
//int $dst_w , int $dst_h ,
$dstX , $dstY ,
//, int $src_w , int $src_h 
$srcW , $srcH );



// header("Content-type: image/jpeg");
//加上存檔位置
ImageJpeg($dst, "dir1/new.jpg");




ImageDestory($dst);
ImageDestory($src);
