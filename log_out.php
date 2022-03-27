<?php
    require 'conn.php';
    if(isset($_SESSION["user"])){
        session_destroy();
        echo "<script>window.location='login_page.php'</script>";
    }

?>
<?php
      require 'check_s.php';
?>