<h1> 自定義ｆｕｎｃｔｉｏｎ</h1>
<?php
sayYa();
sayYa();
sayHello('ping');
sayHello('chen');
sayHelloV2('ping');
sayHelloV3('chen');
sayHelloV3(4);
sayHelloV3(2,'ping');
/*
Ya
Ya
Hello ping 
Hello chen 
Hello ping 
Hello world 
Hello world 
Hello world 
Hello world 
Hello ping 
Hello ping 
*/
function sayYa(){
    echo "Ya<br>";
}


function sayHello($name){
    echo "Hello {$name} <br>";
}

function sayHelloV2($name = 'world'){
    echo "Hello {$name} <br>";
}

function sayHelloV3($n =1 ,$name = 'world'){
    for ($i=0; $i < $n ; $i++ ){
        echo "Hello {$name} <br>";
    }
}



echo '<hr>';

sayHelloV4(array('a','b','c','d'));

sayHelloV4('may');
function sayHelloV4($names){
    if (is_array($names)){
        foreach($names as $name){
            echo "Hello {$name} <br>";
        }
    }else {
        echo "Hello {$names} <br>";

    }

}


echo '<hr>';
sayHelloV5();
sayHelloV5(11);
sayHelloV5('may');
sayHelloV5(1,2,3);





function sayHelloV5(){
    echo 'OK'.'<br>';
}
echo '<hr>';
sayHelloV6();
sayHelloV6(11);
sayHelloV6('may');
sayHelloV6(1,2,3);

function sayHelloV6(){
    $names = func_get_args();
    foreach($names as $name ){
        echo "hello , {$name} <br>";
    }
}


