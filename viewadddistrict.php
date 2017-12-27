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
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <button class="btn btn-primary btn-block"  onclick="location.href='indexlogin.php';">Back</button><br>
                           
						</div><!--/category-products-->
					
						
																		
					
					</div>
				</div>
		        
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">District</h2>
							<?php
    
                                include 'dbconnection.php';
                                $sqlquery = "SELECT * FROM advertisement WHERE district='Colombo' ORDER BY date DESC";
                                
                                $result = mysqli_query($connection,$sqlquery);
                                $data = array();

                                while($row = mysqli_fetch_assoc($result))
                                    {
                                        $data[] = $row;
                                    }
                                
                                          $_SESSION['adddistrict1']= $data[0]['aid'];
                                          $_SESSION['adddistrict2']= $data[1]['aid'];
                                          $_SESSION['adddistrict3']= $data[2]['aid'];
                                          $_SESSION['adddistrict4']= $data[3]['aid'];                          
                                          $_SESSION['adddistrict5']= $data[4]['aid'];
                                          $_SESSION['adddistrict6']= $data[5]['aid'];
                                          $_SESSION['adddistrict7']= $data[6]['aid'];
                                    
                                
$a = $data[0]['aid'];
                         
$sql1 = "SELECT * FROM img WHERE aid=$a";
  $result1 = mysqli_query($connection,$sql1);
  $row1 = mysqli_fetch_assoc($result1);
                                    
 $b = $data[1]['aid'];
                         
 $sql2 = "SELECT * FROM img WHERE aid=$b";
  $result2 = mysqli_query($connection,$sql2);
  $row2 = mysqli_fetch_assoc($result2);
                                    
$c = $data[2]['aid'];
                         
$sql3 = "SELECT * FROM img WHERE aid=$c";
  $result3 = mysqli_query($connection,$sql3);
  $row3 = mysqli_fetch_assoc($result3);
                                    
                                    
$d = $data[3]['aid'];
                         
$sql4 = "SELECT * FROM img WHERE aid=$d";
  $result4 = mysqli_query($connection,$sql4);
  $row4 = mysqli_fetch_assoc($result4);
                                    
$e = $data[4]['aid'];
                         
$sql5 = "SELECT * FROM img WHERE aid=$e";
  $result5 = mysqli_query($connection,$sql5);
  $row5 = mysqli_fetch_assoc($result5);
                                    
$f = $data[5]['aid'];
                         
$sql6 = "SELECT * FROM img WHERE aid=$f";
  $result6 = mysqli_query($connection,$sql6);
  $row6 = mysqli_fetch_assoc($result6);
                                    
$g = $data[6]['aid'];
                         
$sql7 = "SELECT * FROM img WHERE aid=$g";
  $result7 = mysqli_query($connection,$sql7);
  $row7 = mysqli_fetch_assoc($result7);
                                    
    
  
    
                            ?>
						    <table class="table table-striped" border=1>
						    <tr>
						         <td>
						             <a href="adddistrict.php"> <table width="100%">
						                <tr>
						                    <td rowspan="5"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" width = "300" height = "175">'; ?></td>
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
						             <a href=""> <table width="100%">
						                <tr>
						                    <td rowspan="5"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row2['image']).'" width = "300" height = "175">'; ?></td>
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
						                    <td rowspan="5"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row3['image']).'" width = "300" height = "175">'; ?></td>
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
						                    <td rowspan="5"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row4['image']).'" width = "300" height = "175">'; ?></td>
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
						                    <td rowspan="5"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row5['image']).'" width = "300" height = "175">'; ?></td>
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
						                    <td rowspan="5"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row6['image']).'" width = "300" height = "175">'; ?></td>
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
						             <a href=""> <table width="100%">
						                <tr>
						                    <td rowspan="5"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row7['image']).'" width = "300" height = "175">'; ?></td>
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

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>
