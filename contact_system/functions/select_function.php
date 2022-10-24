<?php
include ('../controllers/general_controller.php');

function select_all()
{
    $select_all= new ContactPhoneClass;
    return $select_all->select_all_contact();
}

// function select_pname()
// {
//     $select_pname= new ContactPhoneClass;
//     return $select_pname->select_pname
// }

function select_one($a)
{
    $select_one= new ContactPhoneClass;
    return $select_one->select_one_contact($a);
}
?>