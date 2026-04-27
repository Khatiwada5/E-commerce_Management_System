<!-- default index page of this website. -->

<?php
    session_start(); // starting a session 

// extracting and requiring different files for proper functioning.
    require '../classes/TableGenerator.php'; // getting table generator.
    require '../classes/Database_Table.php'; // getting all classes for table action.
    require '../classes/Table_Join.php'; // getting all classes for table action.
	require '../database_connection/connect.php'; //connection of the database to website.
	require '../functions/Template_Load.php'; // loading required template to index pages.
	

	if(isset($_GET['msg'])){ //  display the message
		echo $_GET['msg']; // displaying message if message is displayed.
	}

	if(isset($_GET['page'])){ // if page is get from the url then displaying the page.
		require '../pages/' . $_GET['page'] . '.php'; // calling the required page from the page folder.
	}
	else{
		require '../pages/home.php'; // calling home page as default page when other page is not called.
	}

// preparing content of the page to be loaded.
	$page_content = [
		'title' => $title, // title of the page.
		'content' => $content // content of the page.
	];
	// loading the template.
	echo Template_Load('../html_templates/default_layout.php', $page_content);
?>
