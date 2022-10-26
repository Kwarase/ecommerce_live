<?php

include ('../controllers/general_controller.php');
$pid= $_POST['pid'];
$updated_full_name= $_POST['updated_full_name'];
$updated_phone_number= $_POST['updated_phone_number'];

if(!update_controller($pid,$updated_full_name,$updated_phone_number)==true)
{
    echo 'did not update';
}else{
    header( "Location: ../view/form.php");
}

?>
