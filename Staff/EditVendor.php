<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vendor - Concert Ticketing</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="../index.php">
        <img src="../Images/logo.png" alt="Concert Logo" style="height: 40px; margin-right: 10px;">
        <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 24px;">Concert Ticketing</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Sidebar for Staff Navigation -->
<div class="sidebar">
    <a href="Dashboard.php" class="sidebar-link">Dashboard</a>
    <a href="users.php" class="sidebar-link">Users</a>
    <a href="usersfeedback.php" class="sidebar-link">Users Feedback</a>
    <a href="tickets-sold.php" class="sidebar-link">Ticket Sales</a>
    <a href="ConcertManagament.php" class="sidebar-link">Concert Management</a>
    <a href="VendorManagament.php" class="sidebar-link">Vendor Management</a>
    <a href="SalesReport.php" class="sidebar-link">Sales & Reports</a>
</div>

<!-- Main Content Area -->
<div class="content">
    <div class="container-fluid">
        <h2>Edit Vendor</h2>

        <!-- Edit Vendor Form -->
        <form action="processEditVendor.php" method="POST">
            <div class="form-group">
                <label for="vendorName">Vendor Name</label>
                <input type="text" class="form-control" id="vendorName" name="vendor_name" value="Vendor A" placeholder="Enter vendor name" required>
            </div>

            <div class="form-group">
                <label for="vendorLocation">Location</label>
                <input type="text" class="form-control" id="vendorLocation" name="vendor_location" value="City A" placeholder="Enter vendor location" required>
            </div>

            <div class="form-group">
                <label for="vendorDiscount">Discount</label>
                <input type="number" class="form-control" id="vendorDiscount" name="vendor_discount" value="10" step="0.01" placeholder="Enter discount percentage" required>
            </div>

            <button type="submit" class="btn btn-success">Update Vendor</button>
            <a href="VendorManagament.html" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
