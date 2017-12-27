<?php
 session_start();

if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    
    <link href="jsmaps/jsmaps.css" rel="stylesheet" type="text/css" />
<script src="jsmaps/jsmaps-libs.js" type="text/javascript"></script>
<script src="jsmaps/jsmaps-panzoom.js" type="text/javascript"></script>
<script src="jsmaps/jsmaps.min.js" type="text/javascript"></script>
<script src="maps/world.js" type="text/javascript"></script>
<style>
    #border{
        border:1px solid black;
    }    
</style>

    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>  Contact Us : 011-111111</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> yannagaman@gmail.com</a></li>
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h1><span style="color:orange">Y</span>anna gaman.lk</h1>
				   
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li>  <button type="button" class="btn btn-success" onclick="location.href='postadd.php';">Post Your Add</button></li>
								<li><button type="button" class="btn btn-info" onclick="location.href='indexlogin.php'">Home</button></li>
								
								<li> <button type="button" class="btn btn-warning" onclick="location.href='logout.php';">Logout</button></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
	</header><!--/header-->
   
   <?php
  
  include("dbconnection.php");
$addused1 = $_SESSION['addused1'];
  $sql = "SELECT * FROM img WHERE aid=$addused1";
  $result = mysqli_query($connection,$sql);
  while($row = mysqli_fetch_assoc($result)){
      echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width = "400" height = "250">';
      
  }
    
    $sqlquery = "SELECT * FROM advertisement WHERE vehicle_condition='Used' ORDER BY date DESC";
                                
                                $result = mysqli_query($connection,$sqlquery);
                                $data = array();

                                while($row = mysqli_fetch_assoc($result))
                                    {
                                        $data[] = $row;
                                    }
                                
 
  mysqli_close($connection);
?>
    <table class="table table-striped" align="center" border = 1>
        <tr>
            <td><?php echo "Price Rs : ".$data[0]['price']?></td>
            <td rowspan="4"><?php echo "Brand : ".$data[0]['brand'].nl2br("\n\n")."Model Year : ".$data[0]['model_year'].nl2br("\n\n")."Model: ".$data[0]['model'].nl2br("\n\n")."Condition : ".$data[0]['vehicle_condition'].nl2br("\n\n")."Mileage : ".$data[0]['Mileage'].nl2br("\n\n")."Model Year : ".$data[0]['model_year'].nl2br("\n\n")."Transmission : ".$data[0]['transmission'].nl2br("\n\n")."Fual Type : ".$data[0]['fuel_type'].nl2br("\n\n")."Eng.Capacity : ".$data[0]['engine_capacity'].nl2br("\n\n")."District : ".$data[0]['district'].nl2br("\n\n")."location : ".$data[0]['location'].nl2br("\n\n")."posted date : ".$data[0]['date']?></td>
        </tr>
        <tr>
            <td><?php echo "Discription : <br>".$data[0]['discription']?></td>
        </tr>
        <tr>
            <td><?php echo "Contact Number : <br>".$data[0]['phone']?></td>
        </tr>
    </table>
    
    <footer id="footer"><!--Footer-->
		<div align = "center" class="footer-top">
			<br><h2  class="text-info"> DO YOU HAVE SOMETHING TO SELL<br></h2>
			 <button type="button" class="btn btn-success" onclick="location.href='postadd.php'">Post Your Add</button>
            
		</div><br>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Popular Search</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Cars</a></li>
								<li><a href="#">Motor Bikes</a></li>
								<li><a href="#">Vans</a></li>
								<li><a href="#">Busses Cards</a></li>
								<li><a href="#">Lorries</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Social</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Blog</a></li>
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Youtube</a></li>
								<li><a href="#">Google+</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About site</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About YannaGaman.lk</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 YannaGaman.lk All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="">YannaGaman.lk</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
</body>
</html>