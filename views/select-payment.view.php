<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>

    <!-- Payment Via Card  -->

    <div class="w-11/12 md:w-1/2 mx-auto md:m-20">

        <h2 class="text-3xl md:text-4xl text-gray-700 my-3">Pay via Card</h2>
        <h4 class="text-lg font-medium text-gray-800">Fill required ( <span class="text-red-600">*</span> ) fields to confirm your payment.</h4>

        <div class="payment-fields bg-gray-300 p-5">
            <div class="w-full">
                <h5 class="text-gray-800 font-medium my-1">Payment Details</h5>
                <input class="shadow-md w-1/2 my-1 p-2 rounded-sm focus:outline-none" type="text" placeholder="Amount">
                <br>
                <input class="shadow-md w-full my-1 p-2 rounded-sm focus:outline-none" type="text" placeholder="Booking Id or other notes">
            </div>

            <div class="w-full">
                <h5 class="text-gray-800 font-medium my-1">CARD DETAILS</h5>
                
                <input class="shadow-md w-full my-1 p-2 rounded-sm focus:outline-none" type="text" placeholder="1234 1234 1234 1234">
                <br>
                <input class="shadow-md w-full my-1 p-2 rounded-sm focus:outline-none" type="text" placeholder="MM / YY">
                <br>
                <input class="shadow-md w-full my-1 p-2 rounded-sm focus:outline-none" type="text" placeholder="CVC">
                
            </div>
            
        </div>

        <div class="my-5">
            <button class="bg-gray-700 text-lg rounded-md text-white py-2 px-6">Complete Payment</button>
        </div>
    </div>


 <!-- HTML Footer  -->
<?php require $root_path . '/views/partials/footer.view.php'; ?>

<script src="/public/js/navbar.js"></script>