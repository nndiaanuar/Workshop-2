<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concert Ticketing System</title>
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
                    <li class="nav-item"><a class="nav-link" href="login.php">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container text-center py-5">
        <h1 class="display-4">Welcome to Concert Ticketing</h1>
        <p class="lead">Your gateway to supporting local artists and enjoying amazing concerts!</p>
        <div class="mt-4">
            <!-- Example Button -->
            <a href="concerts.php" class="btn btn-primary btn-lg">Browse Concerts</a>
            <a href="login.php" class="btn btn-secondary btn-lg">Register Now</a>
        </div>
    </div>

    <!-- Highlights Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Concert Highlights</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card home-card">
                    <img src="concert1.jpg" class="card-img-top" alt="Concert 1">
                    <div class="card-body">
                        <h5 class="card-title">Concert 1</h5>
                        <p class="card-text">Experience the energy of live performances with top local artists.</p>
                        <a href="concerts.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card concert-card">
                    <img src="concert2.jpg" class="card-img-top" alt="Concert 2">
                    <div class="card-body">
                        <h5 class="card-title">Concert 2</h5>
                        <p class="card-text">Support up-and-coming artists and discover amazing talent!</p>
                        <a href="concerts.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="concert3.jpg" class="card-img-top" alt="Concert 3">
                    <div class="card-body">
                        <h5 class="card-title">Concert 3</h5>
                        <p class="card-text">Join us for a night of unforgettable music and entertainment.</p>
                        <a href="concerts.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Concert Ticketing System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
