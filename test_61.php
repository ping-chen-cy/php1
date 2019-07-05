<?php
    spl_autoload_register(function($class_name){
        require_once "{$class_name}.php";
     });


// include 'myClass1.php';
// include 'myClass2.php';
$obj1 = new MyClass1;
$obj1->showme();
$obj2 = new MyClass2;
$obj2->showme();

?>