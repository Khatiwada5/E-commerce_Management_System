<!-- test for all login form fields. -->

<?php
// getting page named as formTest.php
   require 'functions/formTest.php';

   // class named as LoginTest
   class LoginTest extends \PHPUnit_Framework_TestCase{

// function to check if username is empty or not.
   	    public function testInvalidUsername(){
            // making an array of all possible input fields.
   	    	$login =[
               'username' =>'', //keeping username empty.
               'password' =>'admin', //keeping password.
   	    	];
   	    	$check = loginForm($login); // passing array to function loginForm.
   	    	$this->assertFalse($check); // checking value obtained from loginForm function.
   	    }


// function to check if password is empty or not.
   	     public function testInvalidPassword(){
            // making an array of all possible input fields.
   	    	$login =[
               'username' =>'admin',//keeping username.
               'password' =>'', //keeping password empty.
   	    	];
   	    	$check = loginForm($login);// passing array to function loginForm.
   	    	$this->assertFalse($check);// checking value obtained from loginForm function.
   	    }



// function to check if password is empty or not.
   	     public function testInvalidboth(){
            // making an array of all possible input fields.
   	      $login =[
              'username' =>'', //keeping username empty.
               'password' =>'', //keeping password empty.
            ];
            $check = loginForm($login); // passing array to function loginForm.
            $this->assertFalse($check); // checking value obtained from loginForm function.
   	    }

           public function testValidboth(){
            // making an array of all possible input fields.
            $login =[
              'username' =>'admin', //keeping username.
               'password' =>'admin', //keeping password.
            ];
            $check = loginForm($login); // passing array to function loginForm.
            $this->assertTrue($check); // checking value obtained from loginForm function.
          }

          // public function testValidUsers(){
          //   $login =[
          //     'username'=>'admin',
          //     'password'=>'admin'
          //   ];

          //   $check = confirmUser($login);
          //   $this->assertTrue($check);

          // }

   }
?>