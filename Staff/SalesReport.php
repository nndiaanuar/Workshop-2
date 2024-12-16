<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales & Reports - Concert Ticketing</title>
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
        <h2>Sales & Reports</h2>
        <a href="generate_report.php" class="btn btn-primary mb-3">Generate Report</a>

        <!-- Summary Section -->
        <div class="row mb-4">
            <!-- Total Revenue -->
            <div class="col-md-3">
                <div class="card bg-light shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Revenue</h5>
                        <p class="card-text">RM 30,000</p>
                    </div>
                </div>
            </div>
            <!-- Refunds -->
            <div class="col-md-3">
                <div class="card bg-light shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Refunds</h5>
                        <p class="card-text">RM 2,000</p>
                    </div>
                </div>
            </div>
            <!-- Expenses -->
            <div class="col-md-3">
                <div class="card bg-light shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Expenses</h5>
                        <p class="card-text">RM 5,000</p>
                    </div>
                </div>
            </div>
            <!-- Trends -->
            <div class="col-md-3">
                <div class="card bg-light shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sales Trends</h5>
                        <p class="card-text">+15% This Month</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detailed Report Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Concert</th>
                    <th>Tickets Sold</th>
                    <th>Revenue</th>
                    <th>Refunds</th>
                    <th>Expenses</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-05-12</td>
                    <td>RockFest 2024</td>
                    <td>500</td>
                    <td>RM 10,000</td>
                    <td>RM 500</td>
                    <td>RM 2,000</td>
                </tr>
                <tr>
                    <td>2024-06-20</td>
                    <td>Pop Night</td>
                    <td>300</td>
                    <td>RM 6,000</td>
                    <td>RM 300</td>
                    <td>RM 1,500</td>
                </tr>
                <tr>
                    <td>2024-07-15</td>
                    <td>Jazz Evening</td>
                    <td>400</td>
                    <td>RM 8,000</td>
                    <td>RM 200</td>
                    <td>RM 1,000</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>=
</body>
</html>
