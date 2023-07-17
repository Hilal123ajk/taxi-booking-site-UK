<?php require $root_path . '/views/partials/header.view.php'; ?>

<!-- Header  -->
<?php require $root_path . '/views/home-sections/header.view.php'; ?>
<!-- Navbar -->
<?php require $root_path . '/views/home-sections/navbar.view.php'; ?>

<!-- Contact Us Form  -->

<div class="container w-10/12 mx-auto my-10 text-white">

    <h1 class="text-4xl font-medium my-5">Reach Us</h1>

    <form action="" method="POST" style="background-color: #64CCC5;" class="w-full max-w-lg py-10 px-5 text-white rounded-md">
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            First Name
        </label>
        <input name="first-name" class="appearance-none block w-full text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane" value="<?php if (isset($_POST['first-name'])) { echo htmlentities($_POST['first-name']); } ?>" required>
        <p class="text-xs font-medium text-red-600">
            <?php if(isset($errors)){echo $errors['first_name_error'];} ?>
        </p>
        </div>
        <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Last Name
        </label>
        <input name="last-name" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" required>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
            Email
        </label>
        <input name="email" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" placeholder="john@gmail.com" value="<?php if (isset($_POST['email'])) { echo htmlentities($_POST['email']); } ?>" required>
        
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
            Your Message
        </label>
        <textarea name="message" id="message" class="resize-y rounded-md w-full h-32 text-black p-2" placeholder="Write your message"  required></textarea>
        <p class="text-xs font-medium text-red-600">
            <?php if(isset($message_error)){echo $message_error['message_error'];} ?>
        </p>
        
        </div>
    </div>
    
    <div class="button ">
        <button type="submit" class="py-2 px-5 text-white bg-cyan-800 font-medium rounded-md">Submit</button>
    </div>

    </form>

</div>

<!-- Contact Section Ends Here  -->

<?php require $root_path . '/views/home-sections/footer.view.php'; ?>

<!-- HTML Footer  -->
<?php require $root_path . '/views/partials/footer.view.php'; ?>

<script src="/public/js/navbar.js"></script>