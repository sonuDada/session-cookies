<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION['user_id'])){
    header("Location: dashboard.php");
    exit();
}

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Sample username and password
    $username = "user";
    $password = "password";

    // Check if the submitted username and password match
    if($_POST["username"] == $username && $_POST["password"] == $password){
        // Set session variables
        $_SESSION['user_id'] = 1;

        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    }else{
        $error_message = "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if(isset($error_message)): ?>
        <p><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Login">
    </form>
</body>
</html>
