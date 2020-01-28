<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Product Subategory</h1>
				
			</div>
			<a href="productcategory.php">Product Category</a>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Product sub Category</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			
			<form action="" method="POST" enctype="multipart/form-data">
			

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
						<input type="text" class="form-control caption_text" name="subcategory" placeholder="Type Your Category name ....">
				</div><br>

				
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<select name="category" class="form-control departement">
						<option>SELECT Product Category</option>
					    <?php
						        $we_care_main="SELECT * FROM productcategory ORDER BY id DESC";
						        if($we_care_main1=mysql_query($we_care_main)){
						        while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
						          $empid         =$we_care_main2['id'];
						          $category      =$we_care_main2['category'];
						 
						      ?>
						<option value="<?php echo $category;?>"><?php echo $category;?></option>
						<?php } } ?>
					</select>
				</div>

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<input type="SUBMIT" name="service_insert" class="blogSubmit" value="Submit Category">
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



		$speech="INSERT INTO product_subcategory(category,subcategory) VALUES ('$category','$subcategory')";
		if($speech_run=mysql_query($speech)){
			echo '<script>alert("Product Inserted Succesfully !");</script>';
		}else{
			echo '<script>alert("Sorry Something Wrong in your Code !");</script>';

			echo mysql_error();
		}

	}				
?>

