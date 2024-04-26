<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_id']))
{
    header("Location: index.php");
    exit();
}

// Logout logic
if(isset($_GET['logout'])) 
{
    // Destroy session
    session_destroy();

    // Redirect to login page
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    
    <p>You are logged in. <a href="?logout">Logout</a></p>
</body>
</html>
