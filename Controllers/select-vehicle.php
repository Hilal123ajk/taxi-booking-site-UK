<?php

require $root_path . '/Core/Database.php';

$db = new Database();
$cars = $db->query('select * from cars');

$distance = 300;

require $root_path . '/views/select-vehicle.view.php';