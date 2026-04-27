// function to validate several forms.

// function to validate login form.
  function validateLoginForm(form){
         if(form.username.value==''){ //checking if username is empty.
            alert('Username not entered'); // if empty displaying error message.
            form.username.focus(); // point to the porduct box.
            return false;
        }
 } 


 // function to validate contact form.
  function validateContactForm(form){
         if(form.name.value==''){ //checking if name is empty.
            alert('name not entered'); // if empty displaying error message.
            form.name.focus(); // point to the name box.
            return false;
        }

         if(form.enquiry.value==''){ //checking if name is empty.
            alert('Fill up your Enquiry'); // if empty displaying error message.
            form.enquiry.focus(); // point to the name box.
            return false;
        }

 }

  // function to validate add furniture form.
  function validateFurnitureForm(form){
      
         if(form.description.value==''){ //checking if name is empty.
            alert('Fill up Description'); // if empty displaying error message.
            form.description.focus(); // point to the name box.
            return false;
        }
            $price = form.price.value; // adding price insted of integer.
          if(isNaN($price)){ //checking if price is empty.
            alert('Enter price number correctly.'); // if empty displaying error message.
            form.price.focus(); // point to the name box.
            return false;
        }
 } 


  // function to validate add user form.
  function validateUserForm(form){
      
         if(form.password.value!=form.password1.value){ //checking if name is empty.
            alert('Password doesnot match'); // if empty displaying error message.
            form.password.focus(); // point to the name box.
            form.password1.value='';
            return false;
        }
 } 
 