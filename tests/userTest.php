<?php
// getting page named as formTest.php


   // class named as LoginTest
   class UserTest extends \PHPUnit_Framework_TestCase{

// function to check if name and other  is empty or not.
   function testinvalidAll(){

   	$users =[
   		'user_firstname'=>'', //frstname is empty.
   		'user_lastname'=>'', //lastname is empty.
   		'username'=>'', //username is empty.
   		'password'=>'', //password is empty.
   		'password1'=>'' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }


// function to check if name and other  is empty or not.
   function testinvalidFirstname(){

   	$users =[
   		'user_firstname'=>'', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is not empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }



// function to check if name and other  is empty or not.
   function testinvalidLastname(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }



// function to check if name and other  is empty or not.
   function testinvalidUsername(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is empty.
   		'username'=>'', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }


// function to check if name and other  is empty or not.
   function testinvalidPassword(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }


// function to check if name and other  is empty or not.
   function testinvalidPassword1(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }


   // function to check if name and other  is empty or not.
   function testinvalidFirstnameAndLastname(){

   	$users =[
   		'user_firstname'=>'', //frstname is empty.
   		'user_lastname'=>'', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }



   // function to check if name and other  is empty or not.
   function testinvalidFirstnameAndUsername(){

   	$users =[
   		'user_firstname'=>'', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is empty.
   		'username'=>'', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }



   // function to check if name and other  is empty or not.
   function testinvalidFirstnameAndPassword(){

   	$users =[
   		'user_firstname'=>'', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }


   // function to check if name and other  is empty or not.
   function testinvalidFirstnameAndPassword1(){

   	$users =[
   		'user_firstname'=>'', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }


   // function to check if name and other  is empty or not.
   function testinvalidlastnameAndUsername(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'', //lastname is empty.
   		'username'=>'', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }


   // function to check if name and other  is empty or not.
   function testinvalidlastnameAndPassword(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }

   // function to check if name and other  is empty or not.
   function testinvalidlastnameAndPassword1(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.

   }

   // function to check if name and other  is empty or not.
   function testUsernameAndPassword(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.
  }



   // function to check if name and other  is empty or not.
   function testUsernameAndPassword1(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.
  }
   

  // function to check if name and other  is empty or not.
   function testPasswordAndPassword1Match(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'binayak1' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertFalse($check); // asserting boolean values.
  }  


  // function to check if name and other  is empty or not.
   function testValidAllData(){

   	$users =[
   		'user_firstname'=>'Binayak', //frstname is empty.
   		'user_lastname'=>'Dhakal', //lastname is empty.
   		'username'=>'binayak', //username is empty.
   		'password'=>'binayak', //password is empty.
   		'password1'=>'binayak' //password confirmation is empty.
   	];

   	$check = userFormTest($users); // checking valid datas .
   	$this->assertTrue($check); // asserting boolean values.
  }  
}