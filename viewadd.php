<?php

session_start();

if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
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

</head><!--/head-->


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
						<div class="logo pull-left">
							<a href="index.html"><img height = "50px" src="images/home/logo.jpg" alt="" /></a>
						</div>
				   
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li> <form class="form-inline" action="">
                                                                                 
                                          <input type="email" class="form-control" id="search" placeholder="Search" name="search">
                                    </form>
                                </li>
								 <li><button type="button" class="btn btn-default">GO</button></li>
   
								<li>  <button type="button" class="btn btn-success" onclick="location.href='postadd.php';">Post Your Add</button></li>
								<li><h4 style="color:blue">Welcome <?php echo $_SESSION['username']?></h4></li>
								<li> <button type="button" class="btn btn-warning" onclick="location.href='logout.php';">Logout</button></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <button class="btn btn-primary btn-block" onclick="location.href='viewbrandnew.php';">Brand New Vehicles</button><br>
                            <button class="btn btn-primary btn-block">Used Vehicles</button>
							
						</div><!--/category-products-->
					
						
																		
					
					</div>
				</div>
		        
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">District</h2>
							<?php
    
                                include 'dbconnection.php';
                                $sqlquery = "SELECT * FROM advertisement ORDER BY date";
                                
                                $result = mysqli_query($connection,$sqlquery);
                                $data = array();

                                while($row = mysqli_fetch_assoc($result))
                                    {
                                        $data[] = $row;
                                    }
                                
                                          $_SESSION['add1']= $data[0]['aid'];
                                          $_SESSION['add2']= $data[1]['aid'];
                                          $_SESSION['add3']= $data[2]['aid'];
                                          $_SESSION['add4']= $data[3]['aid'];                          
                                          $_SESSION['add5']= $data[4]['aid'];
                                          $_SESSION['add6']= $data[5]['aid'];
                                          $_SESSION['add7']= $data[6]['aid'];
                                
    
  
    
                            ?>
						    <table class="table table-striped" border=1>
						    <tr>
						         <td>
						             <a href="add1.php"> <table width="100%">
						                <tr>
						                    <td rowspan="5"><img src="images/vehicle/aqua.jpg" width="300" height="175" /></td>
						                </tr>
						                <tr>
                                            <td width="100%"><h3>&nbsp;&nbsp;&nbsp;<?php echo $data[0]['brand']." ".$data[0]['model']." ".$data[0]['model_year'];?></h3></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:grey">&nbsp;&nbsp;&nbsp;&nbsp;posted date : <?php echo $data[0]['date']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[0]['district']." , ".$data[0]['location']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;Rs <?php echo $data[0]['price']; ?></h4></td>
						                </tr> 
						                 
                                         </table></a>
						             
						         </td>                     
                               
						    </tr>
							<tr>
						         <td>
						             <a href="add2.php"> <table width="100%">
						                <tr>
						                    <td rowspan="5"><img src="images/vehicle/aqua.jpg" width="300" height="175" /></td>
						                </tr>
						                <tr>
                                            <td width="100%"><h3>&nbsp;&nbsp;&nbsp;<?php echo $data[0]['brand']." ".$data[1]['model']." ".$data[1]['model_year'];?></h3></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:grey">&nbsp;&nbsp;&nbsp;&nbsp;posted date : <?php echo $data[1]['date']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[1]['district']." , ".$data[1]['location']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;Rs <?php echo $data[1]['price']; ?></h4></td>
						                </tr> 
						                 
                                         </table></a>
						             
						         </td>                            
                               
						    </tr>
						    <tr>
						           <td>
						             <a href=""> <table width="100%">
						                <tr>
						                    <td rowspan="5"><img src="images/vehicle/aqua.jpg" width="300" height="175" /></td>
						                </tr>
						                <tr>
                                            <td width="100%"><h3>&nbsp;&nbsp;&nbsp;<?php echo $data[2]['brand']." ".$data[2]['model']." ".$data[2]['model_year'];?></h3></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:grey">&nbsp;&nbsp;&nbsp;&nbsp;posted date : <?php echo $data[2]['date']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[2]['district']." , ".$data[2]['location']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;Rs <?php echo $data[2]['price']; ?></h4></td>
						                </tr> 
						                 
                                         </table></a>
						             
						         </td>                          
                               
						    </tr>
						    <tr>
						          <td>
						             <a href=""> <table width="100%">
						                <tr>
						                    <td rowspan="5"><img src="images/vehicle/aqua.jpg" width="300" height="175" /></td>
						                </tr>
						                <tr>
                                            <td width="100%"><h3>&nbsp;&nbsp;&nbsp;<?php echo $data[3]['brand']." ".$data[3]['model']." ".$data[3]['model_year'];?></h3></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:grey">&nbsp;&nbsp;&nbsp;&nbsp;posted date : <?php echo $data[3]['date']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[3]['district']." , ".$data[3]['location']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;Rs <?php echo $data[3]['price']; ?></h4></td>
						                </tr> 
						                 
                                         </table></a>
						             
						         </td>                           
                               
						    </tr>
                                <tr>
						            <td>
						             <a href=""> <table width="100%">
						                <tr>
						                    <td rowspan="5"><img src="images/vehicle/aqua.jpg" width="300" height="175" /></td>
						                </tr>
						                <tr>
                                            <td width="100%"><h3>&nbsp;&nbsp;&nbsp;<?php echo $data[4]['brand']." ".$data[4]['model']." ".$data[4]['model_year'];?></h3></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:grey">&nbsp;&nbsp;&nbsp;&nbsp;posted date : <?php echo $data[4]['date']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[4]['district']." , ".$data[4]['location']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;Rs <?php echo $data[4]['price']; ?></h4></td>
						                </tr> 
						                 
                                         </table></a>
						             
						         </td>                           
                               
						    </tr>
						    <tr>
						           <td>
						             <a href=""> <table width="100%">
						                <tr>
						                    <td rowspan="5"><img src="images/vehicle/aqua.jpg" width="300" height="175" /></td>
						                </tr>
						                <tr>
                                            <td width="100%"><h3>&nbsp;&nbsp;&nbsp;<?php echo $data[5]['brand']." ".$data[5]['model']." ".$data[5]['model_year'];?></h3></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:grey">&nbsp;&nbsp;&nbsp;&nbsp;posted date : <?php echo $data[5]['date']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[5]['district']." , ".$data[5]['location']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;Rs <?php echo $data[5]['price']; ?></h4></td>
						                </tr> 
						                 
                                         </table></a>
						             
						         </td>                            
                               
						    </tr>
						    <tr>
						           <td>
						             <a href="add3.php"> <table width="100%">
						                <tr>
						                    <td rowspan="5"><img src="images/vehicle/aqua.jpg" width="300" height="175" /></td>
						                </tr>
						                <tr>
                                            <td width="100%"><h3>&nbsp;&nbsp;&nbsp;<?php echo $data[6]['brand']." ".$data[6]['model']." ".$data[6]['model_year'];?></h3></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:grey">&nbsp;&nbsp;&nbsp;&nbsp;posted date : <?php echo $data[6]['date']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[6]['district']." , ".$data[6]['location']; ?></h4></td>
						                </tr>
						                <tr>
						                    <td><h4 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;Rs <?php echo $data[6]['price']; ?></h4></td>
						                </tr> 
						                 
                                         </table></a>
						             
						         </td>          
						    </tr>
						    
                        </table>
						
						
					</div><!--features_items-->
					
					
						
					
				</div>
                
			</div>
		</div>
	</section>
	<footer id="footer"><!--Footer-->
		<div align = "center" class="footer-top">
			<br><h2  class="text-info"> DO YOU HAVE SOMETHING TO SELL<br></h2>
			 <button type="button" class="btn btn-success">Post Your Add</button>
            
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
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
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
							<h2>About Shopper</h2>
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
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>
