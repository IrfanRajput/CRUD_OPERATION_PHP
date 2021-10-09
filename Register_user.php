

<?php include('db.php');?>

<?php

  

if(isset($_POST['submit'])){
    //$username = array("irfan","kashif","Haris");
       $email = $_POST['email'];
       $password = $_POST['password'];
    //    if(!in_array($name,$username)){
    //        echo "Wrong user name and password";
    //    }else{
    //        echo "<h1>welcome to admin panel</h1>";
    //    }
    
    if($email && $password){
      
    }else{
        echo "User name and Password fill out";
    }
    $query1 = "SELECT * FROM `users` WHERE `user_email`= '$email'";
    $result1 = mysqli_query($connection,$query1);
    $row=mysqli_fetch_assoc($result1);
    if($row['user_email']==$email){
        echo "<span class='text text-danger text-center'>Email already register Use Another</span>";
    }else{

        $query = "INSERT INTO `users`(`user_email`, `user_password`) VALUES ('$email','$password');";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die("query failed".mysqli_error($connection));
            }else{
                header('location:users.php');
            }
    }
      

    

    

}



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
                    <h1>Register User self</h1>
               
               
                    <div class="form-group">
                         <label>Enter Name:</label>
                         <input type="email" placeholder="Enter name" name="email" class="form-control"/>
                    </div>
                    
                    <div class="form-group">
                         <label>Enter Password:</label>
                         <input type="password" placeholder="Enter password" name="password" class="form-control"/>
                    </div>
                   <br/>
                    <div class="form-group">
                         <input type="submit" name="submit" value="login" class="btn btn-primary"/>
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





