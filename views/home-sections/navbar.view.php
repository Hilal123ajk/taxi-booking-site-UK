<!-- Navbar  -->

<div class="navbar flex justify-between items-center mx-10 py-6">



<!-- right side  -->
<div class="right-side mr-5 mt-5">
    <div class="hidden md:block">
        <ul class="flex items-center">
            <a href="/"><li class="text-lg mx-3 cursor-pointer hover:text-gray-700">Home</li></a>
            <li class="text-lg mx-3 cursor-pointer hover:text-gray-700">
                <a href="/airport-transfer">Airport Transfer</a>
            </li>
            <li class="text-lg mx-3 cursor-pointer hover:text-gray-700">
                <a href="/cities">Cities</a>
            </li>
            <li class="text-lg mx-3 cursor-pointer hover:text-gray-700">Services</li>
            <li class="text-lg mx-3 cursor-pointer hover:text-gray-700">About Us</li>
            <li class="text-lg mx-3 cursor-pointer hover:text-gray-700">Contact Us</li>
        </ul>
    </div>
    
    <img src="/public/images/icons/menu.png" id="menuButton" class="fixed right-4 top-16 p-2 rounded-md z-50 md:hidden" alt="">
</div>

<!-- left side  -->
<div class="left-sdie hidden md:block -mb-2">
    <img src="/public/images/icons/minibus-logo.png" class="w-14 h-14" alt="">
</div>

</div>

<!-- Hidden Navbar for mobile devices -->

<div class="flex md:hidden">
<div id="navbar" class="fixed inset-y-0 right-0 bg-gray-800 w-64 transform translate-x-full transition-transform duration-300 ease-in-out z-50">
    <!-- Navbar content goes here -->
    <ul class="py-4">
        <a href="/"><li class="text-white ml-3 mt-1 border-b border-gray-600">Home</li></a>
        <li class="text-white ml-3 mt-1 border-b border-gray-600">Airport Transfer</li>
        <li class="text-white ml-3 mt-1 border-b border-gray-600">Cities</li>
        <li class="text-white ml-3 mt-1 border-b border-gray-600">Services</li>
        <li class="text-white ml-3 mt-1 border-b border-gray-600">Blog</li>
        <li class="text-white ml-3 mt-1 border-b border-gray-600">Menu Item 3</li>
        <li class="text-white ml-3 mt-1 border-b border-gray-600">Contact Us</li>
    </ul>
</div>
<div class="flex flex-grow">
    <!-- Rest of your webpage content goes here -->
</div>
</div>

<!-- Hidden Navbar ends Here  -->
