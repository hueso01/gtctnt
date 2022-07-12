<?php

if(isset($_GET['data']) and !empty($_GET['data'])) {
    $data = $_GET['data'];
}

$data = urldecode($data);
$data = unserialize($data);

if($data) {
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET');
    
    echo json_encode($data);
}


?>
