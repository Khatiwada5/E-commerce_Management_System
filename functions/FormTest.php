<!-- functions to test if value enter for login form -->

<?php

   // function to check for field in login form

   function LoginForm($login){
   	$valid = true; // initially value set to true.

// checking if username is empty or not.
   	if($login['username'] ==''){
   		$valid = false; // value set to false if found empty.
   	}

// checking if password is empty or not.
   	if($login['password'] ==''){
   		$valid = false; // value set to false if found empty.
   	}

    return $valid; //returning $valid value.
  }


// function to check for field in category form
  function catgeoryFomTest($category){
    $valid = true; // initially value set to true.

    //checking if category name is empty or not.
    if($category['name'] == ''){
      $valid = false; // value set to false if found empty.
    }

    return $valid; //returning $valid value.
  }


// function to check for field in user form
   function userFormTest($users){
    $valid = true;// initially value set to true.

// checking if user_firstname is empty or not.
    if($users['user_firstname'] == ''){
      $valid = false; // value set to false if found empty.
    }

// checking if user_lastname is empty or not.
    if($users['user_lastname'] == ''){
      $valid = false; // value set to false if found empty.
    }

// checking if username is empty or not.
    if($users['username'] == '' ){
      $valid = false; // value set to false if found empty.
    }

// checking if password is empty or not.
    if($users['password'] == ''){
      $valid = false; // value set to false if found empty.
    }

// checking if confirm password is empty or not.
    if($users['password1'] == ''){
      $valid = false; // value set to false if found empty.
    }

// checking if confirm password matches password or not.
    if($users['password'] != $users['password1']){
      $valid =false; // value set to false if found empty.
    }
    return $valid; //returning $valid value.
   }




// function to check for field in contact form
   function contactFormTest($contact){
    $valid = true;// initially value set to true.

// checking if name is empty or not.
    if($contact['name'] == ''){
      $valid = false; // value set to false if found empty.
    }

// checking if user_lastname is empty or not.
    if($contact['email'] == ''){
      $valid = false; // value set to false if found empty.
    }

    // checking if user_lastname is empty or not.
    if($contact['tel_no'] == ''){
      $valid = false; // value set to false if found empty.
    }

  return $valid; // returning $valid value.
  }  


// function to check for field in offer form
  function offerFormTest($offer){

     $valid = true;// initially value set to true.

// checking if name is empty or not.
    if($offer['name'] == ''){
      $valid = false; // value set to false if found empty.
    }

    return $valid; //returning valid value.

  }




// function to check for field in furniture addition form
  function furnitureFormTest($furniture){

     $valid = true;// initially value set to true.

// checking if name is empty or not.
    if($furniture['name'] == ''){
      $valid = false; // value set to false if found empty.
    }


// checking if name is empty or not.
    if($furniture['description'] == ''){
      $valid = false; // value set to false if found empty.
    }

    // checking if name is empty or not.
    if($furniture['price'] == ''){
      $valid = false; // value set to false if found empty.
    }

// checking if price is entered in string or in number.
    if(is_string($furniture['price'])){
      $valid = false;
    }

    return $valid; //returning valid value.

  }
