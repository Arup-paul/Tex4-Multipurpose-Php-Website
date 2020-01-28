<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-users"></i> Enquiry Form Feedback</h1>
				<h4>Vistor feedback from enquiry form</h4>
			
		</div>

		
			<table  class="table table-bordered">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Phone/Mobile</th>
					<th>Email </th>
					<th>Company</th>
					<th>Country</th>
					<th>Detail</th>
					<th>Sent Date </th>
				</tr>
				<?php 

					$message="SELECT * FROM enquiry ORDER BY id DESC";
					if($message1=mysql_query($message)){
						
						while ($message2=mysql_fetch_assoc($message1)) {
						$id=$message2['id'];
						$name=$message2['name'];
						$lname=$message2['lname'];
						$phone=$message2['phone'];
						$email=$message2['email'];
						$country=$message2['country'];
						$company=$message2['company'];
						$utext=$message2['utext'];
						$date=$message2['update_date'];
					
					echo '<tr>
							<td> <p> '.$name.'</p></td>					
							<td> <p> '.$lname.'</p></td>					
							<td> <p> '.$phone.'</p></td>					
							<td> <p> '.$email.'</p></td>					
							<td> <p> '.$company.'</p></td>					
							<td> <p> '.$country.'</p></td>					
							<td> <p> '.$utext.'</p></td>					


							<td> 
								
									<p> '.$date.' <a class="btn btn-sm btn-danger" href="enquiry.php?delete='.$id.'" title="Delete Post"> <i class="fa fa-times-circle "></i> Delete</a></p>
									
								
							</td>
						</tr>';
				} }?>
			</table>
		

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
		
</div>

<?php
	if(isset($_GET['delete'])){
		$pid=$_GET['delete'];
		$del_query="DELETE FROM enquiry WHERE id='$pid'";
		if($del_query_del=mysql_query($del_query)){
			echo "<script>alert('Information DELETED Successfully!!');</script>";
		}else{
			echo mysql_error();
		}

	}
	require_once 'footer.php';
?>

