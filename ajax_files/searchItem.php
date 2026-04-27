<!-- page to search item or furniture and display it in furniture page. -->
<!-- php action started here. -->

<?php
	$title = 'Furnitures'; // title of the page.
	require '../classes/Database_Table.php';
	require '../database_connection/connect.php'; //connection of the database to website.
	require '../functions/Template_Load.php'; // loading required template to index pages.
	

	$furniture = new Database_Table('furniture'); // creating furniture object of furniture table.
	

	if(isset($_POST['search'])){
		$search = '%'.$_POST['search'].'%'; // storing data on variable.
	
		$search_query = $furniture->findSearchData('name',$search); // searching required data.
	    
	}
    if($search_query->rowCount()>0 && $search!=''){
	foreach ($search_query as $get_value) {
// displaying images of the product.
		echo '<li>';

// checking if images exists.

		$a=explode(',', $get_value['image_name']);
		if (file_exists('../images/furniture/' . $a[0])) {
			echo '<a href="../images/furniture/' . $a[0] . '"><img style="width: 200px;height: 200px" src="../images/furniture/' . $a[0] . '" /></a>';
			$name = $get_value['name'].'jpg';
		}
	

		// displaying all other details.
		echo '<div class="details">';
		echo '<h2>' . $get_value['name'] . '</h2>'; //displaying name.
		echo '<h3>£' . $get_value['price'] . '</h3>'; //displaying price.
		echo '<h3>' . $get_value['f_condition'] . '</h3>'; //displaying condition.
		echo '<p>' . $get_value['description'] . '</p>'; //displaying description.

		
		for($i=1;$i<$get_value['images'];$i++){ //displaying all images of different angles.
		echo '<h3><a href="../images/furniture/' . $a[$i].'"><img style="width: 80px;height: 80px" src="../images/furniture/' . $a[$i].'"/></a></h3>';
	    }
		echo '</div>';
		echo '</li>';
	}
}
else{
	 echo '<h1>No Product Found</h1>';
	}
    ?> 

</ul>


		
