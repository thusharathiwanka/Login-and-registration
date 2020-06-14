<?php
   $dbServername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "car_porn";

   $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

   if($conn -> connect_error)
   {
      die("Connection error</br>". $conn -> connect_error);
   }
   else 
   {
      echo "Connection successfull</br>";
   }
?>