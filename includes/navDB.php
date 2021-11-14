<?php

$connection = mysqli_connect('localhost','root','','4_wheels');

if(!$connection){
    die("Database is not connected... Get files from devs".mysqli_error($connection));
}
// if($connection){
//     echo "Database is connected...";
// }



?>