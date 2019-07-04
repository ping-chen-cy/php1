<?php
//('host','username','pass','db')
$mysqli = new mysqli('localhost','root','','cy');
//var_dump($mysqli); 
//object(mysqli)#1 (19) { ["affected_rows"]=> int(0) ["client_info"]=> string(79) "mysqlnd 5.0.12-dev - 20150407 - $Id: 7cc7cc96e675f6d72e5cf0f267f48e167c2abb23 $" ["client_version"]=> int(50012) ["connect_errno"]=> int(0) ["connect_error"]=> NULL ["errno"]=> int(0) ["error"]=> string(0) "" ["error_list"]=> array(0) { } ["field_count"]=> int(0) ["host_info"]=> string(25) "Localhost via UNIX socket" ["info"]=> NULL ["insert_id"]=> int(0) ["server_info"]=> string(21) "5.5.5-10.3.16-MariaDB" ["server_version"]=> int(50505) ["stat"]=> string(133) "Uptime: 1197 Threads: 7 Questions: 469 Slow queries: 0 Opens: 31 Flush tables: 1 Open tables: 25 Queries per second avg: 0.391" ["sqlstate"]=> string(5) "00000" ["protocol_version"]=> int(10) ["thread_id"]=> int(67) ["warning_count"]=> int(0) }


echo '<hr >' ; 
//檢查連線 印出error code
echo $mysqli ->connect_errno;
echo '<hr >' ; 

//設為utf-8
$mysqli->set_charset('utf-8');

// 修改資料
$sql = 'UPDATE cust set cname = "Tony" WHERE id =3 ';
$stmt = $mysqli->prepare($sql); 
$stmt->execute();
echo $stmt->affected_rows ;
echo '<hr >';
echo $mysqli->error;