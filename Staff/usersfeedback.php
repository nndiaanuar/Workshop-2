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
        <h2 class="text-center mb-4">User Feedback Dashboard</h2>
        
        <!-- Table to Display Feedback -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Subject</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Feedback #1 -->
                <tr>
                    <td>John Doe</td>
                    <td>johndoe@email.com</td>
                    <td>Great Event!</td>
                    <td>Had a fantastic time at the concert. Will definitely attend again next year!</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                
                <!-- Feedback #2 -->
                <tr>
                    <td>Jane Smith</td>
                    <td>janesmith@email.com</td>
                    <td>Needs Improvement</td>
                    <td>The concert was good, but the seating arrangements were a bit uncomfortable.</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                
                <!-- Feedback #3 -->
                <tr>
                    <td>Michael Johnson</td>
                    <td>michaelj@email.com</td>
                    <td>Sound Quality</td>
                    <td>Great performers, but the sound quality could be improved. Some parts were hard to hear.</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>