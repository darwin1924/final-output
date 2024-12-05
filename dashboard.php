<?php
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

// Display content if authenticated
$username = $_SESSION['USERNAME'];
?>

<script>
    window.onload = function () {
        if (performance.navigation.type === 2) { // Detects "Back" navigation
            location.reload(); // Forces reload from server
        }
    };
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Basic page styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('butterfly.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        header {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 3em;
            font-weight: bold;
        }

        /* Navigation Bar */
        nav {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ff6600;
        }

        /* Container for dashboard content */
        .container {
            width: 80%;
            max-width: 1200px;
            margin: 20px auto;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }

        .welcome-message {
            font-size: 1.5em;
            color: #ff6600;
            text-align: center;
            margin-bottom: 30px;
        }

        .dashboard-links {
            display: flex;
            justify-content: space-around;
            text-align: center;
        }

        .dashboard-links a {
            background-color: #ff6600;
            padding: 15px 30px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1em;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .dashboard-links a:hover {
            background-color: #e65c00;
        }
    </style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<header>
    <h1>Welcome to My Dashboard</h1>
</header>

<nav>
    <a href="services.php">Manage Services</a> |
    <a href="reviews.php">Manage Reviews</a> |
    <a href="logout.php">Logout</a>
</nav>

<div class="container">
    <p class="welcome-message">Hello, <?php echo htmlspecialchars($username); ?>! Welcome to your personalized dashboard.</p>

    <div class="dashboard-links">
        <a href="services.php">Manage Services</a>
        <a href="reviews.php">Manage Reviews</a>
    </div>
</div>

</body>
</html>
