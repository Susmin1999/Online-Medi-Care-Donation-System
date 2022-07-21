<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Approval</title>
</head>
<body>

<div class="center">
    <h1>Patient Request</h1>
    
    <table id="users">
        <tr>
            <th>pid</th>
            <th>pname</th>
            <th>mobile</th>
            <th>Action</th>
        </tr>

        <?php
        $query="Select * from tblpatient WHERE status='pending' ORDER BY id ASC";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['pid'];?></td>
            <td><?php echo $row['pname'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td>
                <form action="admin:adminapproval.php" method="POST">
                    <input type="hidden" name="pid" value="<?php echo $row['id'];?>"/>
                    <input type="submit" name="approve" value="Approve"/>
                    <input type="submit" name="deny" value="Deny"/>
        </form>
        </td>
        </tr>
        </table>


        <?php

        if(isset($_POST['approve'])){
            $id=$_post['id'];

            $select="UPDATE tblpatient SET status='approved'"
        }             
        }
        ?>

    
</body>
</html>