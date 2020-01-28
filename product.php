<?php

require_once "inc/header.php"; 

?>


    <!-- breadcrumb section -->


<div class="title-image" style="background-image: url(img/slider2.jpg);">
    <div class="col-xl-12 pt-100">
          <div class="section-title text-center">
            <h2 class="mb-40">Product<span></span></h2>
        </div> 
      </div>
</div>

<div class="page-title-area pb-40">
  <div class="container">
    <div class="row">
     <div class="col-xl-12">
        <div class="page-title text-center">
          <div class="row">
      
    </div>
       
            <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="product.php">product</a></li>
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

<!-- page title end -->


<!-- product area start  -->

<div class="shop-area pt-40 pb-100">
  <div class="container">
      <div class="col-xl-12">

    <div class="shop-layout pt-40">
       <div class="shop-layout-bar clearfix"> 
           <ul class="nav shop-tab" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-th-large"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-list-ul"></i></a>
  </li>
</ul>
      
      <div class="filter">
        <select class="select" name="select" id="select">
          <option value="">Default sorting</option>
          <option value="">Default sorting 2</option>
          <option value="">Default sorting 3</option>
          <option value="">Default sorting 4</option>
        </select>
      </div> 
       </div>
   <div class="tab-content  pt-40" id="pills-tabContent">

         <!-- Gridbtab pane start -->
          <div class="tab-pane fade   show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">

              <?php
              if (isset($_GET['category']) && isset($_GET['subcategory'])) {
                $category=$_GET['category'];
                $subcategory=$_GET['subcategory'];
                $we_care_main="SELECT * FROM product WHERE category='$category' AND subcategory='$subcategory' ORDER BY id DESC";
              }
              else if (isset($_GET['category'])) {
                $we_care_main="SELECT * FROM product WHERE category='$category' ORDER BY id DESC";
              }
              else if (isset($_GET['subcategory'])) {
                $we_care_main="SELECT * FROM product WHERE subcategory='$subcategory' ORDER BY id DESC";
              }else{
                $we_care_main="SELECT * FROM product ORDER BY id DESC";
              }
  
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empid         =$we_care_main2['id'];
              $name      =$we_care_main2['name'];
              $category      =$we_care_main2['category'];
              $product_subcategory      =$we_care_main2['subcategory'];
              $details      =$we_care_main2['details'];
              $pimage      =$we_care_main2['pimage'];
              $pimage1      =$we_care_main2['pimage1'];
              
           
            ?>
              
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                 <div class="product-wrapper">
                    <div class="product-img pt-20">
                      <a href="#">
                        <img src="images/upload/<?php echo $pimage;?>" alt="product">
                        <img class="secondary-img" src="images/upload/<?php echo $pimage1;?>" alt="product">
                      </a>
                  
                    </div>
                    <div class="product-content text-center">
                      <h3><a href=""><?php echo $name;?></a></h3>
                       <span><?php echo $category;?></span>
                    </div>
                  </div>
              </div>
            
            <?php } } ?>
             
             
             
            </div>
          </div>


  <!-- Detail tab pane start -->
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
             <?php
  $we_care_main="SELECT * FROM product ORDER BY id DESC";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empid         =$we_care_main2['id'];
              $name      =$we_care_main2['name'];
              $category      =$we_care_main2['category'];
              $details      =$we_care_main2['details'];
              $pimage      =$we_care_main2['pimage'];
              $pimage1      =$we_care_main2['pimage1'];
              
           
            ?>
            <div class="row mb-30">
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                   <div class="product-wrapper">
                      <div class="product-img">
                        <a href="#">
                          <img src="images/upload/<?php echo $pimage;?>" alt="product">
                          <img class="secondary-img" src="images/upload/<?php echo $pimage1;?>" alt="product">
                        </a>                       
                      </div>
                    
                    </div>
              </div>
              <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
                  <div class="product-content shop-list">
                        <h3><a href=""><?php echo $name;?></a></h3>
                        <p><?php echo $details;?></p>
                        <span><?php echo $category;?></span>
                      </div>
              </div>
            </div>
          <?php }} ?>
          </div>


    


            </div>
       </div>
     </div>
   </div>
 </div>


</body>

<?php

require_once "inc/footer.php"; 

?>
