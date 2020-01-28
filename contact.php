<?php

require_once "inc/header.php"; 

?>




 <!-- breadcrumb section -->


<div class="title-image" style="background-image: url(img/slider1.jpg);">
    <div class="col-xl-12 pt-100">
          <div class="section-title text-center">
            <h2 class="mb-40">Contact Us<span></span></h2>
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
          <li class="breadcrumb-item active" aria-current="page"><a href="contact.php">Contact</a></li>
        </ol>
        </nav>
        <div class="col-8 offset-2 heading2">
        <h4 class="wow bounceInUp text-center"><i class="fa fa-quote-left"></i> We are always happy to here <i class="fa fa-quote-right"></i></h4>
        </div>
      </div>
     </div>
    </div>
  </div>
</div>

<!-- page title end -->

<!-- google map area start -->

 <div class="pt-100 pb-100">
   <div class="container">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.791740093788!2d91.8205663144939!3d22.361491185291825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8856fc23ef3%3A0x6d833a294f95909e!2sApps+Maker+BD!5e0!3m2!1sen!2sbd!4v1556878923530!5m2!1sen!2sbd" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
 </div>





<section class="contact-area pt-40">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12">
        <div class="contact-details">
          <div class="contact-details-text">
            <h2><i class="fa fa-map-marker"></i>OFFICE ADDRESS</h2>
            <p>Mirpur DOHS, Dhaka</p>
          </div>
          <div class="contact-details-text">
            <h2><i class="fa fa-envelope"></i>email</h2>
            <p>tex4international@gmail.com</p>
          </div>
          <div class="contact-details-text">
            <h2><i class="fa fa-phone"></i>phone number</h2>
            <p>12345670000</p>
          </div>
          <div class="contact-details-text">
            <h2><i class="fa fa-clock-o"></i>time hours</h2>
            <p>Monday to Friday: 10am to 7pm <br>
              Saturday: 10am to 4pm <br>
              Sunday: 12am to 4pm</p>
          </div>
        </div>
      </div>



      <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12">
        
        <div class="contact-details-text">
            <h2><i class="fa fa-comment-o"></i>Leave a comments</h2>
         <div class="contact-form">
  <?php
        
  if(isset($_POST['reg'])){

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $subject=$_POST['subject'];

    $insert = "INSERT INTO message(name,phone,email,message,subject) VALUES ('$name','$phone','$email','$message','$subject')";

    if($insert_run=mysql_query($insert)){
      echo "<script>alert('Message Insert Succesfully !');</script>";
      
    }
    else{
      echo mysql_error();
    }
  }
  else{
      echo mysql_error();
    }
    ?>

          <form action="" method="post">
            <label>Your Name (required)</label>
            <input type="text" placeholder="Enter Your Name" name="name">
            <label>Your Phone Number</label>
            <input type="text" placeholder="Enter Your phone number" name="phone">
             <label>Your Email (required)</label>
            <input type="email" placeholder="Enter Your Email" name="email">
             <label>YourMessage</label>
            <textarea id="message" cols="50" rows="10" placeholder="message" name="message"></textarea>
            <label>Subject</label>
            <input type="text" placeholder="Enter Your Subject" name="subject">
            <button name="reg" type="submit">Send</button>
          </form>
      </div>
      </div>
    </div>
  </div>
</section>

 <?php

require_once "inc/footer.php"; 

?>
