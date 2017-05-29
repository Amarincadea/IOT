<?php
/**
 * Created by PhpStorm.
 * User: RameshA
 * Date: 5/18/2017
 * Time: 3:19 PM
 */

if(isset($_POST['hod']))
{

    global $conn;
    $email		= $_POST['email'];

    $sql ="UPDATE optin SET hod_status='Approved', hod_appr_date=now() WHERE Emp_email LIKE '%$email%'";
    $result = $conn->query($sql);


}

?>