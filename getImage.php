<?php
  
  include("dbconnection.php");
  $sql = "SELECT * FROM img";
  $result = mysqli_query($connection,$sql);
  while($row = mysqli_fetch_assoc($result)){
      echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width = "250" height = "250">';
      
  }
 
  mysqli_close($connection);
?>




