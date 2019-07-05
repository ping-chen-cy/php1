<?php
$mysqli = new mysqli('localhost','root','','cy');
$mysqli->set_charset('utf-8');
//查詢語法
$sql = 'SELECT * FROM cust';

$stmt = $mysqli->prepare($sql);
$stmt->execute();

$stmt->store_result();

echo $stmt->num_rows . '<br>' ;


$stmt ->bind_result($id,$cname,$tel,$birthday);

echo '<hr>';
// $stmt ->fetch();
// echo "{$id} : {$cname} : {$tel} : {$birthday}";
//使用while 迴圈 撈取資料 bool = 0 退出
// while ($stmt ->fetch()){
//     echo "{$id} : {$cname} : {$tel} : {$birthday} <br>";
// }




//json 基本格式
/*
{key:value, ..... }=>object 
[ ,,,, ] => array 
*/
$ret = new stdClass() ; // object() 所有物件的最上層 最乾淨的物件 裡面什麼都沒有
if ($stmt->num_rows >0){
    $ret->result = $stmt->num_rows;
    $row =[];
    //使用while 迴圈 撈取資料 bool = 0 退出
    while ($stmt ->fetch()){
        $row['id'] = $id ;
        $row['cname'] = $cname ;
        $row['tel'] = $tel ;
        $row['birthday'] = $birthday ;

        $ret->data[] = $row ;
        
    }
}else{
    $ret->result = 'no data' ;
}



$stmt->free_result();
$stmt->close();
echo json_encode($ret);










