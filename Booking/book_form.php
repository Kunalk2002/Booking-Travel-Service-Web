<?php
   $insert=false;
   if(isset($_POST['send'])){
      $server= "localhost";
      $username= "root";
      $password="";

      $connection=mysqli_connect($server,$username,$password);
      if(!$connection){
         die("Connection Failed due to" . mysqli_connect_error());    // if Connection failed use die method 
      }
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = "INSERT INTO `book_db`.`book_form`(`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES ('$name','$$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

      $connection->query($request);
      header('location:book.php');
      $connection->close(); 
   }
?>