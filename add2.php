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
   
   <?php
  
  include("dbconnection.php");
$add2 = $_SESSION['add2'];
  $sql = "SELECT * FROM img WHERE aid=$add2";
  $result = mysqli_query($connection,$sql);
  while($row = mysqli_fetch_assoc($result)){
      echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width = "250" height = "250">';
      
  }
    
    $sqlquery = "SELECT * FROM advertisement ORDER BY date";
                                
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
            <td><?php echo "Price Rs : ".$data[1]['price']?></td>
            <td rowspan="4"><?php echo "Brand : ".$data[1]['brand'].nl2br("\n\n")."Model Year : ".$data[1]['model_year'].nl2br("\n\n")."Model: ".$data[1]['model'].nl2br("\n\n")."Condition : ".$data[1]['vehicle_condition'].nl2br("\n\n")."Mileage : ".$data[1]['Mileage'].nl2br("\n\n")."Model Year : ".$data[1]['model_year'].nl2br("\n\n")."Transmission : ".$data[1]['transmission'].nl2br("\n\n")."Fual Type : ".$data[1]['fuel_type'].nl2br("\n\n")."Eng.Capacity : ".$data[1]['engine_capacity'].nl2br("\n\n")."District : ".$data[1]['district'].nl2br("\n\n")."location : ".$data[1]['location'].nl2br("\n\n")."posted date : ".$data[1]['date']?></td>
        </tr>
        <tr>
            <td><?php echo "Discription : <br>".$data[1]['discription']?></td>
        </tr>
        <tr>
            <td><?php echo "Contact Number : <br>".$data[1]['phone']?></td>
        </tr>
    </table>
</body>
</html>