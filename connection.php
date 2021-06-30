<?php 
$username= "root";
$password="";
$server = "localhost";
$db= "studentinfo";

$con= mysqli_connect($server,$username,$password,$db);

if($con) {
	echo "connection successfully";
}
?>