<?php
    include_once 'sql.php';

if (isset($_REQUEST['cloneid'])){
    $cloneid = $_REQUEST['cloneid'];
    $sql = "INSERT INTO product (pname,price )".
            "SELECT pname,price FROM product WHERE id = ? ";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i',$cloneid);
    $stmt->execute();
}else if (isset($_REQUEST['delid'])){
    $delid = $_REQUEST['delid'];
    $sql = "DELETE FROM product WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i',$delid);
    $stmt->execute();
}
    //分頁處理
    // $page = 1;
    $page =  isset($_REQUEST['page'])? $_REQUEST['page'] : 1;
    $rpp = 4; //row pre page
    $start = ($page -1) * $rpp ; 
    if ($page == 1 ){
        $lastpage = 1;
    } else{
        $lastpage = $page -1 ;
    }
    $nextpage = $page +1 ;


    //limit 設定每頁筆數
$sql = "SELECT * FROM product limit {$start},{$rpp}";
    $result = $mysqli->query($sql);

    //select * from product ; 
?>
<script>
    function confirmDelete(pname){
        return confirm('Are You Sure to Delete \"'+ pname +'\"  ?');
    }



</script>


<a href='addProduct.php'>Add New product </a>
<table border='1' width="100%">
<tr>
    <td>id</td>
    <td>product</td>
    <td>price</td>
    <td>Edit/Delete</td>
</tr>
<?php
    while ( $product = $result->fetch_object()){
        echo '<tr>';
        echo "<td>{$product->id}</td>";
        echo "<td>{$product->pname}</td>";
        echo "<td>{$product->price}</td>";
        echo "<td>";
        echo "<a href='editProduct.php?editid={$product->id}'>Edit | </a>";
        //echo "<a href='?delid={$product->id}' onclick='return true'>Delete | </a>";
        //echo "<a href='?delid={$product->id}' onclick='return false'>Delete | </a>";
        echo "<a href='?delid={$product->id}' onclick='return confirmDelete(\"{$product->pname}\")'>Delete | </a>";
        echo "<a href='?cloneid={$product->id}'>Clone</a>";
        echo "</td>";
        echo '</tr>';
    }
?>
</table>
<input type='button' value='上一頁' href='<?php echo "pname.php?page={$lastpage}";?>'><br>
<input type='button' value='下一頁' href='<?php echo "pname.php?page={$nextpage}";?>'>

