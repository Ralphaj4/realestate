document.querySelector('.clear-cart-btn').addEventListener('click', function () {
    fetch('php/clear_cart.php', { method: 'POST' })

        .then(response => response.text())
        .then(result => {
            if (result === 'Cart cleared') {
                // Optionally update the cart bubble or perform other actions
                document.getElementById('cart-bubble').textContent = '0';
                document.getElementById('cart-bubble').style.display = 'none';  // Hide the bubble
            } else {
                alert(result);  // Show the error message returned from PHP
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while clearing the cart.');
        });
});



document.querySelector('.add-to-cart').addEventListener('click', function () {
    fetch('/php_project/php/add_to_cart.php') // Ensure this path is correct
        .then(response => response.text())
        .then(cartCount => {
            const cartBubble = document.getElementById('cart-bubble');
            cartBubble.textContent = cartCount;  // Set the new cart count in the bubble
            cartBubble.style.display = 'block';  // Show the bubble if it's hidden
        })
        .catch(error => console.error('Error:', error));
});

function updateCartBubble(cartCount) {
    const cartBubble = document.getElementById('cart-bubble');
    
    if (cartCount > 0) {
        cartBubble.textContent = cartCount;
        cartBubble.style.display = 'block';  // Show the bubble when there are items in the cart
    } else {
        cartBubble.style.display = 'none';  // Hide the bubble when the cart is empty
    }
}

// Add click event listener to all add-to-cart circles
document.querySelectorAll('.add-to-cart-circle').forEach(function(circle) {
    circle.addEventListener('click', function() {
        // Toggle the clicked class to change the circle to a tick
        circle.classList.toggle('clicked');
        
        // Get product details
        const productName = circle.closest('.product').querySelector('h3').textContent;
        const productPrice = circle.closest('.product').querySelector('p').textContent;

        // Add to cart (simplified example, using localStorage or an array in JS)
        let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        if (!cartItems.find(item => item.name === productName)) {
            cartItems.push({
                name: productName,
                price: productPrice
            });
            localStorage.setItem('cart', JSON.stringify(cartItems));
        }

        // Update cart bubble count
        updateCartBubble(cartItems.length);
    });
});

// Update the cart bubble with the current cart count
function updateCartBubble(cartCount) {
    const cartBubble = document.getElementById('cart-bubble');
    if (cartCount > 0) {
        cartBubble.textContent = cartCount;
        cartBubble.style.display = 'block';  // Show the bubble when there are items in the cart
    } else {
        cartBubble.style.display = 'none';  // Hide the bubble when the cart is empty
    }
}
