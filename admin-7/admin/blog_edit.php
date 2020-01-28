<?php
	ob_start();
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> BLOG list</h1>
				<h4>BLOG History A-Z</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> BLOG list below</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<?php
				if(isset($_GET['id'])){
						
						$edit_id=$_GET['id'];
						$edit_query="SELECT * FROM blog WHERE id='$edit_id'";
						$run_edit=mysql_query($edit_query);
						while($edit_row=mysql_fetch_array($run_edit)){

							$id          =$edit_row['id'];
							$blogname    =$edit_row['blogname'];
							$type        =$edit_row['type'];
							$image       =$edit_row['image'];
							$blog_text   =$edit_row['blog_text'];

							echo' 
									<h1>CONTACT US EDIT FORM</h1>
								<form action="" method="post">
								
											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$id.'" name="id" >
											</div>

											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$blogname.'" name="blog_name" >
											</div>

											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$type.'" name="type" >
											</div>

											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$image.'" name="image" >
											</div>

											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$blog_text.'" name="btext" >
											</div>

										
											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
											      <input type="submit" name="update" class="upload" value="UPDATE INFO ">
											</div>
										
								</form>
								';
						}
					}



				if(isset($_POST['update'])){
					$new_id     =$_POST['id'];
					$blog_name  =$_POST['blog_name'];
					$type       =$_POST['type'];
					$image      =$_POST['image'];
					$btext      =$_POST['btext'];

					$new_insert ="UPDATE blog SET blogname ='$blog_name', type='$type' , image='$image' , blog_text ='$btext' WHERE id='$new_id'";
					if($new_return=mysql_query($new_insert)){
						echo '<script>alert("Data Updated !");</script>';
						header('Location:contact_update_story.php');
					}
					else{
						echo "<script>alert('Nothing Update');</script>";
						echo mysql_error();
					}

				}
				?>
		</div>
		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';
?>

