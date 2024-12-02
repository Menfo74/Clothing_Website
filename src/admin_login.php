<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        main {
            flex: 1;
        }
        .footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            background-color: black;
            color: wheat;
        }
        .footer a {
            margin: 5px;
        }
        .footer p {
            margin-top: 10px;
        }
        .content {
            padding: 20px;
        }
        .order-list {
            list-style-type: none;
            padding: 0;
        }
        .order-list li {
            background-color: white;
            color: black;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="newsflash-container">
        <div class="newsflash-wrapper">
            <div class="newsflash">
                | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 | FREE SHIPPING ON ALL U.S. ORDERS OVER $100 |
            </div>
        </div>
    </div>

    <nav>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search..." class="bn3" style="background-color: black; color: aliceblue;">
            <button onclick="performSearch()"><img src="css/img/image-from-rawpixel-id-9693528-original.png" style="max-width: 90px; height: auto;"></button>
        </div>

        <div id="searchResults"></div>

        <header>
            <a href="index.php">ELITE FASHION</a>
        </header>

        <div class="nav-links">
            <a href="Login.php" class="bn3">Login</a>
            <a href="checkout.php" class="bn3" id="cart"><img src="css/img/image-from-rawpixel-id-7692478-original.png" style="max-width: 20px; height: auto;">Checkout: $<span id="cart-total">0.00</span></a>
            <a href="logout.php" class="bn3">Logout</a>
        </div>
    </nav>

    <main class="content">
        <h1>All Orders</h1>
        <ul class="order-list">
        
        <?php

include 'db_connect.php';


// Execute SQL query to fetch data from the checkout table
$sql = "SELECT * FROM checkout";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Error: " . $conn->error);
}

// Display the fetched data
if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>Order ID: {$row['id']} - User ID: {$row['user_id']} - Item: {$row['item_name']} - Price: \${$row['price']} - Quantity: {$row['quantity']} - Date: {$row['order_date']} ";
        echo "<a href='Delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure you want to delete this order?\")'>Delete</a>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "<li>No orders found.</li>";
}

// Close the database connection
$conn->close();
?>


        </ul>
    </main>

    <div class="footer">
        <a href="Contact Us.php" class="bn3">Contact Us</a>
        <a href="terms.php" class="bn3">Terms and Services</a>
        <p>&copy; Elite Fashion | All rights reserved</p>
    </div>

    <script src="js/index.js"></script>
</body>
</html>

<?php
$conn->close();
?>
