//  ajax and jquery combined to delte row from list table without page load.

// ajax and j query to delete row from category table.  
function categoryDelete(del_id){
  // displaying confirm message box to ensure deletion.
  if(confirm('!!!! Please Confirm Delete Action !!!!')){
//  calling ajax function if user wants to delete the row specified.
        $.ajax({
//  assigning all necessary data.
              type:'POST', // assigning type as POST
              url:'list_category', // assigning url where action is to be performed.
              data:{id:del_id}, // getting data from the form.
              success:function(data){ // performing action when successful data fetched.
             
             //  removing delted row from the table.
                  $('#delete'+del_id).hide('slow');

              }
         });
      }
    }

// ajax for category deletion completed.


// ajax and j query to delete row from user table.  
function userDelete(del_id){
  //  calling ajax function if user wants to delete the row specified.
  if(confirm('!!!! Please Confirm Delete Action !!!!')){
//  calling ajax function if user wants to delete the row specified.
        $.ajax({
//  assigning all necessary data.
              type:'POST', // assigning type as POST
              url:'list_user', // assigning url where action is to be performed.
              data:{id:del_id}, // getting data from the form.
              success:function(data){ // performing action when successful data fetched.
             
             //  removing delted row from the table.
                  $('#delete'+del_id).hide('slow');

              }

         });
      }
    }

// ajax for user deletion completed.


// ajax and j query to delete row from furniture table.  
 function userFurniture(del_id){
  //  calling ajax function if user wants to delete the row specified.
  if(confirm('!!!! Please Confirm Delete Action !!!!')){
//  calling ajax function if user wants to delete the row specified.
        $.ajax({
//  assigning all necessary data.
              type:'POST', // assigning type as POST
              url:'list_furniture', // assigning url where action is to be performed.
              data:{id:del_id}, // getting data from the form.
              success:function(data){ // performing action when successful data fetched.
             
             //  removing delted row from the table.
                  $('#delete'+del_id).hide('slow');

              }

         });
      }
    }
// ajax for furniture deletion completed.


// ajax and j query to complete row from enquiry table.  
 function completeEnquiries(del_id){
      //  calling ajax function if user wants to delete the row specified.
  if(confirm('are You sure?')){
//  calling ajax function if user wants to delete the row specified.
        $.ajax({
//  assigning all necessary data.
              type:'POST', // assigning type as POST
              url:'list_enquiry', // assigning url where action is to be performed.
              data:{id:del_id}, // getting data from the form.
              success:function(data){ // performing action when successful data fetched.
             
             //  removing delted row from the table.
                  $('#delete'+del_id).hide('slow');

              }

         });
      }
    }
// ajax for enquiry completion  completed.



// ajax and j query to delete row from offer table.  
 function deleteOffer(del_id){
  //  calling ajax function if user wants to delete the row specified.
  if(confirm('!!!! Please Confirm Delete Action !!!!')){
//  calling ajax function if user wants to delete the row specified.
        $.ajax({
//  assigning all necessary data.
              type:'POST',  // assigning type as POST
              url:'offer', // assigning url where action is to be performed.
              data:{id:del_id}, // getting data from the form.
              success:function(data){ // performing action when successful data fetched.
             
             //  removing delted row from the table.
                  $('#delete'+del_id).hide('slow');

              }

         });
      }
    }
    // ajax for offer deletion completed.