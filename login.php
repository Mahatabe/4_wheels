<?php


session_start();

include "includes/navDB.php";


$email='';
$pass='';
$errorEmail=''; $errorPass = ''; $errorUser='';

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if(isset($_POST["login"])){

    if(empty($_POST["user_email"])){
        $errorEmail .= '<h2><label class="text-danger">Email is required</label></h2>';
    }
    else{
        $email = clean_text($_POST["user_email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errorEmail .= '<h2><label class="text-danger">Invalid email format</label></h2>';
        }
    }

    if(empty (md5($_POST['user_password']))){
        $errorPass .= '<h2><label class="text-danger">Password is required</label></h2>';
    }
    else{
        $pass = clean_text (md5($_POST['user_password']));
    }

    if($errorEmail == '' && $errorPass=='') {
        $sql = 'select * from user where user_email="'.$email.'" and user_password="'.$pass.'"';
        $result = mysqli_query($connection, $sql);
        $noOfData = mysqli_num_rows($result);


        if($noOfData>0){
            $_SESSION['user_email'] = $email;
            $_SESSION['user_password'] = $pass;
			
			$row =  mysqli_fetch_array($result);
            if ($row['status'] == 1) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['pic']= $row['pic'];

    
    
                header('Location: index.php');
            }else if($row['status'] == 2){

                $errorUser = '<h2><label class="text-danger">Your account is deleted</label></h2>';
                
            }else {

                 $errorUser = '<h2><label class="text-danger">Your account is not verified !</label></h2>';

            }



        }else{

            $errorUser = '<h2><label class="text-danger">Wrong input</label></h2>';

        }
            
    }
	

}


?>


<!DOCTYPE html>
<html>

     <?php include "includes/header.php" ?>

    <body class="text-center">
      <main class="form-signin">

                
                <form method="post">
				  <img class="mb-4" src="images/landing.jpg" alt="" width="250" height="100">
				  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                   <div class="form-floating"> 
                    <input type="email" name="user_email" id="floatingInput" class="form-control"  placeholder="Enter Email" required  value=" <?php echo $email; ?>">


					<label for="floatingInput">Email</label>

                    <?php echo $errorEmail; 
                    ?>

				   </div>

                   <div class="form-floating">
                    <input type="password" name="user_password" id="floatingInput" class="form-control" placeholder="Enter Password" required  value="<?php echo $pass;?>">

					<label for="floatingPassword">Password</label>

                    <?php echo $errorPass; 
                    
                    ?>

                    </div>
                    
					<button class="w-100 btn btn-lg btn-primary" name="login" value="Login" type="submit">Sign in</button>

                    <?php echo $errorUser; 
                    ?>
                    
					<a href="registration.php">Don't have an account? Register</a> 
                </form>

    

      </main>
    </body>

</html>

