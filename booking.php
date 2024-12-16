<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Concert Tickets</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="CSS/styles2.css">
    <!-- <link rel="stylesheet" href="JS/script.js"> -->
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

<!-- Booking Section -->
<div class="container mt-5">
    <h2 class="text-center">Book Your Concert Ticket</h2>
    <br>
    <div class="row">
        <!-- Concert Info -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Concert: Rock Fest 2024</h4>
                    <p class="card-text">Join us for an unforgettable night of music at the annual Rock Fest 2024! Enjoy performances by top rock bands from all around the world.</p>
                    <p><strong>Date:</strong> 25th December 2024</p>
                    <p><strong>Location:</strong> Stadium XYZ, City, Country</p>
                    <p><strong>Available Seats:</strong> 300</p>
                    <p><strong>Concert Types:</strong> VIP, General Admission</p>
                </div>
            </div>
        </div>

        <!-- Booking Form -->
        <div class="col-md-6">
            <form action="process_booking.php" method="POST">
                <div class="form-group mb-3">
                    <label for="name" style="font-family: 'Poppins', sans-serif;">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email" style="font-family: 'Poppins', sans-serif;">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="ticket_count" style="font-family: 'Poppins', sans-serif;">Number of Tickets</label>
                    <input type="number" class="form-control" id="ticket_count" name="ticket_count" min="1" max="10" required>
                </div>

                <!-- Concert Type/Options -->
                <div class="form-group mb-3">
                    <label for="concert_type" style="font-family: 'Poppins', sans-serif;">Concert Type</label>
                    <select class="form-control" id="concert_type" name="concert_type" required style="font-family: 'Poppins', sans-serif;">
                        <option value="vip" style="font-family: 'Poppins', sans-serif;">VIP</option>
                        <option value="general" style="font-family: 'Poppins', sans-serif;">General Admission</option>
                    </select>
                </div>

                <!-- Seat Selection -->
                <div class="form-group mb-3">
                    <label for="seat_selection" style="font-family: 'Poppins', sans-serif;">Select Your Seats</label>
                    <!-- Example of Seat Selection, can be replaced with dynamic seat map -->
                    <select class="form-control" id="seat_selection" name="seat_selection" required style="font-family: 'Poppins', sans-serif;">
                        <option value="A1" style="font-family: 'Poppins', sans-serif;">Seat A1</option>
                        <option value="A2" style="font-family: 'Poppins', sans-serif;">Seat A2</option>
                        <option value="B1" style="font-family: 'Poppins', sans-serif;">Seat B1</option>
                        <option value="B2" style="font-family: 'Poppins', sans-serif;">Seat B2</option>
                        <!-- Add more seats as per the concert seating arrangement -->
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="payment_method" style="font-family: 'Poppins', sans-serif;">Payment Method</label>
                    <select class="form-control" id="payment_method" name="payment_method" required style="font-family: 'Poppins', sans-serif;">
                        <option value="credit_card" style="font-family: 'Poppins', sans-serif;">Credit Card</option>
                        <option value="paypal" style="font-family: 'Poppins', sans-serif;">PayPal</option>
                        <option value="bank_transfer" style="font-family: 'Poppins', sans-serif;">Bank Transfer</option>
                    </select>
                </div>

                <button type="button" style="font-family: 'Poppins', sans-serif;" class="btn btn-primary btn-block" onclick="showConfirmation()">Next: Confirm Booking</button><br><br><br>
            </form>
        </div>
    </div>
</div>

<!-- Booking Confirmation Modal (Initially Hidden) -->
<div class="modal" tabindex="-1" id="confirmationModal" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Booking Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Full Name:</strong> <span id="confirm_name"></span></p>
                <p><strong>Email:</strong> <span id="confirm_email"></span></p>
                <p><strong>Concert Type:</strong> <span id="confirm_concert_type"></span></p>
                <p><strong>Seats Selected:</strong> <span id="confirm_seat_selection"></span></p>
                <p><strong>Number of Tickets:</strong> <span id="confirm_ticket_count"></span></p>
                <p><strong>Total Amount:</strong> $<span id="confirm_total_amount"></span></p>
                <p><strong>Payment Method:</strong> <span id="confirm_payment_method"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Proceed to Payment</button>
            </div>
        </div>
    </div>
</div>

 <!-- Footer -->
 <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Concert Ticketing System. All rights reserved.</p>
</footer>

<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
