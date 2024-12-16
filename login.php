<?php
// login.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>

    <link rel="stylesheet" href="CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="Images/logo.png" alt="Concert Logo" style="height: 40px; margin-right: 10px;">
                <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 24px;">Concert Ticketing</span>
            </a>           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="concerts.php">Concerts</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="login.php">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login/Register Form -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Login or Register</h1>
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <ul class="nav nav-tabs mb-4" id="authTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true" style="font-family: 'Poppins', sans-serif;">Login</button>
                    </li>
                </ul>

                <div class="tab-content" id="authTabsContent">
                    <!-- Login Tab -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form action="process_login.php" method="POST">
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label" style="font-family: 'Poppins', sans-serif;">Email Address</label>
                                <input type="email" class="form-control" id="loginEmail" name="email" style="font-family: 'Poppins', sans-serif;" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label" style="font-family: 'Poppins', sans-serif;">Password</label>
                                <input type="password" class="form-control" id="loginPassword" name="password" style="font-family: 'Poppins', sans-serif;" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" style="font-family: 'Poppins', sans-serif;">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Concert Ticketing System. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>