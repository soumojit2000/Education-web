<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: log-in.html");
    exit;
}

$username= $_SESSION['username']??$_COOKIE['username']?? "Guest";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="box">
        <h2>Welcome, <?=  htmlspecialchars($username)?>!</h2>
        <h3>This is your dashboard</h3>
        <a href="logout.php" class="logout-btn">Logout</a>

    </div>
    
</body>
</html>