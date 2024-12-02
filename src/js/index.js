let cartTotal = 0;
let cartItems = [];

function addToCart(itemName, itemPrice) {
    cartItems.push({ name: itemName, price: itemPrice });
    cartTotal += itemPrice;
    updateCartTotal();
    addToCartInDatabase(itemName, itemPrice, 1); // Adding 1 quantity for each item added
}

function updateCartTotal() {
    document.getElementById('cart-total').textContent = cartTotal.toFixed(2);
}

function addToCartInDatabase(itemName, itemPrice, quantity) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "add_to_cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send(`item_name=${encodeURIComponent(itemName)}&price=${itemPrice}&quantity=${quantity}`);
}

// Switch between Login and Signup Sections
const loginForm = document.getElementById('login-form');
const signupForm = document.getElementById('signup-form');

document.querySelector('.login-container button').addEventListener('click', function (event) {
    event.preventDefault();
    loginForm.style.display = loginForm.style.display === 'none' ? 'flex' : 'none';
    signupForm.style.display = signupForm.style.display === 'none' ? 'flex' : 'none';
});

// Show Password Functionality
const showPasswordCheckbox = document.getElementById('show-password');
const passwordInput = document.getElementById('password');

showPasswordCheckbox.addEventListener('change', function () {
    passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
});

function validateForm() {
    // Additional validation logic can be added here
    // For now, just returning true to allow form submission
    return true;
}
