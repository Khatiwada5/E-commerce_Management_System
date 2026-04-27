<!-- Table Generator class to generate different table -->
<?php
class TableGenerator {  // table generator class created
	public $headings; //public variable defined.
    public $rows = []; //public variable defined.
    public $action=[]; //public variable defined.

 public function setHeadings($headings) { // function for headings
 $this->headings = $headings; //adding value to the variabel
}
 
 public function addRow($row) { //another function for row
 $this->rows[] = $row; // assigning value to the variable.
}

 public function addAction($action) { //another function for the action.
 $this->action[] = $action; //assigning value to the variable
}

 public function getHTML() { //making function for html generation 
  $res = '<table cellspacing="30">'; //table creation started.
 $res = $res . '<thead>'; //table head defined.
 $res = $res . '<tr>'; //table row defined.

 foreach ($this->headings as $heading) { //function for assigning heading
 $res = $res . '<th>' . $heading . '</th>'; // assigning variable 
}

$res = $res . '</tr>'; //closing the table headings
 $res = $res . '</thead>'; //closing table headings
 $res = $res . '<tbody>'; //closing table body.

 foreach ($this->rows as $row => $rows) {

 $res = $res . '<tr>'; //displaying the data.

 foreach ($rows as $key=>$cell) { //displaying the value for the data.
 	if(!is_numeric($key))$res = $res . '<td>' . $cell . '</td>';// enclosing the data in the table

   }
   if(!is_numeric($row)) $res .= $this->action[$row]; // addition edition and deletion button
}

$res = $res . '</tr>'; //closing row

$res = $res . '</tbody>'; //closing the body.
 $res = $res . '</table>'; //closing the table.
 return $res; //returning value for the table.
}
}

?>