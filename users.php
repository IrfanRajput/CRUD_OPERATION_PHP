<?php


include('db.php');



$query ="SELECT * FROM `users`";

$result = mysqli_query($connection,$query);

if(!$result){
    die("query failed".mysqli_error($connection));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body style="background-color: whitesmoke;">
    <div class="container">
    <h1 style="text-align: center;">All Register Users</h1>
    <table  class="table table-hover border">
        <tr>
            <th>Sr.no</th>
            <th>User Name</th>
            <th>User passwords</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    <?php
    $i=1;
    while($row = mysqli_fetch_assoc($result)){
        //echo "<pre>";
        //print_r($row);

        ?>
        
        
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row['user_email'];?></td>
            <td><?php echo $row['user_password'];?></td>
            <td><a href="update_data.php?user_id=<?=$row['user_id'];?>"><input type="button" class="btn btn-success" value="update"/></a></td>
            <td><a href="delete.php?user_id=<?=$row['user_id'];?>"><input type="button" class="btn btn-danger" value="Delete"/></a></td>
        </tr>
       
        <?php    $i++; }  ?>
    </table>
    </div>
    GO to Registeration Page<a href="Register_user.php">Click Here</a>
</body>
</html>