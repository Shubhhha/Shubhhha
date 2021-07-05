

<?php
echo "hye myself shubham";
if(@$_REQUEST['submit']){
  echo "hye";
  print_r($_REQUEST);



  // validation for name

  if(empty($_REQUEST['fname'])){ 
    $name="***pls fill the name";
} else {
  $checkname = $_REQUEST['fname'];
  // check if name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z-' ]*$/",$checkname)) {
    $name = "***Only letters and white space allowed";
  }
}

}

?>
