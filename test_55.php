<?php

/* http 通訊協定上 網頁的要求為 無狀態 頁面之間 資料不相關 */


/* 現行方法 */

// $var1 = $_GET['var1'];
// echo $var1 ; 

/* 透過 session 的方式 */
/* cookies 的問題 ： 資料是掌握在user 的瀏覽器上 ， 較不受控*/


/* 使用 SESSION 要點 
僅記錄關鍵資料（index） 其他用關聯
*/
include_once 'test_tools_1.php';

session_start();
$var1 = $_SESSION['var1'];
echo "Sum : {$var1 ->sum()}; Avg: {$var1 ->avg()}";
