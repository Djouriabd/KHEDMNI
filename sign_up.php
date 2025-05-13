<?php 
include 'db.php'; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    if ($password !== $confirm_password) {
        header("Location: sign_up.php?error=Passwords do not match!");
        exit;
    }

    $check_email = "SELECT * FROM Client_c WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($result) > 0) {
        header("Location: sign_up.php?error=This email is already registered!");
        exit;
    }

    $cv_name = $_FILES['cv_file']['name'];
    $cv_tmp = $_FILES['cv_file']['tmp_name'];
    $cv_path = "uploads/" . basename($cv_name);
    move_uploaded_file($cv_tmp, $cv_path);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Client_c (first_name, last_name, email, password, age, address, phone, location, cv_file) 
            VALUES ('$first_name', '$last_name', '$email', '$hashed_password', '$age', '$address', '$phone', '$location', '$cv_path')";

    if (mysqli_query($conn, $sql)) {
        header("Location: sign_up.php?success=Account created successfully!");
        exit;
    } else {
        header("Location: sign_up.php?error=Database error: " . urlencode(mysqli_error($conn)));
        exit;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="sign_up.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@100;400;700&family=Domine:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="messageBox" class="hidden">
        <?php 
        if (isset($_GET['error'])) {
            echo "<p style='color: red; text-align:center;'>" . htmlspecialchars($_GET['error']) . "</p>";
        } elseif (isset($_GET['success'])) {
            echo "<p style='color: green; text-align:center;'>" . htmlspecialchars($_GET['success']) . "</p>";
        }
        ?>
    </div>
    <header>
        <nav>
            <img id="imgg" src="KHEDMNI/khedmni.svg" alt="logo khedmni">
        </nav>
        <main class="login">
            <h1>Create An Account</h1>
            <form class="f" action="about_us.html" method="POST" enctype="multipart/form-data">
                <p>Enter your Name</p>
                <input class="block1" type="text" name="first_name" placeholder="Your Name" required>

                <p id="right">Enter your Surname</p>
                <input class="block2" type="text" name="last_name" placeholder="Your Surname" required>

                <p>Enter your Age</p>
                <input type="number" name="age" placeholder="Age" required>

                <p>Enter your Address</p>
                <input type="text" name="address" placeholder="Address" required>

                <p>Enter your Phone Number</p>
                <input type="text" name="phone" placeholder="Phone Number" required>

                <p>Enter your Location</p>
                <input type="text" name="location" placeholder="City, Wilaya..." required>

                <p>Upload your CV</p>
                <input type="file" name="cv_file" accept=".pdf,.doc,.docx" required>

                <p>Enter your Email Address</p>
                <input type="email" name="email" placeholder="Your Email Address" required>

                <p>Enter your Password</p>
                <input type="password" name="password" placeholder="Password" required>

                <p>Confirm your Password</p>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>

                <button class="sign_up" type="submit">Sign Up</button>

                <p id="hna">Already have an account? <a href="log_in.php">Log in</a></p>
                <p id="or">or</p>
                <div id="uu">
                    <button class="click"><img class="one" src="Google_Icons-09-512.webp" alt="google"><a class="tag" href="https://www.gmail.com">Sign up with Google</a></button><br><br>
                    <button class="click"><img class="one" src="facebook-logo-facebook-icon-transparent-free-png.webp" alt="facebook"><a class="tag" href="https://www.facebook.com">Sign up with Facebook</a></button><br><br>
                    <button class="click"><img class="one" src="mac-os.png" alt="apple"><a class="tag" href="https://www.apple.com">Sign up with Apple</a></button>
                </div>
            </form>
        </main>
    </header>
    <script src="sign_up.js"></script>
</body>
</html>
    <!-- http://localhost/Khedmni/sign_up.php-->
