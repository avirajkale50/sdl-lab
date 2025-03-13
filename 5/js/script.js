// This file contains JavaScript code for interactivity on the website, such as handling cart functionality and dynamic content updates.

let cart = [];

// Function to add item to cart
function addToCart(item) {
    cart.push(item);
    updateCartCount();
}

// Function to update cart item count display
function updateCartCount() {
    const cartCountElement = document.getElementById('cart-count');
    cartCountElement.textContent = cart.length;
}

// Function to view cart items
function viewCart() {
    const cartItemsElement = document.getElementById('cart-items');
    cartItemsElement.innerHTML = ''; // Clear existing items
    cart.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.textContent = item.name + ' - ' + item.price;
        cartItemsElement.appendChild(itemElement);
    });
}

// Example of adding an item to the cart
document.addEventListener('DOMContentLoaded', () => {
    const exampleItem = { name: 'T-Shirt', price: '$20' };
    addToCart(exampleItem);
});