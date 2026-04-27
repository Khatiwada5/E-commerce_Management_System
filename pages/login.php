<!-- login page for this website. -->

<?php
$info = 'log In'; //info text.
 $users = new Database_Table('users'); // creating users table object.
 
// performing action when form submitted.
if(isset($_POST['submit'])){
	$uname = $_POST['username']; // getting the username from the form.
	$select_query= $users->findData('username',$uname);//fetch data for that particular username.

 if($select_query->rowCount()>0){ //checking if data in table exists.
 	$row=$select_query->fetch(); //fecthing the row from the table.
  // storing all value in session
 	 $_SESSION = [
 	  'user_id'=>$row['user_id'], // storing user_id
    'username' => $_POST['username'], // storing username
    'password' =>$_POST['password'], // storing password
    'user_firstname'=>$row['user_firstname'] // storing userfirstname
  ];

// checking if both username and password is correct or not.
    if(($row['username']=='admin' && $row['password']=='admin')|| $_SESSION['username']==$row['username'] && password_verify($_SESSION['password'],$row['password'])){ // verifying both username and password.
          // header('Location:add-category.php'); // directing admin to the backend.
    	header('Location:add_furniture');
    }
    else{
      $info = 'Username or Password Incorrect'; // displaying cannot log in to the users
    }    
 }
else	$info = 'cannot log in . You are not a user.'; // displaying error messages.
}

$title = 'Login Page'; //title of the page.
$content = Template_Load('../html_templates/login_template.php', ['info'=>$info]);
// loading content of the page from login_template.
?>