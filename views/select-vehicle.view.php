<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>


<!-- Select Vehicle Section  -->

<!-- Select Vehicle Banner  -->

<div style="background-color: #5C6B78;" class="select-car-banner flex flex-col py-10 px-3">
    <h2 class="w-full text-3xl text-white font-bold md:w-10/12 mx-auto">Select your car</h2>
    <div class="w-full text-white md:w-10/12 mx-auto md:flex items-center">
        
        <div class="flex my-3">
            <h2 class="text-base font-semibold">From <span class="text-2xl"><?= $_GET['pick-up-location'] ?></span></h2>
            <h2 class="text-base font-semibold mx-5">To <span class="text-2xl"><?= $_GET['drop-up-location'] ?></span></h2>
        </div>
        <div>
            <h1>June 05, 2023, 8:55 PM</h1>
        </div>
    </div>
</div>

<!-- Banner Ends Here  -->

<!-- Cars  -->

<div class="cars-section md:flex mt-10">
    <div class="cars w-full md:w-3/5 mx-auto">

        <?php foreach($cars as $car) : ?>

            <div class="w-11/12 md:w-11/12 mx-auto card p-5 my-3 border border-blue-900 rounded-md">
                <h1 class="text-lg font-bold"><?= $car['name'] ?></h1>
                <p class="text-gray-500 text-sm my-2">This type of vehicle can accommodate a maximum of:</p>
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img src="/public/images/icons/people-icon.png" alt="">
                        <p class="text-xs ml-3"><?= $car['passangers'] ?> Passangers</p>
                    </div>
                    <div class="flex items-center">
                        <img src="/public/images/icons/bag-icon.png" alt="">
                        <p class="text-xs ml-3"><?= $car['large_bags'] ?> Large ones</p>
                    </div>
                    <div class="flex items-center">
                        <img src="/public/images/icons/bag-icon.png" alt="">
                        <p class="text-xs ml-3"><?= $car['small_bags'] ?> Small</p>
                    </div>
                </div>
                <!-- Car Image  -->
                <img src="/public/images/card-car.png" alt="">
                <div class="price my-2 flex justify-end">
                    <h3 class="text-2xl font-bold">&#163; 
                        <?php 
                            if($car['passangers'] === 6)
                            {
                                $result_price = price($distance, 30);
                                echo $result_price;
                            }else if($car['passangers'] === 4)
                            {
                                $result_price = price($distance);
                                echo $result_price;
                            }
                        ?>
                    </h3>
                </div>
                <!-- Book Now  -->
                <div class="flex justify-end">
                    <button class="py-4 px-10 text-white text-xl font-medium rounded-md cursor-pointer bg-lime-600">Book Now</button>
                </div>
            </div>
        <?php endforeach; ?>    

    </div>
    <div class="booking-details w-11/12 md:w-2/6 mx-auto mt-6">
        <div>
            <p class="text-xl text-gray-800">Pickup location</p>
            <input class="text-gray-600 border border-gray-700 rounded-sm py-2 px-3 w-full md:w-11/12 my-2" type="text" placeholder="Luton">
        </div>
        <div class="mt-5">
            <p class="text-xl text-gray-800">Dropup location</p>
            <input class="text-gray-600 border border-gray-700 rounded-sm py-2 px-3 w-full md:w-11/12 my-2" type="text" placeholder="Manchester">
        </div>
        <div class="mt-9">
            <button class="w-11/12 py-4 px-10 text-white text-xl font-medium rounded-md cursor-pointer bg-lime-700">Booking Details</button>
        </div>
    </div>
</div>

<!-- Select Vehicle Section  -->



 <!-- HTML Footer  -->
 <?php require $root_path . '/views/partials/footer.view.php'; ?>

<script src="/public/js/navbar.js"></script>
