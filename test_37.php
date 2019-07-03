<?php

$fp = @fopen('https://tw.stock.yahoo.com/q/bc?s=2317','r');

/*
while ($line = @fgets($fp)){
    echo "{$i} => {$line} <br>";
    $i++;
}
*/

while ($line = @fgets($fp)){
    if (preg_match('/href/', $line)){
        if (preg_match('/2317/',$line)){
            echo "{$i} => {$line}";
            $i++;
        }
    }

}

