<!-- default layout provided by in the this assignment. -->

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/styles.css"/>
		<title>Fran's Furniture - <?php echo $title?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="../Javascript/validation.js"></script>
		<script type="text/javascript" src="../Javascript/ajax.js"></script>
		<script type="text/javascript" src="../ajax_files/delete_hide_ajax.js"></script>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Fran's Furniture</h1>

		</section>
	</header>
	<nav>
		<ul>
			<!-- all links of the page. -->
			<li><a href="../public_html">Home</a></li>
			<li><a href="furniture?id=">Our Furniture</a></li>
			<li><a href="about">About Us</a></li>
			<li><a href="contact">Contact us</a></li>
			<li><a href="FAQs">FAQs</a></li>
			<!-- changing navigation when user logged in. -->
			<?php  if(!isset($_SESSION['user_id'])):?>
			<li><a href="login">Login</a></li>
			<?php else:?><li><a href="add_furniture">admin</a></li>
            <?php endif;?>
		</ul>

	</nav>
<img src="../images/randombanner.php"/>
	<!-- displaying all body content here. -->
		<?php echo $content;?>
	
	<footer>
		<!-- auto update for copyright date. -->
		&copy; Fran's Furniture <?php echo date("Y");?>
	</footer>
</body>
</html>

