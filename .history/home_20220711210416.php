<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['palogin'])==0)
    {   
header('location:Plogin.php');
}
else{

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>DrSaver</title>
    <link rel="shortcut icon" href="assets/img/doctor.png" type="image/x-icon">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  
    <!--header-->
    <div class="header">
         
<div class="header-content">
    <div class="logo">
        <img src=" assets/img/drsaver.png" alt="logo image" draggable="false">
        
     </div>
       <ul class="nav">
         <li><a href="#" class="active">Home</a></li>
         <li><a href="#" >Consultation</a></li>

         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Articles
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="articles.html">latest article</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
         <li><a href="#"class="icon fa fa-search fa-2x" >Search</a></li>
         <li><a href="#"class="icon fa fa-bell" >  </a></li>

         <li><a href="selection.php"class="icon fa fa-user fa-2x" >  </a></li>
      

   
            
      

     </ul>
     <div class="clear"></div>
</div>
  </div>
  
    <!--home section-->
    <div class="home">
        <div class="overlay">
         <div class="home-content">
             <h1 class="title">Welcome to dr.saver</h1>
             <p class="home-desc">Best Medical Consultation
                You Can Get For You</p>
   
              
             <button class="btn btn-learn hover-opacity">Learn more</button>
            </div>
         </div>
    </div>

 
    <!--About section  -->
<div class="about pd-y">
  
   <div class="container">
    <div class="about-content">
        <div class="about-item ltr-effect">
            <i class="icon fa fa-abacus  fa-2x"></i>
            <h2 class="about-item-title">Qualified Doctors</h2>
            <p class="about-item-desc">lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <a href="" class="about-item-link">read more</a>
        </div>
        <div class="about-item ltr-effect mg">
            <i class="icon fa fa-magic fa-2x"></i>
            <h2 class="about-item-title">24 Hours Service</h2>
            <p class="about-item-desc">lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <a href="" class="about-item-link">read more</a>
        </div>
        <div class="about-item ltr-effect">
            <i class="icon fa fa-cash-register fa-2x"></i>
            <h2 class="about-item-title">Emergency Care  </h2>
            <p class="about-item-desc">lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <a href="" class="about-item-link">read more</a>
        </div>
         </div>
   </div>
</div>

<!--department section-->
  
<div class="section-header">
  <h2 class="section-title">Department</h2>
  <span class="line"></span>
         <div class="container">
             <div class="numbers-items pd-y">
                 <div class="number-item">
                     <img  src="assets/img/Oval1.png"></img>
                     <h3 class="number-item-title"style="color: #000;">Psychiatry</h3>
              
                 </div>
                 <div class="number-item">
                  <img  src="assets/img/Oval2.png"></img>
                    <h3 class="number-item-title"style="color: #000;">Orthopedic</h3>
                   
                </div>
                <div class="number-item">
                  <img  src="assets/img/Oval3.png"></img>
                    <h3 class="number-item-title"style="color: #000;">Dermatology</h3>           
                </div>
                <div class="number-item">
                  <img  src="assets/img/Oval4.png"></img>
                    <h3 class="number-item-title"style="color: #000;">Cardiology</h3>                      
                </div>
             </div>
             <div class="numbers-items pd-y">
              <div class="number-item">
                  <img  src="assets/img/Oval5.png"></img>
                  <h3 class="number-item-title"style="color: #000;">Urology</h3>
           
              </div>
              <div class="number-item">
               <img  src="assets/img/Oval6.png"></img>
                 <h3 class="number-item-title"style="color: #000;">General</h3>
                
             </div>
             <div class="number-item">
               <img  src="assets/img/Oval7.png"></img>
                 <h3 class="number-item-title"style="color: #000;">Pediatric</h3>           
             </div>
             <div class="number-item">
               <img  src="assets/img/Oval.png"></img>
                 <h3 class="number-item-title"style="color: #000;">Otolaryngology</h3>                      
             </div>
          </div>
          <div class="pd-y"></div>
         </div>
  
 

<!--number section-->
<div class="numbers">
  <div class="overlay">
      <div class="container">
          <div class="numbers-items pd-y">
              <div class="number-item">
                  <i class="icon fa fa-user fa-2x"></i>
                  <h3 class="number-item-title">451</h3>
                  <span class="number-item-text">happy patients</span>
              </div>
              <div class="number-item">
                 <i class="icon fa fa-hand-holding-seedling fa-2x"></i>
                 <h3 class="number-item-title">12</h3>
                  <span class="number-item-text">happy patients</span>
             </div>
             <div class="number-item">
                 <i class="icon fa fa-book-medical fa-2x"></i>
                 <h3 class="number-item-title">451k</h3>
                  <span class="number-item-text">happy patients</span>
             </div>
             <div class="number-item">
                 <i class="icon fa fa-clinic-medical fa-2x"></i>
                 <h3 class="number-item-title">451</h3>
                  <span class="number-item-text">happy patients</span>
             </div>
          </div>
      </div>
  </div>
</div>


<!--blog section-->
   
<div class="blog pd-y">
    <div class="section-header">
        <h2 class="section-title">Latest Articles </h2>
        <span class="line"></span>
     <button style="width: 10%; margin-left: 60%;background-color: #fff; color: #000;">Discover All</button> </div>
  
    <div class="container">
      <div class="blog-content">
          <div class="blog-item">
              <div class="blog-item-img">
                  <img src="assets/img/Rectangl.png" alt="">
              </div>
              <div class="blog-info">
                 <ul class="blog-list">
                  <li>
                      <i class="fa fa-user"></i>
                      john doe
                  </li>
                  <li>
                    <i class="fa fa-clock-o"></i>
                    18 Oct
                </li>
          
              </ul>
              <h3 class="blog-title">Human Nose Organoids Provide Better Understanding Of The First Steps Toward SARS-Cov-2 Infection</h3>
              <p class="blog-desc">lorem Ipsum is simply dummy text of the printing.lorem Ipsum is simply dummy text of the printing.lorem Ipsum is simply dummy text of the printing</p>
        <a href="#" class="blog-link">Read more</a> 
              </div>
              
            </div>
            <div class="blog-item mg">
                <div class="blog-item-img">
                    <img src="assets/img/heart.png" alt="">
                </div>
                <div class="blog-info">
                   <ul class="blog-list">
                    <li>
                        <i class="fa fa-user"></i>
                        john doe
                    </li>
                    <li>
                      <i class="fa fa-clock-o"></i>
                      18 Oct
                  </li>
                 
                </ul>
                <h3 class="blog-title">Study Uncovers Most Critical Genes That Cause Coronary Heart Disease</h3>
                <p class="blog-desc">lorem Ipsum is simply dummy text of the printing.lorem Ipsum is simply dummy text of the printing.lorem Ipsum is simply dummy text of the printing</p>
          <a href="#" class="blog-link">Read more</a> 
                </div>
                
              </div>
              <div class="blog-item">
                <div class="blog-item-img">
                    <img src="assets/img/Rectangle.png" alt="">
                </div>
                <div class="blog-info">
                   <ul class="blog-list">
                    <li>
                        <i class="fa fa-user"></i>
                        john doe
                    </li>
                    <li>
                      <i class="fa fa-clock-o"></i>
                      18 Oct
                  </li>
                 
                </ul>
                <h3 class="blog-title">Articles Accepted For Publication In The Journal Of Translational Medicine</h3>
                <p class="blog-desc">lorem Ipsum is simply dummy text of the printing.lorem Ipsum is simply dummy text of the printing.lorem Ipsum is simply dummy text of the printing</p>
          <a href="#" class="blog-link">Read more</a> 
                </div>
                
              </div>
      </div>
    </div>
</div>
 

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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>