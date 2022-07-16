
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['signin']))
{
$uname=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT gmail,Password,date_created,id FROM patient_list WHERE gmail=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
 foreach ($results as $result) {
    $date_created=$result->date_created;
    $_SESSION['id']=$result->id;
  }
if($date_created==0)
{
$msg="Your account is Inactive. Please contact admin";
} else{
$_SESSION['gmail']=$_POST['email'];
echo "<script type='text/javascript'> document.location = '/home.php'; </script>";
} }

else{

  echo "<script>alert('Invalid Details');</script>";

}

}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>DrSaver</title>
    <link rel="shortcut icon" href="../assets/img/doctor.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<section class="loginSection">
    <div class="row window-full">
        <div class="hero col-6 float-right ">
           <img  src="../assets/img/dlogin.png"></img>
         
        </div>
        <div class="col-6 float-left text-center">
            <img class="fleft" src="../assets/img/log1.png"></img>
            <div class="fright pd-y">
            
              <br>
           <p  class="pcol">Welcome back Doctor! Please login to your account.</p>
         
          <form  name="signin" method="post">
          
          
              <input type="text" placeholder="Username" name="uname" required>
          
             
              <input type="password" placeholder="Password" name="password" required>
          <br>
            <div class="row">
                           <input type="checkbox" checked="checked" style="width:15px;" name="remember">Remember me

            </div>
              <button type="submit" style="width: 60%;margin: 20px;">Login</button>
           
              
          </form>
        </div>
      </div> 
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>