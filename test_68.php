<?php
//PDO
//PDO::__construct:https://www.php.net/manual/en/pdo.construct.php
//DSN

/*
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';
*/
$dsn = 'mysql:dbname=cy;host=localhost';
$opt = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
);
$pdo = new PDO($dsn,'root','',$opt);

$result = $pdo->prepare('select * from product');
$result->execute();
while ($product = $result->fetch(PDO::FETCH_OBJ)){
    echo $product->id .':'. $product->pname .':'. $product->price .'<br>' ;
}
?>