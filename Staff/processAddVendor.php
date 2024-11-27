<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect data from POST
    $vendorName = $_POST['vendorName'];
    $location = $_POST['location'];
    $discount = $_POST['discount'];
    $contact = $_POST['contact'];

    // Connect to database
    $conn = new mysqli('localhost', 'username', 'password', 'database');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert into vendors table
    $sql = "INSERT INTO vendors (vendorName, location, discount, contact) VALUES ('$vendorName', '$location', '$discount', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "New vendor added successfully!";
        header("Location: VendorManagament.html"); // Redirect back to management page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    echo "Invalid request method!";
}
?>
