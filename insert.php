<?php 

session_start();
 //print_r( $_POST);
include 'connect.php' ;

 if(isset($_POST['submit']))  {
 	 $name = $_POST['uname'];
 $email = $_POST['uemail'];
 $mobileNumber = $_POST['umobile'];
 $address = $_POST['uaddress'];

  $select = "select * from school_info where email = '".$email."' ";

 $qur = mysqli_query($con,$select);
 $query = mysqli_fetch_assoc($qur);

 if(empty($query)){
    $insertquery = "INSERT INTO  school_info(fname,email,moble_number,address)VALUES('$name','$email',' $mobileNumber','$address')";
$result = mysqli_query($con,$insertquery);


if($result){
    //echo' inserted ';
    $_SESSION['success'] = "insert successfully";
     header("Location:rivson.php");
    // $last_id = $con->insert_id;
 // echo "New record created successfully. Last inserted ID is: " . $last_id;
}else{
    $_SESSION['error'] = "insert failed";
      header("Location:risvson.php");
}
}else{

    $_SESSION['error'] = "already have an account";
      header("Location:rivson.php");



 }


 }


?>