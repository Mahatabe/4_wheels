
<?php 
    include "includes/navshow.php"; 
    include "includes/menuShow.php"; 
    session_start();

?>


<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand d-flex w-25 me-auto">4wheels</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            
            <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
                
                
                

                <?php 
                        if (strpos($_SERVER['SCRIPT_NAME'],'index.php')){

                            navItemsVisitor(); 
                        }
                        
                ?>


                <!-- <button type="button" class="btn btn-primary loginButton btn-rounded align-right" data-mdb-ripple-color="dark" onClick="document.location.href='login.php'"> login </button>  -->
                

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link navslide slidec" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bars"></i></a>
                    <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown"> -->
                        <?php 

                        if (isset ($_SESSION['user_email'])){
                            menuItemsProfile();
                        }
                        // 
                        else menuItemsVisitor( );
                        ?>

                        <!-- <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">All products</a></li>
                        <li><a class="dropdown-item" href="#">All accessories</a></li>
                        <li><a class="dropdown-item" href="#">Purchases</a></li>
                        <li><a class="dropdown-item" href="#">About devs</a></li>
                        <li><a class="dropdown-item" href="#">Report bug</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li> -->
                    <!-- </ul>
                </li> -->

                
            </ul>
        </div>
    </div>
</nav>

