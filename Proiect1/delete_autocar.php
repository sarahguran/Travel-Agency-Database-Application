<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="header">
  	<h2>Delete</h2>
  </div>

<form method="post" action="delete_autocar.php">
 <?php include('errors.php'); ?>


  <div class="input-group">
  	  <label>Nr_Inmatriculare_Autocar</label>
  	  <input type="text" name="nrinmatr" value="<?php echo $nrinmatr; ?>">
  </div>

  <div class="input-group">
  	  <button type="submit" class="btn" name="delete_autocar">Done</button>
  </div>


  <p> <a href="autocar.php" style="color: green;">back</a> </p>


</form>
</body>
</html>