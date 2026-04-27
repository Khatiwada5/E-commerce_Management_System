
<div id="furniture">
		<!-- running loop to display all category of content for page. -->
	<?php
	foreach ($select_query as $get_value) {
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
    ?> 
</ul>
</div>