<?php
function render($view, $data = [], $layout = 'layout')
{
    extract($data);

    ob_start();
    require __DIR__ . '/views/' . $view . '.php';
    $content = ob_get_clean();

    require __DIR__ . "/views/". $layout . ".php"; // ✅ MATCH FILE NAME

    
}