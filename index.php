<?php

//make function to sanitize url
function sanitize_url($url) {
    $url = filter_var($url, FILTER_SANITIZE_URL);
    return $url;
}

$url = sanitize_url($_GET['url']);

if(empty($url)) {
    exit();
}



$get = file_get_contents($url);
echo "Hello!!";
echo $get;

