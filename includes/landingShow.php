<?php include "includes/header.php" ;

// function landingItemsShow(){
//     global $connection;
//     $query = mysqli_query ($connection, "SELECT * FROM landingsection");

//     while($row = mysqli_fetch_array($query)){

//         $tagH1 = $row['tagH1'];
//         $tagPara = $row['tagP'];
//         $image = $row['landingImage'];

//         echo '<img class="img-fluid landingImage" src="data:image/jpeg;base64,'.base64_encode( $image ).' alt="landing image""/>';
//     }
    
// }

function landingItemsShow(){
    global $connection;
    $queryi = mysqli_query ($connection, "SELECT * FROM landingsection WHERE landingID = 1");
    $datai = mysqli_fetch_array($queryi);
    echo '<p class=" font-weight-light mb-5">'.$datai['tagP'].'</p>';
    echo '<img class="img-fluid landingImage" src="data:image/jpeg;base64,'.base64_encode( $datai['landingImage'] ).' alt="landing image""/>';
    
}

function landingh1Show(){
    global $connection;
    $query = mysqli_query ($connection, "SELECT * FROM landingsection WHERE landingID = 1");
    $data = mysqli_fetch_array($query);
    echo '<h1 class="text-uppercase font-weight-bold">'.$data['tagH1'].'</h1>';
}


?>