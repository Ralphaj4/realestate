<?php
session_start();

// Assuming you have a database connection already established
include("database.php");

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}

// Fetch user information from the database
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE user = '$username'";
$result = mysqli_query($conn, $query);
$user_data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Social Media Dashboard</title>
    <link rel="stylesheet" href="account.css"> <!-- Link to external CSS -->
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
                <span class="username"><?php echo $user_data['user']; ?></span>
            </div>
            <!-- Hamburger Menu -->
            <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
        </div>
    </div>

    <!-- Sidebar Menu for User Info -->
    <div class="user-menu">
        <div class="menu-content">
            <a href="#">Posts: <?php echo $user_data['posts']; ?></a>
            <a href="#">Friends: <?php echo $user_data['friends']; ?></a>
            <a href="#">Settings</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <!-- Account Info Content -->
    <div class="account-content">
        <div class="account-header">
            <h2>Account Information</h2>
            <p>Welcome, <?php echo $user_data['user']; ?>!</p>
        </div>
        <div class="account-details">
            <p><strong>Email:</strong> <?php echo $user_data['email']; ?></p>
            <p><strong>Joined:</strong> <?php echo $user_data['reg_date']; ?></p>
            <p><strong>Posts:</strong> <?php echo $user_data['posts']; ?></p>
            <p><strong>Friends:</strong> <?php echo $user_data['friends']; ?></p>
        </div>
    </div>

    <!-- Include the external JS file -->
    <script src="js/account.js"></script>
</body>
</html>

<?php
// Close database connection
mysqli_close($conn);
?>
