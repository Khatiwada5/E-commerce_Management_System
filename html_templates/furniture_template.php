<!-- page template to display all content of beds. -->

<!-- main started. -->
<main class="admin">

<!-- left section of the page. -->
	<section class="left">
		<input type="text" name="search" id="search" style="padding: 3%; width: 140px;border-radius: 25px;" placeholder="search for item.....">
		<br><br>
		<!-- displaying all categories of furnitures -->
		<ul>
			<!-- displaying all category under furniture index. -->
			<?php
			// running a loop to display all category.
                foreach($select_category as $getcategory):?>
                	<!-- comapring id taken from url of the page. -->
            	    <?php if($getcategory['id'] == $id):?>
            	    	<!-- displaying the content of category -->
                    <li class = "current"><a href="furniture?id=<?php echo $getcategory['id'];?>"><?php echo $getcategory['name'];$name =$getcategory['name'];?></a></li>
                    <?php else:?>

                    <!-- displaying the content of category -->
                     <li><a href="furniture?id=<?php echo $getcategory['id'];?>"><?php echo $getcategory['name']; ?></a></li>
                        <!-- ending if statement -->
                    <?php endif;?>

                    <!-- ending the loop -->
			<?php endforeach;?>
			<!--ending ul listing  -->
		</ul>

		<!-- ending the section. -->
	</section>

<!-- another section started in the page. -->
	<section class="right">
<!-- displaying title for the page. -->
		<h1><?php echo $name ;?></h1>

	<ul class="furniture">
		<!-- adding a sorting filter  -->
		<h3 style="display:flex;flex-direction: row; width: 100%;">Sort By
			<!-- adding a form in the page for sorting. -->
		<form  method="POST"  action="furniture?id=<?php echo $id;?>" style="display:inline-block;position: relative; margin-top: 1%;">
			<!-- selection of drop down for sorting among new and second hand. -->
		<select name="condition">
			<!-- values in the drop down list. -->
		<option disabled selected>--- Undefined ---</option>
		<option value = "new" name = "condition" >New</option>
		<option value="second hand" name = "condition">Second-hand</option>
		<!-- drop down list completed. -->
		</select>
		<!-- submission button for the sorting form. -->
		<input type="submit" name="submit" value="Go"style="margin-left: 100%; margin-top: -23%; width:50px;">
		<!-- form completed. -->
        </form>
        <!-- line break. -->
        <br>

        </h3>

		<!-- running loop to display all category of content for page. -->
		<div id="furniture">
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

<!-- section completed. -->
</section>
<!-- main completed. -->
</main>