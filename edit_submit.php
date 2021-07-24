<?php 
    include 'connection.php';
    if(isset($_POST['submit'])){
      // print_r($_POST);
        $arr = array();

       //validation for name*****
        if(empty($_POST['name'])){
            $nerr = "errorclass";
        }else{
        $name = $_POST['name'];
        if(!preg_match("/^([a-zA-Z' ]+)$/",$name)){
          $span1 = "<span style = 'color:red;'>please enter valid name</span>";
            $nerr = "errorclass";
          }else{
            $new_name = $_POST['name'];
          }
      }
      //vlidation for email*****
        if(empty($_POST['email'])){
            $eerr ="errorclass";
        }else{
         $email = $_POST['email'];
            if(!preg_match(
             "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)){
              $span2 = "<span style = 'color:red;'>please enter valid email</span>"; 
            }else{
                $new_email=$_POST['email'];
            }
      }

      //validation for mobile*****
        if(empty($_POST['mobile'])){
            $merr="errorclass";
        }else{
        $mobile = $_POST['mobile'];
    //   preg_match('/^[0-9]{10}+$/', $mobile);
    //   function validate_mobile($mobile)
    // {
    // return preg_match('/^[0-9]{10}+$/', $mobile);
    // }

    if(!preg_match('/^[0-9]{10}+$/', $mobile)){
         $span3 = "<span style = 'color:red;'>please enter valid mobile number</span>";
    }else{
        $new_mobile=$_POST['mobile'];
    }
      }

      //validation for address******
        if(empty($_POST['address'])){
            $aerr="errorclass";
        }else{
            $new_address  = $_POST['address'];
        }

      //validation for gender*****
        if(!@$_POST['gender']){
            $span = "<span style = 'color:red;'>please select your gender.</span>";
        }elseif($_POST['gender']=='male'){
            $new_gender = "male";     
        }elseif($_POST['gender']=='female'){
            $new_gender = "female";
        }else{
            $new_gender ="other";
        }
      //validation for language******
      if(!@$_POST['language']){
          $span4 = "<span style = 'color:red;'>please select your language</span>";
      }elseif(@$_POST['language']){
         foreach($_POST['language'] as $key=>$val){
        // echo $val;
         $arr[]=$val;
        
              }
        }
      //validation for branch******
      if(!@$_POST['branch']){
         $span5 = "<span style = 'color:red;'>please select your branch</span>";
      }else{
        $new_branch = $_POST['branch'];
      }
        // if(@$_POST['language']){
     //    foreach($_POST['language'] as $key=>$val){
     //     echo $val;
     //    }
        // }
      if(!$_FILES['upload']['name']){
         $span14 = "<span style = 'color:red;'>please select your file</span>";
      }
     elseif(@$_FILES['upload']){
        print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_type = $_FILES['upload']['type'];
        $file_tmp= $_FILES['upload']['tmp_name'];
        $strtotime = strtotime("now");
        $newname =$strtotime.'_'.$file_name;
       // $time=date("d-m-y")."-".time();
        //$newname = $time."-".$file_name;
        $fileupload =move_uploaded_file($file_tmp,"images/".$newname); 
     }


      if((!@$nerr) && (!@$span1)  && (!@$span2) &&(!@$eerr)&&(!@$merr)&&(!@$span3)&&(!@$aerr)&&(!@$span)&&(!@$span5)){
        $new_language = implode(',',$arr);
       // echo $new_language .  $new_name . " " . $new_email. "".$new_mobile." ".$new_gender." ".$new_address."". $new_branch;
       $id = $_REQUEST['id'];
     $update_query =" UPDATE `register` SET `name`='".$new_name."',`email`='".$new_email."',`mobile`='".$new_mobile."',`address`='".$new_address."',`gender`='".$new_gender."',`language`='".$new_language."',`branch`='".$new_branch."' WHERE id= '".$id."' ";
   
     $perform = mysqli_query($con,$update_query);
     header('location:display.php');
       


     
       }
    }

     ?>