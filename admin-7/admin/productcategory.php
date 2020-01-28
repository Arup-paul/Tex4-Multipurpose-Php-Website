<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Product Category</h1>
				
			</div>
			<a href="productsubcategory.php">Product sub category</a>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Product Sub-Category</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			
			<form action="" method="POST" enctype="multipart/form-data">
			

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
						<input type="text" class="form-control caption_text" name="category" placeholder="Type Your Category name ....">
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



		$speech="INSERT INTO productcategory(category) VALUES ('$category')";
		if($speech_run=mysql_query($speech)){
			echo '<script>alert("Product Inserted Succesfully !");</script>';
		}else{
			echo '<script>alert("Sorry Something Wrong in your Code !");</script>';

			echo mysql_error();
		}

	}				
?>

