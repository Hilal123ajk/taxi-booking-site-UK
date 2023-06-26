<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>

<section class="bg-gray-200 py-16">
  <div class="w-4/5 container mx-auto">
    <h1 class="text-5xl font-bold mb-4">Thank You!</h1>
    <p class="text-lg text-gray-800">Thanks for taking our online taxi booking services.</p>
    <p class="text-lg text-blue-600">You will be notified via email</p>

    <p class="text-lg text-gray-800">
      Your transaction id : 
      <span class="text-sm"><?php 
        if(isset($payment_id)){
          echo $payment_id;
        }
      ?>
      </span>
    </p>
    <p class="text-lg text-gray-800">
      Total Amount : 
      <?php 
        if(isset($amount)){
          echo $amount / 100;
        }
      ?>
      &#163;
    </p>
  </div>
</section>

<!-- Footer Of Website -->
<?php require $root_path . '/views/home-sections/footer.view.php'; ?>

 <!-- HTML Footer  -->
<?php require $root_path . '/views/partials/footer.view.php'; ?>