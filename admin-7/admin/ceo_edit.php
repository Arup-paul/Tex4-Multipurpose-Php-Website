<?php
	ob_start();
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-users"></i> CEO Message</h1>
				<h4>Change the valuable Message of CEO/Founder/Proprietor</h4>
			</div>
			<?php
				if(isset($_GET['id'])){
						$edit_id=$_GET['id'];
						$edit_query="SELECT * FROM modal WHERE id='$edit_id'";
						$run_edit=mysql_query($edit_query);
						while($edit_row=mysql_fetch_array($run_edit)){

						
							$myid =$edit_row['id'];
							$name =$edit_row['name'];
							$type =$edit_row['type'];
							$image =$edit_row['image'];
							$details =$edit_row['details'];
							

							echo' <h1>SPEECH  EDIT FORM</h1>
								<form action="ceo_edit.php" method="post" enctype="multipart/form-data">
								
											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none">
												<input type="text" class="form-control caption_text" value="'.$myid.'" name="id" >
											</div>


											<div class="form-group  col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="text" class="form-control caption_text" value="'.$name.'" name="name" >
											</div>
											<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none;">
												<input type="text" class="form-control caption_text" value="'.$image.'" name="image_old" >
											</div>

											<div class="form-group  col-lg-12 col-sm-12 col-md-12 col-xs-12" style="max-height:200px;overflow:hidden">
												<img src="../../images/upload/'.$image.'" >
											</div>

											<div class="form-group col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<input type="FILE" name="pimage" class="file_upload">
											</div>


											<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none">
												<input type="text" class="form-control caption_text" value="'.$type.'" name="mylist" >
											</div>
											<div class="form-group  col-lg-12 col-sm-12 col-md-12 col-xs-12">
												<textarea class="form-control caption_text" value="" name="new_details" rows="6" >'.$details.'</textarea>
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
					$image_old=$_POST['image_old'];
					$new_image=$_FILES['imagepro']['name'];
					$new_detail=$_POST['new_details'];
					$type1=$_POST['mylist'];
					$who_image=$_FILES['pimage']['name'];
					
				
					if(empty($who_image)){
						$new_insert ="UPDATE modal SET name ='$name1' , details = '$new_detail', type='$type1' WHERE id='$new_id'";
						if($new_return=mysql_query($new_insert)){
							echo '<script>alert("Data Updated !");</script>';
							header('Location:ceoupdatestory.php');
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
						$new_insert ="UPDATE modal SET name ='$name1' , details = '$new_detail', type='$type1', image='$who_image' WHERE id='$new_id'";
						if($new_return=mysql_query($new_insert)){
							//unlink(filename);//$image
							unlink('../../images/upload/'.$image_old);
							echo '<script>alert("Data Updated !");</script>';
							header('Location:ceoupdatestory.php');
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

