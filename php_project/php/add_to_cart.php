<?php
session_start();  // Start the session at the top

// Check if 'cart_count' is set in the session, and initialize it if not
if (!isset($_SESSION['cart_count'])) {
    $_SESSION['cart_count'] = 0;  // Initialize the cart count if not set
}

// Increment the cart count
$_SESSION['cart_count'] += 1;

// Return the updated cart count
echo $_SESSION['cart_count'];
?>
