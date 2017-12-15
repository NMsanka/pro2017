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
 <div class="container">
  
	<div style = "margin-left:300px; margin-right:-240px" class="row">
       
        <div class="col-md-6">
            <form action="" method="post" id="fileForm" role="form" onsubmit="">
            <fieldset><legend class="text-center">Enter Your Email address</legend>
            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label> 
                    <input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>

           
            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit" value="submit">
            </div>
 

            </fieldset>
            </form><!-- ends register form -->
            <script>
                     document.getElementById("myForm").reset();
            
            </script>
<?php
    if (isset($_POST['submit']))
    {     
    $to = $_POST['email'];
   
    $_SESSION['email'] = $to;

   
    $subject = 'Yannagaman.com reset password!!!!!!';
    $message = 'To Reset your password go to this link!!!!!  http://localhost:9090/dashboard/yanna_gaman/Password_Reset.php';
    $headers = "From: nmsankapadma@gmail.com\r\n";
        if (mail($to, $subject, $message, $headers)) {
        header("location:after_password_reset.php");
            
        } else {
            
        header("location:404.html");
              
        }

    }


?>
        </div>
        </div>
        </div>
</body>
</html>
