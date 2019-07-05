<?php
/*
API 資料庫操作

*/

class MyQurey {
    private $mysqli;
    const QUERY_PNAME = 'pname';
    const QUERY_PRICE = 'price';

    function __construct($mydqli){
        $this->mysqli = $mysqli;
        }
    function getField($pid,$field){
        $sql = "SELECT * FROM product WHERE id = {$pid}";
        if ($result->num_rows == 0){
            return false;
        }else{
            //fetch_assoc 關連式資料庫調用
            $product = $result->fetch_assoc(); //array
            return $product[$field];
        }
    }
}