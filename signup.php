<?php
	session_start();
   $conn =  mysqli_connect("localhost","root","","db");
   if(!$conn)
   {
        die("Connection failed" .mysqli_connect_error());
   }

   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $button = $_POST['button-login'];

   

   if(isset($button))
   {
   		$q = "SELECT * FROM user_detail WHERE user_email = '$email'";
   $query = mysqli_query($conn,$q);
   $rows = mysqli_num_rows($query);

   if($rows<1)
   {
   		$qu = "INSERT INTO user_detail values('$email' , '$password' , '$name')";
   		mysqli_query($conn,$qu);
   		header('location:details.html');
   }
   else {
   		echo "User already exists";
   }

   }
   




?>