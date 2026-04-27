<!-- page template for add_user page. -->


		<!-- title of the page. -->
        <h2>Add Users</h2>
            <!-- form added for adding users. -->
			<form action="add_user" method="POST" onsubmit="return validateUserForm(this)">
				<!-- label for first name. -->
				<label>First Name</label><input type="text" name="user_firstname" required />
				<!-- label for last name. -->
                <label>Last Name</label><input type="text" name="user_lastname" required/>
                <!-- label for Username. -->
                <label>Username</label><input type="text" name="username" required />
                <!-- label for Password. -->
                <label>Password</label><input type="Password" name="password"  required/>
                <!-- label for Confirm password. -->
                <label>Confirm Password</label><input type="Password" name="password1" required/>
                <!-- submit button for the form -->
				<input type="submit" name="submit" value="Add User" style="margin-left: 22%;" />
				<!-- closing the form -->
			</form>
