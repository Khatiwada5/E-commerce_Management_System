<!-- pages for list enquiry as admin page of the website. -->

<?php
 $user_id = $_SESSION['user_id']; // storing user id from session in variable.
 $enquiry = new Database_Table('enquiry'); //calling enquiry table as an object.

 // checking if session is set or not.
  if($user_id==''){
    header('Location:login'); // directing to login page if session not set.
  }

// getting confirmation text from the url page.
  if(isset($_POST['id'])){ //checking if confirmation text exists.
    // array to store values.
  	$values = [
  		'status'=>'Y', //status stored.
  		'user' => $_SESSION['user_firstname'], //storing firstname.
  		'id' => $_POST['id'] //storing id.
  	];

  	$update_query = $enquiry->update($values,'id'); //updating the enquiry table.
  }

  $select_query = $enquiry->findData('status','N'); //finding all data from enquiry table whose status is N.
$title = "enquiries"; // title of the page.
$content = Template_Load('../html_templates/list_enquiry_template.php', ['select_query'=>$select_query]);// loading content for the page.
?>