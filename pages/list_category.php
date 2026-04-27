<!-- pages for list category at admin page of the website. -->

<?php
$title = "list category"; // title of the page.

$category = new Database_Table('category'); //callling category table as object.

 $user_id = $_SESSION['user_id']; //storing user_id from session.

 // checking if session is set or not.
  if($user_id==''){
    header('Location:login'); //directing to login page if session not set.
  }


  if(isset($_POST['id'])){
 		$delete_query = $category->deleteData('id',$_POST['id']); //deleting the object.
}

  $select_query = $category->findAllData(); //finding all data from category table.

$content = Template_Load('../html_templates/list_category_template.php', ['select_query'=>$select_query]);// loading content for the page.
?>