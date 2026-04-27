<!-- pages for list furniture as admin page of the website. -->

<?php
$furniture = new Database_Table('furniture'); //calling furniture table as object.
 $user_id = $_SESSION['user_id']; // storing user_id from session in variable.

// checking if session is set or not.
  if($user_id==''){
    header('Location:login'); // directing page to login page if session not set.
  }

// getting value from the url of the page.
  if(isset($_POST['id'])){ //checking if del value exists.
    $delete_query = $furniture->deleteData('id',$_POST['id']); // deleting any concern data.
  }

// getting hide vale from url of the page.
   if(isset($_GET['hide'])){ //checking if hide value exists.
   	$status = $_GET['status']; // storing hide value in variable.

   	if($status =='Y'){ //checking if $status value is Y
   		$status = 'N'; //changing value to N.
   	}
   	else{
   		$status = 'Y'; //changing vale to Y.
   	}

// array named as $value to store data.
   	$values =[
   		'seen_status'=>$status, //storing seen_status.
   		'id'=>$_GET['hide'] //storing id.
   	];

   	$edit_query = $furniture->saveData($values,'id'); //editing concerned data.
   	 $msg = "Sucessful"; //deleting messages.
     header('Location:list_furniture?'.$msg); //directing to the page named as list_furniture.
   }


  $select_query = $furniture->findAllData(); // finding all data from furniture table.
$title = "add furnitue"; // title of the page.
$content = Template_Load('../html_templates/list_furniture_template.php', ['select_query'=>$select_query]);// loading content for the page.
?>