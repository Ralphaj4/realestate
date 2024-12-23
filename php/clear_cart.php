<?php
session_start();  // Start the session

// Check if the session is active and 'cart_count' is set
if (isset($_SESSION['cart_count'])) {
    // Clear the cart count from the session
    unset($_SESSION['cart_count']);
    
    // Return a success message
    echo 'Cart cleared';
} else {
    // If the session or cart_count does not exist, return an error message
    echo 'Failed to clear cart';
}
?>
