<?php
// process_login.php
session_start();
require_once 'db_connection.php'; // Include database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepare SQL query
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($userId, $hashedPassword);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['user_id'] = $userId;
            header('Location: dashboard.php'); // Redirect to dashboard
            exit();
        } else {
            echo "<script>alert('Invalid email or password!'); window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('User does not exist!'); window.location.href = 'login.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>