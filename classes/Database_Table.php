<!-- class that carries out all functions related with database table -->

<?php
  // creating a class named Database_Table
  class Database_Table{
  	public $table; // attribute for class


// constructor of the class
  	function __construct($table){
		$this->table = $table;	
	}


//method to perform either update or insert. 
	function saveData($record, $pk = ''){
		 try{// trying to insert at first.
	        $this->insert($record); // trying to insert.
	    }
	    catch(Exception $e){
	    	// trying update when insert fail.
	        $this->update($record, $pk); // trying to update.
	    }
	}


// function to fetch all data from table.
   function findAllData() {
	    global $pdo; // global variable for database connection.
	    $select_query = $pdo->prepare("SELECT * FROM   $this->table LIMIT 10 "); // query to select all data.
	    $select_query->execute(); // executing the query.
	    return $select_query; // returning all value from query.
	   }


// function to fetch selected data from table.
   function findData($column, $value) {
	    global $pdo; // global variable for database connection.
	    $select_query = $pdo->prepare('SELECT * FROM '.$this->table.' WHERE '.$column.'=:value'); // query to select all data.

	    $criteria = [
	            'value' => $value
	        ];
	    $select_query->execute($criteria); // executing the query.
	    return $select_query; // returning all value from query.
	   }


// function to fetch seearched data from table.
   function findSearchData($column, $value) {
	    global $pdo; // global variable for database connection.

	    $select_query = $pdo->prepare("SELECT * FROM $this->table WHERE $column LIKE '$value'"); // query to select all data.

	   
	    $select_query->execute(); // executing the query.
	    return $select_query; // returning all value from query.
	   }


// function to fetch sorted data from table.
   function findUnhiddenData($column, $value,$column1,$value1) {
	    global $pdo; // global variable for database connection.
	    $select_query = $pdo->prepare("SELECT * FROM $this->table WHERE $column =:value AND $column1 =:value1"); // query to select all data.

	    $criteria = [
	            'value' => $value, // adding value to an array.
	            'value1' =>$value1 // adding value to an array.
	        ];
	    $select_query->execute($criteria); // executing the query.
	    return $select_query; // returning all value from query.
	   }


// function to fetch sorted data from table.
   function findSortedData($column, $value,$column1,$value1,$column2,$value2) {
	    global $pdo; // global variable for database connection.
	    $select_query = $pdo->prepare("SELECT * FROM $this->table WHERE ($column =:value AND $column1 =:value1) AND $column2=:value2"); // query to select all data.

	    $criteria = [
	            'value' => $value, // adding value to an array.
	            'value1' =>$value1, // adding value to an array.
	            'value2' =>$value2 // adding value to an array.
	        ];
	    $select_query->execute($criteria); // executing the query.
	    return $select_query; // returning all value from query.
	   }


// function to fetch first data from table.
   function findFirstData() {
	    global $pdo; // global variable for database connection.
	    $select_query = $pdo->prepare("SELECT * FROM   $this->table LIMIT 1"); // query to select first data.
	    $select_query->execute(); // executing the query.
	    return $select_query; // returning all value from query.
	   }


// function to insert data into the table.
	   function insert($record) {
	    global $pdo;  // global variable for database connection.
	    $ar_key = array_keys($record); // getting value of record in array.
	    $data = implode(', ', $ar_key); // imploding the array record.
	    $data_with_colon = implode(', :', $ar_key); // getting value with colon.
	    $insert_query = 'INSERT INTO '.$this->table.'('.$data.') VALUE(:'.$data_with_colon.')'; // preparing the query for execution.
	    $stmt_run = $pdo->prepare($insert_query);
	    $stmt_run->execute($record); // executing the prepared query.
	}


// function to update data into the table.
	function update($record, $pk) {
	    global $pdo; // global variable for database connection.
	    $update_value = []; // varibale array to store records.
	    foreach ($record as $key => $value) { // running the loop for update variable.
	        $update_value[] = $key . '= :'  . $key; // assigning value to vaiabel.
	      }

	    $valueWithComma = implode(', ', $update_value); // adding colon to the variable.
	    // query for running update statement.

	    $update_query = "UPDATE $this->table SET $valueWithComma WHERE $pk = :pk";
	     // assigning value of pk to variable record. 

	    $record['pk'] = $record[$pk];
	    // preparing the query.
	    $stmt_run = $pdo->prepare($update_query);

	    // running the query.
	    $stmt_run->execute($record);
	}


// function to delete concerned data from table.
   function deleteData($column,$value) {
	    global $pdo; // global variable for database connection.
	     $select_query = $pdo->prepare("DELETE FROM $this->table WHERE $column =$value"); // query to select all data.
	    $select_query->execute(); // executing the query.
	    return $select_query; // returning all value from query.
	   }
  }

?>