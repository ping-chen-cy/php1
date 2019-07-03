<?php
    $x = '';
    $y = '';
    $z = '';
    $a = '';
    $b = '';
    $op= '' ;
    //使用預設值 後面 $x $y $z 不用再if isset 進行判斷
    if (isset($_GET['x'])){
    $x = $_GET['x'];
    $y = $_GET['y'];
    $op = $_GET['op'];
        if ( $op == "1" ){
            $b = (int)($x + $y);
        }else if ($op == "2" ){
            $b = (int)($x - $y);
        }else if ($op == "3"){
            $b = (int)($x * $y);
        }else if ($op == "4"){
            $a = (int)($x/$y);
            $z = $x % $y ;
            $b = "{$a} ...... {$z}";
        }else{
            $b = "some thng error";
        }

    // echo "{$x} + {$y} = {$z} ";
    }
    /*
    用if 判斷 是否有帶參數(isset)
    */

?>
<form action="test_10.php">
<input name="x" value="<?php echo $x ?>">
<select name="op" >
    <option value="1" <?php if ($op == "1" ) echo "selected" ;  ?> >+</option>
    <option value="2" <?php if ($op == "2" ) echo "selected" ;  ?> >-</option>
    <option value="3" <?php if ($op == "3" ) echo "selected" ;  ?> >x</option>
    <option value="4" <?php if ($op == "4" ) echo "selected" ;  ?> >/</option>
</select>
<input name="y" value="<?php echo $y ?>">
<input type="submit" value="=">
<?php 
    //if (isset($z)){
    echo $b ;
    //}
?>

</form>