<!--
<form>
<input>
+
<input>
<input type="submit" value="=">

    送出後網址變為
    http://192.168.64.2/test05.php?
    是新的一頁（無狀態模式）
    已將參數傳送給test05

</form>
-->

<!--
<form action="test_06.php">
<input name="x">
+
<input name="y">
<input type="submit" value="=">


    action 動作
    name 代號
    submit 按鈕
    value 顯示值
    送出後網址變為
    http://192.168.64.2/test_06.php?x=10&y=10
    將x=10 y=10 參數傳送給test＿06.php

</form>
 -->

 <?php
    $x = '';
    $y = '';
    $z = '';
    //使用預設值 後面 $x $y $z 不用再if isset 進行判斷
    if (isset($_GET['x'])){
    $x = $_GET['x'];
    $y = $_GET['y'];
    $z = $x + $y ;
    // echo "{$x} + {$y} = {$z} ";
    }
    /*
    用if 判斷 是否有帶參數(isset)
    */

?>
<form action="test05.php">
<input name="x" value="<?php echo $x ?>">
+
<input name="y" value="<?php echo $y ?>">
<input type="submit" value="=">
<?php 
    //if (isset($z)){
    echo $z ;
    //}
?>

</form>
