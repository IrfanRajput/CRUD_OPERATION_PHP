<?php




include('db.php');
echo $user_id = $_GET['user_id'];


$query = "SELECT * FROM `users` WHERE `user_id`=$user_id";
$result  = mysqli_query($connection,$query);

if(!$result){
    die("query failed".mysqli_error($connection));
}

while($row=mysqli_fetch_assoc($result)){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body style="background-color: whitesmoke;">
<div class="container">
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <div class="card" id="card">
          <form action="" method="post">
                    <h1>Login form</h1>
               
               
                    <div class="form-group">
                         <label>Enter Name:</label>
                         <input type="text" placeholder="Enter name" name="new_name" class="form-control" value="<?=$row['user_email'];?>"/>
                    </div>
                    
                    <div class="form-group">
                         <label>Enter Password:</label>
                         <input type="password" placeholder="Enter password" name="new_password" class="form-control" value="<?=$row['user_password'];?>"/>
                    </div>
                   <br/>
                    <div class="form-group">
                         <input type="submit" name="update" value="update" class="btn btn-primary"/>
                    </div>
                   
                    </form>
            </div>

        </div>
        <div class="col-sm-2">
            
        </div>
    </div>
</div>
    
</body>
</html>

<?php
}
?>







<?php

if(isset($_POST['update'])){
    $new_name = $_POST['new_name'];
    $new_password = $_POST['new_password'];
    
$query = "UPDATE `users` SET `user_email`='$new_name',`user_password`='$new_password' WHERE `user_id` = $user_id";
$result = mysqli_query($connection,$query);
if(!$result){
    die("query failed".mysqli_error($connection));
}else{
   header('location:users.php');
}

}



?>