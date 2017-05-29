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
    //updating request
    $sql ="UPDATE optin SET hr_status='Approved', hr_appr_date=now() WHERE Emp_email LIKE '%$email%'";
    $conn->query($sql);

    $tmp_des=get_opt_designation($email);
    //Fetching lr base amount
    $base_amount=get_opt_base($tmp_des);
    $emp_id=get_opt_emp_id($email);


    //creating lrp account
    $sql = "INSERT INTO lraccount (eid, lrbal)
		VALUES ('$emp_id', $base_amount)";

    $conn->query($sql);


}
