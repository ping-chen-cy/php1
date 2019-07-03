<?php
    $x = '';
    $y = '';
    $z = '';
    $a = '';
    $b = '';
    //使用預設值 後面 $x $y $z 不用再if isset 進行判斷
    if (isset($_GET['x'])){
    $x = $_GET['x'];
    $y = $_GET['y'];
    $a = (int)($x/$y);
    $z = $x % $y ;
    $b = "{$a} ...... {$z}";
    // echo "{$x} + {$y} = {$z} ";
    }
    /*
    用if 判斷 是否有帶參數(isset)
    */

?>
<form action="test_07.php">
<input name="x" value="<?php echo $x ?>">
/
<input name="y" value="<?php echo $y ?>">
<input type="submit" value="=">
<?php 
    //if (isset($z)){
    echo $b ;
    //}
?>

</form>