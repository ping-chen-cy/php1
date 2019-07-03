<!-- 使用for 迴圈寫一個99乘法表 -->
<!--
<table border='1' width='100%'>

    <tr>
        <td>
        1 x 1 = 2 <br>
        1 x 2 = 2 <br>
        1 x 3 = 2 <br>
        1 x 4 = 2 <br>
        1 x 5 = 2 <br>
        1 x 6 = 2 <br>
        1 x 7 = 2 <br>
        1 x 8 = 2 <br>
        1 x 9 = 2 <br>
        </td>
        <td>
        2 x 1 = 2 <br>
        2 x 2 = 2 <br>
        2 x 3 = 2 <br>
        2 x 4 = 2 <br>
        2 x 5 = 2 <br>
        2 x 6 = 2 <br>
        2 x 7 = 2 <br>
        2 x 8 = 2 <br>
        2 x 9 = 2 <br>
        </td>
    </tr>


</table>
-->



<?php

/* for ( $i = 0 ; $i < 10 ; $i++ ){
    for ($j=0; $j<10 ; $j++){
        $k=(int)($i*$k);
        echo "{$i} X {$k} = {$k}";
    }
}
*/
?>

<table border='1' width='100%'>
<?php 

    for ($k = 0 ; $k < 2;$k++){
    echo "<tr>";
        for ( $j = 2 ; $j <= 5; $j++){
        echo "<td>";
        $newj = $j + $k*4;
            for ($i=1; $i<=9; $i++){
                $r = $newj*$i;
                echo "$newj x $i = $r <br>";
            }
        echo "</td>";
        }
    echo "</tr>";
    }
?>
</table>





<hr />

<table border='1' width='100%'>
<?php 
//define 常數
define("ROWS",4);
define("FROM",1);
define("TO",4);


    for ($k = 0 ; $k < ROWS;$k++){
    echo "<tr>";
        for ( $j = FROM ; $j <= TO; $j++){
        echo "<td>";
        $newj = $j + $k*(TO - FROM +1);
            for ($i=1; $i<=9; $i++){
                $r = $newj*$i;
                echo "$newj x $i = $r <br>";
            }
        echo "</td>";
        }
    echo "</tr>";
    }
?>
</table>

<hr />

<table border='1' width='100%'>
<?php 
$c = '';


    for ($k = 0 ; $k < ROWS;$k++){
    echo "<tr>";
        for ( $j = FROM ; $j <= TO; $j++){
            if (($k +$j)%2 == 1){
                $c = 'pink';
            }else{
                $c = 'yellow';
            }
        echo "<td bgcolor=$c>";
        $newj = $j + $k*(TO - FROM +1);
            for ($i=1; $i<=9; $i++){
                $r = $newj*$i;
                echo "$newj x $i = $r <br>";
            }
        echo "</td>";
        }
    echo "</tr>";
    }
?>
</table>



<hr />

<table border='1' width='100%'>
<?php 
$c = '';


    for ($k = 0 ; $k < ROWS;$k++){
    echo "<tr>";
        echo "<td bgcolor= (($k +$j)%2 == 0)? 'pink':'yellow'>";
        $newj = $j + $k*(TO - FROM +1);
            for ($i=1; $i<=9; $i++){
                $r = $newj*$i;
                echo "$newj x $i = $r <br>";
            }
        echo "</td>";
        }
    echo "</tr>";
?>
</table>
