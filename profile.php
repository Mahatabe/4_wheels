<?php 
	session_start();

    include "includes/navDB.php";
 ?>
 <!DOCTYPE html>
 <html>
 <?php include "includes/header.php" ?>
 <body>
 	<div class="container">
 		<form action="" method="post">
 			<button class="btn btn-outline-dark" style="float: right; margin-top: 50px; width: 70px;" name="submit1" type="submit">Edit</button>
 		</form>
 		<div class="wrapper">
 			<?php

 			if(isset($_POST['submit1']))
 			{
				header('Location: edit.php');
 			}


                $sql=mysqli_query($connection,"SELECT * FROM user where user_id='$_SESSION[user_id]' ;");
 			?>
 			

 			<?php
 				$row=mysqli_fetch_assoc($sql);

 				echo "<div style='text-align: center'>
 					<img class='img-circle profile-img' height=150 width=150 src='images/".$_SESSION['pic']."'>
 				</div>";
 			?>

 			<?php
 				echo "<b>";
 				echo "<table class='table ptable table-bordered'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> ID: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['user_id'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['user_name'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['user_email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Phone: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['user_phone'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Created Date: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['created_date'];
	 					echo "</td>";
	 				echo "</tr>";


	 				
 				echo "</table>";
 				echo "</b>";
 			?>
 		</div>
 	</div>
 </body>
 </html>

