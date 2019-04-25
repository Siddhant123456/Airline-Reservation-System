<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="Myfirstproject.css">
      	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Flight status</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#">International Visa Information</a>
      </li>
        
      <li class="nav-item">
        <a class="nav-link" href="#">Our team</a>
      </li>
    </ul>
   
  </div>
</nav>


</body>
</html>

<?php
	session_start();
   $conn =  mysqli_connect("localhost","root","","db");
   if(!$conn)
   {
        die("Connection failed" .mysqli_connect_error());
   }
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$button_login = $_POST['button-login'];
	$button_signup = $_POST['button-signup'];

	// $q = "CREATE TABLE user_detail(user_email nvarchar(255),password varchar(20) , PRIMARY KEY(user_email))";
	// mysqli_query($conn,$q); 

	$check = "SELECT * FROM user_detail WHERE user_email = '$email' AND password = '$password'";
	$qu = mysqli_query($conn,$check);
	$rows = mysqli_num_rows($qu);
	if(isset($button_login))
	{
		
		if($rows>0)
		{
			header('location:details.html');
		}
		else
		{
			echo "Incorrect password/email";
		}
				
	}
	
		


	


?>


