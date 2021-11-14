








<?php

include "navDB.php";


$nameb = '';
$emailb = '';
$messageb = '';
$phoneb = '';


if(isset($_POST["submit"]))
{


    $nameb = $_POST["username_bug"];
    $emailb = $_POST["mail_bug"];
    $phoneb = $_POST["phone_bug"];
    $messageb = $_POST["message_bug"];

    $sqlInsert = 'INSERT INTO reportbug (username_bug,  mail_bug,  phone_bug,  message_bug)
    VALUES("'.$nameb.'","'.$emailb.'","'.$phoneb.'","'.$messageb.'")';

    $resultInsert = mysqli_query($connection,$sqlInsert);


    header('Location:index.php');
    exit();

}


?>



<?php include "includes/navbar.php"?>


<div class="reportBug" id = "reportBug">

    <div class="row row-cols-1 row-cols-md-3 justify-content-center">

        <div class="col-lg-12 col-md-12 reporttitle align-self-end text-center">
            <h1 class="text-uppercase font-weight-bold">Report a Bug</h1>
            <p>Visit our main HQ for further queries and many more...</p>
        </div>

        <form  action="" method="POST">

            <div class="container-contact100 h-100 report">
                <div class="wrap-contact100">
                    <form class="contact100-form validate-form">

                        <div class="wrap-input100 validate-input bg1 " data-validate="Please Type Your Name">
                            <span class="label-input100 ">FULL NAME *</span>
                            <input class="input100 form-control" type="text" name="username_bug" placeholder="Enter Your Name" required value="">
                        </div>

                        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
                            <span class="label-input100">Email *</span>
                            <input class="input100 form-control" type="email" name="mail_bug" placeholder="Enter Your Email "required value="">
                        </div>

                        <div class="wrap-input100 bg1 rs1-wrap-input100">
                            <span class="label-input100">Phone</span>
                            <input class="input100 form-control" type="tel" name="phone_bug" placeholder="Enter Number Phone"required value="">
                        </div>

                        
                        <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                            <span class="label-input100 text-left">Message</span>
                            <textarea class="input100 form-control" name="message_bug" placeholder="Your message here..."required value=""></textarea>
                        </div>

                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn" name="submit" value="Sign Up">
                                <span>
                                    Submit
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </form>








        </div>






        

    </div>


</div>
