<?php 


Include 'connection.php';

$id = $_GET['id'];

$deletequery = "DELETE FROM `registration` WHERE id = $id";

$query = mysqli_query($con,$deletequery);

	header("Location:display.php");




?>