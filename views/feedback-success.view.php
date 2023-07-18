<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>

<!-- Feedback completed thanks and response message  -->

<div style="background-color: #F1F5F8;" class="feedback-success text-center w-11/12 md:w-1/2 my-10 mx-auto py-5  shadow-md">
  <h1 class="text-4xl md:text-6xl font-medium font-serif tracking-tight text-blue-700">Thank You</h1>
  <div class="flex justify-center">
    <img src="/public/images/icons/check-mark.png" class="w-16 h-16" alt="tick-icon">
  </div>
  <div class="my-3">
    <p>Thanks for contacting us we have recieved your response.</p>
    <p>We will get back to you as soon as possible.</p>
  </div>
  <a href="/">
    <button class="py-3 px-10 mt-10 rounded-lg bg-blue-500 text-white">Go Home</button>
  </a>
</div>


<?php require 'views/partials/footer.view.php'; ?>

<!-- JavaScript For This File index.php -->
<script src="/public/js/navbar.js"></script>