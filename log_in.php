<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM client_c WHERE email=? OR first_name=?");
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            echo "Logged in successfully!";
        } else {
            echo "Wrong password.";
        }
    } else {
        echo "User not found.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log_in.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">   
    <link rel="icon" href="Untitled design.svg" type="image/png">
    <title>Log in</title>
</head>
<body>
    <header>
        <nav>
            <img id="img" src="KHEDMNI (2500 x 1500 px)2.svg" alt="logo">
        </nav>
        <main class="login">
            <h1>Welcome Back</h1>
            <form class="f" action="about_us.html" method="POST">
                <p>Enter your Email Address or User Name</p>
                <br><input type="text" name="username" placeholder="Email/User name" required><br>
                <br><p>Enter your Your Password</p>
                <br><input type="password" name="password" placeholder="Password" required><br>
                <br><label for="fname" id="idk"><a href="password.html">forget your password?</a></label><br>
                <button class="log_in" type="submit" id="btn" action="log_in.php">Log in</button>
                <p id="hna">You don't have an account yet? <a href="sign_up.html">sign up</a></p>
                <!--<div id="uu">
                    <input type="checkbox" > remember me<br>
                    <br><input class="block" type="password" maxlength="10"  placeholder="must be 10 lettres" minlength="5" size="10"><br>
                    <label for="text">Email Address*</label>
                <label for="password">Password*</label>
                </div>-->
        </form>
        </main>
    </header>
</body>
</html>
<!-- http://localhost/Khedmni/log_in.php -->


