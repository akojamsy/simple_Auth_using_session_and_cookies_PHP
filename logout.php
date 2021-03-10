<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
<?php
    $email = $_COOKIE['email'];
    setcookie('email', $email, time()-1);
    echo "You have successfully logout. click here to <a href='login.php'> Login again</a>";
?>
    
</body>
</html>