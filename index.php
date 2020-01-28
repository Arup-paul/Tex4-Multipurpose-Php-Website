


<?php
require_once "inc/header.php"; 


?>

    <!-- slider section -->
  <section class="slider-area ">
      <div class="slider-active owl-carousel">
        <div class="single-slider pulse animated" style="background-image: url(img/slider1.jpg);">
          <div class="slider-text lightSpeedIn animated">
             <h2> <span>tex4</span>  International Ltd</h2>
            <p>The 1958 moulded plywood armchair by Norman Cherner.</p>
            <a  href="#">tell me more</a>
          </div>
        </div>

        <div class="single-slider bounce" style="background-image: url(img/slider2.jpg);">
          <div class="slider-text fadeInDown animated">
            <h2> <span>tex4</span>  International Ltd</h2>
            <p>The 1958 moulded plywood armchair by Norman Cherner.</p>
             <a href="#">tell me more</a>
          </div>
        </div>

        <div class="single-slider shake" style="background-image: url(img/slider3.jpg);">
          <div class="slider-text fadeInLeft animated">
             <h2> <span>tex4</span>  International Ltd</h2>
            <p>The 1958 moulded plywood armchair by Norman Cherner.</p>
             <a href="#">tell me more</a>
          </div>
        </div>
      </div>
  </section>



  	<!--about area start -->

  <section class="features-area pt-100 pb-100">
  	<div class="container">
  		<div class="row">
  			<div class="col-xl-5 col-lg-5">
  				<div class="section-title wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s"" data-wow-delay="3s">
  					<h2 class="mb-40">About Us <span></span></h2>
  				
  				<h4 class="wow bounceInUp">It is a long established facthat reader will be distracted by the readable content page when looking at its layout. </h4>
  			</div> 
  		</div>
  			<div class="col-xl-6 offset-xl-1 col-lg-7">
  				<div class="features-description wow slideInRight" data-wow-duration="1s" data-wow-delay=".1s"">
            <?php
              $edit_query="SELECT * FROM project WHERE pstatus='About Us'";
              $run_edit=mysql_query($edit_query);
              while($edit_row=mysql_fetch_array($run_edit)){
                $id=$edit_row['id'];
                $name =$edit_row['name'];
                $details   =$edit_row['details'];
              }
              echo '
            <p>'.$details.'</p>';

            ?>
  					
  				</div>
  			</div>
  		</div>
  		<div class="row justify-content-between feature-bottom">
  	
  				
          <?php
            $sqlforuser="SELECT * FROM modal ORDER BY id DESC";
          if($run=mysql_query($sqlforuser)){
            while ($data=mysql_fetch_assoc($run)) {
              $id        =$data['id'];
              $name  =$data['name'];
              $type  =$data['type'];
              $type      =$data['type'];
              $image     =$data['image'];
              $details =$data['details'];
              $date      =$data['addedate'];
           
         
            ?>

             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s"">
             <div class="single-feature">
              <div class="single-feature-img">
           <img class="img-responsive" src="images/upload/<?php echo $image;?>">
           </div>
  				<h3><?php echo $name;?></h3><span> <?php echo $type;?></span>
               <p><?php echo $details;?></p>
                <a href="#">more</a>
           

  			</div>
  			</div>
           <?php } } ?>

  		

  		</div>
  	</div>
  </section>






  <section class="portfolio-area mb-60 mt-60">
       <div class="container">
            <div class="row">
          <div class="col-12">
                    <div class="section-title text-center wow slideInRight" data-wow-duration="1s" data-wow-delay=".1s"">
                         <h2 class="">Portfolio<span></span></h2>
                         <p>It is a long established facthat reader will be distracted by the readable content page when looking at its layout. </p>



                         <div id="filters" class="button-group">  <button class="button is-checked" data-filter="*">All</button>
  <button class="button" data-filter=".certificate">certificate</button>
  <button class="button" data-filter=".Buyer">Buyer</button>
  <button class="button" data-filter=".supplier">supplier</button>
  
</div>



<div class="grid">

 
  <?php
  $we_care_main="SELECT * FROM gallery ORDER BY id DESC";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empid         =$we_care_main2['id'];
              $empname      =$we_care_main2['image'];
              $pstatus      =$we_care_main2['caption'];
              $gallery_name      =$we_care_main2['gallery_name'];
              
           
            ?>
  <div class="element-item post-transition <?php echo $gallery_name; ?> wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s"" data-category="post-transition">
    <img src="images/upload/<?php echo $empname;?>">
      <div class="overlay-effects">
      <div class="portfolio-icon">
       <a href="#"><i class="fa fa-plus-circle"></i></a>
        <a href="#"><i class="fa fa-eye"></i></a>
      </div>
    </div>
  </div>
<?php }} ?>
  

 



               </div> 
               </div>
          </div>


       </div>
  </section>




<section class="brand-area pt-40">
   <div class="container">
   		<div class="row">
  			<div class="col-xl-12">
  				<div class="section-title text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s"">
  					<h2 class="mb-40">Our Client <span></span></h2>
  				<p>It is a long established facthat reader will be distracted by the readable content page when looking at its layout. </p>
  			</div> 
  		</div>
  	</div>
     <div class="brand-active owl-carousel ">
       <div class="single-brand wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s"">
         <a href=""><img src="img/brand1.png"></a>
       </div>
       <div class="single-brand wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s"">
         <a href=""><img src="img/brand2.png"></a>
       </div>
       <div class="single-brand wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s"">
         <a href=""><img src="img/brand3.png"></a>
       </div>
       <div class="single-brand wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s"">
         <a href=""><img src="img/brand4.png"></a>
       </div>
       <div class="single-brand wow slideInRight" data-wow-duration="1s" data-wow-delay=".1s"">
         <a href=""><img src="img/brand5.png"></a>
       </div>
       <div class="single-brand  wow slideInRight" data-wow-duration="1s" data-wow-delay=".1s"">
         <a href=""><img src="img/brand6.png"></a>
       </div>
       <div class="single-brand  wow slideInRight" data-wow-duration="1s" data-wow-delay=".1s"">
         <a href=""><img src="img/brand3.png"></a>
       </div>
       <div class="single-brand  wow slideInRight" data-wow-duration="1s" data-wow-delay=".1s"">
         <a href=""><img src="img/brand2.png"></a>
       </div>
     </div>
   </div>
</section>


  <section class="testimonial_area bg-cover pt-100 pb-100 mb-60 mt-60 " data-overlays="4" style="background-image: url(img/test-bg.jpg)">
      <div class="container">
          <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="testimonial-wrapper text-center z-index">
                         <h5 class="pb-30  wow slideInRight" data-wow-duration="1s" data-wow-delay=".1s"">we are ready</h5>
                          <h2 class=" wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s"">Come with us to  improve your business</h2>
                          <div class="testimonial-btn  wow slideInUp" data-wow-duration="1s" data-wow-delay=".1s"">
                              <a href="contact.php" class="btn">Contact US</a>
                          </div>
                    </div>
                </div>
          </div>
      </div>
  </section>


<?php


require_once "inc/footer.php"

?>