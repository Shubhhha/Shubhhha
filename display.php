
  <!DOCTYPE html>
<html>
<head>
  <title>documents</title> 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  
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
    <td></a><a href="edit.php?id=<?php echo $result['id']; ?>">Edit</a></td>
  </tr>
  

  <?php
}


?>
 
  </tbody>
</table>

<script>
  $(document).ready( function () {
    $('#example').DataTable();
} );
</script>

