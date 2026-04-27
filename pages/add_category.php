<!-- pages for add category as admin page of the website. -->

<?php
 $category = new Database_Table('category'); // calling category as object for table operation.
 $user_id = $_SESSION['user_id']; // getting user id from session.

// directing to login page when logged in fail.
  if($user_id==''){
    header('Location:login'); // directing to login page.
  }

// getting value from the url of the page.
  if(isset($_GET['edit'])){ 
    $find_query = $category->findData('id', $_GET['edit']); // finding data from category table.
    $data = $find_query->fetch(); // fetching the found table.
  }

  else{
    $data=[]; // data empty when url not found.
  }

// performing action when form is submitted.
  if(isset($_POST['submit'])){ // checking if submit button is pressed or not.
    // array to store value.
  	$values = [
  	'name' => $_POST['name'], // storing name.
    'id' => $_POST['id'] // storing array.
  ];

  $category->saveData($values,'id'); // saving data for either insert or update.
  $msg = "Sucessful"; // message is sucessful.
  header('Location:list_category?'.$msg); // directing to list_category page.
  }
  
$title = "add Category"; // title of the page.
$content = Template_Load('../html_templates/add_category_template.php', ['data'=>$data]);// loading content for the page.
?>