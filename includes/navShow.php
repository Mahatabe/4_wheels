<?php include "includes/header.php" ;

function navItemsVisitor( ){
    global $connection;
    $query = mysqli_query ($connection, "SELECT * FROM navbarvisitor ");

    echo "<li class='nav-item'>";
    echo "<a class='nav-link active vis' href='#Home'>Home</a>";
    echo "</li>";
    while($row = mysqli_fetch_array($query) ){
        $id = $row['navitemVID'];
        $name = $row['navitemVName'];
        $sectionLinks = $row['sectionlinks'];

        echo "<li class='nav-item'><a class='nav-link vis' href='#{$sectionLinks}' >{$name}</a></li>";
    }
}



?>