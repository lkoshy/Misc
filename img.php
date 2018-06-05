<?php

if(isset($_SERVER['HTTP_REFERER'])) {
    $ref = $_SERVER['HTTP_REFERER'];
} else {
    $ref = "nope";
}

$pattern = '/.+company.com.+/';
preg_match($pattern, $ref, $matches);

if($matches) {
    return header("HTTP/1.0 404 Not Found");
    die();
} else {
    $name = 'hunter2.jpg';
    $fp = fopen($name, 'rb');

    header("Content-Type: image/jpeg");
    header("Content-Length: " . filesize($name));

    fpassthru($fp);
}
