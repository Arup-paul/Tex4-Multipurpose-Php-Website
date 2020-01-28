<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Product list</h1>
				<h4>Product History A-Z</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Product list below</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>Product Name</th>
				        <th>Product Category</th>
				        <th>Details</th>
				        <th>Image</th>
				        <th>Date</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$sqlforuser="SELECT * FROM product ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($data=mysql_fetch_assoc($run)) {
							$id        =$data['id'];
							$name  =$data['name'];
							$productcat      =$data['productcat'];
							$details =$data['details'];
							$pimage     =$data['pimage'];
							$date = $data['date'];
							echo '<tr>
								 	<td>'.$id.'</td>
							        <td>'.$name.'</td>
							        <td>'.$productcat.'</td>
							        <td>'.$details.'</td>
							        <td><img src="../../images/upload/'.$pimage.'" alt="Here is uploaded image" width="300px" height="150px"> </td>
							        <td>'.$date.'</td>
							        <td>
								        <a href="product_edit.php?id='.$id.'">EDIT</a>
								    </td>
								    <td>
								         <a href="product_delete.php?id='.$id.'">DELETE</a>
								    </td>
							      </tr>
								';
						}
					}
			    	?>
			     


			    </tbody>
			</table>
			
		</div>

		

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
	</div>

<?php
	require_once 'footer.php';
?>

