<!-- template for index page. -->
<main class="home">

<h2>New Offers with Exclusive Discounts</h2>
<hr>

<!-- displaying all categories of furnitures -->
		<ul class="furniture">
			<!-- displaying all offer under furniture index. -->
			<?php foreach ($select_query as $get_value) {
// displaying images of the product.
		    echo '<li>';
            echo '<h1>'.$get_value['o_name'].'</h1>'; //displaying name of the offer.
            echo '<br>';
            $a=explode(',', $get_value['image_name']);
// checking if images exists.
		if (file_exists('../images/furniture/' . $a[0])) {
			echo '<a href="../images/furniture/' . $a[0].'"><img style="width: 300px;height: 300px" src="../images/furniture/' . $a[0].'" /></a>';
			$name = $get_value['name'].'jpg';
		}

		// displaying all other details.
		echo '<div class="details">';
		echo '<h2>' . $get_value['name'] . '</h2>'; //displaying name of the product.
		echo '<h3>£' . $get_value['price'] . '</h3>'; //displaying price.
		echo '<h3>Disount ' . $get_value['discount'] .'%'. '</h3>'; //displaying discound amount.
		echo  '<h4>'.$get_value['o_update'].'</h4>'; //displaying discound amount.
		echo '<h3>' . $get_value['f_condition'] . '</h3>'; //displaying condition
		echo '<h4>' . $get_value['date_added'] . '</h4>'; // displaying date added.
		echo '<p>' . $get_value['description'] . '</p>'; //displaying description
		// displaying all angles of images available.
		for($i=1;$i<$get_value['images'];$i++){
		echo '<h3><a href="../images/furniture/' . $a[$i].'"><img style="width: 80px;height: 80px" src="../images/furniture/' . $a[$i].'"/></a></h3>';
	     }
		echo '</div>';
		echo '</li>';
	}
	?> 
			
     </ul>
	<!-- ending the section. -->
</main>
