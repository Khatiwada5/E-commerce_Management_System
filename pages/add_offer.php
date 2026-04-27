<!-- pages for  add offer page of the website. -->

<?php

$offer = new Database_Table('offer'); // calling offer table as an object.
$product = new Database_Table('furniture'); // calling furniture table as an object.

// getting value from the url of the page.
  if(isset($_GET['edit'])){ 
    $find_query = $offer->findData('id', $_GET['edit']); // finding data from category table.
    $data = $find_query->fetch(); // fetching the found table.
  }

  else{
    $data=[]; // data empty when url not found.
  }

// performing action when form submitted.
if(isset($_POST['submit'])){
	// array named as values
	$values=[
		
		'o_name'=>$_POST['name'], // name stored.
		'product_id'=>$_POST['product'], // product stored.
		'discount'=>$_POST['discount'], // discount stored.
		'o_update'=>$_POST['o_update'], //update stored.
		'id' => $_POST['id']
	];

	$insert = $offer->saveData($values,'id'); //inserting into the table.
	$msg = "sucessfully added"; // success messages.
	header('Location:offer?'.$msg); // directing to the page named offer.
}

    $find_query = $product->findAllData(); // finding all data from offer table.
	$title = ' Add Offer Page'; //title named as Add Offer Page.
	$content = Template_Load('../html_templates/add_offer_template.php', ['find_query'=>$find_query,'data'=>$data]); // loading content in template of the page.
?>	