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
<form method = "post" action = "find_obiectiv.php"> 
  <?php include('errors.php'); ?>

  <div class="input-group">
  	  <label>Obiectivele ce pot fi vizitate atunci cand aleg o excursie mai ieftina de :</label>
  	  <input type="pret" name="pret" value="<?php echo $pret; ?>">
  	</div>
      <div class="input-group">
  	  <button type="submit" class="btn" name="interogation_obiectiv">Cauta</button>
  	</div>

      <p> <a href="autocar.php" style="color: green;">back</a> </p>

</body>
</html>