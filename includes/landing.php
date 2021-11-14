<?php include "includes/landingShow.php"; ?>
<section id="Home">
<div class="backgroundlanding">
    <div class="container conland h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <!-- <h1 class="text-uppercase font-weight-bold">what's stoping you</h1> -->
                <?php
                     landingh1Show()
                ?>
            </div>
            <div class="col-lg-8 align-self-baseline">
                <!-- <p class=" font-weight-light mb-5"> hands on the wheel... style in the roads...</p> -->
                <!-- <a class="btn btn-primary landingButton btn-xl js-scroll-trigger " href="#about" >Choose your engine</a> -->

                <?php
                     landingItemsShow()
                ?>

            </div>

            <div class="arrow col-lg-12 align-self-baseline">
                <svg class="arrows">
					<path class="a1" d="M0 0 L30 32 L60 0"></path>
					<path class="a2" d="M0 20 L30 52 L60 20"></path>
					<path class="a3" d="M0 40 L30 72 L60 40"></path>
				</svg>
            
            </div>


           
        </div>
    </div>
</div>

</section>