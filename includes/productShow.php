<?php 
function allProductsShow( ){
    global $connection;
    $query = mysqli_query ($connection, "SELECT * FROM product");
    $count=1;

    global $id1;



    while($row = mysqli_fetch_array($query) ){

        if ($count <=3){
        $id1 = $row['productID'];
        $name = $row['productName'];
        $price = $row['productPrice'];
        $description = $row['productDescription'];

        
        $image = $row['productPicture'];
        


        echo "<div class='col'>";
            
        echo    "<div class='card h-100'>";
        echo "<form  method='post' action='index.php?action=add1&id1=".$row['productID']."'>";
         echo    '<img class="img-fluid"  src="data:image/jpeg;base64,'  .base64_encode( $image ).  ' alt="show image""/>';
                echo "<div class='card-body'>";
                
                    echo "<h3 class='card-title'>{$name}</h3>";
                    echo "<h4>{$price}</h4>";
                    echo "<p class='card-text'>{$description}</p>";
                echo "</div>";
                
                echo "<div class='row buttonView' role='group'>";
                echo    "<button type='submit' name='add1' class='btn btn-dark viewproduct'>Order Now</button> ";
                echo "</div>";

                echo "</form>";
            echo "</div>";

        echo "</div>";

        }


        $count++;
    }
    
}




?>

