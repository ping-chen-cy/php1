<h1> 二維陣列</h1>
<!-- 多維陣列：一維陣列中 有多層 一維陣列  -->
<?php
$a[0] = 123;
$a[1] = array(1,2,3,4);

echo $a[0] . '<br>';
echo $a[1][0] . '<br>';
echo $a[1][1]. '<br>';
echo $a[1][3] . '<br>';
/*123
1
2
4 */
var_dump($a);
//array(2) { [0]=> int(123) [1]=> array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) } }


echo '<hr>' ;


// 型態 INF 無限大 ， NAN not a number

// is_系列 印出 true false
echo is_array($a);
//1 ture
echo '<hr>' ;
echo is_array($a[0]);
//不顯示 false
echo '<hr>' ;
echo is_array($a[1]);
//1
echo '<hr>' ;
echo is_array($a[1][0]);
//0


?>