<!DOCTYPE html>
<html>
<head>
<title>form</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

body {

   padding-right: 300px;
} 
</style>
</head>
<body>


<div class="container" style="padding-top: 50px ; width:700px">
	<div class="jumbotron">
		<div class="row">
	 <div class="col-md-6"> 
    
	<form method="post" action="insert.php">
  
   <div class="form-group">
    <label>email</label>
    <input type="email" name="uemail" class="form-control"   placeholder="email">
  </div>
   <div class="form-group">
    <label> password</label>
    <input type="password" name="upassword" class="form-control"    placeholder="password">
  </div>
   <input name="submit" class="btn btn-primary" type="submit" value="Submit">

   </form>
  
   </div>
   </div>
   </div>
</div>
</body>
</html>