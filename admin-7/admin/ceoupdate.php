<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> C.E.O</h1>
				<h4>Overview, stats, chat and more</h4>
			</div>
			<a href="ceoupdatestory.php">C.E.O Update</a>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> C.E.O Page</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			
			<form action="" method="POST" enctype="multipart/form-data">
			

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
						<input type="text" class="form-control caption_text" name="ceo" placeholder="Type Your Name Here....">
				</div>


				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<input type="FILE" name="pimage" class="file_upload">
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<select name="typeselect" class="form-control departement">
						<option>SELECT POSITION TYPE</option>
						<option >C.E.O</option>
						<option >SOCIAL</option>
						<option>LAND-OWNER</option>
						<option>CLIENTS</option>
					</select>
				</div>

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
					<textarea name="details"  class="form-control file_upload" rows="3" placeholder="BLOG DETAILS TEXT TYPE HERE  ..."></textarea>
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
		$type=$_POST['typeselect'];
		$details=$_POST['details'];
		$details=mysql_real_escape_string($details);
		$ceo=$_POST['ceo'];

		$who_image=$_FILES['pimage']['name'];
		$img_tmp=$_FILES['pimage']['tmp_name'];
		$image_type=$_FILES['pimage']['type'];
		$temp=explode(".",$who_image);
		$newfile = time().'.'.end($temp);
		$who_image=basename($newfile);
		move_uploaded_file($img_tmp,"../../images/upload/".$who_image);

		$speech="INSERT INTO modal(name,image,details,type) VALUES ('$ceo','$who_image','$details','$type')";
		if($speech_run=mysql_query($speech)){
			echo '<script>alert("Speech Data Inserted !");</script>';
		}else{
			echo '<script>alert("Sorry Something Wrong in your Code !");</script>';

			echo mysql_error();
		}

	}				
?>

