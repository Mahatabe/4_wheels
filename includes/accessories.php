<!-- <section class="accessories" id = "Accessories">

<div class="row row-cols-1 row-cols-md-6 justify-content-center text-center">

    <div class="col-lg-12  accessoriestitle align-self-end">
        <h1 class="text-uppercase font-weight-bold">Accessories</h1>
        <p>Anything and everything that your car needs for a long smooth ride...</p>
    </div>
    

  
  <div class="col">
    <div class="card h-100">
      <h3 class="card-title">Rims</h3>
      <img src="images/rims.png" class="card-img-top" alt="">
      <div class="card-body">
        <h4 class="card-title">$2,000</h4>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>

      <div class="row btn-group cartwish" role="group">
          <button type="button" class="btn btn-dark cart" >Add to cart</button> 
          <button type="button " class="btn btn-outline-dark wish fas fa-lg fa-heart" ></button> 
      </div>

    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <h3 class="card-title">Rims</h3>
      <img src="images/rims.png" class="card-img-top" alt="">
      <div class="card-body">
        <h4 class="card-title">$2,000</h4>  
        <p class="card-text">This is a short card.</p>
      </div>
       

      <div class="row btn-group cartwish" role="group">
          <button type="button" class="btn btn-dark cart" >Add to cart</button> 
          <button type="button " class="btn btn-outline-dark wish fas fa-lg fa-heart" ></button> 
      </div>
      
    </div>
  </div>
  <div class="col c3">
    <div class="card h-100">
      <h3 class="card-title">Rims</h3>
      <img src="images/rims.png" class="card-img-top" alt="">
      <div class="card-body">
        <h4 class="card-title">$2,000</h4>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>

      <div class="row btn-group cartwish" role="group">
          <button type="button" class="btn btn-dark cart" >Add to cart</button> 
          <button type="button " class="btn btn-outline-dark wish fas fa-lg fa-heart" ></button> 
      </div>


    </div>
  </div>
  <div class="col c4">
    <div class="card h-100">
      <h3 class="card-title">Rims</h3>
      <img src="images/rims.png" class="card-img-top" alt="">
      <div class="card-body">
        <h4 class="card-title">$2,000</h4>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>

      <div class="row btn-group cartwish" role="group">
          <button type="button" class="btn btn-dark cart" >Add to cart</button> 
          <button type="button " class="btn btn-outline-dark wish fas fa-lg fa-heart" ></button> 
      </div>


    </div>
  </div>
</div>
</section> -->

<?php include "includes/accessoriesShow.php"; ?>

<section class="accessories" id = "Accessories">

    <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1 row-cols-lg-5 justify-content-center text-center">

        <div class="col-lg-12 col-md-12 accessoriestitle align-self-end">
            <h1 class="text-uppercase font-weight-bold">Our Accessories</h1>
            <p>Everything you need for a long smooth ride. Get the best price like no other.</p>
        </div>


            
           <!-- <div class="col col-lg-2">
            
            <div class="card h-100">

                <h3 class="card-title">Rims</h3>
                <img class="img-fluid" src="images/rims.png" alt="">

                <div class="card-body">
                  <h4 class="card-title">$2,000</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                
                <div class="row btn-group cartwish" role="group">
                  <button type="button" class="btn btn-dark cart" >Add to cart</button> 
                  <button type="button" class="btn btn-outline-dark wish fas fa-lg fa-heart" ></button> 
                </div>

            </div>

          </div>   -->
          <?php

              

           

              allaccessoriesShow( );

               

              if(isset($_POST['add'])  && isset($_SESSION['user_email'] )) {

                $mail = $_SESSION['user_email'];
                $id = $_GET['id'];


                $sqlInsert = 'INSERT INTO orders (productID ,customerMail)
                VALUES("'.$id.'","'.$mail.'")';
  
                $resultInsert = mysqli_query($connection,$sqlInsert);



              }

              else {

                    
              }

            


          ?>
          
          
          <div class="container col-lg-12">
            <div class="row">
              <div class="col text-center acc">
                <button class="btn btn-default " onClick="document.location.href='allAccessories.php'"><p> VIEW ALL </p></button>
              </div>
            </div>
          </div>


        

        
        
    
    </div>
</section>