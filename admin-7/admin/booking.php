<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-users"></i> Contact Form Feedback</h1>
				<h4>Vistor feedback from contact form</h4>
			
		</div>

		
			<table  class="table table-bordered">
				<tr>
					<th>Full Name</th>
					<th>Phone/Mobile</th>
					<th>Email </th>
					<th>Detail</th>
					<th>Sent Date </th>
				</tr>
				<?php 

					$message="SELECT * FROM message ORDER BY id DESC";
					if($message1=mysql_query($message)){
						
						while ($message2=mysql_fetch_assoc($message1)) {
						$name=$message2['name'];
						$phone=$message2['phone'];
						$email=$message2['email'];
						$image=$message2['image'];
						$utext=$message2['utext'];
						$date=$message2['update_date'];
					
					echo '<tr>
							<td> 
								
									<h4> '.$name.'</h4>
								
							</td>
							
							<td>
								
								 	<h4> '.$phone.'</h4>
								
							</td>

							<td> 
								
									<h4> '.$email.'</h4>
								
							</td>

							<td>
								 
								 	<p>'.$utext.'</p>
								 
							</td>

							


							<td> 
								
									<p> '.$date.'</p>
								
							</td>
						</tr>';
				} }?>
			</table>
		

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
		
</div>

<?php
	require_once 'footer.php';
?>

