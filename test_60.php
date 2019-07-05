<?php
$passwd = '123456';
//密碼加密
$passwd1 = password_hash($passwd, PASSWORD_DEFAULT );
echo $passwd1 .'<br>' ; 
echo strlen($passwd1);


echo '<hr>  ';


$passwd2 = '123456';
//密碼驗證
//單向是的驗證 非還原式
if (password_verify($passwd2, $passwd1)){
    echo 'OK';
}else{
    echo 'XX';
}