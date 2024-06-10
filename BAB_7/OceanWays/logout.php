<?php
session_start();

// Hapus semua sesi
session_unset();
session_destroy();

// Arahkan ke halaman login
header("Location: login.php");
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="dashboard.css">
</head>
<body>

<div class="sidebar">
   
    <ul>
        <h1> =Dashboard=</h1>
        <li><a href="index.php">Home</a></li>
        <li><a href="transaction.php">Pemesanan</a></li>
        <li><a href="logout.php" >Logout</a></li>
    </ul>
</div>



</body>
</html>