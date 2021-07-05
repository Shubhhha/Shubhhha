

<!DOCTYPE html>
<html>
<head>
<title>Shubham form</title>
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<?php
include 'validation.php';


?>
</head>
<!-- <style>
	  .errorCls{
		border: solid red;
	}
	  .scls{
		border: solid green;
	}
</style> -->
<body>

<div class="container d-flex justify-content-center">
    <div class="row my-5">
        <div class="col-md-6 text-left text-white lcol">
            <div class="greeting">
                <h3>Welcome to <span class="txt">eway</span></h3>
            </div>
            <h6 class="mt-3">Eway is globally recognized for its innovative approach towards delivering business value and its commitment to sustainability.</h6><br><br><br>
            <div>
                <div class="socials d-flex flex-row justify-content-between text-white">
                    <div class="d-flex flex-row">
                    <a href="https://www.linkedin.com" class="fab fa-linkedin-in"></a>
                    <a class ="fab fa-facebook-f" href="https://www.facebook.com/ewayitsolutionspvtltd/"> </a>
                    <a href="#" class="fab fa-twitter"></a>
                    </div>
                     <span>Privacy Policy</span> <span>&copy; 2021 eway</span>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-top: 0px" >
            <form action="" method="post" class="sign-up">
                <h2 class="heading mb-4">Registration Form</h2>
                <div display="inline" class="form-group fone mt-2"><i class="fas fa-user"></i><input name="fname" type="name" class=" form-control " value="<?php if(@$_REQUEST['fname']) echo $_REQUEST['fname'] ?>" placeholder="first Name"><span style="color : red;"> <?php if(@$name) echo $name;?></span> </div>
                <div class="form-group fone mt-2"><i class="fas fa-user"></i> <input name="lname" type="name" class="form-control" placeholder="Last Name"> </div>
                <span>Gender  </span>
                <input type="radio" id="html" name="male" value="">
  <label for="html">male</label>
  <input type="radio" id="css" name="female" value="">
  <label for="css">female</label>
  <input type="radio" id="javascript" name="fav_language">
  <label for="javascript">other</label>

                <div class="form-group fone mt-2"><fieldset>
  <select  name="select" class="form-control dropdown" name="radio">
    <option  type="text" value="" selected="selected">Male</option>
    <option type="text" value="">Female</option>
    <option type="text" value="">Other</option>
  </select>
</fieldset></div>
              
                <div class="form-group fone mt-2"> <i class="fas fa-envelope"></i> <input name="email" type="email" class="form-control" placeholder="Email"> </div>
                <div class="form-group fone mt-2"><i class="fas fa-mobile"></i> <input name="mobile" type="number" class="form-control" placeholder="Mobile Number"> </div>
                <div  class="form-group fone mt-2"><i class="fas fa-calendar-alt"></i><input class="form-control" type="text"  name="birthday" placeholder="Date of birth" onfocus="(this.type='date')"  ></div>
        
<div class="form-group fone mt-2"><fieldset>
  <select class="form-control dropdown" id="education" name="education">
  <i class="fas fa-user-graduate"></i> <option value="" selected="selected" disabled="disabled">select your education</option>
    <option value="No formal education">No formal education</option>
    <option value="Primary education">Primary education</option>
    <option value="Secondary education">Secondary education or high school</option>
    <option value="GED">GED</option>
    <option value="Vocational qualification">Vocational qualification</option>
    <option value="Bachelor's degree">Bachelor's degree</option>
    <option value="Master's degree">Master's degree</option>
    <option value="Doctorate or higher">Doctorate or higher</option>
  </select>
</fieldset></div>
<div class="form-group fone mt-2"><fieldset>
  <select   class="form-control dropdown" id="education" name="education">
    <option class="form-control" type="number" value="" selected="selected" disabled="disabled">Year Of Passout(For Higest Qualification)</option>
    <option  type="number" value="">2019</option>
    <option type="number" value="">2020</option>
    <option type="number" value="">2021</option>
    <option type="number" value="">2022</option>
    <option type="number" value="">2023</option>
  </select>
</fieldset></div>
                
    <div class="form-group fone mt-2">
        
            <select id="mySelect" data-show-content="true" class="form-control">
                <option>Select Course</option>
                <option data-content="<i class='fa fa-cutlery'></i> Cutlery" value="UI">User Interface</option>
                <option data-content="<i class='fa fa-eye'></i> Eye" value="Web designing">Web Designing</option>
                <option data-content="<i class='fa fa-heart-o'></i> Heart" value="business video making">Business Video Making</option>
                <option data-content="<i class='fa fa-leaf'></i> Leaf" value="Social Media Marketing">Social Media Marketing</option>
            </select>
    </div>
    <div class="form-group fone mt-2">
    <!-- <button type="submit" name="submit" class="btn btn-success">submit</button> -->
  <input type="submit" value="Submit" class="btn btn-success" name="submit">

    </div>
    </form>
    
       
        </div>

    </div>
</div>
</body>
</html>



