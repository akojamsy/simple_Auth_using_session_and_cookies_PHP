<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    session_start();
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])){
        $_SESSION['firstname'] = $_POST['firstName'];
        $_SESSION['lastName']  = $_POST['lastName'];
        $_SESSION['email']  = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['confirmpassword'] = $_POST['confirmpassword'];
        if ($_SESSION['password'] !== $_SESSION['confirmpassword']){
            echo "Password mismatch!";
        } else {
           $firstName = $_SESSION['firstname'];
           $lastName = $_SESSION['lastName'];
            $email = $_SESSION['email'];
            $confirmpassword = $_SESSION['confirmpassword'];
            $password = $_SESSION['password'];
            header('location: login.php');
        };
    };
?>
    <form action="register.php" method="post">
        <input type="text" placeholder = "First Name" name="firstName" required><br><br>
        <input type="text" placeholder = "Last Name" name="lastName" required><br><br>
        <input type="email" name="email" placeholder="Enter your email" required><br><br>
        <input type="password" name="password" placeholder = "Password" required><br><br>
        <input type="password" name="confirmpassword" placeholder = "Confirm Password" required><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>