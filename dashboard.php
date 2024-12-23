<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Dashboard</title>
    <link rel="stylesheet" href="dashboard.css"> <!-- Link to external CSS -->
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <a href="dashboard.php">Home</a>
            <a href="account.php">Account</a>
        </div>
        <div class="navbar-right">
            <div class="profile-info">
                <img src="images/profile.jpg" alt="Profile" class="profile-pic">
                <span class="username">John Doe</span>
            </div>
            <!-- Hamburger Menu -->
            <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
        </div>
    </div>

    <!-- Sidebar Menu for User Info -->
    <div class="user-menu">
        <div class="menu-content">
            <a href="#">Posts: 120</a>
            <a href="#">Friends: 50</a>
            <a href="#">Settings</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="dashboard-content">
        <div class="post">
            <div class="post-header">
                <img src="images/profile.jpg" alt="User" class="post-profile-pic">
                <span class="post-username">John Doe</span>
            </div>
            <div class="post-body">
                <div class="post-caption">Here’s a random caption for a post!</div>
                <img src="images/profile.jpg" alt="Post Image" class="post-image">
            </div>
        </div>

        <!-- Add more posts as needed -->
        <div class="post">
            <div class="post-header">
                <img src="images/profile.jpg" alt="User" class="post-profile-pic">
                <span class="post-username">Jane Smith</span>
            </div>
            <div class="post-body">
                <div class="post-caption">Another caption for a post!</div>
                <img src="images/profile.jpg" alt="Post Image" class="post-image">
            </div>
        </div>
    </div>

    <!-- Include the external JS file -->
    <script src="js/dashboard.js"></script>
</body>
</html>
