<?php
	session_start();
   $conn =  mysqli_connect("localhost","root","","db");
   if(!$conn)
   {
        die("Connection failed" .mysqli_connect_error());
   }
   $source = $_POST["source"];
   $destination = $_POST["destination"];
   $date = $_POST["date"];
   $search = $_POST["button"];

   
  		$q = "CREATE TABLE airline_data(airline_name varchar(20) , airline_source varchar(20) , airline_destination varchar(20),airline_date date , airline_departure time , airline_arrival time)";
       mysqli_query($conn,$q);

   		// $query = "INSERT INTO airline_data VALUES('Spicejet' , 'Delhi' , 'Mumbai' , '2019-05-20', '08:00:00' , '09:30:00')";
   		// $query1 = "INSERT INTO airline_data VALUES('Emirates' , 'Delhi' , 'Mumbai' , '2019-05-21', '10:00:00' , '12:00:00')";
   		// mysqli_query($conn,$query);
   		// mysqli_query($conn,$query1);

   		if(isset($search))
   		{
   		$quer = "SELECT * FROM airline_data WHERE airline_source = '$source' AND airline_destination = '$destination' AND airline_date = '$date'";
   		}

   	
      $ans = mysqli_query($conn,$quer);
       $rows = mysqli_num_rows($ans);

      
      $result = mysqli_fetch_assoc($ans);
      ?>
      
      <!DOCTYPE html>
      <html>
      <head>
      	<title>Flights</title>
      	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="Myfirstproject.css">

		<style type="text/css">
			.second{
				padding-left: 140px;				
			}
			.third{
				padding-left: 95px;
			}
			.fourth{
				padding-left: 120px;
			}
			.fifth{
				padding-left: 55px;
			}
			.sixth{
				padding-left: 180px;
			}
			.row th{
				font-color:grey;
			}
		</style>
      </head>
      <body>
      	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Myfirstproject.htmlx">Home <span class="sr-only">(current)</span></a>
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
		<?php
			if($rows<1)
			{
				echo "<h1>No flights Available</h1>";
			}

		?>
      	<div class="container">
      		<table class="table table-striped table-hover">
      			<tr class="row1">
      				<th>Flight Name</th> 
      				<th>Source</th>
      				<th>Destination</th>
      				<th>Date</th>
      				<th>Departure Time</th>
      				<th>Arrival Time</th>   					
      			</tr>
      		</table>
      		<?php 

      			for($i=0;$i<$rows;$i++)
      			{

      				?>
      			<div class="card">
      				<div class="card-body">
      					<span>
      						<a href="Login.html" class="hover first" id="<?php echo $result['airline_name'];?>"><?php echo $result['airline_name'];?></a></td>
      						<a href="#" class="hover second" id=""><?php echo $result['airline_source'];?></a></td>
      						<a href="#" class="hover third" id=""><?php echo $result['airline_destination'];?></a></td>
      						<a href="#" class="hover fourth" id=""><?php echo $result['airline_date'];?></a></td>
      						<a href="#" class="hover fifth" id=""><?php echo $result['airline_departure'];?></a></td>
      						<a href="#" class="hover sixth" id=""><?php echo $result['airline_arrival'];?></a></td>      		
      					</span>
      				</div>			
      			
      			</div>
      			<br>
      			<br>


      			<?php

      		}

      		?>
      	

      </body>
      </html>
      		 
   
   
 




