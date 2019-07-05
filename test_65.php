<?php
include_once 'sql.php';

//物件簡化寫法
$ret = new stdClass;
$ret ->code ='';

if (isset($_POST['id'])){
    $id =$_POST['id'];
    $sql = "SELECT * FROM product WHERE id = {$id}";
    $result = $mysqli->query($sql);
    if ($result->num_rows >0){
    $product = $result->fetch_object();
    $ret->code = '200';
    $ret->product = $product;
    }else{
        $ret->code = '404';
    }

}else{
    $ret->code = '500';
}
echo json_encode($ret);
?>