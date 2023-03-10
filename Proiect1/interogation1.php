<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Date Autocar</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
<div class="header">
  	<h2>Interogation</h2>
</div>
<form method = "post" action = "interogation1.php"> 
  <?php include('errors.php'); ?>

  <div class="input-group">
  	  <label>Date despre sofer:</label>
      <p> Introduceti numarul de inmatriculare </p>
  	  <input type="nrinmatr" name="nrinmatr" value="<?php echo $nrinmatr; ?>">
  	</div>
      <div class="input-group">
  	  <button type="submit" class="btn" name="interogation_autocar">Done</button>
  	</div>



</body>
</html>