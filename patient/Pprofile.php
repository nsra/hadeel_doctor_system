<?php
session_start();
error_reporting(0);
include('includes/config.php');
// if(strlen($_SESSION['palogin'])==0)
//     {   
// header('location:Plogin.php');
// }
// else{
// // Code for change password 
 
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>DrSaver</title>
  <link rel="shortcut icon" href="../assets/img/doctor.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
        <img src=" ../assets/img/DrSaver.png" alt="logo image" draggable="false">

      </div>
      <ul class="nav">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Consultation</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Articles
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li><a href="#" class="icon fa fa-search fa-2x">Search</a></li>

        <li><a href="#" class="icon fa fa-bell"> </a></li>
        <li><a href="#" class="icon fa fa-user fa-2x"> </a></li>






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

          <img src="../assets/img/pro.png" style="border: none;border-radius: 50%;border: solid #1E97D5;padding: 20px;"
            alt="">
        </div>
        <div class="sidebar-profile-info">

        </div>
      </div>

      <p>full name</p>
      <p>City</p>
      <span class="float-right" style="color: #1E97D5;">Edit</span>
      <br>
      <hr>

      <img src="../assets/img/BG.png" alt="">
      <br>
      <span>Complete Your Medical Record</span>
      <ul>
        <li><a href="" style="color: #1E97D5;">LOG OUT</a> </li>
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
          <div class="row" style="background-color: #D8EAE6; width: 100%;margin-left: 0;padding: 10px;">
            <ul class="list-item">

              <li class="item j" onclick="displayHide()" ><a href="#">Personal Profile</a></li>
              
              <li class="item  "onclick="displayShow()" > <a href="#"> Medical Record<i class=""></i> </a>
                <ul class="dropdown" id="med">
                 
                    <li class="dropdown-btn"> <img src="../assets/img/PHOTO.png" alt="" >   General Medical Information  
                       <i class="fa fa-caret-down"></i>
                    </li>
                    <div class="dropdown-container">
                      <form id="example-form" method="post" name="updatemp">

                        <section>
                          <div class="wizard-content">
                            <div class="row">
                              <div class="col m6">
                         
                                  <div class="input-field col  ">
          
                                    <input id="Length" name="Length" placeholder="Length (Cm)" type="text" required>
                                  </div>
          
                                  <div class="input-field ">
          
                                    <input id="Weight" name="Weight" placeholder="Weight (Kg)" value="" type="text"
                                      autocomplete="off" required>
                                  </div>
                          
           
                                  <div class="input-field " >
                                    <select name="Blood-type" autocomplete="off"  >
                                      <option  >Blood type</option>
                                      <option value="Male">A+</option>
                                      <option value="Female">B-</option>
          
                                    </select>
                                  </div>
                             
                                  <div class="input-field">
          
                                    <input id="Drink" name="Drink" value="" placeholder="Drink Alcohol?" type="text"
                                      autocomplete="off" required>
                                  </div>
           
                                  <div class="input-field">
          
                                    <input id="smoke" name="smoke" value="" placeholder="Smoking?" type="text"
                                      autocomplete="off" required>
                                  </div>
                                  <div class="input-field  ">
                                    <center><button type="submit" name="change" style="padding:10px;color:#fff;margin-left:100px;width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Save</button></center>
                                    
                                    </div>
          
          
          
                              </div>
                            </div>
                          </div>
                        </section>
          
          
          
          
                      </form>
                    </div>

                    <li class="dropdown-btn"> <img src="../assets/img/PHOTO-1.png" alt="" >  Chronic Diseases Information
                      <i class="fa fa-caret-down"></i>
                   </li>
                   <div class="dropdown-container">
                     <a href="#">Link 1</a>
                     <a href="#">Link 2</a>
                     <a href="#">Link 3</a>
                   </div>
                   <li class="dropdown-btn"> <img src="../assets/img/PHOTO-2.png" alt="" > Allergies Information
                    <i class="fa fa-caret-down"></i>
                 </li>
                 <div class="dropdown-container">
                   <a href="#">Link 1</a>
                   <a href="#">Link 2</a>
                   <a href="#">Link 3</a>
                 </div>
                 <li class="dropdown-btn"> <img src="../assets/img/PHOTO-3.png" alt="" > Current Drugs Information
                  <i class="fa fa-caret-down"></i>
               </li>
               <div class="dropdown-container">
                 <a href="#">Link 1</a>
                 <a href="#">Link 2</a>
                 <a href="#">Link 3</a>
               </div>
               <li class="dropdown-btn"> <img src="../assets/img/PHOTO-4.png" alt="" > Laboratory Information 
                <i class="fa fa-caret-down"></i>
             </li>
             <div class="dropdown-container">
               <a href="#">Link 1</a>
               <a href="#">Link 2</a>
               <a href="#">Link 3</a>
             </div>
             <li class="dropdown-btn"> <img src="../assets/img/PHOTO-5.png" alt="" > Surgical Operation Information
              <i class="fa fa-caret-down"></i>
           </li>
           <div class="dropdown-container">
             <a href="#">Link 1</a>
             <a href="#">Link 2</a>
             <a href="#">Link 3</a>
           </div>    
                      <div class="input-field  ">
                  <center><button type="submit" name="change" style="padding:10px;color:#fff;margin-left:100px;width:150px;border:none;text-transform:uppercase" class="waves-effect waves-light btn indigo m-b-xs" onclick="">Save</button></center>
                  
                  </div>  </ul>
                
              </li>
             
            </ul>
          <script>
  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  function displayHide() {
            document.getElementById("med").style.visibility = "hidden";
          
         }
         function displayShow() {
            document.getElementById("med").style.visibility = "visible";
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
  </script>
            </ul>
          </div>
          <div id="ex" class="information">
            <form id="example-form" method="post" name="updatemp">

              <section>
                <div class="wizard-content">
                  <div class="row">
                    <div class="col m6">
                      <div class="row">



                        <div class="input-field col m6 s12 ">

                          <input id="firstName" name="firstName" placeholder="First name" type="text" required>
                        </div>

                        <div class="input-field ">

                          <input id="lastName" name="lastName" placeholder="Last name " value="" type="text"
                            autocomplete="off" required>
                        </div>
                      </div>
                      <div class="input-field">

                        <input id="userName" name="userName" value="" placeholder="Username" type="text"
                          autocomplete="off" required>
                      </div>

                      <div class="input-field">
                        <input name="email" type="email" id="email" placeholder="Email" value=" " autocomplete="off"
                          required>

                      </div>

                      <div class="input-field  ">
                        <input id="phone" name="mobileno" style="margin:5px;" type="tel" placeholder="Mobile number"
                          maxlength="10" autocomplete="off" required>
                      </div>



                      <div class="row">

                        <div class="input-field ">
                          <input id="birthdate" name="dob" class="datepicker" type="date" value="" style="margin:20px;">
                        </div>
                        <div class="input-field " style="margin:20px;margin-left:50px;">
                          <select name="gender" autocomplete="off">

                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                          </select>
                        </div>
                      </div>



                    </div>
                  </div>
                </div>
              </section>




            </form>



            <form class="col s12" name="chngpwd" method="post">
              <div class="page-title" style="  padding-left: 20px;   font-size: 17px;">Change Password</div>
              <div class="input-field  ">

                <input id="password" type="password" placeholder="Enter Old Password"
                  style="width:95%;padding-top:40px;margin-left:30px;border:none;border-bottom:1px solid gray;padding-bottom:8px;outline:none"
                  class="validate" autocomplete="off" name="password" required>

              </div>

              <div class="input-field  ">

                <input id="password" type="password" placeholder="Enter New Password" name="newpassword"
                  class="validate"
                  style="width:95%;padding-top:40px;margin-left:30px;border:none;border-bottom:1px solid gray;padding-bottom:8px;margin-top:20px;outline:none"
                  autocomplete="off" required>

              </div>

              <div class="input-field ">

                <input id="password" type="password" placeholder="Enter Confirm Password" name="confirmpassword"
                  class="validate" autocomplete="off"
                  style="width:95%;padding-top:40px;margin-left:30px;border:none;border-bottom:1px solid gray;padding-bottom:8px;margin-top:20px;outline:none"
                  required>

              </div>

              <div class="input-field  ">
                <center><button type="submit" name="change"
                    style="padding:10px;color:#fff;margin-left:20px;width:100px;border:none;text-transform:uppercase"
                    class="waves-effect waves-light btn indigo m-b-xs" onclick="">Save</button></center>

              </div>


            </form>
          </div>
        </div>
      </div>
    </div>




    <div class="left-sidebar-hover"></div>

  </div>
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
        <span>Made with <span class="heart">???</span> hadeel&nada</span>
      </div>

    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>