<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login.php" method="post">
        <input type="email" name="email" id="email" placeholder="Enter your email" required><br><br>
        <input type="password" name="password" id="pass" placeholder = "Password" required><br><br>
        <button type="submit" name = "login">Login</button><br><br>
        <a href="register.php">Register</a>
    </form>
    <?php
        session_start();
        $firstName = $_SESSION['firstname'];
        $lastName = $_SESSION['lastName'];
        $myEmail = $_SESSION['email'];
        $confirmpassword = $_SESSION['confirmpassword'];
        $myPassword = $_SESSION['password'];
        if(isset($_COOKIE['email'])){
            $email = $_COOKIE['email'];
            header('location: welcome.php');
        };

        if(isset($_POST['login'])){
            $loginEmail = $_POST['email'];
            $loginPass = $_POST['password'];
            if ($loginEmail == $myEmail && $myPassword == $loginPass){
                setcookie('email', $loginEmail, time()+60*60*7);
                session_start();
                $_SESSION['email'] = $loginEmail;
                header("location: welcome.php");
            };
        };
    ?>
</body>
</html>