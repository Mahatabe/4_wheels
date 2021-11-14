<?php include "includes/header.php" ;

function allaccessoriesShow( ){
    global $connection;
    $query = mysqli_query ($connection, "SELECT * FROM accessories");
    $count=1;


    while($row = mysqli_fetch_array($query) ){

        

        $id = $row['accessories_id'];
        $name = $row['accs_name'];
        $price = $row['accs_price'];
        $description = $row['accs_description'];

        
        $image = $row['accessories_img'];
        

        echo    "<div class='col col-lg-2'>";
            
            echo    "<div class='card h-100'>";

                echo    "<h3 class='card-title'>$name</h3>";
                echo    '<img class="img-fluid"  src="data:image/jpeg;base64,'  .base64_encode( $image ).  ' alt="show image""/>';

                echo    "<div class='card-body'>";
                  echo  "<h4 class='card-title'>{$price}</h4>";
                  echo  "<p class='card-text'>{$description}</p>";
                echo    "</div>";
                
                echo    "<div class='row btn-group cartwish' role='group'>";
                echo    "<button type='button' class='btn btn-dark cart' >Add to cart</button>"; 
                echo    "<button type='button' class='btn btn-outline-dark wish fas fa-lg fa-heart' ></button>";
                echo    "</div>";

            echo    "</div>";

        echo  "</div>";





        


        
    }
    
}

?>

