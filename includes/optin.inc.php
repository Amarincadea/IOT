
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $eid = $_POST['eid'];
    $des = $_POST['des'];
    $emailid = $_POST['email'];

    $sql = "SELECT * FROM optin WHERE Emp_email = '$emailid' AND Emp_id = '$eid'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Sorry You have already placed Opt-In request.</p></div>');


    } else {
        $sql = "INSERT INTO optin (Emp_id, Emp_email, Designation, date_added, hod_status, hr_status)
		VALUES ('$eid','$emailid','$des', now(),'Pending','Pending')";

        if ($conn->query($sql) === TRUE) {
            set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Thank you,your request is accepted.</p></div>');
        }
    }
}
?>