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
$card_number = $_POST['cardNumber'];
$expiry_date = $_POST['expiryDate'];
$security_code = $_POST['securityCode'];
$address = $_POST['address'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];

// Insert the order information into the orders table
$sql = "INSERT INTO orders (card_number, expiry_date, security_code, address, city, zipcode, country) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $card_number, $expiry_date, $security_code, $address, $city, $zipcode, $country);

if ($stmt->execute()) {
    $order_id = $stmt->insert_id; // Get the last inserted order id
    $stmt->close();

    // Fetch cart items for the user
    $sql = "SELECT item_name, price, quantity FROM cart WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $cart_items = [];
    while ($row = $result->fetch_assoc()) {
        $cart_items[] = $row;
    }
    $stmt->close();

    // Insert each cart item into the checkout table
    if (!empty($cart_items)) {
        $sql = "INSERT INTO checkout (user_id, item_name, price, quantity, order_date) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);

        foreach ($cart_items as $item) {
            $stmt->bind_param("isdi", $user_id, $item['item_name'], $item['price'], $item['quantity']);
            $stmt->execute();
        }

        $stmt->close();

        // Clear the cart after inserting into the checkout table
        $sql = "DELETE FROM cart WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->close();
    }

    // Redirect to a success page or display a success message
    echo "<script>alert('Order placed successfully!'); window.location.href = 'index.php';</script>";
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
?>
