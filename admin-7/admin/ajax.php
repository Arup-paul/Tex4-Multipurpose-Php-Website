<?php


require_once "../connect.php";
if (isset($_POST['npcategory'])) {
	$category = $_POST['npcategory'];
	$subcategoryall='<option>SELECT Product Sub Category</option>';

		$we_care_main="SELECT * FROM product_subcategory WHERE category = '$category' ORDER BY id DESC";
		if($we_care_main1=mysql_query($we_care_main)){
			while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
			  $empid=$we_care_main2['id'];
			  $category=$we_care_main2['category'];     
			  $subcategory=$we_care_main2['subcategory'];     
			  $subcategoryall.='<option value="'.$subcategory.'">'.$subcategory.'</option>';
			} 
		}

	echo $subcategoryall;
}


?>