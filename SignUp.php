<!doctype html>
<?php
 session_start();
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![ENDif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![ENDif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![ENDif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![ENDif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SignUp</title>
<link href="css/bootstrap1.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style_signup.css" rel="stylesheet" type="text/css" />
<script src="js/signup.js"></script>

</head>

<body>

<header id="header"><!--header-->
				
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<br><a href="index.html"><img height = "50px" src="images/home/logo.jpg" alt="" /></a>
						</div>
				   
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
												 													
                                <li><br><button type="button" class="btn btn-info">Home</button></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
	</header><!--/header-->
	        <br>
 
<br>

  
  <?php

        include('dbconnection.php');
           if(isset($_POST['submit'])){
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $phonenumber = $_POST['phonenumber'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $username = $_POST['username'];
    
        
            $query = "INSERT INTO user (password,email,first_name,last_name,phone,username) VALUES('$password','$email','$firstname','$lastname',' $phonenumber','$username')";
   
       $run_query = mysqli_query($connection,$query);
   
        if($run_query){
            
            header ("location: aftersignup.html");
        }
    
        else{
            
           header ("location: SignUp.php");
            exit();
            
        }
 
        mysqli_close($connection);
         }
                
               
  ?>
  
  

  <div class="container">
  
	<div style = "margin-left:300px; margin-right:-240px" class="row">
       
        <div class="col-md-6">
            <form action="" method="post" id="fileForm" role="form" onsubmit="">
            <fieldset><legend class="text-center">Valid information is required</legend>

            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                    <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing"/> 
            </div>

            <div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> First name: </label>
                    <input class="form-control" type="text" name="firstname" id = "txt" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
            </div>

            <div class="form-group">
                <label for="lastname"><span class="req">* </span> Last name: </label> 
                    <input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)" placeholder="hyphen or single quote OK" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label> 
                    <input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>

            <div class="form-group">
                <label for="username"><span class="req">* </span> User name:  <small>This will be your login user name</small> </label> 
                    <input class="form-control" type="text" name="username" id = "txt" onkeyup = "Validate(this)" placeholder="minimum 6 letters" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="password"><span class="req">* </span> Password: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" />

                <label for="password"><span class="req">* </span> Password Confirm: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
            </div>

            <div class="form-group">
            
                <?php //$date_entered = date('m/d/Y H:i:s'); ?>
                <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                <hr>

                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href ="termsandservices.html" target="_blank" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit" value="Register">
            </div>
 

            </fieldset>
            </form><!-- ends register form -->
            <script>
                     document.getElementById("myForm").reset();
            
            </script>
   
        </div>
      </div>
    </div>
    
</body>
</html>
