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

<p  >full name</p>
<p >Physical Therapy</p>
<span> <i class="fas fa-star staryel"></i></span>
<span> <i class="fas fa-star staryel"></i></span>
<span> <i class="fas fa-star staryel"></i></span>
<span> <i class="fas fa-star staryel"></i></span>
<span> <i class="fas fa-star-half  "style="color:gray"></i></span>
<br>
<span class="float-right" style="color: #1E97D5;">Edit</span>
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
                                 
                                    <li class="dropdown-btn"> <img src="../assets/img/PHOTO-12.png" alt="" >   Syndicate Membership Card
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
                                                    <option  >Choose Specialty  </option>
                                                    <option value="Male">Arthopedician Specialist</option>
                                                    <option value="Female">rthopedician Specialis</option>
                        
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
                  </script>    </ul>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>