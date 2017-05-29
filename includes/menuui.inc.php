
<?php
if(isset($_POST['led1_on']))
{
  $email=$_SESSION['email'];
    $status=$_POST['status'];
    $pin=$_POST['pin'];
    $sql = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";


    system("sudo gpio mode 7 out");
    system("sudo gpio write 7 1");


    if ($conn->query($sql) === TRUE) {
        set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Light 1 is turned On</p></div>');
    }
}

if(isset($_POST['led1_off']))
{
    $email=$_SESSION['email'];
    $status=$_POST['status'];
    $pin=$_POST['pin'];
    $sql1 = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

    system("sudo gpio mode 7 out");
    system("sudo gpio write 7 0");

    if ($conn->query($sql1) === TRUE) {
        set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Light 1 is turned Off</p></div>');
    }
}

if(isset($_POST['led2_on']))
{
    $email=$_SESSION['email'];
    $status=$_POST['status'];
    $pin=$_POST['pin'];
    $sql = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

    system("sudo gpio mode 1 out");
    system("sudo gpio write 1 1");

    if ($conn->query($sql) === TRUE) {
        set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Light 2 is turned On</p></div>');
    }
}

if(isset($_POST['led2_off']))
{
    $email=$_SESSION['email'];
    $status=$_POST['status'];
    $pin=$_POST['pin'];
    $sql1 = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

    system("sudo gpio mode 1 out");
    system("sudo gpio write 1 0");

    if ($conn->query($sql1) === TRUE) {
        set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Light 2 is turned Off</p></div>');
    }
}

if(isset($_POST['fan_on']))
{
    $email=$_SESSION['email'];
    $status=$_POST['status'];
    $pin=$_POST['pin'];
    $sql = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

    system("sudo gpio mode 2 out");
    system("sudo gpio write 2 1");

    if ($conn->query($sql) === TRUE) {
        set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Fan is turned On</p></div>');
    }
}

if(isset($_POST['fan_off']))
{
    $email=$_SESSION['email'];
    $status=$_POST['status'];
    $pin=$_POST['pin'];
    $sql1 = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

    system("sudo gpio mode 2 out");
    system("sudo gpio write 2 0");

    if ($conn->query($sql1) === TRUE) {
        set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Fan is turned Off</p></div>');
    }
}
?>