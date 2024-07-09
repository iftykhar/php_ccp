<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (!empty($username) && !empty($password)) {
        $user_file = "data/" . $username . ".txt";
        if (!file_exists($user_file)) {
            file_put_contents($user_file, password_hash($password, PASSWORD_DEFAULT));
            $_SESSION["message"] = "Registration successful! You can now log in.";
            header("Location: login.php");
            exit();
        } else {
            $error = "Username already exists.";
        }
    } else {
        $error = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post" action="register.php">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Register">
    </form>
    <p><a href="login.php">Already have an account? Log in here</a></p>
</body>
</html>
