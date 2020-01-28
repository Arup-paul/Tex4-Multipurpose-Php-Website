<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Product</h1>
				<h4>Add Image & Product description</h4>
			</div>
			<a href="productupdate.php">Product Update</a>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Product Page</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			
			<form action="" method="POST" enctype="multipart/form-data">
			

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
						<input type="text" class="form-control caption_text" name="name" placeholder="Type Your product name ....">
				</div>



					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<select name="category" id="pcategory" class="form-control departement" onchange="return getSubcategory10()">
						<option>SELECT Product Category</option>
					    <?php
						        $we_care_main="SELECT * FROM productcategory ORDER BY id DESC";
						        if($we_care_main1=mysql_query($we_care_main)){
						        while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
						          $empid         =$we_care_main2['id'];
						          $category      =$we_care_main2['category'];     
						 
						      ?>
						<option value="<?php echo $category;?>"><?php echo $category;?>
							
						</option>
						<?php } } ?>
					</select>
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<select name="subcategory" class="form-control departement" id="psubcategory">
						<option>--Atfirst SELECT Category--</option>
					</select>
				</div>


				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
					<textarea name="details"  class="form-control file_upload" rows="3" placeholder="Product DETAILS TEXT TYPE HERE  ..."></textarea>
				</div>


				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<input type="FILE" name="pimage" class="file_upload">
				</div>
			



				
				

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<input type="SUBMIT" name="service_insert" class="blogSubmit" value="PROJECT INFO UPDATE">
				</div>
			</form>
		</div>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';

	if(isset($_POST['service_insert'])){
		$category=$_POST['category'];
		$subcategory=$_POST['subcategory'];
		$details=$_POST['details'];
		$details=mysql_real_escape_string($details);
		$name=$_POST['name'];

		$who_image=$_FILES['pimage']['name'];
		$img_tmp=$_FILES['pimage']['tmp_name'];
		$image_type=$_FILES['pimage']['type'];
		$temp=explode(".",$who_image);
		$newfile = time().'.'.end($temp);
		$who_image=basename($newfile);
		move_uploaded_file($img_tmp,"../../images/upload/".$who_image);


		


		$speech="INSERT INTO product(name,category,subcategory,details,pimage) VALUES ('$name','$category','$subcategory','$details','$who_image')";
		if($speech_run=mysql_query($speech)){
			echo '<script>alert("Product Inserted Succesfully !");</script>';
		}else{
			echo '<script>alert("Sorry Something Wrong in your Code !");</script>';

			echo mysql_error();
		}

	}				
?>

