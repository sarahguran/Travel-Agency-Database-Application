<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Date Obiectiv</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
<div class="header">
  	<h2>Interogation</h2>
</div>
<form method = "post" action = "find_hotel.php"> 
  <?php include('errors.php'); ?>

  
      <div class="input-group">
  	  <button type="submit" class="btn" name="interogation_hotel">Hoteluri ce sunt in mai multe excursii</button>
  	</div>
      <div class="input-group">
  	  <button type="submit" class="btn" name="interogation_hotell">cele mai scumpe hoteluri pentru fiecare excursi sortatate descrescator</button>
  	</div>

      <p> <a href="autocar.php" style="color: green;">back</a> </p>

</body>
</html>