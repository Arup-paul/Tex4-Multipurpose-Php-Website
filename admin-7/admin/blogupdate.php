<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Home</h1>
				<h4>Overview, stats, chat and more</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Home</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

					<select name="blog_type" class="form-control departement">
						<option>SELECT BLOG CATEGORY</option>
						<option>ON GOING PROJECT</option>
						<option>HAND-OVER PROJECT</option>
						<option>REAL ESTATE</option>
						<option>BEST PROJECT</option>
					</select>

				</div>

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
				      <input type="text" class="form-control caption_text" name="blog_name" placeholder="BLOG NAME  TYPE HERE..">
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">

				    <textarea name="blog_text"  class="form-control caption_text" rows="3" placeholder="BLOG DETAILS TEXT TYPE HERE  ..."></textarea>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					
						<input type="FILE" name="blogimage" class="file_upload">
				</div>

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<input type="SUBMIT" name="service_insert" class="blogSubmit" value="BLOG INFO UPDATE">
				</div>
			</form>
		</div>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';


		if(isset($_POST['service_insert'])){
		$blog_name     	 =$_POST['blog_name'];
		$blog_type     	 =$_POST['blog_type'];
		$blog_text       =$_POST['blog_text'];

		$who_image		 =$_FILES['blogimage']['name'];
		$img_tmp         =$_FILES['blogimage']['tmp_name'];
		$image_type      =$_FILES['blogimage']['type'];
		$temp            = explode(".",$who_image);
		$newfile         = time().'.'.end($temp);
		$who_image       =basename($newfile);


		move_uploaded_file($img_tmp,"../../images/upload/".$who_image);




		$service_insert = "INSERT INTO blog(blogname,type,image,blog_text) VALUES('$blog_name','$blog_type','$who_image','$blog_text')";

		if($service_insert1=mysql_query($service_insert)){
					echo "<script>alert('Sir ! Your Service Information Also Updated . Thank You');</script>";

		}else{
				echo mysql_error();
			}
	}else{
				echo mysql_error();
			}

?>

