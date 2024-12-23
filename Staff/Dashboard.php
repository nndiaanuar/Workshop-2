<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="../index.php">
        <img src="../Images/logo.png" alt="Concert Logo" style="height: 40px; margin-right: 10px;">
        <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 24px;">Concert Ticketing</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
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
        <h2 class="text-center">Dashboard</h2>
        <div class="row">
            <!-- Total Sales -->
            <div class="col-md-4">
                <div class="card shadow mb-4" style="background-color: #343a40; color: #ffffff; height: 180px; border-radius: 10px;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="card-title mb-3" style="font-weight: bold;"><i class="fas fa-dollar-sign"></i> Total Sales</h5>
                        <p class="card-text" style="font-size: 1.5rem;">RM 30,000</p>
                        <a href="SalesReport.php" class="btn btn-light btn-block">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Tickets Sold -->
            <div class="col-md-4">
                <div class="card shadow mb-4" style="background-color: #343a40; color: #ffffff; height: 180px; border-radius: 10px;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="card-title mb-3" style="font-weight: bold;"><i class="fas fa-ticket-alt"></i> Ticket Sales</h5>
                        <p class="card-text" style="font-size: 1.5rem;">1000 Tickets Sold</p>
                        <a href="tickets-sold.php" class="btn btn-light btn-block">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Upcoming Concerts -->
            <div class="col-md-4">
                <div class="card shadow mb-4" style="background-color: #343a40; color: #ffffff; height: 180px; border-radius: 10px;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="card-title mb-3" style="font-weight: bold;"><i class="fas fa-calendar-check"></i> Upcoming Concerts</h5>
                        <p class="card-text" style="font-size: 1.5rem;">5 Concerts Scheduled</p>
                        <a href="ConcertManagament.php" class="btn btn-light btn-block">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Vendor Information -->
            <div class="col-md-4">
                <div class="card shadow mb-4" style="background-color: #343a40; color: #ffffff; height: 180px; border-radius: 10px;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="card-title mb-3" style="font-weight: bold;"><i class="fas fa-store"></i> Vendors</h5>
                        <p class="card-text" style="font-size: 1.5rem;">3 Active Vendors</p>
                        <a href="VendorManagament.php" class="btn btn-light btn-block">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Registered Users -->
            <div class="col-md-4">
                <div class="card shadow mb-4" style="background-color: #343a40; color: #ffffff; height: 180px; border-radius: 10px;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="card-title mb-3" style="font-weight: bold;"><i class="fas fa-user"></i> Users</h5>
                        <p class="card-text" style="font-size: 1.5rem;">120 Registered Users</p>
                        <a href="users.html" class="btn btn-light btn-block">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow mb-4" style="background-color: #343a40; color: #ffffff; height: 180px; border-radius: 10px;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="card-title mb-3" style="font-weight: bold;"><i class="fas fa-comment"></i> User Feedback</h5>
                        <p class="card-text" style="font-size: 1.5rem;">45 Feedbacks Received</p>
                        <a href="usersfeedback.php" class="btn btn-light btn-block">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap Script -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
