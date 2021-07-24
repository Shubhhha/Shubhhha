<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>display</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
<table style="width:100%" class="display"  id="example">
	<thead>
  <tr>
   
      <th>id</th>
     <th>Name</th>
     <th>Email</th>
     <th>Mobile Number</th>
     <th>Address</th>
     <th>Gender</th>
     <th>Language</th>
     <th>Branch</th>
     <th>upload</th>
     <th>Action</th>
  </tr>
  <thead>
  		<tbody>
  		<?php 

include 'connection.php';


$selectquery = "select * from  register";
$query = mysqli_query($con,$selectquery);
// $num = mysqli_num_rows($query);
// echo  "<br>" .$num;

// $result=mysqli_fetch_array($query);
// echo "<br>" . $result[1];

while($result=mysqli_fetch_assoc($query)){
	// echo $result['first_name']."<br>";
?>

	 <tr>
	 	<td><?php echo $result['id'];?></td>
    <td><?php echo $result['name'];?></td>
    <td><?php echo $result['email'];?></td>
    <td><?php echo $result['mobile'];?></td>
    <td><?php echo $result['address'];?></td>
    <td><?php echo $result['gender'];?></td>
    <td><?php echo $result['language'];?></td>
    <td><?php echo $result['branch'];?></td>
   
    <td><img src="images/<?php echo $result['fileupload'];?>"  width="100" height="100" ></td> 
    <td><a href="edit.php?sid=<?php echo  $result['id'];   ?>" class="btn btn-primary">Edit</a> &nbsp <a href="#"  class="btn btn-warning">delete</a></td>      
    <?php                                                                        
}         
?>
</tbody>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>


