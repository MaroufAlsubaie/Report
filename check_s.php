<?php
$uri = $_SERVER['REQUEST_URI'];
if($uri !== '/login_page.php')
if(!isset($_SESSION["user"]))
    echo "<script>window.location='login_page.php'</script>";
