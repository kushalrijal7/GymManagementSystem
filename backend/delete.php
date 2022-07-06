<?php 
include 'connection.php';

$id = $_GET['id'];

$query = "DELETE FROM `member_table` WHERE id = $id";

mysqli_query($conn,$query);

header('location:dashboard.php');

?>