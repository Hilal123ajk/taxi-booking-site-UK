<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>

<!-- Cities Section  -->

<div class="md:flex w-full justify-around">
  
    <div class=" w-full md:w-1/3 mx-4 rounded-md cursor-pointer bg-cyan-700 text-white">
        <img src="/public/images/cities/london.png" class="w-full rounded-md" alt="airport-image">
        <h2 class="text-2xl font-medium my-3 px-4">London</h2>
        <p class="font-serif px-4">As expected, the capital and of the world’s best known city tops the list. From the museums to the sport and culture, this is a city that ticks pretty much every single box..</p>
        <p class=" underline my-3 px-4"><a href="/standard-booking">Visit</a></p>
    </div>
  
    <div class=" w-full md:w-1/3 mx-4 rounded-md cursor-pointer bg-cyan-700 text-white">
        <img src="/public/images/cities/edinberg.png" class="w-full rounded-md" alt="airport-image">
        <h2 class="text-2xl font-medium my-3 px-4">Edenburgh</h2>
        <p class="font-serif px-4">Edinburgh’s festivals, great culture and a lively entertainment scene keep international  tourists coming back to this Scottish city.</p>
        <p class=" underline my-3 px-4"><a href="/standard-booking">Visit</a></p>
    </div>

    <div class=" w-full md:w-1/3 mx-4 rounded-md cursor-pointer bg-cyan-700 text-white">
        <img src="/public/images/cities/liverpool.png" class="w-full rounded-md" alt="airport-image">
        <h2 class="text-2xl font-medium my-3 px-4">Liverpool</h2>
        <p class="font-serif px-4">Liverpool is city steeped in music and football tradition that attracts visitors from all over the world. You’ll see why as soon as you visit here!</p>
        <p class=" underline my-3 px-4"><a href="/standard-booking">Visit</a></p>
    </div>

    
</div>

<div class="md:flex w-full justify-around my-5">
  
    <div class=" w-full md:w-1/3 mx-4 rounded-md cursor-pointer bg-cyan-700 text-white">
        <img src="/public/images/cities/bristol.png" class="w-full rounded-md" alt="airport-image">
        <h2 class="text-2xl font-medium my-3 px-4">Bristol</h2>
        <p class="font-serif px-4">This is a bustling city that has great restaurants, nightlife and is a great stepping stone for the stunning surrounding areas..</p>
        <p class=" underline my-3 px-4"><a href="/standard-booking">Visit</a></p>
    </div>
  
    <div class=" w-full md:w-1/3 mx-4 rounded-md cursor-pointer bg-cyan-700 text-white">
        <img src="/public/images/cities/oxford.png" class="w-full rounded-md" alt="airport-image">
        <h2 class="text-2xl font-medium my-3 px-4">Oxford</h2>
        <p class="px-4"> Best known globally for its university, this old town is a pleasure to walk around and attracts people from all over the world. </p>
        <p class=" underline my-3 px-4"><a href="/standard-booking">Visit</a></p>
    </div>

    
</div>



<!-- HTML Footer  -->
<?php require $root_path . '/views/partials/footer.view.php'; ?>

<script src="/public/js/navbar.js"></script>