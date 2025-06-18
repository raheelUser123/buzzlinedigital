<?php
ob_start();
session_start();

$url = $_SERVER['REQUEST_URI'];
$current_url = explode('?', $url);
$url = $current_url[0];

if (strstr($url, addslashes('/lp/'), false)) {
    require_once('./lp/index.php');
    exit();
}

$dir = __DIR__ . '/views';
$files = array_slice(scandir($dir), 2);

$fileWithOutExt = array();
foreach ($files as $file) {
    $without_extension = '/' . pathinfo($file, PATHINFO_FILENAME) . '/';
    array_push($fileWithOutExt, $without_extension);
}

if ($url == "/") {
    require $dir . '/home.php';
    die();
}

// ✅ SMTP handler before in_array()
if ($url == "/smtp-handler.php") {
    require __DIR__ . '/views/smtp-handler.php';
    exit();
}

if (in_array($url, $fileWithOutExt)) {
    $urlWithoutSlashes = str_replace('/', "", $url);
    require $dir . '/' . $urlWithoutSlashes . '.php';
} else {
    require $dir . '/404.php';
}
?>
