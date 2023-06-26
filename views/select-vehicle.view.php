<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>


<!-- Select Vehicle Section  -->

<!-- Select Vehicle Banner  -->

<div style="background-color: #042F2E;" class="select-car-banner flex flex-col py-10 px-3">
    <h2 class="w-full text-3xl text-white font-bold md:w-10/12 mx-auto">Select your car</h2>
    <div class="w-full text-white md:w-10/12 mx-auto md:flex items-center">
        
        <div class="flex my-3">
            <h2 class="text-base font-semibold">From <span class="text-2xl"><?php
            if (isset($form_details['pick-up-location'])) {
                echo $form_details['pick-up-location'];
            }
            ?></span></h2>
            <h2 class="text-base font-semibold mx-5">To <span class="text-2xl"><?php
            if (isset($form_details['drop-up-location'])) {
                echo $form_details['drop-up-location'];
            }
            ?></span></h2>
        </div>
        <div>
            <h1><?= $current_date_time ?></h1>
        </div>
    </div>
</div>

<!-- Banner Ends Here  -->

<!-- Cars  -->

<div class="cars-section md:flex mt-10">
    <div class="cars w-full md:w-3/5 mx-auto">

        <?php foreach($cars as $car) : ?>

            <form action="/booking" method="POST">
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
                                    if(isset($distance))
                                    {
                                        $result_price = price($distance, 30);
                                        echo $result_price;
                                    }
                                    
                                }else if($car['passangers'] === 8)
                                {
                                    $result_price = price($distance, 40);
                                    echo $result_price;
                                    
                                }else{
                                    $result_price = price($distance);
                                    if(isset($result_price))
                                    {
                                        echo $result_price;
                                    }
                                }
                            ?>
                        </h3>
                    </div>

                    <!-- Booking Fields Inputs -->

                    <div id="container">
                        <input type="hidden" name="car-name" value="<?= $car['name'] ?>">
                        
                        <input type="hidden" name="pick-up-location" value="<?= $form_details['pick-up-location']?>">  
                        <input type="hidden" name="drop-up-location" value="<?= $form_details['drop-up-location']?>">  
                    </div>        
                    <!-- Submit Button  -->
                    <div class="flex justify-end">
                        <button type="submit" class="py-4 px-10 text-white text-xl font-medium rounded-md cursor-pointer bg-lime-600">Book Now</button>
                    </div>
                </div>
            </form>
            
        <?php endforeach; ?>    

    </div>
    
    <div class="right-side w-11/12 md:w-2/6 my-8 h-1/3 mx-auto bg-teal-950 py-5">
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">From</h1>
            <p class="text-white my-1"><?php
            if (isset($form_details['pick-up-location'])) {
                echo $form_details['pick-up-location'];
            }
            ?></p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">To</h1>
            <p class="text-white my-1"><?php
            if (isset($form_details['drop-up-location'])) {
                echo $form_details['drop-up-location'];
            }
            ?></p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">Vehicle</h1>
            <p class="text-white my-1">Estate Car</p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">Duration</h1>
            <p class="text-white my-1"><?php if(isset($distance)){echo $duration;} ?></p>
        </div>
        
    </div>  
    
</div>

<!-- Select Vehicle Section  -->



 <!-- HTML Footer  -->
 <?php require $root_path . '/views/partials/footer.view.php'; ?>

<script src="/public/js/navbar.js"></script>
