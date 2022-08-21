<?php
    require 'conn.php';
    if(isset($_POST["login_b"])){
        $user = $_POST["Username"];
        $pass = $_POST["Password"];
        if($user !== null){
            $result = "SELECT * FROM `users` WHERE `username` = '$user'";
            $send = mysqli_query($conn,$result);
            $check = mysqli_fetch_assoc($send);
            if($user !== $check["username"]){
                header("location: ../login_page.php?error=wronglogin");
                echo "<script>alert(Wrong Username)</script>";
            }
            echo $check["password"];
            if($pass !== $check["password"]){
                header("location: ../login_page.php?error=wronglogin");
                echo "<script>alert(Wrong Password)</script>";
            }
            if($check["type"] == "reporter"){
                    $_SESSION["user"]=$user;
                    $_SESSION["id"]=$check["id"];
                    echo "<script>window.location='reporter-page.php'</script>";
            }         
            elseif($check["type"]== "reports"){
                    $_SESSION["user"]=$user;
                    $_SESSION["id"]=$check["id"];
                    echo "<script>window.location='homepage.php'</script>";
                }
            }
            else{
                echo "<script>window.location='login_page.php'</script>";
            }   
        }
    if(isset($_POST["send_report"])){
        $subj= $_POST["sub"];
        $dep= $_POST["dep"];
        $frame= $_POST["frame"];
        $expl= $_POST["exp"];
        $rnam= $_POST["rnm"];
        $riid= $_POST["rid"];
        $sql = "INSERT INTO `reports` (`R_Number`, `title`, `explain`, `reporter_name`, `reporter_id`, `frame`, `Department`) VALUES (NULL, '$subj', '$expl', '$rnam', $riid, '$frame', '$dep')";
        $send = mysqli_query($conn,$sql);
        echo '<Script>window.location="reporter-page.php"</script>';
    }
    if(isset($_POST["register_b"])){
        $user = $_POST["Username"];
        $pass = $_POST["Password"];
        $type = $_POST["checkbox"];
        $reg = "INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES (NULL, '$user', '$pass', '$type')";
        $send = mysqli_query($conn,$reg);
        echo '<Script>window.location="login_page.php"</script>';
    }
