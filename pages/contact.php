<!-- pages for contact page of the website. -->

<?php
$enquiry = new Database_Table('enquiry'); //create enquiry object.
	
  // checking if form is submitted or not.
  if(isset($_POST['submit'])){ //checking if submit button is pressed or not.
    // calling array named as $values.
    $values =[
    	'name'=>$_POST['name'], //storing name.
    	'email'=>$_POST['email'], //storing email.
    	'tel_no'=>$_POST['tel_no'], //storing tel_no.
    	'enquiry'=>$_POST['enquiry'] //storing enquiry.
    ];

  $enquiry->insert($values); //inserting into enquiry table.
  $msg="enquiry submitted"; //message after sucessful insertion.
  header('Location:contact?'.$msg); // location directed to contact page.
  }

$title = 'Contact Page'; // title of the page.
$content = Template_Load('../html_templates/contact_template.php', []);// loading content for the page.
?>	