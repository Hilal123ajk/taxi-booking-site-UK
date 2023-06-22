<?php

$uri = trim($_SERVER['REQUEST_URI'], '/');

$root_path = __DIR__;

require $root_path . "/Core/functions.php";

if ($uri === '') {
    require 'controllers/index.php';
} else if (strpos($uri, 'standard-booking') === 0) {
    require $root_path . '/Controllers/standard-booking.php';
} else if (strpos($uri, 'payment-select') === 0) {
    require $root_path . '/Controllers/payment.php';
} else if (strpos($uri, 'select-vehicle') === 0) {
    require $root_path . '/Controllers/select-vehicle.php';
} else if (strpos($uri, 'booking') === 0) {
    require $root_path . '/Controllers/booking.php';
} else if (strpos($uri, 'thanks') === 0) {
    require $root_path . '/Controllers/thank-you.php';
} 