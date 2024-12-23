<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Form -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Get in Touch</h1>
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label" style="font-family: 'Poppins', sans-serif;">Full Name</label>
                        <input type="text" class="form-control" id="name" style="font-family: 'Poppins', sans-serif;" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-family: 'Poppins', sans-serif;">Email Address</label>
                        <input type="email" class="form-control" id="email" style="font-family: 'Poppins', sans-serif;" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label" style="font-family: 'Poppins', sans-serif;">Subject</label>
                        <input type="text" class="form-control" id="subject" style="font-family: 'Poppins', sans-serif;" placeholder="Enter the subject">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label" style="font-family: 'Poppins', sans-serif;">Message</label>
                        <textarea class="form-control" id="message" rows="4" style="font-family: 'Poppins', sans-serif;" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" style="font-family: 'Poppins', sans-serif;">Send Message</button>
                </form>
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
