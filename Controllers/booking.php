<?php

var_dump($_POST);

$price = 230;

require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_51NLhOWLPEqVCgj24gyNdsD3msDH7YyOOzUBJrepgz2qh986eGmMhWlFDqWmEmz2PBt1B2kIIxFwfqX0s9kJUcImG00kmrgkZL5');

$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
    'price_data' => [
    'currency' => 'usd',
    'product_data' => [
    'name' => 'Car Booking'
    ],
    'unit_amount' => $price * 100,
    ],
    'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'http://localhost:8080/thanks',
    'cancel_url' => 'https://example.com/cancel',
]); 

$current_date_time = date('F d, Y, g:i A');

require $root_path . '/views/booking.vew.php';

?>


<script>

    var stripe = Stripe('pk_test_51NLhOWLPEqVCgj24LutTCrTmK3B98SK9gTjROOY6fEDvb8SuVyCidnR2xX0myq0wuJRipSxJTNyeDIkwWJnTBvVZ00nCegzMA6');

    const formId = document.getElementById('form-id');

    formId.addEventListener("submit", function (e) {
        e.preventDefault();

        alert("working");

        stripe.redirectToCheckout({
            sessionId: "<?php echo $session->id; ?>"
        });
    });
</script>