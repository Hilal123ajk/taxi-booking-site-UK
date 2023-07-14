<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>

<!-- Services  -->

<h2 class="text-3xl md:text-4xl md:my-3 font-medium text-center md:text-left md:w-10/12 mx-auto">Our Services</h2>

<div class="services md:flex justify-around flex-wrap my-10">

    <div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg my-5">
        <img class="w-full" src="/public/images/baby-seat-car.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Baby Seat</div>
            <p class="text-gray-700 text-base">
            When you embark on a journey with us, rest assured that safety and comfort are our utmost priorities.
            </p>
        </div>
    </div>

    <div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg my-5">
        <img class="w-full" src="/public/images/business-class-car.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Business Class</div>
            <p class="text-gray-700 text-base">
            We take immense pride in presenting an exclusive and unparalleled business class service, specially tailored to cater to the needs and requirements of every esteemed local firm.
            </p>
        </div>
    </div>

    <div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg my-5">
        <img class="w-full" src="/public/images/wheel-chair-van.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Wheel Chair Vans</div>
            <p class="text-gray-700 text-base">
            When making a reservation for airport transfer service, our customers have the convenience of requesting our wheelchair accessible taxis as well.
            </p>
        </div>
    </div>

    <div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg my-5">
        <img class="w-full" src="/public/images/meet.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Meet and greet.</div>
            <p class="text-gray-700 text-base">
            The assurance of having a meet and greet service arranged can alleviate the stress associated with any journey, providing peace of mind and a smoother experience.
            </p>
        </div>
    </div>
    
</div>

<!-- Services Sections Ends Here  -->

<?php require $root_path . '/views/home-sections/footer.view.php'; ?>

<!-- HTML Footer  -->
<?php require $root_path . '/views/partials/footer.view.php'; ?>

<script src="/public/js/navbar.js"></script>