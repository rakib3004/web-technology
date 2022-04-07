<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .login-register-text {
    color: #111;
    font-weight: 600;
}

</style>
    <title>Welcome</title>
</head>
<body>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h2 class="card-title">Ri Research Lab</h2>
    <h2 class="card-title" >Research Profile</h2>
    <img src="login.jpg" alt="Background Image">
    <?php echo "<h3>Welcome " . $_SESSION['username'] . "</h3>"; ?>
    
  
  </div>
</div>
    
    <button class="login-register-text"><a href="logout.php">Logout</a></button>
</body>
</html>