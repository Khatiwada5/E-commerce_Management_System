<?php
// getting page named as formTest.php


   // class named as LoginTest
   class categoryTest extends \PHPUnit_Framework_TestCase{

// function to check if name is empty or not.
   public function testInvalidname(){
   	    // making an array of all possible input fields.
   	    $category =[
            'id'=> '',
            'name' =>'', //keeping name empty.
   	    ];
   	    $check = catgeoryFomTest($category); // passing array to function loginForm.
   	    $this->assertFalse($check); // checking value obtained from loginForm function.
   }




// function to check if name is empty or not.
   public function testValidname(){
   	    // making an array of all possible input fields.
   	    $category =[
            'id'=>1,
            'name' =>'sofa', //keeping name empty.
   	    ];
   	    $check = catgeoryFomTest($category); // passing array to function loginForm.
   	    $this->assertTrue($check); // checking value obtained from loginForm function.
   }
}