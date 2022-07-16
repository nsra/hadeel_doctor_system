 
<?php
 session_start();
 include('config.php');
  

 if(strlen($_SESSION['plogin'])==0)
 {   
header('location:index.php');
}
else{
$eid=$_SESSION['emplogin'];
if(isset($_POST['update']))
{
if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$username 		= sha1($_POST['username']);
	$email 			= $_POST['email'];
	$password 		= sha1($_POST['password']);
	$c_password 		= sha1($_POST['c_password']);
	$phonenumber	= $_POST['phonenumber'];
$gender=$_POST['Gender']; 
$dob=$_POST['Dob']; 

		$sql = "INSERT INTO doctors_list (firstname, lastname,username, password,email ,dob,gender,c_password,phonenumber, ) VALUES(?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname,$username, $email,$password,$c_password , $phonenumber,$gender,$dob ]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
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
<section class="loginSection">
    <div class="row window-full">
        <div class="hero col-6 float-right ">
           <img  src="../assets/img/pregister.png"></img>
         
        </div>
        <div class="col-6 float-left text-center">
            <img  src="../assets/img/log1.png" style="margin-right: 35%;"></img>
            <div class="fright">
          
              <br>
           <p  class="pcol">Please complete to create your account.</p>
           <form action="" method="" class="" style="align-items: center;margin-left: 50px;">
            <div class="container">
              <section>
                <div class="wizard-content">
                    <div class="row">
                        <div class="col m6">
                            <div class="row">



                              <div class="input-field col m6 s12 ">

                                <input id="firstName" name="firstName"   placeholder="First name"  type="text" required>
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
                                <input type="password" placeholder="Password" name="password" required>
                                <input type="password" placeholder="Confirm Password" name="c_password" required>
                         
                                <div class="input-field  ">
                                 <input id="phone" name="mobileno"style="margin:5px;" type="tel" placeholder="Mobile number" maxlength="10" autocomplete="off" required>
                                </div>
                                
                                
                                 
                                <div class="row">
                                  
                                   
                                <div class="input-field ">
                                 <input id="birthdate" name="dob"  class="datepicker" type="date" value="" style="margin:20px;" >
                                </div>
                                <div class="input-field " style="margin:20px;margin-left:50px;">
                                <select  name="gender" autocomplete="off">
                                  <option value="gender">Gender</option>                                       
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                
                                </select>
                              
</div>
</div>


                            
                        </div>
                    </div>
                </div>
            </section>
         
          <br>
             
            <div class="row">
                <input type="checkbox" checked="checked"style="width:15px;margin-left:20px ; "id="toggle" name="term">  I agree with terms and conditions
           </div>
   
            </div>
            
            <script>
var checkbox = document.getElementById("toggle");
var register = document.getElementById("register");
register.disabled = true;
checkbox.onchange = function(){
	register.disabled = !this.checked;
}
</script>	
        <button type="submit" id="register" name="register" >Sign Up</button>
        <div class="col-md-6">
		<?php include 'register.php'?>
		</div>
      <p>Already have an account? <a  href="Plogin.php "> <span id="cplue">Log in</span> </p></a>
        
              
          </form>
        </div>
      </div> 
    </div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="assets/js/scripts.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var username	= $('#username').val();
      	var email 		= $('#email').val();
      var password 	= $('#password').val();
			var c_password	= $('#c_password ').val();
	var phonenumber = $('#phonenumber').val();
		var dob=$('#Dob ').val(); 	
  var gender=$('#Gender ').val(); 

			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'register.php',
					data: {firstname: firstname,lastname: lastname,username:username,email: email,password: password,c_password: c_password,phonenumber: phonenumber,dob: dob,gender:gender},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>