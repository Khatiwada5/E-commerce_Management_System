<!-- pages for deafult page of the website. -->

<?php
$join_table = new Table_Join('offer','furniture'); // joining table named as offer and furniture.

$select_query = $join_table->innerJoin('product_id','id'); // joining the table.

	$title = 'Home Page'; //title of the page.
	$content = Template_Load('../html_templates/index_template.php', ['select_query'=>$select_query]); //calling content of the page.
?>	