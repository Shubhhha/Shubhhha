
  <!DOCTYPE html>
<html>
<head>
  <title>documents</title> 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>


</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<body>

<table style="width:100%" class="display"  id="example">
	<thead>
  <tr>
    <th>ID</th>

    <th>First Name</th>
    <th>Last Name</th>
    <th>Mobile Number</th>
     <th>Action</th>
     <th>Delete</th>

  </tr>
  <thead>

  	<tbody>
  		<?php 

include 'connection.php';


$selectquery = "select * from  registration";
$query = mysqli_query($con,$selectquery);
// $num = mysqli_num_rows($query);
// echo  "<br>" .$num;

// $result=mysqli_fetch_array($query);
// echo "<br>" . $result[1];

while($result=mysqli_fetch_array($query)){
	// echo $result['first_name']."<br>";
?>

	 <tr>
      <td><?php echo $result['id'];?></td>
    <td><?php echo $result['first_name'];?></td>
    <td><?php echo $result['last_name'];?></td>
    <td><?php echo $result['moble_number'];?></td>
    <td></a><a class="btn btn-secondary" href="edit.php?id=<?php echo $result['id']; ?>">Edit</a></td>
     <td></a><a class="btn btn-warning" href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
  </tr>
  

  <?php
}


?>


<script>
  $(document).ready( function () {
    $('#example').DataTable();
} );
</script>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<a class="btn btn-success" href="index.php">Add More</a>
     


</body>
</html>
 
  </tbody>
</table>
