<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concerts</title>
    <link rel="stylesheet" href="CSS/styles2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script>
        function showConfirmation() {
            // Debugging line to check if function is triggered
            console.log("showConfirmation() triggered");
    
            // Get form values
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var concertType = document.getElementById('concert_type').value;
            var seatSelection = document.getElementById('seat_selection').value;
            var ticketCount = document.getElementById('ticket_count').value;
            var paymentMethod = document.getElementById('payment_method') ? document.getElementById('payment_method').value : "Not Provided";  // Check if payment method is selected
    
            // Calculate total amount (for example, VIP is $100, General Admission is $50)
            var pricePerTicket = concertType === 'vip' ? 100 : 50;
            var totalAmount = pricePerTicket * ticketCount;
    
            // Update modal content
            document.getElementById('confirm_name').innerText = name;
            document.getElementById('confirm_email').innerText = email;
            document.getElementById('confirm_concert_type').innerText = concertType === 'vip' ? 'VIP' : 'General Admission';
            document.getElementById('confirm_seat_selection').innerText = seatSelection;
            document.getElementById('confirm_ticket_count').innerText = ticketCount;
            document.getElementById('confirm_total_amount').innerText = totalAmount;
            document.getElementById('confirm_payment_method').innerText = paymentMethod;
    
            // Show the confirmation modal
            var modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
            modal.show();
        }
    </script>
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="concerts.php">Concerts</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Concert List -->
    <main>
        <div class="container my-5">
            <h1 class="text-center mb-4">Upcoming Concerts</h1>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="concert1.jpg" class="card-img-top" alt="Concert 1">
                        <div class="card-body">
                            <h5 class="card-title">Concert Name 1</h5>
                            <p class="card-text">Date: 2024-12-01<br>Location: City Hall</p>
                            <a href="booking.php" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="concert2.jpg" class="card-img-top" alt="Concert 2">
                        <div class="card-body">
                            <h5 class="card-title">Concert Name 2</h5>
                            <p class="card-text">Date: 2024-12-10<br>Location: Music Arena</p>
                            <a href="booking.php" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="concert3.jpg" class="card-img-top" alt="Concert 3">
                        <div class="card-body">
                            <h5 class="card-title">Concert Name 3</h5>
                            <p class="card-text">Date: 2024-12-15<br>Location: Open Air Theater</p>
                            <a href="booking.html" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Concert Ticketing System. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
