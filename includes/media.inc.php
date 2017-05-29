
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $image = $_POST['image'];
    $email = $_POST['email'];
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp,"media/".$file_name);
    $sql = "INSERT INTO media (Emp_email, File_Path, date_added)
		VALUES ('$email', 'media/$file_name', now())";
    $conn->query($sql);
}
?>