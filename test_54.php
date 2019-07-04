<?php

include_once 'test_tools_1.php';
/* 頁面之間的關聯 */
/*可以不寫 ， 
前提是 php.ini 中
session.auto_start=1
*/
session_start();
$var1 = new Student(90, 87, 60);

echo "Sum : {$var1 ->sum()}; Avg: {$var1 ->avg()}";

// $var1 = rand(1,100) ; 
//$var1 = array(1,2,3,4,5);
$_SESSION['var1'] = $var1 ;
echo '<hr >';
echo '<a href="test_55.php"> Next Page </a>';


//$var1 = 200 ;
?>

<!-- <a href='test_55.php?var1=<?php echo $var1; ?>'>Next Page </a> -->

