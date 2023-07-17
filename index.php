<?php

$uri = trim($_SERVER['REQUEST_URI'], '/');

$root_path = __DIR__;

require $root_path . "/Core/functions.php";

if ($uri === '') {
    require $root_path . '/views/index.view.php';
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
} else if (strpos($uri, 'pay') === 0) {
    require $root_path . '/Controllers/pay.php';
} else if (strpos($uri, 'corporate-booking') === 0) {
    require $root_path . '/Controllers/corporate-booking.php';
} else if (strpos($uri, 'airport-transfer') === 0) {
    require $root_path . '/Controllers/airport-transfer.php';
} else if (strpos($uri, 'cities') === 0) {
    require $root_path . '/Controllers/cities.php';
} else if (strpos($uri, 'services') === 0) {
    require $root_path . '/Controllers/services.php';
} else if (strpos($uri, 'contact') === 0) {
    require $root_path . '/Controllers/contact.php';
} else if (strpos($uri, 'feedback-success') === 0) {
    require $root_path . '/Controllers/feedback-success.php';
} 