<!-- pages for add furniture as admin page of the website. -->

<?php
$category = new Database_Table('category'); // calling category table as object.
$furniture = new Database_Table('furniture'); // calling furniture table as object.
$images = new Database_Table('images'); // calling objects of images table as object.

// directing to login page if session not set.
 $user_id = $_SESSION['user_id']; // setting value of session on variable user_id.
// checking if user_id is empty or not.
  if($user_id==''){
    header('Location:login'); // directing to login page if session not set.
  }

// getting value of edit from the url of the page.
  if(isset($_GET['edit'])){ // checking if edit from url exists.
    $find_query = $furniture->findData('id', $_GET['edit']); // finding data from furniture table.
    $data = $find_query->fetch(); // fetching the data from the table.
  }

  else{
    $data=[]; // data empty if nothing found.
  }

// checking if submit button is pressed or not.
  if(isset($_POST['submit'])){

  	$index = 0; // index set tp 0.
    $target = "../images/furniture/"; // target location to store images.
   $image = [];
    // running till end of the file to be uploaded. 
    for ($i = 0; $i < count($_FILES['image']['name']); $i++) { 
        $valid_type = array("jpeg", "jpg", "png");  // checking valid extension for the image upload.
        $ext = explode('.', basename($_FILES['image']['name'][$i])); // getting the images. 
        $extension = end($ext); //getting extension of the images.
        $index = $index + 1; //increasing the index by 1.

// uploading images if extension is valid and images is in size.
        if (($_FILES["image"]["size"][$i] < 1000000) && in_array($extension, $valid_type)) {

          // uploading the images.
            if (move_uploaded_file($_FILES['image']['tmp_name'][$i],$target.basename($_FILES['image']['name'][$i]))) { //if file moved to uploads folder
              $a = basename($_FILES['image']['name'][$i]); // name of the image to be uploaded.
               $value=[
                 'image_name'=>basename($_FILES['image']['name'][$i]),
                 'product_name'=>$_POST['name'],
                 'id'=>$_POST['id']
               ];
              $image[$i] =  $a; // inserting image name into an array.

               $image_query = $images->saveData($value,'id'); // trying to update or insert images.
            } else { //if file was not moved.
                $msg = "Image cannot be uploaded.";// displaying image not uploaded messages.
            }
        }
        else { //if file size and file type was incorrect.
            $msg = "file name and extension incorrect"; // displaying error messages.
        }
    }
  
 if(count($image)==0){

// storing value obtained from the form.
    $values =[ // array named as $values.
      'name'=>$_POST['name'], // storing name.
      'description'=>$_POST['description'], // storing description.
      'price'=>$_POST['price'], // storing prices.
      'f_condition'=>$_POST['f_condition'], // storing condition.
      'categoryId'=>$_POST['categoryId'], // stroing category.
      'images'=>count($_FILES['image']['name']), //stroing number of images uploaded.
      'id'=>$_POST['id'] // storing id.
    ];
 }
 else{
//storing value obtained from the form.
    $values =[ // array named as $values.
      'name'=>$_POST['name'], // storing name.
      'description'=>$_POST['description'], // storing description.
      'price'=>$_POST['price'], // storing prices.
      'f_condition'=>$_POST['f_condition'], // storing condition.
      'categoryId'=>$_POST['categoryId'], // stroing category.
      'image_name' => implode(',', $image), // uploading image name.
      'images'=>count($_FILES['image']['name']), //stroing number of images uploaded.
      'id'=>$_POST['id'] // storing id.
    ];
}
    $insert_query = $furniture->saveData($values,'id'); // inserting the value from form in table.

    $msg = "sucessfully completed"; // messages to be displayed when sucessfully \
    header('Location:list_furniture?'.$msg); // directing to list_furniture page.
  }

$select_query = $category->findAllData(); // finding all data from category table.
$title = "add furnitue"; // title of the page.
$content = Template_Load('../html_templates/add_furniture_template.php', ['select_query'=>$select_query,'data'=>$data]);// loading content for the page.
?>