<!-- template og add_furniture page. -->

		<!-- title of the page. -->
    <h2>Furniture</h2>
    <!-- form in the page. -->
    <?php if(isset($data['id'])) $a =  $data['categoryId'];?>
		<form action="add_furniture" method="POST" enctype="multipart/form-data" onsubmit="return validateFurnitureForm(this)">
			<!-- input for id hidden. -->
			<input type="hidden" name="id" value="<?php if(isset($data['id'])) echo $data['id'];?>" />
			<!-- label and input for name. -->
			<label>Name</label><input type="text" value="<?php if(isset($data['name'])) echo $data['name'];?>" name="name" required/>
			<!-- label and input for description. -->
            <label>Description</label><textarea name="description" required><?php if(isset($data['description'])) echo $data['description'];?></textarea>
            <!-- label and input for price. -->
			<label>Price</label><input value="<?php if(isset($data['price'])) echo $data['price'];?>" type="text" name="price" required/>
			<!-- label and input for condition -->
			<label>Condition</label>
			<select name="f_condition">
				<?php if(isset($data['f_condition'])):?>
					<option value="<?php echo $data['f_condition']?>"><?php echo $data['f_condition']?></option> <!-- value of condition drop down. -->
					<?php if($data['f_condition'] == 'new'):?>
						<option value="second hand">Second Hand</option> <!-- value of condition drop down. -->
						<?php else:?>
							<option value="new">new</option> <!-- value of condition drop down. -->
					<?php endif;?>
					<?php else:?>
				<option value="new">New</option> <!-- value of condition drop down. -->
				<option value="second hand">Second Hand</option> <!-- value of condition drop down. -->
			<?php endif;?>
			</select>
			<!-- label for category. -->
			<label>Category</label>

			<!-- dropdown list for category. -->
			<select name="categoryId">

				<?php foreach ($select_query as $get_query):?>
					<!-- displaying required category when edited. -->
					<?php if($a == $get_query['id']):?>
				<option value="<?php echo $get_query['id'];?>" selected><?php echo $get_query['name'];?></option>
				<?php else:?>
					<!-- displaying regular category. -->
					<option value="<?php echo $get_query['id'];?>"><?php echo $get_query['name'];?></option>
					<!-- closing if statement. -->
				<?php endif;?>
				<!-- closing fetching of the data. -->
				<?php endforeach;?>
			</select>

        <div style="position: relative;display: flex;flex-direction: row; width: 100%;margin-top: 1%;padding: 2%;justify-content: space-evenly;">
        	
        	<br>
		<?php
			// displaying images if available.
			// checking if name exists.
            if(isset($data['image_name'])){
            	// checking if file exists.
            $a=explode(',', $data['image_name']); // exploding the images name and seperating the commas.
			if (file_exists('../images/furniture/'.$a[0])) {
			// displaying the images concerned. 

				// displaying other images of this furniture. 
				for($i=0;$i<$data['images'];$i++){
		            echo '<h3><a href="../images/furniture/' . $a[$i].'"><img style="width: 150px; height:100px; clear: both;" src="../images/furniture/' .$a[$i] .'"/></a></h3>';
	            }
			}
		}
		?>
	</div>
			
<!-- label for images. -->
			<label>Image</label>
			<div id="images">
				<input type="file" value="<?php if(isset($data['image_name'])) echo $data['image_name'];?>"  name="image[]" multiple />
				<input type="submit" name="submit" value="Done" style="margin-left: 22%;" />
			</div>
			<!-- closing the form. -->
		</form>
	<!-- section right closed. -->
