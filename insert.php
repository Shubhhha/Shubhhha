<?php 

session_start();
 //print_r( $_POST);
include 'connection.php' ;

 if(isset($_POST['submit']))  {
 	 $name = $_POST['uname'];
      $email = $_POST['uemail'];
 $password = $_POST['upassword'];
 $cpassword = $_POST['ucpassword'];


 $pass = password_hash($password,PASSWORD_BCRYPT);
 $Cpass = password_hash($cpassword,PASSWORD_BCRYPT);

 $emailquery  = "select * from signup where email = '".$email."' ";
 $query = mysqli_query($con,$emailquery);
 $emailcount = mysqli_num_rows($query);
 if($emailcount>0){
    $_SESSION['error'] = "already have an account";
    header("Location:signup.php");

 }else{
if($password===$cpassword){
  $insert = "insert into signup(name,email,password,confirmpassword)VALUES('$name','$name','$pass','$Cpass')";
  $iquery = mysqli_query($con,$insert);
  if($iquery){
    //echo' inserted ';
    $_SESSION['success'] = "insert successfully";
     header("Location:signup.php");
    // $last_id = $con->insert_id;
 // echo "New record created successfully. Last inserted ID is: " . $last_id;
}else{
    $_SESSION['error'] = "insert failed";
      header("Location:signup.php");
}
}else{
    $_SESSION['error'] = "password doesnot match";
    header("Location:signup.php");
}



}

 

 }


?>