<?php
session_start();
if (!isset($_SESSION['member'])) header('Location: login.php');

$member = $_SESSION['member'];
$cart = $_SESSION['cart'];

$icon = 'data:image/jpeg;base64,'.base64_encode($member->icon);

?>

<h1>CY GROUP </h1>
<hr>
Welcome, <?php echo $member->realname;?> <br>
<img src='<?php echo $icon ; ?>'>
<a href= 'logout.php'>logout</a><br>
<hr>
2019 Copyright. Power Vy CY corp.


