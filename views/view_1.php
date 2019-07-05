<!-- 一定要.php -->
<?php
    $data = $_GET['data'];
    foreach($data as $key => $value ){
        //$$ 變數的變數
        $$key = $value ;
    }
?>
<h1><?php echo $title; ?> </h1>
<br>
Hello, <?php echo $who; ?>
<hr />
copyleft PING.

