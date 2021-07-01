<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
.errClass{
	border:solid red;
}
.sClass{
	border:solid blue;
}
</style>
<?php 
if(@$_REQUEST['submit']){
	echo "<pre>";
	print_r($_REQUEST);
	if(empty($_REQUEST['name'])){
		$ncls="errClass";
	}
	else{
		$ncls="sClass";
	}
	if(empty($_REQUEST['email'])){
		$ecls="errClass";
	}
	else{
		$email = filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL);

			// Validate email
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				//echo $email." is a valid email address";
				$ecls="sClass";
			} else {
				$ecls="errClass";
				//echo $email." is not a valid email address";
			}
		
		
	}
}
?>
<body>
<form action="" method="post">
<input type="text" name="name" class="<?php if(@$ncls) echo $ncls; ?>" value="<?php if(@$_REQUEST['name']) echo $_REQUEST['name']; ?>" />
<input type="text" name="email" class="<?php if(@$ecls) echo $ecls; ?>" value="<?php if(@$_REQUEST['email']) echo $_REQUEST['email']; ?>"/>
<input type="submit" name="submit" value="submit" />
 </form>
</body>
</html>