<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Concert - Concert Ticketing</title>
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
        <h2>Edit Concert Management</h2>
        <form action="update_concert.php" method="POST">
            <!-- Concert Name -->
            <div class="form-group">
                <label for="concertName">Concert Name</label>
                <input type="text" class="form-control" id="concertName" name="concertName" value="Existing Concert Name" required>
            </div>

            <!-- Concert Date -->
            <div class="form-group">
                <label for="concertDate">Concert Date</label>
                <input type="date" class="form-control" id="concertDate" name="concertDate" value="2024-05-12" required>
            </div>

            <!-- Artist -->
            <div class="form-group">
                <label for="artist">Artist</label>
                <input type="text" class="form-control" id="artist" name="artist" value="Existing Artist" required>
            </div>

            <!-- Venue -->
            <div class="form-group">
                <label for="venue">Venue</label>
                <select class="form-control" id="venue" name="venue" required>
                    <option value="venue1" selected>Venue 1</option>
                    <option value="venue2">Venue 2</option>
                    <option value="venue3">Venue 3</option>
                </select>
            </div>

            <!-- Ticket Price -->
            <div class="form-group">
                <label for="ticketPrice">Ticket Price ($)</label>
                <input type="number" class="form-control" id="ticketPrice" name="ticketPrice" value="50.00" step="0.01" required>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>Existing concert description</textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Update Concert</button>
            <a href="ConcertManagament.html" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
