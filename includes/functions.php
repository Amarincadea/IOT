<?php
function email_exists($email) 
{
	global $conn;

	$sql = "SELECT id FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	if($result->num_rows == 1 ) {
		return true;
	} else {
		return false;
	}
}
function get_optin_hod_count()
{
    global $conn;

    $sql = "SELECT * FROM optin WHERE hod_status LIKE '%Pending%' AND hr_status LIKE '%Pending%'";

    $result = $conn->query($sql);

    return $result->num_rows;

}
function get_optin_hr_count()
{
    global $conn;

    $sql = "SELECT * FROM optin WHERE hod_status LIKE '%Approved%' AND hr_status LIKE '%Pending%'";

    $result = $conn->query($sql);

    return $result->num_rows;

}


function get_name($email) {
	global $conn;

	$sql = "SELECT ename FROM employee WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["ename"];
}

function get_eid($email) {
    global $conn;

    $sql = "SELECT eid FROM employee WHERE email = '$email'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row["eid"];
}

function get_opt_base($tmp_des) {
    global $conn;

    $sql = "SELECT Base FROM designation WHERE Designation LIKE '%$tmp_des%'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row["Base"];
}

function get_lr_bal($eid) {
    global $conn;

    $sql = "SELECT lrbal FROM lraccount WHERE eid LIKE '%$eid%'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row["lrbal"];
}

function get_opt_emp_id($email) {
    global $conn;

    $sql = "SELECT Emp_id FROM optin WHERE Emp_email LIKE '%$email%'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row["Emp_id"];
}

function get_emp_doj($email) {
    global $conn;

    $sql = "SELECT doj FROM employee WHERE email LIKE '%$email%'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row["doj"];
}

function get_account_active_date($doj) {

    $date=date_create("$doj");
    date_add($date,date_interval_create_from_date_string("1095 days"));
    return date_format($date,"Y-m-d");
}

function get_dateDifference($get_doj , $curr_date , $differenceFormat = '%a' )
{
    $datetime1 = date_create($get_doj);
    $datetime2 = date_create($curr_date);

    $interval = date_diff($datetime1, $datetime2);

    return $interval->format($differenceFormat);

}

function get_opt_designation($email) {
    global $conn;

    $sql = "SELECT Designation FROM optin WHERE Emp_email = '$email'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row["Designation"];
}


function get_designation($email) {
    global $conn;

    $sql = "SELECT edesignation FROM employee WHERE email = '$email'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row["edesignation"];
}


function set_message($message) 
{
	if(!empty($message)){
		$_SESSION['message'] = $message;
	}else {
		$message = "";
	}
}

function display_message()
{
	if(isset($_SESSION['message'])) {
		echo $_SESSION['message'];

		unset($_SESSION['message']);
	}
}

function redirect($location){
	return header("Location: {$location}");
}

function validation_errors($error_message) 
{
$error_message = <<<DELIMITER

<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<strong>Warning!</strong> $error_message
 </div>
DELIMITER;

set_message($error_message);
}

function logged_in(){
	if(isset($_SESSION['email']) || isset($_COOKIE['email'])){
		return true;
	} else {
		return false;
	}
}

?>