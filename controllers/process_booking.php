<?php
// process_booking.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ticket_count = $_POST['ticket_count'];
    $payment_method = $_POST['payment_method'];

    // Database connection and storing booking information (adjust as needed)
    $conn = new mysqli("localhost", "root", "", "concert_ticketing");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO bookings (name, email, ticket_count, payment_method)
            VALUES ('$name', '$email', '$ticket_count', '$payment_method')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
