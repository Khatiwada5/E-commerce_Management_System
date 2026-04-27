<!-- pages for add furniture as admin page of the website. -->

<?php
 $users = new Database_Table('users'); // creating object of users table.
 $user_id = $_SESSION['user_id']; // getting user id from session.

// checking is session is set or not.
  if($user_id==''){
    header('Location:login'); // directing to login page if session not set.
  }

// performing action when submite button is pressed.
  if(isset($_POST['submit'])){
    // array named as values.
  	$values=[
  		'user_firstname'=> $_POST['user_firstname'], //storing firstname.
  		'user_lastname' =>$_POST['user_firstname'], //storing lastname.
  		'username' => $_POST['username'], //stroing username.
  		'password' => password_hash($_POST['password'],PASSWORD_DEFAULT) //encrypting password with password hash and storing in password.
  	];

  	$users->insert($values); //inserting into the table.
    $msg = 'User_has_been_added';
  	header('Location:list_user?msg='.$msg); //directing to list_user page.
  }
  
$title = "add users"; // title of the page.
$content = Template_Load('../html_templates/add_user_template.php', []);// loading content for the page.
?>