<!-- file to load all templates in index pages. -->

<?php
// craeting a function to load pages and its content.

	function Template_Load($page, $page_content){
		extract($page_content); // extracting page content from templates.
		ob_start(); // starting extraction.
		require $page; // requiring the page to be displayed.
		$content = ob_get_clean(); // cleaning the page.
		return $content; // returning content value.
	}