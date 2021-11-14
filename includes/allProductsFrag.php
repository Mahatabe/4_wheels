<?php include "includes/allProductsShow.php"; ?>

<section class="allproducts" id="#">

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center text-center">

        <div class="col-lg-12  allproducttitle align-self-end">
            <h1 class="text-uppercase font-weight-bold">All Products</h1>
            <p>get the best car in your budget...</p>
        </div>
            
        <!-- <div class="col ">
            
            <div class="card h-100">
                <img class="img-fluid" src="images/landing.jpg" alt="">
                <div class="card-body">
                    <h3 class="card-title">name</h3>
                    <h4>price</h4>
                    <p class="card-text">Any top brand cars you can think of. Check out our imported Cars From over 10+ countries. Save time, save money, order online. </p>
                </div>
                
                <div class="row buttonView" role="group">
                    <button type="button" class="btn btn-dark viewproduct" >Veiw Product</button> 
                </div>
            </div>

        </div> -->

        <?php
            allProductsShow()
        ?>
        
    
    </div>
</section>

