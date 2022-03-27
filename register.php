<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
     require 'conn.php';
     ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="h2_login">
        <h2>Register</h2>
    <form action="procces.php" method="POST">
    <div class="login_box">
        <br><br>
        <p>Username:</p>
        <input type="text" name="Username">
        <br><br><br>
        <p>Password:</p>
        <input type="password" name="Password">
        <br><br>
        <p>Reports</p><input type="radio" name="checkbox" value="reports"><p>Reporter</p><input type="radio" name="checkbox" value="reporter">
        <br>
        <button name="register_b" type="submit">Log in</button>
    </div></div></form>
</body>
</html>