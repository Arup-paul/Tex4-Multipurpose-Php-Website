<?php
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
			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>User Name</th>
				        <th>Position TYPE</th>
				        <th>User Image</th>
				        <th>user Text</th>
				        <th>User POST DATE</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$sqlforuser="SELECT * FROM modal ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($data=mysql_fetch_assoc($run)) {
							$id        =$data['id'];
							$name  =$data['name'];
							$type      =$data['type'];
							$image     =$data['image'];
							$details =$data['details'];
							$date      =$data['addedate'];
							echo '<tr>
								 	<td>'.$id.'</td>
							        <td>'.$name.'</td>
							        <td>'.$type.'</td>
							        <td><img src="../../images/upload/'.$image.'" alt="Here is uploaded image" width="300px" height="150px"> </td>
							        <td>'.$details.'</td>
							        <td>'.$date.'</td>
							        <td>
								        <a href="ceo_edit.php?id='.$id.'">EDIT</a>
								    </td>
								    <td>
								         <a href="ceo_delete.php?id='.$id.'">DELETE</a>
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

