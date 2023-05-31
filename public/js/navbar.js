

const menuButton = document.getElementById('menuButton');
const navbar = document.getElementById('navbar');

// Function to toggle navbar visibility
function toggleNavbar() {
    navbar.classList.toggle('translate-x-full');
    navbar.classList.toggle('navbar-open');
}

// Add click event listener to the menu button
menuButton.addEventListener('click', toggleNavbar);

