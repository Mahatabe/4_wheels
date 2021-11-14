<?php 
function allaccessoriesShow( ){
    global $connection;
    $query = mysqli_query ($connection, "SELECT * FROM accessories");
    $count=1;



    global $id;
    global $name;
    global $price;


    while($row = mysqli_fetch_array($query) ){

        if ($count <=4){

        $id = $row['accessories_id'];
        $name = $row['accs_name'];
        $price = $row['accs_price'];
        $description = $row['accs_description'];

        
        $image = $row['accessories_img'];
        

        echo    "<div class='col col-lg-2'>";
            
            echo    "<div class='card h-100'>";
                echo "<form  method='post' action='index.php?action=add&id=".$row['accessories_id']."'>";

                echo    "<h3 class='card-title'>$name</h3>";
                echo    '<img class="img-fluid"  src="data:image/jpeg;base64,'  .base64_encode( $image ).  ' alt="show image""/>';

                echo    "<div class='card-body'>";
                  echo  "<h4 class='card-title'>{$price}</h4>";
                  echo  "<p class='card-text'>{$description}</p>";
                echo    "</div>";
                
                echo    "<div class='row btn-group cartwish' role='group'>";
                echo    "<button type='submit' name='add' class='btn btn-dark cart ' style='padding-right: 55px;padding-left: 55px;'>Order Now</button>"; 
                //echo    "<button type='submit' class='btn btn-outline-dark wish fas fa-lg fa-heart' ></button>";
                echo    "</div>";

                echo "</form>";

            echo    "</div>";

          echo  "</div>";





        }


        $count++;
    }
    
}

?>

