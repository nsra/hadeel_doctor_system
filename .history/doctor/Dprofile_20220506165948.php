<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:Dlogin.php');
}
else{
$eid=$_SESSION['alogin'];
if(isset($_POST['update']))
{

$fname=$_POST['FirstName'];
$lname=$_POST['LastName'];   
$gender=$_POST['Gender']; 
$dob=$_POST['Dob']; 
$specialty_ids=$_POST['specialty_ids']; 
$img_path=$_POST['img_path']; 
$nationality=$_POST['nationality']; 
$inistaion=$_POST['inistaion']; 
$grdate=$_POST['graduteDate']; 
$sql="update doctors_list set FirstName=:fname,LastName=:lname,Gender=:gender,Dob=:dob,specialty_ids=:specialty_ids,img_path=:img_path,nationality=:nationality,inistaion=:inistaion,graduteDate=:grdate where email=:eid";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':specialty_ids',$specialty_ids,PDO::PARAM_STR);
$query->bindParam(':img_path',$img_path,PDO::PARAM_STR);
$query->bindParam(':nationality',$nationality,PDO::PARAM_STR);
$query->bindParam(':inistaion',$inistaion,PDO::PARAM_STR);
$query->bindParam(':grdate',$grdate,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$msg="doctor info updated Successfully";
}

    ?>

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
  
    <!--header-->
    <div class="header" style=" background-color: #707070;">
        
<div class="header-content">
    <div class="logo">
        <img src=" ../assets/img/drsaver.png"  alt="logo image" draggable="false">
        
     </div>
       <ul class="nav">
         <li><a href="#" class="active">Home</a></li>
         <li><a href="#" >Consultation</a></li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Articles
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
         <li><a href="#"class="icon fa fa-search fa-2x" >Search</a></li>

 <li><a href="#"class="icon fa fa-bell" >  </a></li>
          <li><a href="#"class="icon fa fa-user fa-2x" > </a></li>
      

   
            
      

     </ul>
     <div class="clear"></div>
</div>
  </div>
   
     <!--profile section-->
     <div class="about pd-y"></div>
     <aside id="slide-out" class="sidebar white fixed">
        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="../assets/img/Image -1.png" style="border: none;border-radius: 50%;width: 30%;" alt="">
                </div>
                <div class="sidebar-profile-info">
             
                </div>
            </div>
            <?php 
$eid=$_SESSION['alogin'];
$sql = "SELECT * from  doctors_list where username=:eid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':eid',$eid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?> 
<p value="<?php echo htmlentities($result->FirstName." ".$result->LastName);?>" >full name</p>
<p >Physical Therapy</p>
<span> <i class="fas fa-star staryel"></i></span>
<span> <i class="fas fa-star staryel"></i></span>
<span> <i class="fas fa-star staryel"></i></span>
<span> <i class="fas fa-star staryel"></i></span>
<span> <i class="fas fa-star-half  "style="color:gray"></i></span>
<br>
<span class="float-right" style="color: #1E97D5;"name="update" >Edit</span>
<br><hr>

<img src="../assets/img/BG.png" alt="" >
<br>
<span>Complete Your Medical Record</span>  

       <ul>
<li ><a  href="" style="color: #1E97D5;">LOG OUT</a> </li>
</ul>

     
 
        </div>
    </aside>

       
        <div class="row">
        <br>
            <div class="col s12">
           
            </div>
            <div class="col s12 m12 l6">      
                <div class="card">
                    <div class="card-content">
                           <div  class="row" style="background-color: #D8EAE6; width: 100%;margin-left: 0;padding: 10px;">
                            <ul class="list-item">

                              <li class="item j" onclick="displayHide()" ><a href="#">Personal Profile</a></li>
                              
                              <li class="item  "onclick="displayShow()" > <a href="#"> Doctor info<i class=""></i> </a>
                              
                                <ul class="dropdown" id="med">
                                 
                                    <li class="dropdown-btn"> <img src="../assets/img/PHOTO-12.png" alt="" value="<?php echo htmlentities($result->img_path);?>">   Syndicate Membership Card
                                       <i class="fa fa-caret-down"></i>
                                    </li>
                                    <div class="dropdown-container">
                                      <form id="example-form" method="post" name="updatemp">
                
                                        <section>
                                          <div class="wizard-content">
                                            <div class="row">
                                              <div class="col m6">
                                         
                                                  <div class="input-field col  ">
                          
                                                    <input id="file"  name="file" placeholder="Please Upload Your Syndicate " type="file" required>
                                                  </div>
                          
                          
                                              </div>
                                            </div>
                                          </div>
                                        </section>
                          
                          
                                      </form>
                                
                                    </div>
                              </li>
                              <li class="dropdown-btn"> <img src="../assets/img/PHOTO-14.png" alt="" > Available Time
                                <i class="fa fa-caret-down"></i>
                             </li>
                             <div class="dropdown-container">
                               <form action="">
                              
                 
                                  <input id="date-time"  name="date-time" placeholder=" " type="date" required>
                          
        
                               </form>
                             </div>    
                                        <div class="input-field row ">
                                    <center><button type="submit" name="change" style="padding:10px;color:#fff;margin-left:100px;width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Add</button></center>
                                    <center><button type="submit" name="change" style="padding:10px;color:#fff;margin-left:50px;width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Cancel</button></center>
                                        
                                    </div>  </ul>
                                  
                                </li>
                               
                                <li class="item  "onclick="displayShowE()"  > <a href="#"> Education  <i class="">
                                  <ul class="dropdown" id="mn"  >
                                 
                                    <li class="dropdown-btn"> <img src="../assets/img/PHOTO-16.png" alt="" > Education
                                       <i class="fa fa-caret-down"></i>
                                    </li>
                                    <div class="dropdown-container">
                                      <form id="example-form" method="post" name="updatemp">
                
                                        <section>
                                          <div class="wizard-content">
                                            <div class="row">
                                              <div class="col m6">
                                         
                                                <div class="input-field " >
                                                  <select name="Specialty" autocomplete="off"  >
                                                    <option value="<?php echo htmlentities($result->Specialty_ids);?> ">Choose Specialty  </option>
                                                    <?php $sql = "SELECT name,img_path from medical_specialty";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $resultt)
{   ?>     
 <option value="<?php echo htmlentities($resultt->name);?>"><?php echo htmlentities($resultt->name);?></option>
  <?php }} ?>
  </select>              
                                                   
                                                </div>
                                           
                                                  <div class="input-field " >
                                                    <select name="Blood-type" autocomplete="off"  >
                                                      <option  >Choose instiuation</option>
                                                      <option value="Male">Orthopedician Specialist</option>
                                                      <option value="Female">B</option>
                          
                                                    </select>
                                                  </div>
                                                  <div class="input-field">
          
                                                    <input id="gdate" name="gdate" value="" placeholder="?" type="date"
                                                      autocomplete="off" required>
                                                  </div>
                                                  <div class="input-field row ">
                                                    <center><button type="submit" name="change" style="padding:10px;color:#fff; width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Add</button></center>
                                                    <center><button type="submit" name="change" style="padding:10px;color:#fff;margin-left:50px;width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Cancel</button></center>
                                                        
                                                    </div> 
                                              </div>
                                            </div>
                                          </div>
                                        </section>
                          
                          
                                      </form>
                                
                                    </div>
                              </li>
                              <li class="dropdown-btn"> <img src="../assets/img/PHOTO-17.png" alt="" >Board
                                <i class="fa fa-caret-down"></i>
                             </li>
                             <div class="dropdown-container">
                               <form action="">
                              
                 
                                  <input id="board"  name="board " placeholder="Board Title " type="text" required>
                                  <div class="input-field row ">
                                    <center><button type="submit" name="change" style="padding:10px;color:#fff; width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Add</button></center>
                                    <center><button type="submit" name="change" style="padding:10px;color:#fff;margin-left:50px;width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Cancel</button></center>
                                        
                                    </div> 
        
                               </form>
                             </div> 
                             <li class="dropdown-btn"> <img src="../assets/img/PHOTO-18.png" alt="" >Conference
                              <i class="fa fa-caret-down"></i>
                           </li>
                           <div class="dropdown-container">
                             <form action="">
                            
               
                                <input id="ctitle"  name="ctitle " placeholder="Conference Title " type="text" required>
                                <input id="cplace"  name="cplace " placeholder="Conference Place " type="text" required>
                                <input id="cdate"  name="cdate " placeholder="Conference Date " type="date" required>


                                <div class="input-field row ">
                                  <center><button type="submit" name="change" style="padding:10px;color:#fff; width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Add</button></center>
                                  <center><button type="submit" name="change" style="padding:10px;color:#fff;margin-left:50px;width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Cancel</button></center>
                                      
                                  </div> 
      
                             </form>
                           </div>     
                                          </ul>
                                </i> </a>
                                 </ul>    
                        
                          <script>
                  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                  var dropdown = document.getElementsByClassName("dropdown-btn");
                  var i;
                  function displayHide() {
                            document.getElementById("med").style.visibility = "hidden";
                            document.getElementById("mn").style.visibility = "hidden";
                         }
                         function displayShow() {
                            document.getElementById("med").style.visibility = "visible";
                            document.getElementById("mn").style.visibility = "hidden";  
                         }
                         function displayShowE() {
                            document.getElementById("mn").style.visibility = "visible";
                             
                            document.getElementById("med").style.visibility = "hidden";
                         }
                   for (i = 0; i < dropdown.length; i++) {
                    dropdown[i].addEventListener("click", function() {
                   
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                    } else {
                    dropdownContent.style.display = "block";
                    }
                    });
                  }
                  </script>      </ul>
                            </div>   <form id="example-form" method="post" name="updatemp">
                      
                                <section>
                                    <div class="wizard-content">
                                        <div class="row">
                                            <div class="col m6">
                                                <div class="row">


