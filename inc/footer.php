
 <footer>
  <div class="footer-area pt-100 pb-80">
    <div class="container">
      <div class="row">

        
        <div class="col-12">
          <div class="footer-widget">
            <h3>About</h3>
              
            <ul class="footer-link row  wow slideInRight" data-wow-duration="1s" data-wow-delay=".1s"">
               <?php   $we_care_main="SELECT * FROM footer_link ORDER BY id DESC";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empid         =$we_care_main2['id'];
              $empname      =$we_care_main2['title'];
              $url      =$we_care_main2['url'];
            
            
         
        ?>
            <li class="col-12 col-lg-3 col-xl-3 col-md-4 col-sm-6"><a href="<?php echo $url; ?>"><?php echo $empname; ?></a></li>
              <?php } } ?>
            </ul>
              
          </div>
        </div>
    
      
      
       
        </div>
      </div>
    </div>
  
   
   <div class="footer-bottom-area">
     <div class="container">
       <div class="footer-border">
         <div class="row">
           <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12  wow slideInRight" data-wow-duration="1s" data-wow-delay=".1s"">
             <div class="footer-menu">
              <p>powerd by : <a href="appsmakerbd.com">Apps maker BD</a> & &copy;copyright-Tex4 International Ltd </p>
             </div>
           </div>
           <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12  wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s"">
             <div class="footer-icon text-center text-md-center text-lg-right">
               <span>Contact with us:</span>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-skype"></i></a>
               <a href="#"><i class="fa fa-vimeo"></i></a>
               <a href="#"><i class="fa fa-facebook"></i></a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

</footer>




	 











  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/owl.carousel.min.js"></script>
 <script src="js/bootstrap.min.js" ></script>
 <script src="js/popper.js"></script>
   <script src="js/isotope.pkgd.min.js" type="text/javascript"></script>
  <script src="js/isotop.js" type="text/javascript"></script>
   <script src="js/wow.js" type="text/javascript"></script>
   <script type="text/javascript">
     new WOW().init(); 
   </script>
    <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
 <script src="js/main.js"></script>


</body>
</html>