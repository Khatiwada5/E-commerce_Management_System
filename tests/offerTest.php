<?php
// getting page named as formTest.php


   // class named as LoginTest
   class offerTest extends \PHPUnit_Framework_TestCase{

// function to check if name is empty or not.
   function testInvalidAll(){
// creating an array to fill it with all reuqired fields of the form.
   	$offer =[
   		'name'=>'', // keeping name empty.
   	];
   	$check = offerFormTest($offer); // checking for true or false value.
   	$this->assertFalse($check);
   }


// function to check if name is empty or not.
   function testValidAll(){
// creating an array to fill it with all reuqired fields of the form.
   	$offer =[
   		'name'=>'Vacation Offer', // keeping name empty.
   	];
   	$check = offerFormTest($offer); // checking for true or false value.
   	$this->assertTrue($check);
   }


   // function to check if name is empty or not.
   function testFromValidAll(){
// creating an array to fill it with all reuqired fields of the form.
   	$offer =[
   		'name'=>'Vacation Offer', // keeping name empty.
   		'product'=>1,
   		'discount'=>25,
   		'o_update'=>"This is a update"

   	];
   	$check = offerFormTest($offer); // checking for true or false value.
   	$this->assertTrue($check);
   }
}