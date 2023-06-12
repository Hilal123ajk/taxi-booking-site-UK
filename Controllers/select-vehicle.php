<?php

require $root_path . '/Core/Database.php';

$db = new Database();
$cars = $db->query('select * from cars');

$distance = 200;
date_default_timezone_set('Asia/Karachi');
$current_date_time = date('F d, Y, g:i A');

require $root_path . '/views/select-vehicle.view.php'; 