<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>


<!-- Booking Details  -->

<div class="bookin-heading py-12 bg-teal-900">
    <h1 class="text-4xl mx-3 font-bold text-white md:w-10/12 md:mx-auto">Booking <span class="text-lime-500">Form</span></h1>
</div>


<div class="md:flex">

    <!-- Left Side  -->
    <div class="left-side w-full md:w-3/5 mx-auto p-5">

        <!-- Pickup Date And Time  -->
        <div class="pickup-data-time border border-gray-600 bg-gray-100 px-2 py-8 relative my-3">
            <h1 class="absolute top-0 text-xl font-medium my-2 -mb-2">Pickup date and time</h1>
            <div class="md:flex justify-between">
                <div>
                    <p class="text-base font-medium text-gray-700 my-2">Date</p>
                    <input class="w-full p-2 border border-gray-600 rounded-sm" type="date">
                </div>
                <div>
                    <p class="text-base font-medium text-gray-700 my-2">Hours</p>
                    <select class="w-full px-7 py-2 text-left border border-gray-600 rounded-sm" name="number">
                        <?php
                            for ($i = 0; $i <= 24; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <p class="text-base font-medium text-gray-700 my-2">Minutes</p>
                    <select class="w-full px-7 py-2 text-left border border-gray-600 rounded-sm" name="number">
                        <?php
                        for ($i = 0; $i <= 60; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="pickup-data-time border border-gray-600 bg-gray-100 px-2 py-8 relative my-3">
            <h1 class="absolute top-0 text-xl font-medium my-2 -mb-2">Personal Information</h1>
            <div class="md:flex justify-between">
                <div>
                    <p class="text-base font-medium text-gray-700 my-2">Passanger Name</p>
                    <input class="w-full p-2 border border-gray-600 rounded-sm" type="text">
                </div>
                <div>
                    <p class="text-base font-medium text-gray-700 my-2">Email</p>
                    <input class="w-full p-2 border border-gray-600 rounded-sm" type="email">
                </div>
                <div>
                    <p class="text-base font-medium text-gray-700 my-2">Phone Number</p>
                    <input class="w-full p-2 border border-gray-600 rounded-sm" type="text" placeholder="0300-0002233">
                </div>
            </div>
        </div>

        <!-- Payment Details  -->

        <!-- <div class="card-details border border-gray-600 bg-gray-100 px-2 py-8 relative my-3">
        <h1 class="absolute top-0 text-xl font-medium my-2 -mb-2">Card Details</h1>
            <div class="py-5">
                <input class="w-full p-2 border border-gray-600 rounded-sm" type="number" placeholder="1234 1234 1234 1234">
                <input class="w-1/2 p-2 border border-gray-600 rounded-sm my-3" type="date" placeholder="MM / YY">
                <input class="w-1/3 p-2 border border-gray-600 rounded-sm" type="number" placeholder="CVC" min="3" max="3">
            </div>
        </div> -->

        <div class="booking-button">
            <button class="w-full py-8 text-white cursor-pointer px-5 rounded-md font-bold text-3xl bg-green-600 hover:bg-gray-800 text-start">
                Complete Booking
            </button>

        </div>

    </div>
    <div class="right-side w-11/12 md:w-2/6 my-8 h-1/3 mx-auto bg-teal-950 py-5">
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">From</h1>
            <p class="text-white my-1">Manchester</p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">To</h1>
            <p class="text-white my-1">Luton</p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">Vehicle</h1>
            <p class="text-white my-1">Estate Car</p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">Total Cost</h1>
            <p class="text-white my-1">&#163; 1733</p>
        </div>
        <div></div>
    </div>  
</div>

<!-- Booking Details  -->



<!-- HTML Footer  -->
<?php require $root_path . '/views/partials/footer.view.php'; ?>

<script src="/public/js/navbar.js"></script>