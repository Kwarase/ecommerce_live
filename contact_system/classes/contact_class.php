<?php
// contact phonte entiy
require ('../settings/db_class.php');
//add, edit, and delete class

class ContactPhoneClass extends db_connection
{
    function add_Contact($name,$phone_number)
    {
        // write the sql
        $sqlQuery= "INSERT INTO `phonebook`(`pname`, `pphoned`) VALUES ('$name','$phone_number')";
        //execute with method in db_connection
        return $this->db_query($sqlQuery);
    }
    //select all
    function select_all_contact()
    {
        $sqlQuery= "SELECT * FROM `phonebook`";
        return $this->db_fetch_all($sqlQuery);
    }

    //select one
    function select_one_contact($pid)
    {
        $sqlQuery="SELECT `pname`, `pphoned` FROM `phonebook` WHERE `pid`=$pid";
        return $this->db_fetch_one($sqlQuery);
    }
    
    // detele
    function delete_contact($contact_id)
    {
        $sqlQuery= "DELETE FROM `phonebook` WHERE `pid`= $contact_id";
        return $this->db_query($sqlQuery);
    }
    // update
    function update_contact($pid,$updated_full_name,$updated_phone_number)
    {
        $sqlQuery= "UPDATE `phonebook` SET `pname`='$updated_full_name',`pphoned`='$updated_phone_number' WHERE `pid`= $pid";
        return $this->db_query($sqlQuery);
    }
}



?>