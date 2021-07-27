<?php


include 'connection.php';

 //$id = $_GET['id'];
   $sql = "SELECT * FROM city
         WHERE country_id LIKE '%".$_GET['cid']."%'"; 


   $result = mysqli_query($con,$sql);


   $json = [];
   while($row =mysqli_fetch_assoc($result)){
        $json[$row['id']] = $row['city_name'];
   }


   echo json_encode($json);
?> 