<?php

require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_51NLhOWLPEqVCgj24gyNdsD3msDH7YyOOzUBJrepgz2qh986eGmMhWlFDqWmEmz2PBt1B2kIIxFwfqX0s9kJUcImG00kmrgkZL5');

$session_id = $_GET['session_id'];

try {
    $session = \Stripe\Checkout\Session::retrieve($session_id);
    $payment_intent = \Stripe\PaymentIntent::retrieve($session->payment_intent);

    // Getting payment details after completion
    $payment_id = $payment_intent->id;
    $amount = $payment_intent->amount;
    $currency = $payment_intent->currency;
    
    
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Handle any errors that occur during the API call
    echo "Error: " . $e->getMessage();
}

require $root_path . '/views/thank-you.view.php';