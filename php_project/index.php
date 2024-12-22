<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce UI</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo-container">
        <img src="images/logo-removebg-preview.png" class="logo">
        <a href="index.html" class="logo-link">
            <h2>Dealio</h2>
        </a> 
    </div>
        <ul>
            <li>Home</li>
            <li>Explore</li>
            <li>Saved</li>
            <li>Cart</li>
            <li>Selling</li>
            <li>Profile</li>
            <li>Purchase History</li>
            <li>Contact Us</li>
            <li>Settings</li>
        </ul>
        <button class="help-btn">Need Help</button>
    </div>
    <div class="main-content">
        <header>
            <div class="search-bar">
                <input type="text" placeholder="Search Product">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            <div class="icons">
                 <button class="clear-cart-btn">Clear Cart</button>
                <span class="icon">🔔</span>
                <span class="icon">🛒</span>
                <span id="cart-bubble" class="icon">0</span>
                <span class="icon">👤</span>
            </div>
        </header>
        <section class="product-highlight">
            <div class="product-details">
                <h1>Beats Studio3 Wireless Headphones</h1>
                <p>Ergonomic ear cups with on-ear controls. Up to 22 hours of listening time. Apple W1 Chip & Class 1 Wireless Bluetooth.</p>
                <h2>Price: $349.95</h2>
                <button class="add-to-cart">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
            <img src="images/beats_black.png" alt="Beats Headphones" class="product-image">
        </section>
        <section class="popular-products">
            <h2>Explore Popular Categories</h2>
            <div class="products-grid">
                <div class="product">
                    <img src="images/rzr_kraken_ultimate.png" alt="Logitech G Pro">
                    <h3>Logitech G Pro</h3>
                    <p>$149.00</p>
                    <div class="add-to-cart-circle">
                    <span class="add-icon">+</span>
                </div>
                <div class="product">
                    <img src="images/6e2055_HyperX-Cloud-II-Wireless-4-removebg-preview.png" alt="HyperX Cloud II">
                    <h3>HyperX Cloud II</h3>
                    <p>$149.00</p>
                    <div class="add-to-cart-circle">
                    <span class="add-icon">+</span>
                </div>
                <div class="product">
                    <img src="images/zarya-pro-gaming-headset8.png" alt="Razer Kraken Ultimate">
                    <h3>Razer Kraken Ultimate</h3>
                    <p>$149.00</p>
                    <div class="add-to-cart-circle">
                    <span class="add-icon">+</span>
                </div>
                <!-- Add more products as needed -->
            </div>
        </section>
    </div>
    <script src="js/script.js"></script>
    </body>
</html>
