<!-- <section class="product" id = "Product">

<div class="row row-cols-1 row-cols-md-5 justify-content-center text-center">

    <div class="col-lg-12  producttitle align-self-end">
        <h1 class="text-uppercase font-weight-bold">Products</h1>
        <p>Anything and everything that your car needs for a long smooth ride...</p>
    </div>
    
  <div class="col">
    <div class="card h-100">
      <img src="images/landing.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="row buttonView" role="group">
          <button type="button" class="btn btn-dark viewproduct" >Veiw Product</button> 
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/landing.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
      <div class="row buttonView" role="group">
          <button type="button" class="btn btn-dark viewproduct" >Veiw Product</button> 
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/landing.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="row buttonView" role="group">
          <button type="button" class="btn btn-dark viewproduct" >Veiw Product</button> 
      </div>
    </div>
  </div>
</div>
</section> -->


<?php include "includes/ProductShow.php"; ?>
















<section class="allproducts" id="Product">

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 justify-content-center text-center">

        <div class="col-lg-12  allproducttitle align-self-end">
            <h1 class="text-uppercase font-weight-bold">Our Products</h1>
            <p>Engine you need for a long smooth ride. Get the best price like no other.</p>
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
        
            allProductsShow();

            

            if(isset($_POST['add1'])  && isset($_SESSION['user_email'] )) {
            $mail = $_SESSION['user_email']; 

              $id1 = $_GET['id1'];


              $sqlInsert = 'INSERT INTO productorders (	product_OID ,customerMail)
              VALUES("'.$id1.'","'.$mail.'")';

              $resultInsert = mysqli_query($connection,$sqlInsert);



            }

            

            else {
              
            }



        ?>

        <!-- <div class="col-lg-12 buttonal text-center ">            
            
                <div class="row col-lg-1 h-100 justify-content-center " role="group">
                    <button type="button buttonall" class="btn btn-dark viewal" >Veiw Product</button> 
                </div>
        </div> -->

        <div class="container col-lg-12">
          <div class="row">
            <div class="col text-center stb">
              <button class="btn btn-default " onClick="document.location.href='allProducts.php'"><p> VIEW ALL </p></button>
            </div>
          </div>
        </div>

        
        
        
    
    </div>
</section>