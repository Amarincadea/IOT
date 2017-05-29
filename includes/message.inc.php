
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $image = $_POST['image'];
    $email = $_POST['email'];
    $des   = $_POST['des'];
    $message = $_POST['message'];
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp,"media/".$file_name);
    $sql = "INSERT INTO message (src_email, dest_email, message, file_path, date_added)
		VALUES ('$email', '$des', '$message', 'media/$file_name', now())";
    $conn->query($sql);
}
?>