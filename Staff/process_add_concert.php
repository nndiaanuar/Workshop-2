<?php
// process_add_concert.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $concert_name = $_POST['concert_name'];
    $concert_date = $_POST['concert_date'];
    $concert_location = $_POST['concert_location'];
    $available_seats = $_POST['available_seats'];
    $description = $_POST['description'];

    // Database connection (adjust credentials as needed)
    $conn = new mysqli("localhost", "root", "", "concert_ticketing");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO concerts (concert_name, concert_date, concert_location, available_seats, description)
            VALUES ('$concert_name', '$concert_date', '$concert_location', $available_seats, '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New concert added successfully!";
        header("Location: ConcertManagement.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
