<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Log in</title>
    <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "wronglogin"){
            echo "<script>alert('Please enter valid input')</script>";
        }
      }    
      require 'conn.php';
    ?>
</head>
<body>
    
    <div class="h2_login">
        <h2>Log in</h2>
    <form action="procces.php" method="POST">
    <div class="login_box">
        <br><br>
        <p>Username:</p>
        <input type="text" name="Username">
        <br><br><br>
        <p>Password:</p>
        <input type="password" name="Password">
        <br><br>
        <button name="login_b" type="submit">Log in</button>
    </div></div></form>
</body>
</html>
<?php
      require 'check_s.php';
?>