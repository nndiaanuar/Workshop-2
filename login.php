<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'test';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

// Initialize variables
$registerName = $registerEmail = $registerPassword = $registerConfirmPassword = "";
$errors = [];

// Process registration form
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'register') {
    // Capture form inputs
    $registerName = htmlspecialchars(trim($_POST['registerName']));
    $registerEmail = htmlspecialchars(trim($_POST['registerEmail']));
    $registerPassword = $_POST['registerPassword'];
    $registerConfirmPassword = $_POST['registerConfirmPassword'];

    // Validate inputs
    if (empty($registerName)) {
        $errors['registerName'] = "Full name is required.";
    }

    if (empty($registerEmail) || !filter_var($registerEmail, FILTER_VALIDATE_EMAIL)) {
        $errors['registerEmail'] = "Valid email is required.";
    }

    if (empty($registerPassword)) {
        $errors['registerPassword'] = "Password is required.";
    }

    if ($registerPassword !== $registerConfirmPassword) {
        $errors['registerConfirmPassword'] = "Passwords do not match.";
    }

    // Insert into database if no errors
    if (empty($errors)) {
        // Hash the password for security
        $hashedPassword = password_hash($registerPassword, PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (FullName, Email, PasswordHash) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Bind parameters to the prepared statement
            mysqli_stmt_bind_param($stmt, "sss", $registerName, $registerEmail, $hashedPassword);

            // Execute the statement
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                echo "<div class='alert alert-success'>Registration successful!</div>";
            } else {
                echo "<div class='alert alert-danger'>Error: " . mysqli_stmt_error($stmt) . "</div>";
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "<div class='alert alert-danger'>Error preparing statement: " . mysqli_error($conn) . "</div>";
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="CSS/styles2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="Images/logo.png" alt="Concert Logo" style="height: 40px; margin-right: 10px;">
                <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 24px;">Concert Ticketing</span>
            </a>           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="concerts.html">Concerts</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="login.html">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container my-5">
        <h1 class="text-center mb-4">Login or Register</h1>
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <ul class="nav nav-tabs mb-4" id="authTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
                    </li>
                </ul>

                <div class="tab-content" id="authTabsContent">
                    <!-- Login Tab -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>

                    <!-- Register Tab -->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form method="POST" action="">
                            <input type="hidden" name="action" value="register">
                            <div class="mb-3">
                                <label for="registerName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="registerName" name="registerName" placeholder="Enter your full name">
                            </div>
                            <div class="mb-3">
                                <label for="registerEmail" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="registerEmail" name="registerEmail" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="registerPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Create a password">
                            </div>
                            <div class="mb-3">
                                <label for="registerConfirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="registerConfirmPassword" name="registerConfirmPassword" placeholder="Confirm your password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Concert Ticketing System. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
