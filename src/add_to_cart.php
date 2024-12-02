<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root23";
$dbname = "finals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO cart (user_id, item_name, price, quantity) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isdi", $user_id, $item_name, $price, $quantity);

if ($stmt->execute()) {
    header("Location: checkout.php"); // Redirect to checkout page after adding item to cart
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
