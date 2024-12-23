// Function to toggle the user menu when hamburger is clicked
function toggleMenu() {
    const menu = document.querySelector('.user-menu');
    const currentRight = getComputedStyle(menu).right;

    if (currentRight === '0px') {
        // Slide menu out
        menu.style.right = '-250px';
    } else {
        // Slide menu in
        menu.style.right = '0';
    }
}
