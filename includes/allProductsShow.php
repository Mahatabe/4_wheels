            
<?php include "includes/header.php" ;

function allProductsShow( ){
    global $connection;
    $query = mysqli_query ($connection, "SELECT * FROM product");

    while($row = mysqli_fetch_array($query) ){
        $id = $row['productID'];
        $name = $row['productName'];
        $price = $row['productPrice'];
        $description = $row['productDescription'];

        $image = $row['productPicture'];
        

        echo "<div class='col'>";
            echo    "<div class='card h-100'>";

                echo    '<img class="img-fluid"  src="data:image/jpeg;base64,'  .base64_encode( $image ).  ' alt="show image""/>';

                echo "<div class='card-body'>";
                    echo "<h3 class='card-title'>{$name}</h3>";
                    echo "<h4>{$price}</h4>";
                    echo "<p class='card-text'>{$description}</p>";
                echo "</div>";
                
                echo "<div class='row buttonView' role='group'>";
                echo    "<button type='button' class='btn btn-dark viewproduct' >Veiw Product</button> ";
                echo "</div>";
                
            echo "</div>";
        echo "</div>";


    }
}



?>
            
            