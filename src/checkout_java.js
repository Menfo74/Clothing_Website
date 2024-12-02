// Sample cart items data structure
let cartItems = [
  { name: 'HOODIE', price: 29.99, quantity: 1 },
  { name: 'Pants', price: 29.99, quantity: 2 }
];

// Function to add item to cart
function addToCart(name, price) {
  // Check if item already exists in cart
  const itemIndex = cartItems.findIndex(item => item.name === name);
  if (itemIndex > -1) {
      cartItems[itemIndex].quantity += 1;
  } else {
      cartItems.push({ name, price, quantity: 1 });
  }
  updateCart();
}

// Function to update cart display
function updateCart() {
  const cartItemsContainer = document.getElementById('cart-items');
  const cartTotalAmount = document.getElementById('cart-total-amount');
  cartItemsContainer.innerHTML = '';
  let total = 0;

  cartItems.forEach(item => {
      const itemElement = document.createElement('li');
      itemElement.textContent = `${item.name} - $${item.price.toFixed(2)} x ${item.quantity}`;
      cartItemsContainer.appendChild(itemElement);
      total += item.price * item.quantity;
  });

  cartTotalAmount.textContent = total.toFixed(2);
}

// Initialize cart on page load
document.addEventListener('DOMContentLoaded', updateCart);
