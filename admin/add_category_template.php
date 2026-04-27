<!-- template of add_category page where all HTML are present -->


		<!-- title in heading 2 -->
        <h2>Add Category</h2>

        <!-- form started -->
		<form action="add_category" method="POST">
			<input type="hidden" name="id" value="<?php if(isset($data['id'])) echo $data['id'];?>"> <!-- input for id and hidden -->
			<label>Name</label> <!-- label for name -->
			<input type="text" name="name" value="<?php if(isset($data['name'])) echo $data['name'];?>" required /> <!-- input for name and not hidden -->
			<input type="submit" name="submit" value="Done" style="margin-left: 22%;"/> <!-- submit button of the form -->

		<!-- form ended -->
		</form>

