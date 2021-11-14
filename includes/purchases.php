<?php 
	session_start();

    include "includes/navDB.php";
 ?>

<section class="purchaseHist">
    <div class="container purchaseHistory">
        <div class="row">
            <div class="col-12">
                <div class="cardbody his">
                    <div class="card-body text-center titl">
                        <h5 class="card-title m-b-0">purchase history</h5>
                    </div>
                    <div class="tables">
                        <table class="table table-striped">
                            <thead class="table table-dark tabtitle">
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">product id</th>
                                    
                                    <th scope="col">state</th>
                                </tr>
                            </thead>
                            <tbody class="customtable">

                            <?php



                                $mail = $_SESSION['user_email']; 


                                $sql = mysqli_query($connection,"SELECT * FROM productorders where customerMail='$mail' ;");
                                

                                while ($row=mysqli_fetch_assoc($sql))
                                {
                                    ?>

                                    <tr>
                                        <td> <?php echo $row['customerMail']; ?> </td>
                                        <td> <?php echo $row['product_OID']; ?> </td>
                                        
                                        <td> <?php echo $row['state']; ?> </td>
                                    </tr>

                                    <?php

                                }


                                ?>




                                

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>