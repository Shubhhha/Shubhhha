<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practise form</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.errorclass{
		border: 2px solid red;
	}
</style>
<body>
	<?php 
  session_start();

    include 'connection.php';
     include 'edit_submit.php';
     $id = $_GET['sid'];
    $q = "SELECT * FROM register WHERE id = '".$id."' " ;
    $result = mysqli_query($con,$q);
    $resp = mysqli_fetch_assoc($result);
  //  print_r($resp);
    ?>
    <div class="container">
    	<div class="jumbotron">
    		<div class="row">
    			<div class="col-md-6">
    				<form method="post" action="" enctype="multipart/form-data">
    					<div class="form-group">
                     <input type="hidden" name="id" value="<?php echo @$id ; ?>">
    						<label>Name:</label>
    					    <input type="text" name="name" value="<?php echo @$resp['name'] ; ?>" class="form-control <?php if(isset($nerr)){echo  'errorclass';}  ?>" placeholder="Enter your name" >
    					</div>
                <?php if(@$span1){echo $span1;}?>
    					<div class="form-group">
    						<label>Email:</label>
    					    <input type="email" name="email" value="<?php echo @$resp['email']  ; ?>"class="form-control <?php if(@($eerr)){echo 'errorclass';} ?>" placeholder="Enter your email">
    					</div>
                <?php if(@$span2){echo $span2;}  ?>
    					<div class="form-group">
    						<label>Mobile:</label>
    					    <input type="number" name="mobile" value="<?php echo @$resp['mobile']; ?>" class="form-control <?php if(@($merr)){echo 'errorclass';} ?>" placeholder="Enter your mobile number">
    					</div>
               <?php if(@$span3){echo $span3;}  ?>
    					<div class="form-group">
    						<label>Address:</label>
    					  <textarea type="text" name="address" class="form-control <?php if(@$aerr){echo 'errorclass';} ?>" placeholder="Enter your address"><?php echo @$resp['address']; ?></textarea>
    					</div>
    					<div class="">
    						<label>Select your Gender: &nbsp </label>
    						<input type="radio" name="gender" value="male"  <?php  if(@$resp['gender'] == 'male'){ echo "checked";}   ?>>Male:
    						<input type="radio" name="gender" value="female" <?php if(@$resp['gender']=='female'){echo "checked";} ?>>Female:
    						<input type="radio" name="gender" value="other" <?php if(@$resp['gender']=='other'){echo "checked";} ?>>Other:
    					</div>
    					<?php if(@$span){echo $span;}  ?>
    					<div>
    						<label>Select your language &nbsp</label>
    						<input type="checkbox" name="language[]" value="english" <?php if(@$resp['language']){ $arr=explode(",",$resp['language']); foreach($arr as $key=>$val) {if($val=="english") echo "checked";}} ?>>Engish
    						<input type="checkbox" name="language[]" value="hindi" <?php if(@$resp['language']){ $arr = explode(",",$resp['language']); foreach($arr as $key=>$val){if($val=="hindi")echo "checked";}} ?>>Hindi
    						<input type="checkbox" name="language[]" value="tamil" <?php if(@$resp['language']){$arr =explode(",",$resp['language']); foreach($arr as $key=>$val) {if($val=="tamil") echo "checked";}} ?>>Tamil
    					</div>
                        <?php if(@$span4){echo $span4;}?>
                        <div class="">
                        	<select name="branch">
                        		<option value="">Select your branch</option>
                        		<option value="Electrical" <?php if(@$resp['branch']=='Electrical'){echo "selected";}?>>Electrical</option>
                        		<option value="Mechanical" <?php if(@$resp['branch']=='Mechanical'){echo "selected";} ?>>Mechanical</option>
                        		<option value="Electronics and Communication" <?php if(@$resp['branch']=='Electronics and Communication'){echo "selected";}   ?>>Electronics and communication</option>
                        		<option value="Computer science" <?php if(@$resp['branch']=='Computer science'){echo "selected";}   ?>>computer science</option>
                        	</select>
                        </div>
                         <?php if(@$span5){echo $span5;}  ?><br>
                          <input type="hidden" name="old_pic" value="<?php echo @$resp['fileupload']  ; ?>">
                            <?php if(!empty($resp['fileupload'])){ ?>
            <img src="images/<?php echo $resp['fileupload']; ?>" style="height:100px;width:100px;" >
              <?php } ?>
                         <input type="file" name="upload" ><br>
                          <?php if(@$span14){echo $span14;}  ?><br>
                         <input type="submit" name="submit" class="btn btn-success btn-sm">
                         <input type="reset" name="reset" class="btn btn-primary btn-sm">
    					
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>