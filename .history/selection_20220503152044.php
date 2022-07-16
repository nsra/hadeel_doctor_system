 <?php
 session_start();
 ?>
<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>DrSaver</title>
    <link rel="shortcut icon" href="assets/img/doctor.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<section class="loginSection">
    <div class="row window-full">
        <div class="hero col-6 float-right ">
           <img   src="assets/img/doctor.png"></img>
         
        </div>
        <div class="col-6 float-left text-center">
            <img class="fleft" src="assets/img/log1.png"></img>
            <div class="fright pd-y">
              
              <br>
           <p >Do you want to Log in as a <span id="cplue">patient?</span>  or as a <span id="cplue">doctor?</span> </p>
           <br>
        <ul>
            <li><a href="doctor/Dlogin.php"  style="padding:10px;color:#fff; width:150px;border:none;text-transform:uppercase ;background-color:#6195ff;" > Doctor </a></li>
           <li><a href="patient/Plogin.php "style="padding:10px;color:#fff; width:150px;border:none;text-transform:uppercase ;background-color:#dce0e4;"> patient </a></li>
        </ul>   
 
</div>
          
        </div>
        <div class="clearfix"></div>
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