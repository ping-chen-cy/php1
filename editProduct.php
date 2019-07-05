<?php
include_once "sql.php";

if (isset($_REQUEST['editid'])){
    //edit mode
    //query data
    $editid = $_REQUEST['editid'];
    $sql = "SELECT * FROM product WHERE id = {$editid}";
    $result = $mysqli->query($sql);
    $product = $result->fetch_object();
    
}else if (isset($_REQUEST['updateid'])){
    //update mode 
    $updateid = $_REQUEST['updateid'];
    $pname = $_REQUEST['pname'];
    $price = $_REQUEST['price'];
    $sql = "UPDATE product SET pname={$pname}, price={$price} WHERE id = {$updateid}";
    $result = $mysqli->query($sql);

    header('Location: main.php');

}

?>


Edit Product <hr />
<form method='get' action='editproduct.php'>
        <!-- 使用hidden type 的input 來傳遞資料 -->
        <input type="hidden" name="updateid" value='<?php echo $product->id; ?>'>
PName:  <input type="text" name="pname" value='<?php echo $product->pname; ?>'><br>
Price:  <input type="number" name="price" value='<?php echo $product->price; ?>'><br>
<input type="submit" value="Add">

</form>