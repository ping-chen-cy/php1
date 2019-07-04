<?php
session_start();
if (isset($_SESSION['var1'])) header ("location: test_54.php");
$var1 = $_SESSION['var1'];
echo $var1[2] ;
