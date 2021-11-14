
<?php



function servicesShow( ){
    global $connection;
    $query = mysqli_query ($connection, "SELECT * FROM services");
    $count=1;


    while($row = mysqli_fetch_array($query) ){

        if ($count <=3){

        $servid = $row['serviceID'];
        $servh1 = $row['serviceTitle'];
        $servp = $row['serviceText'];

        
        $image = $row['serviceImage'];
        

        echo    "<div class='col '>";
        echo    "<div class='card h-100'>";
        echo    '<img class="card-img-top  mx-auto d-block img-fluid" src="data:image/jpeg;base64,'  .base64_encode( $image ).  '  alt="">';
        echo    "<div class='card-body'>";
        echo        "<h3 class='card-title'>{$servh1}</h3>";
        echo        "<p class='card-text'>{$servp}</p>";
        echo    "</div>";
        echo    "</div>";
        echo    "</div>";



        }
        $count++;



        


        
    }
    
}









?>