<?php

$uri = $_SERVER['REQUEST_URI'];
$root_path = __DIR__;

require $root_path . "/Core/functions.php";

if($uri === '/')
{
    require 'controllers/index.php';
}else if($uri === '/standard-booking')
{
    require $root_path . '/Controllers/standard-booking.php';
}