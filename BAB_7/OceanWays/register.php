<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OceanWays - Register</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <header>
        <h1>Daftar Akun Baru</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <main>
        <form action="register_process.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <input type="submit" value="Register">
        </form>
        <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
    </main>
</body>
</html>
