<?php

require_once "inc/header.php"; 

?>


 <!-- breadcrumb section -->


<div class="title-image" style="background-image: url(img/slider1.jpg);">
    <div class="col-xl-12 pt-100">
          <div class="section-title text-center">
            <h2 class="mb-40">Portfolio<span></span></h2>
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
          <li class="breadcrumb-item active" aria-current="page"><a href="portfolio.php">portfolio</a></li>
        </ol>
        </nav>
        <div class="col-8 offset-2 heading2">
        <h4 class="wow bounceInUp text-center"><i class="fa fa-quote-left"></i> It is a long established facthat reader will be distracted by the readable content page when looking at its layout.<i class="fa fa-quote-right"></i></h4>
        </div>
      </div>
     </div>
    </div>
  </div>
</div>



  <section class="portfolio-area mb-60 mt-60">
       <div class="container">
            <div class="row">
          <div class="col-12">
                   



                         <div id="filters" class="button-group text-center">  <button class="button is-checked" data-filter="*">All</button>
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
  </section>


<?php

require_once "inc/footer.php"; 

?>