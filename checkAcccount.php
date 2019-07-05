<?php
include_once 'sql.php';
spl_autoload_register(function($class_name){
    require_once "{$class_name}.php";
 });

//一般習慣 放include 後
session_start();
if (!isset($_REQUEST['account'])) header('Location: login.php');
$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];

//select * from member where account = ?

$sql = 'select * from member where account = ?' ; 
$stmt = $mysqli ->prepare($sql);
$stmt->bind_param('s', $account);
$stmt->execute();

$result = $stmt ->get_result();
if ($result->num_rows >0 ){
    // check password, now
    $member = $result->fetch_object();
    //var_dump($member);


    if (password_verify($passwd, $member->passwd)){
        //OK
        $_SESSION['member'] = $member ;
        $_SESSION ['cart'] = new Cart ;
        header('Location: main.php');
    }else{
        //XX
        header('Location: login.php');
    }

}else{
    //no account
    header('Location: login.php');
}

?>