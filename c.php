<?php

// $data['title'] = 'Ping Test Page';
// $data['who'] = 'Ping';

// $query = http_build_query($data);



//var_dump($query);
//string(29) "title=Ping+Test+Page&who=Ping"
//echo $query;
//title=Ping+Test+Page&who=Ping



//model
// function processData(){
//     $data['title'] = 'Ping Test Page';
//     $data['who'] = 'Ping';
//     return $data; 
// }

// //controller
// //call View
// //畫面放在views
// function loadView($viewfile, $data){
//     $query = http_build_query(array("data" => $data));
//     echo file_get_contents("http://localhost/php1/views/{$viewfile}.php?{$query}");

// }


// $data = processData();
// loadView('view_1', '' );


// Model
function processData(){
    $data['title'] = 'Ping Test Page';
    $data['who'] = 'Ping';
    return $data;
}
// call View
function loadView($viewFile, $data){
    $query = http_build_query(array("data" => $data));
    echo file_get_contents(
        "http://localhost/php1/views/{$viewFile}.php?{$query}");
}
$data = processData();
loadView('view_1', $data);