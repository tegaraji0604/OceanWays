<?php

session_start();

if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit();
}

$login_error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if ($username === 'tsa' && $password === '030') {
        
        $_SESSION['username'] = $username;
       
        header('Location: dashboard.php');
        exit();
    } else {
        $login_error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
       
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}


.container {
    background-color: #ffffff;
    padding: 20px 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #333333;
}

/* Memberikan gaya pada form-group */
.form-group {
    margin-bottom: 15px;
}

/* Memberikan gaya pada label */
label {
    display: block;
    margin-bottom: 5px;
    color: #333333;
}

/* Memberikan gaya pada input */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #cccccc;
    border-radius: 4px;
    outline: none;
    transition: border-color 0.3s;
}

/* Memberikan gaya hover dan focus pada input */
input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #666666;
}

/* Memberikan gaya pada button */
button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: #ffffff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Memberikan gaya hover pada button */
button:hover {
    background-color: #0056b3;
}

/* Memberikan gaya pada paragraf link registrasi */
p {
    text-align: center;
    margin-top: 20px;
}

p a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s;
}

/* Memberikan gaya hover pada link registrasi */
p a:hover {
    color: #0056b3;
}

/* Memberikan gaya pada pesan error */
p[style="color: red;"] {
    text-align: center;
    margin-top: 10px;
}

</style>
</head>
<body>

<div class="container">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
        <?php
        // Menampilkan pesan error jika login gagal
        if ($login_error) {
            echo '<p style="color: red;">Username atau password salah.</p>';
        }
        ?>
    </form>
</div>

</body>
</html>
