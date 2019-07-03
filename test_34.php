<?php
    include_once 'test_tools_1.php';

    $twid = 'N221504650';
    if (isTWId($twid)){
        echo 'ok';
    }else{
        echo 'no ok';
    }
echo '<hr>';


    $twid = createTWId();
    echo $twid .'<br>';
    if (isTWId($twid)){
        echo 'ok';
    }else{
        echo 'no ok';
    }


echo '<hr>';


    $twid = createTWId(false);
    echo $twid .'<br>';
    if (isTWId($twid)){
        echo 'ok';
    }else{
        echo 'no ok';
    }
?>