<?php
/*
while (boolean){

}
// 相當於
for (;boolean;){

}
*/


$i=1;
while ($i < 10){
    echo $i++ .'<br>'; 
}

?>

<form action="test_17.php">
1 + 2 + ... +

<?php
    $n = '' ;
    $sum='';
    if (isset($_GET['n'])){
        $n = $_GET['n'];
        $i = 1;
        $sum = 0;
    }
    
    while ($i <= $n ){
        $sum += $i++ ;
        //$i++;
    }

?>
<input type="number" name='n' value=<?php echo $n ?>>
<input type="submit" value="=">
<?php  echo $sum; ?>

</form>