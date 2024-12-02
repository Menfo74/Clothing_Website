<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "root23";
$dbname = "finals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$total = 0;

// Fetch cart items
$sql = "SELECT item_name, price, quantity FROM cart WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$cart_items = [];
while ($row = $result->fetch_assoc()) {
    $cart_items[] = $row;
    $total += $row['price'] * $row['quantity'];
}

$stmt->close();

// Fetch order history
$sql = "SELECT item_name, price, quantity, order_date FROM checkout WHERE user_id = ? ORDER BY order_date DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$order_history = [];
while ($row = $result->fetch_assoc()) {
    $order_history[] = $row;
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }
        .cart-summary, .order-form, .order-history {
            text-align: center;
            margin: 20px auto;
            max-width: 500px;
            border: 1px solid white;
            border-radius: 10px;
            padding: 20px;
            background-color: black;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }
        .cart-summary h3, .order-form h3, .order-history h3 {
            margin-bottom: 20px;
        }
        .cart-summary ul, .order-history ul {
            list-style: none;
            padding: 0;
        }
        .cart-summary ul li, .order-history ul li {
            margin: 10px 0;
            border-bottom: 1px solid white;
            padding-bottom: 10px;
        }
        .cart-summary p {
            font-size: 1.2em;
            margin-top: 20px;
        }
        .order-form label {
            display: block;
            margin: 10px 0 5px;
        }
        .order-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid white;
            border-radius: 5px;
            background-color: #333;
            color: white;
        }
        .order-form button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #444;
            color: white;
            cursor: pointer;
        }
        .order-form button.cancel {
            background-color: red;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: black;
            color: wheat;
        }
        .footer a {
            margin: 5px;
            color: wheat;
            text-decoration: none;
        }
        .footer p {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="newsflash-container">
        <div class="newsflash-wrapper">
            <div class="newsflash"> |FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |
                 FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |   
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <nav>
        <div class="nav-links">
            <a href="men.php" class="bn3">Men</a>
            <a href="women.php" class="bn3">Women</a>
        </div>

        <header>
            <a href="index.php">ELITE FASHION</a>
        </header>

        <div class="nav-links">
            <a href="Login.php" class="bn3">Login</a>
            <a href="logout.php" class="bn3">Logout</a>
            <a href="checkout.php" class="bn3" id="cart"><img src="css/img/image-from-rawpixel-id-7692478-original.png" 
                style="max-width: 20px;height: auto;">Checkout: $<span id="cart-total">0.00</span></a>
        </div>
    </nav>

    <main>
        <div class="cart-summary">
            <h3>Your Cart</h3>
            <ul id="cart-items">
                <?php if (!empty($cart_items)): ?>
                    <?php foreach ($cart_items as $item): ?>
                        <li><?php echo htmlspecialchars($item['item_name']); ?> - $<?php echo number_format($item['price'], 2); ?> x <?php echo $item['quantity']; ?></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>No items in cart</li>
                <?php endif; ?>
            </ul>
            <p>Total: $<span id="cart-total-amount"><?php echo number_format($total, 2); ?></span></p>
        </div>

        <form action="checkout_backend.php" method="post" class="order-form">
            <h3>Billing Information</h3>
            <label for="cardNumber">Card Number:</label>
            <input type="number" id="cardNumber" name="cardNumber" placeholder="Enter your card number" required pattern="\d*">
            <br><br>
            <label for="expiryDate">Expiry Date:</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required pattern="^(0[1-9]|1[0-2])\/\d{2}$">
            <br><br>
            <label for="securityCode">Security Code:</label>
            <input type="text" id="securityCode" name="securityCode" placeholder="CVV" required pattern="\d{1,3}">
            <br><br>
            <h3>Delivery Address</h3>
            <br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>
            <br><br>
            <label for="city">City:</label>
            <input type="text" id="city" name="city" placeholder="Enter your city" required>
            <br><br>
            <label for="zipcode">Zip Code:</label>
            <input type="text" id="zipcode" name="zipcode" placeholder="Enter your zip code" required>
            <br><br>
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" placeholder="Enter your country" required>
            <br><br>
            <button type="submit">Place Order</button>
            <button type="button" class="cancel" onclick="cancelOrder()">Cancel Order</button>
        </form>
        <br><br><br><br>

        <div class="order-history">
            <h3>Order History</h3>
            <ul id="order-history-items">
                <?php if (!empty($order_history)): ?>
                    <?php foreach ($order_history as $order): ?>
                        <li><?php echo htmlspecialchars($order['item_name']); ?> - $<?php echo number_format($order['price'], 2); ?> x <?php echo $order['quantity']; ?> on <?php echo $order['order_date']; ?></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>No previous orders</li>
                <?php endif; ?>
            </ul>
        </div>
    </main>

    <footer class="footer">
        <a href="Contact Us.php" class="bn3">Contact Us</a>
        <a href="terms.php" class="bn3">Terms and Services</a>
        <p>&copy; Elite Fashion | All rights reserved</p>
    </footer>
    <script src="js/index.js"></script>
</body>
</html>
