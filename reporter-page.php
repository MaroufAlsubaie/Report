<!DOCTYPE html>
<html lang="en">
       
<head> 
    <meta charset="UTF-8">
<title>Report</title>
<meta charset="UTF-8">
<?php
require 'conn.php';
?>
</head>

<body>
    <form action="log_out.php">
    <button class="butt_signout">Sign out</button>
    </form>
    <br>
    <h1 style="text-align: center;">Reporter page</h1>
    <br>
    <table class="table1">
        <tr>
        <th style="width:5%;">no.</th>
        <th style="width:15%;">subject</th>
        <th style="width:60%;">explain</th>
        <th style="width:15%;">department</th>
        <th style="width:15%;">frame</th>
        <th style="width:12%;">reporter name</th>
        <th style="width:8%;">reporter id</th>
        </tr>
        <tr>

            <form action="procces.php" method="POST">
            <td></td>
            <td><input style="width:80%;" type="text" name="sub"/></td>
            <td><input style="width:90%;" type="text" name="exp"/></td>
            <td> <select name="dep" id="dep"> <optgroup style="width:80%;" name="dept">
            <?php
                $query ="SELECT * FROM `dept`";
                    $result = mysqli_query($conn,$query);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($result)) {
                        if($i > $row['num'])
                        break
            
            ?>
                <option name="dep" value="<?php echo $row['num']; ?>"><?php echo $row['name']; ?></option>
                        <?php
                    }
                        ?>
            </optgroup></td>
            <td> <select name="frame" id="frame"> <optgroup style="width:80%;" name="frame">
            <?php
                $query ="SELECT * FROM `frame`";
                    $result = mysqli_query($conn,$query);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($result)) {
                        if($i > $row['id'])
                        break
            
            ?>
                <option name="frame" value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php
                    }
                        ?>
            </optgroup></td>
            <td><input style="width:80%; text-align: center;" type="text" name="rnm" value="<?php echo $_SESSION['user']; ?>"readonly/></td>
            <td><input style="width:60%; text-align: center;" type="constant" name="rid" value="<?php echo $_SESSION['id']; ?>" readonly/></td>
        </tr>
    </table>
        <div class="center">
        <button type="submit" name="send_report">SEND</button>
        </div>
            </form>
</body>
<?php
      require 'check_s.php';
?>