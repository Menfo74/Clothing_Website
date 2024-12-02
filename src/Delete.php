<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute the delete statement
    $sql = "DELETE FROM checkout WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Order deleted successfully.'); window.location.href = 'admin_login.php';</script>";
    } else {
        echo "Error deleting order: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No order ID specified.";
}

// Close the database connection
$conn->close();
?>
