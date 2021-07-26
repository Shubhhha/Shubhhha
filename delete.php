<?php 
session_start();
include 'connection.php';
 echo $id = $_REQUEST['ids'] . "<br>";
 $query ="SELECT * FROM `register` WHERE  id = '".$id."'  " ;
 $perform = mysqli_query($con,$query);
 $result = mysqli_fetch_assoc($perform);
// echo "<pre>";
// print_r($result);
 if(!empty($result['fileupload'])){
 		unlink("images/".$result['fileupload']);       
 }
 $dquery="DELETE FROM `register` WHERE id='".$id."'";
mysqli_query($con,$dquery);

$_SESSION['message2']="record deleted successfully";
header('location:display.php');
?>