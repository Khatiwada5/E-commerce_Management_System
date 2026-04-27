<!-- template for login page of this website. -->

<main class="admin">
	<!-- displaying message that is appropriate -->
	<h2><?php  echo $info;?></h2>
<!-- login form of the system -->
		<form action="login" method="POST" style="padding: 40px" onsubmit="return validateLoginForm(this)">
			<!-- entering username -->
            <label>Enter Username</label><input type="text" name="username" />
            <!-- entering password -->
			<label>Enter Password</label><input type="password" name="password" />
<!-- input button for the form. -->
			<input type="submit" name="submit" value="Log In" style="margin-left: 19%;" />
			<!-- closing form -->
		</form>
		<!-- closing main -->
</main>	