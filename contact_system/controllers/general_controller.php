<?php
//connect to the user account class
include("../classes/contact_class.php");

//sanitize data



//--INSERT--//

function add_controller($a,$z)
{
$add_record= new ContactPhoneClass;
return $add_record->add_Contact($a,$z);


}

function delete_controller($contact_id)
{
    $delete_record= new ContactPhoneClass;
    return $delete_record->delete_contact($contact_id);
}

function update_controller($pid,$updated_full_name,$updated_phone_number)
{
    $update_record= new ContactPhoneClass;
    return $update_record->update_contact($pid,$updated_full_name,$updated_phone_number);
}

//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>