<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Update autocar</h2>
  </div>
<form method = "post" action = "update_autocar.php"> 
  <?php include('errors.php'); ?>

    <div class="input-group">
  	  <label>Nr de inmatriculare al autocarului la care aduceti modificari</label>
  	  <input type="nrinmatr" name="nrinmatr" value="<?php echo $nrinmatr; ?>">
  	</div>
      <p> Completati doar campurile la care aduceti modificari.</p>
    <div class="input-group">
  	  <label>Locuri</label>
  	  <input type="locuri" name="locuri" value="<?php echo $locuri; ?>">
  	</div>

    <div class="input-group">
  	  <label>KM</label>
  	  <input type="km" name="km" value="<?php echo $km; ?>">
  	</div>

    <div class="input-group">
  	  <label>Consum</label>
  	  <input type="consum" name="consum" value="<?php echo $consum; ?>">
  	</div>

    
    <div class="input-group">
  	  <button type="submit" class="btn" name="update_autocar">Done</button>
  	</div>

	  <p> <a href="autocar.php" style="color: green;">back</a> </p>

</form>
</body>
</html>