<?php

include ('db.php');


   echo  $user_id = $_GET['user_id'];
   $query = "DELETE FROM `users` WHERE `user_id`=$user_id";
   $result  = mysqli_query($connection,$query);
   if(!$result){
       die("query failed".mysqli_error($connection));
   }else{
       header('location:users.php');
   }










?>