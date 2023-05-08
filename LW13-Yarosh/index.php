<?php
$url = $_SERVER['REQUEST_URI'];
$path = 'view' .$url . '.php';

if(file_exists($path)) {
    //файл існує
    $content = file_get_contents($path);
} else {
    //файл не існує
    header('HTTP/1.0 404 Not Found');
    $content = file_get_contents('view/404.php');
}

$layout = file_get_contents('layout.php');
$title = isset($titles[$url]) ? $titles[$url]: "";

$layout = str_replace('{{ content }}', $content, $layout);
$layout = str_replace('{{ title }}', $title, $layout);

if(preg_match('#{{ title: "(.+?)" }}#', $content, $match)) {
    $title = $match[1];
    $content = str_replace('{{ title: "'.$title .'" }}', '', $content);
}

echo $layout;
?>