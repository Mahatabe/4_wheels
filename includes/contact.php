<?php

include "navDB.php";

$name = '';
$email = '';
$message = '';
$phone = '';



if(isset($_POST["submit"]))
{


    $name = $_POST["user_name"];
    $email = $_POST["user_email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];




    $sqlInsert = 'INSERT INTO contact (user_name,user_email,phone,message)
    VALUES("'.$name.'","'.$email.'","'.$phone.'","'.$message.'")';

    $resultInsert = mysqli_query($connection,$sqlInsert);


    header('Location:index.php');

}


?>




<div class="maps" id = "Contact">

    <div class="row row-cols-1 row-cols-md-3 justify-content-center">

        <div class="col-lg-12 col-md-12 mapstitle align-self-end text-center">
            <h1 class="text-uppercase font-weight-bold">Contact Us</h1>
            <p>Visit our main HQ for further queries and many more...</p>
        </div>


         <div class="sectionPartition col-sm-12 col-md-12 col-lg-4  h-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.537649720691!2d90.40462791498159!3d23.763861484582666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7941a567777%3A0xa41d9db90c359dc1!2z4KaG4Ka54Kab4Ka-4Kao4KeB4Kay4KeN4Kay4Ka-IOCmrOCmv-CmnOCnjeCmnuCmvuCmqCDgppMg4Kaq4KeN4Kaw4Kav4KeB4KaV4KeN4Kak4Ka_IOCmrOCmv-CmtuCnjeCmrOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCnnw!5e0!3m2!1sbn!2sbd!4v1617479961222!5m2!1sbn!2sbd" 
                width="655" height="641" style="border:0;" allowfullscreen="" loading="lazy" class="gmap">
            </iframe>
        </div>

        <div class="sectionPartition col-sm-12 col-md-12 col-lg-4 ">
            
        



        <form  action="" method="POST">

            <div class="container-contact100 h-100">
                <div class="wrap-contact100">
                    <form class="contact100-form validate-form">

                        <div class="wrap-input100 validate-input bg1 " data-validate="Please Type Your Name">
                            <span class="label-input100 ">FULL NAME *</span>
                            <input class="input100 form-control" type="text" name="user_name" placeholder="Enter Your Name" required value="">
                        </div>

                        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
                            <span class="label-input100">Email *</span>
                            <input class="input100 form-control" type="email" name="user_email" placeholder="Enter Your Email "required value="">
                        </div>

                        <div class="wrap-input100 bg1 rs1-wrap-input100">
                            <span class="label-input100">Phone</span>
                            <input class="input100 form-control" type="tel" name="phone" placeholder="Enter Number Phone"required value="">
                        </div>

                        
                        <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                            <span class="label-input100 text-left">Message</span>
                            <textarea class="input100 form-control" name="message" placeholder="Your message here..."required value=""></textarea>
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




<!--
        <div class="sectionPartition col-sm-3 col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.537649720691!2d90.40462791498159!3d23.763861484582666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7941a567777%3A0xa41d9db90c359dc1!2z4KaG4Ka54Kab4Ka-4Kao4KeB4Kay4KeN4Kay4Ka-IOCmrOCmv-CmnOCnjeCmnuCmvuCmqCDgppMg4Kaq4KeN4Kaw4Kav4KeB4KaV4KeN4Kak4Ka_IOCmrOCmv-CmtuCnjeCmrOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCnnw!5e0!3m2!1sbn!2sbd!4v1617479961222!5m2!1sbn!2sbd" 
            
            width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy">

        </iframe>




        </div> -->

        

    </div>


</div>
