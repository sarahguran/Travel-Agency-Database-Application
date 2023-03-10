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
<form method = "post" action = "find_autocar.php"> 
  <?php include('errors.php'); ?>

  <div class="input-group">
  	  <label>Date despre sofer:</label>
      <p> Introduceti numarul de inmatriculare </p>
  	  <input type="nrinmatr" name="nrinmatr" value="<?php echo $nrinmatr; ?>">
  	</div>
      <div class="input-group">
  	  <button type="submit" class="btn" name="interogation_autocar">Done</button>
  	</div>

<p> Autocarele disponibile dupa data de: (AAAA-LL-ZZ) </p>
<div class="input-group">
  	  <input type="data" name="data" value="<?php echo $data; ?>">
  	</div>
    <div class="input-group">
  	  <button type="submit" class="btn" name="interogation_autocarr">Find</button>
  	</div>

	  <p> Autocarele cu nr de km mai mare decat media</p>
    <div class="input-group">
  	  <button type="submit" class="btn" name="interogation_autocarrr">Find</button>
  	</div>
      
      <p> <a href="autocar.php" style="color: green;">back</a> </p>

</body>
</html>