<!-- pages for list user at admin page of the website. -->

<?php
$users = new Database_Table('users'); //calling user table as an object.
 $user_id = $_SESSION['user_id']; //storing user_id from session in variable.
 // checking if session is set or not.
  if($user_id==''){
    header('Location:login'); // directing to login page if session not set.
  }
  
  // getting del value from url page. 
 if(isset($_POST['id'])){ //checking if del value exists or not.
    if($_POST['id'] == $_SESSION['user_id']){
      $msg = 'cannot delete this user. Currently signed in.';
      header('Location:list_user?msg='.$msg);
    }
    else{
    $delete_query = $users->deleteData("user_id",$_POST['id']); //deletng the concerned data.
    $msg = " User Deleted"; // deleted message.
  }
}


$select_query = $users->findAllData(); // finding all data from user table.
$title = "list users"; // title of the page.
$content = Template_Load('../html_templates/list_user_template.php', ['select_query'=>$select_query]);// loading content for the page.
?>