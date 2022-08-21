<!DOCTYPE html>
<html lang="en">
       
<head> 
    <meta charset="UTF-8">
<title>Report</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="desigen.css?version=1">

</head>

<body>
<form action="log_out.php">
    <button class="butt_signout">Sign out</button>
    </form>
    <br>
    <h1 style="text-align: center;">Report page</h1>
    <?php
require 'conn.php';
$sql = "SELECT * FROM reports;";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
?>

    <table class="table1">
        <tr>
        <th style="width:5%;">no.</th>
        <th style="width:15%;">subject</th>
        <th style="width:60%;">explain</th>
        <th style="width:12%;">department</th>
        <th style="width:12%;">frame</th>
        <th style="width:12%;">reporter name</th>
        <th style="width:8%;">reporter id</th>
        </tr>
        <tr>
            <td><?php echo $row["R_Number"];?></td>
            <td><?php echo $row["title"];?></td>
            <td><?php echo $row["explain"];?></td>
            <td><?php echo $row["Department"];?></td>
            <td><?php echo $row["frame"];?></td>
            <td><?php echo $row["reporter_name"];?></td>
            <td><?php echo $row["reporter_id"];?></td>
            
            <?php 
        }
        ?>
        </tr>
    </table>
</body>
<?php
      require 'check_s.php';
?>