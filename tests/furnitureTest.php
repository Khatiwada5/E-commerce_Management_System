<?php
// getting page named as formTest.php


   // class named as LoginTest
   class furnitureTest extends \PHPUnit_Framework_TestCase{

// function to check if name is empty or not.
   	function testInvalidAll(){
   		// making an array of all possible input fields.

   		$furniture =[
   			'id'=>'', //id empty
   			'name'=>'', //name empty
   			'description'=>'', //description empty
   			'price'=>'', //price empty
   			'f_condition'=>'', //f_condition empty
   			'categoryId'=>'', //category id empty
   		];

   		$check = furnitureFormTest($furniture); // passing array to function loginForm.
   		$this->assertFalse($check); // checking with assert function
   	}


// function to check if name is empty or not.
   	function testInvalidName(){
   		// making an array of all possible input fields.

   		$furniture =[
   			'id'=>1, //id empty
   			'name'=>'', //name empty
   			'description'=>'This is description', //description empty
   			'price'=>675, //price empty
   			'f_condition'=>'new', //f_condition empty
   			'categoryId'=>1, //category id empty
   		];

   		$check = furnitureFormTest($furniture); // passing array to function loginForm.
   		$this->assertFalse($check); // checking with assert function
   	}



// function to check if name is empty or not.
   	function testInvalidDescription(){
   		// making an array of all possible input fields.

   		$furniture =[
   			'id'=>1, //id empty
   			'name'=>'Furniture', //name empty
   			'description'=>'', //description empty
   			'price'=>675, //price empty
   			'f_condition'=>'new', //f_condition empty
   			'categoryId'=>1, //category id empty
   		];

   		$check = furnitureFormTest($furniture); // passing array to function loginForm.
   		$this->assertFalse($check); // checking with assert function
   	}



// function to check if name is empty or not.
   	function testInvalidPrice(){
   		// making an array of all possible input fields.

   		$furniture =[
   			'id'=>1, //id empty
   			'name'=>'Furniture', //name empty
   			'description'=>'this is furniture', //description empty
   			'price'=>'', //price empty
   			'f_condition'=>'new', //f_condition empty
   			'categoryId'=>1, //category id empty
   		];

   		$check = furnitureFormTest($furniture); // passing array to function loginForm.
   		$this->assertFalse($check); // checking with assert function
   	}
 
// function to check if name is empty or not.
   	function testInvalidNameAndPrice(){
   		// making an array of all possible input fields.

   		$furniture =[
   			'id'=>1, //id empty
   			'name'=>'', //name empty
   			'description'=>'This is description', //description empty
   			'price'=>'', //price empty
   			'f_condition'=>'new', //f_condition empty
   			'categoryId'=>1, //category id empty
   		];

   		$check = furnitureFormTest($furniture); // passing array to function loginForm.
   		$this->assertFalse($check); // checking with assert function
   	}


// function to check if name is empty or not.
   	function testInvalidDescriptionAndPrice(){
   		// making an array of all possible input fields.

   		$furniture =[
   			'id'=>1, //id empty
   			'name'=>'furniture', //name empty
   			'description'=>'', //description empty
   			'price'=>'', //price empty
   			'f_condition'=>'new', //f_condition empty
   			'categoryId'=>1, //category id empty
   		];

   		$check = furnitureFormTest($furniture); // passing array to function loginForm.
   		$this->assertFalse($check); // checking with assert function
   	}


// function to check if name is empty or not.
   	function testInvalidPriceValue(){
   		// making an array of all possible input fields.

   		$furniture =[
   			'id'=>1, //id empty
   			'name'=>'furniture', //name empty
   			'description'=>'this is description', //description empty
   			'price'=>'34', //price empty
   			'f_condition'=>'new', //f_condition empty
   			'categoryId'=>1, //category id empty
   		];

   		$check = furnitureFormTest($furniture); // passing array to function loginForm.
   		$this->assertFalse($check); // checking with assert function
   	}


// function to check if name is empty or not.
   	function testValidPriceValue(){
   		// making an array of all possible input fields.

   		$furniture =[
   			'id'=>1, //id empty
   			'name'=>'furniture', //name empty
   			'description'=>'this is description', //description empty
   			'price'=>34, //price empty
   			'f_condition'=>'new', //f_condition empty
   			'categoryId'=>1, //category id empty
   		];

   		$check = furnitureFormTest($furniture); // passing array to function loginForm.
   		$this->assertTrue($check); // checking with assert function
   	}



// function to check if name is empty or not.
   	function testValidAll(){
   		// making an array of all possible input fields.

   		$furniture =[
   			'id'=>1, //id empty
   			'name'=>'furniture', //name empty
   			'description'=>'this is description', //description empty
   			'price'=>34, //price empty
   			'f_condition'=>'new', //f_condition empty
   			'categoryId'=>1, //category id empty
   		];

   		$check = furnitureFormTest($furniture); // passing array to function loginForm.
   		$this->assertTrue($check); // checking with assert function
   	}
}