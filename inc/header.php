

<?php
require_once "connect.php"; 

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tex4 International Ltd</title>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/meanmenu.css">
   <link rel="stylesheet" type="text/css" href="css/animate.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/default.css">
   <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
    

        <!-- header section -->

    <div class="header-area d-flex align-items-center">
    	<div class="container">
    		<div class="row ">
    			<div class="col-xl-3 col-lg-3 col-md-12">
    				<div class="logo">
    					<a href="index.php"><img src="" alt="tex4 International Ltd"></a>
    				</div>
    			</div>
    					<div class="col-xl-8 col-lg-9 col-md-12">
    		                <div class="main-menu d-none d-md-block">
    		           	<nav>
    		           		<ul>
    		           			<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
    		           			<li><a href="product.php"><i class="fa fa-product-hunt"></i>Product Showcase <i class="fa fa-angle-down"></i></a>
                                   <ul class="submenu">
                                      <?php
                    $we_care_main="SELECT * FROM productcategory ORDER BY id DESC";
                    if($we_care_main1=mysql_query($we_care_main)){
                    while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
                      $empid         =$we_care_main2['id'];
                      $category      =$we_care_main2['category'];
                      echo '
                        <li>
                          <a href="product.php?category='.$category.'">'.$category.'</a>
                      ';
                      
                      $we_care_mai="SELECT * FROM product_subcategory WHERE category='$category' ORDER BY id DESC";
                      if($we_care_mai1=mysql_query($we_care_mai)){
                        if(mysql_num_rows($we_care_mai1)>0){
                          echo '<ul class="submenu">';
                          while ($we_care_mai2=mysql_fetch_assoc($we_care_mai1)) { 
                            $empid         =$we_care_mai2['id'];
                            $subcategory      =$we_care_mai2['subcategory'];
                            echo '<li><a href="product.php?category='.$category.'&subcategory='.$subcategory.'">'.$subcategory.'</a></li>';
                          }//Nested while end
                          echo '</ul>';

                        }
                      }//Nested if ends
                      echo '</li>';


                    }
                  }
             
                  ?>
                                   
                                   	
                                   	
                                   </ul> 

    		           			</li>
    		           			<li><a href="portfolio.php"><i class="fa fa-shopping-basket"></i>Portfolio </a></li>
    		           			<li><a href="about.php"><i class="fa fa-user"></i>About Us</a></li>
    		           			<li><a href="contact.php"><i class="fa fa-phone-square"></i>Contact us</a></li>
    		           		</ul>
    		           	</nav>
    		           </div>
    			</div>
          <div class="mobile-menu d-md-none ">
              <nav id="mobile-menu">
                      <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="product.php"><i class="fa fa-product-hunt"></i>Product Showcase <i class="fa fa-angle-down"></i></a>
                                <ul class="submenu">
                                      <?php
                    $we_care_main="SELECT * FROM productcategory ORDER BY id DESC";
                    if($we_care_main1=mysql_query($we_care_main)){
                    while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
                      $empid         =$we_care_main2['id'];
                      $category      =$we_care_main2['category'];
                      echo '
                        <li>
                          <a href="product.php?category='.$category.'">'.$category.'</a>
                      ';
                      
                      $we_care_mai="SELECT * FROM product_subcategory WHERE category='$category' ORDER BY id DESC";
                      if($we_care_mai1=mysql_query($we_care_mai)){
                        if(mysql_num_rows($we_care_mai1)>0){
                          echo '<ul class="submenu">';
                          while ($we_care_mai2=mysql_fetch_assoc($we_care_mai1)) { 
                            $empid         =$we_care_mai2['id'];
                            $subcategory      =$we_care_mai2['subcategory'];
                            echo '<li><a href="product.php?category='.$category.'&subcategory='.$subcategory.'">'.$subcategory.'</a></li>';
                          }//Nested while end
                          echo '</ul>';

                        }
                      }//Nested if ends
                      echo '</li>';


                    }
                  }
             
                  ?>
                                   
                                    
                                    
                                   </ul>     
                        </li>
                        <li><a href="portfolio"><i class="fa fa-shopping-basket"></i> Portfolio </a></li>
                        <li><a href="about.php"><i class="fa fa-diamond"></i> About Us</a></li>
                        <li><a href="contact.php"><i class="fa fa-phone-square"></i>Contact us</a></li>
                      </ul>
                    </nav>
          </div>
    		</div>	
    	</div>
    </div>