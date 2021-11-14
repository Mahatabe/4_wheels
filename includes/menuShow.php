<?php 





function menuItemsVisitor( ){

                    $addrs = 'login.php';
                    $another = 'location.href="'.$addrs.'"';
                    echo " <button type='button' class='btn btn-primary loginButton btn-rounded align-right' data-mdb-ripple-color='dark' onClick='{$another}'> login </button> ";


                    echo " <li class='nav-item dropdown'> ";
                    echo " <a class='nav-link navslide slidec' href='#' id='navbarScrollingDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'><i class='fas fa-bars'></i></a>";
                    echo " <ul class='dropdown-menu' aria-labelledby='navbarScrollingDropdown'> ";
    global $connection;
    $vquery = mysqli_query ($connection, "SELECT * FROM menubarvisitor");

    while($row = mysqli_fetch_array($vquery) ){
        $vid = $row['menuVID'];
        $vname = $row['menuVItem'];
        $pageLinks = $row['pagelinks'];

        echo "<li><a class='dropdown-item' href='{$pageLinks}'>{$vname}</a></li>";
    }

                    echo " </ul> ";
                    echo " </li> ";
}





function menuItemsProfile( ){



    echo " <li class='nav-item dropdown'> ";
    echo " <a class='nav-link navslide slidec' href='#' id='navbarScrollingDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'><i class='fas fa-bars'></i></a>";
    echo " <ul class='dropdown-menu' aria-labelledby='navbarScrollingDropdown'> ";


    global $connection;
    $pquery = mysqli_query ($connection, "SELECT * FROM menubarprofile");

    while($row = mysqli_fetch_array($pquery) ){
        $pid = $row['menuPID'];
        $pname = $row['menuPItem'];

        $pageLinks = $row['pagelinks'];

        //echo "<li class='nav-item'><a class='nav-link' href='#'>{$name}</a></li>";
        echo "<li><a class='dropdown-item' href= '{$pageLinks}' >{$pname}</a></li>";
    }

    echo " </ul> ";
    echo " </li> ";
}


?>
