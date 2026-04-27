<!-- class that carries out all functions related with database table -->

<?php
  // creating a class named Table_Join
  class Table_Join{
  	public $table1; // attribute for class
  	public $table2; // attribute for class

// constructor of the class
  	function __construct($table1,$table2){
		$this->table1 = $table1; // assigning value to attribute.
		$this->table2 = $table2; //assigning value to attribute.		
	}


//function to conduct inner join of database tables.
     function innerJoin($column1,$column2){
     	  global $pdo; // global variable for database connection.
	    $join_query = $pdo->prepare("SELECT * FROM   $this->table1 t1 JOIN $this->table2 t2 ON t1.$column1=t2.$column2"); // query to join tables.

	    $join_query->execute(); // executing the query.
	    return $join_query; // returning all value from query.
     } 
 }
 ?>