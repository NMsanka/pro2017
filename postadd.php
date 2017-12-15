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
<title>POST ADD</title>
<link href="css/bootstrap1.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style_signup.css" rel="stylesheet" type="text/css" />
<script src="js/signup.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>
       
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
<script>
function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>

<script>
    
    $('#add_more').click(function() {
          "use strict";
          $(this).before($("<div/>", {
            id: 'filediv'
          }).fadeIn('slow').append(
            $("<input/>", {
              name: 'file[]',
              type: 'file',
              id: 'file',
              multiple: 'multiple',
              accept: 'image/*'
            })
          ));
        });

        $('#upload').click(function(e) {
          "use strict";
          e.preventDefault();

          if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
            alert("No files are selected.");
            return false;
          }

          // Now, upload the files below...
          // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
        });

        deletePreview = function (ele, i) {
          "use strict";
          try {
            $(ele).parent().remove();
            window.filesToUpload.splice(i, 1);
          } catch (e) {
            console.log(e.message);
          }
        }

        $("#file").on('change', function() {
          "use strict";

          // create an empty array for the files to reside.
          window.filesToUpload = [];

          if (this.files.length >= 1) {
            $("[id^=previewImg]").remove();
            $.each(this.files, function(i, img) {
              var reader = new FileReader(),
                newElement = $("<div id='previewImg" + i + "' class='previewBox'><img /></div>"),
                deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>X</span>").prependTo(newElement),
                preview = newElement.find("img");

              reader.onloadend = function() {
                preview.attr("src", reader.result);
                preview.attr("alt", img.name);
              };

              try {
                window.filesToUpload.push(document.getElementById("file").files[i]);
              } catch (e) {
                console.log(e.message);
              }

              if (img) {
                reader.readAsDataURL(img);
              } else {
                preview.src = "";
              }

              newElement.appendTo("#filediv");
            });
          }
        });
</script>
<script>
    
    function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
    </script>


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
								<!--<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>-->
								<li> <form class="form-inline" action="">
                                                                                 
                                          <input type="email" class="form-control" id="search" placeholder="Search" name="search">
                                    </form>
                                </li>
								 <li><button type="button" class="btn btn-default">GO</button></li>
   
								<li>  <button type="button" class="btn btn-success">Post Your Add</button></li>
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
	</header><!--/header-->
	        
 
  

  <div class="container">
  
	<div style = "margin-left:150px; margin-right:-430px" class="row">
       
        <div class="col-md-7">
<form action="" method="post" id="fileForm" role="form" onsubmit="" enctype="multipart/form-data">
<div class="form-group">
<label for="exampleInputEmail1">Add images</label>
<div class="row">
 
  <div class="col-md-12">
      <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
  </div>
  <div class="col-md-6">
     
  </div>
    </div>
 </div>
 <div class="row" id="image_preview"></div>
 <div class="form-group">
    <label for="exampleFormControlSelect1">Select the Vehicle Brand</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Brand</option>
      <option>Toyota</option>
      <option>BMW</option>
      <option>TATA</option>
      <option>Suzuki</option>
      <option>Nissan</option>
    </select>
  </div>
 <div class="form-group">
    <label for="exampleInputmodel">model</label>
    <input type="text" class="form-control" id="exampleInputmodel" aria-describedby="emailHelp" placeholder="model">
    
  </div>
  <div class="form-group">
    <label for="exampleInputmodel">model year</label>
    <input type="text" class="form-control" id="exampleInputmodelyear" aria-describedby="emailHelp" placeholder="model year">
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select the condition</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Brand New</option>
      <option>Used</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mileage(km)</label>
    <input type="text" onkeypress='validate(event)' class="form-control" id="exampleInputPassword1" placeholder="Mileage">
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Transmission</label>
    <select class="form-control" id="exampleFormControlSelect1" placeholder="Transmission">
      <option>Manual</option>
      <option>Automatic</option>
      <option>triptonic</option>
      <option>Other transmission</option>
      
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Fuel Type</label>
    <select class="form-control" id="exampleFormControlSelect1" placeholder="Transmission">
      <option>Petrol</option>
      <option>Diesel</option>
      <option>triptonic</option>
      <option>Other transmission</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Engine Capacity(cc)</label>
    <input type="text" onkeypress='validate(event)' class="form-control" id="exampleInputPassword1" placeholder="Engine Capacity(cc)">
  </div>
  
   <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Discription"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Price(Rs)</label>
    <input type="text" onkeypress='validate(event)' class="form-control" id="exampleInputPassword1" placeholder="Price(Rs)">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Phone number to display</label>
    <input maxlength="10" type="text" onkeypress='validate(event)' class="form-control" id="exampleInputPassword1" placeholder="Phone">
  </div>
   
   
     <button type="button" class="btn btn-success">Click Here To Post Your Add</button>
   
</form><br><br>
   
        </div>
      </div>
    </div>
    
    
    
    
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
    
</body>
</html>
