<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>insert</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>
<body>
	<?php 
 include 'connection.php';
$select = "select * from country";
$perform=mysqli_query($con,$select);
	?>
	
<select name="country"  id="country-list">
	<option value="">select country</option>
	<?php while ($r=mysqli_fetch_assoc($perform)) {
	 echo "<option value='".$r['cid']."'>".$r['cname']."</option>" ; } ?>
</select>

  <label for="title">Select City:</label>
                <select name="city"  id="city-list" class="form-control" style="width:350px">
                	<option value="">select your  city</option>
                </select>
<script>
$( "#country-list" ).change(function () {

    var countryID = $(this).val();


    if(countryID) {


        $.ajax({
            url: "ajax.php",
            dataType: 'Json',
            data: {'cid':countryID},
            success: function(data) {
        
            	console.log(data);
                $('#city-list').empty();
                $.each(data, function(key, value) {
                    $('#city-list').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });


    }else{
        $('select[name="city"]').empty();
    }
});
</script>
</body>
</html>