<?php

$path = $_SERVER['REQUEST_URI'];

$path = trim($path,'/');
$path = parse_url($path, PHP_URL_PATH);

switch($path){
    case 'about':
        require "pages/about.php";
        break;
    case 'contact':
        require "pages/contact.php";
        break;
    case 'services':
        require "pages/services.php";
        break;

    default:
       require "pages/home.php";
       break;
}