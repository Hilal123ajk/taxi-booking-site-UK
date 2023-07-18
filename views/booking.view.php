<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>


<!-- Booking Details  -->

<div style="background-color: #176B87;" class="bookin-heading py-12">
    <h1 class="text-4xl mx-3 font-bold text-white md:w-10/12 md:mx-auto">Booking <span class="text-lime-500">Form</span></h1>
</div>


<div class="md:flex">

    <!-- Left Side  -->
    <div class="left-side w-full md:w-3/5 mx-auto p-5">

        <!-- Pickup Date And Time  -->
        <form action="" id="form-id">

        
            <div style="background-color: #64CCC5;" class="pickup-data-time border border-teal-600 bg-gray-100 px-2 py-10 relative my-3">
                <h1 class="absolute top-0 text-xl font-medium my-2 -mb-2">Pickup date and time</h1>
                <div class="md:flex justify-between">
                    <div>
                        <p class="text-base font-medium text-gray-700 my-2">Date</p>
                        <input class="w-full p-2 border border-gray-600 rounded-sm" type="date">
                    </div>
                    <div>
                        <p class="text-base font-medium text-gray-700 my-2">Hours</p>
                        <select class="w-full px-7 py-2 text-left border border-gray-600 rounded-sm" name="number" required>
                            <?php
                                for ($i = 0; $i <= 24; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <p class="text-base font-medium text-gray-700 my-2">Minutes</p>
                        <select class="w-full px-7 py-2 text-left border border-gray-600 rounded-sm" name="number" reguired>
                            <?php
                            for ($i = 0; $i <= 60; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        
                    </div>
                </div>
            </div>

            <div style="background-color: #64CCC5;" class="pickup-data-time border bg-gray-100 px-2 py-8 relative my-3">
                <h1 class="absolute top-0 text-xl font-medium my-2 -mb-2">Personal Information</h1>
                <div class="md:flex justify-between">
                    <div>
                        <p class="text-base font-medium text-gray-700 my-2">Passanger Name</p>
                        <input class="w-full p-2 border border-gray-600 rounded-sm" type="text" required>
                    </div>
                    <div>
                        <p class="text-base font-medium text-gray-700 my-2">Email</p>
                        <input class="w-full p-2 border border-gray-600 rounded-sm" type="email" required>
                    </div>
                    <div>
                        <p class="text-base font-medium text-gray-700 my-2">Phone Number</p>
                        <input class="w-full p-2 border border-gray-600 rounded-sm" type="text" placeholder="0300-0002233" required>
                    </div>
                </div>
            </div>


            <div class="booking-button">
                <button type="submit" class="w-full py-8 text-white cursor-pointer px-5 rounded-md font-bold text-3xl bg-green-600 hover:bg-gray-800 text-start">
                    Complete Booking
                </button>

            </div>

        </form>

    </div>
    <div style="background-color: #64CCC5" class="right-side w-11/12 md:w-2/6 my-8 h-1/3 mx-auto py-5">
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium">From</h1>
            <p class=" my-1">
                <?php 
                    if(isset($_POST['pick-up-location']))
                    {
                        echo $_POST['pick-up-location'];
                    } 
                ?>
            </p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium">To</h1>
            <p class="my-1">
                <?php 
                    if(isset($_POST['drop-up-location']))
                    {
                        echo $_POST['drop-up-location'];
                    } 
                ?>
            </p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium">Vehicle</h1>
            <p class="my-1">
                <?php 
                    if(isset($_POST['car-name']))
                    {
                        echo $_POST['car-name'];
                    } 
                ?>
            </p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium ">Total Cost</h1>
            <p class=" my-1">&#163; 
                <?php if(isset($distance))
                    {
                        echo $distance;
                    }
                ?>
            </p>
        </div>
        <div></div>
    </div>  
</div>

<!-- Booking Details  -->



<!-- HTML Footer  -->
<?php require $root_path . '/views/partials/footer.view.php'; ?>

<script src="/public/js/navbar.js"></script>