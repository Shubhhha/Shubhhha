
<h2>Student Information Updation</h2>

<?php
include 'connection.php';
$ids =$_GET['id'];
$showquery="select * from registration where id={$ids}";
$showdata= mysqli_query($con,$showquery);
$arraydata=mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
	$idupdate =$_GET['id'];
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$mobileNumber = $_POST['Mobile_Number'];

/* $insert_query = "INSERT INTO  registration(first_name,last_name,moble_number) VALUES('$firstName','$lastName','$mobileNumber')";
$result = mysqli_query($con,$insert_query); */

$query = " update registration set id=$idupdate,first_name='$firstName' ,last_name='$lastName ',moble_number='$mobileNumber' where id=$idupdate";

$result = mysqli_query($con,$query);
 if($result){
 	header("Location:display.php");
	?>

	<!-- <script type="text/javascript">
		alert("data updated properly");

	</script> -->
	<?php
}
else{
	?>
	<script type="text/javascript">
		alert("data not updated properly");
	</script>
	<?php
}

}
	?>

<form action="" method="POST" onsubmit=" return Myfun()" name="forms">
  <label for="fname">First name:</label><br>
  <input type="text" id="stu_name" name="fname" value="<?php echo $arraydata['first_name'];?>"><span id="message" style="color: red;"></span><br>
  <label for="lname">Last name:</label><br>
   <input type="text" id="last_name" name="lname" value="<?php echo $arraydata['last_name'];?>"><span id="message1" style="color: red;"></span><br>
   
  <!--    <label for="gender"><b>Gender</b></label><br>
      <input type="checkbox" id="check" name="container" value="">
  <label for=""> Male</label><br>
  <input type="checkbox" id="check1" name="containercontainer" value=""><span id="message4" style="color: red;"></span><br4
  <label for=""> Female</label><br>
  <input type="checkbox" id="check2" name="container" value="">
  <label for=""> other</label><br><br>
  <label for="">Choose a Course:</label>
<select id="select" name="" form="">
  <option value="">Science</option>
  <option value="">Bio</option>
  <option value="">Commerce</option>
  <option value="">Art</option>
</select><br><br> -->
<label>Mobile Number</label><br>
<input type="text" id="mobile" value="<?php echo  $arraydata['moble_number'];?>" name="Mobile_Number" /><span id="message2" style="color: red;"></span><br>
 
  <input type="submit" value="update" name="submit" onclick="Myfun()">
</form> 

<script>
	
	function Myfun(){
		var correct_way = /^[A-Za-z]+$/;
		var name = document.getElementById("stu_name").value;
		 var lastName=document.getElementById("last_name").value;
		 var  mob=document.getElementById("mobile").value;
		if (name==""){
			console.log(name);
         document.getElementById("message").innerHTML = "***pls fill full name";
         return false ;
		}
		else if(name.length<3){
         document.getElementById("message").innerHTML = "***name must be 3 character";
           return false ;

		}
		else if(name.length>20){
         document.getElementById("message").innerHTML = "***name must be les than 20 character";
           return false ;
		}
		 
	
		else if (lastName==""){
		 	console.log(lastName);
         document.getElementById("message1").innerHTML = "***pls fill last name";
         return false ;
		}
		else if(lastName.length<3){
         document.getElementById("message1").innerHTML = "***name must be 3 character";
           return false ;

		}
		else if(lastName.length>20){
         document.getElementById("message1").innerHTML = "***name must be les than 20 character";
           return false ;
		}
		// else if(lastName.match(correct_way)){
    
		// 	return true;
		// }
		//   	else {
		// 	 document.getElementById("message1").innerHTML = "***only alphabets are allowed";
		// 	 return false;
		// }


		
  // mobile number validation

else if(mob==""){
			console.log(mob);
         document.getElementById("message2").innerHTML = "***pls enter mobile number";
         return false ;
}
else if(isNaN(mob)){
			console.log(mob);
         document.getElementById("message2").innerHTML = "***enter only numeric values";
         return false ;
}
else if(mob.length<10){
         document.getElementById("message2").innerHTML = "***mobile number must be 10 digit";
       return false ;
}
else if(mob.length>10){
         document.getElementById("message2").innerHTML = "***mobile number must be 10 digit";
       return false ;
}
 
  }
</script>



</body>
</html>

