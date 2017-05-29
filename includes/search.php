<?php
/**
 * Created by PhpStorm.
 * User: RameshA
 * Date: 5/17/2017
 * Time: 11:41 AM
 */
include_once "db.php";


//get search term
$searchTerm = $_GET['term'];

//get matched data from skills table
$query = $db->query("SELECT * FROM designation WHERE Designation LIKE '%".$searchTerm."%' ORDER BY Did");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['Designation'];
}

//return json data
echo json_encode($data);
?>