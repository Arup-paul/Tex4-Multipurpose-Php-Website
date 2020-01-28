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
				echo "<script>alert('Hello !');</script>";
				if(isset($_GET['id'])){
						$upid=$_GET['id'];
						$query1="SELECT * FROM we_care WHERE id='$upid'";
						$query2=mysql_query($query1);
						while($query3=mysql_fetch_assoc($query2)){

							$newid      =$query3['id'];
							$new_name   =$query3['name'];
							

							echo' 
									<h1>CONTACT US EDIT FORM</h1>
								<form action="we_care_edit.php" method="post">
								
											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$newid.'" name="id" >
											</div>

											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$new_name.'" name="mylist" >
											</div>

											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
											      <input type="submit" name="finalsubmit" class="upload" value="UPDATE INFO ">
											</div>
										
								</form>
								';
						}
					}
					else{
								echo "<script>alert('Coding Exist !');</script>";

						}
				if(isset($_POST['finalsubmit'])){
					$new_id       =$_POST['id'];
					$new_list     =$_POST['mylist'];
				

					$new_insert ="UPDATE we_care SET name ='$new_list' WHERE id='$new_id'";
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
					echo "<script>alert('Coding Exist !');</script>";

					}
				?>
		</div>
		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';
?>

