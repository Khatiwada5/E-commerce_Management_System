<!-- pages for list all completed enquiry as admin page of the website. -->

<?php
 $user_id = $_SESSION['user_id']; // storing session user_id in $user_id.
 $enquiry = new Database_Table('enquiry'); //calling enquiry table as object.

 // checking if session is set of not.
  if($user_id==''){
    header('Location:login'); // directing to login page if session not set. 
  }
    
$select_query = $enquiry->findData('status','Y'); // getting all unhidden data from furniture table.
$title = "Completed enquiries"; // title of the page.
$content = Template_Load('../html_templates/complete_enquiry_template.php', ['select_query'=>$select_query]);// loading content for the page.
?>
