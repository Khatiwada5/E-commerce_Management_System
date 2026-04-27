<!-- page to display all furniture in index pages. -->

<?php
$furniture = new Database_Table('furniture'); // create furniture object.
$category = new Database_Table('category'); //create category object.
$join_table = new Table_Join('images','furniture'); // joining furniture table and images table to extract images of the product.

// getting data from url of this page.
isset($_GET['id']); 
// storing data of url in a variable.
$id = $_GET['id'];

// checking if variable is empty.
if($id==''){
   $cat_id = $category->findFirstData(); // getting only first row from category table.
   foreach ($cat_id as $key) { // executing loop till the end of the data fetched.
     $id = $key['id']; // storing data to id.
   }
}

// geetting data when sorted for condtion.
// checking if go button is pressed or not.
if(isset($_POST['submit'])){
	$condition = $_POST['condition'];
	// if sorted then qurying only sorted data.
	$select_query = $furniture->findSortedData('categoryId',$id,'seen_status','Y','f_condition',$condition);// fetching data from furniture table.

}
else{
	// if not sorted then querying all data for concerned id.
	$select_query = $furniture->findUnhiddenData('categoryId',$id,'seen_status','Y'); // fetching data from furniture table.
	}

$title = 'furnitures'; // title of the page.
$select_category = $category->findAllData(); //fetching data from category table.
$join_query = $join_table->innerJoin('product_name','name');

// loading content of the template in the page.
$content = Template_Load('../html_templates/furniture_template.php', ['select_query'=>$select_query,'select_category'=>$select_category,'id'=>$id,'join_table'=>$join_query]);
?>