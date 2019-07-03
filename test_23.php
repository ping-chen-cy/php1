<?php
$person['name'] = 'ping';
$person['age'] = 29;
$person['weight'] = 80;

echo $person['name'];

echo '<hr>';

foreach($person as $key => $value){
    echo "{$key} : {$value} <br>";
}












?>