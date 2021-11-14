<?php

    session_start();
	include "includes/navDB.php";
?>


	<?php 

		if(isset($_POST['submit']))
		{

			
            move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
			$name=$_POST["user_name"];
			$phone = $_POST["user_phone"];
			$pic=$_FILES['file']['name'];

			
			
            
			$sql1= "UPDATE user SET pic='".$pic."',user_name='".$name."', user_phone='".$phone."' WHERE user_id='".$_SESSION['user_id']."'";
			
			if(mysqli_query($connection,$sql1))
			{
				header('Location: profile.php');
			}

			
		}
 	?>

<html>
<body>

	<?php

		
		
		$sql = "SELECT * FROM user WHERE user_id='$_SESSION[user_id]'";
		$result = mysqli_query($connection,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$name=$row['user_name'];
			$phone=$row['user_phone'];
		}

	?>

<?php include "includes/header.php" ?>
	
<body class="text-center">
	
	
	<main class="form-edit">
	
	    <h1 class="h3 mb-3 fw-normal">Edit your profile</h1>
	
	    <form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">
		
        <form action="" method="post">
		
		        <div class="form-floating"> 
					<input type="text" placeholder="Enter your name" id="floatingInput" name="user_name" required value="<?php echo $name;?>" class="form-control" />
					<label for="floatingInput">Name</label>
				</div>
			
		
		        <div class="form-floating"> 
					
					<input type="tel" placeholder="Enter your phone" id="floatingInput" name="user_phone" required value="<?php echo $phone; ?>" class="form-control" />
					<label for="floatingInput">Phone</label>
			    </div>

		    <button class="w-100 btn btn-lg btn-primary" name="submit" value="Save" type="submit">Save</button>
 			
 		</form>
		
		
		</main>


</body>
</html>

