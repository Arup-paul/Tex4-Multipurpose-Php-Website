<?php
	ob_start();
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-users"></i> Product</h1>
				<h4>Change the valuable Product</h4>
			</div>
			<?php
				if(isset($_GET['id'])){
						$edit_id=$_GET['id'];
						$edit_query="SELECT * FROM product WHERE id='$edit_id'";
						$run_edit=mysql_query($edit_query);
						while($edit_row=mysql_fetch_array($run_edit)){

						
							$myid =$edit_row['id'];
							$name  =$edit_row['name'];
							$productcat =$edit_row['productcat'];
							$details =$edit_row['details'];
							$pimage     =$edit_row['pimage'];
							

							echo' <h1>SPEECH  EDIT FORM</h1>
								<form action="" method="post" enctype="multipart/form-data">
								
											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none">
												<input type="text" class="form-control caption_text" value="'.$myid.'" name="id" >
											</div>


											<div class="form-group  col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$name.'" name="name" >
											</div>
											<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
													<select  value="'.$productcat.'" class="form-control departement">
														<option>'.$productcat.'</option>
														<option >Apples</option>
														<option >Dell</option>
														<option>Lenova</option>
													</select>
												</div>
												<div class="form-group  col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<textarea class="form-control caption_text" value="" name="new_details" rows="6" >'.$details.'</textarea>
											</div>
											
											<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none;">
												<input type="text" class="form-control caption_text" value="'.$pimage.'" name="image_old" >
											</div>

											<div class="form-group  col-lg-12 col-sm-12 col-md-12 col-xs-12" style="max-height:200px;overflow:hidden">
												<img src="../../images/upload/'.$pimage.'" >
											</div>

											<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="FILE" name="pimage" class="file_upload">
											</div>



											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
											      <input type="submit" name="we_care_update" class="upload" value="Update Message ">
											</div>
										
								</form>
								';
						}
					}


				if(isset($_POST['we_care_update'])){
					$new_id=$_POST['id'];
					$name1=$_POST['name'];
					$productcat=$_POST['productcat'];
					$details=$_POST['details'];
					$who_image=$_FILES['pimage']['name'];
					
				
					if(empty($who_image)){
						$new_insert ="UPDATE product SET name ='$name1' , productcat = '$productcat', details='$details' WHERE id='$new_id'";
						if($new_return=mysql_query($new_insert)){
							echo '<script>alert("Data Updated !");</script>';
							header('Location:productupdate.php');
						}
						else{
							echo "<script>alert('Nothing Update');</script>";
							echo mysql_error();
						}
					}else{
						//move_uploaded_file(filename, destination);
						$img_tmp=$_FILES['pimage']['tmp_name'];
						$image_type=$_FILES['pimage']['type'];
						$temp=explode(".",$who_image);
						$newfile = time().'.'.end($temp);
						$who_image=basename($newfile);
						move_uploaded_file($img_tmp,"../../images/upload/".$who_image);
						$new_insert ="UPDATE product SET name ='$name1' , productcat = '$productcat', details='$details', image='$who_image' WHERE id='$new_id'";
						if($new_return=mysql_query($new_insert)){
							//unlink(filename);//$image
							unlink('../../images/upload/'.$image_old);
							echo '<script>alert("Data Updated !");</script>';
							header('Location:productupdate.php');
						}
						else{
							echo "<script>alert('Nothing Update');</script>";
							echo mysql_error();
						}
					}
				}
				
				?>
		</div>
		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';
?>

