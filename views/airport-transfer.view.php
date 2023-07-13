<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>

<!-- Hero Main Section  -->

<div style="background-color: #001C30;" class="relative py-10">
  
  <div class=" inset-0 bg-opacity-50">
    <div class="heading md:mt-10">
        <h1 class="text-white text-xl md:text-4xl font-bold text-center mx-3">VIP minibus Airport <span class="text-green-500">Transfers</span></h1>
        <h3 class="text-white text-lg md:text-2xl text-center mx-3">Dependable and Trustworthy Taxi Service and Airport Transfers in the United Kingdom.</h3>
    </div>
    <div class="md:flex md:justify-center mt-6 md:px-5">
        <div style="" class="w-2/3 mx-auto md:w-1/2 lg:w-1/4 px-10 py-5 border-2 md:mx-3 border-gray-400 text-gray-400 bg-cyan-700 hover:bg-teal-950 flex m-2">
            <img src="/public/images/icons/currency.png" class="h-5 w-5 invert" alt="">
            <a class="w-full h-full" href="/standard-booking"><h3 class="text-white font-bold mx-2">Book Car</h3></a>
        </div>
        <div class="w-2/3 mx-auto md:w-1/2 lg:w-1/4 px-10 py-5 border-2 md:mx-3 border-gray-400 text-gray-400 bg-blue-600 hover:bg-teal-950 flex m-2 cursor-pointer">
            <img src="/public/images/icons/currency.png" class="h-5 w-5 invert" alt="">
            <a class="w-full h-full" href="/pay"><h3 class="text-white font-bold mx-2">Payment</h3></a>
        </div>
        <div class="w-2/3 mx-auto md:w-1/2 lg:w-1/4 px-10 py-5 border-2 md:mx-3 border-gray-400 text-gray-400 bg-orange-600 hover:bg-teal-950 flex m-2 cursor-pointer">
            <img src="/public/images/icons/currency.png" class="h-5 w-5 invert" alt="">
            <a class="w-full h-full" href="/corporate-booking"> <h3 class="text-white font-bold mx-2">Corporate Booking</h3></a>
        </div>
        
    </div>

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
</div>


<!-- Airport Section  -->


<div class="my-12 mx-4 p-1 md:flex md:p-7 gap-x-5">
    <div class="md:w-1/2">
        <img src="/public/images/airport-image.jpeg" alt="">
    </div>
    <div class="my-4 md:w-1/2">
        <h3 class="text-2xl font-bold my-2">
            Airport Transfers with  <span class="text-cyan-700 font-medium">VIP minibus hire.</span></h3>
        <p class="my-2 text-base text-gray-700">
            
            You can rely on VIP minibus hire for dependable and reasonably priced airport transfers to and from any destination. Our exclusive service includes Luton Airport, Heathrow, Gatwick, Stansted, and London City Airport. Our goal is to exceed your expectations and ensure a gratifying experience.
            <br><br>
            With our varied fleet, we offer a wide selection of vehicles to accommodate your family size and luggage. Take your time to explore our range, which includes saloon cars and minibuses, and select the one that best fits your requirements. Rest assured, we always have alternative options at your disposal.
        </p>

        <h3 class="text-2xl font-bold my-2">
            What's  <span class="text-cyan-700 font-medium">Special.</span>
        </h3>

        <p class="my-2 text-base text-gray-700"> 
        We provide a delightful assortment of baby seats to ensure the utmost comfort and safety for your precious little ones.
        </p>

    </div>
</div>

<!-- Airport Section Ends Here  -->

<!-- Footer  -->

<?php require $root_path . '/views/home-sections/footer.view.php'; ?>

<!-- HTML Footer  -->
<?php require $root_path . '/views/partials/footer.view.php'; ?>