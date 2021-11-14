<?php

include "includes/navDB.php";

$name = '';
$email = '';
$phone = '';
$pass = '';
$pic = '';

date_default_timezone_set('ASIA/DHAKA');
$currentDate = date('Y-m-d H:i:s');




if(isset($_POST["submit"]))
{
	move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
	
	$name = $_POST["user_name"];
	$email = $_POST["user_email"];
	$phone = $_POST["user_phone"];
	$pass = md5($_POST['user_password']);
	$pic=$_FILES['file']['name'];



	$sqlCheck = "SELECT * FROM user WHERE  user_email='".$email."'"; 
    $resultCheck = mysqli_query($connection, $sqlCheck);

    $no_of_data = mysqli_num_rows($resultCheck);
	
	



    if(!$no_of_data){
		
	    $sqlInsert = 'INSERT INTO user (user_name,user_email,user_phone,user_password,created_date,pic)
	    VALUES("'.$name.'","'.$email.'","'.$phone.'","'.$pass.'","'.$currentDate.'","'.$pic.'")';
		
	    $resultInsert = mysqli_query($connection,$sqlInsert);
	
	    $lastNumberTnsert = mysqli_insert_id($connection);
		header('Location: login.php');
	}
}




?>
<!DOCTYPE html>
<html>

       <?php include "includes/header.php" ?>
	   
 <body class="text-center">
 
    <main class="form-signup">
	
	        <h1 class="h3 mb-3 fw-normal">Register here</h1>
	        <form action="" method="post" enctype="multipart/form-data">

		    <input class="form-control" type="file" name="file">

			<form  action="" method="POST">
			
				<div class="form-floating"> 
				
				
					
					<input type="text" placeholder="Enter your name" id="floatingInput" name="user_name" required value="" class="form-control" />
					<label for="floatingInput">Name</label>
				</div>
				<div class="form-floating"> 
					
					<input type="email" placeholder="Enter your email" id="floatingInput" name="user_email" required value="" class="form-control" /> 
					<label for="floatingInput">Email</label>
				</div>
				
				<div class="form-floating"> 
					
					<input type="tel" placeholder="Enter your phone" id="floatingInput" name="user_phone" required value="" class="form-control" />
					<label for="floatingInput">Phone</label>
			    </div>
				
				<div class="form-floating"> 
					
					 <input type="password" placeholder="Enter your password" id="floatingInput" name="user_password" required value=""class="form-control" />
					 <label for="floatingInput">Password</label>
				</div>
				
				

				<button class="w-100 btn btn-lg btn-primary" name="submit" value="Sign Up" type="submit">Sign Up</button>
				
				
			</form>
			

	</main>

</body>
</html>