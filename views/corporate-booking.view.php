<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>

<div class="container w-11/12 mx-auto md:w-2/3">

    <!-- Corporate Booking Section  -->
    <h1 class="text-3xl font-medium">Enter Corporate Login</h1>

    <form class="w-1/2 bg-slate-300 py-10 px-5 my-5" action="">
        <label for="booking">Enter Your Id</label>
        <br>
        <input class="w-full border border-gray-400 p-2 my-3" type="text" name="booking" id="booking" placeholder="8-Ditit account id" required>

        <div>
            <button type="submit" class="py-2 px-8 font-medium bg-slate-700 text-white rounded-sm">Login</button>
        </div>
    </form>

</div>


<!-- HTML Footer  -->
<?php require $root_path . '/views/partials/footer.view.php'; ?>