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
    <?php  
   session_start();
     if(!empty($_SESSION['success'])){
      echo $_SESSION['success'];
     }
     unset($_SESSION['success']);

if(!empty($_SESSION['error'])){
      echo $_SESSION['error'];
     }
     unset($_SESSION['error']);
    ?>
	<form method="post" action="insert.php">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="uname" class="form-control"  placeholder="name" >
  </div>
   <div class="form-group">
    <label>email</label>
    <input type="email" name="uemail" class="form-control"   placeholder="email">
  </div>
   <div class="form-group">
    <label>create password</label>
    <input type="password" name="upassword" class="form-control"    placeholder="create password">
  </div>
   <div class="form-group">
    <label>confirm password</label>
  <input type="password"  name="ucpassword" class="form-control" placeholder="confirm password"></input>
  </div>
  <div style="width:400px;">
      <div style="float: left; width: 130px"> 
      <input name="submit" class="btn btn-success" type="submit" value="signup">
     </div>
     </div>
  
   </form>
   <div style="float: right; width: 225px"> 
  <a href='login.php'><button class="btn btn-primary"> login </button></a>
  
  </div>
          
       
    
  
   </div>
   </div>
   </div>
</div>
</body>
</html>