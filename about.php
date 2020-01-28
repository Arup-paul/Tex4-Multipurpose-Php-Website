<?php

require_once "inc/header.php"; 

?>


    <!-- breadcrumb section -->


<div class="title-image" style="background-image: url(img/slider3.jpg);">
	  <div class="col-xl-12 pt-100">
          <div class="section-title text-center">
            <h2 class="mb-40">About Us<span></span></h2>
        </div> 
      </div>
</div>

<div class="page-title-area pb-40 ">
  <div class="container">
    <div class="row">
     <div class="col-xl-12">
        <div class="page-title text-center">
          <div class="row">
      
    </div>
       
            <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="about.php">about</a></li>
        </ol>
        </nav>
        <div class="col-8 offset-2 heading2">
        <h4 class="wow bounceInUp text-center"><i class="fa fa-quote-left"></i> It is a long established facthat reader will be distracted by the readable content page when looking at its layout. <i class="fa fa-quote-right"></i></h4>
        </div>
      </div>
     </div>
    </div>
  </div>
</div>


<section class="features-area pt-40 pb-100">
  	<div class="container">
  		<div class="row">
  			
  			<div class="col-xl-12  col-lg-7 text-justify">
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


<?php

require_once "inc/footer.php"; 

?>