<div class="input-field col m6 s12 ">
 
<input id="firstName" name="firstName"  placeholder="First name"  type="text" required>
</div>

<div class="input-field ">
 
<input id="lastName" name="lastName" placeholder="Last name " value="" type="text" autocomplete="off" required>
</div>
                                                </div>
<div class="input-field">

 <input id="userName" name="userName" value="" placeholder="Username" type="text" autocomplete="off" required> 
</div>

<div class="input-field">
 <input  name="email" type="email" id="email" placeholder="Email" value=" "   autocomplete="off" required>
 
</div>

<div class="input-field  ">
 <input id="phone" name="mobileno"style="margin:5px;" type="tel" placeholder="Mobile number" maxlength="10" autocomplete="off" required>
</div>


 
<div class="row">
   
<div class="input-field ">
 <input id="birthdate" name="dob"  class="datepicker" type="date" value="" style="margin:20px;" >
</div>
<div class="input-field " style="margin:20px;margin-left:50px;">
<select  name="gender" autocomplete="off">
                                        
<option value="Male">Male</option>
<option value="Female">Female</option>

</select>
</div>
</div>
<div class="input-field "  >
    <select  name="gender" autocomplete="off" >
                                            
    <option value="Nationality">Nationality</option>
    <option value="palestinian">palestinian</option>
    
    </select>
    </div>
    <div class="input-field " style="margin-top:20px">
        <select  name="gender" autocomplete="off" >
                                                
        <option value="Specialty">Doctor's Specialty</option>
        <option value="heart">heart</option>
        <option value="PhysicalTherapy">Physical Therapy</option>
        
        </select>
     
      
                                            </div><?php }}?>
                                            <div class="input-field  ">
                                              <center><button type="submit" name="change" style="padding:10px;color:#fff;margin:100px;width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Save</button></center>
                                              
                                              </div>
                                        </div>
                                    </div>
                                </section>
                             
                            
                                
                           
                        </form>   
              
               

