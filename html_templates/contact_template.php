<!-- template for contact page  -->

<main class="home">
<!-- basic information of contact page. -->
	<p>Please call us on  01604 90345 or email in the link<a href="mailto:enquiries@fransfurniture.co.uk">enquiries@fransfurniture.co.uk</a><br><h2>Simply fill the form below for enquiry</h2></p>

<!-- form for enquiry in contact page. -->
		<form method="POST" action="" onsubmit="return validateContactForm(this)">
			<!-- label for name. -->
			<label>Name</label> <input type="text" name="name" required />
			<!-- label for email. -->
			<label>Email</label> <input type="email" name="email" required />
			<!-- label for tel-no -->
			<label>Tel no</label> <input type="text" name="tel_no" required/>
			<!-- label for enquiry -->
			<label>Enquiry</label>
			 <!--text area for enquiry  -->
			<textarea type="text" name="enquiry" /></textarea> 
			<!-- button for submission. -->
			<input type="submit" name="submit" value="submit" style="margin-left: 25%;"/>

		</form>

			
	</main>
