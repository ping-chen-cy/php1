<?php
$a = array(1,2,3,7 => 4,5,'ping',12.333);

for ($i = 0 ;$i <= 11 ;$i++){
    echo $a[$i]. '<br>';
}


/*
1
2
3
Notice: Undefined offset: 3 in /opt/lampp/htdocs/test_22.php on line 5
Notice: Undefined offset: 4 in /opt/lampp/htdocs/test_22.php on line 5
Notice: Undefined offset: 5 in /opt/lampp/htdocs/test_22.php on line 5
Notice: Undefined offset: 6 in /opt/lampp/htdocs/test_22.php on line 5
4
5
ping
12.333
Notice: Undefined offset: 11 in /opt/lampp/htdocs/test_22.php on line 5
陣列的 "index" 其實是 "offset"（偏移量）
*/


echo '<hr>';
// foreach 迴圈：也什麼跑什麼，沒有的不跑
//較適合用在array
foreach ($a as $value){
    echo $value . '<br>';
}
    /*
1
2
3
4
5
ping
12.333
*/
echo '<hr>';

foreach ($a as $key => $value){
    echo $key . '=>' . $value . '<br>';
}
/*
0=>1
1=>2
2=>3
7=>4
8=>5
9=>ping
10=>12.333
*/



?>