</div>




                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
             
      
         
 
<div class="left-sidebar-hover"></div>

 
  <div class="about pd-y"></div> 

    <!--footer section-->
<footer class="footer">
    
    <div class="footer__addr">
      <h1 class="footer__logo">Dr.saver</h1>
          
        
    </div>
    
    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Menu</h2>
  
        <ul class="nav__ul">
          <li>
            <a href="#">Home</a>
          </li>
  
          <li>
            <a href="#">Consultation</a>
          </li>
              
          <li>
            <a href="#">Articles</a>
          </li>
        </ul>
      </li>
       
      <li class="nav__item">
        <h2 class="nav__title">Legal</h2>
        
        <ul class="nav__ul">
          <li>
            <a href="#">Privacy Policy</a>
          </li>
          
          <li>
            <a href="#">Terms of Use</a>
          </li>
          
          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="row">
        
        <div class="  col-lg-5 ">

            <div class="row float-left">
                <div class="socialItem">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="socialItem">
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="socialItem">
                    <i class="fab fa-twitter"></i>
                </div>


            </div>
        </div>
    </div>
    <div class="legal">
      <p> &copy; copyright 2022 All rights reserved.</p>
      
      <div class="legal__links">
        <span>Made with <span class="heart">♥</span> hadeel&nada</span>
      </div>
      
    </div>
  </footer>
                                     
                                       
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  
</html>
<?php } ?> 