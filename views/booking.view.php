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

        
            <div style="background-color: #176B87;" class="pickup-data-time border border-teal-600 bg-white px-5 py-14 relative my-3 rounded-md">
                <h1 class="absolute top-0 text-xl font-medium my-2 -mb-2 text-white">Pickup date and time</h1>
                <div class="md:flex justify-between">
                    <div>
                        <p class="text-base font-medium text-white my-2">Date</p>
                        <input class="w-full p-2 border border-white rounded-sm" type="date">
                    </div>
                    <div>
                        <p class="text-base font-medium text-white my-2">Hours</p>
                        <select class="w-full px-7 py-2 text-left border border-gray-600 rounded-sm" name="number" required>
                            <?php
                                for ($i = 0; $i <= 24; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <p class="text-base font-medium text-white my-2">Minutes</p>
                        <select class="w-full px-7 py-2 text-left border border-white rounded-sm" name="number" reguired>
                            <?php
                            for ($i = 0; $i <= 60; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        
                    </div>
                </div>
            </div>

            <div style="background-color: #176B87;" class="pickup-data-time border px-5 py-6 relative my-3 rounded-md">
                <h1 class="absolute top-0 text-xl font-medium my-2 -mb-2 text-white">Personal Information</h1>
                <div class="md:flex justify-between my-5">
                    <div>
                        <p class="text-base font-medium text-white my-2">Passanger Name</p>
                        <input class="w-full p-2 border border-white rounded-sm" type="text" placeholder="John Doe" required>
                    </div>
                    <div>
                        <p class="text-base font-medium text-white my-2">Email</p>
                        <input class="w-full p-2 border border-gray-600 rounded-sm" type="email" placeholder="john@gmail.com" required>
                    </div>
                    <div>
                        <p class="text-base font-medium text-white my-2">Phone Number</p>
                        <input class="w-full p-2 border border-white rounded-sm" type="text" placeholder="0300-0002233" required>
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
    <div style="background-color: #176B87" class="right-side w-11/12 md:w-2/6 my-8 h-1/3 mx-auto py-5 rounded-md">
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">From</h1>
            <p class=" my-1 text-white">
                <?php 
                    if(isset($_POST['pick-up-location']))
                    {
                        echo $_POST['pick-up-location'];
                    } 
                ?>
            </p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">To</h1>
            <p class="my-1 text-white">
                <?php 
                    if(isset($_POST['drop-up-location']))
                    {
                        echo $_POST['drop-up-location'];
                    } 
                ?>
            </p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">Vehicle</h1>
            <p class="my-1 text-white">
                <?php 
                    if(isset($_POST['car-name']))
                    {
                        echo $_POST['car-name'];
                    } 
                ?>
            </p>
        </div>
        <div class="my-8 mx-3 pl-4">
            <h1 class="text-2xl font-medium text-white">Total Cost</h1>
            <p class=" my-1 text-white">&#163; 
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