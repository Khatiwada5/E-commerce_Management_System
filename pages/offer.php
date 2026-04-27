<!-- pages for offer page of the website. -->

<?php

$offer = new Database_Table('offer'); //calling offer table as object.

// performign action when delete button pressed.
if(isset($_POST['id'])){ //checking if delete button is pressed or not.
	$delete = $offer->deleteData('id',$_POST['id']); //deleting the concerned data.
}

$select_query = $offer->findAllData(); //finding all data from offer table.
$title = 'Offer Page'; //title of the page.
$content = Template_Load('../html_templates/offer_template.php', ['select_query'=>$select_query]); //loading all content of the page from offer template.
?>	