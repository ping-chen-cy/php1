<?php
spl_autoload_register(function($class_name){
    require_once "{$class_name}.php";
 });
 include_once 'sql.php';

 $myquery = new MyQuery($mysqli);
 $var1->getField(1, MyQuery::QUERY_PNAME);
 $var2->getField(1, MyQuery::QUERY_PRICE);
 echo $var1 .':'.$var2;