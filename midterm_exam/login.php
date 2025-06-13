<?php 
session_start(); 

// If user is already logged in, redirect to the home page
if (isset($_SESSION['id'])) { 
    header("Location: index.php"); 
    exit(); 
} 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login</title> 
    <link rel="stylesheet" href="../styles/styles.css"> 
</head> 
<body> 
    <div class="login-container"> 
        <h2>Login</h2> 
        <?php if (isset($_GET['error'])): ?> 
            <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p> 
        <?php endif; ?> 
        <form method="POST" action="../core/handleForms.php"> 
            <div class="form-group"> 
                <label for="email">Email:</label> 
                <input type="email" id="email" name="email" required class="form-control"> 
            </div> 
            <div class="form-group"> 
                <label for="password">Password:</label> 
                <input type="password" id="password" name="password" required class="form-control"> 
            </div> 
            <input type="submit" name="login" value="Login" class="btn btn-primary"> 
        </form> 
        <p>Don't have an account? <a href="register.php">Register here</a></p> 
    </div> 
</body> 
</html>