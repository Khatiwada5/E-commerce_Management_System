<?php
// getting page named as formTest.php


   // class named as LoginTest
   class contactTest extends \PHPUnit_Framework_TestCase{

// function to check if name is empty or not.
   
   function testInvalidAll(){
   	// making an array of all possible input fields.
   	$contact = [
   		'name'=>'', //name is empty.
   		'email'=>'', //email is empty.
   		'tel_no'=>'' //tel_no is empty.
   	];

   	$check = contactFormTest($contact); //// checking valid datas .
   	$this->assertFalse($check); //returning value as assert made.
   }


// function to check if name is empty or not.
   
   function testInvalidName(){
   	// making an array of all possible input fields.
   	$contact = [
   		'name'=>'', //name is empty.
   		'email'=>'ram.khanal@gmail.com', //email is empty.
   		'tel_no'=>'+977 9867367622' //tel_no is empty.
   	];

   	$check = contactFormTest($contact); //// checking valid datas .
   	$this->assertFalse($check); //returning value as assert made.
   }


// function to check if name is empty or not.
   
   function testInvalidEmail(){
   	// making an array of all possible input fields.
   	$contact = [
   		'name'=>'Ram Khanal', //name is empty.
   		'email'=>'', //email is empty.
   		'tel_no'=>'+977 9867367622' //tel_no is empty.
   	];

   	$check = contactFormTest($contact); //// checking valid datas .
   	$this->assertFalse($check); //returning value as assert made.
   }


// function to check if name is empty or not.
   
   function testInvalidTel_no(){
   	// making an array of all possible input fields.
   	$contact = [
   		'name'=>'Ram Khanal', //name is empty.
   		'email'=>'ram.khanal@gmail.com', //email is empty.
   		'tel_no'=>'' //tel_no is empty.
   	];

   	$check = contactFormTest($contact); //// checking valid datas .
   	$this->assertFalse($check); //returning value as assert made.
   }


// function to check if name is empty or not.
   
   function testInvalidNameAndTel_no(){
   	// making an array of all possible input fields.
   	$contact = [
   		'name'=>'', //name is empty.
   		'email'=>'ram.khanal@gmail.com', //email is empty.
   		'tel_no'=>'' //tel_no is empty.
   	];

   	$check = contactFormTest($contact); //// checking valid datas .
   	$this->assertFalse($check); //returning value as assert made.
   }


// function to check if name is empty or not.
   
   function testInvalidNameAndEmail(){
   	// making an array of all possible input fields.
   	$contact = [
   		'name'=>'', //name is empty.
   		'email'=>'', //email is empty.
   		'tel_no'=>'+977 9867367622' //tel_no is empty.
   	];

   	$check = contactFormTest($contact); //// checking valid datas .
   	$this->assertFalse($check); //returning value as assert made.
   }

   // function to check if name is empty or not.
   
   function testInvalidTel_noAndEmail(){
   	// making an array of all possible input fields.
   	$contact = [
   		'name'=>'Ram Khanal', //name is empty.
   		'email'=>'', //email is empty.
   		'tel_no'=>'+977 9867367622' //tel_no is empty.
   	];

   	$check = contactFormTest($contact); //// checking valid datas .
   	$this->assertFalse($check); //returning value as assert made.
   }


   // function to check if name is empty or not.
   
   function testValidAll(){
   	// making an array of all possible input fields.
   	$contact = [
   		'name'=>'Ram Khanal', //name is empty.
   		'email'=>'ram.khanal@gmail.com', //email is empty.
   		'tel_no'=>'+977 9867367622' //tel_no is empty.
   	];

   	$check = contactFormTest($contact); //// checking valid datas .
   	$this->assertTrue($check); //returning value as assert made.
   }
}   