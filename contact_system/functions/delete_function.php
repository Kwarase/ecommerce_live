<?php 
include ('../controllers/general_controller.php');
function delete() 
{
    //get the id
    $pid=$_GET['pid'];
    if(!delete_controller($pid)==true){
        echo 'Not deleted';
    }else {
        header( "Location: ../view/form.php ");
    }
    
    

}
delete();

?>