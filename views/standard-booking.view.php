<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>

<div style="background-color: #001C30;" class="py-12">
    <div class="heading md:mt-10 text-center">
        <h1 class="text-white text-3xl md:text-5xl font-bold text-center mx-3 md:py-2">VIP minibus hire And <span class="text-lime-500">Transfers</span></h1>
        <h3 class="text-white text-lg md:text-2xl text-center mx-3">Our taxi service and airport transfers in UK are known for their reliability and customer satisfaction.</h3>
    </div>

    <form action="/select-vehicle" method="POST" class="mt-8">
        <div class="w-11/12 md:w-10/12 mx-auto md:flex">
            <div class="w-full bg-white flex items-center py-2 px-2 mx-auto rounded-md border border-gray-500 my-3 md:mx-4">
                <img src="/public/images/icons/input-car-icon.png" class="w-11 h-11" alt="">
                <div class="w-full mx-3">
                    <p class="text-sm text-gray-500">Pick-up Location</p>
                    <input type="text" id="pickUpAutoComplete" name="pick-up-location" class="outline-none ring-0 w-full" placeholder="Luton,United Kingdom" required>
                </div>
            </div>
            <div class="w-full bg-white flex items-center py-2 px-2 mx-auto rounded-md border border-gray-500 my-3 md:mx-4">
                <img src="/public/images/icons/input-car-icon.png" class="w-11 h-11" alt="">
                <div class="w-full mx-3">
                    <p class="text-sm text-gray-500">Drop-off Location</p>
                    <input type="text" id="dropUpAutoComplete" name="drop-up-location" class="outline-none ring-0 w-full" placeholder="Manchester,United Kingdom" required>
                </div>
            </div>
        </div>
        <div class="w-11/12 md:w-1/3 mx-auto rounded-lg border-2 cursor-pointer border-gray-200 button bg-lime-600 hover:bg-slate-950 text-center mt-3">
            <button type="submit" class="text-2xl font-bold text-white w-full py-3">Get Quote</button>
        </div>
    </form>


    <!-- Reviews Section  -->
    <!-- Reviews -->
    <div class="w-full md:w-1/2 flex justify-center mt-5 mx-auto">
        <div class="bg-slate-100 w-1/3 md:w-1/5 mx-3 flex flex-col items-center py-3 rounded-lg">
            <img src="/public/images/icons/review-icon.png" class="w-10 h-10" alt="">
            <p class="text-black">4.8 out of 5</p>
        </div>
        <div class="bg-slate-100 w-1/3 md:w-1/5 mx-3 flex flex-col items-center py-3 rounded-lg">
            <img src="/public/images/icons/google-review-icon.png" class="w-10 h-10" alt="">
            <p class="text-black">4.8 out of 5</p>
        </div>
        <div class="bg-slate-100 w-1/3 md:w-1/5 mx-3 flex flex-col items-center py-3 rounded-lg">
            <img src="/public/images/icons/trust-pilot-icon.png" class="w-14 h-10" alt="">
            <p class="text-black">4.8 out of 5</p>
        </div>
    </div>
    
</div>

<!-- Hero (Standard-Booking) Section Ends Here -->

<!-- Transfers  -->
<?php require $root_path . '/views/home-sections/body-sections/transfers.view.php'; ?>

<!-- Who's Driving Section  -->
<?php require $root_path . '/views/home-sections/body-sections/whos-driving.view.php'; ?>

<!-- Cars Section  -->
<?php require $root_path . '/views/home-sections/body-sections/cars.view.php'; ?>

<!-- How To Book Section  -->
<?php require $root_path . '/views/home-sections/body-sections/book.view.php'; ?>

<!-- Frequently Asked Questions -->
<?php require $root_path . '/views/home-sections/body-sections/FAQ.view.php'; ?>

<!-- Footer Of Website -->
<?php require $root_path . '/views/home-sections/footer.view.php'; ?>

 <!-- HTML Footer  -->
<?php require $root_path . '/views/partials/footer.view.php'; ?>

<script src="/public/js/navbar.js"></script>


<!-- Javascript code for google places autocmoplete  -->
<script>
        let pickUpAutoComplete;
        let dropUpAutoComplete;

        
        /** 
            * Initializes autocomplete for pick-up and drop-off input fields,
            * suggesting UK cities and retrieving place details.
            * Utilizes Google Maps Places API for accurate suggestions.
        */

        function initAutocomplete() {

            pickUpAutoComplete = new google.maps.places.Autocomplete(
                document.getElementById('pickUpAutoComplete'),
                {
                    types: ['(cities)'],
                    componentRestrictions: { 'country': ['UK'] },
                    fields: ['place_id', 'geometry',]
                }
            );

            dropUpAutoComplete = new google.maps.places.Autocomplete(
                document.getElementById('dropUpAutoComplete'),
                {
                    types: ['(cities)'],
                    componentRestrictions: { 'country': ['UK'] },
                    fields: ['place_id', 'geometry',]
                }
            );
        }

        function loadScript() {
            const script = document.createElement('script');
            script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDDqTr8-dih2bgYaG8mRfS4GmXQ6NXwMKs&libraries=places&callback=initAutocomplete";
            script.defer = true;
            document.body.appendChild(script);
        }

        // Replace YOUR_API_KEY with your actual API key

        window.onload = loadScript;
    </script>