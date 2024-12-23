// Detecting scroll direction to hide navbar when scrolling down and show when scrolling up
let lastScrollTop = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function() {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    
    if (currentScroll > lastScrollTop) {
        // Scrolling down - hide navbar
        navbar.style.top = '-80px'; // Move navbar up out of view
    } else {
        // Scrolling up - show navbar
        navbar.style.top = '0'; // Bring navbar back into view
    }
    
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Prevent negative scroll values
});

// Function to toggle the user info menu
function toggleMenu() {
    const menu = document.getElementById('user-menu');
    if (menu.style.right === '0px') {
        menu.style.right = '-250px'; // Hide menu
    } else {
        menu.style.right = '0px'; // Show menu
    }
}
