<?php

$mystr = 'abc';
$findme = 'd';

//strpos
//https://www.php.net/manual/en/function.strpos.php


echo strpos($mystr, $findme);

echo '<hr>';

$pos =strpos($mystr, $findme);
if ($pos !== false){
    echo "Find it ";
}else{
    echo "not found";
}

