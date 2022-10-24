<?php 
include ('../controllers/general_controller.php');
//1- check if the button was click (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['submit'])) {
    $full_name= $_POST['full_name'];
    $phone_number= $_POST['phone_number'];
    //call a controller
    
    add_controller($full_name,$phone_number);
    header( "Location: ../view/form.php ");
}

// the JS version is: let full_name = document.getElementByID('full_name')

//3- Connect to the database
//Check if the connection works then continue


//4- write SQL query
//     prepared statement to check if there is a match in the DB
//     if it does not fail, then insert the data
//     now execute the statement
// 5- check if the query worked
// 6- Return true or false




?>