if(isset($_GET['data']) and !empty($_GET['data'])) {
    $data = $_GET['data'];
}

$data = urldecode($data);
$data = unserialize($data);

if($data) {
    echo json_encode($data);
}
