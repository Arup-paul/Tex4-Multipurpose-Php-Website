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
						$edit_query="SELECT * FROM we_care WHERE id='$edit_id'";
						$run_edit=mysql_query($edit_query);
						while($edit_row=mysql_fetch_array($run_edit)){

						
							$new_location =$edit_row['name'];
							$new_text =$edit_row['we_care_detail'];
							

							echo' 
									<h1>WE CARE EDIT FORM</h1>
								<form action="home_update_edit.php" method="post">
								
											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$edit_row['id'].'" name="id" >
											</div>

											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$new_location.'" name="mylist" >
											</div>
											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$new_text.'" name="new_details" >
											</div>

											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
											      <input type="submit" name="we_care_update" class="upload" value="UPDATE INFO ">
											</div>
										
								</form>
								';
						}
					}



				if(isset($_POST['we_care_update'])){
					$new_id=$_POST['id'];
					$new_list=$_POST['mylist'];
					$new_detail=$_POST['new_details'];
				

					$new_insert ="UPDATE we_care SET list ='$new_list' , we_care_detail = '$new_detail'  WHERE id='$new_id'";
					if($new_return=mysql_query($new_insert)){
						echo '<script>alert("Data Updated !");</script>';
						header('Location:homeupdatestory.php');
					}
					else{
						echo "<script>alert('Nothing Update');</script>";
						echo mysql_error();
					}

				}
				else{
						echo "<script>alert('Nothing Update');</script>";

				}
				?>
		</div>
		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';
?>

