<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "root23";
$dbname = "finals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user exists in the admin table first
    $stmt = $conn->prepare("SELECT id, password, role FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password, $role);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['role'] = $role;

            if ($role === 'admin') {
                echo "<script>alert('Admin login successful.'); window.location.href = 'admin_login.php';</script>";
            } else {
                echo "<script>alert('Login successful.'); window.location.href = 'index.php';</script>";
            }

            $stmt->close();
            exit();
        } else {
            echo "<script>alert('Incorrect password.'); window.history.back();</script>";
        }

        $stmt->close();
        exit();
    }
    
    $stmt->close();

    // Check if the user exists in the users table
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    // If user exists, verify the password
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            echo "<script>alert('Login successful.'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Incorrect password.'); window.history.back();</script>";
        }
        
        $stmt->close();
        exit();
    }
    
    $stmt->close();

    // If user does not exist, redirect to registration page
    echo "<script>alert('User does not exist. Redirecting to the registration page.'); window.location.href = 'Sign Up.php';</script>";
    exit();
}

$conn->close();
?>
