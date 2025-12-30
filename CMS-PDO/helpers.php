<?php
function base_url($path = ""){
    $protocol = isset($_SERVER['HTTPS']) && isset($_SERVER['HTTPS'])  !== "off" ? 'https://' : 'https';
    $host = $_SERVER['HTTP_HOST'];
    $baseUrl = $protocol . $host;
    return $baseUrl. '/' . ltrim($path, '/');
}


function base_path($path = "") {
    $rootPath = dirname(__DIR__);
    return $rootPath . DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR);
}

function uploads_url($filename = '') {
    return base_path('uploads/' . DIRECTORY_SEPARATOR . $filename);
}


function assets_url($path) {
    return base_path('assets/').ltrim($path, '/');
}

function redirect($url) {
    header('Location:' . base_url($url));
    exit();
}

?>