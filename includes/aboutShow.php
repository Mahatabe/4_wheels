<?php 




function aboutShow(){

    global $connection;
    

    $queryi = mysqli_query ($connection, "SELECT * FROM aboutsection WHERE aboutid = 1");
    //$dataAb = mysqli_fetch_array($queryi);


        while($row = mysqli_fetch_array($queryi) ){
            
                
            $id = $row['aboutid'];
            $abouttitle = $row['textH1'];
            $aboutdes = $row['textP'];


            echo    "<div class='col-lg-7 col-md-12 accessoriestitle align-self-end'>";
            echo    "<h1 class='text-uppercase font-weight-bold'> {$abouttitle} </h1>";
            echo        "<p> {$aboutdes} </p>";
            echo    "</div>";
            
            



        }
        
    
    
}




?>

